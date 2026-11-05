# How-To / Tutorials - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/howto/

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/howto/) to go to the current version of this document.

# How-To / Tutorials

[![top](../images/up.gif)](#page-header)

## How-To / Tutorials

Authentication and Authorization
:   Authentication is any process by which you verify that
    someone is who they claim they are. Authorization is any
    process by which someone is allowed to be where they want to
    go, or to have information that they want to have.

    See: [Authentication, Authorization](howto__auth.md)

Access Control
:   Access control refers to the process of restricting, or
    granting access to a resource based on arbitrary criteria. There
    are a variety of different ways that this can be
    accomplished.

    See: [Access Control](howto__access.md)

Dynamic Content with CGI
:   The CGI (Common Gateway Interface) defines a way for a web
    server to interact with external content-generating programs,
    which are often referred to as CGI programs or CGI scripts. It
    is the simplest, and most common, way to put dynamic content on
    your web site. This document will be an introduction to setting
    up CGI on your Apache web server, and getting started writing
    CGI programs.

    See: [CGI: Dynamic Content](howto__cgi.md)

`.htaccess` files
:   `.htaccess` files provide a way to make configuration
    changes on a per-directory basis. A file, containing one or more
    configuration directives, is placed in a particular document directory,
    and the directives apply to that directory, and all subdirectories thereof.

    See: [`.htaccess` files](howto__htaccess.md)

Introduction to Server Side Includes
:   SSI (Server Side Includes) are directives that are placed in
    HTML pages, and evaluated on the server while the pages are
    being served. They let you add dynamically generated content to
    an existing HTML page, without having to serve the entire page
    via a CGI program, or other dynamic technology.

    See: [Server Side Includes (SSI)](howto__ssi.md)

Per-user web directories
:   On systems with multiple users, each user can be permitted to have a
    web site in their home directory using the `UserDir` directive. Visitors
    to a URL `http://example.com/~username/` will get content
    out of the home directory of the user "`username`", out of
    the subdirectory specified by the `UserDir` directive.

    See: [User web directories (`public_html`)](howto__public_html.md)

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/howto/ "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/howto/ "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/howto/ "Korean") |
[zh-cn](https://httpd.apache.org/docs/2.2/pt-br/zh-cn/howto/ "Simplified Chinese")

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
