# Name-based Virtual Host Support - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/vhosts/name-based.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](vhosts.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Virtual Hosts](vhosts.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/vhosts/name-based.html) to go to the current version of this document.

# Name-based Virtual Host Support

This document describes when and how to use name-based virtual hosts.

- ![](../images/down.gif) [Name-based vs. IP-based Virtual Hosts](#namevip)
- ![](../images/down.gif) [Using Name-based Virtual Hosts](#using)
- ![](../images/down.gif) [Compatibility with Older Browsers](#compat)

### See also

- [IP-based Virtual Host Support](vhosts__ip-based.md)
- [An In-Depth Discussion of Virtual Host Matching](vhosts__details.md)
- [Dynamically configured mass virtual hosting](vhosts__mass.md)
- [Virtual Host examples for common setups](vhosts__examples.md)
- [ServerPath configuration example](vhosts__examples.md#serverpath)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Name-based vs. IP-based Virtual Hosts

IP-based virtual hosts use the IP address of the connection to
determine the correct virtual host to serve. Therefore you need to
have a separate IP address for each host. With name-based virtual
hosting, the server relies on the client to report the hostname as
part of the HTTP headers. Using this technique, many different hosts
can share the same IP address.

Name-based virtual hosting is usually simpler, since you need
only configure your DNS server to map each hostname to the correct
IP address and then configure the Apache HTTP Server to recognize
the different hostnames. Name-based virtual hosting also eases
the demand for scarce IP addresses. Therefore you should use
name-based virtual hosting unless you are using equipment
that explicitly demands IP-based hosting. Historical reasons for
IP-based virtual hosting based on client support are no longer
applicable to a general-purpose web server, unless you are
using a `mod_ssl` version without SNI support
(standard in Apache releases since 2.2.12).

[![top](../images/up.gif)](#page-header)

## Using Name-based Virtual Hosts

| Related Modules | Related Directives |
| --- | --- |
| - `core` | - `DocumentRoot` - `NameVirtualHost` - `ServerAlias` - `ServerName` - `ServerPath` - `<VirtualHost>` |

To use name-based virtual hosting, you must designate the IP
address (and possibly port) on the server that will be accepting
requests for the hosts. This is configured using the `NameVirtualHost` directive.
In the normal case where any and all IP addresses on the server should
be used, you can use `*` as the argument to `NameVirtualHost`. If you're planning to use
multiple ports (e.g. running SSL) you should add a Port to the argument,
such as `*:80`. Note that mentioning an IP address in a
`NameVirtualHost` directive does not
automatically make the server listen to that IP address. See
[Setting which addresses and ports Apache uses](bind.md)
for more details. In addition, any IP address specified here must be
associated with a network interface on the server.

The next step is to create a `<VirtualHost>` block for
each different host that you would like to serve. The argument to the
`<VirtualHost>` directive
must match a defined `NameVirtualHost` directive. (In this usual case,
this will be "\*:80"). Inside each `<VirtualHost>` block, you will need at minimum a
`ServerName` directive to designate
which host is served and a `DocumentRoot`
directive to show where in the filesystem the content for that host
lives.

### Main host goes away

If you are adding virtual hosts to an existing web server, you
must also create a `<VirtualHost>` block for the existing host. The `ServerName` and `DocumentRoot` included in this virtual host should be the
same as the global `ServerName` and
`DocumentRoot`. List this virtual
host first in the configuration file so that it will act as the default
host.

For example, suppose that you are serving the domain
`www.domain.tld` and you wish to add the virtual host
`www.otherdomain.tld`, which points at the same IP address.
Then you simply add the following to `httpd.conf`:

`NameVirtualHost *:80  
  
<VirtualHost *:80>  

ServerName www.domain.tld  
ServerAlias domain.tld *.domain.tld  
DocumentRoot /www/domain  
</VirtualHost>  
  
<VirtualHost *:80>  
ServerName www.otherdomain.tld  
DocumentRoot /www/otherdomain  
</VirtualHost>`

You can alternatively specify an explicit IP address in place of the
`*` in both the `NameVirtualHost` and `<VirtualHost>` directives. For example, you might want to do this
in order to run some name-based virtual hosts on one IP address, and either
IP-based, or another set of name-based virtual hosts on another address.

Many servers want to be accessible by more than one name. This is
possible with the `ServerAlias`
directive, placed inside the `<VirtualHost>` section. For example in the first `<VirtualHost>` block above, the
`ServerAlias` directive indicates that
the listed names are other names which people can use to see that same
web site:

`ServerAlias domain.tld *.domain.tld`

then requests for all hosts in the `domain.tld` domain will
be served by the `www.domain.tld` virtual host. The wildcard
characters `*` and `?` can be used to match names.
Of course, you can't just make up names and place them in `ServerName` or `ServerAlias`. You must
first have your DNS server properly configured to map those names to an IP
address associated with your server.

The complete list of names in the `VirtualHost` directive are treated just like a (non wildcard)
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

Now when a request arrives, the server will first check if it is using
an IP address that matches the `NameVirtualHost`. If it is, then it will look at each `<VirtualHost>` section with a matching
IP address and try to find one where the `ServerName` or `ServerAlias` matches the requested
hostname. If it finds one, then it uses the configuration for that server.
If no matching virtual host is found, then **the first listed virtual
host** that matches the IP address will be used.

As a consequence, the first listed virtual host is the *default*
virtual host. The `DocumentRoot` from
the *main server* will **never** be used when an IP
address matches the `NameVirtualHost`
directive. If you would like to have a special configuration for requests
that do not match any particular virtual host, simply put that configuration
in a `<VirtualHost>`
container and list it first in the configuration file.

[![top](../images/up.gif)](#page-header)

## Compatibility with Older Browsers

As mentioned earlier, there are some clients
who do not send the required data for the name-based virtual
hosts to work properly. These clients will always be sent the
pages from the first virtual host listed for that IP address
(the primary name-based virtual host).

### How much older?

Please note that when we say older, we really do mean older. You are
very unlikely to encounter one of these browsers in use today. All
current versions of any browser send the `Host` header as
required for name-based virtual hosts.

There is a possible workaround with the `ServerPath`
directive, albeit a slightly cumbersome one:

Example configuration:

`NameVirtualHost 111.22.33.44  
  
<VirtualHost 111.22.33.44>  

ServerName www.domain.tld  
ServerPath /domain  
DocumentRoot /web/domain  
</VirtualHost>`

What does this mean? It means that a request for any URI
beginning with "`/domain`" will be served from the
virtual host `www.domain.tld`. This means that the
pages can be accessed as `http://www.domain.tld/domain/`
for all clients, although clients sending a `Host:` header
can also access it as `http://www.domain.tld/`.

In order to make this work, put a link on your primary
virtual host's page to
`http://www.domain.tld/domain/`. Then, in the virtual
host's pages, be sure to use either purely relative links
(*e.g.*, "`file.html`" or
"`../icons/image.gif`") or links containing the
prefacing `/domain/` (*e.g.*,
"`http://www.domain.tld/domain/misc/file.html`" or
"`/domain/misc/file.html`").

This requires a bit of discipline, but adherence to these
guidelines will, for the most part, ensure that your pages will
work with all browsers, new and old.

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/vhosts/name-based.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/vhosts/name-based.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/vhosts/name-based.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/vhosts/name-based.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/vhosts/name-based.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/vhosts/name-based.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
