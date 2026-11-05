# mod_setenvif - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_setenvif.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_setenvif

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Allows the setting of environment variables based on characteristics of the request |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | setenvif\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_setenvif.c |

### Summary

The `mod_setenvif` module allows you to set
internal environment variables according to whether different aspects of
the request match regular expressions you specify. These
environment variables can be used by other parts of the server
to make decisions about actions to be taken, as well as becoming
available to CGI scripts and SSI pages.

The directives are considered in the order they appear in
the configuration files. So more complex sequences can be used,
such as this example, which sets `netscape` if the
browser is mozilla but not MSIE.

```
BrowserMatch ^Mozilla netscape
BrowserMatch MSIE !netscape
```

When the server looks up a path via an internal
[subrequest](glossary.md#subrequest "see glossary") such as looking
for a `DirectoryIndex`
or generating a directory listing with `mod_autoindex`,
per-request environment variables are *not* inherited in the
subrequest. Additionally,
`SetEnvIf` directives
are not separately evaluated in the subrequest due to the API phases
`mod_setenvif` takes action in.

A regular expression only needs quoting when it contains space,
in which case single and double quotes are equivalent. Unlike
`mod_rewrite`, `mod_setenvif` strips every
other backslash when parsing the expression; thus `\\`
requires `\\\`, and `\\\` requires
`\\\\\`.

### Directives

- ![](../images/down.gif) [BrowserMatch](#browsermatch)
- ![](../images/down.gif) [BrowserMatchNoCase](#browsermatchnocase)
- ![](../images/down.gif) [SetEnvIf](#setenvif)
- ![](../images/down.gif) [SetEnvIfExpr](#setenvifexpr)
- ![](../images/down.gif) [SetEnvIfNoCase](#setenvifnocase)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_setenvif)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_setenvif)

### See also

- [Environment Variables in Apache HTTP Server](env.md)

[![top](../images/up.gif)](#page-header)

## BrowserMatch Directive [¶](#browsermatch "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets environment variables conditional on HTTP User-Agent |
| [Syntax:](mod__directive-dict.md#Syntax) | `BrowserMatch regex [!]env-variable[=value] [[!]env-variable[=value]] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_setenvif |

The `BrowserMatch` is a special cases of the
`SetEnvIf` directive that
sets environment variables conditional on the
`User-Agent` HTTP request header. The following two
lines have the same effect:

```
BrowserMatch Robot is_a_robot
SetEnvIf User-Agent Robot is_a_robot
```

Some additional examples:

```
BrowserMatch ^Mozilla forms jpeg=yes browser=netscape
BrowserMatch "^Mozilla/[2-3]" tables agif frames javascript
BrowserMatch MSIE !javascript
```

[![top](../images/up.gif)](#page-header)

## BrowserMatchNoCase Directive [¶](#browsermatchnocase "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets environment variables conditional on User-Agent without respect to case |
| [Syntax:](mod__directive-dict.md#Syntax) | `BrowserMatchNoCase regex [!]env-variable[=value] [[!]env-variable[=value]] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_setenvif |

The `BrowserMatchNoCase` directive is
semantically identical to the `BrowserMatch` directive.
However, it provides for case-insensitive matching. For
example:

```
BrowserMatchNoCase mac platform=macintosh
BrowserMatchNoCase win platform=windows
```

The `BrowserMatch` and
`BrowserMatchNoCase` directives are special cases of
the `SetEnvIf` and `SetEnvIfNoCase`
directives. The following two lines have the same effect:

```
BrowserMatchNoCase Robot is_a_robot
SetEnvIfNoCase User-Agent Robot is_a_robot
```

[![top](../images/up.gif)](#page-header)

## SetEnvIf Directive [¶](#setenvif "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets environment variables based on attributes of the request |
| [Syntax:](mod__directive-dict.md#Syntax) | `SetEnvIf attribute regex [!]env-variable[=value] [[!]env-variable[=value]] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_setenvif |

The `SetEnvIf` directive defines
environment variables based on attributes of the request. The
*attribute* specified in the first argument can be one of four
things:

1. An HTTP request header field (see [RFC 2616](https://www.rfc-editor.org/rfc/rfc2616)
   for more information about these); for example: `Host`,
   `User-Agent`, `Referer`, and
   `Accept-Language`. A regular expression may be
   used to specify a set of request headers.
2. One of the following aspects of the request:
   - `Remote_Host` - the hostname (if available) of
     the client making the request
   - `Remote_Addr` - the IP address of the client
     making the request
   - `Server_Addr` - the IP address of the server
     on which the request was received (only with versions later
     than 2.0.43)
   - `Request_Method` - the name of the method
     being used (`GET`, `POST`, *et
     cetera*)
   - `Request_Protocol` - the name and version of
     the protocol with which the request was made (*e.g.*,
     "HTTP/0.9", "HTTP/1.1", *etc.*)
   - `Request_URI` - the resource requested on the HTTP
     request line -- generally the portion of the URL
     following the scheme and host portion without the query string. See
     the `RewriteCond`
     directive of `mod_rewrite` for extra information on
     how to match your query string.
3. The name of an environment variable in the list of those
   associated with the request. This allows
   `SetEnvIf` directives to test against the result
   of prior matches. Only those environment variables defined by earlier
   `SetEnvIf[NoCase]` directives are available for testing in
   this manner. 'Earlier' means that they were defined at a broader scope
   (such as server-wide) or previously in the current directive's scope.
   Environment variables will be considered only if there was no match
   among request characteristics and a regular expression was not
   used for the *attribute*.

The second argument (*regex*) is a [regular expression](glossary.md#regex "see glossary"). If the *regex*
matches against the *attribute*, then the remainder of the
arguments are evaluated.

The rest of the arguments give the names of variables to set, and
optionally values to which they should be set. These take the form
of

1. `varname`, or
2. `!varname`, or
3. `varname=value`

In the first form, the value will be set to "1". The second
will remove the given variable if already defined, and the
third will set the variable to the literal value given by
`value`. Since version 2.0.51, Apache httpd will
recognize occurrences of `$1`..`$9` within
value and replace them by parenthesized subexpressions
of regex. `$0` provides access to the whole
string matched by that pattern.

```
SetEnvIf Request_URI "\.gif$" object_is_image=gif
SetEnvIf Request_URI "\.jpg$" object_is_image=jpg
SetEnvIf Request_URI "\.xbm$" object_is_image=xbm
    
SetEnvIf Referer www\.mydomain\.example\.com intra_site_referral
    
SetEnvIf object_is_image xbm XBIT_PROCESSING=1
    
SetEnvIf Request_URI "\.(.*)$" EXTENSION=$1

SetEnvIf ^TS  ^[a-z]  HAVE_TS
```

The first three will set the environment variable
`object_is_image` if the request was for an image
file, and the fourth sets `intra_site_referral` if
the referring page was somewhere on the
`www.mydomain.example.com` Web site.

The last example will set environment variable
`HAVE_TS` if the request contains any headers that
begin with "TS" whose values begins with any character in the
set [a-z].

### See also

- [Environment Variables in Apache HTTP Server](env.md),
  for additional examples.

[![top](../images/up.gif)](#page-header)

## SetEnvIfExpr Directive [¶](#setenvifexpr "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets environment variables based on an ap\_expr expression |
| [Syntax:](mod__directive-dict.md#Syntax) | `SetEnvIfExpr expr [!]env-variable[=value] [[!]env-variable[=value]] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_setenvif |

The `SetEnvIfExpr` directive defines
environment variables based on an [expression](expr.md).
These expressions will be evaluated at runtime,
and applied *env-variable* in the same fashion as `SetEnvIf`, including backreferences.

```
    SetEnvIfExpr "tolower(req('X-Sendfile')) == 'd:\images\very_big.iso')" iso_delivered
    SetEnvIfExpr "tolower(req('X-Sendfile')) =~ /(.*\.iso$)/" iso-path=$1
```

This would set the environment variable `iso_delivered`
every time our application attempts to send it via `X-Sendfile`

A more useful example would be to set the variable rfc1918 if the
remote IP address is a private address according to RFC 1918:

```
SetEnvIfExpr "-R '10.0.0.0/8' || -R '172.16.0.0/12' || -R '192.168.0.0/16'" rfc1918
```

### See also

- [Expressions in Apache HTTP Server](expr.md),
  for a complete reference and more examples.
- `<If>` can be used to achieve similar
  results.
- `mod_filter`

[![top](../images/up.gif)](#page-header)

## SetEnvIfNoCase Directive [¶](#setenvifnocase "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets environment variables based on attributes of the request without respect to case |
| [Syntax:](mod__directive-dict.md#Syntax) | `SetEnvIfNoCase attribute regex [!]env-variable[=value] [[!]env-variable[=value]] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_setenvif |

The `SetEnvIfNoCase` is semantically identical to
the `SetEnvIf` directive,
and differs only in that the regular expression matching is
performed in a case-insensitive manner. For example:

```
SetEnvIfNoCase Host Example\.Org site=example
```

This will cause the `site` environment variable
to be set to "`example`" if the HTTP request header
field `Host:` was included and contained
`Example.Org`, `example.org`, or any other
combination.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_setenvif.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_setenvif.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_setenvif.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_setenvif.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/mod_setenvif.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
