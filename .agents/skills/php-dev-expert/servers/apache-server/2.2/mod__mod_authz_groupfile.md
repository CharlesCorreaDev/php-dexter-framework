# mod_authz_groupfile - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authz_groupfile.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authz_groupfile.html) to go to the current version of this document.

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

### Directives

- ![](../images/down.gif) [AuthGroupFile](#authgroupfile)
- ![](../images/down.gif) [AuthzGroupFileAuthoritative](#authzgroupfileauthoritative)

### See also

- `Require`
- `Satisfy`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## AuthGroupFile Directive

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

[![top](../images/up.gif)](#page-header)

## AuthzGroupFileAuthoritative Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets whether authorization will be passed on to lower level modules |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthzGroupFileAuthoritative On|Off` |
| [Default:](mod__directive-dict.md#Default) | `AuthzGroupFileAuthoritative On` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_groupfile |

Setting the `AuthzGroupFileAuthoritative`
directive explicitly to `Off` allows for
group authorization to be passed on to lower level modules (as defined
in the `modules.c` files) if there is **no
group** matching the supplied userID.

By default, control is not passed on and an unknown group
will result in an Authentication Required reply. Not
setting it thus keeps the system secure and forces an NCSA
compliant behaviour.

### Security

Do consider the implications of allowing a user to
allow fall-through in his `.htaccess` file; and verify
that this is really what you want; Generally it is easier to just
secure a single `.htpasswd` file, than it is to secure
a database which might have more access interfaces.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authz_groupfile.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_authz_groupfile.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_authz_groupfile.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
