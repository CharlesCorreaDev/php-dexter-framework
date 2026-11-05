# mod_proxy - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_proxy.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_proxy.html) to go to the current version of this document.

# Apache Module mod\_proxy

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | HTTP/1.1 proxy/gateway server |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy.c |

### Summary

### Warning

Do not enable proxying with `ProxyRequests` until you have [secured your server](#access). Open proxy servers are dangerous both to your
network and to the Internet at large.

This module implements a proxy/gateway for Apache. It implements
proxying capability for `AJP13` (Apache JServe Protocol
version 1.3), `FTP`, `CONNECT` (for SSL),
`HTTP/0.9`, `HTTP/1.0`, and `HTTP/1.1`.
The module can be configured to connect to other proxy modules for these
and other protocols.

Apache's proxy features are divided into several modules in
addition to `mod_proxy`:
`mod_proxy_http`, `mod_proxy_ftp`,
`mod_proxy_ajp`, `mod_proxy_balancer`,
and `mod_proxy_connect`. Thus, if you want to use
one or more of the particular proxy functions, load
`mod_proxy` *and* the appropriate module(s)
into the server (either statically at compile-time or dynamically
via the `LoadModule`
directive).

In addition, extended features are provided by other modules.
Caching is provided by `mod_cache` and related
modules. The ability to contact remote servers using the SSL/TLS
protocol is provided by the `SSLProxy*` directives of
`mod_ssl`. These additional modules will need
to be loaded and configured to take advantage of these features.

### Topics

- ![](../images/down.gif) [Forward Proxies and Reverse
  Proxies/Gateways](#forwardreverse)
- ![](../images/down.gif) [Basic Examples](#examples)
- ![](../images/down.gif) [Workers](#workers)
- ![](../images/down.gif) [Controlling Access to Your Proxy](#access)
- ![](../images/down.gif) [Slow Startup](#startup)
- ![](../images/down.gif) [Intranet Proxy](#intranet)
- ![](../images/down.gif) [Protocol Adjustments](#envsettings)
- ![](../images/down.gif) [Request Bodies](#request-bodies)
- ![](../images/down.gif) [Reverse Proxy Request Headers](#x-headers)

### Directives

- ![](../images/down.gif) [AllowCONNECT](#allowconnect)
- ![](../images/down.gif) [BalancerMember](#balancermember)
- ![](../images/down.gif) [NoProxy](#noproxy)
- ![](../images/down.gif) [<Proxy>](#proxy)
- ![](../images/down.gif) [ProxyBadHeader](#proxybadheader)
- ![](../images/down.gif) [ProxyBlock](#proxyblock)
- ![](../images/down.gif) [ProxyDomain](#proxydomain)
- ![](../images/down.gif) [ProxyErrorOverride](#proxyerroroverride)
- ![](../images/down.gif) [ProxyFtpDirCharset](#proxyftpdircharset)
- ![](../images/down.gif) [ProxyIOBufferSize](#proxyiobuffersize)
- ![](../images/down.gif) [<ProxyMatch>](#proxymatch)
- ![](../images/down.gif) [ProxyMaxForwards](#proxymaxforwards)
- ![](../images/down.gif) [ProxyPass](#proxypass)
- ![](../images/down.gif) [ProxyPassInterpolateEnv](#proxypassinterpolateenv)
- ![](../images/down.gif) [ProxyPassMatch](#proxypassmatch)
- ![](../images/down.gif) [ProxyPassReverse](#proxypassreverse)
- ![](../images/down.gif) [ProxyPassReverseCookieDomain](#proxypassreversecookiedomain)
- ![](../images/down.gif) [ProxyPassReverseCookiePath](#proxypassreversecookiepath)
- ![](../images/down.gif) [ProxyPreserveHost](#proxypreservehost)
- ![](../images/down.gif) [ProxyReceiveBufferSize](#proxyreceivebuffersize)
- ![](../images/down.gif) [ProxyRemote](#proxyremote)
- ![](../images/down.gif) [ProxyRemoteMatch](#proxyremotematch)
- ![](../images/down.gif) [ProxyRequests](#proxyrequests)
- ![](../images/down.gif) [ProxySet](#proxyset)
- ![](../images/down.gif) [ProxyStatus](#proxystatus)
- ![](../images/down.gif) [ProxyTimeout](#proxytimeout)
- ![](../images/down.gif) [ProxyVia](#proxyvia)

### See also

- `mod_cache`
- `mod_proxy_http`
- `mod_proxy_ftp`
- `mod_proxy_connect`
- `mod_proxy_balancer`
- `mod_ssl`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Forward Proxies and Reverse Proxies/Gateways

Apache can be configured in both a forward and
reverse proxy (also known as gateway) mode.

An ordinary forward proxy is an intermediate
server that sits between the client and the *origin
server*. In order to get content from the origin server,
the client sends a request to the proxy naming the origin server
as the target. The proxy then requests the content from the
origin server and returns it to the client. The client must be
specially configured to use the forward proxy to access other
sites.

A typical usage of a forward proxy is to provide Internet
access to internal clients that are otherwise restricted by a
firewall. The forward proxy can also use caching (as provided
by `mod_cache`) to reduce network usage.

The forward proxy is activated using the `ProxyRequests` directive. Because
forward proxies allow clients to access arbitrary sites through
your server and to hide their true origin, it is essential that
you [secure your server](#access) so that only
authorized clients can access the proxy before activating a
forward proxy.

A reverse proxy (or gateway), by
contrast, appears to the client just like an ordinary web
server. No special configuration on the client is necessary.
The client makes ordinary requests for content in the namespace
of the reverse proxy. The reverse proxy then decides where to
send those requests and returns the content as if it were itself
the origin.

A typical usage of a reverse proxy is to provide Internet
users access to a server that is behind a firewall. Reverse
proxies can also be used to balance load among several back-end
servers or to provide caching for a slower back-end server.
In addition, reverse proxies can be used simply to bring
several servers into the same URL space.

A reverse proxy is activated using the `ProxyPass` directive or the
`[P]` flag to the `RewriteRule` directive. It is
**not** necessary to turn `ProxyRequests` on in order to
configure a reverse proxy.

[![top](../images/up.gif)](#page-header)

## Basic Examples

The examples below are only a very basic idea to help you
get started. Please read the documentation on the individual
directives.

In addition, if you wish to have caching enabled, consult
the documentation from `mod_cache`.

### Reverse Proxy

`ProxyPass /foo http://foo.example.com/bar  
ProxyPassReverse /foo http://foo.example.com/bar`

### Forward Proxy

`ProxyRequests On  
ProxyVia On  
  
<Proxy *>  

Order deny,allow  
Deny from all  
Allow from internal.example.com  
</Proxy>`

[![top](../images/up.gif)](#page-header)

## Workers

The proxy manages the configuration of origin servers and their
communication parameters in objects called workers.
There are two built-in workers: the default forward proxy worker and the
default reverse proxy worker. Additional workers can be configured
explicitly.

The two default workers have a fixed configuration
and will be used if no other worker matches the request.
They do not use HTTP Keep-Alive or connection pooling.
The TCP connections to the origin server will instead be
opened and closed for each request.

Explicitly configured workers are identified by their URL.
They are usually created and configured using
`ProxyPass` or
`ProxyPassMatch` when used
for a reverse proxy:

`ProxyPass /example http://backend.example.com connectiontimeout=5 timeout=30`

This will create a worker associated with the origin server URL
`http://backend.example.com` that will use the given timeout
values. When used in a forward proxy, workers are usually defined
via the `ProxySet` directive:

`ProxySet http://backend.example.com connectiontimeout=5 timeout=30`

or alternatively using `Proxy`
and `ProxySet`:

`<Proxy http://backend.example.com>  

ProxySet connectiontimeout=5 timeout=30
</Proxy>`

Using explicitly configured workers in the forward mode is
not very common, because forward proxies usually communicate with many
different origin servers. Creating explicit workers for some of the
origin servers can still be useful if they are used very often.
Explicitly configured workers have no concept of forward or reverse
proxying by themselves. They encapsulate a common concept of
communication with origin servers. A worker created by
`ProxyPass` for use in a
reverse proxy will also be used for forward proxy requests whenever
the URL to the origin server matches the worker URL, and vice versa.

The URL identifying a direct worker is the URL of its
origin server including any path components given:

`ProxyPass /examples http://backend.example.com/examples  
ProxyPass /docs http://backend.example.com/docs`

This example defines two different workers, each using a separate
connection pool and configuration.

### Worker Sharing

Worker sharing happens if the worker URLs overlap, which occurs when
the URL of some worker is a leading substring of the URL of another
worker defined later in the configuration file. In the following example

`ProxyPass /apps http://backend.example.com/ timeout=60  
ProxyPass /examples http://backend.example.com/examples timeout=10`

the second worker isn't actually created. Instead the first
worker is used. The benefit is, that there is only one connection pool,
so connections are more often reused. Note that all configuration attributes
given explicitly for the later worker and some configuration defaults will
overwrite the configuration given for the first worker. This will be logged
as a warning. In the above example, the resulting timeout value
for the URL `/apps` will be `10` instead
of `60`!

If you want to avoid worker sharing, sort your worker definitions
by URL length, starting with the longest worker URLs. If you want to maximize
worker sharing, use the reverse sort order. See also the related warning about
ordering `ProxyPass` directives.

Explicitly configured workers come in two flavors:
direct workers and (load) balancer workers.
They support many important configuration attributes which are
described below in the `ProxyPass`
directive. The same attributes can also be set using
`ProxySet`.

The set of options available for a direct worker
depends on the protocol which is specified in the origin server URL.
Available protocols include `ajp`,
`ftp`, `http` and `scgi`.

Balancer workers are virtual workers that use direct workers known
as their members to actually handle the requests. Each balancer can
have multiple members. When it handles a request, it chooses a member
based on the configured load balancing algorithm.

A balancer worker is created if its worker URL uses
`balancer` as the protocol scheme.
The balancer URL uniquely identifies the balancer worker.
Members are added to a balancer using
`BalancerMember`.

[![top](../images/up.gif)](#page-header)

## Controlling Access to Your Proxy

You can control who can access your proxy via the `<Proxy>` control block as in
the following example:

`<Proxy *>  

Order Deny,Allow  
Deny from all  
Allow from 192.168.0  
</Proxy>`

For more information on access control directives, see
`mod_authz_host`.

Strictly limiting access is essential if you are using a
forward proxy (using the `ProxyRequests` directive).
Otherwise, your server can be used by any client to access
arbitrary hosts while hiding his or her true identity. This is
dangerous both for your network and for the Internet at large.
When using a reverse proxy (using the `ProxyPass` directive with
`ProxyRequests Off`), access control is less
critical because clients can only contact the hosts that you
have specifically configured.

[![top](../images/up.gif)](#page-header)

## Slow Startup

If you're using the `ProxyBlock` directive, hostnames' IP addresses are looked up
and cached during startup for later match test. This may take a few
seconds (or more) depending on the speed with which the hostname lookups
occur.

[![top](../images/up.gif)](#page-header)

## Intranet Proxy

An Apache proxy server situated in an intranet needs to forward
external requests through the company's firewall (for this, configure
the `ProxyRemote` directive
to forward the respective scheme to the firewall proxy).
However, when it has to
access resources within the intranet, it can bypass the firewall when
accessing hosts. The `NoProxy`
directive is useful for specifying which hosts belong to the intranet and
should be accessed directly.

Users within an intranet tend to omit the local domain name from their
WWW requests, thus requesting "http://somehost/" instead of
`http://somehost.example.com/`. Some commercial proxy servers
let them get away with this and simply serve the request, implying a
configured local domain. When the `ProxyDomain` directive is used and the server is [configured for proxy service](#proxyrequests), Apache can return
a redirect response and send the client to the correct, fully qualified,
server address. This is the preferred method since the user's bookmark
files will then contain fully qualified hosts.

[![top](../images/up.gif)](#page-header)

## Protocol Adjustments

For circumstances where `mod_proxy` is sending
requests to an origin server that doesn't properly implement
keepalives or HTTP/1.1, there are two [environment variables](env.md) that can force the
request to use HTTP/1.0 with no keepalive. These are set via the
`SetEnv` directive.

These are the `force-proxy-request-1.0` and
`proxy-nokeepalive` notes.

`<Location /buggyappserver/>  

ProxyPass http://buggyappserver:7001/foo/  
SetEnv force-proxy-request-1.0 1  
SetEnv proxy-nokeepalive 1  
</Location>`

[![top](../images/up.gif)](#page-header)

## Request Bodies

Some request methods such as POST include a request body.
The HTTP protocol requires that requests which include a body
either use chunked transfer encoding or send a
`Content-Length` request header. When passing these
requests on to the origin server, `mod_proxy_http`
will always attempt to send the `Content-Length`. But
if the body is large and the original request used chunked
encoding, then chunked encoding may also be used in the upstream
request. You can control this selection using [environment variables](env.md). Setting
`proxy-sendcl` ensures maximum compatibility with
upstream servers by always sending the
`Content-Length`, while setting
`proxy-sendchunked` minimizes resource usage by using
chunked encoding.

[![top](../images/up.gif)](#page-header)

## Reverse Proxy Request Headers

When acting in a reverse-proxy mode (using the `ProxyPass` directive, for example),
`mod_proxy_http` adds several request headers in
order to pass information to the origin server. These headers
are:

`X-Forwarded-For`
:   The IP address of the client.

`X-Forwarded-Host`
:   The original host requested by the client in the `Host`
    HTTP request header.

`X-Forwarded-Server`
:   The hostname of the proxy server.

Be careful when using these headers on the origin server, since
they will contain more than one (comma-separated) value if the
original request already contained one of these headers. For
example, you can use `%{X-Forwarded-For}i` in the log
format string of the origin server to log the original clients IP
address, but you may get more than one address if the request
passes through several proxies.

See also the `ProxyPreserveHost` and `ProxyVia` directives, which control
other request headers.

[![top](../images/up.gif)](#page-header)

## AllowCONNECT Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Ports that are allowed to `CONNECT` through the proxy |
| [Syntax:](mod__directive-dict.md#Syntax) | `AllowCONNECT port [port] ...` |
| [Default:](mod__directive-dict.md#Default) | `AllowCONNECT 443 563` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

The `AllowCONNECT` directive specifies a list
of port numbers to which the proxy `CONNECT` method may
connect. Today's browsers use this method when a `https`
connection is requested and proxy tunneling over HTTP is in effect.

By default, only the default https port (`443`) and the
default snews port (`563`) are enabled. Use the
`AllowCONNECT` directive to override this default and
allow connections to the listed ports only.

Note that you'll need to have `mod_proxy_connect` present
in the server in order to get the support for the `CONNECT` at
all.

[![top](../images/up.gif)](#page-header)

## BalancerMember Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Add a member to a load balancing group |
| [Syntax:](mod__directive-dict.md#Syntax) | `BalancerMember [balancerurl] url [key=value [key=value ...]]` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | BalancerMember is only available in Apache 2.2 and later. |

This directive adds a member to a load balancing group. It can be used
within a `<Proxy balancer://...>` container
directive and can take any of the key value pairs available to
`ProxyPass` directives.

The balancerurl is only needed when not within a
`<Proxy balancer://...>`
container directive. It corresponds to the url of a balancer defined in
`ProxyPass` directive.

[![top](../images/up.gif)](#page-header)

## NoProxy Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Hosts, domains, or networks that will be connected to directly |
| [Syntax:](mod__directive-dict.md#Syntax) | `NoProxy host [host] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

This directive is only useful for Apache proxy servers within
intranets. The `NoProxy` directive specifies a
list of subnets, IP addresses, hosts and/or domains, separated by
spaces. A request to a host which matches one or more of these is
always served directly, without forwarding to the configured
`ProxyRemote` proxy server(s).

### Example

`ProxyRemote * http://firewall.example.com:81  
NoProxy .example.com 192.168.112.0/21`

The host arguments to the `NoProxy`
directive are one of the following type list:

Domain
:   A Domain is a partially qualified DNS domain name, preceded
    by a period. It represents a list of hosts which logically belong to the
    same DNS domain or zone (*i.e.*, the suffixes of the hostnames are
    all ending in Domain).

    ### Examples

    `.com .apache.org.`

    To distinguish Domains from [Hostname](#hostname)s (both syntactically and semantically; a DNS domain can
    have a DNS A record, too!), Domains are always written with a
    leading period.

    ### Note

    Domain name comparisons are done without regard to the case, and
    Domains are always assumed to be anchored in the root of the
    DNS tree; therefore, the two domains `.ExAmple.com` and
    `.example.com.` (note the trailing period) are considered
    equal. Since a domain comparison does not involve a DNS lookup, it is much
    more efficient than subnet comparison.

SubNet
:   A SubNet is a partially qualified internet address in
    numeric (dotted quad) form, optionally followed by a slash and the netmask,
    specified as the number of significant bits in the SubNet. It is
    used to represent a subnet of hosts which can be reached over a common
    network interface. In the absence of the explicit net mask it is assumed
    that omitted (or zero valued) trailing digits specify the mask. (In this
    case, the netmask can only be multiples of 8 bits wide.) Examples:

    `192.168` or `192.168.0.0`
    :   the subnet 192.168.0.0 with an implied netmask of 16 valid bits
        (sometimes used in the netmask form `255.255.0.0`)

    `192.168.112.0/21`
    :   the subnet `192.168.112.0/21` with a netmask of 21
        valid bits (also used in the form `255.255.248.0`)

    As a degenerate case, a *SubNet* with 32 valid bits is the
    equivalent to an [IPAddr](#ipaddr), while a SubNet with zero
    valid bits (*e.g.*, 0.0.0.0/0) is the same as the constant
    \_Default\_, matching any IP address.

IPAddr
:   A IPAddr represents a fully qualified internet address in
    numeric (dotted quad) form. Usually, this address represents a host, but
    there need not necessarily be a DNS domain name connected with the
    address.

    ### Example

    `192.168.123.7`

    ### Note

    An IPAddr does not need to be resolved by the DNS system, so
    it can result in more effective apache performance.

Hostname
:   A Hostname is a fully qualified DNS domain name which can
    be resolved to one or more [IPAddrs](#ipaddr) via the
    DNS domain name service. It represents a logical host (in contrast to
    [Domain](#domain)s, see above) and must be resolvable
    to at least one [IPAddr](#ipaddr) (or often to a list
    of hosts with different [IPAddr](#ipaddr)s).

    ### Examples

    `prep.ai.example.com  
    www.apache.org`

    ### Note

    In many situations, it is more effective to specify an [IPAddr](#ipaddr) in place of a Hostname since a
    DNS lookup can be avoided. Name resolution in Apache can take a remarkable
    deal of time when the connection to the name server uses a slow PPP
    link.

    Hostname comparisons are done without regard to the case,
    and Hostnames are always assumed to be anchored in the root
    of the DNS tree; therefore, the two hosts `WWW.ExAmple.com`
    and `www.example.com.` (note the trailing period) are
    considered equal.

### See also

- [DNS Issues](dns-caveats.md)

[![top](../images/up.gif)](#page-header)

## <Proxy> Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Container for directives applied to proxied resources |
| [Syntax:](mod__directive-dict.md#Syntax) | `<Proxy wildcard-url> ...</Proxy>` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

Directives placed in `<Proxy>`
sections apply only to matching proxied content. Shell-style wildcards are
allowed.

For example, the following will allow only hosts in
`yournetwork.example.com` to access content via your proxy
server:

`<Proxy *>  

Order Deny,Allow  
Deny from all  
Allow from yournetwork.example.com  
</Proxy>`

The following example will process all files in the `foo`
directory of `example.com` through the `INCLUDES`
filter when they are sent through the proxy server:

`<Proxy http://example.com/foo/*>  

SetOutputFilter INCLUDES  
</Proxy>`

### Differences from the Location configuration section

A backend URL matches the configuration section if it begins with the
the wildcard-url string, even if the last path segment in the
directive only matches a prefix of the backend URL. For example,
<Proxy http://example.com/foo> matches all of
http://example.com/foo, http://example.com/foo/bar, and
http://example.com/foobar. The matching of the final URL differs
from the behavior of the `<Location>` section, which for purposes of this note
treats the final path component as if it ended in a slash.

For more control over the matching, see `<ProxyMatch>`.

### See also

- `<ProxyMatch>`

[![top](../images/up.gif)](#page-header)

## ProxyBadHeader Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determines how to handle bad header lines in a response |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyBadHeader IsError|Ignore|StartBody` |
| [Default:](mod__directive-dict.md#Default) | `ProxyBadHeader IsError` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.0.44 and later |

The `ProxyBadHeader` directive determines the
behavior of `mod_proxy` if it receives syntactically invalid
response header lines (*i.e.* containing no colon) from the origin
server. The following arguments are possible:

`IsError`
:   Abort the request and end up with a 502 (Bad Gateway) response. This is
    the default behavior.

`Ignore`
:   Treat bad header lines as if they weren't sent.

`StartBody`
:   When receiving the first bad header line, finish reading the headers and
    treat the remainder as body. This helps to work around buggy backend servers
    which forget to insert an empty line between the headers and the body.

[![top](../images/up.gif)](#page-header)

## ProxyBlock Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Words, hosts, or domains that are banned from being proxied |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyBlock *|word|host|domain [word|host|domain] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

The `ProxyBlock` directive specifies a list of
words, hosts and/or domains, separated by spaces. HTTP, HTTPS, and
FTP document requests to sites whose names contain matched words,
hosts or domains are *blocked* by the proxy server. The proxy
module will also attempt to determine IP addresses of list items which
may be hostnames during startup, and cache them for match test as
well. That may slow down the startup time of the server.

### Example

`ProxyBlock joes-garage.com some-host.co.uk rocky.wotsamattau.edu`

`rocky.wotsamattau.edu` would also be matched if referenced by
IP address.

Note that `wotsamattau` would also be sufficient to match
`wotsamattau.edu`.

Note also that

`ProxyBlock *`

blocks connections to all sites.

[![top](../images/up.gif)](#page-header)

## ProxyDomain Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Default domain name for proxied requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyDomain Domain` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

This directive is only useful for Apache proxy servers within
intranets. The `ProxyDomain` directive specifies
the default domain which the apache proxy server will belong to. If a
request to a host without a domain name is encountered, a redirection
response to the same host with the configured Domain appended
will be generated.

### Example

`ProxyRemote * http://firewall.example.com:81  
NoProxy .example.com 192.168.112.0/21  
ProxyDomain .example.com`

[![top](../images/up.gif)](#page-header)

## ProxyErrorOverride Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Override error pages for proxied content |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyErrorOverride On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyErrorOverride Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.0 and later |

This directive is useful for reverse-proxy setups where you want to
have a common look and feel on the error pages seen by the end user.
This also allows for included files (via
`mod_include`'s SSI) to get
the error code and act accordingly. (Default behavior would display
the error page of the proxied server. Turning this on shows the SSI
Error message.)

This directive does not affect the processing of informational (1xx),
normal success (2xx), or redirect (3xx) responses.

[![top](../images/up.gif)](#page-header)

## ProxyFtpDirCharset Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Define the character set for proxied FTP listings |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyFtpDirCharset character set` |
| [Default:](mod__directive-dict.md#Default) | `ProxyFtpDirCharset ISO-8859-1` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.2.7 and later |

The `ProxyFtpDirCharset` directive defines the
character set to be set for FTP directory listings in HTML generated by
`mod_proxy_ftp`.

[![top](../images/up.gif)](#page-header)

## ProxyIOBufferSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Determine size of internal data throughput buffer |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyIOBufferSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `ProxyIOBufferSize 8192` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

The `ProxyIOBufferSize` directive adjusts the size
of the internal buffer which is used as a scratchpad for the data between
input and output. The size must be at least `8192`.

When the `mod_proxy_ajp` module is used, this value is
aligned to a 1024 byte boundary, and values larger than 65536 are set to
65536 in accordance with the AJP protocol.

In almost every case, there's no reason to change that value.

[![top](../images/up.gif)](#page-header)

## <ProxyMatch> Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Container for directives applied to regular-expression-matched proxied resources |
| [Syntax:](mod__directive-dict.md#Syntax) | `<ProxyMatch regex> ...</ProxyMatch>` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

The `<ProxyMatch>` directive is
identical to the `<Proxy>` directive, except that it matches URLs
using [regular expressions](glossary.md#regex "see glossary").

### See also

- `<Proxy>`

[![top](../images/up.gif)](#page-header)

## ProxyMaxForwards Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maximium number of proxies that a request can be forwarded through |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyMaxForwards number` |
| [Default:](mod__directive-dict.md#Default) | `ProxyMaxForwards -1` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.0 and later; default behaviour changed in 2.2.7 |

The `ProxyMaxForwards` directive specifies the
maximum number of proxies through which a request may pass if there's no
`Max-Forwards` header supplied with the request. This may
be set to prevent infinite proxy loops or a DoS attack.

### Example

`ProxyMaxForwards 15`

Note that setting `ProxyMaxForwards` is a
violation of the HTTP/1.1 protocol (RFC2616), which forbids a Proxy
setting `Max-Forwards` if the Client didn't set it.
Earlier Apache versions would always set it. A negative
`ProxyMaxForwards` value, including the
default -1, gives you protocol-compliant behavior but may
leave you open to loops.

[![top](../images/up.gif)](#page-header)

## ProxyPass Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maps remote servers into the local server URL-space |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyPass [path] !|url [key=value [key=value ...]] [nocanon] [interpolate]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

This directive allows remote servers to be mapped into the
space of the local server. The local server does not act as a
proxy in the conventional sense but appears to be a mirror of the
remote server. The local server is often called a reverse
proxy or gateway. The path is the name of
a local virtual path; url is a partial URL for the
remote server and cannot include a query string.

The `ProxyRequests` directive should
usually be set **off** when using
`ProxyPass`.

Suppose the local server has address `http://example.com/`;
then

`ProxyPass /mirror/foo/ http://backend.example.com/`

will cause a local request for
`http://example.com/mirror/foo/bar` to be internally converted
into a proxy request to `http://backend.example.com/bar`.

If the first argument ends with a trailing **/**, the second
argument should also end with a trailing **/**, and vice
versa. Otherwise, the resulting requests to the backend may miss some
needed slashes and do not deliver the expected results.

When used inside a `<Location>` section, the first argument is omitted and the local
directory is obtained from the `<Location>`. The same will occur inside a
`<LocationMatch>` section;
however, ProxyPass does not interpret the regexp as such, so it is necessary
to use `ProxyPassMatch` in this situation instead.

The ProxyPass directive is not supported in `<Directory>` or `<Files>` sections.

If you require a more flexible reverse-proxy configuration, see the
`RewriteRule` directive with the
`[P]` flag.

The `!` directive is useful in situations where you don't want
to reverse-proxy a subdirectory, *e.g.*

`ProxyPass /mirror/foo/i !  
ProxyPass /mirror/foo http://backend.example.com`

will proxy all requests to `/mirror/foo` to
`backend.example.com` *except* requests made to
`/mirror/foo/i`.

### Ordering ProxyPass Directives

The configured `ProxyPass`
and `ProxyPassMatch`
rules are checked in the order of configuration. The first rule that
matches wins. So usually you should sort conflicting
`ProxyPass` rules starting with the
longest URLs first. Otherwise, later rules for longer URLS will be hidden
by any earlier rule which uses a leading substring of the URL. Note that
there is some relation with worker sharing.

For the same reasons, exclusions must come *before* the
general `ProxyPass` directives.

### Ordering ProxyPass and RewriteRule Directives

`RewriteRule` directives
are evaluated before `ProxyPass` ones.

**ProxyPass `key=value` Parameters**

In Apache HTTP Server 2.1 and later, mod\_proxy supports pooled
connections to a backend server. Connections created on demand
can be retained in a pool for future use. Limits on the pool size
and other settings can be coded on
the `ProxyPass` directive
using `key=value` parameters, described in the tables
below.

By default, mod\_proxy will allow and retain the maximum number of
connections that could be used simultaneously by that web server child
process. Use the `max` parameter to reduce the number from
the default. Use the `ttl` parameter to set an optional
time to live; connections which have been unused for at least
`ttl` seconds will be closed. `ttl` can be used
to avoid using a connection which is subject to closing because of the
backend server's keep-alive timeout.

The pool of connections is maintained per web server child
process, and `max` and other settings are not coordinated
among all child processes, except when only one child process is allowed
by configuration or MPM design.

### Example

`ProxyPass /example http://backend.example.com max=20 ttl=120 retry=300`

| Parameter | Default | Description |
| --- | --- | --- |
| min | 0 | Minimum number of connection pool entries, unrelated to the actual number of connections. This only needs to be modified from the default for special circumstances where heap memory associated with the backend connections should be preallocated or retained. |
| max | 1...n | Maximum number of connections that will be allowed to the backend server. The default for this limit is the number of threads per process in the active MPM. In the Prefork MPM, this is always 1; while with other MPMs, it is controlled by the `ThreadsPerChild` directive. |
| smax | max | Retained connection pool entries above this limit are freed during certain operations if they have been unused for longer than the time to live, controlled by the `ttl` parameter. If the connection pool entry has an associated connection, it will be closed. This only needs to be modified from the default for special circumstances where connection pool entries and any associated connections which have exceeded the time to live need to be freed or closed more aggressively. |
| acquire | - | If set, this will be the maximum time to wait for a free connection in the connection pool, in milliseconds. If there are no free connections in the pool, the Apache will return `SERVER_BUSY` status to the client. |
| connectiontimeout | timeout | Connect timeout in seconds. The number of seconds Apache waits for the creation of a connection to the backend to complete. By adding a postfix of ms, the timeout can be also set in milliseconds. |
| disablereuse | Off | This parameter should be used when you want to force mod\_proxy to immediately close a connection to the backend after being used, and thus, disable its persistent connection and pool for that backend. This helps in various situations where a firewall between Apache and the backend server (regardless of protocol) tends to silently drop connections or when backends themselves may be under round- robin DNS. To disable connection pooling reuse, set this property value to `On`. |
| flushpackets | off | Determines whether the proxy module will auto-flush the output brigade after each "chunk" of data. 'off' means that it will flush only when needed; 'on' means after each chunk is sent; and 'auto' means poll/wait for a period of time and flush if no input has been received for 'flushwait' milliseconds. Currently, this is in effect only for AJP. |
| flushwait | 10 | The time to wait for additional input, in milliseconds, before flushing the output brigade if 'flushpackets' is 'auto'. |
| keepalive | Off | This parameter should be used when you have a firewall between your Apache and the backend server, which tends to drop inactive connections. This flag will tell the Operating System to send `KEEP_ALIVE` messages on inactive connections and thus prevent the firewall from dropping the connection. To enable keepalive, set this property value to `On`.  The frequency of initial and subsequent TCP keepalive probes depends on global OS settings, and may be as high as 2 hours. To be useful, the frequency configured in the OS must be smaller than the threshold used by the firewall. |
| lbset | 0 | Sets the load balancer cluster set that the worker is a member of. The load balancer will try all members of a lower numbered lbset before trying higher numbered ones. |
| ping | 0 | Ping property tells webserver to send a `CPING` request on ajp13 connection before forwarding a request. The parameter is the delay in seconds to wait for the `CPONG` reply. This features has been added to avoid problem with hung and busy Tomcat's and require ajp13 ping/pong support which has been implemented on Tomcat 3.3.2+, 4.1.28+ and 5.0.13+. This will increase the network traffic during the normal operation which could be an issue, but it will lower the traffic in case some of the cluster nodes are down or busy. Currently, this has an effect only for AJP. By adding a postfix of ms, the delay can be also set in milliseconds. |
| loadfactor | 1 | Worker load factor. Used with BalancerMember. It is a number between 1 and 100 and defines the normalized weighted load applied to the worker. |
| redirect | - | Redirection Route of the worker. This value is usually set dynamically to enable safe removal of the node from the cluster. If set, all requests without session id will be redirected to the BalancerMember that has route parameter equal to this value. |
| retry | 60 | Connection pool worker retry timeout in seconds. If the connection pool worker to the backend server is in the error state, Apache will not forward any requests to that server until the timeout expires. This enables to shut down the backend server for maintenance and bring it back online later. A value of 0 means always retry workers in an error state with no timeout. |
| route | - | Route of the worker when used inside load balancer. The route is a value appended to session id. |
| status | - | Single letter value defining the initial status of this worker: 'D' is disabled; 'S' is stopped; 'I' is ignore-errors; 'H' is hot-standby; and 'E' is in an error state. Status can be set (which is the default) by prepending with '+' or cleared by prepending with '-'. Thus, a setting of 'S-E' sets this worker to Stopped and clears the in-error flag. |
| timeout | `ProxyTimeout` | Connection timeout in seconds. The number of seconds Apache waits for data sent by / to the backend. |
| ttl | - | Time to live for inactive connections and associated connection pool entries, in seconds. Once reaching this limit, a connection will not be used again; it will be closed at some later time. |

If the `ProxyPass` directive scheme starts with the
`balancer://` (eg: `balancer://cluster/`,
any path information is ignored), then a virtual worker that does not really
communicate with the backend server will be created. Instead, it is responsible
for the management of several "real" workers. In that case, the special set of
parameters can be added to this virtual worker.
See `mod_proxy_balancer`
for more information about how the balancer works.

| Parameter | Default | Description |
| --- | --- | --- |
| lbmethod | byrequests | Balancer load-balance method. Select the load-balancing scheduler method to use. Either `byrequests`, to perform weighted request counting; `bytraffic`, to perform weighted traffic byte count balancing; or `bybusyness` (Apache HTTP Server 2.2.10 and later), to perform pending request balancing. The default is `byrequests`. |
| maxattempts | One less than the number of workers, or 1 with a single worker. | Maximum number of failover attempts before giving up. |
| nofailover | Off | If set to `On`, the session will break if the worker is in error state or disabled. Set this value to On if backend servers do not support session replication. |
| stickysession | - | Balancer sticky session name. The value is usually set to something like `JSESSIONID` or `PHPSESSIONID`, and it depends on the backend application server that support sessions. If the backend application server uses different names for cookies and url encoded id (like servlet containers), use | to to separate them. The first part is for the cookie; the second for the path. |
| scolonpathdelim | Off | If set to `On`, the semi-colon character ';' will be used as an additional sticky session path deliminator/separator. This is mainly used to emulate mod\_jk's behavior when dealing with paths such as `JSESSIONID=6736bcf34;foo=aabfa` |
| timeout | 0 | Balancer timeout in seconds. If set, this will be the maximum time to wait for a free worker. The default is to not wait. |
| failonstatus | - | A single or comma-separated list of HTTP status codes. If set, this will force the worker into error state when the backend returns any status code in the list. Worker recovery behaves the same as other worker errors. Available with Apache HTTP Server 2.2.17 and later. |
| failontimeout | Off | If set, an IO read timeout after a request is sent to the backend will force the worker into error state. Worker recovery behaves the same as other worker errors. Available with Apache HTTP Server 2.2.25 and later. |
| forcerecovery | On | Force the immediate recovery of all workers without considering the retry parameter of the workers if all workers of a balancer are in error state. There might be cases where an already overloaded backend can get into deeper trouble if the recovery of all workers is enforced without considering the retry parameter of each worker. In this case, set to `Off`. Available with Apache HTTP Server 2.2.23 and later. |

A sample balancer setup:

`ProxyPass /special-area http://special.example.com smax=5 max=10  
ProxyPass / balancer://mycluster/ stickysession=JSESSIONID|jsessionid nofailover=On  
<Proxy balancer://mycluster>  

BalancerMember ajp://1.2.3.4:8009  
BalancerMember ajp://1.2.3.5:8009 loadfactor=20  
# Less powerful server, don't send as many requests there,  
BalancerMember ajp://1.2.3.6:8009 loadfactor=5  
</Proxy>`

Setting up a hot-standby that will only be used if no other
members are available:

`ProxyPass / balancer://hotcluster/   
<Proxy balancer://hotcluster>  

BalancerMember ajp://1.2.3.4:8009 loadfactor=1  
BalancerMember ajp://1.2.3.5:8009 loadfactor=2  
# The below is the hot standby  
BalancerMember ajp://1.2.3.6:8009 status=+H  
ProxySet lbmethod=bytraffic
</Proxy>`

**Additional ProxyPass Keywords**

Normally, mod\_proxy will canonicalise ProxyPassed URLs.
But this may be incompatible with some backends, particularly those
that make use of PATH\_INFO. The optional nocanon
keyword suppresses this and passes the URL path "raw" to the
backend. Note that this keyword may affect the security of your backend,
as it removes the normal limited protection against URL-based attacks
provided by the proxy.

The optional interpolate keyword (available in
httpd 2.2.9 and later), in combination with
`ProxyPassInterpolateEnv`, causes the ProxyPass
to interpolate environment variables, using the syntax
${VARNAME}. Note that many of the standard CGI-derived
environment variables will not exist when this interpolation happens,
so you may still have to resort to `mod_rewrite`
for complex rules. Also note that interpolation is not supported
within the scheme portion of a URL. Dynamic determination of the
scheme can be accomplished with `mod_rewrite` as in the
following example.

```
RewriteEngine On

RewriteCond %{HTTPS} =off
RewriteRule . - [E=protocol:http]
RewriteCond %{HTTPS} =on
RewriteRule . - [E=protocol:https]

RewriteRule ^/mirror/foo/(.*) %{ENV:protocol}://backend.example.com/$1 [P]
ProxyPassReverse  /mirror/foo/ http://backend.example.com/
ProxyPassReverse  /mirror/foo/ https://backend.example.com/
```

[![top](../images/up.gif)](#page-header)

## ProxyPassInterpolateEnv Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable Environment Variable interpolation in Reverse Proxy configurations |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyPassInterpolateEnv On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyPassInterpolateEnv Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in httpd 2.2.9 and later |

This directive, together with the interpolate argument to
`ProxyPass`, `ProxyPassReverse`,
`ProxyPassReverseCookieDomain`, and
`ProxyPassReverseCookiePath`,
enables reverse proxies to be dynamically
configured using environment variables which may be set by
another module such as `mod_rewrite`.
It affects the `ProxyPass`,
`ProxyPassReverse`,
`ProxyPassReverseCookieDomain`, and
`ProxyPassReverseCookiePath` directives
and causes them to substitute the value of an environment
variable `varname` for the string `${varname}`
in configuration directives if the interpolate option is set.

Keep this turned off (for server performance) unless you need it!

[![top](../images/up.gif)](#page-header)

## ProxyPassMatch Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Maps remote servers into the local server URL-space using regular expressions |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyPassMatch [regex] !|url [key=value [key=value ...]]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | available in Apache 2.2.5 and later |

This directive is equivalent to `ProxyPass`
but makes use of regular expressions instead of simple prefix matching. The
supplied regular expression is matched against the url, and if it
matches, the server will substitute any parenthesized matches into the given
string and use it as a new url.

Suppose the local server has address `http://example.com/`;
then

`ProxyPassMatch ^(/.*\.gif)$ http://backend.example.com$1`

will cause a local request for
`http://example.com/foo/bar.gif` to be internally converted
into a proxy request to `http://backend.example.com/foo/bar.gif`.

### Note

The URL argument must be parsable as a URL *before* regexp
substitutions (as well as after). This limits the matches you can use.
For instance, if we had used

`ProxyPassMatch ^(/.*\.gif)$ http://backend.example.com:8000$1`

in our previous example, it would fail with a syntax error
at server startup. This is a bug (PR 46665 in the ASF bugzilla),
and the workaround is to reformulate the match:

`ProxyPassMatch ^/(.*\.gif)$ http://backend.example.com:8000/$1`

The `!` directive is useful in situations where you don't want
to reverse-proxy a subdirectory.

When used inside a `<LocationMatch>` section, the first argument is omitted and the
regexp is obtained from the `<LocationMatch>`.

If you require a more flexible reverse-proxy configuration, see the
`RewriteRule` directive with the
`[P]` flag.

### Security Warning

Take care when constructing the target URL of the rule, considering
the security impact from allowing the client influence over the set of
URLs to which your server will act as a proxy. Ensure that the scheme
and hostname part of the URL is either fixed or does not allow the
client undue influence.

[![top](../images/up.gif)](#page-header)

## ProxyPassReverse Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Adjusts the URL in HTTP response headers sent from a reverse proxied server |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyPassReverse [path] url [interpolate]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

This directive lets Apache adjust the URL in the `Location`,
`Content-Location` and `URI` headers on HTTP
redirect responses. This is essential when Apache is used as a
reverse proxy (or gateway) to avoid bypassing the reverse proxy
because of HTTP redirects on the backend servers which stay behind
the reverse proxy.

Only the HTTP response headers specifically mentioned above
will be rewritten. Apache will not rewrite other response
headers, nor will it rewrite URL references inside HTML pages.
This means that if the proxied content contains absolute URL
references, they will bypass the proxy. A third-party module
that will look inside the HTML and rewrite URL references is Nick
Kew's [mod\_proxy\_html](http://apache.webthing.com/mod_proxy_html/).

path is the name of a local virtual path; url is a
partial URL for the remote server. These parameters are used the same way as
for the `ProxyPass` directive.

For example, suppose the local server has address
`http://example.com/`; then

`ProxyPass /mirror/foo/ http://backend.example.com/  
ProxyPassReverse /mirror/foo/ http://backend.example.com/  
ProxyPassReverseCookieDomain backend.example.com public.example.com  
ProxyPassReverseCookiePath / /mirror/foo/`

will not only cause a local request for the
`http://example.com/mirror/foo/bar` to be internally converted
into a proxy request to `http://backend.example.com/bar`
(the functionality which `ProxyPass` provides here). It also
takes care of redirects which the server `backend.example.com`
sends when redirecting `http://backend.example.com/bar` to
`http://backend.example.com/quux` . Apache adjusts this to
`http://example.com/mirror/foo/quux` before forwarding the HTTP
redirect response to the client. Note that the hostname used for
constructing the URL is chosen in respect to the setting of the `UseCanonicalName` directive.

Note that this `ProxyPassReverse` directive can
also be used in conjunction with the proxy feature
(`RewriteRule ... [P]`) from `mod_rewrite`
because it doesn't depend on a corresponding `ProxyPass` directive.

The optional interpolate keyword (available in
httpd 2.2.9 and later), used together with
`ProxyPassInterpolateEnv`, enables interpolation
of environment variables specified using the format ${VARNAME}.
Note that interpolation is not supported within the scheme portion of a
URL.

When used inside a `<Location>` section, the first argument is omitted and the local
directory is obtained from the `<Location>`. The same occurs inside a `<LocationMatch>` section, but will probably not work as
intended, as ProxyPassReverse will interpret the regexp literally as a
path; if needed in this situation, specify the ProxyPassReverse outside
the section or in a separate `<Location>` section.

This directive is not supported in `<Directory>` or `<Files>` sections.

[![top](../images/up.gif)](#page-header)

## ProxyPassReverseCookieDomain Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Adjusts the Domain string in Set-Cookie headers from a reverse- proxied server |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyPassReverseCookieDomain internal-domain public-domain [interpolate]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

Usage is basically similar to
`ProxyPassReverse`, but instead of
rewriting headers that are a URL, this rewrites the `domain`
string in `Set-Cookie` headers.

[![top](../images/up.gif)](#page-header)

## ProxyPassReverseCookiePath Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Adjusts the Path string in Set-Cookie headers from a reverse- proxied server |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyPassReverseCookiePath internal-path public-path [interpolate]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

Useful in conjunction with
`ProxyPassReverse`
in situations where backend URL paths are mapped to public paths on the
reverse proxy. This directive rewrites the `path` string in
`Set-Cookie` headers. If the beginning of the cookie path matches
internal-path, the cookie path will be replaced with
public-path.

In the example given with
`ProxyPassReverse`, the directive:

`ProxyPassReverseCookiePath / /mirror/foo/`

will rewrite a cookie with backend path `/` (or
`/example` or, in fact, anything) to `/mirror/foo/`.

[![top](../images/up.gif)](#page-header)

## ProxyPreserveHost Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Use incoming Host HTTP request header for proxy request |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyPreserveHost On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyPreserveHost Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.0.31 and later. |

When enabled, this option will pass the Host: line from the incoming
request to the proxied host, instead of the hostname specified in the
`ProxyPass module="mod_proxy"` line.

This option should normally be turned `Off`. It is mostly
useful in special configurations like proxied mass name-based virtual
hosting, where the original Host header needs to be evaluated by the
backend server.

[![top](../images/up.gif)](#page-header)

## ProxyReceiveBufferSize Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Network buffer size for proxied HTTP and FTP connections |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyReceiveBufferSize bytes` |
| [Default:](mod__directive-dict.md#Default) | `ProxyReceiveBufferSize 0` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

The `ProxyReceiveBufferSize` directive specifies an
explicit (TCP/IP) network buffer size for proxied HTTP and FTP connections,
for increased throughput. It has to be greater than `512` or set
to `0` to indicate that the system's default buffer size should
be used.

### Example

`ProxyReceiveBufferSize 2048`

[![top](../images/up.gif)](#page-header)

## ProxyRemote Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Remote proxy used to handle certain requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyRemote match remote-server` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

This defines remote proxies to this proxy. match is either the
name of a URL-scheme that the remote server supports, or a partial URL
for which the remote server should be used, or `*` to indicate
the server should be contacted for all requests. remote-server is
a partial URL for the remote server. Syntax:

`remote-server =
scheme://hostname[:port]`

scheme is effectively the protocol that should be used to
communicate with the remote server; only `http` and `https`
are supported by this module. When using `https`, the requests
are forwarded through the remote proxy using the HTTP CONNECT method.

### Example

`ProxyRemote http://goodguys.example.com/ http://mirrorguys.example.com:8000  
ProxyRemote * http://cleverproxy.localdomain  
ProxyRemote ftp http://ftpproxy.mydomain:8080`

In the last example, the proxy will forward FTP requests, encapsulated
as yet another HTTP proxy request, to another proxy which can handle
them.

This option also supports reverse proxy configuration; a backend
webserver can be embedded within a virtualhost URL space even if that
server is hidden by another forward proxy.

[![top](../images/up.gif)](#page-header)

## ProxyRemoteMatch Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Remote proxy used to handle requests matched by regular expressions |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyRemoteMatch regex remote-server` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

The `ProxyRemoteMatch` is identical to the
`ProxyRemote` directive, except
that the first argument is a
[regular expression](glossary.md#regex "see glossary")
match against the requested URL.

[![top](../images/up.gif)](#page-header)

## ProxyRequests Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enables forward (standard) proxy requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyRequests On|Off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyRequests Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

This allows or prevents Apache from functioning as a forward proxy
server. (Setting ProxyRequests to `Off` does not disable use of
the `ProxyPass` directive.)

In a typical reverse proxy or gateway configuration, this
option should be set to
`Off`.

In order to get the functionality of proxying HTTP or FTP sites, you
need also `mod_proxy_http` or `mod_proxy_ftp`
(or both) present in the server.

In order to get the functionality of (forward) proxying HTTPS sites, you
need `mod_proxy_connect` enabled in the server.

### Warning

Do not enable proxying with `ProxyRequests` until you have [secured your server](#access). Open proxy servers are dangerous
both to your network and to the Internet at large.

### See also

- [Forward and Reverse Proxies/Gateways](#forwardreverse)

[![top](../images/up.gif)](#page-header)

## ProxySet Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set various Proxy balancer or member parameters |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxySet url key=value [key=value ...]` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | ProxySet is only available in Apache 2.2 and later. |

This directive is used as an alternate method of setting any of the
parameters available to Proxy balancers and workers normally done via the
`ProxyPass` directive. If used
within a `<Proxy balancer url|worker url>`
container directive, the url argument is not required. As a side
effect the respective balancer or worker gets created. This can be useful
when doing reverse proxying via a
`RewriteRule` instead of a
`ProxyPass` directive.

`<Proxy balancer://hotcluster>  

BalancerMember http://www2.example.com:8080 loadfactor=1  
BalancerMember http://www3.example.com:8080 loadfactor=2  
ProxySet lbmethod=bytraffic  
</Proxy>`

`<Proxy http://backend>  

ProxySet keepalive=On  
</Proxy>`

`ProxySet balancer://foo lbmethod=bytraffic timeout=15`

`ProxySet ajp://backend:7001 timeout=15`

### Warning

Keep in mind that the same parameter key can have a different meaning
depending whether it is applied to a balancer or a worker, as shown by
the two examples above regarding timeout.

[![top](../images/up.gif)](#page-header)

## ProxyStatus Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Show Proxy LoadBalancer status in mod\_status |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyStatus Off|On|Full` |
| [Default:](mod__directive-dict.md#Default) | `ProxyStatus Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in version 2.2 and later |

This directive determines whether or not proxy
loadbalancer status data is displayed via the `mod_status`
server-status page.

### Note

**Full** is synonymous with **On**

[![top](../images/up.gif)](#page-header)

## ProxyTimeout Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Network timeout for proxied requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyTimeout seconds` |
| [Default:](mod__directive-dict.md#Default) | `Value of Timeout` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.0.31 and later |

This directive allows a user to specify a timeout on proxy requests.
This is useful when you have a slow/buggy appserver which hangs, and you
would rather just return a timeout and fail gracefully instead of waiting
however long it takes the server to return.

[![top](../images/up.gif)](#page-header)

## ProxyVia Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Information provided in the `Via` HTTP response header for proxied requests |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyVia On|Off|Full|Block` |
| [Default:](mod__directive-dict.md#Default) | `ProxyVia Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy |

This directive controls the use of the `Via:` HTTP
header by the proxy. Its intended use is to control the flow of
proxy requests along a chain of proxy servers. See [RFC 2616](http://www.ietf.org/rfc/rfc2616.txt) (HTTP/1.1), section
14.45 for an explanation of `Via:` header lines.

- If set to `Off`, which is the default, no special processing
  is performed. If a request or reply contains a `Via:` header,
  it is passed through unchanged.
- If set to `On`, each request and reply will get a
  `Via:` header line added for the current host.
- If set to `Full`, each generated `Via:` header
  line will additionally have the Apache server version shown as a
  `Via:` comment field.
- If set to `Block`, every proxy request will have all its
  `Via:` header lines removed. No new `Via:` header will
  be generated.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_proxy.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/mod/mod_proxy.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_proxy.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
