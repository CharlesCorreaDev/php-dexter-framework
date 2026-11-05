# /pt-br/latest/_sources/vendors.rst.txt

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/_sources/vendors.rst.txt

---

Distributing and packaging phpMyAdmin
=====================================
This document is intended to give pieces of advice to people who want to
redistribute phpMyAdmin inside other software packages such as Linux
distribution or some all in one package including web server and MySQL
server.
Generally, you can customize some basic aspects (paths to some files and
behavior) in :file:`libraries/vendor\_config.php`.
For example, if you want setup script to generate a config file in var, change
``SETUP\_CONFIG\_FILE`` to :file:`/var/lib/phpmyadmin/config.inc.php` and you
will also probably want to skip directory writable check, so set
``SETUP\_DIR\_WRITABLE`` to false.
External libraries
------------------
phpMyAdmin includes several external libraries, you might want to
replace them with system ones if they are available, but please note
that you should test whether the version you provide is compatible with the
one we ship.
Currently known list of external libraries:
js/vendor
jQuery js framework libraries and various js libraries.
vendor/
The download kit includes various Composer packages as
dependencies.
Specific files LICENSES
-----------------------
phpMyAdmin distributed themes contain some content that is under licenses.
- The icons of the `Original` and `pmahomme` themes are from the `Silk Icons `\_.
- Some icons of the `Metro` theme are from the `Silk Icons `\_.
- `themes/\*/img/b\_rename.svg` Is a `Icons8 `\_, icon from the `Android L Icon Pack Collection `\_. The icon `rename `\_.
- `themes/metro/img/user.svg` Is a IcoMoon the `user `\_
CC BY 4.0 or GPL
Licenses for vendors
--------------------
- Silk Icons are under the `CC BY 2.5 or CC BY 3.0 `\_ licenses.
- `rename` from `Icons8` is under the `"public domain" `\_ (CC0 1.0) license.
- IcoMoon Free is under `"CC BY 4.0 or GPL" `\_.
