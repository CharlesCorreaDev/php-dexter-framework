# mod_watchdog - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_watchdog.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_watchdog

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | provides infrastructure for other modules to periodically run tasks |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | watchdog\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_watchdog.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Summary

`mod_watchdog` defines programmatic hooks for other modules to
periodically run tasks. These modules can register handlers for
`mod_watchdog` hooks. Currently, the following modules in the
Apache distribution use this functionality:

- `mod_heartbeat`
- `mod_heartmonitor`
- `mod_md`
- `mod_proxy_hcheck`

To allow a module to use `mod_watchdog` functionality,
`mod_watchdog` itself must be statically linked to the server
core or, if a dynamic module, be loaded before the calling module.

### Directives

- ![](../images/down.gif) [WatchdogInterval](#watchdoginterval)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_watchdog)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_watchdog)

[![top](../images/up.gif)](#page-header)

## WatchdogInterval Directive [¶](#watchdoginterval "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Watchdog interval in seconds |
| [Syntax:](mod__directive-dict.md#Syntax) | `WatchdogInterval time-interval[s]` |
| [Default:](mod__directive-dict.md#Default) | `WatchdogInterval 1` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_watchdog |

Sets the interval at which the watchdog\_step hook runs. Default is to run every
second.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_watchdog.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_watchdog.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
