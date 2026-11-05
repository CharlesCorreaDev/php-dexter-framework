# Upgrading Elgg — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/admin/upgrading.html

---

# Upgrading Elgg[](#upgrading-elgg "Permalink to this heading")

This document will guide you through steps necessary to upgrade your Elgg installation to the latest version.

If you’ve written custom plugins, you should also read the developer guides for
[information on upgrading plugin code](appendix__upgrade-notes.md) for the latest version of Elgg.

Contents

- [Advice](#advice)
- [From 2.3 to 3.0](#from-2-3-to-3-0)

  - [1. Update `composer.json`](#update-composer-json)
  - [2. Update `.htaccess`](#update-htaccess)
  - [3a. Composer Upgrade (recommended)](#a-composer-upgrade-recommended)
  - [3b. Manual Upgrade (legacy approach)](#b-manual-upgrade-legacy-approach)
- [Applying a patch using Composer](#applying-a-patch-using-composer)
- [Earlier versions](#earlier-versions)

## [Advice](#id1)[](#advice "Permalink to this heading")

- **Back up your database, data directory and code**
- Mind any version-specific comments below
- Version below 2.0 are advised to only upgrade **one minor version at a time**
- You can upgrade from any minor version to any higher minor version in the same major (2.0 -> 2.1 or 2.0 -> 2.3)
- You can only upgrade the latest minor version in the previous major version to any minor version in the next version (2.3 -> 3.0 or 2.3 -> 3.2, but not 2.2 -> 3.x).
- From Elgg 2.3.\* you can upgrade to any future version of Elgg without having to go through each minor version (e.g. you can upgrade directly from 2.3.8 to 3.2.5, without having to upgrade to 3.0 and 3.1)
- Try out the new version on a test site before doing an upgrade
- Report any problems in plugins to the plugin authors
- If you are a plugin author you can [report any backwards-compatibility issues to GitHub](https://github.com/Elgg/Elgg/issues)

## [From 2.3 to 3.0](#id2)[](#from-2-3-to-3-0 "Permalink to this heading")

### [1. Update `composer.json`](#id3)[](#update-composer-json "Permalink to this heading")

If you have used Elgg’s starter project to install Elgg 2.3, you may need to update your `composer.json`:

> - change platform requirements to PHP >= 7.0
> - optionally, set autoloader optimization parameters
> - optionally, disable fxp-asset plugin in favor of asset-packagist

Your `composer.json` would look something like this (depending what changes you may have introduced yourself):

```
{
        "type": "project",
        "name": "elgg/starter-project",
        "require": {
                "elgg/elgg": "3.*"
        },
        "config": {
                "process-timeout": 0,
                "platform": {
                        "php": "7.0"
                },
                "fxp-asset": {
                        "enabled": false
                },
                "optimize-autoloader": true,
                "apcu-autoloader": true
        },
        "repositories": [
                {
                        "type": "composer",
                        "url": "https://asset-packagist.org"
          }
        ]
}
```

### [2. Update `.htaccess`](#id4)[](#update-htaccess "Permalink to this heading")

Find the line:

```
RewriteRule ^(.*)$ index.php?__elgg_uri=$1 [QSA,L]
```

And replace it with:

```
RewriteRule ^(.*)$ index.php [QSA,L]
```

### [3a. Composer Upgrade (recommended)](#id5)[](#a-composer-upgrade-recommended "Permalink to this heading")

If you had your Elgg 2.3 project installed using composer, you can follow this sequence:

**Back up your database, data directory, and code**

```
composer self-update

cd ./path/to/project/root
composer require elgg/elgg:~3.0.0
composer update
vendor/bin/elgg-cli upgrade async -v
```

Note

In some cases the command line upgrade will fail because some database schema changes need to be applied first.
In that case you need to execute the [Phinx migrations](contribute__database.md#contribute-database-execute-migration) manually

### [3b. Manual Upgrade (legacy approach)](#id6)[](#b-manual-upgrade-legacy-approach "Permalink to this heading")

Manual upgrades are a major undertaking for site admins. We discourage you from maintaining an Elgg installation using
ZIP dist packages. Save yourself some time by learning how to use `composer` and version control systems, such as `git`.
This task will also be complicated if you have third-party plugins and/or have made any modifications to core files!

1. **Back up your database, data directory, and code**
2. Log in as an admin to your site
3. Download the new version of Elgg from <http://elgg.org>
4. Update the files
   :   - If upgrading to a major version, you need to overwrite all core files and remove any files that were removed from Elgg core,
         as they may interfere with proper functioning of your site.
       - If upgrading to a minor version or patching, you need to overwrite all core files.
5. Merge any new changes to the rewrite rules
   :   - For Apache from `install/config/htaccess.dist` into `.htaccess`
       - For Nginx from `install/config/nginx.dist` into your server configuration (usually inside `/etc/nginx/sites-enabled`)
6. Visit <http://your-elgg-site.com/upgrade.php>
7. Execute asynchronous upgrades at <http://your-elgg-site.com/admin/upgrades>

Note

Any modifications should have been written within plugins, so that they are not lost on overwriting.
If this is not the case, take care to maintain your modifications.

Note

If you are unable to access `upgrade.php` script and receive an error, add `$CONFIG->security_protect_upgrade = false;`
to your `settings.php` and remove it after you have completed all of the upgrade steps.

Note

If you encounter issues with plugins during the upgrade, add an empty file called `disabled` in your `/mod/` directory.
This will disable the plugins, so that you can finish the core upgrade. You can then deal with issues on per-plugin basis.

If you have installed Elgg using a dist package but would now like to switch to composer:

> - Upgrade your current installation using Manual Upgrade method
> - Move your codebase to a temporary location
> - Create a new composer project using Elgg’s starter project following [installation instructions](intro__install.md) in the root directory of your current installation
> - Copy third-party plugins from your old installation into `/mod` directory
> - Run Elgg’s installer using your browser or `elgg-cli` tool
> - When you reach the database step, provide the same credentials you have used for manual installation, Elgg will understand that is’s an existing installation and will not override any database values
> - Optionally commit your new project to version control

## [Applying a patch using Composer](#id7)[](#applying-a-patch-using-composer "Permalink to this heading")

The definition of a patch can be found in the [Release policy](appendix__releases.md).

Your `composer.json` requirement for Elgg should be `~3.y.0` (where `y` is the minor version `0`, `1`, etc. you wish to have
installed). This will make sure you can easily install patches without the risk of installing the next minor release.

```
{
        "require": {
                "elgg/elgg": "~3.0.0"
        }
}
```

Just to be sure you can first verify what will be installed / upgraded by executing the folowing command

```
# to get a full list of all packages which can be upgraded
composer update --dry-run

# or if you only wish to check for Elgg
composer update elgg/elgg --dry-run
```

To upgrade Elgg simply execute

```
# to upgrade all packages
composer update

# or to only upgrade Elgg
composer update elgg/elgg
```

## [Earlier versions](#id8)[](#earlier-versions "Permalink to this heading")

Check Elgg documentation that corresponds to the Elgg version you want to upgrade to, by switching the documentation
version in the lower left corner of [Upgrading docs](#)
