# mod_example - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/mod/mod_example.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Modules](mod.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/mod/mod_example.html) to go to the current version of this document.

# Apache Module mod\_example

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Illustrates the Apache module API |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | example\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_example.c |

### Summary

Some files in the `modules/experimental` directory
under the Apache distribution directory tree are provided as an
example to those that wish to write modules that use the Apache
API.

The main file is `mod_example.c`, which
illustrates all the different callback mechanisms and call
syntaxes. By no means does an add-on module need to include
routines for all of the callbacks - quite the contrary!

The example module is an actual working module. If you link
it into your server, enable the "example-handler" handler for a
location, and then browse to that location, you will see a
display of some of the tracing the example module did as the
various callbacks were made.

### Topics

- ![](../images/down.gif) [Compiling the example module](#compiling)
- ![](../images/down.gif) [Using the `mod_example` Module](#using)

### Directives

- ![](../images/down.gif) [Example](#example)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Compiling the example module

To include the example module in your server, follow the
steps below:

1. Run `configure` with `--enable-example`
   option.
2. Make the server (run "`make`").

To add another module of your own:

1. `cp modules/experimental/mod_example.c
   modules/new_module/mod_myexample.c`
2. Modify the file.
3. Create `modules/new_module/config.m4`.
   1. Add `APACHE_MODPATH_INIT(new_module)`.
   2. Copy APACHE\_MODULE line with "example" from
      `modules/experimental/config.m4`.
   3. Replace the first argument "example" with *myexample*.
   4. Replace the second argument with brief description of your module.
      It will be used in `configure --help`.
   5. If your module needs additional C compiler flags, linker flags or
      libraries, add them to CFLAGS, LDFLAGS and LIBS accordingly.
      See other `config.m4` files in modules directory for
      examples.
   6. Add `APACHE_MODPATH_FINISH`.
4. Create `module/new_module/Makefile.in`.
   If your module doesn't need special build instructions,
   all you need to have in that file is
   `include $(top_srcdir)/build/special.mk`.
5. Run ./buildconf from the top-level directory.
6. Build the server with --enable-myexample

[![top](../images/up.gif)](#page-header)

## Using the `mod_example` Module

To activate the example module, include a block similar to
the following in your `httpd.conf` file:

`<Location /example-info>  
SetHandler example-handler  
</Location>`

As an alternative, you can put the following into a [`.htaccess`](mod__core.md#accessfilename) file
and then request the file "test.example" from that location:

`AddHandler example-handler .example`

After reloading/restarting your server, you should be able
to browse to this location and see the brief display mentioned
earlier.

[![top](../images/up.gif)](#page-header)

## Example Directive

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Demonstration directive to illustrate the Apache module API |
| [Syntax:](mod__directive-dict.md#Syntax) | `Example` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_example |

The `Example` directive just sets a demonstration
flag which the example module's content handler displays. It
takes no arguments. If you browse to an URL to which the
example content-handler applies, you will get a display of the
routines within the module and how and in what order they were
called to service the document request. The effect of this
directive one can observe under the point "`Example
directive declared here: YES/NO`".

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/mod/mod_example.html "English") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/mod/mod_example.html "Korean")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
