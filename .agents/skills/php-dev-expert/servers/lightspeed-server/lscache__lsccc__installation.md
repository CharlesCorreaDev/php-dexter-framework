# Installation | LiteSpeed Cache for Craft CMS | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lsccc/installation/

---

# Installation and Configuration[¶](#installation-and-configuration "Permanent link")

PLEASE READ

Development on the [3rd party LSCache Purge plugin for Craft CMS](https://github.com/scaramangagency/craft-litespeedcache) has been discontinued:

> Per-URL cache busting is now broken in Craft 3.5 because of changes to how template caching works. You will need to nuke the whole cache on save if you are running 3.5+
>
> This plugin is EOL. Minor patches will be issued, but not major functionality overhauls. PR's gratefully received.

We recommend using LSCache with rewrite rules [via these instructions](lscache__noplugin.md) if you are using Craft CMS v3.5 or later.

There are two parts to Craft CMS LiteSpeed caching: rewrite rules to define caching behavior, and a third party plugin to facilitate on-demand purging of cache objects.

Before installing and activating the LSCache plugin, deactivate all other full-page cache plugins.

Tip

You can still use other types of cache (like object cache, or browser cache), but only one full-page cache should be used at a time.

## Server-Level Setup[¶](#server-level-setup "Permanent link")

Note

Please see the [Overview](lscache__lsccc.md#server-level-prerequisites) for the server-level requirements before attempting to use LSCache.

## Enable Cache for Craft CMS[¶](#enable-cache-for-craft-cms "Permanent link")

LSCache is controlled through rewrite rules added to the .`htaccess` file found in your Craft CMS document root. To start, the file may look something like this:

```
<IfModule mod_rewrite.c>
      RewriteEngine On
      # Send would-be 404 requests to Craft
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteCond %{REQUEST_FILENAME} !-d
      RewriteCond %{REQUEST_URI} !^/(favicon\.ico|apple-touch-icon.*\.png)$ [NC]
      RewriteRule (.+) index.php?p=$1 [QSA,L]
</IfModule>
```

In order to use LSCache on your site, you must place the cache-related rewrite rules above the existing rules. The following example will cache all pages for 8 hours (`28800` seconds) with the exception of any `/admin` URLs:

```
########## Begin - Litespeed cache
<IfModule LiteSpeed>
  RewriteEngine On
  RewriteCond %{REQUEST_METHOD} ^HEAD|GET$
  RewriteCond %{ORG_REQ_URI} !/admin
  RewriteCond %{ORG_REQ_URI} !/index.php/admin    
  RewriteRule .* - [E=Cache-Control:max-age=28800]
</IfModule>
########## End - Litespeed cache
```

Feel free to modify these rules, if necessary for your site's needs.

Examples

- If you would like to exclude some other page from cache (let's say, `/mypage.php`), simply add the following line to the existing rewrite conditions:

  ```
  RewriteCond %{ORG_REQ_URI} !/mypage.php
  ```
- If you want to cache your site for only 4 hours, you can change the `max-age`. So, it would be:

  ```
  RewriteRule .* - [E=Cache-Control:max-age=14400]
  ```

## Verify Your Site is Being Cached[¶](#verify-your-site-is-being-cached "Permanent link")

Video

See a video demonstration of this topic [here](https://www.youtube.com/watch?v=M9YDUV-LqYQ).

### LSCache Check Tool[¶](#lscache-check-tool "Permanent link")

There's a simple way to see if a URL is cached by LiteSpeed: the [LSCache Check](https://check.lscache.io/) Tool.

Enter the URL you wish to check, and the tool will respond with an easy-to-read Yes or No result, and a display of the URL's response headers, in case you want to examine the results more closely.

[![!LSCache Check](/shared/lscache/images/installation-verify01.png)](https://docs.litespeedtech.com/shared/lscache/images/installation-verify01.png)

In addition to LSCache support, the tool can detect cache hits, and can detect when sites are using LiteSpeed Web ADC or QUIC.cloud CDN for caching.

Additionally, a Stale Cache Warning will alert you if browser cache is detected on dynamic pages. This is because browser cache may interfere with the delivery of fresh content.

### Manual Lookup[¶](#manual-lookup "Permanent link")

[![!Verify Cache Miss](/shared/lscache/images/installation-verify02.png)](https://docs.litespeedtech.com/shared/lscache/images/installation-verify02.png)

You can verify a page is being served from LSCache through the following steps:

1. From a non-logged-in browser, navigate to your site, and open the developer tools (usually, right-click > **Inspect**). Open the **Network** tab.
2. Refresh the page.
3. Click the first resource. This should be an HTML file. For example, if your page is `http://example.com/webapp/`, your first resource should either be something like `example.com/webapp/` or `webapp/`.
4. You should see headings similar to these:

   ```
   X-LiteSpeed-Cache: miss
   X-LiteSpeed-Cache-Control:public,max-age=1800
   X-LiteSpeed-Tag:B1_F,B1_
   ```

   These headings mean the page had not yet been cached, but that LiteSpeed has now stored it, and it will be served from cache with the next request.
5. Reload the page and you should see `X-LiteSpeed-Cache: hit` in the response header. This means the page is being served by LSCache and is configured correctly. [![!Verify Cache Hit](/shared/lscache/images/installation-verify03.png)](https://docs.litespeedtech.com/shared/lscache/images/installation-verify03.png)

Alternative Headers

The `X-LiteSpeed-Cache` header is most common, but you may see `X-LSADC-Cache` if your site is served by LiteSpeed Web ADC.

You may also see `X-QC-Cache` and `X-QC-Pop` if your site is served via QUIC.cloud CDN. The former indicates the cache status (`hit` or `miss`) and the latter indicates what PoP location (such as `NA-US-LGA-33`) served this response.

These alternative headers are also an indication that LSCache is working properly on your site.

Important

If you don't see `X-LiteSpeed-Cache: hit` or `X-LiteSpeed-Cache: miss` (or any of the alternative headers), then there is a problem with the LSCache configuration.

### Non-Cacheable Pages[¶](#non-cacheable-pages "Permanent link")

Sometimes there are pages which should not be cached. To verify that such pages have indeed been excluded from caching, check the developer tools as described [above](#verify-your-site-is-being-cached).

You should see headings similar to these:

```
X-LiteSpeed-Cache-Control:no-cache, esi=on
X-LiteSpeed-Tag:B1_F,B1_
```

`X-LiteSpeed-Cache-Control`, when set to `no-cache`, indicates that LiteSpeed Server has served your page dynamically, and that it was *intentionally* not served from cache.

## Purge Cache Plugin[¶](#purge-cache-plugin "Permanent link")

When controlled purely with rewrite rules, LSCache lacks insight into Craft CMS's rules, and should only be used to cache content for a very short time.

The third party LSCache Purge plugin is the bridge between Craft CMS and the LiteSpeed Cache engine that allows you to cache your Craft CMS content for a longer period of time. The purge plugin understand Craft CMS rules, and as such can instruct the cache engine to purge content when it changes. This greatly reduces the risk of serving stale content to visitors.

You can confidently set `max-age` to several hours, if you know that pages will be automatically cleared from cache when they are changed in the CMS.

Our thanks to [Scaramanga Agency](https://github.com/scaramangagency/craft-litespeedcache) for their work developing this plugin!

Craft CMS version 3.0.0 or later is required for this plugin. (You can use rewrite rules alone for earlier versions.)

### Installation[¶](#installation "Permanent link")

To install the plugin, search for LiteSpeed Cache on the Craft CMS Plugin store, or install it manually as follows:

1. Open your terminal and go to your Craft project:

   ```
   cd /path/to/project
   ```
2. Tell Composer to require the plugin:

   ```
   composer require thoughtfulweb/lite-speed-cache
   ```
3. In the Control Panel, go to **Settings > Plugins** and click the **Install** button for LiteSpeed Cache.

### Usage[¶](#usage "Permanent link")

There are two ways to purge the cache. You can configure it to purge automatically when pages are saved in the CMS, or you can press a button to purge the entire cache at once. Please see the [LSCache Purge Plugin's Github page](https://github.com/scaramangagency/craft-litespeedcache) for usage instructions and examples.
