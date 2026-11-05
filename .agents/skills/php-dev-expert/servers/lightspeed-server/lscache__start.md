# Getting Started | LiteSpeed Cache | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/start/

---

# Getting Started Guide[¶](#getting-started-guide "Permanent link")

## What is LSCache?[¶](#what-is-lscache "Permanent link")

LiteSpeed Cache, also called LSCache, is LiteSpeed's more efficient and highly customizable answer to Apache `mod_cache` and Varnish.

LSCache is built from the ground up and integrated into all LiteSpeed server products. It can:

- Dramatically speed up dynamic website content, such as PHP pages
- Provide more efficient handling of static content, such as images
- Reduce server load

## Understanding caching[¶](#understanding-caching "Permanent link")

If you are new to website caching, allow us to demystify a few basic concepts.

### What is caching?[¶](#what-is-caching "Permanent link")

Generally speaking, a cache is a mechanism for storing data in such a way that it is easier or faster to retrieve than the original source.

Web applications consist of dynamic pages that are built with PHP or some other method. The pages of these sites don’t exist anywhere in the file system; they are constructed on demand by the web app and then served to the visitor as HTML. Generating these dynamic pages can be resource-intensive and slow.

There are actually several types of caches. LSCache is a "page cache." A page cache's job is to take this dynamically generated web page and store it as a static HTML snapshot. That way, the next time the page is requested by a visitor, the snapshot can be served immediately. Serving a snapshot is much faster and uses far fewer resources than generating the page dynamically does.

### How does LSCache work?[¶](#how-does-lscache-work "Permanent link")

Imagine you have an uncached page.

A visitor requests that page, and a few things happen:

1. LiteSpeed looks for the page among its stored cache objects and does not find it.
2. LiteSpeed returns a "cache miss."
3. The web app dynamically generates a static HTML page while the visitor waits.
4. LiteSpeed serves the static HTML page to the visitor.
5. LiteSpeed stores the static HTML page as a cache object for later use.

A few minutes later, another visitor requests that same page. Here's what happens:

1. LiteSpeed looks for the page among its stored cache objects and finds it.
2. LiteSpeed returns a "cache hit."
3. LiteSpeed immediately serves the static HTML page to the visitor.

Notice how the web app does not need to regenerate the page once the page has been cached? From this point on, until the cache object expires, any visitors who request that page will not have to wait for the web app.

You can see why caching is good for your visitors and good for your server load!

No matter whether you want to use LiteSpeed Cache with one of our handy plugins, or you have a customized [rewrite-rule-based solution](lscache__noplugin.md) in mind, there are some basic setup steps that must be completed in order to make LSCache work:

1. Get a LiteSpeed server product with Cache Module
2. Set up the Cache Root and Cache Policy
3. Enable Caching

## Server-level prerequisites[¶](#server-level-prerequisites "Permanent link")

### Obtain a LiteSpeed web server[¶](#obtain-a-litespeed-web-server "Permanent link")

To use LSCache, you need either [LiteSpeed-powered hosting](https://www.litespeedtech.com/partners/hosting-providers) or one of the following LiteSpeed server products:

- LiteSpeed Web Server Enterprise:
  - [Order a new license with caching enabled](https://store.litespeedtech.com/store/cart.php)
  - [Add caching to an existing license](https://docs.litespeedtech.com/licenses/how-to/#add-cache-to-an-existing-license)
- [LiteSpeed Web ADC](https://store.litespeedtech.com/store/cart.php)
- [OpenLiteSpeed](https://openlitespeed.org/#install)

Note

OpenLiteSpeed does not support ESI, so if your web application requires ESI, you must choose a commercial LiteSpeed product for your server.

### Configure Cache Root and Cache Policy[¶](#configure-cache-root-and-cache-policy "Permanent link")

**Cache Root**, also known as **Storage Path**, is the location on disk where cache object files will be stored.

**Cache Policy** refers to the collection of settings that manage caching behavior.

Cache Root and Cache Policy configuration procedures vary, depending on which control panel (if any) you are using. Please see the appropriate instructions for your environment:

- [cPanel/WHM](https://docs.litespeedtech.com/cp/cpanel/lscache/)
- [Plesk](https://docs.litespeedtech.com/cp/plesk/configuration/#set-cache-root)
- [DirectAdmin](https://docs.litespeedtech.com/cp/directadmin/#set-up-cache-root-and-enable-litespeed-cache-throughout-the-server)
- [No Control Panel](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:common_installation:apache-config-shared)
- [LiteSpeed Native](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:common_installation:litespeed-shared)

### Enable Caching[¶](#enable-caching "Permanent link")

#### CacheEngine Directive[¶](#cacheengine-directive "Permanent link")

If Caching is disabled in the server-level cache policy (as we recommend), then you will need to turn on the cache engine for each virtual host, within each vhost's config file (*not the `.htaccess` file* - the location of these config files will vary by control panel).

Add the following:

```
<IfModule Litespeed>
CacheEngine on
</IfModule>
```

There is more that can be done with this directive. See [below](#control-cache-functions-by-virtual-host) for details.

#### CacheLookup Directive[¶](#cachelookup-directive "Permanent link")

A `CacheLookup` directive must be added to the `.htaccess` file of any site that is to be cached. If the site is using an LSCache plugin, then this step is automatically handled by the plugin, and you may skip it.

If you are using a rewrite-rule-based LSCache solution, then you will need to add the following manually to `.htaccess`:

```
<IfModule LiteSpeed>
  CacheLookup public on
</IfModule>
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

## Advanced Configuration[¶](#advanced-configuration "Permanent link")

### Using a RAM Disk[¶](#using-a-ram-disk "Permanent link")

Server-level and virtual-host-level cache root is normally where actual cache objects are stored. For this purpose, we strongly suggest using SSD drives. This is a must for site performance. Normal hard discs are empatically discouraged.

Another option is RAM disk storage, but this is normally not necessary, nor is it of much benefit. We don't recommend it, but in the event that you still wish to set up your cache files this way, we have provided the following information.

#### Setting User-Level Cache Root[¶](#setting-user-level-cache-root "Permanent link")

For a user-level cache, you must specify an absolute path, like so:

```
CacheRoot /dev/shm/lscache/user1
```

Be careful not to use the same cache directory for more than one account, as this is likely to cause trouble.

#### Setting Virtual Host Cache Root Using Variables[¶](#setting-virtual-host-cache-root-using-variables "Permanent link")

LiteSpeed Web Server supports variables in the virtual-host-level cache-root configuration when using an Apache configuration file. For example:

```
/dev/shm/lscache/$vh_name
```

```
/dev/shm/lscache/$vh_domain
```

```
/dev/shm/lscache/$vh_user
```

The variables are based on the virtual host configuration. For Apache virtual hosts, `$vh_name` is the same as `$vh_domain` which is the server name for that vhost.

#### Cache Management Files[¶](#cache-management-files "Permanent link")

The cache root settings discussed above pertain to the storage of the actual cache object files, but LiteSpeed also relies on manager files to govern the caches. These files are `.cachemanidx.lock` and `.cachemanidx.shm`, and by default, they are stored in RAM disk under the `/dev/shm/lsws/` directory.

While RAM disk has little impact on cache object storage, it can noticeably speed up cache management. And so, for this purpose, we do encourage you to keep these files here.

### Control Cache Functions by Virtual Host[¶](#control-cache-functions-by-virtual-host "Permanent link")

A shared hosting provider may want to maintain server-wide control over the enabling and disabling of cache-related services. These services include caching itself as well as the ESI and crawler functions available with some of our LSCache plugins. By disabling the cache globally and enabling it for a particular virtual host, shared hosting providers may offer LSCache as an add-on service to their customers.

Tip

`esi` and `crawler` are disabled by default during the initial installation. If you want to make them available to the sites on your server, you will need to enable them specifically.

The `CacheEngine` directive is used to turn the cache engine on or off on a global level.

Unlike othe cache directives, `CacheEngine` is *not* used in `.htaccess`. Instead, it is placed in the server configuration or virtual host configuration files, and the locations of these vary by control panel.

`CacheEngine` can be set to `off` or `on` and can be used to also enable `esi` and cache `crawler` usage, if desired.

Examples

To disable cache:

```
<IfModule Litespeed>
CacheEngine off
</IfModule>
```

To enable cache, ESI, and crawler functionality:

```
<IfModule Litespeed>
CacheEngine on esi crawler
</IfModule>
```

To enable cache, but neither ESI nor crawler:

```
<IfModule Litespeed>
CacheEngine on
</IfModule>
```

The cache engine must be turned on at the server or virtual host level before a site can begin caching.

Example: Disable Cache Globally with cPanel

To disable cache globally, add the `CacheEngine` directive to the server-level Apache config file located at `/etc/apache2/conf.d/includes/pre_main_global.conf`. It should be placed within `<IfModule Litespeed> .. </IfModule>` tags, immediately after the `CacheRoot` configuration, like so:

```
<IfModule Litespeed>
CacheRoot /home/lscache/
CacheEngine off
</IfModule>
```

Click [here](https://docs.litespeedtech.com/cp/cpanel/lscache/) for more cPanel examples.

If you use other control panels, you should be able to adapt the above instructions in order to control the cache for your shared hosting accounts.

## Use Stale Cache[¶](#use-stale-cache "Permanent link")

One of the options in your server, virtual host, and context-level cache policies is **Cache Stale Age**. This setting specifies how long an object will continue to be served from cache after it has expired but before a new cached copy is available. The default `Not Set` value is ten seconds.

Here's how it works:

[![!Stale Cache](../images/start01.png)](https://docs.litespeedtech.com/lscache/images/start01.png)

If there is a stale cache object available, the load on the backed may be drastically reduced, as only the first request needs to generate a new page. Any subsequent requests will be served stale cache until the new page is ready, or until the stale cache window is closed.

Without stale cache being enabled, all requests would hit the backend, and for busy sites, this could be problematic.

Example

1. **Cache Stale Age** is set to `30` seconds.
2. A page reaches it's TTL and the copy stored in cache expires.
3. Visitor #1 requests the page, fifteen seconds later. The cache object has expired, so the request is sent to the app backend.
4. Visitor #2 requests the page, ten seconds after that. The new cache object is still being generated for Visitor #1 and is not ready yet. The page expired 25 seconds ago, which is still within the **Cache Stale Age** range, so Visitor #2 is served the old cache object.
5. Visitor #3 requests the page, ten seconds after that. The new cache object is still being generated for Visitor #1 and is not ready yet. The page expired 35 seconds ago, which is no longer within the **Cache Stale Age** range, so Visitor #3's waits a few seconds for the first request to finish, but if it does not, Visitor #3's request hits the backend.

The stakes are not particularly high in the example above, but imagine if, instead of two visitors within the 30-second window, you had two *thousand*. The ability to serve stale cache objects would prevent 1999 requests from overwhelming the backend!

Stale cache works for pages that are purged, as well as those that expire naturally. To purge stale, you can add a `stale` indicator to [the `X-LiteSpeed-Purge` header](lscache__devguide__controls.md#x-litespeed-purge).

Note

If all requests come in after the stale window, then all requests will hit the backend until the new cache object is generated. It behaves the same as it would if there had been no stale cache at all.

## Cache Different Views Based on Cookie Value[¶](#cache-different-views-based-on-cookie-value "Permanent link")

You can use a rewrite rule to store separate cached copies of a page based on a customized cookie name. The rewrite rule is as follows:

```
RewriteRule .* - [E=cache-vary:cookie_name]
```

Replace `cookie_name` with the actual name of the cookie you wish to vary on.

This is a powerful capability. [Learn more about Cache Varies](lscache__devguide__advanced.md#cache-varies)

## Drop Junk Query Strings[¶](#drop-junk-query-strings "Permanent link")

In an effort to make some requests more cache friendly, LiteSpeed Enterprise may be configured to drop certain query string parameters.

### Why is This Helpful?[¶](#why-is-this-helpful "Permanent link")

For each query string that is attached to a URL, a separate copy of the page is cached. In many cases this is intentional, desired behavior. However, when you have "junk" query string parameters that don't change the content of the page, it's redundant to cache separate copies.

Junk query strings include UTM codes and Google AdWords auto tags, among others.

#### What is a UTM code?[¶](#what-is-a-utm-code "Permanent link")

A UTM code is a simple code that you can attach to a custom URL in order to track a source, medium, and campaign name. This enables Google Analytics to tell you where searchers came from as well as what campaign directed them to you.

While such query strings may be useful for tracking purposes, they have no effect on the content of the page, and therefore should not be considered when storing the page in cache.

#### What is a Google AdWords auto tag?[¶](#what-is-a-google-adwords-auto-tag "Permanent link")

Google AdWords can be configured to add tracking parameters to your URLs in order to pass information about the click. Similar to UTM codes, this kind of tag has no bearing on the content of the page, and therefore may be ignored when caching. These tags appear in the format `&gclid=XXXXXXX`.

### Dropping Query Strings[¶](#dropping-query-strings "Permanent link")

There are two ways to modify/​drop ​query strings: one is to use the Apache-like configuration directive `​CacheKeyModify ...`​, and the other one is to use `E=cache-key-mod:` in rewrite rules. The second method is more flexible and is the preferred way.

Both methods serve the same purpose: to modify the query string attached to a URL.

#### Method 1: Apache-style CacheKeyModify[¶](#method-1-apache-style-cachekeymodify "Permanent link")

The directive can be added to Apache config files at the server, vhost and web application levels.

Upper level configurations are inherited by lower levels. If a lower level adds more rules, they are in addition to those of the upper level. If a lower level doesn't want to use the upper level's configuration, the `clear` parameter should be used before adding the new rules.

The `CacheKeyModify` directive can be used multiple times. Adding multiple modifications in one line is not supported. Multiple lines are combined.

This function is suitable for users whose site brings junk query strings, e.g. UTM code, Google AdWords auto tags, etc, and gets too many different URLs which *should* be stored and served from the same cache page but in practice are not.

Examples

- `CacheKeyModify -qs:utm*` drops all query strings where the name starts with "utm"
- `CacheKeyModify -qs:utm` drops the query string where the name exactly matches "utm"
- `CacheKeyModify -qs:gclid` drops all query strings where the name exactly matches "gclid"
- `CacheKeyModify clear` discards all previous configurations.

##### CacheKeyModify on cPanel[¶](#cachekeymodify-on-cpanel "Permanent link")

As long as the LSWS version is 5.2.3 or above, this feature is enabled by default and does not need any further configuration in the LSWS WebAdmin GUI or in Apache configurations. You may wish to override the default settings at the server level, virtual-host level or even the `.htaccess` level.

To verify the server- and virtual-host-level settings, you may run the following command:

```
cd /etc/apache2/
grep -i -r CacheKeyModify
```

The design logic looks like the following: Assume `A`,`B` and `C` refer to defined rules.

| Server Level | VHost Level | .htaccess | Result |
| --- | --- | --- | --- |
| A | not set | not set | A |
| A | not set | C | A+C |
| A | B | not set | A+B |
| A | B | C | A+B+C |

#### Method 2: Rewrite Rules[¶](#method-2-rewrite-rules "Permanent link")

As an alternative to `CacheKeyModify`, you can also use rewrite rules. This method supports multiple commands combined, and gives you more flexibility.

For this example, we removed `utm_source` with an exact match, and `utm_medium` with a prefix match.

```
Rewritecond %{QUERY_STRING} 'utm_source=google&utm_medium=email1&utm_campaign=promo%20code'
RewriteRule  .* - [E=cache-key-mod:-qs:utm_source, E=cache-key-mod:-qs:utm_medium*]
```

The log shows only `utm_campaign` is left in the query string:

```
Remove exact matched QS key [utm_source],
Remove prefix matched QS key [utm_medium],
CacheKey data: URI [/wordpress/?], QS [utm_campaign=promo%20code],
```

### Verifying Query Strings Have Been Dropped[¶](#verifying-query-strings-have-been-dropped "Permanent link")

#### Prepare a URL with a Junk Query String[¶](#prepare-a-url-with-a-junk-query-string "Permanent link")

Assume we have a public WordPress site with the domain `example.com` and LSCache enabled. Use [Campaign URL Builder](https://ga-dev-tools.appspot.com/campaign-url-builder/) or another UTM plugin to generate a URL, which will look like this:

```
https://example.com/?utm_source=google&utm_medium=email&utm_campaign=promo%20code
```

Access the site with both of these URLs:

- `https://example.com`
- `https://example.com/?utm_source=google&utm_medium=email&utm_campaign=promo%20code`

#### Setting up Rules[¶](#setting-up-rules "Permanent link")

For testing purpose, we can simply add the following to the `.htaccess` file:

```
CacheKeyModify -qs:utm_medium
```

#### Verifying From Developer Tool[¶](#verifying-from-developer-tool "Permanent link")

Before the rules are created, all query strings with the same domain will be stored with a different cache key. The above URLs will be stored in 2 separate cache files.

After the rules are created, the `utm_medium` query string will be stripped. Due to the fact that there are other query strings attached to the URL, there will still be 2 separate cache files:

1. `https://example.com/`
2. `https://example.com/?utm_source=google&utm_campaign=promo%20code` (notice `&utm_medium=email` has been stripped)

If you visit `https://example.com/?utm_source=google&utm_campaign=promo%20code` and then access the following urls, you will see that they are all stored in a single cache file and are a cache hit from the first visit:

1. `https://example.com/?utm_source=google&utm_medium=text&utm_campaign=promo%20code`
2. `https://example.com/?utm_source=google&utm_medium=instant-message&utm_campaign=promo%20code`
3. `https://example.com/?utm_source=google&utm_medium=browser&utm_campaign=promo%20code`
4. `https://example.com/?utm_source=google&utm_medium=direct&utm_campaign=promo%20code`

#### Verifying From Debug Log[¶](#verifying-from-debug-log "Permanent link")

You can search for the keywords `QS` & `KEY` appearing with `CACHE` in the debug log:

```
tail -f /etc/apache2/logs/* | grep 'CACHE' | grep 'QS|KEY'
```

You can then verify that `utm_medium` has been removed from `CacheKey data -> QS`

```
[CACHE] Remove exact matched QS key [utm_medium],
[CACHE] modified QS in cache key is [],
[CACHE] CacheKey data: URI [/example.com/?], QS [utm_source=google&utm_campaign=promo%20code], Vary Cookie [_lscache_vary=xxxxx], Private Cookie [wp_woocommerce_session_xxxxx], IP [192.0.2.0]
```

## Crawling a Site[¶](#crawling-a-site "Permanent link")

Before a site may be crawled, you will need to enable it for LiteSpeed Web Server since crawling is normally disabled by default. Set the following in the Apache configuration, as explained [above](#cacheengine-directive):

```
<IfModule Litespeed>
CacheEngine on crawler
</IfModule>
```

### Via Plugin[¶](#via-plugin "Permanent link")

LiteSpeed's WordPress plugin has [built-in crawler functionality](lscache__lscwp__crawler.md).

### Via Crawler Script[¶](#via-crawler-script "Permanent link")

We have created a universal crawler script and customized it for use with [Magento](lscache__litemage__settings.md#cache-warmup) and [PrestaShop](lscache__lscps__settings.md#cache-crawler-script).

For sites that use rewrite-rule-based LSCache, there should not be a need for crawling. In typical usage, the TTL for a rewrite-rule-based-cache is set for a very short time, sometimes as little as 2 minutes. That said, if you have a rewrite-rule-based cache, it is possible to crawl it as long as you have a sitemap and can define a site TTL of 30 minutes or longer.

You can use any third party script, your own crawler script, or our [universal crawler script](lscache__litemage__settings.md#cache-warmup) to warm up your customized application.

#### Troubleshooting[¶](#troubleshooting "Permanent link")

The most common reason for a crawler script not to work is a missing `CacheEngine on crawler` directive in the Apache configuration. Make sure this has been added.

Alternatively, the server may have a domain override in `/etc/hosts`, something like `127.0.0.1 yourdomain.com www.yourdomain.com`. This will break the crawler. Commenting it out should solve the issue.

### Via Curl[¶](#via-curl "Permanent link")

If you use a custom integration with LSCache where there's no crawler available, curl can often be an easy and very flexible method to warm up your cache.

Simple curl commands, executed either via bash (or similar), or programming languages, allow you to make your own crawler that fits your unique needs.

Example

This example crawler simulates a user with a specific cookie. Let's say you want to warm up the cache for situations where the user is on an iPhone or iPan and they have the `cookie_test` cookie. You would add the following rewrite rules to .htaccess.

```
RewriteCond %{HTTP_USER_AGENT} "iPhone|iPod" [NC]
RewriteCond %{HTTP_COOKIE} cookie_test [NC]
RewriteRule .* - [E=Cache-Control:vary=is_mobile]
```

Then, you can use the following curl command to simulate a visit to the site:

```
curl --cookie cookie_test= -A "iPod" https://example.com/
```

Warning

When warming up with curl it's important to follow the [RFC6265 Section 5.2.2](https://tools.ietf.org/html/rfc6265#section-5.2) which indicates that an `=` is required, or the set-cookie-string may be ignored completely.

## See Also[¶](#see-also "Permanent link")

- [Allow alternate mobile views](lscache__noplugin__settings.md#enable-cache-for-mobile-view)
- [Use GeoLocation](https://docs.litespeedtech.com/cp/cpanel/geoip/)
- [Set up LSCache on LiteSpeed Web ADC](https://docs.litespeedtech.com/products/lsadc/cache/)
- [Set up an LSCache reverse proxy](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:proxy:start)
