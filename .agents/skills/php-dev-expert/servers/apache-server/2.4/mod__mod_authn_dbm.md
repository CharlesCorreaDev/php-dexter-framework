# mod_authn_dbm - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authn_dbm.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authn\_dbm

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | User authentication using DBM files |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authn\_dbm\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authn\_dbm.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module provides authentication front-ends such as
`mod_auth_digest` and `mod_auth_basic`
to authenticate users by looking up users in dbm password
files. Similar functionality is provided by
`mod_authn_file`.

When using `mod_auth_basic` or
`mod_auth_digest`, this module is invoked via the
`AuthBasicProvider` or
`AuthDigestProvider`
with the `dbm` value.

### Directives

- ![](../images/down.gif) [AuthDBMType](#authdbmtype)
- ![](../images/down.gif) [AuthDBMUserFile](#authdbmuserfile)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authn_dbm)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authn_dbm)

### See also

- `AuthName`
- `AuthType`
- `AuthBasicProvider`
- `AuthDigestProvider`
- `htpasswd`
- `htdbm`
- [Password Formats](misc__password_encryptions.md)

[![top](../images/up.gif)](#page-header)

## AuthDBMType Directive [¶](#authdbmtype "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the type of database file that is used to store passwords |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDBMType default|SDBM|GDBM|NDBM|DB` |
| [Default:](mod__directive-dict.md#Default) | `AuthDBMType default` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_dbm |

Sets the type of database file that is used to store the passwords.
The default database type is determined at compile time. The
availability of other types of database files also depends on
[compile-time settings](programs__configure.md#options).

For example, in order to enable the support for Berkeley DB
(correspondent to the `db` type) the
`--with-berkeley-db` option needs to be added to httpd's
configure to generate the necessary DSO.

It is crucial that whatever program you use to create your password
files is configured to use the same type of database.

[![top](../images/up.gif)](#page-header)

## AuthDBMUserFile Directive [¶](#authdbmuserfile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the name of a database file containing the list of users and passwords for authentication |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDBMUserFile file-path` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_dbm |

The `AuthDBMUserFile` directive sets the
name of a DBM file containing the list of users and passwords for
user authentication. File-path is the absolute path to
the user file.

The user file is keyed on the username. The value for a user is
the encrypted password, optionally followed by a colon and arbitrary
data. The colon and the data following it will be ignored by the
server.

### Security:

Make sure that the `AuthDBMUserFile` is stored
outside the document tree of the web-server; do *not* put it in
the directory that it protects. Otherwise, clients will be able to
download the `AuthDBMUserFile`.

The encrypted password format depends on which authentication
frontend (e.g. `mod_auth_basic` or
`mod_auth_digest`) is being used. See [Password Formats](misc__password_encryptions.md) for
more information.

Important compatibility note: The implementation of
`dbmopen` in the Apache modules reads the string length of
the hashed values from the DBM data structures, rather than relying
upon the string being NULL-appended. Some applications, such as
the Netscape web server, rely upon the string being
NULL-appended, so if you are having trouble using DBM files
interchangeably between applications this may be a part of the
problem.

A perl script called
`dbmmanage` is included with
Apache. This program can be used to create and update DBM
format password files for use with this module. Another
tool for maintaining the DBM files is the included program
`htdbm`.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authn_dbm.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authn_dbm.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_authn_dbm.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_authn_dbm.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
