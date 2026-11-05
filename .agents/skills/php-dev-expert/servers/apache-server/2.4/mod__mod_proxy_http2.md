# mod_proxy_http2 - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_proxy_http2.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_proxy\_http2

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | HTTP/2 support module for `mod_proxy` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_http2\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_http2.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in httpd 2.4.19 and later |

### Summary

`mod_proxy_http2`
supports HTTP/2 only, it does *not*
provide any downgrades to HTTP/1.1. This means that the backend
needs to support HTTP/2 because HTTP/1.1 will not be used instead.

This module *requires* the service of `mod_proxy`, so in order to get the ability of
handling HTTP/2 proxy requests,
`mod_proxy` and `mod_proxy_http2`
need to be both loaded by the server.

`mod_proxy_http2` works with incoming fronted requests
using HTTP/1.1 or HTTP/2. In both cases, requests proxied
to the same backend are sent over a single TCP connection
whenever possible (namely when the connection can be re-used).

Caveat: there will be no attempt to consolidate multiple HTTP/1.1
frontend requests (configured to be proxied to the same backend)
into HTTP/2 streams belonging to the same HTTP/2 request.
Each HTTP/1.1 frontend request will be proxied to the backend using
a separate HTTP/2 request (trying to re-use the same TCP connection
if possible).

This module relies on [libnghttp2](http://nghttp2.org/)
to provide the core http/2 engine.

### Warning

This module is experimental. Its behaviors, directives, and
defaults are subject to more change from release to
release relative to other standard modules. Users are encouraged to
consult the "CHANGES" file for potential updates.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Topics

- ![](../images/down.gif) [Basic Examples](#examples)
- ![](../images/down.gif) [Request notes](#notes)

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_proxy_http2)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_proxy_http2)

### See also

- `mod_http2`
- `mod_proxy`
- `mod_proxy_connect`

[![top](../images/up.gif)](#page-header)

## Basic Examples [¶](#examples "Permanent link")

The examples below demonstrate how to configure HTTP/2 for
backend connections for a reverse proxy.

### HTTP/2 (TLS)

```
ProxyPass "/app" "h2://app.example.com"
ProxyPassReverse "/app" "https://app.example.com"
```

### HTTP/2 (cleartext)

```
ProxyPass "/app" "h2c://app.example.com"
ProxyPassReverse "/app" "http://app.example.com"
```

The schemes to configure above in
`ProxyPassReverse` for reverse proxying
`h2` (or `h2c`) protocols are the usual
`https` (resp. `http`) as expected/used by
the user agent.

[![top](../images/up.gif)](#page-header)

## Request notes [¶](#notes "Permanent link")

`mod_proxy_http` creates the following request notes for
logging using the `%{VARNAME}n` format in
`LogFormat` or
`ErrorLogFormat`:

proxy-source-port
:   The local port used for the connection to the backend server.

proxy-status
:   The HTTP/2 status received from the backend server.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_proxy_http2.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_proxy_http2.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
