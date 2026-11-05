# Upgrading from 4.2.0 to 4.2.1 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_421.html

---

# Upgrading from 4.2.0 to 4.2.1[](#upgrading-from-4-2-0-to-4-2-1 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Mandatory File Changes](#id1)[](#mandatory-file-changes "Link to this heading")

### [app/Config/Mimes.php](#id2)[](#app-config-mimes-php "Link to this heading")

- The mapping of file extensions to MIME types in **app/Config/Mimes.php** was updated to fix a bug. Also, the logic of `Mimes::getExtensionFromType()` was changed.

## [Breaking Changes](#id3)[](#breaking-changes "Link to this heading")

### [get\_cookie()](#id4)[](#get-cookie "Link to this heading")

If there is a cookie with a prefixed name and a cookie with the same name without a prefix, the previous `get_cookie()` had the tricky behavior of returning the cookie without the prefix.

For example, when `Config\Cookie::$prefix` is `prefix_`, there are two cookies, `test` and `prefix_test`:

```
$_COOKIES = [
    'test'        => 'Non CI Cookie',
    'prefix_test' => 'CI Cookie',
];
```

Previously, `get_cookie()` returns the following:

```
get_cookie('test');        // returns "Non CI Cookie"
get_cookie('prefix_test'); // returns "CI Cookie"
```

Now the behavior has been fixed as a bug, and has been changed like the following.

```
get_cookie('test');              // returns "CI Cookie"
get_cookie('prefix_test');       // returns null
get_cookie('test', false, null); // returns "Non CI Cookie"
```

If you depend on the previous behavior, you need to change your code.

Note

In the example above, if there is only one cookie `prefix_test`,
the previous `get_cookie('test')` also returns `"CI Cookie"`.

## [Breaking Enhancements](#id5)[](#breaking-enhancements "Link to this heading")

## [Project Files](#id6)[](#project-files "Link to this heading")

Numerous files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.
There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

Note

Except in very rare cases for bug fixes, no changes made to files for the project space
will break your application. All changes noted here are optional until the next major version,
and any mandatory changes will be covered in the sections above.

### [Content Changes](#id7)[](#content-changes "Link to this heading")

### [All Changes](#id8)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/Mimes.php
