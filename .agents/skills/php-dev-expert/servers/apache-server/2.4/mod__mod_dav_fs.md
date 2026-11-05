# mod_dav_fs - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_dav_fs.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_dav\_fs

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Filesystem provider for `mod_dav` |
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

```
Dav filesystem
```

Since `filesystem` is the default provider for
`mod_dav`, you may simply use the value
`On` instead.

### Directives

- ![](../images/down.gif) [DavLockDB](#davlockdb)
- ![](../images/down.gif) [DavLockDiscovery](#davlockdiscovery)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_dav_fs)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_dav_fs)

### See also

- `mod_dav`

[![top](../images/up.gif)](#page-header)

## DavLockDB Directive [¶](#davlockdb "Permanent link")

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

```
DavLockDB "var/DavLock"
```

The directory containing the lock database file must be
writable by the `User`
and `Group` under which
Apache is running. For security reasons, you should create a
directory for this purpose rather than changing the permissions on
an existing directory. In the above example, Apache will create
files in the `var/` directory under the `ServerRoot` with the base filename
`DavLock` and extension name chosen by the server.

[![top](../images/up.gif)](#page-header)

## DavLockDiscovery Directive [¶](#davlockdiscovery "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable lock discovery |
| [Syntax:](mod__directive-dict.md#Syntax) | `DavLockDiscovery on|off` |
| [Default:](mod__directive-dict.md#Default) | `DavLockDiscovery on` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dav\_fs |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available from Apache 2.4.55 and later. |

`DavLockDiscovery` controls if the lock
discovery feature is enabled for `PROPFIND` method.
When disabled, `PROPFIND` always returns an empty
`lockdiscovery` section. This improves performance
if clients use `PROPFIND` a lot.

### Example

```
DavLockDiscovery off
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_dav_fs.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_dav_fs.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_dav_fs.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_dav_fs.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
