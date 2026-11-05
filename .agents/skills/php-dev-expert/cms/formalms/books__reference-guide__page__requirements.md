# Requirements | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/reference-guide/page/requirements

---

# Requirements

## Server Specifications

- Server type: Linux, Windows, MacOs, Unix, Sun
- Apache 2.2.x or above (on Windows also IIS can be used)
- PHP version:
  - Forma 2.x: PHP 5.4.x  to 7.0.x
  - Forma 3.x:  PHP 7.4.x
  - Forma 4.0 to 4.1.18: PHP 7.4 to 8.1
  - Forma 4.1.30 or higher: PHP 7.4 to 8.2
  - Forma 4.2.x: PHP 8.2

- PHP settings:
  - Fileinfo support : ON
  - Openssl support: on
  - Multibyte Support: ON
  - mime\_content\_type() support: ON
  - magic\_quotes\_gpc : OFF
  - register\_global : OFF
  - allow\_url\_fopen : ON
  - allow\_url\_include : OFF
  - upload\_max\_filsize : 8M or higher
  - post\_max\_size : 8M or higher
  - max\_execution\_time : 30s or higher
  - memory\_limit = 256M or higher (advised 512 MB fore large files management)

## Database

- Forma 1.x - 2.x: Mysql 5.0 or higher, mariadb 5.5 or higher.
- Forma 3.x : MySql 5.6 or higher, MariaDB 10.0, 10.1
- Forma 4.x: min versions MySql 5.7, MariaDB 10.3. Currently tested until MySql 8.4 or MariaDB 11.x  
  Note: db server engine must have transaction support (innodb recommended)
- Database Driver: MySQLi
- Sql encoding: utf8

**WARNING - MySQL Strict Mode**  
Until version 2.4.2 Forma LMS requires MySql **strict mode set to OFF**.  
Please make sure your hosting provider allows this configuration  
This restriction has been removed since version 2.4.3

### 

**WARNING - MySQL 5.7 Settings**  
Using MySQL version 5.7 requires some specific configuration. Check [this thread](https://forum.formalms.org/12/13146.html?p=19982#p19984) for details

Entrar em modo de seleção de seção
