# redirect() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/redirect.html

---

# redirect()

Twig Function

The `redirect()` function redirects the response to a URL or theme page.

To perform a redirect, pass the first argument as the destination, as either a CMS page name or a URL address.

```
___TWIG0___
    ___TWIG1___
___TWIG2___
```

Page parameters can be passed as the second argument.

```
___TWIG0___
```

To redirect to a URL pass the fully qualified address instead of the page name.

```
___TWIG0___
```

To include a redirect code, such as `302` (temporary) or `301` (permanent), use the second or third argument. The default is code `302`.

```
___TWIG0___
```

← [response()](docs__4.x__markup__function__response.md)[collect()](docs__4.x__markup__function__collect.md) →
