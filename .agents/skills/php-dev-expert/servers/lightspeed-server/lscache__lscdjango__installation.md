# Installation | LiteSpeed Cache for Django | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lscdjango/installation/

---

# Installation[¶](#installation "Permanent link")

Before installing and activating the LSCache plugin, deactivate all other full-page cache plugins.

Tip

You can still use other types of cache (like object cache, or browser cache), but only one full-page cache should be used at a time.

## Package Installation[¶](#package-installation "Permanent link")

Note

Please see the [Overview](lscache__lscdjango.md#server-level-prerequisites) for the server-level requirements before attempting to install this package.

Install the lscache-django package with the `pip` command:

```
pip install lscache-django
```

Add `lscache_django` to your `INSTALLED_APPS` in `settings.py`:

```
INSTALLED_APPS = [
    ...
    'lscache_django',
]
```

Add the middleware:

```
MIDDLEWARE = [
    ...
    'lscache_django.middleware.LSCacheMiddleware',
]
```

## Usage[¶](#usage "Permanent link")

The `X-LiteSpeed-Cache-Control` response header won't be returned by default. You will need to [set up the decorator in your views](lscache__lscdjango__configuration.md) in order to cache responses.
