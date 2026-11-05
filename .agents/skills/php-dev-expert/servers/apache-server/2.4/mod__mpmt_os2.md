# mpmt_os2 - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mpmt_os2.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

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

Each child process consists of a pool of worker threads and a
main thread that accepts connections and passes them to the workers via
a work queue. The worker thread pool is dynamic, managed by a
maintenance thread so that the number of idle threads is kept between
`MinSpareThreads` and
`MaxSpareThreads`.

### Directives

- ![](../images/right.gif) [Group](mod__mod_unixd.md#group)
- ![](../images/right.gif) [Listen](mod__mpm_common.md#listen)
- ![](../images/right.gif) [ListenBacklog](mod__mpm_common.md#listenbacklog)
- ![](../images/right.gif) [MaxConnectionsPerChild](mod__mpm_common.md#maxconnectionsperchild)
- ![](../images/right.gif) [MaxSpareThreads](mod__mpm_common.md#maxsparethreads)
- ![](../images/right.gif) [MinSpareThreads](mod__mpm_common.md#minsparethreads)
- ![](../images/right.gif) [PidFile](mod__mpm_common.md#pidfile)
- ![](../images/right.gif) [ReceiveBufferSize](mod__mpm_common.md#receivebuffersize)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [StartServers](mod__mpm_common.md#startservers)
- ![](../images/right.gif) [User](mod__mod_unixd.md#user)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mpmt_os2)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mpmt_os2)

### See also

- [Multi-Processing Modules (MPMs)](mpm.md)
- [Setting which addresses and ports Apache
  uses](bind.md)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mpmt_os2.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mpmt_os2.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
