# mod_ident - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_ident.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_ident

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | RFC 1413 ident lookups |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | ident\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_ident.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module queries an [RFC 1413](https://www.rfc-editor.org/rfc/rfc1413) compatible daemon on a remote host to look up the owner of
a connection.

### Directives

- ![](../images/down.gif) [IdentityCheck](#identitycheck)
- ![](../images/down.gif) [IdentityCheckTimeout](#identitychecktimeout)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_ident)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_ident)

### See also

- `mod_log_config`

[![top](../images/up.gif)](#page-header)

## IdentityCheck Directive [¶](#identitycheck "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables logging of the RFC 1413 identity of the remote user |
| [Syntax:](mod__directive-dict.md#Syntax) | `IdentityCheck On|Off` |
| [Default:](mod__directive-dict.md#Default) | `IdentityCheck Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ident |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Moved out of core in Apache 2.1 |

This directive enables [RFC 1413](https://www.rfc-editor.org/rfc/rfc1413)-compliant logging of the remote user name for each
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

## IdentityCheckTimeout Directive [¶](#identitychecktimeout "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines the timeout duration for ident requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `IdentityCheckTimeout seconds` |
| [Default:](mod__directive-dict.md#Default) | `IdentityCheckTimeout 30` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ident |

This directive specifies the timeout duration of an ident
request. The default value of 30 seconds is recommended by [RFC 1413](https://www.rfc-editor.org/rfc/rfc1413), mainly because
of possible network latency. However, you may want to adjust the
timeout value according to your local network speed.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_ident.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_ident.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_ident.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_ident.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
