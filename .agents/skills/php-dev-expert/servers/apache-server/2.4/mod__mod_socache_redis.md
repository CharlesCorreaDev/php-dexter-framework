# mod_socache_redis - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_socache_redis.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_socache\_redis

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Redis based shared object cache provider. |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | socache\_redis\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_socache\_redis.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.4.39 and later |

### Summary

`mod_socache_redis` is a shared object cache provider
which provides for creation and access to a cache backed by the
[Redis](https://redis.io/)
high-performance, distributed memory object caching system.

This shared object cache provider's "create" method requires a
comma separated list of memcached host/port specifications. If using
this provider via another modules configuration (such as
`SSLSessionCache`), provide
the list of servers as the optional "arg" parameter.

```
SSLSessionCache redis:redis.example.com:12345,redis2.example.com:12345
```

Details of other shared object cache providers can be found
[here](socache.md).

### Directives

- ![](../images/down.gif) [RedisConnPoolTTL](#redisconnpoolttl)
- ![](../images/down.gif) [RedisTimeout](#redistimeout)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_socache_redis)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_socache_redis)

[![top](../images/up.gif)](#page-header)

## RedisConnPoolTTL Directive [¶](#redisconnpoolttl "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | TTL used for the connection pool with the Redis server(s) |
| [Syntax:](mod__directive-dict.md#Syntax) | `RedisConnPoolTTL num[units]` |
| [Default:](mod__directive-dict.md#Default) | `RedisConnPoolTTL 15s` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_socache\_redis |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.4.39 and later |

Set the time to keep idle connections with the Redis server(s)
alive (threaded platforms only).

Valid values for `RedisConnPoolTTL` are times
up to one hour. 0 means no timeout.

This timeout defaults to units of seconds, but accepts
suffixes for milliseconds (ms), seconds (s), minutes (min), and hours (h).

```
# Set a timeout of 10 minutes
RedisConnPoolTTL 10min
# Set a timeout of 60 seconds
RedisConnPoolTTL 60
```

[![top](../images/up.gif)](#page-header)

## RedisTimeout Directive [¶](#redistimeout "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | R/W timeout used for the connection with the Redis server(s) |
| [Syntax:](mod__directive-dict.md#Syntax) | `RedisTimeout num[units]` |
| [Default:](mod__directive-dict.md#Default) | `RedisTimeout 5s` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_socache\_redis |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Available in Apache 2.4.39 and later |

Set the Read/Write timeout used for the connection with the Redis
server(s).

Valid values for `RedisTimeout` are times
up to one hour. 0 means no timeout.

This timeout defaults to units of seconds, but accepts
suffixes for milliseconds (ms), seconds (s), minutes (min), and hours (h).

```
# Set a timeout of 10 minutes
RedisTimeout 10min
# Set a timeout of 60 seconds
RedisTimeout 60
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_socache_redis.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_socache_redis.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
