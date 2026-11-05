# mod_cern_meta - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_cern_meta.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_cern_meta.html) to go to the current version of this document.

# Apache Module mod\_cern\_meta

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | CERN httpd metafile semantics |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | cern\_meta\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_cern\_meta.c |

### Summary

Emulate the CERN HTTPD Meta file semantics. Meta files are HTTP
headers that can be output in addition to the normal range of
headers for each file accessed. They appear rather like the
Apache .asis files, and are able to provide a crude way of
influencing the Expires: header, as well as providing other
curiosities. There are many ways to manage meta information,
this one was chosen because there is already a large number of
CERN users who can exploit this module.

More information on the [CERN metafile semantics](http://www.w3.org/pub/WWW/Daemon/User/Config/General.html#MetaDir) is available.

### Directives

- ![](../images/down.gif) [MetaDir](#metadir)
- ![](../images/down.gif) [MetaFiles](#metafiles)
- ![](../images/down.gif) [MetaSuffix](#metasuffix)

### See also

- `mod_headers`
- `mod_asis`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## MetaDir Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Name of the directory to find CERN-style meta information files |
| [Syntax:](mod__directive-dict.md#Syntax) | `MetaDir directory` |
| [Default:](mod__directive-dict.md#Default) | `MetaDir .web` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Indexes |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cern\_meta |

Specifies the name of the directory in which Apache can find
meta information files. The directory is usually a 'hidden'
subdirectory of the directory that contains the file being
accessed. Set to "`.`" to look in the same directory
as the file:

`MetaDir .`

Or, to set it to a subdirectory of the directory containing the
files:

`MetaDir .meta`

[![top](../images/up.gif)](#page-header)

## MetaFiles Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Activates CERN meta-file processing |
| [Syntax:](mod__directive-dict.md#Syntax) | `MetaFiles on|off` |
| [Default:](mod__directive-dict.md#Default) | `MetaFiles off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Indexes |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cern\_meta |

Turns on/off Meta file processing on a per-directory basis.

[![top](../images/up.gif)](#page-header)

## MetaSuffix Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File name suffix for the file containg CERN-style meta information |
| [Syntax:](mod__directive-dict.md#Syntax) | `MetaSuffix suffix` |
| [Default:](mod__directive-dict.md#Default) | `MetaSuffix .meta` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Indexes |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_cern\_meta |

Specifies the file name suffix for the file containing the
meta information. For example, the default values for the two
directives will cause a request to
`DOCUMENT_ROOT/somedir/index.html` to look in
`DOCUMENT_ROOT/somedir/.web/index.html.meta` and
will use its contents to generate additional MIME header
information.

### Example:

`MetaSuffix .meta`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_cern_meta.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_cern_meta.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
