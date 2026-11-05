# mod_cache - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_cache.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_cache.html) to go to the current version of this document.

# Apache Module mod\_cache

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Content cache keyed to URIs. |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | cache\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_cache.c |

### Summary

This module should be used with care and
can be used to circumvent `Allow` and `Deny` directives. You
should not enable caching for any content to which you wish
to limit access by client host name, address or environment
variable.

`mod_cache` implements an [RFC 2616](http://www.ietf.org/rfc/rfc2616.txt) compliant HTTP
content cache that can be used to cache either local or proxied content.
`mod_cache` requires the services of one or more storage
management modules. Two storage management modules are included in
the base Apache distribution:

`mod_disk_cache`
:   implements a disk based storage manager.

`mod_mem_cache`
:   implements a memory based storage manager.
    `mod_mem_cache` can be configured to operate in two
    modes: caching open file descriptors or caching objects in heap storage.
    `mod_mem_cache` can be used to cache locally generated content
    or to cache backend server content for `mod_proxy` when
    configured using `ProxyPass`
    (aka reverse proxy)

Content is stored in and retrieved from the cache using URI based keys. Content with
access protection is not cached.

Further details, discussion, and examples, are provided in the
[Caching Guide](caching.md).

### Topics

- ![](../images/down.gif) [Related Modules and Directives](#related)
- ![](../images/down.gif) [Sample Configuration](#sampleconf)
- ![](../images/down.gif) [Avoiding the Thundering Herd](#thunderingherd)

### Directives

- ![](../images/down.gif) [CacheDefaultExpire](#cachedefaultexpire)
- ![](../images/down.gif) [CacheDisable](#cachedisable)
- ![](../images/down.gif) [CacheEnable](#cacheenable)
- ![](../images/down.gif) [CacheIgnoreCacheControl](#cacheignorecachecontrol)
- ![](../images/down.gif) [CacheIgnoreHeaders](#cacheignoreheaders)
- ![](../images/down.gif) [CacheIgnoreNoLastMod](#cacheignorenolastmod)
- ![](../images/down.gif) [CacheIgnoreQueryString](#cacheignorequerystring)
- ![](../images/down.gif) [CacheIgnoreURLSessionIdentifiers](#cacheignoreurlsessionidentifiers)
- ![](../images/down.gif) [CacheLastModifiedFactor](#cachelastmodifiedfactor)
- ![](../images/down.gif) [CacheLock](#cachelock)
- ![](../images/down.gif) [CacheLockMaxAge](#cachelockmaxage)
- ![](../images/down.gif) [CacheLockPath](#cachelockpath)
- ![](../images/down.gif) [CacheMaxExpire](#cachemaxexpire)
- ![](../images/down.gif) [CacheStoreNoStore](#cachestorenostore)
- ![](../images/down.gif) [CacheStorePrivate](#cachestoreprivate)

### See also

- [Caching Guide](caching.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Related Modules and Directives

| Related Modules | Related Directives |
| --- | --- |
| - `mod_disk_cache` - `mod_mem_cache` | - `CacheRoot` - `CacheDirLevels` - `CacheDirLength` - `CacheMinFileSize` - `CacheMaxFileSize` - `MCacheSize` - `MCacheMaxObjectCount` - `MCacheMinObjectSize` - `MCacheMaxObjectSize` - `MCacheRemovalAlgorithm` - `MCacheMaxStreamingBuffer` |

[![top](../images/up.gif)](#page-header)

## Sample Configuration

### Sample httpd.conf

`#  
# Sample Cache Configuration  
#  
LoadModule cache_module modules/mod_cache.so  
  
<IfModule mod_cache.c>  

#LoadModule disk_cache_module modules/mod_disk_cache.so  
# If you want to use mod_disk_cache instead of mod_mem_cache,  
# uncomment the line above and comment out the LoadModule line below.  
<IfModule mod_disk_cache.c>  

CacheRoot c:/cacheroot  
CacheEnable disk /  
CacheDirLevels 5  
CacheDirLength 3  
</IfModule>   
  
LoadModule mem_cache_module modules/mod_mem_cache.so  
<IfModule mod_mem_cache.c>  

CacheEnable mem /  
MCacheSize 4096  
MCacheMaxObjectCount 100  
MCacheMinObjectSize 1  
MCacheMaxObjectSize 2048  
</IfModule>  
  
# When acting as a proxy, don't cache the list of security updates  
CacheDisable http://security.update.server/update-list/  
</IfModule>`

[![top](../images/up.gif)](#page-header)

## Avoiding the Thundering Herd

When a cached entry becomes stale, `mod_cache` will submit
a conditional request to the backend, which is expected to confirm whether the
cached entry is still fresh, and send an updated entity if not.

A small but finite amount of time exists between the time the cached entity
becomes stale, and the time the stale entity is fully refreshed. On a busy
server, a significant number of requests might arrive during this time, and
cause a **thundering herd** of requests to strike the backend
suddenly and unpredictably.

To keep the thundering herd at bay, the `CacheLock`
directive can be used to define a directory in which locks are created for
URLs **in flight**. The lock is used as a **hint**
by other requests to either suppress an attempt to cache (someone else has
gone to fetch the entity), or to indicate that a stale entry is being refreshed
(stale content will be returned in the mean time).

### Initial caching of an entry

When an entity is cached for the first time, a lock will be created for the
entity until the response has been fully cached. During the lifetime of the
lock, the cache will suppress the second and subsequent attempt to cache the
same entity. While this doesn't hold back the thundering herd, it does stop
the cache attempting to cache the same entity multiple times simultaneously.

### Refreshment of a stale entry

When an entity reaches its freshness lifetime and becomes stale, a lock
will be created for the entity until the response has either been confirmed as
still fresh, or replaced by the backend. During the lifetime of the lock, the
second and subsequent incoming request will cause stale data to be returned,
and the thundering herd is kept at bay.

### Locks and Cache-Control: no-cache

Locks are used as a **hint only** to enable the cache to be
more gentle on backend servers, however the lock can be overridden if necessary.
If the client sends a request with a Cache-Control header forcing a reload, any
lock that may be present will be ignored, and the client's request will be
honoured immediately and the cached entry refreshed.

As a further safety mechanism, locks have a configurable maximum age.
Once this age has been reached, the lock is removed, and a new request is
given the opportunity to create a new lock. This maximum age can be set using
the `CacheLockMaxAge` directive, and defaults to 5
seconds.

### Example configuration

### Enabling the cache lock

`#  
# Enable the cache lock  
#  
<IfModule mod_cache.c>  

CacheLock on  
CacheLockPath /tmp/mod_cache-lock  
CacheLockMaxAge 5  
</IfModule>`

[![top](../images/up.gif)](#page-header)

## CacheDefaultExpire Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The default duration to cache a document when no expiry date is specified. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheDefaultExpire seconds` |
| [Default:](mod__directive-dict.md#Default) | `CacheDefaultExpire 3600 (one hour)` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

The `CacheDefaultExpire` directive specifies a default time,
in seconds, to cache a document if neither an expiry date nor last-modified date are provided
with the document. The value specified with the `CacheMaxExpire`
directive does *not* override this setting.

`CacheDefaultExpire 86400`

[![top](../images/up.gif)](#page-header)

## CacheDisable Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Disable caching of specified URLs |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheDisable  url-string` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

The `CacheDisable` directive instructs
`mod_cache` to *not* cache urls at or below
url-string.

### Example

`CacheDisable /local_files`

The `no-cache` environment variable can be set to
disable caching on a finer grained set of resources in versions
2.2.12 and later.

### See also

- [Environment Variables in Apache](env.md)

[![top](../images/up.gif)](#page-header)

## CacheEnable Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable caching of specified URLs using a specified storage manager |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheEnable cache_type url-string` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

The `CacheEnable` directive instructs
`mod_cache` to cache urls at or below
url-string. The cache storage manager is specified with the
cache\_type argument. cache\_type  `mem`
instructs `mod_cache` to use the memory based storage
manager implemented by `mod_mem_cache`.
cache\_type `disk` instructs
`mod_cache` to use the disk based storage manager
implemented by `mod_disk_cache`.
cache\_type `fd` instructs
`mod_cache` to use the file descriptor cache implemented
by `mod_mem_cache`.

In the event that the URL space overlaps between different
`CacheEnable` directives (as in the example below),
each possible storage manager will be run until the first one that
actually processes the request. The order in which the storage managers are
run is determined by the order of the `CacheEnable`
directives in the configuration file.

`CacheEnable mem /manual  
CacheEnable fd /images  
CacheEnable disk /`

When acting as a forward proxy server, url-string can
also be used to specify remote sites and proxy protocols which
caching should be enabled for.

`# Cache proxied url's  
CacheEnable disk /  
  
# Cache FTP-proxied url's  
CacheEnable disk ftp://  
  
# Cache content from www.apache.org  
CacheEnable disk http://www.apache.org/`

The `no-cache` environment variable can be set to
disable caching on a finer grained set of resources in versions
2.2.12 and later.

### See also

- [Environment Variables in Apache](env.md)

[![top](../images/up.gif)](#page-header)

## CacheIgnoreCacheControl Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Ignore request to not serve cached content to client |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheIgnoreCacheControl On|Off` |
| [Default:](mod__directive-dict.md#Default) | `CacheIgnoreCacheControl Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

Ordinarily, requests containing a Cache-Control: no-cache or
Pragma: no-cache header value will not be served from the cache. The
`CacheIgnoreCacheControl` directive allows this
behavior to be overridden. `CacheIgnoreCacheControl`
On tells the server to attempt to serve the resource from the cache even
if the request contains no-cache header values. Resources requiring
authorization will *never* be cached.

`CacheIgnoreCacheControl On`

### Warning:

This directive will allow serving from the cache even if the client has
requested that the document not be served from the cache. This might
result in stale content being served.

### See also

- `CacheStorePrivate`
- `CacheStoreNoStore`

[![top](../images/up.gif)](#page-header)

## CacheIgnoreHeaders Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Do not store the given HTTP header(s) in the cache. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheIgnoreHeaders header-string [header-string] ...` |
| [Default:](mod__directive-dict.md#Default) | `CacheIgnoreHeaders None` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

According to RFC 2616, hop-by-hop HTTP headers are not stored in
the cache. The following HTTP headers are hop-by-hop headers and thus
do not get stored in the cache in *any* case regardless of the
setting of `CacheIgnoreHeaders`:

- `Connection`
- `Keep-Alive`
- `Proxy-Authenticate`
- `Proxy-Authorization`
- `TE`
- `Trailers`
- `Transfer-Encoding`
- `Upgrade`

`CacheIgnoreHeaders` specifies additional HTTP
headers that should not to be stored in the cache. For example, it makes
sense in some cases to prevent cookies from being stored in the cache.

`CacheIgnoreHeaders` takes a space separated list
of HTTP headers that should not be stored in the cache. If only hop-by-hop
headers not should be stored in the cache (the RFC 2616 compliant
behaviour), `CacheIgnoreHeaders` can be set to
`None`.

### Example 1

`CacheIgnoreHeaders Set-Cookie`

### Example 2

`CacheIgnoreHeaders None`

### Warning:

If headers like `Expires` which are needed for proper cache
management are not stored due to a
`CacheIgnoreHeaders` setting, the behaviour of
mod\_cache is undefined.

[![top](../images/up.gif)](#page-header)

## CacheIgnoreNoLastMod Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Ignore the fact that a response has no Last Modified header. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheIgnoreNoLastMod On|Off` |
| [Default:](mod__directive-dict.md#Default) | `CacheIgnoreNoLastMod Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

Ordinarily, documents without a last-modified date are not cached.
Under some circumstances the last-modified date is removed (during
`mod_include` processing for example) or not provided
at all. The `CacheIgnoreNoLastMod` directive
provides a way to specify that documents without last-modified dates
should be considered for caching, even without a last-modified date.
If neither a last-modified date nor an expiry date are provided with
the document then the value specified by the
`CacheDefaultExpire` directive will be used to
generate an expiration date.

`CacheIgnoreNoLastMod On`

[![top](../images/up.gif)](#page-header)

## CacheIgnoreQueryString Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Ignore query string when caching |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheIgnoreQueryString On|Off` |
| [Default:](mod__directive-dict.md#Default) | `CacheIgnoreQueryString Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.2.6 and later |

Ordinarily, requests with query string parameters are cached separately
for each unique query string. This is according to RFC 2616/13.9 done only
if an expiration time is specified. The
`CacheIgnoreQueryString` directive tells the cache to
cache requests even if no expiration time is specified, and to reply with
a cached reply even if the query string differs. From a caching point of
view the request is treated as if having no query string when this
directive is enabled.

`CacheIgnoreQueryString On`

[![top](../images/up.gif)](#page-header)

## CacheIgnoreURLSessionIdentifiers Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Ignore defined session identifiers encoded in the URL when caching |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheIgnoreURLSessionIdentifiers identifier [identifier] ...` |
| [Default:](mod__directive-dict.md#Default) | `CacheIgnoreURLSessionIdentifiers None` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

Sometimes applications encode the session identifier into the URL like in the following
Examples:

- `/someapplication/image.gif;jsessionid=123456789`
- `/someapplication/image.gif?PHPSESSIONID=12345678`

This causes cachable resources to be stored separately for each session, which
is often not desired. `CacheIgnoreURLSessionIdentifiers` lets
define a list of identifiers that are removed from the key that is used to identify
an entity in the cache, such that cachable resources are not stored separately for
each session.

`CacheIgnoreURLSessionIdentifiers None` clears the list of ignored
identifiers. Otherwise, each identifier is added to the list.

### Example 1

`CacheIgnoreURLSessionIdentifiers jsessionid`

### Example 2

`CacheIgnoreURLSessionIdentifiers None`

[![top](../images/up.gif)](#page-header)

## CacheLastModifiedFactor Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The factor used to compute an expiry date based on the LastModified date. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheLastModifiedFactor float` |
| [Default:](mod__directive-dict.md#Default) | `CacheLastModifiedFactor 0.1` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

In the event that a document does not provide an expiry date but does
provide a last-modified date, an expiry date can be calculated based on
the time since the document was last modified. The
`CacheLastModifiedFactor` directive specifies a
factor to be used in the generation of this expiry date
according to the following formula:
`expiry-period = time-since-last-modified-date * factor
expiry-date = current-date + expiry-period`
For example, if the document was last modified 10 hours ago, and
factor is 0.1 then the expiry-period will be set to
10\*0.1 = 1 hour. If the current time was 3:00pm then the computed
expiry-date would be 3:00pm + 1hour = 4:00pm.
If the expiry-period would be longer than that set by
`CacheMaxExpire`, then the latter takes
precedence.

`CacheLastModifiedFactor 0.5`

[![top](../images/up.gif)](#page-header)

## CacheLock Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable the thundering herd lock. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheLock on|off` |
| [Default:](mod__directive-dict.md#Default) | `CacheLock off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.2.15 and later |

The `CacheLock` directive enables the thundering herd lock
for the given URL space.

In a minimal configuration the following directive is all that is needed to
enable the thundering herd lock in the default system temp directory.

`# Enable chache lock  
CacheLock on`

[![top](../images/up.gif)](#page-header)

## CacheLockMaxAge Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set the maximum possible age of a cache lock. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheLockMaxAge integer` |
| [Default:](mod__directive-dict.md#Default) | `CacheLockMaxAge 5` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

The `CacheLockMaxAge` directive specifies the maximum
age of any cache lock.

A lock older than this value in seconds will be ignored, and the next
incoming request will be given the opportunity to re-establish the lock.
This mechanism prevents a slow client taking an excessively long time to refresh
an entity.

[![top](../images/up.gif)](#page-header)

## CacheLockPath Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set the lock path directory. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheLockPath directory` |
| [Default:](mod__directive-dict.md#Default) | `CacheLockPath /tmp/mod_cache-lock` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

The `CacheLockPath` directive allows you to specify the
directory in which the locks are created. By default, the system's temporary
folder is used. Locks consist of empty files that only exist for stale URLs
in flight, so is significantly less resource intensive than the traditional
disk cache.

[![top](../images/up.gif)](#page-header)

## CacheMaxExpire Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The maximum time in seconds to cache a document |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheMaxExpire seconds` |
| [Default:](mod__directive-dict.md#Default) | `CacheMaxExpire 86400 (one day)` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

The `CacheMaxExpire` directive specifies the maximum number of
seconds for which cachable HTTP documents will be retained without checking the origin
server. Thus, documents will be out of date at most this number of seconds. This maximum
value is enforced even if an expiry date was supplied with the document.

`CacheMaxExpire 604800`

[![top](../images/up.gif)](#page-header)

## CacheStoreNoStore Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Attempt to cache requests or responses that have been marked as no-store. |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheStoreNoStore On|Off` |
| [Default:](mod__directive-dict.md#Default) | `CacheStoreNoStore Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

Ordinarily, requests or responses with Cache-Control: no-store header
values will not be stored in the cache. The
`CacheStoreNoStore` directive allows this
behavior to be overridden. `CacheStoreNoStore` On
tells the server to attempt to cache the resource even if it contains
no-store header values. Resources requiring authorization will
*never* be cached.

`CacheStoreNoStore On`

### Warning:

As described in RFC 2616, the no-store directive is intended to
"prevent the inadvertent release or retention of sensitive information
(for example, on backup tapes)." Enabling this option could store
sensitive information in the cache. You are hereby warned.

### See also

- `CacheIgnoreCacheControl`
- `CacheStorePrivate`

[![top](../images/up.gif)](#page-header)

## CacheStorePrivate Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Attempt to cache responses that the server has marked as private |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheStorePrivate On|Off` |
| [Default:](mod__directive-dict.md#Default) | `CacheStorePrivate Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cache |

Ordinarily, responses with Cache-Control: private header values will not
be stored in the cache. The `CacheStorePrivate`
directive allows this behavior to be overridden.
`CacheStorePrivate` On
tells the server to attempt to cache the resource even if it contains
private header values. Resources requiring authorization will
*never* be cached.

`CacheStorePrivate On`

### Warning:

This directive will allow caching even if the upstream server has
requested that the resource not be cached. This directive is only
ideal for a 'private' cache.

### See also

- `CacheIgnoreCacheControl`
- `CacheStoreNoStore`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_cache.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_cache.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_cache.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
