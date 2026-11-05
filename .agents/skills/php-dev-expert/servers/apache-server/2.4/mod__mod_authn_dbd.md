# mod_authn_dbd - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authn_dbd.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authn\_dbd

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | User authentication using an SQL database |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authn\_dbd\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authn\_dbd.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module provides authentication front-ends such as
`mod_auth_digest` and `mod_auth_basic`
to authenticate users by looking up users in SQL tables.
Similar functionality is provided by, for example,
`mod_authn_file`.

This module relies on `mod_dbd` to specify
the backend database driver and connection parameters, and
manage the database connections.

When using `mod_auth_basic` or
`mod_auth_digest`, this module is invoked via the
`AuthBasicProvider` or
`AuthDigestProvider`
with the `dbd` value.

### Topics

- ![](../images/down.gif) [Performance and Caching](#socache)
- ![](../images/down.gif) [Configuration Example](#example)
- ![](../images/down.gif) [Exposing Login Information](#exposed)

### Directives

- ![](../images/down.gif) [AuthDBDUserPWQuery](#authdbduserpwquery)
- ![](../images/down.gif) [AuthDBDUserRealmQuery](#authdbduserrealmquery)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authn_dbd)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authn_dbd)

### See also

- `AuthName`
- `AuthType`
- `AuthBasicProvider`
- `AuthDigestProvider`
- `DBDriver`
- `DBDParams`
- [Password Formats](misc__password_encryptions.md)

[![top](../images/up.gif)](#page-header)

## Performance and Caching [¶](#socache "Permanent link")

Some users of DBD authentication in HTTPD 2.2/2.4 have reported that it
imposes a problematic load on the database. This is most likely where
an HTML page contains hundreds of objects (e.g. images, scripts, etc)
each of which requires authentication. Users affected (or concerned)
by this kind of problem should use `mod_authn_socache`
to cache credentials and take most of the load off the database.

[![top](../images/up.gif)](#page-header)

## Configuration Example [¶](#example "Permanent link")

This simple example shows use of this module in the context of
the Authentication and DBD frameworks.

```
# mod_dbd configuration
# UPDATED to include authentication caching
DBDriver pgsql
DBDParams "dbname=apacheauth user=apache password=xxxxxx"

DBDMin  4
DBDKeep 8
DBDMax  20
DBDExptime 300

<Directory "/usr/www/myhost/private">
  # mod_authn_core and mod_auth_basic configuration
  # for mod_authn_dbd
  AuthType Basic
  AuthName "My Server"

  # To cache credentials, put socache ahead of dbd here
  AuthBasicProvider socache dbd

  # Also required for caching: tell the cache to cache dbd lookups!
  AuthnCacheProvideFor dbd
  AuthnCacheContext my-server

  # mod_authz_core configuration
  Require valid-user

  # mod_authn_dbd SQL query to authenticate a user
  AuthDBDUserPWQuery "SELECT password FROM authn WHERE user = %s"
</Directory>
```

[![top](../images/up.gif)](#page-header)

## Exposing Login Information [¶](#exposed "Permanent link")

Whenever a query is made to the database server, all
column values in the first row returned by the query are placed in the
environment, using environment variables with the prefix "AUTHENTICATE\_".

If a database query for example returned the username, full name
and telephone number of a user, a CGI program will have access to
this information without the need to make a second independent database
query to gather this additional information.

This has the potential to dramatically simplify the coding and
configuration required in some web applications.

[![top](../images/up.gif)](#page-header)

## AuthDBDUserPWQuery Directive [¶](#authdbduserpwquery "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | SQL query to look up a password for a user |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDBDUserPWQuery query` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_dbd |

The `AuthDBDUserPWQuery` specifies an
SQL query to look up a password for a specified user. The user's ID
will be passed as a single string parameter when the SQL query is
executed. It may be referenced within the query statement using
a `%s` format specifier.

```
AuthDBDUserPWQuery "SELECT password FROM authn WHERE user = %s"
```

The first column value of the first row returned by the query
statement should be a string containing the encrypted password.
Subsequent rows will be ignored. If no rows are returned, the user
will not be authenticated through `mod_authn_dbd`.

Any additional column values in the first row returned by
the query statement will be stored as environment variables with
names of the form `AUTHENTICATE_COLUMN`.

The encrypted password format depends on which authentication
frontend (e.g. `mod_auth_basic` or
`mod_auth_digest`) is being used. See [Password Formats](misc__password_encryptions.md) for
more information.

[![top](../images/up.gif)](#page-header)

## AuthDBDUserRealmQuery Directive [¶](#authdbduserrealmquery "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | SQL query to look up a password hash for a user and realm. |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDBDUserRealmQuery query` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_dbd |

The `AuthDBDUserRealmQuery` specifies an
SQL query to look up a password for a specified user and realm in a
digest authentication process.
The user's ID and the realm, in that order, will be passed as string
parameters when the SQL query is executed. They may be referenced
within the query statement using `%s` format specifiers.

```
AuthDBDUserRealmQuery "SELECT password FROM authn WHERE user = %s AND realm = %s"
```

The first column value of the first row returned by the query
statement should be a string containing the encrypted password.
Subsequent rows will be ignored. If no rows are returned, the user
will not be authenticated through `mod_authn_dbd`.

Any additional column values in the first row returned by
the query statement will be stored as environment variables with
names of the form `AUTHENTICATE_COLUMN`.

The encrypted password format depends on which authentication
frontend (e.g. `mod_auth_basic` or
`mod_auth_digest`) is being used. See [Password Formats](misc__password_encryptions.md) for
more information.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authn_dbd.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authn_dbd.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
