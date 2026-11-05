# Install Bootstrap · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/getting-started

---

# Install Bootstrap

Add Bootstrap to your project with CDN, package manager, or source files.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/getting-started/install)

On this page…

##### On this page

## Install

Pull in Bootstrap’s **source files** into nearly any project with a package manager. Package installs don‘t include documentation or complete build scripts. You can also [use any demo from our Examples repo](https://github.com/twbs/examples) to quickly jumpstart Bootstrap projects.

npmpnpmYarnBun

```
npm install bootstrap
```

```
pnpm add bootstrap
```

```
yarn add bootstrap
```

```
bun add bootstrap
```

After installing, head to [our npm guide](guides__npm.md) for a full setup guide.

**Use the Bootstrap npm starter project!** Head to the [Sass & JS example](https://github.com/twbs/examples/tree/main/sass-js) template repository to see how to build and customize Bootstrap in your own npm project. Includes Sass compiler, Autoprefixer, Stylelint, PurgeCSS, and Bootstrap Icons.

### Using npm

Using `import * as bootstrap from 'bootstrap'` will load all of Bootstrap’s plugins onto a `bootstrap` object. You can also import plugins individually for automatic tree shaking:

JavaScript

```
          import { Tooltip, Toast, Popover } from 'bootstrap'
```

You can also import plugins directly by loading the `/js/dist/*.js` files under the package’s top-level directory.

Bootstrap’s `package.json` contains some additional metadata under the following keys:

- `sass` - path to Bootstrap’s main [Sass](https://sass-lang.com/) source file
- `style` - path to Bootstrap’s non-minified CSS that’s been compiled using the default settings (no customization)

Additionally, Bootstrap ships a `.browserslistrc` file at the package root, which defines browser targets for tools like Browserslist and Autoprefixer. See [Browsers & devices](getting-started__browsers-devices.md) for the full support policy.

### Using Yarn

Yarn 2+ (aka Yarn Berry) doesn’t support the `node_modules` directory by default, so our [Sass & JS example](https://github.com/twbs/examples/tree/main/sass-js) needs some adjustments:

Shell

```
          yarn config set nodeLinker node-modules # Use the node_modules linker
touch yarn.lock # Create an empty yarn.lock file
yarn install # Install the dependencies
yarn start # Start the project
```

## More packages

Other package-managed installs are available as well for Bootstrap as well.

RubyGemsComposerNuGet

```
gem 'bootstrap', '~> 6.0.0-alpha.1'
```

```
composer require twbs/bootstrap:6.0.0-alpha.1
```

```
Install-Package bootstrap # Default
Install-Package bootstrap.sass # Sass version
```

### Using RubyGems

We recommend installing Bootstrap in your Ruby apps using [Bundler](https://bundler.io/), but you can also use [RubyGems](https://rubygems.org/). See [the gem’s README](https://github.com/twbs/bootstrap-rubygem/blob/main/README.md) for further details.

Shell

```
          gem install bootstrap -v 6.0.0-alpha.1
```

### Using NuGet

If you develop in .NET Framework, you can also install and manage Bootstrap’s [CSS](https://www.nuget.org/packages/bootstrap/) or [Sass](https://www.nuget.org/packages/bootstrap.sass/) and JavaScript using [NuGet](https://www.nuget.org/). Newer projects should use [libman](https://learn.microsoft.com/en-us/aspnet/core/client-side/libman/) or another method as NuGet is designed for compiled code, not frontend assets.

## CDN

Include Bootstrap’s CSS and JavaScript files via CDN. CDNs (Content Delivery Networks) are services that provides copies of libraries for your website. Instead of installing Bootstrap via a package manager, you link to CDN-hosted files in your website.

Here are our primary CDN links for CSS and JavaScript:

HTML

```
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
```

If you prefer to include Floating UI and Vanilla Calendar Pro separately instead of using the bundle, use an import map to resolve the bare module specifiers:

HTML

```
          <script type="importmap">
{
  "imports": {
    "@floating-ui/dom": "https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.7.6/dist/floating-ui.dom.esm.min.js",
    "vanilla-calendar-pro": "https://cdn.jsdelivr.net/npm/vanilla-calendar-pro@3.4.0/index.mjs"
  }
}
</script>
<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.min.js" integrity="sha384-BJf/nQgxZJU68GxBse97Vdlc8Rh+z9PzzXiS3/BjV+1nQPR7IKn+iJnD3DJvCMaU" crossorigin="anonymous"></script>
```

| File type | URL |
| --- | --- |
| CSS | [`https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css`](https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css) |
| JS bundle (with Floating UI and Vanilla Calendar Pro) | [`https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js`](https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js) |

### Using CDNs

You can also use the CDN to fetch any of our additional builds.

When using CDN links, be sure to use the `integrity` attribute to verify the correct files and versions. These hashes are unique to each file and version of Bootstrap, so when you update to a new version, be sure the `integrity` attribute is also updated.

We also include a `crossorigin="anonymous"` attribute to prevent [CORS](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS) errors.

### Alternative CDNs

We recommend [jsDelivr](https://www.jsdelivr.com/) and use it ourselves in our documentation. However, in some cases—like in some specific countries or environments—you may need to use other CDN providers like [cdnjs](https://cdnjs.com/) or [unpkg](https://unpkg.com/).

You’ll find the same files on these CDN providers, albeit with different URLs. With cdnjs, you can [use this direct Bootstrap package link](https://cdnjs.com/libraries/bootstrap) to copy and paste ready-to-use HTML snippets for each dist file from any version of Bootstrap.

**Security warning** — If the SRI hashes differ for a given file, you shouldn’t use the files from that CDN, because it means that the file was modified by someone else.

Note that you should compare same length hashes, e.g. `sha384` with `sha384`, otherwise it’s expected for them to be different.
As such, you can use an online tool like [SRI Hash Generator](https://www.srihash.org/) to make sure that the hashes are the same for a given file.
Alternatively, assuming you have OpenSSL installed, you can achieve the same from the CLI, for example:

Shell

```
          openssl dgst -sha384 -binary bootstrap.min.js | openssl base64 -A
```

## Download

You can also do the old fashioned thing and download Bootstrap manually. Choose between compiled dist (distribution) files or source files. The latter requires some additional tooling to compiled and use Bootstrap in your project.

| Type | Description | Link |
| --- | --- | --- |
| **Distribution files** | Ready-to-use compiled and minified CSS and JavaScript files. Doesn’t include documentation, source files, or dependencies like Floating UI and Vanilla Calendar Pro. | [Download](https://github.com/twbs/bootstrap/releases/download/v6.0.0-alpha.1/bootstrap-6.0.0-alpha.1-dist.zip) |
| **Source files** | Sass, JavaScript, and documentation files for compiling with your own asset pipeline. Requires [Sass compiler](guides__contribute.md#sass), [Autoprefixer](https://github.com/postcss/autoprefixer), and a JavaScript bundler like [Rollup](https://rollupjs.org/) or [Webpack](https://webpack.js.org/). | [Download](https://github.com/twbs/bootstrap/archive/v6.0.0-alpha.1.zip) |

Should you require our full set of [build tools](guides__contribute.md#tooling-setup), they are included for developing Bootstrap and its docs, but they’re likely unsuitable for your own purposes.

## For AI tools & LLMs

Bootstrap’s documentation is available in a machine-readable format, and we ship agent skills for AI-powered coding tools. See [AI](getting-started__ai.md) for our `llms.txt` files and the full list of skills.
