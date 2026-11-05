# mod_reflector - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_reflector.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_reflector

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Reflect a request body as a response via the output filter stack. |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | reflector\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_reflector.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Version 2.3 and later |

### Summary

This module allows request bodies to be reflected back to the
client, in the process passing the request through the output filter
stack. A suitably configured chain of filters can be used to transform
the request into a response. This module can be used to turn an output
filter into an HTTP service.

### Topics

- ![](../images/down.gif) [Examples](#examples)

### Directives

- ![](../images/down.gif) [ReflectorHeader](#reflectorheader)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_reflector)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_reflector)

[![top](../images/up.gif)](#page-header)

## Examples [¶](#examples "Permanent link")

Compression service
:   Pass the request body through the DEFLATE filter to compress the
    body. This request requires a Content-Encoding request header containing
    "gzip" for the filter to return compressed data.

    ```
    <Location "/compress">
        SetHandler reflector
        SetOutputFilter DEFLATE
    </Location>
    ```

Image downsampling service
:   Pass the request body through an image downsampling filter, and reflect
    the results to the caller.

    ```
    <Location "/downsample">
        SetHandler reflector
        SetOutputFilter DOWNSAMPLE
    </Location>
    ```

[![top](../images/up.gif)](#page-header)

## ReflectorHeader Directive [¶](#reflectorheader "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Reflect an input header to the output headers |
| [Syntax:](mod__directive-dict.md#Syntax) | `ReflectorHeader inputheader [outputheader]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_reflector |

This directive controls the reflection of request headers to the response.
The first argument is the name of the request header to copy. If the optional
second argument is specified, it will be used as the name of the response
header, otherwise the original request header name will be used.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_reflector.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_reflector.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
