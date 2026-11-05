# LSCache with LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/interworx/lscache/

---

# LiteSpeed Cache Engine Setup[¶](#litespeed-cache-engine-setup "Permanent link")

A shared hosting provider may want to maintain server-wide control over the enabling and disabling of cache-related services. These services include caching itself as well as the ESI and Crawler functions available with our WordPress LSCache Plugin. By disabling the cache globally and enabling it for a particular virtual host, shared hosting providers have different levels of control and may offer LSCache as an add-on service to their customers.

Warning

The default LiteSpeed Cache settings work well with most caching scenarios. We strongly recommend that you do not change any of the **Server Level** default cache policy settings. Leave them as `Not Set`.

[![!lscache-lsws-console](../images/lscache01.png)](https://docs.litespeedtech.com/lsws/cp/interworx/images/lscache01.png)

Note

`esi` and `crawler` are disabled by default during the initial installation and you will need to enable them specifically.

## Set Server-Level Cache Root[¶](#set-server-level-cache-root "Permanent link")

Add the following lines to the `/etc/httpd/conf.d/iworx-support-litespeed.conf` Apache config file.

```
<IfModule Litespeed>
CacheRoot /home/lscache/
</IfModule>
```

Note

We recommend that you set the server level cache root to `/home/lscache/` or a disk partition with enough space.

## Set Virtual-Host-Level Cache Root[¶](#set-virtual-host-level-cache-root "Permanent link")

### For all Virtual Hosts[¶](#for-all-virtual-hosts "Permanent link")

To enable virtual-host-level cache root globally, run the following to edit the global `custom-includes` template:

```
~iworx/bin/config.pex --customize-template http/vhost/custom-includes --for-global
```

Add the following lines and then save and exit the file:

```
<IfModule Litespeed>
CacheRoot lscache
</IfModule>
```

This is done to set each virtual host's cache directory to its home directory (`/home/<user>/lscache`).

More info on using the template system can be found here, on your server: `~iworx/etc/templates/http/vhost/README.md`

### For a Specific Virtual Host[¶](#for-a-specific-virtual-host "Permanent link")

Create a custom include file for the virtual host, for example, `example.com`, at `/home/example/var/example.com/apache/10-interworx-support-litespeed.conf` and add the following contents:

```
<IfModule Litespeed>
CacheRoot lscache
</IfModule>
```

This will set the cache directory for this virtual host to `/home/<user>/lscache`.
