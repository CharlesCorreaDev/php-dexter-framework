# Using the Starter Project | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/using-the-starter-project

---

Search Knowledge Base

# Using the Starter Project

![](https://craftcms.com/dist/images/icon-tip.svg)

This guide is a companion to the official [installation instructions](https://craftcms.com/docs/5.x/install.html), which focus solely on [DDEV](https://ddev.readthedocs.io/en/stable/). If you have a different preferred development environment—or are simply curious how the installation process works—you’re in the right place.

While DDEV is a quick, reliable way to get started with Craft, it’s not your only option! As long as your environment meets Craft’s [requirements](https://craftcms.com/docs/5.x/requirements.html), you’ll be able to follow along.

We’ll start with the fundamentals shared by most installation methods, then discuss some [tool-specific tips](#tool-specific-variations).

Please be aware that downloading or installing Craft binds you to its [license](https://craftcms.com/license).

## Composer [#](#composer "Direct link to Composer")

[Composer](https://getcomposer.org) is a PHP dependency manager that Craft uses internally to install and update plugins—but it can also be used to install and update Craft itself. If Composer is not available on your command line, follow the [global installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) instructions, or use a package manager like [`apt`](https://packages.ubuntu.com) or [Brew](https://formulae.brew.sh/formula/composer).

Use the `create-project` command to scaffold a new site from the official [starter project](https://github.com/craftcms/craft) package, in a folder named `my-craft-project`:

```
composer create-project craftcms/craft my-craft-project
```

![](https://craftcms.com/dist/images/icon-tip.svg)

Note that we’re using [`craftcms/craft`](https://github.com/craftcms/craft), not [`craftcms/cms`](https://github.com/craftcms/cms). This special “project” package type contains *just* enough code and configuration to assemble a complete Craft installation—perhaps most importantly, a `composer.json` file requiring the latest `craftcms/cms` release.

This command automates a number of setup steps:

1. Creating the `my-craft-project/` directory;
2. Downloading and extracting the latest starter project release;
3. Installing PHP dependencies;
4. Populating a basic `.env` [configuration](https://craftcms.com/docs/5.x/configure.html) file for development;
5. Launching the Craft [setup wizard](#setup);

## Setup [#](#setup "Direct link to Setup")

Up to this point, everyone’s experience of the starter project will be basically the same—once you enter setup, however, you will need to make choices that rely on the specifics of your development environment.

To get an idea of what to expect, check out our dedicated [setup wizard](kb__first-time-setup.md) article.

### Directory Structure [#](#directory-structure "Direct link to Directory Structure")

The starter project [directory structure](https://craftcms.com/docs/5.x/system/directory-structure.html) may feel a little foreign, if you are coming from other PHP-based web applications. Here are some things to keep in mind:

- Both `composer.json` and `composer.lock` should stay with your project. Together, they define exactly what versions of any PHP packages your site depends on—this means you can ignore the entire `vendor/` directory, but still reconstruct the project in other environments;
- The `web/` folder is your site’s “web root,” but it can be renamed to whatever you want (`www/`, `public/`, `public_html/`, etc.);
- The structure may not agree with all development or hosting environments. You can [move Craft’s files below the web root](kb__moving-craft-files.md) if this becomes a problem;
- There are two “entry scripts” in every project—one for handling web requests (`web/index.php`) and one for handling [console commands](https://craftcms.com/docs/5.x/system/cli.html) (`craft`);

![](https://craftcms.com/dist/images/icon-tip.svg)

If you’re on macOS, be careful not to lose hidden files like `.env`, `.env.example`, `.gitignore`, and `web/.htaccess`. Press `Command+Shift+.` to toggle hidden file visibility in the Finder.

## Creating a Project from Scratch [#](#creating-a-project-from-scratch "Direct link to Creating a Project from Scratch")

If you want to take a closer look at the structure of the starter project, check out our [Setting up a Craft Project from Scratch](kb__setting-up-a-craft-project-from-scratch.md) guide.

## Tool-Specific Variations [#](#tool-specific-variations "Direct link to Tool-Specific Variations")

Use of the starter project will always involve Composer’s `create-project` command—but how and when it’s run may depend on your chosen development environment.

### DDEV [#](#ddev "Direct link to DDEV")

See the official [installation instructions](https://craftcms.com/docs/5.x/install.html).

### Docker / Docker Compose [#](#docker-docker-compose "Direct link to Docker / Docker Compose")

Compose commands can be run in a one-off container on any system with Docker installed:

```
docker run \
  --rm \
  --volume $PWD:/app \
  composer \
  composer create-project craftcms/craft my-craft-project --ignore-platform-reqs
```

This will create the `my-craft-project` directory and bootstrap a new project in it. To set up a complete development environment, read our [Local Development with Docker](kb__docker-for-local-development.md) guide.

### Homestead [#](#homestead "Direct link to Homestead")

Create your project directory and add it as a [shared folder](https://laravel.com/docs/10.x/homestead#configuring-shared-folders). Then, SSH into the virtual machine, navigate to the mapped directory, and run `composer create-project craftcms/craft .` to initialize the current directory (denoted by the dot `.` character).

When setup is completed, add an [nginx host](https://laravel.com/docs/10.x/homestead#configuring-nginx-sites) pointing to the new `web/` folder, within your project directory.

### Valet [#](#valet "Direct link to Valet")

No special steps are necessary, as [Valet](https://laravel.com/docs/10.x/valet) uses the software installed directly on your machine (usually via Brew) rather than within a virtual environment. Commands can be run verbatim.

Pay special attention to database connection details. If you are able to connect with a database GUI, the credentials *should* be the same. When running multiple versions of the same database engine, ports may differ.

### MAMP, WAMP, XAMPP, etc. [#](#mamp-wamp-xampp-etc "Direct link to MAMP, WAMP, XAMPP, etc.")

This family of tools generally comes with its own PHP and MySQL binaries. The most common issue when working with a new site is a mismatch between PHP versions used by the web server and command-line interface. Check what version of PHP is available in your terminal by running `php -v`, or `which php`.

If PHP 8.0.2+ is already available in your terminal, you can dive in with the generic instructions, above—otherwise, you may need to set or change the default version from your tool’s GUI, before using Composer.

Once you’ve run the normal `composer create-project ...` command to scaffold a new project, create a [host](https://documentation.mamp.info/en/MAMP-PRO-Mac/Create-a-new-host/Empty/index.html). The host’s “web root” or “document root” should be the `web/` directory inside your new project folder, like `~/Sites/my-craft-project`.

MAMP only supports [MySQL databases](https://documentation.mamp.info/en/MAMP-PRO-Mac/Settings/Hosts/Databases/), so your `.env` file should look something like this:

```
CRAFT_DB_DRIVER="mysql"
CRAFT_DB_SERVER="localhost"
CRAFT_DB_PORT="3306"
CRAFT_DB_DATABASE="your_database_name"
CRAFT_DB_SCHEMA="public"
CRAFT_DB_TABLE_PREFIX=""

# The following two properties are MAMP defaults.
# They may differ if you’ve added or modified users!
CRAFT_DB_USER="root"
CRAFT_DB_PASSWORD="root"
```

More info on database connections can be found in the [documentation](https://craftcms.com/docs/5.x/config/db.html).

![](https://craftcms.com/dist/images/icon-tip.svg)

Whatever tool you use, or wherever you scaffold a new project, try and avoid using a directory that is synchronized to a cloud service like Dropbox or iCloud. The installation and update processes create and modify hundreds or sometimes thousands of small files, which your computer will then attempt to upload one-by-one. If you want to back up project files, [Git](https://desktop.github.com/) is your friend!

### Other Tools + Platforms [#](#other-tools-platforms "Direct link to Other Tools + Platforms")

Be sure and check out our other [starters](https://craftcms.com/starters), if you’re curious about scaffolding projects with a particular kind of front-end.

Don’t see your favorite tool? [Reach out](https://craftcms.com/contact) and let us know about it. We want Craft to be accessible to everyone!

## Community Starter Projects [#](#community-starter-projects "Direct link to Community Starter Projects")

The official starter project is kept deliberately lean, to focus on Craft-specific concepts. We understand that some developers and teams will want to try out Craft with their favorite tools—and share what they’ve learned with the community!

Any other starter project can be used in place of the default one by substituting its package name for `craftcms/craft` when running `composer create-project`.

![](https://craftcms.com/dist/images/icon-tip.svg)

Be aware that third-party starter projects may involve additional commands, use different environment variable names, or make assumptions about your development environment.

Applies to
Craft CMS 4 and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
