# mod_proxy_scgi - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_proxy_scgi.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_proxy_scgi.html) to go to the current version of this document.

# Apache Module mod\_proxy\_scgi

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | SCGI gateway module for `mod_proxy` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_scgi\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_scgi.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.2.14 and later |

### Summary

This module *requires* the service of `mod_proxy`. It provides support for the
[SCGI protocol, version
1](http://python.ca/scgi/protocol.txt).

Thus, in order to get the ability of handling the SCGI protocol,
`mod_proxy` and `mod_proxy_scgi` have to
be present in the server.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Topics

- ![](../images/down.gif) [Examples](#examples)

### Directives

- ![](../images/down.gif) [ProxySCGIInternalRedirect](#proxyscgiinternalredirect)
- ![](../images/down.gif) [ProxySCGISendfile](#proxyscgisendfile)

### See also

- `mod_proxy`
- `mod_proxy_balancer`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Examples

Remember, in order to make the following examples work, you have to
enable `mod_proxy` and `mod_proxy_scgi`.

### Simple gateway

`ProxyPass /scgi-bin/ scgi://localhost:4000/`

The balanced gateway needs `mod_proxy_balancer` in
addition to the already mentioned proxy modules.

### Balanced gateway

`ProxyPass /scgi-bin/ balancer://somecluster/  
<Proxy balancer://somecluster/>  

BalancerMember scgi://localhost:4000/  
BalancerMember scgi://localhost:4001/  
</Proxy>`

[![top](../images/up.gif)](#page-header)

## ProxySCGIInternalRedirect Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable or disable internal redirect responses from the backend |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxySCGIInternalRedirect On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxySCGIInternalRedirect On` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_scgi |

The `ProxySCGIInternalRedirect` enables the backend
to internally redirect the gateway to a different URL. This feature
origins in `mod_cgi`, which internally redirects the
response, if the response status is `OK` (`200`) and
the response contains a `Location` header and its value starts
with a slash (`/`). This value is interpreted as a new local
URL the apache internally redirects to.

`mod_proxy_scgi` does the same as
`mod_cgi` in this regard, except that you can turn off the
feature.

### Example

`ProxySCGIInternalRedirect Off`

[![top](../images/up.gif)](#page-header)

## ProxySCGISendfile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable evaluation of X-Sendfile pseudo response header |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxySCGISendfile On|Off|Headername` |
| [Default:](mod__directive-dict.md#Default) | `ProxySCGISendfile Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_scgi |

The `ProxySCGISendfile` directive enables the
SCGI backend to let files serve directly by the gateway. This is useful
performance purposes -- the httpd can use `sendfile` or other
optimizations, which are not possible if the file comes over the backend
socket.

The `ProxySCGISendfile` argument determines the
gateway behaviour:

`Off`
:   No special handling takes place.

`On`
:   The gateway looks for a backend response header called
    `X-Sendfile` and interprets the value as filename to serve. The
    header is removed from the final response headers. This is equivalent to
    `ProxySCGISendfile X-Sendfile`.

anything else
:   Similar to `On`, but instead of the hardcoded header name
    the argument is applied as header name.

### Example

`# Use the default header (X-Sendfile)  
ProxySCGISendfile On  
  
# Use a different header  
ProxySCGISendfile X-Send-Static`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_proxy_scgi.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_proxy_scgi.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
