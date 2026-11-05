# TimeZoneDB with LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/cp/cpanel/php-timezonedb/

---

# TimeZoneDB[¶](#timezonedb "Permanent link")

This guide will address how and why we need to build TimeZoneDB for EasyApache 4.

## What is TimeZoneDB?[¶](#what-is-timezonedb "Permanent link")

TimeZoneDB.so is a PHP PECL extension that supplies a database of all timezones from [the Olson database](http://www.iana.org/time-zones) for all PHP date and time functions.

## The Issue[¶](#the-issue "Permanent link")

Recent patches to EasyApache 4 have removed a lot of standard PECL extensions and added them to their web utility to install. The issue with that is that it scans the whole system for PHP and builds it for each version it finds, even non-EA4 PHP. This causes high resource usage, which in most cases is a bad thing. This script that we provide will only build it for EA4 with predefined searches. This essentially cuts usage down and provides a more stable environment.

## Installation[¶](#installation "Permanent link")

### GUI[¶](#gui "Permanent link")

Installing TimeZoneDB.so for EasyApache 4 PHP is very easy.

Here are the steps:

1. Log into WHM and navigate to the LiteSpeed Web Server plugin. Click **Resolve**. [![!TimeZoneDB](../images/php-timezone01.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-timezone01.png)
2. The following screen will display. Click **OK**. [![!TimeZoneDB](../images/php-timezone02.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-timezone02.png)
3. The confirmation screen will show which PHP version it has installed TimeZoneDB for. Click **OK** when you are done. [![!TimeZoneDB](../images/php-timezone03.png)](https://docs.litespeedtech.com/lsws/cp/cpanel/images/php-timezone03.png)

That's it!

### Command Line[¶](#command-line "Permanent link")

Installing TimeZoneDB.so for EasyApache 4 PHP is very easy. We have created a script to automate the process for you!

Here are the steps:

1. Log into the server you wish to install TimeZoneDB.so on via SSH. Make sure you are logged in as root.
2. Get the script and prepare it.

   ```
   $ wget https://litespeedtech.com/packages/cpanel/buildtimezone.sh
   $ chmod a+x buildtimezone.sh
   ```
3. Run the script to install TimeZoneDB.so for all installed versions of EA4 PHP.

   ```
   $ sudo ./buildtimezone.sh
   ```

That's it!
