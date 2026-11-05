# mod_status - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_status.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_status.html) to go to the current version of this document.

# Apache Module mod\_status

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Provides information on server activity and performance |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | status\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_status.c |

### Summary

The Status module allows a server administrator to find out
how well their server is performing. A HTML page is presented
that gives the current server statistics in an easily readable
form. If required this page can be made to automatically
refresh (given a compatible browser). Another page gives a
simple machine-readable list of the current server state.

The details given are:

- The number of worker serving requests
- The number of idle worker
- The status of each worker, the number of requests that
  worker has performed and the total number of bytes served by
  the worker (\*)
- A total number of accesses and byte count served (\*)
- The time the server was started/restarted and the time it
  has been running for
- Averages giving the number of requests per second, the
  number of bytes served per second and the average number of
  bytes per request (\*)
- The current percentage CPU used by each worker and in
  total by Apache (\*)
- The current hosts and requests being processed (\*)

The lines marked "(\*)" are only available if
`ExtendedStatus`
is `On`.

### Topics

- ![](../images/down.gif) [Enabling Status Support](#enable)
- ![](../images/down.gif) [Automatic Updates](#autoupdate)
- ![](../images/down.gif) [Machine Readable Status File](#machinereadable)

### Directives

- ![](../images/down.gif) [ExtendedStatus](#extendedstatus)
- ![](../images/down.gif) [SeeRequestTail](#seerequesttail)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Enabling Status Support

To enable status reports only for browsers from the example.com
domain add this code to your `httpd.conf`
configuration file

`<Location /server-status>  
SetHandler server-status  
  
Order Deny,Allow  
Deny from all  
Allow from .example.com  
</Location>`

You can now access server statistics by using a Web browser
to access the page
`http://your.server.name/server-status`

[![top](../images/up.gif)](#page-header)

## Automatic Updates

You can get the status page to update itself automatically if
you have a browser that supports "refresh". Access the page
`http://your.server.name/server-status?refresh=N` to
refresh the page every N seconds.

[![top](../images/up.gif)](#page-header)

## Machine Readable Status File

A machine-readable version of the status file is available by
accessing the page
`http://your.server.name/server-status?auto`. This
is useful when automatically run, see the Perl program in the
`/support` directory of Apache,
`log_server_status`.

**It should be noted that if `mod_status` is
compiled into the server, its handler capability is available
in *all* configuration files, including
*per*-directory files (*e.g.*,
`.htaccess`). This may have security-related
ramifications for your site.**

[![top](../images/up.gif)](#page-header)

## ExtendedStatus Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Keep track of extended status information for each request |
| [Syntax:](mod__directive-dict.md#Syntax) | `ExtendedStatus On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ExtendedStatus Off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_status |
| [Compatibility:](mod__directive-dict.md#Compatibility) | ExtendedStatus is only available in Apache 1.3.2 and later. |

This setting applies to the entire server, and cannot be
enabled or disabled on a virtualhost-by-virtualhost basis.
The collection of extended status information can slow down
the server.

[![top](../images/up.gif)](#page-header)

## SeeRequestTail Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determine if mod\_status displays the first 63 characters of a request or the last 63, assuming the request itself is greater than 63 chars. |
| [Syntax:](mod__directive-dict.md#Syntax) | `SeeRequestTail On|Off` |
| [Default:](mod__directive-dict.md#Default) | `SeeRequestTail Off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_status |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.2.7 and later. |

mod\_status with `ExtendedStatus On`
displays the actual request being handled.
For historical purposes, only 63 characters of the request
are actually stored for display purposes. This directive
controls whether the 1st 63 characters are stored (the previous
behavior and the default) or if the last 63 characters are. This
is only applicable, of course, if the length of the request is
64 characters or greater.

If Apache is handling `GET /disk1/storage/apache/htdocs/images/imagestore1/food/apples.jpg HTTP/1.1` mod\_status displays as follows:

|  |  |
| --- | --- |
| Off (default) | GET /disk1/storage/apache/htdocs/images/imagestore1/food/apples |
| On | orage/apache/htdocs/images/imagestore1/food/apples.jpg HTTP/1.1 |

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_status.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_status.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_status.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/mod_status.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
