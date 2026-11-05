# event - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/event.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/event.html) to go to the current version of this document.

# Apache MPM event

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | An experimental variant of the standard `worker` MPM |
| [Status:](mod__module-dict.md#Status) | MPM |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | mpm\_event\_module |
| [Source File:](mod__module-dict.md#SourceFile) | event.c |

### Summary

### Warning

This MPM is experimental, so it may or may not work as
expected.

The `event` Multi-Processing Module (MPM) is
designed to allow more requests to be served simultaneously by
passing off some processing work to supporting threads, freeing up
the main threads to work on new requests. It is based on the
`worker` MPM, which implements a hybrid
multi-process multi-threaded server. Run-time configuration
directives are identical to those provided by
`worker`.

To use the `event` MPM, add
`--with-mpm=event` to the `configure`
script's arguments when building the `httpd`.

### Topics

- ![](../images/down.gif) [How it Works](#how-it-works)
- ![](../images/down.gif) [Requirements](#requirements)

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
- ![](../images/right.gif) [ScoreBoardFile](mod__mpm_common.md#scoreboardfile)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [ServerLimit](mod__mpm_common.md#serverlimit)
- ![](../images/right.gif) [StartServers](mod__mpm_common.md#startservers)
- ![](../images/right.gif) [ThreadLimit](mod__mpm_common.md#threadlimit)
- ![](../images/right.gif) [ThreadsPerChild](mod__mpm_common.md#threadsperchild)
- ![](../images/right.gif) [ThreadStackSize](mod__mpm_common.md#threadstacksize)
- ![](../images/right.gif) [User](mod__mpm_common.md#user)

### See also

- [The worker MPM](mod__worker.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## How it Works

This MPM tries to fix the 'keep alive problem' in HTTP. After a client
completes the first request, the client can keep the connection
open, and send further requests using the same socket. This can
save significant overhead in creating TCP connections. However,
Apache traditionally keeps an entire child process/thread waiting
for data from the client, which brings its own disadvantages. To
solve this problem, this MPM uses a dedicated thread to handle both
the Listening sockets, and all sockets that are in a Keep Alive
state.

The MPM assumes that the underlying `apr_pollset`
implementation is reasonably threadsafe. This enables the MPM to
avoid excessive high level locking, or having to wake up the listener
thread in order to send it a keep-alive socket. This is currently
only compatible with KQueue and EPoll.

[![top](../images/up.gif)](#page-header)

## Requirements

This MPM depends on [APR](glossary.md#apr "see glossary")'s atomic
compare-and-swap operations for thread synchronization. If you are
compiling for an x86 target and you don't need to support 386s, or
you are compiling for a SPARC and you don't need to run on
pre-UltraSPARC chips, add
`--enable-nonportable-atomics=yes` to the
`configure` script's arguments. This will cause
APR to implement atomic operations using efficient opcodes not
available in older CPUs.

This MPM does not perform well on older platforms which lack good
threading, but the requirement for EPoll or KQueue makes this
moot.

- To use this MPM on FreeBSD, FreeBSD 5.3 or higher is recommended.
  However, it is possible to run this MPM on FreeBSD 5.2.1, if you
  use `libkse` (see `man libmap.conf`).
- For NetBSD, at least version 2.0 is recommended.
- For Linux, a 2.6 kernel is recommended. It is also necessary to
  ensure that your version of `glibc` has been compiled
  with support for EPoll.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/event.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
