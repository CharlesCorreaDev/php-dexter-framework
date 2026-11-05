# Upgrading from 4.3.1 to 4.3.2 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_432.html

---

# Upgrading from 4.3.1 to 4.3.2[](#upgrading-from-4-3-1-to-4-3-2 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [base\_url()](#id2)[](#base-url "Link to this heading")

The [`base_url()`](helpers__url_helper.md#base_url "base_url") behavior has been fixed. In previous versions, when you
call `base_url()` **without argument**, it returned baseURL without a trailing
slash (`/`). Now it returns baseURL with a trailing slash. For example:

- before: `http://example.com`
- after: `http://example.com/`

If you have code to call `base_url()` without argument, you may need to adjust the URLs.

### [uri\_string()](#id3)[](#uri-string "Link to this heading")

The [`uri_string()`](helpers__url_helper.md#uri_string "uri_string") behavior has been fixed. In previous versions, when you
navigate to the baseURL, it returned `/`. Now it returns an empty string (`''`).

If you have code to call `uri_string()`, you may need to adjust it.

Note

The [`uri_string()`](helpers__url_helper.md#uri_string "uri_string") returns a URI path relative to baseURL.
It is not a full URI path if the baseURL contains subfolders.
If you use it for HTML links, it is better to use it with [`site_url()`](helpers__url_helper.md#site_url "site_url")
like `site_url(uri_string())`.

## [Mandatory File Changes](#id4)[](#mandatory-file-changes "Link to this heading")

### [composer.json](#id5)[](#composer-json "Link to this heading")

If you have installed CodeIgnter manually and are using or planning to use Composer,
remove the following line:

```
{
    ...
    "scripts": {
        "post-update-cmd": [
            "CodeIgniter\\ComposerScripts::postUpdate"  <-- Remove this line
        ],
        "test": "phpunit"
    },
    ...
}
```

## [Project Files](#id6)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Content Changes](#id7)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

- app/Config/Mimes.php
- app/Views/errors/html/error\_exception.php
- composer.json
- public/.htaccess

### [All Changes](#id8)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/App.php
- app/Config/Mimes.php
- app/Views/errors/html/error\_exception.php
- composer.json
- public/.htaccess
