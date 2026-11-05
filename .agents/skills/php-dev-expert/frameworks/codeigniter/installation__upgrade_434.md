# Upgrading from 4.3.3 to 4.3.4 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_434.html

---

# Upgrading from 4.3.3 to 4.3.4[](#upgrading-from-4-3-3-to-4-3-4 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Redirect Status Code](#id2)[](#redirect-status-code "Link to this heading")

- Due to a bug fix, the status codes of redirects may be changed. See
  [ChangeLog v4.3.4](changelogs__v4.3.4.md#v434-redirect-status-code) and if the code is not
  what you want, [specify status codes](outgoing__response.md#response-redirect-status-code).

### [Forge::modifyColumn() and NULL](#id3)[](#forge-modifycolumn-and-null "Link to this heading")

A bug fix may have changed the NULL constraint in the result of
[$forge->modifyColumn()](dbmgmt__forge.md#db-forge-modifycolumn). See
[Change Log](changelogs__v4.3.4.md#v434-forge-modifycolumn).
To set the desired NULL constraint, change `Forge::modifyColumn()` to always
specify the `null` key.

Note that the bug may have changed unexpected NULL constraints in previous
versions.

## [Project Files](#id4)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Content Changes](#id5)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

#### Config[](#config "Link to this heading")

- app/Config/Generators.php

### [All Changes](#id6)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/App.php
- app/Config/Generators.php
- composer.json
- public/index.php
