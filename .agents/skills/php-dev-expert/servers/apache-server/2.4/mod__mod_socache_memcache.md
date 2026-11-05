# mod_socache_memcache - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_socache_memcache.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_socache\_memcache

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Memcache based shared object cache provider. |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | socache\_memcache\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_socache\_memcache.c |

### Summary

`mod_socache_memcache` is a shared object cache provider
which provides for creation and access to a cache backed by the
[memcached](http://memcached.org/)
high-performance, distributed memory object caching system.

This shared object cache provider's "create" method requires a
comma separated list of memcached host/port specifications. If using
this provider via another modules configuration (such as
`SSLSessionCache`), provide
the list of servers as the optional "arg" parameter.

```
SSLSessionCache memcache:memcache.example.com:12345,memcache2.example.com:12345
```

Details of other shared object cache providers can be found
[here](socache.md).

### Directives

- ![](../images/down.gif) [MemcacheConnTTL](#memcacheconnttl)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_socache_memcache)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_socache_memcache)

[![top](../images/up.gif)](#page-header)

## MemcacheConnTTL Directive [¶](#memcacheconnttl "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Keepalive time for idle connections |
| [Syntax:](mod__directive-dict.md#Syntax) | `MemcacheConnTTL num[units]` |
| [Default:](mod__directive-dict.md#Default) | `MemcacheConnTTL 15s` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_socache\_memcache |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.4.17 and later |

Set the time to keep idle connections with the memcache server(s)
alive (threaded platforms only).

Valid values for `MemcacheConnTTL` are times
up to one hour. 0 means no timeout.

This timeout defaults to units of seconds, but accepts
suffixes for milliseconds (ms), seconds (s), minutes (min), and hours (h).

Before Apache 2.4.17, this timeout was hardcoded and its value was 600 usec.
So, the closest configuration to match the legacy behavior is to set
`MemcacheConnTTL` to 1ms.

```
# Set a timeout of 10 minutes
MemcacheConnTTL 10min
# Set a timeout of 60 seconds
MemcacheConnTTL 60
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_socache_memcache.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_socache_memcache.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
