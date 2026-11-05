# Populating MySQL and MariaDB Timezone Tables | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/populating-mysql-mariadb-timezone-tables

---

Search Knowledge Base

# Populating MySQL and MariaDB Timezone Tables

Craft Commerce calculates some statistics that rely on the database engine’s native timezone conversion for optimal performance. While this should work by default with any PostgreSQL database, some MariaDB and MySQL users may need to populate the engine’s timezone tables.

![](https://craftcms.com/dist/images/icon-tip.svg)

These tables are sometimes empty in remote test and production environments.

MySQL and MariaDB each make use of an identical set of tables. MySQL should create and populate them by default, and MariaDB creates the tables by default but does not populate them.

## Checking Your Timezone Tables [#](#checking-your-timezone-tables "Direct link to Checking Your Timezone Tables")

There are several ways to determine whether your timezone tables are populated.

### Checking with System Report [#](#checking-with-system-report "Direct link to Checking with System Report")

If you’re running Craft 3.6.16 or higher with MySQL or MariaDB, the System Report utility includes a check for MySQL timezone support that calls `craft\helpers\Db::supportsTimeZones()` behind the scenes:

![](https://craftcms.com/dist/images/icon-loading.png)

![MySQL Timezone Support Requirement]()

Navigate to **Utilities** → **System Report** and scroll to the **Requirements** section.

### Checking with a Test Query [#](#checking-with-a-test-query "Direct link to Checking with a Test Query")

You can also execute the SQL query Craft uses to test timezone conversion:

```
SELECT CONVERT_TZ('2007-03-11 02:00:00','America/Los_Angeles','America/New_York') AS time1
```

If the query returns a converted datetime value, your timezone tables have been populated. Otherwise, you’ll need to populate them yourself.

### Checking Table Contents [#](#checking-table-contents "Direct link to Checking Table Contents")

You can check whether your database has populated these tables by connecting to the database engine, opening the `mysql` database, and viewing the contents of the following tables:

- `time_zone`
- `time_zone_leap_second`
- `time_zone_name`
- `time_zone_transition`
- `time_zone_transition_type`

It’s easiest to look at `time_zone_name` and confirm whether there are rows with recognizable timezone names:

![](https://craftcms.com/dist/images/icon-loading.png)

![Populated time_zone_name Table]()

Populated time\_zone\_name table.

If each table is empty, you’ll need to populate all of them.

![](https://craftcms.com/dist/images/icon-tip.svg)

`time_zone_leap_second` may be empty even when other tables are populated.

## Populating the Timezone Tables [#](#populating-the-timezone-tables "Direct link to Populating the Timezone Tables")

Unix-like operating systems can use either database engine’s included utility for populating tables from OS-level data:

- MariaDB: <https://mariadb.com/kb/en/mysql_tzinfo_to_sql/>
- MySQL: <https://dev.mysql.com/doc/refman/8.0/en/time-zone-support.html#time-zone-installation>

If you’re using Windows, you’ll need to import pre-populated timezone tables you can download from MySQL’s documentation: <https://dev.mysql.com/downloads/timezones.html>

Applies to
Craft CMS 3 and Craft Commerce 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
