# logresolve - Resolve IP-addresses to hostnames in Apache
   log files - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/programs/logresolve.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Programs](programs.md)

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

[![top](../images/up.gif)](#page-header)

## Synopsis [¶](#synopsis "Permanent link")

`logresolve [ -s
filename ] [ -c ] <
access_log > access_log.new`

[![top](../images/up.gif)](#page-header)

## Options [¶](#options "Permanent link")

`-s filename`
:   Specifies a filename to record statistics.

`-c`
:   This causes `logresolve` to apply some DNS checks:
    after finding the hostname from the IP address, it looks up the IP
    addresses for the hostname and checks that one of these matches the
    original address.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/programs/logresolve.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/programs/logresolve.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/programs/logresolve.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/programs/logresolve.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
