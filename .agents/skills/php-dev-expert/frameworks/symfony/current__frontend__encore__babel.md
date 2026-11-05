# Configuring Babel with Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/babel.html

---

# Configuring Babel with Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/babel.rst)

[Babel](https://babeljs.io/) is automatically configured for all `.js` and `.jsx` files via the
`babel-loader` with sensible defaults (e.g. with the `@babel/preset-env` and
`@babel/preset-react` if requested).

Need to extend the Babel configuration further? The easiest way is via
`configureBabel()`:

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
15
16
17
18
19
20
21
22
23
```

```
// webpack.config.js
// ...

Encore
    // ...

    .configureBabel(function(babelConfig) {
        // add additional presets
        babelConfig.presets.push('@babel/preset-flow');

        // no plugins are added by default, but you can add some
        babelConfig.plugins.push('styled-jsx/babel');
    }, {
        // node_modules is not processed through Babel by default
        // but you can allow some specific modules to be processed
        includeNodeModules: ['foundation-sites'],

        // or completely control the exclude rule (note that you
        // can't use both "includeNodeModules" and "exclude" at
        // the same time)
        exclude: /bower_components/
    })
;
```

## [Configuring Browser Targets](#configuring-browser-targets "Permalink to this headline")

The `@babel/preset-env` preset rewrites your JavaScript so that the final syntax
will work in whatever browsers you want. To configure the browsers that you need
to support, see [PostCSS and autoprefixing (postcss-loader) with Webpack Encore](current__frontend__encore__postcss.md#browserslist_package_config).

Warning

Webpack Encore 7.0 requires [Babel 8](https://babeljs.io/docs/v8-migration/). Without a `browserslist`
configuration, `@babel/preset-env` in Babel 8 targets **modern browsers**
by default instead of compiling down to ES5. Before Encore 7.0 (Babel 7),
the absence of a `browserslist` configuration meant transpiling to ES5.
If you need to support older browsers, add a `browserslist` configuration
to your project (see [PostCSS and autoprefixing (postcss-loader) with Webpack Encore](current__frontend__encore__postcss.md#browserslist_package_config)).

After changing your "browserslist" config, you will need to manually remove the babel
cache directory:

```
1
2
```

```
# On Unix run this command. On Windows, clear this directory manually
$ rm -rf node_modules/.cache/babel-loader/
```

If you want to customize the `preset-env` configuration, use the `configureBabelPresetEnv()`
method to add any of the [@babel/preset-env configuration options](https://babeljs.io/docs/babel-preset-env):

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
```

```
// webpack.config.js
// ...

Encore
    // ...

    .configureBabelPresetEnv((config) => {
        // ...
    })
;
```

Warning

The `useBuiltIns` and `corejs` options are **no longer supported** since
Webpack Encore 7.0, because Babel 8 removed them from `@babel/preset-env`.
Encore throws an explicit error if you set them. Before Encore 7.0, you could
enable polyfills with `config.useBuiltIns = 'usage'` and `config.corejs = 3`.

To add polyfills with Babel 8, use [babel-plugin-polyfill-corejs3](https://github.com/babel/babel-polyfills) instead:

```
1
2
3
4
5
6
```

```
Encore.configureBabel((babelConfig) => {
    babelConfig.plugins.push([
        'polyfill-corejs3',
        { method: 'usage-global' },
    ]);
});
```

## [Creating a `.babelrc` File](#creating-a-babelrc-file "Permalink to this headline")

Instead of calling `configureBabel()`, you could create a `.babelrc` file
at the root of your project. This is a more "standard" way of configuring
Babel, but it has a downside: as soon as a `.babelrc` file is present,
**Encore can no longer add any Babel configuration for you**. For example,
if you call `Encore.enableReactPreset()`, the `react` preset will *not*
automatically be added to Babel: you must add it yourself in `.babelrc`.

As soon as a `.babelrc` file is present, it will take priority over the Babel
configuration added by Encore.

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
