# mod_authz_owner - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authz_owner.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authz_owner.html) to go to the current version of this document.

# Apache Module mod\_authz\_owner

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Authorization based on file ownership |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authz\_owner\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authz\_owner.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module authorizes access to files by comparing the userid used
for HTTP authentication (the web userid) with the file-system owner or
group of the requested file. The supplied username and password
must be already properly verified by an authentication module,
such as `mod_auth_basic` or
`mod_auth_digest`. `mod_authz_owner`
recognizes two arguments for the `Require` directive, `file-owner` and
`file-group`, as follows:

`file-owner`
:   The supplied web-username must match the system's name for the
    owner of the file being requested. That is, if the operating system
    says the requested file is owned by `jones`, then the
    username used to access it through the web must be `jones`
    as well.

`file-group`
:   The name of the system group that owns the file must be present
    in a group database, which is provided, for example, by `mod_authz_groupfile` or `mod_authz_dbm`,
    and the web-username must be a member of that group. For example, if
    the operating system says the requested file is owned by (system)
    group `accounts`, the group `accounts` must
    appear in the group database and the web-username used in the request
    must be a member of that group.

### Note

If `mod_authz_owner` is used in order to authorize
a resource that is not actually present in the filesystem
(*i.e.* a virtual resource), it will deny the access.

Particularly it will never authorize [content negotiated
"MultiViews"](content-negotiation.md#multiviews) resources.

### Topics

- ![](../images/down.gif) [Configuration Examples](#examples)

### Directives

- ![](../images/down.gif) [AuthzOwnerAuthoritative](#authzownerauthoritative)

### See also

- `Require`
- `Satisfy`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Configuration Examples

### Require file-owner

Consider a multi-user system running the Apache Web server, with
each user having his or her own files in `~/public_html/private`. Assuming that there is a single
`AuthDBMUserFile` database
that lists all of their web-usernames, and that these usernames match
the system's usernames that actually own the files on the server, then
the following stanza would allow only the user himself access to his
own files. User `jones` would not be allowed to access
files in `/home/smith/public_html/private` unless they
were owned by `jones` instead of `smith`.

`<Directory /home/*/public_html/private>  

AuthType Basic  
AuthName MyPrivateFiles  
AuthBasicProvider dbm  
AuthDBMUserFile /usr/local/apache2/etc/.htdbm-all  
Satisfy All  
Require file-owner  
</Directory>`

### Require file-group

Consider a system similar to the one described above, but with
some users that share their project files in
`~/public_html/project-foo`. The files are owned by the
system group `foo` and there is a single `AuthDBMGroupFile` database that
contains all of the web-usernames and their group membership,
*i.e.* they must be at least member of a group named
`foo`. So if `jones` and `smith`
are both member of the group `foo`, then both will be
authorized to access the `project-foo` directories of
each other.

`<Directory /home/*/public_html/project-foo>  

AuthType Basic  
AuthName "Project Foo Files"  
AuthBasicProvider dbm  
  
# combined user/group database  
AuthDBMUserFile /usr/local/apache2/etc/.htdbm-all  
AuthDBMGroupFile /usr/local/apache2/etc/.htdbm-all  
  
Satisfy All  
Require file-group  
</Directory>`

[![top](../images/up.gif)](#page-header)

## AuthzOwnerAuthoritative Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets whether authorization will be passed on to lower level modules |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthzOwnerAuthoritative On|Off` |
| [Default:](mod__directive-dict.md#Default) | `AuthzOwnerAuthoritative On` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_owner |

Setting the `AuthzOwnerAuthoritative`
directive explicitly to `Off` allows for
user authorization to be passed on to lower level modules (as defined
in the `modules.c` files) if:

- in the case of `file-owner` the file-system owner does not
  match the supplied web-username or could not be determined, or
- in the case of `file-group` the file-system group does not
  contain the supplied web-username or could not be determined.

Note that setting the value to `Off` also allows the
combination of `file-owner` and `file-group`, so
access will be allowed if either one or the other (or both) match.

By default, control is not passed on and an authorization failure
will result in an "Authentication Required" reply. Not
setting it to `Off` thus keeps the system secure and forces
an NCSA compliant behaviour.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authz_owner.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_authz_owner.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_authz_owner.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
