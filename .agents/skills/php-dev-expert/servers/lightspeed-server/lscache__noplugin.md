# Overview | LiteSpeed Cache Without a Plugin | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/noplugin/

---

# LSCache Configuration Without Plugins[¶](#lscache-configuration-without-plugins "Permanent link")

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

Warning

If there is a plugin available for your application, we strongly recommend you use it. There are [significant advantages to a plugin](lscache__index.md#why-use-a-plugin), that you cannot get with simple rewrite rules.

If there is no plugin available, you can still use LSCache with your web applications, as long as you meet the server requirements.

## Server-level prerequisites[¶](#server-level-prerequisites "Permanent link")

### Obtain a LiteSpeed web server[¶](#obtain-a-litespeed-web-server "Permanent link")

To use LSCache, you need either [LiteSpeed-powered hosting](https://www.litespeedtech.com/partners/hosting-providers) or one of the following LiteSpeed server products:

- LiteSpeed Web Server Enterprise:
  - [Order a new license with caching enabled](https://store.litespeedtech.com/store/cart.php)
  - [Add caching to an existing license](https://docs.litespeedtech.com/licenses/how-to/#add-cache-to-an-existing-license)
- [LiteSpeed Web ADC](https://store.litespeedtech.com/store/cart.php)
- [OpenLiteSpeed](https://openlitespeed.org/#install)

## Install, Configure and Use LSCache[¶](#install-configure-and-use-lscache "Permanent link")

Once you've gotten your web server up and running, you will need to configure the cache root and cache policies, and then set up the rewrite rules that control LSCache's behavior.

Our [Installation and Configuration section](lscache__noplugin__installation.md) will get you going.

## Additional support[¶](#additional-support "Permanent link")

### Community support[¶](#community-support "Permanent link")

If you've explored our documentation and still have questions, you can find assistance from other LiteSpeed users through our community support forums:

- Join [the GoLiteSpeed Slack community](https://www.litespeedtech.com/slack)
- Visit [the LiteSpeed Forums](https://www.litespeedtech.com/support/forum/)

### Official LiteSpeed support[¶](#official-litespeed-support "Permanent link")

To be assisted by a LiteSpeed support technician, you can submit [a support ticket](https://store.litespeedtech.com/store/clientarea.php) from the LiteSpeed website's client area or by emailing `support@litespeedtech.com`.

Note

We're happy to provide limited free support for all LiteSpeed products and offer guidance where documentation may fall short. However, we are unable to offer general system administration support or hands-on assistance.

Should you require individualized configuration support or hands-on assistance with our products, you can order additional services from [the LiteSpeed Store](https://store.litespeedtech.com/store/index.php?rp=/store/supportservice).

Thank you for choosing LiteSpeed!

## Feedback[¶](#feedback "Permanent link")

Do you have some thoughts about this documentation site? Join [our GoLiteSpeed Slack](https://www.litespeedtech.com/slack), drop by [the #documentation channel](https://golitespeed.slack.com/messages/C3VSQTDGQ), and let us know what you think!
