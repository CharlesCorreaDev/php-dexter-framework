# mod_file_cache - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_file_cache.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_file_cache.html) to go to the current version of this document.

# Apache Module mod\_file\_cache

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Caches a static list of files in memory |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | file\_cache\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_file\_cache.c |

### Summary

This module should be used with care. You can easily create a broken
site using `mod_file_cache`, so read this document
carefully.

*Caching* frequently requested files that change very
infrequently is a technique for reducing server load.
`mod_file_cache` provides two techniques for caching
frequently requested *static* files. Through configuration
directives, you can direct `mod_file_cache` to either
open then `mmap()` a file, or to pre-open a file and save
the file's open *file handle*. Both techniques reduce server
load when processing requests for these files by doing part of the work
(specifically, the file I/O) for serving the file when the
server is started rather than during each request.

Notice: You cannot use this for speeding up CGI programs or
other files which are served by special content handlers. It
can only be used for regular files which are usually served by
the Apache core content handler.

This module is an extension of and borrows heavily from the
`mod_mmap_static` module in Apache 1.3.

### Topics

- ![](../images/down.gif) [Using mod\_file\_cache](#using)

### Directives

- ![](../images/down.gif) [CacheFile](#cachefile)
- ![](../images/down.gif) [MMapFile](#mmapfile)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Using mod\_file\_cache

`mod_file_cache` caches a list of statically
configured files via `MMapFile` or `CacheFile` directives in the main server configuration.

Not all platforms support both directives. You will receive an error
message in the server error log if you attempt to use an
unsupported directive. If given an unsupported directive, the
server will start but the file will not be cached. On platforms
that support both directives, you should experiment with both to
see which works best for you.

### MMapFile Directive

The `MMapFile`
directive of `mod_file_cache` maps a list of
statically configured files into memory through the system call
`mmap()`. This system call is available on most modern
Unix derivates, but not on all. There are sometimes system-specific
limits on the size and number of files that can be
`mmap()`ed, experimentation is probably the easiest way
to find out.

This `mmap()`ing is done once at server start or
restart, only. So whenever one of the mapped files changes on the
filesystem you *have* to restart the server (see the [Stopping and Restarting](stopping.md) documentation).
To reiterate that point: if the files are modified *in place*
without restarting the server you may end up serving requests that
are completely bogus. You should update files by unlinking the old
copy and putting a new copy in place. Most tools such as
`rdist` and `mv` do this. The reason why this
modules doesn't take care of changes to the files is that this check
would need an extra `stat()` every time which is a waste
and against the intent of I/O reduction.

### CacheFile Directive

The `CacheFile`
directive of `mod_file_cache` opens an active
*handle* or *file descriptor* to the file (or files)
listed in the configuration directive and places these open file
handles in the cache. When the file is requested, the server
retrieves the handle from the cache and passes it to the
`sendfile()` (or `TransmitFile()` on Windows),
socket API.

This file handle caching is done once at server start or
restart, only. So whenever one of the cached files changes on
the filesystem you *have* to restart the server (see the
[Stopping and Restarting](stopping.md)
documentation). To reiterate that point: if the files are
modified *in place* without restarting the server you
may end up serving requests that are completely bogus. You
should update files by unlinking the old copy and putting a new
copy in place. Most tools such as `rdist` and
`mv` do this.

### Note

Don't bother asking for a directive which recursively
caches all the files in a directory. Try this instead... See the
`Include` directive, and consider
this command:

`find /www/htdocs -type f -print \  
| sed -e 's/.*/mmapfile &/' > /www/conf/mmap.conf`

[![top](../images/up.gif)](#page-header)

## CacheFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Cache a list of file handles at startup time |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheFile file-path [file-path] ...` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_file\_cache |

The `CacheFile` directive opens handles to
one or more files (given as whitespace separated arguments) and
places these handles into the cache at server startup
time. Handles to cached files are automatically closed on a server
shutdown. When the files have changed on the filesystem, the
server should be restarted to re-cache them.

Be careful with the file-path arguments: They have
to literally match the filesystem path Apache's URL-to-filename
translation handlers create. We cannot compare inodes or other
stuff to match paths through symbolic links *etc.*
because that again would cost extra `stat()` system
calls which is not acceptable. This module may or may not work
with filenames rewritten by `mod_alias` or
`mod_rewrite`.

### Example

`CacheFile /usr/local/apache/htdocs/index.html`

[![top](../images/up.gif)](#page-header)

## MMapFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Map a list of files into memory at startup time |
| [Syntax:](mod__directive-dict.md#Syntax) | `MMapFile file-path [file-path] ...` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_file\_cache |

The `MMapFile` directive maps one or more files
(given as whitespace separated arguments) into memory at server
startup time. They are automatically unmapped on a server
shutdown. When the files have changed on the filesystem at
least a `HUP` or `USR1` signal should be send to
the server to re-`mmap()` them.

Be careful with the file-path arguments: They have
to literally match the filesystem path Apache's URL-to-filename
translation handlers create. We cannot compare inodes or other
stuff to match paths through symbolic links *etc.*
because that again would cost extra `stat()` system
calls which is not acceptable. This module may or may not work
with filenames rewritten by `mod_alias` or
`mod_rewrite`.

### Example

`MMapFile /usr/local/apache/htdocs/index.html`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_file_cache.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_file_cache.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
