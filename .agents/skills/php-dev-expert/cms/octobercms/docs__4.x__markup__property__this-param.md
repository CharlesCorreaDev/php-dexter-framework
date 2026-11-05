# this.param - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/property/this-param.html

---

# this.param

Twig Property

- [Accessing Page Parameters](docs__4.x__markup__property__this-param.md#accessing-page-parameters)

You can access the current URL parameters via `this.param` and it returns a PHP array.

## [#](#accessing-page-parameters) Accessing Page Parameters

This example demonstrates how to access the `tab` URL parameter in a page.

```
url = "/account/:tab"
```

```
___TWIG0___

    <p>Here are all your details</p>

___TWIG1___

    <p>You are viewing a blast from the past</p>

___TWIG2___
```

If the parameter name is also a variable, then array syntax can be used.

```
url = "/account/:post_id"
```

```
___TWIG0___

<p>The post ID is: ___TWIG1___</p>
```

← [this.theme](docs__4.x__markup__property__this-theme.md)[this.controller](docs__4.x__markup__property__this-controller.md) →
