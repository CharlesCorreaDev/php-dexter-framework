# mod_dav_lock - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_dav_lock.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_dav\_lock

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Generic locking module for `mod_dav` |
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

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_dav_lock)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_dav_lock)

### See also

- `mod_dav`

[![top](../images/up.gif)](#page-header)

## DavGenericLockDB Directive [¶](#davgenericlockdb "Permanent link")

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

```
DavGenericLockDB var/DavLock
```

The directory containing the lock database file must be
writable by the `User`
and `Group` under which
Apache is running. For security reasons, you should create a
directory for this purpose rather than changing the permissions on
an existing directory. In the above example, Apache will create
files in the `var/` directory under the `ServerRoot` with the base filename
`DavLock` and an extension added by the server.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_dav_lock.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_dav_lock.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_dav_lock.html "Japanese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
