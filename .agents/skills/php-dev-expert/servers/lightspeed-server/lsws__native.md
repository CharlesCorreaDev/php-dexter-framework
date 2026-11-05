# Native Mode | Configuration | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/native/

---

# Configure Native LiteSpeed Web Server[¶](#configure-native-litespeed-web-server "Permanent link")

If you are using LiteSpeed Web Server in Native Mode, configuration will be different than if you are using LiteSpeed as a drop-in replacement for an existing Apache server. In Native Mode, you will start with setting up one or more virtual hosts, and then setting up listeners for the HTTP and HTTPS ports.

## Set up Virtual Hosts[¶](#set-up-virtual-hosts "Permanent link")

With name-based virtual hosting, you can host more than one website (also called a "virtual host" or "vhost") on each IP address. LiteSpeed provides a default virtual host named `DEFAULT`. If you don't need any more virtual hosts, you can skip ahead to [Set up Listeners](#set-up-listeners).

In the following steps we will set up a new virtual host that we'll call `Example`.

### Set up DNS[¶](#set-up-dns "Permanent link")

The domain names used by your virtual hosts will need to be forwarded to your web server's IP address. This is commonly done by adding an `A` record to the DNS zone file for the website. This is not part of LiteSpeed Web Server configuration. Please see your DNS provider for further instruction, if needed.

### Create a new Virtual Host[¶](#create-a-new-virtual-host "Permanent link")

#### Create directories[¶](#create-directories "Permanent link")

To create directories for the new `Example` virtual host, start at the command line. Add an `Example` directory, plus three subdirectories - `conf`, `html`, and `logs` - in your `lsws` directory, like so:

```
mkdir /usr/local/lsws/Example
mkdir /usr/local/lsws/Example/{conf,html,logs}
```

Change the owner of the `conf` directory to `lsadm:lsadm` (the WebAdmin Console user) so that only the WebAdmin Console will have the ability to manipulate Example's configuration:

```
chown lsadm:lsadm /usr/local/lsws/Example/conf
```

#### Add to WebAdmin Console[¶](#add-to-webadmin-console "Permanent link")

Switch to the WebAdmin Console and navigate to **Virtual Hosts > Add**. Configure the settings like so:

- **Virtual Host Name** = `Example`
- **Virtual Host Root** = `$SERVER_ROOT/Example`
- **Config File** = `$SERVER_ROOT/conf/vhosts/Example/vhost.xml`
- **Enable Scripts/ExtApps** = `Yes`
- **Restrained** = `No`

You might see the following warning if you are starting from scratch with this virtual host's configuration. Go ahead and click to create:

```
file /usr/local/lsws/conf/vhosts/Example/vhost.xml does not exist. CLICK TO CREATE
```

Click the **Save** button, return to Example's configuration, and change the following settings under the **General** tab:

- **Document Root** = `/usr/local/lsws/Example/html`
- **Index Files** = `index.html, index.php`

We recommend enabling the Rewrite feature as well. Change the following settings under the **Rewrite** tab:

- **Enable Rewrite** = `Yes`

## Set up Listeners[¶](#set-up-listeners "Permanent link")

### Create a Listener[¶](#create-a-listener "Permanent link")

Navigate to **Listeners** in the WebAdmin Console. There is already a default listener that listens to all IPs on port 8088, but you might want to create another two listeners for both HTTP and HTTPS ports. Here is how:

Click the **Add** button to create an HTTP listener with following settings:

- **Listener Name** = `HTTP`
- **IP Address** = `ANY IPv4`
- **Port** = `80`
- **Secure** = `No`

Click the **Add** button to create an HTTPS listener with following settings:

- **Listener Name** = `HTTPS`
- **IP Address** = `ANY IPv4`
- **Port** = `443`
- **Secure** = `Yes`

To configure SSL on the listener you named `HTTPS`, navigate to **Listeners > HTTPS > SSL**, and click the **Edit** button. Specify the private key and certificate path, then click the **Save** button. Here are some examples, but be sure to use your own correct file path:

Let's Encrypt:

- **Private Key File** = `/etc/letsencrypt/live/example.com/privkey.pem`
- **Certificate File** = `/etc/letsencrypt/live/example.com/fullchain.pem`
- **Chained Certificate** = `Yes`

Temporary WebAdmin certificate or a [private self-signed certificate](https://stackoverflow.com/questions/10175812/how-to-create-a-self-signed-certificate-with-openssl):

- **Private Key File** = `/usr/local/lsws/conf/example.key`
- **Certificate File** = `/usr/local/lsws/conf/example.crt`
- **Chained Certificate** = `Not Set`

Note

For each IP address, only one process each may bind to ports 80 and 443, so you only need one listener for each port. These two listeners may then be mapped to multiple virtual hosts

### Map Virtual Hosts[¶](#map-virtual-hosts "Permanent link")

Navigate to **Listeners > HTTP > Virtual Host Mappings** and click the **Add** button. Use the following values to map the HTTP listener to the Example virtual host:

- **Virtual Host** = `Example`
- **Domains** = `example.com, www.example.com`

Repeat for the HTTPS listener using the exact same settings.

## Set up SSL for Virtual Hosts[¶](#set-up-ssl-for-virtual-hosts "Permanent link")

LiteSpeed Web Server supports Server Name Indication (SNI), allowing users to set SSL certificates at the virtual host level. This is optional, though. If you don't set up SSL at the virtual host level, the HTTPS Listener's SSL settings will be used.

To set up SSL for our Example virtual host in the WebAdmin Console, navigate to **Virtual Hosts > Example > SSL > Edit SSL Private Key & Certificate**.

Update the new SSL settings with the following example as a guide, using your own file paths:

- **Private Key File** = `/usr/local/lsws/conf/example.key`
- **Certificate File** = `/usr/local/lsws/conf/example.crt`
- **Chained Certificate** = `Not Set`

Tip

Virtual host SSL settings override the Listener SSL settings. Even so, you **must not** leave the HTTPS listener's SSL configuration blank.

## Name-Based Virtual Hosting[¶](#name-based-virtual-hosting "Permanent link")

[See our wiki](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:config:name-based-virtual-hosting-setup?do=)

## IP-Based Virtual Hosting[¶](#ip-based-virtual-hosting "Permanent link")

In IP-based virtual hosting, one IP address is dedicated to one virtual host (though one virtual host may have multiple IPs). This allows you to visit a virtual host with a URL like `http://192.168.0.1/index.html`.

Follow the steps below to set up IP-based virtual hosting:

1. Allocate at least one IP address for each website you plan to host. (This is not a LiteSpeed Web Server configuration.)
2. Configure DNS properly: Assign each domain name to its corresponding IP address. This is commonly done by adding an `A` name entry to the DNS zone file for the website. (This is not a LiteSpeed Web Server configuration.)
3. Create listeners in the WebAdmin console using **Configuration > Listeners > Add**. You have two choices:
   - Create one listener that listens on all IPs, and configure virtual host mappings to share that one listener as detailed in [Name-Based Virtual Hosting](#name-based-virtual-hosting).
   - Create one listener for each IP. Since each IP address should only map to one virtual host, these listeners do not need to have domain names specified in their virtual host mappings. They can be easily assigned to their corresponding virtual host by only mapping one virtual host in the **Virtual Host Mappings** table and using the wildcard domain name `*`.

Tip

You can create an IP alias to assign multiple IPs to one network adapter.

Note

IP-based hosting can be a simpler organization structure if you already plan to give each website its own IP address.

## Next Step[¶](#next-step "Permanent link")

[Configure PHP](lsws__extapp__php__getting_started.md)
