# SSL/TLS Strong Encryption: FAQ - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/ssl/ssl_faq.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](ssl.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [SSL/TLS](ssl.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/ssl/ssl_faq.html) to go to the current version of this document.

# SSL/TLS Strong Encryption: FAQ

> The wise man doesn't give the right answers,
> he poses the right questions.
>
> -- Claude Levi-Strauss

This chapter is a collection of frequently asked questions (FAQ) and
corresponding answers following the popular USENET tradition. Most of these
questions occurred on the Newsgroup `comp.infosystems.www.servers.unix` or the mod\_ssl Support
Mailing List `modssl-users@modssl.org`. They are collected at this place
to avoid answering the same questions over and over.

Please read this chapter at least once when installing mod\_ssl or at least
search for your problem here before submitting a problem report to the
author.

- ![](../images/down.gif) [About The Module](#about)
- ![](../images/down.gif) [Installation](#installation)
- ![](../images/down.gif) [Configuration](#aboutconfig)
- ![](../images/down.gif) [Certificates](#aboutcerts)
- ![](../images/down.gif) [The SSL Protocol](#aboutssl)
- ![](../images/down.gif) [mod\_ssl Support](#support)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## About The Module

- [What is the history of mod\_ssl?](#history)
- [mod\_ssl and Wassenaar Arrangement?](#wassenaar)

### What is the history of mod\_ssl?

The mod\_ssl v1 package was initially created in April 1998 by [Ralf S. Engelschall](mailto:rse@engelschall.com) via porting [Ben Laurie](mailto:ben@algroup.co.uk)'s [Apache-SSL](http://www.apache-ssl.org/) 1.17 source patches for
Apache 1.2.6 to Apache 1.3b6. Because of conflicts with Ben
Laurie's development cycle it then was re-assembled from scratch for
Apache 1.3.0 by merging the old mod\_ssl 1.x with the newer Apache-SSL
1.18. From this point on mod\_ssl lived its own life as mod\_ssl v2. The
first publicly released version was mod\_ssl 2.0.0 from August 10th,
1998.

After US export restrictions on cryptographic software were
loosened, `mod_ssl` became part of the Apache HTTP
Server with the release of Apache httpd 2.

### Is mod\_ssl affected by the Wassenaar Arrangement?

First, let us explain what Wassenaar and its Arrangement on
Export Controls for Conventional Arms and Dual-Use Goods and
Technologies is: This is a international regime, established in 1995, to
control trade in conventional arms and dual-use goods and technology. It
replaced the previous CoCom regime. Further details on
both the Arrangement and its signatories are available at <http://www.wassenaar.org/>.

In short, the aim of the Wassenaar Arrangement is to prevent the build up
of military capabilities that threaten regional and international security
and stability. The Wassenaar Arrangement controls the export of
cryptography as a dual-use good, that is, something that has both military and
civilian applications. However, the Wassenaar Arrangement also provides an
exemption from export controls for mass-market software and free software.

In the current Wassenaar List of Dual Use Goods and Technologies And
Munitions, under "GENERAL SOFTWARE NOTE (GSN)" it says
"The Lists do not control "software" which is either: 1. [...] 2. "in
the public domain"." And under "DEFINITIONS OF TERMS USED IN
THESE LISTS" we find "In the public
domain" defined as ""technology" or "software" which has been made
available without restrictions upon its further dissemination. Note:
Copyright restrictions do not remove "technology" or "software" from being
"in the public domain"."

So, both mod\_ssl and OpenSSL are "in the public domain" for the purposes
of the Wassenaar Arrangement and its "List of Dual Use Goods and
Technologies And Munitions List", and thus not affected by its provisions.

[![top](../images/up.gif)](#page-header)

## Installation

- [Why do I get permission errors related to
  SSLMutex when I start Apache?](#mutex)
- [Why does mod\_ssl stop with the error "Failed to
  generate temporary 512 bit RSA private key" when I start Apache?](#entropy)

### Why do I get permission errors related to SSLMutex when I start Apache?

Errors such as ```mod_ssl: Child could not open
SSLMutex lockfile /opt/apache/logs/ssl_mutex.18332 (System error follows)
[...] System: Permission denied (errno: 13)`'' are usually
caused by overly restrictive permissions on the *parent* directories.
Make sure that all parent directories (here `/opt`,
`/opt/apache` and `/opt/apache/logs`) have the x-bit
set for, at minimum, the UID under which Apache's children are running (see
the `User` directive).

### Why does mod\_ssl stop with the error "Failed to generate temporary 512 bit RSA private key" when I start Apache?

Cryptographic software needs a source of unpredictable data
to work correctly. Many open source operating systems provide
a "randomness device" that serves this purpose (usually named
`/dev/random`). On other systems, applications have to
seed the OpenSSL Pseudo Random Number Generator (PRNG) manually with
appropriate data before generating keys or performing public key
encryption. As of version 0.9.5, the OpenSSL functions that need
randomness report an error if the PRNG has not been seeded with
at least 128 bits of randomness.

To prevent this error, `mod_ssl` has to provide
enough entropy to the PRNG to allow it to work correctly. This can
be done via the `SSLRandomSeed`
directive.

[![top](../images/up.gif)](#page-header)

## Configuration

- [Is it possible to provide HTTP and HTTPS from
  the same server?](#parallel)
- [Which port does HTTPS use?](#ports)
- [How do I speak HTTPS manually for testing
  purposes?](#httpstest)
- [Why does the connection hang when I connect to my
  SSL-aware Apache server?](#hang)
- [Why do I get ``Connection Refused'' errors, when
  trying to access my newly installed Apache+mod\_ssl server via HTTPS?](#refused)
- [Why are the `SSL_XXX` variables not
  available to my CGI & SSI scripts?](#envvars)
- [How can I switch between HTTP and HTTPS in
  relative hyperlinks?](#relative)

### Is it possible to provide HTTP and HTTPS from the same server?

Yes. HTTP and HTTPS use different server ports (HTTP binds to
port 80, HTTPS to port 443), so there is no direct conflict between
them. You can either run two separate server instances bound to
these ports, or use Apache's elegant virtual hosting facility to
create two virtual servers, both served by the same instance of Apache
- one responding over HTTP to requests on port 80, and the other
responding over HTTPS to requests on port 443.

### Which port does HTTPS use?

You can run HTTPS on any port, but the standards specify port 443, which
is where any HTTPS compliant browser will look by default. You can force
your browser to look on a different port by specifying it in the URL. For
example, if your server is set up to serve pages over HTTPS on port 8080,
you can access them at `https://example.com:8080/`

### How do I speak HTTPS manually for testing purposes?

While you usually just use

`$ telnet localhost 80  
GET / HTTP/1.0`

for simple testing of Apache via HTTP, it's not so easy for
HTTPS because of the SSL protocol between TCP and HTTP. With the
help of OpenSSL's `s_client` command, however, you can
do a similar check via HTTPS:

`$ openssl s_client -connect localhost:443 -state -debug  
GET / HTTP/1.0`

Before the actual HTTP response you will receive detailed
information about the SSL handshake. For a more general command
line client which directly understands both HTTP and HTTPS, can
perform GET and POST operations, can use a proxy, supports byte
ranges, etc. you should have a look at the nifty
[cURL](http://curl.haxx.se/) tool. Using this, you can
check that Apache is responding correctly to requests via HTTP and
HTTPS as follows:

`$ curl http://localhost/  
$ curl https://localhost/`

### Why does the connection hang when I connect to my SSL-aware Apache server?

This can happen when you try to connect to a HTTPS server (or virtual
server) via HTTP (eg, using `http://example.com/` instead of
`https://example.com`). It can also happen when trying to
connect via HTTPS to a HTTP server (eg, using
`https://example.com/` on a server which doesn't support HTTPS,
or which supports it on a non-standard port). Make sure that you're
connecting to a (virtual) server that supports SSL.

### Why do I get ``Connection Refused'' messages, when trying to access my newly installed Apache+mod\_ssl server via HTTPS?

This error can be caused by an incorrect configuration.
Please make sure that your `Listen` directives match your
`<VirtualHost>`
directives. If all else fails, please start afresh, using the default
configuration provided by `mod_ssl`.

### Why are the `SSL_XXX` variables not available to my CGI & SSI scripts?

Please make sure you have ```SSLOptions +StdEnvVars`''
enabled for the context of your CGI/SSI requests.

### How can I switch between HTTP and HTTPS in relative hyperlinks?

Usually, to switch between HTTP and HTTPS, you have to use
fully-qualified hyperlinks (because you have to change the URL
scheme). Using `mod_rewrite` however, you can
manipulate relative hyperlinks, to achieve the same effect.

`RewriteEngine on  
RewriteRule ^/(.*)_SSL$ https://%{SERVER_NAME}/$1 [R,L]  
RewriteRule ^/(.*)_NOSSL$ http://%{SERVER_NAME}/$1 [R,L]`

This rewrite ruleset lets you use hyperlinks of the form
`<a href="document.html_SSL">`, to switch to HTTPS
in a relative link. (Replace SSL with NOSSL to switch to HTTP.)

[![top](../images/up.gif)](#page-header)

## Certificates

- [What are RSA Private Keys, CSRs and
  Certificates?](#keyscerts)
- [Is there a difference on startup between
  a non-SSL-aware Apache and an SSL-aware Apache?](#startup)
- [How do I create a self-signed SSL
  Certificate for testing purposes?](#selfcert)
- [How do I create a real SSL Certificate?](#realcert)
- [How do I create and use my own Certificate
  Authority (CA)?](#ownca)
- [How can I change the pass-phrase on my private
  key file?](#passphrase)
- [How can I get rid of the pass-phrase
  dialog at Apache startup time?](#removepassphrase)
- [How do I verify that a private key matches its
  Certificate?](#verify)
- [Why do connections fail with an "alert bad
  certificate" error?](#badcert)
- [Why does my 2048-bit private key not work?](#keysize)
- [Why is client authentication broken after
  upgrading from SSLeay version 0.8 to 0.9?](#hashsymlinks)
- [How can I convert a certificate from PEM to DER
  format?](#pemder)
- [Why can't I find the
  `getca` or `getverisign` programs mentioned by
  Verisign, for installing my Verisign certificate?](#verisign)
- [Can I use the Server Gated Cryptography (SGC)
  facility (aka Verisign Global ID) with mod\_ssl?](#sgc)
- [Why do browsers complain that they cannot
  verify my server certificate?](#gid)

### What are RSA Private Keys, CSRs and Certificates?

An RSA private key file is a digital file that you can use to decrypt
messages sent to you. It has a public component which you distribute (via
your Certificate file) which allows people to encrypt those messages to
you.

A Certificate Signing Request (CSR) is a digital file which contains
your public key and your name. You send the CSR to a Certifying Authority
(CA), who will convert it into a real Certificate, by signing it.

A Certificate contains your
RSA public key, your name, the name of the CA, and is digitally signed by
the CA. Browsers that know the CA can verify the signature on that
Certificate, thereby obtaining your RSA public key. That enables them to
send messages which only you can decrypt.

See the [Introduction](ssl__ssl_intro.md) chapter for a general
description of the SSL protocol.

### Is there a difference on startup between a non-SSL-aware Apache and an SSL-aware Apache?

Yes. In general, starting Apache with
`mod_ssl` built-in is just like starting Apache
without it. However, if you have a passphrase on your SSL private
key file, a startup dialog will pop up which asks you to enter the
pass phrase.

Having to manually enter the passphrase when starting the server
can be problematic - for example, when starting the server from the
system boot scripts. In this case, you can follow the steps
[below](#removepassphrase) to remove the passphrase from
your private key. Bear in mind that doing so brings additional security
risks - proceed with caution!

### How do I create a self-signed SSL Certificate for testing purposes?

1. Make sure OpenSSL is installed and in your `PATH`.
2. Run the following command, to create `server.key` and
   `server.crt` files:  
   `$ openssl req -new -x509 -nodes -out server.crt
   -keyout server.key`  
   These can be used as follows in your `httpd.conf`
   file:

   ```
                SSLCertificateFile    /path/to/this/server.crt
                SSLCertificateKeyFile /path/to/this/server.key
   ```
3. It is important that you are aware that this
   `server.key` does *not* have any passphrase.
   To add a passphrase to the key, you should run the following
   command, and enter & verify the passphrase as requested.  

   `$ openssl rsa -des3 -in server.key -out
   server.key.new`  
   `$ mv server.key.new server.key`

   Please backup the `server.key` file, and the passphrase
   you entered, in a secure location.

### How do I create a real SSL Certificate?

Here is a step-by-step description:

1. Make sure OpenSSL is installed and in your `PATH`.
2. Create a RSA private key for your Apache server
   (will be Triple-DES encrypted and PEM formatted):  
     
   `$ openssl genrsa -des3 -out server.key 1024`  
     
   Please backup this `server.key` file and the
   pass-phrase you entered in a secure location.
   You can see the details of this RSA private key by using the command:  
     
   `$ openssl rsa -noout -text -in server.key`  
     
   If necessary, you can also create a decrypted PEM version (not
   recommended) of this RSA private key with:  
     
   `$ openssl rsa -in server.key -out server.key.unsecure`
3. Create a Certificate Signing Request (CSR) with the server RSA private
   key (output will be PEM formatted):  
     
   `$ openssl req -new -key server.key -out server.csr`  
     
   Make sure you enter the FQDN ("Fully Qualified Domain Name") of the
   server when OpenSSL prompts you for the "CommonName", i.e. when you
   generate a CSR for a website which will be later accessed via
   `https://www.foo.dom/`, enter "www.foo.dom" here.
   You can see the details of this CSR by using  
     
   `$ openssl req -noout -text -in server.csr`
4. You now have to send this Certificate Signing Request (CSR) to
   a Certifying Authority (CA) to be signed. Once the CSR has been
   signed, you will have a real Certificate, which can be used by
   Apache. You can have a CSR signed by a commercial CA, or you can
   create your own CA to sign it.  
   Commercial CAs usually ask you to post the CSR into a web form,
   pay for the signing, and then send a signed Certificate, which
   you can store in a server.crt file. For more information about
   commercial CAs see the following locations:  
     
   1. Verisign  
      <http://digitalid.verisign.com/server/apacheNotice.htm>
   2. Thawte  
      <http://www.thawte.com/>
   3. CertiSign Certificadora Digital Ltda.  
      <http://www.certisign.com.br>
   4. IKS GmbH  
      <http://www.iks-jena.de/leistungen/ca/>
   5. Uptime Commerce Ltd.  
      <http://www.uptimecommerce.com>
   6. BelSign NV/SA  
      <http://www.belsign.be>For details on how to create your own CA, and use this to sign
   a CSR, see [below](#ownca).  
   Once your CSR has been signed, you can see the details of the
   Certificate as follows:  
     
   `$ openssl x509 -noout -text -in server.crt`
5. You should now have two files: `server.key` and
   `server.crt`. These can be used as follows in your
   `httpd.conf` file:

   ```
          SSLCertificateFile    /path/to/this/server.crt
          SSLCertificateKeyFile /path/to/this/server.key
   ```

   The `server.csr` file is no longer needed.

### How do I create and use my own Certificate Authority (CA)?

The short answer is to use the `CA.sh` or `CA.pl`
script provided by OpenSSL. Unless you have a good reason not to,
you should use these for preference. If you cannot, you can create a
self-signed Certificate as follows:

1. Create a RSA private key for your server
   (will be Triple-DES encrypted and PEM formatted):  
     
   `$ openssl genrsa -des3 -out server.key 1024`  
     
   Please backup this `server.key` file and the
   pass-phrase you entered in a secure location.
   You can see the details of this RSA private key by using the
   command:  
     
   `$ openssl rsa -noout -text -in server.key`  
     
   If necessary, you can also create a decrypted PEM version (not
   recommended) of this RSA private key with:  
     
   `$ openssl rsa -in server.key -out server.key.unsecure`
2. Create a self-signed Certificate (X509 structure)
   with the RSA key you just created (output will be PEM formatted):  
     
   `$ openssl req -new -x509 -nodes -sha1 -days 365
   -key server.key -out server.crt`  
     
   This signs the server CSR and results in a `server.crt` file.  
   You can see the details of this Certificate using:  
     
   `$ openssl x509 -noout -text -in server.crt`

### How can I change the pass-phrase on my private key file?

You simply have to read it with the old pass-phrase and write it again,
specifying the new pass-phrase. You can accomplish this with the following
commands:

`$ openssl rsa -des3 -in server.key -out server.key.new`  
`$ mv server.key.new server.key`

The first time you're asked for a PEM pass-phrase, you should
enter the old pass-phrase. After that, you'll be asked again to
enter a pass-phrase - this time, use the new pass-phrase. If you
are asked to verify the pass-phrase, you'll need to enter the new
pass-phrase a second time.

### How can I get rid of the pass-phrase dialog at Apache startup time?

The reason this dialog pops up at startup and every re-start
is that the RSA private key inside your server.key file is stored in
encrypted format for security reasons. The pass-phrase is needed to decrypt
this file, so it can be read and parsed. Removing the pass-phrase
removes a layer of security from your server - proceed with caution!

1. Remove the encryption from the RSA private key (while
   keeping a backup copy of the original file):  
     
   `$ cp server.key server.key.org`  
   `$ openssl rsa -in server.key.org -out server.key`
2. Make sure the server.key file is only readable by root:  
     
   `$ chmod 400 server.key`

Now `server.key` contains an unencrypted copy of the key.
If you point your server at this file, it will not prompt you for a
pass-phrase. HOWEVER, if anyone gets this key they will be able to
impersonate you on the net. PLEASE make sure that the permissions on this
file are such that only root or the web server user can read it
(preferably get your web server to start as root but run as another
user, and have the key readable only by root).

As an alternative approach you can use the ```SSLPassPhraseDialog
exec:/path/to/program`'' facility. Bear in mind that this is
neither more nor less secure, of course.

### How do I verify that a private key matches its Certificate?

A private key contains a series of numbers. Two of these numbers form
the "public key", the others are part of the "private key". The "public
key" bits are included when you generate a CSR, and subsequently form
part of the associated Certificate.

To check that the public key in your Certificate matches the public
portion of your private key, you simply need to compare these numbers.
To view the Certificate and the key run the commands:

`$ openssl x509 -noout -text -in server.crt`  
`$ openssl rsa -noout -text -in server.key`

The `modulus' and the `public exponent' portions in the key and the
Certificate must match. As the public exponent is usually 65537
and it's difficult to visually check that the long modulus numbers
are the same, you can use the following approach:

`$ openssl x509 -noout -modulus -in server.crt | openssl md5`  
`$ openssl rsa -noout -modulus -in server.key | openssl md5`

This leaves you with two rather shorter numbers to compare. It is,
in theory, possible that these numbers may be the same, without the
modulus numbers being the same, but the chances of this are
overwhelmingly remote.

Should you wish to check to which key or certificate a particular
CSR belongs you can perform the same calculation on the CSR as
follows:

`$ openssl req -noout -modulus -in server.csr | openssl md5`

### Why do connections fail with an "alert bad certificate" error?

Errors such as `OpenSSL: error:14094412: SSL
routines:SSL3_READ_BYTES:sslv3 alert bad certificate` in the SSL
logfile, are usually caused by a browser which is unable to handle the server
certificate/private-key. For example, Netscape Navigator 3.x is
unable to handle RSA key lengths not equal to 1024 bits.

### Why does my 2048-bit private key not work?

The private key sizes for SSL must be either 512 or 1024 bits, for compatibility
with certain web browsers. A keysize of 1024 bits is recommended because
keys larger than 1024 bits are incompatible with some versions of Netscape
Navigator and Microsoft Internet Explorer, and with other browsers that
use RSA's BSAFE cryptography toolkit.

### Why is client authentication broken after upgrading from SSLeay version 0.8 to 0.9?

The CA certificates under the path you configured with
`SSLCACertificatePath` are found by SSLeay through hash
symlinks. These hash values are generated by the ``openssl x509 -noout
-hash`' command. However, the algorithm used to calculate the hash for a
certificate changed between SSLeay 0.8 and 0.9. You will need to remove
all old hash symlinks and create new ones after upgrading. Use the
`Makefile` provided by `mod_ssl`.

### How can I convert a certificate from PEM to DER format?

The default certificate format for SSLeay/OpenSSL is PEM, which is simply
Base64 encoded DER, with header and footer lines. For some applications
(e.g. Microsoft Internet Explorer) you need the certificate in plain DER
format. You can convert a PEM file `cert.pem` into the
corresponding DER file `cert.der` using the following command:
`$ openssl x509 -in cert.pem -out cert.der -outform DER`

### Why can't I find the `getca` or `getverisign` programs mentioned by Verisign, for installing my Verisign certificate?

Verisign has never provided specific instructions
for Apache+mod\_ssl. The instructions provided are for C2Net's
Stronghold (a commercial Apache based server with SSL support).

To install your certificate, all you need to do is to save the
certificate to a file, and give the name of that file to the
`SSLCertificateFile` directive.
You will also need to give it the key file. For more information,
see the `SSLCertificateKeyFile`
directive.

### Can I use the Server Gated Cryptography (SGC) facility (aka Verisign Global ID) with mod\_ssl?

Yes. `mod_ssl` has included support for the SGC
facility since version 2.1. No special configuration is required -
just use the Global ID as your server certificate. The
*step up* of the clients is then automatically handled by
`mod_ssl` at run-time.

### Why do browsers complain that they cannot verify my server certificate?

One reason this might happen is because your server certificate is signed
by an intermediate CA. Various CAs, such as Verisign or Thawte, have started
signing certificates not with their root certificate but with intermediate
certificates.

Intermediate CA certificates lie between the root CA certificate (which is
installed in the browsers) and the server certificate (which you installed
on the server). In order for the browser to be able to traverse and verify
the trust chain from the server certificate to the root certificate it
needs need to be given the intermediate certificates. The CAs should
be able to provide you such intermediate certificate packages that can be
installed on the server.

You need to include those intermediate certificates with the
`SSLCertificateChainFile`
directive.

[![top](../images/up.gif)](#page-header)

## The SSL Protocol

- [Why do I get lots of random SSL protocol
  errors under heavy server load?](#random)
- [Why does my webserver have a higher load, now
  that it serves SSL encrypted traffic?](#load)
- [Why do HTTPS connections to my server
  sometimes take up to 30 seconds to establish a connection?](#establishing)
- [What SSL Ciphers are supported by mod\_ssl?](#ciphers)
- [Why do I get ``no shared cipher'' errors, when
  trying to use Anonymous Diffie-Hellman (ADH) ciphers?](#adh)
- [Why do I get a 'no shared ciphers'
  error when connecting to my newly installed server?](#sharedciphers)
- [Why can't I use SSL with name-based/non-IP-based
  virtual hosts?](#vhosts)
- [Is it possible to use Name-Based Virtual
  Hosting to identify different SSL virtual hosts?](#vhosts2)
- [How do I get SSL compression working?](#comp)
- [When I use Basic Authentication over HTTPS
  the lock icon in Netscape browsers stays unlocked when the dialog pops up.
  Does this mean the username/password is being sent unencrypted?](#lockicon)
- [Why do I get I/O errors when connecting via
  HTTPS to an Apache+mod\_ssl server with Microsoft Internet Explorer
  (MSIE)?](#msie)
- [Why do I get I/O errors, or the message "Netscape has
  encountered bad data from the server", when connecting via
  HTTPS to an Apache+mod\_ssl server with Netscape Navigator?](#nn)
- [Why do I get handshake failures with Java-based clients when using a certificate with more than 1024 bits?](#javadh)

### Why do I get lots of random SSL protocol errors under heavy server load?

There can be a number of reasons for this, but the main one
is problems with the SSL session Cache specified by the
`SSLSessionCache` directive. The DBM session
cache is the most likely source of the problem, so using the SHM session cache (or
no cache at all) may help.

### Why does my webserver have a higher load, now that it serves SSL encrypted traffic?

SSL uses strong cryptographic encryption, which necessitates a lot of
number crunching. When you request a webpage via HTTPS, everything (even
the images) is encrypted before it is transferred. So increased HTTPS
traffic leads to load increases.

### Why do HTTPS connections to my server sometimes take up to 30 seconds to establish a connection?

This is usually caused by a `/dev/random` device for
`SSLRandomSeed` which blocks the
read(2) call until enough entropy is available to service the
request. More information is available in the reference
manual for the `SSLRandomSeed`
directive.

### What SSL Ciphers are supported by mod\_ssl?

Usually, any SSL ciphers supported by the version of OpenSSL in use,
are also supported by `mod_ssl`. Which ciphers are
available can depend on the way you built OpenSSL. Typically, at
least the following ciphers are supported:

1. RC4 with MD5
2. RC4 with MD5 (export version restricted to 40-bit key)
3. RC2 with MD5
4. RC2 with MD5 (export version restricted to 40-bit key)
5. IDEA with MD5
6. DES with MD5
7. Triple-DES with MD5

To determine the actual list of ciphers available, you should run
the following:

`$ openssl ciphers -v`

### Why do I get ``no shared cipher'' errors, when trying to use Anonymous Diffie-Hellman (ADH) ciphers?

By default, OpenSSL does *not* allow ADH ciphers, for security
reasons. Please be sure you are aware of the potential side-effects
if you choose to enable these ciphers.

In order to use Anonymous Diffie-Hellman (ADH) ciphers, you must
build OpenSSL with ```-DSSL_ALLOW_ADH`'', and then add
```ADH`'' into your `SSLCipherSuite`.

### Why do I get a 'no shared ciphers' error when connecting to my newly installed server?

Either you have made a mistake with your
`SSLCipherSuite`
directive (compare it with the pre-configured example in
`httpd.conf-dist`) or you chose to use DSA/DH
algorithms instead of RSA when you generated your private key
and ignored or overlooked the warnings. If you have chosen
DSA/DH, then your server cannot communicate using RSA-based SSL
ciphers (at least until you configure an additional RSA-based
certificate/key pair). Modern browsers like NS or IE can only
communicate over SSL using RSA ciphers. The result is the
"no shared ciphers" error. To fix this, regenerate your server
certificate/key pair, using the RSA algorithm.

### Why can't I use SSL with name-based/non-IP-based virtual hosts?

The reason is very technical, and a somewhat "chicken and egg" problem.
The SSL protocol layer stays below the HTTP protocol layer and
encapsulates HTTP. When an SSL connection (HTTPS) is established
Apache/mod\_ssl has to negotiate the SSL protocol parameters with the
client. For this, mod\_ssl has to consult the configuration of the virtual
server (for instance it has to look for the cipher suite, the server
certificate, etc.). But in order to go to the correct virtual server
Apache has to know the `Host` HTTP header field. To do this, the
HTTP request header has to be read. This cannot be done before the SSL
handshake is finished, but the information is needed in order to
complete the SSL handshake phase. See the next question for how to
circumvent this issue.

Note that if you have a wildcard SSL certificate, or a
certificate that has multiple hostnames on it using subjectAltName
fields, you can use SSL on name-based virtual hosts without further
workarounds.

### Why is it not possible to use Name-Based Virtual Hosting to identify different SSL virtual hosts?

Name-Based Virtual Hosting is a very popular method of identifying
different virtual hosts. It allows you to use the same IP address and
the same port number for many different sites. When people move on to
SSL, it seems natural to assume that the same method can be used to have
lots of different SSL virtual hosts on the same server.

It is possible, but only if using a 2.2.12 or later web server,
built with 0.9.8j or later OpenSSL. This is because it requires a
feature that only the most recent revisions of the SSL
specification added, called Server Name Indication (SNI).

Note that if you have a wildcard SSL certificate, or a
certificate that has multiple hostnames on it using subjectAltName
fields, you can use SSL on name-based virtual hosts without further
workarounds.

The reason is that the SSL protocol is a separate layer which
encapsulates the HTTP protocol. So the SSL session is a separate
transaction, that takes place before the HTTP session has begun.
The server receives an SSL request on IP address X and port Y
(usually 443). Since the SSL request did not contain any Host:
field, the server had no way to decide which SSL virtual host to use.
Usually, it just used the first one it found which matched the
port and IP address specified.

If you are using a version of the web server and OpenSSL that
support SNI, though, and the client's browser also supports SNI,
then the hostname is included in the original SSL request, and the
web server can select the correct SSL virtual host.

You can, of course, use Name-Based Virtual Hosting to identify many
non-SSL virtual hosts (all on port 80, for example) and then
have a single SSL virtual host (on port 443). But if you do this,
you must make sure to put the non-SSL port number on the NameVirtualHost
directive, e.g.

`NameVirtualHost 192.168.1.1:80`

Other workaround solutions include:

Using separate IP addresses for different SSL hosts.
Using different port numbers for different SSL hosts.

### How do I get SSL compression working?

Although SSL compression negotiation was defined in the specification
of SSLv2 and TLS, it took until May 2004 for RFC 3749 to define DEFLATE as
a negotiable standard compression method.

OpenSSL 0.9.8 started to support this by default when compiled with the
`zlib` option. If both the client and the server support compression,
it will be used. However, most clients still try to initially connect with an
SSLv2 Hello. As SSLv2 did not include an array of prefered compression algorithms
in its handshake, compression cannot be negotiated with these clients.
If the client disables support for SSLv2, either an SSLv3 or TLS Hello
may be sent, depending on which SSL library is used, and compression may
be set up. You can verify whether clients make use of SSL compression by
logging the `%{SSL_COMPRESS_METHOD}x` variable.

### When I use Basic Authentication over HTTPS the lock icon in Netscape browsers stays unlocked when the dialog pops up. Does this mean the username/password is being sent unencrypted?

No, the username/password is transmitted encrypted. The icon in
Netscape browsers is not actually synchronized with the SSL/TLS layer.
It only toggles to the locked state when the first part of the actual
webpage data is transferred, which may confuse people. The Basic
Authentication facility is part of the HTTP layer, which is above
the SSL/TLS layer in HTTPS. Before any HTTP data communication takes
place in HTTPS, the SSL/TLS layer has already completed its handshake
phase, and switched to encrypted communication. So don't be
confused by this icon.

### Why do I get I/O errors when connecting via HTTPS to an Apache+mod\_ssl server with Microsoft Internet Explorer (MSIE)?

The first reason is that the SSL implementation in some MSIE versions has
some subtle bugs related to the HTTP keep-alive facility and the SSL close
notify alerts on socket connection close. Additionally the interaction
between SSL and HTTP/1.1 features are problematic in some MSIE versions.
You can work around these problems by forcing Apache not to use HTTP/1.1,
keep-alive connections or send the SSL close notify messages to MSIE clients.
This can be done by using the following directive in your SSL-aware
virtual host section:

`SetEnvIf User-Agent ".*MSIE.*" \  
nokeepalive ssl-unclean-shutdown \  
downgrade-1.0 force-response-1.0`

Further, some MSIE versions have problems with particular ciphers.
Unfortunately, it is not possible to implement a MSIE-specific
workaround for this, because the ciphers are needed as early as the
SSL handshake phase. So a MSIE-specific
`SetEnvIf` won't solve these
problems. Instead, you will have to make more drastic
adjustments to the global parameters. Before you decide to do
this, make sure your clients really have problems. If not, do not
make these changes - they will affect *all* your clients, MSIE
or otherwise.

The next problem is that 56bit export versions of MSIE 5.x
browsers have a broken SSLv3 implementation, which interacts badly
with OpenSSL versions greater than 0.9.4. You can accept this and
require your clients to upgrade their browsers, you can downgrade to
OpenSSL 0.9.4 (not advised), or you can work around this, accepting
that your workaround will affect other browsers too:

`SSLProtocol all -SSLv3`

will completely disables the SSLv3 protocol and allow those
browsers to work. A better workaround is to disable only those
ciphers which cause trouble.

`SSLCipherSuite
ALL:!ADH:!EXPORT56:RC4+RSA:+HIGH:+MEDIUM:+LOW:+SSLv2:+EXP`

This also allows the broken MSIE versions to work, but only removes the
newer 56bit TLS ciphers.

Another problem with MSIE 5.x clients is that they refuse to connect to
URLs of the form `https://12.34.56.78/` (where IP-addresses are used
instead of the hostname), if the server is using the Server Gated
Cryptography (SGC) facility. This can only be avoided by using the fully
qualified domain name (FQDN) of the website in hyperlinks instead, because
MSIE 5.x has an error in the way it handles the SGC negotiation.

And finally there are versions of MSIE which seem to require that
an SSL session can be reused (a totally non standard-conforming
behaviour, of course). Connecting with those MSIE versions only work
if a SSL session cache is used. So, as a work-around, make sure you
are using a session cache (see the `SSLSessionCache` directive).

### Why do I get I/O errors, or the message "Netscape has encountered bad data from the server", when connecting via HTTPS to an Apache+mod\_ssl server with Netscape Navigator?

This usually occurs when you have created a new server certificate for
a given domain, but had previously told your browser to always accept
the old server certificate. Once you clear the entry for the old
certificate from your browser, everything should be fine. Netscape's SSL
implementation is correct, so when you encounter I/O errors with Netscape
Navigator it is usually caused by the configured certificates.

### Why do I get handshake failures with Java-based clients when using a certificate with more than 1024 bits?

Beginning with version 2.2.30,
`mod_ssl` will use DH parameters which include primes
with lengths of more than 1024 bits. Java 7 and earlier limit their
support for DH prime sizes to a maximum of 1024 bits, however.

If your Java-based client aborts with exceptions such as
`java.lang.RuntimeException: Could not generate DH keypair` and
`java.security.InvalidAlgorithmParameterException: Prime size must be
multiple of 64, and can only range from 512 to 1024 (inclusive)`,
and httpd logs `tlsv1 alert internal error (SSL alert number 80)`
(at `LogLevel` `info`
or higher), you can either rearrange mod\_ssl's cipher list with
`SSLCipherSuite`
(possibly in conjunction with `SSLHonorCipherOrder`),
or you can use custom DH parameters with a 1024-bit prime, which
will always have precedence over any of the built-in DH parameters.

To generate custom DH parameters, use the `openssl dhparam 1024`
command. Alternatively, you can use the following standard 1024-bit DH
parameters from [RFC 2409](http://www.ietf.org/rfc/rfc2409.txt),
section 6.2:

```
-----BEGIN DH PARAMETERS-----
MIGHAoGBAP//////////yQ/aoiFowjTExmKLgNwc0SkCTgiKZ8x0Agu+pjsTmyJR
Sgh5jjQE3e+VGbPNOkMbMCsKbfJfFDdP4TVtbVHCReSFtXZiXn7G9ExC6aY37WsL
/1y29Aa37e44a/taiZ+lrp8kEXxLH+ZJKGZR7OZTgf//////////AgEC
-----END DH PARAMETERS-----
```

Add the custom parameters including the "BEGIN DH PARAMETERS" and
"END DH PARAMETERS" lines to the end of the first certificate file
you have configured using the
`SSLCertificateFile` directive.

[![top](../images/up.gif)](#page-header)

## mod\_ssl Support

- [What information resources are available in
  case of mod\_ssl problems?](#resources)
- [What support contacts are available in case of
  mod\_ssl problems?](#contact)
- [What information should I
  provide when writing a bug report?](#reportdetails)
- [I had a core dump, can you help me?](#coredumphelp)
- [How do I get a backtrace, to help find the reason
  for my core dump?](#backtrace)

### What information resources are available in case of mod\_ssl problems?

The following information resources are available.
In case of problems you should search here first.

Answers in the User Manual's F.A.Q. List (this)
:   <http://httpd.apache.org/docs/2.2/ssl/ssl_faq.html>  
    First check the F.A.Q. (this text). If your problem is a common
    one, it may have been answered several times before, and been included
    in this doc.

Postings from the modssl-users Support Mailing List <http://www.modssl.org/support/>
:   Search for your problem in the archives of the modssl-users mailing list.
    You're probably not the first person to have had this problem!

### What support contacts are available in case of mod\_ssl problems?

The following lists all support possibilities for mod\_ssl, in order of
preference. Please go through these possibilities
*in this order* - don't just pick the one you like the look of.

1. *Send a Problem Report to the modssl-users Support Mailing List*  
   [modssl-users@modssl.org](mailto:modssl-users@modssl.org)  
   This is the preferred way of submitting your problem report, because this way,
   others can see the problem, and learn from any answers. You must subscribe to
   the list first, but you can then easily discuss your problem with both the
   author and the whole mod\_ssl user community.
2. *Send a Problem Report to the Apache httpd Users Support Mailing List*  
   [users@httpd.apache.org](mailto:users@httpd.apache.org)  
   This is the second way of submitting your problem report. Again, you must
   subscribe to the list first, but you can then easily discuss your problem
   with the whole Apache httpd user community.
3. *Write a Problem Report in the Bug Database*  
   <http://httpd.apache.org/bug_report.html>  
   This is the last way of submitting your problem report. You should only
   do this if you've already posted to the mailing lists, and had no success.
   Please follow the instructions on the above page *carefully*.

### What information should I provide when writing a bug report?

You should always provide at least the following information:

Apache and OpenSSL version information
:   The Apache version can be determined
    by running `httpd -v`. The OpenSSL version can be
    determined by running `openssl version`. Alternatively, if
    you have Lynx installed, you can run the command `lynx -mime_header
    http://localhost/ | grep Server` to gather this information in a
    single step.

The details on how you built and installed Apache+mod\_ssl+OpenSSL
:   For this you can provide a logfile of your terminal session which shows
    the configuration and install steps. If this is not possible, you
    should at least provide the `configure` command line you used.

In case of core dumps please include a Backtrace
:   If your Apache+mod\_ssl+OpenSSL dumps its core, please attach
    a stack-frame ``backtrace'' (see [below](#backtrace)
    for information on how to get this). This information is required
    in order to find a reason for your core dump.

A detailed description of your problem
:   Don't laugh, we really mean it! Many problem reports don't
    include a description of what the actual problem is. Without this,
    it's very difficult for anyone to help you. So, it's in your own
    interest (you want the problem be solved, don't you?) to include as
    much detail as possible, please. Of course, you should still include
    all the essentials above too.

### I had a core dump, can you help me?

In general no, at least not unless you provide more details about the code
location where Apache dumped core. What is usually always required in
order to help you is a backtrace (see next question). Without this
information it is mostly impossible to find the problem and help you in
fixing it.

### How do I get a backtrace, to help find the reason for my core dump?

Following are the steps you will need to complete, to get a backtrace:

1. Make sure you have debugging symbols available, at least
   in Apache. On platforms where you use GCC/GDB, you will have to build
   Apache+mod\_ssl with ```OPTIM="-g -ggdb3"`'' to get this. On
   other platforms at least ```OPTIM="-g"`'' is needed.
2. Start the server and try to reproduce the core-dump. For this you may
   want to use a directive like ```CoreDumpDirectory /tmp`'' to
   make sure that the core-dump file can be written. This should result
   in a `/tmp/core` or `/tmp/httpd.core` file. If you
   don't get one of these, try running your server under a non-root UID.
   Many modern kernels do not allow a process to dump core after it has
   done a `setuid()` (unless it does an `exec()`) for
   security reasons (there can be privileged information left over in
   memory). If necessary, you can run `/path/to/httpd -X`
   manually to force Apache to not fork.
3. Analyze the core-dump. For this, run `gdb /path/to/httpd
   /tmp/httpd.core` or a similar command. In GDB, all you
   have to do then is to enter `bt`, and voila, you get the
   backtrace. For other debuggers consult your local debugger manual.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/ssl/ssl_faq.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
