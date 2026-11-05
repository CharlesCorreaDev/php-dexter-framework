# mod_dialup - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_dialup.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_dialup

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Send static content at a bandwidth rate limit, defined by the various old modem standards |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | dialup\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_dialup.c |

### Summary

It is a module that sends static content at a bandwidth rate limit, defined
by the various old modem standards. So, you can browse your site with a 56k
V.92 modem, by adding something like this:

```
<Location "/mysite">
    ModemStandard "V.92"
</Location>
```

Previously to do bandwidth rate limiting modules would have to block an entire
thread, for each client, and insert sleeps to slow the bandwidth down.
Using the new suspend feature, a handler can get callback N milliseconds in
the future, and it will be invoked by the Event MPM on a different thread,
once the timer hits. From there the handler can continue to send data to the client.

### Directives

- ![](../images/down.gif) [ModemStandard](#modemstandard)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_dialup)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_dialup)

[![top](../images/up.gif)](#page-header)

## ModemStandard Directive [¶](#modemstandard "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Modem standard to simulate |
| [Syntax:](mod__directive-dict.md#Syntax) | `ModemStandard V.21|V.26bis|V.32|V.34|V.92` |
| [Context:](mod__directive-dict.md#Context) | directory |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_dialup |

Specify what modem standard you wish to simulate.

```
<Location "/mysite">
    ModemStandard "V.26bis"
</Location>
```

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_dialup.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_dialup.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
