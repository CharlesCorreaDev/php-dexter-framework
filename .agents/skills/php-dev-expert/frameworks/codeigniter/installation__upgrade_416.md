# Upgrading from 4.1.5 to 4.1.6 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_416.html

---

# Upgrading from 4.1.5 to 4.1.6[](#upgrading-from-4-1-5-to-4-1-6 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Validation Result Changes](#id2)[](#validation-result-changes "Link to this heading")

Due to a bug fix, the Validation now might change the validation results when you validate an array item (see [Changelog](changelogs__v4.1.6.md#changelog-v416-validation-changes)). So check the validation results for all the code that validates the array. Validating multiple fields like `contacts.*.name` is not affected.

If you have the following form:

```
<input type='text' name='invoice_rule[1]'>
<input type='text' name='invoice_rule[2]'>
```

And you have the validation rule like this:

```
'invoice_rule' =>  ['rules' => 'numeric', 'errors' => ['numeric' => 'Not numeric']]
```

Change the rule key to `invoice_rule.*` and the validation will work.

## [Breaking Enhancements](#id3)[](#breaking-enhancements "Link to this heading")

none.

## [Project Files](#id4)[](#project-files "Link to this heading")

Numerous files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.
There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

Note

Except in very rare cases for bug fixes, no changes made to files for the project space
will break your application. All changes noted here are optional until the next major version,
and any mandatory changes will be covered in the sections above.

### [Content Changes](#id5)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

- `app/Config/Filters.php`
- `app/Config/Mimes.php`
- `app/Config/Security.php`
- `app/Config/Toolbar.php`

### [All Changes](#id6)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- `app/Config/Filters.php`
- `app/Config/Mimes.php`
- `app/Config/Security.php`
- `app/Config/Toolbar.php`
- `app/Views/errors/html/error_exception.php`
