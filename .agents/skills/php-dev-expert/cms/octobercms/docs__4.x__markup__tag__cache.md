# {% cache %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/cache.html

---

# {% cache %}

Twig Tag

The `{% cache %}` tag is used to cache content used on a page or partial. The cache key included with the tag can be any string except for the following reserved characters `{}()/\@:;`.

```
___TWIG0___
    Cached forever
___TWIG1___
```

You may set the cache to expire after a specific amount of time, specify the expiration time in minutes using the `ttl` modifier.

```
___TWIG0___
    Cached for 5 minutes
___TWIG1___
```

It is good practice is to embed some useful information in the key that allows the cache to automatically expire when it must be refreshed:

- Give each cache a unique name and namespace it like your templates.
- Embed an integer that you increment whenever the template code changes (to automatically invalidate all current caches).
- Embed a unique key that is updated whenever the variables used in the template code changes.

This allows you to use a cheap cache key lookup (e.g. updated timestamp on a model) to cache more expensive contents inside.

```
___TWIG0___
    <!-- Expensive Blog Post Contents Here -->
___TWIG1___
```

It is important to remember that the cache tag creates a new scope for variables. This means the changes are local to the template fragment.

```
___TWIG0___

___TWIG1___
    ___TWIG2___
    ___TWIG3___
    Some code
___TWIG4___

___TWIG5___
___TWIG6___
```

← [{% flash %}](docs__4.x__markup__tag__flash.md)[{% verbatim %}](docs__4.x__markup__tag__verbatim.md) →
