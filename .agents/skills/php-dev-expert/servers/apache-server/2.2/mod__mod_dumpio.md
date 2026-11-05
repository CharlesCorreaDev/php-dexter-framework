# mod_dumpio - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_dumpio.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_dumpio.html) to go to the current version of this document.

# Apache Module mod\_dumpio

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Dumps all I/O to error log as desired. |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | dumpio\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_dumpio.c |

### Summary

`mod_dumpio` allows for the logging of
all input received by Apache and/or all output sent by
Apache to be logged (dumped) to the error.log file.

The data logging is done right after SSL decoding (for
input) and right before SSL encoding (for output). As can
be expected, this can produce extreme volumes of data,
and should only be used when debugging problems.

### Topics

- ![](../images/down.gif) [Enabling dumpio Support](#enable)

### Directives

- ![](../images/down.gif) [DumpIOInput](#dumpioinput)
- ![](../images/down.gif) [DumpIOLogLevel](#dumpiologlevel)
- ![](../images/down.gif) [DumpIOOutput](#dumpiooutput)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Enabling dumpio Support

To enable the module, it should be compiled and
loaded in to your running Apache configuration. Logging
can then be enabled or disabled via the below directives.

[![top](../images/up.gif)](#page-header)

## DumpIOInput Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Dump all input data to the error log |
| [Syntax:](mod__directive-dict.md#Syntax) | `DumpIOInput On|Off` |
| [Default:](mod__directive-dict.md#Default) | `DumpIOInput Off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dumpio |
| [Compatibility:](mod__directive-dict.md#Compatibility) | DumpIOInput is only available in Apache 2.1.3 and later. |

Enable dumping of all input.

### Example

`DumpIOInput On`

[![top](../images/up.gif)](#page-header)

## DumpIOLogLevel Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Controls the logging level of the DumpIO output |
| [Syntax:](mod__directive-dict.md#Syntax) | `DumpIOLogLevel level` |
| [Default:](mod__directive-dict.md#Default) | `DumpIOLogLevel debug` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dumpio |
| [Compatibility:](mod__directive-dict.md#Compatibility) | DumpIOLogLevel is only available in Apache 2.2.4 and later. |

Enable dumping of all output at a specific `LogLevel` level.

### Example

`DumpIOLogLevel notice`

### Compatibility

Prior to 2.2.4 `mod_dumpio`
would only dump to the log when `LogLevel` was set to `debug`

[![top](../images/up.gif)](#page-header)

## DumpIOOutput Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Dump all output data to the error log |
| [Syntax:](mod__directive-dict.md#Syntax) | `DumpIOOutput On|Off` |
| [Default:](mod__directive-dict.md#Default) | `DumpIOOutput Off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dumpio |
| [Compatibility:](mod__directive-dict.md#Compatibility) | DumpIOOutput is only available in Apache 2.1.3 and later. |

Enable dumping of all output.

### Example

`DumpIOOutput On`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_dumpio.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_dumpio.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
