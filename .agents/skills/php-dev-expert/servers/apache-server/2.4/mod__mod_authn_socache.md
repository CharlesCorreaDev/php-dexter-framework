# mod_authn_socache - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_authn_socache.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_authn\_socache

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Manages a cache of authentication credentials to relieve the load on backends |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authn\_socache\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authn\_socache.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Version 2.3 and later |

### Summary

Maintains a cache of authentication credentials, so that a new backend
lookup is not required for every authenticated request.

### Topics

- ![](../images/down.gif) [Authentication Caching](#intro)
- ![](../images/down.gif) [Usage](#usage)
- ![](../images/down.gif) [Caching with custom modules](#dev)

### Directives

- ![](../images/down.gif) [AuthnCacheContext](#authncachecontext)
- ![](../images/down.gif) [AuthnCacheEnable](#authncacheenable)
- ![](../images/down.gif) [AuthnCacheProvideFor](#authncacheprovidefor)
- ![](../images/down.gif) [AuthnCacheSOCache](#authncachesocache)
- ![](../images/down.gif) [AuthnCacheTimeout](#authncachetimeout)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_authn_socache)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_authn_socache)

[![top](../images/up.gif)](#page-header)

## Authentication Caching [¶](#intro "Permanent link")

Some users of more heavyweight authentication such as SQL database
lookups (`mod_authn_dbd`) have reported it putting an
unacceptable load on their authentication provider. A typical case
in point is where an HTML page contains hundreds of objects
(images, scripts, stylesheets, media, etc), and a request to the page
generates hundreds of effectively-immediate requests for authenticated
additional contents.

`mod_authn_socache` provides a solution to this problem by
maintaining a cache of authentication credentials.

[![top](../images/up.gif)](#page-header)

## Usage [¶](#usage "Permanent link")

The authentication cache should be used where authentication
lookups impose a significant load on the server, or a backend or
network. Authentication by file (`mod_authn_file`)
or dbm (`mod_authn_dbm`) are unlikely to benefit,
as these are fast and lightweight in their own right (though in some
cases, such as a network-mounted file, caching may be worthwhile).
Other providers such as SQL or LDAP based authentication are more
likely to benefit, particularly where there is an observed
performance issue. Amongst the standard modules, `mod_authnz_ldap` manages its own cache, so only
`mod_authn_dbd` will usually benefit from this cache.

The basic rules to cache for a provider are:

1. Include the provider you're caching for in an
   `AuthnCacheProvideFor` directive.
2. List socache ahead of the provider you're
   caching for in your `AuthBasicProvider` or `AuthDigestProvider` directive.

A simple usage example to accelerate `mod_authn_dbd`
using dbm as a cache engine:

```
#AuthnCacheSOCache is optional.  If specified, it is server-wide
AuthnCacheSOCache dbm
<Directory "/usr/www/myhost/private">
    AuthType Basic
    AuthName "Cached Authentication Example"
    AuthBasicProvider socache dbd
    AuthDBDUserPWQuery "SELECT password FROM authn WHERE user = %s"
    AuthnCacheProvideFor dbd
    Require valid-user
    #Optional
    AuthnCacheContext dbd-authn-example
</Directory>
```

[![top](../images/up.gif)](#page-header)

## Caching with custom modules [¶](#dev "Permanent link")

Module developers should note that their modules must be enabled
for caching with `mod_authn_socache`. A single optional API function
ap\_authn\_cache\_store is provided to cache credentials
a provider has just looked up or generated. Usage examples are
available in [r957072](http://svn.eu.apache.org/viewvc?view=revision&revision=957072), in which three authn providers are enabled for caching.

[![top](../images/up.gif)](#page-header)

## AuthnCacheContext Directive [¶](#authncachecontext "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify a context string for use in the cache key |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthnCacheContext directory|server|custom-string` |
| [Default:](mod__directive-dict.md#Default) | `AuthnCacheContext directory` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_socache |

This directive specifies a string to be used along with the supplied
username (and realm in the case of Digest Authentication) in constructing
a cache key. This serves to disambiguate identical usernames serving
different authentication areas on the server.

Two special values for this are `directory`, which uses
the directory context of the request as a string, and `server`
which uses the virtual host name.

The default is `directory`, which is also the most
conservative setting. This is likely to be less than optimal, as it
(for example) causes $app-base, $app-base/images,
$app-base/scripts and $app-base/media each to
have its own separate cache key. A better policy is to name the
`AuthnCacheContext` for the password
provider: for example a htpasswd file or database table.

Contexts can be shared across different areas of a server, where
credentials are shared. However, this has potential to become a vector
for cross-site or cross-application security breaches, so this directive
is not permitted in .htaccess contexts.

[![top](../images/up.gif)](#page-header)

## AuthnCacheEnable Directive [¶](#authncacheenable "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Enable Authn caching configured anywhere |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthnCacheEnable` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_socache |

This directive is not normally necessary: it is implied if
authentication caching is enabled anywhere in httpd.conf.
However, if it is not enabled anywhere in httpd.conf
it will by default not be initialized, and is therefore not
available in a .htaccess context. This directive
ensures it is initialized so it can be used in .htaccess.

[![top](../images/up.gif)](#page-header)

## AuthnCacheProvideFor Directive [¶](#authncacheprovidefor "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Specify which authn provider(s) to cache for |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthnCacheProvideFor authn-provider [...]` |
| [Default:](mod__directive-dict.md#Default) | `None` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_socache |

This directive specifies an authentication provider or providers
to cache for. Credentials found by a provider not listed in an
`AuthnCacheProvideFor` directive will not be cached.

For example, to cache credentials found by `mod_authn_dbd`
or by a custom provider myprovider, but leave those looked
up by lightweight providers like file or dbm lookup alone:

```
AuthnCacheProvideFor dbd myprovider
```

[![top](../images/up.gif)](#page-header)

## AuthnCacheSOCache Directive [¶](#authncachesocache "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Select socache backend provider to use |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthnCacheSOCache provider-name[:provider-args]` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_socache |
| [Compatibility:](mod__directive-dict.md#Compatibility) | Optional provider arguments are available in Apache HTTP Server 2.4.7 and later |

This is a server-wide setting to select a provider for the
[shared object cache](socache.md), followed by
optional arguments for that provider.
Some possible values for provider-name are "dbm", "dc",
"memcache", or "shmcb", each subject to the appropriate module
being loaded. If not set, your platform's default will be used.

[![top](../images/up.gif)](#page-header)

## AuthnCacheTimeout Directive [¶](#authncachetimeout "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Set a timeout for cache entries |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthnCacheTimeout timeout (seconds)` |
| [Default:](mod__directive-dict.md#Default) | `AuthnCacheTimeout 300 (5 minutes)` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_socache |

Caching authentication data can be a security issue, though short-term
caching is unlikely to be a problem. Typically a good solution is to
cache credentials for as long as it takes to relieve the load on a
backend, but no longer, though if changes to your users and passwords
are infrequent then a longer timeout may suit you. The default 300
seconds (5 minutes) is both cautious and ample to keep the load
on a backend such as dbd (SQL database queries) down.

This should not be confused with session timeout, which is an
entirely separate issue. However, you may wish to check your
session-management software for whether cached credentials can
"accidentally" extend a session, and bear it in mind when setting
your timeout.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_authn_socache.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_authn_socache.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
