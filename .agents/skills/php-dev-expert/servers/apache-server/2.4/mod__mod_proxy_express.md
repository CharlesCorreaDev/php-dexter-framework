# mod_proxy_express - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_proxy_express.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_proxy\_express

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Dynamic mass reverse proxy extension for `mod_proxy` |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | proxy\_express\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_proxy\_express.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.3.13 and later |

### Summary

This module creates dynamically configured mass reverse
proxies, by mapping the `Host:` header of the HTTP request to
a server name and backend URL stored in a DBM file.
This allows for easy use of a huge number of reverse proxies
with no configuration changes. It is much less feature-full
than `mod_proxy_balancer`, which also provides
dynamic growth, but is intended to handle much, much
larger numbers of backends. It is ideally suited as a
front-end HTTP switch and for micro-services architectures.

This module *requires* the service of `mod_proxy`.

### Warning

Do not enable proxying until you have [secured your server](mod__mod_proxy.md#access). Open proxy
servers are dangerous both to your network and to the Internet at
large.

### Limitations

- This module is not intended to replace the dynamic capability of
  `mod_proxy_balancer`. Instead, it is intended to be mostly
  a lightweight and fast alternative to using `mod_rewrite`
  with `RewriteMap` and the
  `[P]` flag for mapped reverse proxying.
- It does not support regex or pattern matching at all.
- It emulates:

  ```
  <VirtualHost *:80>
     ServerName front.end.server
     ProxyPass        "/" "back.end.server:port"
     ProxyPassReverse "/" "back.end.server:port"
  </VirtualHost>
  ```

  That is, the entire URL is appended to the mapped backend
  URL. This is in keeping with the intent of being a simple
  but fast reverse proxy switch.

### Directives

- ![](../images/down.gif) [ProxyExpressDBMFile](#proxyexpressdbmfile)
- ![](../images/down.gif) [ProxyExpressDBMType](#proxyexpressdbmtype)
- ![](../images/down.gif) [ProxyExpressEnable](#proxyexpressenable)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_proxy_express)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_proxy_express)

### See also

- `mod_proxy`
- `BalancerMember`
- `BalancerGrowth`
- `BalancerPersist`
- `BalancerInherit`

[![top](../images/up.gif)](#page-header)

## ProxyExpressDBMFile Directive [¶](#proxyexpressdbmfile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Pathname to DBM file. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyExpressDBMFile pathname` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_express |

The `ProxyExpressDBMFile` directive
points to the location of the Express map DBM file. This
file serves to map the incoming server name, obtained from
the `Host:` header, to a backend URL.

### Note

The file is constructed from a plain text file format using
the `httxt2dbm`
utility.

### ProxyExpress map file

`##  
##express-map.txt:  
##  
  
www1.example.com http://192.168.211.2:8080  
www2.example.com http://192.168.211.12:8088  
www3.example.com http://192.168.212.10`

### Create DBM file

`httxt2dbm -i express-map.txt -o emap`

### Configuration

```
ProxyExpressEnable on
ProxyExpressDBMFile emap
```

[![top](../images/up.gif)](#page-header)

## ProxyExpressDBMType Directive [¶](#proxyexpressdbmtype "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | DBM type of file. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyExpressDBMType type` |
| [Default:](mod__directive-dict.md#Default) | `ProxyExpressDBMType default` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_express |

The `ProxyExpressDBMType` directive
controls the DBM type expected by the module. The default
is the default DBM type created with `httxt2dbm`.

Possible values are (not all may be available at run time):

| Value | Description |
| --- | --- |
| `db` | Berkeley DB files |
| `gdbm` | GDBM files |
| `ndbm` | NDBM files |
| `sdbm` | SDBM files (always available) |
| `default` | default DBM type |

[![top](../images/up.gif)](#page-header)

## ProxyExpressEnable Directive [¶](#proxyexpressenable "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable the module functionality. |
| [Syntax:](mod__directive-dict.md#Syntax) | `ProxyExpressEnable on|off` |
| [Default:](mod__directive-dict.md#Default) | `ProxyExpressEnable off` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_proxy\_express |

The `ProxyExpressEnable` directive
controls whether the module will be active.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_proxy_express.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_proxy_express.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
