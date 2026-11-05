# Binding - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/bind.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/bind.html) to go to the current version of this document.

# Binding

Configuring Apache to listen on specific addresses and ports.

- ![](./images/down.gif) [Overview](#overview)
- ![](./images/down.gif) [Special IPv6 Considerations](#ipv6)
- ![](./images/down.gif) [How This Works With Virtual Hosts](#virtualhost)

### See also

- [Virtual Hosts](vhosts.md)
- [DNS Issues](dns-caveats.md)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## Overview

| Related Modules | Related Directives |
| --- | --- |
| - `core` - `mpm_common` | - `<VirtualHost>` - `Listen` |

When Apache starts, it binds to some port and address on
the local machine and waits for incoming requests. By default,
it listens to all addresses on the machine. However, it may need to
be told to listen on specific ports, or only on selected
addresses, or a combination of both. This is often combined with the
Virtual Host feature, which determines how Apache responds to
different IP addresses, hostnames and ports.

The `Listen`
directive tells the server to accept
incoming requests only on the specified ports or
address-and-port combinations. If only a port number is
specified in the `Listen`
directive, the server
listens to the given port on all interfaces. If an IP address
is given as well as a port, the server will listen on the given
port and interface. Multiple `Listen` directives may be used to
specify a number of addresses and ports to listen on. The
server will respond to requests from any of the listed
addresses and ports.

For example, to make the server accept connections on both
port 80 and port 8000, on all interfaces, use:

`Listen 80  
Listen 8000`

To make the server accept connections on port 80 for one interface,
and port 8000 on another, use

`Listen 192.0.2.1:80  
Listen 192.0.2.5:8000`

IPv6 addresses must be enclosed in square brackets, as in the
following example:

`Listen [2001:db8::a00:20ff:fea7:ccea]:80`

[![top](./images/up.gif)](#page-header)

## Special IPv6 Considerations

A growing number of platforms implement IPv6, and
[APR](glossary.md#apr "see glossary") supports IPv6 on most of these platforms,
allowing Apache to allocate IPv6 sockets, and to handle requests sent
over IPv6.

One complicating factor for Apache administrators is whether or
not an IPv6 socket can handle both IPv4 connections and IPv6
connections. Handling IPv4 connections with an IPv6 socket uses
IPv4-mapped IPv6 addresses, which are allowed by default on most
platforms, but are disallowed by default on FreeBSD, NetBSD, and
OpenBSD, in order to match the system-wide policy on those
platforms. On systems where it is disallowed by default, a
special `configure` parameter can change this behavior
for Apache.

On the other hand, on some platforms, such as Linux and Tru64, the
**only** way to handle both IPv6 and IPv4 is to use
mapped addresses. If you want Apache to handle IPv4 and IPv6 connections
with a minimum of sockets, which requires using IPv4-mapped IPv6
addresses, specify the `--enable-v4-mapped` `configure` option.

`--enable-v4-mapped` is the default on all platforms except
FreeBSD, NetBSD, and OpenBSD, so this is probably how your Apache was
built.

If you want Apache to handle IPv4 connections only, regardless of
what your platform and APR will support, specify an IPv4 address on all
`Listen` directives, as in the
following examples:

`Listen 0.0.0.0:80  
Listen 192.0.2.1:80`

If your platform supports it and you want Apache to handle IPv4 and
IPv6 connections on separate sockets (i.e., to disable IPv4-mapped
addresses), specify the `--disable-v4-mapped` `configure` option. `--disable-v4-mapped` is the
default on FreeBSD, NetBSD, and OpenBSD.

[![top](./images/up.gif)](#page-header)

## How This Works With Virtual Hosts

The `Listen` directive does not implement
Virtual Hosts - it only tells the
main server what addresses and ports to listen on. If no
`<VirtualHost>`
directives are used, the server will behave
in the same way for all accepted requests. However,
`<VirtualHost>`
can be used to specify a different behavior
for one or more of the addresses or ports. To implement a
VirtualHost, the server must first be told to listen to the
address and port to be used. Then a
`<VirtualHost>` section
should be created for the specified address and port to set the
behavior of this virtual host. Note that if the
`<VirtualHost>`
is set for an address and port that the
server is not listening to, it cannot be accessed.

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/bind.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/bind.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/bind.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/bind.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/bind.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/bind.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
