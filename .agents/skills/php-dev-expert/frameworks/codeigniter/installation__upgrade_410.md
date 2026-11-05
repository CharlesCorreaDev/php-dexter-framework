# Upgrading from 4.0.5 to 4.1.0 or 4.1.1 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_410.html

---

# Upgrading from 4.0.5 to 4.1.0 or 4.1.1[](#upgrading-from-4-0-5-to-4-1-0-or-4-1-1 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Legacy Autoloading](#id2)[](#legacy-autoloading "Link to this heading")

`Autoloader::loadLegacy()` method was originally for transition to CodeIgniter v4. Since v4.1.0,
this support was removed. All classes must be namespaced.
