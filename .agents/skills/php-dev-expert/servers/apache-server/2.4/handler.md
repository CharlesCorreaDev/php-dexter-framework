# Apache's Handler Use - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/handler.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# Apache's Handler Use

This document describes the use of Apache's Handlers.

- ![](./images/down.gif) [What is a Handler](#definition)
- ![](./images/down.gif) [Examples](#examples)
- ![](./images/down.gif) [Programmer's Note](#programmer)

[![top](./images/up.gif)](#page-header)

## What is a Handler [¶](#definition "Permanent link")

| Related Modules | Related Directives |
| --- | --- |
| - `mod_actions` - `mod_asis` - `mod_cgi` - `mod_imagemap` - `mod_info` - `mod_mime` - `mod_negotiation` - `mod_status` | - `Action` - `AddHandler` - `RemoveHandler` - `SetHandler` |

A "handler" is an internal Apache representation of the
action to be performed when a file is called. Generally, files
have implicit handlers, based on the file type. Normally, all
files are simply served by the server, but certain file types
are "handled" separately.

Handlers may also be configured explicitly,
based on either filename extensions or on location,
without relation to file type. This is
advantageous both because it is a more elegant solution, and
because it also allows for both a type **and** a
handler to be associated with a file. (See also [Files with Multiple
Extensions](mod__mod_mime.md#multipleext).)

Handlers can either be built into the server or included in
a module, or they can be added with the `Action` directive. The
built-in handlers in the standard distribution are as
follows:

- **default-handler**: Send the file using the
  `default_handler()`, which is the handler used by
  default to handle static content. (core)
- **send-as-is**: Send file with HTTP headers
  as is. (`mod_asis`)
- **cgi-script**: Treat the file as a CGI
  script. (`mod_cgi`)
- **imap-file**: Parse as an imagemap rule
  file. (`mod_imagemap`)
- **server-info**: Get the server's
  configuration information. (`mod_info`)
- **server-status**: Get the server's status
  report. (`mod_status`)
- **type-map**: Parse as a type map file for
  content negotiation. (`mod_negotiation`)

[![top](./images/up.gif)](#page-header)

## Examples [¶](#examples "Permanent link")

### Modifying static content using a CGI script

The following directives will cause requests for files with
the `html` extension to trigger the launch of the
`footer.pl` CGI script.

```
Action add-footer /cgi-bin/footer.pl
AddHandler add-footer .html
```

Then the CGI script is responsible for sending the
originally requested document (pointed to by the
`PATH_TRANSLATED` environment variable) and making
whatever modifications or additions are desired.

### Files with HTTP headers

The following directives will enable the
`send-as-is` handler, which is used for files which
contain their own HTTP headers. All files in the
`/web/htdocs/asis/` directory will be processed by
the `send-as-is` handler, regardless of their
filename extensions.

```
<Directory "/web/htdocs/asis">
    SetHandler send-as-is
</Directory>
```

[![top](./images/up.gif)](#page-header)

## Programmer's Note [¶](#programmer "Permanent link")

In order to implement the handler features, an addition has
been made to the [Apache API](developer__API.md) that
you may wish to make use of. Specifically, a new record has
been added to the `request_rec` structure:

```
char *handler
```

If you wish to have your module engage a handler, you need
only to set `r->handler` to the name of the
handler at any time prior to the `invoke_handler`
stage of the request. Handlers are implemented as they were
before, albeit using the handler name instead of a content
type. While it is not necessary, the naming convention for
handlers is to use a dash-separated word, with no slashes, so
as to not invade the media type name-space.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/handler.html "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/handler.html "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/handler.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/handler.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/handler.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/handler.html "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.4/pt-br/zh-cn/handler.html "Simplified Chinese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
