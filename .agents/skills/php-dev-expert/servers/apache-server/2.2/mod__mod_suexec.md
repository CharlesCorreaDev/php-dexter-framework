# mod_suexec - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_suexec.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_suexec.html) to go to the current version of this document.

# Apache Module mod\_suexec

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Allows CGI scripts to run as a specified user and Group |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | suexec\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_suexec.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.0 and later |

### Summary

This module, in combination with the `suexec` support program allows
CGI scripts to run as a specified user and Group.

### Directives

- ![](../images/down.gif) [SuexecUserGroup](#suexecusergroup)

### See also

- [SuEXEC support](suexec.md)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## SuexecUserGroup Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | User and group for CGI programs to run as |
| [Syntax:](mod__directive-dict.md#Syntax) | `SuexecUserGroup User Group` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_suexec |
| [Compatibility:](mod__directive-dict.md#Compatibility) | SuexecUserGroup is only available in 2.0 and later. |

The `SuexecUserGroup` directive allows you
to specify a user and group for CGI programs to run as. Non-CGI
requests are still processed with the user specified in the `User` directive. This directive replaces
the Apache 1.3 configuration of using the `User` and
`Group` directives inside of VirtualHosts.

### Example

`SuexecUserGroup nobody nogroup`

### See also

- `Suexec`

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_suexec.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/mod/mod_suexec.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_suexec.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_suexec.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/mod_suexec.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
