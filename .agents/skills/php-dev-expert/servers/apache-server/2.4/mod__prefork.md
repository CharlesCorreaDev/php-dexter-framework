# prefork - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/prefork.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache MPM prefork

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Implements a non-threaded, pre-forking web server |
| [Status:](mod__module-dict.md#Status) | MPM |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | mpm\_prefork\_module |
| [Source File:](mod__module-dict.md#SourceFile) | prefork.c |

### Summary

This Multi-Processing Module (MPM) implements a non-threaded,
pre-forking web server. Each server process may answer incoming
requests, and a parent process manages the size of the server pool.
It is appropriate for sites that need to avoid
threading for compatibility with non-thread-safe libraries. It
is also the best MPM for isolating each request, so that a problem
with a single request will not affect any other.

This MPM is very self-regulating, so it is rarely necessary to
adjust its configuration directives. Most important is that
`MaxRequestWorkers` be big enough
to handle as many simultaneous requests as you expect to receive, but
small enough to assure that there is enough physical RAM for all
processes.

When built as a DSO module, it can be loaded with:

```
LoadModule mpm_prefork_module modules/mod_mpm_prefork.so
```

### Topics

- ![](../images/down.gif) [How it Works](#how-it-works)

### Directives

- ![](../images/right.gif) [CoreDumpDirectory](mod__mpm_common.md#coredumpdirectory)
- ![](../images/right.gif) [EnableExceptionHook](mod__mpm_common.md#enableexceptionhook)
- ![](../images/right.gif) [Group](mod__mod_unixd.md#group)
- ![](../images/right.gif) [Listen](mod__mpm_common.md#listen)
- ![](../images/right.gif) [ListenBacklog](mod__mpm_common.md#listenbacklog)
- ![](../images/right.gif) [MaxConnectionsPerChild](mod__mpm_common.md#maxconnectionsperchild)
- ![](../images/right.gif) [MaxMemFree](mod__mpm_common.md#maxmemfree)
- ![](../images/right.gif) [MaxRequestWorkers](mod__mpm_common.md#maxrequestworkers)
- ![](../images/down.gif) [MaxSpareServers](#maxspareservers)
- ![](../images/down.gif) [MinSpareServers](#minspareservers)
- ![](../images/right.gif) [PidFile](mod__mpm_common.md#pidfile)
- ![](../images/right.gif) [ReceiveBufferSize](mod__mpm_common.md#receivebuffersize)
- ![](../images/right.gif) [ScoreBoardFile](mod__mpm_common.md#scoreboardfile)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [ServerLimit](mod__mpm_common.md#serverlimit)
- ![](../images/right.gif) [StartServers](mod__mpm_common.md#startservers)
- ![](../images/right.gif) [User](mod__mod_unixd.md#user)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mpm_prefork)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mpm_prefork)

### See also

- [Multi-Processing Modules (MPMs)](mpm.md)
- [Setting which addresses and ports Apache HTTP Server
  uses](bind.md)

[![top](../images/up.gif)](#page-header)

## How it Works [¶](#how-it-works "Permanent link")

A single control process is responsible for launching child
processes which listen for connections and serve them when they
arrive. Apache httpd always tries to maintain several spare
or idle server processes, which stand ready to serve incoming
requests. In this way, clients do not need to wait for a new
child processes to be forked before their requests can be
served.

The `StartServers`,
`MinSpareServers`,
`MaxSpareServers`, and
`MaxRequestWorkers` regulate how
the parent process creates children to serve requests. In general,
Apache httpd is very self-regulating, so most sites do not need to
adjust these directives from their default values. Sites which
need to serve more than 256 simultaneous requests may need to
increase `MaxRequestWorkers`,
while sites with limited memory may need to decrease `MaxRequestWorkers` to keep the server from
thrashing (swapping memory to disk and back). More information
about tuning process creation is provided in the [performance hints](misc__perf-tuning.md)
documentation.

While the parent process is usually started as `root`
under Unix in order to bind to port 80, the child processes are
launched by Apache httpd as a less-privileged user. The `User` and `Group` directives are used to set
the privileges of the Apache httpd child processes. The child processes
must be able to read all the content that will be served, but
should have as few privileges beyond that as possible.

`MaxConnectionsPerChild`
controls how frequently the server recycles processes by killing
old ones and launching new ones.

This MPM uses the `mpm-accept` mutex to serialize
access to incoming connections when subject to the thundering herd
problem (generally, when there are multiple listening sockets).
The implementation aspects of this mutex can be configured with the
`Mutex` directive. The [performance hints](misc__perf-tuning.md)
documentation has additional information about this mutex.

[![top](../images/up.gif)](#page-header)

## MaxSpareServers Directive [¶](#maxspareservers "Permanent link")

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
`MinSpareServers`, Apache HTTP Server
will automatically adjust it to `MinSpareServers` `+ 1`.

### See also

- `MinSpareServers`
- `StartServers`
- `MaxSpareThreads`

[![top](../images/up.gif)](#page-header)

## MinSpareServers Directive [¶](#minspareservers "Permanent link")

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
process creates new children: It will spawn one, wait a second, then spawn
two, wait a second, then spawn four, and it will
continue exponentially until it is spawning 32 children per second. It will
stop whenever it satisfies the `MinSpareServers`
setting.

Tuning of this parameter should only be necessary on very
busy sites. Setting this parameter to a large number is almost
always a bad idea.

### See also

- `MaxSpareServers`
- `StartServers`
- `MinSpareThreads`

Available Languages: [de](https://httpd.apache.org/docs/2.4/pt-br/de/mod/prefork.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/prefork.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/prefork.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/prefork.html "Japanese") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/prefork.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
