# mod_proxy_balancer - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_proxy_balancer.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_proxy\_balancer

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | `mod_proxy` extension for load balancing |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_balancer\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_balancer.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.1 and later |

### Summary

This module *requires* the service of `mod_proxy` and it provides load balancing for
all the supported protocols. The most important ones are:

- HTTP, using `mod_proxy_http`
- FTP, using `mod_proxy_ftp`
- AJP13, using `mod_proxy_ajp`
- WebSocket, using `mod_proxy_wstunnel`

The Load balancing scheduler algorithm is not provided by this
module but from other ones such as:

- `mod_lbmethod_byrequests`
- `mod_lbmethod_bytraffic`
- `mod_lbmethod_bybusyness`
- `mod_lbmethod_heartbeat`

Thus, in order to get the ability of load balancing,
`mod_proxy`, `mod_proxy_balancer`
and at least one of load balancing scheduler algorithm modules have
to be present in the server.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Topics

- ![](../images/down.gif) [Load balancer scheduler algorithm](#scheduler)
- ![](../images/down.gif) [Load balancer stickiness](#stickiness)
- ![](../images/down.gif) [Examples of a balancer configuration](#example)
- ![](../images/down.gif) [Exported Environment Variables](#environment)
- ![](../images/down.gif) [Enabling Balancer Manager Support](#balancer_manager)
- ![](../images/down.gif) [Details on load balancer stickiness](#stickiness_implementation)
- ![](../images/down.gif) [Troubleshooting load balancer stickiness](#stickiness_troubleshooting)

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_proxy_balancer)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_proxy_balancer)

### See also

- `mod_proxy`
- `BalancerMember`
- `BalancerGrowth`
- `BalancerPersist`
- `BalancerInherit`

[![top](../images/up.gif)](#page-header)

## Load balancer scheduler algorithm [¶](#scheduler "Permanent link")

At present, there are 4 load balancer scheduler algorithms available
for use: Request Counting (`mod_lbmethod_byrequests`),
Weighted Traffic Counting (`mod_lbmethod_bytraffic`),
Pending Request Counting (`mod_lbmethod_bybusyness`) and
Heartbeat Traffic Counting (`mod_lbmethod_heartbeat`).
These are controlled via the `lbmethod` value of
the Balancer definition. See the `ProxyPass`
directive for more information, especially regarding how to
configure the Balancer and BalancerMembers.

[![top](../images/up.gif)](#page-header)

## Load balancer stickiness [¶](#stickiness "Permanent link")

The balancer supports stickiness. When a request is proxied
to some back-end, then all following requests from the same user
should be proxied to the same back-end. Many load balancers implement
this feature via a table that maps client IP addresses to back-ends.
This approach is transparent to clients and back-ends, but suffers
from some problems: unequal load distribution if clients are themselves
hidden behind proxies, stickiness errors when a client uses a dynamic
IP address that changes during a session and loss of stickiness, if the
mapping table overflows.

The module `mod_proxy_balancer` implements stickiness
on top of two alternative means: cookies and URL encoding. Providing the
cookie can be either done by the back-end or by the Apache web server
itself. The URL encoding is usually done on the back-end.

[![top](../images/up.gif)](#page-header)

## Examples of a balancer configuration [¶](#example "Permanent link")

Before we dive into the technical details, here's an example of
how you might use `mod_proxy_balancer` to provide
load balancing between two back-end servers:

```
<Proxy "balancer://mycluster">
    BalancerMember "http://192.168.1.50:80"
    BalancerMember "http://192.168.1.51:80"
</Proxy>
ProxyPass        "/test" "balancer://mycluster"
ProxyPassReverse "/test" "balancer://mycluster"
```

Another example of how to provide load balancing with stickiness
using `mod_headers`, even if the back-end server does
not set a suitable session cookie:

```
Header add Set-Cookie "ROUTEID=.%{BALANCER_WORKER_ROUTE}e; path=/" env=BALANCER_ROUTE_CHANGED
<Proxy "balancer://mycluster">
    BalancerMember "http://192.168.1.50:80" route=1
    BalancerMember "http://192.168.1.51:80" route=2
    ProxySet stickysession=ROUTEID
</Proxy>
ProxyPass        "/test" "balancer://mycluster"
ProxyPassReverse "/test" "balancer://mycluster"
```

[![top](../images/up.gif)](#page-header)

## Exported Environment Variables [¶](#environment "Permanent link")

At present there are 6 environment variables exported:

BALANCER\_SESSION\_STICKY
:   This is assigned the stickysession value used for the current
    request. It is the name of the cookie or request parameter used for sticky sessions

BALANCER\_SESSION\_ROUTE
:   This is assigned the route parsed from the current
    request.

BALANCER\_NAME
:   This is assigned the name of the balancer used for the current
    request. The value is something like `balancer://foo`.

BALANCER\_WORKER\_NAME
:   This is assigned the name of the worker used for the current request.
    The value is something like `http://hostA:1234`.

BALANCER\_WORKER\_ROUTE
:   This is assigned the route of the worker that will be
    used for the current request.

BALANCER\_ROUTE\_CHANGED
:   This is set to 1 if the session route does not match the
    worker route (BALANCER\_SESSION\_ROUTE != BALANCER\_WORKER\_ROUTE) or the
    session does not yet have an established route. This can be used to
    determine when/if the client needs to be sent an updated route
    when sticky sessions are used.

[![top](../images/up.gif)](#page-header)

## Enabling Balancer Manager Support [¶](#balancer_manager "Permanent link")

This module *requires* the service of
`mod_status`.
Balancer manager enables dynamic update of balancer
members. You can use balancer manager to change the balance
factor of a particular member, or put it in the off line
mode.

Thus, in order to get the ability of load balancer management,
`mod_status` and `mod_proxy_balancer`
have to be present in the server.

To enable load balancer management for browsers from the example.com
domain add this code to your `httpd.conf`
configuration file

```
<Location "/balancer-manager">
    SetHandler balancer-manager
    Require host example.com
</Location>
```

You can now access load balancer manager by using a Web browser
to access the page
`http://your.server.name/balancer-manager`. Please note
that only Balancers defined outside of `<Location ...>`
containers can be dynamically controlled by the Manager.

[![top](../images/up.gif)](#page-header)

## Details on load balancer stickiness [¶](#stickiness_implementation "Permanent link")

When using cookie based stickiness, you need to configure the
name of the cookie that contains the information about which back-end
to use. This is done via the stickysession attribute added
to either `ProxyPass` or
`ProxySet`. The name of
the cookie is case-sensitive. The balancer extracts the value of the
cookie and looks for a member worker with route equal
to that value. The route must also be set in either
`ProxyPass` or
`ProxySet`. The cookie can either
be set by the back-end, or as shown in the above
[example](#example) by the Apache web server itself.

Some back-ends use a slightly different form of stickiness cookie,
for instance Apache Tomcat. Tomcat adds the name of the Tomcat instance
to the end of its session id cookie, separated with a dot (`.`)
from the session id. Thus if the Apache web server finds a dot in the value
of the stickiness cookie, it only uses the part behind the dot to search
for the route. In order to let Tomcat know about its instance name, you
need to set the attribute `jvmRoute` inside the Tomcat
configuration file `conf/server.xml` to the value of the
route of the worker that connects to the respective Tomcat.
The name of the session cookie used by Tomcat (and more generally by Java
web applications based on servlets) is `JSESSIONID`
(upper case) but can be configured to something else.

The second way of implementing stickiness is URL encoding.
The web server searches for a query parameter in the URL of the request.
The name of the parameter is specified again using stickysession.
The value of the parameter is used to lookup a member worker with route
equal to that value. Since it is not easy to extract and manipulate all
URL links contained in responses, generally the work of adding the parameters
to each link is done by the back-end generating the content.
In some cases it might be feasible doing
this via the web server using `mod_substitute` or
`mod_sed`. This can have negative impact on performance though.

The Java standards implement URL encoding slightly different. They use
a path info appended to the URL using a semicolon (`;`)
as the separator and add the session id behind. As in the cookie case,
Apache Tomcat can include the configured `jvmRoute` in this path
info. To let Apache find this sort of path info, you need to set
`scolonpathdelim` to `On` in
`ProxyPass` or
`ProxySet`.

Finally you can support cookies and URL encoding at the same time, by
configuring the name of the cookie and the name of the URL parameter
separated by a vertical bar (`|`) as in the following example:

```
ProxyPass "/test" "balancer://mycluster" stickysession=JSESSIONID|jsessionid scolonpathdelim=On
<Proxy "balancer://mycluster">
    BalancerMember "http://192.168.1.50:80" route=node1
    BalancerMember "http://192.168.1.51:80" route=node2
</Proxy>
```

If the cookie and the request parameter both provide routing information
for the same request, the information from the request parameter is used.

[![top](../images/up.gif)](#page-header)

## Troubleshooting load balancer stickiness [¶](#stickiness_troubleshooting "Permanent link")

If you experience stickiness errors, e.g. users lose their
application sessions and need to login again, you first want to
check whether this is because the back-ends are sometimes unavailable
or whether your configuration is wrong. To find out about possible
stability problems with the back-ends, check your Apache error log
for proxy error messages.

To verify your configuration, first check, whether the stickiness
is based on a cookie or on URL encoding. Next step would be logging
the appropriate data in the access log by using an enhanced
`LogFormat`.
The following fields are useful:

`%{MYCOOKIE}C`
:   The value contained in the cookie with name `MYCOOKIE`.
    The name should be the same given in the stickysession
    attribute.

`%{Set-Cookie}o`
:   This logs any cookie set by the back-end. You can track,
    whether the back-end sets the session cookie you expect, and
    to which value it is set.

`%{BALANCER_SESSION_STICKY}e`
:   The name of the cookie or request parameter used
    to lookup the routing information.

`%{BALANCER_SESSION_ROUTE}e`
:   The route information found in the request.

`%{BALANCER_WORKER_ROUTE}e`
:   The route of the worker chosen.

`%{BALANCER_ROUTE_CHANGED}e`
:   Set to `1` if the route in the request
    is different from the route of the worker, i.e.
    the request couldn't be handled sticky.

Common reasons for loss of session are session timeouts,
which are usually configurable on the back-end server.

The balancer also logs detailed information about handling
stickiness to the error log, if the log level is set to
`debug` or higher. This is an easy way to
troubleshoot stickiness problems, but the log volume might
be too high for production servers under high load.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_proxy_balancer.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_proxy_balancer.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_proxy_balancer.html "Japanese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
