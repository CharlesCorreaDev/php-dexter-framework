# Terms Used to Describe Modules - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/module-dict.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/module-dict.html) to go to the current version of this document.

# Terms Used to Describe Modules

This document describes the terms that are used to describe
each Apache [module](mod.md).

- ![](../images/down.gif) [Description](#Description)
- ![](../images/down.gif) [Status](#Status)
- ![](../images/down.gif) [Source File](#SourceFile)
- ![](../images/down.gif) [Module Identifier](#ModuleIdentifier)
- ![](../images/down.gif) [Compatibility](#Compatibility)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Description

A brief description of the purpose of the module.

[![top](../images/up.gif)](#page-header)

## Status

This indicates how tightly bound into the Apache Web server
the module is; in other words, you may need to recompile the
server in order to gain access to the module and its
functionality. Possible values for this attribute are:

MPM
:   A module with status "MPM" is a [Multi-Processing Module](mpm.md). Unlike the
    other types of modules, Apache must have one and only one MPM
    in use at any time. This type of module is responsible for
    basic request handling and dispatching.

Base
:   A module labeled as having "Base" status is compiled and
    loaded into the server by default, and is therefore normally
    available unless you have taken steps to remove the module
    from your configuration.

Extension
:   A module with "Extension" status is not normally compiled
    and loaded into the server. To enable the module and its
    functionality, you may need to change the server build
    configuration files and re-compile Apache.

Experimental
:   "Experimental" status indicates that the module is
    available as part of the Apache kit, but you are on your own
    if you try to use it. The module is being documented for
    completeness, and is not necessarily supported.

External
:   Modules which are not included with the base Apache
    distribution ("third-party modules") may use the "External"
    status. We are not responsible for, nor do we support such
    modules.

[![top](../images/up.gif)](#page-header)

## Source File

This quite simply lists the name of the source file which
contains the code for the module. This is also the name used by
the `<IfModule>`
directive.

[![top](../images/up.gif)](#page-header)

## Module Identifier

This is a string which identifies the module for use in the
`LoadModule` directive when
dynamically loading modules. In particular, it is the name of
the external variable of type module in the source file.

[![top](../images/up.gif)](#page-header)

## Compatibility

If the module was not part of the original Apache version 2
distribution, the version in which it was introduced should be
listed here. In addition, if the module is limited to
particular platforms, the details will be listed here.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/module-dict.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/module-dict.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/module-dict.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/module-dict.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
