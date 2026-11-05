# Dynamic Shared Object (DSO) Support - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/dso.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/dso.html) to go to the current version of this document.

# Dynamic Shared Object (DSO) Support

The Apache HTTP Server is a modular program where the
administrator can choose the functionality to include in the
server by selecting a set of modules. The modules can be
statically compiled into the `httpd` binary when the
server is built. Alternatively, modules can be compiled as
Dynamic Shared Objects (DSOs) that exist separately from the
main `httpd` binary file. DSO modules may be
compiled at the time the server is built, or they may be
compiled and added at a later time using the Apache Extension
Tool (`apxs`).

This document describes how to use DSO modules as well as
the theory behind their use.

- ![](./images/down.gif) [Implementation](#implementation)
- ![](./images/down.gif) [Usage Summary](#usage)
- ![](./images/down.gif) [Background](#background)
- ![](./images/down.gif) [Advantages and Disadvantages](#advantages)

- [Comments](#comments_section)

[![top](./images/up.gif)](#page-header)

## Implementation

| Related Modules | Related Directives |
| --- | --- |
| - `mod_so` | - `LoadModule` |

The DSO support for loading individual Apache modules is based
on a module named `mod_so` which must be statically
compiled into the Apache core. It is the only module besides
`core` which cannot be put into a DSO
itself. Practically all other distributed Apache modules can then
be placed into a DSO by individually enabling the DSO build for
them via `configure`'s
`--enable-module=shared` option as discussed
in the [install documentation](install.md). After a
module is compiled into a DSO named `mod_foo.so` you
can use `mod_so`'s `LoadModule` command in your
`httpd.conf` file to load this module at server startup
or restart.

To simplify this creation of DSO files for Apache modules
(especially for third-party modules) a new support program
named `apxs` (APache
eXtenSion) is available. It can be used to build DSO based
modules *outside of* the Apache source tree. The idea is
simple: When installing Apache the `configure`'s
`make install` procedure installs the Apache C
header files and puts the platform-dependent compiler and
linker flags for building DSO files into the `apxs`
program. This way the user can use `apxs` to compile
his Apache module sources without the Apache distribution
source tree and without having to fiddle with the
platform-dependent compiler and linker flags for DSO
support.

[![top](./images/up.gif)](#page-header)

## Usage Summary

To give you an overview of the DSO features of Apache 2.x,
here is a short and concise summary:

1. Build and install a *distributed* Apache module, say
   `mod_foo.c`, into its own DSO
   `mod_foo.so`:

   `$ ./configure --prefix=/path/to/install --enable-foo=shared  
   $ make install`
2. Build and install a *third-party* Apache module, say
   `mod_foo.c`, into its own DSO
   `mod_foo.so`:

   `$ ./configure --add-module=module_type:/path/to/3rdparty/mod_foo.c \  

   --enable-foo=shared  
   $ make install`
3. Configure Apache for *later installation* of shared
   modules:

   `$ ./configure --enable-so  
   $ make install`
4. Build and install a *third-party* Apache module, say
   `mod_foo.c`, into its own DSO
   `mod_foo.so` *outside of* the Apache
   source tree using `apxs`:

   `$ cd /path/to/3rdparty  
   $ apxs -c mod_foo.c  
   $ apxs -i -a -n foo mod_foo.la`

In all cases, once the shared module is compiled, you must
use a `LoadModule`
directive in `httpd.conf` to tell Apache to activate
the module.

[![top](./images/up.gif)](#page-header)

## Background

On modern Unix derivatives there exists a nifty mechanism
usually called dynamic linking/loading of *Dynamic Shared
Objects* (DSO) which provides a way to build a piece of
program code in a special format for loading it at run-time
into the address space of an executable program.

This loading can usually be done in two ways: Automatically
by a system program called `ld.so` when an
executable program is started or manually from within the
executing program via a programmatic system interface to the
Unix loader through the system calls
`dlopen()/dlsym()`.

In the first way the DSO's are usually called *shared
libraries* or *DSO libraries* and named
`libfoo.so` or `libfoo.so.1.2`. They
reside in a system directory (usually `/usr/lib`)
and the link to the executable program is established at
build-time by specifying `-lfoo` to the linker
command. This hard-codes library references into the executable
program file so that at start-time the Unix loader is able to
locate `libfoo.so` in `/usr/lib`, in
paths hard-coded via linker-options like `-R` or in
paths configured via the environment variable
`LD_LIBRARY_PATH`. It then resolves any (yet
unresolved) symbols in the executable program which are
available in the DSO.

Symbols in the executable program are usually not referenced
by the DSO (because it's a reusable library of general code)
and hence no further resolving has to be done. The executable
program has no need to do anything on its own to use the
symbols from the DSO because the complete resolving is done by
the Unix loader. (In fact, the code to invoke
`ld.so` is part of the run-time startup code which
is linked into every executable program which has been bound
non-static). The advantage of dynamic loading of common library
code is obvious: the library code needs to be stored only once,
in a system library like `libc.so`, saving disk
space for every program.

In the second way the DSO's are usually called *shared
objects* or *DSO files* and can be named with an
arbitrary extension (although the canonical name is
`foo.so`). These files usually stay inside a
program-specific directory and there is no automatically
established link to the executable program where they are used.
Instead the executable program manually loads the DSO at
run-time into its address space via `dlopen()`. At
this time no resolving of symbols from the DSO for the
executable program is done. But instead the Unix loader
automatically resolves any (yet unresolved) symbols in the DSO
from the set of symbols exported by the executable program and
its already loaded DSO libraries (especially all symbols from
the ubiquitous `libc.so`). This way the DSO gets
knowledge of the executable program's symbol set as if it had
been statically linked with it in the first place.

Finally, to take advantage of the DSO's API the executable
program has to resolve particular symbols from the DSO via
`dlsym()` for later use inside dispatch tables
*etc.* In other words: The executable program has to
manually resolve every symbol it needs to be able to use it.
The advantage of such a mechanism is that optional program
parts need not be loaded (and thus do not spend memory) until
they are needed by the program in question. When required,
these program parts can be loaded dynamically to extend the
base program's functionality.

Although this DSO mechanism sounds straightforward there is
at least one difficult step here: The resolving of symbols from
the executable program for the DSO when using a DSO to extend a
program (the second way). Why? Because "reverse resolving" DSO
symbols from the executable program's symbol set is against the
library design (where the library has no knowledge about the
programs it is used by) and is neither available under all
platforms nor standardized. In practice the executable
program's global symbols are often not re-exported and thus not
available for use in a DSO. Finding a way to force the linker
to export all global symbols is the main problem one has to
solve when using DSO for extending a program at run-time.

The shared library approach is the typical one, because it
is what the DSO mechanism was designed for, hence it is used
for nearly all types of libraries the operating system
provides. On the other hand using shared objects for extending
a program is not used by a lot of programs.

As of 1998 there are only a few software packages available
which use the DSO mechanism to actually extend their
functionality at run-time: Perl 5 (via its XS mechanism and the
DynaLoader module), Netscape Server, *etc.* Starting
with version 1.3, Apache joined the crew, because Apache
already uses a module concept to extend its functionality and
internally uses a dispatch-list-based approach to link external
modules into the Apache core functionality. So, Apache is
really predestined for using DSO to load its modules at
run-time.

[![top](./images/up.gif)](#page-header)

## Advantages and Disadvantages

The above DSO based features have the following
advantages:

- The server package is more flexible at run-time because
  the actual server process can be assembled at run-time via
  `LoadModule`
  `httpd.conf` configuration commands instead of
  `configure` options at build-time. For instance
  this way one is able to run different server instances
  (standard & SSL version, minimalistic & powered up
  version [mod\_perl, PHP3], *etc.*) with only one Apache
  installation.
- The server package can be easily extended with
  third-party modules even after installation. This is at least
  a great benefit for vendor package maintainers who can create
  a Apache core package and additional packages containing
  extensions like PHP3, mod\_perl, mod\_fastcgi,
  *etc.*
- Easier Apache module prototyping because with the
  DSO/`apxs` pair you can both work outside the
  Apache source tree and only need an `apxs -i`
  command followed by an `apachectl restart` to
  bring a new version of your currently developed module into
  the running Apache server.

DSO has the following disadvantages:

- The DSO mechanism cannot be used on every platform
  because not all operating systems support dynamic loading of
  code into the address space of a program.
- The server is approximately 20% slower at startup time
  because of the symbol resolving overhead the Unix loader now
  has to do.
- The server is approximately 5% slower at execution time
  under some platforms because position independent code (PIC)
  sometimes needs complicated assembler tricks for relative
  addressing which are not necessarily as fast as absolute
  addressing.
- Because DSO modules cannot be linked against other
  DSO-based libraries (`ld -lfoo`) on all platforms
  (for instance a.out-based platforms usually don't provide
  this functionality while ELF-based platforms do) you cannot
  use the DSO mechanism for all types of modules. Or in other
  words, modules compiled as DSO files are restricted to only
  use symbols from the Apache core, from the C library
  (`libc`) and all other dynamic or static libraries
  used by the Apache core, or from static library archives
  (`libfoo.a`) containing position independent code.
  The only chances to use other code is to either make sure the
  Apache core itself already contains a reference to it or
  loading the code yourself via `dlopen()`.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/dso.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/dso.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/dso.html "Korean") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/dso.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
