# Overview | LiteSpeed Cache for Flarem | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscflarem/

---

# LiteSpeed Cache for Flarem[¶](#litespeed-cache-for-flarem "Permanent link")

Important

This plugin is developed and maintained by a third party, and is not officially supported by LiteSpeed Technologies.

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

## Server-level prerequisites[¶](#server-level-prerequisites "Permanent link")

### Obtain a LiteSpeed web server[¶](#obtain-a-litespeed-web-server "Permanent link")

To use LSCache, you need either [LiteSpeed-powered hosting](https://www.litespeedtech.com/partners/hosting-providers) or one of the following LiteSpeed server products:

- LiteSpeed Web Server Enterprise:
  - [Order a new license with caching enabled](https://store.litespeedtech.com/store/cart.php)
  - [Add caching to an existing license](https://docs.litespeedtech.com/licenses/how-to/#add-cache-to-an-existing-license)
- [LiteSpeed Web ADC](https://store.litespeedtech.com/store/cart.php)
- [OpenLiteSpeed](https://openlitespeed.org/#install)

### Configure cache root[¶](#configure-cache-root "Permanent link")

LSCache must be set up at the server level before it can be made available to any sites on the server.

Tip

If you are a site owner and you don't have access to your server's admin functions, your hosting provider has likely already completed this setup for you or can help you complete it.

See [Configure Cache Root and Cache Policy](lscache__start.md#configure-cache-root-and-cache-policy) for instructions.

## Install, Configure and Use the Extension[¶](#install-configure-and-use-the-extension "Permanent link")

Once you've set up your web server and configured the cache root and cache policies, you're ready to install the extension. Please see [the official LiteSpeed Cache for Flarum documentation](https://github.com/android-com-pl/flarum-lscache) for further instructions and support.

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
