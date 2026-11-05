# vite() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/vite.html

---

# vite()

Twig Function

- [Dev Server](docs__4.x__markup__function__vite.md#dev-server)
- [Child Themes](docs__4.x__markup__function__vite.md#child-themes)

The `vite()` function renders the tags for assets that [Vite  (opens new window)](https://vite.dev) builds inside the active theme. Pass the entry points, as they are listed in the theme's **vite.config.js** file.

```
___TWIG0___
```

The function reads the build manifest from the **assets/dist** directory of the theme and outputs the tags for the built files, including preload tags for their dependencies.

```
<link rel="preload" as="style" href="https://octobercms.com/themes/mytheme/assets/dist/theme-B2xQ1h3a.css" />
<link rel="modulepreload" as="script" href="https://octobercms.com/themes/mytheme/assets/dist/app-C9kD2fRe.js" />
<link rel="stylesheet" href="https://octobercms.com/themes/mytheme/assets/dist/theme-B2xQ1h3a.css" />
<script type="module" src="https://octobercms.com/themes/mytheme/assets/dist/app-C9kD2fRe.js"></script>
```

A single entry point can be passed as a string.

```
___TWIG0___
```

The second argument sets a different build directory, relative to the theme directory.

```
___TWIG0___
```

## [#](#dev-server) Dev Server

While the Vite dev server runs, a **hot** file in the theme directory holds its address. The function then outputs the Vite client and the entry points from the dev server instead of the build.

```
<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/assets/js/app.js"></script>
```

See the [Vite article](docs__4.x__cms__themes__vite.md) for setting up a theme and its **vite.config.js** file.

## [#](#child-themes) Child Themes

In a [child theme](docs__4.x__cms__themes__child-themes.md) that doesn't have its own build, the function uses the build of the parent theme.

← [html()](docs__4.x__markup__function__html.md)
