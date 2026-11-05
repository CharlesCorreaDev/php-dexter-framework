# mod_authz_groupfile - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authz_groupfile.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authz\_groupfile

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Group authorization using plaintext files |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authz\_groupfile\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authz\_groupfile.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module provides authorization capabilities so that
authenticated users can be allowed or denied access to portions
of the web site by group membership. Similar functionality is
provided by `mod_authz_dbm`.

### Topics

- ![](../images/down.gif) [The Require Directives](#requiredirectives)

### Directives

- ![](../images/down.gif) [AuthGroupFile](#authgroupfile)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authz_groupfile)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authz_groupfile)

### See also

- `Require`
- [Authorization Result States](mod__mod_authz_core.md#authzresults)

[![top](../images/up.gif)](#page-header)

## The Require Directives [¶](#requiredirectives "Permanent link")

Apache's `Require`
directives are used during the authorization phase to ensure that
a user is allowed to access a resource. mod\_authz\_groupfile extends the
authorization types with `group` and `group-file`.

Since v2.4.8, [expressions](expr.md) are supported
within the groupfile require directives.

### Require group

This directive specifies group membership that is required for the
user to gain access.

```
Require group admin
```

### Require file-group

When this directive is specified, the filesystem permissions on
the file being accessed are consulted. The user must be a member of
a group with the same name as the group that owns the file.
See `mod_authz_owner` for more
details.

```
Require file-group
```

[![top](../images/up.gif)](#page-header)

## AuthGroupFile Directive [¶](#authgroupfile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the name of a text file containing the list of user groups for authorization |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthGroupFile file-path` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_groupfile |

The `AuthGroupFile` directive sets the
name of a textual file containing the list of user groups for user
authorization. File-path is the path to the group
file. If it is not absolute, it is treated as relative to the `ServerRoot`.

Each line of the group file contains a groupname followed by a
colon, followed by the member usernames separated by spaces.

### Example:

`mygroup: bob joe anne`

Note that searching large text files is *very*
inefficient; `AuthDBMGroupFile` provides a much better performance.

### Security

Make sure that the `AuthGroupFile` is
stored outside the document tree of the web-server; do *not*
put it in the directory that it protects. Otherwise, clients may
be able to download the `AuthGroupFile`.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authz_groupfile.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authz_groupfile.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_authz_groupfile.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_authz_groupfile.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
