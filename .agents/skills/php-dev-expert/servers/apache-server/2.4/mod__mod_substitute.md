# mod_substitute - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_substitute.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_substitute

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Perform search and replace operations on response bodies |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | substitute\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_substitute.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache HTTP Server 2.2.7 and later |

### Summary

`mod_substitute` provides a mechanism to perform
both regular expression and fixed string substitutions on
response bodies.

### Directives

- ![](../images/down.gif) [Substitute](#substitute)
- ![](../images/down.gif) [SubstituteInheritBefore](#substituteinheritbefore)
- ![](../images/down.gif) [SubstituteMaxLineLength](#substitutemaxlinelength)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_substitute)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_substitute)

[![top](../images/up.gif)](#page-header)

## Substitute Directive [¶](#substitute "Permanent link")

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
:   The `f` flag causes `mod_substitute` to flatten the
    result of a substitution allowing for later substitutions to
    take place on the boundary of this one. This is the default.

`q`
:   The `q` flag causes `mod_substitute` to not
    flatten the buckets after each substitution. This can
    result in much faster response and a decrease in memory
    utilization, but should only be used if there is no possibility
    that the result of one substitution will ever match a pattern
    or regex of a subsequent one.

The substitution may contain literal text and regular
expression backreferences

### Example

```
<Location "/">
    AddOutputFilterByType SUBSTITUTE text/html
    Substitute "s/foo/bar/ni"
</Location>
```

The character which is used to separate (or "delimit") the
various parts of the substitution string is referred to as the
"delimiter", and it is most common to use a slash for this
purpose.

If either the pattern or the substitution contain a slash
character then an alternative delimiter may be used to make the
directive more readable:

### Example of using an alternate delimiter

```
<Location "/">
    AddOutputFilterByType SUBSTITUTE text/html
    Substitute "s|<BR */?>|<br />|i"
</Location>
```

Backreferences can be used in the comparison and in the substitution,
when regular expressions are used, as illustrated in the following example:

### Example of using backreferences and captures

```
<Location "/">
    AddOutputFilterByType SUBSTITUTE text/html
    # "foo=k,bar=k" -> "foo/bar=k"
    Substitute "s|foo=(\w+),bar=\1|foo/bar=$1|"
</Location>
```

A common use scenario for `mod_substitute` is the
situation in which a front-end server proxies requests to a back-end
server which returns HTML with hard-coded embedded URLs that refer
to the back-end server. These URLs don't work for the end-user,
since the back-end server is unreachable.

In this case, `mod_substitute` can be used to rewrite
those URLs into something that will work from the front end:

### Rewriting URLs embedded in proxied content

```
ProxyPass        "/blog/" "http://internal.blog.example.com/"
ProxyPassReverse "/blog/" "http://internal.blog.example.com/"

Substitute "s|http://internal.blog.example.com/|http://www.example.com/blog/|i"
```

`ProxyPassReverse`
modifies any `Location` (redirect) headers that are sent
by the back-end server, and, in this example,
`Substitute` takes care of the rest of the problem by
fixing up the HTML response as well.

[![top](../images/up.gif)](#page-header)

## SubstituteInheritBefore Directive [¶](#substituteinheritbefore "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Change the merge order of inherited patterns |
| [Syntax:](mod__directive-dict.md#Syntax) | `SubstituteInheritBefore on|off` |
| [Default:](mod__directive-dict.md#Default) | `SubstituteInheritBefore off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_substitute |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.4.17 and later |

Whether to apply the inherited `Substitute`
patterns first (`on`), or after the ones of the current
context (`off`).
`SubstituteInheritBefore` is itself inherited,
hence contexts that inherit it (those that don't specify their own
`SubstituteInheritBefore` value) will apply the
closest defined merge order.

[![top](../images/up.gif)](#page-header)

## SubstituteMaxLineLength Directive [¶](#substitutemaxlinelength "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set the maximum line size |
| [Syntax:](mod__directive-dict.md#Syntax) | `SubstituteMaxLineLength bytes(b|B|k|K|m|M|g|G)` |
| [Default:](mod__directive-dict.md#Default) | `SubstituteMaxLineLength 1m` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_substitute |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.4.11 and later |

The maximum line size handled by `mod_substitute`
is limited to restrict memory use. The limit can be configured
using `SubstituteMaxLineLength`.
The value can be given as the number of bytes and can be suffixed
with a single letter `b`, `B`, `k`,
`K`, `m`, `M`, `g`,
`G` to provide the size in bytes, kilobytes, megabytes
or gigabytes respectively.

### Example

```
<Location "/">
    AddOutputFilterByType SUBSTITUTE text/html
    SubstituteMaxLineLength 10m
    Substitute "s/foo/bar/ni"
</Location>
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_substitute.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_substitute.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
