# worker - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/worker.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/worker.html) to go to the current version of this document.

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
`MaxClients`, which
controls the maximum total number of threads that may be
launched.

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
- ![](../images/right.gif) [User](mod__mpm_common.md#user)

### See also

- [Setting which addresses and ports Apache
  uses](bind.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## How it Works

A single control process (the parent) is responsible for launching
child processes. Each child process creates a fixed number of server
threads as specified in the `ThreadsPerChild` directive, as well
as a listener thread which listens for connections and passes them
to a server thread for processing when they arrive.

Apache always tries to maintain a pool of spare or
idle server threads, which stand ready to serve incoming
requests. In this way, clients do not need to wait for a new
threads or processes to be created before their requests can be
served. The number of processes that will initially launch is
set by the `StartServers`
directive. During operation, Apache assesses the total number
of idle threads in all processes, and forks or kills processes to
keep this number within the boundaries specified by `MinSpareThreads` and `MaxSpareThreads`. Since this
process is very self-regulating, it is rarely necessary to modify
these directives from their default values. The maximum number of
clients that may be served simultaneously (i.e., the maximum total
number of threads in all processes) is determined by the
`MaxClients` directive.
The maximum number of active child processes is determined by
the `MaxClients`
directive divided by the `ThreadsPerChild` directive.

Two directives set hard limits on the number of active child
processes and the number of server threads in a child process,
and can only be changed by fully stopping the server and then
starting it again. `ServerLimit` is a hard limit on the number of active child
processes, and must be greater than or equal to the
`MaxClients`
directive divided by the `ThreadsPerChild` directive.
`ThreadLimit` is a hard
limit of the number of server threads, and must be greater than
or equal to the `ThreadsPerChild` directive. If
non-default values are specified for these directives, they
should appear before other `worker` directives.

In addition to the set of active child processes, there may
be additional child processes which are terminating, but where at
least one server thread is still handling an existing client
connection. Up to `MaxClients` terminating processes
may be present, though the actual number can be expected to be
much smaller. This behavior can be avoided by disabling the
termination of individual child processes, which is achieved using
the following:

- set the value of `MaxRequestsPerChild` to zero
- set the value of `MaxSpareThreads` to the same value as
  `MaxClients`

A typical configuration of the process-thread controls in
the `worker` MPM could look as follows:

`ServerLimit 16  
StartServers 2  
MaxClients 150  
MinSpareThreads 25  
MaxSpareThreads 75  
ThreadsPerChild 25`

While the parent process is usually started as `root`
under Unix in order to bind to port 80, the child processes and threads
are launched by Apache as a less-privileged user. The `User` and `Group` directives are used to set
the privileges of the Apache child processes. The child processes
must be able to read all the content that will be served, but
should have as few privileges beyond that as possible. In
addition, unless `suexec` is used,
these directives also set the privileges which will be inherited
by CGI scripts.

`MaxRequestsPerChild`
controls how frequently the server recycles processes by killing
old ones and launching new ones.

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/mod/worker.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/worker.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/worker.html "Japanese") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/worker.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
