# Upgrading from 4.1.7 to 4.1.8 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_418.html

---

# Upgrading from 4.1.7 to 4.1.8[](#upgrading-from-4-1-7-to-4-1-8 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

- Due to a security issue in the `API\ResponseTrait` all trait methods are now scoped to `protected`. See the [Security advisory GHSA-7528-7jg5-6g62](https://github.com/codeigniter4/CodeIgniter4/security/advisories/GHSA-7528-7jg5-6g62) for more information.
