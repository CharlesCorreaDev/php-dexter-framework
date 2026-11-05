# Apache's Handler Use - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/handler.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/handler.html) to go to the current version of this document.

# Apache's Handler Use

This document describes the use of Apache's Handlers.

- ![](./images/down.gif) [What is a Handler](#definition)
- ![](./images/down.gif) [Examples](#examples)
- ![](./images/down.gif) [Programmer's Note](#programmer)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## What is a Handler

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

## Examples

### Modifying static content using a CGI script

The following directives will cause requests for files with
the `html` extension to trigger the launch of the
`footer.pl` CGI script.

`Action add-footer /cgi-bin/footer.pl  
AddHandler add-footer .html`

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

`<Directory /web/htdocs/asis>  
SetHandler send-as-is  
</Directory>`

[![top](./images/up.gif)](#page-header)

## Programmer's Note

In order to implement the handler features, an addition has
been made to the [Apache API](developer__API.md) that
you may wish to make use of. Specifically, a new record has
been added to the `request_rec` structure:

`char *handler`

If you wish to have your module engage a handler, you need
only to set `r->handler` to the name of the
handler at any time prior to the `invoke_handler`
stage of the request. Handlers are implemented as they were
before, albeit using the handler name instead of a content
type. While it is not necessary, the naming convention for
handlers is to use a dash-separated word, with no slashes, so
as to not invade the media type name-space.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/handler.html "English") |
[es](https://httpd.apache.org/docs/2.2/pt-br/es/handler.html "Español") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/handler.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/handler.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/handler.html "Korean") |
[ru](https://httpd.apache.org/docs/2.2/pt-br/ru/handler.html "Russian") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/handler.html "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.2/pt-br/zh-cn/handler.html "Simplified Chinese")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
