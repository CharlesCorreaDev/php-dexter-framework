# mod_heartbeat - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_heartbeat.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_heartbeat

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Sends messages with server status to frontend proxy |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | heartbeat\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_heartbeat |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Summary

`mod_heartbeat` sends multicast messages to a `mod_heartmonitor` listener
that advertises the servers current connection count. Usually, `mod_heartmonitor`
will be running on a proxy server with `mod_lbmethod_heartbeat` loaded, which allows
`ProxyPass` to use the "heartbeat" *lbmethod* inside
of `ProxyPass`.

`mod_heartbeat` itself is loaded on the origin server(s) that serve requests
through the proxy server(s).

To use `mod_heartbeat`,
`mod_status` and `mod_watchdog`
must be either a static modules or, if a dynamic module, must
be loaded before `mod_heartbeat`.

### Topics

- ![](../images/down.gif) [Consuming mod\_heartbeat Output](#consuming)

### Directives

- ![](../images/down.gif) [HeartbeatAddress](#heartbeataddress)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_heartbeat)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_heartbeat)

[![top](../images/up.gif)](#page-header)

## Consuming mod\_heartbeat Output [¶](#consuming "Permanent link")

Every 1 second, this module generates a single multicast UDP
packet, containing the number of busy and idle workers. The
packet is a simple ASCII format, similar to GET query parameters
in HTTP.

### An Example Packet

`v=1&ready=75&busy=0`

Consumers should handle new variables besides busy and ready,
separated by '&', being added in the future.

[![top](../images/up.gif)](#page-header)

## HeartbeatAddress Directive [¶](#heartbeataddress "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Multicast address for heartbeat packets |
| [Syntax:](mod__directive-dict.md#Syntax) | `HeartbeatAddress addr:port` |
| [Default:](mod__directive-dict.md#Default) | `disabled` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_heartbeat |

The `HeartbeatAddress` directive specifies the
multicast address to which `mod_heartbeat` will send
status information. This address will usually correspond to a configured
`HeartbeatListen` on a
frontend proxy system.

```
HeartbeatAddress 239.0.0.1:27999
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_heartbeat.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_heartbeat.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
