# mod_dav_fs - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_dav_fs.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_dav_fs.html) to go to the current version of this document.

# Apache Module mod\_dav\_fs

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | filesystem provider for `mod_dav` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | dav\_fs\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_dav\_fs.c |

### Summary

This module *requires* the service of `mod_dav`. It acts as a support module for `mod_dav` and provides access to resources located in the
server's file system. The formal name of this provider is
`filesystem`. `mod_dav` backend providers
will be invoked by using the `Dav`
directive:

### Example

`Dav filesystem`

Since `filesystem` is the default provider for
`mod_dav`, you may simply use the value
`On` instead.

### Directives

- ![](../images/down.gif) [DavLockDB](#davlockdb)

### See also

- `mod_dav`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## DavLockDB Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Location of the DAV lock database |
| [Syntax:](mod__directive-dict.md#Syntax) | `DavLockDB file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dav\_fs |

Use the `DavLockDB` directive to specify
the full path to the lock database, excluding an extension. If
the path is not absolute, it will be taken relative to `ServerRoot`. The implementation of
`mod_dav_fs` uses a SDBM database to track user
locks.

### Example

`DavLockDB var/DavLock`

The directory containing the lock database file must be
writable by the `User`
and `Group` under which
Apache is running. For security reasons, you should create a
directory for this purpose rather than changing the permissions on
an existing directory. In the above example, Apache will create
files in the `var/` directory under the `ServerRoot` with the base filename
`DavLock` and extension name chosen by the server.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_dav_fs.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_dav_fs.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_dav_fs.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
