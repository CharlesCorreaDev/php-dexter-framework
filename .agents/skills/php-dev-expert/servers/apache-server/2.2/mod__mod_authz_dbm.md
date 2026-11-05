# mod_authz_dbm - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authz_dbm.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authz_dbm.html) to go to the current version of this document.

# Apache Module mod\_authz\_dbm

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Group authorization using DBM files |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authz\_dbm\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authz\_dbm.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module provides authorization capabilities so that
authenticated users can be allowed or denied access to portions
of the web site by group membership. Similar functionality is
provided by `mod_authz_groupfile`.

### Directives

- ![](../images/down.gif) [AuthDBMGroupFile](#authdbmgroupfile)
- ![](../images/down.gif) [AuthzDBMAuthoritative](#authzdbmauthoritative)
- ![](../images/down.gif) [AuthzDBMType](#authzdbmtype)

### See also

- `Require`
- `Satisfy`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## AuthDBMGroupFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the name of the database file containing the list of user groups for authorization |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDBMGroupFile file-path` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_dbm |

The `AuthDBMGroupFile` directive sets the
name of a DBM file containing the list of user groups for user
authorization. File-path is the absolute path to the
group file.

The group file is keyed on the username. The value for a
user is a comma-separated list of the groups to which the users
belongs. There must be no whitespace within the value, and it
must never contain any colons.

### Security

Make sure that the `AuthDBMGroupFile` is
stored outside the document tree of the web-server. Do
**not** put it in the directory that it protects.
Otherwise, clients will be able to download the
`AuthDBMGroupFile` unless otherwise
protected.

Combining Group and Password DBM files: In some cases it is
easier to manage a single database which contains both the
password and group details for each user. This simplifies any
support programs that need to be written: they now only have to
deal with writing to and locking a single DBM file. This can be
accomplished by first setting the group and password files to
point to the same DBM:

`AuthDBMGroupFile /www/userbase  
AuthDBMUserFile /www/userbase`

The key for the single DBM is the username. The value consists
of

`Encrypted Password : List of Groups [ : (ignored) ]`

The password section contains the encrypted
password as before. This is followed by a colon and the comma
separated list of groups. Other data may optionally be left in the
DBM file after another colon; it is ignored by the authorization
module. This is what www.telescope.org uses for its combined
password and group database.

[![top](../images/up.gif)](#page-header)

## AuthzDBMAuthoritative Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets whether authorization will be passed on to lower level modules |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthzDBMAuthoritative On|Off` |
| [Default:](mod__directive-dict.md#Default) | `AuthzDBMAuthoritative On` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_dbm |

Setting the `AuthzDBMAuthoritative`
directive explicitly to `Off` allows group authorization
to be passed on to lower level modules (as defined in the
`modules.c` file) if there is no group found
for the supplied userID. If there are any groups
specified, the usual checks will be applied and a failure will
give an Authentication Required reply.

So if a userID appears in the database of more than one module;
or if a valid `Require`
directive applies to more than one module; then the first module
will verify the credentials; and no access is passed on;
regardless of the `AuthAuthoritative` setting.

A common use for this is in conjunction with one of the
auth providers; such as `mod_authn_dbm` or
`mod_authn_file`. Whereas this DBM module supplies
the bulk of the user credential checking; a few (administrator) related
accesses fall through to a lower level with a well protected
`.htpasswd` file.

By default, control is not passed on and an unknown group
will result in an Authentication Required reply. Not
setting it thus keeps the system secure and forces an NCSA
compliant behaviour.

### Security

Do consider the implications of allowing a user to
allow fall-through in his .htaccess file; and verify that this
is really what you want; Generally it is easier to just secure
a single `.htpasswd` file, than it is to secure a
database which might have more access interfaces.

[![top](../images/up.gif)](#page-header)

## AuthzDBMType Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the type of database file that is used to store list of user groups |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthzDBMType default|SDBM|GDBM|NDBM|DB` |
| [Default:](mod__directive-dict.md#Default) | `AuthzDBMType default` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_dbm |

Sets the type of database file that is used to store the list
of user groups.
The default database type is determined at compile time. The
availability of other types of database files also depends on
[compile-time settings](install.md#dbm).

It is crucial that whatever program you use to create your group
files is configured to use the same type of database.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authz_dbm.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_authz_dbm.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
