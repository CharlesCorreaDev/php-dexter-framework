# Issues Regarding DNS and Apache HTTP Server - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/dns-caveats.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# Issues Regarding DNS and Apache HTTP Server

This page could be summarized with the statement: don't
configure Apache HTTP Server in such a way that it relies on DNS resolution
for parsing of the configuration files. If httpd requires DNS
resolution to parse the configuration files then your server
may be subject to reliability problems (ie. it might not start up),
or denial and theft of service attacks (including virtual hosts able
to steal hits from other virtual hosts).

- ![](./images/down.gif) [A Simple Example](#example)
- ![](./images/down.gif) [Denial of Service](#denial)
- ![](./images/down.gif) [The "main server" Address](#main)
- ![](./images/down.gif) [Tips to Avoid These Problems](#tips)

[![top](./images/up.gif)](#page-header)

## A Simple Example [¶](#example "Permanent link")

```
# This is a misconfiguration example, do not use on your server
<VirtualHost www.example.dom>
  ServerAdmin webgirl@example.dom
  DocumentRoot "/www/example"
</VirtualHost>
```

In order for the server to function properly, it absolutely needs
to have two pieces of information about each virtual host: the
`ServerName` and at least one
IP address that the server will bind and respond to. The above
example does not include the IP address, so httpd must use DNS
to find the address of `www.example.dom`. If for some
reason DNS is not available at the time your server is parsing
its config file, then this virtual host **will not be
configured**. It won't be able to respond to any hits
to this virtual host.

Suppose that `www.example.dom` has address 192.0.2.1.
Then consider this configuration snippet:

```
# This is a misconfiguration example, do not use on your server
<VirtualHost 192.0.2.1>
  ServerAdmin webgirl@example.dom
  DocumentRoot "/www/example"
</VirtualHost>
```

This time httpd needs to use reverse DNS to find the
`ServerName` for this virtualhost. If that reverse
lookup fails then it will partially disable the virtualhost.
If the virtual host is name-based then it will effectively be
totally disabled, but if it is IP-based then it will mostly
work. However, if httpd should ever have to generate a full
URL for the server which includes the server name (such as when a
Redirect is issued), then it will fail to generate a valid URL.

Here is a snippet that avoids both of these problems:

```
<VirtualHost 192.0.2.1>
  ServerName www.example.dom
  ServerAdmin webgirl@example.dom
  DocumentRoot "/www/example"
</VirtualHost>
```

[![top](./images/up.gif)](#page-header)

## Denial of Service [¶](#denial "Permanent link")

Consider this configuration snippet:

```
<VirtualHost www.example1.dom>
  ServerAdmin webgirl@example1.dom
  DocumentRoot "/www/example1"
</VirtualHost>
<VirtualHost www.example2.dom>
  ServerAdmin webguy@example2.dom
  DocumentRoot "/www/example2"
</VirtualHost>
```

Suppose that you've assigned 192.0.2.1 to
`www.example1.dom` and 192.0.2.2 to
`www.example2.dom`. Furthermore, suppose that
`example1.dom` has control of their own DNS. With this
config you have put `example1.dom` into a position where
they can steal all traffic destined to `example2.dom`. To
do so, all they have to do is set `www.example1.dom` to
192.0.2.2. Since they control their own DNS you can't stop them
from pointing the `www.example1.dom` record wherever they
wish.

Requests coming in to 192.0.2.2 (including all those where
users typed in URLs of the form
`http://www.example2.dom/whatever`) will all be served by
the `example1.dom` virtual host. To better understand why
this happens requires a more in-depth discussion of how httpd
matches up incoming requests with the virtual host that will
serve it. A rough document describing this [is available](vhosts__details.md).

[![top](./images/up.gif)](#page-header)

## The "main server" Address [¶](#main "Permanent link")

[Name-based
virtual host support](vhosts__name-based.md) requires httpd to know
the IP address(es) of the host that `httpd`
is running on. To get this address it uses either the global
`ServerName`
(if present) or calls the C function `gethostname`
(which should return the same as typing "hostname" at the
command prompt). Then it performs a DNS lookup on this address.
At present there is no way to avoid this lookup.

If you fear that this lookup might fail because your DNS
server is down then you can insert the hostname in
`/etc/hosts` (where you probably already have it so
that the machine can boot properly). Then ensure that your
machine is configured to use `/etc/hosts` in the
event that DNS fails. Depending on what OS you are using this
might be accomplished by editing `/etc/resolv.conf`,
or maybe `/etc/nsswitch.conf`.

If your server doesn't have to perform DNS for any other
reason then you might be able to get away with running httpd
with the `HOSTRESORDER` environment variable set to
"local". This all depends on what OS and resolver libraries you
are using. It also affects CGIs unless you use
`mod_env` to control the environment. It's best
to consult the man pages or FAQs for your OS.

[![top](./images/up.gif)](#page-header)

## Tips to Avoid These Problems [¶](#tips "Permanent link")

- use IP addresses in
  `VirtualHost`
- use IP addresses in
  `Listen`
- ensure all virtual hosts have an explicit
  `ServerName`
- create a `<VirtualHost _default_:*>`
  server that has no pages to serve

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/dns-caveats.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/dns-caveats.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/dns-caveats.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/dns-caveats.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/dns-caveats.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
