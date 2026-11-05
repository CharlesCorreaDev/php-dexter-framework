# mod_proxy_html - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_proxy_html.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_proxy\_html

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Rewrite HTML links in to ensure they are addressable from Clients' networks in a proxy context. |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_html\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_html.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Version 2.4 and later |

### Summary

This module provides an output filter to rewrite HTML links in a
proxy situation, to ensure that links work for users outside the proxy.
It serves the same purpose as Apache's `ProxyPassReverse` directive does
for HTTP headers, and is an essential component of a reverse proxy.

For example, if a company has an application server at
`appserver.example.com` that is only visible from within
the company's internal network, and a public webserver
`www.example.com`, they may wish to provide a gateway to the
application server at `http://www.example.com/appserver/`.
When the application server links to itself, those links need to be
rewritten to work through the gateway. `mod_proxy_html` serves to rewrite
`<a href="http://appserver.example.com/foo/bar.html">foobar</a>` to
`<a href="http://www.example.com/appserver/foo/bar.html">foobar</a>`
making it accessible from outside.

mod\_proxy\_html was originally developed at WebÞing, whose
extensive [documentation](http://apache.webthing.com/mod_proxy_html/) may be useful to users.

### Directives

- ![](../images/down.gif) [ProxyHTMLBufSize](#proxyhtmlbufsize)
- ![](../images/down.gif) [ProxyHTMLCharsetOut](#proxyhtmlcharsetout)
- ![](../images/down.gif) [ProxyHTMLDocType](#proxyhtmldoctype)
- ![](../images/down.gif) [ProxyHTMLEnable](#proxyhtmlenable)
- ![](../images/down.gif) [ProxyHTMLEvents](#proxyhtmlevents)
- ![](../images/down.gif) [ProxyHTMLExtended](#proxyhtmlextended)
- ![](../images/down.gif) [ProxyHTMLFixups](#proxyhtmlfixups)
- ![](../images/down.gif) [ProxyHTMLInterp](#proxyhtmlinterp)
- ![](../images/down.gif) [ProxyHTMLLinks](#proxyhtmllinks)
- ![](../images/down.gif) [ProxyHTMLMeta](#proxyhtmlmeta)
- ![](../images/down.gif) [ProxyHTMLStripComments](#proxyhtmlstripcomments)
- ![](../images/down.gif) [ProxyHTMLURLMap](#proxyhtmlurlmap)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_proxy_html)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_proxy_html)

[![top](../images/up.gif)](#page-header)

## ProxyHTMLBufSize Directive [¶](#proxyhtmlbufsize "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the buffer size increment for buffering inline scripts and stylesheets. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLBufSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `ProxyHTMLBufSize 8192` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party for earlier 2.x versions |

In order to parse non-HTML content (stylesheets and scripts) embedded
in HTML documents, `mod_proxy_html`
has to read the entire script or stylesheet into a buffer. This buffer will
be expanded as necessary to hold the largest script or stylesheet in a page,
in increments of bytes as set by this directive.

The default is 8192, and will work well for almost all pages. However,
if you know you're proxying pages containing stylesheets and/or
scripts bigger than 8K (that is, for a single script or stylesheet,
NOT in total), it will be more efficient to set a larger buffer
size and avoid the need to resize the buffer dynamically during a request.

[![top](../images/up.gif)](#page-header)

## ProxyHTMLCharsetOut Directive [¶](#proxyhtmlcharsetout "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify a charset for mod\_proxy\_html output. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLCharsetOut Charset | *` |
| [Default:](mod__directive-dict.md#Default) | `ProxyHTMLCharsetOut UTF-8` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party for earlier 2.x versions |

This selects an encoding for mod\_proxy\_html output. It should not
normally be used, as any change from the default `UTF-8`
(Unicode - as used internally by libxml2) will impose an additional
processing overhead. The special token `ProxyHTMLCharsetOut *`
will generate output using the same encoding as the input.

Note that this relies on `mod_xml2enc` being loaded.

[![top](../images/up.gif)](#page-header)

## ProxyHTMLDocType Directive [¶](#proxyhtmldoctype "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets an HTML or XHTML document type declaration. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLDocType HTML|XHTML [Legacy] OR  ProxyHTMLDocType fpi [SGML|XML]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party for earlier 2.x versions |

In the first form, documents will be declared as HTML 4.01 or XHTML 1.0
according to the option selected. This option also determines whether
HTML or XHTML syntax is used for output. Note that the format of the
documents coming from the backend server is immaterial: the parser will
deal with it automatically. If the optional second argument is set to
`Legacy`, documents will be declared "Transitional", an option that may
be necessary if you are proxying pre-1998 content or working with defective
authoring/publishing tools.

In the second form, it will insert your own FPI. The optional second
argument determines whether SGML/HTML or XML/XHTML syntax will be used.

The default is changed to omitting any FPI,
on the grounds that no FPI is better than a bogus one. If your backend
generates decent HTML or XHTML, set it accordingly.

If the first form is used, mod\_proxy\_html
will also clean up the HTML to the specified standard. It cannot
fix every error, but it will strip out bogus elements and attributes.
It will also optionally log other errors at `LogLevel` Debug.

[![top](../images/up.gif)](#page-header)

## ProxyHTMLEnable Directive [¶](#proxyhtmlenable "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Turns the proxy\_html filter on or off. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLEnable On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyHTMLEnable Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party module for earlier 2.x versions. |

A simple switch to enable or disable the proxy\_html filter.
If `mod_xml2enc` is loaded it will also automatically
set up internationalisation support.

Note that the proxy\_html filter will only act on HTML data
(Content-Type text/html or application/xhtml+xml) and when the
data are proxied. You can override this (at your own risk) by
setting the PROXY\_HTML\_FORCE environment variable.

[![top](../images/up.gif)](#page-header)

## ProxyHTMLEvents Directive [¶](#proxyhtmlevents "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify attributes to treat as scripting events. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLEvents attribute [attribute ...]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party for earlier 2.x versions |

Specifies one or more attributes to treat as scripting events and
apply `ProxyHTMLURLMap`s to where enabled.
You can specify any number of attributes in one or more
`ProxyHTMLEvents` directives.

### Requires ProxyHTMLExtended

Scripting events are only processed when
`ProxyHTMLExtended` is set to
On. Without it, event attributes are passed through unmodified
even if listed in `ProxyHTMLEvents`.

Normally you'll set this globally. If you set `ProxyHTMLEvents` in more than
one scope so that one overrides the other, you'll need to specify a complete
set in each of those scopes.

A default configuration is supplied in proxy-html.conf
and defines the events in standard HTML 4 and XHTML 1.

[![top](../images/up.gif)](#page-header)

## ProxyHTMLExtended Directive [¶](#proxyhtmlextended "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines whether to fix links in inline scripts, stylesheets, and scripting events. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLExtended On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyHTMLExtended Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party for earlier 2.x versions |

Set to `Off`, HTML links are rewritten according to the
`ProxyHTMLURLMap` directives, but links appearing
in Javascript and CSS are ignored.

Set to `On`, all scripting events (as determined by
`ProxyHTMLEvents`) and embedded scripts or
stylesheets are also processed by the `ProxyHTMLURLMap`
rules, according to the flags set for each rule. Since this requires more
parsing, performance will be best if you only enable it when strictly necessary.

You'll also need to take care over patterns matched, since the parser has no
knowledge of what is a URL within an embedded script or stylesheet.
In particular, extended matching of `/` is likely to lead to
false matches.

[![top](../images/up.gif)](#page-header)

## ProxyHTMLFixups Directive [¶](#proxyhtmlfixups "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Fixes for simple HTML errors. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLFixups [lowercase] [dospath] [reset]` |
| [Default:](mod__directive-dict.md#Default) | `ProxyHTMLFixups none` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party for earlier 2.x versions |

This directive takes one to three arguments as follows:

- `lowercase` Urls are rewritten to lowercase
- `dospath` Backslashes in URLs are rewritten to forward slashes.
- `reset` Unset any options set at a higher level in the configuration.

Take care when using these. The fixes will correct certain authoring
mistakes, but risk also erroneously fixing links that were correct to start with.
Only use them if you know you have a broken backend server.

[![top](../images/up.gif)](#page-header)

## ProxyHTMLInterp Directive [¶](#proxyhtmlinterp "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables per-request interpolation of `ProxyHTMLURLMap` rules. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLInterp On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyHTMLInterp Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party module for earlier 2.x versions |

This enables per-request interpolation in
`ProxyHTMLURLMap` to- and from- patterns.

If interpolation is not enabled, all rules are pre-compiled at startup.
With interpolation, they must be re-compiled for every request, which
implies an extra processing overhead. It should therefore be
enabled only when necessary.

[![top](../images/up.gif)](#page-header)

## ProxyHTMLLinks Directive [¶](#proxyhtmllinks "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify HTML elements that have URL attributes to be rewritten. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLLinks element attribute [attribute2 ...]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party for earlier 2.x versions |

Specifies elements that have URL attributes that should be rewritten
using standard `ProxyHTMLURLMap`s.
You will need one `ProxyHTMLLinks` directive per element,
but it can have any number of attributes.

Normally you'll set this globally. If you set `ProxyHTMLLinks` in more than
one scope so that one overrides the other, you'll need to specify a complete
set in each of those scopes.

A default configuration is supplied in proxy-html.conf
and defines the HTML links for standard HTML 4 and XHTML 1.

### Examples from proxy-html.conf

```
ProxyHTMLLinks  a          href
ProxyHTMLLinks  area       href
ProxyHTMLLinks  link       href
ProxyHTMLLinks  img        src longdesc usemap
ProxyHTMLLinks  object     classid codebase data usemap
ProxyHTMLLinks  q          cite
ProxyHTMLLinks  blockquote cite
ProxyHTMLLinks  ins        cite
ProxyHTMLLinks  del        cite
ProxyHTMLLinks  form       action
ProxyHTMLLinks  input      src usemap
ProxyHTMLLinks  head       profile
ProxyHTMLLinks  base       href
ProxyHTMLLinks  script     src for
```

[![top](../images/up.gif)](#page-header)

## ProxyHTMLMeta Directive [¶](#proxyhtmlmeta "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Turns on or off extra pre-parsing of metadata in HTML `<head>` sections. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLMeta On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyHTMLMeta Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party module for earlier 2.x versions. |

This turns on or off pre-parsing of metadata in HTML
`<head>` sections.

If not required, turning ProxyHTMLMeta Off will give a small
performance boost by skipping this parse step. However, it
is sometimes necessary for internationalisation to work correctly.

`ProxyHTMLMeta` has two effects. Firstly and most importantly
it enables detection of character encodings declared in the form

```
<meta http-equiv="Content-Type" content="text/html;charset=foo">
```

or, in the case of an XHTML document, an XML declaration.
It is NOT required if the charset is declared in a real HTTP header
(which is always preferable) from the backend server, nor if the
document is utf-8 (unicode) or a subset such as ASCII.
You may also be able to dispense with it where documents use a
default declared using `xml2EncDefault`, but that risks propagating an
incorrect declaration. A `ProxyHTMLCharsetOut`
can remove that risk, but is likely to be a bigger processing
overhead than enabling ProxyHTMLMeta.

The other effect of enabling `ProxyHTMLMeta` is to parse all
`<meta http-equiv=...>` declarations and convert
them to real HTTP headers, in keeping with the original purpose
of this form of the HTML <meta> element.

### Warning

Because ProxyHTMLMeta promotes **all**
`http-equiv` elements to HTTP headers, it is important that you
only enable it in cases where you trust the HTML content as much as you
trust the upstream server. If the HTML is controlled by bad actors, it
will be possible for them to inject arbitrary, possibly malicious, HTTP
headers into your server's responses.

[![top](../images/up.gif)](#page-header)

## ProxyHTMLStripComments Directive [¶](#proxyhtmlstripcomments "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines whether to strip HTML comments. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLStripComments On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyHTMLStripComments Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party for earlier 2.x versions |

This directive will cause mod\_proxy\_html to strip HTML comments.
Note that this will also kill off any scripts or styles embedded in
comments (a bogosity introduced in 1995/6 with Netscape 2 for the
benefit of then-older browsers, but still in use today).
It may also interfere with comment-based processors such as SSI or ESI:
be sure to run any of those *before* mod\_proxy\_html in the
filter chain if stripping comments!

[![top](../images/up.gif)](#page-header)

## ProxyHTMLURLMap Directive [¶](#proxyhtmlurlmap "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Defines a rule to rewrite HTML links |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyHTMLURLMap from-pattern to-pattern [flags] [cond]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_html |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Version 2.4 and later; available as a third-party module for earlier 2.x versions. |

This is the key directive for rewriting HTML links. When parsing a document,
whenever a link target matches from-pattern, the matching
portion will be rewritten to to-pattern, as modified by any
flags supplied and by the
`ProxyHTMLExtended` directive.
Only the elements specified using
the `ProxyHTMLLinks` directive
will be considered as HTML links.

The optional third argument may define any of the following
**Flags**. Flags are case-sensitive.

h
:   Ignore HTML links (pass through unchanged)

e
:   Ignore scripting events (pass through unchanged)

c
:   Pass embedded script and style sections through untouched.

L
:   Last-match. If this rule matches, no more rules are applied
    (note that this happens automatically for HTML links).

l
:   Opposite to L. Overrides the one-change-only default
    behavior with HTML links.

R
:   Use Regular Expression matching-and-replace. `from-pattern`
    is a regexp, and `to-pattern` a replacement string that may be
    based on the regexp. Regexp memory is supported: you can use brackets ()
    in the `from-pattern` and retrieve the matches with $1 to $9
    in the `to-pattern`.

    If R is not set, it will use string-literal search-and-replace.
    The logic is *starts-with* in HTML links, but
    *contains* in scripting events and embedded script and style sections.

x
:   Use POSIX extended Regular Expressions. Only applicable with R.

i
:   Case-insensitive matching. Only applicable with R.

n
:   Disable regexp memory (for speed). Only applicable with R.

s
:   Line-based regexp matching. Only applicable with R.

^
:   Match at start only. This applies only to string matching
    (not regexps) and is irrelevant to HTML links.

$
:   Match at end only. This applies only to string matching
    (not regexps) and is irrelevant to HTML links.

V
:   Interpolate environment variables in `to-pattern`.
    A string of the form `${varname|default}` will be replaced by the
    value of environment variable `varname`. If that is unset, it
    is replaced by `default`. The `|default` is optional.

    NOTE: interpolation will only be enabled if
    `ProxyHTMLInterp` is On.

v
:   Interpolate environment variables in `from-pattern`.
    Patterns supported are as above.

    NOTE: interpolation will only be enabled if
    `ProxyHTMLInterp` is On.

The optional fourth **cond** argument defines a condition
that will be evaluated per Request, provided
`ProxyHTMLInterp` is On.
If the condition evaluates FALSE the map will not be applied in this request.
If TRUE, or if no condition is defined, the map is applied.

A **cond** is evaluated by the [Expression Parser](expr.md). In addition, the simpler syntax of conditions
in mod\_proxy\_html 3.x for HTTPD 2.0 and 2.2 is also supported.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_proxy_html.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_proxy_html.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
