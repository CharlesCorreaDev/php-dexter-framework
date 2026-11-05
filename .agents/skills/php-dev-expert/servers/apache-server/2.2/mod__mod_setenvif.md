# mod_setenvif - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_setenvif.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_setenvif.html) to go to the current version of this document.

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

`BrowserMatch ^Mozilla netscape  
BrowserMatch MSIE !netscape`

### Directives

- ![](../images/down.gif) [BrowserMatch](#browsermatch)
- ![](../images/down.gif) [BrowserMatchNoCase](#browsermatchnocase)
- ![](../images/down.gif) [SetEnvIf](#setenvif)
- ![](../images/down.gif) [SetEnvIfNoCase](#setenvifnocase)

### See also

- [Environment Variables in Apache](env.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## BrowserMatch Directive

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

`BrowserMatchNoCase Robot is_a_robot  
SetEnvIfNoCase User-Agent Robot is_a_robot`

Some additional examples:

`BrowserMatch ^Mozilla forms jpeg=yes browser=netscape  
BrowserMatch "^Mozilla/[2-3]" tables agif frames javascript  
BrowserMatch MSIE !javascript`

[![top](../images/up.gif)](#page-header)

## BrowserMatchNoCase Directive

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

`BrowserMatchNoCase mac platform=macintosh  
BrowserMatchNoCase win platform=windows`

The `BrowserMatch` and
`BrowserMatchNoCase` directives are special cases of
the `SetEnvIf` and `SetEnvIfNoCase`
directives. The following two lines have the same effect:

`BrowserMatchNoCase Robot is_a_robot  
SetEnvIfNoCase User-Agent Robot is_a_robot`

[![top](../images/up.gif)](#page-header)

## SetEnvIf Directive

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
*attribute* specified in the first argument can be one of three
things:

1. An HTTP request header field (see [RFC2616](http://www.rfc-editor.org/rfc/rfc2616.txt)
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
`value`. Since version 2.0.51 Apache will
recognize occurrences of `$1`..`$9` within
value and replace them by parenthesized subexpressions
of regex.

### Example:

`SetEnvIf Request_URI "\.gif$" object_is_image=gif  
SetEnvIf Request_URI "\.jpg$" object_is_image=jpg  
SetEnvIf Request_URI "\.xbm$" object_is_image=xbm  
:  
SetEnvIf Referer www\.mydomain\.example\.com intra_site_referral  
:  
SetEnvIf object_is_image xbm XBIT_PROCESSING=1  
:  
SetEnvIf ^TS* ^[a-z].* HAVE_TS`

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

- [Environment Variables in Apache](env.md),
  for additional examples.

[![top](../images/up.gif)](#page-header)

## SetEnvIfNoCase Directive

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

`SetEnvIfNoCase Host Apache\.Org site=apache`

This will cause the `site` environment variable
to be set to "`apache`" if the HTTP request header
field `Host:` was included and contained
`Apache.Org`, `apache.org`, or any other
combination.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_setenvif.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_setenvif.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_setenvif.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/mod_setenvif.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
