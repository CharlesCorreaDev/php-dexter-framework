# Upgrading from 4.7.2 to 4.7.3 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_473.html

---

# Upgrading from 4.7.2 to 4.7.3[](#upgrading-from-4-7-2-to-4-7-3 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Mandatory File Changes](#id1)[](#mandatory-file-changes "Link to this heading")

### [Worker Mode](#id2)[](#worker-mode "Link to this heading")

If you are using Worker Mode, you must update **public/frankenphp-worker.php** after
upgrading. The easiest way is to re-run the install command:

```
php spark worker:install --force
```

## [Breaking Changes](#id3)[](#breaking-changes "Link to this heading")

### [File Validation](#id4)[](#file-validation "Link to this heading")

The `ext_in` file upload validation rule now checks the client filename
extension and verifies that the detected MIME type is associated with that
extension. Previously, `ext_in` only checked the MIME-derived guessed
extension.

This means files with no client filename extension, or files whose client
filename extension does not match the detected MIME type, now fail `ext_in`
validation. If your application intentionally accepts such files, remove
`ext_in` from those validation rules and use a custom validation rule that
matches your application’s requirements.

## [Project Files](#id5)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

Note

There are some third-party CodeIgniter modules available to assist
with merging changes to the project space:
[Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Content Changes](#id6)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

#### Config[](#config "Link to this heading")

- app/Config/Database.php
- app/Config/Events.php
- app/Config/Routes.php
- app/Config/View.php

### [All Changes](#id7)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/Database.php
- app/Config/Events.php
- app/Config/Routes.php
- app/Config/View.php
