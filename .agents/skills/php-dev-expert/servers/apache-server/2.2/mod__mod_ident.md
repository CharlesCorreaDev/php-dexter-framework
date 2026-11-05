# mod_ident - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_ident.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_ident.html) to go to the current version of this document.

# Apache Module mod\_ident

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | RFC 1413 ident lookups |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | ident\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_ident.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module queries an [RFC 1413](http://www.ietf.org/rfc/rfc1413.txt) compatible daemon on a remote host to look up the owner of
a connection.

### Directives

- ![](../images/down.gif) [IdentityCheck](#identitycheck)
- ![](../images/down.gif) [IdentityCheckTimeout](#identitychecktimeout)

### See also

- `mod_log_config`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## IdentityCheck Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables logging of the RFC 1413 identity of the remote user |
| [Syntax:](mod__directive-dict.md#Syntax) | `IdentityCheck On|Off` |
| [Default:](mod__directive-dict.md#Default) | `IdentityCheck Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ident |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Moved out of core in Apache 2.1 |

This directive enables [RFC 1413](http://www.ietf.org/rfc/rfc1413.txt)-compliant logging of the remote user name for each
connection, where the client machine runs identd or something similar.
This information is logged in the access log using the `%...l`
[format string](mod__mod_log_config.md#formats).

The information should not be trusted in any way except for
rudimentary usage tracking.

Note that this can cause serious latency problems accessing
your server since every request requires one of these lookups
to be performed. When firewalls or proxy servers are involved,
each lookup might possibly fail and add a latency duration as
defined by the `IdentityCheckTimeout` directive to each hit. So in
general this is not very useful on public servers accessible from
the Internet.

[![top](../images/up.gif)](#page-header)

## IdentityCheckTimeout Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines the timeout duration for ident requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `IdentityCheckTimeout seconds` |
| [Default:](mod__directive-dict.md#Default) | `IdentityCheckTimeout 30` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ident |

This directive specifies the timeout duration of an ident
request. The default value of 30 seconds is recommended by [RFC 1413](http://www.ietf.org/rfc/rfc1413.txt), mainly because
of possible network latency. However, you may want to adjust the
timeout value according to your local network speed.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_ident.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_ident.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_ident.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
