# An In-Depth Discussion of Virtual Host Matching - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/vhosts/details.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](vhosts.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Virtual Hosts](vhosts.md)

# An In-Depth Discussion of Virtual Host Matching

This document attempts to explain
exactly what Apache HTTP Server does when deciding what virtual host to
serve a request from.

Most users should read about [Name-based vs. IP-based Virtual Hosts](vhosts__name-based.md#namevip) to decide which type they
want to use, then read more about [name-based](vhosts__name-based.md)
or [IP-based](vhosts__ip-based.md) virtualhosts, and then see
[some examples](vhosts__examples.md).

If you want to understand all the details, then you can
come back to this page.

- ![](../images/down.gif) [Configuration File](#configparsing)
- ![](../images/down.gif) [Virtual Host Matching](#hostmatching)
- ![](../images/down.gif) [Tips](#tips)

### See also

- [IP-based Virtual Host Support](vhosts__ip-based.md)
- [Name-based Virtual Hosts Support](vhosts__name-based.md)
- [Virtual Host examples for common setups](vhosts__examples.md)
- [Dynamically configured mass virtual hosting](vhosts__mass.md)

[![top](../images/up.gif)](#page-header)

## Configuration File [¶](#configparsing "Permanent link")

There is a *main server* which consists of all the
definitions appearing outside of
`<VirtualHost>` sections.

There are virtual
servers, called *vhosts*, which are defined by
`<VirtualHost>`
sections.

Each `VirtualHost` directive includes one
or more addresses and optional ports.

Hostnames can be used in place of IP addresses in a virtual
host definition, but they are resolved at startup and if any name
resolutions fail, those virtual host definitions are ignored.
This is, therefore, not recommended.

The address can be specified as
`*`, which will match a request if no
other vhost has the explicit address on which the request was
received.

The address appearing in the `VirtualHost`
directive can have an optional port. If the port is unspecified,
it is treated as a wildcard port, which can also be indicated
explicitly using `*`.
The wildcard port matches any port.

(Port numbers specified in the `VirtualHost` directive do
not influence what port numbers Apache will listen on, they only control
which `VirtualHost` will be selected to handle a request.
Use the `Listen` directive to
control the addresses and ports on which the server listens.)

Collectively the
entire set of addresses (including multiple
results from DNS lookups) are called the vhost's
*address set*.

Apache automatically discriminates on the
basis of the HTTP `Host` header supplied by the client
whenever the most specific match for an IP address and port combination
is listed in multiple virtual hosts.

The
`ServerName` directive
may appear anywhere within the definition of a server. However,
each appearance overrides the previous appearance (within that
server). If no `ServerName` is specified, the server
attempts to deduce it from the server's IP address.

The first name-based vhost in the configuration file for a
given IP:port pair is significant because it is used for all
requests received on that address and port for which no other
vhost for that IP:port pair has a matching ServerName or
ServerAlias. It is also used for all SSL connections if the
server does not support [Server Name Indication](glossary.md#servernameindication "see glossary").

The complete list of names in the `VirtualHost`
directive are treated just like a (non wildcard) `ServerAlias`
(but are not overridden by any `ServerAlias` statement).

For every vhost various default values are set. In
particular:

1. If a vhost has no `ServerAdmin`,
   `Timeout`,
   `KeepAliveTimeout`,
   `KeepAlive`,
   `MaxKeepAliveRequests`,
   `ReceiveBufferSize`,
   or `SendBufferSize`
   directive then the respective value is inherited from the
   main server. (That is, inherited from whatever the final
   setting of that value is in the main server.)
2. The "lookup defaults" that define the default directory
   permissions for a vhost are merged with those of the
   main server. This includes any per-directory configuration
   information for any module.
3. The per-server configs for each module from the
   main server are merged into the vhost server.

Essentially, the main server is treated as "defaults" or a
"base" on which to build each vhost. But the positioning of
these main server definitions in the config file is largely
irrelevant -- the entire config of the main server has been
parsed when this final merging occurs. So even if a main server
definition appears after a vhost definition it might affect the
vhost definition.

If the main server has no `ServerName` at this
point, then the hostname of the machine that `httpd`
is running on is used instead. We will call the *main server address
set* those IP addresses returned by a DNS lookup on the
`ServerName` of the main server.

For any undefined `ServerName` fields, a
name-based vhost defaults to the address given first in the
`VirtualHost` statement defining the vhost.

Any vhost that includes the magic `_default_`
wildcard is given the same `ServerName` as the
main server.

[![top](../images/up.gif)](#page-header)

## Virtual Host Matching [¶](#hostmatching "Permanent link")

The server determines which vhost to use for a request in two
phases: an IP-based match when the connection is established,
then an optional name-based match when the request is received.

### Phase 1: IP address and port matching

When a connection is first received, the server looks up the
destination IP address and port in its list of
`VirtualHost` addresses. This lookup follows a strict
priority order:

| Priority | Match type | Example |
| --- | --- | --- |
| 1 | Exact IP address, exact port | `<VirtualHost 10.0.0.1:80>` |
| 2 | Exact IP address, wildcard port | `<VirtualHost 10.0.0.1:*>` |
| 3 | Wildcard address (`*`), exact port | `<VirtualHost *:80>` |
| 4 | Wildcard address, wildcard port | `<VirtualHost *:*>` |
| 5 | Main server | (no matching `VirtualHost`) |

### Important

The server uses the *first match found* following this
priority order. Once a match is found at a given priority level,
no lower-priority levels are considered — even if a
lower-priority vhost has a `ServerName` that matches the
request's `Host` header. Name-based matching (Phase 2)
only occurs among vhosts that tied at the same priority level.

If there are `VirtualHost` definitions for
the IP address, the next step is to decide if we have to
deal with an IP-based or a name-based vhost.

### IP-based vhost

If Phase 1 produces exactly one matching
`VirtualHost`, the request is served directly from that
vhost with no further matching.

### Phase 2: Name-based matching

If Phase 1 produces multiple `VirtualHost`
definitions at the same priority level, the server performs
name-based matching among those vhosts using the
`Host:` header from the request (or the SNI hostname
for SSL connections).

If the connection is using SSL, the server supports [Server Name Indication](glossary.md#servernameindication "see glossary"), and
the SSL client handshake includes the TLS extension with the
requested hostname, then that hostname is used below just like the
`Host:` header would be used on a non-SSL connection.
Otherwise, the first name-based vhost whose address matched is
used for SSL connections. This is significant because the
vhost determines which certificate the server will use for the
connection.

The matching vhosts are searched in the order they appear in
the configuration file:

1. The `ServerName` and
   `ServerAlias` of each vhost
   are compared against the hostname from the request. The first
   match wins.
2. If no `ServerName` or `ServerAlias`
   matches, the *first vhost in the list* is used. This is
   the *default name-based vhost* for that address and port
   combination.

A `Host:` header field can contain a port number,
but Apache always ignores it and matches against the real port to
which the client sent the request.

If the request has no `Host:` header (such as a
HTTP/1.0 request), the first matching vhost is used. If a
`ServerPath` is configured for
any of the matching vhosts and the request URL matches that path,
the request is served from that vhost instead. This is a legacy
mechanism for HTTP/1.0 clients; see the
[ServerPath example](vhosts__examples.md#serverpath) for
details.

### Persistent connections

The IP-based lookup (Phase 1) is performed only *once*
for a particular TCP/IP session, while the name-based lookup
(Phase 2) is performed on *every* request during a
KeepAlive/persistent connection. In other words, a client may
request pages from different name-based vhosts during a single
persistent connection.

### Absolute URI

If the URI from the request is an absolute URI, and its
hostname and port match the main server or one of the
configured virtual hosts *and* match the address and
port to which the client sent the request, then the
scheme/hostname/port prefix is stripped off and the remaining
relative URI is served by the corresponding main server or
virtual host. If it does not match, then the URI remains
untouched and the request is taken to be a proxy request.

### Observations

- Name-based virtual hosting is a process applied *after*
  the server has narrowed the candidate list via IP-based matching.
- If you don't care what IP address the client has connected to, use a
  "`*`" as the address of every virtual host, and name-based virtual hosting
  is applied across all configured virtual hosts.
- `ServerName` and `ServerAlias`
  checks are never performed for an IP-based vhost (one where
  there is only a single vhost for that IP:port).
- Only the ordering of
  name-based vhosts for a specific address set is significant.
  The one name-based vhost that comes first in the
  configuration file has the highest priority for its
  corresponding address set.
- Any port in the `Host:` header field is never used during the
  matching process. Apache always uses the real port to which
  the client sent the request.
- If two vhosts have an address in common, those common addresses
  act as name-based virtual hosts implicitly. This is new behavior as of
  2.3.11.
- The main server is only used to serve a request if the IP
  address and port number to which the client connected
  does not match any vhost (including a
  `*` vhost). In other words, the main server
  only catches a request for an unspecified address/port
  combination (unless there is a `_default_` vhost
  which matches that port).
- You should never specify DNS names in
  `VirtualHost` directives because it will force
  your server to rely on DNS to boot. Furthermore it poses a
  security threat if you do not control the DNS for all the
  domains listed. There's [more
  information](dns-caveats.md) available on this and the next two
  topics.
- `ServerName` should always be set for each
  vhost. Otherwise a DNS lookup is required for each
  vhost.

[![top](../images/up.gif)](#page-header)

## Tips [¶](#tips "Permanent link")

In addition to the tips on the [DNS Issues](dns-caveats.md#tips) page, here are
some further tips:

- Place all main server definitions before any
  `VirtualHost` definitions. (This is to aid the
  readability of the configuration -- the post-config merging
  process makes it non-obvious that definitions mixed in around
  virtual hosts might affect all virtual hosts.)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/vhosts/details.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/vhosts/details.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/vhosts/details.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/vhosts/details.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
