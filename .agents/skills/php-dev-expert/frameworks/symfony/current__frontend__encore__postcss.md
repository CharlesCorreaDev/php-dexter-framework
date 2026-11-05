# PostCSS and autoprefixing (postcss-loader) with Webpack Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/postcss.html

---

# PostCSS and autoprefixing (postcss-loader) with Webpack Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/postcss.rst)

[PostCSS](https://postcss.org/) is a CSS post-processing tool that can transform your CSS in a lot
of cool ways, like [autoprefixing](https://github.com/postcss/autoprefixer), [linting](https://stylelint.io/) and more!

First enable it in `webpack.config.js`:

```
1
2
3
4
5
6
```

```
// webpack.config.js

  Encore
      // ...
+     .enablePostCssLoader()
  ;
```

Then restart Encore. When you do, it will give you a command you can run to
install any missing dependencies. After running that command and restarting
Encore, you're done!

Next, download any plugins you want, like `autoprefixer`:

```
1
```

```
$ npm install autoprefixer --save-dev
```

Next, create a `postcss.config.js` file at the root of your project:

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
```

```
// postcss.config.js
import autoprefixer from 'autoprefixer';

export default {
    plugins: [
        // include whatever plugins you want
        // but make sure you install these via npm!

        // add browserslist config to package.json (see below)
        autoprefixer(),
    ],
};
```

7.0

Because projects using Webpack Encore 7.0 set `"type": "module"` in their
`package.json`, configuration files like `postcss.config.js` must use ESM
syntax (`import` / `export default`). Before Encore 7.0, this file used
CommonJS (`module.exports = { ... }`). If you prefer to keep CommonJS syntax,
rename the file to `postcss.config.cjs`.

That's it! The `postcss-loader` will now be used for all CSS, Sass, etc files.
You can also pass options to the [postcss-loader](https://github.com/postcss/postcss-loader) by passing a callback:

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
```

```
// webpack.config.js
+ import path from 'path';

  Encore
      // ...
+     .enablePostCssLoader((options) => {
+         options.postcssOptions = {
+             // the directory where the postcss.config.js file is stored
+             config: path.resolve(import.meta.dirname, 'sub-dir', 'custom.config.js'),
+         };
+     })
  ;
```

## [Adding browserslist to `package.json`](#adding-browserslist-to-package-json "Permalink to this headline")

The `autoprefixer` (and many other tools) need to know what browsers you want to
support. The best-practice is to configure this directly in your `package.json`
(so that all the tools can read this):

```
1
2
3
4
5
```

```
{
+  "browserslist": [
+    "defaults"
+  ]
  }
```

The `defaults` option is recommended for most users and would be equivalent
to the following browserslist:

```
1
2
3
4
5
6
7
8
```

```
{
+  "browserslist": [
+    "> 0.5%",
+    "last 2 versions",
+    "Firefox ESR",
+    "not dead"
+  ]
  }
```

See [browserslist](https://github.com/browserslist/browserslist) for more details on the syntax.

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
