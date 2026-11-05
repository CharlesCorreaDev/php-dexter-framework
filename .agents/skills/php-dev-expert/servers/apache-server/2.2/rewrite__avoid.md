# When not to use mod_rewrite - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/rewrite/avoid.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](rewrite.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Rewrite](rewrite.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/rewrite/avoid.html) to go to the current version of this document.

# When not to use mod\_rewrite

This document supplements the `mod_rewrite`
[reference documentation](mod__mod_rewrite.md). It describes
perhaps one of the most important concepts about mod\_rewrite - namely,
when to avoid using it.

mod\_rewrite should be considered a last resort, when other
alternatives are found wanting. Using it when there are simpler
alternatives leads to configurations which are confusing, fragile, and
hard to maintain. Understanding what other alternatives are available is
a very important step towards mod\_rewrite mastery.

Note that many of these examples won't work unchanged in your
particular server configuration, so it's important that you understand
them, rather than merely cutting and pasting the examples into your
configuration.

The most common situation in which `mod_rewrite` is
the right tool is when the very best solution requires access to the
server configuration files, and you don't have that access. Some
configuration directives are only available in the server configuration
file. So if you are in a hosting situation where you only have .htaccess
files to work with, you may need to resort to
`mod_rewrite`.

- ![](../images/down.gif) [Simple Redirection](#redirect)
- ![](../images/down.gif) [URL Aliasing](#alias)
- ![](../images/down.gif) [Virtual Hosting](#vhosts)
- ![](../images/down.gif) [Simple Proxying](#proxy)

### See also

- [Module documentation](mod__mod_rewrite.md)
- [mod\_rewrite introduction](rewrite__intro.md)
- [Redirection and remapping](rewrite__remapping.md)
- [Controlling access](rewrite__access.md)
- [Virtual hosts](rewrite__vhosts.md)
- [Proxying](rewrite__proxy.md)
- [Using RewriteMap](rewrite__rewritemap.md)
- [Advanced techniques and tricks](rewrite__advanced.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Simple Redirection

`mod_alias` provides the `Redirect` and `RedirectMatch` directives, which provide a
means to redirect one URL to another. This kind of simple redirection of
one URL, or a class of URLs, to somewhere else, should be accomplished
using these directives rather than `RewriteRule`. `RedirectMatch`
allows you to include a regular expression in your redirection criteria,
providing many of the benefits of using `RewriteRule`.

A common use for `RewriteRule` is to redirect an entire
class of URLs. For example, all URLs in the `/one` directory
must be redirected to `http://one.example.com/`, or perhaps
all `http` requests must be redirected to
`https`.

These situations are better handled by the `Redirect`
directive. Remember that `Redirect` preserves path
information. That is to say, a redirect for a URL `/one` will
also redirect all URLs under that, such as `/one/two.html`
and `/one/three/four.html`.

To redirect URLs under `/one` to
`http://one.example.com`, do the following:

`Redirect /one/ http://one.example.com/`

To redirect `http` URLs to `https`, do the
following:

`<VirtualHost *:80>
ServerName www.example.com  
Redirect / https://www.example.com/  
</VirtualHost >
  
<VirtualHost *:443>
ServerName www.example.com  
  
# ... SSL configuration goes here  
</VirtualHost >`

The use of `RewriteRule` to perform this task may be
appropriate if there are other `RewriteRule` directives in
the same scope. This is because, when there are `Redirect`
and `RewriteRule` directives in the same scope, the
`RewriteRule` directives will run first, regardless of the
order of appearance in the configuration file.

In the case of the *http-to-https* redirection, the use of
`RewriteRule` would be appropriate if you don't have access
to the main server configuration file, and are obliged to perform this
task in a `.htaccess` file instead.

[![top](../images/up.gif)](#page-header)

## URL Aliasing

The `Alias` directive
provides mapping from a URI to a directory - usually a directory outside
of your `DocumentRoot`. Although it
is possible to perform this mapping with `mod_rewrite`,
`Alias` is the preferred method, for reasons of simplicity
and performance.

### Using Alias

`Alias /cats /var/www/virtualhosts/felines/htdocs`

The use of `mod_rewrite` to perform this mapping may be
appropriate when you do not have access to the server configuration
files. Alias may only be used in server or virtualhost context, and not
in a `.htaccess` file.

Symbolic links would be another way to accomplish the same thing, if
you have `Options FollowSymLinks` enabled on your
server.

[![top](../images/up.gif)](#page-header)

## Virtual Hosting

Although it is possible to handle [virtual hosts
with mod\_rewrite](rewrite__vhosts.md), it is seldom the right way. Creating individual
<VirtualHost> blocks is almost always the right way to go. In the
event that you have an enormous number of virtual hosts, consider using
`mod_vhost_alias` to create these hosts automatically.

Third-party modules such as [mod\_macro](http://people.apache.org/~fabien/mod_macro/) are
also useful for creating a large number of virtual hosts dynamically.

Using `mod_rewrite` for vitualhost creation may be
appropriate if you are using a hosting service that does not provide
you access to the server configuration files, and you are therefore
restricted to configuration using `.htaccess` files.

See the [virtual hosts with mod\_rewrite](rewrite__vhosts.md)
document for more details on how you might accomplish this if it still
seems like the right approach.

[![top](../images/up.gif)](#page-header)

## Simple Proxying

`RewriteRule` provides the [[P]](rewrite__flags.md#flag_p) flag to pass rewritten URIs through
`mod_proxy`.

`RewriteRule ^/?images(.*) http://imageserver.local/images$1 [P]`

However, in many cases, when there is no actual pattern matching
needed, as in the example shown above, the `ProxyPass` directive is a better choice.
The example here could be rendered as:

`ProxyPass /images/ http://imageserver.local/images/`

Note that whether you use `RewriteRule` or `ProxyPass`, you'll still need to use the
`ProxyPassReverse` directive to
catch redirects issued from the back-end server:

`ProxyPassReverse /images/ http://imageserver.local/images/`

You may need to use `RewriteRule` instead when there are
other `RewriteRule`s in effect in the same scope, as a
`RewriteRule` will usually take effect before a
`ProxyPass`, and so may preempt what you're trying to
accomplish.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/rewrite/avoid.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
