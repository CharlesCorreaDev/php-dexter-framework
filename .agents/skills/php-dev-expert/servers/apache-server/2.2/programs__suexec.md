# suexec - Switch user before executing external programs - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/programs/suexec.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Programs](programs.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/programs/suexec.html) to go to the current version of this document.

# suexec - Switch user before executing external programs

`suexec` is used by the Apache HTTP Server to switch
to another user before executing CGI programs. In order to achieve this,
it must run as `root`. Since the HTTP daemon normally doesn't
run as `root`, the `suexec` executable needs the
setuid bit set and must be owned by `root`. It should never be
writable for any other person than `root`.

For further information about the concepts and the security model
of suexec please refer to the suexec documentation (<http://httpd.apache.org/docs/2.2/suexec.html>).

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Synopsis

`suexec -V`

[![top](../images/up.gif)](#page-header)

## Options

`-V`
:   If you are `root`, this option displays the compile options of
    `suexec`. For security reasons all configuration options are
    changeable only at compile time.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/programs/suexec.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/programs/suexec.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/programs/suexec.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
