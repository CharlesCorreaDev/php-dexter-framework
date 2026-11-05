# mod_proxy_fdpass - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_proxy_fdpass.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_proxy\_fdpass

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | fdpass external process support module for `mod_proxy` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_fdpass\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_fdpass.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available for unix in version 2.3 and later |

### Summary

This module *requires* the service of `mod_proxy`. It provides support for the passing the socket of the
client to another process.

`mod_proxy_fdpass` uses the ability of AF\_UNIX domain
sockets to [pass an
open file descriptor](http://www.freebsd.org/cgi/man.cgi?query=recv) to allow another process to finish handling a request.

The module has a `proxy_fdpass_flusher` provider interface,
which allows another module to optionally send the response headers, or even
the start of the response body. The default `flush` provider
disables keep-alive, and sends the response headers, letting the external
process just send a response body.

In order to use another provider, you have to set the `flusher`
parameter in the `ProxyPass` directive.

At this time the only data passed to the external process is the client
socket. To receive a client socket, call recvfrom with an allocated
[`struct cmsghdr`](http://www.kernel.org/doc/man-pages/online/pages/man3/cmsg.3.html). Future versions of this module may include
more data after the client socket, but this is not implemented at this time.

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_proxy_fdpass)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_proxy_fdpass)

### See also

- `mod_proxy`

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_proxy_fdpass.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_proxy_fdpass.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
