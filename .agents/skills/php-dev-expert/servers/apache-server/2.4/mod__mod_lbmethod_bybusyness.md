# mod_lbmethod_bybusyness - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_lbmethod_bybusyness.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_lbmethod\_bybusyness

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Pending Request Counting load balancer scheduler algorithm for `mod_proxy_balancer` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | lbmethod\_bybusyness\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_lbmethod\_bybusyness.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Split off from `mod_proxy_balancer` in 2.3 |

### Summary

This module does not provide any configuration directives of its own.
It requires the services of `mod_proxy_balancer`, and
provides the `bybusyness` load balancing method.

### Topics

- ![](../images/down.gif) [Pending Request Counting Algorithm](#busyness)

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_lbmethod_bybusyness)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_lbmethod_bybusyness)

### See also

- `mod_proxy`
- `mod_proxy_balancer`

[![top](../images/up.gif)](#page-header)

## Pending Request Counting Algorithm [¶](#busyness "Permanent link")

Enabled via `lbmethod=bybusyness`, this scheduler keeps
track of how many requests each worker is currently assigned at present. A new
request is automatically assigned to the worker with the lowest
number of active requests. This is useful in the case of workers
that queue incoming requests independently of Apache, to ensure that
queue length stays even and a request is always given to the worker
most likely to service it the fastest and reduce latency.

In the case of multiple least-busy workers, the statistics (and
weightings) used by the Request Counting method are used to break the
tie. Over time, the distribution of work will come to resemble that
characteristic of `byrequests` (as implemented
by `mod_lbmethod_byrequests`).

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_lbmethod_bybusyness.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_lbmethod_bybusyness.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
