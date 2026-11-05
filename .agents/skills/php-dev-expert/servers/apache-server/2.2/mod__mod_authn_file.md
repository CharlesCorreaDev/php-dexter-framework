# mod_authn_file - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authn_file.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authn_file.html) to go to the current version of this document.

# Apache Module mod\_authn\_file

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | User authentication using text files |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authn\_file\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authn\_file.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module provides authentication front-ends such as
`mod_auth_digest` and `mod_auth_basic`
to authenticate users by looking up users in plain text password files.
Similar functionality is provided by `mod_authn_dbm`.

When using `mod_auth_basic` or
`mod_auth_digest`, this module is invoked via the
`AuthBasicProvider` or
`AuthDigestProvider`
with the `file` value.

### Directives

- ![](../images/down.gif) [AuthUserFile](#authuserfile)

### See also

- `AuthBasicProvider`
- `AuthDigestProvider`
- `htpasswd`
- `htdigest`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## AuthUserFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the name of a text file containing the list of users and passwords for authentication |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthUserFile file-path` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_file |

The `AuthUserFile` directive sets the name
of a textual file containing the list of users and passwords for
user authentication. File-path is the path to the user
file. If it is not absolute, it is treated as relative to the
`ServerRoot`.

Each line of the user file contains a username followed by
a colon, followed by the encrypted password. If the same user
ID is defined multiple times, `mod_authn_file` will
use the first occurrence to verify the password.

The utility `htpasswd`
which is installed as part of the binary distribution, or which
can be found in `src/support`, is used to maintain
the password file for *HTTP Basic Authentication*. See the
[man page](programs__htpasswd.md) for more details.
In short:

Create a password file `Filename` with
`username` as the initial ID. It will prompt for
the password:

`htpasswd -c Filename username`

Add or modify `username2` in the password file
`Filename`:

`htpasswd Filename username2`

Note that searching large text files is *very*
inefficient; `AuthDBMUserFile` should be used
instead.

If you are using *HTTP Digest Authentication*, the `htpasswd` tool is not sufficient.
You have to use `htdigest`
instead. Note that you cannot mix user data for Digest Authentication
and Basic Authentication within the same file.

### Security

Make sure that the `AuthUserFile` is
stored outside the document tree of the web-server. Do
**not** put it in the directory that it protects.
Otherwise, clients may be able to download the
`AuthUserFile`.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authn_file.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/mod/mod_authn_file.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_authn_file.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_authn_file.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
