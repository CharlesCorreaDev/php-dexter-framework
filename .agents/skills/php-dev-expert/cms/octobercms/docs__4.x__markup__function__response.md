# response() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/response.html

---

# response()

Twig Function

The `response()` function overrides the page from being displayed and returns a response, usually in the form of JSON payload.

```
___TWIG0___
```

The above call will return a response with a `application/json` content type.

```
{
    "foo": "bar"
}
```

By default a status code of `200` will be used. You may specify any status code by passing it as the second argument.

```
___TWIG0___
```

You may also pass custom headers as the third argument.

```
___TWIG0___
```

#### [#](#see-also) See Also

- [Building API Resources](docs__4.x__cms__resources__building-apis.md)

← [ajaxHandler()](docs__4.x__markup__function__ajax-handler.md)[redirect()](docs__4.x__markup__function__redirect.md) →
