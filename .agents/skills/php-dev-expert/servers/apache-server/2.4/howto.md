# How-To / Tutorials - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/howto/

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# How-To / Tutorials

[![top](../images/up.gif)](#page-header)

## How-To / Tutorials [¶](#howto "Permanent link")

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
    is a simple way to put dynamic content on
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

HTTP/2 with httpd
:   HTTP/2 is the evolution of the world's most successful application layer protocol, HTTP.
    It focuses on making more efficient use of network resources without changing the semantics of HTTP.
    This guide explains how HTTP/2 is implemented in httpd, showing basic configurations tips and
    best practices.

    See: [HTTP/2 guide](howto__http2.md)

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

Reverse Proxy guide
:   Apache httpd has extensive capabilities as a reverse proxy server using the
    `ProxyPass` directive as well as
    `BalancerMember` to create sophisticated
    reverse proxying implementations which provide for high-availability, load
    balancing and failover, cloud-based clustering and dynamic on-the-fly reconfiguration.

    See: [Reverse proxy guide](howto__reverse_proxy.md)

Rewriting URLs with mod\_rewrite
:   Rewriting URLs with (and without)
    `mod_rewrite` tends to be one of the most
    frequently asked topics on our mailing lists and IRC channels.
    We have devoted [and entire section of our
    documentation](rewrite.md) to howtos and recipes around this topic.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/howto/ "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/howto/ "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/howto/ "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/howto/ "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/howto/ "Korean") |
[zh-cn](https://httpd.apache.org/docs/2.4/pt-br/zh-cn/howto/ "Simplified Chinese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
