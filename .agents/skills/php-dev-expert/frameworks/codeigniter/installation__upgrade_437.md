# Upgrading from 4.3.6 to 4.3.7 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_437.html

---

# Upgrading from 4.3.6 to 4.3.7[](#upgrading-from-4-3-6-to-4-3-7 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Feature Testing Request Body](#id2)[](#feature-testing-request-body "Link to this heading")

If you call:

1. [withBody()](testing__feature.md#feature-setting-the-body)
2. and [withBodyFormat()](testing__feature.md#feature-formatting-the-request)
3. and pass the `$params` to [call()](testing__feature.md#feature-requesting-a-page) (or shorthand methods)

the priority for a Request body has been changed. In the unlikely event that you
have test code affected by this change, modify it.

For example, now the `$params` is used to build the request body, and the `$body`
is not used:

```
$this->withBody($body)->withBodyFormat('json')->call('post', $params)
```

Previously, the `$body` was used for the request body.

### [Return value of Validation::loadRuleGroup()](#id3)[](#return-value-of-validation-loadrulegroup "Link to this heading")

The return value of `Validation::loadRuleGroup()` has been changed from
“**rules array**” to “**array** of **rules array** and **customErrors array**”
(`[rules, customErrors]`).

If you use the method, update the code like the following:

```
$rules = $this->validation->loadRuleGroup($rules);
    ↓
[$rules, $customErrors] = $this->validation->loadRuleGroup($rules);
```

## [Project Files](#id4)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Content Changes](#id5)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

#### Config[](#config "Link to this heading")

- app/Config/Kint.php

### [All Changes](#id6)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/App.php
- app/Config/Autoload.php
- app/Config/Cache.php
- app/Config/ContentSecurityPolicy.php
- app/Config/Filters.php
- app/Config/Kint.php
- app/Config/Logger.php
- app/Config/Migrations.php
- app/Config/Modules.php
- app/Config/Paths.php
- app/Controllers/BaseController.php
- app/Controllers/Home.php
- composer.json
