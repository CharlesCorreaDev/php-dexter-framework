# mod_asis - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_asis.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_asis.html) to go to the current version of this document.

# Apache Module mod\_asis

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Sends files that contain their own HTTP headers |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | asis\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_asis.c |

### Summary

This module provides the handler `send-as-is`
which causes Apache to send the document without adding most of
the usual HTTP headers.

This can be used to send any kind of data from the server,
including redirects and other special HTTP responses, without
requiring a cgi-script or an nph script.

For historical reasons, this module will also process any
file with the mime type `httpd/send-as-is`.

### Topics

- ![](../images/down.gif) [Usage](#usage)

### Directives

This module provides no
directives.

### See also

- `mod_headers`
- `mod_cern_meta`
- [Apache's Handler Use](handler.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Usage

In the server configuration file, associate files with the
`send-as-is` handler *e.g.*

`AddHandler send-as-is asis`

The contents of any file with a `.asis` extension
will then be sent by Apache to the client with almost no
changes. In particular, HTTP headers are derived from the file
itself according to `mod_cgi` rules, so an asis
file must include valid headers, and may also use the CGI
Status: header to determine the HTTP response code.

Here's an example of a file whose contents are sent *as
is* so as to tell the client that a file has
redirected.

`Status: 301 Now where did I leave that URL  
Location: http://xyz.abc.com/foo/bar.html  
Content-type: text/html  
  
<html>  
<head>  
<title>Lame excuses'R'us</title>  
</head>  
<body>  
<h1>Fred's exceptionally wonderful page has moved to  
<a href="http://xyz.abc.com/foo/bar.html">Joe's</a>
site.  
</h1>  
</body>  
</html>`

### Notes:

The server always adds a `Date:` and `Server:`
header to the data returned to the client, so these should not be
included in the file. The server does *not* add a
`Last-Modified` header; it probably should.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_asis.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_asis.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_asis.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
