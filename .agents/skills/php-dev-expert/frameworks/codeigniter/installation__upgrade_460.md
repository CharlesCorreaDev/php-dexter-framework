# Upgrading from 4.5.8 to 4.6.0 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_460.html

---

# Upgrading from 4.5.8 to 4.6.0[](#upgrading-from-4-5-8-to-4-6-0 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Exception Changes](#id2)[](#exception-changes "Link to this heading")

Some classes have changed the exception classes that are thrown. Some exception
classes have changed parent classes.
See [ChangeLog](changelogs__v4.6.0.md#v460-behavior-changes-exceptions) for details.

If you have code that catches these exceptions, change the exception classes.

### [Time::createFromTimestamp() Timezone Change](#id3)[](#time-createfromtimestamp-timezone-change "Link to this heading")

When you do not explicitly pass a timezone, now
[Time::createFromTimestamp()](libraries__time.md#time-createfromtimestamp) returns a Time
instance with **UTC**. In v4.4.6 to prior to v4.6.0, a Time instance with the
currently set default timezone was returned.

This behavior change normalizes behavior with changes in PHP 8.4 which adds a
new `DateTimeInterface::createFromTimestamp()` method.

If you want to keep the default timezone, you need to pass the timezone as the
second parameter:

```
use CodeIgniter\I18n\Time;

$time = Time::createFromTimestamp(1501821586, date_default_timezone_get());
```

### [Time keeps Microseconds](#id4)[](#time-keeps-microseconds "Link to this heading")

In previous versions, [Time](libraries__time.md) lost microseconds in some
cases. But the bugs have been fixed.

The results of the `Time` comparison may differ due to these fixes:

```
use CodeIgniter\I18n\Time;

$time1 = new Time('2024-01-01 12:00:00.654321');
$time2 = new Time('2024-01-01 12:00:00');

$time1->equals($time2);
// Before: true
//  After: false
```

In a such case, you need to remove the microseconds:

```
use CodeIgniter\I18n\Time;

$time1 = new Time('2024-01-01 12:00:00.654321');
$time2 = new Time('2024-01-01 12:00:00');

// Removes the microseconds.
$time1 = Time::createFromFormat(
    'Y-m-d H:i:s',
    $time1->format('Y-m-d H:i:s'),
    $time1->getTimezone(),
);

$time1->equals($time2);
// Before: true
//  After: true
```

The following cases now keeps microseconds:

```
use CodeIgniter\I18n\Time;

$time = Time::createFromFormat('Y-m-d H:i:s.u', '2024-07-09 09:13:34.654321');
echo $time->format('Y-m-d H:i:s.u');
// Before: 2024-07-09 09:13:34.000000
//  After: 2024-07-09 09:13:34.654321
```

```
use CodeIgniter\I18n\Time;

$time = new Time('1 hour ago');
echo $time->format('Y-m-d H:i:s.u');
// Before: 2024-07-26 21:05:57.000000
//  After: 2024-07-26 21:05:57.857235
```

Note that `Time` with the current time has been holding microseconds since before.

```
use CodeIgniter\I18n\Time;

$time = Time::now();
echo $time->format('Y-m-d H:i:s.u');
// Before: 2024-07-26 21:39:32.249072
//  After: 2024-07-26 21:39:32.249072
```

Also, methods that returns an `int` still lose the microseconds.

```
use CodeIgniter\I18n\Time;

$time1 = new Time('2024-01-01 12:00:00');
echo $time1->getTimestamp(); // 1704110400

$time2 = new Time('2024-01-01 12:00:00.654321');
echo $time2->getTimestamp(); // 1704110400
```

### [Time::setTimestamp() Behavior Fix](#id5)[](#time-settimestamp-behavior-fix "Link to this heading")

In previous versions, if you call `Time::setTimestamp()` on a Time instance with
a timezone other than the default timezone might return a Time instance with the
wrong date/time.

This bug has been fixed, and it now behaves in the same way as `DateTimeImmutable`:

```
use CodeIgniter\I18n\Time;

// The Application Timezone is "UTC".

// Set $time1 timezone to "America/Chicago".
$time1 = Time::parse('2024-08-20', 'America/Chicago');

// The timestamp is "2024-08-20 00:00" in "UTC".
$stamp = strtotime('2024-08-20'); // 1724112000

// But $time2 timezone is "America/Chicago".
$time2 = $time1->setTimestamp($stamp);

echo $time2->format('Y-m-d H:i:s P');
// Before: 2024-08-20 00:00:00 -05:00
//  After: 2024-08-19 19:00:00 -05:00
```

Note that if you use the default timezone, the behavior is not changed:

```
use CodeIgniter\I18n\Time;

// The Application Timezone is "America/Chicago".

// $time1 timezone is "America/Chicago".
$time1 = Time::parse('2024-08-20');

// The timestamp is "2024-08-20 00:00" in "America/Chicago".
$stamp = strtotime('2024-08-20'); // 1724130000

// $time2 timezone is also "America/Chicago".
$time2 = $time1->setTimestamp($stamp);

echo $time2->format('Y-m-d H:i:s P');
// Before: 2024-08-20 00:00:00 -05:00
//  After: 2024-08-20 00:00:00 -05:00
```

### [Registrars with Dirty Hack](#id6)[](#registrars-with-dirty-hack "Link to this heading")

To prevent Auto-Discovery of [Registrars](general__configuration.md#registrars) from running twice, when a registrar
class is loaded or instantiated, if it instantiates a Config class (which extends
`CodeIgniter\Config\BaseConfig`), `ConfigException` will be raised.

This is because if Auto-Discovery of Registrars is performed twice, duplicate
values may be added to properties of Config classes.

All registrar classes (**Config/Registrar.php** in all namespaces) must be modified
so that they do not instantiate any Config class when loaded or instantiated.

If the packages/modules you are using provide such registrar classes, the registrar
classes in the packages/modules need to be fixed.

The following is an example of code that will no longer work:

```
<?php

namespace CodeIgniter\Shield\Config;

use Config\App;

class Registrar
{
    public function __construct()
    {
        $config = new App(); // Bad. When this class is instantiated, Config\App will be instantiated.

        // Does something.
    }

    public static function Pager(): array
    {
        return [
            'templates' => [
                'module_pager' => 'MyModule\Views\Pager',
            ],
        ];
    }

    public static function hack(): void
    {
        $config = config('Cache');

        // Does something.
    }
}

Registrar::hack(); // Bad. When this class is loaded, Config\Cache will be instantiated.
```

### [Session ID (SID) Change](#id7)[](#session-id-sid-change "Link to this heading")

Now [Session Library](libraries__sessions.md) forces to use the PHP default 32 character SIDs,
with 4 bits of entropy per character. This change is to match the behavior of
PHP 9.

In other words, the following settings are always used:

```
session.sid_bits_per_character = 4
session.sid_length = 32
```

In previous versions, the PHP ini settings was respected. So this change may
change your SID length.

If you cannot accept this change, customize the Session library.

### [Interface Changes](#id8)[](#interface-changes "Link to this heading")

Some interface changes have been made. Classes that implement them should update
their APIs to reflect the changes. See [ChangeLog](changelogs__v4.6.0.md#v460-interface-changes)
for details.

### [Method Signature Changes](#id9)[](#method-signature-changes "Link to this heading")

Some method signature changes have been made. Classes that extend them should
update their APIs to reflect the changes. See [ChangeLog](changelogs__v4.6.0.md#v460-method-signature-changes)
for details.

### [Removed Deprecated Items](#id10)[](#removed-deprecated-items "Link to this heading")

Some deprecated items have been removed. If you are still using these items, or
extending these classes, upgrade your code.
See [ChangeLog](changelogs__v4.6.0.md#v460-removed-deprecated-items) for details.

## [Breaking Enhancements](#id11)[](#breaking-enhancements "Link to this heading")

### [Filters Changes](#id12)[](#filters-changes "Link to this heading")

The `Filters` class has been changed to allow multiple runs of the same filter
with different arguments in before or after.

If you are extending `Filters`, you will need to modify it to conform to the
following changes:

- The structure of the array properties `$filters` and `$filtersClasses` have
  been changed.
- The properties `$arguments` and `$argumentsClass` are no longer used.
- `Filters` has been changed so that the same filter class is not instantiated
  multiple times. If a filter class is used both before and after, the same instance
  is used.

## [Project Files](#id13)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Content Changes](#id14)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

#### Config[](#config "Link to this heading")

- app/Config/Feature.php
  :   - `Config\Feature::$autoRoutesImproved` has been changed to `true`.
      - `Config\Feature::$strictLocaleNegotiation` has been added.
- app/Config/Routing.php
  :   - `Config\Routing::$translateUriToCamelCase` has been changed to `true`.
- app/Config/Kint.php
  :   - `Config\Kint::$richSort` has been removed. Kint in v6 no longer uses `AbstractRenderer::SORT_FULL`. Leaving this property in your code will cause a runtime error due to the undefined constant.

### [All Changes](#id15)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/Cache.php
- app/Config/Constants.php
- app/Config/Database.php
- app/Config/Feature.php
- app/Config/Format.php
- app/Config/Kint.php
- app/Config/Routing.php
- app/Config/Security.php
- app/Views/errors/html/debug.css
- app/Views/errors/html/error\_400.php
- preload.php
- public/index.php
- spark
