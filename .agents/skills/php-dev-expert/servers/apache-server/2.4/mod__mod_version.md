# mod_version - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_version.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_version

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Version dependent configuration |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | version\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_version.c |

### Summary

This module is designed for the use in test suites and large
networks which have to deal with different httpd versions and
different configurations. It provides a new container -- `<IfVersion>`, which
allows a flexible version checking including numeric comparisons and
regular expressions.

### Examples

```
<IfVersion 2.4.2>
    # current httpd version is exactly 2.4.2
</IfVersion>

<IfVersion >= 2.5>
    # use really new features :-)
</IfVersion>
```

See below for further possibilities.

### Directives

- ![](../images/down.gif) [<IfVersion>](#ifversion)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_version)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_version)

[![top](../images/up.gif)](#page-header)

## <IfVersion> Directive [¶](#ifversion "Permanent link")

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

```
<IfVersion >= 2.3>
    # this happens only in versions greater or
    # equal 2.3.0.
</IfVersion>
```

Besides the numerical comparison it is possible to match a
[regular expression](glossary.md#regex "see glossary")
against the httpd version. There are two ways to write it:

| operator | description |
| --- | --- |
| `=` or `==` | version has the form `/regex/` |
| `~` | version has the form `regex` |

### Example

```
<IfVersion = /^2.4.[01234]$/>
    # e.g. workaround for buggy versions
</IfVersion>
```

In order to reverse the meaning, all operators can be preceded by an
exclamation mark (`!`):

```
<IfVersion !~ ^2.4.[01234]$>
    # not for those versions
</IfVersion>
```

If the operator is omitted, it is assumed to be
`=`.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_version.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_version.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_version.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_version.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
