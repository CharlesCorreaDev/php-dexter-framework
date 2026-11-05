# mod_disk_cache - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_disk_cache.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_disk_cache.html) to go to the current version of this document.

# Apache Module mod\_disk\_cache

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Content cache storage manager keyed to URIs |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | disk\_cache\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_disk\_cache.c |

### Summary

`mod_disk_cache` implements a disk based storage
manager. It is primarily of use in conjunction with
`mod_cache`.

Content is stored in and retrieved from the cache using URI based
keys. Content with access protection is not cached.

`htcacheclean` can be used to maintain the cache
size at a maximum level.

### Note:

`mod_disk_cache` requires the services of
`mod_cache`.

### Note:

`mod_disk_cache` uses the sendfile feature to
serve files from the cache when supported by the platform, and
when enabled with `EnableSendfile`.
However, per-directory and .htaccess configuration of
`EnableSendfile` are ignored by
`mod_disk_cache` as the corresponding settings are not
available to the module when a request is being served from the
cache.

### Directives

- ![](../images/down.gif) [CacheDirLength](#cachedirlength)
- ![](../images/down.gif) [CacheDirLevels](#cachedirlevels)
- ![](../images/down.gif) [CacheMaxFileSize](#cachemaxfilesize)
- ![](../images/down.gif) [CacheMinFileSize](#cacheminfilesize)
- ![](../images/down.gif) [CacheRoot](#cacheroot)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## CacheDirLength Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The number of characters in subdirectory names |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheDirLength length` |
| [Default:](mod__directive-dict.md#Default) | `CacheDirLength 2` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_disk\_cache |

The `CacheDirLength` directive sets the number
of characters for each subdirectory name in the cache hierarchy.

The result of `CacheDirLevels`\* `CacheDirLength`
must not be higher than 20.

`CacheDirLength 4`

[![top](../images/up.gif)](#page-header)

## CacheDirLevels Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The number of levels of subdirectories in the cache. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheDirLevels levels` |
| [Default:](mod__directive-dict.md#Default) | `CacheDirLevels 3` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_disk\_cache |

The `CacheDirLevels` directive sets the number
of subdirectory levels in the cache. Cached data will be saved this
many directory levels below the `CacheRoot` directory.

The result of `CacheDirLevels`\*
`CacheDirLength` must
not be higher than 20.

`CacheDirLevels 5`

[![top](../images/up.gif)](#page-header)

## CacheMaxFileSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The maximum size (in bytes) of a document to be placed in the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheMaxFileSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `CacheMaxFileSize 1000000` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_disk\_cache |

The `CacheMaxFileSize` directive sets the
maximum size, in bytes, for a document to be considered for storage in
the cache.

`CacheMaxFileSize 64000`

[![top](../images/up.gif)](#page-header)

## CacheMinFileSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The minimum size (in bytes) of a document to be placed in the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheMinFileSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `CacheMinFileSize 1` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_disk\_cache |

The `CacheMinFileSize` directive sets the
minimum size, in bytes, for a document to be considered for storage
in the cache.

`CacheMinFileSize 64`

[![top](../images/up.gif)](#page-header)

## CacheRoot Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The directory root under which cache files are stored |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheRoot directory` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_disk\_cache |

The `CacheRoot` directive defines the name of
the directory on the disk to contain cache files. If the `mod_disk_cache` module has been loaded or compiled in to the
Apache server, this directive *must* be defined. Failing to
provide a value for `CacheRoot` will result in
a configuration file processing error. The `CacheDirLevels` and `CacheDirLength` directives define
the structure of the directories under the specified root directory.

`CacheRoot c:/cacheroot`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_disk_cache.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_disk_cache.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_disk_cache.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
