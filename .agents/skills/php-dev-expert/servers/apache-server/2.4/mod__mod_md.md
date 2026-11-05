# mod_md - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_md.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_md

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Managing domains across virtual hosts, certificate provisioning via the ACME protocol |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | md\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_md.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.4.30 and later |

### Summary

This module manages common properties of domains for one or more virtual hosts.
Its serves two main purposes: for one, supervise/renew TLS certificates via the
ACME protocol ([RFC 8555](https://www.rfc-editor.org/rfc/rfc8555)).
Certificates will be renewed by the module ahead of their expiration to account
for disruption in internet services. There are ways to monitor the status of all
certificates managed this way and configurations that will run your own
notification commands on renewal, expiration and errors.

Second, mod\_md offers an alternate OCSP Stapling implementation. This works with
managed certificates as well as with certificates you configure yourself. OCSP
Stapling is a necessary component for any https: site, influencing page load
times and, depending on other setups, page availability. More in the
stapling section below.

The default ACME Authority for managing certificates is
[Let's Encrypt](https://letsencrypt.org/), but it is possible
to configure another CA that supports the protocol.

Simple configuration example:

### TLS in a VirtualHost context

```
MDomain example.org

<VirtualHost *:443>
    ServerName example.org
    DocumentRoot htdocs/a

    SSLEngine on
    # no certificates specification
</VirtualHost>
```

This setup will, on server start, contact
[Let's Encrypt](https://letsencrypt.org/)
to request a certificate for the domain. If Let's Encrypt can verify the ownership
of the domain, the module will retrieve the certificate and its chain, store it
in the local file system (see `MDStoreDir`)
and provide it, on next restart, to `mod_ssl`.

This happens while the server is already running. All other hosts will continue
to work as before. While a certificate is not available, requests for the managed
domain will be answered with a '503 Service Unavailable'.

### Prerequisites

This module requires `mod_watchdog` to be loaded as well.

Certificate sign-up and renewal with Let's Encrypt requires your server to be
reachable on port 80 (http:) and/or port 443 (https:) from the public internet.
(Unless your server is configured to use DNS for challenges - more on that under
'wildcard certificates')

The module will select from the methods offered by Let's Encrypt. Usually LE offers
challenges on both ports and DNS and Apache chooses a method available.

To determine which one is available, the module looks at the ports
Apache httpd listens on. If those include port 80, it assumes that the
http: challenge (named http-01) is available. If the server listens
on port 443, the https: challenge (named tls-alpn-01) is also added to
the list. (And if `MDChallengeDns01`
is configured, the challenge dns-01 is added as well.)

If your setup is not so straight forward, there are two methods available
to influence this. First, look at `MDPortMap`
if the server is behind a portmapper, such as a firewall. Second, you may
override the module's guesswork completely by configuring
`MDCAChallenges` directly.

### https: Challenges

For domain verification via the TLS protocol `tls-alpn-01` is the name
of the challenge type. It requires the Apache server to listen on port 443
(see `MDPortMap` if you map that port
to something else).

Let's Encrypt will open a TLS connection to Apache using the special indicator
`acme-tls/1` (this indication part of TLS is called ALPN, therefore the name
of the challenge. ALPN is also used by browsers to request a HTTP/2 connection).

As with the HTTP/2 protocol, to allow this, you configure:

```
Protocols h2 http/1.1 acme-tls/1
```

And the `tls-alpn-01` challenge type is available.

### Wildcard Certificates

Wildcard certificates are possible, but not straight-forward to use out of
the box. Let's Encrypt requires the `dns-01` challenge verification
for those. No other is considered good enough.

The difficulty here is that Apache cannot do that on its own. As the name implies, `dns-01`
requires you to show some specific DNS records for your domain that contain
some challenge data. So you need to \_write\_ your domain's DNS records.

If you know how to do that, you can integrated this with mod\_md. Let's
say you have a script for that in `/usr/bin/acme-setup-dns` you configure
Apache with:

```
MDChallengeDns01 /usr/bin/acme-setup-dns
```

and Apache will call this script when it needs to setup/teardown a DNS challenge
record for a domain.

Assuming you want a certificate for `\*.mydomain.com`, mod\_md will call:

```
/usr/bin/acme-setup-dns setup mydomain.com challenge-data
# this needs to remove all existing DNS TXT records for 
# _acme-challenge.mydomain.com and create a new one with 
# content "challenge-data"
```

and afterwards it will call

```
/usr/bin/acme-setup-dns teardown mydomain.com
# this needs to remove all existing DNS TXT records for 
# _acme-challenge.mydomain.com
```

### Monitoring

Apache has a standard module for monitoring: `mod_status`.
mod\_md contributes a section and makes monitoring your
domains easy.

You see all your MDs listed alphabetically, the domain names they contain,
an overall status, expiration times and specific settings. The settings
show your selection of renewal times (or the default), the CA that is used,
etc.

The 'Renewal' column will show activity and error descriptions for certificate
renewals. This should make life easier for people to find out if everything
is all right or what went wrong.

If there is an error with an MD it will be shown here as well. This let's
you assess problems without digging through your server logs.

There is also a new '`md-status`' handler available to give you the MD information
from '`server-status`' in JSON format. You configure it as

```
<Location "/md-status">
  SetHandler md-status
  Require host example.com
</Location>
```

on your server. As with '`server-status`' you **must** protect
the `md-status` output from public view using authorization restrictions (such as `mod_authz_host`).

If you just want to check the JSON status of a specific domain, simply append
that to your status url:

```
> curl https://<yourhost>/md-status/another-domain.org
{
  "name": "another-domain.org",
  "domains": [
    "another-domain.org",
    "www.another-domain.org"
  ],
  ...
```

This JSON status also shows a log of activities when domains are renewed:

```
{
"when": "Wed, 19 Jun 2019 14:45:58 GMT",
"type": "progress", "detail": "The certificate for the managed domain has been renewed successfully and can be used. A graceful server restart now is recommended."
},{
"when": "Wed, 19 Jun 2019 14:45:58 GMT",
"type": "progress", "detail": "Retrieving certificate chain for test-901-003-1560955549.org"
},{
"when": "Wed, 19 Jun 2019 14:45:58 GMT",
"type": "progress", "detail": "Waiting for finalized order to become valid"
},{
"when": "Wed, 19 Jun 2019 14:45:50 GMT",
"type": "progress", "detail": "Submitting CSR to CA for test-901-003-1560955549.org"
},
...
```

You will also find this information in the file `job.json` in your staging and,
when activated, domains directory. This allows you to inspect these at
any later point in time as well.

In addition, there is `MDCertificateStatus` which
gives access to relevant certificate information in JSON format.

### Stapling

If you want to try the stapling in one Managed Domain alone at first,
configure:

```
<MDomain mydomain.net>
  MDStapling on
</MDomain>
```

and use the '`server-status`' and/or `MDMessageCmd` to see how it operates. You will
see if Stapling information is there, how long it is valid, from where it came and
when it will be refreshed.

If this all works to your satisfaction, you can switch it on for all your
certificates or just your managed ones.

The existing stapling implementation by mod\_ssl is used by many sites
for years. There are two main differences between the mod\_ssl and mod\_md
one:

1. On demand vs. scheduled: mod\_ssl retrieves the stapling information
   when it is requested, e.g. on a new connection. mod\_md retrieves it
   right at server start and after 2/3rds of its lifetime.
2. In memory vs. persisted: mod\_ssl *can* persist this
   information, but most example configurations use a memory cache. mod\_md
   always stores in the file system.

If you are unlucky and restart your server during an outage of your CA's
OCSP service, your users may no longer reach your sites. Without persistence
your server cannot provide the client with the data and the client browser
cannot get it as well, since the OCSP service is not responding.

The implementation in mod\_md will have persisted it, load it again after
restart and have it available for incoming connections. A day or two before
this information expires, it will renew it, making it able to cope with
a long OCSP service downtime.

Due to backward compatibility, the existing implementation in mod\_ssl could
not be changed drastically. For example, mod\_ssl is unable to add a dependency
to mod\_watchdog without braking many existing installations (that do not load it).

### Directives

- ![](../images/down.gif) [MDActivationDelay](#mdactivationdelay)
- ![](../images/down.gif) [MDBaseServer](#mdbaseserver)
- ![](../images/down.gif) [MDCACertificateFile](#mdcacertificatefile)
- ![](../images/down.gif) [MDCAChallenges](#mdcachallenges)
- ![](../images/down.gif) [MDCertificateAgreement](#mdcertificateagreement)
- ![](../images/down.gif) [MDCertificateAuthority](#mdcertificateauthority)
- ![](../images/down.gif) [MDCertificateCheck](#mdcertificatecheck)
- ![](../images/down.gif) [MDCertificateFile](#mdcertificatefile)
- ![](../images/down.gif) [MDCertificateKeyFile](#mdcertificatekeyfile)
- ![](../images/down.gif) [MDCertificateMonitor](#mdcertificatemonitor)
- ![](../images/down.gif) [MDCertificateProtocol](#mdcertificateprotocol)
- ![](../images/down.gif) [MDCertificateStatus](#mdcertificatestatus)
- ![](../images/down.gif) [MDChallengeDns01](#mdchallengedns01)
- ![](../images/down.gif) [MDChallengeDns01Version](#mdchallengedns01version)
- ![](../images/down.gif) [MDCheckInterval](#mdcheckinterval)
- ![](../images/down.gif) [MDContactEmail](#mdcontactemail)
- ![](../images/down.gif) [MDDriveMode](#mddrivemode)
- ![](../images/down.gif) [MDExternalAccountBinding](#mdexternalaccountbinding)
- ![](../images/down.gif) [MDHttpProxy](#mdhttpproxy)
- ![](../images/down.gif) [MDInitialDelay](#mdinitialdelay)
- ![](../images/down.gif) [MDMatchNames](#mdmatchnames)
- ![](../images/down.gif) [MDMember](#mdmember)
- ![](../images/down.gif) [MDMembers](#mdmembers)
- ![](../images/down.gif) [MDMessageCmd](#mdmessagecmd)
- ![](../images/down.gif) [MDMustStaple](#mdmuststaple)
- ![](../images/down.gif) [MDNotifyCmd](#mdnotifycmd)
- ![](../images/down.gif) [MDomain](#mdomain)
- ![](../images/down.gif) [<MDomainSet>](#mdomainsetsection)
- ![](../images/down.gif) [MDPortMap](#mdportmap)
- ![](../images/down.gif) [MDPrivateKeys](#mdprivatekeys)
- ![](../images/down.gif) [MDProfile](#mdprofile)
- ![](../images/down.gif) [MDProfileMandatory](#mdprofilemandatory)
- ![](../images/down.gif) [MDRenewMode](#mdrenewmode)
- ![](../images/down.gif) [MDRenewViaARI](#mdrenewviaari)
- ![](../images/down.gif) [MDRenewWindow](#mdrenewwindow)
- ![](../images/down.gif) [MDRequireHttps](#mdrequirehttps)
- ![](../images/down.gif) [MDRetryDelay](#mdretrydelay)
- ![](../images/down.gif) [MDRetryFailover](#mdretryfailover)
- ![](../images/down.gif) [MDServerStatus](#mdserverstatus)
- ![](../images/down.gif) [MDStapleOthers](#mdstapleothers)
- ![](../images/down.gif) [MDStapling](#mdstapling)
- ![](../images/down.gif) [MDStaplingKeepResponse](#mdstaplingkeepresponse)
- ![](../images/down.gif) [MDStaplingRenewWindow](#mdstaplingrenewwindow)
- ![](../images/down.gif) [MDStoreDir](#mdstoredir)
- ![](../images/down.gif) [MDStoreLocks](#mdstorelocks)
- ![](../images/down.gif) [MDWarnWindow](#mdwarnwindow)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_md)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_md)

[![top](../images/up.gif)](#page-header)

## MDActivationDelay Directive [¶](#mdactivationdelay "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | How long to delay activation of new certificates |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDActivationDelay duration` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.42 and later |

[![top](../images/up.gif)](#page-header)

## MDBaseServer Directive [¶](#mdbaseserver "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Control if base server may be managed or only virtual hosts. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDBaseServer on|off` |
| [Default:](mod__directive-dict.md#Default) | `MDBaseServer off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

Controls if the base server, the one outside all VirtualHosts should be managed by
mod\_md or not. By default, it will not. For the very reason that
it may have confusing side-effects. It is recommended that you have virtual hosts
for all managed domains and do not rely on the global, fallback server configuration.

[![top](../images/up.gif)](#page-header)

## MDCACertificateFile Directive [¶](#mdcacertificatefile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | File containing x509 trust anchors to verify ACME servers. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCACertificateFile file` |
| [Default:](mod__directive-dict.md#Default) | `MDCACertificateFile none` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

This is mainly used in test setups where the module needs to
connect to a test ACME server that has its own root certificate.
People who run an enterprise wide internal CA can use this when
they run their own ACME servers.

Use "none" as path to disable explicitly.

[![top](../images/up.gif)](#page-header)

## MDCAChallenges Directive [¶](#mdcachallenges "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Type of ACME challenge used to prove domain ownership. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCAChallenges name [ name ... ]` |
| [Default:](mod__directive-dict.md#Default) | `MDCAChallenges tls-alpn-01 http-01 dns-01` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

Sets challenge types (in order of preference) when proving domain ownership.
Supported by the module are the challenge methods 'tls-alpn-01', 'dns-01'
and 'http-01'. The module will look at the overall configuration of the server
to find out which methods can be used.

If the server listens on port 80, for example, the 'http-01' method is available.
The prerequisite for 'dns-01' is a configured `MDChallengeDns01` command.
'tls-alpn-01' is described above in 'https: Challenges'.

This auto selection works for most setups. But since Apache is a very powerful
server with many configuration options, the situation is not clear for all
possible cases. For example: it may listen on multiple IP addresses where some
are reachable on `https:` and some not.

If you configure `MDCAChallenges` directly, this auto selection is disabled.
Instead, the module will use the configured challenge list when talking to
the ACME server (a challenge type must be offered by the server as well).
This challenges are examined in the order specified.

[![top](../images/up.gif)](#page-header)

## MDCertificateAgreement Directive [¶](#mdcertificateagreement "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | You confirm that you accepted the Terms of Service of the Certificate Authority. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCertificateAgreement accepted` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

When you use mod\_md to obtain a certificate, you become a customer of the CA (e.g. Let's Encrypt). That means you need to read and agree to their Terms of Service,
so that you understand what they offer and what they might exclude or require from you.
mod\_md cannot, by itself, agree to such a thing.

[![top](../images/up.gif)](#page-header)

## MDCertificateAuthority Directive [¶](#mdcertificateauthority "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The URL(s) of the ACME Certificate Authority to use. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCertificateAuthority url` |
| [Default:](mod__directive-dict.md#Default) | `MDCertificateAuthority letsencrypt` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

The URL(s) where the CA offers its service.
Instead of the actual URL, you may use 'letsencrypt' or 'buypass'.

If you configure more than one URL, each one is tried in a round-robin
fashion after a number of failures. You can configure how quickly or
delayed that happens via the `MDRetryDelay` and
`MDRetryFailover` directives. The default setting
makes a failover after about half a day of trying.

All other settings apply to each of these URLs. It is therefore
not possible to have two with different
`MDExternalAccountBinding`s, for example.

For testing, CAs commonly offer a second service URL.
The 'test' service does not give certificates valid in a browser,
but are more relaxed in regard to rate limits.
This allows for verification of your own setup before switching
to the production service URL.

### LE Test Setup

```
MDCertificateAuthority https://acme-staging-v02.api.letsencrypt.org/directory
```

[![top](../images/up.gif)](#page-header)

## MDCertificateCheck Directive [¶](#mdcertificatecheck "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set name and URL pattern for a certificate monitoring site. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCertificateCheck name url` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.42 and later |

[![top](../images/up.gif)](#page-header)

## MDCertificateFile Directive [¶](#mdcertificatefile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify a static certificate file for the MD. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCertificateFile path-to-pem-file` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

This is used inside a `MDomainSet` and specifies
the file holding the certificate chain for the Managed Domain. The matching
key is specified via `MDCertificateKeyFile`.

### Example

```
<MDomain mydomain.com>
  MDCertificateFile /etc/ssl/my.cert
  MDCertificateKeyFile /etc/ssl/my.key
</MDomain>
```

This is that equivalent of the mod\_ssl
`SSLCertificateFile` directive. It
has several uses.

If you want to migrate an existing domain, using static files, to
automated Let's Encrypt certificates, for one. You define the
`MDomainSet`, add the files here and remove
the `SSLCertificateFile` from
your VirtualHosts.

This will give you the same as before, with maybe less repeating lines
in your configuration. Then you can add `MDRenewMode`
'always' to it and the module will get a new certificate before
the one from the file expires. When it has done so, you remove the
`MDCertificateFile` and reload the server.

Another use case is that you renew your Let's Encrypt certificates with
another ACME clients, for example the excellent
[certbot](https://certbot.eff.org). Then let your MDs point
to the files from certbot and have both working together.

[![top](../images/up.gif)](#page-header)

## MDCertificateKeyFile Directive [¶](#mdcertificatekeyfile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify a static private key for for the static cerrtificate. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCertificateKeyFile path-to-file` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

This is used inside a `MDomainSet` and specifies
the file holding the private key for the Managed Domain. The matching
certificate is specified via `MDCertificateFile`.

This is that equivalent of the mod\_ssl
`SSLCertificateKeyFile` directive.

[![top](../images/up.gif)](#page-header)

## MDCertificateMonitor Directive [¶](#mdcertificatemonitor "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The URL of a certificate log monitor. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCertificateMonitor name url` |
| [Default:](mod__directive-dict.md#Default) | `MDCertificateMonitor crt.sh https://crt.sh?q=` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

This is part of the '`server-status`' HTML user interface and has nothing to
do with the core functioning itself. It defines the link offered on that
page for easy checking of a certificate monitor. The SHA256 fingerprint
of the certificate is appended to the configured url.

Certificate Monitors offer supervision of Certificate Transparency (CT)
Logs to track the use of certificates for domains. The least you may see
is that Let's Encrypt (or whichever CA you have configured) has entered
your certificates into the CTLogs.

Caveat: certificate logs update and monitor's intakes of those
updates suffer some delay. This varies between logs and monitors. A
brand new certificate will not be known immediately.

[![top](../images/up.gif)](#page-header)

## MDCertificateProtocol Directive [¶](#mdcertificateprotocol "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The protocol to use with the Certificate Authority. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCertificateProtocol protocol` |
| [Default:](mod__directive-dict.md#Default) | `MDCertificateProtocol ACME` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

Specifies the protocol to use. Currently, only `ACME` is supported.

[![top](../images/up.gif)](#page-header)

## MDCertificateStatus Directive [¶](#mdcertificatestatus "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Exposes public certificate information in JSON. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCertificateStatus on|off` |
| [Default:](mod__directive-dict.md#Default) | `MDCertificateStatus on` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

When enabled, a resources is available in Managed Domains at
'https://domain/.httpd/certificate-status' that returns a JSON
document list key properties of the current and of a renewed
certificate - when available.

### Example

```
{
  "valid-until": "Thu, 29 Aug 2019 16:06:35 GMT",
  "valid-from": "Fri, 31 May 2019 16:06:35 GMT",
  "serial": "03039C464D454EDE79FCD2CAE859F668F269",
  "sha256-fingerprint": "1ff3bfd2c7c199489ed04df6e29a9b4ea6c015fe8a1b0ce3deb88afc751e352d"
  "renewal" : { ...renewed cert information... }
}
```

[![top](../images/up.gif)](#page-header)

## MDChallengeDns01 Directive [¶](#mdchallengedns01 "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set the command for setup/teardown of dns-01 challenges |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDChallengeDns01 path-to-command` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

Define a program to be called when the `dns-01` challenge needs to be setup/torn down.
The program is given the argument `setup` or `teardown` followed by the domain name.
For `setup` the challenge content is additionally given. When
`MDChallengeDns01Version` is set to 2,
the `teardown` also gets the challenge content as argument.

You do not need to specify this, as long as a 'http:' or 'https:' challenge
method is possible. However, Let's Encrypt makes 'dns-01' the only
challenge available for wildcard certificates. If you require
one of those, you need to configure this.

It is now possible to use this directive inside a `MDomain`
section to specify a specific command for that domain. This allows to configure
a script specific for the particular DNS provider involved.

See the section about wildcard certificates above for more details.

[![top](../images/up.gif)](#page-header)

## MDChallengeDns01Version Directive [¶](#mdchallengedns01version "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set the type of arguments to call MDChallengeDns01 with |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDChallengeDns01Version 1|2` |
| [Default:](mod__directive-dict.md#Default) | `MDChallengeDns01Version 1` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.58 and later |

Set the way `MDChallengeDns01`
command is invoked, e.g the number and types of arguments.
See `MDChallengeDns01`
for the differences.

This setting is global and cannot be varied per domain.

[![top](../images/up.gif)](#page-header)

## MDCheckInterval Directive [¶](#mdcheckinterval "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines how often certificates are checked |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDCheckInterval duration` |
| [Default:](mod__directive-dict.md#Default) | `MDCheckInterval 12h` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.60 and later |

The time between certificate checks. By default, the validity
and need for renewals is checked twice a day. This interval is
not followed precisely. Instead the module randomly applies
a +/-50% jitter to it. With the default of 12 hours, this
means the actual time between runs varies between 6 and 18
hours, jittered anew every run. This helps to mitigate
traffic peaks at ACME servers.

The minimum duration you may configure is 1 second. It is
not recommended to use such short times in production.

[![top](../images/up.gif)](#page-header)

## MDContactEmail Directive [¶](#mdcontactemail "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Email address used for account registration |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDContactEmail address` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.42 and later |

The ACME protocol requires you to give a contact url when you sign up. Currently,
Let's Encrypt wants an email address (and it will use it to inform you about renewals
or changed terms of service). `mod_md` uses the `MDContactEmail` directive email in
your Apache configuration, so please specify the correct address there.
If `MDContactEmail` is not present, `mod_md` will use the
`ServerAdmin` directive.

[![top](../images/up.gif)](#page-header)

## MDDriveMode Directive [¶](#mddrivemode "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | former name of MDRenewMode. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDDriveMode always|auto|manual` |
| [Default:](mod__directive-dict.md#Default) | `MDDriveMode auto` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

This directive exists for backward compatibility as the old name for
`MDRenewMode`.

[![top](../images/up.gif)](#page-header)

## MDExternalAccountBinding Directive [¶](#mdexternalaccountbinding "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set the external account binding keyid and hmac values to use at CA |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDExternalAccountBinding key-id hmac-64 | none | file` |
| [Default:](mod__directive-dict.md#Default) | `MDExternalAccountBinding none` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.52 and later |

Configure values for ACME "External Account Binding", a feature
of the ACME standard that allows clients to bind registrations
to an existing customer account on ACME servers.

Let's Encrypt does not require those, but other ACME CAs do.
Check with your ACME CA if you need those and how to obtain the
values. They are two strings, a key identifier and a base64 encoded
'hmac' value.

You can configure those globally or for a specific MDomain. Since
these values allow anyone to register under the same account, it is
advisable to give the configuration file restricted permissions,
e.g. root only.

The value can also be taken from a JSON file, to keep more open
permissions on the server configuration and restrict the ones on that
file. The JSON itself is:

### EAB JSON Example file

```
{"kid": "kid-1", "hmac": "zWND..."}
```

If you change EAB values, the new ones will be used when the next
certificate renewal is due.

[![top](../images/up.gif)](#page-header)

## MDHttpProxy Directive [¶](#mdhttpproxy "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Define a proxy for outgoing connections. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDHttpProxy url` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

Use a http proxy to connect to the `MDCertificateAuthority`. Define this
if your webserver can only reach the internet with a forward proxy.

[![top](../images/up.gif)](#page-header)

## MDInitialDelay Directive [¶](#mdinitialdelay "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | How long to delay the first certificate check. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDInitialDelay duration` |
| [Default:](mod__directive-dict.md#Default) | `MDInitialDelay 0s` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.66 and later |

The amount of time to wait after the server start to check
renewals of certificates. By default this occurs right away.

[![top](../images/up.gif)](#page-header)

## MDMatchNames Directive [¶](#mdmatchnames "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines how DNS names are matched to vhosts |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDMatchNames all|servernames` |
| [Default:](mod__directive-dict.md#Default) | `MDMatchNames all` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.58 and later |

The mode `all` is the behavior as in all previous versions. Both
`ServerName`
and `ServerAlias` are inspected
to find the `MDomain` matching a VirtualHost.
This automatically detects coverage, even when you only have added
one of the names to an MDomain.

However, this auto-magic has drawbacks in more complex setups. If you set
this directive to `servernames`, only the ServerName of a virtual host is
used for matching. ServerAliases are disregarded then, for matching.
Aliases will still be added to the certificate obtained, unless you also
run `MDMembers manual`.

Another advantage of `servernames` is that it gives you more flexibility
with sub-domains and wildcards. You can define one MDomain with a wildcard
and have other MDomains for specific sub-domain names.

[![top](../images/up.gif)](#page-header)

## MDMember Directive [¶](#mdmember "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Additional hostname for the managed domain. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDMember hostname` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

Instead of listing all dns names on the same line, you may use
`MDMember` to add such names
to a managed domain.

### Example

```
<MDomain example.org>
    MDMember www.example.org
    MDMember mail.example.org
</MDomain>
```

If you use it in the global context, outside a specific MD, you can only
specify one value, 'auto' or 'manual' as the default for all other MDs. See
`MDomain` for a
description of these special values.

[![top](../images/up.gif)](#page-header)

## MDMembers Directive [¶](#mdmembers "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Control if the alias domain names are automatically added. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDMembers auto|manual` |
| [Default:](mod__directive-dict.md#Default) | `MDMembers auto` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

Defines if the `ServerName` and
`ServerAlias` values of a VirtualHost
are automatically added to the members of a Managed Domain or not.

[![top](../images/up.gif)](#page-header)

## MDMessageCmd Directive [¶](#mdmessagecmd "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Handle events for Manage Domains |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDMessageCmd path-to-cmd optional-args` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

This command gets called when one of the following events happen for
a Managed Domain: "renewed", "installed", "expiring", "errored", "renewing", "challenge-setup:type:domain", "ocsp-renewed", "ocsp-errored". The command may
be invoked for more than these in the future and ignore events
it is not prepared to handle.

This is the more flexible companion to `MDNotifyCmd`.

### Example

```
MDMessageCmd /etc/apache/md-message
```

`# will be invoked when a new certificate for mydomain.org is available as:
/etc/apache/md-message renewed mydomain.com`

The program should not block, as the module will wait for it to finish. A
return code other than 0 is regarded as an error.

'errored' is no immediate cause for concern since renewal is attempted
early enough to allow the internet to come back. This is reported at most
once per hour.

'expiring' should be taken serious. It is issued when the
`MDWarnWindow` is reached. By default this is
10% of the certificate lifetime, so for Let's Encrypt this currently
means 9 days before it expires. The warning is repeated at most once
a day.

'renewed' means that a new certificate has been obtained and is stored
in the 'staging' area in the MD store. It will be activated on the next
server restart/reload.

'installed' is triggered when a new certificate has been transferred from
staging into the domains location in MD store. This happens at server
startup/reload. Different to all other invocations, `MDMessageCmd` is run
with root permissions (on \*nix systems) and has access to the certificate
files (and keys). Certificates needed for other applications or
in different formats can be processed on this event.

'renewing' event is triggered before starting renew process for the managed
domain. Should the command return != 0 for this reason, renew will be
aborted and repeated on next cycle. Some cluster setups use this to
allow renewals to run only on a single node.

'challenge-setup:type:domain' event is triggered when the challenge data for a domain has
been created. This is invoked before the ACME server is told to check for it.
The type is one of the ACME challenge types. This is invoked for every
DNS name in a MDomain. Cluster setups may use this event to distribute
challenge files to all nodes in a cluster.

'ocsp-errored' happens when `MDStapling`
is enabled for a domain, this indicates
that an error was encountered retrieving the OCSP response from the
Certificate Authority. mod\_md will continue trying.

'ocsp-renewed' is triggered when a new OCSP response has been
successfully obtained for a domain's certificate. This event fires
at most once per day.

[![top](../images/up.gif)](#page-header)

## MDMustStaple Directive [¶](#mdmuststaple "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Control if new certificates carry the OCSP Must Staple flag. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDMustStaple on|off` |
| [Default:](mod__directive-dict.md#Default) | `MDMustStaple off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

Defines if newly requested certificate should have the OCSP Must Staple flag
set or not. If a certificate has this flag, the server is required to send a
OCSP stapling response to every client. This only works if you configure
`mod_ssl` to generate this (see `SSLUseStapling`
and friends).

[![top](../images/up.gif)](#page-header)

## MDNotifyCmd Directive [¶](#mdnotifycmd "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Run a program when a Managed Domain is ready. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDNotifyCmd path [ args ]` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

The configured executable is run when a Managed Domain has signed up or
renewed its certificate. It is given the name of the processed MD as
additional arguments (after the parameters specified here). It should
return status code 0 to indicate that it has run successfully.

[![top](../images/up.gif)](#page-header)

## MDomain Directive [¶](#mdomain "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Define list of domain names that belong to one group. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDomain dns-name [ other-dns-name... ] [auto|manual]` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

All the names in the list are managed as one Managed Domain (MD).
mod\_md will request one single certificate that is valid for all these names. This
directive uses the global settings (see other MD directives below). If you
need specific settings for one MD, use
the `<MDomainSet>`.

There are 2 additional settings that are necessary for a Managed Domain:
a contact Email address (via `MDContactEmail` or `ServerAdmin`)
and `MDCertificateAgreement`.
The mail address of `ServerAdmin`
is used to register at the CA (Let's Encrypt by default).
The CA may use it to notify you about
changes in its service or status of your certificates.

The second setting, `MDCertificateAgreement`,
should have the value "accepted". By specifying this, you confirm that your
accept the Terms of Service of the CA.

### Example

```
MDContactEmail admin@example.org
MDCertificateAgreement accepted
MDomain example.org www.example.org

<VirtualHost *:443>
    ServerName example.org
    DocumentRoot htdocs/root

    SSLEngine on
</VirtualHost>

<VirtualHost *:443>
    ServerName www.example.org
    DocumentRoot htdocs/www

    SSLEngine on
</VirtualHost>
```

There are two special names that you may use in this directive: 'manual'
and 'auto'. This determines if a Managed Domain shall have exactly the
name list as is configured ('manual') or offer more convenience. With 'auto'
all names of a virtual host are added to a MD. Conveniently, 'auto' is also
the default.

### Example

```
MDomain example.org

<VirtualHost *:443>
    ServerName example.org
    ServerAlias www.example.org
    DocumentRoot htdocs/root

    SSLEngine on
</VirtualHost>

MDomain example2.org auto

<VirtualHost *:443>
    ServerName example2.org
    ServerAlias www.example2.org
    ...
</VirtualHost>
```

In this example, the domain 'www.example.org' is automatically added to
the MD 'example.org'. Similarly for 'example2.org' where 'auto' is configured
explicitly. Whenever you add more ServerAlias names to this
virtual host, they will be added as well to the Managed Domain.

If you prefer to explicitly declare all the domain names, use 'manual' mode.
An error will be logged if the names do not match with the expected ones.

[![top](../images/up.gif)](#page-header)

## <MDomainSet> Directive [¶](#mdomainsetsection "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Container for directives applied to the same managed domains. |
| [Syntax:](mod__directive-dict.md#Syntax) | `<MDomainSet dns-name [ other-dns-name... ]>...</MDomainSet>` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

This is the directive `MDomain`
with the added possibility to add setting just for this MD. In fact,
you may also use "<MDomain ..>" as a shortcut.

This allows you to configure an MD that uses another Certificate Authority,
have other renewal requirements, etc.

### Example

```
<MDomain sandbox.example.org>
    MDCertificateAuthority   https://someotherca.com/ACME
</MDomain>
```

A common use case is to configure https: requirements separately for
your domains.

### Example

```
<MDomain example.org>
    MDRequireHttps temporary
</MDomain>
```

[![top](../images/up.gif)](#page-header)

## MDPortMap Directive [¶](#mdportmap "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Map external to internal ports for domain ownership verification. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDPortMap map1 [ map2 ]` |
| [Default:](mod__directive-dict.md#Default) | `MDPortMap http:80 https:443` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

The ACME protocol provides two methods to verify domain ownership via
HTTP: one that uses 'http:' urls (port 80) and one for 'https:' urls
(port 443). If your server is not reachable by at least one
of the two, ACME may only work by configuring your DNS server,
see `MDChallengeDns01`.

On most public facing servers, 'http:' arrives on port 80 and
'https:' on port 443. The module checks the ports your Apache server
is listening on and assumes those are available. This means that
when your server does not listen on port 80, it assumes that
'http:' requests from the internet will not work.

This is a good guess, but it may be wrong. For example, your Apache
might listen to port 80, but your firewall might block it. 'http:'
is only available in your intranet. So, the module will falsely assume
that Let's Encrypt can use 'http:' challenges with your server. This
will then fail, because your firewall will drop those.

### Example

```
MDPortMap http:- https:8433
```

The above example shows how you can specify that 'http:' requests from
the internet will never arrive. In addition it says that 'https:' requests
will arrive on local port 8433.

This is necessary if you have port forwarding in place, your server may be
reachable from the Internet on port 443, but the local port that httpd uses is
another one. Your server might only listen on ports 8443 and 8000, but be reached
on ports 443 and 80 (from the internet).

[![top](../images/up.gif)](#page-header)

## MDPrivateKeys Directive [¶](#mdprivatekeys "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set type and size of the private keys generated. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDPrivateKeys type [ params... ]` |
| [Default:](mod__directive-dict.md#Default) | `MDPrivateKeys RSA 2048` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

Defines what kind of private keys are generated for a managed domain and with
what parameters. You can have more than one private key type configured and
the module will obtain a certificate for each key.

For example, you may configure an RSA and an Elliptic Curve (EC) key, so
that 2 certificates are created for a domain. On a client connection, the first
one supported by the client will then be used.

Since EC keys and certificates are smaller, you might want to offer
them first for all compatible (modern) clients. This can enable
faster handshakes. Add an RSA key type to support older clients.

### Example

```
MDPrivateKeys secp256r1 rsa3072
```

The EC types supported depend on the CA you use. For Let's encrypt
the supported curves include 'secp256r1' and 'secp384r1'.

Each key and certificate type is stored in its own file in the
MD store. The key type is part of the file name with some backward
compatible naming for RSA certificates. So you may continue sharing
these files with other applications.

Please note that this setting only has an effect on new keys. Any existing
private key you have remains unaffected. Also, this only affects private keys
generated for certificates. ACME account keys are unaffected by this.

[![top](../images/up.gif)](#page-header)

## MDProfile Directive [¶](#mdprofile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Use a specific ACME profile from the CA |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDProfile name` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.64 and later |

This about a non-standard ACME extension by Let's Encrypt.

Let's Encrypt supports Certificate Profiles in their CA. This,
among some other details, let's you select the lifetime of the
certificates you get. The "classic" profile is the default and
will keep the 90 days, the "tlsserver" profile is also 90 days
with a max of 25 Subject Alternative Names. The "shortlived"
profile will issue certificates with only 6 days of validity.

If you do not change your `mod_md` configuration, you will
continue to get the 90 days certificates. Should you believe
that a shorter lifetime is beneficial for you (and take the
risk that the renewal time is way shorter),
you can configure the profile to use via 'MDProfile shortlived'.

The profile names are defined by the CA. If a profile you
configure is not available, no profile will be used and
the certificate will be issue according to what the CA
considers default.

See `MDProfileMandatory`
on how to disable defaults for profiles.

[![top](../images/up.gif)](#page-header)

## MDProfileMandatory Directive [¶](#mdprofilemandatory "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Control if an MDProfile is mandatory. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDProfileMandatory on|off` |
| [Default:](mod__directive-dict.md#Default) | `MDProfileMandatory off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.64 and later |

Controls if a `MDProfile`
you configure is mandatory or not. When mandatory and the CA
does not offer a configured profile, the certificate
renewal will fail.

When not mandatory and a profile is not offered by the CA,
renewals will be performed without specifying a profile and
the CA will issue a certificates according to its defaults.

[![top](../images/up.gif)](#page-header)

## MDRenewMode Directive [¶](#mdrenewmode "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Controls if certificates shall be renewed. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDRenewMode always|auto|manual` |
| [Default:](mod__directive-dict.md#Default) | `MDRenewMode auto` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

In the default 'auto' mode, the module will do what makes most sense
of each Managed Domain. For a domain without any certificates, it will
obtain them from the Certificate Authority.

However, if you have defined an MD that is not used by any of Apache's
VirtualHosts, it will not bother. And for MDs with static certificate
files (see `MDCertificateFile`),
it assumes that you have your own source, and will not renew them either.

You can override this default in either way. If you specify 'always',
the module will renew certificates for an MD, regardless if the
domains are in use or if there are static files.

For the opposite effect, configure 'manual' and no renewal will
be attempted.

[![top](../images/up.gif)](#page-header)

## MDRenewViaARI Directive [¶](#mdrenewviaari "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | usage of the ACME ARI extension (rfc9773). |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDRenewViaARI on|off` |
| [Default:](mod__directive-dict.md#Default) | `MDRenewViaARI on` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

En-/Disable certificate renewals triggered via the ACME ARI
extension (rfc9773). These renewals happen \*in addition\* to
the mechanism controlled by `MDRenewWindow`.

ACME ARI allows an ACME CA to somewhat shape incoming renewal
traffic. More importantly though, it can inform clients of
urgent renewals, e.g. when a certificate or part of its chain
has been revoked.

[![top](../images/up.gif)](#page-header)

## MDRenewWindow Directive [¶](#mdrenewwindow "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Control when a certificate will be renewed. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDRenewWindow duration` |
| [Default:](mod__directive-dict.md#Default) | `MDRenewWindow 33%` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

If the validity of the certificate falls below duration, `mod_md`
will get a new signed certificate.

Normally, certificates are valid for around 90 days and mod\_md will renew
them the earliest 33% of their complete lifetime before they expire (so for
90 days validity, 30 days before it expires). If you think this is not what
you need, you can specify either the exact time, as in:

### Example

```
# 21 days before expiry
MDRenewWindow 21d 
# 30 seconds (might be close)
MDRenewWindow 30s
# 10% of the cert lifetime
MDRenewWindow 10%
```

When in auto drive mode, the module will check every 12 hours at least
what the status of the managed domains is and if it needs to do something.
On errors, for example when the CA is unreachable, it will initially retry
after some seconds. Should that continue to fail, it will back off to a
maximum interval of hourly checks.

[![top](../images/up.gif)](#page-header)

## MDRequireHttps Directive [¶](#mdrequirehttps "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Redirects http: traffic to https: for Managed Domains. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDRequireHttps off|temporary|permanent` |
| [Default:](mod__directive-dict.md#Default) | `MDRequireHttps off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

This is a convenience directive to ease http: to https: migration of
your Managed Domains. With:

### Example

```
MDRequireHttps temporary
```

you announce that you want all traffic via http: URLs to be redirected
to the https: ones, for now. This is safe and you can remove this again at
any time.

**The following has consequences:** if you want client to **no longer** use the
http: URLs, configure:

### Permanent (for at least half a year!)

```
MDRequireHttps permanent
```

This does two things:

1. All request to the `http:` resources are redirected to the
   same url with the `https:` scheme using the `301`
   status code. This tells clients that this is intended to be forever and
   the should update any links they have accordingly.
2. All answers to `https:` requests will carry the header
   `Strict-Transport-Security` with a life time of half a year.
   This tells the browser that it **never** (for half a year) shall use `http:`
   when talking to this domain name. Browsers will, after having seen this, refuse
   to contact your unencrypted site. This prevents malicious middleware to
   downgrade connections and listen/manipulate the traffic. Which is good. But
   you cannot simply take it back again.

You can achieve the same with `mod_alias` and some
`Redirect` configuration,
basically. If you do it yourself, please make sure to exclude the paths
/.well-known/\* from your redirection, otherwise mod\_md
might have trouble signing on new certificates.

If you set this globally, it applies to all managed domains. If you want
it for a specific domain only, use:

### Example

```
<MDomain xxx.yyy>
  MDRequireHttps temporary
</MDomain>
```

[![top](../images/up.gif)](#page-header)

## MDRetryDelay Directive [¶](#mdretrydelay "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Time length for first retry, doubled on every consecutive error. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDRetryDelay duration` |
| [Default:](mod__directive-dict.md#Default) | `MDRetryDelay 30s` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.54 and later |

The amount of time to wait after an error before trying
to renew a certificate again. This duration is doubled after
each consecutive error with a maximum of 24 hours.

It is kept separate for each certificate renewal. Meaning an error
on one MDomain does not delay the renewals of other domains.

In mod\_md v2.6.1, the default delay has been increased from 5
seconds to 30.

[![top](../images/up.gif)](#page-header)

## MDRetryFailover Directive [¶](#mdretryfailover "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | The number of errors before a failover to another CA is triggered |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDRetryFailover number` |
| [Default:](mod__directive-dict.md#Default) | `MDRetryFailover 13` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.54 and later |

The number of consecutive errors on renewing a certificate before
another CA is selected. This only applies to configurations that
have more than one `MDCertificateAuthority`
specified.

[![top](../images/up.gif)](#page-header)

## MDServerStatus Directive [¶](#mdserverstatus "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Control if Managed Domain information is added to `server-status`. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDServerStatus on|off` |
| [Default:](mod__directive-dict.md#Default) | `MDServerStatus off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | The default was changed to 'off' in 2.4.69 |

If enabled, adds a section to the
`mod_status` '`server-status`' handler
output which lists all Managed Domains with the DNS
names, renewal status, lifetimes and main properties.

As with '`md-status`', the '`server-status`' output
**must** be protected from public view
using appropriate authorization restrictions.

[![top](../images/up.gif)](#page-header)

## MDStapleOthers Directive [¶](#mdstapleothers "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable stapling for certificates not managed by mod\_md. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDStapleOthers on|off` |
| [Default:](mod__directive-dict.md#Default) | `MDStapleOthers on` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.42 and later |

This setting only takes effect when `MDStapling` is enabled. It controls
if `mod_md` should also provide stapling information for certificates
that are not directly controlled by it, e.g. renewed via an ACME CA.

[![top](../images/up.gif)](#page-header)

## MDStapling Directive [¶](#mdstapling "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable stapling for all or a particular MDomain. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDStapling on|off` |
| [Default:](mod__directive-dict.md#Default) | `MDStapling off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.42 and later |

`mod_md` offers an implementation for providing OCSP stapling information.
This is an alternative to the one provided by `mod_ssl`. For backward
compatibility, this is disabled by default.

The stapling can be switched on for all certificates on the server or
for an individual `MDomain`.
This will replace any stapling configuration
in `mod_ssl` for these hosts. When disabled, the `mod_ssl` stapling
will do the work (if it is itself enabled, of course). This allows for
a gradual shift over from one implementation to the other.

The stapling of `mod_md` will also work for domains where the certificates
are not managed by this module (see `MDStapleOthers` for how to control this).
This allows use of the new stapling without using any ACME certificate
management.

[![top](../images/up.gif)](#page-header)

## MDStaplingKeepResponse Directive [¶](#mdstaplingkeepresponse "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Controls when old responses should be removed. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDStaplingKeepResponse duration` |
| [Default:](mod__directive-dict.md#Default) | `MDStaplingKeepResponse 7d` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.42 and later |

This time window specifies when OCSP response data used in stapling
shall be removed from the store again. Response information older than
7 days (default) is deleted on server restart/reload. This keeps the store
from growing when certificates are renewed/reconfigured frequently.

[![top](../images/up.gif)](#page-header)

## MDStaplingRenewWindow Directive [¶](#mdstaplingrenewwindow "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Control when the stapling responses will be renewed. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDStaplingRenewWindow duration` |
| [Default:](mod__directive-dict.md#Default) | `MDStaplingRenewWindow 33%` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.42 and later |

If the validity of the OCSP response used in stapling falls below duration,
`mod_md` will obtain a new OCSP response.

The CA issuing a certificate commonly also operates the OCSP responder
service and determines how long its signed response about the validity
of a certificate are itself valid. The longer a response is valid, the longer
it can be cached which mean better overall performance for everyone.
The shorter the life time, the more rapidly certificate revocations
spread to clients. Also, service reliability is a consideration.

By adjusting the stapling renew window you can control parts of this yourself.
If you make the renew time short (e.g. a short time before the current
information expires), you gain maximum cache time. But a service outage
(down for maintenance, for example) will affect you. If you renew a long
time before expiry, updates will be made more frequent, cause more load
on the CA server infrastructure and also more coordination between
the child processes of your server.

The default is chosen as 33%, which means renewal is started when only
a third of the response lifetime is left. For a CA that issues OCSP
responses with lifetime of 3 days, this means 2 days of caching and 1 day
for renewal attempts. A service outage would have to last full 24 hours
to affect your domains.

Setting an absolute renew window, like `2d` (2 days), is also possible.

[![top](../images/up.gif)](#page-header)

## MDStoreDir Directive [¶](#mdstoredir "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Path on the local file system to store the Managed Domains data. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDStoreDir path` |
| [Default:](mod__directive-dict.md#Default) | `MDStoreDir md` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

Defines where on the local file system the Managed Domain data is stored. This is
an absolute path or interpreted relative to the server root. The default will create
a directory 'md' in your server root.

If you move this and have already data, be sure to move/copy the data first to
the new location, reconfigure and then restart the server. If you reconfigure
and restart first, the server will try to get new certificates that it thinks
are missing.

[![top](../images/up.gif)](#page-header)

## MDStoreLocks Directive [¶](#mdstorelocks "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Configure locking of store for updates |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDStoreLocks on|off|duration` |
| [Default:](mod__directive-dict.md#Default) | `MDStoreLocks off` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.4.55 and later |

Enable this to use a lock file on server startup when
`MDStoreDir` is synchronized with the server
configuration and renewed certificates are activated.

Locking is intended for setups in a cluster that have a shared
file system for `MDStoreDir`.
It will protect the activation of
renewed certificates when cluster nodes are restarted/reloaded
at the same time. Under the condition that the shared file
system does support file locking.

The default duration to obtain the lock is 5 seconds. If the log
cannot be obtained, an error is logged and the server startup will
continue. This may result in a cluster node to still use the
previous certificate afterwards.

A higher timeout will reduce that likelihood, but may delay server
startups/reloads in case the locks are not properly handled in
the underlying file system. A lock should only be held by a
httpd instance for a short duration.

[![top](../images/up.gif)](#page-header)

## MDWarnWindow Directive [¶](#mdwarnwindow "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Define the time window when you want to be warned about an expiring certificate. |
| [Syntax:](mod__directive-dict.md#Syntax) | `MDWarnWindow duration` |
| [Default:](mod__directive-dict.md#Default) | `MDWarnWindow 10%` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_md |

See `MDRenewWindow` for a description on
how you can specify the time.

The modules checks the remaining lifetime of certificates and invokes
`MDMessageCmd` when there is less than the warn
window left. With the default, this mean 9 days for certificates from
Let's Encrypt.

It also applies to Managed Domains with static certificate files (see
`MDCertificateFile`).

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_md.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_md.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
