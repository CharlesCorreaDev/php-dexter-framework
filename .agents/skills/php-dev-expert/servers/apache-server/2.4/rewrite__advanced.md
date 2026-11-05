# Advanced Techniques with mod_rewrite - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/rewrite/advanced.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](rewrite.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Rewrite](rewrite.md)

# Advanced Techniques with mod\_rewrite

This document has been deprecated. Its content has
been reorganized into the following topical documents, where it can be
found alongside related recipes and examples. This page will be removed
in a future version of this documentation.

- **URL-based sharding** - See
  [Using RewriteMap](rewrite__rewritemap.md#sharding)
- **On-the-fly content regeneration** - See
  [Redirection and remapping](rewrite__remapping.md#on-the-fly-content)
- **Load balancing** - See
  [When not to use mod\_rewrite](rewrite__avoid.md#load-balancing)
- **Structured userdirs** - See
  [Redirection and remapping](rewrite__remapping.md#structuredhomedirs)
- **Redirecting anchors** - See
  [Redirection and remapping](rewrite__remapping.md#redirectanchors)
- **Time-dependent rewriting** - See
  [Redirection and remapping](rewrite__remapping.md#time-dependent)
- **Set environment variables based on URL** - See
  [RewriteRule Flags](rewrite__flags.md#flag_e)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/rewrite/advanced.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/rewrite/advanced.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
