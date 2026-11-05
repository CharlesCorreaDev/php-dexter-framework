# Apache Virtual Host documentation - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/vhosts/

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/vhosts/) to go to the current version of this document.

# Apache Virtual Host documentation

The term Virtual Host refers to the practice of
running more than one web site (such as
`company1.example.com` and `company2.example.com`)
on a single machine. Virtual hosts can be "[IP-based](vhosts__ip-based.md)", meaning that you have a
different IP address for every web site, or "[name-based](vhosts__name-based.md)", meaning that you have
multiple names running on each IP address. The fact that they
are running on the same physical server is not apparent to the
end user.

Apache was one of the first servers to support IP-based
virtual hosts right out of the box. Versions 1.1 and later of
Apache support both IP-based and name-based virtual hosts
(vhosts). The latter variant of virtual hosts is sometimes also
called *host-based* or *non-IP virtual hosts*.

Below is a list of documentation pages which explain all
details of virtual host support in Apache HTTP Server:

- ![](../images/down.gif) [Virtual Host Support](#support)
- ![](../images/down.gif) [Configuration directives](#directives)

### See also

- `mod_vhost_alias`
- [Name-based virtual
  hosts](vhosts__name-based.md)
- [IP-based virtual hosts](vhosts__ip-based.md)
- [Virtual host examples](vhosts__examples.md)
- [File descriptor limits](vhosts__fd-limits.md)
- [Mass virtual hosting](vhosts__mass.md)
- [Details of host matching](vhosts__details.md)

[![top](../images/up.gif)](#page-header)

## Virtual Host Support

- [Name-based Virtual Hosts](vhosts__name-based.md) (More
  than one web site per IP address)
- [IP-based Virtual Hosts](vhosts__ip-based.md) (An IP
  address for each web site)
- [Virtual Host examples for common
  setups](vhosts__examples.md)
- [File Descriptor Limits](vhosts__fd-limits.md) (or,
  *Too many log files*)
- [Dynamically Configured Mass Virtual
  Hosting](vhosts__mass.md)
- [In-Depth Discussion of Virtual Host
  Matching](vhosts__details.md)

[![top](../images/up.gif)](#page-header)

## Configuration directives

- `NameVirtualHost`
- `<VirtualHost>`
- `ServerName`
- `ServerAlias`
- `ServerPath`

If you are trying to debug your virtual host configuration, you
may find the Apache `-S` command line switch
useful. That is, type the following command:

`/usr/local/apache2/bin/httpd -S`

This command will dump out a description of how Apache parsed
the configuration file. Careful examination of the IP addresses and
server names may help uncover configuration mistakes. (See
the docs for the `httpd` program for
other command line options)

Available Languages: [de](https://httpd.apache.org/docs/2.2/pt-br/de/vhosts/ "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/vhosts/ "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/vhosts/ "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/vhosts/ "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/vhosts/ "Korean") |
[ru](https://httpd.apache.org/docs/2.2/pt-br/ru/vhosts/ "Russian") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/vhosts/ "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.2/pt-br/zh-cn/vhosts/ "Simplified Chinese")

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
