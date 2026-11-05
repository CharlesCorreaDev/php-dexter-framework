# mod_proxy_uwsgi - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_proxy_uwsgi.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_proxy\_uwsgi

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | UWSGI gateway module for `mod_proxy` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_uwsgi\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_uwsgi.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in version 2.4.30 and later |

### Summary

This module *requires* the service of `mod_proxy`. It provides support for the
[UWSGI protocol](http://uwsgi-docs.readthedocs.io/en/latest/index.html).

Thus, in order to get the ability of handling the UWSGI protocol,
`mod_proxy` and `mod_proxy_uwsgi` have to
be present in the server.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Topics

- ![](../images/down.gif) [Examples](#examples)

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_proxy_uwsgi)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_proxy_uwsgi)

### See also

- `mod_proxy`
- `mod_proxy_balancer`

[![top](../images/up.gif)](#page-header)

## Examples [¶](#examples "Permanent link")

Remember, in order to make the following examples work, you have to
enable `mod_proxy` and `mod_proxy_uwsgi`.

### Simple gateway

```
ProxyPass "/uwsgi-bin/" "uwsgi://localhost:4000/"
```

The balanced gateway needs `mod_proxy_balancer` and
at least one load balancer algorithm module, such as
`mod_lbmethod_byrequests`, in addition to the proxy
modules listed above. `mod_lbmethod_byrequests` is the
default, and will be used for this example configuration.

### Balanced gateway

```
ProxyPass "/uwsgi-bin/" "balancer://somecluster/"
<Proxy balancer://somecluster>
    BalancerMember uwsgi://localhost:4000
    BalancerMember uwsgi://localhost:4001
</Proxy>
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_proxy_uwsgi.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_proxy_uwsgi.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
