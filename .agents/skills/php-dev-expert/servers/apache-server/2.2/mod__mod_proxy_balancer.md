# mod_proxy_balancer - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_proxy_balancer.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_proxy_balancer.html) to go to the current version of this document.

# Apache Module mod\_proxy\_balancer

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | `mod_proxy` extension for load balancing |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_balancer\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_balancer.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.1 and later |

### Summary

This module *requires* the service of `mod_proxy`. It provides load balancing support for
`HTTP`, `FTP` and `AJP13` protocols

Thus, in order to get the ability of load balancing,
`mod_proxy` and `mod_proxy_balancer`
have to be present in the server.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Topics

- ![](../images/down.gif) [Load balancer scheduler algorithm](#scheduler)
- ![](../images/down.gif) [Load balancer stickyness](#stickyness)
- ![](../images/down.gif) [Examples of a balancer configuration](#example)
- ![](../images/down.gif) [Request Counting Algorithm](#requests)
- ![](../images/down.gif) [Weighted Traffic Counting Algorithm](#traffic)
- ![](../images/down.gif) [Pending Request Counting Algorithm](#busyness)
- ![](../images/down.gif) [Exported Environment Variables](#environment)
- ![](../images/down.gif) [Enabling Balancer Manager Support](#balancer_manager)
- ![](../images/down.gif) [Details on load balancer stickyness](#stickyness_implementation)
- ![](../images/down.gif) [Troubleshooting load balancer stickyness](#stickyness_troubleshooting)

### Directives

This module provides no
directives.

### See also

- `mod_proxy`

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Load balancer scheduler algorithm

At present, there are 3 load balancer scheduler algorithms available
for use: Request Counting, Weighted Traffic Counting and Pending Request
Counting. These are controlled via the `lbmethod` value of
the Balancer definition. See the `ProxyPass`
directive for more information.

[![top](../images/up.gif)](#page-header)

## Load balancer stickyness

The balancer supports stickyness. When a request is proxied
to some back-end, then all following requests from the same user
should be proxied to the same back-end. Many load balancers implement
this feature via a table that maps client IP addresses to back-ends.
This approach is transparent to clients and back-ends, but suffers
from some problems: unequal load distribution if clients are themselves
hidden behind proxies, stickyness errors when a client uses a dynamic
IP address that changes during a session and loss of stickyness, if the
mapping table overflows.

The module `mod_proxy_balancer` implements stickyness
on top of two alternative means: cookies and URL encoding. Providing the
cookie can be either done by the back-end or by the Apache web server
itself. The URL encoding is usually done on the back-end.

[![top](../images/up.gif)](#page-header)

## Examples of a balancer configuration

Before we dive into the technical details, here's an example of
how you might use `mod_proxy_balancer` to provide
load balancing between two back-end servers:

`<Proxy balancer://mycluster>  
BalancerMember http://192.168.1.50:80  
BalancerMember http://192.168.1.51:80  
</Proxy>  
ProxyPass /test balancer://mycluster`

Another example of how to provide load balancing with stickyness
using `mod_headers`, even if the back-end server does
not set a suitable session cookie:

`Header add Set-Cookie "ROUTEID=.%{BALANCER_WORKER_ROUTE}e; path=/"
env=BALANCER_ROUTE_CHANGED  
<Proxy balancer://mycluster>  
BalancerMember http://192.168.1.50:80 route=1  
BalancerMember http://192.168.1.51:80 route=2  
ProxySet stickysession=ROUTEID  
</Proxy>  
ProxyPass /test balancer://mycluster`

[![top](../images/up.gif)](#page-header)

## Request Counting Algorithm

Enabled via `lbmethod=byrequests`, the idea behind this
scheduler is that we distribute the requests among the
various workers to ensure that each gets their configured share
of the number of requests. It works as follows:

lbfactor is *how much we expect this worker
to work*, or *the workers's work quota*. This is
a normalized value representing their "share" of the amount of
work to be done.

lbstatus is *how urgent this worker has to work
to fulfill its quota of work*.

The worker is a member of the load balancer,
usually a remote host serving one of the supported protocols.

We distribute each worker's work quota to the worker, and then look
which of them needs to work most urgently (biggest lbstatus). This
worker is then selected for work, and its lbstatus reduced by the
total work quota we distributed to all workers. Thus the sum of all
lbstatus does not change(\*) and we distribute the requests
as desired.

If some workers are disabled, the others will
still be scheduled correctly.

```
for each worker in workers
    worker lbstatus += worker lbfactor
    total factor    += worker lbfactor
    if worker lbstatus > candidate lbstatus
        candidate = worker

candidate lbstatus -= total factor
```

If a balancer is configured as follows:

| worker | a | b | c | d |
| --- | --- | --- | --- | --- |
| lbfactor | 25 | 25 | 25 | 25 |
| lbstatus | 0 | 0 | 0 | 0 |

And b gets disabled, the following schedule is produced:

| worker | a | b | c | d |
| --- | --- | --- | --- | --- |
| lbstatus | *-50* | 0 | 25 | 25 |
| lbstatus | -25 | 0 | *-25* | 50 |
| lbstatus | 0 | 0 | 0 | *0* |
| (repeat) | | | | |

That is it schedules: a c d
a c d a c
d ... Please note that:

| worker | a | b | c | d |
| --- | --- | --- | --- | --- |
| lbfactor | 25 | 25 | 25 | 25 |

Has the exact same behavior as:

| worker | a | b | c | d |
| --- | --- | --- | --- | --- |
| lbfactor | 1 | 1 | 1 | 1 |

This is because all values of lbfactor are normalized
with respect to the others. For:

| worker | a | b | c |
| --- | --- | --- | --- |
| lbfactor | 1 | 4 | 1 |

worker b will, on average, get 4 times the requests
that a and c will.

The following asymmetric configuration works as one would expect:

| worker | a | b |
| --- | --- | --- |
| lbfactor | 70 | 30 |
|  | |
| lbstatus | *-30* | 30 |
| lbstatus | 40 | *-40* |
| lbstatus | *10* | -10 |
| lbstatus | *-20* | 20 |
| lbstatus | *-50* | 50 |
| lbstatus | 20 | *-20* |
| lbstatus | *-10* | 10 |
| lbstatus | *-40* | 40 |
| lbstatus | 30 | *-30* |
| lbstatus | *0* | 0 |
| (repeat) | | |

That is after 10 schedules, the schedule repeats and 7 a
are selected with 3 b interspersed.

[![top](../images/up.gif)](#page-header)

## Weighted Traffic Counting Algorithm

Enabled via `lbmethod=bytraffic`, the idea behind this
scheduler is very similar to the Request Counting method, with
the following changes:

lbfactor is *how much traffic, in bytes, we want
this worker to handle*. This is also a normalized value
representing their "share" of the amount of work to be done,
but instead of simply counting the number of requests, we take
into account the amount of traffic this worker has seen.

If a balancer is configured as follows:

| worker | a | b | c |
| --- | --- | --- | --- |
| lbfactor | 1 | 2 | 1 |

Then we mean that we want b to process twice the
amount of bytes than a or c should. It does
not necessarily mean that b would handle twice as
many requests, but it would process twice the I/O. Thus, the
size of the request and response are applied to the weighting
and selection algorithm.

[![top](../images/up.gif)](#page-header)

## Pending Request Counting Algorithm

Enabled via `lbmethod=bybusyness`, this scheduler keeps
track of how many requests each worker is assigned at present. A new
request is automatically assigned to the worker with the lowest
number of active requests. This is useful in the case of workers
that queue incoming requests independently of Apache, to ensure that
queue length stays even and a request is always given to the worker
most likely to service it fastest.

In the case of multiple least-busy workers, the statistics (and
weightings) used by the Request Counting method are used to break the
tie. Over time, the distribution of work will come to resemble that
characteristic of `byrequests`.

This algorithm is available in Apache HTTP Server 2.2.10 and later.

[![top](../images/up.gif)](#page-header)

## Exported Environment Variables

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

## Enabling Balancer Manager Support

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

`<Location /balancer-manager>  
SetHandler balancer-manager  
  
Order Deny,Allow  
Deny from all  
Allow from .example.com  
</Location>`

You can now access load balancer manager by using a Web browser
to access the page
`http://your.server.name/balancer-manager`

[![top](../images/up.gif)](#page-header)

## Details on load balancer stickyness

When using cookie based stickyness, you need to configure the
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

Some back-ends use a slightly different form of stickyness cookie,
for instance Apache Tomcat. Tomcat adds the name of the Tomcat instance
to the end of its session id cookie, separated with a dot (`.`)
from the session id. Thus if the Apache web server finds a dot in the value
of the stickyness cookie, it only uses the part behind the dot to search
for the route. In order to let Tomcat know about its instance name, you
need to set the attribute `jvmRoute` inside the Tomcat
configuration file `conf/server.xml` to the value of the
route of the worker that connects to the respective Tomcat.
The name of the session cookie used by Tomcat (and more generally by Java
web applications based on servlets) is `JSESSIONID`
(upper case) but can be configured to something else.

The second way of implementing stickyness is URL encoding.
The web server searches for a query parameter in the URL of the request.
The name of the parameter is specified again using stickysession.
The value of the parameter is used to lookup a member worker with route
equal to that value. Since it is not easy to extract and manipulate all
URL links contained in responses, generally the work of adding the parameters
to each link is done by the back-end generating the content.
In some cases it might be feasible doing
this via the web server using `mod_substitute`.
This can have negative impact on performance though.

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

`ProxyPass /test balancer://mycluster stickysession=JSESSIONID|jsessionid scolonpathdelim=On  
<Proxy balancer://mycluster>  
BalancerMember http://192.168.1.50:80 route=node1  
BalancerMember http://192.168.1.51:80 route=node2  
</Proxy>`

If the cookie and the request parameter both provide routing information
for the same request, the information from the request parameter is used.

[![top](../images/up.gif)](#page-header)

## Troubleshooting load balancer stickyness

If you experience stickyness errors, e.g. users lose their
application sessions and need to login again, you first want to
check whether this is because the back-ends are sometimes unavailable
or whether your configuration is wrong. To find out about possible
stability problems with the back-ends, check your Apache error log
for proxy error messages.

To verify your configuration, first check, whether the stickyness
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
stickyness to the error log, if the log level is set to
`debug` or higher. This is an easy way to
troubleshoot stickyness problems, but the log volume might
be to high for production servers under high load.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_proxy_balancer.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_proxy_balancer.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
