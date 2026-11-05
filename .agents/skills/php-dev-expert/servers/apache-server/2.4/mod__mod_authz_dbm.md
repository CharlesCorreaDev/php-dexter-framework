# mod_authz_dbm - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authz_dbm.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

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

### Topics

- ![](../images/down.gif) [The Require Directives](#requiredirectives)
- ![](../images/down.gif) [Example usage](#examples)

### Directives

- ![](../images/down.gif) [AuthDBMGroupFile](#authdbmgroupfile)
- ![](../images/down.gif) [AuthzDBMType](#authzdbmtype)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authz_dbm)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authz_dbm)

### See also

- `Require`

[![top](../images/up.gif)](#page-header)

## The Require Directives [¶](#requiredirectives "Permanent link")

Apache's `Require`
directives are used during the authorization phase to ensure that
a user is allowed to access a resource. mod\_authz\_dbm extends the
authorization types with `dbm-group`.

Since v2.4.8, [expressions](expr.md) are supported
within the DBM require directives.

### Require dbm-group

This directive specifies group membership that is required for the
user to gain access.

```
Require dbm-group admin
```

### Require dbm-file-group

When this directive is specified, the user must be a member of the group
assigned to the file being accessed.

```
Require dbm-file-group
```

[![top](../images/up.gif)](#page-header)

## Example usage [¶](#examples "Permanent link")

*Note that using mod\_authz\_dbm requires you to require `dbm-group`
instead of `group`:*

```
<Directory "/foo/bar">
  AuthType Basic
  AuthName "Secure Area"
  AuthBasicProvider dbm
  AuthDBMUserFile "site/data/users"
  AuthDBMGroupFile "site/data/users"
  Require dbm-group admin
</Directory>
```

[![top](../images/up.gif)](#page-header)

## AuthDBMGroupFile Directive [¶](#authdbmgroupfile "Permanent link")

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

```
AuthDBMGroupFile "/www/userbase"
AuthDBMUserFile "/www/userbase"
```

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

## AuthzDBMType Directive [¶](#authzdbmtype "Permanent link")

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

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authz_dbm.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authz_dbm.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_authz_dbm.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
