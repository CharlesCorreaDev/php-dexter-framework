# Download · Bootstrap v4.6

> **Fonte / Source:** https://getbootstrap.com/docs/4.6/getting-started/download/

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v4.6.2/site/content/docs/4.6/getting-started/download.md "View and edit this file on GitHub")

# Download

Download Bootstrap to get the compiled CSS and JavaScript, source code, or include it with your favorite package managers like npm, RubyGems, and more.

## Compiled CSS and JS

Download ready-to-use compiled code for **Bootstrap v4.6.2** to easily drop into your project, which includes:

- Compiled and minified CSS bundles (see [CSS files comparison](getting-started__contents.md#css-files))
- Compiled and minified JavaScript plugins (see [JS files comparison](getting-started__contents.md#js-files))

This doesn’t include documentation, source files, or any optional JavaScript dependencies (jQuery and Popper).

[Download](https://github.com/twbs/bootstrap/releases/download/v4.6.2/bootstrap-4.6.2-dist.zip)

## Source files

Compile Bootstrap with your own asset pipeline by downloading our source Sass, JavaScript, and documentation files. This option requires some additional tooling:

- [Sass compiler](getting-started__build-tools.md#sass) for compiling Sass source files into CSS files
- [Autoprefixer](https://github.com/postcss/autoprefixer) for CSS vendor prefixing

Should you require our full set of [build tools](getting-started__build-tools.md#tooling-setup), they are included for developing Bootstrap and its docs, but they’re likely unsuitable for your own purposes.

[Download source](https://github.com/twbs/bootstrap/archive/v4.6.2.zip)

## Examples

If you want to download and examine our [examples](examples.md), you can grab the already built examples:

[Download Examples](https://github.com/twbs/bootstrap/releases/download/v4.6.2/bootstrap-4.6.2-examples.zip)

## jsDelivr

Skip the download with [jsDelivr](https://www.jsdelivr.com/) to deliver cached version of Bootstrap’s compiled CSS and JS to your project.

```
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
```

If you’re using our compiled JavaScript and prefer to include Popper separately, add Popper before our JS, via a CDN preferably.

```
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
```

## Package managers

Pull in Bootstrap’s **source files** into nearly any project with some of the most popular package managers. No matter the package manager, Bootstrap will **require a [Sass compiler](getting-started__build-tools.md#sass) and [Autoprefixer](https://github.com/postcss/autoprefixer)** for a setup that matches our official compiled versions.

### npm

Install Bootstrap in your Node.js powered apps with [the npm package](https://www.npmjs.com/package/bootstrap):

```
npm install bootstrap
```

`require('bootstrap')` will load all of Bootstrap’s jQuery plugins onto the jQuery object. The `bootstrap` module itself does not export anything. You can manually load Bootstrap’s jQuery plugins individually by loading the `/js/*.js` files under the package’s top-level directory.

Bootstrap’s `package.json` contains some additional metadata under the following keys:

- `sass` - path to Bootstrap’s main [Sass](https://sass-lang.com/) source file
- `style` - path to Bootstrap’s non-minified CSS that’s been precompiled using the default settings (no customization)

**Get started with Bootstrap via npm with our starter project!** Head to the [twbs/bootstrap-npm-starter](https://github.com/twbs/bootstrap-npm-starter) template repository to see how to build and customize Bootstrap in your own npm project. Includes Sass compiler, Autoprefixer, Stylelint, PurgeCSS, and Bootstrap Icons.

### yarn

Install Bootstrap in your Node.js powered apps with [the yarn package](https://yarnpkg.com/en/package/bootstrap):

```
yarn add bootstrap
```

### RubyGems

Install Bootstrap in your Ruby apps using [Bundler](https://bundler.io/) (**recommended**) and [RubyGems](https://rubygems.org/) by adding the following line to your [`Gemfile`](https://bundler.io/gemfile.html):

```
gem 'bootstrap', '~> 4.6.2'
```

Alternatively, if you’re not using Bundler, you can install the gem by running this command:

```
gem install bootstrap -v 4.6.2
```

[See the gem’s README](https://github.com/twbs/bootstrap-rubygem/blob/master/README.md) for further details.

### Composer

You can also install and manage Bootstrap’s Sass and JavaScript using [Composer](https://getcomposer.org/):

```
composer require twbs/bootstrap:4.6.2
```

### NuGet

If you develop in .NET, you can also install and manage Bootstrap’s [CSS](https://www.nuget.org/packages/bootstrap/) or [Sass](https://www.nuget.org/packages/bootstrap.sass/) and JavaScript using [NuGet](https://www.nuget.org/):

```
Install-Package bootstrap
```

```
Install-Package bootstrap.sass
```
