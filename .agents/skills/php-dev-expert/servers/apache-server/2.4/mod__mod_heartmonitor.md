# mod_heartmonitor - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_heartmonitor.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_heartmonitor

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Centralized monitor for mod\_heartbeat origin servers |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | heartmonitor\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_heartmonitor.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Summary

`mod_heartmonitor` listens for server status messages generated
by `mod_heartbeat` enabled origin servers and makes their status
available to `mod_lbmethod_heartbeat`. This allows
`ProxyPass` to use the "heartbeat"
*lbmethod* inside of `ProxyPass`.

This module uses the services of `mod_slotmem_shm` when
available instead of flat-file storage. No configuration is required to
use `mod_slotmem_shm`.

To use `mod_heartmonitor`,
`mod_status` and `mod_watchdog`
must be either a static modules or, if a dynamic module, it must
be loaded before `mod_heartmonitor`.

### Directives

- ![](../images/down.gif) [HeartbeatListen](#heartbeatlisten)
- ![](../images/down.gif) [HeartbeatMaxServers](#heartbeatmaxservers)
- ![](../images/down.gif) [HeartbeatStorage](#heartbeatstorage)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_heartmonitor)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_heartmonitor)

[![top](../images/up.gif)](#page-header)

## HeartbeatListen Directive [¶](#heartbeatlisten "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | multicast address to listen for incoming heartbeat requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `HeartbeatListen addr:port` |
| [Default:](mod__directive-dict.md#Default) | `disabled` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_heartmonitor |

The `HeartbeatListen` directive specifies the
multicast address on which the server will listen for status information from
`mod_heartbeat`-enabled servers. This
address will usually correspond to a configured `HeartbeatAddress` on an origin server.

```
HeartbeatListen 239.0.0.1:27999
```

This module is inactive until this directive is used.

[![top](../images/up.gif)](#page-header)

## HeartbeatMaxServers Directive [¶](#heartbeatmaxservers "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specifies the maximum number of servers that will be sending heartbeat requests to this server |
| [Syntax:](mod__directive-dict.md#Syntax) | `HeartbeatMaxServers number-of-servers` |
| [Default:](mod__directive-dict.md#Default) | `HeartbeatMaxServers 10` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_heartmonitor |
| [Compatibility:](mod__directive-dict.md#Compatibility) | The value of 0 is accepted only in 2.4.55 and above |

The `HeartbeatMaxServers` directive specifies the
maximum number of servers that will be sending requests to this monitor
server. It is used to control the size of the shared memory allocated
to store the heartbeat info when `mod_slotmem_shm` is in use.

Set this to `0` to use flat-file storage instead
of shared memory (i.e., without loading
`mod_slotmem_shm`). When using shared memory,
the value must be 10 or greater.

[![top](../images/up.gif)](#page-header)

## HeartbeatStorage Directive [¶](#heartbeatstorage "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Path to store heartbeat data when using flat-file storage |
| [Syntax:](mod__directive-dict.md#Syntax) | `HeartbeatStorage file-path` |
| [Default:](mod__directive-dict.md#Default) | `HeartbeatStorage logs/hb.dat` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_heartmonitor |

The `HeartbeatStorage` directive specifies the
path to store heartbeat data. This flat-file is used only when
`mod_slotmem_shm` is not loaded and
`HeartbeatMaxServers` is set to 0.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_heartmonitor.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_heartmonitor.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
