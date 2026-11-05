# mod_usertrack - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_usertrack.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_usertrack.html) to go to the current version of this document.

# Apache Module mod\_usertrack

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | *Clickstream* logging of user activity on a site |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | usertrack\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_usertrack.c |

### Summary

Previous releases of Apache have included a module which
generates a 'clickstream' log of user activity on a site using
cookies. This was called the "cookies" module, mod\_cookies. In
Apache 1.2 and later this module has been renamed the "user
tracking" module, mod\_usertrack. This module has been
simplified and new directives added.

### Topics

- ![](../images/down.gif) [Logging](#logging)
- ![](../images/down.gif) [2-digit or 4-digit dates for cookies?](#cookiedate)

### Directives

- ![](../images/down.gif) [CookieDomain](#cookiedomain)
- ![](../images/down.gif) [CookieExpires](#cookieexpires)
- ![](../images/down.gif) [CookieName](#cookiename)
- ![](../images/down.gif) [CookieStyle](#cookiestyle)
- ![](../images/down.gif) [CookieTracking](#cookietracking)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Logging

Previously, the cookies module (now the user tracking
module) did its own logging, using the `CookieLog`
directive. In this release, this module does no logging at all.
Instead, a configurable log format file should be used to log
user click-streams. This is possible because the logging module
now allows multiple log files. The cookie itself is logged by
using the text `%{cookie}n` in the log file format. For
example:

`CustomLog logs/clickstream "%{cookie}n %r %t"`

For backward compatibility the configurable log module
implements the old `CookieLog` directive, but this
should be upgraded to the above `CustomLog` directive.

[![top](../images/up.gif)](#page-header)

## 2-digit or 4-digit dates for cookies?

(the following is from message
<022701bda43d$9d32bbb0$1201a8c0@christian.office.sane.com>
in the new-httpd archives)

```
From: "Christian Allen" <christian@sane.com>
Subject: Re: Apache Y2K bug in mod_usertrack.c
Date: Tue, 30 Jun 1998 11:41:56 -0400

Did some work with cookies and dug up some info that might be useful.

True, Netscape claims that the correct format NOW is four digit dates, and
four digit dates do in fact work... for Netscape 4.x (Communicator), that
is.  However, 3.x and below do NOT accept them.  It seems that Netscape
originally had a 2-digit standard, and then with all of the Y2K hype and
probably a few complaints, changed to a four digit date for Communicator.
Fortunately, 4.x also understands the 2-digit format, and so the best way to
ensure that your expiration date is legible to the client's browser is to
use 2-digit dates.

However, this does not limit expiration dates to the year 2000; if you use
an expiration year of "13", for example, it is interpreted as 2013, NOT
1913!  In fact, you can use an expiration year of up to "37", and it will be
understood as "2037" by both MSIE and Netscape versions 3.x and up (not sure
about versions previous to those).  Not sure why Netscape used that
particular year as its cut-off point, but my guess is that it was in respect
to UNIX's 2038 problem.  Netscape/MSIE 4.x seem to be able to understand
2-digit years beyond that, at least until "50" for sure (I think they
understand up until about "70", but not for sure).

Summary:  Mozilla 3.x and up understands two digit dates up until "37"
(2037).  Mozilla 4.x understands up until at least "50" (2050) in 2-digit
form, but also understands 4-digit years, which can probably reach up until
9999.  Your best bet for sending a long-life cookie is to send it for some
time late in the year "37".
```

[![top](../images/up.gif)](#page-header)

## CookieDomain Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The domain to which the tracking cookie applies |
| [Syntax:](mod__directive-dict.md#Syntax) | `CookieDomain domain` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_usertrack |

This directive controls the setting of the domain to which
the tracking cookie applies. If not present, no domain is
included in the cookie header field.

The domain string **must** begin with a dot, and
**must** include at least one embedded dot. That is,
`.example.com` is legal, but `foo.example.com` and
`.com` are not.

Most browsers in use today will not allow cookies to be set
for a two-part top level domain, such as `.co.uk`,
although such a domain ostensibly fulfills the requirements
above.  
These domains are equivalent to top level domains such as
`.com`, and allowing such cookies may be a security
risk. Thus, if you are under a two-part top level domain, you
should still use your actual domain, as you would with any other top
level domain (for example, use `.foo.co.uk`).

[![top](../images/up.gif)](#page-header)

## CookieExpires Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Expiry time for the tracking cookie |
| [Syntax:](mod__directive-dict.md#Syntax) | `CookieExpires expiry-period` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_usertrack |

When used, this directive sets an expiry time on the cookie
generated by the usertrack module. The *expiry-period*
can be given either as a number of seconds, or in the format
such as "2 weeks 3 days 7 hours". Valid denominations are:
years, months, weeks, days, hours, minutes and seconds. If the expiry
time is in any format other than one number indicating the
number of seconds, it must be enclosed by double quotes.

If this directive is not used, cookies last only for the
current browser session.

[![top](../images/up.gif)](#page-header)

## CookieName Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Name of the tracking cookie |
| [Syntax:](mod__directive-dict.md#Syntax) | `CookieName token` |
| [Default:](mod__directive-dict.md#Default) | `CookieName Apache` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_usertrack |

This directive allows you to change the name of the cookie
this module uses for its tracking purposes. By default the
cookie is named "`Apache`".

You must specify a valid cookie name; results are
unpredictable if you use a name containing unusual characters.
Valid characters include A-Z, a-z, 0-9, "\_", and "-".

[![top](../images/up.gif)](#page-header)

## CookieStyle Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Format of the cookie header field |
| [Syntax:](mod__directive-dict.md#Syntax) | `CookieStyle Netscape|Cookie|Cookie2|RFC2109|RFC2965` |
| [Default:](mod__directive-dict.md#Default) | `CookieStyle Netscape` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_usertrack |

This directive controls the format of the cookie header
field. The three formats allowed are:

- **Netscape**, which is the original but now deprecated
  syntax. This is the default, and the syntax Apache has
  historically used.
- **Cookie** or **RFC2109**, which is the syntax that
  superseded the Netscape syntax.
- **Cookie2** or **RFC2965**, which is the most
  current cookie syntax.

Not all clients can understand all of these formats, but you
should use the newest one that is generally acceptable to your
users' browsers. At the time of writing, most browsers only fully
support `CookieStyle Netscape`.

[![top](../images/up.gif)](#page-header)

## CookieTracking Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables tracking cookie |
| [Syntax:](mod__directive-dict.md#Syntax) | `CookieTracking on|off` |
| [Default:](mod__directive-dict.md#Default) | `CookieTracking off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_usertrack |

When `mod_usertrack` is loaded, and
`CookieTracking on` is set, Apache will send a
user-tracking cookie for all new requests. This directive can
be used to turn this behavior on or off on a per-server or
per-directory basis. By default, enabling
`mod_usertrack` will **not**
activate cookies.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_usertrack.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
