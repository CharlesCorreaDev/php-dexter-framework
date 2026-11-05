# When not to use mod_rewrite - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/rewrite/avoid.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](rewrite.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Rewrite](rewrite.md)

# When not to use mod\_rewrite

This document supplements the `mod_rewrite`
[reference documentation](mod__mod_rewrite.md). It describes
perhaps one of the most important concepts about `mod_rewrite` - namely,
when to avoid using it.

`mod_rewrite` should be considered a last resort, when other
alternatives are found wanting. Using it when there are simpler
alternatives leads to configurations which are confusing, fragile, and
hard to maintain. Understanding what other alternatives are available is
a very important step towards `mod_rewrite` mastery.

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
- ![](../images/down.gif) [Simple Proxying](#proxy)
- ![](../images/down.gif) [Environment Variable Testing](#setenv)
- ![](../images/down.gif) [Front Controller / Resource Routing](#fallback-resource)
- ![](../images/down.gif) [Conditional Configuration with Expressions](#ifexpr)
- ![](../images/down.gif) [Forbidding Image Hotlinking](#blocked-inline-images)
- ![](../images/down.gif) [Blocking of Robots](#blocking-of-robots)
- ![](../images/down.gif) [Denying Hosts in a Reject List](#host-deny)
- ![](../images/down.gif) [Virtual Hosting](#vhosts)
- ![](../images/down.gif) [Load Balancing](#load-balancing)

### See also

- [Module documentation](mod__mod_rewrite.md)
- [mod\_rewrite introduction](rewrite__intro.md)
- [Redirection and remapping](rewrite__remapping.md)
- [Per-directory Rewrites](rewrite__htaccess.md)
- [RewriteRule Flags](rewrite__flags.md)
- [Virtual hosts](rewrite__vhosts.md)
- [Using RewriteMap](rewrite__rewritemap.md)
- [Technical details](rewrite__tech.md)

[![top](../images/up.gif)](#page-header)

## Simple Redirection [¶](#redirect "Permanent link")

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

```
Redirect "/one/" "http://one.example.com/"
```

To redirect one hostname to another, for example
`example.com` to `www.example.com`, see the
[Canonical Hostnames](rewrite__remapping.md#canonicalhost)
recipe.

To redirect `http` URLs to `https`, a
`Redirect` in a dedicated
HTTP virtual host is the cleanest approach. See the
[Forcing HTTPS](rewrite__remapping.md#https-redirect) recipe for
the recommended configuration and the
`mod_rewrite` alternative for `.htaccess`
use.

### Processing order

If you do mix `Redirect`
and `RewriteRule` in the
same context, be aware that their execution order depends on where
they appear. In server/virtual-host context,
`mod_rewrite` runs first; in per-directory context
(`.htaccess`), `mod_alias` runs first. See
[Module Processing Order](rewrite__tech.md#order) for
details.

[![top](../images/up.gif)](#page-header)

## URL Aliasing [¶](#alias "Permanent link")

The `Alias` directive
provides mapping from a URL-path to a directory - usually a directory outside
of your `DocumentRoot`. Although it
is possible to perform this mapping with `mod_rewrite`,
`Alias` is the preferred method, for
reasons of simplicity and performance.

### Using Alias

```
Alias "/cats" "/var/www/virtualhosts/felines/htdocs"
```

The use of `mod_rewrite` to perform this mapping may be
appropriate when you do not have access to the server configuration
files. Alias may only be used in server or virtualhost context, and not
in a `.htaccess` file.

Symbolic links would be another way to accomplish the same thing, if
you have `Options FollowSymLinks` enabled on your
server.

[![top](../images/up.gif)](#page-header)

## Simple Proxying [¶](#proxy "Permanent link")

`RewriteRule` provides the [[P]](rewrite__flags.md#flag_p) flag to pass rewritten URIs through
`mod_proxy`.

```
RewriteRule "^/?images(.*)" "http://imageserver.local/images$1" [P]
```

However, in many cases, when there is no actual pattern matching
needed, as in the example shown above, the `ProxyPass` directive is a better choice.
The example here could be rendered as:

```
ProxyPass "/images/" "http://imageserver.local/images/"
```

Note that whether you use `RewriteRule` or `ProxyPass`, you'll still need to use the
`ProxyPassReverse` directive to
catch redirects issued from the back-end server:

```
ProxyPassReverse "/images/" "http://imageserver.local/images/"
```

You may need to use `RewriteRule` instead when there are
other `RewriteRule`s in effect in the same scope, as a
`RewriteRule` will usually take effect before a
`ProxyPass`, and so may preempt what you're trying to
accomplish.

One case where `RewriteRule`
is genuinely useful for proxying is when you want to proxy requests only
for content that doesn't exist locally - for example, during a migration
from one server to another:

```
RewriteCond "%{REQUEST_FILENAME}"       !-f
RewriteCond "%{REQUEST_FILENAME}"       !-d
RewriteRule "^/(.*)"                    "http://old.example.com/$1" [P]
ProxyPassReverse "/" "http://old.example.com/"
```

In this example, requests for resources that haven't been migrated
yet are transparently proxied to the old server. As content is migrated,
the local files take precedence. Remember to always include a
`ProxyPassReverse` directive to
ensure that any redirects issued by the backend are correctly passed on
to the client.

[![top](../images/up.gif)](#page-header)

## Environment Variable Testing [¶](#setenv "Permanent link")

`mod_rewrite` is frequently used to take a particular
action based on the presence or absence of a particular environment
variable or request header. This can be done more efficiently using the
`<If>` directive.

Consider, for example, the common scenario where
`RewriteRule` is used to enforce a canonical
hostname, such as `www.example.com` instead of
`example.com`. This can be done using the `<If>` directive, as shown here:

```
<If "req('Host') != 'www.example.com'">
    Redirect "/" "http://www.example.com/"
</If>
```

This technique can be used to take actions based on any request
header, response header, or environment variable, replacing
`mod_rewrite` in many common scenarios.

See especially the [expression evaluation
documentation](expr.md) for a overview of what types of expressions you can
use in `<If>` sections,
and in certain other directives.

[![top](../images/up.gif)](#page-header)

## Front Controller / Resource Routing [¶](#fallback-resource "Permanent link")

A very common use of `mod_rewrite` is to route all
requests for non-existent resources to a single front controller script
(e.g. `index.php`). This is the basis of most modern web
framework routing.

The typical `mod_rewrite` approach is:

```
RewriteEngine On
RewriteCond "%{REQUEST_FILENAME}" !-f
RewriteCond "%{REQUEST_FILENAME}" !-d
RewriteRule "^(.*)$" "/index.php" [L]
```

This can be accomplished far more simply with the
`FallbackResource` directive:

```
FallbackResource /index.php
```

`FallbackResource` does the
same thing - requests for existing files and directories are served
normally, while everything else is routed to the specified resource -
but without the overhead and complexity of the rewrite engine. It works
in both server configuration and `.htaccess` context.

To disable a `FallbackResource` set in a parent
directory:

```
FallbackResource disabled
```

[![top](../images/up.gif)](#page-header)

## Conditional Configuration with Expressions [¶](#ifexpr "Permanent link")

Many uses of `RewriteCond`
can be replaced by the
`<If>` directive, which
supports a rich [expression syntax](expr.md) and
integrates cleanly with other Apache directives.

Redirect based on a query string parameter:

```
<If "%{QUERY_STRING} =~ /lang=fr/">
    Redirect "/welcome" "/bienvenue"
</If>
```

Restrict access by request method:

```
<If "%{REQUEST_METHOD} IN {'DELETE', 'PUT', 'PATCH'}">
    Require ip 10.0.0.0/8
</If>
```

Block requests missing a Host header (HTTP/1.0 clients):

```
<If "-z req('Host')">
    Require all denied
</If>
```

See the [expression evaluation
documentation](expr.md) for the full syntax available in
`<If>` blocks.

[![top](../images/up.gif)](#page-header)

## Forbidding Image Hotlinking [¶](#blocked-inline-images "Permanent link")

Description:
:   "Hotlinking" is the practice of other sites including your
    images inline in their pages, using your bandwidth to serve
    content for someone else's site. You can prevent this without
    `mod_rewrite`.

Solution:
:   Use `SetEnvIf`
    with `Require`:

    ```
    SetEnvIf Referer example\.com localreferer
    <FilesMatch "\.(jpg|png|gif)$">
        Require env localreferer
    </FilesMatch>
    ```

Discussion:
:   If you need more complex logic - such as serving an
    alternate image to hotlinkers instead of denying the request - you
    may need `mod_rewrite`. The following examples
    rely on the `HTTP_REFERER` header, which is optional
    and can be spoofed. The `!^$` condition allows
    requests with no Referer header at all, so that users who type
    the URL directly, or whose browsers suppress the Referer, are
    not blocked.

    Deny the request outright:

    ```
    RewriteCond "%{HTTP_REFERER}"  "!^$"
    RewriteCond "%{HTTP_REFERER}"  "!www.example.com" [NC]
    RewriteRule "\.(gif|jpg|png)$" "-"                [F,NC]
    ```

    Serve an alternate image:

    ```
    RewriteCond "%{HTTP_REFERER}"  "!^$"
    RewriteCond "%{HTTP_REFERER}"  "!www.example.com"      [NC]
    RewriteRule "\.(gif|jpg|png)$" "/images/go-away.png"   [R,NC]
    ```

[![top](../images/up.gif)](#page-header)

## Blocking of Robots [¶](#blocking-of-robots "Permanent link")

Description:
:   You wish to block persistent requests from a particular robot
    or user agent that ignores your `/robots.txt`.

Solution:
:   Use `SetEnvIfNoCase`
    with `Require`:

    ```
    SetEnvIfNoCase User-Agent ^NameOfBadRobot goaway
    <Location "/secret/files">
        <RequireAll>
            Require all granted
            Require not env goaway
        </RequireAll>
    </Location>
    ```

Discussion:
:   Any technique that relies on the `USER_AGENT`
    string can be trivially circumvented, since that string can be
    changed by the client. If you are experiencing a sustained attack,
    you should consider blocking it at a higher level, such as at your
    firewall.

    If you need to combine user-agent and IP address matching,
    `mod_rewrite` can be used as a fallback:

    ```
    RewriteCond "%{HTTP_USER_AGENT}"   "^NameOfBadRobot"
    RewriteCond "%{REMOTE_ADDR}"       "=123\.45\.67\.[8-9]"
    RewriteRule "^/secret/files/"      "-"                   [F]
    ```

[![top](../images/up.gif)](#page-header)

## Denying Hosts in a Reject List [¶](#host-deny "Permanent link")

Description:
:   We wish to maintain a list of hosts and have those hosts
    blocked from accessing our server.

Solution:
:   For simple IP-based blocking, use
    `Require` directly:

    ```
    <Location "/">
        Require all granted
        Require not ip 193.102.180.41
        Require not ip 192.76.162.40
    </Location>
    ```

Discussion:
:   If you need a dynamic, file-based deny list (rather than
    enumerating addresses in the configuration), `mod_rewrite`
    with a `RewriteMap`
    can be used:

    ```
    RewriteEngine on
    RewriteMap    hosts-deny  "txt:/path/to/hosts.deny"
    RewriteCond   "${hosts-deny:%{REMOTE_ADDR}|NOT-FOUND}" "!=NOT-FOUND" [OR]
    RewriteCond   "${hosts-deny:%{REMOTE_HOST}|NOT-FOUND}" "!=NOT-FOUND"
    RewriteRule   "^"                                      "-"           [F]
    ```

    The map file contains one entry per line, with IP addresses or
    hostnames as keys and a dummy value (since
    `RewriteMap` requires
    key/value pairs):

    `## hosts.deny  
    193.102.180.41 -  
    192.76.162.40 -`

    The second `RewriteCond`
    assumes `HostnameLookups` is enabled. If not, drop it
    and remove the `[OR]` flag from the first condition.

[![top](../images/up.gif)](#page-header)

## Virtual Hosting [¶](#vhosts "Permanent link")

Although it is possible to handle [virtual hosts
with mod\_rewrite](rewrite__vhosts.md), it is seldom the right way. Creating individual
`<VirtualHost>` blocks is
almost always the right way to go. In the
event that you have an enormous number of virtual hosts, consider using
`mod_vhost_alias` to create these hosts automatically.

Modules such as `mod_macro` are
also useful for creating a large number of virtual hosts dynamically.

Using `mod_rewrite` for vitualhost creation may be
appropriate if you are using a hosting service that does not provide
you access to the server configuration files, and you are therefore
restricted to configuration using `.htaccess` files.

See the [virtual hosts with mod\_rewrite](rewrite__vhosts.md)
document for more details on how you might accomplish this if it still
seems like the right approach.

[![top](../images/up.gif)](#page-header)

## Load Balancing [¶](#load-balancing "Permanent link")

Description:
:   We wish to distribute load across several back-end
    servers.

Solution:
:   Use `mod_proxy_balancer`, which provides a
    flexible and featureful load-balancing solution. It supports
    several balancing algorithms, session stickiness, health checks,
    and dynamic configuration via the Balancer Manager - none of which
    are possible with a `mod_rewrite` approach.

    ```
    <Proxy "balancer://mycluster">
        BalancerMember "http://one.example.com"
        BalancerMember "http://two.example.com"
        BalancerMember "http://three.example.com"
    </Proxy>
    ProxyPass        "/"  "balancer://mycluster/"
    ProxyPassReverse "/"  "balancer://mycluster/"
    ```

Discussion:
:   It is possible to accomplish rudimentary random load balancing using
    `mod_rewrite` with a `rnd`
    `RewriteMap`:

    ```
    RewriteEngine on
    RewriteMap  lb       "rnd:/path/to/serverlist.txt"
    RewriteRule "^/(.*)" "http://${lb:servers}/$1"     [P,L]
    ```

    However, `mod_proxy_balancer` is far more flexible and
    featureful than anything you can cobble together using
    `mod_rewrite`, and is the recommended approach.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/rewrite/avoid.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/rewrite/avoid.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
