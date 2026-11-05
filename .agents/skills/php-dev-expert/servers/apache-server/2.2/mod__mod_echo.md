# mod_echo - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_echo.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_echo.html) to go to the current version of this document.

# Apache Module mod\_echo

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | A simple echo server to illustrate protocol modules |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | echo\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_echo.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.0 and later |

### Summary

This module provides an example protocol module to illustrate the
concept. It provides a simple echo server. Telnet to it and type
stuff, and it will echo it.

### Directives

- ![](../images/down.gif) [ProtocolEcho](#protocolecho)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## ProtocolEcho Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Turn the echo server on or off |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProtocolEcho On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProtocolEcho Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_echo |
| [Compatibility:](mod__directive-dict.md#Compatibility) | ProtocolEcho is only available in 2.0 and later. |

The `ProtocolEcho` directive enables or
disables the echo server.

### Example

`ProtocolEcho On`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_echo.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_echo.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_echo.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
