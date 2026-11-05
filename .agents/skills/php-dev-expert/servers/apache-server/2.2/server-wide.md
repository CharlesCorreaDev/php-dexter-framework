# Server-Wide Configuration - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/server-wide.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/server-wide.html) to go to the current version of this document.

# Server-Wide Configuration

This document explains some of the directives provided by
the `core` server which are used to configure
the basic operations of the server.

- ![](./images/down.gif) [Server Identification](#identification)
- ![](./images/down.gif) [File Locations](#locations)
- ![](./images/down.gif) [Limiting Resource Usage](#resource)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## Server Identification

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
directory name, Apache must redirect the client to the full
name including the trailing slash so that the client will
correctly resolve relative references in the document.

[![top](./images/up.gif)](#page-header)

## File Locations

| Related Modules | Related Directives |
| --- | --- |
|  | - `CoreDumpDirectory` - `DocumentRoot` - `ErrorLog` - `LockFile` - `PidFile` - `ScoreBoardFile` - `ServerRoot` |

These directives control the locations of the various files
that Apache needs for proper operation. When the pathname used
does not begin with a slash (/), the files are located relative
to the `ServerRoot`. Be careful
about locating files in paths which are writable by non-root users.
See the [security tips](misc__security_tips.md#serverroot)
documentation for more details.

[![top](./images/up.gif)](#page-header)

## Limiting Resource Usage

| Related Modules | Related Directives |
| --- | --- |
|  | - `LimitRequestBody` - `LimitRequestFields` - `LimitRequestFieldsize` - `LimitRequestLine` - `RLimitCPU` - `RLimitMEM` - `RLimitNPROC` - `ThreadStackSize` |

The `LimitRequest`\*
directives are used to place limits on the amount of resources
Apache will use in reading requests from clients. By limiting
these values, some kinds of denial of service attacks can be
mitigated.

The `RLimit`\* directives
are used to limit the amount of resources which can be used by
processes forked off from the Apache children. In particular,
this will control resources used by CGI scripts and SSI exec
commands.

The `ThreadStackSize`
directive is used with some platforms to control the stack size.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/server-wide.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/server-wide.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/server-wide.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/server-wide.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
