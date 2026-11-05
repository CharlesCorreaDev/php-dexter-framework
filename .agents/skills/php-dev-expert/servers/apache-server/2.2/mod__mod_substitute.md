# mod_substitute - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_substitute.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_substitute.html) to go to the current version of this document.

# Apache Module mod\_substitute

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Perform search and replace operations on response bodies |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | substitute\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_substitute.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.2.7 and later |

### Summary

`mod_substitute` provides a mechanism to perform
both regular expression and fixed string substitutions on
response bodies.

### Directives

- ![](../images/down.gif) [Substitute](#substitute)
- ![](../images/down.gif) [SubstituteInheritBefore](#substituteinheritbefore)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Substitute Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Pattern to filter the response content |
| [Syntax:](mod__directive-dict.md#Syntax) | `Substitute s/pattern/substitution/[infq]` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_substitute |

The `Substitute` directive specifies a
search and replace pattern to apply to the response body.

The meaning of the pattern can be modified by using any
combination of these flags:

`i`
:   Perform a case-insensitive match.

`n`
:   By default the pattern is treated as a regular expression.
    Using the `n` flag forces the pattern to be treated
    as a fixed string.

`f`
:   The `f` flag causes mod\_substitute to flatten the
    result of a substitution allowing for later substitutions to
    take place on the boundary of this one. This is the default.

`q`
:   The `q` flag causes mod\_substitute to not
    flatten the buckets after each substitution. This can
    result in much faster response and a decrease in memory
    utilization, but should only be used if there is no possibility
    that the result of one substitution will ever match a pattern
    or regex of a subsequent one.

### Example

`<Location />
AddOutputFilterByType SUBSTITUTE text/html  
Substitute s/foo/bar/ni  
</Location>`

If either the pattern or the substitution contain a slash
character then an alternative delimiter should be used:

### Example of using an alternate delimiter

`<Location />
AddOutputFilterByType SUBSTITUTE text/html  
Substitute "s|<BR */?>|<br />|i"
</Location>`

[![top](../images/up.gif)](#page-header)

## SubstituteInheritBefore Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Change the merge order of inherited patterns |
| [Syntax:](mod__directive-dict.md#Syntax) | `SubstituteInheritBefore on|off` |
| [Default:](mod__directive-dict.md#Default) | `SubstituteInheritBefore off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_substitute |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.2.32 and later |

Whether to apply the inherited `Substitute`
patterns first (`on`), or after the ones of the current
context (`off`).
`SubstituteInheritBefore` is itself inherited,
hence contexts that inherit it (those that don't specify their own
`SubstituteInheritBefore` value) will apply the
closest defined merge order.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_substitute.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
