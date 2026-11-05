# mod_imagemap - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_imagemap.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_imagemap.html) to go to the current version of this document.

# Apache Module mod\_imagemap

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Server-side imagemap processing |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | imagemap\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_imagemap.c |

### Summary

This module processes `.map` files, thereby
replacing the functionality of the `imagemap` CGI
program. Any directory or document type configured to use the
handler `imap-file` (using either
`AddHandler` or
`SetHandler`)
will be processed by this module.

The following directive will activate files ending with
`.map` as imagemap files:

`AddHandler imap-file map`

Note that the following is still supported:

`AddType application/x-httpd-imap map`

However, we are trying to phase out "magic MIME types" so we
are deprecating this method.

### Topics

- ![](../images/down.gif) [New Features](#features)
- ![](../images/down.gif) [Imagemap File](#imapfile)
- ![](../images/down.gif) [Example Mapfile](#example)
- ![](../images/down.gif) [Referencing your mapfile](#referencing)

### Directives

- ![](../images/down.gif) [ImapBase](#imapbase)
- ![](../images/down.gif) [ImapDefault](#imapdefault)
- ![](../images/down.gif) [ImapMenu](#imapmenu)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## New Features

The imagemap module adds some new features that were not
possible with previously distributed imagemap programs.

- URL references relative to the Referer: information.
- Default `<base>` assignment through a new map
  directive `base`.
- No need for `imagemap.conf` file.
- Point references.
- Configurable generation of imagemap menus.

[![top](../images/up.gif)](#page-header)

## Imagemap File

The lines in the imagemap files can have one of several
formats:

`directive value [x,y ...]  
directive value "Menu text" [x,y
...]  
directive value x,y ... "Menu text"`

The directive is one of `base`,
`default`, `poly`, `circle`,
`rect`, or `point`. The value is an
absolute or relative URL, or one of the special values listed
below. The coordinates are `x,y`
pairs separated by whitespace. The quoted text is used as the text of
the link if a imagemap menu is generated. Lines beginning with '#' are
comments.

### Imagemap File Directives

There are six directives allowed in the imagemap file. The
directives can come in any order, but are processed in the
order they are found in the imagemap file.

`base` Directive
:   Has the effect of `<base href="value">`. The non-absolute URLs of the map-file are taken relative
    to this value. The `base` directive overrides
    `ImapBase` as set in a
    `.htaccess` file or in the server configuration files.
    In the absence of an `ImapBase` configuration
    directive, `base` defaults to
    `http://server_name/`.

    `base_uri` is synonymous with `base`.
    Note that a trailing slash on the URL is significant.

`default` Directive
:   The action taken if the coordinates given do not fit any
    of the `poly`, `circle` or
    `rect` directives, and there are no
    `point` directives. Defaults to `nocontent`
    in the absence of an `ImapDefault` configuration setting, causing a status
    code of `204 No Content` to be returned. The client
    should keep the same page displayed.

`poly` Directive
:   Takes three to one-hundred points, and is obeyed if the
    user selected coordinates fall within the polygon defined by
    these points.

`circle`
:   Takes the center coordinates of a circle and a point on
    the circle. Is obeyed if the user selected point is with the
    circle.

`rect` Directive
:   Takes the coordinates of two opposing corners of a
    rectangle. Obeyed if the point selected is within this
    rectangle.

`point` Directive
:   Takes a single point. The point directive closest to the
    user selected point is obeyed if no other directives are
    satisfied. Note that `default` will not be
    followed if a `point` directive is present and
    valid coordinates are given.

### Values

The values for each of the directives can be any of the
following:

a URL
:   The URL can be relative or absolute URL. Relative URLs
    can contain '..' syntax and will be resolved relative to the
    `base` value.

    `base` itself will not be resolved according to the
    current value. A statement `base mailto:` will
    work properly, though.

`map`
:   Equivalent to the URL of the imagemap file itself. No
    coordinates are sent with this, so a menu will be generated
    unless `ImapMenu` is set to
    `none`.

`menu`
:   Synonymous with `map`.

`referer`
:   Equivalent to the URL of the referring document. Defaults
    to `http://servername/` if no `Referer:`
    header was present.

`nocontent`
:   Sends a status code of `204 No Content`,
    telling the client to keep the same page displayed. Valid for
    all but `base`.

`error`
:   Fails with a `500 Server Error`. Valid for all
    but `base`, but sort of silly for anything but
    `default`.

### Coordinates

`0,0 200,200`
:   A coordinate consists of an x and a y
    value separated by a comma. The coordinates are separated
    from each other by whitespace. To accommodate the way Lynx
    handles imagemaps, should a user select the coordinate
    `0,0`, it is as if no coordinate had been
    selected.

### Quoted Text

`"Menu Text"`
:   After the value or after the coordinates, the line
    optionally may contain text within double quotes. This string
    is used as the text for the link if a menu is
    generated:

    `<a href="http://example.com/">Menu text</a>`

    If no quoted text is present, the name of the link will be
    used as the text:

    `<a href="http://example.com/">http://example.com</a>`

    If you want to use double quotes within this text, you have to
    write them as `&quot;`.

[![top](../images/up.gif)](#page-header)

## Example Mapfile

`#Comments are printed in a 'formatted' or 'semiformatted' menu.  
#And can contain html tags. <hr>  
base referer  
poly map "Could I have a menu, please?" 0,0 0,10 10,10 10,0  
rect .. 0,0 77,27 "the directory of the referer"  
circle http://www.inetnebr.example.com/lincoln/feedback/ 195,0 305,27  
rect another_file "in same directory as referer" 306,0 419,27  
point http://www.zyzzyva.example.com/ 100,100  
point http://www.tripod.example.com/ 200,200  
rect mailto:nate@tripod.example.com 100,150 200,0 "Bugs?"`

[![top](../images/up.gif)](#page-header)

## Referencing your mapfile

### HTML example

`<a href="/maps/imagemap1.map">  

<img ismap src="/images/imagemap1.gif">  
</a>`

### XHTML example

`<a href="/maps/imagemap1.map">  

<img ismap="ismap" src="/images/imagemap1.gif" />  
</a>`

[![top](../images/up.gif)](#page-header)

## ImapBase Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Default `base` for imagemap files |
| [Syntax:](mod__directive-dict.md#Syntax) | `ImapBase map|referer|URL` |
| [Default:](mod__directive-dict.md#Default) | `ImapBase http://servername/` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Indexes |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_imagemap |

The `ImapBase` directive sets the default
`base` used in the imagemap files. Its value is
overridden by a `base` directive within the imagemap
file. If not present, the `base` defaults to
`http://servername/`.

### See also

- `UseCanonicalName`

[![top](../images/up.gif)](#page-header)

## ImapDefault Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Default action when an imagemap is called with coordinates that are not explicitly mapped |
| [Syntax:](mod__directive-dict.md#Syntax) | `ImapDefault error|nocontent|map|referer|URL` |
| [Default:](mod__directive-dict.md#Default) | `ImapDefault nocontent` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Indexes |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_imagemap |

The `ImapDefault` directive sets the default
`default` used in the imagemap files. Its value is
overridden by a `default` directive within the
imagemap file. If not present, the `default` action
is `nocontent`, which means that a `204 No
Content` is sent to the client. In this case, the client
should continue to display the original page.

[![top](../images/up.gif)](#page-header)

## ImapMenu Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Action if no coordinates are given when calling an imagemap |
| [Syntax:](mod__directive-dict.md#Syntax) | `ImapMenu none|formatted|semiformatted|unformatted` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Indexes |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_imagemap |

The `ImapMenu` directive determines the
action taken if an imagemap file is called without valid
coordinates.

`none`
:   If ImapMenu is `none`, no menu is generated,
    and the `default` action is performed.

`formatted`
:   A `formatted` menu is the simplest menu.
    Comments in the imagemap file are ignored. A level one header
    is printed, then an hrule, then the links each on a separate
    line. The menu has a consistent, plain look close to that of
    a directory listing.

`semiformatted`
:   In the `semiformatted` menu, comments are
    printed where they occur in the imagemap file. Blank lines
    are turned into HTML breaks. No header or hrule is printed,
    but otherwise the menu is the same as a
    `formatted` menu.

`unformatted`
:   Comments are printed, blank lines are ignored. Nothing is
    printed that does not appear in the imagemap file. All breaks
    and headers must be included as comments in the imagemap
    file. This gives you the most flexibility over the appearance
    of your menus, but requires you to treat your map files as
    HTML instead of plaintext.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_imagemap.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_imagemap.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
