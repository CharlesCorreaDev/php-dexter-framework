# mod_proxy_connect - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_proxy_connect.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_proxy_connect.html) to go to the current version of this document.

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

CONNECT is also used, when the server needs to send an HTTPS request
through a forward proxy. In this case the server acts as a CONNECT client.
This functionality is part of `mod_proxy` and
`mod_proxy_connect` is not needed in this case.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Directives

This module provides no
directives.

### See also

- `AllowCONNECT`
- `mod_proxy`

- [Comments](#comments_section)

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_proxy_connect.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_proxy_connect.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
