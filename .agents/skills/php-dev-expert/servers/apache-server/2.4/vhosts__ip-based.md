# Apache IP-based Virtual Host Support - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/vhosts/ip-based.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](vhosts.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Virtual Hosts](vhosts.md)

# Apache IP-based Virtual Host Support

- ![](../images/down.gif) [What is IP-based virtual hosting](#explanation)
- ![](../images/down.gif) [System requirements](#requirements)
- ![](../images/down.gif) [How to set up Apache](#howto)
- ![](../images/down.gif) [Setting up multiple daemons](#multiple)
- ![](../images/down.gif) [Setting up a single daemon
  with virtual hosts](#single)

### See also

- [Name-based Virtual Hosts Support](vhosts__name-based.md)

[![top](../images/up.gif)](#page-header)

## What is IP-based virtual hosting [¶](#explanation "Permanent link")

IP-based virtual hosting is a method to apply different directives
based on the IP address and port a request is received on. Most commonly,
this is used to serve different websites on different ports or interfaces.

In many cases, [name-based
virtual hosts](vhosts__name-based.md) are more convenient, because they allow
many virtual hosts to share a single address/port.
See [Name-based vs. IP-based
Virtual Hosts](vhosts__name-based.md#namevip) to help you decide.

[![top](../images/up.gif)](#page-header)

## System requirements [¶](#requirements "Permanent link")

As the term IP-based indicates, the server
**must have a different IP address/port combination for each IP-based
virtual host**. This can be achieved by the machine
having several physical network connections, or by use of
virtual interfaces which are supported by most modern operating
systems (see system documentation for details, these are
frequently called "ip aliases", and the "ifconfig" command is
most commonly used to set them up), and/or using multiple
port numbers.

In the terminology of Apache HTTP Server, using a single IP address
but multiple TCP ports, is also IP-based virtual hosting.

[![top](../images/up.gif)](#page-header)

## How to set up Apache [¶](#howto "Permanent link")

There are two ways of configuring apache to support multiple
hosts. Either by running a separate `httpd` daemon for
each hostname, or by running a single daemon which supports all the
virtual hosts.

Use multiple daemons when:

- There are security partitioning issues, such as company1
  does not want anyone at company2 to be able to read their
  data except via the web. In this case you would need two
  daemons, each running with different `User`, `Group`, `Listen`, and `ServerRoot` settings.
- You can afford the memory and file descriptor
  requirements of listening to every IP alias on the
  machine. It's only possible to `Listen` to the "wildcard"
  address, or to specific addresses. So if you have a need to
  listen to a specific address for whatever reason, then you
  will need to listen to all specific addresses. (Although one
  `httpd` could listen to N-1 of the addresses, and another could
  listen to the remaining address.)

Use a single daemon when:

- Sharing of the httpd configuration between virtual hosts
  is acceptable.
- The machine services a large number of requests, and so
  the performance loss in running separate daemons may be
  significant.

[![top](../images/up.gif)](#page-header)

## Setting up multiple daemons [¶](#multiple "Permanent link")

Create a separate `httpd` installation for each
virtual host. For each installation, use the `Listen` directive in the
configuration file to select which IP address (or virtual host)
that daemon services. e.g.

```
Listen 192.0.2.100:80
```

It is recommended that you use an IP address instead of a
hostname (see [DNS caveats](dns-caveats.md)).

[![top](../images/up.gif)](#page-header)

## Setting up a single daemon with virtual hosts [¶](#single "Permanent link")

For this case, a single `httpd` will service
requests for the main server and all the virtual hosts. The `VirtualHost` directive
in the configuration file is used to set the values of `ServerAdmin`, `ServerName`, `DocumentRoot`, `ErrorLog` and `TransferLog`
or `CustomLog`
configuration directives to different values for each virtual
host. e.g.

```
<VirtualHost 172.20.30.40:80>
    ServerAdmin webmaster@www1.example.com
    DocumentRoot "/www/vhosts/www1"
    ServerName www1.example.com
    ErrorLog "/www/logs/www1/error_log"
    CustomLog "/www/logs/www1/access_log" combined
</VirtualHost>

<VirtualHost 172.20.30.50:80>
    ServerAdmin webmaster@www2.example.org
    DocumentRoot "/www/vhosts/www2"
    ServerName www2.example.org
    ErrorLog "/www/logs/www2/error_log"
    CustomLog "/www/logs/www2/access_log" combined
</VirtualHost>
```

It is recommended that you use an IP address instead of a
hostname in the <VirtualHost> directive
(see [DNS caveats](dns-caveats.md)).

Specific IP addresses or ports have precedence over their wildcard
equivalents, and any virtual host that matches has precedence over
the servers base configuration.

Almost **any** configuration directive can be
put in the VirtualHost directive, with the exception of
directives that control process creation and a few other
directives. To find out if a directive can be used in the
VirtualHost directive, check the [Context](mod__directive-dict.md#Context) using the
[directive index](mod__quickreference.md).

`SuexecUserGroup`
may be used inside a
VirtualHost directive if the [suEXEC
wrapper](suexec.md) is used.

*SECURITY:* When specifying where to write log files,
be aware of some security risks which are present if anyone
other than the user that starts Apache has write access to the
directory where they are written. See the [security tips](misc__security_tips.md) document
for details.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/vhosts/ip-based.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/vhosts/ip-based.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/vhosts/ip-based.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/vhosts/ip-based.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/vhosts/ip-based.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
