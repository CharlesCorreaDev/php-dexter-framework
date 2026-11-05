# mod_negotiation - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_negotiation.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_negotiation.html) to go to the current version of this document.

# Apache Module mod\_negotiation

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Provides for [content negotiation](content-negotiation.md) |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | negotiation\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_negotiation.c |

### Summary

Content negotiation, or more accurately content selection, is
the selection of the document that best matches the clients
capabilities, from one of several available documents. There
are two implementations of this.

- A type map (a file with the handler
  `type-map`) which explicitly lists the files
  containing the variants.
- A MultiViews search (enabled by the `MultiViews`
  `Options`), where the server does
  an implicit filename pattern match, and choose from amongst the
  results.

### Topics

- ![](../images/down.gif) [Type maps](#typemaps)
- ![](../images/down.gif) [MultiViews](#multiviews)

### Directives

- ![](../images/down.gif) [CacheNegotiatedDocs](#cachenegotiateddocs)
- ![](../images/down.gif) [ForceLanguagePriority](#forcelanguagepriority)
- ![](../images/down.gif) [LanguagePriority](#languagepriority)

### See also

- `Options`
- `mod_mime`
- [Content
  Negotiation](content-negotiation.md)
- [Environment Variables](env.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Type maps

A type map has a format similar to RFC822 mail headers. It
contains document descriptions separated by blank lines, with
lines beginning with a hash character ('#') treated as
comments. A document description consists of several header
records; records may be continued on multiple lines if the
continuation lines start with spaces. The leading space will be
deleted and the lines concatenated. A header record consists of
a keyword name, which always ends in a colon, followed by a
value. Whitespace is allowed between the header name and value,
and between the tokens of value. The headers allowed are:

`Content-Encoding:`
:   The encoding of the file. Apache only recognizes
    encodings that are defined by an `AddEncoding` directive.
    This normally includes the encodings `x-compress`
    for compress'd files, and `x-gzip` for gzip'd
    files. The `x-` prefix is ignored for encoding
    comparisons.

`Content-Language:`
:   The language(s) of the variant, as an Internet standard
    language tag ([RFC 1766](http://www.ietf.org/rfc/rfc1766.txt)). An example is `en`,
    meaning English. If the variant contains more than one
    language, they are separated by a comma.

`Content-Length:`
:   The length of the file, in bytes. If this header is not
    present, then the actual length of the file is used.

`Content-Type:`
:   The [MIME media type](glossary.md#mime-type "see glossary") of
    the document, with optional parameters. Parameters are
    separated from the media type and from one another by a
    semi-colon, with a syntax of `name=value`. Common
    parameters include:

    `level`
    :   an integer specifying the version of the media type.
        For `text/html` this defaults to 2, otherwise
        0.

    `qs`
    :   a floating-point number with a value in the range 0[.000]
        to 1[.000], indicating the relative 'quality' of this variant
        compared to the other available variants, independent of
        the client's capabilities. For example, a jpeg file is
        usually of higher source quality than an ascii file if it
        is attempting to represent a photograph. However, if the
        resource being represented is ascii art, then an ascii
        file would have a higher source quality than a jpeg file.
        All `qs` values are therefore specific to a given
        resource.

    ### Example

    `Content-Type: image/jpeg; qs=0.8`

`URI:`
:   uri of the file containing the variant (of the given
    media type, encoded with the given content encoding). These
    are interpreted as URLs relative to the map file; they must
    be on the same server (!), and they must refer to files to
    which the client would be granted access if they were to be
    requested directly.

`Body:`
:   New in Apache 2.0, the actual content of the resource may
    be included in the type-map file using the Body header. This
    header must contain a string that designates a delimiter for
    the body content. Then all following lines in the type map
    file will be considered part of the resource body until the
    delimiter string is found.

    ### Example:

    `Body:----xyz----  
    <html>  
    <body>  
    <p>Content of the page.</p>  
    </body>  
    </html>  
    ----xyz----`

[![top](../images/up.gif)](#page-header)

## MultiViews

A MultiViews search is enabled by the `MultiViews`
`Options`. If the server receives a
request for `/some/dir/foo` and
`/some/dir/foo` does *not* exist, then the
server reads the directory looking for all files named
`foo.*`, and effectively fakes up a type map which
names all those files, assigning them the same media types and
content-encodings it would have if the client had asked for one
of them by name. It then chooses the best match to the client's
requirements, and returns that document.

The `MultiViewsMatch`
directive configures whether Apache will consider files
that do not have content negotiation meta-information assigned
to them when choosing files.

[![top](../images/up.gif)](#page-header)

## CacheNegotiatedDocs Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Allows content-negotiated documents to be cached by proxy servers |
| [Syntax:](mod__directive-dict.md#Syntax) | `CacheNegotiatedDocs On|Off` |
| [Default:](mod__directive-dict.md#Default) | `CacheNegotiatedDocs Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_negotiation |
| [Compatibility:](mod__directive-dict.md#Compatibility) | The syntax changed in version 2.0. |

If set, this directive allows content-negotiated documents
to be cached by proxy servers. This could mean that clients
behind those proxys could retrieve versions of the documents
that are not the best match for their abilities, but it will
make caching more efficient.

This directive only applies to requests which come from
HTTP/1.0 browsers. HTTP/1.1 provides much better control over
the caching of negotiated documents, and this directive has no
effect in responses to HTTP/1.1 requests.

Prior to version 2.0,
`CacheNegotiatedDocs` did not take an
argument; it was turned on by the presence of the directive by
itself.

[![top](../images/up.gif)](#page-header)

## ForceLanguagePriority Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Action to take if a single acceptable document is not found |
| [Syntax:](mod__directive-dict.md#Syntax) | `ForceLanguagePriority None|Prefer|Fallback [Prefer|Fallback]` |
| [Default:](mod__directive-dict.md#Default) | `ForceLanguagePriority Prefer` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_negotiation |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.0.30 and later |

The `ForceLanguagePriority` directive uses
the given `LanguagePriority` to satisfy
negotation where the server could otherwise not return a single
matching document.

`ForceLanguagePriority Prefer` uses
`LanguagePriority` to serve a one valid result, rather
than returning an HTTP result 300 (MULTIPLE CHOICES) when there
are several equally valid choices. If the directives below were
given, and the user's `Accept-Language` header assigned
`en` and `de` each as quality `.500`
(equally acceptable) then the first matching variant, `en`,
will be served.

`LanguagePriority en fr de  
ForceLanguagePriority Prefer`

`ForceLanguagePriority Fallback` uses
`LanguagePriority` to
serve a valid result, rather than returning an HTTP result 406
(NOT ACCEPTABLE). If the directives below were given, and the user's
`Accept-Language` only permitted an `es`
language response, but such a variant isn't found, then the first
variant from the `LanguagePriority` list below will be served.

`LanguagePriority en fr de  
ForceLanguagePriority Fallback`

Both options, `Prefer` and `Fallback`, may be
specified, so either the first matching variant from `LanguagePriority` will be served if
more than one variant is acceptable, or first available document will
be served if none of the variants matched the client's acceptable list
of languages.

### See also

- `AddLanguage`

[![top](../images/up.gif)](#page-header)

## LanguagePriority Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The precendence of language variants for cases where the client does not express a preference |
| [Syntax:](mod__directive-dict.md#Syntax) | `LanguagePriority MIME-lang [MIME-lang] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_negotiation |

The `LanguagePriority` sets the precedence
of language variants for the case where the client does not
express a preference, when handling a MultiViews request. The list
of MIME-lang are in order of decreasing preference.

### Example:

`LanguagePriority en fr de`

For a request for `foo.html`, where
`foo.html.fr` and `foo.html.de` both
existed, but the browser did not express a language preference,
then `foo.html.fr` would be returned.

Note that this directive only has an effect if a 'best'
language cannot be determined by any other means or the `ForceLanguagePriority` directive
is not `None`. In general, the client determines the
language preference, not the server.

### See also

- `AddLanguage`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_negotiation.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_negotiation.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
