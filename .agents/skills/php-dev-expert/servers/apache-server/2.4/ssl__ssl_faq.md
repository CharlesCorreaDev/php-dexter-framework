# SSL/TLS Strong Encryption: FAQ - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/ssl/ssl_faq.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](ssl.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [SSL/TLS](ssl.md)

# SSL/TLS Strong Encryption: FAQ

> The wise man doesn't give the right answers,
> he poses the right questions.
>
> -- Claude Levi-Strauss

- ![](../images/down.gif) [Installation](#installation)
- ![](../images/down.gif) [Configuration](#aboutconfig)
- ![](../images/down.gif) [Certificates](#aboutcerts)
- ![](../images/down.gif) [The SSL Protocol](#aboutssl)
- ![](../images/down.gif) [mod\_ssl Support](#support)

[![top](../images/up.gif)](#page-header)

## Installation [¶](#installation "Permanent link")

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

## Configuration [¶](#aboutconfig "Permanent link")

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

```
RewriteEngine on
RewriteRule   "^/(.*)_SSL$"   "https://%{SERVER_NAME}/$1" [R,L]
RewriteRule   "^/(.*)_NOSSL$" "http://%{SERVER_NAME}/$1"  [R,L]
```

This rewrite ruleset lets you use hyperlinks of the form
`<a href="document.html_SSL">`, to switch to HTTPS
in a relative link. (Replace SSL with NOSSL to switch to HTTP.)

[![top](../images/up.gif)](#page-header)

## Certificates [¶](#aboutcerts "Permanent link")

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
- [How can I convert a certificate from PEM to DER
  format?](#pemder)
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
   SSLCertificateFile    "/path/to/this/server.crt"
   SSLCertificateKeyFile "/path/to/this/server.key"
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
     
   `$ openssl genrsa -des3 -out server.key 2048`  
     
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
   you can store in a server.crt file.  
   For details on how to create your own CA, and use this to sign
   a CSR, see [below](#ownca).  
   Once your CSR has been signed, you can see the details of the
   Certificate as follows:  
     
   `$ openssl x509 -noout -text -in server.crt`
5. You should now have two files: `server.key` and
   `server.crt`. These can be used as follows in your
   `httpd.conf` file:

   ```
   SSLCertificateFile    "/path/to/this/server.crt"
   SSLCertificateKeyFile "/path/to/this/server.key"
   ```

   The `server.csr` file is no longer needed.

### How do I create and use my own Certificate Authority (CA)?

The short answer is to use the `CA.sh` or `CA.pl`
script provided by OpenSSL. Unless you have a good reason not to,
you should use these for preference. If you cannot, you can create a
self-signed certificate as follows:

1. Create a RSA private key for your server
   (will be Triple-DES encrypted and PEM formatted):  
     
   `$ openssl genrsa -des3 -out server.key 2048`  
     
   Please backup this `server.key` file and the
   pass-phrase you entered in a secure location.
   You can see the details of this RSA private key by using the
   command:  
     
   `$ openssl rsa -noout -text -in server.key`  
     
   If necessary, you can also create a decrypted PEM version (not
   recommended) of this RSA private key with:  
     
   `$ openssl rsa -in server.key -out server.key.unsecure`
2. Create a self-signed certificate (X509 structure)
   with the RSA key you just created (output will be PEM formatted):  
     
   `$ openssl req -new -x509 -nodes -sha1 -days 365
   -key server.key -out server.crt -extensions usr_cert`  
     
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

### How can I convert a certificate from PEM to DER format?

The default certificate format for OpenSSL is PEM, which is simply
Base64 encoded DER, with header and footer lines. For some applications
(e.g. Microsoft Internet Explorer) you need the certificate in plain DER
format. You can convert a PEM file `cert.pem` into the
corresponding DER file `cert.der` using the following command:
`$ openssl x509 -in cert.pem -out cert.der -outform DER`

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

## The SSL Protocol [¶](#aboutssl "Permanent link")

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
- [How do I enable TLS-SRP?](#srp)
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

1. RC4 with SHA1
2. AES with SHA1
3. Triple-DES with SHA1

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
`extra/httpd-ssl.conf`) or you chose to use DSA/DH
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

### Is it possible to use Name-Based Virtual Hosting to identify different SSL virtual hosts?

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

```
NameVirtualHost 192.168.1.1:80
```

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
SSLv2 Hello. As SSLv2 did not include an array of preferred compression algorithms
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

### Why do I get I/O errors when connecting via HTTPS to an Apache+mod\_ssl server with older versions of Microsoft Internet Explorer (MSIE)?

The first reason is that the SSL implementation in some MSIE versions has
some subtle bugs related to the HTTP keep-alive facility and the SSL close
notify alerts on socket connection close. Additionally the interaction
between SSL and HTTP/1.1 features are problematic in some MSIE versions.
You can work around these problems by forcing Apache not to use HTTP/1.1,
keep-alive connections or send the SSL close notify messages to MSIE clients.
This can be done by using the following directive in your SSL-aware
virtual host section:

```
SetEnvIf User-Agent "MSIE [2-5]" \
         nokeepalive ssl-unclean-shutdown \
         downgrade-1.0 force-response-1.0
```

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

### How do I enable TLS-SRP?

TLS-SRP (Secure Remote Password key exchange for TLS, specified in RFC 5054)
can supplement or replace certificates in authenticating an SSL connection.
To use TLS-SRP, set the
`SSLSRPVerifierFile` directive to
point to an OpenSSL SRP verifier file. To create the verifier file, use the
`openssl` tool:

`openssl srp -srpvfile passwd.srpv -add username`

After creating this file, specify it in the SSL server configuration:

`SSLSRPVerifierFile /path/to/passwd.srpv`

To force clients to use non-certificate TLS-SRP cipher suites, use the
following directive:

`SSLCipherSuite "!DSS:!aRSA:SRP"`

### Why do I get handshake failures with Java-based clients when using a certificate with more than 1024 bits?

Beginning with version 2.4.7,
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
parameters from [RFC 2409](https://www.rfc-editor.org/rfc/rfc2409),
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

## mod\_ssl Support [¶](#support "Permanent link")

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
:   <http://httpd.apache.org/docs/2.4/ssl/ssl_faq.html>  
    First check the F.A.Q. (this text). If your problem is a common
    one, it may have been answered several times before, and been included
    in this doc.

### What support contacts are available in case of mod\_ssl problems?

The following lists all support possibilities for mod\_ssl, in order of
preference. Please go through these possibilities
*in this order* - don't just pick the one you like the look of.

1. *Send a Problem Report to the Apache httpd Users Support Mailing List*  
   [users@httpd.apache.org](mailto:users@httpd.apache.org)  
   This is the second way of submitting your problem report. Again, you must
   subscribe to the list first, but you can then easily discuss your problem
   with the whole Apache httpd user community.
2. *Write a Problem Report in the Bug Database*  
   <http://httpd.apache.org/bug_report.html>  
   This is the last way of submitting your problem report. You should only
   do this if you've already posted to the mailing lists, and had no success.
   Please follow the instructions on the above page *carefully*.

### What information should I provide when writing a bug report?

You should always provide at least the following information:

Apache httpd and OpenSSL version information
:   The Apache version can be determined
    by running `httpd -v`. The OpenSSL version can be
    determined by running `openssl version`. Alternatively, if
    you have Lynx installed, you can run the command `lynx -mime_header
    http://localhost/ | grep Server` to gather this information in a
    single step.

The details on how you built and installed Apache httpd and OpenSSL
:   For this you can provide a logfile of your terminal session which shows
    the configuration and install steps. If this is not possible, you
    should at least provide the `configure` command line you used.

In case of core dumps please include a Backtrace
:   If your Apache httpd dumps its core, please attach
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

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/ssl/ssl_faq.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/ssl/ssl_faq.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
