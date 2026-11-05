# mod_session_cookie - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_session_cookie.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_session\_cookie

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Cookie based session support |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | session\_cookie\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_session\_cookie.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Summary

### Warning

The session modules make use of HTTP cookies, and as such can fall
victim to Cross Site Scripting attacks, or expose potentially private
information to clients. Please ensure that the relevant risks have
been taken into account before enabling the session functionality on
your server.

This submodule of `mod_session` provides support for the
storage of user sessions on the remote browser within HTTP cookies.

Using cookies to store a session removes the need for the server or
a group of servers to store the session locally, or collaborate to share
a session, and can be useful for high traffic environments where a
server based session might be too resource intensive.

If session privacy is required, the `mod_session_crypto`
module can be used to encrypt the contents of the session before writing
the session to the client.

For more details on the session interface, see the documentation for
the `mod_session` module.

### Topics

- ![](../images/down.gif) [Basic Examples](#basicexamples)

### Directives

- ![](../images/down.gif) [SessionCookieName](#sessioncookiename)
- ![](../images/down.gif) [SessionCookieName2](#sessioncookiename2)
- ![](../images/down.gif) [SessionCookieRemove](#sessioncookieremove)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_session_cookie)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_session_cookie)

### See also

- `mod_session`
- `mod_session_crypto`
- `mod_session_dbd`

[![top](../images/up.gif)](#page-header)

## Basic Examples [¶](#basicexamples "Permanent link")

To create a simple session and store it in a cookie called
session, configure the session as follows:

### Browser based session

```
Session On
SessionCookieName session path=/
```

For more examples on how the session can be configured to be read
from and written to by a CGI application, see the
`mod_session` examples section.

For documentation on how the session can be used to store username
and password details, see the `mod_auth_form` module.

[![top](../images/up.gif)](#page-header)

## SessionCookieName Directive [¶](#sessioncookiename "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Name and attributes for the RFC2109 cookie storing the session |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionCookieName name attributes` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_cookie |

The `SessionCookieName` directive specifies the name and
optional attributes of an RFC2109 compliant cookie inside which the session will
be stored. RFC2109 cookies are set using the `Set-Cookie` HTTP header.

An optional list of cookie attributes can be specified, as per the example below.
These attributes are inserted into the cookie as is, and are not interpreted by
Apache. Ensure that your attributes are defined correctly as per the cookie specification.

### Cookie with attributes

```
Session On
SessionCookieName session path=/private;domain=example.com;httponly;secure;version=1;
```

[![top](../images/up.gif)](#page-header)

## SessionCookieName2 Directive [¶](#sessioncookiename2 "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Name and attributes for the RFC2965 cookie storing the session |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionCookieName2 name attributes` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_cookie |

The `SessionCookieName2` directive specifies the name and
optional attributes of an RFC2965 compliant cookie inside which the session will
be stored. RFC2965 cookies are set using the `Set-Cookie2` HTTP header.

An optional list of cookie attributes can be specified, as per the example below.
These attributes are inserted into the cookie as is, and are not interpreted by
Apache. Ensure that your attributes are defined correctly as per the cookie specification.

### Cookie2 with attributes

```
Session On
SessionCookieName2 session path=/private;domain=example.com;httponly;secure;version=1;
```

[![top](../images/up.gif)](#page-header)

## SessionCookieRemove Directive [¶](#sessioncookieremove "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Control for whether session cookies should be removed from incoming HTTP headers |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionCookieRemove On|Off` |
| [Default:](mod__directive-dict.md#Default) | `SessionCookieRemove Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_cookie |

The `SessionCookieRemove` flag controls whether the cookies
containing the session will be removed from the headers during request processing.

In a reverse proxy situation where the Apache server acts as a server frontend for
a backend origin server, revealing the contents of the session cookie to the backend
could be a potential privacy violation. When set to on, the session cookie will be
removed from the incoming HTTP headers.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_session_cookie.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_session_cookie.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
