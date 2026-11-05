# mod_dbd - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_dbd.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_dbd

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Manages SQL database connections |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | dbd\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_dbd.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Version 2.1 and later |

### Summary

`mod_dbd` manages SQL database connections using
[APR](glossary.md#apr "see glossary"). It provides database connections on request
to modules requiring SQL database functions, and takes care of
managing databases with optimal efficiency and scalability
for both threaded and non-threaded MPMs. For details, see the
[APR](http://apr.apache.org/) website.

### Topics

- ![](../images/down.gif) [Connection Pooling](#pooling)
- ![](../images/down.gif) [Connecting](#connecting)
- ![](../images/down.gif) [Apache DBD API](#API)
- ![](../images/down.gif) [SQL Prepared Statements](#prepared)
- ![](../images/down.gif) [SECURITY WARNING](#security)

### Directives

- ![](../images/down.gif) [DBDExptime](#dbdexptime)
- ![](../images/down.gif) [DBDInitSQL](#dbdinitsql)
- ![](../images/down.gif) [DBDKeep](#dbdkeep)
- ![](../images/down.gif) [DBDMax](#dbdmax)
- ![](../images/down.gif) [DBDMin](#dbdmin)
- ![](../images/down.gif) [DBDParams](#dbdparams)
- ![](../images/down.gif) [DBDPersist](#dbdpersist)
- ![](../images/down.gif) [DBDPrepareSQL](#dbdpreparesql)
- ![](../images/down.gif) [DBDriver](#dbdriver)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_dbd)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_dbd)

### See also

- [Password Formats](misc__password_encryptions.md)

[![top](../images/up.gif)](#page-header)

## Connection Pooling [¶](#pooling "Permanent link")

This module manages database connections, in a manner
optimized for the platform. On non-threaded platforms,
it provides a persistent connection in the manner of
classic LAMP (Linux, Apache, Mysql, Perl/PHP/Python).
On threaded platform, it provides an altogether more
scalable and efficient *connection pool*, as
described in [this
article at ApacheTutor](http://www.apachetutor.org/dev/reslist). Note that `mod_dbd`
supersedes the modules presented in that article.

[![top](../images/up.gif)](#page-header)

## Connecting [¶](#connecting "Permanent link")

To connect to your database, you'll need to specify
a driver, and connection parameters. These vary from
one database engine to another. For example, to connect
to mysql, do the following:

```
DBDriver mysql
DBDParams host=localhost,dbname=pony,user=shetland,pass=appaloosa
```

You can then use this connection in a variety of other
modules, including `mod_rewrite`,
`mod_authn_dbd`, and `mod_lua`.
Further usage examples appear in each of those modules'
documentation.

See `DBDParams` for connection string
information for each of the supported database drivers.

[![top](../images/up.gif)](#page-header)

## Apache DBD API [¶](#API "Permanent link")

`mod_dbd` exports five functions for other modules
to use. The API is as follows:

```
typedef struct {
    apr_dbd_t *handle;
    apr_dbd_driver_t *driver;
    apr_hash_t *prepared;
} ap_dbd_t;

/* Export functions to access the database */

/* acquire a connection that MUST be explicitly closed.
 * Returns NULL on error
 */
AP_DECLARE(ap_dbd_t*) ap_dbd_open(apr_pool_t*, server_rec*);

/* release a connection acquired with ap_dbd_open */
AP_DECLARE(void) ap_dbd_close(server_rec*, ap_dbd_t*);

/* acquire a connection that will have the lifetime of a request
 * and MUST NOT be explicitly closed.  Return NULL on error.
 * This is the preferred function for most applications.
 */
AP_DECLARE(ap_dbd_t*) ap_dbd_acquire(request_rec*);

/* acquire a connection that will have the lifetime of a connection
 * and MUST NOT be explicitly closed.  Return NULL on error.
 */
AP_DECLARE(ap_dbd_t*) ap_dbd_cacquire(conn_rec*);

/* Prepare a statement for use by a client module */
AP_DECLARE(void) ap_dbd_prepare(server_rec*, const char*, const char*);

/* Also export them as optional functions for modules that prefer it */
APR_DECLARE_OPTIONAL_FN(ap_dbd_t*, ap_dbd_open, (apr_pool_t*, server_rec*));
APR_DECLARE_OPTIONAL_FN(void, ap_dbd_close, (server_rec*, ap_dbd_t*));
APR_DECLARE_OPTIONAL_FN(ap_dbd_t*, ap_dbd_acquire, (request_rec*));
APR_DECLARE_OPTIONAL_FN(ap_dbd_t*, ap_dbd_cacquire, (conn_rec*));
APR_DECLARE_OPTIONAL_FN(void, ap_dbd_prepare, (server_rec*, const char*, const char*));
```

[![top](../images/up.gif)](#page-header)

## SQL Prepared Statements [¶](#prepared "Permanent link")

`mod_dbd` supports SQL prepared statements on behalf
of modules that may wish to use them. Each prepared statement
must be assigned a name (label), and they are stored in a hash:
the `prepared` field of an `ap_dbd_t`.
Hash entries are of type `apr_dbd_prepared_t`
and can be used in any of the apr\_dbd prepared statement
SQL query or select commands.

It is up to dbd user modules to use the prepared statements
and document what statements can be specified in httpd.conf,
or to provide their own directives and use `ap_dbd_prepare`.

### Caveat

When using prepared statements with a MySQL database, it is preferred to set
`reconnect` to 0 in the connection string as to avoid errors that
arise from the MySQL client reconnecting without properly resetting the
prepared statements. If set to 1, any broken connections will be attempted
fixed, but as mod\_dbd is not informed, the prepared statements will be invalidated.

[![top](../images/up.gif)](#page-header)

## SECURITY WARNING [¶](#security "Permanent link")

Any web/database application needs to secure itself against SQL
injection attacks. In most cases, Apache DBD is safe, because
applications use prepared statements, and untrusted inputs are
only ever used as data. Of course, if you use it via third-party
modules, you should ascertain what precautions they may require.

However, the FreeTDS driver is inherently
**unsafe**. The underlying library doesn't support
prepared statements, so the driver emulates them, and the
untrusted input is merged into the SQL statement.

It can be made safe by *untainting* all inputs:
a process inspired by Perl's taint checking. Each input
is matched against a regexp, and only the match is used,
according to the Perl idiom:

```
  $untrusted =~ /([a-z]+)/;
  $trusted = $1;
```

To use this, the untainting regexps must be included in the
prepared statements configured. The regexp follows immediately
after the % in the prepared statement, and is enclosed in
curly brackets {}. For example, if your application expects
alphanumeric input, you can use:

`"SELECT foo FROM bar WHERE input = %s"`

with other drivers, and suffer nothing worse than a failed query.
But with FreeTDS you'd need:

`"SELECT foo FROM bar WHERE input = %{([A-Za-z0-9]+)}s"`

Now anything that doesn't match the regexp's $1 match is
discarded, so the statement is safe.

An alternative to this may be the third-party ODBC driver,
which offers the security of genuine prepared statements.

[![top](../images/up.gif)](#page-header)

## DBDExptime Directive [¶](#dbdexptime "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Keepalive time for idle connections |
| [Syntax:](mod__directive-dict.md#Syntax) | `DBDExptime time-in-seconds` |
| [Default:](mod__directive-dict.md#Default) | `DBDExptime 300` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dbd |

Set the time to keep idle connections alive when the number
of connections specified in DBDKeep has been exceeded (threaded
platforms only).

[![top](../images/up.gif)](#page-header)

## DBDInitSQL Directive [¶](#dbdinitsql "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Execute an SQL statement after connecting to a database |
| [Syntax:](mod__directive-dict.md#Syntax) | `DBDInitSQL "SQL statement"` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dbd |

Modules, that wish it, can have one or more SQL statements
executed when a connection to a database is created. Example
usage could be initializing certain values or adding a log
entry when a new connection is made to the database.

[![top](../images/up.gif)](#page-header)

## DBDKeep Directive [¶](#dbdkeep "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum sustained number of connections |
| [Syntax:](mod__directive-dict.md#Syntax) | `DBDKeep number` |
| [Default:](mod__directive-dict.md#Default) | `DBDKeep 2` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dbd |

Set the maximum number of connections per process to be
sustained, other than for handling peak demand (threaded
platforms only).

[![top](../images/up.gif)](#page-header)

## DBDMax Directive [¶](#dbdmax "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum number of connections |
| [Syntax:](mod__directive-dict.md#Syntax) | `DBDMax number` |
| [Default:](mod__directive-dict.md#Default) | `DBDMax 10` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dbd |

Set the hard maximum number of connections per process
(threaded platforms only).

[![top](../images/up.gif)](#page-header)

## DBDMin Directive [¶](#dbdmin "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Minimum number of connections |
| [Syntax:](mod__directive-dict.md#Syntax) | `DBDMin number` |
| [Default:](mod__directive-dict.md#Default) | `DBDMin 1` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dbd |

Set the minimum number of connections per process (threaded
platforms only).

[![top](../images/up.gif)](#page-header)

## DBDParams Directive [¶](#dbdparams "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Parameters for database connection |
| [Syntax:](mod__directive-dict.md#Syntax) | `DBDParams param1=value1[,param2=value2]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dbd |

As required by the underlying driver. Typically this will be
used to pass whatever cannot be defaulted amongst username,
password, database name, hostname and port number for connection.

Connection string parameters for current drivers include:

FreeTDS (for MSSQL and SyBase)
:   username, password, appname, dbname, host, charset, lang, server

MySQL
:   host, port, user, pass, dbname, sock, flags, fldsz, group, reconnect

Oracle
:   user, pass, dbname, server

PostgreSQL
:   The connection string is passed straight through to `PQconnectdb`

SQLite2
:   The connection string is split on a colon, and `part1:part2` is used as `sqlite_open(part1, atoi(part2), NULL)`

SQLite3
:   The connection string is passed straight through to `sqlite3_open`

ODBC
:   datasource, user, password, connect, ctimeout, stimeout, access, txmode, bufsize

[![top](../images/up.gif)](#page-header)

## DBDPersist Directive [¶](#dbdpersist "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Whether to use persistent connections |
| [Syntax:](mod__directive-dict.md#Syntax) | `DBDPersist On|Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dbd |

If set to Off, persistent and pooled connections are disabled.
A new database connection is opened when requested by a client,
and closed immediately on release. This option is for debugging
and low-usage servers.

The default is to enable a pool of persistent connections
(or a single LAMP-style persistent connection in the case of a
non-threaded server), and should almost always be used in operation.

Prior to version 2.2.2, this directive accepted only the values
`0` and `1` instead of `Off` and
`On`, respectively.

[![top](../images/up.gif)](#page-header)

## DBDPrepareSQL Directive [¶](#dbdpreparesql "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Define an SQL prepared statement |
| [Syntax:](mod__directive-dict.md#Syntax) | `DBDPrepareSQL "SQL statement" label` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dbd |

For modules such as authentication that repeatedly use a
single SQL statement, optimum performance is achieved by preparing
the statement at startup rather than every time it is used.
This directive prepares an SQL statement and assigns it a label.

[![top](../images/up.gif)](#page-header)

## DBDriver Directive [¶](#dbdriver "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify an SQL driver |
| [Syntax:](mod__directive-dict.md#Syntax) | `DBDriver name` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_dbd |

Selects an apr\_dbd driver by name. The driver must be installed
on your system (on most systems, it will be a shared object or dll).
For example, `DBDriver mysql` will select the MySQL
driver in apr\_dbd\_mysql.so.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_dbd.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_dbd.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
