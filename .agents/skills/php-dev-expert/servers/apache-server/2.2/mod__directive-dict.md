# Terms Used to Describe Directives - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/directive-dict.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/directive-dict.html) to go to the current version of this document.

# Terms Used to Describe Directives

This document describes the terms that are used to describe
each Apache [configuration
directive](mod__directives.md).

- ![](../images/down.gif) [Description](#Description)
- ![](../images/down.gif) [Syntax](#Syntax)
- ![](../images/down.gif) [Default](#Default)
- ![](../images/down.gif) [Context](#Context)
- ![](../images/down.gif) [Override](#Override)
- ![](../images/down.gif) [Status](#Status)
- ![](../images/down.gif) [Module](#Module)
- ![](../images/down.gif) [Compatibility](#Compatibility)

### See also

- [Configuration files](configuring.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Description

A brief description of the purpose of the directive.

[![top](../images/up.gif)](#page-header)

## Syntax

This indicates the format of the directive as it would
appear in a configuration file. This syntax is extremely
directive-specific, and is described in detail in the
directive's definition. Generally, the directive name is
followed by a series of one or more space-separated arguments.
If an argument contains a space, the argument must be enclosed
in double quotes. Optional arguments are enclosed in square
brackets. Where an argument can take on more than one possible
value, the possible values are separated by vertical bars "|".
Literal text is presented in the default font, while
argument-types for which substitution is necessary are
*emphasized*. Directives which can take a variable
number of arguments will end in "..." indicating that the last
argument is repeated.

Directives use a great number of different argument types. A
few common ones are defined below.

*URL*
:   A complete Uniform Resource Locator including a scheme,
    hostname, and optional pathname as in
    `http://www.example.com/path/to/file.html`

*URL-path*
:   The part of a *url* which follows the scheme and
    hostname as in `/path/to/file.html`. The
    *url-path* represents a web-view of a resource, as
    opposed to a file-system view.

*file-path*
:   The path to a file in the local file-system beginning
    with the root directory as in
    `/usr/local/apache/htdocs/path/to/file.html`.
    Unless otherwise specified, a *file-path* which does
    not begin with a slash will be treated as relative to the [ServerRoot](mod__core.md#serverroot).

*directory-path*
:   The path to a directory in the local file-system
    beginning with the root directory as in
    `/usr/local/apache/htdocs/path/to/`.

*filename*
:   The name of a file with no accompanying path information
    as in `file.html`.

*regex*
:   A Perl-compatible [regular
    expression](glossary.md#regex "see glossary"). The directive definition will specify what the
    *regex* is matching against.

*extension*
:   In general, this is the part of the *filename*
    which follows the last dot. However, Apache recognizes
    multiple filename extensions, so if a *filename*
    contains more than one dot, each dot-separated part of the
    filename following the first dot is an *extension*.
    For example, the *filename* `file.html.en`
    contains two extensions: `.html` and
    `.en`. For Apache directives, you may specify
    *extension*s with or without the leading dot. In
    addition, *extension*s are not case sensitive.

*MIME-type*
:   A method of describing the format of a file which
    consists of a major format type and a minor format type,
    separated by a slash as in `text/html`.

*env-variable*
:   The name of an [environment
    variable](env.md) defined in the Apache configuration process.
    Note this is not necessarily the same as an operating system
    environment variable. See the [environment variable documentation](env.md) for
    more details.

[![top](../images/up.gif)](#page-header)

## Default

If the directive has a default value (*i.e.*, if you
omit it from your configuration entirely, the Apache Web server
will behave as though you set it to a particular value), it is
described here. If there is no default value, this section
should say "*None*". Note that the default listed here
is not necessarily the same as the value the directive takes in
the default httpd.conf distributed with the server.

[![top](../images/up.gif)](#page-header)

## Context

This indicates where in the server's configuration files the
directive is legal. It's a comma-separated list of one or more
of the following values:

server config
:   This means that the directive may be used in the server
    configuration files (*e.g.*, `httpd.conf`), but
    **not** within any
    `<VirtualHost>`
    or `<Directory>`
    containers. It is not allowed in `.htaccess` files
    at all.

virtual host
:   This context means that the directive may appear inside
    `<VirtualHost>`
    containers in the server
    configuration files.

directory
:   A directive marked as being valid in this context may be
    used inside `<Directory>`, `<Location>`, `<Files>`, and `<Proxy>` containers
    in the server configuration files, subject to the restrictions
    outlined in [Configuration
    Sections](sections.md).

.htaccess
:   If a directive is valid in this context, it means that it
    can appear inside *per*-directory
    `.htaccess` files. It may not be processed, though
    depending upon the [overrides](#Override) currently active.

The directive is *only* allowed within the designated
context; if you try to use it elsewhere, you'll get a
configuration error that will either prevent the server from
handling requests in that context correctly, or will keep the
server from operating at all -- *i.e.*, the server won't
even start.

The valid locations for the directive are actually the
result of a Boolean OR of all of the listed contexts. In other
words, a directive that is marked as being valid in
"`server config, .htaccess`" can be used in the
`httpd.conf` file and in `.htaccess`
files, but not within any `<Directory>` or
`<VirtualHost>`
containers.

[![top](../images/up.gif)](#page-header)

## Override

This directive attribute indicates which configuration
override must be active in order for the directive to be
processed when it appears in a `.htaccess` file. If
the directive's [context](#Context)
doesn't permit it to appear in `.htaccess` files,
then no context will be listed.

Overrides are activated by the `AllowOverride` directive, and apply
to a particular scope (such as a directory) and all
descendants, unless further modified by other
`AllowOverride` directives at
lower levels. The documentation for that directive also lists the
possible override names available.

[![top](../images/up.gif)](#page-header)

## Status

This indicates how tightly bound into the Apache Web server
the directive is; in other words, you may need to recompile the
server with an enhanced set of modules in order to gain access
to the directive and its functionality. Possible values for
this attribute are:

Core
:   If a directive is listed as having "Core" status, that
    means it is part of the innermost portions of the Apache Web
    server, and is always available.

MPM
:   A directive labeled as having "MPM" status is provided by
    a [Multi-Processing Module](mpm.md). This
    type of directive will be available if and only if you are
    using one of the MPMs listed on the [Module](#Module) line of the directive
    definition.

Base
:   A directive labeled as having "Base" status is supported
    by one of the standard Apache modules which is compiled into
    the server by default, and is therefore normally available
    unless you've taken steps to remove the module from your
    configuration.

Extension
:   A directive with "Extension" status is provided by one of
    the modules included with the Apache server kit, but the
    module isn't normally compiled into the server. To enable the
    directive and its functionality, you will need to change the
    server build configuration files and re-compile Apache.

Experimental
:   "Experimental" status indicates that the directive is
    available as part of the Apache kit, but you're on your own
    if you try to use it. The directive is being documented for
    completeness, and is not necessarily supported. The module
    which provides the directive may or may not be compiled in by
    default; check the top of the page which describes the
    directive and its module to see if it remarks on the
    availability.

[![top](../images/up.gif)](#page-header)

## Module

This quite simply lists the name of the source module which
defines the directive.

[![top](../images/up.gif)](#page-header)

## Compatibility

If the directive wasn't part of the original Apache version
2 distribution, the version in which it was introduced should
be listed here. In addition, if the directive is available
only on certain platforms, it will be noted here.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/directive-dict.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/directive-dict.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/directive-dict.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/directive-dict.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
