# mod_ldap - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_ldap.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_ldap.html) to go to the current version of this document.

# Apache Module mod\_ldap

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | LDAP connection pooling and result caching services for use by other LDAP modules |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | ldap\_module |
| [Source File:](mod__module-dict.md#SourceFile) | util\_ldap.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.0.41 and later |

### Summary

This module was created to improve the performance of
websites relying on backend connections to LDAP servers. In
addition to the functions provided by the standard LDAP
libraries, this module adds an LDAP connection pool and an LDAP
shared memory cache.

To enable this module, LDAP support must be compiled into
apr-util. This is achieved by adding the `--with-ldap`
flag to the `configure` script when building
Apache.

SSL/TLS support is dependent on which LDAP toolkit has been
linked to [APR](glossary.md#apr "see glossary"). As of this writing, APR-util supports:
[OpenLDAP SDK](http://www.openldap.org/) (2.x or later),
[Novell LDAP
SDK](http://developer.novell.com/ndk/cldap.htm), [Mozilla LDAP SDK](http://www.mozilla.org/directory/csdk.html), native Solaris LDAP SDK (Mozilla based),
native Microsoft LDAP SDK, or the
[iPlanet
(Netscape)](http://www.iplanet.com/downloads/developer/) SDK. See the [APR](http://apr.apache.org)
website for details.

### Topics

- ![](../images/down.gif) [Example Configuration](#exampleconfig)
- ![](../images/down.gif) [LDAP Connection Pool](#pool)
- ![](../images/down.gif) [LDAP Cache](#cache)
- ![](../images/down.gif) [Using SSL/TLS](#usingssltls)
- ![](../images/down.gif) [SSL/TLS Certificates](#settingcerts)

### Directives

- ![](../images/down.gif) [LDAPCacheEntries](#ldapcacheentries)
- ![](../images/down.gif) [LDAPCacheTTL](#ldapcachettl)
- ![](../images/down.gif) [LDAPConnectionTimeout](#ldapconnectiontimeout)
- ![](../images/down.gif) [LDAPOpCacheEntries](#ldapopcacheentries)
- ![](../images/down.gif) [LDAPOpCacheTTL](#ldapopcachettl)
- ![](../images/down.gif) [LDAPSharedCacheFile](#ldapsharedcachefile)
- ![](../images/down.gif) [LDAPSharedCacheSize](#ldapsharedcachesize)
- ![](../images/down.gif) [LDAPTrustedClientCert](#ldaptrustedclientcert)
- ![](../images/down.gif) [LDAPTrustedGlobalCert](#ldaptrustedglobalcert)
- ![](../images/down.gif) [LDAPTrustedMode](#ldaptrustedmode)
- ![](../images/down.gif) [LDAPVerifyServerCert](#ldapverifyservercert)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Example Configuration

The following is an example configuration that uses
`mod_ldap` to increase the performance of HTTP Basic
authentication provided by `mod_authnz_ldap`.

`# Enable the LDAP connection pool and shared  
# memory cache. Enable the LDAP cache status  
# handler. Requires that mod_ldap and mod_authnz_ldap  
# be loaded. Change the "yourdomain.example.com" to  
# match your domain.  
  
LDAPSharedCacheSize 500000  
LDAPCacheEntries 1024  
LDAPCacheTTL 600  
LDAPOpCacheEntries 1024  
LDAPOpCacheTTL 600  
  
<Location /ldap-status>  

SetHandler ldap-status  
Order deny,allow  
Deny from all  
Allow from yourdomain.example.com  
AuthLDAPURL ldap://127.0.0.1/dc=example,dc=com?uid?one  
AuthzLDAPAuthoritative off  
Require valid-user  
</Location>`

[![top](../images/up.gif)](#page-header)

## LDAP Connection Pool

LDAP connections are pooled from request to request. This
allows the LDAP server to remain connected and bound ready for
the next request, without the need to unbind/connect/rebind.
The performance advantages are similar to the effect of HTTP
keepalives.

On a busy server it is possible that many requests will try
and access the same LDAP server connection simultaneously.
Where an LDAP connection is in use, Apache will create a new
connection alongside the original one. This ensures that the
connection pool does not become a bottleneck.

There is no need to manually enable connection pooling in
the Apache configuration. Any module using this module for
access to LDAP services will share the connection pool.

[![top](../images/up.gif)](#page-header)

## LDAP Cache

For improved performance, `mod_ldap` uses an aggressive
caching strategy to minimize the number of times that the LDAP
server must be contacted. Caching can easily double or triple
the throughput of Apache when it is serving pages protected
with mod\_authnz\_ldap. In addition, the load on the LDAP server
will be significantly decreased.

`mod_ldap` supports two types of LDAP caching during
the search/bind phase with a *search/bind cache* and
during the compare phase with two *operation
caches*. Each LDAP URL that is used by the server has
its own set of these three caches.

### The Search/Bind Cache

The process of doing a search and then a bind is the
most time-consuming aspect of LDAP operation, especially if
the directory is large. The search/bind cache is used to
cache all searches that resulted in successful binds.
Negative results (*i.e.*, unsuccessful searches, or searches
that did not result in a successful bind) are not cached.
The rationale behind this decision is that connections with
invalid credentials are only a tiny percentage of the total
number of connections, so by not caching invalid
credentials, the size of the cache is reduced.

`mod_ldap` stores the username, the DN
retrieved, the password used to bind, and the time of the bind
in the cache. Whenever a new connection is initiated with the
same username, `mod_ldap` compares the password
of the new connection with the password in the cache. If the
passwords match, and if the cached entry is not too old,
`mod_ldap` bypasses the search/bind phase.

The search and bind cache is controlled with the `LDAPCacheEntries` and `LDAPCacheTTL` directives.

### Operation Caches

During attribute and distinguished name comparison
functions, `mod_ldap` uses two operation caches
to cache the compare operations. The first compare cache is
used to cache the results of compares done to test for LDAP
group membership. The second compare cache is used to cache
the results of comparisons done between distinguished
names.

The behavior of both of these caches is controlled with
the `LDAPOpCacheEntries`
and `LDAPOpCacheTTL`
directives.

### Monitoring the Cache

`mod_ldap` has a content handler that allows
administrators to monitor the cache performance. The name of
the content handler is `ldap-status`, so the
following directives could be used to access the
`mod_ldap` cache information:

`<Location /server/cache-info>  

SetHandler ldap-status  
</Location>`

By fetching the URL `http://servername/cache-info`,
the administrator can get a status report of every cache that is used
by `mod_ldap` cache. Note that if Apache does not
support shared memory, then each `httpd` instance has its
own cache, so reloading the URL will result in different
information each time, depending on which `httpd`
instance processes the request.

[![top](../images/up.gif)](#page-header)

## Using SSL/TLS

The ability to create an SSL and TLS connections to an LDAP server
is defined by the directives
`LDAPTrustedGlobalCert`,
`LDAPTrustedClientCert` and
`LDAPTrustedMode`.
These directives specify the CA and
optional client certificates to be used, as well as the type of
encryption to be used on the connection (none, SSL or TLS/STARTTLS).

`# Establish an SSL LDAP connection on port 636. Requires that   
# mod_ldap and mod_authnz_ldap be loaded. Change the   
# "yourdomain.example.com" to match your domain.  
  
LDAPTrustedGlobalCert CA_DER /certs/certfile.der  
  
<Location /ldap-status>  

SetHandler ldap-status  
Order deny,allow  
Deny from all  
Allow from yourdomain.example.com  
AuthLDAPURL ldaps://127.0.0.1/dc=example,dc=com?uid?one  
AuthzLDAPAuthoritative off  
Require valid-user  
</Location>`

`# Establish a TLS LDAP connection on port 389. Requires that   
# mod_ldap and mod_authnz_ldap be loaded. Change the   
# "yourdomain.example.com" to match your domain.  
  
LDAPTrustedGlobalCert CA_DER /certs/certfile.der  
  
<Location /ldap-status>  

SetHandler ldap-status  
Order deny,allow  
Deny from all  
Allow from yourdomain.example.com  
AuthLDAPURL ldap://127.0.0.1/dc=example,dc=com?uid?one TLS  
AuthzLDAPAuthoritative off  
Require valid-user  
</Location>`

[![top](../images/up.gif)](#page-header)

## SSL/TLS Certificates

The different LDAP SDKs have widely different methods of setting
and handling both CA and client side certificates.

If you intend to use SSL or TLS, read this section CAREFULLY so as to
understand the differences between configurations on the different LDAP
toolkits supported.

### Netscape/Mozilla/iPlanet SDK

CA certificates are specified within a file called cert7.db.
The SDK will not talk to any LDAP server whose certificate was
not signed by a CA specified in this file. If
client certificates are required, an optional key3.db file may
be specified with an optional password. The secmod file can be
specified if required. These files are in the same format as
used by the Netscape Communicator or Mozilla web browsers. The easiest
way to obtain these files is to grab them from your browser
installation.

Client certificates are specified per connection using the
LDAPTrustedClientCert directive by referring
to the certificate "nickname". An optional password may be
specified to unlock the certificate's private key.

The SDK supports SSL only. An attempt to use STARTTLS will cause
an error when an attempt is made to contact the LDAP server at
runtime.

`# Specify a Netscape CA certificate file  
LDAPTrustedGlobalCert CA_CERT7_DB /certs/cert7.db  
# Specify an optional key3.db file for client certificate support  
LDAPTrustedGlobalCert CERT_KEY3_DB /certs/key3.db  
# Specify the secmod file if required  
LDAPTrustedGlobalCert CA_SECMOD /certs/secmod  
<Location /ldap-status>  

SetHandler ldap-status  
Order deny,allow  
Deny from all  
Allow from yourdomain.example.com  
LDAPTrustedClientCert CERT_NICKNAME <nickname> [password]  
AuthLDAPURL ldaps://127.0.0.1/dc=example,dc=com?uid?one  
AuthzLDAPAuthoritative off  
Require valid-user  
</Location>`

### Novell SDK

One or more CA certificates must be specified for the Novell
SDK to work correctly. These certificates can be specified as
binary DER or Base64 (PEM) encoded files.

Note: Client certificates are specified globally rather than per
connection, and so must be specified with the LDAPTrustedGlobalCert
directive as below. Trying to set client certificates via the
LDAPTrustedClientCert directive will cause an error to be logged
when an attempt is made to connect to the LDAP server..

The SDK supports both SSL and STARTTLS, set using the
LDAPTrustedMode parameter. If an ldaps:// URL is specified,
SSL mode is forced, override this directive.

`# Specify two CA certificate files  
LDAPTrustedGlobalCert CA_DER /certs/cacert1.der  
LDAPTrustedGlobalCert CA_BASE64 /certs/cacert2.pem  
# Specify a client certificate file and key  
LDAPTrustedGlobalCert CERT_BASE64 /certs/cert1.pem  
LDAPTrustedGlobalCert KEY_BASE64 /certs/key1.pem [password]  
# Do not use this directive, as it will throw an error  
#LDAPTrustedClientCert CERT_BASE64 /certs/cert1.pem`

### OpenLDAP SDK

One or more CA certificates must be specified for the OpenLDAP
SDK to work correctly. These certificates can be specified as
binary DER or Base64 (PEM) encoded files.

Client certificates are specified per connection using the
LDAPTrustedClientCert directive.

The documentation for the SDK claims to support both SSL and
STARTTLS, however STARTTLS does not seem to work on all versions
of the SDK. The SSL/TLS mode can be set using the
LDAPTrustedMode parameter. If an ldaps:// URL is specified,
SSL mode is forced. The OpenLDAP documentation notes that SSL
(ldaps://) support has been deprecated to be replaced with TLS,
although the SSL functionality still works.

`# Specify two CA certificate files  
LDAPTrustedGlobalCert CA_DER /certs/cacert1.der  
LDAPTrustedGlobalCert CA_BASE64 /certs/cacert2.pem  
<Location /ldap-status>  

SetHandler ldap-status  
Order deny,allow  
Deny from all  
Allow from yourdomain.example.com  
LDAPTrustedClientCert CERT_BASE64 /certs/cert1.pem  
LDAPTrustedClientCert KEY_BASE64 /certs/key1.pem  
AuthLDAPURL ldaps://127.0.0.1/dc=example,dc=com?uid?one  
AuthzLDAPAuthoritative off  
Require valid-user  
</Location>`

### Solaris SDK

SSL/TLS for the native Solaris LDAP libraries is not yet
supported. If required, install and use the OpenLDAP libraries
instead.

### Microsoft SDK

SSL/TLS certificate configuration for the native Microsoft
LDAP libraries is done inside the system registry, and no
configuration directives are required.

Both SSL and TLS are supported by using the ldaps:// URL
format, or by using the LDAPTrustedMode directive accordingly.

Note: The status of support for client certificates is not yet known
for this toolkit.

[![top](../images/up.gif)](#page-header)

## LDAPCacheEntries Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximum number of entries in the primary LDAP cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPCacheEntries number` |
| [Default:](mod__directive-dict.md#Default) | `LDAPCacheEntries 1024` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

Specifies the maximum size of the primary LDAP cache. This
cache contains successful search/binds. Set it to 0 to turn off
search/bind caching. The default size is 1024 cached
searches.

[![top](../images/up.gif)](#page-header)

## LDAPCacheTTL Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Time that cached items remain valid |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPCacheTTL seconds` |
| [Default:](mod__directive-dict.md#Default) | `LDAPCacheTTL 600` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

Specifies the time (in seconds) that an item in the
search/bind cache remains valid. The default is 600 seconds (10
minutes).

[![top](../images/up.gif)](#page-header)

## LDAPConnectionTimeout Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specifies the socket connection timeout in seconds |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPConnectionTimeout seconds` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

This directive configures the LDAP\_OPT\_NETWORK\_TIMEOUT option in the
underlying LDAP client library, when available. This value typically
controls how long the LDAP client library will wait for the TCP connection
to the LDAP server to complete.

If a connection is not successful with the timeout period, either an error will be
returned or the LDAP client library will attempt to connect to a secondary LDAP
server if one is specified (via a space-separated list of hostnames in the
`AuthLDAPURL`).

The default is 10 seconds, if the LDAP client library linked with the
server supports the LDAP\_OPT\_NETWORK\_TIMEOUT option.

LDAPConnectionTimeout is only available when the LDAP client library linked
with the server supports the LDAP\_OPT\_NETWORK\_TIMEOUT option, and the
ultimate behavior is dictated entirely by the LDAP client library.

[![top](../images/up.gif)](#page-header)

## LDAPOpCacheEntries Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Number of entries used to cache LDAP compare operations |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPOpCacheEntries number` |
| [Default:](mod__directive-dict.md#Default) | `LDAPOpCacheEntries 1024` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

This specifies the number of entries `mod_ldap`
will use to cache LDAP compare operations. The default is 1024
entries. Setting it to 0 disables operation caching.

[![top](../images/up.gif)](#page-header)

## LDAPOpCacheTTL Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Time that entries in the operation cache remain valid |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPOpCacheTTL seconds` |
| [Default:](mod__directive-dict.md#Default) | `LDAPOpCacheTTL 600` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

Specifies the time (in seconds) that entries in the
operation cache remain valid. The default is 600 seconds.

[![top](../images/up.gif)](#page-header)

## LDAPSharedCacheFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the shared memory cache file |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPSharedCacheFile directory-path/filename` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

Specifies the directory path and file name of the shared memory
cache file. If not set, anonymous shared memory will be used if the
platform supports it.

[![top](../images/up.gif)](#page-header)

## LDAPSharedCacheSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Size in bytes of the shared-memory cache |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPSharedCacheSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `LDAPSharedCacheSize 500000` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

Specifies the number of bytes to allocate for the shared
memory cache. The default is 500kb. If set to 0, shared memory
caching will not be used.

[![top](../images/up.gif)](#page-header)

## LDAPTrustedClientCert Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the file containing or nickname referring to a per connection client certificate. Not all LDAP toolkits support per connection client certificates. |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPTrustedClientCert type directory-path/filename/nickname [password]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

It specifies the directory path, file name or nickname of a
per connection client certificate used when establishing an SSL
or TLS connection to an LDAP server. Different locations or
directories may have their own independent client certificate
settings. Some LDAP toolkits (notably Novell)
do not support per connection client certificates, and will throw an
error on LDAP server connection if you try to use this directive
(Use the LDAPTrustedGlobalCert directive instead for Novell client
certificates - See the SSL/TLS certificate guide above for details).
The type specifies the kind of certificate parameter being
set, depending on the LDAP toolkit being used. Supported types are:

- CERT\_DER - binary DER encoded client certificate
- CERT\_BASE64 - PEM encoded client certificate
- CERT\_NICKNAME - Client certificate "nickname" (Netscape SDK)
- KEY\_DER - binary DER encoded private key
- KEY\_BASE64 - PEM encoded private key

[![top](../images/up.gif)](#page-header)

## LDAPTrustedGlobalCert Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets the file or database containing global trusted Certificate Authority or global client certificates |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPTrustedGlobalCert type directory-path/filename [password]` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

It specifies the directory path and file name of the trusted CA
certificates and/or system wide client certificates `mod_ldap`
should use when establishing an SSL or TLS connection to an LDAP
server. Note that all certificate information specified using this directive
is applied globally to the entire server installation. Some LDAP toolkits
(notably Novell) require all client certificates to be set globally using
this directive. Most other toolkits require clients certificates to be set
per Directory or per Location using LDAPTrustedClientCert. If you get this
wrong, an error may be logged when an attempt is made to contact the LDAP
server, or the connection may silently fail (See the SSL/TLS certificate
guide above for details).
The type specifies the kind of certificate parameter being
set, depending on the LDAP toolkit being used. Supported types are:

- CA\_DER - binary DER encoded CA certificate
- CA\_BASE64 - PEM encoded CA certificate
- CA\_CERT7\_DB - Netscape cert7.db CA certificate database file
- CA\_SECMOD - Netscape secmod database file
- CERT\_DER - binary DER encoded client certificate
- CERT\_BASE64 - PEM encoded client certificate
- CERT\_KEY3\_DB - Netscape key3.db client certificate database file
- CERT\_NICKNAME - Client certificate "nickname" (Netscape SDK)
- CERT\_PFX - PKCS#12 encoded client certificate (Novell SDK)
- KEY\_DER - binary DER encoded private key
- KEY\_BASE64 - PEM encoded private key
- KEY\_PFX - PKCS#12 encoded private key (Novell SDK)

[![top](../images/up.gif)](#page-header)

## LDAPTrustedMode Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specifies the SSL/TLS mode to be used when connecting to an LDAP server. |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPTrustedMode type` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

The following modes are supported:

- NONE - no encryption
- SSL - ldaps:// encryption on default port 636
- TLS - STARTTLS encryption on default port 389

Not all LDAP toolkits support all the above modes. An error message
will be logged at runtime if a mode is not supported, and the
connection to the LDAP server will fail.

If an ldaps:// URL is specified, the mode becomes SSL and the setting
of LDAPTrustedMode is ignored.

[![top](../images/up.gif)](#page-header)

## LDAPVerifyServerCert Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Force server certificate verification |
| [Syntax:](mod__directive-dict.md#Syntax) | `LDAPVerifyServerCert On|Off` |
| [Default:](mod__directive-dict.md#Default) | `LDAPVerifyServerCert On` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_ldap |

Specifies whether to force the verification of a
server certificate when establishing an SSL connection to the
LDAP server.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_ldap.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
