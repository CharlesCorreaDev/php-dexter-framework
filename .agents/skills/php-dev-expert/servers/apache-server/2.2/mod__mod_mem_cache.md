# mod_mem_cache - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_mem_cache.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_mem_cache.html) to go to the current version of this document.

# Apache Module mod\_mem\_cache

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Content cache keyed to URIs |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | mem\_cache\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_mem\_cache.c |

### Summary

This module *requires* the service of `mod_cache`. It acts as a support module for `mod_cache` and provides a memory based storage manager.
`mod_mem_cache` can be configured to operate in two
modes: caching open file descriptors or caching objects in heap storage.
`mod_mem_cache` is most useful when used to cache locally
generated content or to cache backend server content for `mod_proxy` configured for `ProxyPass` (aka reverse proxy).

Content is stored in and retrieved from the cache using URI based
keys. Content with access protection is not cached.

### Note

In most cases `mod_disk_cache`
should be the preferred choice. This is explained further in the [Caching Guide](caching.md#inmemory). In particular,
this module's cache is *per-process*, which can be partially
mitigated by configuring threaded MPMs to use fewer child processes
via configuration of larger values for `ThreadsPerChild`. This module's cache is
also limited to storing a single variant (see HTTP Vary: header) of each
resource in the cache.

### Directives

- ![](../images/down.gif) [MCacheMaxObjectCount](#mcachemaxobjectcount)
- ![](../images/down.gif) [MCacheMaxObjectSize](#mcachemaxobjectsize)
- ![](../images/down.gif) [MCacheMaxStreamingBuffer](#mcachemaxstreamingbuffer)
- ![](../images/down.gif) [MCacheMinObjectSize](#mcacheminobjectsize)
- ![](../images/down.gif) [MCacheRemovalAlgorithm](#mcacheremovalalgorithm)
- ![](../images/down.gif) [MCacheSize](#mcachesize)

### See also

- `mod_cache`
- `mod_disk_cache`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## MCacheMaxObjectCount Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The maximum number of objects allowed to be placed in the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `MCacheMaxObjectCount value` |
| [Default:](mod__directive-dict.md#Default) | `MCacheMaxObjectCount 1009` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_mem\_cache |

The `MCacheMaxObjectCount` directive sets the
maximum number of objects to be cached. The value is used to create the
open hash table. If a new object needs to be inserted in the cache and
the maximum number of objects has been reached, an object will be
removed to allow the new object to be cached. The object to be removed
is selected using the algorithm specified by `MCacheRemovalAlgorithm`.

### Example

`MCacheMaxObjectCount 13001`

[![top](../images/up.gif)](#page-header)

## MCacheMaxObjectSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The maximum size (in bytes) of a document allowed in the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `MCacheMaxObjectSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `MCacheMaxObjectSize 10000` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_mem\_cache |

The `MCacheMaxObjectSize` directive sets the
maximum allowable size, in bytes, of a document for it to be considered
cacheable.

### Example

`MCacheMaxObjectSize 6400000`

### Note

The value of `MCacheMaxObjectSize` must be
greater than the value specified by the `MCacheMinObjectSize` directive.

[![top](../images/up.gif)](#page-header)

## MCacheMaxStreamingBuffer Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum amount of a streamed response to buffer in memory before declaring the response uncacheable |
| [Syntax:](mod__directive-dict.md#Syntax) | `MCacheMaxStreamingBuffer size_in_bytes` |
| [Default:](mod__directive-dict.md#Default) | `MCacheMaxStreamingBuffer the smaller of 100000 or MCacheMaxObjectSize` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_mem\_cache |

The `MCacheMaxStreamingBuffer` directive
specifies the maximum number of bytes of a streamed response to
buffer before deciding that the response is too big to cache.
A streamed response is one in which the entire content is not
immediately available and in which the `Content-Length`
may not be known. Sources of streaming responses include proxied
responses and the output of CGI scripts. By default, a streamed
response will *not* be cached unless it has a
`Content-Length` header. The reason for this is to
avoid using a large amount of memory to buffer a partial response
that might end up being too large to fit in the cache.
The `MCacheMaxStreamingBuffer` directive allows
buffering of streamed responses that don't contain a
`Content-Length` up to the specified maximum amount of
space. If the maximum buffer space is reached, the buffered
content is discarded and the attempt to cache is abandoned.

### Note:

Using a nonzero value for `MCacheMaxStreamingBuffer`
will not delay the transmission of the response to the client.
As soon as `mod_mem_cache` copies a block of streamed
content into a buffer, it sends the block on to the next output
filter for delivery to the client.

`# Enable caching of streamed responses up to 64KB:  
MCacheMaxStreamingBuffer 65536`

[![top](../images/up.gif)](#page-header)

## MCacheMinObjectSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The minimum size (in bytes) of a document to be allowed in the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `MCacheMinObjectSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `MCacheMinObjectSize 1` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_mem\_cache |

The `MCacheMinObjectSize` directive sets the
minimum size in bytes of a document for it to be considered
cacheable.

### Example

`MCacheMinObjectSize 10000`

[![top](../images/up.gif)](#page-header)

## MCacheRemovalAlgorithm Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The algorithm used to select documents for removal from the cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `MCacheRemovalAlgorithm LRU|GDSF` |
| [Default:](mod__directive-dict.md#Default) | `MCacheRemovalAlgorithm GDSF` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_mem\_cache |

The `MCacheRemovalAlgorithm` directive specifies
the algorithm used to select documents for removal from the cache.
Two choices are available:

`LRU` (Least Recently Used)
:   `LRU` removes the documents that have not been accessed
    for the longest time.

`GDSF` (GreadyDual-Size)
:   `GDSF` assigns a priority to cached documents based
    on the cost of a cache miss and the size of the document. Documents
    with the lowest priority are removed first.

### Example

`MCacheRemovalAlgorithm GDSF  
MCacheRemovalAlgorithm LRU`

[![top](../images/up.gif)](#page-header)

## MCacheSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The maximum amount of memory used by the cache in KBytes |
| [Syntax:](mod__directive-dict.md#Syntax) | `MCacheSize KBytes` |
| [Default:](mod__directive-dict.md#Default) | `MCacheSize 100` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_mem\_cache |

The `MCacheSize` directive sets the maximum
amount of memory to be used by the cache, in KBytes (1024-byte units).
If a new object needs to be inserted in the cache and the size of the
object is greater than the remaining memory, objects will be removed
until the new object can be cached. The object to be removed is
selected using the algorithm specified by `MCacheRemovalAlgorithm`.

### Example

`MCacheSize 700000`

### Note

The `MCacheSize` value must be greater than
the value specified by the `MCacheMaxObjectSize` directive.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_mem_cache.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_mem_cache.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_mem_cache.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
