# mod_echo - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_echo.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_echo

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | A simple echo server to illustrate protocol modules |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | echo\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_echo.c |

### Summary

This module provides an example protocol module to illustrate the
concept. It provides a simple echo server. Telnet to it and type
stuff, and it will echo it.

### Directives

- ![](../images/down.gif) [ProtocolEcho](#protocolecho)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_echo)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_echo)

[![top](../images/up.gif)](#page-header)

## ProtocolEcho Directive [¶](#protocolecho "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Turn the echo server on or off |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProtocolEcho On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProtocolEcho Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_echo |

The `ProtocolEcho` directive enables or
disables the echo server.

### Example

```
ProtocolEcho On
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_echo.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_echo.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_echo.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_echo.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
