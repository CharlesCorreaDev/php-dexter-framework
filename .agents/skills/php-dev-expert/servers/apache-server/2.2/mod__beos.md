# beos - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/beos.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/beos.html) to go to the current version of this document.

# Apache MPM beos

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | This Multi-Processing Module is optimized for BeOS. |
| [Status:](mod__module-dict.md#Status) | MPM |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | mpm\_beos\_module |
| [Source File:](mod__module-dict.md#SourceFile) | beos.c |

### Summary

This Multi-Processing Module (MPM) is the default for BeOS. It uses
a single control process which creates threads to handle requests.

### Directives

- ![](../images/right.gif) [CoreDumpDirectory](mod__mpm_common.md#coredumpdirectory)
- ![](../images/right.gif) [Group](mod__mpm_common.md#group)
- ![](../images/right.gif) [Listen](mod__mpm_common.md#listen)
- ![](../images/right.gif) [ListenBacklog](mod__mpm_common.md#listenbacklog)
- ![](../images/right.gif) [MaxClients](mod__mpm_common.md#maxclients)
- ![](../images/right.gif) [MaxMemFree](mod__mpm_common.md#maxmemfree)
- ![](../images/down.gif) [MaxRequestsPerThread](#maxrequestsperthread)
- ![](../images/right.gif) [MaxSpareThreads](mod__mpm_common.md#maxsparethreads)
- ![](../images/right.gif) [MinSpareThreads](mod__mpm_common.md#minsparethreads)
- ![](../images/right.gif) [PidFile](mod__mpm_common.md#pidfile)
- ![](../images/right.gif) [ReceiveBufferSize](mod__mpm_common.md#receivebuffersize)
- ![](../images/right.gif) [ScoreBoardFile](mod__mpm_common.md#scoreboardfile)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [StartThreads](mod__mpm_common.md#startthreads)
- ![](../images/right.gif) [User](mod__mpm_common.md#user)

### See also

- [Setting which addresses and ports Apache
  uses](bind.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## MaxRequestsPerThread Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Limit on the number of requests that an individual thread will handle during its life |
| [Syntax:](mod__directive-dict.md#Syntax) | `MaxRequestsPerThread number` |
| [Default:](mod__directive-dict.md#Default) | `MaxRequestsPerThread 0` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | beos |

The `MaxRequestsPerThread` directive sets
the limit on the number of requests that an individual server thread
will handle. After `MaxRequestsPerThread`
requests, the thread will die. If `MaxRequestsPerThread` is `0`, then the thread
will never expire.

Setting `MaxRequestsPerThread` to a
non-zero limit has two beneficial effects:

- it limits the amount of memory that a thread can consume
  by (accidental) memory leakage;
- by giving threads a finite lifetime, it helps reduce
  the number of threads when the server load reduces.

### Note:

For `KeepAlive` requests, only
the first request is counted towards this limit. In effect, it
changes the behavior to limit the number of *connections*
per thread.

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/mod/beos.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/beos.html "English") |
[es](https://httpd.apache.org/docs/2.2/pt-br/es/mod/beos.html "Español") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/beos.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
