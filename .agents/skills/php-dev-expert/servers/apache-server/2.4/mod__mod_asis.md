# mod_asis - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_asis.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_asis

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Sends files that contain their own HTTP headers |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | asis\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_asis.c |

### Summary

This module provides the handler `send-as-is`
which causes Apache HTTP Server to send the document without adding most of
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

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_asis)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_asis)

### See also

- `mod_headers`
- `mod_cern_meta`
- [Apache httpd's Handler Use](handler.md)

[![top](../images/up.gif)](#page-header)

## Usage [¶](#usage "Permanent link")

In the server configuration file, associate files with the
`send-as-is` handler *e.g.*

```
AddHandler send-as-is asis
```

The contents of any file with a `.asis` extension
will then be sent by Apache httpd to the client with almost no
changes. In particular, HTTP headers are derived from the file
itself according to `mod_cgi` rules, so an asis
file must include valid headers, and may also use the CGI
`Status:` header to determine the HTTP response
code. The `Content-Length:` header will automatically
be inserted or, if included, corrected by httpd.

Here's an example of a file whose contents are sent *as
is* so as to tell the client that a file has
redirected.

`Status: 301 Now where did I leave that URL  
Location: http://xyz.example.com/foo/bar.html  
Content-type: text/html  
  
<html>  
<head>  
<title>Lame excuses'R'us</title>  
</head>  
<body>  
<h1>Fred's exceptionally wonderful page has moved to  
<a href="http://xyz.example.com/foo/bar.html">Joe's</a>
site.  
</h1>  
</body>  
</html>`

### Notes:

The server always adds a `Date:` and `Server:`
header to the data returned to the client, so these should not be
included in the file. The server does *not* add a
`Last-Modified` header; it probably should.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_asis.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_asis.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_asis.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_asis.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
