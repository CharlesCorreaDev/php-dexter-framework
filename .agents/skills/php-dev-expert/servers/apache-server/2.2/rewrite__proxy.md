# Using mod_rewrite for Proxying - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/rewrite/proxy.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](rewrite.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Rewrite](rewrite.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/rewrite/proxy.html) to go to the current version of this document.

# Using mod\_rewrite for Proxying

This document supplements the `mod_rewrite`
[reference documentation](mod__mod_rewrite.md). It describes
how to use the RewriteRule's [P] flag to proxy content to another server.
A number of recipes are provided that describe common scenarios.

### See also

- [Module documentation](mod__mod_rewrite.md)
- [mod\_rewrite introduction](rewrite__intro.md)
- [Redirection and remapping](rewrite__remapping.md)
- [Controlling access](rewrite__access.md)
- [Virtual hosts](rewrite__vhosts.md)
- [Using RewriteMap](rewrite__rewritemap.md)
- [Advanced techniques and tricks](rewrite__advanced.md)
- [When not to use mod\_rewrite](rewrite__avoid.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Proxying Content with mod\_rewrite

Description:
:   mod\_rewrite provides the [P] flag, which allows URLs to be passed,
    via mod\_proxy, to another server. Two examples are given here. In
    one example, a URL is passed directly to another server, and served
    as though it were a local URL. In the other example, we proxy
    missing content to a back-end server.

Solution:
:   To simply map a URL to another server, we use the [P] flag, as
    follows:

    `RewriteEngine on  
    RewriteBase /products/  
    RewriteRule ^widget/(.*)$ http://product.example.com/widget/$1 [P]  
    ProxyPassReverse /products/widget/ http://product.example.com/widget/`

    In the second example, we proxy the request only if we can't find
    the resource locally. This can be very useful when you're migrating
    from one server to another, and you're not sure if all the content
    has been migrated yet.

    `RewriteCond %{REQUEST_FILENAME} !-f  
    RewriteCond %{REQUEST_FILENAME} !-d  
    RewriteRule ^/(.*) http://old.example.com/$1 [P]  
    ProxyPassReverse / http://old.example.com/`

Discussion:
:   In each case, we add a `ProxyPassReverse` directive to ensure
    that any redirects issued by the backend are correctly passed on to
    the client.

    Consider using either `ProxyPass` or `ProxyPassMatch` whenever possible in
    preference to mod\_rewrite.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/rewrite/proxy.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
