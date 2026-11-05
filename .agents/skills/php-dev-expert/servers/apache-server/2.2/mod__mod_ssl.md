# mod_ssl - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_ssl.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_ssl.html) to go to the current version of this document.

# Apache Module mod\_ssl

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Strong cryptography using the Secure Sockets Layer (SSL) and Transport Layer Security (TLS) protocols |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | ssl\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_ssl.c |

### Summary

This module provides SSL v2/v3 and TLS v1 support for the Apache
HTTP Server. It was contributed by Ralf S. Engeschall based on his
mod\_ssl project and originally derived from work by Ben Laurie.

This module relies on [OpenSSL](http://www.openssl.org/)
to provide the cryptography engine.

Further details, discussion, and examples are provided in the
[SSL documentation](ssl.md).

### Topics

- ![](../images/down.gif) [Environment Variables](#envvars)
- ![](../images/down.gif) [Custom Log Formats](#logformats)

### Directives

- ![](../images/down.gif) [SSLCACertificateFile](#sslcacertificatefile)
- ![](../images/down.gif) [SSLCACertificatePath](#sslcacertificatepath)
- ![](../images/down.gif) [SSLCADNRequestFile](#sslcadnrequestfile)
- ![](../images/down.gif) [SSLCADNRequestPath](#sslcadnrequestpath)
- ![](../images/down.gif) [SSLCARevocationFile](#sslcarevocationfile)
- ![](../images/down.gif) [SSLCARevocationPath](#sslcarevocationpath)
- ![](../images/down.gif) [SSLCertificateChainFile](#sslcertificatechainfile)
- ![](../images/down.gif) [SSLCertificateFile](#sslcertificatefile)
- ![](../images/down.gif) [SSLCertificateKeyFile](#sslcertificatekeyfile)
- ![](../images/down.gif) [SSLCipherSuite](#sslciphersuite)
- ![](../images/down.gif) [SSLCompression](#sslcompression)
- ![](../images/down.gif) [SSLCryptoDevice](#sslcryptodevice)
- ![](../images/down.gif) [SSLEngine](#sslengine)
- ![](../images/down.gif) [SSLFIPS](#sslfips)
- ![](../images/down.gif) [SSLHonorCipherOrder](#sslhonorcipherorder)
- ![](../images/down.gif) [SSLInsecureRenegotiation](#sslinsecurerenegotiation)
- ![](../images/down.gif) [SSLMutex](#sslmutex)
- ![](../images/down.gif) [SSLOptions](#ssloptions)
- ![](../images/down.gif) [SSLPassPhraseDialog](#sslpassphrasedialog)
- ![](../images/down.gif) [SSLProtocol](#sslprotocol)
- ![](../images/down.gif) [SSLProxyCACertificateFile](#sslproxycacertificatefile)
- ![](../images/down.gif) [SSLProxyCACertificatePath](#sslproxycacertificatepath)
- ![](../images/down.gif) [SSLProxyCARevocationFile](#sslproxycarevocationfile)
- ![](../images/down.gif) [SSLProxyCARevocationPath](#sslproxycarevocationpath)
- ![](../images/down.gif) [SSLProxyCheckPeerCN](#sslproxycheckpeercn)
- ![](../images/down.gif) [SSLProxyCheckPeerExpire](#sslproxycheckpeerexpire)
- ![](../images/down.gif) [SSLProxyCipherSuite](#sslproxyciphersuite)
- ![](../images/down.gif) [SSLProxyEngine](#sslproxyengine)
- ![](../images/down.gif) [SSLProxyMachineCertificateChainFile](#sslproxymachinecertificatechainfile)
- ![](../images/down.gif) [SSLProxyMachineCertificateFile](#sslproxymachinecertificatefile)
- ![](../images/down.gif) [SSLProxyMachineCertificatePath](#sslproxymachinecertificatepath)
- ![](../images/down.gif) [SSLProxyProtocol](#sslproxyprotocol)
- ![](../images/down.gif) [SSLProxyVerify](#sslproxyverify)
- ![](../images/down.gif) [SSLProxyVerifyDepth](#sslproxyverifydepth)
- ![](../images/down.gif) [SSLRandomSeed](#sslrandomseed)
- ![](../images/down.gif) [SSLRenegBufferSize](#sslrenegbuffersize)
- ![](../images/down.gif) [SSLRequire](#sslrequire)
- ![](../images/down.gif) [SSLRequireSSL](#sslrequiressl)
- ![](../images/down.gif) [SSLSessionCache](#sslsessioncache)
- ![](../images/down.gif) [SSLSessionCacheTimeout](#sslsessioncachetimeout)
- ![](../images/down.gif) [SSLSessionTicketKeyFile](#sslsessionticketkeyfile)
- ![](../images/down.gif) [SSLSessionTickets](#sslsessiontickets)
- ![](../images/down.gif) [SSLStrictSNIVHostCheck](#sslstrictsnivhostcheck)
- ![](../images/down.gif) [SSLUserName](#sslusername)
- ![](../images/down.gif) [SSLVerifyClient](#sslverifyclient)
- ![](../images/down.gif) [SSLVerifyDepth](#sslverifydepth)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Environment Variables

This module can be configured to provide several items of SSL information
as additional environment variables to the SSI and CGI namespace. This
information is not provided by default for performance reasons. (See
`SSLOptions` StdEnvVars, below.) The generated variables
are listed in the table below. For backward compatibility the information can
be made available under different names, too. Look in the [Compatibility](ssl__ssl_compat.md) chapter for details on the
compatibility variables.

| Variable Name: | Value Type: | Description: |
| --- | --- | --- |
| `HTTPS` | flag | HTTPS is being used. |
| `SSL_PROTOCOL` | string | The SSL protocol version (SSLv2, SSLv3, TLSv1, TLSv1.1, TLSv1.2) |
| `SSL_SESSION_ID` | string | The hex-encoded SSL session id |
| `SSL_CIPHER` | string | The cipher specification name |
| `SSL_CIPHER_EXPORT` | string | `true` if cipher is an export cipher |
| `SSL_CIPHER_USEKEYSIZE` | number | Number of cipher bits (actually used) |
| `SSL_CIPHER_ALGKEYSIZE` | number | Number of cipher bits (possible) |
| `SSL_COMPRESS_METHOD` | string | SSL compression method negotiated |
| `SSL_VERSION_INTERFACE` | string | The mod\_ssl program version |
| `SSL_VERSION_LIBRARY` | string | The OpenSSL program version |
| `SSL_CLIENT_M_VERSION` | string | The version of the client certificate |
| `SSL_CLIENT_M_SERIAL` | string | The serial of the client certificate |
| `SSL_CLIENT_S_DN` | string | Subject DN in client's certificate |
| `SSL_CLIENT_S_DN_`*x509* | string | Component of client's Subject DN |
| `SSL_CLIENT_I_DN` | string | Issuer DN of client's certificate |
| `SSL_CLIENT_I_DN_`*x509* | string | Component of client's Issuer DN |
| `SSL_CLIENT_V_START` | string | Validity of client's certificate (start time) |
| `SSL_CLIENT_V_END` | string | Validity of client's certificate (end time) |
| `SSL_CLIENT_V_REMAIN` | string | Number of days until client's certificate expires |
| `SSL_CLIENT_A_SIG` | string | Algorithm used for the signature of client's certificate |
| `SSL_CLIENT_A_KEY` | string | Algorithm used for the public key of client's certificate |
| `SSL_CLIENT_CERT` | string | PEM-encoded client certificate |
| `SSL_CLIENT_CERT_CHAIN_`*n* | string | PEM-encoded certificates in client certificate chain |
| `SSL_CLIENT_VERIFY` | string | `NONE`, `SUCCESS`, `GENEROUS` or `FAILED:`*reason* |
| `SSL_SERVER_M_VERSION` | string | The version of the server certificate |
| `SSL_SERVER_M_SERIAL` | string | The serial of the server certificate |
| `SSL_SERVER_S_DN` | string | Subject DN in server's certificate |
| `SSL_SERVER_S_DN_`*x509* | string | Component of server's Subject DN |
| `SSL_SERVER_I_DN` | string | Issuer DN of server's certificate |
| `SSL_SERVER_I_DN_`*x509* | string | Component of server's Issuer DN |
| `SSL_SERVER_V_START` | string | Validity of server's certificate (start time) |
| `SSL_SERVER_V_END` | string | Validity of server's certificate (end time) |
| `SSL_SERVER_A_SIG` | string | Algorithm used for the signature of server's certificate |
| `SSL_SERVER_A_KEY` | string | Algorithm used for the public key of server's certificate |
| `SSL_SERVER_CERT` | string | PEM-encoded server certificate |
| `SSL_TLS_SNI` | string | Contents of the SNI TLS extension (if supplied with ClientHello) |

*x509* specifies a component of an X.509 DN; one of
`C,ST,L,O,OU,CN,T,I,G,S,D,UID,Email`. In Apache 2.1 and
later, *x509* may also include a numeric `_n`
suffix. If the DN in question contains multiple attributes of the
same name, this suffix is used as an index to select a particular
attribute. For example, where the server certificate subject DN
included two OU fields, `SSL_SERVER_S_DN_OU_0` and
`SSL_SERVER_S_DN_OU_1` could be used to reference each.

`SSL_CLIENT_V_REMAIN` is only available in version 2.1
and later.

[![top](../images/up.gif)](#page-header)

## Custom Log Formats

When `mod_ssl` is built into Apache or at least
loaded (under DSO situation) additional functions exist for the [Custom Log Format](mod__mod_log_config.md#formats) of
`mod_log_config`. First there is an
additional ```%{`*varname*`}x`''
eXtension format function which can be used to expand any variables
provided by any module, especially those provided by mod\_ssl which can
you find in the above table.

For backward compatibility there is additionally a special
```%{`*name*`}c`'' cryptography format function
provided. Information about this function is provided in the [Compatibility](ssl__ssl_compat.md) chapter.

### Example

`CustomLog logs/ssl_request_log \
"%t %h %{SSL_PROTOCOL}x %{SSL_CIPHER}x \"%r\" %b"`

These formats even work without setting the `StdEnvVars`
option of the `SSLOptions`
directive.

[![top](../images/up.gif)](#page-header)

## SSLCACertificateFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File of concatenated PEM-encoded CA Certificates for Client Auth |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCACertificateFile file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the *all-in-one* file where you can assemble the
Certificates of Certification Authorities (CA) whose *clients* you deal
with. These are used for Client Authentication. Such a file is simply the
concatenation of the various PEM-encoded Certificate files, in order of
preference. This can be used alternatively and/or additionally to
`SSLCACertificatePath`.

### Example

`SSLCACertificateFile /usr/local/apache2/conf/ssl.crt/ca-bundle-client.crt`

[![top](../images/up.gif)](#page-header)

## SSLCACertificatePath Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Directory of PEM-encoded CA Certificates for Client Auth |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCACertificatePath directory-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the directory where you keep the Certificates of
Certification Authorities (CAs) whose clients you deal with. These are used to
verify the client certificate on Client Authentication.

The files in this directory have to be PEM-encoded and are accessed through
hash filenames. So usually you can't just place the Certificate files
there: you also have to create symbolic links named
*hash-value*`.N`. And you should always make sure this directory
contains the appropriate symbolic links.

### Example

`SSLCACertificatePath /usr/local/apache2/conf/ssl.crt/`

[![top](../images/up.gif)](#page-header)

## SSLCADNRequestFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File of concatenated PEM-encoded CA Certificates for defining acceptable CA names |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCADNRequestFile file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

When a client certificate is requested by mod\_ssl, a list of
*acceptable Certificate Authority names* is sent to the client
in the SSL handshake. These CA names can be used by the client to
select an appropriate client certificate out of those it has
available.

If neither of the directives `SSLCADNRequestPath` or `SSLCADNRequestFile` are given, then the
set of acceptable CA names sent to the client is the names of all the
CA certificates given by the `SSLCACertificateFile` and `SSLCACertificatePath` directives; in other
words, the names of the CAs which will actually be used to verify the
client certificate.

In some circumstances, it is useful to be able to send a set of
acceptable CA names which differs from the actual CAs used to verify
the client certificate - for example, if the client certificates are
signed by intermediate CAs. In such cases, `SSLCADNRequestPath` and/or `SSLCADNRequestFile` can be used; the
acceptable CA names are then taken from the complete set of
certificates in the directory and/or file specified by this pair of
directives.

`SSLCADNRequestFile` must
specify an *all-in-one* file containing a concatenation of
PEM-encoded CA certificates.

### Example

`SSLCADNRequestFile /usr/local/apache2/conf/ca-names.crt`

[![top](../images/up.gif)](#page-header)

## SSLCADNRequestPath Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Directory of PEM-encoded CA Certificates for defining acceptable CA names |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCADNRequestPath directory-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This optional directive can be used to specify the set of
*acceptable CA names* which will be sent to the client when a
client certificate is requested. See the `SSLCADNRequestFile` directive for more
details.

The files in this directory have to be PEM-encoded and are accessed
through hash filenames. So usually you can't just place the
Certificate files there: you also have to create symbolic links named
*hash-value*`.N`. And you should always make sure
this directory contains the appropriate symbolic links.

### Example

`SSLCADNRequestPath /usr/local/apache2/conf/ca-names.crt/`

[![top](../images/up.gif)](#page-header)

## SSLCARevocationFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File of concatenated PEM-encoded CA CRLs for Client Auth |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCARevocationFile file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the *all-in-one* file where you can
assemble the Certificate Revocation Lists (CRL) of Certification
Authorities (CA) whose *clients* you deal with. These are used
for Client Authentication. Such a file is simply the concatenation of
the various PEM-encoded CRL files, in order of preference. This can be
used alternatively and/or additionally to `SSLCARevocationPath`.

### Example

`SSLCARevocationFile /usr/local/apache2/conf/ssl.crl/ca-bundle-client.crl`

[![top](../images/up.gif)](#page-header)

## SSLCARevocationPath Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Directory of PEM-encoded CA CRLs for Client Auth |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCARevocationPath directory-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the directory where you keep the Certificate Revocation
Lists (CRL) of Certification Authorities (CAs) whose clients you deal with.
These are used to revoke the client certificate on Client Authentication.

The files in this directory have to be PEM-encoded and are accessed through
hash filenames. So usually you have not only to place the CRL files there.
Additionally you have to create symbolic links named
*hash-value*`.rN`. And you should always make sure this directory
contains the appropriate symbolic links.

### Example

`SSLCARevocationPath /usr/local/apache2/conf/ssl.crl/`

[![top](../images/up.gif)](#page-header)

## SSLCertificateChainFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File of PEM-encoded Server CA Certificates |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCertificateChainFile file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the optional *all-in-one* file where you can
assemble the certificates of Certification Authorities (CA) which form the
certificate chain of the server certificate. This starts with the issuing CA
certificate of the server certificate and can range up to the root CA
certificate. Such a file is simply the concatenation of the various
PEM-encoded CA Certificate files, usually in certificate chain order.

This should be used alternatively and/or additionally to `SSLCACertificatePath` for explicitly
constructing the server certificate chain which is sent to the browser
in addition to the server certificate. It is especially useful to
avoid conflicts with CA certificates when using client
authentication. Because although placing a CA certificate of the
server certificate chain into `SSLCACertificatePath` has the same effect
for the certificate chain construction, it has the side-effect that
client certificates issued by this same CA certificate are also
accepted on client authentication.

But be careful: Providing the certificate chain works only if you are using a
*single* RSA *or* DSA based server certificate. If you are
using a coupled RSA+DSA certificate pair, this will work only if actually both
certificates use the *same* certificate chain. Else the browsers will be
confused in this situation.

### Example

`SSLCertificateChainFile /usr/local/apache2/conf/ssl.crt/ca.crt`

[![top](../images/up.gif)](#page-header)

## SSLCertificateFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Server PEM-encoded X.509 Certificate file |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCertificateFile file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | ECC support is available in Apache 2.2.26 and later |

This directive points to a file with certificate data in PEM format.
At a minimum, the file must include an end-entity (leaf) certificate.
The directive can be used up to three times (referencing different filenames)
when an RSA, a DSA, and an ECC based server certificate is used in parallel.

Custom DH parameters and an EC curve name for ephemeral keys,
can be added to end of the first file configured using
`SSLCertificateFile`.
This is supported in version 2.2.30 or later.
Such parameters can be generated using the commands
`openssl dhparam` and `openssl ecparam`.
The parameters can be added as-is to the end of the first
certificate file. Only the first file can be used for custom
parameters, as they are applied independently of the authentication
algorithm type.

Finally the the end-entity certificate's private key can also be
added to the certificate file instead of using a separate
`SSLCertificateKeyFile`
directive. This practice is highly discouraged. If the private
key is encrypted, the pass phrase dialog is forced at startup time.

### DH parameter interoperability with primes > 1024 bit

Beginning with version 2.2.30, mod\_ssl makes use of
standardized DH parameters with prime lengths of 2048, 3072, 4096, 6144 and
8192 bits (from [RFC 3526](http://www.ietf.org/rfc/rfc3526.txt)),
and hands them out to clients based on the length of the certificate's RSA/DSA
key.
With Java-based clients in particular (Java 7 or earlier), this may lead
to handshake failures - see this
[FAQ answer](ssl__ssl_faq.md#javadh) for working around
such issues.

### Example

`SSLCertificateFile /usr/local/apache2/conf/ssl.crt/server.crt`

[![top](../images/up.gif)](#page-header)

## SSLCertificateKeyFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Server PEM-encoded Private Key file |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCertificateKeyFile file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | ECC support is available in Apache 2.2.26 and later |

This directive points to the PEM-encoded private key file for the
server. If the contained private key is encrypted, the pass phrase
dialog is forced at startup time.

The directive can be used up to three times (referencing different filenames)
when an RSA, a DSA, and an ECC based private key is used in parallel. For each
`SSLCertificateKeyFile`
directive, there must be a matching `SSLCertificateFile`
directive.

The private key may also be combined with the certificate in the file given by
`SSLCertificateFile`, but this practice
is highly discouraged.

### Example

`SSLCertificateKeyFile /usr/local/apache2/conf/ssl.key/server.key`

[![top](../images/up.gif)](#page-header)

## SSLCipherSuite Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Cipher Suite available for negotiation in SSL handshake |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCipherSuite cipher-spec` |
| [Default:](mod__directive-dict.md#Default) | `SSLCipherSuite ALL:!ADH:RC4+RSA:+HIGH:+MEDIUM:+LOW:+SSLv2:+EXP` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This complex directive uses a colon-separated *cipher-spec* string
consisting of OpenSSL cipher specifications to configure the Cipher Suite the
client is permitted to negotiate in the SSL handshake phase. Notice that this
directive can be used both in per-server and per-directory context. In
per-server context it applies to the standard SSL handshake when a connection
is established. In per-directory context it forces a SSL renegotiation with the
reconfigured Cipher Suite after the HTTP request was read but before the HTTP
response is sent.

An SSL cipher specification in *cipher-spec* is composed of 4 major
attributes plus a few extra minor ones:

- *Key Exchange Algorithm*:  
  RSA or Diffie-Hellman variants.
- *Authentication Algorithm*:  
  RSA, Diffie-Hellman, DSS or none.
- *Cipher/Encryption Algorithm*:  
  DES, Triple-DES, RC4, RC2, IDEA or none.
- *MAC Digest Algorithm*:  
  MD5, SHA or SHA1.

An SSL cipher can also be an export cipher and is either a SSLv2 or SSLv3/TLSv1
cipher (here TLSv1 is equivalent to SSLv3). To specify which ciphers to use,
one can either specify all the Ciphers, one at a time, or use aliases to
specify the preference and order for the ciphers (see [Table
1](#table1)).

| Tag | Description |
| --- | --- |
| *Key Exchange Algorithm:* | |
| `kRSA` | RSA key exchange |
| `kDHr` | Diffie-Hellman key exchange with RSA key |
| `kDHd` | Diffie-Hellman key exchange with DSA key |
| `kEDH` | Ephemeral (temp.key) Diffie-Hellman key exchange (no cert) |
| *Authentication Algorithm:* | |
| `aNULL` | No authentication |
| `aRSA` | RSA authentication |
| `aDSS` | DSS authentication |
| `aDH` | Diffie-Hellman authentication |
| *Cipher Encoding Algorithm:* | |
| `eNULL` | No encoding |
| `DES` | DES encoding |
| `3DES` | Triple-DES encoding |
| `RC4` | RC4 encoding |
| `RC2` | RC2 encoding |
| `IDEA` | IDEA encoding |
| *MAC Digest Algorithm*: | |
| `MD5` | MD5 hash function |
| `SHA1` | SHA1 hash function |
| `SHA` | SHA hash function |
| *Aliases:* | |
| `SSLv2` | all SSL version 2.0 ciphers |
| `SSLv3` | all SSL version 3.0 ciphers |
| `TLSv1` | all TLS version 1.0 ciphers |
| `EXP` | all export ciphers |
| `EXPORT40` | all 40-bit export ciphers only |
| `EXPORT56` | all 56-bit export ciphers only |
| `LOW` | all low strength ciphers (no export, single DES) |
| `MEDIUM` | all ciphers with 128 bit encryption |
| `HIGH` | all ciphers using Triple-DES |
| `RSA` | all ciphers using RSA key exchange |
| `DH` | all ciphers using Diffie-Hellman key exchange |
| `EDH` | all ciphers using Ephemeral Diffie-Hellman key exchange |
| `ADH` | all ciphers using Anonymous Diffie-Hellman key exchange |
| `DSS` | all ciphers using DSS authentication |
| `NULL` | all ciphers using no encryption |

Now where this becomes interesting is that these can be put together
to specify the order and ciphers you wish to use. To speed this up
there are also aliases (`SSLv2, SSLv3, TLSv1, EXP, LOW, MEDIUM,
HIGH`) for certain groups of ciphers. These tags can be joined
together with prefixes to form the *cipher-spec*. Available
prefixes are:

- none: add cipher to list
- `+`: move matching ciphers to the current location in list
- `-`: remove cipher from list (can be added later again)
- `!`: kill cipher from list completely (can **not** be added later again)

### `aNULL`, `eNULL` and `EXP` ciphers are always disabled

Beginning with version 2.2.30, null and export-grade
ciphers are always disabled, as mod\_ssl unconditionally prepends any supplied
cipher suite string with `!aNULL:!eNULL:!EXP:` at initialization.

A simpler way to look at all of this is to use the ```openssl ciphers
-v`'' command which provides a nice way to successively create the
correct *cipher-spec* string. The default *cipher-spec* string
is ```ALL:!ADH:RC4+RSA:+HIGH:+MEDIUM:+LOW:+SSLv2:+EXP`'' which
means the following: first, remove from consideration any ciphers that do not
authenticate, i.e. for SSL only the Anonymous Diffie-Hellman ciphers. Next,
use ciphers using RC4 and RSA. Next include the high, medium and then the low
security ciphers. Finally *pull* all SSLv2 and export ciphers to the
end of the list.

```
$ openssl ciphers -v 'ALL:!ADH:RC4+RSA:+HIGH:+MEDIUM:+LOW:+SSLv2:+EXP'
NULL-SHA                SSLv3 Kx=RSA      Au=RSA  Enc=None      Mac=SHA1
NULL-MD5                SSLv3 Kx=RSA      Au=RSA  Enc=None      Mac=MD5
EDH-RSA-DES-CBC3-SHA    SSLv3 Kx=DH       Au=RSA  Enc=3DES(168) Mac=SHA1
...                     ...               ...     ...           ...
EXP-RC4-MD5             SSLv3 Kx=RSA(512) Au=RSA  Enc=RC4(40)   Mac=MD5  export
EXP-RC2-CBC-MD5         SSLv2 Kx=RSA(512) Au=RSA  Enc=RC2(40)   Mac=MD5  export
EXP-RC4-MD5             SSLv2 Kx=RSA(512) Au=RSA  Enc=RC4(40)   Mac=MD5  export
```

The complete list of particular RSA & DH ciphers for SSL is given in [Table 2](#table2).

### Example

`SSLCipherSuite RSA:!EXP:!NULL:+HIGH:+MEDIUM:-LOW`

| Cipher-Tag | Protocol | Key Ex. | Auth. | Enc. | MAC | Type |
| --- | --- | --- | --- | --- | --- | --- |
| *RSA Ciphers:* | | | | | | |
| `DES-CBC3-SHA` | SSLv3 | RSA | RSA | 3DES(168) | SHA1 |  |
| `DES-CBC3-MD5` | SSLv2 | RSA | RSA | 3DES(168) | MD5 |  |
| `IDEA-CBC-SHA` | SSLv3 | RSA | RSA | IDEA(128) | SHA1 |  |
| `RC4-SHA` | SSLv3 | RSA | RSA | RC4(128) | SHA1 |  |
| `RC4-MD5` | SSLv3 | RSA | RSA | RC4(128) | MD5 |  |
| `IDEA-CBC-MD5` | SSLv2 | RSA | RSA | IDEA(128) | MD5 |  |
| `RC2-CBC-MD5` | SSLv2 | RSA | RSA | RC2(128) | MD5 |  |
| `RC4-MD5` | SSLv2 | RSA | RSA | RC4(128) | MD5 |  |
| `DES-CBC-SHA` | SSLv3 | RSA | RSA | DES(56) | SHA1 |  |
| `RC4-64-MD5` | SSLv2 | RSA | RSA | RC4(64) | MD5 |  |
| `DES-CBC-MD5` | SSLv2 | RSA | RSA | DES(56) | MD5 |  |
| `EXP-DES-CBC-SHA` | SSLv3 | RSA(512) | RSA | DES(40) | SHA1 | export |
| `EXP-RC2-CBC-MD5` | SSLv3 | RSA(512) | RSA | RC2(40) | MD5 | export |
| `EXP-RC4-MD5` | SSLv3 | RSA(512) | RSA | RC4(40) | MD5 | export |
| `EXP-RC2-CBC-MD5` | SSLv2 | RSA(512) | RSA | RC2(40) | MD5 | export |
| `EXP-RC4-MD5` | SSLv2 | RSA(512) | RSA | RC4(40) | MD5 | export |
| `NULL-SHA` | SSLv3 | RSA | RSA | None | SHA1 |  |
| `NULL-MD5` | SSLv3 | RSA | RSA | None | MD5 |  |
| *Diffie-Hellman Ciphers:* | | | | | | |
| `ADH-DES-CBC3-SHA` | SSLv3 | DH | None | 3DES(168) | SHA1 |  |
| `ADH-DES-CBC-SHA` | SSLv3 | DH | None | DES(56) | SHA1 |  |
| `ADH-RC4-MD5` | SSLv3 | DH | None | RC4(128) | MD5 |  |
| `EDH-RSA-DES-CBC3-SHA` | SSLv3 | DH | RSA | 3DES(168) | SHA1 |  |
| `EDH-DSS-DES-CBC3-SHA` | SSLv3 | DH | DSS | 3DES(168) | SHA1 |  |
| `EDH-RSA-DES-CBC-SHA` | SSLv3 | DH | RSA | DES(56) | SHA1 |  |
| `EDH-DSS-DES-CBC-SHA` | SSLv3 | DH | DSS | DES(56) | SHA1 |  |
| `EXP-EDH-RSA-DES-CBC-SHA` | SSLv3 | DH(512) | RSA | DES(40) | SHA1 | export |
| `EXP-EDH-DSS-DES-CBC-SHA` | SSLv3 | DH(512) | DSS | DES(40) | SHA1 | export |
| `EXP-ADH-DES-CBC-SHA` | SSLv3 | DH(512) | None | DES(40) | SHA1 | export |
| `EXP-ADH-RC4-MD5` | SSLv3 | DH(512) | None | RC4(40) | MD5 | export |

[![top](../images/up.gif)](#page-header)

## SSLCompression Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable compression on the SSL level |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCompression on|off` |
| [Default:](mod__directive-dict.md#Default) | `SSLCompression off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.2.24 and later, if using OpenSSL 0.9.8 or later; virtual host scope available if using OpenSSL 1.0.0 or later. The default used to be `on` in versions 2.2.24 to 2.2.25. |

This directive allows to enable compression on the SSL level.

Enabling compression causes security issues in most setups (the so called
CRIME attack).

[![top](../images/up.gif)](#page-header)

## SSLCryptoDevice Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable use of a cryptographic hardware accelerator |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLCryptoDevice engine` |
| [Default:](mod__directive-dict.md#Default) | `SSLCryptoDevice builtin` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.1 and later, if using -engine flavor of OpenSSL 0.9.6, or OpenSSL 0.9.7 or later |

This directive enables use of a cryptographic hardware accelerator
board to offload some of the SSL processing overhead. This directive
can only be used if the SSL toolkit is built with "engine" support;
OpenSSL 0.9.7 and later releases have "engine" support by default, the
separate "-engine" releases of OpenSSL 0.9.6 must be used.

To discover which engine names are supported, run the command
"`openssl engine`".

### Example

`# For a Broadcom accelerator:  
SSLCryptoDevice ubsec`

[![top](../images/up.gif)](#page-header)

## SSLEngine Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | SSL Engine Operation Switch |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLEngine on|off|optional` |
| [Default:](mod__directive-dict.md#Default) | `SSLEngine off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive toggles the usage of the SSL/TLS Protocol Engine. This
should be used inside a `<VirtualHost>` section to enable SSL/TLS for a
that virtual host. By default the SSL/TLS Protocol Engine is
disabled for both the main server and all configured virtual hosts.

### Example

`<VirtualHost _default_:443>  
SSLEngine on  
...  
</VirtualHost>`

In Apache 2.1 and later, `SSLEngine` can be set to
`optional`. This enables support for
[RFC 2817](http://www.ietf.org/rfc/rfc2817.txt), Upgrading to TLS
Within HTTP/1.1. At this time no web browsers support RFC 2817.

[![top](../images/up.gif)](#page-header)

## SSLFIPS Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | SSL FIPS mode Switch |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLFIPS on|off` |
| [Default:](mod__directive-dict.md#Default) | `SSLFIPS off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive toggles the usage of the SSL library FIPS\_mode flag.
It must be set in the global server context and cannot be configured
with conflicting settings (SSLFIPS on followed by SSLFIPS off or
similar). The mode applies to all SSL library operations.

If httpd was compiled against an SSL library which did not support
the FIPS\_mode flag, `SSLFIPS on` will fail. Refer to the
FIPS 140-2 Security Policy document of the SSL provider library for
specific requirements to use mod\_ssl in a FIPS 140-2 approved mode
of operation; note that mod\_ssl itself is not validated, but may be
described as using FIPS 140-2 validated cryptographic module, when
all components are assembled and operated under the guidelines imposed
by the applicable Security Policy.

[![top](../images/up.gif)](#page-header)

## SSLHonorCipherOrder Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Option to prefer the server's cipher preference order |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLHonorCipherOrder flag` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.1 and later, if using OpenSSL 0.9.7 or later |

When choosing a cipher during an SSLv3 or TLSv1 handshake, normally
the client's preference is used. If this directive is enabled, the
server's preference will be used instead.

### Example

`SSLHonorCipherOrder on`

[![top](../images/up.gif)](#page-header)

## SSLInsecureRenegotiation Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Option to enable support for insecure renegotiation |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLInsecureRenegotiation flag` |
| [Default:](mod__directive-dict.md#Default) | `SSLInsecureRenegotiation off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.2.15 and later, if using OpenSSL 0.9.8m or later |

As originally specified, all versions of the SSL and TLS protocols
(up to and including TLS/1.2) were vulnerable to a Man-in-the-Middle
attack
([CVE-2009-3555](http://cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2009-3555))
during a renegotiation. This vulnerability allowed an attacker to
"prefix" a chosen plaintext to the HTTP request as seen by the web
server. A protocol extension was developed which fixed this
vulnerability if supported by both client and server.

If `mod_ssl` is linked against OpenSSL version 0.9.8m
or later, by default renegotiation is only supported with
clients supporting the new protocol extension. If this directive is
enabled, renegotiation will be allowed with old (unpatched) clients,
albeit insecurely.

### Security warning

If this directive is enabled, SSL connections will be vulnerable to
the Man-in-the-Middle prefix attack as described
in [CVE-2009-3555](http://cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2009-3555).

### Example

`SSLInsecureRenegotiation on`

The `SSL_SECURE_RENEG` environment variable can be used
from an SSI or CGI script to determine whether secure renegotiation is
supported for a given SSL connection.

[![top](../images/up.gif)](#page-header)

## SSLMutex Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Semaphore for internal mutual exclusion of operations |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLMutex type` |
| [Default:](mod__directive-dict.md#Default) | `SSLMutex none` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This configures the SSL engine's semaphore (aka. lock) which is used for mutual
exclusion of operations which have to be done in a synchronized way between the
pre-forked Apache server processes. This directive can only be used in the
global server context because it's only useful to have one global mutex.
This directive is designed to closely match the
`AcceptMutex` directive.

The following Mutex *types* are available:

- `none | no`

  This is the default where no Mutex is used at all. Use it at your own
  risk. But because currently the Mutex is mainly used for synchronizing
  write access to the SSL Session Cache you can live without it as long
  as you accept a sometimes garbled Session Cache. So it's not recommended
  to leave this the default. Instead configure a real Mutex.
- `posixsem`

  This is an elegant Mutex variant where a Posix Semaphore is used when possible.
  It is only available when the underlying platform
  and [APR](glossary.md#apr "see glossary") supports it.
- `sysvsem`

  This is a somewhat elegant Mutex variant where a SystemV IPC Semaphore is used when
  possible. It is possible to "leak" SysV semaphores if processes crash before
  the semaphore is removed. It is only available when the underlying platform
  and [APR](glossary.md#apr "see glossary") supports it.
- `sem`

  This directive tells the SSL Module to pick the "best" semaphore implementation
  available to it, choosing between Posix and SystemV IPC, in that order. It is only
  available when the underlying platform and [APR](glossary.md#apr "see glossary") supports at least one of the 2.
- `pthread`

  This directive tells the SSL Module to use Posix thread mutexes. It is only available
  if the underlying platform and [APR](glossary.md#apr "see glossary") supports it.
- `fcntl:/path/to/mutex`

  This is a portable Mutex variant where a physical (lock-)file and the `fcntl()`
  function are used as the Mutex.
  Always use a local disk filesystem for `/path/to/mutex` and never a file
  residing on a NFS- or AFS-filesystem. It is only available when the underlying platform
  and [APR](glossary.md#apr "see glossary") supports it. Note: Internally, the Process ID (PID) of the
  Apache parent process is automatically appended to
  `/path/to/mutex` to make it unique, so you don't have to worry
  about conflicts yourself. Notice that this type of mutex is not available
  under the Win32 environment. There you *have* to use the semaphore
  mutex.
- `flock:/path/to/mutex`

  This is similar to the `fcntl:/path/to/mutex` method with the
  exception that the `flock()` function is used to provide file
  locking. It is only available when the underlying platform
  and [APR](glossary.md#apr "see glossary") supports it.
- `file:/path/to/mutex`

  This directive tells the SSL Module to pick the "best" file locking implementation
  available to it, choosing between `fcntl` and `flock`,
  in that order. It is only available when the underlying platform and [APR](glossary.md#apr "see glossary") supports
  at least one of the 2.
- `default | yes`

  This directive tells the SSL Module to pick the default locking implementation
  as determined by the platform and [APR](glossary.md#apr "see glossary").

### Example

`SSLMutex file:/usr/local/apache/logs/ssl_mutex`

[![top](../images/up.gif)](#page-header)

## SSLOptions Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configure various SSL engine run-time options |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLOptions [+|-]option ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive can be used to control various run-time options on a
per-directory basis. Normally, if multiple `SSLOptions`
could apply to a directory, then the most specific one is taken
completely; the options are not merged. However if *all* the
options on the `SSLOptions` directive are preceded by a
plus (`+`) or minus (`-`) symbol, the options
are merged. Any options preceded by a `+` are added to the
options currently in force, and any options preceded by a
`-` are removed from the options currently in force.

The available *option*s are:

- `StdEnvVars`

  When this option is enabled, the standard set of SSL related CGI/SSI
  environment variables are created. This per default is disabled for
  performance reasons, because the information extraction step is a
  rather expensive operation. So one usually enables this option for
  CGI and SSI requests only.
- `ExportCertData`

  When this option is enabled, additional CGI/SSI environment variables are
  created: `SSL_SERVER_CERT`, `SSL_CLIENT_CERT` and
  `SSL_CLIENT_CERT_CHAIN_`*n* (with *n* = 0,1,2,..).
  These contain the PEM-encoded X.509 Certificates of server and client for
  the current HTTPS connection and can be used by CGI scripts for deeper
  Certificate checking. Additionally all other certificates of the client
  certificate chain are provided, too. This bloats up the environment a
  little bit which is why you have to use this option to enable it on
  demand.
- `FakeBasicAuth`

  When this option is enabled, the Subject Distinguished Name (DN) of the
  Client X509 Certificate is translated into a HTTP Basic Authorization
  username. This means that the standard Apache authentication methods can
  be used for access control. The user name is just the Subject of the
  Client's X509 Certificate (can be determined by running OpenSSL's
  `openssl x509` command: `openssl x509 -noout -subject -in`*certificate*`.crt`). Note that no password is
  obtained from the user. Every entry in the user file needs this password:
  ```xxj31ZMTZzkVA`'', which is the DES-encrypted version of the
  word ``password`''. Those who live under MD5-based encryption
  (for instance under FreeBSD or BSD/OS, etc.) should use the following MD5
  hash of the same word: ```$1$OXLyS...$Owx8s2/m9/gfkcRVXzgoE/`''.
- `StrictRequire`

  This *forces* forbidden access when `SSLRequireSSL` or
  `SSLRequire` successfully decided that access should be
  forbidden. Usually the default is that in the case where a ```Satisfy
  any`'' directive is used, and other access restrictions are passed,
  denial of access due to `SSLRequireSSL` or
  `SSLRequire` is overridden (because that's how the Apache
  `Satisfy` mechanism should work.) But for strict access restriction
  you can use `SSLRequireSSL` and/or `SSLRequire` in
  combination with an ```SSLOptions +StrictRequire`''. Then an
  additional ```Satisfy Any`'' has no chance once mod\_ssl has
  decided to deny access.
- `OptRenegotiate`

  This enables optimized SSL connection renegotiation handling when SSL
  directives are used in per-directory context. By default a strict
  scheme is enabled where *every* per-directory reconfiguration of
  SSL parameters causes a *full* SSL renegotiation handshake. When this
  option is used mod\_ssl tries to avoid unnecessary handshakes by doing more
  granular (but still safe) parameter checks. Nevertheless these granular
  checks sometimes maybe not what the user expects, so enable this on a
  per-directory basis only, please.

### Example

`SSLOptions +FakeBasicAuth -StrictRequire  
<Files ~ "\.(cgi|shtml)$">  
SSLOptions +StdEnvVars -ExportCertData  
<Files>`

[![top](../images/up.gif)](#page-header)

## SSLPassPhraseDialog Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Type of pass phrase dialog for encrypted private keys |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLPassPhraseDialog type` |
| [Default:](mod__directive-dict.md#Default) | `SSLPassPhraseDialog builtin` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

When Apache starts up it has to read the various Certificate (see
`SSLCertificateFile`) and
Private Key (see `SSLCertificateKeyFile`) files of the
SSL-enabled virtual servers. Because for security reasons the Private
Key files are usually encrypted, mod\_ssl needs to query the
administrator for a Pass Phrase in order to decrypt those files. This
query can be done in two ways which can be configured by
*type*:

- `builtin`

  This is the default where an interactive terminal dialog occurs at startup
  time just before Apache detaches from the terminal. Here the administrator
  has to manually enter the Pass Phrase for each encrypted Private Key file.
  Because a lot of SSL-enabled virtual hosts can be configured, the
  following reuse-scheme is used to minimize the dialog: When a Private Key
  file is encrypted, all known Pass Phrases (at the beginning there are
  none, of course) are tried. If one of those known Pass Phrases succeeds no
  dialog pops up for this particular Private Key file. If none succeeded,
  another Pass Phrase is queried on the terminal and remembered for the next
  round (where it perhaps can be reused).

  This scheme allows mod\_ssl to be maximally flexible (because for N encrypted
  Private Key files you *can* use N different Pass Phrases - but then
  you have to enter all of them, of course) while minimizing the terminal
  dialog (i.e. when you use a single Pass Phrase for all N Private Key files
  this Pass Phrase is queried only once).
- `|/path/to/program [args...]`

  This mode allows an external program to be used which acts as a
  pipe to a particular input device; the program is sent the standard
  prompt text used for the `builtin` mode on
  `stdin`, and is expected to write password strings on
  `stdout`. If several passwords are needed (or an
  incorrect password is entered), additional prompt text will be
  written subsequent to the first password being returned, and more
  passwords must then be written back.
- `exec:/path/to/program`

  Here an external program is configured which is called at startup for each
  encrypted Private Key file. It is called with two arguments (the first is
  of the form ```servername:portnumber`'', the second is either
  ```RSA`'', ```DSA`'', or ```ECC`''), which
  indicate for which server and algorithm it has to print the corresponding
  Pass Phrase to `stdout`. The intent is that this external
  program first runs security checks to make sure that the system is not
  compromised by an attacker, and only when these checks were passed
  successfully it provides the Pass Phrase.

  Both these security checks, and the way the Pass Phrase is determined, can
  be as complex as you like. Mod\_ssl just defines the interface: an
  executable program which provides the Pass Phrase on `stdout`.
  Nothing more or less! So, if you're really paranoid about security, here
  is your interface. Anything else has to be left as an exercise to the
  administrator, because local security requirements are so different.

  The reuse-algorithm above is used here, too. In other words: The external
  program is called only once per unique Pass Phrase.

### Example

`SSLPassPhraseDialog exec:/usr/local/apache/sbin/pp-filter`

[![top](../images/up.gif)](#page-header)

## SSLProtocol Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configure usable SSL protocol flavors |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProtocol [+|-]protocol ...` |
| [Default:](mod__directive-dict.md#Default) | `SSLProtocol all` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive can be used to control the SSL protocol flavors mod\_ssl should
use when establishing its server environment. Clients then can only connect
with one of the provided protocols.

The available (case-insensitive) *protocol*s are:

- `SSLv2`

  This is the Secure Sockets Layer (SSL) protocol, version 2.0. It is the
  original SSL protocol as designed by Netscape Corporation. Though its
  use has been deprecated, because of weaknesses in the security of the protocol.
- `SSLv3`

  This is the Secure Sockets Layer (SSL) protocol, version 3.0, from
  the Netscape Corporation.
  It is the successor to SSLv2 and the predecessor to TLSv1. It's supported by
  almost all popular browsers.
- `TLSv1`

  This is the Transport Layer Security (TLS) protocol, version 1.0.
  It is the successor to SSLv3 and is defined in
  [RFC 2246](http://www.ietf.org/rfc/rfc2246.txt).
- `TLSv1.1` (when using OpenSSL 1.0.1 and later)

  A revision of the TLS 1.0 protocol, as defined in
  [RFC 4346](http://www.ietf.org/rfc/rfc4346.txt).
- `TLSv1.2` (when using OpenSSL 1.0.1 and later)

  A revision of the TLS 1.1 protocol, as defined in
  [RFC 5246](http://www.ietf.org/rfc/rfc5246.txt).
- `All`

  This is a shortcut for ```+SSLv2 +SSLv3 +TLSv1`'' or
  - when using OpenSSL 1.0.1 and later -
  ```+SSLv2 +SSLv3 +TLSv1 +TLSv1.1 +TLSv1.2`'', respectively.

### Example

`# enable SSLv3 and all available TLSv1 flavors, but not SSLv2  
SSLProtocol All -SSLv2`

[![top](../images/up.gif)](#page-header)

## SSLProxyCACertificateFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File of concatenated PEM-encoded CA Certificates for Remote Server Auth |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyCACertificateFile file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the *all-in-one* file where you can assemble the
Certificates of Certification Authorities (CA) whose *remote servers* you deal
with. These are used for Remote Server Authentication. Such a file is simply the
concatenation of the various PEM-encoded Certificate files, in order of
preference. This can be used alternatively and/or additionally to
`SSLProxyCACertificatePath`.

### Example

`SSLProxyCACertificateFile /usr/local/apache2/conf/ssl.crt/ca-bundle-remote-server.crt`

[![top](../images/up.gif)](#page-header)

## SSLProxyCACertificatePath Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Directory of PEM-encoded CA Certificates for Remote Server Auth |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyCACertificatePath directory-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the directory where you keep the Certificates of
Certification Authorities (CAs) whose remote servers you deal with. These are used to
verify the remote server certificate on Remote Server Authentication.

The files in this directory have to be PEM-encoded and are accessed through
hash filenames. So usually you can't just place the Certificate files
there: you also have to create symbolic links named
*hash-value*`.N`. And you should always make sure this directory
contains the appropriate symbolic links.

### Example

`SSLProxyCACertificatePath /usr/local/apache2/conf/ssl.crt/`

[![top](../images/up.gif)](#page-header)

## SSLProxyCARevocationFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File of concatenated PEM-encoded CA CRLs for Remote Server Auth |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyCARevocationFile file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the *all-in-one* file where you can
assemble the Certificate Revocation Lists (CRL) of Certification
Authorities (CA) whose *remote servers* you deal with. These are used
for Remote Server Authentication. Such a file is simply the concatenation of
the various PEM-encoded CRL files, in order of preference. This can be
used alternatively and/or additionally to `SSLProxyCARevocationPath`.

### Example

`SSLProxyCARevocationFile /usr/local/apache2/conf/ssl.crl/ca-bundle-remote-server.crl`

[![top](../images/up.gif)](#page-header)

## SSLProxyCARevocationPath Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Directory of PEM-encoded CA CRLs for Remote Server Auth |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyCARevocationPath directory-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the directory where you keep the Certificate Revocation
Lists (CRL) of Certification Authorities (CAs) whose remote servers you deal with.
These are used to revoke the remote server certificate on Remote Server Authentication.

The files in this directory have to be PEM-encoded and are accessed through
hash filenames. So usually you have not only to place the CRL files there.
Additionally you have to create symbolic links named
*hash-value*`.rN`. And you should always make sure this directory
contains the appropriate symbolic links.

### Example

`SSLProxyCARevocationPath /usr/local/apache2/conf/ssl.crl/`

[![top](../images/up.gif)](#page-header)

## SSLProxyCheckPeerCN Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Whether to check the remote server certificates CN field |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyCheckPeerCN on|off` |
| [Default:](mod__directive-dict.md#Default) | `SSLProxyCheckPeerCN off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets whether the remote server certificates CN field is
compared against the hostname of the request URL. If both are not equal
a 502 status code (Bad Gateway) is sent.

### Example

`SSLProxyCheckPeerCN on`

[![top](../images/up.gif)](#page-header)

## SSLProxyCheckPeerExpire Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Whether to check if remote server certificate is expired |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyCheckPeerExpire on|off` |
| [Default:](mod__directive-dict.md#Default) | `SSLProxyCheckPeerExpire off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets whether it is checked if the remote server certificate
is expired or not. If the check fails a 502 status code (Bad Gateway) is
sent.

### Example

`SSLProxyCheckPeerExpire on`

[![top](../images/up.gif)](#page-header)

## SSLProxyCipherSuite Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Cipher Suite available for negotiation in SSL proxy handshake |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyCipherSuite cipher-spec` |
| [Default:](mod__directive-dict.md#Default) | `SSLProxyCipherSuite ALL:!ADH:RC4+RSA:+HIGH:+MEDIUM:+LOW:+SSLv2:+EXP` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

Equivalent to `SSLCipherSuite`, but for the proxy connection.
Please refer to `SSLCipherSuite`
for additional information.

[![top](../images/up.gif)](#page-header)

## SSLProxyEngine Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | SSL Proxy Engine Operation Switch |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyEngine on|off` |
| [Default:](mod__directive-dict.md#Default) | `SSLProxyEngine off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive toggles the usage of the SSL/TLS Protocol Engine for proxy. This
is usually used inside a `<VirtualHost>` section to enable SSL/TLS for proxy
usage in a particular virtual host. By default the SSL/TLS Protocol Engine is
disabled for proxy both for the main server and all configured virtual hosts.

Note that the SSLProxyEngine directive should not, in
general, be included in a virtual host that will be acting as a
forward proxy (using <Proxy> or <ProxyRequest> directives.
SSLProxyEngine is not required to enable a forward proxy server to
proxy SSL/TLS requests.

### Example

`<VirtualHost _default_:443>  
SSLProxyEngine on  
...  
</VirtualHost>`

[![top](../images/up.gif)](#page-header)

## SSLProxyMachineCertificateChainFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File of concatenated PEM-encoded CA certificates to be used by the proxy for choosing a certificate |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyMachineCertificateChainFile filename` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Override:](mod__directive-dict.md#Override) | Not applicable |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.2.23 and later |

This directive sets the all-in-one file where you keep the certificate chain
for all of the client certs in use. This directive will be needed if the
remote server presents a list of CA certificates that are not direct signers
of one of the configured client certificates.

This referenced file is simply the concatenation of the various PEM-encoded
certificate files. Upon startup, each client certificate configured will
be examined and a chain of trust will be constructed.

### Security warning

If this directive is enabled, all of the certificates in the file will be
trusted as if they were also in `SSLProxyCACertificateFile`.

### Example

`SSLProxyMachineCertificateChainFile /usr/local/apache2/conf/ssl.crt/proxyCA.pem`

[![top](../images/up.gif)](#page-header)

## SSLProxyMachineCertificateFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File of concatenated PEM-encoded client certificates and keys to be used by the proxy |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyMachineCertificateFile filename` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Override:](mod__directive-dict.md#Override) | Not applicable |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the all-in-one file where you keep the certificates and
keys used for authentication of the proxy server to remote servers.

This referenced file is simply the concatenation of the various PEM-encoded
certificate files, in order of preference. Use this directive alternatively
or additionally to `SSLProxyMachineCertificatePath`.

Currently there is no support for encrypted private keys

### Example

`SSLProxyMachineCertificateFile /usr/local/apache2/conf/ssl.crt/proxy.pem`

[![top](../images/up.gif)](#page-header)

## SSLProxyMachineCertificatePath Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Directory of PEM-encoded client certificates and keys to be used by the proxy |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyMachineCertificatePath directory` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Override:](mod__directive-dict.md#Override) | Not applicable |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the directory where you keep the certificates and
keys used for authentication of the proxy server to remote servers.

The files in this directory must be PEM-encoded and are accessed through
hash filenames. Additionally, you must create symbolic links named
`hash-value.N`. And you should always make sure this
directory contains the appropriate symbolic links.

Currently there is no support for encrypted private keys

### Example

`SSLProxyMachineCertificatePath /usr/local/apache2/conf/proxy.crt/`

[![top](../images/up.gif)](#page-header)

## SSLProxyProtocol Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configure usable SSL protocol flavors for proxy usage |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyProtocol [+|-]protocol ...` |
| [Default:](mod__directive-dict.md#Default) | `SSLProxyProtocol all` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Override:](mod__directive-dict.md#Override) | Options |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive can be used to control the SSL protocol flavors mod\_ssl should
use when establishing its server environment for proxy . It will only connect
to servers using one of the provided protocols.

Please refer to `SSLProtocol`
for additional information.

[![top](../images/up.gif)](#page-header)

## SSLProxyVerify Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Type of remote server Certificate verification |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyVerify level` |
| [Default:](mod__directive-dict.md#Default) | `SSLProxyVerify none` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

When a proxy is configured to forward requests to a remote SSL
server, this directive can be used to configure certificate
verification of the remote server.

Note that even when certificate verification is enabled,
`mod_ssl` does **not** check whether the
`commonName` (hostname) attribute of the server certificate
matches the hostname used to connect to the server. In other words,
the proxy does not guarantee that the SSL connection to the backend
server is "secure" beyond the fact that the certificate is signed by
one of the CAs configured using the
`SSLProxyCACertificatePath` and/or
`SSLProxyCACertificateFile` directives.
In order to get this check done please have a look at
`SSLProxyCheckPeerCN` and
`SSLProxyCheckPeerExpire` directives which are off by
default.

The following levels are available for *level*:

- **none**:
  no remote server Certificate is required at all
- **optional**:
  the remote server *may* present a valid Certificate
- **require**:
  the remote server *has to* present a valid Certificate
- **optional\_no\_ca**:
  the remote server may present a valid Certificate  
  but it need not to be (successfully) verifiable.

In practice only levels **none** and
**require** are really interesting, because level
**optional** doesn't work with all servers and level
**optional\_no\_ca** is actually against the idea of
authentication (but can be used to establish SSL test pages, etc.)

### Example

`SSLProxyVerify require`

[![top](../images/up.gif)](#page-header)

## SSLProxyVerifyDepth Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum depth of CA Certificates in Remote Server Certificate verification |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLProxyVerifyDepth number` |
| [Default:](mod__directive-dict.md#Default) | `SSLProxyVerifyDepth 1` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets how deeply mod\_ssl should verify before deciding that the
remote server does not have a valid certificate.

The depth actually is the maximum number of intermediate certificate issuers,
i.e. the number of CA certificates which are max allowed to be followed while
verifying the remote server certificate. A depth of 0 means that self-signed
remote server certificates are accepted only, the default depth of 1 means
the remote server certificate can be self-signed or has to be signed by a CA
which is directly known to the server (i.e. the CA's certificate is under
`SSLProxyCACertificatePath`), etc.

### Example

`SSLProxyVerifyDepth 10`

[![top](../images/up.gif)](#page-header)

## SSLRandomSeed Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Pseudo Random Number Generator (PRNG) seeding source |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLRandomSeed context source [bytes]` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This configures one or more sources for seeding the Pseudo Random Number
Generator (PRNG) in OpenSSL at startup time (*context* is
`startup`) and/or just before a new SSL connection is established
(*context* is `connect`). This directive can only be used
in the global server context because the PRNG is a global facility.

The following *source* variants are available:

- `builtin`

  This is the always available builtin seeding source. Its usage
  consumes minimum CPU cycles under runtime and hence can be always used
  without drawbacks. The source used for seeding the PRNG contains of the
  current time, the current process id and (when applicable) a randomly
  chosen 1KB extract of the inter-process scoreboard structure of Apache.
  The drawback is that this is not really a strong source and at startup
  time (where the scoreboard is still not available) this source just
  produces a few bytes of entropy. So you should always, at least for the
  startup, use an additional seeding source.
- `file:/path/to/source`

  This variant uses an external file `/path/to/source` as the
  source for seeding the PRNG. When *bytes* is specified, only the
  first *bytes* number of bytes of the file form the entropy (and
  *bytes* is given to `/path/to/source` as the first
  argument). When *bytes* is not specified the whole file forms the
  entropy (and `0` is given to `/path/to/source` as
  the first argument). Use this especially at startup time, for instance
  with an available `/dev/random` and/or
  `/dev/urandom` devices (which usually exist on modern Unix
  derivatives like FreeBSD and Linux).

  *But be careful*: Usually `/dev/random` provides only as
  much entropy data as it actually has, i.e. when you request 512 bytes of
  entropy, but the device currently has only 100 bytes available two things
  can happen: On some platforms you receive only the 100 bytes while on
  other platforms the read blocks until enough bytes are available (which
  can take a long time). Here using an existing `/dev/urandom` is
  better, because it never blocks and actually gives the amount of requested
  data. The drawback is just that the quality of the received data may not
  be the best.

  On some platforms like FreeBSD one can even control how the entropy is
  actually generated, i.e. by which system interrupts. More details one can
  find under *rndcontrol(8)* on those platforms. Alternatively, when
  your system lacks such a random device, you can use a tool
  like [EGD](http://www.lothar.com/tech/crypto/)
  (Entropy Gathering Daemon) and run its client program with the
  `exec:/path/to/program/` variant (see below) or use
  `egd:/path/to/egd-socket` (see below).
- `exec:/path/to/program`

  This variant uses an external executable
  `/path/to/program` as the source for seeding the
  PRNG. When *bytes* is specified, only the first
  *bytes* number of bytes of its `stdout` contents
  form the entropy. When *bytes* is not specified, the
  entirety of the data produced on `stdout` form the
  entropy. Use this only at startup time when you need a very strong
  seeding with the help of an external program (for instance as in
  the example above with the `truerand` utility you can
  find in the mod\_ssl distribution which is based on the AT&T
  *truerand* library). Using this in the connection context
  slows down the server too dramatically, of course. So usually you
  should avoid using external programs in that context.
- `egd:/path/to/egd-socket` (Unix only)

  This variant uses the Unix domain socket of the
  external Entropy Gathering Daemon (EGD) (see [http://www.lothar.com/tech
  /crypto/](http://www.lothar.com/tech/crypto/)) to seed the PRNG. Use this if no random device exists
  on your platform.

### Example

`SSLRandomSeed startup builtin  
SSLRandomSeed startup file:/dev/random  
SSLRandomSeed startup file:/dev/urandom 1024  
SSLRandomSeed startup exec:/usr/local/bin/truerand 16  
SSLRandomSeed connect builtin  
SSLRandomSeed connect file:/dev/random  
SSLRandomSeed connect file:/dev/urandom 1024`

[![top](../images/up.gif)](#page-header)

## SSLRenegBufferSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set the size for the SSL renegotiation buffer |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLRenegBufferSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `SSLRenegBufferSize 131072` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

If an SSL renegotiation is required in per-location context, for
example, any use of `SSLVerifyClient` in a Directory or
Location block, then `mod_ssl` must buffer any HTTP
request body into memory until the new SSL handshake can be performed.
This directive can be used to set the amount of memory that will be
used for this buffer.

Note that in many configurations, the client sending the request body
will be untrusted so a denial of service attack by consumption of
memory must be considered when changing this configuration setting.

### Example

`SSLRenegBufferSize 262144`

[![top](../images/up.gif)](#page-header)

## SSLRequire Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Allow access only when an arbitrarily complex boolean expression is true |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLRequire expression` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive specifies a general access requirement which has to be
fulfilled in order to allow access. It is a very powerful directive because the
requirement specification is an arbitrarily complex boolean expression
containing any number of access checks.

The implementation of `SSLRequire` is not thread safe.
Using `SSLRequire` inside `.htaccess` files
on a threaded [MPM](mpm.md) may cause random crashes.

The *expression* must match the following syntax (given as a BNF
grammar notation):

> ```
> expr     ::= "true" | "false"
>            | "!" expr
>            | expr "&&" expr
>            | expr "||" expr
>            | "(" expr ")"
>            | comp
>
> comp     ::= word "==" word | word "eq" word
>            | word "!=" word | word "ne" word
>            | word "<"  word | word "lt" word
>            | word "<=" word | word "le" word
>            | word ">"  word | word "gt" word
>            | word ">=" word | word "ge" word
>            | word "in" "{" wordlist "}"
>            | word "in" "OID(" word ")"
>            | word "=~" regex
>            | word "!~" regex
>
> wordlist ::= word
>            | wordlist "," word
>
> word     ::= digit
>            | cstring
>            | variable
>            | function
>
> digit    ::= [0-9]+
> cstring  ::= "..."
> variable ::= "%{" varname "}"
> function ::= funcname "(" funcargs ")"
> ```

while for `varname` any variable from [Table 3](#table3) can be used. Finally for
`funcname` the following functions are available:

- `file(`*filename*`)`

  This function takes one string argument and expands to the contents of the
  file. This is especially useful for matching this contents against a
  regular expression, etc.

Notice that *expression* is first parsed into an internal machine
representation and then evaluated in a second step. Actually, in Global and
Per-Server Class context *expression* is parsed at startup time and
at runtime only the machine representation is executed. For Per-Directory
context, specifically in a .htaccess context, this is different: here *expression* has to be parsed and immediately executed for every request.

### Example

`SSLRequire ( %{SSL_CIPHER} !~ m/^(EXP|NULL)-/ \  
and %{SSL_CLIENT_S_DN_O} eq "Snake Oil, Ltd." \  
and %{SSL_CLIENT_S_DN_OU} in {"Staff", "CA", "Dev"} \  
and %{TIME_WDAY} >= 1 and %{TIME_WDAY} <= 5 \  
and %{TIME_HOUR} >= 8 and %{TIME_HOUR} <= 20 ) \  
or %{REMOTE_ADDR} =~ m/^192\.76\.162\.[0-9]+$/`

The `OID()` function expects to find zero or more instances
of the given OID in the client certificate, and compares the left-hand side
string against the value of matching OID attributes. Every matching OID is
checked, until a match is found.

*Standard CGI/1.0 and Apache variables:*

```
HTTP_USER_AGENT        PATH_INFO             AUTH_TYPE
HTTP_REFERER           QUERY_STRING          SERVER_SOFTWARE
HTTP_COOKIE            REMOTE_HOST           API_VERSION
HTTP_FORWARDED         REMOTE_IDENT          TIME_YEAR
HTTP_HOST              IS_SUBREQ             TIME_MON
HTTP_PROXY_CONNECTION  DOCUMENT_ROOT         TIME_DAY
HTTP_ACCEPT            SERVER_ADMIN          TIME_HOUR
HTTP:headername        SERVER_NAME           TIME_MIN
THE_REQUEST            SERVER_PORT           TIME_SEC
REQUEST_METHOD         SERVER_PROTOCOL       TIME_WDAY
REQUEST_SCHEME         REMOTE_ADDR           TIME
REQUEST_URI            REMOTE_USER           ENV:variablename
REQUEST_FILENAME
```

*SSL-related variables:*

```
HTTPS                  SSL_CLIENT_M_VERSION   SSL_SERVER_M_VERSION
                       SSL_CLIENT_M_SERIAL    SSL_SERVER_M_SERIAL
SSL_PROTOCOL           SSL_CLIENT_V_START     SSL_SERVER_V_START
SSL_SESSION_ID         SSL_CLIENT_V_END       SSL_SERVER_V_END
SSL_CIPHER             SSL_CLIENT_S_DN        SSL_SERVER_S_DN
SSL_CIPHER_EXPORT      SSL_CLIENT_S_DN_C      SSL_SERVER_S_DN_C
SSL_CIPHER_ALGKEYSIZE  SSL_CLIENT_S_DN_ST     SSL_SERVER_S_DN_ST
SSL_CIPHER_USEKEYSIZE  SSL_CLIENT_S_DN_L      SSL_SERVER_S_DN_L
SSL_VERSION_LIBRARY    SSL_CLIENT_S_DN_O      SSL_SERVER_S_DN_O
SSL_VERSION_INTERFACE  SSL_CLIENT_S_DN_OU     SSL_SERVER_S_DN_OU
                       SSL_CLIENT_S_DN_CN     SSL_SERVER_S_DN_CN
                       SSL_CLIENT_S_DN_T      SSL_SERVER_S_DN_T
                       SSL_CLIENT_S_DN_I      SSL_SERVER_S_DN_I
                       SSL_CLIENT_S_DN_G      SSL_SERVER_S_DN_G
                       SSL_CLIENT_S_DN_S      SSL_SERVER_S_DN_S
                       SSL_CLIENT_S_DN_D      SSL_SERVER_S_DN_D
                       SSL_CLIENT_S_DN_UID    SSL_SERVER_S_DN_UID
                       SSL_CLIENT_S_DN_Email  SSL_SERVER_S_DN_Email
                       SSL_CLIENT_I_DN        SSL_SERVER_I_DN
                       SSL_CLIENT_I_DN_C      SSL_SERVER_I_DN_C
                       SSL_CLIENT_I_DN_ST     SSL_SERVER_I_DN_ST
                       SSL_CLIENT_I_DN_L      SSL_SERVER_I_DN_L
                       SSL_CLIENT_I_DN_O      SSL_SERVER_I_DN_O
                       SSL_CLIENT_I_DN_OU     SSL_SERVER_I_DN_OU
                       SSL_CLIENT_I_DN_CN     SSL_SERVER_I_DN_CN
                       SSL_CLIENT_I_DN_T      SSL_SERVER_I_DN_T
                       SSL_CLIENT_I_DN_I      SSL_SERVER_I_DN_I
                       SSL_CLIENT_I_DN_G      SSL_SERVER_I_DN_G
                       SSL_CLIENT_I_DN_S      SSL_SERVER_I_DN_S
                       SSL_CLIENT_I_DN_D      SSL_SERVER_I_DN_D
                       SSL_CLIENT_I_DN_UID    SSL_SERVER_I_DN_UID
                       SSL_CLIENT_I_DN_Email  SSL_SERVER_I_DN_Email
                       SSL_CLIENT_A_SIG       SSL_SERVER_A_SIG
                       SSL_CLIENT_A_KEY       SSL_SERVER_A_KEY
                       SSL_CLIENT_CERT        SSL_SERVER_CERT
                       SSL_CLIENT_CERT_CHAIN_n
                       SSL_CLIENT_VERIFY      SSL_TLS_SNI
```

[![top](../images/up.gif)](#page-header)

## SSLRequireSSL Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Deny access when SSL is not used for the HTTP request |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLRequireSSL` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive forbids access unless HTTP over SSL (i.e. HTTPS) is enabled for
the current connection. This is very handy inside the SSL-enabled virtual
host or directories for defending against configuration errors that expose
stuff that should be protected. When this directive is present all requests
are denied which are not using SSL.

### Example

`SSLRequireSSL`

[![top](../images/up.gif)](#page-header)

## SSLSessionCache Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Type of the global/inter-process SSL Session Cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLSessionCache type` |
| [Default:](mod__directive-dict.md#Default) | `SSLSessionCache none` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This configures the storage type of the global/inter-process SSL Session
Cache. This cache is an optional facility which speeds up parallel request
processing. For requests to the same server process (via HTTP keep-alive),
OpenSSL already caches the SSL session information locally. But because modern
clients request inlined images and other data via parallel requests (usually
up to four parallel requests are common) those requests are served by
*different* pre-forked server processes. Here an inter-process cache
helps to avoid unnecessary session handshakes.

The following four storage *type*s are currently supported:

- `none`

  This disables the global/inter-process Session Cache. This
  will incur a noticeable speed penalty and may cause problems if
  using certain browsers, particularly if client certificates are
  enabled. This setting is not recommended.
- `nonenotnull`

  This disables any global/inter-process Session Cache. However
  it does force OpenSSL to send a non-null session ID to
  accommodate buggy clients that require one.
- `dbm:/path/to/datafile`

  This makes use of a DBM hashfile on the local disk to
  synchronize the local OpenSSL memory caches of the server
  processes. This session cache may suffer reliability issues under
  high load.
- `shm:/path/to/datafile`[`(`*size*`)`]

  This makes use of a high-performance cyclic buffer
  (approx. *size* bytes in size) inside a shared memory
  segment in RAM (established via `/path/to/datafile`) to
  synchronize the local OpenSSL memory caches of the server
  processes. This is the recommended session cache.
- `dc:UNIX:/path/to/socket`

  This makes use of the [distcache](http://www.distcache.org/) distributed session
  caching libraries. The argument should specify the location of
  the server or proxy to be used using the distcache address syntax;
  for example, `UNIX:/path/to/socket` specifies a UNIX
  domain socket (typically a local dc\_client proxy);
  `IP:server.example.com:9001` specifies an IP
  address.

### Examples

`SSLSessionCache dbm:/usr/local/apache/logs/ssl_gcache_data  
SSLSessionCache shm:/usr/local/apache/logs/ssl_gcache_data(512000)`

[![top](../images/up.gif)](#page-header)

## SSLSessionCacheTimeout Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Number of seconds before an SSL session expires in the Session Cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLSessionCacheTimeout seconds` |
| [Default:](mod__directive-dict.md#Default) | `SSLSessionCacheTimeout 300` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Applies also to RFC 5077 TLS session resumption in Apache 2.2.28 and later |

This directive sets the timeout in seconds for the information stored in the
global/inter-process SSL Session Cache, the OpenSSL internal memory cache and
for sessions resumed by TLS session resumption (RFC 5077).
It can be set as low as 15 for testing, but should be set to higher
values like 300 in real life.

### Example

`SSLSessionCacheTimeout 600`

[![top](../images/up.gif)](#page-header)

## SSLSessionTicketKeyFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Persistent encryption/decryption key for TLS session tickets |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLSessionTicketKeyFile file-path` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.2.30 and later, if using OpenSSL 0.9.8h or later |

Optionally configures a secret key for encrypting and decrypting
TLS session tickets, as defined in
[RFC 5077](http://www.ietf.org/rfc/rfc5077.txt).
Primarily suitable for clustered environments where TLS sessions information
should be shared between multiple nodes. For single-instance httpd setups,
it is recommended to *not* configure a ticket key file, but to
rely on (random) keys generated by mod\_ssl at startup, instead.

The ticket key file must contain 48 bytes of random data,
preferrably created from a high-entropy source. On a Unix-based system,
a ticket key file can be created as follows:

`dd if=/dev/random of=/path/to/file.tkey bs=1 count=48`

Ticket keys should be rotated (replaced) on a frequent basis,
as this is the only way to invalidate an existing session ticket -
OpenSSL currently doesn't allow to specify a limit for ticket lifetimes.
A new ticket key only gets used after restarting the web server.
All existing session tickets become invalid after a restart.

The ticket key file contains sensitive keying material and should
be protected with file permissions similar to those used for
`SSLCertificateKeyFile`.

[![top](../images/up.gif)](#page-header)

## SSLSessionTickets Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable or disable use of TLS session tickets |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLSessionTickets on|off` |
| [Default:](mod__directive-dict.md#Default) | `SSLSessionTickets on` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.2.30 and later, if using OpenSSL 0.9.8f or later. |

This directive allows to enable or disable the use of TLS session tickets
(RFC 5077).

TLS session tickets are enabled by default. Using them without restarting
the web server with an appropriate frequency (e.g. daily) compromises perfect
forward secrecy.

[![top](../images/up.gif)](#page-header)

## SSLStrictSNIVHostCheck Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Whether to allow non SNI clients to access a name based virtual host. |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLStrictSNIVHostCheck on|off` |
| [Default:](mod__directive-dict.md#Default) | `SSLStrictSNIVHostCheck off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.2.12 and later |

This directive sets whether a non SNI client is allowed to access a name based
virtual host. If set to `on` in the non default name based virtual
host, non SNI clients are not allowed to access this particular virtual host.
If set to `on` in the default name based virtual host, non SNI
clients are not allowed to access any name based virtual host belonging to
this IP / port combination.

This option is only available if httpd was compiled against an SNI capable
version of OpenSSL.

### Example

`SSLStrictSNIVHostCheck on`

[![top](../images/up.gif)](#page-header)

## SSLUserName Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Variable name to determine user name |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLUserName varname` |
| [Context:](mod__directive-dict.md#Context) | server config, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.0.51 and later |

This directive sets the "user" field in the Apache request object.
This is used by lower modules to identify the user with a character
string. In particular, this may cause the environment variable
`REMOTE_USER` to be set. The *varname* can be
any of the [SSL environment variables](#envvars).

Note that this directive has no effect if the
`FakeBasicAuth` option is used (see [SSLOptions](#ssloptions)).

### Example

`SSLUserName SSL_CLIENT_S_DN_CN`

[![top](../images/up.gif)](#page-header)

## SSLVerifyClient Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Type of Client Certificate verification |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLVerifyClient level` |
| [Default:](mod__directive-dict.md#Default) | `SSLVerifyClient none` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets the Certificate verification level for the Client
Authentication. Notice that this directive can be used both in per-server and
per-directory context. In per-server context it applies to the client
authentication process used in the standard SSL handshake when a connection is
established. In per-directory context it forces a SSL renegotiation with the
reconfigured client verification level after the HTTP request was read but
before the HTTP response is sent.

The following levels are available for *level*:

- **none**:
  no client Certificate is required at all
- **optional**:
  the client *may* present a valid Certificate
- **require**:
  the client *has to* present a valid Certificate
- **optional\_no\_ca**:
  the client may present a valid Certificate  
  but it need not to be (successfully) verifiable.

In practice only levels **none** and
**require** are really interesting, because level
**optional** doesn't work with all browsers and level
**optional\_no\_ca** is actually against the idea of
authentication (but can be used to establish SSL test pages, etc.)

### Example

`SSLVerifyClient require`

[![top](../images/up.gif)](#page-header)

## SSLVerifyDepth Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum depth of CA Certificates in Client Certificate verification |
| [Syntax:](mod__directive-dict.md#Syntax) | `SSLVerifyDepth number` |
| [Default:](mod__directive-dict.md#Default) | `SSLVerifyDepth 1` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ssl |

This directive sets how deeply mod\_ssl should verify before deciding that the
clients don't have a valid certificate. Notice that this directive can be
used both in per-server and per-directory context. In per-server context it
applies to the client authentication process used in the standard SSL
handshake when a connection is established. In per-directory context it forces
a SSL renegotiation with the reconfigured client verification depth after the
HTTP request was read but before the HTTP response is sent.

The depth actually is the maximum number of intermediate certificate issuers,
i.e. the number of CA certificates which are max allowed to be followed while
verifying the client certificate. A depth of 0 means that self-signed client
certificates are accepted only, the default depth of 1 means the client
certificate can be self-signed or has to be signed by a CA which is directly
known to the server (i.e. the CA's certificate is under
`SSLCACertificatePath`), etc.

### Example

`SSLVerifyDepth 10`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_ssl.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
