# Upgrading from 4.7.0 to 4.7.1 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_471.html

---

# Upgrading from 4.7.0 to 4.7.1[](#upgrading-from-4-7-0-to-4-7-1 "Link to this heading")

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

## [Breaking Enhancements](#id3)[](#breaking-enhancements "Link to this heading")

### [Database Connection Property Casting](#id4)[](#database-connection-property-casting "Link to this heading")

`BaseConnection` now casts string values coming from `.env` overrides to match
the declared type of each connection property. This affects properties that are
`null` in the config array and then set via `.env` - such as SQLite3’s
`synchronous` or `busyTimeout` - which previously arrived as strings and were
stored without conversion.

If you extended the SQLite3 handler, review your custom typed properties and update
them if needed.

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

- app/Config/WorkerMode.php
  :   - `Config\WorkerMode::$resetEventListeners` has been added, with a default
        value set to `[]`. See [Reset Event Listeners](installation__worker_mode.md#worker-mode-reset-event-listeners) for details.

### [All Changes](#id7)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/Database.php
- app/Config/WorkerMode.php
