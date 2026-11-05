# FAQ | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/faq/

---

# FAQ[¶](#faq "Permanent link")

Here are some of our most Frequently Asked Questions.

## Why do the cache features require a LiteSpeed Server?[¶](#why-do-the-cache-features-require-a-litespeed-server "Permanent link")

TThe LSCache plugin has two types of features: page-caching features, which require a LiteSpeed server, and optimization features, which work with any web server.

Cache features require LiteSpeed because the actual caching is handled by LiteSpeed's server-level cache engine, not the plugin itself. The plugin acts as a bridge between WordPress and that engine, communicating caching rules, managing cache entries, and enabling smart features like targeted purging and multiple content versions based on device type, location, or currency.

To use the caching features, you need one of these LiteSpeed products:

- LiteSpeed Web Server
- OpenLiteSpeed
- LiteSpeed Web ADC
- QUIC.cloud CDN

## Who can use the optimization features of LSCache?[¶](#who-can-use-the-optimization-features-of-lscache "Permanent link")

Anyone, regardless of their web server. Any feature that doesn't rely on the LiteSpeed server-level cache engine is available to all users. This includes Database Optimization, CSS/JS Minification and Combination, CDN Support, Browser Cache, Object Cache, Lazy Load, Image Optimization, and more.

## Is the LiteSpeed Cache plugin free?[¶](#is-the-litespeed-cache-plugin-free "Permanent link")

Yes, this LSCache plugin will always be free and open source. That said, a LiteSpeed server is required, and there are fees associated with some LiteSpeed server editions.

Additionally, some of the premium online services provided through QUIC.cloud (CDN Service, Image Optimization, Critical CSS, Unique CSS, Low-Quality Image Placeholder, etc.) require payment at certain usage levels. You can learn more about what these services cost, and what levels of service are free, on [your QUIC.cloud dashboard](https://my.quic.cloud).

## What server software is required for this plugin?[¶](#what-server-software-is-required-for-this-plugin "Permanent link")

A LiteSpeed server is required in order to use this plugin. You will need one of the following (any single server or cluster including one of these will work):

- LiteSpeed Web Server Enterprise with LSCache Module (v5.0.10+)
- LiteSpeed WebADC (v2.0+)
- OpenLiteSpeed (v1.4.17+)
- QUIC.cloud CDN

Many of the optimization features may be used with *any* web server. A LiteSpeed server is not required for such features.

## What is the difference between the LSCache Module for LiteSpeed Web Server (requires a license) and the LSCache plugin (free)?[¶](#what-is-the-difference-between-the-lscache-module-for-litespeed-web-server-requires-a-license-and-the-lscache-plugin-free "Permanent link")

The LSCache Module is built into your licensed copy of LiteSpeed Web Server. When it comes to caching dynamic content, the LSCache Module does all of the work.

The LSCache plugin is simply an interface. It allows the web app to instruct the server Module on what to cache, how long to cache it, and when to purge. And it allows the site owner to manage and configure the Module. Without the Module, the Plugin could not function.

A licensed LSCache Module is required in order to use the free LSCache plugin.

## Does this plugin work in a clustered environment?[¶](#does-this-plugin-work-in-a-clustered-environment "Permanent link")

Yes. When using the plugin in a clustered environment, the cache entries are stored at the highest LiteSpeed server level. So, if you are using LiteSpeed's own Web ADC, then the cache can be stored at the ADC level. If you are using a third party load balancer, then the cache entries will only be stored at the backend LiteSpeed nodes, and cache purges will *not* be synchronized across the nodes.

We do not recommend a third party load balancing solution, if you wish to take advantage of LiteSpeed Cache, and keep cache entries synced between nodes.

Note

The rewrite rules created by the LiteSpeed Cache plugin must be copied to the Load Balancer.

[Learn more about LiteSpeed Web ADC](https://litespeedtech.com/products/litespeed-web-adc), or [contact LiteSpeed Technologies via email](mailto:info@litespeedtech.com) for a customized solution.

## Where are the cached files stored?[¶](#where-are-the-cached-files-stored "Permanent link")

The actual cached pages are stored and managed by LiteSpeed Servers.

Nothing is stored within the WordPress file structure.

## Does LiteSpeed Cache for WordPress work with OpenLiteSpeed?[¶](#does-litespeed-cache-for-wordpress-work-with-openlitespeed "Permanent link")

Yes it can work well with OpenLiteSpeed, although some features (such as ESI) may not be supported. Any setting changes that require modifying the `.htaccess` file will require a server restart.

## Is WooCommerce supported?[¶](#is-woocommerce-supported "Permanent link")

In short, yes. However, for some WooCommerce themes, the cart may not be updated correctly. Please [see this blog post](https://blog.litespeedtech.com/2017/05/31/wpw-fixing-lscachewoocommerce-conflicts/) for a quick tutorial on how to detect this problem and fix it if necessary.

## My site has some pages that are not cacheable. How do I instruct the LiteSpeed Cache Plugin to not cache the page?[¶](#my-site-has-some-pages-that-are-not-cacheable-how-do-i-instruct-the-litespeed-cache-plugin-to-not-cache-the-page "Permanent link")

From the WordPress Dashboard, navigate to **LiteSpeed Cache > Cache > Excludes** and add the necessary pages to **Do Not Cache URIs**.

Tip

By default, the WooCommerce **My Account**, **Checkout**, and **Cart** pages are automatically excluded from caching. You do not need to explicitly exclude them.

## How do I purge a single page from cache?[¶](#how-do-i-purge-a-single-page-from-cache "Permanent link")

When you edit a page, the LiteSpeed Cache for WordPress plugin will automatically purge that page from cache, along with related pages like category, tag, and date archives. Still, there may be occasions where you would like to manually purge a single page. In this case, you would use the **Purge this page - LSCache** option on the Admin Bar. Please see [Purge a Single Page From Cache](lscache__lscwp__beginner.md#purge-a-single-page-from-cache) for further instructions.

## Are my images optimized?[¶](#are-my-images-optimized "Permanent link")

Images are not optimized automatically unless you set **LiteSpeed Cache > Image Optimization > Image Optimization Settings > Auto Request Cron** to `ON`. You may also optimize your images manually. [Learn more](lscache__lscwp__imageopt.md).

## How do I make a WP nonce cacheable in my third-party plugin?[¶](#how-do-i-make-a-wp-nonce-cacheable-in-my-third-party-plugin "Permanent link")

Our API includes a function that uses ESI to "punch a hole" in a cached page for a nonce. This allows the nonce to be cached for 12 hours, regardless of the TTL of the page it is on. Learn more in [the API documentation](lscache__lscwp__api.md#convert-custom-nonce-to-esi).

## How do I enable the crawler?[¶](#how-do-i-enable-the-crawler "Permanent link")

The crawler is disabled by default, and must be enabled by the server admin first.

Once the crawler is enabled on the server side, navigate to **LiteSpeed Cache > Crawler > General Settings** and set **Crawler** to `ON`.

For more detailed information about crawler setup, please see [the Crawler documentation](lscache__lscwp__crawler.md).

## How can I install the LiteSpeed Cache Plugin?[¶](#how-can-i-install-the-litespeed-cache-plugin "Permanent link")

The LiteSpeed Cache plugin works right out of the box with default settings that are appropriate for most sites. Please refer to the [installation instructions](lscache__lscwp__installation.md) to learn how to get started.

## How do I know if LSCache is Working?[¶](#how-do-i-know-if-lscache-is-working "Permanent link")

You can verify that LiteSpeed Cache is working by using the browser's developer tools, as described in [Verify Your Site is Being Cached](lscache__lscwp__installation.md#verify-your-site-is-being-cached).
