# mod_lbmethod_heartbeat - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_lbmethod_heartbeat.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_lbmethod\_heartbeat

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Heartbeat Traffic Counting load balancer scheduler algorithm for `mod_proxy_balancer` |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | lbmethod\_heartbeat\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_lbmethod\_heartbeat.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.3 and later |

### Summary

`lbmethod=heartbeat` uses the services of `mod_heartmonitor` to balance between origin servers that are providing
heartbeat info via the `mod_heartbeat` module.

This modules load balancing algorithm favors servers with more ready (idle)
capacity over time, but does not select the server with the most ready capacity
every time. Servers that have 0 active clients are penalized, with the
assumption that they are not fully initialized.

### Directives

- ![](../images/down.gif) [HeartbeatStorage](#heartbeatstorage)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_lbmethod_heartbeat)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_lbmethod_heartbeat)

### See also

- `mod_proxy`
- `mod_proxy_balancer`
- `mod_heartbeat`
- `mod_heartmonitor`

[![top](../images/up.gif)](#page-header)

## HeartbeatStorage Directive [¶](#heartbeatstorage "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Path to read heartbeat data |
| [Syntax:](mod__directive-dict.md#Syntax) | `HeartbeatStorage file-path` |
| [Default:](mod__directive-dict.md#Default) | `HeartbeatStorage logs/hb.dat` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_lbmethod\_heartbeat |

The `HeartbeatStorage` directive specifies the
path to read heartbeat data. This flat-file is used only when
`mod_slotmem_shm` is not loaded.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_lbmethod_heartbeat.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_lbmethod_heartbeat.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
