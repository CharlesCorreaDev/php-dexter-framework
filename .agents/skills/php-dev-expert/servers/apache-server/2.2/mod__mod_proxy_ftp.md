# mod_proxy_ftp - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_proxy_ftp.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_proxy_ftp.html) to go to the current version of this document.

# Apache Module mod\_proxy\_ftp

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | FTP support module for `mod_proxy` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_ftp\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_ftp.c |

### Summary

This module *requires* the service of `mod_proxy`. It provides support for the proxying
FTP sites. Note that FTP support is currently limited to
the GET method.

Thus, in order to get the ability of handling FTP proxy requests,
`mod_proxy` and `mod_proxy_ftp`
have to be present in the server.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Topics

- ![](../images/down.gif) [Why doesn't file type xxx
  download via FTP?](#mimetypes)
- ![](../images/down.gif) [How can I force an FTP ASCII download of
  File xxx?](#type)
- ![](../images/down.gif) [How can I do FTP upload?](#ftpnonget)
- ![](../images/down.gif) [How can I access FTP files outside
  of my home directory?](#percent2fhck)
- ![](../images/down.gif) [How can I hide the FTP cleartext password
  in my browser's URL line?](#ftppass)

### Directives

This module provides no
directives.

### See also

- `mod_proxy`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Why doesn't file type xxx download via FTP?

You probably don't have that particular file type defined as
`application/octet-stream` in your proxy's mime.types
configuration file. A useful line can be

```
application/octet-stream   bin dms lha lzh exe class tgz taz
```

Alternatively you may prefer to default everything to binary:

```
DefaultType application/octet-stream
```

[![top](../images/up.gif)](#page-header)

## How can I force an FTP ASCII download of File xxx?

In the rare situation where you must download a specific file using the
FTP `ASCII` transfer method (while the default transfer is in
`binary` mode), you can override `mod_proxy`'s
default by suffixing the request with `;type=a` to force an
ASCII transfer. (FTP Directory listings are always executed in ASCII mode,
however.)

[![top](../images/up.gif)](#page-header)

## How can I do FTP upload?

Currently, only GET is supported for FTP in mod\_proxy. You can
of course use HTTP upload (POST or PUT) through an Apache proxy.

[![top](../images/up.gif)](#page-header)

## How can I access FTP files outside of my home directory?

An FTP URI is interpreted relative to the home directory of the user
who is logging in. Alas, to reach higher directory levels you cannot
use /../, as the dots are interpreted by the browser and not actually
sent to the FTP server. To address this problem, the so called Squid
%2f hack was implemented in the Apache FTP proxy; it is a
solution which is also used by other popular proxy servers like the [Squid Proxy Cache](http://www.squid-cache.org/). By
prepending `/%2f` to the path of your request, you can make
such a proxy change the FTP starting directory to `/` (instead
of the home directory). For example, to retrieve the file
`/etc/motd`, you would use the URL:

`ftp://user@host/%2f/etc/motd`

[![top](../images/up.gif)](#page-header)

## How can I hide the FTP cleartext password in my browser's URL line?

To log in to an FTP server by username and password, Apache uses
different strategies. In absense of a user name and password in the URL
altogether, Apache sends an anonymous login to the FTP server,
*i.e.*,

`user: anonymous  
password: apache_proxy@`

This works for all popular FTP servers which are configured for
anonymous access.

For a personal login with a specific username, you can embed the user
name into the URL, like in:

`ftp://username@host/myfile`

If the FTP server asks for a password when given this username (which
it should), then Apache will reply with a `401` (Authorization
required) response, which causes the Browser to pop up the
username/password dialog. Upon entering the password, the connection
attempt is retried, and if successful, the requested resource is
presented. The advantage of this procedure is that your browser does not
display the password in cleartext (which it would if you had used

`ftp://username:password@host/myfile`

in the first place).

### Note

The password which is transmitted in such a way is not encrypted on
its way. It travels between your browser and the Apache proxy server in
a base64-encoded cleartext string, and between the Apache proxy and the
FTP server as plaintext. You should therefore think twice before
accessing your FTP server via HTTP (or before accessing your personal
files via FTP at all!) When using insecure channels, an eavesdropper
might intercept your password on its way.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_proxy_ftp.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_proxy_ftp.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
