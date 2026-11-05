# Requirements | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/requirements

---

# Requirements

- ### On this Page

  - [Minimum System Specs](docs_5x__requirements.md#minimum-system-specs)
  - [Recommended System Specs](docs_5x__requirements.md#recommended-system-specs)
  - [Required PHP Extensions](docs_5x__requirements.md#required-php-extensions)
  - [Optional PHP Methods and Configurations](docs_5x__requirements.md#optional-php-methods-and-configurations)
  - [File Permissions](docs_5x__requirements.md#file-permissions)
  - [Required Database User Privileges](docs_5x__requirements.md#required-database-user-privileges)
  - [Control Panel Browser Requirements](docs_5x__requirements.md#control-panel-browser-requirements)

Craft is a PHP application that uses a relational database for content storage. It will run on most modern hosting environments, and can be configured to take advantage of all kinds of advanced infrastructure.

You can use the official [server check  (opens new window)](https://github.com/craftcms/server-check) script to quickly find out if your server meets Craft’s requirements.

## [#](#minimum-system-specs)Minimum System Specs

- PHP 8.2+
- MySQL 8.0.17+ using InnoDB, MariaDB 10.4.6+, or PostgreSQL 13+
- 256MB+ memory allocated to PHP
- 200MB+ free disk space
- Composer 2.0+

## [#](#recommended-system-specs)Recommended System Specs

- PHP 8.2+
- MySQL 8.0.36+ using InnoDB, or PostgreSQL 16+
- 512MB+ of memory allocated to PHP

Due to its diverging parity with MySQL, we no longer recommend MariaDB for sites with many users or a large volume of content.

## [#](#required-php-extensions)Required PHP Extensions

- [BCMath  (opens new window)](https://www.php.net/manual/en/book.bc.php)
- [ctype  (opens new window)](https://secure.php.net/manual/en/book.ctype.php)
- [cURL  (opens new window)](http://php.net/manual/en/book.curl.php)
- [GD  (opens new window)](http://php.net/manual/en/book.image.php)  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "GD became a requirement in 5.9.0 of Craft")
- [iconv  (opens new window)](http://php.net/manual/en/book.iconv.php)
- [Intl  (opens new window)](http://php.net/manual/en/book.intl.php)
- [JSON  (opens new window)](http://php.net/manual/en/book.json.php)
- [Multibyte String  (opens new window)](http://php.net/manual/en/book.mbstring.php)
- [OpenSSL  (opens new window)](http://php.net/manual/en/book.openssl.php)
- [PCRE  (opens new window)](http://php.net/manual/en/book.pcre.php)
- [PDO MySQL Driver  (opens new window)](http://php.net/manual/en/ref.pdo-mysql.php) or [PDO PostgreSQL Driver  (opens new window)](http://php.net/manual/en/ref.pdo-pgsql.php)
- [PDO  (opens new window)](http://php.net/manual/en/book.pdo.php)
- [Reflection  (opens new window)](http://php.net/manual/en/class.reflectionextension.php)
- [SPL  (opens new window)](http://php.net/manual/en/book.spl.php)
- [Zip  (opens new window)](http://php.net/manual/en/book.zip.php)
- [DOM  (opens new window)](http://php.net/manual/en/book.dom.php)

We recommend [ImageMagick  (opens new window)](http://php.net/manual/en/book.imagick.php) over GD for expanded [image handling options](docs_5x__development__image-transforms.md).

When multiple image drivers are available on your platform, Craft prefers ImageMagick.
You can explicitly select a driver with the [imageDriver](docs_5x__reference__config__general.md#imagedriver) setting.

## [#](#optional-php-methods-and-configurations)Optional PHP Methods and Configurations

Some shared hosting environments disable common PHP methods and configurations that affect Craft features.

- [allow\_url\_fopen  (opens new window)](http://php.net/manual/en/filesystem.configuration.php#ini.allow-url-fopen) — This `ini` setting must be enabled to support updating and installing plugins from the Plugin Store.
- [proc\_\*  (opens new window)](http://php.net/manual/en/ref.exec.php) — These methods are required in order to utilize the Plugin Store, install updates, and send emails.
- [ignore\_user\_abort  (opens new window)](https://www.php.net/manual/en/function.ignore-user-abort.php) — Required when using the default [web-based queue runner](docs_5x__system__queue.md#http) to operate.
- [pcntl\_\*  (opens new window)](https://www.php.net/manual/en/book.pcntl.php) — The *Process Control* extension allows [daemonized queue runners](docs_5x__system__queue.md#daemon) to gracefully exit between jobs.

## [#](#file-permissions)File Permissions

For Craft to run properly, PHP needs to be able to write to the following files and folders at all times:

- `storage/*`
- `config/license.key`
- `web/cpresources/*`

Additionally, during [setup  (opens new window)](https://craftcms.com/knowledge-base/first-time-setup) or when [updating](docs_5x__update.md) or installing [plugins](docs_5x__system__plugins.md) via the [control panel](docs_5x__system__control-panel.md) or [CLI](docs_5x__system__cli.md), Craft may touch these files:

- `.env`
- `config/project/*`
- `composer.json` and `composer.lock`
- `vendor/*`

The exact permissions depend on the relationship between the system user that PHP runs as and the owner of the folders and files:

- If they’re the same user, use `744` (`rwxr--r--`).
- If they’re in the same group, use `774` (`rwxrwxr--`).
- If neither of the above options describe your setup, something may have been misconfigured. Reach out to your system administrator for support.

Specifics may vary from platform to platform or host to host! Consult your development or hosting environment’s documentation for more information.

**Never** set permissions to `777` in a shared environment or on a live site, and **never** run your HTTP server (or PHP) as `root`.

## [#](#required-database-user-privileges)Required Database User Privileges

The database user you tell Craft to connect with must have the following privileges:

#### [#](#mysql-mariadb)MySQL/MariaDB

- `SELECT`
- `INSERT`
- `DELETE`
- `UPDATE`
- `CREATE`
- `ALTER`
- `INDEX`
- `DROP`
- `REFERENCES`
- `LOCK TABLES`

#### [#](#postgresql)PostgreSQL

- `SELECT`
- `INSERT`
- `UPDATE`
- `CREATE`
- `DELETE`
- `REFERENCES`
- `CONNECT`

[Database Connection Settings
→

Craft supports a wide array of connection settings for MySQL and Postgres databases.](docs_5x__reference__config__db.md)

## [#](#control-panel-browser-requirements)Control Panel Browser Requirements

Craft’s [control panel](docs_5x__system__control-panel.md) requires a browser that [supports JavaScript modules  (opens new window)](https://caniuse.com/#feat=es6-module-dynamic-import).

#### [#](#windows-and-macos)Windows and macOS

- Firefox 67+
- Chrome 63+
- Safari 11.1+
- Edge 79+

#### [#](#mobile)Mobile

- iOS: Safari 11+
- Android: Chrome 81+ or Firefox 68+

Craft’s *control panel* browser requirements are independent from those of your site’s front-end. Ultimately, Craft is only concerned with delivering [hypermedia  (opens new window)](https://en.wikipedia.org/wiki/Hypermedia)—how you choose to enhance that with JavaScript and CSS is entirely up to you!

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/requirements.md)
