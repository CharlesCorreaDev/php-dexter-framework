# Overview | LSCache Developers Guide | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/devguide/

---

# Developer's Guide for LSCache[¶](#developers-guide-for-lscache "Permanent link")

## Why use a plugin?[¶](#why-use-a-plugin "Permanent link")

The LiteSpeed Cache Engine can be controlled through rewrite rules in the `.htaccess` file of a web app's document root. So what do you gain by using an LSCache plugin?

An LSCache plugin bridges the knowledge gap between a web app and the Cache Engine.

Put another way: web apps have rules about what content may be cached, for how long it may be cached, and what events would cause a cache object to become stale. LSCache plugins are a way of communicating these web app rules to the Cache Engine. LSCache plugins allow you to manage the cache in such a way that more objects may be stored for longer periods and managed with unparalleled accuracy.

There are things you can do with an LSCache plugin that you can't do with rewrite rules. Here are a few:

### Purge the Cache Intelligently[¶](#purge-the-cache-intelligently "Permanent link")

"Smart Purge" technology is the most compelling reason to choose a plugin over rewrite rules.

When content in your web application changes, an LSCache plugin is able to analyze dependencies and trigger a cache purge not only for the content that has changed, but for *all other content that is related to it*. In WordPress, that means that a new blog post triggers a cache purge for the relevant archive pages. In PrestaShop, that means that a change in a product's stock level triggers a purge of that product's detail page as well as the product's category pages.

On the other hand, if you are only using rewrite rules, the cache is emptied when the TTL (Time to Live) is expired. That is it. You have no other control.

### Handle Stable Content[¶](#handle-stable-content "Permanent link")

Let’s say that you were to cache a page with a TTL of one week. No matter the level of traffic - one request per hour or 500 requests in a 10-second period - a single hit to the back-end during that *entire week* is all that would be necessary. You can set such a long TTL confidently with an LSCache plugin, because you know if content changes, Smart Purge will kick in and trigger any necessary purges.

You have no such assurances with rewrite rules. And so, with rewrite rules, you must keep the TTL relatively short in order to avoid the possibility of serving stale content.

Because of these short TTLs, rewrite-rule-based caches must re-cache frequently, even if content is relatively stable. Blindly re-caching content in this way leads to wasted CPU resources.

### Handle Private and Public Content[¶](#handle-private-and-public-content "Permanent link")

A plugin can distinguish between private content and public content, whereas rewrite rules cannot. Additionally, LSCache plugins have the ability to use ESI to serve private blocks of data within public pages, which means you can easily serve cached pages to logged-in users. This is not possible with rewrite rules alone.

## Glossary[¶](#glossary "Permanent link")

### Cache Objects[¶](#cache-objects "Permanent link")

LiteSpeed Cache is a full page cache, and so LSCache objects contain web page content.

Each cache object is saved as one file under hashed directories, and is identified by a Cache Key which has the following components:

- Host
- URI
- Query String (optional)
- Client IP (private cache only)
- Session Cookies (private cache only)
- Vary String (optional)

Assuming the Cache Engine has been enabled via [Apache directive](lscache__controls.md#apache-directives), cache objects are stored when your plugin sends a [response header[(../controls/#response-headers) to the LSCache Engine, and they are retrieved when a request matches a [rewrite rule](lscache__controls.md#rewrite-rules) in .htacess.

### Public Cache[¶](#public-cache "Permanent link")

This is cache that is shared by all users.

For a public cache object, the key is comprised of:

- Host
- URI
- Query String (optional)
- Vary String (optional)

### Private Cache[¶](#private-cache "Permanent link")

This cache stores objects for individual clients. Private cache is used when the page may contain personalized content.

For a private cache object, the key is comprised of:

- Host
- URI
- Query String (optional)
- Client IP (private cache only)
- Session Cookies (private cache only)
- Vary String (optional)

LiteSpeed's cache engine maintains a list of private cookie names. If any of these cookies is detected, it is used to build the cache key for Private Cache. As of this writing, the auto-detect list includes the following cookie names:

- `frontend`
- `PHPSESSID`
- `xf_session`
- `wp_woocommerce_session_*`
- `lsc_private`(this is a LiteSpeed-Cache-specific private cookie name)

We may continue to add more well known private cookie names to this list.

If none of these predefined cookie names is detected, then the cache engine will generate the cache key based on a combination of all the private cookies it receives. This will increase the complexity, and potentially increase the chance of a mismatch in operations.

Tip

Auto-detected cookie value sizes must be at least 16 bytes to be included in the private cache key.

### Cache Vary[¶](#cache-vary "Permanent link")

You may need to save different variations of the same URL. Variations can be based on user agent (to have different desktop and mobile views), language, user classification (registered vs. guest), geographic location, and currency, among other things.

Traditionally, cache varies are set by a vary response header, but this is not enough for current web applications. We expand it with LiteSpeed-specific response headers and rewrite rule environment variables. The vary string can be set directly via a rewrite rule, or fetched from a special cookie value.

You can find more complete information in [our Cache Vary documentation](lscache__devguide__advanced.md#cache-varies).

## How it Works[¶](#how-it-works "Permanent link")

This is how the HTTP request and response work at a high level. Note your LSCache plugin only has a role when it comes to uncached content. If the requested cache object is found, the web app is bypassed completely.

### If the Requested Page is Cached[¶](#if-the-requested-page-is-cached "Permanent link")

1. LiteSpeed Web Server receives a request from the client
2. .htaccess is checked for any [Apache directives](lscache__controls.md#apache-directives) or [rewrite rules](lscache__controls.md#rewrite-rules), which are then applied to the request
3. LSWS checks the cache key for a cache object to match the request, and finds one.
4. LSWS serves the cache object to the client in response to the original request

### If the Requested Page is Not Cached[¶](#if-the-requested-page-is-not-cached "Permanent link")

1. LiteSpeed Web Server receives a request from the client
2. .htaccess is checked for any [Apache directives](lscache__controls.md#apache-directives) or [rewrite rules](lscache__controls.md#rewrite-rules), which are then applied to the request
3. LSWS checks the cache key for a cache object to match the request, and doesn't find one.
4. LSWS passes the request to the web app, which generates the content.
5. Your LSCache plugin adds any applicable [response headers](lscache__controls.md#response-headers) and kicks a response back to LSWS
6. The LSCache Engine applies the response headers and saves a new cache object, if applicable
7. LSWS serves the generated content to the client in response to the original request
