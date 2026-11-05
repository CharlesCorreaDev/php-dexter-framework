# FAQ | LiteSpeed Cache for XenForo 2 | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscxf/faq/

---

# Frequently Asked Questions[¶](#frequently-asked-questions "Permanent link")

## Is the LiteSpeed Cache plugin free?[¶](#is-the-litespeed-cache-plugin-free "Permanent link")

Yes, this LSCache plugin will always be free and open source. That said, a LiteSpeed server is required, and there are fees associated with some LiteSpeed server editions.

## What server software is required for this plugin?[¶](#what-server-software-is-required-for-this-plugin "Permanent link")

A LiteSpeed server is required in order to use this plugin. You will need one of the following (any single server or cluster including one of these will work):

- LiteSpeed Web Server Enterprise with LSCache Module (v5.0.10+)
- LiteSpeed WebADC (v2.0+)
- OpenLiteSpeed (v1.4.17+)

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

## How can I install the LiteSpeed Cache Plugin?[¶](#how-can-i-install-the-litespeed-cache-plugin "Permanent link")

The LiteSpeed Cache plugin works right out of the box with default settings that are appropriate for most sites. Please refer to the [installation instructions](lscache__lscxf__installation.md) to learn how to get started.

## How do I know if LSCache is Working?[¶](#how-do-i-know-if-lscache-is-working "Permanent link")

You can verify that LiteSpeed Cache is working by using the browser's developer tools, as described in [Verify Your Site is Being Cached](lscache__lscxf__installation.md#verify-your-site-is-being-cached).
