# mod_session_crypto - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_session_crypto.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_session\_crypto

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Session encryption support |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | session\_crypto\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_session\_crypto.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3 and later |

### Summary

### Warning

The session modules make use of HTTP cookies, and as such can fall
victim to Cross Site Scripting attacks, or expose potentially private
information to clients. Please ensure that the relevant risks have
been taken into account before enabling the session functionality on
your server.

This submodule of `mod_session` provides support for the
encryption of user sessions before being written to a local database, or
written to a remote browser via an HTTP cookie.

This can help provide privacy to user sessions where the contents of
the session should be kept private from the user, or where protection is
needed against the effects of cross site scripting attacks.

For more details on the session interface, see the documentation for
the `mod_session` module.

### Topics

- ![](../images/down.gif) [Basic Usage](#basicusage)

### Directives

- ![](../images/down.gif) [SessionCryptoCipher](#sessioncryptocipher)
- ![](../images/down.gif) [SessionCryptoDriver](#sessioncryptodriver)
- ![](../images/down.gif) [SessionCryptoPassphrase](#sessioncryptopassphrase)
- ![](../images/down.gif) [SessionCryptoPassphraseFile](#sessioncryptopassphrasefile)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_session_crypto)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_session_crypto)

### See also

- `mod_session`
- `mod_session_cookie`
- `mod_session_dbd`

[![top](../images/up.gif)](#page-header)

## Basic Usage [¶](#basicusage "Permanent link")

To create a simple encrypted session and store it in a cookie called
session, configure the session as follows:

### Browser based encrypted session

```
Session On
SessionCookieName session path=/
SessionCryptoPassphrase secret
```

The session will be encrypted with the given key. Different servers can
be configured to share sessions by ensuring the same encryption key is used
on each server.

If the encryption key is changed, sessions will be invalidated
automatically.

For documentation on how the session can be used to store username
and password details, see the `mod_auth_form` module.

[![top](../images/up.gif)](#page-header)

## SessionCryptoCipher Directive [¶](#sessioncryptocipher "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The crypto cipher to be used to encrypt the session |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionCryptoCipher name` |
| [Default:](mod__directive-dict.md#Default) | `SessionCryptoCipher aes256` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_crypto |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.3.0 and later |

The `SessionCryptoCipher` directive allows the cipher to
be used during encryption. If not specified, the cipher defaults to
`aes256`.

Possible values depend on the crypto driver in use, and could be one of:

- 3des192
- aes128
- aes192
- aes256

[![top](../images/up.gif)](#page-header)

## SessionCryptoDriver Directive [¶](#sessioncryptodriver "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The crypto driver to be used to encrypt the session |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionCryptoDriver name [param[=value]]` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_crypto |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.3.0 and later |

The `SessionCryptoDriver` directive specifies the name of
the crypto driver to be used for encryption. If not specified, the driver defaults
to the recommended driver compiled into APR-util.

The NSS crypto driver requires some parameters for configuration,
which are specified as parameters with optional values after the driver name.

### NSS without a certificate database

```
SessionCryptoDriver nss
```

### NSS with certificate database

```
SessionCryptoDriver nss dir=certs
```

### NSS with certificate database and parameters

```
SessionCryptoDriver nss dir=certs key3=key3.db cert7=cert7.db secmod=secmod
```

### NSS with paths containing spaces

```
SessionCryptoDriver nss "dir=My Certs" key3=key3.db cert7=cert7.db secmod=secmod
```

The NSS crypto driver might have already been
configured by another part of the server, for example from
`mod_nss` or `mod_ldap`. If found to
have already been configured, a warning will be logged, and the
existing configuration will have taken affect. To avoid this
warning, use the noinit parameter as follows.

### NSS with certificate database

```
SessionCryptoDriver nss noinit
```

To prevent confusion, ensure that all modules requiring NSS are configured with
identical parameters.

The openssl crypto driver supports an optional parameter to specify
the engine to be used for encryption.

### OpenSSL with engine support

```
SessionCryptoDriver openssl engine=name
```

[![top](../images/up.gif)](#page-header)

## SessionCryptoPassphrase Directive [¶](#sessioncryptopassphrase "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The key used to encrypt the session |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionCryptoPassphrase secret [ secret ... ]` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_crypto |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.3.0 and later |

The `SessionCryptoPassphrase` directive specifies the keys
to be used to enable symmetrical encryption on the contents of the session before
writing the session, or decrypting the contents of the session after reading the
session.

Keys are more secure when they are long, and consist of truly random characters.
Changing the key on a server has the effect of invalidating all existing sessions.

Multiple keys can be specified in order to support key rotation. The first key
listed will be used for encryption, while all keys listed will be attempted for
decryption. To rotate keys across multiple servers over a period of time, add a new
secret to the end of the list, and once rolled out completely to all servers, remove
the first key from the start of the list.

As of version 2.4.7 if the value begins with exec: the resulting command
will be executed and the first line returned to standard output by the program will be
used as the key.

```
#key used as-is
SessionCryptoPassphrase secret

#Run /path/to/program to get key
SessionCryptoPassphrase exec:/path/to/program

#Run /path/to/otherProgram and provide arguments
SessionCryptoPassphrase "exec:/path/to/otherProgram argument1"
```

[![top](../images/up.gif)](#page-header)

## SessionCryptoPassphraseFile Directive [¶](#sessioncryptopassphrasefile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File containing keys used to encrypt the session |
| [Syntax:](mod__directive-dict.md#Syntax) | `SessionCryptoPassphraseFile filename` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_session\_crypto |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.3.0 and later |

The `SessionCryptoPassphraseFile` directive specifies the
name of a configuration file containing the keys to use for encrypting or decrypting
the session, specified one per line. The file is read on server start, and a graceful
restart will be necessary for httpd to pick up changes to the keys.

Unlike the `SessionCryptoPassphrase` directive, the keys are
not exposed within the httpd configuration and can be hidden by protecting the file
appropriately.

Multiple keys can be specified in order to support key rotation. The first key
listed will be used for encryption, while all keys listed will be attempted for
decryption. To rotate keys across multiple servers over a period of time, add a new
secret to the end of the list, and once rolled out completely to all servers, remove
the first key from the start of the list.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_session_crypto.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_session_crypto.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
