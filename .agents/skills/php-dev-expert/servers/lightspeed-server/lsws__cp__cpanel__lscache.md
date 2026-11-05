# LSCache with LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/lscache/

---

# LiteSpeed Cache Engine Setup[¶](#litespeed-cache-engine-setup "Permanent link")

A shared hosting provider may want to maintain server-wide control over the enabling and disabling of cache-related services. These services include caching itself as well as the ESI and Crawler functions available with our WordPress LSCache Plugin. By disabling the cache globally and enabling it for a particular virtual host, shared hosting providers have different levels of control and may offer LSCache as an add-on service to their customers.

Warning

The default LiteSpeed Cache settings work well with most caching scenarios. We strongly recommend that you do not change any of the **Server Level** default cache policy settings. Leave them as `Not Set`.

[![!lscache-lsws-console](../images/lscache01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/lscache01.png)

Note

`esi` and `crawler` are disabled by default during the initial installation and you will need to enable them specifically.

## Cache Root Setup[¶](#cache-root-setup "Permanent link")

You may set up the Cache Root in one of three ways:

- WHM Plugin (Preferred)
- Command Line Script
- Manually from the Command Line

Warning

Please never set cache root to `/tmp/` folder.

### Via WHM Plugin[¶](#via-whm-plugin "Permanent link")

The preferred way to set up the needed cache root for each vhost is through the WHM plugin. Detailed steps on how to do this can be found [here](lsws__cp__cpanel__whm-litespeed-plugin__wp-cache-management.md#cache-root-setup).

### Command Line Script[¶](#command-line-script "Permanent link")

You may use the command line instead of the WHM plugin. Simply run the following script, which will set server level and virtual host level cache roots and cache policies:

```
bash <(curl https://www.litespeedtech.com/packages/lscache/set_cache_root_policy.sh)
```

This script does not enable cache lookup for users. You can either use the LiteSpeed WordPress Cache Management tools in the LiteSpeed WHM Plugin to manage this in bulk, or add the `CacheLookup` directive to `.htaccess` files for individual users manually. This can be done by either the server administrator or the user by adding the following lines:

```
<IfModule LiteSpeed>
  CacheLookup on
</IfModule>
```

### Set Server-Level Cache Root Manually[¶](#set-server-level-cache-root-manually "Permanent link")

Add the following lines to the Apache file `/etc/apache2/conf.d/includes/pre_main_global.conf`.

```
<IfModule Litespeed>
CacheRoot /home/lscache/
</IfModule>
```

Note

```
It is recommended that you set the server level cache root to `/home/lscache/` or a disk partition with enough space.
```

### Set Virtual-Host-Level Cache Root for all Virtual Hosts Manually[¶](#set-virtual-host-level-cache-root-for-all-virtual-hosts-manually "Permanent link")

Create a `lscache_vhosts.conf` file in the Apache directory

```
/etc/apache2/conf.d/userdata/
```

If these directories do not exist, create them. Your `lscache_vhosts.conf` file should contain the following lines:

```
<IfModule Litespeed>
  CacheRoot lscache
</IfModule>
```

This is done to set each virtual host's cache directory to its home directory (`/home/<user>/lscache`).

Apply these changes to all virtual hosts by running the following command:

```
/scripts/ensure_vhost_includes --all-users
```

Note

You only need to run this command once and it will activate for all users, including new users created later by WHM. There is no need to edit the cPanel skeleton file.

### Set Virtual-Host-Level Cache Root for a Single VHost Manually[¶](#set-virtual-host-level-cache-root-for-a-single-vhost-manually "Permanent link")

**Example:** Apache 2.4 installations with an HTTP site

Create a file named `lscache_vhost.conf` in the Apache directory

```
/etc/apache2/conf.d/userdata/a/std/2_4/<user>/<domain>/
```

If your site supports HTTPS (SSL), please also change that working directory to:

```
/etc/apache2/conf.d/userdata/ssl/2_4/<user>/<domain>/
```

If this directory does not exist, create it. Add the following lines to the file:

```
<IfModule Litespeed>
CacheRoot lscache
</IfModule>
```

This will set the cache directory for this virtual host to `/home/<user>/lscache`. Apply these changes to this virtual host by running the `ensure_vhost_includes` script with the following flag:

```
/scripts/ensure_vhost_includes --user=$user
```

Note

If different vhosts share the same document root, these vhosts have to share the same vhost-level cache root directory.

Add the following Apache-style configuration directive in your application level document root `.htaccess` file to enable cache lookup.

```
<IfModule LiteSpeed>
  CacheLookup public on
</IfModule>
```

After applying your cache storage settings, perform a graceful restart of LiteSpeed Web Server to have these changes take effect. LiteSpeed Web Server will automatically create cache root directories with proper permissions. Users don't need to manually create any cache root directories themselves.

```
service lsws restart
```

### Advanced Cache Root Setup[¶](#advanced-cache-root-setup "Permanent link")

#### Setting Cache Root to a Secondary Disk (with CageFS)[¶](#setting-cache-root-to-a-secondary-disk-with-cagefs "Permanent link")

In some environments, you might run with normal hard drives for `/home`, but you want to place your `lscache` data on SSDs, such as `/ssdcache/lscache`. This requires a bit of special configuration both within your CacheRoot setting as well as CageFS. Make sure that your secondary disk is mounted on `/ssdcache` and that the directory `lscache` exists.

Within `/etc/apache2/conf.d/userdata/lscache_vhosts.conf`, you'll have to add the following content:

```
<IfModule Litespeed>
  CacheRoot /ssdcache/lscache/$vh_user
</IfModule>
```

The above three lines will tell LiteSpeed that the vhost-level cache corresponds to a dynamic LSCache folder which matches the user of the VirtualHost. This will ensure that the cache for each customer gets separated. If you're using CageFS, you also need to expose this within the caged environment. Luckily, it's rather easy to do!

In your `/etc/cagefs/cagefs.mp` file, you can add the line:

```
%/ssdcache/lscache
```

By using `%` in front of the path, it utilizes the "split by username" functionality added in CageFS 5.3.1, so what will be exposed within CageFS will be `/ssdcache/lscache/$user`. To apply the above changes, we first rebuild the httpd configuration in cPanel and restart LiteSpeed:

```
/scripts/rebuildhttpdconf
/scripts/restartsrv_httpd
```

Afterwards, we have to remount CageFS for all users, so the new path becomes available within CageFS:

```
cagefsctl --remount-all
```

Your LSCache data will now be stored on the SSD instead!

## Crawler[¶](#crawler "Permanent link")

Since LSWS v5.1.16+, there are four different approaches you can take to crawling on your server:

- You can disable it for the entire server
- You can disable it for the entire server, and selectively enable it for specific vHosts
- You can enable it for the entire server
- You can enable it for the entire server, and selectively disable it for specific vHosts

### Enabling the Crawler and ESI[¶](#enabling-the-crawler-and-esi "Permanent link")

To enable the crawler, you need to add the "Crawler Snippet" below to the appropriate Apache file:

**Server Level**

```
/etc/apache2/conf.d/includes/pre_main_global.conf
```

**Global Virtual Host Level**

```
/etc/apache2/conf.d/userdata/
```

**Individual Virtual Host Level**

```
/etc/apache2/conf.d/userdata/std/2_4/<user>/<domain>/
```

If your site supports HTTPS (SSL), please also change that working directory to:

```
/etc/apache2/conf.d/userdata/ssl/2_4/<user>/<domain>/
```

Here's the snippet:

```
<IfModule Litespeed>
  CacheEngine on crawler
</IfModule>
```

Here it is with both crawler and ESI enabled :

```
<IfModule Litespeed>
  CacheEngine on esi crawler
</IfModule>
```

After you've added the Crawler Snippet in the appropriate location, you should gracefully restart the server.

```
service lsws restart
```

### Limiting the Crawler[¶](#limiting-the-crawler "Permanent link")

Currently LiteSpeed Web Server supports the following variables:

- `CRAWLER_USLEEP` puts a minimum allowed value on the **Delay** field.
- `CRAWLER_LOAD_LIMIT` sets a default for the **Server Load Limit** field.
- `CRAWLER_LOAD_LIMIT_ENFORCE` sets a maximum allowed value on the **Server Load Limit** field.

To use these variables, add them one per line to the apache configuration file. For example:

```
<IfModule LiteSpeed>
  CacheEngine on crawler
  SetEnv CRAWLER_USLEEP 1000
  SetEnv CRAWLER_LOAD_LIMIT 5.2
</IfModule>
```

### Disabling the Crawler[¶](#disabling-the-crawler "Permanent link")

For LSWS v5.3.5+ and later, you can add `CacheEngine -crawler` to the Apache virtual host configuration, like so, to disable the crawler:

```
<IfModule LiteSpeed>
  CacheEngine -crawler
</IfModule>
```
