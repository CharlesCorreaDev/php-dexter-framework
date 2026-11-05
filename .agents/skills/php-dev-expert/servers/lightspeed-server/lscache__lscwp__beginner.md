# Beginner's Guide | LSCache for WordPress | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscwp/beginner/

---

# Beginner's Guide[¶](#beginners-guide "Permanent link")

We realize there are a lot of settings in this plugin. If you are overwhelmed and unsure where to begin, read on!

TL;DR

In the event that you want to tweak things a bit, it doesn't hurt to have a rudimentary understanding of the basic cache settings. There's no need to read all of this now, though! Use the default settings, bookmark this page, and come back here when you need the reference.

Video

See a video demonstration of this topic [here](https://youtu.be/cLbsMx-FhR0).

## Where to begin[¶](#where-to-begin "Permanent link")

LSCWP essentially has two purposes: that of a full-page cache for your site's dynamically-generated pages, and that of a site-optimization plugin. Most people who install LSCache do so for the page cache functions. The rest of the features are a nice bonus for those who know how to use them, but they are entirely optional.

Tip

You are free to enable the page cache and ignore everything else.

Upon activation, you'll find that everything is disabled.

To turn on caching, navigate to **LiteSpeed Cache > Cache > Cache** and set **Enable Cache** to `ON`. Click the **Save Changes** button.

You could stop right there, never configure another setting, and the plugin would probably speed up your site very nicely. The default settings are specifically chosen to work with the majority of sites right out of the box.

If you'd like to do a little more, read on!

Warning

You may see a warning similar to this:

```
LSCache caching functions on this page are currently unavailable!
To use the caching functions you must have a LiteSpeed web server or be using QUIC.cloud CDN.
```

It can mean one of two things:

1. Your LiteSpeed server's cache module is not properly configured. If this is the case, please share [this documentation](lscache__start.md#configure-cache-root-and-cache-policy) with your hosting provider and ask them to enable caching for your site.
2. You are not using a LiteSpeed server at all. If this is the case, it is outside of the scope of this Beginner's Guide. Please see [Using LSCache Without a LiteSpeed Server](lscache__lscwp__installation.md#using-lscache-without-a-litespeed-server) for more information.

## LSCache profiles[¶](#lscache-profiles "Permanent link")

LSCache Profiles are a pre-tuned set of options, which can be used for optimizing any website using Litespeed Cache. We recommend the Basic or Advanced profile, as they should not require any extra tweaking on your part. See [the Toolbox page](lscache__lscwp__toolbox.md#using-lscache-profiles) to learn how to apply an LSCache profile.

## The basic cache tabs[¶](#the-basic-cache-tabs "Permanent link")

Let's look at the first four tabs in the Cache section, and see what they do. These are the most basic settings for your cache.

[![LSCWP Basic Cache Tabs](../images/beginner01.png)](https://docs.litespeedtech.com/lscache/lscwp/images/beginner01.png)

Tip

This is a high-level overview. For a detailed explanations of each setting on each tab of the Cache section, please see [the Screen-by-Screen documentation](lscache__lscwp__cache.md).

### Cache tab[¶](#cache-tab "Permanent link")

The first option on the **Cache** tab turns the caching functionality on and off. The remaining settings allow you to decide what types of content will be cached. By default, everything is enabled. If you don't know what these settings do, it's best to leave them set to their defaults.

### TTL tab[¶](#ttl-tab "Permanent link")

TTL stands for "Time to Live," and it refers to the number of seconds a page can remain in cache before it is considered stale. Once a page reaches its TTL, it is purged from cache. We've chosen default TTLs that should work for most sites, but you are free to change them.

If you would like a deeper understanding of how content is cached and purged, [take a look at this blog post](https://blog.litespeedtech.com/2017/07/19/wpw-litespeed-caching-101/). It's written at a high level, so you can get the gist without knowing a lot of jargon.

### Purge tab[¶](#purge-tab "Permanent link")

There are sometimes situations where pages should be purged before their natural expiration. This section allows you to define the rules for that behavior. The default selections should work for most sites, but you can change them if you need to.

Example

If you write a new post, tag it "brownies," and publish it in the "recipes" category, several pages will change: the home page, the recipes category archive page, the brownies tag archive page, your author archive page, and probably some other pages, depending on your theme.

All of the affected pages will need to be purged in order to avoid serving stale content. These settings give you an opportunity to adjust the rules to fit what is needed by your site.

### Excludes tab[¶](#excludes-tab "Permanent link")

You may have pages that you don't want cached at all. These options allow you to exclude specific parts of your site from being cached. Again, for most sites, there will be no need to change these settings. They are provided to allow you to make custom exceptions to the cache rules.

## The other cache tabs[¶](#the-other-cache-tabs "Permanent link")

The rest of the Cache tabs (four or five, depending on whether you have WooCommerce enabled) cover more advanced types of caching. These are covered in-depth on the [Screen-by-Screen Cache section documentation](lscache__lscwp__cache.md).

[![LSCWP Other Cache Tabs](../images/beginner02.png)](https://docs.litespeedtech.com/lscache/lscwp/images/beginner02.png)

### ESI[¶](#esi "Permanent link")

ESI stands for "Edge Side Includes" and is a method through which you can "punch holes" in public content and fill them with private or uncached content. ESI is useful for things such as shopping cart widgets and personalized greetings, but is disabled by default. [Go in-depth here](https://blog.litespeedtech.com/2017/09/06/wpw-esi-and-litespeed-cache/).

Video

See a video demonstration of **What is Edge Side Includes (ESI)?** [here](https://www.youtube.com/watch?v=uYpR6D8n3oE).

### Object[¶](#object "Permanent link")

The settings on this tab allow you to control an external object cache (Memcached or Redis), which is enabled and configured by the server admin.

### Browser[¶](#browser "Permanent link")

Browser cache is a client-level cache for static files. With browser caching enabled, static files (such as images) are stored locally on the user's device the first time they are requested. After that, the content is pulled from their local storage until the browser cache expires. The settings on this tab control the browser cache.

### Advanced[¶](#advanced "Permanent link")

As you might guess from the name of this tab, it's aimed at more experienced users. You are not likely to need this tab unless you have some kind of conflict with another cache plugin.

### WooCommerce[¶](#woocommerce "Permanent link")

LSCache is compatible with WooCommerce. If you have WooCommerce enabled, this tab will appear, and will allow you to configure settings related to caching shop content.

## Other plugin sections[¶](#other-plugin-sections "Permanent link")

There are many more sections to explore in the LSCache plugin. Each of these is documented in much greater detail in the Screen-by-Screen section. Links to each section are provided in the descriptions below.

[![LSCWP Menu](../images/beginner03.png)](https://docs.litespeedtech.com/lscache/lscwp/images/beginner03.png)

### Dashboard[¶](#dashboard "Permanent link")

The LiteSpeed Cache Dashboard allows you to see the status of all of your LSCache and QUIC.cloud services (Image Optimization, Critical CSS Generation, Low-Quality Image Placeholders, Cache Crawler, etc.) at a glance. You can also check your page load time and your page speed score. [Learn more](lscache__lscwp__dashboard.md).

### General[¶](#general "Permanent link")

The settings in this section control your usage of QUIC.cloud services, the ability to auto-upgrade the plugin, and which messages you want to have displayed on the dashboard. [Learn more](lscache__lscwp__general.md).

### CDN[¶](#cdn "Permanent link")

This section allows you to configure your Content Delivery Network for use with WordPress. If you don't use a CDN, don't worry about it. CDN support is disabled by default. [Learn more](lscache__lscwp__cdn.md).

### Image optimization[¶](#image-optimization "Permanent link")

LiteSpeed Cache for WordPress provides the ability to optimize your images, making them smaller, and faster to transmit. This is done through a QUIC.cloud service and can be controlled in this section of the plugin. It is disabled by default. [Learn more](lscache__lscwp__imageopt.md).

### Page optimization[¶](#page-optimization "Permanent link")

There are several non-cache measures you can take to speed up your WordPress site, and many of them are supported in this tab. CSS and Javascript minification and combination, HTTP/2 push, asynchronous and deferred load… if you don't know what these things mean, don't worry. They are disabled by default. [Learn more](lscache__lscwp__pageopt.md).

### Database[¶](#database "Permanent link")

This section allows you to optimize your WordPress database. Database optimization is a useful tool when it comes to speeding up your site. LSCWP's DB Optimizer gives you an easy way to execute some of these tasks in your WordPress database. [Learn more](lscache__lscwp__database.md).

### Crawler[¶](#crawler "Permanent link")

The crawler is disabled by default. When it's active, it travels your site, refreshing any pages that may have expired from the cache. Crawling can be a resource-intensive process, and not all hosting providers will allow its use. If your hosting provider does allow crawling, it's a nice way to keep your cache fresh. [Learn more](lscache__lscwp__crawler.md).

### Toolbox[¶](#toolbox "Permanent link")

When you need to manually purge the cache, export your site settings, or debug an issue, you'll find the means in the Toolbox section. Probably the most useful thing you will find here is the Environment Report. If you are having a problem and LiteSpeed support asks for your Report Number, [this](lscache__lscwp__toolbox.md#report-tab) is where you would go to get it. [Learn more](lscache__lscwp__toolbox.md).

## Purging the cache[¶](#purging-the-cache "Permanent link")

When you edit a page, the LiteSpeed Cache for WordPress plugin will automatically purge that page from cache, along with related pages like category, tag, and date archives. Still, there may be rare occasions where you would like to manually remove your whole site, or a single page from cache, so that the cache may be rebuilt with fresh content.

### Purge the whole site from cache[¶](#purge-the-whole-site-from-cache "Permanent link")

Note

This is not something you should have to do often (or *at all*, really). The plugin should be managing your cache well enough that a step like this is unnecessary. If you find yourself having to purge your whole site regularly, post a question on [our WordPress support forum](https://wordpress.org/support/plugin/litespeed-cache). We should be able to suggest a way to avoid manual purges.

[![LSCWP Purge All](../images/beginner04.png)](https://docs.litespeedtech.com/lscache/lscwp/images/beginner04.png)

From the WP-Admin Dashboard, navigate to **LiteSpeed Cache > Toolbox > Purge**. Click the **Purge All LSCache** button. All of the pages on your site will be cleared from cache.

There are other types of Purge actions on this page, but you can ignore them, if you have a simple setup and have not enabled any of the optimization features. To learn more about what the other Purge actions do, you can take a look at [the Purge documentation](lscache__lscwp__toolbox.md#purge-tab).

### Purge a single page from cache[¶](#purge-a-single-page-from-cache "Permanent link")

[![LSCWP Purge Page](../images/beginner05.png)](https://docs.litespeedtech.com/lscache/lscwp/images/beginner05.png)

To clear the cache for a single page, you would use the **Purge this page - LSCache** option. Here's how:

First, make sure you are logged into your WordPress Admin account. Purging a page is not done from the WP-Admin Dashboard. It's done from the front end (visitor view) of your site, but you need to be logged in so that the Admin Bar appears.

In your browser visit the page you wish to purge. Hover your cursor over the LiteSpeed Cache icon on the black Admin Bar at the top of the page. (The LiteSpeed Cache icon looks like a diamond with a tiny lightning bolt in the center.) A menu will pop up, and the first option will be **Purge this page - LSCache**. Click the link. The cache will be purged for that page, and the page will be reloaded.

## Further questions[¶](#further-questions "Permanent link")

If anything in this article is not clear enough, or you feel the need for additional help, please don't hesitate to post on [our WordPress support forum](https://wordpress.org/support/plugin/litespeed-cache). We enthusiastically support this plugin and are happy to answer any of your questions!
