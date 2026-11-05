# Access Control - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/howto/access.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](howto.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [How-To / Tutorials](howto.md)

# Access Control

Access control refers to any means of controlling access to any
resource. This is separate from [authentication and authorization](howto__auth.md).

- ![](../images/down.gif) [Related Modules and Directives](#related)
- ![](../images/down.gif) [Access control by host](#host)
- ![](../images/down.gif) [Access control by arbitrary variables](#env)
- ![](../images/down.gif) [Access control with mod\_rewrite](#rewrite)
- ![](../images/down.gif) [More information](#moreinformation)

[![top](../images/up.gif)](#page-header)

## Related Modules and Directives [¶](#related "Permanent link")

Access control can be done by several different modules. The most
important of these are `mod_authz_core` and
`mod_authz_host`. Also discussed in this document
is access control using `mod_rewrite`.

[![top](../images/up.gif)](#page-header)

## Access control by host [¶](#host "Permanent link")

If you wish to restrict access to portions of your site based on the
host address of your visitors, use
`mod_authz_host`.

The `Require`
provides a variety of different ways to allow or deny access to
resources. In conjunction with the `RequireAll`, `RequireAny`, and `RequireNone` directives, these
requirements may be combined in arbitrarily complex ways, to enforce
whatever your access policy happens to be.

The `Allow`,
`Deny`, and
`Order` directives,
provided by `mod_access_compat`, are deprecated and
will go away in a future version. You should avoid using them, and
avoid outdated tutorials recommending their use.

The usage of these directives is:

```
Require host address
Require ip ip.address
```

In the first form, address is a fully qualified
domain name (or a partial domain name); you may provide multiple
addresses or domain names, if desired.

In the second form, ip.address is an IP address, a
partial IP address, a network/netmask pair, or a network/nnn CIDR
specification. Either IPv4 or IPv6 addresses may be used.

### Examples of IP address formats

```
# Full IP address
Require ip 10.2.3.4
# Partial IP address (matches any host in the 172.20.0.0/16 range)
Require ip 172.20
# Network/netmask pair
Require ip 192.168.1.0/255.255.255.0
# Network/CIDR specification
Require ip 192.168.1.0/24
# IPv6 address
Require ip 2001:db8::a00:20ff:fea7:ccea
# IPv6 with CIDR
Require ip 2001:db8:1::/48
```

See [the
mod\_authz\_host documentation](mod__mod_authz_host.md#requiredirectives) for further examples of this
syntax.

You can insert `not` to negate a particular requirement.
Since a `not` is a negation of a value, it cannot
be used by itself to allow or deny a request, as *not true*
does not constitute *false*. Thus, to deny a visit using a negation,
the block must have one element that evaluates as true or false.
For example, if you have someone spamming your message
board, and you want to keep them out, you could do the
following:

```
<RequireAll>
Require all granted
Require not ip 10.252.46.165
</RequireAll>
```

Visitors coming from that address (`10.252.46.165`)
will not be able to see the content covered by this directive. If,
instead, you have a machine name, rather than an IP address, you
can use that.

```
Require not host host.example.com
```

And, if you'd like to block access from an entire domain,
you can specify part of an address or domain name:

```
Require not ip 192.168.205
Require not host phishers.example.com badguys.example
Require not host gov
```

Use of the `RequireAll`, `RequireAny`, and `RequireNone` directives may be
used to enforce more complex sets of requirements.

[![top](../images/up.gif)](#page-header)

## Access control by arbitrary variables [¶](#env "Permanent link")

Using the `<If>`,
you can allow or deny access based on arbitrary environment
variables or request header values. For example, to deny access
based on user-agent (the browser type) you might do the
following:

```
<If "%{HTTP_USER_AGENT} == 'BadBot'">
Require all denied
</If>
```

Using the `Require`
`expr` syntax, this could also be written as:

```
Require expr %{HTTP_USER_AGENT} != 'BadBot'
```

### Warning:

Access control by `User-Agent` is an unreliable technique,
since the `User-Agent` header can be set to anything at all,
at the whim of the end user.

See [the expressions document](expr.md) for a
further discussion of what expression syntaxes and variables are
available to you.

[![top](../images/up.gif)](#page-header)

## Access control with mod\_rewrite [¶](#rewrite "Permanent link")

The `[F]` `RewriteRule` flag causes a 403 Forbidden
response to be sent. Using this, you can deny access to a resource based
on arbitrary criteria.

For example, if you wish to block access to a resource between 8pm
and 7am, you can do this using `mod_rewrite`.

```
RewriteEngine On
RewriteCond "%{TIME_HOUR}" ">=20" [OR]
RewriteCond "%{TIME_HOUR}" "<07"
RewriteRule "^/fridge"     "-"       [F]
```

This will return a 403 Forbidden response for any request after 8pm
or before 7am. This technique can be used for any criteria that you wish
to check. You can also redirect, or otherwise rewrite these requests, if
that approach is preferred.

The `<If>` directive,
added in 2.4, replaces many things that `mod_rewrite` has
traditionally been used to do, and you should probably look there first
before resorting to mod\_rewrite.

[![top](../images/up.gif)](#page-header)

## More information [¶](#moreinformation "Permanent link")

The [expression engine](expr.md) gives you a
great deal of power to do a variety of things based on arbitrary
server variables, and you should consult that document for more
detail.

Also, you should read the `mod_authz_core`
documentation for examples of combining multiple access requirements
and specifying how they interact.

See also the [Authentication and Authorization](howto__auth.md)
howto.

See the [configuration sections
merging documentation](sections.md#merging) for a warning about how
`<Limit>` inside
`<Location>`
can silently override
`<Directory>`
access restrictions.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/howto/access.html "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/howto/access.html "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/howto/access.html "Français")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
