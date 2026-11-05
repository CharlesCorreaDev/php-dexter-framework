# Using a CDN with Webpack Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/cdn.html

---

# Using a CDN with Webpack Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/cdn.rst)

Are you deploying to a CDN? That's awesome :) Once you've made sure that your
built files are uploaded to the CDN, configure it in Encore:

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
```

```
// webpack.config.js
  // ...

  Encore
      .setOutputPath('public/build/')
      // in dev mode, don't use the CDN
      .setPublicPath('/build');
      // ...
  ;

+ if (Encore.isProduction()) {
+     Encore.setPublicPath('https://my-cool-app.com.global.prod.fastly.net');
+
+     // guarantee that the keys in manifest.json are *still*
+     // prefixed with build/
+     // (e.g. "build/dashboard.js": "https://my-cool-app.com.global.prod.fastly.net/dashboard.js")
+     Encore.setManifestKeyPrefix('build/');
+ }
```

That's it! Internally, Webpack will now know to load assets from your CDN -
e.g. `https://my-cool-app.com.global.prod.fastly.net/dashboard.js`.

Note

It's still your responsibility to put your assets on the CDN - e.g. by
uploading them or by using "origin pull", where your CDN pulls assets
directly from your web server.

You *do* need to make sure that the `script` and `link` tags you include on your
pages also use the CDN. Fortunately, the
[entrypoints.json](current__frontend__encore__simple-example.md#encore-entrypointsjson-simple-description) paths are updated
to include the full URL to the CDN.

When deploying to a subdirectory of your CDN, you must add the path at the end of your URL -
e.g. `Encore.setPublicPath('https://my-cool-app.com.global.prod.fastly.net/awesome-website')`
will generate assets URLs like `https://my-cool-app.com.global.prod.fastly.net/awesome-website/dashboard.js`

If you are using `Encore.enableIntegrityHashes()` and your CDN and your domain
are not the [same-origin](https://en.wikipedia.org/wiki/Same-origin_policy), you may need to set the `crossorigin` option in
your webpack\_encore.yaml configuration to `anonymous` or `use-credentials`
to overcome CORS errors.

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
