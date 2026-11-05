# mod_pagespeed in LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/pagespeed/

---

# mod\_pagespeed[¶](#mod_pagespeed "Permanent link")

Warning

Mod\_pagespeed may cause stability issues! Enable mod\_pagespeed AT YOUR OWN RISK! Enabling mod\_pagespeed may cause random server crashes due to bugs in mod\_pagespeed. Please disable mod\_pagespeed if that happens. There is no other way to fix it. Please do NOT contact support about mod\_pagespeed issues.

Note

For WordPress site optimization, LiteSpeed WordPress Cache Plugin is recommended to perform the PageSpeed optimization instead of using the mod\_pagespeed module.

`mod_pagespeed` is a web server module developed by Google. It automatically applies chosen filters to pages and associated assets (stylesheets, JavaScript, and HTML files), as well as to images and website cache requirements. It does not require modifications to existing content or workflow, meaning that all internal optimizations and changes to files are made on the server side, presenting modified files directly to the user.

Since version 5.2, LiteSpeed Web Server provides PageSpeed support. It is possible to enable both PageSpeed and LSCache together in theory, but we don't recommend it.

Note

PageSpeed and LSCache/LiteMage (and all other full page caches) should never be used together in a real production environment.

LSCache is recommended to boost your site performance. When a page is cached, it can no longer be run through PageSpeed for HTML improvements, though the PageSpeed optimizations to CSS, JS, and image files will be in effect. Most importantly, when PageSpeed is used, it generates different output for different browsers, which means that the output is not cache friendly.

## Requirements[¶](#requirements "Permanent link")

- LiteSpeed Web Server v5.2+
- 64-bit Linux

Note

PageSpeed must be enabled via LiteSpeed Web Server native configuration.

## Enable mod\_pagespeed support[¶](#enable-mod_pagespeed-support "Permanent link")

- Navigate to **WebAdmin Console > Configuration > Server > PageSpeed**
- Set **Activate PageSpeed** to `Yes` (the main switch to turn on `mod_pagespeed`)
- Set **Enable PageSpeed** to `No` (do not turn it on at server level)
- Set **PageSpeed Settings** to `pagespeed FileCachePath /tmp/lshttpd/pagespeed;` and add any [additional rule settings](https://www.modpagespeed.com/doc/config_filters) on separate lines

For a control-panel server, PageSpeed must be enabled through Apache configuration. Enabling through LSWS Web Admin will only impact the virtual hosts that were created through the LSWS native configuration. By design, it will not affect any virtual hosts set up through Apache configuration.

To enable PageSpeed, `loadModule` and `FileCachePath` are required at the server level. `ModPagespeedFileCachePath` should not be set at the virtual host level. Enabling independent PageSpeed file cache for each vhost is very costly. It takes a lot of resources and should be avoided in shared hosting environments. `ModPageSpeed On` at the server level will turn on PageSpeed server wide. This is not recommended for shared servers, as PageSpeed can be resource heavy and may negatively impact performance.

Tip

We recommend setting `ModPageSpeed unplugged|off` at the server level, and `ModPageSpeed on` for the vhosts or directories which need it.

- `ModPageSpeed unplugged` bypasses `mod_pagespeed` hooks.
- `ModPageSpeed off` goes through `mod_pagespeed` hooks with PageSpeed turned off.

You can set `ModPagespeed off` in the Apache main configuration and you can use `ModPageSpeed On` to turn it on via virtual host configuration or a `.htaccess` file.

## Install PageSpeed[¶](#install-pagespeed "Permanent link")

### Use EA4 Experimental Repo[¶](#use-ea4-experimental-repo "Permanent link")

The `ea-apache24-mod_pagespeed` package is in the EA4 Experimental repo at the time of this writing so you will need to enable EA4 Experimental repo first. Some servers may not have `EA4-experimental.repo` installed on the server, but you can create one.

```
cd /etc/yum.repos.d
vi EA4-experimental.repo

[EA4-experimental]
name=EA4 Experimental ( EasyApache 4 )
mirrorlist=http://httpupdate.cpanel.net/ea4-experimental-c$releasever-$basearch-mirrorlist
gpgcheck=1
gpgkey=https://securedownloads.cpanel.net/cPanelPublicRPMKey.asc
enabled=1
cost=50

yum install ea-apache24-mod_pagespeed
```

### Check the PageSpeed File[¶](#check-the-pagespeed-file "Permanent link")

The package includes the PageSpeed binary for Apache `modules/mod_pagespeed.so` and conf files such as `conf.modules.d/456_pagespeed.conf`.

```
vi /etc/apache2/conf.modules.d/456_pagespeed.conf
```

Make sure `pagespeed_module` is loaded and `On` and also `ModPagespeedFileCachePath` is set.

```
LoadModule pagespeed_module modules/mod_pagespeed_ap24.so
ModPagespeed on
ModPagespeedFileCachePath  "/var/mod_pagespeed/cache/"
```

Restart LSWS.

```
service lsws restart
```

Note

Turning on PageSpeed through `456_pagespeed.conf` will turn on PageSpeed globally, which is not recommended for a shared hosting environment. We recommend turning off PageSpeed on a global level and only enabling it for the virtual hosts that need it.

### Verify PageSpeed is Enabled[¶](#verify-pagespeed-is-enabled "Permanent link")

Once you have enabled `mod_pagespeed` optimization, you can verify it works by browser developer tools, page source, or third party tools.

#### Method 1: Dev Tool[¶](#method-1-dev-tool "Permanent link")

After enabling the PageSpeed module, you can verify that it is enabled by reviewing the response headers though your browser's developer tools:

[![!Response Headers](../images/pagespeed01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/pagespeed01.png)

You can also check the headers by curl command:

```
curl -s --head http://example.com | grep -i pagespeed
>>> X-LS-Pagespeed: 2.1-1.11.33.4
curl -s --insecure --head https://example.com | grep -i pagespeed
>>> X-LS-Pagespeed: 2.1-1.11.33.4
```

#### Method 2: Page source[¶](#method-2-page-source "Permanent link")

View page source by opening the browser and then pressing **Ctrl+U**.

Without PageSpeed, an image filename in HTML will look like this: `wordpress/wp-content/uploads/2017/09/hero.jpg`

With PageSpeed, an image filename in HTML will look like this: `wordpress/wp-content/uploads/2017/09/hero.jpg.pagespeed.ce.xzcpK71Gsf.jpg`

## Locate the Config File[¶](#locate-the-config-file "Permanent link")

If you see the PageSpeed header and want to locate where PageSpeed was enabled, try the case-insensitive grep from the Apache configuration.

For example, under cPanel environment, go to `/etc/apache2/`, and run the following command:

`grep -r -i --exclude-dir=logs pagespeed *`

```
root@uniform [/usr/local/apache/conf]# grep -r -i pagespeed *
httpd.conf:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf.bak:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf.ea-make-install:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf.ea-make-install,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf.ea-make-install,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf.ea-make-install,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf.ea-make-install,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf.ea-make-install,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf.ea-make-install,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf.ea-orig:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf.easyapache_save:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf,v:Include "/usr/local/apache/conf/pagespeed.conf"
httpd.conf,v:Include "/usr/local/apache/conf/pagespeed.conf"
pagespeed.conf:  LoadModule pagespeed_module modules/mod_pagespeed.so
pagespeed.conf:  LoadModule pagespeed_module modules/mod_pagespeed_ap24.so
pagespeed.conf:<IfModule pagespeed_module>
pagespeed.conf:  # Turn on mod_pagespeed. To completely disable mod_pagespeed, you
pagespeed.conf:  ModPagespeed off
pagespeed.conf:  # Direct Apache to send all HTML output to the mod_pagespeed
pagespeed.conf:  AddOutputFilterByType mod_pagespeed_OUTPUT_FILTER text/html
pagespeed.conf:  # The ModPagespeedFileCachePath and
pagespeed.conf:  # ModPagespeedGeneratedFilePrefix directories must exist and be
pagespeed.conf:  ModPagespeedFileCachePath            "/var/mod_pagespeed/cache/"
pagespeed.conf:  # Override the mod_pagespeed 'rewrite level'. The default level
pagespeed.conf:  # ModPagespeedDisableFilters and ModPagespeedEnableFilters
pagespeed.conf:  # directives, below. Valid values for ModPagespeedRewriteLevel are
pagespeed.conf:  # ModPagespeedRewriteLevel PassThrough
pagespeed.conf:  # conjuction with ModPagespeedRewriteLevel. For instance, if one
pagespeed.conf:  # ModPagespeedDisableFilters. This directive contains a
pagespeed.conf:  # ModPagespeedDisableFilters rewrite_images
pagespeed.conf:  # conjuction with ModPagespeedRewriteLevel. For instance, filters
pagespeed.conf:  # ModPagespeedEnableFilters rewrite_javascript,rewrite_css
pagespeed.conf:  # ModPagespeedEnableFilters collapse_whitespace,elide_attributes
pagespeed.conf:  # ModPagespeedDomain
pagespeed.conf:  #   ModPagespeedDomain cdn.myhost.com
pagespeed.conf:  # ModPagespeedFileCacheSizeKb          102400
pagespeed.conf:  # ModPagespeedFileCacheCleanIntervalMs 3600000
pagespeed.conf:  # ModPagespeedLRUCacheKbPerProcess     1024
pagespeed.conf:  # ModPagespeedLRUCacheByteLimit        16384
pagespeed.conf:  # ModPagespeedCssInlineMaxBytes        2048
pagespeed.conf:  # ModPagespeedImgInlineMaxBytes        2048
pagespeed.conf:  # ModPagespeedJsInlineMaxBytes         2048
pagespeed.conf:  # ModPagespeedCssOutlineMinBytes       3000
pagespeed.conf:  # ModPagespeedJsOutlineMinBytes        3000
pagespeed.conf:  # ModPagespeedImgMaxRewritesAtOnce        8
pagespeed.conf:  # When Apache is set up as a browser proxy, mod_pagespeed can record
pagespeed.conf:  # ModPagespeedSlurpDirectory ...
pagespeed.conf:  # ModPagespeedSlurpReadOnly on
pagespeed.conf:  # mod_pagespeed circumvents this limitation, but if you employ
pagespeed.conf:  # ModPagespeedMaxSegmentLength 250
pagespeed.conf:  # Uncomment this if you want to prevent mod_pagespeed from combining files
pagespeed.conf:  # ModPagespeedCombineAcrossPaths off
pagespeed.conf:  # ModPagespeedLogRewriteTiming on
pagespeed.conf:  # added that sends latency beacons to /mod_pagespeed_beacon.  These
pagespeed.conf:  # statistics can be accessed at /mod_pagespeed_statistics.  You must also
pagespeed.conf:  # enable the mod_pagespeed_statistics and mod_pagespeed_beacon handlers
pagespeed.conf:  # ModPagespeedEnableFilters add_instrumentation
pagespeed.conf:  # You can use a different location by adding the ModPagespeedBeaconUrl
pagespeed.conf:  <Location /mod_pagespeed_beacon>
pagespeed.conf:        SetHandler mod_pagespeed_beacon
pagespeed.conf:  # ModPagespeedStatistics off
pagespeed.conf:  # This page lets you view statistics about the mod_pagespeed module.
pagespeed.conf:  <Location /mod_pagespeed_statistics>
pagespeed.conf:      SetHandler mod_pagespeed_statistics
```

From this output, you should be able to locate `/usr/local/apache/pagespeed.conf`.
