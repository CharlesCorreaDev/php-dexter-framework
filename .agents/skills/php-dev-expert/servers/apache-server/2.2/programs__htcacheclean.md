# htcacheclean - Clean up the disk cache - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/programs/htcacheclean.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Programs](programs.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/programs/htcacheclean.html) to go to the current version of this document.

# htcacheclean - Clean up the disk cache

`htcacheclean` is used to keep the size of
`mod_disk_cache`'s storage within a certain limit. This
tool can run either manually or in daemon mode. When running in
daemon mode, it sleeps in the background and checks the cache directories
at regular intervals for cached content to be removed. You can stop the daemon
cleanly by sending it a TERM or INT signal.

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)
- ![](../images/down.gif) [Exit Status](#exit)

### See also

- `mod_disk_cache`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Synopsis

`htcacheclean
[ -D ]
[ -v ]
[ -t ]
[ -r ]
[ -n ]
-ppath
-llimit`

`htcacheclean
[ -n ]
[ -t ]
[ -i ]
-dinterval
-ppath
-llimit`

[![top](../images/up.gif)](#page-header)

## Options

`-dinterval`
:   Daemonize and repeat cache cleaning every interval minutes.
    This option is mutually exclusive with the `-D`, `-v`
    and `-r` options. To shutdown the daemon cleanly, just send it
    a `SIGTERM` or `SIGINT`.

`-D`
:   Do a dry run and don't delete anything. This option is mutually
    exclusive with the `-d` option.

`-v`
:   Be verbose and print statistics. This option is mutually exclusive
    with the `-d` option.

`-r`
:   Clean thoroughly. This assumes that the Apache web server is
    not running (otherwise you may get garbage in the cache). This option
    is mutually exclusive with the `-d` option and implies
    the `-t` option.

`-n`
:   Be nice. This causes slower processing in favour of other
    processes. `htcacheclean` will sleep from time to time
    so that (a) the disk IO will be delayed and (b) the kernel can schedule
    other processes in the meantime.

`-t`
:   Delete all empty directories. By default only cache files are
    removed, however with some configurations the large number of
    directories created may require attention. If your configuration
    requires a very large number of directories, to the point that
    inode or file allocation table exhaustion may become an issue, use
    of this option is advised.

`-ppath`
:   Specify path as the root directory of the disk cache. This
    should be the same value as specified with the `CacheRoot` directive.

`-llimit`
:   Specify limit as the total disk cache size limit. The value
    is expressed in bytes by default (or attaching `B` to the
    number). Attach `K` for Kbytes or `M` for
    MBytes.

`-i`
:   Be intelligent and run only when there was a modification of the disk
    cache. This option is only possible together with the `-d`
    option.

[![top](../images/up.gif)](#page-header)

## Exit Status

`htcacheclean` returns a zero status ("true") if all
operations were successful, `1` otherwise.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/programs/htcacheclean.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/programs/htcacheclean.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/programs/htcacheclean.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
