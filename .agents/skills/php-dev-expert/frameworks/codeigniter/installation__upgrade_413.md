# Upgrading from 4.1.2 to 4.1.3 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_413.html

---

# Upgrading from 4.1.2 to 4.1.3[](#upgrading-from-4-1-2-to-4-1-3 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Enhancements](#id1)[](#breaking-enhancements "Link to this heading")

### [Cache TTL](#id2)[](#cache-ttl "Link to this heading")

There is a new value in **app/Config/Cache.php**: `$ttl`. This is not used by framework
handlers where 60 seconds is hard-coded, but may be useful to projects and modules.
In a future release this value will replace the hard-coded version, so either leave this as
`60` or stop relying on the hard-coded version.

## [Project Files](#id3)[](#project-files "Link to this heading")

Only a few files in the project space (root, app, public, writable) received updates. Due to
these files being outside of the system scope they will not be changed without your intervention.
The following files received changes and it is recommended that you merge the updated versions with your application:

- `app/Config/Cache.php`
- `spark`
