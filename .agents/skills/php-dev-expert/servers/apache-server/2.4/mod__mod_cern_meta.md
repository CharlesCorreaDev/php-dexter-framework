# mod_cern_meta - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_cern_meta.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_cern\_meta

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | CERN httpd metafile semantics |
| [Status:](mod__module-dict.md#Status) | Deprecated |
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

More information on the [CERN metafile semantics](https://www.w3.org/Daemon/User/Config/General.html#MetaDir) is available.

### Directives

- ![](../images/down.gif) [MetaDir](#metadir)
- ![](../images/down.gif) [MetaFiles](#metafiles)
- ![](../images/down.gif) [MetaSuffix](#metasuffix)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_cern_meta)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_cern_meta)

### See also

- `mod_headers`
- `mod_asis`

[![top](../images/up.gif)](#page-header)

## MetaDir Directive [¶](#metadir "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Name of the directory to find CERN-style meta information files |
| [Syntax:](mod__directive-dict.md#Syntax) | `MetaDir directory` |
| [Default:](mod__directive-dict.md#Default) | `MetaDir .web` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Indexes |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_cern\_meta |

Specifies the name of the directory in which Apache can find
meta information files. The directory is usually a 'hidden'
subdirectory of the directory that contains the file being
accessed. Set to "`.`" to look in the same directory
as the file:

```
MetaDir .
```

Or, to set it to a subdirectory of the directory containing the
files:

```
MetaDir .meta
```

[![top](../images/up.gif)](#page-header)

## MetaFiles Directive [¶](#metafiles "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Activates CERN meta-file processing |
| [Syntax:](mod__directive-dict.md#Syntax) | `MetaFiles on|off` |
| [Default:](mod__directive-dict.md#Default) | `MetaFiles off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Indexes |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_cern\_meta |

Turns on/off Meta file processing on a per-directory basis.

[![top](../images/up.gif)](#page-header)

## MetaSuffix Directive [¶](#metasuffix "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File name suffix for the file containing CERN-style meta information |
| [Syntax:](mod__directive-dict.md#Syntax) | `MetaSuffix suffix` |
| [Default:](mod__directive-dict.md#Default) | `MetaSuffix .meta` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Indexes |
| [Status:](mod__directive-dict.md#Status) | Deprecated |
| [Module:](mod__directive-dict.md#Module) | mod\_cern\_meta |

Specifies the file name suffix for the file containing the
meta information. For example, the default values for the two
directives will cause a request to
`DOCUMENT_ROOT/somedir/index.html` to look in
`DOCUMENT_ROOT/somedir/.web/index.html.meta` and
will use its contents to generate additional MIME header
information.

### Example:

```
MetaSuffix .meta
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_cern_meta.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_cern_meta.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_cern_meta.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
