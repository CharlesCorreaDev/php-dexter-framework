# SSL/TLS Strong Encryption: Compatibility - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/ssl/ssl_compat.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](ssl.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [SSL/TLS](ssl.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/ssl/ssl_compat.html) to go to the current version of this document.

# SSL/TLS Strong Encryption: Compatibility

This page covers backwards compatibility between mod\_ssl and other
SSL solutions. mod\_ssl is not the only SSL solution for Apache; four
additional products are (or were) also available: Ben Laurie's freely
available [Apache-SSL](http://www.apache-ssl.org/) (from
where mod\_ssl were originally derived in 1998), Red Hat's commercial
Secure Web Server (which was based on mod\_ssl), Covalent's commercial
Raven SSL Module (also based on
mod\_ssl) and finally C2Net's (now Red Hat's) commercial product [Stronghold](http://www.redhat.com/explore/stronghold/) (based
on a different evolution branch named Sioux up to Stronghold 2.x and
based on mod\_ssl since Stronghold 3.x).

mod\_ssl mostly provides a superset of the functionality of all the other
solutions, so it's simple to migrate from one of the older modules to
mod\_ssl. The configuration directives and environment variable names
used by the older SSL solutions vary from those used in mod\_ssl;
mapping tables are included here to give the equivalents used by mod\_ssl.

- ![](../images/down.gif) [Configuration Directives](#configuration)
- ![](../images/down.gif) [Environment Variables](#variables)
- ![](../images/down.gif) [Custom Log Functions](#customlog)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Configuration Directives

The mapping between configuration directives used by Apache-SSL
1.x and mod\_ssl 2.0.x is given in [Table
1](#table1). The mapping from Sioux 1.x and Stronghold 2.x is only partial
because of special functionality in these interfaces which mod\_ssl
doesn't provide.

### Table 1: Configuration Directive Mapping

| Old Directive | mod\_ssl Directive | Comment |
| --- | --- | --- |
| Apache-SSL 1.x & mod\_ssl 2.0.x compatibility: | | |
| `SSLEnable` | `SSLEngine on` | compactified |
| `SSLDisable` | `SSLEngine off` | compactified |
| `SSLLogFile` *file* | `-` | Use per-module `LogLevel` setting instead. |
| `SSLRequiredCiphers` *spec* | `SSLCipherSuite` *spec* | renamed |
| `SSLRequireCipher` *c1* ... | `SSLRequire %{SSL_CIPHER} in {"`*c1*`", ...}` | generalized |
| `SSLBanCipher` *c1* ... | `SSLRequire not (%{SSL_CIPHER} in {"`*c1*`", ...})` | generalized |
| `SSLFakeBasicAuth` | `SSLOptions +FakeBasicAuth` | merged |
| `SSLCacheServerPath` *dir* | - | functionality removed |
| `SSLCacheServerPort` *integer* | - | functionality removed |
| Apache-SSL 1.x compatibility: | | |
| `SSLExportClientCertificates` | `SSLOptions +ExportCertData` | merged |
| `SSLCacheServerRunDir` *dir* | - | functionality not supported |
| Sioux 1.x compatibility: | | |
| `SSL_CertFile` *file* | `SSLCertificateFile` *file* | renamed |
| `SSL_KeyFile` *file* | `SSLCertificateKeyFile` *file* | renamed |
| `SSL_CipherSuite` *arg* | `SSLCipherSuite` *arg* | renamed |
| `SSL_X509VerifyDir` *arg* | `SSLCACertificatePath` *arg* | renamed |
| `SSL_Log` *file* | `-` | Use per-module `LogLevel` setting instead. |
| `SSL_Connect` *flag* | `SSLEngine` *flag* | renamed |
| `SSL_ClientAuth` *arg* | `SSLVerifyClient` *arg* | renamed |
| `SSL_X509VerifyDepth` *arg* | `SSLVerifyDepth` *arg* | renamed |
| `SSL_FetchKeyPhraseFrom` *arg* | - | not directly mappable; use SSLPassPhraseDialog |
| `SSL_SessionDir` *dir* | - | not directly mappable; use SSLSessionCache |
| `SSL_Require` *expr* | - | not directly mappable; use SSLRequire |
| `SSL_CertFileType` *arg* | - | functionality not supported |
| `SSL_KeyFileType` *arg* | - | functionality not supported |
| `SSL_X509VerifyPolicy` *arg* | - | functionality not supported |
| `SSL_LogX509Attributes` *arg* | - | functionality not supported |
| Stronghold 2.x compatibility: | | |
| `StrongholdAccelerator` *engine* | `SSLCryptoDevice` *engine* | renamed |
| `StrongholdKey` *dir* | - | functionality not needed |
| `StrongholdLicenseFile` *dir* | - | functionality not needed |
| `SSLFlag` *flag* | `SSLEngine` *flag* | renamed |
| `SSLSessionLockFile` *file* | `SSLMutex` *file* | renamed |
| `SSLCipherList` *spec* | `SSLCipherSuite` *spec* | renamed |
| `RequireSSL` | `SSLRequireSSL` | renamed |
| `SSLErrorFile` *file* | - | functionality not supported |
| `SSLRoot` *dir* | - | functionality not supported |
| `SSL_CertificateLogDir` *dir* | - | functionality not supported |
| `AuthCertDir` *dir* | - | functionality not supported |
| `SSL_Group` *name* | - | functionality not supported |
| `SSLProxyMachineCertPath` *dir* | `SSLProxyMachineCertificatePath` *dir* | renamed |
| `SSLProxyMachineCertFile` *file* | `SSLProxyMachineCertificateFile` *file* | renamed |
| `SSLProxyCipherList` *spec* | `SSLProxyCipherSpec` *spec* | renamed |

[![top](../images/up.gif)](#page-header)

## Environment Variables

The mapping between environment variable names used by the older
SSL solutions and the names used by mod\_ssl is given in [Table 2](#table2).

### Table 2: Environment Variable Derivation

| Old Variable | mod\_ssl Variable | Comment |
| --- | --- | --- |
| `SSL_PROTOCOL_VERSION` | `SSL_PROTOCOL` | renamed |
| `SSLEAY_VERSION` | `SSL_VERSION_LIBRARY` | renamed |
| `HTTPS_SECRETKEYSIZE` | `SSL_CIPHER_USEKEYSIZE` | renamed |
| `HTTPS_KEYSIZE` | `SSL_CIPHER_ALGKEYSIZE` | renamed |
| `HTTPS_CIPHER` | `SSL_CIPHER` | renamed |
| `HTTPS_EXPORT` | `SSL_CIPHER_EXPORT` | renamed |
| `SSL_SERVER_KEY_SIZE` | `SSL_CIPHER_ALGKEYSIZE` | renamed |
| `SSL_SERVER_CERTIFICATE` | `SSL_SERVER_CERT` | renamed |
| `SSL_SERVER_CERT_START` | `SSL_SERVER_V_START` | renamed |
| `SSL_SERVER_CERT_END` | `SSL_SERVER_V_END` | renamed |
| `SSL_SERVER_CERT_SERIAL` | `SSL_SERVER_M_SERIAL` | renamed |
| `SSL_SERVER_SIGNATURE_ALGORITHM` | `SSL_SERVER_A_SIG` | renamed |
| `SSL_SERVER_DN` | `SSL_SERVER_S_DN` | renamed |
| `SSL_SERVER_CN` | `SSL_SERVER_S_DN_CN` | renamed |
| `SSL_SERVER_EMAIL` | `SSL_SERVER_S_DN_Email` | renamed |
| `SSL_SERVER_O` | `SSL_SERVER_S_DN_O` | renamed |
| `SSL_SERVER_OU` | `SSL_SERVER_S_DN_OU` | renamed |
| `SSL_SERVER_C` | `SSL_SERVER_S_DN_C` | renamed |
| `SSL_SERVER_SP` | `SSL_SERVER_S_DN_SP` | renamed |
| `SSL_SERVER_L` | `SSL_SERVER_S_DN_L` | renamed |
| `SSL_SERVER_IDN` | `SSL_SERVER_I_DN` | renamed |
| `SSL_SERVER_ICN` | `SSL_SERVER_I_DN_CN` | renamed |
| `SSL_SERVER_IEMAIL` | `SSL_SERVER_I_DN_Email` | renamed |
| `SSL_SERVER_IO` | `SSL_SERVER_I_DN_O` | renamed |
| `SSL_SERVER_IOU` | `SSL_SERVER_I_DN_OU` | renamed |
| `SSL_SERVER_IC` | `SSL_SERVER_I_DN_C` | renamed |
| `SSL_SERVER_ISP` | `SSL_SERVER_I_DN_SP` | renamed |
| `SSL_SERVER_IL` | `SSL_SERVER_I_DN_L` | renamed |
| `SSL_CLIENT_CERTIFICATE` | `SSL_CLIENT_CERT` | renamed |
| `SSL_CLIENT_CERT_START` | `SSL_CLIENT_V_START` | renamed |
| `SSL_CLIENT_CERT_END` | `SSL_CLIENT_V_END` | renamed |
| `SSL_CLIENT_CERT_SERIAL` | `SSL_CLIENT_M_SERIAL` | renamed |
| `SSL_CLIENT_SIGNATURE_ALGORITHM` | `SSL_CLIENT_A_SIG` | renamed |
| `SSL_CLIENT_DN` | `SSL_CLIENT_S_DN` | renamed |
| `SSL_CLIENT_CN` | `SSL_CLIENT_S_DN_CN` | renamed |
| `SSL_CLIENT_EMAIL` | `SSL_CLIENT_S_DN_Email` | renamed |
| `SSL_CLIENT_O` | `SSL_CLIENT_S_DN_O` | renamed |
| `SSL_CLIENT_OU` | `SSL_CLIENT_S_DN_OU` | renamed |
| `SSL_CLIENT_C` | `SSL_CLIENT_S_DN_C` | renamed |
| `SSL_CLIENT_SP` | `SSL_CLIENT_S_DN_SP` | renamed |
| `SSL_CLIENT_L` | `SSL_CLIENT_S_DN_L` | renamed |
| `SSL_CLIENT_IDN` | `SSL_CLIENT_I_DN` | renamed |
| `SSL_CLIENT_ICN` | `SSL_CLIENT_I_DN_CN` | renamed |
| `SSL_CLIENT_IEMAIL` | `SSL_CLIENT_I_DN_Email` | renamed |
| `SSL_CLIENT_IO` | `SSL_CLIENT_I_DN_O` | renamed |
| `SSL_CLIENT_IOU` | `SSL_CLIENT_I_DN_OU` | renamed |
| `SSL_CLIENT_IC` | `SSL_CLIENT_I_DN_C` | renamed |
| `SSL_CLIENT_ISP` | `SSL_CLIENT_I_DN_SP` | renamed |
| `SSL_CLIENT_IL` | `SSL_CLIENT_I_DN_L` | renamed |
| `SSL_EXPORT` | `SSL_CIPHER_EXPORT` | renamed |
| `SSL_KEYSIZE` | `SSL_CIPHER_ALGKEYSIZE` | renamed |
| `SSL_SECKEYSIZE` | `SSL_CIPHER_USEKEYSIZE` | renamed |
| `SSL_SSLEAY_VERSION` | `SSL_VERSION_LIBRARY` | renamed |
| `SSL_STRONG_CRYPTO` | `-` | Not supported by mod\_ssl |
| `SSL_SERVER_KEY_EXP` | `-` | Not supported by mod\_ssl |
| `SSL_SERVER_KEY_ALGORITHM` | `-` | Not supported by mod\_ssl |
| `SSL_SERVER_KEY_SIZE` | `-` | Not supported by mod\_ssl |
| `SSL_SERVER_SESSIONDIR` | `-` | Not supported by mod\_ssl |
| `SSL_SERVER_CERTIFICATELOGDIR` | `-` | Not supported by mod\_ssl |
| `SSL_SERVER_CERTFILE` | `-` | Not supported by mod\_ssl |
| `SSL_SERVER_KEYFILE` | `-` | Not supported by mod\_ssl |
| `SSL_SERVER_KEYFILETYPE` | `-` | Not supported by mod\_ssl |
| `SSL_CLIENT_KEY_EXP` | `-` | Not supported by mod\_ssl |
| `SSL_CLIENT_KEY_ALGORITHM` | `-` | Not supported by mod\_ssl |
| `SSL_CLIENT_KEY_SIZE` | `-` | Not supported by mod\_ssl |

[![top](../images/up.gif)](#page-header)

## Custom Log Functions

When mod\_ssl is enabled, additional functions exist for the [Custom Log Format](mod__mod_log_config.md#formats) of
`mod_log_config` as documented in the Reference
Chapter. Beside the ```%{`*varname*`}x`''
eXtension format function which can be used to expand any variables provided
by any module, an additional Cryptography
```%{`*name*`}c`'' cryptography format function
exists for backward compatibility. The currently implemented function calls
are listed in [Table 3](#table3).

### Table 3: Custom Log Cryptography Function

| Function Call | Description |
| --- | --- |
| `%...{version}c` | SSL protocol version |
| `%...{cipher}c` | SSL cipher |
| `%...{subjectdn}c` | Client Certificate Subject Distinguished Name |
| `%...{issuerdn}c` | Client Certificate Issuer Distinguished Name |
| `%...{errcode}c` | Certificate Verification Error (numerical) |
| `%...{errstr}c` | Certificate Verification Error (string) |

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/ssl/ssl_compat.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
