# Upgrading from 4.4.5 to 4.4.6 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_446.html

---

# Upgrading from 4.4.5 to 4.4.6[](#upgrading-from-4-4-5-to-4-4-6 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Time::createFromTimestamp() Timezone Change](#id2)[](#time-createfromtimestamp-timezone-change "Link to this heading")

When you do not specify a timezone, now
[Time::createFromTimestamp()](libraries__time.md#time-createfromtimestamp) returns a Time
instance with the app’s timezone is returned.

If you want to keep the timezone UTC, you need to call `setTimezone('UTC')`:

```
use CodeIgniter\I18n\Time;

$time = Time::createFromTimestamp(1501821586)->setTimezone('UTC');
```

## [Project Files](#id3)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [All Changes](#id4)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/App.php
- app/Config/Routing.php
- app/Views/welcome\_message.php
- composer.json
