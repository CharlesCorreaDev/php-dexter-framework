# mpm_winnt - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mpm_winnt.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache MPM winnt

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Multi-Processing Module optimized for Windows NT. |
| [Status:](mod__module-dict.md#Status) | MPM |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | mpm\_winnt\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mpm\_winnt.c |

### Summary

This Multi-Processing Module (MPM) is the default for the
Windows NT operating systems. It uses a single control process
which launches a single child process which in turn creates
threads to handle requests

Capacity is configured using the
`ThreadsPerChild` directive,
which sets the maximum number of concurrent client connections.

By default, this MPM uses advanced Windows APIs for accepting
new client connections. In some configurations, third-party products
may interfere with this implementation, with the following messages
written to the web server log:

`Child: Encountered too many AcceptEx faults accepting client connections.  
winnt_mpm: falling back to 'AcceptFilter none'.`

The MPM falls back to a safer implementation, but some client requests
were not processed correctly. In order to avoid this error, use
`AcceptFilter` with accept filter
`none`.

```
AcceptFilter http none
AcceptFilter https none
```

*In Apache httpd 2.0 and 2.2,
`Win32DisableAcceptEx` was used for this purpose.*

The WinNT MPM differs from the Unix MPMs such as worker and event
in several areas:

- When a child process is exiting due to shutdown, restart, or
  `MaxConnectionsPerChild`,
  active requests in the exiting process have
  `TimeOut` seconds to finish before
  processing is aborted. Alternate types of restart and shutdown are not
  implemented.
- New child processes read the configuration files instead of
  inheriting the configuration from the parent. The behavior will
  be the same as on Unix if the child process is created at startup
  or restart, but if a child process is created because the prior
  one crashed or reached
  `MaxConnectionsPerChild`,
  any pending changes to the configuration will become active in the
  child at that point, and the parent and child will be using a
  different configuration. If planned configuration changes have been
  partially implemented and the current configuration cannot be
  parsed, the replacement child process cannot start up and the server
  will halt. Because of this behavior, configuration files should not
  be changed until the time of a server restart.
- The `monitor` and `fatal_exception` hooks
  are not currently implemented.
- `AcceptFilter` is implemented in the MPM
  and has a different type of control over handling of new connections.
  (Refer to the `AcceptFilter`
  documentation for details.)

### Directives

- ![](../images/right.gif) [AcceptFilter](mod__core.md#acceptfilter)
- ![](../images/right.gif) [CoreDumpDirectory](mod__mpm_common.md#coredumpdirectory)
- ![](../images/right.gif) [Listen](mod__mpm_common.md#listen)
- ![](../images/right.gif) [ListenBacklog](mod__mpm_common.md#listenbacklog)
- ![](../images/right.gif) [MaxConnectionsPerChild](mod__mpm_common.md#maxconnectionsperchild)
- ![](../images/right.gif) [MaxMemFree](mod__mpm_common.md#maxmemfree)
- ![](../images/right.gif) [PidFile](mod__mpm_common.md#pidfile)
- ![](../images/right.gif) [ReceiveBufferSize](mod__mpm_common.md#receivebuffersize)
- ![](../images/right.gif) [ScoreBoardFile](mod__mpm_common.md#scoreboardfile)
- ![](../images/right.gif) [SendBufferSize](mod__mpm_common.md#sendbuffersize)
- ![](../images/right.gif) [ThreadLimit](mod__mpm_common.md#threadlimit)
- ![](../images/right.gif) [ThreadsPerChild](mod__mpm_common.md#threadsperchild)
- ![](../images/right.gif) [ThreadStackSize](mod__mpm_common.md#threadstacksize)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mpm_winnt)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mpm_winnt)

### See also

- [Multi-Processing Modules (MPMs)](mpm.md)
- [Using Apache HTTP Server on Microsoft Windows](platform__windows.md)

Available Languages: [de](https://httpd.apache.org/docs/2.4/pt-br/de/mod/mpm_winnt.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mpm_winnt.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mpm_winnt.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mpm_winnt.html "Japanese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
