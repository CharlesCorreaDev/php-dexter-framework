# fcgistarter - Start a FastCGI program - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/programs/fcgistarter.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Programs](programs.md)

# fcgistarter - Start a FastCGI program

- ![](../images/down.gif) [Note](#note)
- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)

### See also

- `mod_proxy_fcgi`

[![top](../images/up.gif)](#page-header)

## Note [¶](#note "Permanent link")

Currently only works on Unix systems.

[![top](../images/up.gif)](#page-header)

## Synopsis [¶](#synopsis "Permanent link")

`fcgistarter
-c command
-p port
[ -i interface ]
-N num`

[![top](../images/up.gif)](#page-header)

## Options [¶](#options "Permanent link")

`-c command`
:   Absolute path of the FastCGI program

`-p port`
:   Port which the program will listen on

`-i interface`
:   Interface which the program will listen on

`-N num`
:   Number of instances of the program

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/programs/fcgistarter.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/programs/fcgistarter.html "Français") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/programs/fcgistarter.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
