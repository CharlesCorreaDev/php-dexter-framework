# SSL/TLS Strong Encryption: How-To - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/ssl/ssl_howto.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](ssl.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [SSL/TLS](ssl.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/ssl/ssl_howto.html) to go to the current version of this document.

# SSL/TLS Strong Encryption: How-To

> The solution to this problem is trivial
> and is left as an exercise for the reader.
>
> -- Standard textbook cookie

How to solve particular security problems for an SSL-aware
webserver is not always obvious because of the interactions between SSL,
HTTP and Apache's way of processing requests. This chapter gives
instructions on how to solve some typical situations. Treat it as a first
step to find out the final solution, but always try to understand the
stuff before you use it. Nothing is worse than using a security solution
without knowing its restrictions and how it interacts with other systems.

- ![](../images/down.gif) [Cipher Suites and Enforcing Strong Security](#ciphersuites)
- ![](../images/down.gif) [Client Authentication and Access Control](#accesscontrol)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Cipher Suites and Enforcing Strong Security

- [How can I create a real SSLv2-only server?](#realssl)
- [How can I create an SSL server which accepts strong encryption only?](#onlystrong)
- [How can I create an SSL server which accepts strong encryption only, but allows
  export browsers to upgrade to stronger encryption?](#upgradeenc)
- [How can I create an SSL server which accepts all types of ciphers in general, but
  requires a strong cipher for access to a particular URL?](#strongurl)

### How can I create a real SSLv2-only server?

The following creates an SSL server which speaks only the SSLv2 protocol and
its ciphers.

### httpd.conf

`SSLProtocol -all +SSLv2  
SSLCipherSuite SSLv2:+HIGH:+MEDIUM:+LOW:+EXP`

### How can I create an SSL server which accepts strong encryption only?

The following enables only the seven strongest ciphers:

### httpd.conf

`SSLProtocol all  
SSLCipherSuite HIGH:MEDIUM`

### How can I create an SSL server which accepts strong encryption only, but allows export browsers to upgrade to stronger encryption?

This facility is called Server Gated Cryptography (SGC) and requires
a Global ID server certificate, signed by a special CA certificate
from Verisign. This enables strong encryption in 'export' versions of
browsers, which traditionally could not support it (because of US export
restrictions).

When a browser connects with an export cipher, the server sends its Global
ID certificate. The browser verifies this, and can then upgrade its
cipher suite before any HTTP communication takes place. The problem
lies in allowing browsers to upgrade in this fashion, but still requiring
strong encryption. In other words, we want browsers to either start a
connection with strong encryption, or to start with export ciphers but
upgrade to strong encryption before beginning HTTP communication.

This can be done as follows:

### httpd.conf

`# allow all ciphers for the initial handshake,  
# so export browsers can upgrade via SGC facility  
SSLCipherSuite ALL:!ADH:RC4+RSA:+HIGH:+MEDIUM:+LOW:+SSLv2:+EXP:+eNULL  
  
<Directory /usr/local/apache2/htdocs>  
# but finally deny all browsers which haven't upgraded  
SSLRequire %{SSL_CIPHER_USEKEYSIZE} >= 128  
</Directory>`

### How can I create an SSL server which accepts all types of ciphers in general, but requires a strong ciphers for access to a particular URL?

Obviously, a server-wide `SSLCipherSuite` which restricts
ciphers to the strong variants, isn't the answer here. However,
`mod_ssl` can be reconfigured within `Location`
blocks, to give a per-directory solution, and can automatically force
a renegotiation of the SSL parameters to meet the new configuration.
This can be done as follows:

`# be liberal in general  
SSLCipherSuite ALL:!ADH:RC4+RSA:+HIGH:+MEDIUM:+LOW:+SSLv2:+EXP:+eNULL  
  
<Location /strong/area>  
# but https://hostname/strong/area/ and below  
# requires strong ciphers  
SSLCipherSuite HIGH:MEDIUM  
</Location>`

[![top](../images/up.gif)](#page-header)

## Client Authentication and Access Control

- [How can I force clients to authenticate using certificates?](#allclients)
- [How can I force clients to authenticate using certificates for a
  particular URL, but still allow arbitrary clients to access the rest of the server?](#arbitraryclients)
- [How can I allow only clients who have certificates to access a
  particular URL, but allow all clients to access the rest of the server?](#certauthenticate)
- [How can I require HTTPS with strong ciphers, and either
  basic authentication or client certificates, for access to part of the
  Intranet website, for clients coming from the Internet?](#intranet)

### How can I force clients to authenticate using certificates?

When you know all of your users (eg, as is often the case on a corporate
Intranet), you can require plain certificate authentication. All you
need to do is to create client certificates signed by your own CA
certificate (`ca.crt`) and then verify the clients against this
certificate.

### httpd.conf

`# require a client certificate which has to be directly  
# signed by our CA certificate in ca.crt  
SSLVerifyClient require  
SSLVerifyDepth 1  
SSLCACertificateFile conf/ssl.crt/ca.crt`

### How can I force clients to authenticate using certificates for a particular URL, but still allow arbitrary clients to access the rest of the server?

To force clients to authenticate using certificates for a particular URL,
you can use the per-directory reconfiguration features of `mod_ssl`:

### httpd.conf

`SSLVerifyClient none  
SSLCACertificateFile conf/ssl.crt/ca.crt  
  
<Location /secure/area>  
SSLVerifyClient require  
SSLVerifyDepth 1  
</Location>`

### How can I allow only clients who have certificates to access a particular URL, but allow all clients to access the rest of the server?

The key to doing this is checking that part of the client certificate
matches what you expect. Usually this means checking all or part of the
Distinguished Name (DN), to see if it contains some known string.
There are two ways to do this, using either `mod_auth_basic` or
`SSLRequire`.

The `mod_auth_basic` method is generally required when
the certificates are completely arbitrary, or when their DNs have
no common fields (usually the organisation, etc.). In this case,
you should establish a password database containing *all*
clients allowed, as follows:

### httpd.conf

```
SSLCACertificateFile conf/ssl.crt/ca.crt
SSLCACertificatePath conf/ssl.crt
SSLVerifyClient      none

<Directory /usr/local/apache2/htdocs/secure/area>
SSLVerifyClient      require
SSLVerifyDepth       5
SSLOptions           +FakeBasicAuth
SSLRequireSSL
AuthName             "Snake Oil Authentication"
AuthType             Basic
AuthBasicProvider    file
AuthUserFile         /usr/local/apache2/conf/httpd.passwd
Require              valid-user
</Directory>
```

The password used in this example is the DES encrypted string "password".
See the `SSLOptions` docs for more
information.

### httpd.passwd

```
/C=DE/L=Munich/O=Snake Oil, Ltd./OU=Staff/CN=Foo:xxj31ZMTZzkVA
/C=US/L=S.F./O=Snake Oil, Ltd./OU=CA/CN=Bar:xxj31ZMTZzkVA
/C=US/L=L.A./O=Snake Oil, Ltd./OU=Dev/CN=Quux:xxj31ZMTZzkVA
```

When your clients are all part of a common hierarchy, which is encoded
into the DN, you can match them more easily using `SSLRequire`, as follows:

### httpd.conf

```
SSLVerifyClient      none
SSLCACertificateFile conf/ssl.crt/ca.crt
SSLCACertificatePath conf/ssl.crt

<Directory /usr/local/apache2/htdocs/secure/area>
  SSLVerifyClient      require
  SSLVerifyDepth       5
  SSLOptions           +FakeBasicAuth
  SSLRequireSSL
  SSLRequire       %{SSL_CLIENT_S_DN_O}  eq "Snake Oil, Ltd." \
               and %{SSL_CLIENT_S_DN_OU} in {"Staff", "CA", "Dev"}
</Directory>
```

### How can I require HTTPS with strong ciphers, and either basic authentication or client certificates, for access to part of the Intranet website, for clients coming from the Internet? I still want to allow plain HTTP access for clients on the Intranet.

These examples presume that clients on the Intranet have IPs in the range
192.168.1.0/24, and that the part of the Intranet website you want to allow
internet access to is `/usr/local/apache2/htdocs/subarea`.
This configuration should remain outside of your HTTPS virtual host, so
that it applies to both HTTPS and HTTP.

### httpd.conf

```
SSLCACertificateFile conf/ssl.crt/company-ca.crt

<Directory /usr/local/apache2/htdocs>
#   Outside the subarea only Intranet access is granted
Order                deny,allow
Deny                 from all
Allow                from 192.168.1.0/24
</Directory>

<Directory /usr/local/apache2/htdocs/subarea>
#   Inside the subarea any Intranet access is allowed
#   but from the Internet only HTTPS + Strong-Cipher + Password
#   or the alternative HTTPS + Strong-Cipher + Client-Certificate

#   If HTTPS is used, make sure a strong cipher is used.
#   Additionally allow client certs as alternative to basic auth.
SSLVerifyClient      optional
SSLVerifyDepth       1
SSLOptions           +FakeBasicAuth +StrictRequire
SSLRequire           %{SSL_CIPHER_USEKEYSIZE} >= 128

#   Force clients from the Internet to use HTTPS
RewriteEngine        on
RewriteCond          %{REMOTE_ADDR} !^192\.168\.1\.[0-9]+$
RewriteCond          %{HTTPS} !=on
RewriteRule          .* - [F]

#   Allow Network Access and/or Basic Auth
Satisfy              any

#   Network Access Control
Order                deny,allow
Deny                 from all
Allow                192.168.1.0/24

#   HTTP Basic Authentication
AuthType             basic
AuthName             "Protected Intranet Area"
AuthBasicProvider    file
AuthUserFile         conf/protected.passwd
Require              valid-user
</Directory>
```

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/ssl/ssl_howto.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
