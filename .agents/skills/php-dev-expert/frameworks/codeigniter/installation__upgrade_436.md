# Upgrading from 4.3.5 to 4.3.6 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_436.html

---

# Upgrading from 4.3.5 to 4.3.6[](#upgrading-from-4-3-5-to-4-3-6 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

- `AutoRouterInterface::getRoute()` has the new second parameter `string $httpVerb`.
  If you implement it, add the parameter.

## [Breaking Enhancements](#id2)[](#breaking-enhancements "Link to this heading")

- The method signatures of `ValidationInterface::check()` and `Validation::check()`
  have been changed. If you implement or extend them, update the signatures.

## [Project Files](#id3)[](#project-files "Link to this heading")

Version 4.3.6 did not alter any executable code in project files.

### [All Changes](#id4)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- composer.json
