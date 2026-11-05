# Upgrading from 4.2.6 to 4.2.7 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_427.html

---

# Upgrading from 4.2.6 to 4.2.7[](#upgrading-from-4-2-6-to-4-2-7 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [set\_cookie()](#id2)[](#set-cookie "Link to this heading")

Due to a bug, [`set_cookie()`](helpers__cookie_helper.md#set_cookie "set_cookie") and [`CodeIgniter\HTTP\Response::setCookie()`](outgoing__response.md#CodeIgniter\HTTP\Response::setCookie "CodeIgniter\HTTP\Response::setCookie")
in the previous versions did not use the `$secure` and `$httponly` values in `Config\Cookie`.
The following code did not issue a cookie with the secure flag even if you set `$secure = true`
in `Config\Cookie`:

```
helper('cookie');

$cookie = [
    'name'  => $name,
    'value' => $value,
];
set_cookie($cookie);
// or
$this->response->setCookie($cookie);
```

But now the values in `Config\Cookie` are used for the options that are not specified.
The above code issues a cookie with the secure flag if you set `$secure = true`
in `Config\Cookie`.

If your code depends on this bug, please change it to explicitly specify the necessary options:

```
$cookie = [
    'name'     => $name,
    'value'    => $value,
    'secure'   => false, // Set explicitly
    'httponly' => false, // Set explicitly
];
set_cookie($cookie);
// or
$this->response->setCookie($cookie);
```

### [Others](#id3)[](#others "Link to this heading")

- `Time::__toString()` is now locale-independent. It returns database-compatible strings like ‘2022-09-07 12:00:00’ in any locale. Most locales are not affected by this change. But in a few locales like ar, fa, `Time::__toString()` (or `(string) $time` or implicit casting to a string) no longer returns a localized datetime string. if you want to get a localized datetime string, use [Time::toDateTimeString()](libraries__time.md#time-todatetimestring) instead.
- The logic of Validation rule `required_without` has been changed to validate each array item separately when validating fields with asterisk (`*`), and the method signature of the rule method has also been changed. Extending classes should likewise update the parameters so as not to break LSP.

## [Project Files](#id4)[](#project-files "Link to this heading")

Version 4.2.7 did not alter any executable code in project files.

### [All Changes](#id5)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Common.php
