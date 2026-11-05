# mpm_netware - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mpm_netware.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mpm_netware.html) to go to the current version of this document.

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
arrive. Apache always tries to maintain several spare
or idle worker threads, which stand ready to serve incoming
requests. In this way, clients do not need to wait for a new
child threads to be spawned before their requests can be
served.

The `StartThreads`,
`MinSpareThreads`,
`MaxSpareThreads`, and
`MaxThreads`
regulate how the main thread creates worker threads to serve
requests. In general, Apache is very self-regulating, so most
sites do not need to adjust these directives from their default
values. Sites with limited memory may need to decrease `MaxThreads` to keep the server from
thrashing (spawning and terminating idle threads). More information
about tuning process creation is provided in the [performance hints](misc__perf-tuning.md)
documentation.

`MaxRequestsPerChild`
controls how frequently the server recycles processes by killing old
ones and launching new ones. On the NetWare OS it is highly
recommended that this directive remain set to 0. This allows worker
threads to continue servicing requests indefinitely.

### Directives

- ![](../images/right.gif) [Listen](mod__mpm_common.md#listen)
- ![](../images/right.gif) [ListenBacklog](mod__mpm_common.md#listenbacklog)
- ![](../images/right.gif) [MaxMemFree](mod__mpm_common.md#maxmemfree)
- ![](../images/right.gif) [MaxRequestsPerChild](mod__mpm_common.md#maxrequestsperchild)
- ![](../images/right.gif) [MaxSpareThreads](mod__mpm_common.md#maxsparethreads)
- ![](../images/down.gif) [MaxThreads](#maxthreads)
- ![](../images/right.gif) [MinSpareThreads](mod__mpm_common.md#minsparethreads)
- ![](../images/right.gif) [ReceiveBufferSize](mod__mpm_common.md#receivebuffersize)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [StartThreads](mod__mpm_common.md#startthreads)
- ![](../images/right.gif) [ThreadStackSize](mod__mpm_common.md#threadstacksize)

### See also

- [Setting which addresses and
  ports Apache uses](bind.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## MaxThreads Directive

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

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mpm_netware.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
