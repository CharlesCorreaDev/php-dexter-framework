# Upgrading from 4.1.6 to 4.1.7 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_417.html

---

# Upgrading from 4.1.6 to 4.1.7[](#upgrading-from-4-1-6-to-4-1-7 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

- `get_cookie()` when `$xssClean` is true changed the output. Now it uses `FILTER_SANITIZE_FULL_SPECIAL_CHARS`, not `FILTER_SANITIZE_STRING`. Make sure the change is acceptable or not. Note that using XSS filtering is a bad practice. It does not prevent XSS attacks perfectly. Using `esc()` with the correct `$context` in the views is recommended.
