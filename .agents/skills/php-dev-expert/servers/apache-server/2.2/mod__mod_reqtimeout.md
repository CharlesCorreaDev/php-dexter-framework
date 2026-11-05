# mod_reqtimeout - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_reqtimeout.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_reqtimeout.html) to go to the current version of this document.

# Apache Module mod\_reqtimeout

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Set timeout and minimum data rate for receiving requests |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | reqtimeout\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_reqtimeout.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.2.15 and later |

### Topics

- ![](../images/down.gif) [Examples](#examples)

### Directives

- ![](../images/down.gif) [RequestReadTimeout](#requestreadtimeout)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Examples

1. Allow 10 seconds to receive the request including the headers and
   30 seconds for receiving the request body:

   `RequestReadTimeout header=10 body=30`
2. Allow at least 10 seconds to receive the request body.
   If the client sends data, increase the timeout by 1 second for every
   1000 bytes received, with no upper limit for the timeout (exept for
   the limit given indirectly by
   `LimitRequestBody`):

   `RequestReadTimeout body=10,MinRate=1000`
3. Allow at least 10 seconds to receive the request including the headers.
   If the client sends data, increase the timeout by 1 second for every
   500 bytes received. But do not allow more than 30 seconds for the
   request including the headers:

   `RequestReadTimeout header=10-30,MinRate=500`
4. Usually, a server should have both header and body timeouts configured.
   If a common configuration is used for http and https virtual hosts, the
   timeouts should not be set too low:

   `RequestReadTimeout header=20-40,MinRate=500 body=20,MinRate=500`

[![top](../images/up.gif)](#page-header)

## RequestReadTimeout Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set timeout values for receiving request headers and body from client. |
| [Syntax:](mod__directive-dict.md#Syntax) | `RequestReadTimeout [header=timeout[[-maxtimeout],MinRate=rate] [body=timeout[[-maxtimeout],MinRate=rate]` |
| [Default:](mod__directive-dict.md#Default) | `Unset; no limit` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_reqtimeout |

This directive can set various timeouts for receiving the request headers
and the request body from the client. If the client fails to send headers or
body within the configured time, a `408 REQUEST TIME OUT` error
is sent.

For SSL virtual hosts, the header timeout values include the time needed
to do the initial SSL handshake. If the user's browser is configured to
query certificate revocation lists and the CRL server is not reachable, the
initial SSL handshake may take a significant time until the browser gives up
waiting for the CRL. Therefore the header timeout values should not be set
to very low values for SSL virtual hosts.
The body timeout values include the time needed for SSL renegotiation
(if necessary).

When an `AcceptFilter` is in use
(usually the case on Linux and FreeBSD), the socket is not sent to the
server process before at least one byte (or the whole request for
`httpready`) is received. The header timeout configured with
`RequestReadTimeout` is only effective after the server process has
received the socket.

For each of the two timeout types (header or body), there are three ways
to specify the timeout:

- **Fixed timeout value**:  

  `type=timeout`

  The time in seconds allowed for reading all of the request headers or
  body, respectively. A value of 0 means no limit.
- **Timeout value that is increased when data is
  received**:  

  `type=timeout,MinRate=data_rate`

  Same as above, but whenever data is received, the timeout value is
  increased according to the specified minimum data rate (in bytes per
  second).
- **Timeout value that is increased when data is received, with an
  upper bound**:  

  `type=timeout-maxtimeout,MinRate=data_rate`

  Same as above, but the timeout will not be increased above the second
  value of the specified timeout range.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_reqtimeout.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
