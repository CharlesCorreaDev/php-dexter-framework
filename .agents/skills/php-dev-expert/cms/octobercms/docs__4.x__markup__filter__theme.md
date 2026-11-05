# |theme - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/filter/theme.html

---

# |theme

Twig Filter

- [Combining CSS and JavaScript](docs__4.x__markup__filter__theme.md#combining-css-and-javascript)
- [Combiner Aliases](#combiner-aliases)
- [External Combiner Paths](#external-combiner-paths)

The `|theme` filter returns an address relative to the active theme path of the website. The result is an absolute URL, including domain and protocol, to the asset specified in the filter parameter. Theme assets usually reside in the **assets** subdirectory of a theme directory.

```
<script type="text/javascript" src="___TWIG0___"></script>
```

If the website address is **[https://octobercms.com  (opens new window)](https://octobercms.com)** and the active theme is called `website` the above example would output the following:

```
<script type="text/javascript" src="http://october.com/themes/website/assets/js/menu.js"></script>
```

For assets bundled with Vite, use the [`vite()` function](docs__4.x__markup__function__vite.md) instead.

## [#](#combining-css-and-javascript) Combining CSS and JavaScript

The filter can also be used to combine assets of the same type by passing an array of files.

```
<link href="___TWIG0___" rel="stylesheet">
```

> **Note**: You can enable the assets minification with the `enableAssetMinify` parameter in the `config/cms.php` script. By default the minification is disabled.

### [#](#combiner-aliases) Combiner Aliases

The asset combiner supports common aliases that substitute file paths, these will begin with the `@` symbol. For example the [AJAX framework assets](docs__4.x__cms__ajax__introduction.md) can be included in the combiner.

```
<script src="___TWIG0___"></script>
```

The following aliases are supported:

| Alias | Description |
| --- | --- |
| `@framework` | AJAX framework extras, subsitute for `{% framework %}` tag (JavaScript) |
| `@framework.extras` | AJAX framework extras, subsitute for `{% framework extras %}` tag (JavaScript, CSS) |

:: tip The same alias can be used for JavaScript or CSS, for example `@framework.extras`. At least one other reference with a CSS or JS file extension is needed in the array to determine which to use. :::

### [#](#external-combiner-paths) External Combiner Paths

In some cases you may wish to combine a file outside the theme, this is achieved by prefixing the path with a symbol to create a dynamic path. For example, a path beginning with `~/` will create a path relative to the application:

```
<script src="___TWIG0___"></script>
```

These symbols are supported for creating dynamic paths:

| Symbol | Description |
| --- | --- |
| `~` | Relative to the application directory |
| `$` | Relative to the plugins directory |
| `#` | Relative to the themes directory |

← [|link](docs__4.x__markup__filter__link.md)[|media](docs__4.x__markup__filter__media.md) →
