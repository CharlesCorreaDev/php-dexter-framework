# mpm_netware - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mpm_netware.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache MPM netware

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Multi-Processing Module implementing an exclusively threaded web server optimized for Novell NetWare |
| [Status:](mod__module-dict.md#Status) | MPM |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | mpm\_netware\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mpm\_netware.c |

### Summary

This Multi-Processing Module (MPM) implements an exclusively
threaded web server that has been optimized for Novell
NetWare.

The main thread is responsible for launching child
worker threads which listen for connections and serve them when they
arrive. Apache HTTP Server always tries to maintain several spare
or idle worker threads, which stand ready to serve incoming
requests. In this way, clients do not need to wait for a new
child threads to be spawned before their requests can be
served.

The `StartThreads`,
`MinSpareThreads`,
`MaxSpareThreads`, and
`MaxThreads`
regulate how the main thread creates worker threads to serve
requests. In general, Apache httpd is very self-regulating, so most
sites do not need to adjust these directives from their default
values. Sites with limited memory may need to decrease `MaxThreads` to keep the server from
thrashing (spawning and terminating idle threads). More information
about tuning process creation is provided in the [performance hints](misc__perf-tuning.md)
documentation.

`MaxConnectionsPerChild`
controls how frequently the server recycles processes by killing old
ones and launching new ones. On the NetWare OS it is highly
recommended that this directive remain set to 0. This allows worker
threads to continue servicing requests indefinitely.

### Directives

- ![](../images/right.gif) [Listen](mod__mpm_common.md#listen)
- ![](../images/right.gif) [ListenBacklog](mod__mpm_common.md#listenbacklog)
- ![](../images/right.gif) [MaxConnectionsPerChild](mod__mpm_common.md#maxconnectionsperchild)
- ![](../images/right.gif) [MaxMemFree](mod__mpm_common.md#maxmemfree)
- ![](../images/right.gif) [MaxSpareThreads](mod__mpm_common.md#maxsparethreads)
- ![](../images/down.gif) [MaxThreads](#maxthreads)
- ![](../images/right.gif) [MinSpareThreads](mod__mpm_common.md#minsparethreads)
- ![](../images/right.gif) [ReceiveBufferSize](mod__mpm_common.md#receivebuffersize)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [StartThreads](mod__mpm_common.md#startthreads)
- ![](../images/right.gif) [ThreadStackSize](mod__mpm_common.md#threadstacksize)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mpm_netware)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mpm_netware)

### See also

- [Multi-Processing Modules (MPMs)](mpm.md)
- [Setting which addresses and
  ports Apache httpd uses](bind.md)

[![top](../images/up.gif)](#page-header)

## MaxThreads Directive [¶](#maxthreads "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set the maximum number of worker threads |
| [Syntax:](mod__directive-dict.md#Syntax) | `MaxThreads number` |
| [Default:](mod__directive-dict.md#Default) | `MaxThreads 2048` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | mpm\_netware |

The `MaxThreads` directive sets the desired
maximum number worker threads allowable. The default value is
also the compiled in hard limit. Therefore it can only be lowered,
for example:

`MaxThreads 512`

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mpm_netware.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mpm_netware.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
