# Directory Structure | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/system/directory-structure

---

# Directory Structure

- ### On this Page

  - [Customizing Paths](docs_5x__system__directory-structure.md#customizing-paths)
  - [Folders](docs_5x__system__directory-structure.md#folders)
  - [Files](docs_5x__system__directory-structure.md#files)
  - [Other Common Files](docs_5x__system__directory-structure.md#other-common-files)

A fresh Craft installation will have the following [folders](#folders) and [files](#files) in it. Existing projects may have [additional files](#other-common-files) in the root.

You don’t need to be familiar with everything in the working directory to get started with Craft, but it is a great way to discover tools and configuration that will help you work more efficiently, down the line.

## [#](#customizing-paths)Customizing Paths

Craft’s default directory structure is intended to work for most projects and [hosting](docs_5x__deploy.md) environments, but it is deeply customizable. Paths to many of the core files and folders can be changed by setting special [environment overrides](docs_5x__configure.md#environment-overrides).

Many of these directories’ locations are defined relative to Craft’s *base path*. Manually setting the [`CRAFT_BASE_PATH`](docs_5x__reference__config__bootstrap.md#craft_base_path) environment override without making the corresponding adjustments to the rest of your project’s structure (or explicitly setting other paths) can lead to a non-functional installation.

## [#](#folders)Folders

### [#](#config)`config/`

Purpose
:   Holds all of your project’s static [configuration](docs_5x__configure.md#where-configuration-happens) files, as well as its `license.key` file. Your [`.env` file](#env), however, is typically located in the project root!

Configuration
:   [`CRAFT_CONFIG_PATH`](docs_5x__reference__config__bootstrap.md#craft-config-path)

### [#](#storage)`storage/`

Purpose
:   This is where Craft stores a variety of files that are dynamically generated at runtime.

    Some of the folders you might find in the storage directory include:

    - `backups/` — Stores database backups that get created when you update Craft, or capture a backup via the control panel utility or [CLI](docs_5x__reference__cli.md#db-backup).
    - `logs/` — Stores Craft’s [logs](docs_5x__system__logging.md) and PHP error logs.
    - `rebrand/` — Stores the custom **Login Page Logo** and **Site Icon** files, if you’ve uploaded them. Pro
    - `runtime/` — Pretty much everything in here is there for caching and debugging. Nothing that Craft couldn’t live without, if the folder happened to get deleted.

    For the curious, here are the types of things you will find in `storage/runtime/` (though this is not a comprehensive list):

    - `assets/` — Stores temporary uploads, image thumbnails, resized file icons, image editor scratch files, and copies of images stored on remote asset volumes (to save Craft an HTTP request when it needs the images to generate new thumbnails or transforms).
    - `cache/` — Stores arbitrary data caches, when using the [`FileCache` driver](docs_5x__reference__config__app.md#cache).
    - `compiled_classes/` — Stores some dynamically-defined PHP classes.
    - `compiled_templates/` — Stores compiled Twig templates. This is *not* your main [templates](#templates) folder!
    - `temp/` — Other temporary files. The names and contents of files in here do not obey any convention—the assumption should be that they will be deleted or overwritten between requests.

Configuration
:   [`CRAFT_STORAGE_PATH`](docs_5x__reference__config__bootstrap.md#craft-storage-path) — This is useful when running on systems with an [ephemeral](docs_5x__reference__config__bootstrap.md#craft-ephemeral) or “read-only” filesystem (wherein the only place to write temporary files is a central `/tmp` directory).

### [#](#templates)`templates/`

Purpose
:   Your front-end Twig templates go in here. Any local site assets, such as images, CSS, and JS that should be statically served, should live in the [web/](docs_5x__system__directory-structure.md#web) folder. The [Routing](docs_5x__system__routing.md) page has an overview of how files in this folder are handled.

Configuration
:   [`CRAFT_TEMPLATES_PATH`](docs_5x__reference__config__bootstrap.md#craft-templates-path) — Plugins may register additional *template roots* that behave similarly, but are not affected by this setting and generally do not contain user-editable templates.

### [#](#vendor)`vendor/`

Purpose
:   This is where all of your Composer dependencies go—including Craft and any plugins you’ve installed. This directory should *not* be tracked in version control. Instead, commit [`composer.lock`](#composerlock), and use [`composer install`  (opens new window)](https://getcomposer.org/doc/03-cli.md#install-i) to rebuild it.

Configuration
:   [`CRAFT_VENDOR_PATH`](docs_5x__reference__config__bootstrap.md#craft-vendor-path) — If you choose to relocate your `vendor/` directory, make sure you update your `.gitignore` file to continue excluding it from version control.

### [#](#web)`web/`

Purpose
:   This directory represents your server’s web root. The public `index.php` file lives here, alongside your static images, stylesheets, and JavaScript files.

Customization
:   [`CRAFT_WEB_ROOT`](docs_5x__reference__config__bootstrap.md#craft-web-root) — This is primarily used to set the [`@webroot` alias](docs_5x__configure.md#aliases).

## [#](#files)Files

### [#](#env)`.env`

Purpose
:   This is your [PHP dotenv  (opens new window)](https://github.com/vlucas/phpdotenv) `.env` configuration file. It defines sensitive or [environment-specific config](docs_5x__configure.md#env) values that don’t make sense to commit to version control.

    The [starter project  (opens new window)](https://github.com/craftcms/craft) provides a few examples of configuration that is apt to change between environments—you’ll see a group of similarly-named files, like `.env.example.staging`.

    These are `.env` file templates. Maintain one of them (with sensitive data removed) as a starting point for your actual `.env` file, so collaborators know what variables the project requires. When they set up the project, they can run `cp .env.example .env` to duplicate the file and fill out missing keys!

Configuration
:   [`CRAFT_DOTENV_PATH`](docs_5x__reference__config__bootstrap.md#craft-dotenv-path) — This setting *was* technically available in prior versions, but unreliable.

### [#](#gitignore)`.gitignore`

This file tells Git which files it should exclude when committing changes. At minimum, it should contain entries for `.env` and Composer’s `vendor/` directory.

Check out our [Hosting & Deployment](docs_5x__deploy.md#be-aware-of-artifacts) article for a list of other things you’ll want to exclude.

### [#](#bootstrap-php)`bootstrap.php`

The [starter project  (opens new window)](https://github.com/craftcms/craft) consolidates important bootstrapping logic (like defining path [constants](docs_5x__configure.md#bootstrap-config) that determine the above directories’ locations, and loading environment variables from a [`.env`](#env) file) into this file. Both the HTTP and console entry scripts (`web/index.php` and [`craft`](#craft), respectively) include this file—but each goes on to instantiate a different [type of application  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-entry-scripts) suited for that request context.

This file’s location only matters to your entry scripts, so it is not “configurable” like other paths are. If you make changes to the layout of your project directory, be sure and update the references to `bootstrap.php` in `index.php` and the CLI entry point.

### [#](#composer-json)`composer.json`

Your project’s PHP dependencies are declared in this file. If you just started your project, the only two packages it will explicitly require are `craftcms/cms` (Craft’s core) and `vlucas/phpdotenv` (used in the entry scripts). Existing projects may contain more packages—say, if the it relies on Craft [plugins](docs_5x__system__plugins.md) or includes other [custom functionality](docs_5x__extend.md).

Craft uses Composer to update itself and install plugins. See the [Composer documentation  (opens new window)](https://getcomposer.org/doc/04-schema.md) for details on how this file works.

### [#](#composer-lock)`composer.lock`

This is a Composer-managed file that contains the *exact* list of packages (and their versions) that should be installed in the `vendor/` directory. It should be committed to version control so that anyone working on the project can run `composer install` to download all its dependencies.

### [#](#craft)`craft`

This is a command line executable used to run Craft’s [console commands](docs_5x__reference__cli.md). Its structure is similar to `web/index.php` (insofar as it is responsible for bootstrapping Craft), but instead of a [craft\web\Application  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-application.html), it creates a [craft\console\Application  (opens new window)](https://docs.craftcms.com/api/v5/craft-console-application.html) and handles the “request” with a different set of controllers.

## [#](#other-common-files)Other Common Files

Depending on the age and structure of your Craft project (as well as the tools used to build it), your project directory may look a little bit different! Here are some examples of common things you might find when inheriting a project:

### [#](#ddev)`.ddev/`

If you (or another maintainer) followed the [installation](docs_5x__install.md) instructions or [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/), DDEV will have left a `.ddev/` directory in the root of your project. This is safe to keep in version control—DDEV may make changes to it from time to time, but a separate `.gitignore` file exists within it to ensure only necessary files are tracked.

### [#](#migrations)`migrations/`

Projects that use [content migrations](docs_5x__extend__migrations.md) will typically use this directory, but it is customizable with the [`CRAFT_CONTENT_MIGRATIONS_PATH`](docs_5x__reference__config__bootstrap.md#craft-content-migrations-path) variable.

### [#](#modules)`modules/`

For a time, our [starter project  (opens new window)](https://github.com/craftcms/craft) came with a pre-initialized [custom module](docs_5x__extend__module-guide.md) in the `modules/` directory. This is typically harmless, but it cannot be removed without also modifying your project’s `config/app.php` file.

### [#](#public)`public/`

Older projects may have carried over a Craft 2 convention of naming their public web directory `public/`. There is no functional difference between these folder names, but most Craft resources will refer to it as `web/`.

### [#](#tests)`tests/`

When using tests to validate application changes, you are apt to have a dedicated `tests/` directory.

Documentation for automated testing of Craft 5 has not been published. The [Craft 4 testing](https://craftcms.com/docs/4.x/testing/) documentation is still available!

### [#](#translations)`translations/`

Multi-site projects often make use of [static translations](docs_5x__system__sites.md#static-message-translations), which are stored in this directory, indexed by their language code. Customize this location with the [`CRAFT_TRANSLATIONS_PATH`](docs_5x__reference__config__bootstrap.md#craft-translations-path) variable.

### [#](#package-json)`package.json`

Projects that use Node.js will typically contain `package.json` and `package-lock.json` files, as well as a `node_modules/` directory. Craft does not interact with these files, but they often contain information about how the front-end of your site works.

Oftentimes, a Node.js “build step” will output files that are then loaded by a user’s browser—those should be written to the web root so they can be directly requested via HTTP.

### [#](#craft-bat)`craft.bat`

A Windows-specific command line entry point or “batch file.”

### [#](#docker-files)Docker Files

A `Dockerfile` or `docker-compose.yml` in your project root suggests that it is intended to be run in [Docker  (opens new window)](https://www.docker.com/), a containerized development environment. DDEV users will typically *not* see these files, as they’re abstracted by configuration stored in the [`.ddev/` directory](#ddev).

### [#](#ide-configuration)IDE Configuration

Some editors write configuration to a file or folder within your project—for example, PhpStorm will create a `.idea/` directory; Visual Studio Code uses `.vscode/`. Coordinate with your team about which tools are valuable to your process, and commit anything that supports it.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/system/directory-structure.md)
