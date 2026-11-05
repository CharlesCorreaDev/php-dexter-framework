# rotatelogs - Piped logging program to rotate Apache logs - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/programs/rotatelogs.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Programs](programs.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/programs/rotatelogs.html) to go to the current version of this document.

# rotatelogs - Piped logging program to rotate Apache logs

`rotatelogs` is a simple program for use in
conjunction with Apache's piped logfile feature. It supports
rotation based on a time interval or maximum size of the log.

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)
- ![](../images/down.gif) [Examples](#examples)
- ![](../images/down.gif) [Portability](#portability)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Synopsis

`rotatelogs
[ -l ]
[ -f ]
logfile
rotationtime|filesizeM
[ offset ]`

[![top](../images/up.gif)](#page-header)

## Options

`-l`
:   Causes the use of local time rather than GMT as the base for the
    interval or for `strftime(3)` formatting with size-based
    rotation. Note that using `-l` in an environment which
    changes the GMT offset (such as for BST or DST) can lead to unpredictable
    results!

`-f`
:   Causes the logfile to be opened immediately, as soon as
    `rotatelogs` starts, instead of waiting for the
    first logfile entry to be read (for non-busy sites, there may be
    a substantial delay between when the server is started
    and when the first request is handled, meaning that the
    associated logfile does not "exist" until then, which
    causes problems from some automated logging tools).
    *Available in version 2.2.9 and later.*

`logfile`
:   The path plus basename of the logfile. If logfile
    includes any '%' characters, it is treated as a format string for
    `strftime(3)`. Otherwise, the suffix
    .nnnnnnnnnn is automatically added and is the time in
    seconds. Both formats compute the start time from the beginning of
    the current period. For example, if a rotation time of 86400 is
    specified, the hour, minute, and second fields created from the
    `strftime(3)` format will all be zero, referring to the
    beginning of the current 24-hour period (midnight).

    When using `strftime(3)` filename formatting,
    be sure the log file format has enough granularity to produce
    a different file name each time the logs are rotated. Otherwise
    rotation will overwrite the same file instead of starting a new
    one. For example, if logfile was
    `/var/logs/errorlog.%Y-%m-%d` with log rotation at 5
    megabytes, but 5 megabytes was reached twice in the same day, the
    same log file name would be produced and log rotation would keep
    writing to the same file.

`rotationtime`
:   The time between log file rotations in seconds. The rotation
    occurs at the beginning of this interval. For example, if the
    rotation time is 3600, the log file will be rotated at the beginning
    of every hour; if the rotation time is 86400, the log file will be
    rotated every night at midnight. (If no data is logged during an
    interval, no file will be created.)

`filesizeM`
:   The maximum file size in megabytes followed by the letter
    `M` to specify size rather than time.

`offset`
:   The number of minutes offset from UTC. If omitted, zero is
    assumed and UTC is used. For example, to use local time in the zone
    UTC -5 hours, specify a value of `-300` for this argument.
    In most cases, `-l` should be used instead of specifying
    an offset.

[![top](../images/up.gif)](#page-header)

## Examples

`CustomLog "|bin/rotatelogs /var/logs/logfile 86400" common`

This creates the files /var/logs/logfile.nnnn where nnnn is
the system time at which the log nominally starts (this time
will always be a multiple of the rotation time, so you can
synchronize cron scripts with it). At the end of each rotation
time (here after 24 hours) a new log is started.

`CustomLog "|bin/rotatelogs -l /var/logs/logfile.%Y.%m.%d 86400" common`

This creates the files /var/logs/logfile.yyyy.mm.dd where
yyyy is the year, mm is the month, and dd is the day of the month.
Logging will switch to a new file every day at midnight, local time.

`CustomLog "|bin/rotatelogs /var/logs/logfile 5M" common`

This configuration will rotate the logfile whenever it reaches
a size of 5 megabytes.

`ErrorLog "|bin/rotatelogs /var/logs/errorlog.%Y-%m-%d-%H_%M_%S 5M"`

This configuration will rotate the error logfile whenever it
reaches a size of 5 megabytes, and the suffix to the logfile name
will be created of the form
`errorlog.YYYY-mm-dd-HH_MM_SS`.

[![top](../images/up.gif)](#page-header)

## Portability

The following logfile format string substitutions should be
supported by all `strftime(3)` implementations, see
the `strftime(3)` man page for library-specific
extensions.

|  |  |
| --- | --- |
| `%A` | full weekday name (localized) |
| `%a` | 3-character weekday name (localized) |
| `%B` | full month name (localized) |
| `%b` | 3-character month name (localized) |
| `%c` | date and time (localized) |
| `%d` | 2-digit day of month |
| `%H` | 2-digit hour (24 hour clock) |
| `%I` | 2-digit hour (12 hour clock) |
| `%j` | 3-digit day of year |
| `%M` | 2-digit minute |
| `%m` | 2-digit month |
| `%p` | am/pm of 12 hour clock (localized) |
| `%S` | 2-digit second |
| `%U` | 2-digit week of year (Sunday first day of week) |
| `%W` | 2-digit week of year (Monday first day of week) |
| `%w` | 1-digit weekday (Sunday first day of week) |
| `%X` | time (localized) |
| `%x` | date (localized) |
| `%Y` | 4-digit year |
| `%y` | 2-digit year |
| `%Z` | time zone name |
| `%%` | literal `%' |

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/programs/rotatelogs.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/programs/rotatelogs.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/programs/rotatelogs.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
