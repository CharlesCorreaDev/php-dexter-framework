# Basic Controls | LSCache Developers Guide | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/devguide/controls/

---

# Basic Controls[¶](#basic-controls "Permanent link")

The LSCache Engine is controlled through response headers, rewrite rules, and Apache-style directives.

Generally speaking, response headers are used by your LSCache plugin to instruct the LSCache Engine if and how to store cache objects for incoming requests. Rewrite rules mostly govern the retrieval of cache objects, though they can also set environment variables that instruct the Cache Engine. Apache directives control the cache engine on a more general level (i.e. enable caching, disable caching, set the cache root directory, etc.)

Rewrite rules take a request before it hits the server, retrieves the appropriate cache object (if one exists), and optionally sends instructions to the cache engine. If no matching cache object is found, the request makes its way to the web app, which generates the page. The page content is sent in the response back to the client, and at the same time your plugin instructs the cache engine whether to store that page as a new cache object, and if so, how it should be stored.

## Apache Directives[¶](#apache-directives "Permanent link")

LiteSpeed’s Apache-style configuration directives are added to `.htaccess` to control the general behavior of the cache engine. They must be nested in `<IfModule LiteSpeed>`/`</IfModule>` tags. This is to prevent any possible incompatibility issues.

Example

```
<IfModule LiteSpeed> 
CacheEnable public /
CacheRoot /dev/shm/cacheroot
CacheMaxExpire 604800
</IfModule>
```

### CacheEnable[¶](#cacheenable "Permanent link")

Syntax: `CacheEnable [cache_type] [url-string]`

The `CacheEnable` directive instructs LiteSpeed Web Server to cache urls at or below url-string. Both public and private caches can be enabled based on the value specified with the cache\_type argument.

Examples

```
# Enable public cache
CacheEnable public /
```

```
# Enable private cache
CacheEnable private /
```

### CacheDisable[¶](#cachedisable "Permanent link")

Syntax: `CacheDisable [cache_type] [url-string]`

The `CacheDisable` directive instructs LiteSpeed Web Server to not cache urls at or below url-string. Both public and private caches can be disabled based on the value specified with the cache\_type argument.

Examples

```
# Disable public cache
CacheDisable public /
```

```
# Disable private cache
CacheDisable private /
```

### CacheRoot[¶](#cacheroot "Permanent link")

Syntax: `CacheRoot directory`

The `CacheRoot` directive defines the name of the directory on the disk to contain cache files.

Example

```
CacheRoot /dev/shm/cacheroot
```

### CacheMaxFileSize[¶](#cachemaxfilesize "Permanent link")

Syntax: `CacheMaxFileSize bytes`

The `CacheMaxFileSize` directive sets the maximum size, in bytes, for an object to be considered for storage in the cache.

Example

```
CacheMaxFileSize 64000
```

### CacheIgnoreCacheControl[¶](#cacheignorecachecontrol "Permanent link")

Syntax: `CacheIgnoreCacheControl On|Off`

Ordinarily, requests containing a `Cache-Control: no-cache` or `Pragma: no-cache` header value will not be served from the cache. The `CacheIgnoreCacheControl` directive allows this behavior to be overridden. `CacheIgnoreCacheControl On` tells the server to attempt to serve the resource from the cache even if the request contains no-cache header values. Resources requiring authorization will *never* be cached.

Example

```
CacheIgnoreCacheControl On
```

Warning

This directive will allow serving from the cache even if the client has requested that the document not be served from the cache. This might result in stale content being served.

### CacheMaxExpire[¶](#cachemaxexpire "Permanent link")

Syntax: `CacheMaxExpire seconds`

The `CacheMaxExpire` directive specifies the maximum number of seconds for which cacheable HTTP documents will be retained without checking the origin server. Thus, documents will be out of date at most this number of seconds. This maximum value is enforced even if an expiry date was supplied with the document.

Example

```
CacheMaxExpire 604800
```

### CacheLookup[¶](#cachelookup "Permanent link")

Syntax: `CacheLookup public on|off`

The `CacheLookup` directive instructs LiteSpeed Web Server on whether or not to check public cache. Typically, on a web server level, you want to set this `off` with the following directive:

```
CacheLookup public off
```

And then turn it on selectively at the site level with the following directive:

```
CacheLookup public on
```

## Rewrite Rules[¶](#rewrite-rules "Permanent link")

Rewrite rules allow you to set environment variables and govern the retrieval of cache objects.

When a request comes in from the browser, rewrite rules are applied before the request hits the server. During this time, the cache key is checked and a matching cache object is retrieved, if it exists. Optionally, instructions may also be sent to the cache engine at this time. LiteSpeed Web Server carries out the instructions and sends a success response back to the browser along with the contents of the cached object.

### cache-control[¶](#cache-control "Permanent link")

You can instruct the Cache Engine with `cache-control` environment variables in `.htaccess`. Just be aware that `X-LiteSpeed-Cache-Control` response headers will overrule any settings defined by rewrite rules.

Syntax: - `[E=cache-control:value1,E=cache-control:value2]` - `[E="cache-control:value1,value2"]`

Tip

`cache-control` may also be written as `cache-ctrl`.

Usage examples

In these examples, be sure to replace `.*` or `path/example` with the relevant URIs for your application!

- Regular cache-control directives:  

  ```
  RewriteRule .* - [E=cache-control:max-age=300]
  ```

  ```
  RewriteRule .* - [E=cache-control:private,max-age=300]
  ```
- Flush private cache (see [cache-purge](#cache-purge) for flushing public cache):  

  ```
  RewriteRule path/example - [E=cache-control:flush]
  ```
- Enable auto flush private cache by POST request:  

  ```
  RewriteRule .* - [E=cache-control:autoflush]
  ```
- Disable auto flush private cache by POST request:  

  ```
  RewriteRule .* - [E=cache-control:no-autoflush]
  ```
- Directly append `vary_value` to a cache key and a CGI environment variable, as in `cache-control:vary=ismobile`:  

  ```
  RewriteRule path/example - [E=cache-control:vary=vary_value]
  ```

### cache-purge[¶](#cache-purge "Permanent link")

As of LiteSpeed Web Server v6.0, it is possible to purge public cache through rewrite rules, though you need to be careful. Make absolutely sure the rewrite condition is correct, and consider adding a way to authenticate or limit who can trigger the purge rules. Otherwise, you may unintentionally cause excessive purging on the site, which would lead to a considerable number of cache misses.

The parameters used with `cache-purge` are the same as those used with the [`X-LiteSpeed-Purge` header](#x-litespeed-purge).

Syntax: `[E=cache-purge:<purge_values>]`

Examples

```
RewriteRule ^/?purge_page1 - [E=cache-purge:tag=Page1]
```

If you have multiple values, you must use double quotes, like so:

```
RewriteRule ^/?purge_page2 - [E="cache-purge:tag=Cat1,tag=Page2"]
```

### cache-tag[¶](#cache-tag "Permanent link")

As of LiteSpeed Web Server v6.0, you have the ability to define cache tags through rewrite rules. The parameters used here are the same as those used with the [`X-LiteSpeed-Tag` header](#x-litespeed-tag).

Syntax: `[E=cache-tag:tag1]`

Example

```
RewriteRule ^/?my_cat/product_page - [E="cache-tag:Cat1,Page3"]
```

This is equivalent to applying the `X-LiteSpeed-Tag: Cat1,Page3` response header when the `/my_cat/product_page` is accessed.

### cache-vary[¶](#cache-vary "Permanent link")

There are two types of Cache Varies: Vary Cookies and a Vary Value.

Syntax: - `[E=Cache-Vary:my_cookie]` to vary on a cookie - `[E=Cache-Control:vary=value]` to vary on a vary value

There is a lot more to this topic. Please see our [Cache Varies documentation](lscache__devguide__advanced.md#cache-varies).

### esi\_on[¶](#esi_on "Permanent link")

Rewrite Rules can control the ESI engine.

Turn on the ESI engine for a request:

```
RewriteRule .* - [E=esi_on:1]
```

Turn off the ESI engine for a request:

```
RewriteRule .* - [E=esi_on:0]
```

## Response Headers[¶](#response-headers "Permanent link")

After a request goes through the rewrite rules, if no cache object is found, the request is forwarded to the web app and to your plugin. The app generates the requested page. Your LSCache plugin defines Response Headers which instruct the Cache Engine how to handle this new content according to the rules of the app. LiteSpeed Web Server carries out the instructions and sends a success response back to the browser along with the web app's newly generated content.

Tip

These headers are meant specifically to be used with LiteSpeed Cache. If the server is not a LiteSpeed server or if the cache module is not registered, these headers will be ignored.

### X-Litespeed-Cache-Control[¶](#x-litespeed-cache-control "Permanent link")

The `X-Litespeed-Cache-Control` header functions similarly to the basic `Cache-control` header, but it is for internal use. If both headers are set, LiteSpeed Web Server will ignore the value of the `Cache-control` header and use only the value set by `X-Litespeed-Cache-Control`. Possible values for `X-Litespeed-Cache-Control` are:

- `no-cache`
- `no-store`
- `max-age`
- `max-stale`
- `public`
- `private`
- `s-maxage`
- `no-vary`
- `esi`

Examples

Turn on ESI for a specific response:

```
X-LiteSpeed-Cache-Control: esi=on
```

Cache a response for an hour:

```
X-LiteSpeed-Cache-Control: public,max-age=3600
```

Cache a response in private cache for a day:

```
X-LiteSpeed-Cache-Control: private,max-age=864020
```

Set many parameters for a cached response:

```
X-LiteSpeed-Cache-Control: shared,private,no-vary,max-age=864020,esi=on
```

### X-LiteSpeed-Purge[¶](#x-litespeed-purge "Permanent link")

Use `X-LiteSpeed-Purge` to tell LiteSpeed Web Server to purge cache objects. A purge can be initiated by URL (`url=`) or by Tag (`tag=`).

Tips

- When purging public cache, specifying `public` is optional. When purging private cache, specifying `private` is required.
- When purging by tag, specifying `tag=` is optional. When purging by URL, specifying `url=` is required.

Usage examples

Purge all public cache:

```
X-LiteSpeed-Purge: *
```

Purge all private cache for the current user:

```
X-LiteSpeed-Purge: private, *
```

Purge public cache by Tag:

```
X-LiteSpeed-Purge: public, tag=Cat1, tag=Page2
```

Purge private cache by Tag:

```
X-LiteSpeed-Purge: private, tag=Cat1,tag=Page2
```

Purge by URL (only exact matches are purged):

```
X-LiteSpeed-Purge: url=/phpinfo.php
```

Purge private cache by URL (only exact matches are purged):

```
X-LiteSpeed-Purge: private,url=/phpinfo.php
```

Currently, regular expressions or wildcards are not supported for Tag or URL, but support may be added in a future release.

Format examples

```
X-LiteSpeed-Purge: public,tag=pubtag1,tag=pubtag2;private,tag=privtag1,tag=privtag2
```

```
X-LiteSpeed-Purge: public,tag=pubtag1,tag=pubtag2;private,tag=*
```

```
X-LiteSpeed-Purge: public,stale,tag=pubtag1,tag=pubtag2;private,stale,tag=privtag1,tag=privtag2
```

```
X-LiteSpeed-Purge: pubtag1,pubtag2,pubtag3;private,*
```

```
X-LiteSpeed-Purge: pubtag1,pubtag2,pubtag3;private,privtag1,privtag2
```

```
X-LiteSpeed-Purge: stale,pubtag1,pubtag2, pubtag3;private,stale,privtag1,privtag2
```

In this example, `pubtag2` is stale, as indicated by the `~s` suffix:

```
X-LiteSpeed-Purge: pubtag1,pubtag2~s,pubtag3;private,privtag1,privtag2
```

### X-LiteSpeed-Tag[¶](#x-litespeed-tag "Permanent link")

The `X-LiteSpeed-Tag` header is used to assign tags to cache objects, which allows them to be grouped and purged together later. Each object may have multiple tags assigned to it, as in:

```
X-LiteSpeed-Tag: Cat1,Page3
```

There are a few formatting rules that must be followed: - Since they are going to be used in a response header, tags must follow response-header rules. As such only ASCII characters are allowed, and no special characters (spaces, commas, quotes) may be used. - The `public:` prefix is reserved. - Spaces between tags are optional. We sometimes use them here for readability purposes, but suggest you remove them in your own code for better performance.

If both cache control and the tag are public, the `public:` prefix is optional.

Public cache control examples

```
X-LiteSpeed-Tag: public:pubtag1,public:pubtag2
```

```
X-LiteSpeed-Tag: pubtag1,pubtag2
```

If cache control is private, but the tag is public, the `public:` prefix is required.

Private cache control example

If you have the following:

```
X-LiteSpeed-Cache-Control: private,max-age=3600
```

you should label public and private tags like so:

```
X-LiteSpeed-Tag: public:pubtag1,public:pubtag2,public:pubtag3,privtag1,privtag2
```

### X-LiteSpeed-Vary[¶](#x-litespeed-vary "Permanent link")

There are two types of Cache Varies: Vary Cookies and a Vary Value.

Examples

To vary on a cookie:

```
X-LiteSpeed-Vary: cookie=my_cookie
```

To vary on a vary value:

```
X-LiteSpeed-Vary: value=ismobile
```

To vary on both:

```
X-LiteSpeed-Vary: cookie=my_cookie,value=ismobile
```

To vary on multiple cookies

```
X-LiteSpeed-Vary: cookie=my_cookie,cookie=my_cookie2
```

There is a lot more to this topic. Please see our [Cache Varies documentation](lscache__devguide__advanced.md#cache-varies).

### X-LiteSpeed-Cache[¶](#x-litespeed-cache "Permanent link")

This header is inserted by Litespeed Web Server when it serves from cache, possible values are:

```
X-LiteSpeed-Cache: hit
```

```
X-LiteSpeed-Cache: hit,private
```

```
X-LiteSpeed-Cache: hit,litemage
```

If LSWS returns a `miss` value rather than a `hit` it means that the content has *not* been served from cache this time, but cache object creation has been initiated.

### LSC-Cookie[¶](#lsc-cookie "Permanent link")

Generally speaking, cookies will contain private information, so by default, all pages that are cached in LiteSpeed Cache will have the `Set-Cookie` header dropped. The `LSC-cookie` header is used instead to send out a `Set-Cookie` header for the pages served from cache. The `LSC-Cookie` header follows the same syntax as a `Set-Cookie` header, but will be sent to the client along with the cached page.

In other words, `LSC-Cookie` is a cacheable `Set-Cookie`, which will be converted and sent out as a `Set-Cookie`.

One potential usage is to check if the client supports cookies. If the web application always generates a cookie on every page and a page is served from the cache without any cookies, the web application may assume that the client does not have cookies enabled.

Example

Suppose you have the following in your plugin:

```
<?php header(‘LSC-Cookie: lsc_cached_page=1’); ?>
```

When the page is served from cache, the response header will include this:

```
Set-Cookie: lsc_cached_page=1
```
