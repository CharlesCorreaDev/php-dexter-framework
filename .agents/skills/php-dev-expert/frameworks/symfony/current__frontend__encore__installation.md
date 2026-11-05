# Installing Encore (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend/encore/installation.html

---

# Installing Encore

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend/encore/installation.rst)

First, make sure you [install Node.js](https://nodejs.org/en/download/). Then, follow the instructions below,
which depend on whether you are installing Encore in a Symfony application or not.

7.0

Webpack Encore 7.0 made the package **ESM-only**. Before Encore 7.0,
`webpack.config.js` used CommonJS (`const Encore = require('@symfony/webpack-encore')`
and `module.exports = Encore.getWebpackConfig()`) and `getWebpackConfig()`
was synchronous. Starting with Encore 7.0, you must use ESM syntax (`import` /
`export`), add `"type": "module"` to your `package.json` (or rename the
file to `webpack.config.mjs`), and `getWebpackConfig()` returns a `Promise`
that must be awaited.

## [Installing Encore in Symfony Applications](#installing-encore-in-symfony-applications "Permalink to this headline")

Run these commands to install both the PHP and JavaScript dependencies in your
project:

```
1
2
```

```
$ composer require symfony/webpack-encore-bundle
$ npm install
```

If you are using [Symfony Flex](current__setup.md#symfony-flex), this will install and enable
the [WebpackEncoreBundle](https://github.com/symfony/webpack-encore-bundle), create the `assets/` directory, add a
`webpack.config.js` file, and add `node_modules/` to `.gitignore`. You can
skip the rest of this article and go write your first JavaScript and CSS by
reading [Encore: Setting up your Project](current__frontend__encore__simple-example.md)!

If you are not using Symfony Flex, you'll need to create all these directories
and files by yourself following the instructions shown in the next section.

## [Installing Encore in non Symfony Applications](#installing-encore-in-non-symfony-applications "Permalink to this headline")

Install Encore into your project via npm:

```
1
```

```
$ npm install @symfony/webpack-encore --save-dev
```

This command creates (or modifies) a `package.json` file and downloads
dependencies into a `node_modules/` directory.

Tip

You *should* commit `package.json` and `package-lock.json`
to version control, but ignore `node_modules/`.

### [Creating the webpack.config.js File](#creating-the-webpack-config-js-file "Permalink to this headline")

Next, create a new `webpack.config.js` file at the root of your project. This
is the main config file for both Webpack and Webpack Encore:

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
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
```

```
import Encore from '@symfony/webpack-encore';

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    .addEntry('app', './assets/app.js')

    // enables the Symfony UX Stimulus bridge (used in assets/bootstrap.js)
    .enableStimulusBridge('./assets/controllers.json')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    .configureBabel((config) => {
        config.plugins.push('@babel/plugin-transform-class-properties');
    })

    // configures @babel/preset-env
    .configureBabelPresetEnv((config) => {
        // ...
    })

    // enables Sass/SCSS support
    //.enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you use React
    //.enableReactPreset()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()
;

export default await Encore.getWebpackConfig();
```

Since this config uses ESM syntax (`import` / `export`), your `package.json`
must declare the project as an ESM package by adding a `"type": "module"` entry
(alternatively, rename the config file to `webpack.config.mjs`):

```
1
2
3
```

```
{
    "type": "module"
}
```

### [Creating Other Supporting Files](#creating-other-supporting-files "Permalink to this headline")

Next, open the new `assets/app.js` file which contains some JavaScript code
*and* imports some CSS:

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
// assets/app.js
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';
```

And the new `assets/styles/app.css` file:

```
1
2
3
4
```

```
/* assets/styles/app.css */
body {
    background-color: lightgray;
}
```

You should also add an `assets/bootstrap.js` file, which initializes Stimulus:
a system that you'll learn about soon:

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
// assets/bootstrap.js
import { startStimulusApp } from '@symfony/stimulus-bridge';

// Registers Stimulus controllers from controllers.json and in the controllers/ directory
export const app = startStimulusApp(require.context(
    '@symfony/stimulus-bridge/lazy-controller-loader!./controllers',
    true,
    /\.(j|t)sx?$/
));

// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);
```

Then create an `assets/controllers.json` file, which also fits into
the Stimulus system:

```
1
2
3
4
```

```
{
    "controllers": [],
    "entrypoints": []
}
```

Finally, though it's optional, add the following `scripts` to your `package.json`
file so you can run the same commands in the rest of the documentation:

```
1
2
3
4
5
6
```

```
"scripts": {
    "dev-server": "encore dev-server",
    "dev": "encore dev",
    "watch": "encore dev --watch",
    "build": "encore production --progress"
}
```

You'll customize and learn more about these files in [Encore: Setting up your Project](current__frontend__encore__simple-example.md).
When you execute Encore, it will ask you to install a few more dependencies based
on which features of Encore you have enabled.

Warning

Some of the documentation will use features that are specific to Symfony or
Symfony's [WebpackEncoreBundle](https://github.com/symfony/webpack-encore-bundle). These are optional, and are special ways
of pointing to the asset paths generated by Encore that enable features like
[versioning](current__frontend__encore__versioning.md) and
[split chunks](current__frontend__encore__split-chunks.md).

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
