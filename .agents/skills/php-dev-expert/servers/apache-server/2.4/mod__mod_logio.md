# mod_logio - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_logio.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_logio

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Logging of input and output bytes per request |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | logio\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_logio.c |

### Summary

This module provides the logging of input and output number of
bytes received/sent per request. The numbers reflect the actual bytes
as received on the network, which then takes into account the
headers and bodies of requests and responses. The counting is done
before SSL/TLS on input and after SSL/TLS on output, so the numbers
will correctly reflect any changes made by encryption.

This module requires `mod_log_config`.

When KeepAlive connections are used with SSL, the overhead of the SSL
handshake is reflected in the byte count of the first request on the
connection. When per-directory SSL renegotiation occurs, the bytes are associated
with the request that triggered the renegotiation.

### Topics

- ![](../images/down.gif) [Custom Log Formats](#formats)

### Directives

- ![](../images/down.gif) [LogIOTrackTTFB](#logiotrackttfb)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_logio)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_logio)

### See also

- `mod_log_config`
- [Apache Log Files](logs.md)

[![top](../images/up.gif)](#page-header)

## Custom Log Formats [¶](#formats "Permanent link")

This module adds three new logging directives. The characteristics of the
request itself are logged by placing "`%`" directives in
the format string, which are replaced in the log file by the values as
follows:

| Format String | Description |
| --- | --- |
| `%I` | Bytes received, including request and headers, cannot be zero. |
| `%O` | Bytes sent, including headers. May be zero in rare cases such as when a request is aborted before a response is sent. |
| `%S` | Bytes transferred (received and sent), including request and headers, cannot be zero. This is the combination of %I and %O.  Available in Apache 2.4.7 and later |
| `%^FB` | Delay in microseconds between when the request arrived and the first byte of the response headers are written. Only available if `LogIOTrackTTFB` is set to ON.  Available in Apache 2.4.13 and later |

Usually, the functionality is used like this:

Combined I/O log format:
:   `"%h %l %u %t \"%r\" %>s %b \"%{Referer}i\"
    \"%{User-agent}i\" %I %O"`

[![top](../images/up.gif)](#page-header)

## LogIOTrackTTFB Directive [¶](#logiotrackttfb "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable tracking of time to first byte (TTFB) |
| [Syntax:](mod__directive-dict.md#Syntax) | `LogIOTrackTTFB ON|OFF` |
| [Default:](mod__directive-dict.md#Default) | `LogIOTrackTTFB OFF` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | All |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_logio |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Apache HTTP Server 2.4.13 and later |

This directive configures whether this module tracks the delay
between the request being read and the first byte of the response
headers being written. The resulting value may be logged with the
`%^FB` format.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_logio.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_logio.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_logio.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_logio.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/mod_logio.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
