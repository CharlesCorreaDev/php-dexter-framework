# Upgrading from 4.6.x to 4.7.0 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_470.html

---

# Upgrading from 4.6.x to 4.7.0[](#upgrading-from-4-6-x-to-4-7-0 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [PHP 8.2 Required](#id2)[](#php-8-2-required "Link to this heading")

The minimum PHP requirement has been updated to **PHP 8.2**.

If your current runtime is older than PHP 8.2, upgrade PHP first before
upgrading CodeIgniter.

### [Validation `regex_match` Placeholders](#id3)[](#validation-regex-match-placeholders "Link to this heading")

Placeholders in the `regex_match` validation rule must now use double curly
braces.

If you previously used single braces like
`regex_match[/^{placeholder}$/]`, update it to:
`regex_match[/^{{placeholder}}$/]`.

This avoids ambiguity with regex quantifiers such as `{1,3}`.

### [Model Primary Key Validation Timing and Exceptions](#id4)[](#model-primary-key-validation-timing-and-exceptions "Link to this heading")

The `insertBatch()` and `updateBatch()` methods now honor model settings
like `updateOnlyChanged` and `allowEmptyInserts`. This change ensures
consistent handling across all insert/update operations.

Primary key values are now validated before database queries in
`insert()`/`insertBatch()` (without auto-increment), `update()`, and
`delete()`.

Invalid primary key values now throw `InvalidArgumentException` instead of
database-layer `DatabaseException`.

If your code catches `DatabaseException` for invalid primary keys, update it
to handle `InvalidArgumentException` as well.

### [Entity Change Detection Is Now Deep](#id5)[](#entity-change-detection-is-now-deep "Link to this heading")

`Entity::hasChanged()` and `Entity::syncOriginal()` now perform deep
comparison for arrays and objects.

If you relied on the previous shallow (reference-based) behavior, review your
entity update flows and tests because nested changes are now detected.

Also, `Entity::toRawArray()` now recursively converts arrays of entities when
`$recursive` is `true`.

### [Encryption Handler Key State](#id6)[](#encryption-handler-key-state "Link to this heading")

`OpenSSLHandler` and `SodiumHandler` no longer mutate the handler’s internal
key when a key is passed via `$params` to `encrypt()`/`decrypt()`.

If your code depended on passing a key once and reusing it implicitly later,
move to explicit key configuration in `Config\\Encryption` (or pass a custom
config when creating the encrypter service).

### [Interface Changes](#id7)[](#interface-changes "Link to this heading")

Some interface changes have been made. Classes that implement framework
interfaces should update their APIs to reflect these changes.

See [ChangeLog](changelogs__v4.7.0.md#v470-interface-changes) for details.

### [Method Signature Changes](#id8)[](#method-signature-changes "Link to this heading")

Some method signature changes have been made. Classes that extend framework
classes should update their method signatures to keep LSP compatibility.

See [ChangeLog](changelogs__v4.7.0.md#v470-method-signature-changes) for details.

### [Property Signature Changes](#id9)[](#property-signature-changes "Link to this heading")

Some property type signatures have changed (for example nullable
`Entity::$dataCaster`). If you extend these classes, update your code
accordingly.

See [ChangeLog](changelogs__v4.7.0.md#v470-property-signature-changes) for details.

### [Removed Deprecated Items](#id10)[](#removed-deprecated-items "Link to this heading")

Some deprecated items have been removed. If your app still uses or extends
these APIs, update your code before upgrading.

See [ChangeLog](changelogs__v4.7.0.md#v470-removed-deprecated-items) for details.

## [Project Files](#id11)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

Note

There are some third-party CodeIgniter modules available to assist
with merging changes to the project space:
[Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Content Changes](#id12)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

#### Config[](#config "Link to this heading")

- app/Config/Migrations.php
  :   - `Config\Migrations::$lock` has been added, with a default value set to `false`.

These files are new in this release:

- app/Config/Hostnames.php
- app/Config/WorkerMode.php

### [All Changes](#id13)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/CURLRequest.php
- app/Config/Cache.php
- app/Config/ContentSecurityPolicy.php
- app/Config/Email.php
- app/Config/Encryption.php
- app/Config/Format.php
- app/Config/Hostnames.php
- app/Config/Images.php
- app/Config/Migrations.php
- app/Config/Optimize.php
- app/Config/Paths.php
- app/Config/Routing.php
- app/Config/Session.php
- app/Config/Toolbar.php
- app/Config/UserAgents.php
- app/Config/View.php
- app/Config/WorkerMode.php
- public/index.php
- spark
