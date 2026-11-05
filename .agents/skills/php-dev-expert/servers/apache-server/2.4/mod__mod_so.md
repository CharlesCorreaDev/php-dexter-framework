# mod_so - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_so.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

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
load modules into Apache HTTP Server at runtime via the [Dynamic Shared Object](dso.md) (DSO) mechanism,
rather than requiring a recompilation.

On Unix, the loaded code typically comes from shared object
files (usually with `.so` extension), on Windows
this may either be the `.so` or `.dll`
extension.

### Warning

Modules built for one major version of the Apache HTTP Server
will generally not work on another. (e.g. 1.3 vs. 2.0, or 2.0 vs.
2.2) There are usually API changes between one major version and
another that require that modules be modified to work with the new
version.

### Topics

- ![](../images/down.gif) [Creating Loadable Modules for Windows](#windows)

### Directives

- ![](../images/down.gif) [LoadFile](#loadfile)
- ![](../images/down.gif) [LoadModule](#loadmodule)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_so)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_so)

[![top](../images/up.gif)](#page-header)

## Creating Loadable Modules for Windows [¶](#windows "Permanent link")

### Note

On Windows, where loadable files typically have a file extension
of `.dll`, Apache httpd modules are called
`mod_whatever.so`, just as they are on other platforms.
However, you may encounter third-party modules, such as PHP for
example, that continue to use the `.dll` convention.

While `mod_so` still loads modules with
`ApacheModuleFoo.dll` names, the new naming convention is
preferred; if you are converting your loadable module for 2.0,
please fix the name to this 2.0 convention.

The Apache httpd module API is unchanged between the Unix and
Windows versions. Many modules will run on Windows with no or
little change from Unix, although others rely on aspects of the
Unix architecture which are not present in Windows, and will
not work.

When a module does work, it can be added to the server in
one of two ways. As with Unix, it can be compiled into the
server. Because Apache httpd for Windows does not have the
`Configure` program of Apache httpd for Unix, the module's
source file must be added to the ApacheCore project file, and
its symbols must be added to the
`os\win32\modules.c` file.

The second way is to compile the module as a DLL, a shared
library that can be loaded into the server at runtime, using
the `LoadModule`
directive. These module DLLs can be distributed and run on any
Apache httpd for Windows installation, without recompilation of the
server.

To create a module DLL, a small change is necessary to the
module's source file: The module record must be exported from
the DLL (which will be created later; see below). To do this,
add the `AP_MODULE_DECLARE_DATA` (defined in the
Apache httpd header files) to your module's module record definition.
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
the Apache httpd header files are correctly located. You can find
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

## LoadFile Directive [¶](#loadfile "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Link in the named object file or library |
| [Syntax:](mod__directive-dict.md#Syntax) | `LoadFile filename [filename] ...` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_so |

The `LoadFile` directive links in the named object files or
libraries when the server is started or restarted; this is used
to load additional code which may be required for some module
to work. *Filename* is either an absolute path or
relative to [ServerRoot](mod__core.md#serverroot).

For example:

```
LoadFile "libexec/libxmlparse.so"
```

[![top](../images/up.gif)](#page-header)

## LoadModule Directive [¶](#loadmodule "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Links in the object file or library, and adds to the list of active modules |
| [Syntax:](mod__directive-dict.md#Syntax) | `LoadModule module filename` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host |
| [Status:](mod__directive-dict.md#Status) | Extension |
| [Module:](mod__directive-dict.md#Module) | mod\_so |

The `LoadModule` directive links in the object file or library
*filename* and adds the module structure named
*module* to the list of active modules. *Module*
is the name of the external variable of type
`module` in the file, and is listed as the [Module Identifier](mod__module-dict.md#ModuleIdentifier)
in the module documentation.

For example:

```
LoadModule status_module "modules/mod_status.so"
```

loads the named module from the modules subdirectory of the
ServerRoot.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_so.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_so.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/mod/mod_so.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_so.html "Korean") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/mod/mod_so.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
