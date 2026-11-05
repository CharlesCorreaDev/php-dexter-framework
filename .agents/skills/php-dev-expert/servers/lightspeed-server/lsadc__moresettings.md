# More Settings | Configuration | LiteSpeed Web ADC | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsadc/moresettings/

---

# Additional Configuration[¶](#additional-configuration "Permanent link")

Tip

Before adjusting the settings in this section, please perform [Basic Configuration](lsadc__settings.md) tasks.

## High Availability[¶](#high-availability "Permanent link")

LiteSpeed Web ADC's High Availability (HA) configuration provides a failover setup for two ADC Nodes. When one node is temporarily unavailable, the other one will automatically detect and take over the traffic.

Two ADC nodes will need to be set up individually.

Once they are set up, LiteSpeed Web ADC HA will use Keepalived to detect the failover.

We will set up two nodes, using the following values as an example:

- **Node1**: `10.10.30.96`
- **Node2**: `10.10.30.97`
- **Virtual IP**: `10.10.31.31`

### Install and Configure Keepalived[¶](#install-and-configure-keepalived "Permanent link")

Before you configure ADC HA, You should install Keepalived on both **Node1** and **Node2**.

On CentOS:

```
yum install keepalived
```

On Ubuntu/Debian:

```
apt-get install keepalived
```

Start Keepalived:

```
service keepalived start
```

You also need to set up autorestart during the system reboot:

```
systemctl enable keepalived
```

or

```
chkconfig keepalived on
```

The Keepalived configuration file is located at `/etc/keepalived/keepalived.conf`, but you should not edit this configuration file directly. Instead, you should use **ADC Web Admin GUI > HA config** to add or configure a Virtual IP. If you manually add a VIP to Keepalived config, it won't be picked up by ADC HA. The VIP configuration under the ADC's **HA** tab is a GUI to update the Keepalived config file.

Tip

You should always use the WebAdmin GUI to manage VIPs if you want to see them in the status.

### Configure High Availability[¶](#configure-high-availability "Permanent link")

We assume you have configured the listener, virtual host and backend clusterHTTP on both **Node1** and **Node2** seperately.

Tip

With IP failover, we recommend listening on `*:<port>`, instead of individual `<IP>:<port>`.

#### Node1[¶](#node1 "Permanent link")

Log in to **Node1**'s ADC Web Admin Console. This is our example configuration:

[![!Node1 example configuration](../images/moresettings01.png)](https://docs.litespeedtech.com/lsadc/images/moresettings01.png)

- **Server Address**: `10.10.30.96:11122`
- **Replication Cluster**: `10.10.30.96:11122,10.10.30.97:11122`
- **Heart Beat Interval (secs)**: `10`
- **Heart Beat Timeout (secs)**: `30`
- **Is Gzip Stream**: `Yes`
- **Enable incremental sync**: `Yes`
- **Is File Cache Enabled**: `Yes`
- **File Cache Server Address**: `10.10.30.96:1447`

Click **Add** in **HA Interfaces** to add a Virtual IP, like so:

[![!Add a VIP for Node1](../images/moresettings02.png)](https://docs.litespeedtech.com/lsadc/images/moresettings02.png)

- **Interface ID**: `5`
- **Virtual IP**: `10.10.31.31`
- **VIP ID**: `110`
- **VIP Token**: `test123`
- **NIC Name**: `ens160`
- **Priority**: `170`

After a VIP has been added through the GUI, the configuration will be added to the Keepalived configuration at `/etc/keepalived/keepalived.conf`, and it will look like this:

```
###### start of VI_5 ######
vrrp_instance VI_5 {
  state BACKUP
  interface ens160
  lvs_sync_daemon_inteface ens160
  garp_master_delay 2
  virtual_router_id 110
  priority 170
  advert_int 1
  authentication {
      auth_type PASS
      auth_pass test123
  }
  virtual_ipaddress {
      10.10.31.31
  }
}
###### end of VI_5 ######
```

#### Node2[¶](#node2 "Permanent link")

Login to **Node2**'s, ADC Web Admin Console. This is our example configuration:

- **Server Address**: `10.10.30.97:11122`
- **Replication Cluster**: `10.10.30.96:11122,10.10.30.97:11122`
- **Heart Beat Interval (secs)**: `10`
- **Heart Beat Timeout (secs)**: `30`
- **Is Gzip Stream**: `Yes`
- **Enable incremental sync**: `Yes`
- **Is File Cache Enabled**: `Yes`
- **File Cache Server Address**: `10.10.30.97:1447`

Click **Add** in **HA Interfaces** to add a Virtual IP, like so:

- **Interface ID**: `5`
- **Virtual IP**: `10.10.31.31`
- **VIP ID**: `110`
- **VIP Token**: `test123`
- **NIC Name**: `ens160`
- **Priority**: `150`

After a VIP has been added through the GUI, the configuration will be added to the Keepalived configuration at `/etc/keepalived/keepalived.conf`, and it will look like this:

```
###### start of VI_5 ######
vrrp_instance VI_5 {
  state BACKUP
  interface ens160
  lvs_sync_daemon_inteface ens160
  garp_master_delay 2
  virtual_router_id 110
  priority 150
  advert_int 1
  authentication {
      auth_type PASS
      auth_pass test123
  }
  virtual_ipaddress {
      10.10.31.31
  }
}
###### end of VI_5 ######
```

Notes

1. **Node1** `virtual_router_id` should be the same as **Node2**
2. `state MASTER`/`BACKUP` doesn't really matter, since the higher priority one will always be MASTER.

### Test IP Failover[¶](#test-ip-failover "Permanent link")

IP failover is completely managed by Keepalived. The ADC just adds a configuration management interface. IP failover only happens when one server is completely down. The other server will then take over the IP. Shuting down LS ADC won't trigger an IP failover.

It's a good idea to test IP failover. Here's how:

#### Check Master Node[¶](#check-master-node "Permanent link")

The master node is currently **Node1**, `10.10.30.96`. Run `ip a`, and you should get similar output to this:

```
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
  link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
  inet 127.0.0.1/8 scope host lo
     valid_lft forever preferred_lft forever
  inet6 ::1/128 scope host 
     valid_lft forever preferred_lft forever
2: ens160: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc fq_codel state UP group default qlen 1000
  link/ether 00:0c:29:c4:09:80 brd ff:ff:ff:ff:ff:ff
  inet 10.10.30.96/16 brd 10.10.255.255 scope global ens160
     valid_lft forever preferred_lft forever
  inet 10.10.31.31/32 scope global ens160
     valid_lft forever preferred_lft forever
  inet6 fe80::20c:29ff:fec4:980/64 scope link 
     valid_lft forever preferred_lft forever
```

You can see the VIP `10.10.31.31`.

#### Check Backup Node[¶](#check-backup-node "Permanent link")

The backup node is currently **Node2**, `10.10.30.97`. Run `ip a`, and you should get similar output to this:

```
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
  link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
  inet 127.0.0.1/8 scope host lo
     valid_lft forever preferred_lft forever
  inet6 ::1/128 scope host 
     valid_lft forever preferred_lft forever
2: ens160: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc fq_codel state UP group default qlen 1000
  link/ether 00:0c:29:95:67:6d brd ff:ff:ff:ff:ff:ff
  inet 10.10.30.97/16 brd 10.10.255.255 scope global ens160
     valid_lft forever preferred_lft forever
  inet6 fe80::20c:29ff:fe95:676d/64 scope link 
     valid_lft forever preferred_lft forever
```

You don't see VIP on **Node2**, because VIP is active on **Node1**. This is how it should work.

#### Shut Down Master[¶](#shut-down-master "Permanent link")

If you shut down the master (**Node1**), then the VIP `10.10.31.31` should be automatically migrated to the backup server (**Node2**). You can check `ip a` after shutting down the master server:

```
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000                                                                            
  link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00                                                                                                              
  inet 127.0.0.1/8 scope host lo                                                                                                                                     
     valid_lft forever preferred_lft forever
  inet6 ::1/128 scope host 
     valid_lft forever preferred_lft forever
2: ens160: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc fq_codel state UP group default qlen 1000
  link/ether 00:0c:29:95:67:6d brd ff:ff:ff:ff:ff:ff
  inet 10.10.30.97/16 brd 10.10.255.255 scope global ens160
     valid_lft forever preferred_lft forever
  inet 10.10.31.31/32 scope global ens160
     valid_lft forever preferred_lft forever
  inet6 fe80::20c:29ff:fe95:676d/64 scope link 
     valid_lft forever preferred_lft forever
```

As you can see, VIP `10.10.31.31` is assigned to **Node2** now.

### Fixing Out of Sync Replication[¶](#fixing-out-of-sync-replication "Permanent link")

YOu can check HA status by clicking the **Status** tab in the **HA** section. Sometimes you may see that replication is out of sync.

[![](../images/moresettings03.png)](https://docs.litespeedtech.com/lsadc/images/moresettings03.png)

There are a few possible causes:

1. If one ADC instance is down, the replication will be out of sync, That's expected. The ADC will try to restore synchronization in a short time.
2. Make sure **Node1** and **Node2** are configured the same way. If they are configured differently, you cannot expect HA/Replication to work.

### Testing VIP[¶](#testing-vip "Permanent link")

Try accessing `10.10.31.31` (VIP) from the browser. You will see the backend server page. Disable one node, and you should still see the webpage. Check ADC HA status. The live node will become the Master when the other one is down.

### Syncing Cache[¶](#syncing-cache "Permanent link")

Cache purge is automatically synced between two HA nodes. When a node receives a purge request, the cached file will not be deleted immediately. It will be regenerated when a new request for that URL is received.

Further cache replication can be enabled or disabled as desired. To enable cache replication, navigate to **ADC WebAdmin Console > Configuration > HA** and set **Enable Replication for Cached Data** to `Yes`.

[![!Enable cache replication](../images/moresettings04.png)](https://docs.litespeedtech.com/lsadc/images/moresettings04.png)

When replication is enabled, caches are synced between the HA ADC nodes. When the backend LiteSpeed Cache plugin sends a cache request to the live ADC, that request will be synced with the nodes.

Notes

1. Replication happens only between two front end High Availability ADCs, and *not* backend cluster web servers. Avoid caching on the cluster-server-node layer, as cached data within web server nodes will not be purged properly and will no longer be synchronized. In a clustered environment, LSCache data should *only be maintained at the ADC layer*.
2. Only LSCache data is synced between two HA ADCs. *Configuration is not synced*. Therefore, the ADCs must be manually configured independently to serve the same sites.

## PageSpeed[¶](#pagespeed "Permanent link")

Warning

We no longer recommend using PageSpeed. The module has not been maintained for some time now, and as such, it may cause stability issues.

### Server Level Configuration[¶](#server-level-configuration "Permanent link")

Log into LiteSpeed ADC WebAdmin Console, **Configuration > Server > PageSpeed**

[![!Configure PageSpeed](../images/moresettings05.png)](https://docs.litespeedtech.com/lsadc/images/moresettings05.png)

**Load Module**: This is the master switch, and must be enabled to activate PageSpeed, otherwise none of following settings will take effect.

**Enable PageSpeed**: This can be set either at the server level or vhost level. Vhost level settings will override those at the server level.

**PageSpeed Settings**: This will vary according to your usage, but we will use the following as an example:

```
    pagespeed FileCachePath /tmp/lshttpd/pagespeed;
    pagespeed RewriteLevel CoreFilters;
```

Note

Please be aware, improper settings may break the content of sites or some static files like JS/CSS.

### Vhost Level Configuration[¶](#vhost-level-configuration "Permanent link")

In this example we've used the same settings as we did at the server level.

[![!Configure VHost](../images/moresettings06.png)](https://docs.litespeedtech.com/lsadc/images/moresettings06.png)

After configuration is complete, run a graceful restart to apply the settings.

### Verify[¶](#verify "Permanent link")

[![!Response Header Before](../images/moresettings07.png)](https://docs.litespeedtech.com/lsadc/images/moresettings07.png)

We can verify PageSpeed by checking the HTTP response header. Before PageSPeed is activated, in this example, the page size is 254 KB, wwith 17 requests.

[![!Response Header After](../images/moresettings08.png)](https://docs.litespeedtech.com/lsadc/images/moresettings08.png)

After PageSpeed is activated, we can see that the page size has been reduced to 196 KB and requests are down to 14 requests. Also there is now an `x-ls-pagespeed` header.

## GeoIP[¶](#geoip "Permanent link")

There are two location database settings in LiteSpeed Web ADC's WebAdmin Console: **IP to GeoLocation DB** for the MaxMind legacy database and the MaxMind GeoIP2 database, and **IP2Location DB** for the [IP2Location database](https://www.ip2location.com/).

Tip

We will explain how to set up both types of Geolocation database, but you will not need to use both. You can only use one location database at a time, so choose your favorite and stick with that one.

Setting up and enabling GeoIP on LiteSpeed ADC involves choosing a database, downloading and installing the database to a directory, setting up the database path in ADC Admin, enabling geolocation lookup, setting rewrite rules, and finally, running some tests.

[![!](../images/moresettings09.png)](https://docs.litespeedtech.com/lsadc/images/moresettings09.png)

Set **Enable GeoLocation Lookup** to `Yes`. This must be set, if you want Geolocation to work on Web ADC.

### Download and Configure[¶](#download-and-configure "Permanent link")

Choose your favorite database: MaxMind GeoIP2, MaxMind Legacy Database, or IP2location database. Then, set up the correct database path in the appropriate section in the ADC WebAdmin Console, as described.

#### MaxMind GeoIP2 Database[¶](#maxmind-geoip2-database "Permanent link")

Note

If you have switched from the MaxMind GeoIP2 service to an IP2location database, many of your PHP scripts may still make use of the `GEOIP_*` environment variables `$SERVER['GEOIP_COUTRY_CODE']` and `$SERVER['GEOIP_ADDR']`. Because it may be impossible to remove these environment variables, all recent versions of LiteSpeed Web ADC automatically map `GEOIP_COUNTRY_CODE` to `IP2LOCATION_COUNTRY_SHORT` and `GEOIP_ADDR` to `IP2LOCATION_ADDR` in order to address this problem.

##### Download[¶](#download "Permanent link")

Register for a MaxMind account and obtain a license key, then [download a GeoLite2 database](https://blog.maxmind.com/2019/12/18/significant-changes-to-accessing-and-using-geolite2-databases/).

After download, you can unzip it:

```
tar -zxvf GeoLite2-Country_00000000.tar.gz
```

(Be sure to replace `00000000` with the correct digits in the filename of your downloaded DB.)

Move the unzipped file `GeoLite2-Country.mmdb` to `/usr/share/GeoIP/GeoLite2-Country.mmdb`.

##### Configure[¶](#configure "Permanent link")

Navigate to **Configuration > Server > General**, and click **Add** in the **MaxMind GeoIP DB** section. Set **DB File Path** to the database path. Then set **DB Name** to `COUNTRY_DB` or `CITY_DB`. Your choice of DB name is important: you must use `COUNTRY_DB` for a country database, and `CITY_DB` for a city database. These two fields are mandatory and cannot be left blank.

**Environment Variables** and **Notes** are optional.

The full power of GeoIP2 depends on the use of environment variables in the LiteSpeed configuration. The format used is designed to be as similar as possible to the Apache `mod_maxminddb` environment described [here](https://github.com/maxmind/mod_maxminddb), specifically for the `MaxMindDBEnv` variable. Each environment variable is specified in the environment text box as one line:

- The name of the environment variable that will be exported, for example `GEOIP_COUNTRY_NAME`
- A space
- The logical name of the environment variable, which consists of:
  - The name of the database as specified in the **DB Name** field as the prefix. For example, `COUNTRY_DB`
  - A forward slash `/`
  - The name of the field as displayed in `mmdblookup`. For example: `country/names/en`

Thus the default generates `GEOIP_COUNTRY_NAME COUNTRY_DB/country/names/en`.

If you wanted the country code to be displayed in Spanish, you would enter the environment variable `GEOIP_COUNTRY_NAME COUNTRY_DB/country/names/es`.

Note that if a variable is used by multiple databases (for example, the default `GEOIP_COUNTRY_NAME`), you need to override the value in the last database specified (or all databases in case they get reordered, just to be safe).

Note that `subdivisions` is an array and must be referenced by index (usually `0` or `1`).

The default environment variables vary by database and are designed to be as similar to the legacy GeoIP environment variables as possible.

Our default list is:

- **GEOIP\_COUNTRY\_CODE**: `/country/iso_code`
- **GEOIP\_CONTINENT\_CODE**: `/continent/code`
- **GEOIP\_REGION**: `/subdivisions/0/iso_code`
- **GEOIP\_METRO\_CODE**: `/location/metro_code`
- **GEOIP\_LATITUDE**: `/location/latitude`
- **GEOIP\_LONGITUDE**: `/location/longitude`
- **GEOIP\_POSTAL\_CODE**: `/postal/code`
- **GEOIP\_CITY**: `/city/names/en`

You can customize the configuration to add the environment variables you want as describe above.

Example

You can create a **MyTest\_COUNTRY\_CODE** variable, like so:

```
MyTest_COUNTRY_CODE CITY_DB/country/iso_code
```

[![!](../images/moresettings10.png)](https://docs.litespeedtech.com/lsadc/images/moresettings10.png)

If you do set your own variables, please be careful to use the correct entry names. For example, `GEOIP_REGION_NAME CITY_DB/subdivisions/0/name/en` would be incorrect, as `name` should be `names`.

Example

You can create a **MyTest2\_COUNTRY\_CODE** variable by using a defined **COUNTRY DB** name `COUNTRY_DB_20190402` with a country database.

```
MyTest2_COUNTRY_CODE COUNTRY_DB_20190402/country/iso_code
```

[![!](../images/moresettings11.png)](https://docs.litespeedtech.com/lsadc/images/moresettings11.png)

Example

You can define a list of variables, one per line, like so:

```
HTTP_GEOIP_CITY CITY_DB/city/names/en
HTTP_GEOIP_POSTAL_CODE CITY_DB/postal/code
HTTP_GEOIP_CITY_CONTINENT_CODE CITY_DB/continent/code
HTTP_GEOIP_CITY_COUNTRY_CODE CITY_DB/country/iso_code
HTTP_GEOIP_CITY_COUNTRY_NAME CITY_DB/country/names/en
HTTP_GEOIP_REGION CITY_DB/subdivisions/0/iso_code
HTTP_GEOIP_LATITUDE CITY_DB/location/latitude
HTTP_GEOIP_LONGITUDE CITY_DB/location/longitude
```

[![!](../images/moresettings12.png)](https://docs.litespeedtech.com/lsadc/images/moresettings12.png)

#### IP2Location Database[¶](#ip2location-database "Permanent link")

Download the IP2Location Database from [the IP2Location website](https://www.ip2location.com/).

Click **Edit** in the **IP2Location DB** section, and set **IP2Location DB File Path** to the location of the downloaded database.

### Testing[¶](#testing "Permanent link")

This example test case redirects all US IPs to the `/en/` site for the **example.com** virtual host.

Navigate to **Virtual Hosts > example.com > Rewrite Control > Rewrite**, and set **Enable Rewrite** to `Yes`.

Then add the following to **Rewrite Rules**:

```
RewriteCond %{ENV:GEOIP_COUNTRY_CODE} ^US$
RewriteRule ^.*$ https://example.com/en [R,L]
```

[![!](images/moresettings_adc-geoip-2-vh-rewriterules.png)](https://docs.litespeedtech.com/lsadc/moresettings/images/moresettings_adc-geoip-2-vh-rewriterules.png)

Visit `example.com` through a US IP, and it should redirect to `https://example.com/en` successfully.

Visiting `example.com` through a non-US IP should not redirect at all.

## Custom Headers[¶](#custom-headers "Permanent link")

You can send extra custom headers to the backend server.

There are standard headers for Reverse Proxy HTTPS traffic, such as `X-Forwarded-For` and `X-Forwarded-Proto`. LiteSpeed ADC adds these request headers in order to pass information to the origin backend web servers.

Tip

Be careful when using these headers on the origin server, since they will contain more than one (comma-separated) value if the original request already contains one of these headers.

If you need to specify custom request headers to be added to the forwarded request, you can do so, in the manner of Apache's mod\_headers `RequestHeader` directive.

Navigate to **Configuration > Clusters > [example cluster] > Session Management** and click **Edit**. Set **Forwarded By Header** to the custom header value you wish to add to all proxy requests that are made to the backend server.

Example

`X-Forwarded-By`

## Advanced Reverse Proxy[¶](#advanced-reverse-proxy "Permanent link")

We've [covered](#configuration) how to set up a simple reverse proxy, but it requires the request URI to be the same in the frontend as in the backend, otherwise a 404 Not Found Error would be returned.

It is possible to set up a more advanced reverse proxy, which would allow you to proxy a frontend URI to a different backend URI, and mask the URI path.

### Preparation[¶](#preparation "Permanent link")

We will use 3 test servers as examples with the following domains:

- `adc.litespeed.dev`
- `adc2.litespeed.dev`
- `adc3.litespeed.dev`

`adc.litespeed.dev` will be the main server and other two are served for different backends.

With each server, we create a PHP file with the following code:

```
<?php
echo "SCRIPT_FILENAME: ".$_SERVER["SCRIPT_FILENAME"]."<br>";
echo "SERVER ADDR: ".$_SERVER["SERVER_ADDR"]."<br>";
echo "HTTP_HOST: ".$_SERVER['HTTP_HOST']."<br>";
```

[![!](../images/moresettings13.jpg)](https://docs.litespeedtech.com/lsadc/images/moresettings13.jpg)

If we run this PHP file on each server, we it will show us which backend we are requesting with.

[![!](../images/moresettings14.jpg)](https://docs.litespeedtech.com/lsadc/images/moresettings14.jpg)

We also need to create three cluster backends that match each domain to its real IP, because ADC will redirect/proxy the request to a cluster worker to do the proxy.

We have two methods to do this, via `RewriteRule` or `Context`:

### RewriteRules[¶](#rewriterules "Permanent link")

In the ADC WebAdmin **Virtual Host > Rewrite** tab, enable rewrite rules and add the following rule:

```
RewriteRule ^(.*)$ http://adc2/$1 [P,E=Proxy-Host:adc2.litespeed.dev]
```

[![!](../images/moresettings15.jpg)](https://docs.litespeedtech.com/lsadc/images/moresettings15.jpg)

In this example, `adc2` is the cluster name, and `adc2.litespeed.dev` is the backend domain. You may get 404 errors if the hostname doesn't match in the backend.

Save your changes, restart the ADC, and visit `adc.litespeed.dev` again. You will see it is now proxied to `adc2.litespeed.dev`.

[![!](../images/moresettings16.jpg)](https://docs.litespeedtech.com/lsadc/images/moresettings16.jpg)

Now that you know that works, you can use `RewriteCond` and `RewriteRule` to further customize the scenarios you expect to encounter.

Example

To proxy a request URI that contains the query string `adc2` to `adc2.litespeed.dev`, and on where the URI contains the query string `adc3` to `adc3.litespeed.dev`, we would use the following ruleset:

```
RewriteCond %{QUERY_STRING} adc2
RewriteRule ^(.*)$ http://adc2/$1 [P,E=Proxy-Host:adc2.litespeed.dev,L]

RewriteCond %{QUERY_STRING} adc3
RewriteRule ^(.*)$ http://adc3/$1 [P,E=Proxy-Host:adc3.litespeed.dev,L]
```

[![!](images/moresettings_adc-adv-proxy-5.jpg)](https://docs.litespeedtech.com/lsadc/moresettings/images/moresettings_adc-adv-proxy-5.jpg)

You will find that visits to `adc.litespeed.dev/index.php?adc2` are proxied to `adc2.litespeed.dev` and visits to `adc.litespeed.dev/index.php?adc3` are proxied to `adc3.litespeed.dev`.

We can also rewrite the URI path where we will create a file `new-uri.php` with same PHP code

Example

This time we will rewrite `adc.litespeed.dev/index.php?rewrite` to `adc3.litespeed.dev/new-uri.php` with the following ruleset:

```
RewriteCond %{QUERY_STRING} rewrite
RewriteRule ^(.*)$ http://adc3/new-uri.php$1 [P,E=Proxy-Host:adc3.litespeed.dev]
```

[![!](images/moresettings_adc-adv-proxy-6.jpg)](https://docs.litespeedtech.com/lsadc/moresettings/images/moresettings_adc-adv-proxy-6.jpg)

### Contexts[¶](#contexts "Permanent link")

This works pretty much the same as with the previous rewrite rules, so we will use the same examples as before.

To proxy `adc.litespeed.dev/index.php` to `adc2.litespeed.dev/index.php` configure the context like so:

[![!](images/moresettings_adc-adv-proxy-7.jpg)](https://docs.litespeedtech.com/lsadc/moresettings/images/moresettings_adc-adv-proxy-7.jpg)

- **URI**: `/index.php`
- **Cluster**: `adc2`
- **Enable Rewrite**: `Yes`
- **Rewrite Rules**:

  ```
  RewriteRule ^(.*) - [E=Proxy-Host:adc2.litespeed.dev]
  ```

You need to use **Rewrite Rules** to alter the hostname, otherwise you will have 404 errors.

Note

Contexts have a dedicated cluster and do not support query strings, so you may not be able to proxy to different backends by query string like the earlier rewrite rule examples.

Example

Here we will proxy `adc.litespeed.dev/adc3` to `adc3.litespeed.dev/new-uri.php` with the following settings:

[![!](images/moresettings_adc-adv-proxy-8.jpg)](https://docs.litespeedtech.com/lsadc/moresettings/images/moresettings_adc-adv-proxy-8.jpg)

- **URI**: `/adc3`
- **Cluster**: `adc3`
- **Enable Rewrite**: `Yes`
- **Rewrite Rules**:

  ```
  RewriteRule ^(.*)$ http://adc3/new-uri.php$1 [P,E=Proxy-Host:adc3.litespeed.dev]
  ```

Note

In **Rewrite Rules**, the `E=Proxy-Host` flag is needed if the backend is served on a different domain.

### Another Example[¶](#another-example "Permanent link")

In this example , we will proxy context `https://adc1.litespeed.dev/litespeed/` to `https://adc3.litespeed.dev/litespeed2/`

1. Make sure both servers are set up correctly. Use local host file to bypass DNS for testing purposes.
2. Create a new cluster if `adc3.litespeed.dev` is on a different backend server. This step can be ignored if the targeted domain is on same cluster.
3. Create a new context, like so:
   - **URI**: `/litespeed/`
   - **Cluster**: newly created cluster, or the existing cluster where targeted domain exists
   - **Enable Rewrite**: `Yes`
   - **Rewrite Base** to `/` (This setting is required in this example, in order to prevent a rewrite rule loop and 404 errors.)
   - **Rewrite Rules**:

     ```
     RewriteCond %{REQUEST_URI} !litespeed2 [NC]
     RewriteRule "(.*)" "litespeed2/$1" [L,E=Proxy-Host:adc3.litespeed.dev]
     ```

To test the configuration, visit `https://adc1.litespeed.dev/litespeed/`. The content will be served from `https://adc3.litespeed.dev/litespeed2/`.

## Websocket Support[¶](#websocket-support "Permanent link")

As of v3.1.3, LiteSpeed WebADC can forward websocket connections to clustered LiteSpeed Web Server backends, and LiteSpeed Web Servers can proxy to websocket application servers. The setup is:

websocket client -> ADC -> LSWS -> websocket app server

If a websocket client is able to function directly with LSWS, then it should work properly when WebADC is inserted between the client and LSWS, with no additional ADC configuration required.
