# prefork - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/prefork.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/prefork.html) to go to the current version of this document.

# Apache MPM prefork

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Implements a non-threaded, pre-forking web server |
| [Status:](mod__module-dict.md#Status) | MPM |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | mpm\_prefork\_module |
| [Source File:](mod__module-dict.md#SourceFile) | prefork.c |

### Summary

This Multi-Processing Module (MPM) implements a non-threaded,
pre-forking web server that handles requests in a manner similar
to Apache 1.3. It is appropriate for sites that need to avoid
threading for compatibility with non-thread-safe libraries. It
is also the best MPM for isolating each request, so that a problem
with a single request will not affect any other.

This MPM is very self-regulating, so it is rarely necessary to
adjust its configuration directives. Most important is that
`MaxClients` be big enough to
handle as many simultaneous requests as you expect to receive, but
small enough to assure that there is enough physical RAM for all
processes.

### Topics

- ![](../images/down.gif) [How it Works](#how-it-works)

### Directives

- ![](../images/right.gif) [AcceptMutex](mod__mpm_common.md#acceptmutex)
- ![](../images/right.gif) [CoreDumpDirectory](mod__mpm_common.md#coredumpdirectory)
- ![](../images/right.gif) [EnableExceptionHook](mod__mpm_common.md#enableexceptionhook)
- ![](../images/right.gif) [Group](mod__mpm_common.md#group)
- ![](../images/right.gif) [Listen](mod__mpm_common.md#listen)
- ![](../images/right.gif) [ListenBacklog](mod__mpm_common.md#listenbacklog)
- ![](../images/right.gif) [LockFile](mod__mpm_common.md#lockfile)
- ![](../images/right.gif) [MaxClients](mod__mpm_common.md#maxclients)
- ![](../images/right.gif) [MaxMemFree](mod__mpm_common.md#maxmemfree)
- ![](../images/right.gif) [MaxRequestsPerChild](mod__mpm_common.md#maxrequestsperchild)
- ![](../images/down.gif) [MaxSpareServers](#maxspareservers)
- ![](../images/down.gif) [MinSpareServers](#minspareservers)
- ![](../images/right.gif) [PidFile](mod__mpm_common.md#pidfile)
- ![](../images/right.gif) [ReceiveBufferSize](mod__mpm_common.md#receivebuffersize)
- ![](../images/right.gif) [ScoreBoardFile](mod__mpm_common.md#scoreboardfile)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [ServerLimit](mod__mpm_common.md#serverlimit)
- ![](../images/right.gif) [StartServers](mod__mpm_common.md#startservers)
- ![](../images/right.gif) [User](mod__mpm_common.md#user)

### See also

- [Setting which addresses and ports Apache
  uses](bind.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## How it Works

A single control process is responsible for launching child
processes which listen for connections and serve them when they
arrive. Apache always tries to maintain several spare
or idle server processes, which stand ready to serve incoming
requests. In this way, clients do not need to wait for a new
child processes to be forked before their requests can be
served.

The `StartServers`,
`MinSpareServers`,
`MaxSpareServers`, and
`MaxClients` regulate how
the parent process creates children to serve requests. In general,
Apache is very self-regulating, so most sites do not need to
adjust these directives from their default values. Sites which
need to serve more than 256 simultaneous requests may need to
increase `MaxClients`,
while sites with limited memory may need to decrease `MaxClients` to keep the server from
thrashing (swapping memory to disk and back). More information
about tuning process creation is provided in the [performance hints](misc__perf-tuning.md)
documentation.

While the parent process is usually started as `root`
under Unix in order to bind to port 80, the child processes are
launched by Apache as a less-privileged user. The `User` and `Group` directives are used to set
the privileges of the Apache child processes. The child processes
must be able to read all the content that will be served, but
should have as few privileges beyond that as possible.

`MaxRequestsPerChild`
controls how frequently the server recycles processes by killing
old ones and launching new ones.

[![top](../images/up.gif)](#page-header)

## MaxSpareServers Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum number of idle child server processes |
| [Syntax:](mod__directive-dict.md#Syntax) | `MaxSpareServers number` |
| [Default:](mod__directive-dict.md#Default) | `MaxSpareServers 10` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | prefork |

The `MaxSpareServers` directive sets the
desired maximum number of *idle* child server processes. An
idle process is one which is not handling a request. If there are
more than `MaxSpareServers` idle, then the
parent process will kill off the excess processes.

Tuning of this parameter should only be necessary on very
busy sites. Setting this parameter to a large number is almost
always a bad idea. If you are trying to set the value equal to or lower than
`MinSpareServers`, Apache
will automatically adjust it to `MinSpareServers` `+ 1`.

### See also

- `MinSpareServers`
- `StartServers`

[![top](../images/up.gif)](#page-header)

## MinSpareServers Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Minimum number of idle child server processes |
| [Syntax:](mod__directive-dict.md#Syntax) | `MinSpareServers number` |
| [Default:](mod__directive-dict.md#Default) | `MinSpareServers 5` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | MPM |
| [Module:](mod__directive-dict.md#Module) | prefork |

The `MinSpareServers` directive sets the
desired minimum number of *idle* child server processes. An
idle process is one which is not handling a request. If there are
fewer than `MinSpareServers` idle, then the parent
process creates new children at a maximum rate of 1 per second.

Tuning of this parameter should only be necessary on very
busy sites. Setting this parameter to a large number is almost
always a bad idea.

### See also

- `MaxSpareServers`
- `StartServers`

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/mod/prefork.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/prefork.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/prefork.html "Japanese") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/prefork.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
