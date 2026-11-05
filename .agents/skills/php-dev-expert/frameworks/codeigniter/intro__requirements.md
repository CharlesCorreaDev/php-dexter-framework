# Server Requirements — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/intro/requirements.html

---

# Server Requirements[](#server-requirements "Link to this heading")

## [PHP and Required Extensions](#id1)[](#php-and-required-extensions "Link to this heading")

[PHP](https://www.php.net/) version 8.2 or newer is required, with the following PHP extensions are enabled:

> - [intl](https://www.php.net/manual/en/intl.requirements.php)
> - [mbstring](https://www.php.net/manual/en/mbstring.installation.php)

Warning

- The end of life date for PHP 7.4 was November 28, 2022.
- The end of life date for PHP 8.0 was November 26, 2023.
- The end of life date for PHP 8.1 was December 31, 2025.
- **If you are still using a PHP version below 8.2, you should upgrade immediately.**
- The end of life date for PHP 8.2 will be December 31, 2026.

Note

- PHP 8.5 requires CodeIgniter 4.7.0 or later.
- PHP 8.4 requires CodeIgniter 4.6.0 or later.
- PHP 8.3 requires CodeIgniter 4.4.4 or later.
- PHP 8.2 requires CodeIgniter 4.2.11 or later.
- PHP 8.1 requires CodeIgniter 4.1.6 or later.
- **Note that we only maintain the latest version.**

## [Optional PHP Extensions](#id2)[](#optional-php-extensions "Link to this heading")

The following PHP extensions should be enabled on your server:

> - [mysqlnd](https://www.php.net/manual/en/mysqlnd.install.php) (if you use MySQL)
> - [curl](https://www.php.net/manual/en/curl.requirements.php) (if you use [CURLRequest](libraries__curlrequest.md))
> - [imagick](https://www.php.net/manual/en/imagick.requirements.php) (if you use [Image](libraries__images.md) class ImageMagickHandler)
> - [gd](https://www.php.net/manual/en/image.requirements.php) (if you use [Image](libraries__images.md) class GDHandler)
> - [simplexml](https://www.php.net/manual/en/simplexml.requirements.php) (if you format XML)

The following PHP extensions are required when you use a Cache server:

> - [memcache](https://www.php.net/manual/en/memcache.requirements.php) (if you use [Cache](libraries__caching.md) class MemcachedHandler with Memcache)
> - [memcached](https://www.php.net/manual/en/memcached.requirements.php) (if you use [Cache](libraries__caching.md) class MemcachedHandler with Memcached)
> - [redis](https://github.com/phpredis/phpredis) (if you use [Cache](libraries__caching.md) class RedisHandler)

The following PHP extensions are required when you use PHPUnit:

> - [dom](https://www.php.net/manual/en/dom.requirements.php) (if you use [TestResponse](testing__response.md) class)
> - [libxml](https://www.php.net/manual/en/libxml.requirements.php) (if you use [TestResponse](testing__response.md) class)
> - [xdebug](https://xdebug.org/docs/install) (if you use `CIUnitTestCase::assertHeaderEmitted()`)

## [Supported Databases](#id3)[](#supported-databases "Link to this heading")

A database is required for most web application programming.
Currently supported databases are:

> - MySQL via the `MySQLi` driver (version 5.1 and above only)
> - PostgreSQL via the `Postgre` driver (version 7.4 and above only)
> - SQLite3 via the `SQLite3` driver
> - Microsoft SQL Server via the `SQLSRV` driver (version 2012 and above only)
> - Oracle Database via the `OCI8` driver (version 12.1 and above only)

Not all of the drivers have been converted/rewritten for CodeIgniter4.
The list below shows the outstanding ones.

> - MySQL (5.1+) via the *pdo* driver
> - Oracle via the *pdo* drivers
> - PostgreSQL via the *pdo* driver
> - MSSQL via the *pdo* driver
> - SQLite via the *sqlite* (version 2) and *pdo* drivers
> - CUBRID via the *cubrid* and *pdo* drivers
> - Interbase/Firebird via the *ibase* and *pdo* drivers
> - ODBC via the *odbc* and *pdo* drivers (you should know that ODBC is actually an abstraction layer)
