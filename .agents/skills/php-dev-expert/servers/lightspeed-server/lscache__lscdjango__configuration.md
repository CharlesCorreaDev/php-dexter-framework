# Configuration | LiteSpeed Cache for Django | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscdjango/configuration/

---

# Configuration[¶](#configuration "Permanent link")

Use the `@lscache` decorator in your views to cache responses. You can control cache duration, cache type, and tags.

Add the helper in your app views:

```
from lscache_django.decorators import lscache
from django.http import HttpResponse
```

## cache-control[¶](#cache-control "Permanent link")

### Admin page (no cache)[¶](#admin-page-no-cache "Permanent link")

Admin pages should never be cached.

```
@lscache(max_age=0)
def admin_page(request):
    return HttpResponse("Admin page – never cached")
```

This results in the following:

- `x-litespeed-cache-control: no-cache` header
- No cache entry created

### Public page (cached publicly)[¶](#public-page-cached-publicly "Permanent link")

A normal public page, like `/about-us`, cached for 1 hour.

```
@lscache(max_age=3600)
def about_us(request):
    return HttpResponse("About Us – public cache for 1 hour")
```

Result:

- Public cache
- Cached for 3600 seconds

### Blog page (public cache with tags)[¶](#blog-page-public-cache-with-tags "Permanent link")

Tags allow selective purging later:

```
@lscache(max_age=300, tags=["blog", "frontpage"])
def blog_index(request):
    return HttpResponse("Blog page – cached with tags")
```

Result:

- Public cache
- Tagged with `blog` and `frontpage`
- Can be purged by tag without affecting other pages

### Contact page (private cache with no tags)[¶](#contact-page-private-cache-with-no-tags "Permanent link")

Private pages are cached per user and usually don’t need tags:

```
@lscache(max_age=180, cacheability="private")
def contact(request):
    return HttpResponse("Contact page – private cache, no tags")
```

Result:

- Private cache
- Cached for 180 seconds

## Purge Cache[¶](#purge-cache "Permanent link")

Cache purging is done by sending an `X-LiteSpeed-Purge` response header.

Add the helper and the following examples in your app views:

```
from lscache_django import lscache_purge
```

### Purge by tag[¶](#purge-by-tag "Permanent link")

This is the most common and safest way to purge:

```
def purge_blog(request):
    response = HttpResponse("Blog cache purged")
    response["X-LiteSpeed-Purge"] = lscache_purge(
        tags=["blog", "frontpage"],
        stale=True
    )
    return response
```

This purges all cached pages with the `blog` and `frontpage` tags.

### Purge specific URLs (items)[¶](#purge-specific-urls-items "Permanent link")

You can also purge individual paths:

```
def purge_about_us(request):
    response = HttpResponse("About Us cache purged")
    response["X-LiteSpeed-Purge"] = lscache_purge(
        uris=["/about-us/"],
        stale=True
    )
    return response
```

### Purge everything (global purge)[¶](#purge-everything-global-purge "Permanent link")

```
def purge_all(request):
    response = HttpResponse("All cache purged")
    response["X-LiteSpeed-Purge"] = "*"
    return response
```

This sets all public cache files to invalid.

## Restart Python Process[¶](#restart-python-process "Permanent link")

LiteSpeed Web Server and OpenLiteSpeed come with python in detached mode by default, so you will need to restart python with the following command to make any new settings take effect:

```
killall lswsgi
```
