# Shared Object Cache in Apache HTTP Server - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/socache.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# Shared Object Cache in Apache HTTP Server

The Shared Object Cache provides a means to share simple data
across all a server's workers, regardless of [thread
and process models](mpm.md). It is used where the advantages of sharing
data across processes outweigh the performance overhead of
inter-process communication.

[![top](./images/up.gif)](#page-header)

## Shared Object Cache Providers [¶](#providers "Permanent link")

The shared object cache as such is an abstraction. Five different
modules implement it. To use the cache, one or more of these modules
must be present, and configured.

The only configuration required is to select which cache provider
to use. This is the responsibility of modules using the cache, and
they enable selection using directives such as
`CacheSocache`,
`AuthnCacheSOCache`,
`SSLSessionCache`, and
`SSLStaplingCache`.

Currently available providers are:

"dbm" (`mod_socache_dbm`)
:   This makes use of a DBM hash file.
    The choice of underlying DBM used may be configurable
    if the installed APR version supports multiple DBM implementations.

"dc" (`mod_socache_dc`)
:   This makes use of the [distcache](http://distcache.sourceforge.net/)
    distributed session caching libraries.

"memcache" (`mod_socache_memcache`)
:   This makes use of the [memcached](http://memcached.org/)
    high-performance, distributed memory object caching system.

"redis" (`mod_socache_redis`)
:   This makes use of the [Redis](http://redis.io/)
    high-performance, distributed memory object caching system.

"shmcb" (`mod_socache_shmcb`)
:   This makes use of a high-performance cyclic buffer inside a
    shared memory segment.

The API provides the following functions:

const char \*create(ap\_socache\_instance\_t \*\*instance, const char \*arg, apr\_pool\_t \*tmp, apr\_pool\_t \*p);
:   Create a session cache based on the given configuration string.
    The instance pointer returned in the instance parameter will be
    passed as the first argument to subsequent invocations.

apr\_status\_t init(ap\_socache\_instance\_t \*instance, const char \*cname, const struct ap\_socache\_hints \*hints, server\_rec \*s, apr\_pool\_t \*pool)
:   Initialize the cache. The cname must be of maximum length 16
    characters, and uniquely identifies the consumer of the cache
    within the server; using the module name is recommended, e.g.
    "mod\_ssl-sess". This string may be used within a filesystem
    path so use of only alphanumeric [a-z0-9\_-] characters is
    recommended. If hints is non-NULL, it gives a set of hints for
    the provider. Return APR error code.

void destroy(ap\_socache\_instance\_t \*instance, server\_rec \*s)
:   Destroy a given cache instance object.

apr\_status\_t store(ap\_socache\_instance\_t \*instance, server\_rec \*s, const unsigned char \*id, unsigned int idlen, apr\_time\_t expiry, unsigned char \*data, unsigned int datalen, apr\_pool\_t \*pool)
:   Store an object in a cache instance.

apr\_status\_t retrieve(ap\_socache\_instance\_t \*instance, server\_rec \*s, const unsigned char \*id, unsigned int idlen, unsigned char \*data, unsigned int \*datalen, apr\_pool\_t \*pool)
:   Retrieve a cached object.

apr\_status\_t remove(ap\_socache\_instance\_t \*instance, server\_rec \*s, const unsigned char \*id, unsigned int idlen, apr\_pool\_t \*pool)
:   Remove an object from the cache.

void status(ap\_socache\_instance\_t \*instance, request\_rec \*r, int flags)
:   Dump the status of a cache instance for mod\_status.

apr\_status\_t iterate(ap\_socache\_instance\_t \*instance, server\_rec \*s, void \*userctx, ap\_socache\_iterator\_t \*iterator, apr\_pool\_t \*pool)
:   Dump all cached objects through an iterator callback.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/socache.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/socache.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
