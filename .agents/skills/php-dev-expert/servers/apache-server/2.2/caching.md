# Caching Guide - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/caching.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/caching.html) to go to the current version of this document.

# Caching Guide

This document supplements the `mod_cache`,
`mod_disk_cache`, `mod_mem_cache`,
`mod_file_cache` and [htcacheclean](programs__htcacheclean.md) reference documentation.
It describes how to use Apache's caching features to accelerate web and
proxy serving, while avoiding common problems and misconfigurations.

- ![](./images/down.gif) [Introduction](#introduction)
- ![](./images/down.gif) [Caching Overview](#overview)
- ![](./images/down.gif) [Security Considerations](#security)
- ![](./images/down.gif) [File-Handle Caching](#filehandle)
- ![](./images/down.gif) [In-Memory Caching](#inmemory)
- ![](./images/down.gif) [Disk-based Caching](#disk)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## Introduction

As of Apache HTTP server version 2.2 `mod_cache`
and `mod_file_cache` are no longer marked
experimental and are considered suitable for production use. These
caching architectures provide a powerful means to accelerate HTTP
handling, both as an origin webserver and as a proxy.

`mod_cache` and its provider modules
`mod_mem_cache` and `mod_disk_cache`
provide intelligent, HTTP-aware caching. The content itself is stored
in the cache, and mod\_cache aims to honour all of the various HTTP
headers and options that control the cachability of content. It can
handle both local and proxied content. `mod_cache`
is aimed at both simple and complex caching configurations, where
you are dealing with proxied content, dynamic local content or
have a need to speed up access to local files which change with
time.

`mod_file_cache` on the other hand presents a more
basic, but sometimes useful, form of caching. Rather than maintain
the complexity of actively ensuring the cachability of URLs,
`mod_file_cache` offers file-handle and memory-mapping
tricks to keep a cache of files as they were when Apache was last
started. As such, `mod_file_cache` is aimed at improving
the access time to local static files which do not change very
often.

As `mod_file_cache` presents a relatively simple
caching implementation, apart from the specific sections on `CacheFile` and `MMapFile`, the explanations
in this guide cover the `mod_cache` caching
architecture.

To get the most from this document, you should be familiar with
the basics of HTTP, and have read the Users' Guides to
[Mapping URLs to the Filesystem](urlmapping.md) and
[Content negotiation](content-negotiation.md).

[![top](./images/up.gif)](#page-header)

## Caching Overview

| Related Modules | Related Directives |
| --- | --- |
| - `mod_cache` - `mod_mem_cache` - `mod_disk_cache` - `mod_file_cache` | - `CacheEnable` - `CacheDisable` - `CacheFile` - `MMapFile` - `UseCanonicalName` - `CacheNegotiatedDocs` |

There are two main stages in `mod_cache` that can
occur in the lifetime of a request. First, `mod_cache`
is a URL mapping module, which means that if a URL has been cached,
and the cached version of that URL has not expired, the request will
be served directly by `mod_cache`.

This means that any other stages that might ordinarily happen
in the process of serving a request -- for example being handled
by `mod_proxy`, or `mod_rewrite` --
won't happen. But then this is the point of caching content in
the first place.

If the URL is not found within the cache, `mod_cache`
will add a [filter](filter.md) to the request handling. After
Apache has located the content by the usual means, the filter will be run
as the content is served. If the content is determined to be cacheable,
the content will be saved to the cache for future serving.

If the URL is found within the cache, but also found to have expired,
the filter is added anyway, but `mod_cache` will create
a conditional request to the backend, to determine if the cached version
is still current. If the cached version is still current, its
meta-information will be updated and the request will be served from the
cache. If the cached version is no longer current, the cached version
will be deleted and the filter will save the updated content to the cache
as it is served.

### Improving Cache Hits

When caching locally generated content, ensuring that
`UseCanonicalName` is set to
`On` can dramatically improve the ratio of cache hits. This
is because the hostname of the virtual-host serving the content forms
a part of the cache key. With the setting set to `On`
virtual-hosts with multiple server names or aliases will not produce
differently cached entities, and instead content will be cached as
per the canonical hostname.

Because caching is performed within the URL to filename translation
phase, cached documents will only be served in response to URL requests.
Ordinarily this is of little consequence, but there is one circumstance
in which it matters: If you are using [Server
Side Includes](howto__ssi.md);

```
<!-- The following include can be cached -->
<!--#include virtual="/footer.html" --> 

<!-- The following include can not be cached -->
<!--#include file="/path/to/footer.html" -->
```

If you are using Server Side Includes, and want the benefit of speedy
serves from the cache, you should use `virtual` include
types.

### Expiry Periods

The default expiry period for cached entities is one hour, however
this can be easily over-ridden by using the `CacheDefaultExpire` directive. This
default is only used when the original source of the content does not
specify an expire time or time of last modification.

If a response does not include an `Expires` header but does
include a `Last-Modified` header, `mod_cache`
can infer an expiry period based on the use of the `CacheLastModifiedFactor` directive.

For local content, `mod_expires` may be used to
fine-tune the expiry period.

The maximum expiry period may also be controlled by using the
`CacheMaxExpire`.

### A Brief Guide to Conditional Requests

When content expires from the cache and is re-requested from the
backend or content provider, rather than pass on the original request,
Apache will use a conditional request instead.

HTTP offers a number of headers which allow a client, or cache
to discern between different versions of the same content. For
example if a resource was served with an "Etag:" header, it is
possible to make a conditional request with an "If-None-Match:"
header. If a resource was served with a "Last-Modified:" header
it is possible to make a conditional request with an
"If-Modified-Since:" header, and so on.

When such a conditional request is made, the response differs
depending on whether the content matches the conditions. If a request is
made with an "If-Modified-Since:" header, and the content has not been
modified since the time indicated in the request then a terse "304 Not
Modified" response is issued.

If the content has changed, then it is served as if the request were
not conditional to begin with.

The benefits of conditional requests in relation to caching are
twofold. Firstly, when making such a request to the backend, if the
content from the backend matches the content in the store, this can be
determined easily and without the overhead of transferring the entire
resource.

Secondly, conditional requests are usually less strenuous on the
backend. For static files, typically all that is involved is a call
to `stat()` or similar system call, to see if the file has
changed in size or modification time. As such, even if Apache is
caching local content, even expired content may still be served faster
from the cache if it has not changed. As long as reading from the cache
store is faster than reading from the backend (e.g. an in-memory cache
compared to reading from disk).

### What Can be Cached?

As mentioned already, the two styles of caching in Apache work
differently, `mod_file_cache` caching maintains file
contents as they were when Apache was started. When a request is
made for a file that is cached by this module, it is intercepted
and the cached file is served.

`mod_cache` caching on the other hand is more
complex. When serving a request, if it has not been cached
previously, the caching module will determine if the content
is cacheable. The conditions for determining cachability of
a response are;

1. Caching must be enabled for this URL. See the `CacheEnable` and `CacheDisable` directives.
2. The response must have a HTTP status code of 200, 203, 300, 301 or
   410.
3. The request must be a HTTP GET request.
4. If the request contains an "Authorization:" header, the response
   will not be cached.
5. If the response contains an "Authorization:" header, it must
   also contain an "s-maxage", "must-revalidate" or "public" option
   in the "Cache-Control:" header.
6. If the URL included a query string (e.g. from a HTML form GET
   method) it will not be cached unless the response specifies an
   explicit expiration by including an "Expires:" header or the max-age
   or s-maxage directive of the "Cache-Control:" header, as per RFC2616
   sections 13.9 and 13.2.1.
7. If the response has a status of 200 (OK), the response must
   also include at least one of the "Etag", "Last-Modified" or
   the "Expires" headers, or the max-age or s-maxage directive of
   the "Cache-Control:" header, unless the
   `CacheIgnoreNoLastMod`
   directive has been used to require otherwise.
8. If the response includes the "private" option in a "Cache-Control:"
   header, it will not be stored unless the
   `CacheStorePrivate` has been
   used to require otherwise.
9. Likewise, if the response includes the "no-store" option in a
   "Cache-Control:" header, it will not be stored unless the
   `CacheStoreNoStore` has been
   used.
10. A response will not be stored if it includes a "Vary:" header
    containing the match-all "\*".

### What Should Not be Cached?

In short, any content which is highly time-sensitive, or which varies
depending on the particulars of the request that are not covered by
HTTP negotiation, should not be cached.

If you have dynamic content which changes depending on the IP address
of the requester, or changes every 5 minutes, it should almost certainly
not be cached.

If on the other hand, the content served differs depending on the
values of various HTTP headers, it might be possible
to cache it intelligently through the use of a "Vary" header.

### Variable/Negotiated Content

If a response with a "Vary" header is received by
`mod_cache` when requesting content by the backend it
will attempt to handle it intelligently. If possible,
`mod_cache` will detect the headers attributed in the
"Vary" response in future requests and serve the correct cached
response.

If for example, a response is received with a vary header such as;

`Vary: negotiate,accept-language,accept-charset`

`mod_cache` will only serve the cached content to
requesters with accept-language and accept-charset headers
matching those of the original request.

[![top](./images/up.gif)](#page-header)

## Security Considerations

### Authorization and Access Control

Using `mod_cache` is very much like having a built
in reverse-proxy. Requests will be served by the caching module unless
it determines that the backend should be queried. When caching local
resources, this drastically changes the security model of Apache.

As traversing a filesystem hierarchy to examine potential
`.htaccess` files would be a very expensive operation,
partially defeating the point of caching (to speed up requests),
`mod_cache` makes no decision about whether a cached
entity is authorised for serving. In other words; if
`mod_cache` has cached some content, it will be served
from the cache as long as that content has not expired.

If, for example, your configuration permits access to a resource by IP
address you should ensure that this content is not cached. You can do this by
using the `CacheDisable`
directive, or `mod_expires`. Left unchecked,
`mod_cache` - very much like a reverse proxy - would cache
the content when served and then serve it to any client, on any IP
address.

### Local exploits

As requests to end-users can be served from the cache, the cache
itself can become a target for those wishing to deface or interfere with
content. It is important to bear in mind that the cache must at all
times be writable by the user which Apache is running as. This is in
stark contrast to the usually recommended situation of maintaining
all content unwritable by the Apache user.

If the Apache user is compromised, for example through a flaw in
a CGI process, it is possible that the cache may be targeted. When
using `mod_disk_cache`, it is relatively easy to
insert or modify a cached entity.

This presents a somewhat elevated risk in comparison to the other
types of attack it is possible to make as the Apache user. If you are
using `mod_disk_cache` you should bear this in mind -
ensure you upgrade Apache when security upgrades are announced and
run CGI processes as a non-Apache user using [suEXEC](suexec.md) if possible.

### Cache Poisoning

When running Apache as a caching proxy server, there is also the
potential for so-called cache poisoning. Cache Poisoning is a broad
term for attacks in which an attacker causes the proxy server to
retrieve incorrect (and usually undesirable) content from the backend.

For example if the DNS servers used by your system running Apache
are vulnerable to DNS cache poisoning, an attacker may be able to control
where Apache connects to when requesting content from the origin server.
Another example is so-called HTTP request-smuggling attacks.

This document is not the correct place for an in-depth discussion
of HTTP request smuggling (instead, try your favourite search engine)
however it is important to be aware that it is possible to make
a series of requests, and to exploit a vulnerability on an origin
webserver such that the attacker can entirely control the content
retrieved by the proxy.

[![top](./images/up.gif)](#page-header)

## File-Handle Caching

| Related Modules | Related Directives |
| --- | --- |
| - `mod_file_cache` - `mod_mem_cache` | - `CacheFile` - `CacheEnable` - `CacheDisable` |

The act of opening a file can itself be a source of delay, particularly
on network filesystems. By maintaining a cache of open file descriptors
for commonly served files, Apache can avoid this delay. Currently Apache
provides two different implementations of File-Handle Caching.

### CacheFile

The most basic form of caching present in Apache is the file-handle
caching provided by `mod_file_cache`. Rather than caching
file-contents, this cache maintains a table of open file descriptors. Files
to be cached in this manner are specified in the configuration file using
the `CacheFile`
directive.

The
`CacheFile` directive
instructs Apache to open the file when Apache is started and to re-use
this file-handle for all subsequent access to this file.

```
CacheFile /usr/local/apache2/htdocs/index.html
```

If you intend to cache a large number of files in this manner, you
must ensure that your operating system's limit for the number of open
files is set appropriately.

Although using `CacheFile`
does not cause the file-contents to be cached per-se, it does mean
that if the file changes while Apache is running these changes will
not be picked up. The file will be consistently served as it was
when Apache was started.

If the file is removed while Apache is running, Apache will continue
to maintain an open file descriptor and serve the file as it was when
Apache was started. This usually also means that although the file
will have been deleted, and not show up on the filesystem, extra free
space will not be recovered until Apache is stopped and the file
descriptor closed.

### CacheEnable fd

`mod_mem_cache` also provides its own file-handle
caching scheme, which can be enabled via the
`CacheEnable` directive.

```
CacheEnable fd /
```

As with all of `mod_cache` this type of file-handle
caching is intelligent, and handles will not be maintained beyond
the expiry time of the cached content.

[![top](./images/up.gif)](#page-header)

## In-Memory Caching

| Related Modules | Related Directives |
| --- | --- |
| - `mod_mem_cache` - `mod_file_cache` | - `CacheEnable` - `CacheDisable` - `MMapFile` |

Serving directly from system memory is universally the fastest method
of serving content. Reading files from a disk controller or, even worse,
from a remote network is orders of magnitude slower. Disk controllers
usually involve physical processes, and network access is limited by
your available bandwidth. Memory access on the other hand can take mere
nano-seconds.

System memory isn't cheap though, byte for byte it's by far the most
expensive type of storage and it's important to ensure that it is used
efficiently. By caching files in memory you decrease the amount of
memory available on the system. As we'll see, in the case of operating
system caching, this is not so much of an issue, but when using
Apache's own in-memory caching it is important to make sure that you
do not allocate too much memory to a cache. Otherwise the system
will be forced to swap out memory, which will likely degrade
performance.

### Operating System Caching

Almost all modern operating systems cache file-data in memory managed
directly by the kernel. This is a powerful feature, and for the most
part operating systems get it right. For example, on Linux, let's look at
the difference in the time it takes to read a file for the first time
and the second time;

```
colm@coroebus:~$ time cat testfile > /dev/null
real    0m0.065s
user    0m0.000s
sys     0m0.001s
colm@coroebus:~$ time cat testfile > /dev/null
real    0m0.003s
user    0m0.003s
sys     0m0.000s
```

Even for this small file, there is a huge difference in the amount
of time it takes to read the file. This is because the kernel has cached
the file contents in memory.

By ensuring there is "spare" memory on your system, you can ensure
that more and more file-contents will be stored in this cache. This
can be a very efficient means of in-memory caching, and involves no
extra configuration of Apache at all.

Additionally, because the operating system knows when files are
deleted or modified, it can automatically remove file contents from the
cache when necessary. This is a big advantage over Apache's in-memory
caching which has no way of knowing when a file has changed.

Despite the performance and advantages of automatic operating system
caching there are some circumstances in which in-memory caching may be
better performed by Apache.

Firstly, an operating system can only cache files it knows about. If
you are running Apache as a proxy server, the files you are caching are
not locally stored but remotely served. If you still want the unbeatable
speed of in-memory caching, Apache's own memory caching is needed.

### MMapFile Caching

`mod_file_cache` provides the
`MMapFile` directive, which
allows you to have Apache map a static file's contents into memory at
start time (using the mmap system call). Apache will use the in-memory
contents for all subsequent accesses to this file.

```
MMapFile /usr/local/apache2/htdocs/index.html
```

As with the
`CacheFile` directive, any
changes in these files will not be picked up by Apache after it has
started.

The `MMapFile`
directive does not keep track of how much memory it allocates, so
you must ensure not to over-use the directive. Each Apache child
process will replicate this memory, so it is critically important
to ensure that the files mapped are not so large as to cause the
system to swap memory.

### mod\_mem\_cache Caching

`mod_mem_cache` provides a HTTP-aware intelligent
in-memory cache. It also uses heap memory directly, which means that
even if MMap is not supported on your system,
`mod_mem_cache` may still be able to perform caching.

Caching of this type is enabled via;

```
# Enable memory caching
CacheEnable mem /

# Limit the size of the cache to 1 Megabyte
MCacheSize 1024
```

[![top](./images/up.gif)](#page-header)

## Disk-based Caching

| Related Modules | Related Directives |
| --- | --- |
| - `mod_disk_cache` | - `CacheEnable` - `CacheDisable` |

`mod_disk_cache` provides a disk-based caching mechanism
for `mod_cache`. As with `mod_mem_cache`
this cache is intelligent and content will be served from the cache only
as long as it is considered valid.

Typically the module will be configured as so;

```
CacheRoot   /var/cache/apache/
CacheEnable disk /
CacheDirLevels 2
CacheDirLength 1
```

Importantly, as the cached files are locally stored, operating system
in-memory caching will typically be applied to their access also. So
although the files are stored on disk, if they are frequently accessed
it is likely the operating system will ensure that they are actually
served from memory.

### Understanding the Cache-Store

To store items in the cache, `mod_disk_cache` creates
a 22 character hash of the URL being requested. This hash incorporates
the hostname, protocol, port, path and any CGI arguments to the URL,
to ensure that multiple URLs do not collide.

Each character may be any one of 64-different characters, which mean
that overall there are 64^22 possible hashes. For example, a URL might
be hashed to `xyTGxSMO2b68mBCykqkp1w`. This hash is used
as a prefix for the naming of the files specific to that URL within
the cache, however first it is split up into directories as per
the `CacheDirLevels` and
`CacheDirLength`
directives.

`CacheDirLevels`
specifies how many levels of subdirectory there should be, and
`CacheDirLength`
specifies how many characters should be in each directory. With
the example settings given above, the hash would be turned into
a filename prefix as
`/var/cache/apache/x/y/TGxSMO2b68mBCykqkp1w`.

The overall aim of this technique is to reduce the number of
subdirectories or files that may be in a particular directory,
as most file-systems slow down as this number increases. With
setting of "1" for
`CacheDirLength`
there can at most be 64 subdirectories at any particular level.
With a setting of 2 there can be 64 \* 64 subdirectories, and so on.
Unless you have a good reason not to, using a setting of "1"
for `CacheDirLength`
is recommended.

Setting
`CacheDirLevels`
depends on how many files you anticipate to store in the cache.
With the setting of "2" used in the above example, a grand
total of 4096 subdirectories can ultimately be created. With
1 million files cached, this works out at roughly 245 cached
URLs per directory.

Each URL uses at least two files in the cache-store. Typically
there is a ".header" file, which includes meta-information about
the URL, such as when it is due to expire and a ".data" file
which is a verbatim copy of the content to be served.

In the case of a content negotiated via the "Vary" header, a
".vary" directory will be created for the URL in question. This
directory will have multiple ".data" files corresponding to the
differently negotiated content.

### Maintaining the Disk Cache

Although `mod_disk_cache` will remove cached content
as it is expired, it does not maintain any information on the total
size of the cache or how little free space may be left.

Instead, provided with Apache is the [htcacheclean](programs__htcacheclean.md) tool which, as the name
suggests, allows you to clean the cache periodically. Determining
how frequently to run [htcacheclean](programs__htcacheclean.md) and what target size to
use for the cache is somewhat complex and trial and error may be needed to
select optimal values.

[htcacheclean](programs__htcacheclean.md) has two modes of
operation. It can be run as persistent daemon, or periodically from
cron. [htcacheclean](programs__htcacheclean.md) can take up to an hour
or more to process very large (tens of gigabytes) caches and if you are
running it from cron it is recommended that you determine how long a typical
run takes, to avoid running more than one instance at a time.

![](images/caching_fig1.gif)  
Figure 1: Typical
cache growth / clean sequence.

Because `mod_disk_cache` does not itself pay attention
to how much space is used you should ensure that
[htcacheclean](programs__htcacheclean.md) is configured to
leave enough "grow room" following a clean.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/caching.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/caching.html "Français") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/caching.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
