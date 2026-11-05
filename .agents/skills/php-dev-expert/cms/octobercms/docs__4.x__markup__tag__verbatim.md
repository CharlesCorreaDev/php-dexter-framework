# {% verbatim %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/verbatim.html

---

# {% verbatim %}

Twig Tag

The `{% verbatim %}` tag marks entire sections as being raw text that should not be parsed.

```
___TWIG0___<p>Hello, ___TWIG1___</p>___TWIG2___
```

The above will render in the browser exactly as:

```
<p>Hello, ___TWIG0___</p>
```

For example, AngularJS uses the same templating syntax so you can decide which variables to use for each.

```
<p>Hello ___TWIG0___, this is parsed by Twig</p>

___TWIG1___
    <p>Hello ___TWIG2___, this is parsed by AngularJS</p>
___TWIG3___
```

← [{% cache %}](docs__4.x__markup__tag__cache.md)[{% macro %}](docs__4.x__markup__tag__macro.md) →
