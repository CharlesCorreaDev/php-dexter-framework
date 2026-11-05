# this.request - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/property/this-request.html

---

# this.request

Twig Property

- [this.request.method](docs__4.x__markup__property__this-request.md#this-request-method)
- [this.request.ajax](docs__4.x__markup__property__this-request.md#this-request-ajax)
- [this.request.pjax](docs__4.x__markup__property__this-request.md#this-request-pjax)
- [this.request.pjaxCached](docs__4.x__markup__property__this-request.md#this-request-pjaxcached)

Allows access to the current request object, including request method.

## [#](#this-request-method) this.request.method

You can access the current request method object via `this.request.method` and it returns the HTTP verb in uppercase.

```
___TWIG0___
    <!-- Do GET Logic -->
___TWIG1___
    <!-- Do POST Logic -->
___TWIG2___
```

## [#](#this-request-ajax) this.request.ajax

To check if the current request uses the AJAX header, access the `this.request.ajax` property.

```
___TWIG0___
    Request was submitted via AJAX
___TWIG1___
```

## [#](#this-request-pjax) this.request.pjax

To check if the current request was made using the [Turbo Router](docs__4.x__ajax__turbo-router.md), access the `this.request.pjax` property.

```
___TWIG0___
    Page was loaded via PJAX
___TWIG1___
```

## [#](#this-request-pjaxcached) this.request.pjaxCached

Use the `this.request.pjaxCached` property to also check if the [Turbo Router](docs__4.x__ajax__turbo-router.md) request had a cached snapshot coming before it.

```
___TWIG0___
    Page was loaded via PJAX with a snapshot
___TWIG1___
```

← [this.session](docs__4.x__markup__property__this-session.md)[this.site](docs__4.x__markup__property__this-site.md) →
