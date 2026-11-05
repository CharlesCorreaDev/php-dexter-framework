# mod_authz_host - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authz_host.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authz_host.html) to go to the current version of this document.

# Apache Module mod\_authz\_host

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Group authorizations based on host (name or IP address) |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authz\_host\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authz\_host.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

The directives provided by `mod_authz_host` are
used in `<Directory>`,
`<Files>`, and
`<Location>` sections
as well as `.htaccess` files to control access to particular parts of the server.
Access can be controlled based on the client hostname, IP address, or
other characteristics of the client request, as captured in [environment variables](env.md). The `Allow` and `Deny` directives are used to
specify which clients are or are not allowed access to the server,
while the `Order`
directive sets the default access state, and configures how the
`Allow` and `Deny` directives interact with each
other.

Both host-based access restrictions and password-based
authentication may be implemented simultaneously. In that case,
the `Satisfy` directive is used
to determine how the two sets of restrictions interact.

In general, access restriction directives apply to all
access methods (`GET`, `PUT`,
`POST`, etc). This is the desired behavior in most
cases. However, it is possible to restrict some methods, while
leaving other methods unrestricted, by enclosing the directives
in a `<Limit>` section.

### Directives

- ![](../images/down.gif) [Allow](#allow)
- ![](../images/down.gif) [Deny](#deny)
- ![](../images/down.gif) [Order](#order)

### See also

- `Satisfy`
- `Require`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Allow Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Controls which hosts can access an area of the server |
| [Syntax:](mod__directive-dict.md#Syntax) | `Allow from all|host|env=[!]env-variable [host|env=[!]env-variable] ...` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Limit |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_host |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Support for negating env=env-variable was added in 2.2.10 |

The `Allow` directive affects which hosts can
access an area of the server. Access can be controlled by
hostname, IP address, IP address range, or by other
characteristics of the client request captured in environment
variables.

The first argument to this directive is always
`from`. The subsequent arguments can take three
different forms. If `Allow from all` is specified, then
all hosts are allowed access, subject to the configuration of the
`Deny` and `Order` directives as discussed
below. To allow only particular hosts or groups of hosts to access
the server, the *host* can be specified in any of the
following formats:

A (partial) domain-name
:   ### Example:

    `Allow from apache.org  
    Allow from .net example.edu`

    Hosts whose names match, or end in, this string are allowed
    access. Only complete components are matched, so the above
    example will match `foo.apache.org` but it will not
    match `fooapache.org`. This configuration will cause
    Apache to perform a double reverse DNS lookup on the client IP
    address, regardless of the setting of the `HostnameLookups` directive. It will do
    a reverse DNS lookup on the IP address to find the associated
    hostname, and then do a forward lookup on the hostname to assure
    that it matches the original IP address. Only if the forward
    and reverse DNS are consistent and the hostname matches will
    access be allowed.

A full IP address
:   ### Example:

    `Allow from 10.1.2.3  
    Allow from 192.168.1.104 192.168.1.205`

    An IP address of a host allowed access

A partial IP address
:   ### Example:

    `Allow from 10.1  
    Allow from 10 172.20 192.168.2`

    The first 1 to 3 bytes of an IP address, for subnet
    restriction.

A network/netmask pair
:   ### Example:

    `Allow from 10.1.0.0/255.255.0.0`

    A network a.b.c.d, and a netmask w.x.y.z. For more
    fine-grained subnet restriction.

A network/nnn CIDR specification
:   ### Example:

    `Allow from 10.1.0.0/16`

    Similar to the previous case, except the netmask consists of
    nnn high-order 1 bits.

Note that the last three examples above match exactly the
same set of hosts.

IPv6 addresses and IPv6 subnets can be specified as shown
below:

`Allow from 2001:db8::a00:20ff:fea7:ccea  
Allow from 2001:db8::a00:20ff:fea7:ccea/10`

The third format of the arguments to the
`Allow` directive allows access to the server
to be controlled based on the existence of an [environment variable](env.md). When `Allow from
env=env-variable` is specified, then the request is
allowed access if the environment variable env-variable
exists. When `Allow from env=!env-variable` is
specified, then the request is allowed access if the environment
variable env-variable doesn't exist.
The server provides the ability to set environment
variables in a flexible way based on characteristics of the client
request using the directives provided by
`mod_setenvif`. Therefore, this directive can be
used to allow access based on such factors as the clients
`User-Agent` (browser type), `Referer`, or
other HTTP request header fields.

### Example:

`SetEnvIf User-Agent ^KnockKnock/2\.0 let_me_in  
<Directory /docroot>  

Order Deny,Allow  
Deny from all  
Allow from env=let_me_in  
</Directory>`

In this case, browsers with a user-agent string beginning
with `KnockKnock/2.0` will be allowed access, and all
others will be denied.

[![top](../images/up.gif)](#page-header)

## Deny Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Controls which hosts are denied access to the server |
| [Syntax:](mod__directive-dict.md#Syntax) | `Deny from all|host|env=[!]env-variable [host|env=[!]env-variable] ...` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Limit |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_host |

This directive allows access to the server to be restricted
based on hostname, IP address, or environment variables. The
arguments for the `Deny` directive are
identical to the arguments for the `Allow` directive.

[![top](../images/up.gif)](#page-header)

## Order Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Controls the default access state and the order in which `Allow` and `Deny` are evaluated. |
| [Syntax:](mod__directive-dict.md#Syntax) | `Order ordering` |
| [Default:](mod__directive-dict.md#Default) | `Order Deny,Allow` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | Limit |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authz\_host |

The `Order` directive, along with the
`Allow` and `Deny` directives, controls a
three-pass access control system. The first pass processes either
all `Allow` or all
`Deny` directives, as
specified by the `Order` directive. The second
pass parses the rest of the directives (`Deny` or `Allow`). The third pass applies
to all requests which do not match either of the first two.

Note that all `Allow` and `Deny` directives are processed,
unlike a typical firewall, where only the first match is used. The
last match is effective (also unlike a typical firewall).
Additionally, the order in which lines appear in the configuration
files is not significant -- all `Allow` lines are processed as one
group, all `Deny` lines
are considered as another, and the default state is considered by
itself.

*Ordering* is one of:

`Allow,Deny`
:   First, all `Allow` directives are
    evaluated; at least one must match, or the request is rejected.
    Next, all `Deny`
    directives are evaluated. If any matches, the request is rejected.
    Last, any requests which do not match an `Allow` or a `Deny` directive are denied by
    default.

`Deny,Allow`
:   First, all `Deny`
    directives are evaluated; if any match, the request is denied
    **unless** it also matches an `Allow` directive. Any requests
    which do not match any `Allow` or `Deny` directives are
    permitted.

`Mutual-failure`
:   This order has the same effect as `Order
    Allow,Deny` and is deprecated in its favor.

Keywords may only be separated by a comma; *no whitespace*
is allowed between them.

| Match | Allow,Deny result | Deny,Allow result |
| --- | --- | --- |
| Match Allow only | Request allowed | Request allowed |
| Match Deny only | Request denied | Request denied |
| No match | Default to second directive: Denied | Default to second directive: Allowed |
| Match both Allow & Deny | Final match controls: Denied | Final match controls: Allowed |

In the following example, all hosts in the apache.org domain
are allowed access; all other hosts are denied access.

`Order Deny,Allow  
Deny from all  
Allow from apache.org`

In the next example, all hosts in the apache.org domain are
allowed access, except for the hosts which are in the foo.apache.org
subdomain, who are denied access. All hosts not in the apache.org
domain are denied access because the default state is to `Deny` access to the server.

`Order Allow,Deny  
Allow from apache.org  
Deny from foo.apache.org`

On the other hand, if the `Order` in the
last example is changed to `Deny,Allow`, all hosts will
be allowed access. This happens because, regardless of the actual
ordering of the directives in the configuration file, the
`Allow from apache.org` will be evaluated last and will
override the `Deny from foo.apache.org`. All hosts not in
the `apache.org` domain will also be allowed access
because the default state is `Allow`.

The presence of an `Order` directive can
affect access to a part of the server even in the absence of
accompanying `Allow`
and `Deny` directives
because of its effect on the default access state. For example,

`<Directory /www>  

Order Allow,Deny  
</Directory>`

will Deny all access to the `/www` directory
because the default access state is set to
`Deny`.

The `Order` directive controls the order of
access directive processing only within each phase of the server's
configuration processing. This implies, for example, that an
`Allow` or `Deny` directive occurring in a
`<Location>` section
will always be evaluated after an `Allow` or `Deny` directive occurring in a
`<Directory>`
section or `.htaccess` file, regardless of the setting of
the `Order` directive. For details on the
merging of configuration sections, see the documentation on [How Directory, Location and Files sections
work](sections.md).

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authz_host.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/mod/mod_authz_host.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_authz_host.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_authz_host.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
