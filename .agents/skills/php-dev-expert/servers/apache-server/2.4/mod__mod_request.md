# mod_request - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_request.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_request

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Filters to handle and make available HTTP request bodies |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | request\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_request.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Directives

- ![](../images/down.gif) [KeptBodySize](#keptbodysize)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_request)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_request)

[![top](../images/up.gif)](#page-header)

## KeptBodySize Directive [¶](#keptbodysize "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Keep the request body instead of discarding it up to the specified maximum size, for potential use by filters such as mod\_include. |
| [Syntax:](mod__directive-dict.md#Syntax) | `KeptBodySize maximum size in bytes` |
| [Default:](mod__directive-dict.md#Default) | `KeptBodySize 0` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_request |

Under normal circumstances, request handlers such as the
default handler for static files will discard the request body
when it is not needed by the request handler. As a result,
filters such as mod\_include are limited to making `GET` requests
only when including other URLs as subrequests, even if the
original request was a `POST` request, as the discarded
request body is no longer available once filter processing is
taking place.

When this directive has a value greater than zero, request
handlers that would otherwise discard request bodies will
instead set the request body aside for use by filters up to
the maximum size specified. In the case of the mod\_include
filter, an attempt to `POST` a request to the static
shtml file will cause any subrequests to be `POST`
requests, instead of `GET` requests as before.

This feature makes it possible to break up complex web pages and
web applications into small individual components, and combine
the components and the surrounding web page structure together
using `mod_include`. The components can take the
form of CGI programs, scripted languages, or URLs reverse proxied
into the URL space from another server using
`mod_proxy`.

Each request set aside has to be set
aside in temporary RAM until the request is complete. As a result,
care should be taken to ensure sufficient RAM is available on the
server to support the intended load. Use of this directive
should be limited to where needed on targeted parts of your
URL space, and with the lowest possible value that is still big
enough to hold a request body.

If the request size sent by the client exceeds the maximum
size allocated by this directive, the server will return
`413 Request Entity Too Large`.

### See also

- [mod\_include](mod__mod_include.md) documentation
- [mod\_auth\_form](mod__mod_auth_form.md) documentation

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_request.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_request.html "Français") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/mod_request.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
