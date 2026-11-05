# mod_authn_file - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authn_file.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

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

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authn_file)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authn_file)

### See also

- `AuthBasicProvider`
- `AuthDigestProvider`
- `htpasswd`
- `htdigest`
- [Password Formats](misc__password_encryptions.md)

[![top](../images/up.gif)](#page-header)

## AuthUserFile Directive [¶](#authuserfile "Permanent link")

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

The encrypted password format depends on which authentication
frontend (e.g. `mod_auth_basic` or
`mod_auth_digest`) is being used. See [Password Formats](misc__password_encryptions.md) for
more information.

For `mod_auth_basic`, use the utility `htpasswd`
which is installed as part of the binary distribution, or which
can be found in `src/support`. See the
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

For `mod_auth_digest`, use `htdigest`
instead. Note that you cannot mix user data for Digest Authentication
and Basic Authentication within the same file.

### Security

Make sure that the `AuthUserFile` is
stored outside the document tree of the web-server. Do
**not** put it in the directory that it protects.
Otherwise, clients may be able to download the
`AuthUserFile`.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authn_file.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authn_file.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_authn_file.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_authn_file.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
