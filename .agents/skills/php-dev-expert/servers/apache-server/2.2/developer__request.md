# Request Processing in the Apache HTTP Server 2.x - Apache HTTP Server Version 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/developer/request.html

---

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)

Apache HTTP Server Version 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](http://www.apache.org/) > [HTTP Server](http://httpd.apache.org/) > [Documentation](http://httpd.apache.org/docs/) > [Version 2.2](index.md) > [Developer Documentation](developer.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/developer/request.html) to go to the current version of this document.

# Request Processing in the Apache HTTP Server 2.x

### Warning

Warning - this is a first (fast) draft that needs further
revision!

Several changes in 2.0 and above affect the internal request
processing mechanics. Module authors need to be aware of these
changes so they may take advantage of the optimizations and
security enhancements.

The first major change is to the subrequest and redirect
mechanisms. There were a number of different code paths in
the Apache HTTP Server 1.3 to attempt to optimize subrequest
or redirect behavior. As patches were introduced to 2.0, these
optimizations (and the server behavior) were quickly broken due
to this duplication of code. All duplicate code has been folded
back into `ap_process_request_internal()` to prevent
the code from falling out of sync again.

This means that much of the existing code was 'unoptimized'.
It is the Apache HTTP Project's first goal to create a robust
and correct implementation of the HTTP server RFC. Additional
goals include security, scalability and optimization. New
methods were sought to optimize the server (beyond the
performance of 1.3) without introducing fragile or
insecure code.

- ![](../images/down.gif) [The Request Processing Cycle](#processing)
- ![](../images/down.gif) [The Request Parsing Phase](#parsing)
- ![](../images/down.gif) [The Security Phase](#security)
- ![](../images/down.gif) [The Preparation Phase](#preparation)
- ![](../images/down.gif) [The Handler Phase](#handler)

- [Comments](#comments_section)

[![top](../images/up.gif)](#page-header)

## The Request Processing Cycle

All requests pass through `ap_process_request_internal()`
in `request.c`, including subrequests and redirects. If a module
doesn't pass generated requests through this code, the author is cautioned
that the module may be broken by future changes to request
processing.

To streamline requests, the module author can take advantage
of the hooks offered to drop out of the request cycle early, or
to bypass core hooks which are irrelevant (and costly in
terms of CPU.)

[![top](../images/up.gif)](#page-header)

## The Request Parsing Phase

### Unescapes the URL

The request's `parsed_uri` path is unescaped, once and only
once, at the beginning of internal request processing.

This step is bypassed if the proxyreq flag is set, or the
`parsed_uri.path` element is unset. The module has no further
control of this one-time unescape operation, either failing to
unescape or multiply unescaping the URL leads to security
repercussions.

### Strips Parent and This Elements from the URI

All `/../` and `/./` elements are
removed by `ap_getparents()`. This helps to ensure
the path is (nearly) absolute before the request processing
continues.

This step cannot be bypassed.

### Initial URI Location Walk

Every request is subject to an
`ap_location_walk()` call. This ensures that
`<Location>` sections
are consistently enforced for all requests. If the request is an internal
redirect or a sub-request, it may borrow some or all of the processing
from the previous or parent request's ap\_location\_walk, so this step
is generally very efficient after processing the main request.

### translate\_name

Modules can determine the file name, or alter the given URI
in this step. For example, `mod_vhost_alias` will
translate the URI's path into the configured virtual host,
`mod_alias` will translate the path to an alias path,
and if the request falls back on the core, the `DocumentRoot` is prepended to the request resource.

If all modules `DECLINE` this phase, an error 500 is
returned to the browser, and a "couldn't translate name" error is logged
automatically.

### Hook: map\_to\_storage

After the file or correct URI was determined, the
appropriate per-dir configurations are merged together. For
example, `mod_proxy` compares and merges the appropriate
`<Proxy>` sections.
If the URI is nothing more than a local (non-proxy) `TRACE`
request, the core handles the request and returns `DONE`.
If no module answers this hook with `OK` or `DONE`,
the core will run the request filename against the `<Directory>` and `<Files>` sections. If the request
'filename' isn't an absolute, legal filename, a note is set for
later termination.

### URI Location Walk

Every request is hardened by a second
`ap_location_walk()` call. This reassures that a
translated request is still subjected to the configured
`<Location>` sections.
The request again borrows some or all of the processing from its previous
`location_walk` above, so this step is almost always very
efficient unless the translated URI mapped to a substantially different
path or Virtual Host.

### Hook: header\_parser

The main request then parses the client's headers. This
prepares the remaining request processing steps to better serve
the client's request.

[![top](../images/up.gif)](#page-header)

## The Security Phase

Needs Documentation. Code is:

```
switch (ap_satisfies(r)) {
case SATISFY_ALL:
case SATISFY_NOSPEC:
        if ((access_status = ap_run_access_checker(r)) != 0) {
            return decl_die(access_status, "check access", r);
        }

    if (ap_some_auth_required(r)) {
        if (((access_status = ap_run_check_user_id(r)) != 0)
            || !ap_auth_type(r)) {
            return decl_die(access_status, ap_auth_type(r)
                          ? "check user.  No user file?"
                          : "perform authentication. AuthType not set!",
                          r);
        }

        if (((access_status = ap_run_auth_checker(r)) != 0)
            || !ap_auth_type(r)) {
            return decl_die(access_status, ap_auth_type(r)
                          ? "check access.  No groups file?"
                          : "perform authentication. AuthType not set!",
                          r);
        }
    }
    break;

case SATISFY_ANY:
    if (((access_status = ap_run_access_checker(r)) != 0)) {
        if (!ap_some_auth_required(r)) {
            return decl_die(access_status, "check access", r);
        }

        if (((access_status = ap_run_check_user_id(r)) != 0)
            || !ap_auth_type(r)) {
            return decl_die(access_status, ap_auth_type(r)
                          ? "check user.  No user file?"
                          : "perform authentication. AuthType not set!",
                          r);
        }

        if (((access_status = ap_run_auth_checker(r)) != 0)
            || !ap_auth_type(r)) {
            return decl_die(access_status, ap_auth_type(r)
                          ? "check access.  No groups file?"
                          : "perform authentication. AuthType not set!",
                          r);
        }
    }
    break;
}
```

[![top](../images/up.gif)](#page-header)

## The Preparation Phase

### Hook: type\_checker

The modules have an opportunity to test the URI or filename
against the target resource, and set mime information for the
request. Both `mod_mime` and
`mod_mime_magic` use this phase to compare the file
name or contents against the administrator's configuration and set the
content type, language, character set and request handler. Some modules
may set up their filters or other request handling parameters at this
time.

If all modules `DECLINE` this phase, an error 500 is
returned to the browser, and a "couldn't find types" error is logged
automatically.

### Hook: fixups

Many modules are 'trounced' by some phase above. The fixups
phase is used by modules to 'reassert' their ownership or force
the request's fields to their appropriate values. It isn't
always the cleanest mechanism, but occasionally it's the only
option.

[![top](../images/up.gif)](#page-header)

## The Handler Phase

This phase is **not** part of the processing in
`ap_process_request_internal()`. Many
modules prepare one or more subrequests prior to creating any
content at all. After the core, or a module calls
`ap_process_request_internal()` it then calls
`ap_invoke_handler()` to generate the request.

### Hook: insert\_filter

Modules that transform the content in some way can insert
their values and override existing filters, such that if the
user configured a more advanced filter out-of-order, then the
module can move its order as need be. There is no result code,
so actions in this hook better be trusted to always succeed.

### Hook: handler

The module finally has a chance to serve the request in its
handler hook. Note that not every prepared request is sent to
the handler hook. Many modules, such as `mod_autoindex`,
will create subrequests for a given URI, and then never serve the
subrequest, but simply lists it for the user. Remember not to
put required teardown from the hooks above into this module,
but register pool cleanups against the request pool to free
resources as required.

Available Languages: [en](https://httpd.apache.org/docs/2.2/pt-br/en/developer/request.html "English")

[![top](../images/up.gif)](#page-header)

## Comments

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md)
