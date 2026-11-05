# Choosing a Cache Duration for Assets | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/choosing-a-cache-duration-for-assets

---

Search Knowledge Base

# Choosing a Cache Duration for Assets

When configuring your [asset](https://craftcms.com/docs/4.x/assets.html) storage in Craft, many remote filesystems provide a **Cache Duration** setting. By *remote*, we’re referring to adapters that push files to a different host, like [Amazon S3](https://plugins.craftcms.com/aws-s3) or [Digital Ocean Spaces](https://plugins.craftcms.com/dospaces?craft4).

![](https://craftcms.com/dist/images/icon-tip.svg)

This article describes conventions adopted by existing plugins, but may not reflect the exact behavior of *all* remote filesystem adapters. If you have questions about how a specific plugin works, consult its documentation or contact the developer.

## Purpose [#](#purpose "Direct link to Purpose")

The primary function of this setting is to tell the provider what [`Cache-Control` header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cache-Control) (or, more specifically, its `max-age` directive) to send with responses for a given asset.

### How headers are set [#](#how-headers-are-set "Direct link to How headers are set")

Most adapters set this uniformly for *all* assets—even if the underlying service is capable of configuring them individually. Furthermore, the cache duration is only set when creating a new asset, modifying an asset in-place, or moving an asset to a new location in a volume (or to a different volume entirely—which ends up being more akin to deleting and re-creating it). Saving an asset via the control panel doesn’t necessarily involve an operation on the remote file.

Ultimately, it’s up to the filesystem adapter to honor the setting when communicating with the underlying provider, and for the provider to relay that to any caches that sit in front of the origin.

![](https://craftcms.com/dist/images/icon-loading.png)

![Filesystem Cache Duration Setting]()

## What’s the right `max-age` for my assets? [#](#whats-the-right-max-age-for-my-assets "Direct link to What’s the right max-age for my assets?")

The type and average size of asset you anticipate storing in a filesystem are the biggest determining factors when choosing a **Cache Duration** setting.

If your assets aren’t changed frequently after they’re uploaded (no matter the size), you should probably use the [longest-allowable](https://www.ietf.org/rfc/rfc2616.txt) `max-age` setting, **one year** (or `31536000` seconds, as it would appear in an HTTP header):

- Users may be able to reuse assets from their local cache instead of re-downloading them.
- Intermediate caches (like a CDN) will be allowed to hold on to assets and serve them much more quickly than the origin would.

Lowering the `max-age` directive can ensure frequently-updated content is not cached by intermediates, but may significantly increase the load on your origin, which in some cases translates to tangible differences in the cost of a service.

The `max-age` directive is *not* a guarantee that an asset will be cached for the specified duration—rather, it’s the point at which a cached response is considered “stale,” and must be re-fetched from the origin. Many clients (an intermediates) will purge files from their caches long before that date arrives, out of necessity.

![](https://craftcms.com/dist/images/icon-warning.svg)

Keep in mind that a volume’s **Transform Filesystem** can be different from its primary filesystem, so asset transforms may obey a different cache policy!

## `Cache-Control` for the rest of us [#](#cache-control-for-the-rest-of-us "Direct link to Cache-Control for the rest of us")

What about projects that *don’t* use a remote filesystem like S3?

Most HTTP servers provide mechanisms to customize headers sent with static files (resources that aren’t passed to a dynamic back-end like PHP) based on extensions, paths, or other criteria.

![](https://craftcms.com/dist/images/icon-tip.svg)

When configuring your own web server, make sure these patterns don’t inadvertently match normal site URLs, *especially* those that may contain content intended only for a single user (like a shopping cart or account page)—mismanaged `Cache-Control: public` headers can cause users to see stale data, or even leak that data into shared caches.

### Apache [#](#apache "Direct link to Apache")

A common pattern in Apache is to match based on the extension in a request:

```
<FilesMatch ".(pdf|jpe?g|png|gif)$">
  Header set Cache-Control "max-age=31536000, public"
</FilesMatch>
```

This block would go inside of a `VirtualHost` or other configuration container.

### Nginx [#](#nginx "Direct link to Nginx")

Nginx uses similar path-matching directives:

```
location ~* \.(pdf|jpg|jpeg|png|gif)$ {
  add_header Cache-Control "max-age=31536000, public";
}
```

It, too, must be nested within another configuration block—oftentimes the primary `server` directive.

Applies to
Craft CMS 4 and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
