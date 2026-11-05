# this.theme - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/property/this-theme.html

---

# this.theme

Twig Property

- [Properties](docs__4.x__markup__property__this-theme.md#properties)
- [id](#id)
- [config](#config)

You can access the current theme object via `this.theme` and it returns the object `Cms\Classes\Theme`, a reference to the [theme customization object](docs__4.x__cms__themes__settings.md).

## [#](#properties) Properties

`this.theme` will provide direct access to form field values, defined by any theme customization. It also has the following properties natively.

### [#](#id) id

Converts the theme directory name to a CSS friendly identifier.

```
<body class="theme-___TWIG0___">
```

If the theme directory was **website** this would generate a class name of `theme-website`.

### [#](#config) config

An array containing all the theme configuration values found in the `theme.yaml` file.

```
<meta name="description" content="___TWIG0___">
```

← [this.layout](docs__4.x__markup__property__this-layout.md)[this.param](docs__4.x__markup__property__this-param.md) →
