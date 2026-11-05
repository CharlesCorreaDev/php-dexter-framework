# Server-Wide Configuration - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/server-wide.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# Server-Wide Configuration

This document explains some of the directives provided by
the `core` server which are used to configure
the basic operations of the server.

- ![](./images/down.gif) [Server Identification](#identification)
- ![](./images/down.gif) [File Locations](#locations)
- ![](./images/down.gif) [Limiting Resource Usage](#resource)
- ![](./images/down.gif) [Implementation Choices](#implementation)

[![top](./images/up.gif)](#page-header)

## Server Identification [¶](#identification "Permanent link")

| Related Modules | Related Directives |
| --- | --- |
|  | - `ServerName` - `ServerAdmin` - `ServerSignature` - `ServerTokens` - `UseCanonicalName` - `UseCanonicalPhysicalPort` |

The `ServerAdmin` and
`ServerTokens` directives
control what information about the server will be presented
in server-generated documents such as error messages. The
`ServerTokens` directive
sets the value of the Server HTTP response header field.

The `ServerName`,
`UseCanonicalName` and
`UseCanonicalPhysicalPort`
directives are used by the server to determine how to construct
self-referential URLs. For example, when a client requests a
directory, but does not include the trailing slash in the
directory name, httpd must redirect the client to the full
name including the trailing slash so that the client will
correctly resolve relative references in the document.

[![top](./images/up.gif)](#page-header)

## File Locations [¶](#locations "Permanent link")

| Related Modules | Related Directives |
| --- | --- |
|  | - `CoreDumpDirectory` - `DocumentRoot` - `ErrorLog` - `Mutex` - `PidFile` - `ScoreBoardFile` - `ServerRoot` |

These directives control the locations of the various files
that httpd needs for proper operation. When the pathname used
does not begin with a slash (/), the files are located relative
to the `ServerRoot`. Be careful
about locating files in paths which are writable by non-root users.
See the [security tips](misc__security_tips.md#serverroot)
documentation for more details.

[![top](./images/up.gif)](#page-header)

## Limiting Resource Usage [¶](#resource "Permanent link")

| Related Modules | Related Directives |
| --- | --- |
|  | - `LimitRequestBody` - `LimitRequestFields` - `LimitRequestFieldsize` - `LimitRequestLine` - `RLimitCPU` - `RLimitMEM` - `RLimitNPROC` - `ThreadStackSize` |

The `LimitRequest`\*
directives are used to place limits on the amount of resources
httpd will use in reading requests from clients. By limiting
these values, some kinds of denial of service attacks can be
mitigated.

The `RLimit`\* directives
are used to limit the amount of resources which can be used by
processes forked off from the httpd children. In particular,
this will control resources used by CGI scripts and SSI exec
commands.

The `ThreadStackSize`
directive is used with some platforms to control the stack size.

[![top](./images/up.gif)](#page-header)

## Implementation Choices [¶](#implementation "Permanent link")

| Related Modules | Related Directives |
| --- | --- |
|  | - `Mutex` |

The `Mutex` directive can be used to change
the underlying implementation used for mutexes, in order to relieve
functional or performance problems with [APR](glossary.md#apr "see glossary")'s
default choice.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/server-wide.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/server-wide.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/server-wide.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/server-wide.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/server-wide.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
