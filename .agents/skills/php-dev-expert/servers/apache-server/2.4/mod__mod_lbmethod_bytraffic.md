# mod_lbmethod_bytraffic - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_lbmethod_bytraffic.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_lbmethod\_bytraffic

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Weighted Traffic Counting load balancer scheduler algorithm for `mod_proxy_balancer` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | lbmethod\_bytraffic\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_lbmethod\_bytraffic.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Split off from `mod_proxy_balancer` in 2.3 |

### Summary

This module does not provide any configuration directives of its own.
It requires the services of `mod_proxy_balancer`, and
provides the `bytraffic` load balancing method.

### Topics

- ![](../images/down.gif) [Weighted Traffic Counting Algorithm](#traffic)

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_lbmethod_bytraffic)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_lbmethod_bytraffic)

### See also

- `mod_proxy`
- `mod_proxy_balancer`

[![top](../images/up.gif)](#page-header)

## Weighted Traffic Counting Algorithm [¶](#traffic "Permanent link")

Enabled via `lbmethod=bytraffic`, the idea behind this
scheduler is very similar to the Request Counting method, with
the following changes:

lbfactor is *how much traffic, in bytes, we want
this worker to handle*. This is also a normalized value
representing their "share" of the amount of work to be done,
but instead of simply counting the number of requests, we take
into account the amount of traffic this worker has either seen
or produced.

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

Note: input and output bytes are weighted the same.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_lbmethod_bytraffic.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_lbmethod_bytraffic.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
