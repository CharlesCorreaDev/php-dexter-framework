# mod_proxy_http - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_proxy_http.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_proxy_http.html) to go to the current version of this document.

# Apache Module mod\_proxy\_http

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | HTTP support module for `mod_proxy` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_http\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_http.c |

### Summary

This module *requires* the service of `mod_proxy`. It provides the features used for
proxying HTTP and HTTPS requests. `mod_proxy_http`
supports HTTP/0.9, HTTP/1.0 and HTTP/1.1. It does *not*
provide any caching abilities. If you want to set up a caching
proxy, you might want to use the additional service of the
`mod_cache` module.

Thus, in order to get the ability of handling HTTP proxy requests,
`mod_proxy` and `mod_proxy_http`
have to be present in the server.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Topics

- ![](../images/down.gif) [Environment Variables](#env)

### Directives

This module provides no
directives.

### See also

- `mod_proxy`
- `mod_proxy_connect`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Environment Variables

In addition to the configuration directives that control the
behaviour of `mod_proxy`, there are a number of
environment variables that control the HTTP protocol
provider. Environment variables below that don't specify specific values
are enabled when set to any value.

proxy-sendextracrlf
:   Causes proxy to send an extra CR-LF newline on the end of a
    request. This is a workaround for a bug in some browsers.

force-proxy-request-1.0
:   Forces the proxy to send requests to the backend as HTTP/1.0
    and disables HTTP/1.1 features.

proxy-nokeepalive
:   Forces the proxy to close the backend connection after
    each request.

proxy-chain-auth
:   If the proxy requires authentication, it will read and
    consume the proxy authentication credentials sent by the client.
    With proxy-chain-auth it will *also* forward
    the credentials to the next proxy in the chain. This may
    be necessary if you have a chain of proxies that share
    authentication information. **Security Warning:**
    Do not set this unless you know you need it, as it forwards
    sensitive information!

proxy-sendcl
:   HTTP/1.0 required all HTTP requests that include a body
    (e.g. POST requests) to include a Content-Length
    header. This environment variable forces the Apache proxy to
    send this header to the backend server, regardless of what the
    Client sent to the proxy. It ensures compatibility when
    proxying for an HTTP/1.0 or unknown backend. However, it
    may require the entire request to be buffered by the proxy,
    so it becomes very inefficient for large requests.

proxy-sendchunks or proxy-sendchunked
:   This is the opposite of proxy-sendcl. It allows
    request bodies to be sent to the backend using chunked transfer
    encoding. This allows the request to be efficiently streamed,
    but requires that the backend server supports HTTP/1.1.

proxy-interim-response
:   This variable takes values `RFC` or
    `Suppress`. Earlier httpd versions would suppress
    HTTP interim (1xx) responses sent from the backend. This is
    technically a violation of the HTTP protocol. In practice,
    if a backend sends an interim response, it may itself be
    extending the protocol in a manner we know nothing about,
    or just broken. So this is now configurable: set
    `proxy-interim-response RFC` to be fully protocol
    compliant, or `proxy-interim-response Suppress`
    to suppress interim responses.

proxy-initial-not-pooled
:   If this variable is set no pooled connection will be reused
    if the client connection is an initial connection. This avoids
    the "proxy: error reading status line from remote server" error message
    caused by the race condition that the backend server closed the
    pooled connection after the connection check by the proxy and
    before data sent by the proxy reached the backend. It has to be
    kept in mind that setting this variable downgrades performance,
    especially with HTTP/1.0 clients.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_proxy_http.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/mod/mod_proxy_http.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_proxy_http.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
