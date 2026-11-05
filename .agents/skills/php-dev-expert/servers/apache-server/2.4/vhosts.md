# Apache Virtual Host documentation - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/vhosts/

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

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

## Virtual Host Support [¶](#support "Permanent link")

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

## Configuration directives [¶](#directives "Permanent link")

- `<VirtualHost>`
- `ServerName`
- `ServerAlias`
- `ServerPath`

If you are trying to debug your virtual host configuration, you
may find the `-S` command line switch
useful.

### Unix example

`apachectl -S`

### Windows example

`httpd.exe -S`

This command will dump out a description of how Apache parsed
the configuration file. Careful examination of the IP addresses and
server names may help uncover configuration mistakes. (See
the docs for the `httpd` program for
other command line options)

Available Languages: [de](https://httpd.apache.org/docs/2.4/pt-br/de/vhosts/ "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/vhosts/ "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/vhosts/ "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/vhosts/ "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/vhosts/ "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/vhosts/ "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.4/pt-br/zh-cn/vhosts/ "Simplified Chinese")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
