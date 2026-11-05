# Minifying JavaScript and CSS with Webpack Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/minification.html

---

# Minifying JavaScript and CSS with Webpack Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/minification.rst)

When building for production (`encore production`), Encore minifies your assets
to make them as small as possible. Both JavaScript and CSS minification are backed
by the unified [minimizer-webpack-plugin](https://github.com/webpack/minimizer-webpack-plugin), which lets you pick and configure the
underlying minifier through the `minify` option.

7.0

Before Encore 7.0, JavaScript minification was handled by
`terser-webpack-plugin` (configured via `configureTerserPlugin()`) and CSS
minification by `css-minimizer-webpack-plugin`. Both plugins, which have
since been archived, were replaced by the unified [minimizer-webpack-plugin](https://github.com/webpack/minimizer-webpack-plugin)
in Encore 7.0:

- `configureTerserPlugin()` was **removed**; use the new
  [configureJsMinimizerPlugin()](current__frontend__encore__minification.md#encore-configure-js-minimizer) instead
  (it takes the same callback).
- **CSS minification is no longer enabled by default.** You must choose and
  configure a CSS minifier (see [below](current__frontend__encore__minification.md#encore-configure-css-minimizer)),
  otherwise CSS is not minified in production.
- Minifier packages (`lightningcss`, `cssnano`, `csso`, `clean-css`,
  `esbuild`, `@swc/*`, `uglify-js`) are now optional peer dependencies,
  installed on demand. In particular `cssnano`, previously pulled in
  transitively by `css-minimizer-webpack-plugin`, is no longer installed by
  default. A clear error is thrown at build time if the package backing your
  selected minifier is missing.

## [Minifying JavaScript](#minifying-javascript "Permalink to this headline")

JavaScript is minified out of the box (no extra package required) using Terser,
which is bundled inside `minimizer-webpack-plugin`. Use
`configureJsMinimizerPlugin()` to tweak its options or switch to another
minifier.

The `MinimizerPlugin` class is passed as the second argument of the callback, so
you don't need to import `minimizer-webpack-plugin` yourself (it would not
resolve under pnpm, being a transitive dependency of Encore):

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
```

```
// webpack.config.js
// ...

// Tweak the default (Terser) options
Encore.configureJsMinimizerPlugin((options) => {
    options.terserOptions = {
        // ...
    };
});

// Or switch the JS minimizer to esbuild (npm install --save-dev esbuild)
Encore.configureJsMinimizerPlugin((options, MinimizerPlugin) => {
    options.minify = MinimizerPlugin.esbuildMinify;
});
```

Available JS minimizers: `terserMinify` (default, bundled), `uglifyJsMinify`,
`swcMinify` and `esbuildMinify`. Install the package backing the minimizer you
choose (e.g. `npm install --save-dev uglify-js` for `uglifyJsMinify`); a clear
error is thrown at build time if it is missing.

## [Minifying CSS](#minifying-css "Permalink to this headline")

Since Encore 7.0, CSS is **not** minified by default. Enable it by choosing a
minifier via `configureCssMinimizerPlugin()`. As above, the `MinimizerPlugin`
class is passed as the second argument of the callback:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
```

```
// webpack.config.js
// ...

// Lightning CSS, a fast Rust-based minifier (npm install --save-dev lightningcss)
Encore.configureCssMinimizerPlugin((options, MinimizerPlugin) => {
    options.minify = MinimizerPlugin.lightningCssMinify;
});

// cssnano, PostCSS-based, closest to the previous default
// (npm install --save-dev cssnano postcss)
Encore.configureCssMinimizerPlugin((options, MinimizerPlugin) => {
    options.minify = MinimizerPlugin.cssnanoMinify;
});
```

Other supported CSS minimizers: `csso`, `clean-css`, `esbuild`
(`esbuildMinifyCss`) and `@swc/css` (`swcMinifyCss`).

Tip

If you are upgrading from Encore 6.0 and want to keep the previous behavior
(CSS minified with `cssnano`), install `cssnano` and `postcss`, then add
the `cssnanoMinify` configuration shown above.

See the [minimizer-webpack-plugin](https://github.com/webpack/minimizer-webpack-plugin) documentation for all the available options.

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
