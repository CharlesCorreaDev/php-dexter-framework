# suexec - Switch user before executing external programs - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/programs/suexec.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](programs.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Programs](programs.md)

# suexec - Switch user before executing external programs

`suexec` is used by the Apache HTTP Server to switch
to another user before executing CGI programs. In order to achieve this,
it must run as `root`. Since the HTTP daemon normally doesn't
run as `root`, the `suexec` executable needs the
setuid bit set and must be owned by `root`. It should never be
writable for any other person than `root`.

For further information about the concepts and the security model
of suexec please refer to the suexec documentation (<http://httpd.apache.org/docs/2.4/suexec.html>).

- ![](../images/down.gif) [Synopsis](#synopsis)
- ![](../images/down.gif) [Options](#options)

[![top](../images/up.gif)](#page-header)

## Synopsis [¶](#synopsis "Permanent link")

`suexec -V`

[![top](../images/up.gif)](#page-header)

## Options [¶](#options "Permanent link")

`-V`
:   If you are `root`, this option displays the compile options of
    `suexec`. For security reasons all configuration options are
    changeable only at compile time.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/programs/suexec.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/programs/suexec.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/programs/suexec.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/programs/suexec.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
