# Upgrading from 4.3.4 to 4.3.5 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_435.html

---

# Upgrading from 4.3.4 to 4.3.5[](#upgrading-from-4-3-4-to-4-3-5 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Validation Placeholders](#id2)[](#validation-placeholders "Link to this heading")

To use [Validation Placeholders](libraries__validation.md#validation-placeholders) securely, please remember to create a validation rule for the field you will use as a placeholder.

E.g., if you have the following code:

```
$validation->setRules([
    'email' => 'required|max_length[254]|valid_email|is_unique[users.email,id,{id}]',
]);
```

You need to add the rules for `{id}`:

```
$validation->setRules([
    'id'    => 'max_length[19]|is_natural_no_zero', // Add this
    'email' => 'required|max_length[254]|valid_email|is_unique[users.email,id,{id}]',
]);
```

### [Session::stop()](#id3)[](#session-stop "Link to this heading")

Prior to v4.3.5, the `Session::stop()` method did not destroy the session due
to a bug. This method has been modified to destroy the session, and now deprecated
because it is exactly the same as the `Session::destroy()` method. So use the
[Session::destroy](libraries__sessions.md#session-destroy) method instead.

If you have code to depend on the bug, replace it with `session_regenerate_id(true)`.

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
