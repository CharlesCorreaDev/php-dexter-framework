# mod_headers - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_headers.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_headers.html) to go to the current version of this document.

# Apache Module mod\_headers

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Customization of HTTP request and response headers |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | headers\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_headers.c |

### Summary

This module provides directives to control and modify HTTP
request and response headers. Headers can be merged, replaced
or removed.

### Topics

- ![](../images/down.gif) [Order of Processing](#order)
- ![](../images/down.gif) [Early and Late Processing](#early)
- ![](../images/down.gif) [Examples](#examples)

### Directives

- ![](../images/down.gif) [Header](#header)
- ![](../images/down.gif) [RequestHeader](#requestheader)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Order of Processing

The directives provided by `mod_headers` can
occur almost anywhere within the server configuration, and can be
limited in scope by enclosing them in [configuration sections](sections.md).

Order of processing is important and is affected both by the
order in the configuration file and by placement in [configuration sections](sections.md#mergin). These
two directives have a different effect if reversed:

`RequestHeader append MirrorID "mirror 12"  
RequestHeader unset MirrorID`

This way round, the `MirrorID` header is not set. If
reversed, the MirrorID header is set to "mirror 12".

[![top](../images/up.gif)](#page-header)

## Early and Late Processing

`mod_headers` can be applied either early or late
in the request. The normal mode is late, when *Request* Headers are
set immediately before running the content generator and *Response*
Headers just as the response is sent down the wire. Always use
Late mode in an operational server.

Early mode is designed as a test/debugging aid for developers.
Directives defined using the `early` keyword are set
right at the beginning of processing the request. This means
they can be used to simulate different requests and set up test
cases, but it also means that headers may be changed at any time
by other modules before generating a Response.

Because early directives are processed before the request path's
configuration is traversed, early headers can only be set in a
main server or virtual host context. Early directives cannot depend
on a request path, so they will fail in contexts such as
`<Directory>` or `<Location>`.

[![top](../images/up.gif)](#page-header)

## Examples

1. Copy all request headers that begin with "TS" to the
   response headers:

   `Header echo ^TS`
2. Add a header, `MyHeader`, to the response including a
   timestamp for when the request was received and how long it
   took to begin serving the request. This header can be used by
   the client to intuit load on the server or in isolating
   bottlenecks between the client and the server.

   `Header set MyHeader "%D %t"`

   results in this header being added to the response:

   `MyHeader: D=3775428 t=991424704447256`
3. Say hello to Joe

   `Header set MyHeader "Hello Joe. It took %D microseconds \  
   for Apache to serve this request."`

   results in this header being added to the response:

   `MyHeader: Hello Joe. It took D=3775428 microseconds for Apache
   to serve this request.`
4. Conditionally send `MyHeader` on the response if and
   only if header `MyRequestHeader` is present on the request.
   This is useful for constructing headers in response to some client
   stimulus. Note that this example requires the services of the
   `mod_setenvif` module.

   `SetEnvIf MyRequestHeader myvalue HAVE_MyRequestHeader  
   Header set MyHeader "%D %t mytext" env=HAVE_MyRequestHeader`

   If the header `MyRequestHeader: myvalue` is present on
   the HTTP request, the response will contain the following header:

   `MyHeader: D=3775428 t=991424704447256 mytext`
5. Enable DAV to work with Apache running HTTP through SSL hardware
   ([problem
   description](http://svn.haxx.se/users/archive-2006-03/0549.shtml)) by replacing https: with
   http: in the Destination header:

   `RequestHeader edit Destination ^https: http: early`
6. Set the same header value under multiple nonexclusive conditions,
   but do not duplicate the value in the final header.
   If all of the following conditions applied to a request (i.e.,
   if the `CGI`, `NO_CACHE` and
   `NO_STORE` environment variables all existed for the
   request):

   `Header merge Cache-Control no-cache env=CGI  
   Header merge Cache-Control no-cache env=NO_CACHE  
   Header merge Cache-Control no-store env=NO_STORE`

   then the response would contain the following header:

   `Cache-Control: no-cache, no-store`

   If `append` was used instead of `merge`,
   then the response would contain the following header:

   `Cache-Control: no-cache, no-cache, no-store`

[![top](../images/up.gif)](#page-header)

## Header Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configure HTTP response headers |
| [Syntax:](mod__directive-dict.md#Syntax) | `Header [condition] set|append|merge|add|unset|echo|edit header [value] [replacement] [early|env=[!]variable]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_headers |
| [Compatibility:](mod__directive-dict.md#Compatibility) | The `merge` argument is available in version 2.2.9 and later. The `edit` argument is available in version 2.2.4 and later. |

This directive can replace, merge or remove HTTP response
headers. The header is modified just after the content handler
and output filters are run, allowing outgoing headers to be
modified.

The optional condition argument determines which internal
table of responses headers this directive will operate against. Other
components of the server may have stored their response headers in either
the table that corresponds to `onsuccess` or the table that
corresponds to `always`. "Always" in this context refers to
whether headers you add will be sent during both a successful and unsucessful
response, but if your action is a function of an existing header, you
will have to read on for further complications.

The default value of `onsuccess` may need to be changed to
`always` under the circumstances similar to those listed below.
Note also that repeating this directive with both conditions makes sense in
some scenarios because `always` is not a superset of
`onsuccess` with respect to existing headers:

- You're adding a header to a non-success (non-2xx) response, such
  as a redirect, in which case only the table corresponding to
  `always` is used in the ultimate response.
- You're modifying or removing a header generated by a CGI script,
  in which case the CGI scripts are in the table corresponding to
  `always` and not in the default table.
- You're modifying or removing a header generated by some piece of
  the server but that header is not being found by the default
  `onsuccess` condition.

The action it performs is determined by the first
argument (second argument if a condition is specified).
This can be one of the following values:

`set`
:   The response header is set, replacing any previous header
    with this name. The value may be a format string.

`append`
:   The response header is appended to any existing header of
    the same name. When a new value is merged onto an existing
    header it is separated from the existing header with a comma.
    This is the HTTP standard way of giving a header multiple values.

`merge`
:   The response header is appended to any existing header of
    the same name, unless the value to be appended already appears in the
    header's comma-delimited list of values. When a new value is merged onto
    an existing header it is separated from the existing header with a comma.
    This is the HTTP standard way of giving a header multiple values.
    Values are compared in a case sensitive manner, and after
    all format specifiers have been processed. Values in double quotes
    are considered different from otherwise identical unquoted values.
    *Available in version 2.2.9 and later.*

`add`
:   The response header is added to the existing set of headers,
    even if this header already exists. This can result in two
    (or more) headers having the same name. This can lead to
    unforeseen consequences, and in general `set`,
    `append` or `merge` should be used instead.

`unset`
:   The response header of this name is removed, if it exists.
    If there are multiple headers of the same name, all will be
    removed. value must be omitted.

`echo`
:   Request headers with this name are echoed back in the
    response headers. header may be a
    [regular expression](glossary.md#regex "see glossary").
    value must be omitted.

`edit`
:   If this response header exists, its value is transformed
    according to a [regular expression](glossary.md#regex "see glossary")
    search-and-replace. The value argument is
    a [regular expression](glossary.md#regex "see glossary"), and
    the replacement is a replacement string, which may
    contain backreferences. *Available in version 2.2.4 and
    later.*

This argument is followed by a header name, which
can include the final colon, but it is not required. Case is
ignored for `set`, `append`, `merge`,
`add`, `unset` and `edit`.
The header name for `echo`
is case sensitive and may be a [regular
expression](glossary.md#regex "see glossary").

For `set`, `append`, `merge` and
`add` a value is specified as the next argument.
If value
contains spaces, it should be surrounded by double quotes.
value may be a character string, a string containing format
specifiers or a combination of both. The following format specifiers
are supported in value:

| Format | Description |
| --- | --- |
| `%%` | The percent sign |
| `%t` | The time the request was received in Universal Coordinated Time since the epoch (Jan. 1, 1970) measured in microseconds. The value is preceded by `t=`. |
| `%D` | The time from when the request was received to the time the headers are sent on the wire. This is a measure of the duration of the request. The value is preceded by `D=`. The value is measured in microseconds. |
| `%{FOOBAR}e` | The contents of the [environment variable](env.md) `FOOBAR`. |
| `%{FOOBAR}s` | The contents of the [SSL environment variable](mod__mod_ssl.md#envvars) `FOOBAR`, if `mod_ssl` is enabled. |

### Note

The `%s` format specifier is only available in
Apache 2.1 and later; it can be used instead of `%e`
to avoid the overhead of enabling `SSLOptions
+StdEnvVars`. If `SSLOptions +StdEnvVars` must
be enabled anyway for some other reason, `%e` will be
more efficient than `%s`.

For `edit` there is both a value argument
which is a [regular expression](glossary.md#regex "see glossary"),
and an additional replacement string.

The `Header` directive may be followed by an
an additional argument, which may be used to specify conditions under
which the action will be taken, or may be the keyword `early`
to specify [early processing](#early). If the
[environment variable](env.md) specified in the
`env=...` argument exists (or if the environment
variable does not exist and `env=!...` is specified)
then the action specified by the `Header` directive
will take effect. Otherwise, the directive will have no effect
on the request.

Except in [early](#early) mode, the
`Header` directives are processed just
before the response is sent to the network. This means that it is
possible to set and/or override most headers, except for some headers
added by the HTTP header filter. Prior to 2.2.12, it was not possible
to change the Content-Type header with this directive.

[![top](../images/up.gif)](#page-header)

## RequestHeader Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configure HTTP request headers |
| [Syntax:](mod__directive-dict.md#Syntax) | `RequestHeader set|append|merge|add|unset|edit header [value] [replacement] [early|env=[!]variable]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_headers |
| [Compatibility:](mod__directive-dict.md#Compatibility) | The `merge` argument is available in version 2.2.9 and later. The `edit` argument is available in version 2.2.4 and later. |

This directive can replace, merge, change or remove HTTP request
headers. The header is modified just before the content handler
is run, allowing incoming headers to be modified. The action it
performs is determined by the first argument. This can be one
of the following values:

`set`
:   The request header is set, replacing any previous header
    with this name

`append`
:   The request header is appended to any existing header of the
    same name. When a new value is merged onto an existing header
    it is separated from the existing header with a comma. This
    is the HTTP standard way of giving a header multiple
    values.

`merge`
:   The request header is appended to any existing header of
    the same name, unless the value to be appended already appears in the
    existing header's comma-delimited list of values. When a new value is
    merged onto an existing header it is separated from the existing header
    with a comma. This is the HTTP standard way of giving a header multiple
    values. Values are compared in a case sensitive manner, and after
    all format specifiers have been processed. Values in double quotes
    are considered different from otherwise identical unquoted values.
    *Available in version 2.2.9 and later.*

`add`
:   The request header is added to the existing set of headers,
    even if this header already exists. This can result in two
    (or more) headers having the same name. This can lead to
    unforeseen consequences, and in general `set`,
    `append` or `merge` should be used instead.

`unset`
:   The request header of this name is removed, if it exists. If
    there are multiple headers of the same name, all will be removed.
    value must be omitted.

`edit`
:   If this request header exists, its value is transformed
    according to a [regular expression](glossary.md#regex "see glossary")
    search-and-replace. The value argument is
    a [regular expression](glossary.md#regex "see glossary"), and
    the replacement is a replacement string, which may
    contain backreferences. *Available in version 2.2.4 and
    later*.

This argument is followed by a header name, which can
include the final colon, but it is not required. Case is
ignored. For `set`, `append`, `merge` and
`add` a value is given as the third argument. If a
value contains spaces, it should be surrounded by double
quotes. For `unset`, no value should be given.
value may be a character string, a string containing format
specifiers or a combination of both. The supported format specifiers
are the same as for the `Header`,
please have a look there for details. For `edit` both
a value and a replacement are required, and are
a [regular expression](glossary.md#regex "see glossary") and a
replacement string respectively.

The `RequestHeader` directive may be followed by
an additional argument, which may be used to specify conditions under
which the action will be taken, or may be the keyword `early`
to specify [early processing](#early). If the
[environment
variable](env.md) specified in the `env=...` argument
exists (or if the environment variable does not exist and
`env=!...` is specified) then the action specified
by the `RequestHeader` directive will take effect.
Otherwise, the directive will have no effect on the request.

Except in [early](#early) mode, the
`RequestHeader` directive is processed
just before the request is run by its handler in the fixup phase.
This should allow headers generated by the browser, or by Apache
input filters to be overridden or modified.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_headers.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_headers.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_headers.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
