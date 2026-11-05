# mod_example_hooks - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/mod/mod_example_hooks.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](mod.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Modules](mod.md)

# Apache Module mod\_example\_hooks

|  |  |
| --- | --- |
| [Description:](mod__module-dict.md#Description) | Illustrates the Apache module API |
| [Status:](mod__module-dict.md#Status) | Experimental |
| [Module Identifier:](mod__module-dict.md#ModuleIdentifier) | example\_hooks\_module |
| [Source File:](mod__module-dict.md#SourceFile) | mod\_example\_hooks.c |

### Summary

The files in the `modules/examples` directory
under the Apache distribution directory tree are provided as an
example to those that wish to write modules that use the Apache
API.

The main file is `mod_example_hooks.c`, which
illustrates all the different callback mechanisms and call
syntaxes. By no means does an add-on module need to include
routines for all of the callbacks - quite the contrary!

The example module is an actual working module. If you link
it into your server, enable the "example-hooks-handler" handler for a
location, and then browse to that location, you will see a
display of some of the tracing the example module did as the
various callbacks were made.

### Topics

- ![](../images/down.gif) [Compiling the example\_hooks module](#compiling)
- ![](../images/down.gif) [Using the `mod_example_hooks` Module](#using)

### Directives

- ![](../images/down.gif) [Example](#example)

### Bugfix checklist

- [httpd changelog](https://www.apache.org/dist/httpd/CHANGES_2.4)
- [Known issues](https://bz.apache.org/bugzilla/buglist.cgi?bug_status=__open__&list_id=144532&product=Apache%20httpd-2&query_format=specific&order=changeddate%20DESC%2Cpriority%2Cbug_severity&component=mod_example_hooks)
- [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2&component=mod_example_hooks)

[![top](../images/up.gif)](#page-header)

## Compiling the example\_hooks module [¶](#compiling "Permanent link")

To include the example\_hooks module in your server, follow the
steps below:

1. Run `configure` with `--enable-example-hooks`
   option.
2. Make the server (run "`make`").

To add another module of your own:

1. `cp modules/examples/mod_example_hooks.c
   modules/new_module/mod_myexample.c`
2. Modify the file.
3. Create `modules/new_module/config.m4`.
   1. Add `APACHE_MODPATH_INIT(new_module)`.
   2. Copy APACHE\_MODULE line with "example\_hooks" from
      `modules/examples/config.m4`.
   3. Replace the first argument "example\_hooks" with *myexample*.
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

## Using the `mod_example_hooks` Module [¶](#using "Permanent link")

To activate the example\_hooks module, include a block similar to
the following in your `httpd.conf` file:

```
<Location "/example-hooks-info">
   SetHandler example-hooks-handler
</Location>
```

As an alternative, you can put the following into a [`.htaccess`](mod__core.md#accessfilename) file
and then request the file "test.example" from that location:

```
AddHandler example-hooks-handler ".example"
```

After reloading/restarting your server, you should be able
to browse to this location and see the brief display mentioned
earlier.

[![top](../images/up.gif)](#page-header)

## Example Directive [¶](#example "Permanent link")

|  |  |
| --- | --- |
| [Description:](mod__directive-dict.md#Description) | Demonstration directive to illustrate the Apache module API |
| [Syntax:](mod__directive-dict.md#Syntax) | `Example` |
| [Context:](mod__directive-dict.md#Context) | server config, virtual host, directory, .htaccess |
| [Status:](mod__directive-dict.md#Status) | Experimental |
| [Module:](mod__directive-dict.md#Module) | mod\_example\_hooks |

The `Example` directive just sets a demonstration
flag which the example module's content handler displays. It
takes no arguments. If you browse to an URL to which the
example-hooks content-handler applies, you will get a display of the
routines within the module and how and in what order they were
called to service the document request. The effect of this
directive one can observe under the point "`Example
directive declared here: YES/NO`".

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/mod/mod_example_hooks.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/mod/mod_example_hooks.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/mod/mod_example_hooks.html "Korean")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
