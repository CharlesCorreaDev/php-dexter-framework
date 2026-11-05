# Converting Modules from Apache 1.3 to Apache 2.0 - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/developer/modules.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Developer Documentation](developer.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/developer/modules.html) to go to the current version of this document.

# Converting Modules from Apache 1.3 to Apache 2.0

This is a first attempt at writing the lessons I learned
when trying to convert the `mod_mmap_static` module to Apache
2.0. It's by no means definitive and probably won't even be
correct in some ways, but it's a start.

- ![](../images/down.gif) [The easier changes ...](#easy)
- ![](../images/down.gif) [The messier changes...](#messy)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## The easier changes ...

### Cleanup Routines

These now need to be of type `apr_status_t` and return a
value of that type. Normally the return value will be
`APR_SUCCESS` unless there is some need to signal an error in
the cleanup. Be aware that even though you signal an error not all code
yet checks and acts upon the error.

### Initialisation Routines

These should now be renamed to better signify where they sit
in the overall process. So the name gets a small change from
`mmap_init` to `mmap_post_config`. The arguments
passed have undergone a radical change and now look like

- `apr_pool_t *p`
- `apr_pool_t *plog`
- `apr_pool_t *ptemp`
- `server_rec *s`

### Data Types

A lot of the data types have been moved into the [APR](http://apr.apache.org/). This means that some have had
a name change, such as the one shown above. The following is a brief
list of some of the changes that you are likely to have to make.

- `pool` becomes `apr_pool_t`
- `table` becomes `apr_table_t`

[![top](../images/up.gif)](#page-header)

## The messier changes...

### Register Hooks

The new architecture uses a series of hooks to provide for
calling your functions. These you'll need to add to your module
by way of a new function, `static void register_hooks(void)`.
The function is really reasonably straightforward once you
understand what needs to be done. Each function that needs
calling at some stage in the processing of a request needs to
be registered, handlers do not. There are a number of phases
where functions can be added, and for each you can specify with
a high degree of control the relative order that the function
will be called in.

This is the code that was added to `mod_mmap_static`:

```
static void register_hooks(void)
{
    static const char * const aszPre[]={ "http_core.c",NULL };
    ap_hook_post_config(mmap_post_config,NULL,NULL,HOOK_MIDDLE);
    ap_hook_translate_name(mmap_static_xlat,aszPre,NULL,HOOK_LAST);
};
```

This registers 2 functions that need to be called, one in
the `post_config` stage (virtually every module will need this
one) and one for the `translate_name` phase. note that while
there are different function names the format of each is
identical. So what is the format?

`ap_hook_phase_name(function_name,
predecessors, successors, position);`

There are 3 hook positions defined...

- `HOOK_FIRST`
- `HOOK_MIDDLE`
- `HOOK_LAST`

To define the position you use the position and then modify
it with the predecessors and successors. Each of the modifiers
can be a list of functions that should be called, either before
the function is run (predecessors) or after the function has
run (successors).

In the `mod_mmap_static` case I didn't care about the
`post_config` stage, but the `mmap_static_xlat`
**must** be called after the core module had done its name
translation, hence the use of the aszPre to define a modifier to the
position `HOOK_LAST`.

### Module Definition

There are now a lot fewer stages to worry about when
creating your module definition. The old defintion looked
like

```
module MODULE_VAR_EXPORT module_name_module =
{
    STANDARD_MODULE_STUFF,
    /* initializer */
    /* dir config creater */
    /* dir merger --- default is to override */
    /* server config */
    /* merge server config */
    /* command handlers */
    /* handlers */
    /* filename translation */
    /* check_user_id */
    /* check auth */
    /* check access */
    /* type_checker */
    /* fixups */
    /* logger */
    /* header parser */
    /* child_init */
    /* child_exit */
    /* post read-request */
};
```

The new structure is a great deal simpler...

```
module MODULE_VAR_EXPORT module_name_module =
{
    STANDARD20_MODULE_STUFF,
    /* create per-directory config structures */
    /* merge per-directory config structures  */
    /* create per-server config structures    */
    /* merge per-server config structures     */
    /* command handlers */
    /* handlers */
    /* register hooks */
};
```

Some of these read directly across, some don't. I'll try to
summarise what should be done below.

The stages that read directly across :

`/* dir config creater */`
:   `/* create per-directory config structures */`

`/* server config */`
:   `/* create per-server config structures */`

`/* dir merger */`
:   `/* merge per-directory config structures */`

`/* merge server config */`
:   `/* merge per-server config structures */`

`/* command table */`
:   `/* command apr_table_t */`

`/* handlers */`
:   `/* handlers */`

The remainder of the old functions should be registered as
hooks. There are the following hook stages defined so
far...

`ap_hook_post_config`
:   this is where the old `_init` routines get
    registered

`ap_hook_http_method`
:   retrieve the http method from a request. (legacy)

`ap_hook_open_logs`
:   open any specified logs

`ap_hook_auth_checker`
:   check if the resource requires authorization

`ap_hook_access_checker`
:   check for module-specific restrictions

`ap_hook_check_user_id`
:   check the user-id and password

`ap_hook_default_port`
:   retrieve the default port for the server

`ap_hook_pre_connection`
:   do any setup required just before processing, but after
    accepting

`ap_hook_process_connection`
:   run the correct protocol

`ap_hook_child_init`
:   call as soon as the child is started

`ap_hook_create_request`
:   ??

`ap_hook_fixups`
:   last chance to modify things before generating content

`ap_hook_handler`
:   generate the content

`ap_hook_header_parser`
:   lets modules look at the headers, not used by most modules, because
    they use `post_read_request` for this

`ap_hook_insert_filter`
:   to insert filters into the filter chain

`ap_hook_log_transaction`
:   log information about the request

`ap_hook_optional_fn_retrieve`
:   retrieve any functions registered as optional

`ap_hook_post_read_request`
:   called after reading the request, before any other phase

`ap_hook_quick_handler`
:   called before any request processing, used by cache modules.

`ap_hook_translate_name`
:   translate the URI into a filename

`ap_hook_type_checker`
:   determine and/or set the doc type

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/developer/modules.html "English") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/developer/modules.html "Japanese")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
