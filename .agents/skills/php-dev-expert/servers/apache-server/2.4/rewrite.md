# Guide to Apache mod_rewrite - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/rewrite/

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# Guide to Apache mod\_rewrite

*The great thing about mod\_rewrite is it gives you all the
configurability and flexibility of Sendmail. The downside to
mod\_rewrite is that it gives you all the configurability and
flexibility of Sendmail.*
-- Brian Behlendorf

*Despite the tons of examples and docs, mod\_rewrite is voodoo.
Damned cool voodoo, but still voodoo.*
-- Brian Moore

`mod_rewrite` provides a way to modify incoming
URL requests, dynamically, based on [regular
expression](rewrite__intro.md#regex) rules. This allows you to map arbitrary URLs onto
your internal URL structure in any way you like.

This guide supplements [the
reference manual](mod__mod_rewrite.md) with annotated examples, conceptual
explanations, and practical advice. It is organized as follows:

[Introduction](rewrite__intro.md)
:   Core concepts: regular expression syntax, RewriteRule and
    RewriteCond basics, and how mod\_rewrite fits into the request
    processing lifecycle.

[Per-directory Rewrites](rewrite__htaccess.md)
:   The key differences between using rewrite rules in server
    configuration versus [per-directory](glossary.md#perdirectory "see glossary")
    context, including path stripping, RewriteBase, and the looping behavior
    of the [L] flag.

[RewriteRule Flags](rewrite__flags.md)
:   A complete reference for all flags that can modify the behavior of
    a RewriteRule, with examples for each.

[Using RewriteMap](rewrite__rewritemap.md)
:   How to use external lookup sources — text files, DBM databases,
    SQL queries, and internal functions — to drive your rewrite
    rules.

[Redirection and Remapping](rewrite__remapping.md)
:   Recipes for common tasks: HTTPS redirection, canonical hostnames,
    trailing slash normalization, front-controller routing, and more.

[Dynamic Virtual Hosts](rewrite__vhosts.md)
:   Using mod\_rewrite to dynamically map hostnames to document roots
    without individual VirtualHost blocks.

[When NOT to use mod\_rewrite](rewrite__avoid.md)
:   Many common tasks are better accomplished with simpler directives.
    This document shows the alternatives and when to prefer them.

[Technical Details](rewrite__tech.md)
:   How mod\_rewrite hooks into the Apache request processing phases,
    and the order in which rules and conditions are evaluated.

### See also

- [mod\_rewrite Reference Documentation](mod__mod_rewrite.md)
- [Mapping URLs to the Filesystem](urlmapping.md)
- [mod\_rewrite
  wiki](https://cwiki.apache.org/confluence/display/httpd/Rewrite)
- [Glossary](glossary.md)

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/rewrite/ "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/rewrite/ "Français") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/rewrite/ "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.4/pt-br/zh-cn/rewrite/ "Simplified Chinese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
