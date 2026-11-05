# mod_authn_default - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_authn_default.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_authn_default.html) to go to the current version of this document.

# Apache Module mod\_authn\_default

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Authentication fallback module |
| [Status:](mod__module-dict.md#Status) | Base |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | authn\_default\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_authn\_default.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | Available in Apache 2.1 and later |

### Summary

This module is designed to be the fallback module, if you don't
have configured an authentication module like
`mod_auth_basic`. It simply rejects any
credentials supplied by the user.

### Directives

- ![](../images/down.gif) [AuthDefaultAuthoritative](#authdefaultauthoritative)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## AuthDefaultAuthoritative Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Sets whether authentication is passed to lower level modules |
| [Syntax:](mod__directive-dict.md#Syntax) | `AuthDefaultAuthoritative On|Off` |
| [Default:](mod__directive-dict.md#Default) | `AuthDefaultAuthoritative On` |
| [Context:](mod__directive-dict.md#Context) | directory, .htaccess |
| [Override:](mod__directive-dict.md#Override) | AuthConfig |
| [Status:](mod__directive-dict.md#Status) | Base |
| [Module:](mod__directive-dict.md#Module) | mod\_authn\_default |

Setting the `AuthDefaultAuthoritative` directive
explicitly to `Off` allows for authentication to be passed on
to lower level modules (as defined in the `modules.c`
files).

### Note

Normally there are no lower level modules, since
`mod_authn_default` is defined to be already on
a *very low* level. Therefore you should leave the value of
`AuthDefaultAuthoritative` as default
(`On`).

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_authn_default.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_authn_default.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_authn_default.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
