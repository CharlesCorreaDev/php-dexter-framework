# this.layout - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/property/this-layout.html

---

# this.layout

Twig Property

- [Properties](docs__4.x__markup__property__this-layout.md#properties)
- [id](#id)
- [description](#description)

You can access the current layout object via `this.layout` and it returns the object `Cms\Classes\Layout`.

## [#](#properties) Properties

`this.layout` has the following properties.

### [#](#id) id

Converts the layout file name and folder name to a CSS friendly identifier.

```
<body class="layout-___TWIG0___">
```

If the layout file was **default.htm** this would generate a class name of `layout-default`.

### [#](#description) description

The layout description as defined by the configuration.

```
<meta name="description" content="___TWIG0___">
```

← [this.page](docs__4.x__markup__property__this-page.md)[this.theme](docs__4.x__markup__property__this-theme.md) →
