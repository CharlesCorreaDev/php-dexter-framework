# mod_nw_ssl - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_nw_ssl.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_nw_ssl.html) to go to the current version of this document.

# Apache Module mod\_nw\_ssl

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Enable SSL encryption for NetWare |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | nwssl\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_nw\_ssl.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | NetWare only |

### Summary

This module enables SSL encryption for a specified port. It
takes advantage of the SSL encryption functionality that is
built into the NetWare operating system.

### Directives

- ![](../images/down.gif) [NWSSLTrustedCerts](#nwssltrustedcerts)
- ![](../images/down.gif) [NWSSLUpgradeable](#nwsslupgradeable)
- ![](../images/down.gif) [SecureListen](#securelisten)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## NWSSLTrustedCerts Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | List of additional client certificates |
| [Syntax:](mod__directive-dict.md#Syntax) | `NWSSLTrustedCerts filename [filename] ...` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_nw\_ssl |

Specifies a list of client certificate files (DER format)
that are used when creating a proxied SSL connection. Each
client certificate used by a server must be listed separately
in its own `.der` file.

[![top](../images/up.gif)](#page-header)

## NWSSLUpgradeable Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Allows a connection to be upgraded to an SSL connection upon request |
| [Syntax:](mod__directive-dict.md#Syntax) | `NWSSLUpgradeable [IP-address:]portnumber` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_nw\_ssl |

Allow a connection that was created on the specified address
and/or port to be upgraded to an SSL connection upon request from
the client. The address and/or port must have already be defined
previously with a `Listen`
directive.

[![top](../images/up.gif)](#page-header)

## SecureListen Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables SSL encryption for the specified port |
| [Syntax:](mod__directive-dict.md#Syntax) | `SecureListen [IP-address:]portnumber Certificate-Name [MUTUAL]` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_nw\_ssl |

Specifies the port and the eDirectory based certificate name
that will be used to enable SSL encryption. An optional third
parameter also enables mutual authentication.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_nw_ssl.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
