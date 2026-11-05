# worker - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/worker.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache MPM worker

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Multi-Processing Module implementing a hybrid multi-threaded multi-process web server |
| [Status:](mod__module-dict.md#Status) | MPM |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | mpm\_worker\_module |
| [Source File:](mod__module-dict.md#SourceFile) | worker.c |

### Summary

This Multi-Processing Module (MPM) implements a hybrid
multi-process multi-threaded server. By using threads to serve
requests, it is able to serve a large number of requests with
fewer system resources than a process-based server. However, it
retains much of the stability of a process-based server by
keeping multiple processes available, each with many threads.

The most important directives used to control this MPM are
`ThreadsPerChild`, which
controls the number of threads deployed by each child process and
`MaxRequestWorkers`, which
controls the maximum total number of threads that may be
launched.

When built as a DSO module, it can be loaded with:

```
LoadModule mpm_worker_module modules/mod_mpm_worker.so
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
- ![](../images/right.gif) [MaxSpareThreads](mod__mpm_common.md#maxsparethreads)
- ![](../images/right.gif) [MinSpareThreads](mod__mpm_common.md#minsparethreads)
- ![](../images/right.gif) [PidFile](mod__mpm_common.md#pidfile)
- ![](../images/right.gif) [ReceiveBufferSize](mod__mpm_common.md#receivebuffersize)
- ![](../images/right.gif) [ScoreBoardFile](mod__mpm_common.md#scoreboardfile)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [ServerLimit](mod__mpm_common.md#serverlimit)
- ![](../images/right.gif) [StartServers](mod__mpm_common.md#startservers)
- ![](../images/right.gif) [ThreadLimit](mod__mpm_common.md#threadlimit)
- ![](../images/right.gif) [ThreadsPerChild](mod__mpm_common.md#threadsperchild)
- ![](../images/right.gif) [ThreadStackSize](mod__mpm_common.md#threadstacksize)
- ![](../images/right.gif) [User](mod__mod_unixd.md#user)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mpm_worker)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mpm_worker)

### See also

- [Multi-Processing Modules (MPMs)](mpm.md)
- [Setting which addresses and ports Apache HTTP Server uses](bind.md)

[![top](../images/up.gif)](#page-header)

## How it Works [¶](#how-it-works "Permanent link")

A single control process (the parent) is responsible for launching
child processes. Each child process creates a fixed number of server
threads as specified in the `ThreadsPerChild` directive, as well
as a listener thread which listens for connections and passes them
to a server thread for processing when they arrive.

Apache HTTP Server always tries to maintain a pool of spare or
idle server threads, which stand ready to serve incoming
requests. In this way, clients do not need to wait for a new
threads or processes to be created before their requests can be
served. The number of processes that will initially launch is
set by the `StartServers`
directive. During operation, the server assesses the total number
of idle threads in all processes, and forks or kills processes to
keep this number within the boundaries specified by `MinSpareThreads` and `MaxSpareThreads`. Since this
process is very self-regulating, it is rarely necessary to modify
these directives from their default values. The maximum number of
clients that may be served simultaneously (i.e., the maximum total
number of threads in all processes) is determined by the
`MaxRequestWorkers` directive.
The maximum number of active child processes is determined by
the `MaxRequestWorkers`
directive divided by the `ThreadsPerChild` directive.

Two directives set hard limits on the number of active child
processes and the number of server threads in a child process,
and can only be changed by fully stopping the server and then
starting it again. `ServerLimit` is a hard limit on the number of active child
processes, and must be greater than or equal to the
`MaxRequestWorkers`
directive divided by the `ThreadsPerChild` directive.
`ThreadLimit` is a hard
limit of the number of server threads, and must be greater than
or equal to the `ThreadsPerChild` directive.

In addition to the set of active child processes, there may
be additional child processes which are terminating, but where at
least one server thread is still handling an existing client
connection. Up to `MaxRequestWorkers` terminating processes
may be present, though the actual number can be expected to be
much smaller. This behavior can be avoided by disabling the
termination of individual child processes, which is achieved using
the following:

- set the value of `MaxConnectionsPerChild` to zero
- set the value of `MaxSpareThreads` to the same value as
  `MaxRequestWorkers`

A typical configuration of the process-thread controls in
the `worker` MPM could look as follows:

```
ServerLimit         16
StartServers         2
MaxRequestWorkers  150
MinSpareThreads     25
MaxSpareThreads     75
ThreadsPerChild     25
```

While the parent process is usually started as `root`
under Unix in order to bind to port 80, the child processes and threads
are launched by the server as a less-privileged user. The `User` and `Group` directives are used to set
the privileges of the Apache HTTP Server child processes. The child processes
must be able to read all the content that will be served, but
should have as few privileges beyond that as possible. In
addition, unless `suexec` is used,
these directives also set the privileges which will be inherited
by CGI scripts.

`MaxConnectionsPerChild`
controls how frequently the server recycles processes by killing
old ones and launching new ones.

This MPM uses the `mpm-accept` mutex to serialize
access to incoming connections when subject to the thundering herd
problem (generally, when there are multiple listening sockets).
The implementation aspects of this mutex can be configured with the
`Mutex` directive. The [performance hints](misc__perf-tuning.md)
documentation has additional information about this mutex.

Available Languages: [de](https://httpd.apache.org/docs/2.4/pt-br/de/mod/worker.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/worker.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/worker.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/worker.html "Japanese") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/worker.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
