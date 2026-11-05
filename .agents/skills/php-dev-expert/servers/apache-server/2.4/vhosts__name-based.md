# Name-based Virtual Host Support - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/vhosts/name-based.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](vhosts.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Virtual Hosts](vhosts.md)

# Name-based Virtual Host Support

This document describes when and how to use name-based virtual hosts.

- ![](../images/down.gif) [Name-based vs. IP-based Virtual Hosts](#namevip)
- ![](../images/down.gif) [How the server selects the proper name-based virtual host](#alg)
- ![](../images/down.gif) [Using Name-based Virtual Hosts](#using)

### See also

- [IP-based Virtual Host Support](vhosts__ip-based.md)
- [An In-Depth Discussion of Virtual Host Matching](vhosts__details.md)
- [Dynamically configured mass virtual hosting](vhosts__mass.md)
- [Virtual Host examples for common setups](vhosts__examples.md)

[![top](../images/up.gif)](#page-header)

## Name-based vs. IP-based Virtual Hosts [¶](#namevip "Permanent link")

[IP-based virtual hosts](vhosts__ip-based.md) use the IP address of the connection to
determine the correct virtual host to serve. Therefore you need to
have a separate IP address for each host.

With name-based virtual hosting, the server relies on the client to
report the hostname as part of the HTTP headers. Using this technique,
many different hosts can share the same IP address.

Name-based virtual hosting is usually simpler, since you need
only configure your DNS server to map each hostname to the correct
IP address and then configure the Apache HTTP Server to recognize
the different hostnames. Name-based virtual hosting also eases
the demand for scarce IP addresses. Therefore you should use
name-based virtual hosting unless you are using equipment
that explicitly demands IP-based hosting. Historical reasons for
IP-based virtual hosting based on client support are no longer
applicable to a general-purpose web server.

Name-based virtual hosting builds off of the IP-based virtual host
selection algorithm, meaning that searches for the proper server name
occur only between virtual hosts that have the best IP-based address.

[![top](../images/up.gif)](#page-header)

## How the server selects the proper name-based virtual host [¶](#alg "Permanent link")

It is important to recognize that the first step in name-based virtual
host resolution is IP-based resolution. Name-based virtual host
resolution only chooses the most appropriate name-based virtual host
after narrowing down the candidates to the best IP-based match. Using a wildcard (\*)
for the IP address in all of the VirtualHost directives makes this
IP-based mapping irrelevant.

When a request arrives, the server will find the best (most specific) matching
`<VirtualHost>` argument based on
the IP address and port used by the request. If there is more than one virtual host
containing this best-match address and port combination, Apache will further
compare the `ServerName` and `ServerAlias` directives to the server name
present in the request.

If you omit the `ServerName`
directive from any name-based virtual host, the server will default
to a fully qualified domain name (FQDN) derived from the system hostname.
This implicitly set server name can lead to counter-intuitive virtual host
matching and is discouraged.

### The default name-based vhost for an IP and port combination

If no matching ServerName or ServerAlias is found in the set of
virtual hosts containing the most specific matching IP address and port
combination, then **the first listed virtual host** that
matches that will be used.

[![top](../images/up.gif)](#page-header)

## Using Name-based Virtual Hosts [¶](#using "Permanent link")

| Related Modules | Related Directives |
| --- | --- |
| - `core` | - `DocumentRoot` - `ServerAlias` - `ServerName` - `<VirtualHost>` |

The first step is to create a `<VirtualHost>` block for
each different host that you would like to serve. Inside each `<VirtualHost>` block, you will need at minimum a
`ServerName` directive to designate
which host is served and a `DocumentRoot`
directive to show where in the filesystem the content for that host
lives.

### Main host goes away

Any request that doesn't match an existing `<VirtualHost>` is handled by the global
server configuration, regardless of the hostname or ServerName.

When you add a name-based virtual host to an existing server, and
the virtual host arguments match preexisting IP and port combinations,
requests will now be handled by an explicit virtual host. In this case,
it's usually wise to create a [default virtual host](#defaultvhost)
with a `ServerName` matching that of
the base server. New domains on the same interface and port, but
requiring separate configurations, can then be added as subsequent (non-default)
virtual hosts.

### ServerName inheritance

It is best to always explicitly list a `ServerName` in every name-based virtual host.

If a `VirtualHost` doesn't specify
a `ServerName`, a server name will be
inherited from the base server configuration. If no server name was
specified globally, one is detected at startup through reverse DNS resolution
of the first listening address. In either case, this inherited server name
will influence name-based virtual host resolution, so it is best to always
explicitly list a `ServerName` in every
name-based virtual host.

For example, suppose that you are serving the domain
`www.example.com` and you wish to add the virtual host
`other.example.com`, which points at the same IP address.
Then you simply add the following to `httpd.conf`:

```
<VirtualHost *:80>
    # This first-listed virtual host is also the default for *:80
    ServerName www.example.com
    ServerAlias example.com 
    DocumentRoot "/www/domain"
</VirtualHost>

<VirtualHost *:80>
    ServerName other.example.com
    DocumentRoot "/www/otherdomain"
</VirtualHost>
```

You can alternatively specify an explicit IP address in place of the
`*` in `<VirtualHost>` directives. For example, you might want to do this
in order to run some name-based virtual hosts on one IP address, and either
IP-based, or another set of name-based virtual hosts on another address.

Many servers want to be accessible by more than one name. This is
possible with the `ServerAlias`
directive, placed inside the `<VirtualHost>` section. For example in the first `<VirtualHost>` block above, the
`ServerAlias` directive indicates that
the listed names are other names which people can use to see that same
web site:

```
ServerAlias example.com *.example.com
```

then requests for all hosts in the `example.com` domain will
be served by the `www.example.com` virtual host. The wildcard
characters `*` and `?` can be used to match names.
Of course, you can't just make up names and place them in `ServerName` or `ServerAlias`. You must
first have your DNS server properly configured to map those names to an IP
address associated with your server.

Name-based virtual hosts for the best-matching set of `<virtualhost>`s are processed
in the order they appear in the configuration. The first matching `ServerName` or `ServerAlias` is used, with no different precedence for wildcards
(nor for ServerName vs. ServerAlias).

The complete list of names in the `VirtualHost`
directive are treated just like a (non wildcard)
`ServerAlias`.

Finally, you can fine-tune the configuration of the virtual hosts
by placing other directives inside the `<VirtualHost>` containers. Most directives can be
placed in these containers and will then change the configuration only of
the relevant virtual host. To find out if a particular directive is allowed,
check the [Context](mod__directive-dict.md#Context) of the
directive. Configuration directives set in the *main server context*
(outside any `<VirtualHost>`
container) will be used only if they are not overridden by the virtual host
settings.

Available Languages: [de](https://httpd.apache.org/docs/2.4/pt-br/de/vhosts/name-based.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/vhosts/name-based.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/vhosts/name-based.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/vhosts/name-based.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/vhosts/name-based.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/vhosts/name-based.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
