# Upgrading from 4.1.9 to 4.2.0 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_420.html

---

# Upgrading from 4.1.9 to 4.2.0[](#upgrading-from-4-1-9-to-4-2-0 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Mandatory File Changes](#id1)[](#mandatory-file-changes "Link to this heading")

### [index.php and spark](#id2)[](#index-php-and-spark "Link to this heading")

The following files received significant changes and
**you must merge the updated versions** with your application:

- `public/index.php`
- `spark`

Important

If you don’t update the above two files, CodeIgniter will not work at all
after running `composer update`.

The upgrade procedure, for example, is as follows:

```
composer update
cp vendor/codeigniter4/framework/public/index.php public/index.php
cp vendor/codeigniter4/framework/spark .
```

### [Config/Constants.php](#id3)[](#config-constants-php "Link to this heading")

The constants `EVENT_PRIORITY_LOW`, `EVENT_PRIORITY_NORMAL` and `EVENT_PRIORITY_HIGH` are deprecated, and the definitions are moved to `app/Config/Constants.php`. If you use these constants, define them in `app/Config/Constants.php`. Or use new class constants `CodeIgniter\Events\Events::PRIORITY_LOW`, `CodeIgniter\Events\Events::PRIORITY_NORMAL` and `CodeIgniter\Events\Events::PRIORITY_HIGH`.

### [composer.json](#id4)[](#composer-json "Link to this heading")

Note

This procedure is not required in v4.5.0 or later.

If you use Composer, when you installed CodeIgniter v4.1.9 or before, and
if there are `App\\` and `Config\\` namespaces in your `/composer.json`’s `autoload.psr-4`
like the following, you need to remove these lines, and run `composer dump-autoload`.

```
{
    ...
    "autoload": {
        "psr-4": {
            "App\\": "app",             <-- Remove this line
            "Config\\": "app/Config"    <-- Remove this line
        }
    },
    ...
}
```

## [Breaking Changes](#id5)[](#breaking-changes "Link to this heading")

- The `system/bootstrap.php` file no longer returns a `CodeIgniter` instance, and does not load the `.env` file (now handled in `index.php` and `spark`). If you have code that expects these behaviors it will no longer work and must be modified. This has been changed to make [Preloading](https://www.php.net/manual/en/opcache.preloading.php) easier to implement.

## [Breaking Enhancements](#id6)[](#breaking-enhancements "Link to this heading")

- The method signature of `Validation::setRule()` has been changed. The `string` typehint on the `$rules` parameter was removed. Extending classes should likewise remove the parameter so as not to break LSP.
- The method signature of `CodeIgniter\Database\BaseBuilder::join()` and `CodeIgniter\Database\*\Builder::join()` have been changed. The `string` typehint on the `$cond` parameter was removed. Extending classes should likewise remove the parameter so as not to break LSP.

## [Project Files](#id7)[](#project-files "Link to this heading")

Numerous files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.
There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

Note

Except in very rare cases for bug fixes, no changes made to files for the project space
will break your application. All changes noted here are optional until the next major version,
and any mandatory changes will be covered in the sections above.

### [Content Changes](#id8)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

- `app/Config/Routes.php`
  :   - To make the default configuration more secure, auto-routing has been changed to disabled by default.

### [All Changes](#id9)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/App.php
- app/Config/Constants.php
- app/Config/ContentSecurityPolicy.php
- app/Config/Database.php
- app/Config/Events.php
- app/Config/Feature.php
- app/Config/Filters.php
- app/Config/Format.php
- app/Config/Logger.php
- app/Config/Mimes.php
- app/Config/Publisher.php
- app/Config/Routes.php
- app/Config/Security.php
- app/Config/Validation.php
- app/Config/View.php
- app/Controllers/BaseController.php
- app/Views/errors/html/debug.css
- app/Views/errors/html/debug.js
- app/Views/errors/html/error\_404.php
- app/Views/errors/html/error\_exception.php
- app/Views/errors/html/production.php
- app/Views/welcome\_message.php
- app/index.html
- preload.php
- public/index.php
- spark
