# logresolve - Resolve IP-addresses to hostnames in Apache 
   log files - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/programs/logresolve.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Programs](programs.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/programs/logresolve.html) to go to the current version of this document.

# logresolve - Resolve IP-addresses to hostnames in Apache log files

`logresolve` is a post-processing program to
resolve IP-addresses in Apache's access logfiles. To minimize
impact on your nameserver, logresolve has its very own internal
hash-table cache. This means that each IP number will only be
looked up the first time it is found in the log file.

Takes an Apache log file on standard input. The IP addresses
must be the first thing on each line and must be separated from
the remainder of the line by a space.

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Synopsis

`logresolve [ -s
filename ] [ -c ] <
access_log > access_log.new`

[![top](../images/up.gif)](#page-header)

## Options

`-s filename`
:   Specifies a filename to record statistics.

`-c`
:   This causes `logresolve` to apply some DNS checks:
    after finding the hostname from the IP address, it looks up the IP
    addresses for the hostname and checks that one of these matches the
    original address.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/programs/logresolve.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/programs/logresolve.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/programs/logresolve.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
