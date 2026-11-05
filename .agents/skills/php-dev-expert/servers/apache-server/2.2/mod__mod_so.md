# mod_so - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_so.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_so.html) to go to the current version of this document.

# Apache Module mod\_so

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Loading of executable code and modules into the server at start-up or restart time |
| [Status:](mod__module-dict.md#Status) | Extension |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | so\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_so.c |
| [Compatibility:](mod__module-dict.md#Compatibility) | This is a Base module (always included) on Windows |

### Summary

On selected operating systems this module can be used to
load modules into Apache at runtime via the [Dynamic Shared Object](dso.md) (DSO) mechanism,
rather than requiring a recompilation.

On Unix, the loaded code typically comes from shared object
files (usually with `.so` extension), on Windows
this may either the `.so` or `.dll`
extension.

### Warning

Apache 1.3 modules cannot be directly used
with Apache 2.0 - the module must be modified to dynamically
load or compile into Apache 2.0.

### Topics

- ![](../images/down.gif) [Creating Loadable Modules for Windows](#windows)

### Directives

- ![](../images/down.gif) [LoadFile](#loadfile)
- ![](../images/down.gif) [LoadModule](#loadmodule)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Creating Loadable Modules for Windows

### Note

The module name format changed for Windows
with Apache 1.3.15 and 2.0 - the modules are now named as
mod\_foo.so

While mod\_so still loads modules with
ApacheModuleFoo.dll names, the new naming convention is
preferred; if you are converting your loadable module for 2.0,
please fix the name to this 2.0 convention.

The Apache module API is unchanged between the Unix and
Windows versions. Many modules will run on Windows with no or
little change from Unix, although others rely on aspects of the
Unix architecture which are not present in Windows, and will
not work.

When a module does work, it can be added to the server in
one of two ways. As with Unix, it can be compiled into the
server. Because Apache for Windows does not have the
`Configure` program of Apache for Unix, the module's
source file must be added to the ApacheCore project file, and
its symbols must be added to the
`os\win32\modules.c` file.

The second way is to compile the module as a DLL, a shared
library that can be loaded into the server at runtime, using
the `LoadModule`
directive. These module DLLs can be distributed and run on any
Apache for Windows installation, without recompilation of the
server.

To create a module DLL, a small change is necessary to the
module's source file: The module record must be exported from
the DLL (which will be created later; see below). To do this,
add the `AP_MODULE_DECLARE_DATA` (defined in the
Apache header files) to your module's module record definition.
For example, if your module has:

`module foo_module;`

Replace the above with:

`module AP_MODULE_DECLARE_DATA foo_module;`

Note that this will only be activated on Windows, so the
module can continue to be used, unchanged, with Unix if needed.
Also, if you are familiar with `.DEF` files, you can
export the module record with that method instead.

Now, create a DLL containing your module. You will need to
link this against the libhttpd.lib export library that is
created when the libhttpd.dll shared library is compiled. You
may also have to change the compiler settings to ensure that
the Apache header files are correctly located. You can find
this library in your server root's modules directory. It is
best to grab an existing module .dsp file from the tree to
assure the build environment is configured correctly, or
alternately compare the compiler and link options to your
.dsp.

This should create a DLL version of your module. Now simply
place it in the `modules` directory of your server
root, and use the `LoadModule`
directive to load it.

[![top](../images/up.gif)](#page-header)

## LoadFile Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Link in the named object file or library |
| [Syntax:](mod__directive-dict.md#Syntax) | `LoadFile filename [filename] ...` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_so |

The LoadFile directive links in the named object files or
libraries when the server is started or restarted; this is used
to load additional code which may be required for some module
to work. *Filename* is either an absolute path or
relative to [ServerRoot](mod__core.md#serverroot).

For example:

`LoadFile libexec/libxmlparse.so`

[![top](../images/up.gif)](#page-header)

## LoadModule Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Links in the object file or library, and adds to the list of active modules |
| [Syntax:](mod__directive-dict.md#Syntax) | `LoadModule module filename` |
| [Context:](mod__directive-dict.md#Context) | server config |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_so |

The LoadModule directive links in the object file or library
*filename* and adds the module structure named
*module* to the list of active modules. *Module*
is the name of the external variable of type
`module` in the file, and is listed as the [Module Identifier](mod__module-dict.md#ModuleIdentifier)
in the module documentation. Example:

`LoadModule status_module modules/mod_status.so`

loads the named module from the modules subdirectory of the
ServerRoot.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_so.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/mod/mod_so.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_so.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/mod/mod_so.html "Türkçe")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
