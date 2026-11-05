# mod_version - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_version.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_version.html) to go to the current version of this document.

# Apache Module mod\_version

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Version dependent configuration |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | version\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_version.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.0.56 and later |

### Summary

This module is designed for the use in test suites and large
networks which have to deal with different httpd versions and
different configurations. It provides a new container -- `<IfVersion>`, which
allows a flexible version checking including numeric comparisons and
regular expressions.

### Examples

`<IfVersion 2.1.0>  

# current httpd version is exactly 2.1.0  
</IfVersion>  
  
<IfVersion >= 2.2>  

# use really new features :-)  
</IfVersion>`

See below for further possibilities.

### Directives

- ![](../images/down.gif) [<IfVersion>](#ifversion)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## <IfVersion> Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | contains version dependent configuration |
| [Syntax:](mod__directive-dict.md#Syntax) | `<IfVersion [[!]operator] version> ... </IfVersion>` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | All |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_version |

The `<IfVersion>` section encloses
configuration directives which are executed only if the
`httpd` version
matches the desired criteria. For normal (numeric) comparisons the
version argument has the format
`major[.minor[.patch]]`, e.g.
`2.1.0` or `2.2`. minor and
patch are optional. If these numbers are omitted, they are
assumed to be zero. The following numerical operators are
possible:

| operator | description |
| --- | --- |
| `=` or `==` | httpd version is equal |
| `>` | httpd version is greater than |
| `>=` | httpd version is greater or equal |
| `<` | httpd version is less than |
| `<=` | httpd version is less or equal |

### Example

`<IfVersion >= 2.1>  

# this happens only in versions greater or  
# equal 2.1.0.  
</IfVersion>`

Besides the numerical comparison it is possible to match a
[regular expression](glossary.md#regex "see glossary")
against the httpd version. There are two ways to write it:

| operator | description |
| --- | --- |
| `=` or `==` | version has the form `/regex/` |
| `~` | version has the form `regex` |

### Example

`<IfVersion = /^2.1.[01234]$/>  

# e.g. workaround for buggy versions
</IfVersion>`

In order to reverse the meaning, all operators can be preceded by an
exclamation mark (`!`):

`<IfVersion !~ ^2.1.[01234]$>  

# not for those versions  
</IfVersion>`

If the operator is omitted, it is assumed to be
`=`.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_version.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_version.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_version.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
