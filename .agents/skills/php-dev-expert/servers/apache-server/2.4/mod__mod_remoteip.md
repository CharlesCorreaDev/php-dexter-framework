# mod_remoteip - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_remoteip.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_remoteip

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Replaces the original client IP address for the connection with the useragent IP address list presented by a proxies or a load balancer via the request headers. |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | remoteip\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_remoteip.c |

### Summary

This module is used to treat the useragent which initiated the
request as the originating useragent as identified by httpd for the
purposes of authorization and logging, even where that useragent is
behind a load balancer, front end server, or proxy server.

The module overrides the client IP address for the connection
with the useragent IP address reported in the request header configured
with the `RemoteIPHeader` directive.

Additionally, this module implements the server side of
HAProxy's
[PROXY Protocol](https://www.haproxy.org/download/3.1/doc/proxy-protocol.txt) when
using the `RemoteIPProxyProtocol`
directive.

Once replaced as instructed, this overridden useragent IP address is
then used for the `mod_authz_host`
`Require ip`
feature, is reported by `mod_status`, and is recorded by
`mod_log_config` `%a` and `core`
`%a` format strings. The underlying client IP of the connection
is available in the `%{c}a` format string and via the
`CONN_REMOTE_ADDR` variable in
[expressions](expr.md).

It is critical to only enable this behavior from
intermediate hosts (proxies, etc) which are trusted by this server, since
it is trivial for the remote useragent to impersonate another
useragent.

### Topics

- ![](../images/down.gif) [Remote IP Processing](#processing)

### Directives

- ![](../images/down.gif) [RemoteIPHeader](#remoteipheader)
- ![](../images/down.gif) [RemoteIPInternalProxy](#remoteipinternalproxy)
- ![](../images/down.gif) [RemoteIPInternalProxyList](#remoteipinternalproxylist)
- ![](../images/down.gif) [RemoteIPProxiesHeader](#remoteipproxiesheader)
- ![](../images/down.gif) [RemoteIPProxyProtocol](#remoteipproxyprotocol)
- ![](../images/down.gif) [RemoteIPProxyProtocolExceptions](#remoteipproxyprotocolexceptions)
- ![](../images/down.gif) [RemoteIPTrustedProxy](#remoteiptrustedproxy)
- ![](../images/down.gif) [RemoteIPTrustedProxyList](#remoteiptrustedproxylist)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_remoteip)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_remoteip)

### See also

- `mod_authz_host`
- `mod_status`
- `mod_log_config`
- [Proxy Protocol Spec](https://www.haproxy.org/download/3.1/doc/proxy-protocol.txt)

[![top](../images/up.gif)](#page-header)

## Remote IP Processing [¶](#processing "Permanent link")

Apache by default identifies the useragent with the connection's
client\_ip value, and the connection remote\_host and remote\_logname are
derived from this value. These fields play a role in authentication,
authorization and logging and other purposes by other loadable
modules.

mod\_remoteip overrides the client IP of the connection with the
advertised useragent IP as provided by a proxy or load balancer, for
the duration of the request. A load balancer might establish a long
lived keepalive connection with the server, and each request will
have the correct useragent IP, even though the underlying client IP
address of the load balancer remains unchanged.

When multiple, comma delimited useragent IP addresses are listed in the
header value, they are processed in Right-to-Left order. Processing
halts when a given useragent IP address is not trusted to present the
preceding IP address. The header field is updated to this remaining
list of unconfirmed IP addresses, or if all IP addresses were trusted,
this header is removed from the request altogether.

In overriding the client IP, the module stores the list of intermediate
hosts in a remoteip-proxy-ip-list note, which `mod_log_config`
can record using the `%{remoteip-proxy-ip-list}n` format token.
If the administrator needs to store this as an additional header, this
same value can also be recording as a header using the directive
`RemoteIPProxiesHeader`.

### IPv4-over-IPv6 Mapped Addresses

As with httpd in general, any IPv4-over-IPv6 mapped addresses are recorded
in their IPv4 representation.

### Internal (Private) Addresses

All internal addresses 10/8, 172.16/12, 192.168/16, 169.254/16 and 127/8
blocks (and IPv6 addresses outside of the public 2000::/3 block) are only
evaluated by mod\_remoteip when `RemoteIPInternalProxy`
internal (intranet) proxies are registered.

[![top](../images/up.gif)](#page-header)

## RemoteIPHeader Directive [¶](#remoteipheader "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Declare the header field which should be parsed for useragent IP addresses |
| [Syntax:](mod__directive-dict.md#Syntax) | `RemoteIPHeader header-field` |
| [Default:](mod__directive-dict.md#Default) | `none` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_remoteip |

The `RemoteIPHeader` directive triggers
`mod_remoteip` to treat the value of the specified
header-field header as the useragent IP address, or list
of intermediate useragent IP addresses, subject to further configuration
of the `RemoteIPInternalProxy` and
`RemoteIPTrustedProxy` directives. Unless these
other directives are used, `mod_remoteip` will trust all
hosts presenting a `RemoteIPHeader` IP value.

### Internal (Load Balancer) Example

```
RemoteIPHeader X-Client-IP
```

### Proxy Example

```
RemoteIPHeader X-Forwarded-For
```

[![top](../images/up.gif)](#page-header)

## RemoteIPInternalProxy Directive [¶](#remoteipinternalproxy "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Declare client intranet IP addresses trusted to present the RemoteIPHeader value |
| [Syntax:](mod__directive-dict.md#Syntax) | `RemoteIPInternalProxy proxy-ip|proxy-ip/subnet|hostname ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_remoteip |

The `RemoteIPInternalProxy` directive adds one
or more addresses (or address blocks) to trust as presenting a valid
RemoteIPHeader value of the useragent IP. Unlike the
`RemoteIPTrustedProxy` directive, any IP address
presented in this header, including private intranet addresses, are
trusted when passed from these proxies.

### Internal (Load Balancer) Example

```
RemoteIPHeader X-Client-IP
RemoteIPInternalProxy 10.0.2.0/24
RemoteIPInternalProxy gateway.localdomain
```

[![top](../images/up.gif)](#page-header)

## RemoteIPInternalProxyList Directive [¶](#remoteipinternalproxylist "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Declare client intranet IP addresses trusted to present the RemoteIPHeader value |
| [Syntax:](mod__directive-dict.md#Syntax) | `RemoteIPInternalProxyList filename` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_remoteip |

The `RemoteIPInternalProxyList` directive specifies
a file parsed at startup, and builds a list of addresses (or address blocks)
to trust as presenting a valid RemoteIPHeader value of the useragent IP.

The '`#`' hash character designates a comment line, otherwise
each whitespace or newline separated entry is processed identically to
the `RemoteIPInternalProxy` directive.

### Internal (Load Balancer) Example

```
RemoteIPHeader X-Client-IP
RemoteIPInternalProxyList conf/trusted-proxies.lst
```

### conf/trusted-proxies.lst contents

```
# Our internally trusted proxies;
10.0.2.0/24         #Everyone in the testing group
gateway.localdomain #The front end balancer
```

[![top](../images/up.gif)](#page-header)

## RemoteIPProxiesHeader Directive [¶](#remoteipproxiesheader "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Declare the header field which will record all intermediate IP addresses |
| [Syntax:](mod__directive-dict.md#Syntax) | `RemoteIPProxiesHeader HeaderFieldName` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_remoteip |

The `RemoteIPProxiesHeader` directive specifies
a header into which `mod_remoteip` will collect a list of
all of the intermediate client IP addresses trusted to resolve the useragent
IP of the request. Note that intermediate
`RemoteIPTrustedProxy` addresses are recorded in
this header, while any intermediate
`RemoteIPInternalProxy` addresses are discarded.

### Example

```
RemoteIPHeader X-Forwarded-For
RemoteIPProxiesHeader X-Forwarded-By
```

[![top](../images/up.gif)](#page-header)

## RemoteIPProxyProtocol Directive [¶](#remoteipproxyprotocol "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable or disable PROXY protocol handling |
| [Syntax:](mod__directive-dict.md#Syntax) | `RemoteIPProxyProtocol On|Off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_remoteip |
| [Compatibility:](mod__directive-dict.md#Compatibility) | RemoteIPProxyProtocol is only available in httpd 2.4.31 and newer |

The `RemoteIPProxyProtocol` directive enables or
disables the reading and handling of the PROXY protocol connection header.
If enabled with the `On` flag, the upstream client *must*
send the header every time it opens a connection or the connection will
be aborted unless it is in the list of disabled hosts provided by the
`RemoteIPProxyProtocolExceptions`
directive.

While this directive may be specified in any virtual host, it is
important to understand that because the PROXY protocol is connection
based and protocol agnostic, the enabling and disabling is actually based
on IP address and port. This means that if you have multiple name-based
virtual hosts for the same host and port, and you enable it for any one of
them, then it is enabled for all of them (with that host and port). It also
means that if you attempt to enable the PROXY protocol in one and disable
in the other, that won't work; in such a case, the last one wins and a
notice will be logged indicating which setting was being overridden.

```
Listen 80
<VirtualHost *:80>
    ServerName www.example.com
    RemoteIPProxyProtocol On

    #Requests to this virtual host must have a PROXY protocol
    # header provided. If it is missing, the connection will
    # be aborted
</VirtualHost>

Listen 8080
<VirtualHost *:8080>
    ServerName www.example.com
    RemoteIPProxyProtocol On
    RemoteIPProxyProtocolExceptions 127.0.0.1 10.0.0.0/8

    #Requests to this virtual host must have a PROXY protocol
    # header provided. If it is missing, the connection will
    # be aborted except when coming from localhost or the
    # 10.x.x.x RFC1918 range
</VirtualHost>
```

[![top](../images/up.gif)](#page-header)

## RemoteIPProxyProtocolExceptions Directive [¶](#remoteipproxyprotocolexceptions "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Disable processing of PROXY header for certain hosts or networks |
| [Syntax:](mod__directive-dict.md#Syntax) | `RemoteIPProxyProtocolExceptions host|range [host|range] [host|range]` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_remoteip |
| [Compatibility:](mod__directive-dict.md#Compatibility) | RemoteIPProxyProtocolExceptions is only available in httpd 2.4.31 and newer |

The `RemoteIPProxyProtocol` directive enables or
disables the reading and handling of the PROXY protocol connection header.
Sometimes it is desirable to require clients to provide the PROXY header, but
permit other clients to connect without it. This directive allows a server
administrator to configure a single host or CIDR range of hosts that may do
so. This is generally useful for monitoring and administrative traffic to a
virtual host direct to the server behind the upstream load balancer.

[![top](../images/up.gif)](#page-header)

## RemoteIPTrustedProxy Directive [¶](#remoteiptrustedproxy "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Declare client intranet IP addresses trusted to present the RemoteIPHeader value |
| [Syntax:](mod__directive-dict.md#Syntax) | `RemoteIPTrustedProxy proxy-ip|proxy-ip/subnet|hostname ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_remoteip |

The `RemoteIPTrustedProxy` directive adds one
or more addresses (or address blocks) to trust as presenting a valid
RemoteIPHeader value of the useragent IP. Unlike the
`RemoteIPInternalProxy` directive, any intranet
or private IP address reported by such proxies, including the 10/8, 172.16/12,
192.168/16, 169.254/16 and 127/8 blocks (or outside of the IPv6 public
2000::/3 block) are not trusted as the useragent IP, and are left in the
`RemoteIPHeader` header's value.

### Trusted (Load Balancer) Example

```
RemoteIPHeader X-Forwarded-For
RemoteIPTrustedProxy 10.0.2.16/28
RemoteIPTrustedProxy proxy.example.com
```

[![top](../images/up.gif)](#page-header)

## RemoteIPTrustedProxyList Directive [¶](#remoteiptrustedproxylist "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Declare client intranet IP addresses trusted to present the RemoteIPHeader value |
| [Syntax:](mod__directive-dict.md#Syntax) | `RemoteIPTrustedProxyList filename` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_remoteip |

The `RemoteIPTrustedProxyList` directive specifies
a file parsed at startup, and builds a list of addresses (or address blocks)
to trust as presenting a valid RemoteIPHeader value of the useragent IP.

The '`#`' hash character designates a comment line, otherwise
each whitespace or newline separated entry is processed identically to
the `RemoteIPTrustedProxy` directive.

### Trusted (Load Balancer) Example

```
RemoteIPHeader X-Forwarded-For
RemoteIPTrustedProxyList conf/trusted-proxies.lst
```

### conf/trusted-proxies.lst contents

`# Identified external proxies;  
192.0.2.16/28 #wap phone group of proxies  
proxy.isp.example.com #some well known ISP`

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_remoteip.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_remoteip.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
