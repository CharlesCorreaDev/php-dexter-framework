# mod_authz_dbd - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authz_dbd.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authz\_dbd

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Group Authorization and Login using SQL |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authz\_dbd\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authz\_dbd.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.4 and later |

### Summary

This module provides authorization capabilities so that
authenticated users can be allowed or denied access to portions
of the web site by group membership. Similar functionality is
provided by `mod_authz_groupfile` and
`mod_authz_dbm`, with the exception that
this module queries a SQL database to determine whether a
user is a member of a group.

This module can also provide database-backed user login/logout
capabilities. These are likely to be of most value when used
in conjunction with `mod_authn_dbd`.

This module relies on `mod_dbd` to specify
the backend database driver and connection parameters, and
manage the database connections.

### Topics

- ![](../images/down.gif) [The Require Directives](#requiredirectives)
- ![](../images/down.gif) [Database Login](#login)
- ![](../images/down.gif) [Client Login integration](#client)
- ![](../images/down.gif) [Configuration example](#example)

### Directives

- ![](../images/down.gif) [AuthzDBDLoginToReferer](#authzdbdlogintoreferer)
- ![](../images/down.gif) [AuthzDBDQuery](#authzdbdquery)
- ![](../images/down.gif) [AuthzDBDRedirectQuery](#authzdbdredirectquery)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authz_dbd)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authz_dbd)

### See also

- `Require`
- `AuthDBDUserPWQuery`
- `DBDriver`
- `DBDParams`

[![top](../images/up.gif)](#page-header)

## The Require Directives [¶](#requiredirectives "Permanent link")

Apache's `Require`
directives are used during the authorization phase to ensure that
a user is allowed to access a resource. mod\_authz\_dbd extends the
authorization types with `dbd-group`, `dbd-login` and
`dbd-logout`.

Since v2.4.8, [expressions](expr.md) are supported
within the DBD require directives.

### Require dbd-group

This directive specifies group membership that is required for the
user to gain access.

```
Require dbd-group team
AuthzDBDQuery "SELECT user_group FROM authz WHERE user = %s"
```

### Require dbd-login

This directive specifies a query to be run indicating the user
has logged in.

```
Require dbd-login
AuthzDBDQuery "UPDATE authn SET login = 'true' WHERE user = %s"
```

### Require dbd-logout

This directive specifies a query to be run indicating the user
has logged out.

```
Require dbd-logout
AuthzDBDQuery "UPDATE authn SET login = 'false' WHERE user = %s"
```

[![top](../images/up.gif)](#page-header)

## Database Login [¶](#login "Permanent link")

In addition to the standard authorization function of checking group
membership, this module can also provide server-side user session
management via database-backed login/logout capabilities.
Specifically, it can update a user's session status in the database
whenever the user visits designated URLs (subject of course to users
supplying the necessary credentials).

This works by defining two special
`Require` types:
`Require dbd-login` and `Require dbd-logout`.
For usage details, see the configuration example below.

[![top](../images/up.gif)](#page-header)

## Client Login integration [¶](#client "Permanent link")

Some administrators may wish to implement client-side session
management that works in concert with the server-side login/logout
capabilities offered by this module, for example, by setting or unsetting
an HTTP cookie or other such token when a user logs in or out.

To support such integration, `mod_authz_dbd` exports an
optional hook that will be run whenever a user's status is updated in
the database. Other session management modules can then use the hook
to implement functions that start and end client-side sessions.

[![top](../images/up.gif)](#page-header)

## Configuration example [¶](#example "Permanent link")

```
# mod_dbd configuration
DBDriver pgsql
DBDParams "dbname=apacheauth user=apache pass=xxxxxx"

DBDMin  4
DBDKeep 8
DBDMax  20
DBDExptime 300

<Directory "/usr/www/my.site/team-private/">
  # mod_authn_core and mod_auth_basic configuration
  # for mod_authn_dbd
  AuthType Basic
  AuthName Team
  AuthBasicProvider dbd

  # mod_authn_dbd SQL query to authenticate a logged-in user
  AuthDBDUserPWQuery \
    "SELECT password FROM authn WHERE user = %s AND login = 'true'"

  # mod_authz_core configuration for mod_authz_dbd
  Require dbd-group team

  # mod_authz_dbd configuration
  AuthzDBDQuery "SELECT group FROM authz WHERE user = %s"

  # when a user fails to be authenticated or authorized,
  # invite them to login; this page should provide a link
  # to /team-private/login.html
  ErrorDocument 401 "/login-info.html"

  <Files "login.html">
    # don't require user to already be logged in!
    AuthDBDUserPWQuery "SELECT password FROM authn WHERE user = %s"

    # dbd-login action executes a statement to log user in
    Require dbd-login
    AuthzDBDQuery "UPDATE authn SET login = 'true' WHERE user = %s"

    # return user to referring page (if any) after
    # successful login
    AuthzDBDLoginToReferer On
  </Files>

  <Files "logout.html">
    # dbd-logout action executes a statement to log user out
    Require dbd-logout
    AuthzDBDQuery "UPDATE authn SET login = 'false' WHERE user = %s"
  </Files>
</Directory>
```

[![top](../images/up.gif)](#page-header)

## AuthzDBDLoginToReferer Directive [¶](#authzdbdlogintoreferer "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines whether to redirect the Client to the Referring page on successful login or logout if a `Referer` request header is present |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthzDBDLoginToReferer On|Off` |
| [Default:](mod__directive-dict.md#Default) | `AuthzDBDLoginToReferer Off` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_dbd |

In conjunction with `Require dbd-login` or
`Require dbd-logout`, this provides the option to
redirect the client back to the Referring page (the URL in
the `Referer` HTTP request header, if present).
When there is no `Referer` header,
`AuthzDBDLoginToReferer On` will be ignored.

[![top](../images/up.gif)](#page-header)

## AuthzDBDQuery Directive [¶](#authzdbdquery "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify the SQL Query for the required operation |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthzDBDQuery query` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_dbd |

The `AuthzDBDQuery` specifies an SQL
query to run. The purpose of the query depends on the
`Require` directive in
effect.

- When used with a `Require dbd-group` directive,
  it specifies a query to look up groups for the current user. This is
  the standard functionality of other authorization modules such as
  `mod_authz_groupfile` and `mod_authz_dbm`.
  The first column value of each row returned by the query statement
  should be a string containing a group name. Zero, one, or more rows
  may be returned.

  ```
  Require dbd-group
  AuthzDBDQuery "SELECT group FROM groups WHERE user = %s"
  ```
- When used with a `Require dbd-login` or
  `Require dbd-logout` directive, it will never deny access,
  but will instead execute a SQL statement designed to log the user
  in or out. The user must already be authenticated with
  `mod_authn_dbd`.

  ```
  Require dbd-login
  AuthzDBDQuery "UPDATE authn SET login = 'true' WHERE user = %s"
  ```

In all cases, the user's ID will be passed as a single string
parameter when the SQL query is executed. It may be referenced within
the query statement using a `%s` format specifier.

[![top](../images/up.gif)](#page-header)

## AuthzDBDRedirectQuery Directive [¶](#authzdbdredirectquery "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify a query to look up a login page for the user |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthzDBDRedirectQuery query` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_dbd |

Specifies an optional SQL query to use after successful login
(or logout) to redirect the user to a URL, which may be
specific to the user. The user's ID will be passed as a single string
parameter when the SQL query is executed. It may be referenced within
the query statement using a `%s` format specifier.

```
AuthzDBDRedirectQuery "SELECT userpage FROM userpages WHERE user = %s"
```

The first column value of the first row returned by the query
statement should be a string containing a URL to which to redirect
the client. Subsequent rows will be ignored. If no rows are returned,
the client will not be redirected.

Note that `AuthzDBDLoginToReferer` takes
precedence if both are set.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authz_dbd.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authz_dbd.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
