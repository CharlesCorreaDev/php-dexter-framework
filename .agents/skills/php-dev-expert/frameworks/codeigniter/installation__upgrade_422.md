# Upgrading from 4.2.1 to 4.2.2 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_422.html

---

# Upgrading from 4.2.1 to 4.2.2[](#upgrading-from-4-2-1-to-4-2-2 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Web Page Caching Bug Fix](#id2)[](#web-page-caching-bug-fix "Link to this heading")

- [Web Page Caching](general__caching.md) now caches the Response data after [After Filters](incoming__filters.md#after-filters) are executed.
- For example, if you enable [SecureHeaders](incoming__filters.md#secureheaders), the Response headers are now sent when the page comes from the cache.

Important

If you have written **code based on this bug** that assumes changes to the Response in “after” filters are not cached then **sensitive information could be cached and compromised**. If this is the case, change your code to disable caching of the page.

### [Others](#id3)[](#others "Link to this heading")

- The method `Forge::createTable()` no longer executes a `CREATE TABLE IF NOT EXISTS`. When $ifNotExists is true, if the table is not found in `$db->tableExists($table)` then `CREATE TABLE` is executed.
- The second parameter `$ifNotExists` of `Forge::_createTable()` is deprecated. It is no longer used and will be removed in a future release.
- When you use [`random_string()`](helpers__text_helper.md#random_string "random_string") with the first parameter `'crypto'`, now if you set the second parameter `$len` to an odd number, `InvalidArgumentException` will be thrown. Change the parameter to an even number.

## [Breaking Enhancements](#id4)[](#breaking-enhancements "Link to this heading")

## [Project Files](#id5)[](#project-files "Link to this heading")

Numerous files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.
There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

Note

Except in very rare cases for bug fixes, no changes made to files for the project space
will break your application. All changes noted here are optional until the next major version,
and any mandatory changes will be covered in the sections above.

### [Content Changes](#id6)[](#content-changes "Link to this heading")

- app/Views/errors/html/error\_404.php
- app/Views/welcome\_message.php
- public/index.php
- spark

### [All Changes](#id7)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/App.php
- app/Config/Constants.php
- app/Config/Logger.php
- app/Config/Paths.php
- app/Views/errors/html/error\_404.php
- app/Views/welcome\_message.php
