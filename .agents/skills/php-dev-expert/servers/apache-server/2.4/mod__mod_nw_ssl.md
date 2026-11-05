# mod_nw_ssl - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_nw_ssl.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

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

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_nw_ssl)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_nw_ssl)

[![top](../images/up.gif)](#page-header)

## NWSSLTrustedCerts Directive [¶](#nwssltrustedcerts "Permanent link")

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

## NWSSLUpgradeable Directive [¶](#nwsslupgradeable "Permanent link")

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

## SecureListen Directive [¶](#securelisten "Permanent link")

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

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_nw_ssl.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_nw_ssl.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
