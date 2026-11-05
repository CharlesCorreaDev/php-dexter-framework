# mod_authn_anon - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authn_anon.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authn_anon.html) to go to the current version of this document.

# Apache Module mod\_authn\_anon

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Allows "anonymous" user access to authenticated areas |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authn\_anon\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authn\_anon.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module provides authentication front-ends such as
`mod_auth_basic` to authenticate users similar
to anonymous-ftp sites, *i.e.* have a 'magic' user id
'anonymous' and the email address as a password. These email
addresses can be logged.

Combined with other (database) access control methods, this
allows for effective user tracking and customization according
to a user profile while still keeping the site open for
'unregistered' users. One advantage of using Auth-based user
tracking is that, unlike magic-cookies and funny URL
pre/postfixes, it is completely browser independent and it
allows users to share URLs.

When using `mod_auth_basic`, this module is invoked
via the `AuthBasicProvider`
directive with the `anon` value.

### Topics

- ![](../images/down.gif) [Example](#example)

### Directives

- ![](../images/down.gif) [Anonymous](#anonymous)
- ![](../images/down.gif) [Anonymous\_LogEmail](#anonymous_logemail)
- ![](../images/down.gif) [Anonymous\_MustGiveEmail](#anonymous_mustgiveemail)
- ![](../images/down.gif) [Anonymous\_NoUserID](#anonymous_nouserid)
- ![](../images/down.gif) [Anonymous\_VerifyEmail](#anonymous_verifyemail)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Example

The example below is combined with "normal" htpasswd-file based
authentication and allows users in additionally as 'guests' with the
following properties:

- It insists that the user enters a userID.
  (`Anonymous_NoUserID`)
- It insists that the user enters a password.
  (`Anonymous_MustGiveEmail`)
- The password entered must be a valid email address, *i.e.*
  contain at least one '@' and a '.'.
  (`Anonymous_VerifyEmail`)
- The userID must be one of `anonymous guest www test
  welcome` and comparison is **not** case
  sensitive. (`Anonymous`)
- And the Email addresses entered in the passwd field are
  logged to the error log file.
  (`Anonymous_LogEmail`)

### Example

`<Directory /foo>
AuthName "Use 'anonymous' & Email address for guest entry"  
AuthType Basic  
AuthBasicProvider file anon  
AuthUserFile /path/to/your/.htpasswd  
  
Anonymous_NoUserID off  
Anonymous_MustGiveEmail on  
Anonymous_VerifyEmail on  
Anonymous_LogEmail on  
Anonymous anonymous guest www test welcome  
  
Order Deny,Allow  
Allow from all  
  
Require valid-user  
</Directory>`

[![top](../images/up.gif)](#page-header)

## Anonymous Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specifies userIDs that are allowed access without password verification |
| [Syntax:](mod__directive-dict.md#Syntax) | `Anonymous user [user] ...` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_anon |

A list of one or more 'magic' userIDs which are allowed
access without password verification. The userIDs are space
separated. It is possible to use the ' and " quotes to allow a
space in a userID as well as the \ escape character.

Please note that the comparison is
**case-IN-sensitive**.  
It's strongly recommended that the magic username
'`anonymous`' is always one of the allowed
userIDs.

### Example:

`Anonymous anonymous "Not Registered" "I don't know"`

This would allow the user to enter without password
verification by using the userIDs "anonymous",
"AnonyMous", "Not Registered" and "I Don't Know".

As of Apache 2.1 it is possible to specify the userID as
"`*`". That allows *any* supplied userID to be
accepted.

[![top](../images/up.gif)](#page-header)

## Anonymous\_LogEmail Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets whether the password entered will be logged in the error log |
| [Syntax:](mod__directive-dict.md#Syntax) | `Anonymous_LogEmail On|Off` |
| [Default:](mod__directive-dict.md#Default) | `Anonymous_LogEmail On` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_anon |

When set `On`, the default, the 'password' entered
(which hopefully contains a sensible email address) is logged in
the error log.

[![top](../images/up.gif)](#page-header)

## Anonymous\_MustGiveEmail Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specifies whether blank passwords are allowed |
| [Syntax:](mod__directive-dict.md#Syntax) | `Anonymous_MustGiveEmail On|Off` |
| [Default:](mod__directive-dict.md#Default) | `Anonymous_MustGiveEmail On` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_anon |

Specifies whether the user must specify an email address as
the password. This prohibits blank passwords.

[![top](../images/up.gif)](#page-header)

## Anonymous\_NoUserID Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets whether the userID field may be empty |
| [Syntax:](mod__directive-dict.md#Syntax) | `Anonymous_NoUserID On|Off` |
| [Default:](mod__directive-dict.md#Default) | `Anonymous_NoUserID Off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_anon |

When set `On`, users can leave the userID (and
perhaps the password field) empty. This can be very convenient for
MS-Explorer users who can just hit return or click directly on the
OK button; which seems a natural reaction.

[![top](../images/up.gif)](#page-header)

## Anonymous\_VerifyEmail Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets whether to check the password field for a correctly formatted email address |
| [Syntax:](mod__directive-dict.md#Syntax) | `Anonymous_VerifyEmail On|Off` |
| [Default:](mod__directive-dict.md#Default) | `Anonymous_VerifyEmail Off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_anon |

When set `On` the 'password' entered is checked for
at least one '@' and a '.' to encourage users to enter valid email
addresses (see the above `Anonymous_LogEmail`).

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authn_anon.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_authn_anon.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_authn_anon.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
