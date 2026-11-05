# mod_session_dbd - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_session_dbd.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_session\_dbd

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | DBD/SQL based session support |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | session\_dbd\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_session\_dbd.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Summary

### Warning

The session modules make use of HTTP cookies, and as such can fall
victim to Cross Site Scripting attacks, or expose potentially private
information to clients. Please ensure that the relevant risks have
been taken into account before enabling the session functionality on
your server.

This submodule of `mod_session` provides support for the
storage of user sessions within a SQL database using the
`mod_dbd` module.

Sessions can either be **anonymous**, where the session is
keyed by a unique UUID string stored on the browser in a cookie, or
**per user**, where the session is keyed against the userid of
the logged in user.

SQL based sessions are hidden from the browser, and so offer a measure of
privacy without the need for encryption.

Different webservers within a server farm may choose to share a database,
and so share sessions with one another.

For more details on the session interface, see the documentation for
the `mod_session` module.

### Topics

- ![](../images/down.gif) [DBD Configuration](#dbdconfig)
- ![](../images/down.gif) [Anonymous Sessions](#anonymous)
- ![](../images/down.gif) [Per User Sessions](#peruser)
- ![](../images/down.gif) [Database Housekeeping](#housekeeping)

### Directives

- ![](../images/down.gif) [SessionDBDCookieName](#sessiondbdcookiename)
- ![](../images/down.gif) [SessionDBDCookieName2](#sessiondbdcookiename2)
- ![](../images/down.gif) [SessionDBDCookieRemove](#sessiondbdcookieremove)
- ![](../images/down.gif) [SessionDBDDeleteLabel](#sessiondbddeletelabel)
- ![](../images/down.gif) [SessionDBDInsertLabel](#sessiondbdinsertlabel)
- ![](../images/down.gif) [SessionDBDPerUser](#sessiondbdperuser)
- ![](../images/down.gif) [SessionDBDSelectLabel](#sessiondbdselectlabel)
- ![](../images/down.gif) [SessionDBDUpdateLabel](#sessiondbdupdatelabel)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_session_dbd)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_session_dbd)

### See also

- `mod_session`
- `mod_session_crypto`
- `mod_session_cookie`
- `mod_dbd`

[![top](../images/up.gif)](#page-header)

## DBD Configuration [¶](#dbdconfig "Permanent link")

Before the `mod_session_dbd` module can be configured to maintain a
session, the `mod_dbd` module must be configured to make the various database queries
available to the server.

There are four queries required to keep a session maintained, to select an existing session,
to update an existing session, to insert a new session, and to delete an expired or empty
session. These queries are configured as per the example below.

### Sample DBD configuration

```
DBDriver pgsql
DBDParams "dbname=apachesession user=apache password=xxxxx host=localhost"
DBDPrepareSQL "delete from session where key = %s" deletesession
DBDPrepareSQL "update session set value = %s, expiry = %lld, key = %s where key = %s" updatesession
DBDPrepareSQL "insert into session (value, expiry, key) values (%s, %lld, %s)" insertsession
DBDPrepareSQL "select value from session where key = %s and (expiry = 0 or expiry > %lld)" selectsession
DBDPrepareSQL "delete from session where expiry != 0 and expiry < %lld" cleansession
```

[![top](../images/up.gif)](#page-header)

## Anonymous Sessions [¶](#anonymous "Permanent link")

Anonymous sessions are keyed against a unique UUID, and stored on the
browser within an HTTP cookie. This method is similar to that used by most
application servers to store session information.

To create a simple anonymous session and store it in a postgres database
table called apachesession, and save the session ID in a cookie
called session, configure the session as follows:

### SQL based anonymous session

```
Session On
SessionDBDCookieName session path=/
```

For more examples on how the session can be configured to be read
from and written to by a CGI application, see the
`mod_session` examples section.

For documentation on how the session can be used to store username
and password details, see the `mod_auth_form` module.

[![top](../images/up.gif)](#page-header)

## Per User Sessions [¶](#peruser "Permanent link")

Per user sessions are keyed against the username of a successfully
authenticated user. It offers the most privacy, as no external handle
to the session exists outside of the authenticated realm.

Per user sessions work within a correctly configured authenticated
environment, be that using basic authentication, digest authentication
or SSL client certificates. Due to the limitations of who came first,
the chicken or the egg, per user sessions cannot be used to store
authentication credentials from a module like
`mod_auth_form`.

To create a simple per user session and store it in a postgres database
table called apachesession, and with the session keyed to the
userid, configure the session as follows:

### SQL based per user session

```
Session On
SessionDBDPerUser On
```

[![top](../images/up.gif)](#page-header)

## Database Housekeeping [¶](#housekeeping "Permanent link")

Over the course of time, the database can be expected to start accumulating
expired sessions. At this point, the `mod_session_dbd` module
is not yet able to handle session expiry automatically.

### Warning

The administrator will need to set up an external process via cron to clean
out expired sessions.

[![top](../images/up.gif)](#page-header)

## SessionDBDCookieName Directive [¶](#sessiondbdcookiename "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Name and attributes for the RFC2109 cookie storing the session ID |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionDBDCookieName name attributes` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_dbd |

The `SessionDBDCookieName` directive specifies the name and
optional attributes of an RFC2109 compliant cookie inside which the session ID will
be stored. RFC2109 cookies are set using the `Set-Cookie` HTTP header.

An optional list of cookie attributes can be specified, as per the example below.
These attributes are inserted into the cookie as is, and are not interpreted by
Apache. Ensure that your attributes are defined correctly as per the cookie specification.

### Cookie with attributes

```
Session On
SessionDBDCookieName session path=/private;domain=example.com;httponly;secure;version=1;
```

[![top](../images/up.gif)](#page-header)

## SessionDBDCookieName2 Directive [¶](#sessiondbdcookiename2 "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Name and attributes for the RFC2965 cookie storing the session ID |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionDBDCookieName2 name attributes` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_dbd |

The `SessionDBDCookieName2` directive specifies the name and
optional attributes of an RFC2965 compliant cookie inside which the session ID will
be stored. RFC2965 cookies are set using the `Set-Cookie2` HTTP header.

An optional list of cookie attributes can be specified, as per the example below.
These attributes are inserted into the cookie as is, and are not interpreted by
Apache. Ensure that your attributes are defined correctly as per the cookie specification.

### Cookie2 with attributes

```
Session On
SessionDBDCookieName2 session path=/private;domain=example.com;httponly;secure;version=1;
```

[![top](../images/up.gif)](#page-header)

## SessionDBDCookieRemove Directive [¶](#sessiondbdcookieremove "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Control for whether session ID cookies should be removed from incoming HTTP headers |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionDBDCookieRemove On|Off` |
| [Default:](mod__directive-dict.md#Default) | `SessionDBDCookieRemove On` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_dbd |

The `SessionDBDCookieRemove` flag controls whether the cookies
containing the session ID will be removed from the headers during request processing.

In a reverse proxy situation where the Apache server acts as a server frontend for
a backend origin server, revealing the contents of the session ID cookie to the backend
could be a potential privacy violation. When set to on, the session ID cookie will be
removed from the incoming HTTP headers.

[![top](../images/up.gif)](#page-header)

## SessionDBDDeleteLabel Directive [¶](#sessiondbddeletelabel "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The SQL query to use to remove sessions from the database |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionDBDDeleteLabel label` |
| [Default:](mod__directive-dict.md#Default) | `SessionDBDDeleteLabel deletesession` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_dbd |

The `SessionDBDDeleteLabel` directive sets the default delete
query label to be used to delete an expired or empty session. This label must have been previously
defined using the `DBDPrepareSQL` directive.

[![top](../images/up.gif)](#page-header)

## SessionDBDInsertLabel Directive [¶](#sessiondbdinsertlabel "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The SQL query to use to insert sessions into the database |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionDBDInsertLabel label` |
| [Default:](mod__directive-dict.md#Default) | `SessionDBDInsertLabel insertsession` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_dbd |

The `SessionDBDInsertLabel` directive sets the default insert
query label to be used to load in a session. This label must have been previously defined using the
`DBDPrepareSQL` directive.

If an attempt to update the session affects no rows, this query will be called to insert the
session into the database.

[![top](../images/up.gif)](#page-header)

## SessionDBDPerUser Directive [¶](#sessiondbdperuser "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable a per user session |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionDBDPerUser On|Off` |
| [Default:](mod__directive-dict.md#Default) | `SessionDBDPerUser Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_dbd |

The `SessionDBDPerUser` flag enables a per user session keyed
against the user's login name. If the user is not logged in, this directive will be
ignored.

[![top](../images/up.gif)](#page-header)

## SessionDBDSelectLabel Directive [¶](#sessiondbdselectlabel "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The SQL query to use to select sessions from the database |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionDBDSelectLabel label` |
| [Default:](mod__directive-dict.md#Default) | `SessionDBDSelectLabel selectsession` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_dbd |

The `SessionDBDSelectLabel` directive sets the default select
query label to be used to load in a session. This label must have been previously defined using the
`DBDPrepareSQL` directive.

[![top](../images/up.gif)](#page-header)

## SessionDBDUpdateLabel Directive [¶](#sessiondbdupdatelabel "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The SQL query to use to update existing sessions in the database |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionDBDUpdateLabel label` |
| [Default:](mod__directive-dict.md#Default) | `SessionDBDUpdateLabel updatesession` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_dbd |

The `SessionDBDUpdateLabel` directive sets the default update
query label to be used to load in a session. This label must have been previously defined using the
`DBDPrepareSQL` directive.

If an attempt to update the session affects no rows, the insert query will be
called to insert the session into the database. If the database supports InsertOrUpdate,
override this query to perform the update in one query instead of two.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_session_dbd.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_session_dbd.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
