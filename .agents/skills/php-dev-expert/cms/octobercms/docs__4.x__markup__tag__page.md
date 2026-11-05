# {% page %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/page.html

---

# {% page %}

Twig Tag

The `{% page %}` tag renders the contents of a [page](docs__4.x__cms__themes__pages.md) into a layout template. See [layouts](docs__4.x__cms__themes__layouts.md) for a basic example.

The `{% page %}` tag parses the raw markup from a page template. A page template may inject content both into placeholder(s) as well as define raw markup.

```
description="example layout"
```

```
<html>
    <head>
        ___TWIG0___
    </head>
    <body>
        ___TWIG1___
        ...
```

Placing content in the `head` placeholder.

```
description="example page"
```

```
___TWIG0___
    <meta name="foo" content="bar">
___TWIG1___

<p>My content.</p>
```

The page rendered with the template would result in:

```
<html>
    <head>
        <meta name="foo" content="bar">
    </head>
    <body>
        <p>My content.</p>
        ...
```

← [this.site](docs__4.x__markup__property__this-site.md)[{% partial %}](docs__4.x__markup__tag__partial.md) →
