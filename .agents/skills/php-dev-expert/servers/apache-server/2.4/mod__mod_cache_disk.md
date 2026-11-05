# mod_cache_disk - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_cache_disk.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_cache\_disk

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Disk based storage module for the HTTP caching filter. |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | cache\_disk\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_cache\_disk.c |

### Summary

`mod_cache_disk` implements a disk based storage
manager for `mod_cache`.

The headers and bodies of cached responses are stored separately on
disk, in a directory structure derived from the md5 hash of the cached
URL.

Multiple content negotiated responses can be stored concurrently,
however the caching of partial content is not yet supported by this
module.

Atomic cache updates to both header and body files are achieved
without the need for locking by storing the device and inode numbers of
the body file within the header file. This has the side effect that
cache entries manually moved into the cache will be ignored.

The `htcacheclean` tool is provided to list cached
URLs, remove cached URLs, or to maintain the size of the disk cache
within size and/or inode limits. The tool can be run on demand, or
can be daemonized to offer continuous monitoring of directory sizes.

### Note:

`mod_cache_disk` requires the services of
`mod_cache`, which must be
loaded before mod\_cache\_disk.

### Note:

`mod_cache_disk` uses the sendfile feature to
serve files from the cache when supported by the platform, and
when enabled with `EnableSendfile`.
However, per-directory and .htaccess configuration of
`EnableSendfile` are ignored by
`mod_cache_disk` as the corresponding settings are not
available to the module when a request is being served from the
cache.

### Directives

- ![](../images/down.gif) [CacheDirLength](#cachedirlength)
- ![](../images/down.gif) [CacheDirLevels](#cachedirlevels)
- ![](../images/down.gif) [CacheMaxFileSize](#cachemaxfilesize)
- ![](../images/down.gif) [CacheMinFileSize](#cacheminfilesize)
- ![](../images/down.gif) [CacheReadSize](#cachereadsize)
- ![](../images/down.gif) [CacheReadTime](#cachereadtime)
- ![](../images/down.gif) [CacheRoot](#cacheroot)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_cache_disk)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_cache_disk)

### See also

- `mod_cache`
- `mod_cache_socache`
- [Caching Guide](caching.md)

[![top](../images/up.gif)](#page-header)

## CacheDirLength Directive [¶](#cachedirlength "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The number of characters in subdirectory names |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheDirLength length` |
| [Default:](mod__directive-dict.md#Default) | `CacheDirLength 2` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_disk |

The `CacheDirLength` directive sets the number
of characters for each subdirectory name in the cache hierarchy. It can
be used in conjunction with `CacheDirLevels` to
determine the approximate structure of your cache hierarchy.

A high value for `CacheDirLength` combined
with a low value for `CacheDirLevels` will result in
a relatively flat hierarchy, with a large number of subdirectories at each
level.

The result of `CacheDirLevels`\* `CacheDirLength`
must not be higher than 20.

[![top](../images/up.gif)](#page-header)

## CacheDirLevels Directive [¶](#cachedirlevels "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The number of levels of subdirectories in the cache. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheDirLevels levels` |
| [Default:](mod__directive-dict.md#Default) | `CacheDirLevels 2` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_disk |

The `CacheDirLevels` directive sets the number
of subdirectory levels in the cache. Cached data will be saved this
many directory levels below the `CacheRoot` directory.

A high value for `CacheDirLevels` combined
with a low value for `CacheDirLength` will result in
a relatively deep hierarchy, with a small number of subdirectories at each
level.

The result of `CacheDirLevels`\*
`CacheDirLength` must
not be higher than 20.

[![top](../images/up.gif)](#page-header)

## CacheMaxFileSize Directive [¶](#cachemaxfilesize "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The maximum size (in bytes) of a document to be placed in the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheMaxFileSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `CacheMaxFileSize 1000000` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_disk |

The `CacheMaxFileSize` directive sets the
maximum size, in bytes, for a document to be considered for storage in
the cache.

```
CacheMaxFileSize 64000
```

[![top](../images/up.gif)](#page-header)

## CacheMinFileSize Directive [¶](#cacheminfilesize "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The minimum size (in bytes) of a document to be placed in the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheMinFileSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `CacheMinFileSize 1` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_disk |

The `CacheMinFileSize` directive sets the
minimum size, in bytes, for a document to be considered for storage
in the cache.

```
CacheMinFileSize 64
```

[![top](../images/up.gif)](#page-header)

## CacheReadSize Directive [¶](#cachereadsize "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The minimum size (in bytes) of the document to read and be cached before sending the data downstream |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheReadSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `CacheReadSize 0` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_disk |

The `CacheReadSize` directive sets the
minimum amount of data, in bytes, to be read from the backend before the
data is sent to the client. The default of zero causes all data read of
any size to be passed downstream to the client immediately as it arrives.
Setting this to a higher value causes the disk cache to buffer at least
this amount before sending the result to the client. This can improve
performance when caching content from a reverse proxy.

This directive only takes effect when the data is being saved to the
cache, as opposed to data being served from the cache.

```
CacheReadSize 102400
```

[![top](../images/up.gif)](#page-header)

## CacheReadTime Directive [¶](#cachereadtime "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The minimum time (in milliseconds) that should elapse while reading before data is sent downstream |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheReadTime milliseconds` |
| [Default:](mod__directive-dict.md#Default) | `CacheReadTime 0` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_disk |

The `CacheReadTime` directive sets the minimum amount
of elapsed time that should pass before making an attempt to send data
downstream to the client. During the time period, data will be buffered
before sending the result to the client. This can improve performance when
caching content from a reverse proxy.

The default of zero disables this option.

This directive only takes effect when the data is being saved to the
cache, as opposed to data being served from the cache. It is recommended
that this option be used alongside the
`CacheReadSize` directive to
ensure that the server does not buffer excessively should data arrive faster
than expected.

```
CacheReadTime 1000
```

[![top](../images/up.gif)](#page-header)

## CacheRoot Directive [¶](#cacheroot "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The directory root under which cache files are stored |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheRoot directory` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_disk |

The `CacheRoot` directive defines the name of
the directory on the disk to contain cache files. If the `mod_cache_disk` module has been loaded or compiled in to the
Apache server, this directive *must* be defined. Failing to
provide a value for `CacheRoot` will result in
a configuration file processing error. The `CacheDirLevels` and `CacheDirLength` directives define
the structure of the directories under the specified root directory.

```
CacheRoot c:/cacheroot
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_cache_disk.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_cache_disk.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_cache_disk.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_cache_disk.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
