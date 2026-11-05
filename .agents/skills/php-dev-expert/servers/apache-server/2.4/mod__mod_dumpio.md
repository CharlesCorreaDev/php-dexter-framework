# mod_dumpio - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_dumpio.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

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
- ![](../images/down.gif) [DumpIOOutput](#dumpiooutput)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_dumpio)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_dumpio)

[![top](../images/up.gif)](#page-header)

## Enabling dumpio Support [¶](#enable "Permanent link")

To enable the module, it should be compiled and loaded
in to your running Apache configuration. Logging can then
be enabled or disabled separately for input and output via
the below directives. Additionally, `mod_dumpio`
needs to be configured to `LogLevel` `trace7`:

```
LogLevel dumpio:trace7
```

[![top](../images/up.gif)](#page-header)

## DumpIOInput Directive [¶](#dumpioinput "Permanent link")

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

```
DumpIOInput On
```

[![top](../images/up.gif)](#page-header)

## DumpIOOutput Directive [¶](#dumpiooutput "Permanent link")

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

```
DumpIOOutput On
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_dumpio.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_dumpio.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_dumpio.html "Japanese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
