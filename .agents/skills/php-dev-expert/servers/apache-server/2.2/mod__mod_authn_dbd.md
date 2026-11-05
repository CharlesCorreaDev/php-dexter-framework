# mod_authn_dbd - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authn_dbd.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authn_dbd.html) to go to the current version of this document.

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

- ![](../images/down.gif) [Configuration Example](#example)
- ![](../images/down.gif) [Exposing Login Information](#exposed)

### Directives

- ![](../images/down.gif) [AuthDBDUserPWQuery](#authdbduserpwquery)
- ![](../images/down.gif) [AuthDBDUserRealmQuery](#authdbduserrealmquery)

### See also

- `AuthName`
- `AuthType`
- `AuthBasicProvider`
- `AuthDigestProvider`
- `DBDriver`
- `DBDParams`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Configuration Example

This simple example shows use of this module in the context of
the Authentication and DBD frameworks. Please note that you need
to load an authorization module, such as `mod_authz_user`,
to get it working.

```
# mod_dbd configuration
DBDriver pgsql
DBDParams "dbname=apacheauth user=apache password=xxxxxx"

DBDMin  4
DBDKeep 8
DBDMax  20
DBDExptime 300

<Directory /usr/www/myhost/private>
  # core authentication and mod_auth_basic configuration
  # for mod_authn_dbd
  AuthType Basic
  AuthName "My Server"
  AuthBasicProvider dbd

  # core authorization configuration
  Require valid-user

  # mod_authn_dbd SQL query to authenticate a user
  AuthDBDUserPWQuery \
    "SELECT password FROM authn WHERE user = %s"
</Directory>
```

[![top](../images/up.gif)](#page-header)

## Exposing Login Information

If httpd was built against [APR](glossary.md#apr "see glossary") version 1.3.0
or higher, then whenever a query is made to the database server, all
column values in the first row returned by the query are placed in the
environment, using environment variables with the prefix "AUTHENTICATE\_".

If a database query for example returned the username, full name
and telephone number of a user, a CGI program will have access to
this information without the need to make a second independent database
query to gather this additional information.

This has the potential to dramatically simplify the coding and
configuration required in some web applications.

[![top](../images/up.gif)](#page-header)

## AuthDBDUserPWQuery Directive

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

### Example

```
AuthDBDUserPWQuery \
  "SELECT password FROM authn WHERE user = %s"
```

The first column value of the first row returned by the query
statement should be a string containing the encrypted password.
Subsequent rows will be ignored. If no rows are returned, the user
will not be authenticated through `mod_authn_dbd`.

If httpd was built against [APR](glossary.md#apr "see glossary") version 1.3.0
or higher, any additional column values in the first row returned by
the query statement will be stored as environment variables with
names of the form `AUTHENTICATE_COLUMN`.

The encrypted password format depends on which authentication
frontend (e.g. `mod_auth_basic` or
`mod_auth_digest`) is being used. See [Password Formats](misc__password_encryptions.md) for
more information.

[![top](../images/up.gif)](#page-header)

## AuthDBDUserRealmQuery Directive

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

### Example

```
AuthDBDUserRealmQuery \
  "SELECT password FROM authn WHERE user = %s AND realm = %s"
```

The first column value of the first row returned by the query
statement should be a string containing the encrypted password.
Subsequent rows will be ignored. If no rows are returned, the user
will not be authenticated through `mod_authn_dbd`.

If httpd was built against [APR](glossary.md#apr "see glossary") version 1.3.0
or higher, any additional column values in the first row returned by
the query statement will be stored as environment variables with
names of the form `AUTHENTICATE_COLUMN`.

The encrypted password format depends on which authentication
frontend (e.g. `mod_auth_basic` or
`mod_auth_digest`) is being used. See [Password Formats](misc__password_encryptions.md) for
more information.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authn_dbd.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
