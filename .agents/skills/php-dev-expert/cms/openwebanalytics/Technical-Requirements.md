# Technical Requirements · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Technical-Requirements

---

## Server Operating System

OWA should run fine under both UNIX and most Windows operating systems. However, more extensive testing has been done on UNIX operating systems.

## Web Server

**Apache HTTP Server 2.x** is supported. OWA can run under nginix, however you may need to convert the rules contained in OWA's `.htaccess` file into nginx location config rules.

## PHP

**PHP 8.2 or later** is required. OWA is tested against PHP 8.2, 8.3, and 8.4.

### Required PHP Extensions

A database driver — **either** of these, not both:

- `pdo_mysql`
- `mysqli`

The installer accepts whichever it finds, and reports which one it used. If your
PHP has only one of them, that is fine.

And these three, which the installer checks individually:

| Extension | Used for |
| --- | --- |
| `json` | Stored report definitions and API responses. |
| `mbstring` | Non-ASCII page titles, URLs and search terms. |
| `pcre` | Matching URLs, goal conditions and constraint values. |

The install wizard's first screen checks all of the above and names anything that
is missing, so you do not have to audit your PHP build by hand before starting.

## Databases

- **MySQL 5.7 or later** is supported. OWA should run fine under any MySQL compatible storage engine such as MariaDB or AWS Aurora.

OWA sets its own session `sql_mode` on connect, so the server's configured mode
does not need changing. It defaults to `STRICT_ALL_TABLES`: the database refuses
a value that does not fit rather than silently trimming it, because a silent trim
is data you never learn you lost.

Older versions ran with the mode emptied, which is permissive. If an upgraded
installation starts reporting rejected writes, you can restore that behaviour
while you deal with the underlying values:

```
define('OWA_DB_SQL_MODE', '');
```

See [Configuration](Configuration.md).

Fact tables are partitioned by date on MySQL. This needs no configuration and cannot be turned off, but a driver that cannot partition simply leaves the feature absent rather than failing. See [Partitioning Fact Tables](Partitioning-Fact-Tables.md).

## Scheduled Jobs

OWA needs **one cron entry** to run its periodic maintenance, and the ability to run PHP scripts from a command shell. Without it no scheduled job runs. See [Scheduled Jobs](Scheduled-Jobs.md).

## Web Browsers

**All modern web browsers** are supported. This includes Safari, Firefox, and Chrome.

## Development Requirements

The following requirements are only necessary if you plan to [checkout and install OWA from Github](Installing-from-Github.md).

### Composer

OWA uses Composer to manage package dependancies.

### npm / webpack

Node package manager (npm) and the webpack package (>5.0.0) is used to package OWA's JavaScript libraries.
