# Inlining Images & Fonts in CSS with Webpack Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/url-loader.html

---

# Inlining Images & Fonts in CSS with Webpack Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/url-loader.rst)

A simple technique to improve the performance of web applications is to reduce
the number of HTTP requests inlining small files as base64 encoded URLs in the
generated CSS files.

You can enable this in `webpack.config.js` for images, fonts or both:

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
```

```
// webpack.config.js
// ...

Encore
    // ...
    .configureImageRule({
        // tell Webpack it should consider inlining
        type: 'asset',
        //maxSize: 4 * 1024, // 4 kb - the default is 8kb
    })

    .configureFontRule({
        type: 'asset',
        //maxSize: 4 * 1024
    })
;
```

This leverages Webpack [Asset Modules](https://webpack.js.org/guides/asset-modules/). You can read more about this and the
configuration there.

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
