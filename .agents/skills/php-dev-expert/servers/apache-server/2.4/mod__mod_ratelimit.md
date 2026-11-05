# mod_ratelimit - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_ratelimit.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_ratelimit

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Bandwidth Rate Limiting for Clients |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | ratelimit\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_ratelimit.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | `rate-initial-burst` available in httpd 2.4.24 and later. Rate limiting proxied content does not work correctly up to httpd 2.4.33. |

### Summary

Provides a filter named `RATE_LIMIT` to limit client bandwidth.
The throttling is applied to each HTTP response while it is transferred to the client,
and not aggregated at IP/client level.
The connection speed to be simulated is specified, in KiB/s, using the environment
variable `rate-limit`.

Optionally, an initial amount of burst data, in KiB, may be
configured to be passed at full speed before throttling to the
specified rate limit. This value is optional, and is set using
the environment variable `rate-initial-burst`.

### Resource consumption

Rate limiting is implemented by sleeping between writes to the client,
so each rate-limited response occupies a server thread (or process) for
the entire, deliberately prolonged, duration of the transfer. This applies
to all MPMs, including `event`. A modest number of slow,
rate-limited downloads can exhaust the server's available workers and
prevent other requests from being served. Use this module with caution,
limit it to the resources that need it, and size
`MaxRequestWorkers` accordingly.

### Example Configuration

```
<Location "/downloads">
    SetOutputFilter RATE_LIMIT
    SetEnv rate-limit 400 
    SetEnv rate-initial-burst 512
</Location>
```

If the value specified for `rate-limit` causes integer overflow, the rate-limited will be disabled.
If the value specified for `rate-limit-burst` causes integer overflow, the burst will be disabled.

### Directives

This module provides no
directives.

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_ratelimit)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_ratelimit)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_ratelimit.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_ratelimit.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
