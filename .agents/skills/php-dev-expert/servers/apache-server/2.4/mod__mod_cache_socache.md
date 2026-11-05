# mod_cache_socache - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_cache_socache.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_cache\_socache

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Shared object cache (socache) based storage module for the HTTP caching filter. |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | cache\_socache\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_cache\_socache.c |

### Summary

`mod_cache_socache` implements a shared object cache
(socache) based storage manager for `mod_cache`.

The headers and bodies of cached responses are combined, and stored
underneath a single key in the shared object cache. A
[number of implementations](socache.md) of shared object
caches are available to choose from.

Multiple content negotiated responses can be stored concurrently,
however the caching of partial content is not yet supported by this
module.

```
# Turn on caching
CacheSocache shmcb
CacheSocacheMaxSize 102400
<Location "/foo">
    CacheEnable socache
</Location>

# Fall back to the disk cache
CacheSocache shmcb
CacheSocacheMaxSize 102400
<Location "/foo">
    CacheEnable socache
    CacheEnable disk
</Location>
```

### Note:

`mod_cache_socache` requires the services of
`mod_cache`, which must be loaded before
`mod_cache_socache`.

### Directives

- ![](../images/down.gif) [CacheSocache](#cachesocache)
- ![](../images/down.gif) [CacheSocacheMaxSize](#cachesocachemaxsize)
- ![](../images/down.gif) [CacheSocacheMaxTime](#cachesocachemaxtime)
- ![](../images/down.gif) [CacheSocacheMinTime](#cachesocachemintime)
- ![](../images/down.gif) [CacheSocacheReadSize](#cachesocachereadsize)
- ![](../images/down.gif) [CacheSocacheReadTime](#cachesocachereadtime)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_cache_socache)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_cache_socache)

### See also

- `mod_cache`
- `mod_cache_disk`
- [Caching Guide](caching.md)

[![top](../images/up.gif)](#page-header)

## CacheSocache Directive [¶](#cachesocache "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The shared object cache implementation to use |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheSocache type[:args]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_socache |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.4.5 and later |

The `CacheSocache` directive defines the name of
the shared object cache implementation to use, followed by optional
arguments for that implementation. A [number of
implementations](socache.md) of shared object caches are available to choose
from.

```
CacheSocache shmcb
```

[![top](../images/up.gif)](#page-header)

## CacheSocacheMaxSize Directive [¶](#cachesocachemaxsize "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The maximum size (in bytes) of an entry to be placed in the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheSocacheMaxSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `CacheSocacheMaxSize 102400` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_socache |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.4.5 and later |

The `CacheSocacheMaxSize` directive sets the
maximum size, in bytes, for the combined headers and body of a document
to be considered for storage in the cache. The value must be at
least 1024 bytes. The larger the headers that
are stored alongside the body, the smaller the body may be.

The `mod_cache_socache` module will only attempt to
cache responses that have an explicit content length, or that are small
enough to be written in one pass. This is done to allow the
`mod_cache_disk` module to have an opportunity to cache
responses larger than those cacheable within
`mod_cache_socache`.

```
CacheSocacheMaxSize 102400
```

[![top](../images/up.gif)](#page-header)

## CacheSocacheMaxTime Directive [¶](#cachesocachemaxtime "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The maximum time (in seconds) for a document to be placed in the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheSocacheMaxTime seconds` |
| [Default:](mod__directive-dict.md#Default) | `CacheSocacheMaxTime 86400` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_socache |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.4.5 and later |

The `CacheSocacheMaxTime` directive sets the
maximum freshness lifetime, in seconds, for a document to be stored in
the cache. This value overrides the freshness lifetime defined for the
document by the HTTP protocol.

```
CacheSocacheMaxTime 86400
```

[![top](../images/up.gif)](#page-header)

## CacheSocacheMinTime Directive [¶](#cachesocachemintime "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The minimum time (in seconds) for a document to be placed in the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheSocacheMinTime seconds` |
| [Default:](mod__directive-dict.md#Default) | `CacheSocacheMinTime 600` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_socache |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.4.5 and later |

The `CacheSocacheMinTime` directive sets the
amount of seconds beyond the freshness lifetime of the response that the
response should be cached for in the shared object cache. If a response is
only stored for its freshness lifetime, there will be no opportunity to
revalidate the response to make it fresh again.

```
CacheSocacheMinTime 600
```

[![top](../images/up.gif)](#page-header)

## CacheSocacheReadSize Directive [¶](#cachesocachereadsize "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The minimum size (in bytes) of the document to read and be cached before sending the data downstream |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheSocacheReadSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `CacheSocacheReadSize 0` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_socache |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.4.5 and later |

The `CacheSocacheReadSize` directive sets the
minimum amount of data, in bytes, to be read from the backend before the
data is sent to the client. The default of zero causes all data read of
any size to be passed downstream to the client immediately as it arrives.
Setting this to a higher value causes the disk cache to buffer at least
this amount before sending the result to the client. This can improve
performance when caching content from a slow reverse proxy.

This directive only takes effect when the data is being saved to the
cache, as opposed to data being served from the cache.

```
CacheSocacheReadSize 102400
```

[![top](../images/up.gif)](#page-header)

## CacheSocacheReadTime Directive [¶](#cachesocachereadtime "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The minimum time (in milliseconds) that should elapse while reading before data is sent downstream |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheSocacheReadTime milliseconds` |
| [Default:](mod__directive-dict.md#Default) | `CacheSocacheReadTime 0` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache\_socache |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.4.5 and later |

The `CacheSocacheReadTime` directive sets the minimum amount
of elapsed time that should pass before making an attempt to send data
downstream to the client. During the time period, data will be buffered
before sending the result to the client. This can improve performance when
caching content from a reverse proxy.

The default of zero disables this option.

This directive only takes effect when the data is being saved to the
cache, as opposed to data being served from the cache. It is recommended
that this option be used alongside the
`CacheSocacheReadSize` directive
to ensure that the server does not buffer excessively should data arrive faster
than expected.

```
CacheSocacheReadTime 1000
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_cache_socache.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_cache_socache.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
