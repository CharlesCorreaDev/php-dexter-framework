# mod_dav_lock - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_dav_lock.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_dav_lock.html) to go to the current version of this document.

# Apache Module mod\_dav\_lock

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | generic locking module for `mod_dav` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | dav\_lock\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_dav\_lock.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.1 and later |

### Summary

This module implements a generic locking API which can be used by any
backend provider of `mod_dav`. It *requires* at least
the service of `mod_dav`. But without a backend provider
which makes use of it, it's useless and should not be loaded into the
server. A sample backend module which actually utilizes
`mod_dav_lock` is [mod\_dav\_svn](http://subversion.apache.org/), the subversion provider module.

Note that `mod_dav_fs` does *not* need this
generic locking module, because it uses its own more specialized
version.

In order to make `mod_dav_lock` functional, you just have
to specify the location of the lock database using the `DavGenericLockDB` directive described
below.

### Developer's Note

In order to retrieve the pointer to the locking provider function, you
have to use the `ap_lookup_provider` API with the arguments
`dav-lock`, `generic`, and `0`.

### Directives

- ![](../images/down.gif) [DavGenericLockDB](#davgenericlockdb)

### See also

- `mod_dav`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## DavGenericLockDB Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Location of the DAV lock database |
| [Syntax:](mod__directive-dict.md#Syntax) | `DavGenericLockDB file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dav\_lock |

Use the `DavGenericLockDB` directive to specify
the full path to the lock database, excluding an extension. If
the path is not absolute, it will be interpreted relative to `ServerRoot`. The implementation of
`mod_dav_lock` uses a SDBM database to track user
locks.

### Example

`DavGenericLockDB var/DavLock`

The directory containing the lock database file must be
writable by the `User`
and `Group` under which
Apache is running. For security reasons, you should create a
directory for this purpose rather than changing the permissions on
an existing directory. In the above example, Apache will create
files in the `var/` directory under the `ServerRoot` with the base filename
`DavLock` and an extension added by the server.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_dav_lock.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_dav_lock.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
