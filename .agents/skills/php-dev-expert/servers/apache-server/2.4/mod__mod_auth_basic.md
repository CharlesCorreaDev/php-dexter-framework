# mod_auth_basic - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_auth_basic.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_auth\_basic

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Basic HTTP authentication |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | auth\_basic\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_auth\_basic.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module allows the use of HTTP Basic Authentication to
restrict access by looking up users in the given providers.
HTTP Digest Authentication is provided by
`mod_auth_digest`. This module should
usually be combined with at least one authentication module
such as `mod_authn_file` and one authorization
module such as `mod_authz_user`.

### Directives

- ![](../images/down.gif) [AuthBasicAuthoritative](#authbasicauthoritative)
- ![](../images/down.gif) [AuthBasicFake](#authbasicfake)
- ![](../images/down.gif) [AuthBasicProvider](#authbasicprovider)
- ![](../images/down.gif) [AuthBasicUseDigestAlgorithm](#authbasicusedigestalgorithm)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_auth_basic)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_auth_basic)

### See also

- `AuthName`
- `AuthType`
- `Require`
- [Authentication howto](howto__auth.md)

[![top](../images/up.gif)](#page-header)

## AuthBasicAuthoritative Directive [¶](#authbasicauthoritative "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets whether authorization and authentication are passed to lower level modules |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthBasicAuthoritative On|Off` |
| [Default:](mod__directive-dict.md#Default) | `AuthBasicAuthoritative On` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_basic |

Normally, each authorization module listed in `AuthBasicProvider` will attempt
to verify the user, and if the user is not found in any provider,
access will be denied. Setting the
`AuthBasicAuthoritative` directive explicitly
to `Off` allows for both authentication and
authorization to be passed on to other non-provider-based modules
if there is **no userID** or **rule**
matching the supplied userID. This should only be necessary when
combining `mod_auth_basic` with third-party modules
that are not configured with the `AuthBasicProvider`
directive. When using such modules, the order of processing
is determined in the modules' source code and is not configurable.

[![top](../images/up.gif)](#page-header)

## AuthBasicFake Directive [¶](#authbasicfake "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Fake basic authentication using the given expressions for username and password |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthBasicFake off|username [password]` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_basic |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Apache HTTP Server 2.4.5 and later |

The username and password specified are combined into an
Authorization header, which is passed to the server or service
behind the webserver. Both the username and password fields are
interpreted using the [expression parser](expr.md),
which allows both the username and password to be set based on
request parameters.

If the password is not specified, the default value "password"
will be used. To disable fake basic authentication for an URL
space, specify "AuthBasicFake off".

In this example, we pass a fixed username and password to a
backend server.

### Fixed Example

```
<Location "/demo">
    AuthBasicFake demo demopass
</Location>
```

In this example, we pass the email address extracted from a client
certificate, extending the functionality of the FakeBasicAuth option
within the `SSLOptions`
directive. Like the FakeBasicAuth option, the password is set to the
fixed string "password".

### Certificate Example

```
<Location "/secure">
    AuthBasicFake "%{SSL_CLIENT_S_DN_Email}"
</Location>
```

Extending the above example, we generate a password by hashing the
email address with a fixed passphrase, and passing the hash to the
backend server. This can be used to gate into legacy systems that do
not support client certificates.

### Password Example

```
<Location "/secure">
    AuthBasicFake "%{SSL_CLIENT_S_DN_Email}" "%{sha1:passphrase-%{SSL_CLIENT_S_DN_Email}}"
</Location>
```

### Exclusion Example

```
<Location "/public">
    AuthBasicFake off
</Location>
```

[![top](../images/up.gif)](#page-header)

## AuthBasicProvider Directive [¶](#authbasicprovider "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the authentication provider(s) for this location |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthBasicProvider provider-name [provider-name] ...` |
| [Default:](mod__directive-dict.md#Default) | `AuthBasicProvider file` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_basic |

The `AuthBasicProvider` directive sets
which provider is used to authenticate the users for this location.
The default `file` provider is implemented
by the `mod_authn_file` module. Make sure
that the chosen provider module is present in the server.

### Example

```
<Location "/secure">
    AuthType basic
    AuthName "private area"
    AuthBasicProvider  dbm
    AuthDBMType        SDBM
    AuthDBMUserFile    "/www/etc/dbmpasswd"
    Require            valid-user
</Location>
```

Providers are queried in order until a provider finds a match
for the requested username, at which point this sole provider will
attempt to check the password. A failure to verify the password does
not result in control being passed on to subsequent providers.

Providers are implemented by `mod_authn_dbm`,
`mod_authn_file`, `mod_authn_dbd`,
`mod_authnz_ldap` and `mod_authn_socache`.

[![top](../images/up.gif)](#page-header)

## AuthBasicUseDigestAlgorithm Directive [¶](#authbasicusedigestalgorithm "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Check passwords against the authentication providers as if Digest Authentication was in force instead of Basic Authentication. |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthBasicUseDigestAlgorithm MD5|Off` |
| [Default:](mod__directive-dict.md#Default) | `AuthBasicUseDigestAlgorithm Off` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_auth\_basic |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Apache HTTP Server 2.4.7 and later |

Normally, when using Basic Authentication, the providers listed in
`AuthBasicProvider`
attempt to verify a user by checking their data stores for
a matching username and associated password. The stored passwords
are usually encrypted, but not necessarily so; each provider may
choose its own storage scheme for passwords.

When using `AuthDigestProvider` and Digest
Authentication, providers perform a similar check to find a matching
username in their data stores. However, unlike in the Basic
Authentication case, the value associated with each stored username
must be an encrypted string composed from the username, realm name,
and password. (See
[RFC 2617](https://www.rfc-editor.org/rfc/rfc2617#section-3.2.2.2) for more details on the format used
for this encrypted string.)

As a consequence of the difference in the stored values between
Basic and Digest Authentication, converting from Digest
Authentication to Basic Authentication generally requires that all
users be assigned new passwords, as their existing passwords cannot
be recovered from the password storage scheme imposed on those
providers which support Digest Authentication.

Setting the `AuthBasicUseDigestAlgorithm` directive
to `MD5` will cause the user's Basic Authentication password
to be checked using the same encrypted format as for Digest
Authentication. First a string composed from the username, realm name,
and password is hashed with MD5; then the username and this encrypted
string are passed to the providers listed in
`AuthBasicProvider`
as if
`AuthType`
was set to `Digest` and Digest Authentication was in force.

Through the use of `AuthBasicUseDigestAlgorithm`
a site may switch from Digest to Basic Authentication without
requiring users to be assigned new passwords.

The inverse process of switching from Basic to Digest
Authentication without assigning new passwords is generally
not possible. Only if the Basic Authentication passwords
have been stored in plain text or with a reversible encryption
scheme will it be possible to recover them and generate a
new data store following the Digest Authentication password
storage scheme.

Only providers which support Digest Authentication will be able
to authenticate users when `AuthBasicUseDigestAlgorithm`
is set to `MD5`. Use of other providers will result
in an error response and the client will be denied access.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_auth_basic.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_auth_basic.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_auth_basic.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_auth_basic.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
