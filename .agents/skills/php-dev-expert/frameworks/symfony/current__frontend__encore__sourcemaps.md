# Enabling Source Maps with Webpack Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/sourcemaps.html

---

# Enabling Source Maps with Webpack Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/sourcemaps.rst)

[Source maps](https://developer.mozilla.org/en-US/docs/Tools/Debugger/How_to/Use_a_source_map) allow browsers to access the original code related to some
asset (e.g. the Sass code that was compiled to CSS or the TypeScript code that
was compiled to JavaScript). Source maps are useful for debugging purposes but
unnecessary when executing the application in production.

Encore's default `webpack.config.js` file enables source maps in the `dev`
build:

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
// webpack.config.js
// ...

Encore
    // ...

    .enableSourceMaps(!Encore.isProduction())
;
```

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
