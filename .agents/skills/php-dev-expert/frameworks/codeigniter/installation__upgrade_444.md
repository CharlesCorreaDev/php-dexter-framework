# Upgrading from 4.4.3 to 4.4.4 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_444.html

---

# Upgrading from 4.4.3 to 4.4.4[](#upgrading-from-4-4-3-to-4-4-4 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Mandatory File Changes](#id1)[](#mandatory-file-changes "Link to this heading")

### [Error Files](#id2)[](#error-files "Link to this heading")

Update the following files to show correct error messages:

- app/Views/errors/cli/error\_exception.php
- app/Views/errors/html/error\_exception.php

## [Breaking Changes](#id3)[](#breaking-changes "Link to this heading")

### [Validation with Dot Array Syntax](#id4)[](#validation-with-dot-array-syntax "Link to this heading")

If you are using [dot array syntax](libraries__validation.md#validation-dot-array-syntax) in validation
rules, a bug where `*` would validate data in incorrect dimensions has been fixed.

In previous versions, the rule key `contacts.*.name` captured data with any
level like `contacts.*.name`, `contacts.*.*.name`, `contacts.*.*.*.name`,
etc., incorrectly.

The following code explains details:

```
use Config\Services;

$validation = Services::validation();

$data = [
    'contacts' => [
        'name' => 'Joe Smith',
        'just' => [
            'friends' => [
                ['name' => 'SATO Taro'],
                ['name' => 'Li Ming'],
                ['name' => 'Heinz Müller'],
            ],
        ],
    ],
];

$validation->setRules(
    ['contacts.*.name' => 'required|max_length[8]'],
);

$validation->run($data); // false

d($validation->getErrors());
/*
 Before: Captured `contacts.*.*.*.name` incorrectly.
 [
   contacts.just.friends.0.name => "The contacts.*.name field cannot exceed 8 characters in length.",
   contacts.just.friends.2.name => "The contacts.*.name field cannot exceed 8 characters in length.",
 ]

 After: Captures no data for `contacts.*.name`.
 [
   contacts.*.name => string (38) "The contacts.*.name field is required.",
 ]
*/
```

If you have code that depends on the bug, fix the the rule key.

### [Validation rules matches and differs](#id5)[](#validation-rules-matches-and-differs "Link to this heading")

Because bugs have been fixed in the case where `matches` and `differs` in
the Strict and Traditional rules validate data of non-string types, if you are
using these rules and validate non-string data, the validation results might be
changed (fixed).

Note that Traditional Rules should not be used to validate data that is not a
string.

### [The use of the ssl\_key option in CURLRequest was removed](#id6)[](#the-use-of-the-ssl-key-option-in-curlrequest-was-removed "Link to this heading")

CURLRequest option ssl\_key it’s not recognized anymore.
If in use, option ssl\_key must be replaced with option verify in order to define the path
to a CA bundle for CURLRequest.

CURLRequest option verify can also take *boolean* values as usual.

## [Project Files](#id7)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [All Changes](#id8)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/App.php
- app/Config/Autoload.php
- app/Config/Boot/development.php
- app/Config/Boot/testing.php
- app/Config/Cache.php
- app/Config/Email.php
- app/Config/Filters.php
- app/Config/Kint.php
- app/Config/Modules.php
- app/Config/Publisher.php
- app/Config/Session.php
- app/Views/errors/cli/error\_exception.php
- app/Views/errors/html/error\_exception.php
- composer.json
- env
- spark
