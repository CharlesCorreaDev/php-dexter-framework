# mod_authn_dbm - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authn_dbm.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authn_dbm.html) to go to the current version of this document.

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

### See also

- `AuthName`
- `AuthType`
- `AuthBasicProvider`
- `AuthDigestProvider`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## AuthDBMType Directive

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
[compile-time settings](install.md#dbm).

It is crucial that whatever program you use to create your password
files is configured to use the same type of database.

[![top](../images/up.gif)](#page-header)

## AuthDBMUserFile Directive

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

Important compatibility note: The implementation of
`dbmopen` in the apache modules reads the string length of
the hashed values from the DBM data structures, rather than relying
upon the string being NULL-appended. Some applications, such as
the Netscape web server, rely upon the string being
NULL-appended, so if you are having trouble using DBM files
interchangeably between applications this may be a part of the
problem.

A perl script called
`dbmmanage` is included with
Apache. This program can be used to create and update DBM
format password files for use with this module.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authn_dbm.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_authn_dbm.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_authn_dbm.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
