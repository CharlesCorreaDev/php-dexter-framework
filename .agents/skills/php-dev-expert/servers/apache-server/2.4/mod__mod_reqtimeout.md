# mod_reqtimeout - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_reqtimeout.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_reqtimeout

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Set timeout and minimum data rate for receiving requests |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | reqtimeout\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_reqtimeout.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache HTTPD 2.2.15 and later |

### Summary

This module provides a convenient way to set timeouts and minimum data
rates for receiving requests. Should a timeout occur or a data rate be
to low, the corresponding connection will be closed by the server.

This is logged at `LogLevel`
`info`.

If needed, the `LogLevel` directive
can be tweaked to explicitly log it:

```
LogLevel reqtimeout:info
```

### Topics

- ![](../images/down.gif) [Examples](#examples)

### Directives

- ![](../images/down.gif) [RequestReadTimeout](#requestreadtimeout)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_reqtimeout)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_reqtimeout)

[![top](../images/up.gif)](#page-header)

## Examples [¶](#examples "Permanent link")

1. Allow for 5 seconds to complete the TLS handshake, 10 seconds to
   receive the request headers and 30 seconds for receiving the
   request body:

   ```
   RequestReadTimeout handshake=5 header=10 body=30
   ```
2. Allow at least 10 seconds to receive the request body.
   If the client sends data, increase the timeout by 1 second for every
   1000 bytes received, with no upper limit for the timeout (except for
   the limit given indirectly by
   `LimitRequestBody`):

   ```
   RequestReadTimeout body=10,MinRate=1000
   ```
3. Allow at least 10 seconds to receive the request headers.
   If the client sends data, increase the timeout by 1 second for every
   500 bytes received. But do not allow more than 30 seconds for the
   request headers:

   ```
   RequestReadTimeout header=10-30,MinRate=500
   ```
4. Usually, a server should have both header and body timeouts configured.
   If a common configuration is used for http and https virtual hosts, the
   timeouts should not be set too low:

   ```
   RequestReadTimeout header=20-40,MinRate=500 body=20,MinRate=500
   ```

[![top](../images/up.gif)](#page-header)

## RequestReadTimeout Directive [¶](#requestreadtimeout "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set timeout values for completing the TLS handshake, receiving the request headers and/or body from client. |
| [Syntax:](mod__directive-dict.md#Syntax) | `RequestReadTimeout [handshake=timeout[-maxtimeout][,MinRate=rate] [header=timeout[-maxtimeout][,MinRate=rate] [body=timeout[-maxtimeout][,MinRate=rate]` |
| [Default:](mod__directive-dict.md#Default) | `RequestReadTimeout handshake=0 header=20-40,MinRate=500 body=20,MinRate=500` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_reqtimeout |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.2.15 and later; defaulted to disabled in version 2.3.14 and earlier. The `handshake` stage is available since version 2.4.39. |

This directive can set various timeouts for completing the TLS handshake,
receiving the request headers and/or the request body from the client.
If the client fails to complete each of these stages within the configured
time, a `408 REQUEST TIME OUT` error is sent.

For SSL virtual hosts, the `handshake` timeout values is the time
needed to do the initial SSL handshake. If the user's browser is configured to
query certificate revocation lists and the CRL server is not reachable, the
initial SSL handshake may take a significant time until the browser gives up
waiting for the CRL. Therefore the `handshake` timeout should take
this possible overhead into consideration for SSL virtual hosts (if necessary).
The body timeout values include the time needed for SSL renegotiation
(if necessary).

When an `AcceptFilter` is in use
(usually the case on Linux and FreeBSD), the socket is not sent to the
server process before at least one byte (or the whole request for
`httpready`) is received. The handshake and header timeouts
configured with `RequestReadTimeout` are only effective
after the server process has received the socket.

For each of the three timeout stages (handshake, header or body), there are
three ways to specify the timeout:

- **Fixed timeout value**:  

  `stage=timeout`

  The time in seconds allowed for completing the whole stage (handshaking,
  reading all of the request headers or body). A value of 0 means no limit.
- **Disable module for a vhost**:  

  `handshake=0 header=0 body=0`

  This disables `mod_reqtimeout` completely (note that
  `handshake=0` is the default already and could be omitted).
- **Timeout value that is increased when data is
  received**:  

  `stage=timeout,MinRate=data_rate`

  Same as above, but whenever data is received, the timeout value is
  increased according to the specified minimum data rate (in bytes per
  second).
- **Timeout value that is increased when data is received, with an
  upper bound**:  

  `stage=timeout-maxtimeout,MinRate=data_rate`

  Same as above, but the timeout will not be increased above the second
  value of the specified timeout range.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_reqtimeout.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_reqtimeout.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
