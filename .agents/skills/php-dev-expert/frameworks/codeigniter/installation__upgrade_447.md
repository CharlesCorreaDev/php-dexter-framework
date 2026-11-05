# Upgrading from 4.4.6 to 4.4.7 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_447.html

---

# Upgrading from 4.4.6 to 4.4.7[](#upgrading-from-4-4-6-to-4-4-7 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Mandatory File Changes](#id1)[](#mandatory-file-changes "Link to this heading")

### [URI Security](#id2)[](#uri-security "Link to this heading")

The feature to check if URIs do not contain not permitted strings has been added.
This check is equivalent to the URI Security found in CodeIgniter 3.

We recommend you enable this feature. Add the following to **app/Config/App.php**:

```
public string $permittedURIChars = 'a-z 0-9~%.:_\-';.
```

See [URI Security](general__urls.md#urls-uri-security) for details.

### [Error Files](#id3)[](#error-files "Link to this heading")

The error page has been updated. Please update the following files:

- app/Views/errors/html/debug.css
- app/Views/errors/html/error\_exception.php

## [Breaking Changes](#id4)[](#breaking-changes "Link to this heading")

### [Paths in Controller Filters](#id5)[](#paths-in-controller-filters "Link to this heading")

A bug where URI paths processed by [Controller Filters](incoming__filters.md) were not URL-decoded has been fixed.

Note

Note that [Router](incoming__routing.md) processes URL-decoded URI paths.

`Config\Filters` has some places to specify the URI paths. If the paths have
different values when URL-decoded, change them to the URL-decoded values.

E.g.,:

```
public array $globals = [
    'before' => [
        'csrf' => ['except' => '%E6%97%A5%E6%9C%AC%E8%AA%9E/*'],
    ],
    // ...
];
```

↓

```
public array $globals = [
    'before' => [
        'csrf' => ['except' => '日本語/*'],
    ],
    // ...
];
```

### [Time::difference() and DST](#id6)[](#time-difference-and-dst "Link to this heading")

In previous versions, when comparing dates with `Time::difference()`, unexpected
results were returned if the date included a day different from 24 hours due to
Daylight Saving Time (DST). See [Note in Times and Dates](libraries__time.md#time-viewing-differences)
for details.

This bug has been fixed, so date comparisons will now be shifted by one day in
such cases.

In the unlikely event that you wish to maintain the behavior of the previous
versions, change the time zone of both dates being compared to UTC before passing
them to `Time::difference()`.

## [Project Files](#id7)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Content Changes](#id8)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

#### Config[](#config "Link to this heading")

- app/Config/App.php
  :   - The property `$permittedURIChars` was added. See [URI Security](general__urls.md#urls-uri-security)
        for details.

### [All Changes](#id9)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/App.php
- app/Config/Cache.php
- app/Config/ContentSecurityPolicy.php
- app/Config/Database.php
- app/Config/Exceptions.php
- app/Config/Filters.php
- app/Config/Format.php
- app/Config/Logger.php
- app/Config/Mimes.php
- app/Config/Routing.php
- app/Config/Toolbar.php
- app/Config/Validation.php
- app/Config/View.php
- app/Controllers/BaseController.php
- app/Views/errors/html/debug.css
- app/Views/errors/html/error\_exception.php
- composer.json
