# mod_proxy_connect - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_proxy_connect.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_proxy\_connect

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | `mod_proxy` extension for `CONNECT` request handling |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_connect\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_connect.c |

### Summary

This module *requires* the service of `mod_proxy`. It provides support for the `CONNECT`
HTTP method. This method is mainly used to tunnel SSL requests
through proxy servers.

Thus, in order to get the ability of handling `CONNECT`
requests, `mod_proxy` and
`mod_proxy_connect` have to be present in the server.

CONNECT is also used when the server needs to send an HTTPS request
through a forward proxy. In this case the server acts as a CONNECT client.
This functionality is part of `mod_proxy` and
`mod_proxy_connect` is not needed in this case.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Topics

- ![](../images/down.gif) [Request notes](#notes)

### Directives

- ![](../images/down.gif) [AllowCONNECT](#allowconnect)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_proxy_connect)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_proxy_connect)

### See also

- `mod_proxy`

[![top](../images/up.gif)](#page-header)

## Request notes [¶](#notes "Permanent link")

`mod_proxy_connect` creates the following request notes for
logging using the `%{VARNAME}n` format in
`LogFormat` or
`ErrorLogFormat`:

proxy-source-port
:   The local port used for the connection to the backend server.

[![top](../images/up.gif)](#page-header)

## AllowCONNECT Directive [¶](#allowconnect "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Ports that are allowed to `CONNECT` through the proxy |
| [Syntax:](mod__directive-dict.md#Syntax) | `AllowCONNECT port[-port] [port[-port]] ...` |
| [Default:](mod__directive-dict.md#Default) | `AllowCONNECT 443 563` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_connect |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Moved from `mod_proxy` in Apache 2.3.5. Port ranges available since Apache 2.3.7. |

The `AllowCONNECT` directive specifies a list
of port numbers or ranges to which the proxy `CONNECT` method
may connect. Today's browsers use this method when a `https`
connection is requested and proxy tunneling over HTTP is in effect.

By default, only the default https port (`443`) and the
default snews port (`563`) are enabled. Use the
`AllowCONNECT` directive to override this default and
allow connections to the listed ports only.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_proxy_connect.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_proxy_connect.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_proxy_connect.html "Japanese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
