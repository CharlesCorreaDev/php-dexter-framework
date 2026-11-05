# Setting up a Craft Project from Scratch | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/setting-up-a-craft-project-from-scratch

---

Search Knowledge Base

# Setting up a Craft Project from Scratch

While we recommend using the [official starter project](https://github.com/craftcms/craft), there are only a couple of things you need to know to start completely from scratch. This guide is intended for advanced users and tinkerers who want to experiment with how Craft is initialized.

Please be aware that downloading or installing Craft binds you to its [license](https://craftcms.com/license).

## Initializing with Composer [#](#initializing-with-composer "Direct link to Initializing with Composer")

All projects will involve Composer at some point—so we might as well get started on the right foot, with the [`init` command](https://getcomposer.org/doc/03-cli.md#init):

```
mkdir my-custom-project
cd my-custom-project
composer init
```

Skip or accept defaults for all the prompts, except for these:

- **Package Type** → `project`
- **Would you like to define your dependencies (require) interactively?** → `y` for “Yes”
- **Search for a package:** → `craftcms/cms`  
  Allow Composer to find the latest version.
  Press `Enter` when prompted to search again to exit dependency declaration, and answer **no** when prompted to declare `require-dev` dependencies.
- **Add PSR-4 autoload mapping?** → `n` to skip
- **Do you trust `yiisoft/yii2-composer` to execute code and wish to enable it now?** → `y` for “Yes”
- **Do you trust `craftcms/plugin-installer` to execute code and wish to enable it now?** → `y` for “Yes”

You will be left with a fresh `vendor/` directory and a `composer.json` file that looks something like this:

```
{
    "name": "me/my-custom-project",
    "require": {
        "craftcms/cms": "^5.1"
    },
    "authors": [
        {
            "name": "My Name",
            "email": "email@domain.com"
        }
    ],
    "config": {
        "allow-plugins": {
            "yiisoft/yii2-composer": true,
            "craftcms/plugin-installer": true
        }
    }
}
```

Comparing this to the [starter kit](https://github.com/craftcms/craft/blob/5.x/composer.json.default), you’ll notice it’s pretty similar.

## Bootstrapping Craft [#](#bootstrapping-craft "Direct link to Bootstrapping Craft")

Now that Craft’s *source* files are installed, you’ll need to create “entry scripts” for web and console requests.

```
my-custom-project/
├── vendor/
│   └── ...
├── web/
│   ├── .htaccess
│   └── index.php     ← (1) Web
│   bootstrap.php     ← (3) Bootstrap
├── composer.json
├── composer.lock
└── craft             ← (2) Console
```

Create a `web/` directory, and two files inside it: `index.php` (`1`), to serve web requests…

```
<?php

require dirname(__DIR__) . '/bootstrap.php';

/** @var craft\web\Application $app */
$app = require CRAFT_VENDOR_PATH . '/craftcms/cms/bootstrap/web.php';
$app->run();
```

…and—if you plan on using Apache—a boilerplate `.htaccess` file that reroutes any request that doesn’t match a “real” file through `index.php`:

```
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Send would-be 404 requests to Craft
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} !^/(favicon\.ico|apple-touch-icon.*\.png)$ [NC]
    RewriteRule (.+) index.php?p=$1 [QSA,L]
</IfModule>
```

Note that `index.php` contains a reference to a shared “bootstrap” file in the directory above it. We’ll create that in a moment.

![](https://craftcms.com/dist/images/icon-tip.svg)

The `web/` directory can be named whatever you like, so long as you can configure your web server to use it as the web root. See [Moving Craft’s Files Below the Web Root](kb__moving-craft-files.md) for some hints on how to customize the folder structure.

Now, at the root level of your project, create a `craft` (`3`) file (no extension), taking care to include the special “[shebang](https://en.wikipedia.org/wiki/Shebang_(Unix))” line:

```
#!/usr/bin/env php
<?php

require __DIR__ . '/bootstrap.php';

/** @var craft\console\Application $app */
$app = require CRAFT_VENDOR_PATH . '/craftcms/cms/bootstrap/console.php';
$exitCode = $app->run();
exit($exitCode);
```

This console entry script also refers to the `bootstrap.php` (`3`) file, which also goes in the project’s root:

```
<?php

// Two constants inform much of Craft’s ability to find resources in your project:
define('CRAFT_BASE_PATH', __DIR__);
define('CRAFT_VENDOR_PATH', CRAFT_BASE_PATH . '/vendor');

// Load Composer's autoloader
require_once CRAFT_VENDOR_PATH . '/autoload.php';
```

As a means of DRYing up the entry scripts, this is where the starter project loads [environment variables](#environment-variable-support)—and where we recommend performing some low-level [bootstrap configuration](https://craftcms.com/docs/5.x/reference/config/bootstrap.html).

## Environment Variable Support [#](#environment-variable-support "Direct link to Environment Variable Support")

The official starter project automatically supports defining environment variables from a `.env` file, through the [`vlucas/phpdotenv`](https://github.com/vlucas/phpdotenv) package.

It’s up to you how to manage secrets! If your development and production environments have built-in tools for this, you may not need to implement a `.env` loader. Regardless of how you choose to *set* environment variables, Craft will be able to *get* them without any external support.

If at this point you are inclined to implement `.env` support, take another look at the starter project. It will likely end up being the minimal scaffold you are looking for, and is still completely customizable after initialization!

## Configuration [#](#configuration "Direct link to Configuration")

Craft looks for configuration files in the [`config/` directory](https://craftcms.com/docs/5.x/system/directory-structure.html#config). `license.key` will be written to this folder automatically, but [general](https://craftcms.com/docs/5.x/reference/config/general.html), [database](https://craftcms.com/docs/5.x/reference/config/db.html), and [application](https://craftcms.com/docs/5.x/reference/config/app.html) config files are your responsibility.

Your configuration should complement your approach to secret management. Craft provides helper functions like [`App::env('...')`](https://docs.craftcms.com/api/v5/craft-helpers-app.html#method-env) and [`App::parseEnv('...')`](https://docs.craftcms.com/api/v5/craft-helpers-app.html#method-parseenv) to deal with resolving values at runtime, which are preferred over hard-coding values or [ignoring](#ignoring-files) config files altogether.

## Other Directories [#](#other-directories "Direct link to Other Directories")

Craft relies on a [`storage/` directory](https://craftcms.com/docs/5.x/system/directory-structure.html#storage) at the root of your project. Consider tracking the directory but ignoring `backups`, `composer-backups`, `config-backups`, `logs`, and `runtime`, within it.

Similarly, the `web/cpresources/` directory is necessary for the control panel to work, but everything inside it can be ignored.

Review the starter project and [directory structure](https://craftcms.com/docs/5.x/system/directory-structure.html) documentation to determine if any additional directories are required.

## Ignoring Files [#](#ignoring-files "Direct link to Ignoring Files")

The minimum `.gitignore` file should look something like this:

```
/.env
/vendor
```

### Other Considerations [#](#other-considerations "Direct link to Other Considerations")

- [Configuration](https://craftcms.com/docs/5.x/configure.html) makes it possible to keep secrets out of your `config/` directory, so it can be usually be tracked safely;
- `config/license.key` and plugin license keys can stay with your project, as they will be bound to your Craft ID once purchased;
- Keeping a `.env.example` is a helpful practice, as it lets other developers know what configuration is required to make your project work;
- Review our recommendations for [how to handle the contents of the `storage/` directory](kb__craft-storage-gitignore.md);
- Other directories in the starter project may include `.gitignore` files of their own;

![](https://craftcms.com/dist/images/icon-warning.svg)

**Never** version-control files that contain sensitive information. If `.env` or another sensitive file makes it into your repo, keys should be rotated immediately.

Applies to
Craft CMS 5 and Craft CMS 4.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
