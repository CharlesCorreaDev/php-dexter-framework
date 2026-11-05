# mpmt_os2 - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mpmt_os2.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mpmt_os2.html) to go to the current version of this document.

# Apache MPM os2

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Hybrid multi-process, multi-threaded MPM for OS/2 |
| [Status:](mod__module-dict.md#Status) | MPM |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | mpm\_mpmt\_os2\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mpmt\_os2.c |

### Summary

The Server consists of a main, parent process and a small, static
number of child processes.

The parent process's job is to manage the child processes. This
involves spawning children as required to ensure there are always
`StartServers` processes
accepting connections.

Each child process consists of a a pool of worker threads and a
main thread that accepts connections and passes them to the workers via
a work queue. The worker thread pool is dynamic, managed by a
maintenance thread so that the number of idle threads is kept between
`MinSpareThreads` and
`MaxSpareThreads`.

### Directives

- ![](../images/right.gif) [Group](mod__mpm_common.md#group)
- ![](../images/right.gif) [Listen](mod__mpm_common.md#listen)
- ![](../images/right.gif) [ListenBacklog](mod__mpm_common.md#listenbacklog)
- ![](../images/right.gif) [MaxRequestsPerChild](mod__mpm_common.md#maxrequestsperchild)
- ![](../images/right.gif) [MaxSpareThreads](mod__mpm_common.md#maxsparethreads)
- ![](../images/right.gif) [MinSpareThreads](mod__mpm_common.md#minsparethreads)
- ![](../images/right.gif) [PidFile](mod__mpm_common.md#pidfile)
- ![](../images/right.gif) [ReceiveBufferSize](mod__mpm_common.md#receivebuffersize)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [StartServers](mod__mpm_common.md#startservers)
- ![](../images/right.gif) [User](mod__mpm_common.md#user)

### See also

- [Setting which addresses and ports Apache
  uses](bind.md)

- [Comments](#comments_section)

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mpmt_os2.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
