# Upgrading from 4.4.2 to 4.4.3 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_443.html

---

# Upgrading from 4.4.2 to 4.4.3[](#upgrading-from-4-4-2-to-4-4-3 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Mandatory File Changes](#id1)[](#mandatory-file-changes "Link to this heading")

### [error\_exception.php](#id2)[](#error-exception-php "Link to this heading")

The following file received significant changes and
**you must merge the updated versions** with your application:

- app/Views/errors/html/error\_exception.php

## [Project Files](#id3)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [All Changes](#id4)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/Boot/development.php
- app/Config/Boot/production.php
- app/Config/Boot/testing.php
- app/Config/Filters.php
- app/Views/errors/html/error\_404.php
- app/Views/errors/html/error\_exception.php
