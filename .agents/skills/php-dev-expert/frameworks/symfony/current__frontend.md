# Front-end Tools: Handling CSS & JavaScript (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/frontend.html

---

# Front-end Tools: Handling CSS & JavaScript

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/frontend.rst)

Symfony gives you the flexibility to choose any front-end tools you want. There
are generally two approaches:

1. [building your HTML with PHP & Twig](current__frontend.md#frontend-twig-php);
2. [building your frontend with a JavaScript framework](current__frontend.md#frontend-js) like React, Vue, Svelte, etc.

Both work great - and are discussed below.

## [Using PHP & Twig](#using-php-twig "Permalink to this headline")

Symfony comes with several powerful options to help you build a modern and fast frontend:

- [AssetMapper](current__frontend.md#frontend-asset-mapper) (recommended for new projects) runs
  entirely in PHP, doesn't require any build step and leverages modern web standards.
- [Symfony Reprise](current__frontend.md#frontend-reprise) brings first-class Symfony integration
  to modern JavaScript bundlers ([Vite](https://vite.dev/) and [Rsbuild](https://rsbuild.dev/)), the way Webpack Encore did
  for Webpack.
- [Webpack Encore](current__frontend.md#frontend-webpack-encore) is built with [Node.js](https://nodejs.org/) on top of
  [Webpack](https://webpack.js.org/). It's the original bundler integration; for new bundler-based projects,
  Symfony Reprise is the more modern and faster alternative.

|  | AssetMapper | Reprise | Encore |
| --- | --- | --- | --- |
| Production Ready? | yes | no | yes |
| Stable? | yes | no | yes |
| Requirements | none | Node.js | Node.js |
| Requires a build step? | no | yes | yes |
| Works in all browsers? | yes | yes | yes |
| Supports [Stimulus/UX](https://symfony.com/bundles/StimulusBundle/current/index.html) | yes | yes | yes |
| Supports Sass/Tailwind | [yes](current__frontend__asset_mapper.md#asset-mapper-tailwind) | yes | yes |
| Supports React, Vue, Svelte? | yes [[1]](current__frontend.md#ux-note-1) | yes | yes |
| Supports TypeScript | [yes](current__frontend__asset_mapper.md#asset-mapper-ts) | yes | yes |
| Removes comments from JavaScript | yes [[2]](current__frontend.md#ux-note-2) | yes | yes |
| Removes comments from CSS | yes [[2]](current__frontend.md#ux-note-2) | yes | yes [[4]](current__frontend.md#ux-note-4) |
| Versioned assets | always | always | optional |
| Can update 3rd party packages | yes | no [[3]](current__frontend.md#ux-note-3) | no [[3]](current__frontend.md#ux-note-3) |

**[1]** Using JSX (React), Vue, etc with AssetMapper is possible, but you'll
need to use their native tools for pre-compilation. Also, some features (like
Vue single-file components) cannot be compiled down to pure JavaScript that can
be executed by a browser.

**[2]** You can install the [SensioLabs Minify Bundle](https://github.com/sensiolabs/minify-bundle) to minify CSS/JS code
(and remove all comments) when compiling assets with AssetMapper.

**[3]** If you use `npm`, there are update checkers available (e.g. `npm-check`).

**[4]** CSS comments can be removed using [CssMinimizerPlugin](https://webpack.js.org/plugins/css-minimizer-webpack-plugin), which is included
in Webpack Encore and configurable via `Encore.configureCssMinimizerPlugin()`.

### [AssetMapper (Recommended)](#assetmapper-recommended "Permalink to this headline")

Screencast

Do you prefer video tutorials? Check out the [AssetMapper screencast series](https://symfonycasts.com/screencast/asset-mapper).

AssetMapper is the recommended system for handling your assets. It runs entirely
in PHP with no complex build step or dependencies. It does this by leveraging
the `importmap` feature of your browser, which is available in all browsers thanks
to a polyfill.

[Read the AssetMapper Documentation](current__frontend__asset_mapper.md)

### [Symfony Reprise](#symfony-reprise "Permalink to this headline")

Warning

Symfony Reprise is **experimental**: its API and behavior may still change,
sometimes drastically.

[Symfony Reprise](https://github.com/symfony/reprise) is the modern, faster alternative to Webpack Encore. Instead of
wrapping Webpack, it brings first-class Symfony integration to today's JavaScript
bundlers, [Vite](https://vite.dev/) and [Rsbuild](https://rsbuild.dev/), which build on much faster tooling (esbuild,
Rolldown and Rspack).

Vite and Rsbuild already handle Sass/PostCSS, TypeScript, JSX/Vue/Svelte, code
splitting, minification and Hot Module Replacement on their own. Reprise adds the
Symfony-side glue those bundlers leave out: `entrypoints.json` and `manifest.json`
generation, asset versioning, the dev server wiring, Twig functions to render the
`<script>` and `<link>` tags, and Symfony UX / Stimulus integration.

Because it generates the same `entrypoints.json` and `manifest.json` as Webpack
Encore, moving from Encore is mostly a tag-for-tag swap in your templates
(`encore_entry_*` becomes `reprise_entry_*`).

Install it with Composer and npm, then pick your bundler (Vite or Rsbuild):

```
1
2
```

```
$ composer require symfony/reprise
$ npm install @symfony/reprise --save-dev
```

For the full configuration and usage, read the [Symfony Reprise documentation](https://symfony.com/bundles/reprise/current/index.html).

### [Webpack Encore](#webpack-encore "Permalink to this headline")

Screencast

Do you prefer video tutorials? Check out the [Webpack Encore screencast series](https://symfonycasts.com/screencast/webpack-encore).

Note

Webpack Encore is fully supported, but **for new projects AssetMapper is
recommended**. Choose Encore when you already use it, or when you need a full
JavaScript bundler.

[Webpack Encore](https://www.npmjs.com/package/@symfony/webpack-encore) is a simpler way to integrate [Webpack](https://webpack.js.org/) into your application.
It wraps Webpack, giving you a clean & powerful API for bundling JavaScript modules,
pre-processing CSS & JS and compiling and minifying assets.

Note

Webpack Encore is now Symfony's legacy bundler-based option. It's still
supported, but if you're starting a new project that needs a bundler, consider
[Symfony Reprise](current__frontend.md#frontend-reprise), a more modern and faster alternative
built on Vite and Rsbuild.

[Read the Encore Documentation](current__frontend__encore__index.md)

#### [Switch from AssetMapper](#switch-from-assetmapper "Permalink to this headline")

By default, new Symfony webapp projects (created with `symfony new --webapp myapp`)
use AssetMapper. If you still need to use Webpack Encore, use the following steps to
switch. This is best done on a new project and provides the same features (Turbo/Stimulus)
as the default webapp.

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
```

```
# Remove AssetMapper & Turbo/Stimulus temporarily
$ composer remove symfony/ux-turbo symfony/asset-mapper symfony/stimulus-bundle

# Add Webpack Encore & Turbo/Stimulus back
$ composer require symfony/webpack-encore-bundle symfony/ux-turbo symfony/stimulus-bundle

# Install & Build Assets
$ npm install
$ npm run dev
```

### [Stimulus & Symfony UX Components](#stimulus-symfony-ux-components "Permalink to this headline")

Once you've installed AssetMapper or Webpack Encore, it's time to start building your
front-end. You can write your JavaScript however you want, but we recommend
using [Stimulus](https://stimulus.hotwired.dev/), [Turbo](https://turbo.hotwired.dev/) and a set of tools called [Symfony UX](https://ux.symfony.com).

To learn about Stimulus & the UX Components, see
the [StimulusBundle Documentation](https://symfony.com/bundles/StimulusBundle/current/index.html)

## [Using a Front-end Framework (React, Vue, Svelte, etc)](#using-a-front-end-framework-react-vue-svelte-etc "Permalink to this headline")

Screencast

Do you prefer video tutorials? Check out the [API Platform screencast series](https://symfonycasts.com/screencast/api-platform).

If you want to use a front-end framework (Next.js, React, Vue, Svelte, etc),
we recommend using their native tools and using Symfony as a pure API. A wonderful
tool to do that is [API Platform](https://api-platform.com/). Their standard distribution comes with a
Symfony-powered API backend, frontend scaffolding in Next.js (other frameworks
are also supported) and a React admin interface. It comes fully Dockerized and even
contains a web server.

## [Other Front-End Articles](#other-front-end-articles "Permalink to this headline")

- [Create a UX bundle](current__frontend__create_ux_bundle.md)
- [How to Use a Custom Version Strategy for Assets](current__frontend__custom_version_strategy.md)
- [Passing Information from Twig to JavaScript](current__frontend__server-data.md)

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
