# Asset Versioning with Webpack Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/versioning.html

---

# Asset Versioning with Webpack Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/versioning.rst)

Tired of deploying and having browser's cache the old version of your assets?
By calling `enableVersioning()`, each filename will now include a hash that
changes whenever the *contents* of that file change (e.g. `app.123abc.js`
instead of `app.js`). This allows you to use aggressive caching strategies
(e.g. a far future `Expires`) because, whenever a file changes, its hash will change,
ignoring any existing cache:

```
1
2
3
4
5
6
7
```

```
// webpack.config.js

  // ...
  Encore
      .setOutputPath('public/build/')
      // ...
+     .enableVersioning()
```

To link to these assets, Encore creates two files `entrypoints.json` and
`manifest.json`.

## [Loading Assets from `entrypoints.json` & `manifest.json`](#loading-assets-from-entrypoints-json-manifest-json "Permalink to this headline")

Whenever you run Encore, two configuration files are generated in your
output folder (default location: `public/build/`): `entrypoints.json`
and `manifest.json`. Each file is similar, and contains a map to the final, versioned
filenames.

The first file – `entrypoints.json` – is used by the `encore_entry_script_tags()`
and `encore_entry_link_tags()` Twig helpers. If you're using these, then your
CSS and JavaScript files will render with the new, versioned filename. If you're
not using Symfony, your app will need to read this file in a similar way.

The `manifest.json` file is only needed to get the versioned filename of *other*
files, like font files or image files (though it also contains information about
the CSS and JavaScript files):

```
1
2
3
4
5
```

```
{
    "build/app.js": "/build/app.123abc.js",
    "build/dashboard.css": "/build/dashboard.a4bf2d.css",
    "build/images/logo.png": "/build/images/logo.3eed42.png"
}
```

In your app, you need to read this file if you want to be able to link (e.g. via
an `img` tag) to certain assets. If you're using Symfony, activate the
`json_manifest_file` versioning strategy:

```
1
2
3
4
5
```

```
# this file is added automatically when installing Encore with Symfony Flex
# config/packages/assets.yaml
framework:
    assets:
        json_manifest_path: '%kernel.project_dir%/public/build/manifest.json'
```

That's it! Be sure to wrap each path in the Twig `asset()` function
like normal:

```
1
```

```
<img src="{{ asset('build/images/logo.png') }}" alt="ACME logo">
```

## [Troubleshooting](#troubleshooting "Permalink to this headline")

### [Asset Versioning and Deployment](#asset-versioning-and-deployment "Permalink to this headline")

When deploying a new version of your application, versioned assets will include
a new hash, making the previous assets no longer available. This is usually not
a problem when deploying applications using a rolling update, blue/green or
symlink strategies.

However, even when applying those techniques, there could be a lapse of time
when some publicly/privately cached response requests the previous version of
the assets. If your application can't afford to serve any broken asset, the best
solution is to use a CDN (or custom made service) that keeps all the old assets
cached for some time.

## [Learn more](#learn-more "Permalink to this headline")

- [The Asset Component](current__components__asset.md)

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
