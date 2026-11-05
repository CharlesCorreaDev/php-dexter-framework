# Web Page Caching — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/general/caching.html

---

# Web Page Caching[](#web-page-caching "Link to this heading")

CodeIgniter lets you cache your pages in order to achieve maximum
performance.

Although CodeIgniter is quite fast, the amount of dynamic information
you display in your pages will correlate directly to the server
resources, memory, and processing cycles utilized, which affect your
page load speeds. By caching your pages, since they are saved in their
fully rendered state, you can achieve performance much closer to that of
static web pages.

## [How Does Caching Work?](#id1)[](#how-does-caching-work "Link to this heading")

Caching can be enabled on a per-page basis, and you can set the length
of time that a page should remain cached before being refreshed.

Note

Per-page means per URI. Since v4.5.0, the HTTP method of the
request is also taken into account. This means that the same URI will be
cached separately if the HTTP method is different.

Warning

Web Page Caching is shared between requests with the same HTTP
method and URI. Its cache key does not vary by authenticated user, cookies,
authorization headers, `Cache-Control`, or `Vary`. Do not use it for
protected or personalized responses, as cached responses may be returned
before authentication and authorization filters run.

When a page is loaded for the first time, the page will be cached using the
currently configured cache engine. On subsequent page loads, the cache
will be retrieved and sent to the requesting user’s browser.

If it has expired, it will be deleted and refreshed before being sent to the
browser.

Note

The Benchmark tag is not cached so you can still view your page
load speed when caching is enabled.

## [Configuring Caching](#id2)[](#configuring-caching "Link to this heading")

### [Setting Cache Engine](#id3)[](#setting-cache-engine "Link to this heading")

Before using Web Page Caching, you must set the cache engine up by editing
**app/Config/Cache.php**. See [Configuring the Cache](libraries__caching.md#libraries-caching-configuring-the-cache)
for details.

### [Setting $cacheQueryString](#id4)[](#setting-cachequerystring "Link to this heading")

You can set whether or not to include the query string when generating the cache
with `Config\Cache::$cacheQueryString`.

Valid options are:

- `false`: (default) Disabled. The query string is not taken into account; the
  same cache is returned for requests with the same URI path but different query
  strings.
- `true`: Enabled, take all query parameters into account. Be aware that this
  may result in numerous cache generated for the same page over and over
  again.
- **array**: Enabled, but only take into account the specified list of query
  parameters. E.g., `['q', 'page']`.

### [Setting $cacheStatusCodes](#id5)[](#setting-cachestatuscodes "Link to this heading")

Added in version 4.7.0.

You can control which HTTP response status codes are allowed to be cached
with `Config\Cache::$cacheStatusCodes`.

Valid options are:

- `[]`: (default) Cache all HTTP status codes. This maintains backward
  compatibility but may cache temporary error pages.
- `[200]`: (Recommended) Only cache successful responses. This prevents
  caching of error pages (404, 500, etc.) that should be temporary.
- array of status codes: Cache only specific status codes. For example:

  - `[200, 404]`: Cache successful responses and not found pages.
  - `[200, 404, 410]`: Cache successful responses and specific error codes.
  - `[200, 201, 202, 203, 204]`: All 2xx successful responses.

Warning

Using an empty array `[]` may cache temporary error pages (404, 500, etc).
For production applications, consider restricting this to `[200]` to avoid
caching errors that should be temporary. For example, a cached 404 page would
remain cached even after the resource is created, until the cache expires.

Note

Regardless of this setting, `DownloadResponse` and `RedirectResponse`
instances are never cached by the `PageCache` filter.

## [Enabling Caching](#id6)[](#enabling-caching "Link to this heading")

To enable caching, put the following tag in any of your controller
methods:

```
<?php

$this->cachePage($n);
```

Where `$n` is the number of **seconds** you wish the page to remain
cached between refreshes.

The above tag can go anywhere within a method. It is not affected by
the order that it appears, so place it wherever it seems most logical to
you. Once the tag is in place, your pages will begin being cached.

Important

If you change configuration options that might affect
your output, you have to manually delete your cache.

## [Deleting Caches](#id7)[](#deleting-caches "Link to this heading")

If you no longer wish to cache a page you can remove the caching tag and
it will no longer be refreshed when it expires.

Note

Removing the tag will not delete the cache immediately. It will
have to expire normally.
