# Apache 2.0 Hook Functions - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/developer/hooks.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Developer Documentation](developer.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/developer/hooks.html) to go to the current version of this document.

# Apache 2.0 Hook Functions

### Warning

This document is still in development and may be partially out of
date.

In general, a hook function is one that Apache will call at
some point during the processing of a request. Modules can
provide functions that are called, and specify when they get
called in comparison to other modules.

- ![](../images/down.gif) [Creating a hook function](#create)
- ![](../images/down.gif) [Hooking the hook](#hooking)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## Creating a hook function

In order to create a new hook, four things need to be
done:

### Declare the hook function

Use the `AP_DECLARE_HOOK` macro, which needs to be given
the return type of the hook function, the name of the hook, and the
arguments. For example, if the hook returns an `int` and
takes a `request_rec *` and an `int` and is
called `do_something`, then declare it like this:

`AP_DECLARE_HOOK(int, do_something, (request_rec *r, int n))`

This should go in a header which modules will include if
they want to use the hook.

### Create the hook structure

Each source file that exports a hook has a private structure
which is used to record the module functions that use the hook.
This is declared as follows:

`APR_HOOK_STRUCT(  

APR_HOOK_LINK(do_something)  
...  
)`

### Implement the hook caller

The source file that exports the hook has to implement a
function that will call the hook. There are currently three
possible ways to do this. In all cases, the calling function is
called `ap_run_hookname()`.

#### Void hooks

If the return value of a hook is `void`, then all the
hooks are called, and the caller is implemented like this:

`AP_IMPLEMENT_HOOK_VOID(do_something, (request_rec *r, int n), (r, n))`

The second and third arguments are the dummy argument
declaration and the dummy arguments as they will be used when
calling the hook. In other words, this macro expands to
something like this:

`void ap_run_do_something(request_rec *r, int n)  
{  

...  
do_something(r, n);  
}`

#### Hooks that return a value

If the hook returns a value, then it can either be run until
the first hook that does something interesting, like so:

`AP_IMPLEMENT_HOOK_RUN_FIRST(int, do_something, (request_rec *r, int n), (r, n), DECLINED)`

The first hook that does *not* return `DECLINED`
stops the loop and its return value is returned from the hook
caller. Note that `DECLINED` is the traditional
hook return value meaning "I didn't do anything", but it can be
whatever suits you.

Alternatively, all hooks can be run until an error occurs.
This boils down to permitting *two* return values, one of
which means "I did something, and it was OK" and the other
meaning "I did nothing". The first function that returns a
value other than one of those two stops the loop, and its
return is the return value. Declare these like so:

`AP_IMPLEMENT_HOOK_RUN_ALL(int, do_something, (request_rec *r, int n), (r, n), OK, DECLINED)`

Again, `OK` and `DECLINED` are the traditional
values. You can use what you want.

### Call the hook callers

At appropriate moments in the code, call the hook caller,
like so:

`int n, ret;  
request_rec *r;  
  
ret=ap_run_do_something(r, n);`

[![top](../images/up.gif)](#page-header)

## Hooking the hook

A module that wants a hook to be called needs to do two
things.

### Implement the hook function

Include the appropriate header, and define a static function
of the correct type:

`static int my_something_doer(request_rec *r, int n)  
{  

...  
return OK;  
}`

### Add a hook registering function

During initialisation, the server will call each modules hook
registering function, which is included in the module
structure:

`static void my_register_hooks()  
{  

ap_hook_do_something(my_something_doer, NULL, NULL, APR_HOOK_MIDDLE);  
}  
  
mode MODULE_VAR_EXPORT my_module =  
{  

...  
my_register_hooks /* register hooks */  
};`

### Controlling hook calling order

In the example above, we didn't use the three arguments in
the hook registration function that control calling order.
There are two mechanisms for doing this. The first, rather
crude, method, allows us to specify roughly where the hook is
run relative to other modules. The final argument control this.
There are three possible values: `APR_HOOK_FIRST`,
`APR_HOOK_MIDDLE` and `APR_HOOK_LAST`.

All modules using any particular value may be run in any
order relative to each other, but, of course, all modules using
`APR_HOOK_FIRST` will be run before `APR_HOOK_MIDDLE`
which are before `APR_HOOK_LAST`. Modules that don't care
when they are run should use `APR_HOOK_MIDDLE`. *These
values are spaced out, so that positions like `APR_HOOK_FIRST-2`
are possible to hook slightly earlier than other functions.*

Note that there are two more values,
`APR_HOOK_REALLY_FIRST` and `APR_HOOK_REALLY_LAST`. These
should only be used by the hook exporter.

The other method allows finer control. When a module knows
that it must be run before (or after) some other modules, it
can specify them by name. The second (third) argument is a
NULL-terminated array of strings consisting of the names of
modules that must be run before (after) the current module. For
example, suppose we want "mod\_xyz.c" and "mod\_abc.c" to run
before we do, then we'd hook as follows:

`static void register_hooks()  
{  

static const char * const aszPre[] = { "mod_xyz.c", "mod_abc.c", NULL };  
  
ap_hook_do_something(my_something_doer, aszPre, NULL, APR_HOOK_MIDDLE);  
}`

Note that the sort used to achieve this is stable, so
ordering set by `APR_HOOK_ORDER` is preserved, as far
as is possible.

Ben Laurie, 15th August 1999

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/developer/hooks.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
