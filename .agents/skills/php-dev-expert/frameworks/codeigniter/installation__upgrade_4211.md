# Upgrading from 4.2.10 to 4.2.11 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_4211.html

---

# Upgrading from 4.2.10 to 4.2.11[](#upgrading-from-4-2-10-to-4-2-11 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Breaking Changes](#id1)[](#breaking-changes "Link to this heading")

### [Config\App::$proxyIPs](#id2)[](#config-app-proxyips "Link to this heading")

The config value format has been changed. Now you must set your proxy IP address and the HTTP header name for the client IP address pair as an array:

```
public $proxyIPs = [
        '10.0.1.200'     => 'X-Forwarded-For',
        '192.168.5.0/24' => 'X-Forwarded-For',
];
```

`ConfigException` will be thrown for old format config value.

### [Session Handler Key Changes](#id3)[](#session-handler-key-changes "Link to this heading")

The key of the session data record for [DatabaseHandler Driver](libraries__sessions.md#sessions-databasehandler-driver),
[MemcachedHandler Driver](libraries__sessions.md#sessions-memcachedhandler-driver) and [RedisHandler Driver](libraries__sessions.md#sessions-redishandler-driver)
has changed. Therefore, any existing session data will be invalidated after
the upgrade if you are using these session handlers.

- When using `DatabaseHandler`, the `id` column value in the session table
  now contains the session cookie name (`Config\App::$sessionCookieName`).
- When using `MemcachedHandler` or `RedisHandler`, the key value contains
  the session cookie name (`Config\App::$sessionCookieName`).

There is maximum length for the `id` column and Memcached key (250 bytes).
If the following values exceed those maximum length, the session will not work properly.

- the session cookie name, delimiter, and session id (32 characters by default)
  when using `DatabaseHandler`
- the prefix (`ci_session`), session cookie name, delimiters, and session id
  when using `MemcachedHandler`

## [Project Files](#id4)[](#project-files "Link to this heading")

Version 4.2.11 did not alter any executable code in project files.

### [All Changes](#id5)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/App.php
- app/Config/Autoload.php
- app/Config/Logger.php
- app/Config/Toolbar.php
- app/Views/welcome\_message.php
- composer.json
- phpunit.xml.dist
