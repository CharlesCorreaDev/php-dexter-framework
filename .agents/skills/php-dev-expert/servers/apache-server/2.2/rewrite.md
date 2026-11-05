# Apache mod_rewrite - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/rewrite/

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/rewrite/) to go to the current version of this document.

# Apache mod\_rewrite

`mod_rewrite` provides a way to modify incoming
URL requests, dynamically, based on [regular
expression](rewrite__intro.md#regex) rules. This allows you to map arbitrary URLs onto
your internal URL structure in any way you like.

It supports an unlimited number of rules and an
unlimited number of attached rule conditions for each rule to
provide a really flexible and powerful URL manipulation
mechanism. The URL manipulations can depend on various tests:
server variables, environment variables, HTTP
headers, time stamps, external database lookups, and various other
external programs or handlers, can be used to achieve granular URL
matching.

Rewrite rules can operate on the full URLs, including the path-info
and query string portions, and may be used in per-server context
(`httpd.conf`), per-virtualhost context (`<VirtualHost>` blocks), or
per-directory context (`.htaccess` files and `<Directory>` blocks). The
rewritten result can lead to further rules, internal
sub-processing, external request redirection, or proxy
passthrough, depending on what [flags](rewrite__flags.md) you
attach to the rules.

Since mod\_rewrite is so powerful, it can indeed be rather
complex. This document supplements the [reference documentation](mod__mod_rewrite.md), and
attempts to allay some of that complexity, and provide highly
annotated examples of common scenarios that you may handle with
mod\_rewrite. But we also attempt to show you when you should not
use mod\_rewrite, and use other standard Apache features instead,
thus avoiding this unnecessary complexity.

- [mod\_rewrite reference
  documentation](mod__mod_rewrite.md)
- [Introduction to regular expressions and mod\_rewrite](rewrite__intro.md)
- [Using mod\_rewrite for redirection and remapping of URLs](rewrite__remapping.md)
- [Using mod\_rewrite to control access](rewrite__access.md)
- [Dynamic virtual hosts with mod\_rewrite](rewrite__vhosts.md)
- [Dynamic proxying with mod\_rewrite](rewrite__proxy.md)
- [Using RewriteMap](rewrite__rewritemap.md)
- [Advanced techniques and tricks](rewrite__advanced.md)
- [When **NOT** to use mod\_rewrite](rewrite__avoid.md)
- [RewriteRule Flags](rewrite__flags.md)
- [Technical details](rewrite__tech.md)

### See also

- [mod\_rewrite reference
  documentation](mod__mod_rewrite.md)
- [Mapping URLs to the Filesystem](urlmapping.md)
- [mod\_rewrite
  wiki](http://wiki.apache.org/httpd/Rewrite)
- [Glossary](glossary.md)

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/rewrite/ "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/rewrite/ "Français") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/rewrite/ "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.2/pt-br/zh-cn/rewrite/ "Simplified Chinese")

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
