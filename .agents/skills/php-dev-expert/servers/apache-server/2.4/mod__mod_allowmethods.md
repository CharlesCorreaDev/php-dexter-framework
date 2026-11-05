# mod_allowmethods - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_allowmethods.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_allowmethods

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Easily restrict what HTTP methods can be used on the server |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | allowmethods\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_allowmethods.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Summary

This module makes it easy to restrict what HTTP methods can be
used on a server. The most common configuration would be:

```
<Location "/">
   AllowMethods GET POST OPTIONS
</Location>
```

### Directives

- ![](../images/down.gif) [AllowMethods](#allowmethods)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_allowmethods)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_allowmethods)

[![top](../images/up.gif)](#page-header)

## AllowMethods Directive [¶](#allowmethods "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Restrict access to the listed HTTP methods |
| [Syntax:](mod__directive-dict.md#Syntax) | `AllowMethods reset|HTTP-method [HTTP-method]...` |
| [Default:](mod__directive-dict.md#Default) | `AllowMethods reset` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_allowmethods |

The HTTP-methods are case sensitive and are generally, as per
RFC, given in upper case. The GET and HEAD methods are treated as
equivalent. The `reset` keyword can be used to
turn off `mod_allowmethods` in a deeper nested context:

```
<Location "/svn">
   AllowMethods reset
</Location>
```

### Caution

The TRACE method cannot be denied by this module;
use `TraceEnable` instead.

`mod_allowmethods` was written to replace the rather
kludgy implementation of `Limit` and
`LimitExcept`.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_allowmethods.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_allowmethods.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
