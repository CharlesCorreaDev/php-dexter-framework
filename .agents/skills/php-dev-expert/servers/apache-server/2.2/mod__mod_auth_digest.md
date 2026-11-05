# mod_auth_digest - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_auth_digest.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_auth_digest.html) to go to the current version of this document.

# Apache Module mod\_auth\_digest

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | User authentication using MD5 Digest Authentication. |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | auth\_digest\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_auth\_digest.c |

### Summary

This module implements HTTP Digest Authentication
([RFC2617](http://www.faqs.org/rfcs/rfc2617.html)), and
provides an alternative to `mod_auth_basic` where the
password is not transmitted as cleartext. However, this does
**not** lead to a significant security advantage over
basic authentication. On the other hand, the password storage on the
server is much less secure with digest authentication than with
basic authentication. Therefore, using basic auth and encrypting the
whole connection using `mod_ssl` is a much better
alternative.

### Topics

- ![](../images/down.gif) [Using Digest Authentication](#using)

### Directives

- ![](../images/down.gif) [AuthDigestAlgorithm](#authdigestalgorithm)
- ![](../images/down.gif) [AuthDigestDomain](#authdigestdomain)
- ![](../images/down.gif) [AuthDigestNcCheck](#authdigestnccheck)
- ![](../images/down.gif) [AuthDigestNonceFormat](#authdigestnonceformat)
- ![](../images/down.gif) [AuthDigestNonceLifetime](#authdigestnoncelifetime)
- ![](../images/down.gif) [AuthDigestProvider](#authdigestprovider)
- ![](../images/down.gif) [AuthDigestQop](#authdigestqop)
- ![](../images/down.gif) [AuthDigestShmemSize](#authdigestshmemsize)

### See also

- `AuthName`
- `AuthType`
- `Require`
- `Satisfy`
- [Authentication howto](howto__auth.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Using Digest Authentication

Using MD5 Digest authentication is very simple. Simply set
up authentication normally, using `AuthType Digest` and
`AuthDigestProvider`
instead of the normal `AuthType Basic` and
`AuthBasicProvider`.
Then add a `AuthDigestDomain` directive containing at least the root
URI(s) for this protection space.

Appropriate user (text) files can be created using the
`htdigest` tool.

### Example:

`<Location /private/>  

AuthType Digest  
AuthName "private area"  
AuthDigestDomain /private/ http://mirror.my.dom/private2/  
  
AuthDigestProvider file  
AuthUserFile /web/auth/.digest_pw  
Require valid-user  
</Location>`

### Note

Digest authentication was intended to be more secure than basic
authentication, but no longer fulfills that design goal. A
man-in-the-middle attacker can trivially force the browser to downgrade
to basic authentication. And even a passive eavesdropper can brute-force
the password using today's graphics hardware, because the hashing
algorithm used by digest authentication is too fast. Another problem is
that the storage of the passwords on the server is insecure. The contents
of a stolen htdigest file can be used directly for digest authentication.
Therefore using `mod_ssl` to encrypt the whole connection is
strongly recommended.

[![top](../images/up.gif)](#page-header)

## AuthDigestAlgorithm Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Selects the algorithm used to calculate the challenge and response hashes in digest authentication |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDigestAlgorithm MD5|MD5-sess` |
| [Default:](mod__directive-dict.md#Default) | `AuthDigestAlgorithm MD5` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_digest |

The `AuthDigestAlgorithm` directive
selects the algorithm used to calculate the challenge and response
hashes.

`MD5-sess` is not correctly implemented yet.

[![top](../images/up.gif)](#page-header)

## AuthDigestDomain Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | URIs that are in the same protection space for digest authentication |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDigestDomain URI [URI] ...` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_digest |

The `AuthDigestDomain` directive allows
you to specify one or more URIs which are in the same protection
space (*i.e.* use the same realm and username/password info).
The specified URIs are prefixes; the client will assume
that all URIs "below" these are also protected by the same
username/password. The URIs may be either absolute URIs (*i.e.*
including a scheme, host, port, etc.) or relative URIs.

This directive *should* always be specified and
contain at least the (set of) root URI(s) for this space.
Omitting to do so will cause the client to send the
Authorization header for *every request* sent to this
server. Apart from increasing the size of the request, it may
also have a detrimental effect on performance if `AuthDigestNcCheck` is on.

The URIs specified can also point to different servers, in
which case clients (which understand this) will then share
username/password info across multiple servers without
prompting the user each time.

[![top](../images/up.gif)](#page-header)

## AuthDigestNcCheck Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables or disables checking of the nonce-count sent by the server |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDigestNcCheck On|Off` |
| [Default:](mod__directive-dict.md#Default) | `AuthDigestNcCheck Off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_digest |

Not implemented yet.

[![top](../images/up.gif)](#page-header)

## AuthDigestNonceFormat Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines how the nonce is generated |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDigestNonceFormat format` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_digest |

Not implemented yet.

[![top](../images/up.gif)](#page-header)

## AuthDigestNonceLifetime Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | How long the server nonce is valid |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDigestNonceLifetime seconds` |
| [Default:](mod__directive-dict.md#Default) | `AuthDigestNonceLifetime 300` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_digest |

The `AuthDigestNonceLifetime` directive
controls how long the server nonce is valid. When the client
contacts the server using an expired nonce the server will send
back a 401 with `stale=true`. If seconds is
greater than 0 then it specifies the amount of time for which the
nonce is valid; this should probably never be set to less than 10
seconds. If seconds is less than 0 then the nonce never
expires.

[![top](../images/up.gif)](#page-header)

## AuthDigestProvider Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the authentication provider(s) for this location |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDigestProvider provider-name [provider-name] ...` |
| [Default:](mod__directive-dict.md#Default) | `AuthDigestProvider file` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_digest |

The `AuthDigestProvider` directive sets
which provider is used to authenticate the users for this location.
The default `file` provider is implemented
by the `mod_authn_file` module. Make sure
that the chosen provider module is present in the server.

See `mod_authn_dbm`, `mod_authn_file`,
and `mod_authn_dbd` for providers.

[![top](../images/up.gif)](#page-header)

## AuthDigestQop Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines the quality-of-protection to use in digest authentication |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDigestQop none|auth|auth-int [auth|auth-int]` |
| [Default:](mod__directive-dict.md#Default) | `AuthDigestQop auth` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_digest |

The `AuthDigestQop` directive determines
the quality-of-protection to use. `auth` will
only do authentication (username/password); `auth-int` is
authentication plus integrity checking (an MD5 hash of the entity
is also computed and checked); `none` will cause the module
to use the old RFC-2069 digest algorithm (which does not include
integrity checking). Both `auth` and `auth-int` may
be specified, in which the case the browser will choose which of
these to use. `none` should only be used if the browser for
some reason does not like the challenge it receives otherwise.

`auth-int` is not implemented yet.

[![top](../images/up.gif)](#page-header)

## AuthDigestShmemSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The amount of shared memory to allocate for keeping track of clients |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDigestShmemSize size` |
| [Default:](mod__directive-dict.md#Default) | `AuthDigestShmemSize 1000` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_digest |

The `AuthDigestShmemSize` directive defines
the amount of shared memory, that will be allocated at the server
startup for keeping track of clients. Note that the shared memory
segment cannot be set less than the space that is necessary for
tracking at least *one* client. This value is dependant on your
system. If you want to find out the exact value, you may simply
set `AuthDigestShmemSize` to the value of
`0` and read the error message after trying to start the
server.

The size is normally expressed in Bytes, but you
may let the number follow a `K` or an `M` to
express your value as KBytes or MBytes. For example, the following
directives are all equivalent:

`AuthDigestShmemSize 1048576  
AuthDigestShmemSize 1024K  
AuthDigestShmemSize 1M`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_auth_digest.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/mod/mod_auth_digest.html "Français") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_auth_digest.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
