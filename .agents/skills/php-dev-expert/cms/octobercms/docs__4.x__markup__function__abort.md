# abort() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/abort.html

---

# abort()

Twig Function

The `abort()` function aborts the successful request path by changing the response code and contents. This is useful for setting a custom HTTP code or displaying the 404 page when a record is not found.

```
___TWIG0___
    ___TWIG1___
___TWIG2___
```

To set the response code and display the theme 404 page, use the `404` code.

```
___TWIG0___
```

Any other code will display the error page, with an optional message as the second argument.

```
___TWIG0___
```

To set the HTTP code in the header without changing the response contents, pass `false` as the second argument.

```
___TWIG0___
```

← [pager()](docs__4.x__markup__function__pager.md)[dump()](docs__4.x__markup__function__dump.md) →
