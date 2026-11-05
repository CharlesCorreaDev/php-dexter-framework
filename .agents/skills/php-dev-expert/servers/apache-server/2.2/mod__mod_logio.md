# mod_logio - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_logio.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_logio.html) to go to the current version of this document.

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

This module provides no
directives.

### See also

- `mod_log_config`
- [Apache Log Files](logs.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Custom Log Formats

This modules adds two new logging directives. The characteristics of the
request itself are logged by placing "`%`" directives in
the format string, which are replaced in the log file by the values as
follows:

| Format String | Description |
| --- | --- |
| `%...I` | Bytes received, including request and headers, cannot be zero. |
| `%...O` | Bytes sent, including headers, cannot be zero. |

Usually, the functionality is used like this:

Combined I/O log format:
:   `"%h %l %u %t \"%r\" %>s %b \"%{Referer}i\"
    \"%{User-agent}i\" %I %O"`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_logio.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_logio.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_logio.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/mod_logio.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
