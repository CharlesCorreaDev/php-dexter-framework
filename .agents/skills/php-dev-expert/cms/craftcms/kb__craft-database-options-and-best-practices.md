# Craft Database Options and Best Practices | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/craft-database-options-and-best-practices

---

Search Knowledge Base

# Craft Database Options and Best Practices

## Choosing a Database Engine [#](#choosing-a-database-engine "Direct link to Choosing a Database Engine")

Whether it’s your first or fiftieth Craft project, choosing a database engine is important.

For each build, you should **pick an engine and stick with it**. Moving from MySQL to PostgreSQL (or vice-versa) can be painful and error-prone, and even finer differences between MySQL and MariaDB can cause issues.

We don’t have a standout database recommendation because it truly comes down to your requirements, tooling, and preferences. But here’s an overview of your options.

### MySQL [#](#mySQL "Direct link to MySQL")

MySQL is the most prevalent of the supported databases—so whether you’re looking for a host or a local database client for your OS, you’ll likely have an easier time with more options to choose from.

### MariaDB [#](#mariaDB "Direct link to MariaDB")

MariaDB is a fast option that’s similar to MySQL and was [originally considered a drop-in replacement](https://mariadb.com/kb/en/mariadb-vs-mysql-compatibility/). Avoid switching between MariaDB and MySQL in different environments.

![](https://craftcms.com/dist/images/icon-warning.svg)

Due to recent departures from the MySQL spec, we no longer recommend MariaDB for use with Craft—as of [DDEV 1.22](https://github.com/ddev/ddev/pull/4907), new projects are pre-configured with MySQL 8.0. MySQL and PostgreSQL will continue to be supported for the foreseeable future.

### PostgreSQL [#](#postgreSQL "Direct link to PostgreSQL")

PostgreSQL is the most versatile option, with the most granular control over schema changes, advanced storage options not found in MySQL, and more. This comes at the expense of being less prevalent—so you’ll need to make sure your web host and local tooling are PostgreSQL-friendly.

Some finer details in Craft and Craft plugins may require PostgreSQL-specific consideration and testing, so while it’s a fully-supported database engine you may occasionally bump into PostgreSQL-specific issues when interacting with the database, directly.

## Making and Restoring Backups [#](#making-and-restoring-backups "Direct link to Making and Restoring Backups")

There are lots of ways to back up a database, whether it’s from Craft’s (control panel utility or [console command](https://craftcms.com/docs/4.x/console-commands.html#db-backup)), a GUI app, or a tool provided by your web host. Not all backups are the same, however, so it’s important to develop good backup hygiene that avoids potential issues.

### Don’t hand edit. [#](#dont-hand-edit "Direct link to Don’t hand edit.")

Do not hand-edit a database dump. It seems like maybe you should because it’s just text. But more often than not, it’s going to cause problems.

### Keep it clean. [#](#keep-it-clean "Direct link to Keep it clean.")

We see a lot of support tickets that come from accidentally blending data. A clean, consistent process of backing up and restoring data will avoid all kinds of issues—some of which can lurk for a long time without notice.

When restoring a database, it’s best to completely delete and recreate the one you’re importing to, rather than only dropping tables and running the import. This rules out possible issues with lingering, dynamically-created tables and database schema objects—like sequences in PostgreSQL that control auto-incrementing values—that could lead to further issues during the restore process.

### Keep it consistent. [#](#keep-it-consistent "Direct link to Keep it consistent.")

Seemingly-trivial differences in backup commands, database engines, and settings can be problematic. It’s much easier to ensure consistency than it is to identify and fix issues that could arise.

#### Backup Commands

`pg_dump` and `mysqldump` are commonly-available CLI tools that have a lot of arguments. Craft relies directly on these, so it may be useful to know what it uses when it creates backups:

- [MySQL command](https://github.com/craftcms/cms/blob/develop/src/db/mysql/Schema.php#L151-L214)
- [PostgreSQL command](https://github.com/craftcms/cms/blob/develop/src/db/pgsql/Schema.php#L117-L143)

Craft’s defaults are carefully tailored to be useful in *most* cases since it’s a self-hosted web app.

#### Storage Engines

With MySQL, don’t create a backup using one storage engine (like InnoDB) and restore it somewhere that uses another one (like MyISAM). This is good to avoid generally, but in this specific case MyISAM doesn’t support foreign keys so they’ll be dropped on restore and likely result in issues running Craft.

#### Charsets and Collations

Charsets and collations matter, particularly with MySQL. If you create a backup on a server with a particular charset and collation, then try to restore on a server that doesn’t support it, that server’s default charset and collation will be used, which can lead to behavioral and performance issues.

#### Database Versions and Configurations

Database configurations matter. If you do a backup on MySQL 5.7.36 on server A and do a restore on MySQL 5.7.36 on server B and they have the same physical resources, but the server B install is having issues, chances are MySQL on server B has different `my.cnf` settings that are affecting things.

Database versions matter. If you do a backup on MySQL 5.6 with an InnoDB `searchindex` table and try to restore on a MySQL 5.5 install where InnoDB doesn’t support full-text searching, things will break.

Applies to
Craft CMS 3, Craft CMS 2, Craft Commerce 3, Craft Commerce 2, Craft Commerce 1, Craft Nitro 2, and Craft Nitro 1.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
