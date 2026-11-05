# Multi-Processing Modules (MPMs) - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mpm.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mpm.html) to go to the current version of this document.

# Multi-Processing Modules (MPMs)

This document describes what a Multi-Processing Module is and
how they are used by the Apache HTTP Server.

- ![](./images/down.gif) [Introduction](#introduction)
- ![](./images/down.gif) [Choosing an MPM](#choosing)
- ![](./images/down.gif) [MPM Defaults](#defaults)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## Introduction

The Apache HTTP Server is designed to be a powerful and
flexible web server that can work on a very wide variety of
platforms in a range of different environments. Different
platforms and different environments often require different
features, or may have different ways of implementing the same
feature most efficiently. Apache has always accommodated a wide
variety of environments through its modular design. This design
allows the webmaster to choose which features will be included
in the server by selecting which modules to load either at
compile-time or at run-time.

Apache 2.0 extends this modular design to the most basic
functions of a web server. The server ships with a selection of
Multi-Processing Modules (MPMs) which are responsible for
binding to network ports on the machine, accepting requests,
and dispatching children to handle the requests.

Extending the modular design to this level of the server
allows two important benefits:

- Apache can more cleanly and efficiently support a wide
  variety of operating systems. In particular, the Windows
  version of Apache is now much more efficient, since
  `mpm_winnt` can use native
  networking features in place of the POSIX layer used in
  Apache 1.3. This benefit also extends to other operating
  systems that implement specialized MPMs.
- The server can be better customized for the needs of the
  particular site. For example, sites that need a great deal of
  scalability can choose to use a threaded MPM like
  `worker` or `event`, while sites requiring
  stability or compatibility with older software can use a
  `prefork`.

At the user level, MPMs appear much like other Apache
modules. The main difference is that one and only one MPM must
be loaded into the server at any time. The list of available
MPMs appears on the [module index page](mod.md).

[![top](./images/up.gif)](#page-header)

## Choosing an MPM

MPMs must be chosen during configuration, and compiled into
the server. Compilers are capable of optimizing a lot of
functions if threads are used, but only if they know that
threads are being used.

To actually choose the desired MPM, use the argument
`--with-mpm=NAME` with the
`configure` script. *NAME* is the name of the
desired MPM.

Once the server has been compiled, it is possible to
determine which MPM was chosen by using `./httpd
-l`. This command will list every module that is compiled
into the server, including the MPM.

[![top](./images/up.gif)](#page-header)

## MPM Defaults

The following table lists the default MPMs for various operating
systems. This will be the MPM selected if you do not make another
choice at compile-time.

|  |  |
| --- | --- |
| BeOS | `beos` |
| Netware | `mpm_netware` |
| OS/2 | `mpmt_os2` |
| Unix | `prefork` |
| Windows | `mpm_winnt` |

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/mpm.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/mpm.html "English") |
[es](https://httpd.apache.org/docs/2.2/pt-br/es/mpm.html "Español") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/mpm.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mpm.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mpm.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mpm.html "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.2/pt-br/zh-cn/mpm.html "Simplified Chinese")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
