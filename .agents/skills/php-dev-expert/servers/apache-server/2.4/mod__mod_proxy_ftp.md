# mod_proxy_ftp - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_proxy_ftp.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

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
  file xxx?](#type)
- ![](../images/down.gif) [How can I do FTP upload?](#ftpnonget)
- ![](../images/down.gif) [How can I access FTP files outside
  of my home directory?](#percent2fhck)
- ![](../images/down.gif) [How can I hide the FTP cleartext password
  in my browser's URL line?](#ftppass)
- ![](../images/down.gif) [Why do I get a file listing when I expected
  a file to be downloaded?](#wildcard)

### Directives

- ![](../images/down.gif) [ProxyFtpDirCharset](#proxyftpdircharset)
- ![](../images/down.gif) [ProxyFtpEscapeWildcards](#proxyftpescapewildcards)
- ![](../images/down.gif) [ProxyFtpListOnWildcard](#proxyftplistonwildcard)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_proxy_ftp)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_proxy_ftp)

### See also

- `mod_proxy`

[![top](../images/up.gif)](#page-header)

## Why doesn't file type xxx download via FTP? [¶](#mimetypes "Permanent link")

You probably don't have that particular file type defined as
`application/octet-stream` in your proxy's mime.types
configuration file. A useful line can be:

```
application/octet-stream   bin dms lha lzh exe class tgz taz
```

Alternatively you may prefer to use the `ForceType`
directive to default everything to binary:

```
ForceType application/octet-stream
```

[![top](../images/up.gif)](#page-header)

## How can I force an FTP ASCII download of file xxx? [¶](#type "Permanent link")

In the rare situation where you must download a specific file using the
FTP `ASCII` transfer method (while the default transfer is in
`binary` mode), you can override `mod_proxy`'s
default by suffixing the request with `;type=a` to force an
ASCII transfer. (FTP Directory listings are always executed in ASCII mode,
however.)

[![top](../images/up.gif)](#page-header)

## How can I do FTP upload? [¶](#ftpnonget "Permanent link")

Currently, only GET is supported for FTP in `mod_proxy`. You can
of course use HTTP upload (POST or PUT) through an Apache proxy.

[![top](../images/up.gif)](#page-header)

## How can I access FTP files outside of my home directory? [¶](#percent2fhck "Permanent link")

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

## How can I hide the FTP cleartext password in my browser's URL line? [¶](#ftppass "Permanent link")

To log in to an FTP server by username and password, Apache uses
different strategies. In absence of a user name and password in the URL
altogether, Apache sends an anonymous login to the FTP server,
*i.e.*,

`user: anonymous  
password: apache-proxy@`

This works for all popular FTP servers which are configured for
anonymous access.

For a personal login with a specific username, you can embed the user
name into the URL, like in:

`ftp://username@host/myfile`

### HttpProtocolOptions

By default, `HttpProtocolOptions` is set to `Strict`,
which rejects URLs containing userinfo (username or password)
per RFC 7230. To use credentials in FTP URLs, you must set
`HttpProtocolOptions Unsafe`.

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

[![top](../images/up.gif)](#page-header)

## Why do I get a file listing when I expected a file to be downloaded? [¶](#wildcard "Permanent link")

In order to allow both browsing the directories on an FTP server and
downloading files, Apache looks at the request URL. If it looks like
a directory, or contains wildcard characters ("\*?[{~"), then it
guesses that a listing is wanted instead of a download.

You can disable the special handling of names with wildcard characters.
See the `ProxyFtpListOnWildcard` directive.

[![top](../images/up.gif)](#page-header)

## ProxyFtpDirCharset Directive [¶](#proxyftpdircharset "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Define the character set for proxied FTP listings |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyFtpDirCharset character_set` |
| [Default:](mod__directive-dict.md#Default) | `ProxyFtpDirCharset ISO-8859-1` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_ftp |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.2.7 and later. Moved from `mod_proxy` in Apache 2.3.5. |

The `ProxyFtpDirCharset` directive defines the
character set to be set for FTP directory listings in HTML generated by
`mod_proxy_ftp`.

[![top](../images/up.gif)](#page-header)

## ProxyFtpEscapeWildcards Directive [¶](#proxyftpescapewildcards "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Whether wildcards in requested filenames are escaped when sent to the FTP server |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyFtpEscapeWildcards on|off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyFtpEscapeWildcards on` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_ftp |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.3.3 and later |

The `ProxyFtpEscapeWildcards` directive
controls whether wildcard characters ("\*?[{~") in requested
filenames are escaped with backslash before sending them to the
FTP server. That is the default behavior, but many FTP servers
don't know about the escaping and try to serve the literal filenames
they were sent, including the backslashes in the names.

Set to "off" to allow downloading files with wildcards
in their names from FTP servers that don't understand wildcard
escaping.

[![top](../images/up.gif)](#page-header)

## ProxyFtpListOnWildcard Directive [¶](#proxyftplistonwildcard "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Whether wildcards in requested filenames trigger a file listing |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyFtpListOnWildcard on|off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyFtpListOnWildcard on` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_ftp |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.3.3 and later |

The `ProxyFtpListOnWildcard` directive
controls whether wildcard characters ("\*?[{~") in requested
filenames cause `mod_proxy_ftp` to return a listing
of files instead of downloading a file. By default (value on),
they do.

Set to "off" to allow downloading files even if they
have wildcard characters in their names.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_proxy_ftp.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_proxy_ftp.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
