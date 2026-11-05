# Terms Used to Describe Modules - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/module-dict.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# Terms Used to Describe Modules

This document describes the terms that are used to describe
each Apache [module](mod.md).

- ![](../images/down.gif) [Description](#Description)
- ![](../images/down.gif) [Status](#Status)
- ![](../images/down.gif) [Source File](#SourceFile)
- ![](../images/down.gif) [Module Identifier](#ModuleIdentifier)
- ![](../images/down.gif) [Compatibility](#Compatibility)

[![top](../images/up.gif)](#page-header)

## Description [¶](#Description "Permanent link")

A brief description of the purpose of the module.

[![top](../images/up.gif)](#page-header)

## Status [¶](#Status "Permanent link")

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

Deprecated
:   A module with "Deprecated" status is still available and
    functional, but its use is discouraged. The module may be
    removed in the next minor release. Check the module's documentation for
    recommended replacements or migration paths.

External
:   Modules which are not included with the base Apache
    distribution ("third-party modules") may use the "External"
    status. We are not responsible for, nor do we support such
    modules.

[![top](../images/up.gif)](#page-header)

## Source File [¶](#SourceFile "Permanent link")

This quite simply lists the name of the source file which
contains the code for the module. This is also the name used by
the `<IfModule>`
directive.

[![top](../images/up.gif)](#page-header)

## Module Identifier [¶](#ModuleIdentifier "Permanent link")

This is a string which identifies the module for use in the
`LoadModule` directive when
dynamically loading modules. In particular, it is the name of
the external variable of type module in the source file.

[![top](../images/up.gif)](#page-header)

## Compatibility [¶](#Compatibility "Permanent link")

If the module was not part of the original Apache version 2
distribution, the version in which it was introduced should be
listed here. In addition, if the module is limited to
particular platforms, the details will be listed here.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/module-dict.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/module-dict.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/module-dict.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/module-dict.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/module-dict.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
