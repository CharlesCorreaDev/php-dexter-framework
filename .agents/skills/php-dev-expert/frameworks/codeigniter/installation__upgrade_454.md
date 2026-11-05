# Upgrading from 4.5.3 to 4.5.4 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_454.html

---

# Upgrading from 4.5.3 to 4.5.4[](#upgrading-from-4-5-3-to-4-5-4 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Project Files](#id1)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

Note

There are some third-party CodeIgniter modules available to assist
with merging changes to the project space:
[Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [All Changes](#id2)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/Events.php
- composer.json
