# Requirements - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/requirements.html

---

## Requirements

##### Web Server

- Any web server. Fuel has been tested on Apache, IIS and Nginx.
- Works on all major operating systems including \*nix and Windows.

##### PHP Version

- Version 5.3.3 or greater is required. PHP 7 is fully supported.

##### PHP Extensions

Fuel uses functionality that PHP defines as "extensions". To avoid any possible compatibility issues, Fuel only uses extensions that
are part of the PHP code as documented on the [PHP website](http://php.net). If extensions are used that are part of the
PECL repository (which need to be installed manually by a system administrator), Fuel will use them if present, and work around it if not.

This is a list of extensions used, and the classes that use them:

| Extension | Used in | Comments |
| --- | --- | --- |
| fileinfo | Upload | [Documentation](http://php.net/manual/en/book.fileinfo.php).  Note that on Windows platforms, a manual installation of a DLL might be needed. |
| mbstring | n/a | [Documentation](http://php.net/manual/en/book.mbstring.php).  If not present, the framework has no multibyte support. You can check the MBSTRING constant to see if your installation has multibyte support enabled. |
| mcrypt | Crypt | [Documentation](http://php.net/manual/en/book.mcrypt.php).  If not present, PHPSecLib is used to emulate its functionality. |

##### PHPUnit

- [PHPUnit](http://phpunit.de/manual/current/en/index.html) version 3.7 or greater is required if you want to run unit tests.

### Recommended

- Web Server - Apache 2.4+, running on \*nix.
- mod\_rewrite - To remove the index.php from the URL.
