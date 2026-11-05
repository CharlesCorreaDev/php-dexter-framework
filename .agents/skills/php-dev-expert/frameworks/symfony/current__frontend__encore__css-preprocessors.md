# CSS Preprocessors: Sass, etc. with Webpack Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/css-preprocessors.html

---

# CSS Preprocessors: Sass, etc. with Webpack Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/css-preprocessors.rst)

To use the Sass, LESS or Stylus pre-processors, enable the one you want in `webpack.config.js`:

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
```

```
// webpack.config.js
// ...

Encore
    // ...

    // enable just the one you want

    // processes files ending in .scss or .sass
    .enableSassLoader()

    // processes files ending in .less
    .enableLessLoader()

    // processes files ending in .styl
    .enableStylusLoader()
;
```

Then restart Encore. When you do, it will give you a command you can run to
install any missing dependencies. After running that command and restarting
Encore, you're done!

You can also pass configuration options to each of the loaders. See the
[Encore's index.js file](https://github.com/symfony/webpack-encore/blob/master/index.js) for detailed documentation.

Tip

Since Encore 6.0, `sass-loader` uses the [modern Sass API](https://sass-lang.com/documentation/js-api/interfaces/options) by default.
This means that some options have changed. For example, `includePaths` is
now `loadPaths`:

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
```

```
// webpack.config.js
// ...

Encore
    // ...

    // with the modern API (default):
    .enableSassLoader((options) => {
        options.loadPaths = [/* ... */];
    })

    // if you need the legacy API (not recommended):
    .enableSassLoader((options) => {
        options.api = 'legacy';
        options.includePaths = [/* ... */];
    })
;
```

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
