# Request Processing in the Apache HTTP Server 2.4 - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/developer/request.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md) > [Developer Documentation](developer.md)

# Request Processing in the Apache HTTP Server 2.4

This document describes how the Apache HTTP Server processes
requests internally, covering the full hook sequence from URI
translation through content generation and logging. Module authors
should understand these phases to correctly insert their processing
at the appropriate point in the cycle.

All requests pass through
`ap_process_request_internal()` in
`server/request.c`, including subrequests and internal
redirects. Do not duplicate this logic elsewhere; doing so will
break when the request processing API changes.

The first major design principle is that all request processing
paths (main requests, subrequests, and redirects) share a single
code path. Duplicate code was folded back into
`ap_process_request_internal()` in 2.0 to prevent the
paths from falling out of sync.

To streamline requests, module authors can take advantage of
the [hooks offered](developer__modguide.md#hooking) to drop
out of the request cycle early, or to bypass core hooks which are
irrelevant (and costly in terms of CPU).

- ![](../images/down.gif) [Hook Overview](#overview)
- ![](../images/down.gif) [The Request Parsing Phase](#parsing)
- ![](../images/down.gif) [Hook: quick\_handler](#quick_handler)
- ![](../images/down.gif) [Hook: create\_request](#create_request)
- ![](../images/down.gif) [The Translation Phase](#translation)
- ![](../images/down.gif) [Hook: map\_to\_storage](#map_to_storage)
- ![](../images/down.gif) [Hook: post\_perdir\_config](#post_perdir_config)
- ![](../images/down.gif) [Hook: header\_parser](#header_parser)
- ![](../images/down.gif) [The Security Phase](#security)
- ![](../images/down.gif) [The Preparation Phase](#preparation)
- ![](../images/down.gif) [The Handler Phase](#handler)
- ![](../images/down.gif) [The Logging Phase](#logging)
- ![](../images/down.gif) [Hook: dirwalk\_stat](#dirwalk_stat)
- ![](../images/down.gif) [Hook Types and Ordering](#hookorder)

[![top](../images/up.gif)](#page-header)

## Hook Overview [¶](#overview "Permanent link")

The complete request processing cycle involves the following hooks,
listed in execution order. Hooks marked with *(request.c)* are
implemented in `server/request.c`; others are declared
in `http_config.h` or `http_protocol.h` and
run from the MPM or protocol layer.

1. **[quick\_handler](#quick_handler)** —
   Short-circuit before the full request cycle (e.g. cache hits)
2. **[create\_request](#create_request)** —
   Initialize request-specific module data
3. **[pre\_translate\_name](#pre_translate_name)** —
   Manipulate URI before decoding/translation
4. **[translate\_name](#translate_name)** —
   Map URI to filesystem path
5. **[map\_to\_storage](#map_to_storage)** —
   Merge per-directory config, directory/file walks
6. **[post\_perdir\_config](#post_perdir_config)** —
   Act on merged per-directory configuration
7. **[header\_parser](#header_parser)** —
   Examine client request headers
8. **[access\_checker](#access_checker)** —
   Host-based or environment-based access control
9. **[access\_checker\_ex](#access_checker_ex)** —
   Extended access control with auth bypass capability
10. **[force\_authn](#force_authn)** —
    Force authentication even when not otherwise required
11. **[check\_user\_id](#check_user_id)** —
    Authenticate the user (set `r->user`)
12. **[auth\_checker](#auth_checker)** —
    Authorize the authenticated user
13. **[type\_checker](#type_checker)** —
    Determine content type, language, encoding
14. **[fixups](#fixups)** —
    Last chance to adjust request fields before content generation
15. **[insert\_filter](#insert_filter)** —
    Insert content/protocol filters
16. **[handler](#handler)** —
    Generate the response content
17. **[log\_transaction](#log_transaction)** —
    Log the completed transaction

Additionally, the **[dirwalk\_stat](#dirwalk_stat)**
hook is called during directory walks to allow modules to emulate or
override `apr_stat()` calls.

[![top](../images/up.gif)](#page-header)

## The Request Parsing Phase [¶](#parsing "Permanent link")

Before hooks run, the server performs URL normalization:

### Unescapes the URL

The request's `parsed_uri` path is unescaped, once and only
once, at the beginning of internal request processing.

This step is bypassed if the proxyreq flag is set, or the
`parsed_uri.path` element is unset. The module has no further
control of this one-time unescape operation; either failing to
unescape or multiply unescaping the URL leads to security
repercussions.

### Strips Parent and This Elements from the URI

All `/../` and `/./` elements are
removed by `ap_getparents()`, as well as any trailing
`/.` or `/..` element. This helps to ensure
the path is (nearly) absolute before the request processing
continues. (See RFC 1808 section 4 for further discussion.)

This step cannot be bypassed.

### Initial URI Location Walk

Every request is subject to an
`ap_location_walk()` call. This ensures that
`<Location>` sections
are consistently enforced for all requests. If the request is an internal
redirect or a sub-request, it may borrow some or all of the processing
from the previous or parent request's ap\_location\_walk, so this step
is generally very efficient after processing the main request.

[![top](../images/up.gif)](#page-header)

## Hook: quick\_handler [¶](#quick_handler "Permanent link")

The `quick_handler` hook runs *before* any other
request processing hooks — before location walks, directory walks,
access checking, and authentication. It provides a fast path for
modules that can serve content directly from a URI-keyed cache or
similar mechanism without needing per-directory configuration.

This hook is declared in `http_config.h` and called from
the MPM/protocol layer, not from
`ap_process_request_internal()`.

```
AP_DECLARE_HOOK(int, quick_handler, (request_rec *r, int lookup_uri))
```

The `lookup_uri` parameter is set to 1 when called from
`ap_sub_req_lookup_uri()`, indicating the caller only needs
metadata (not actual content delivery).

Used by: `mod_cache`

Return `OK` to indicate the request has been fully handled.
Return `DECLINED` to fall through to normal processing.

[![top](../images/up.gif)](#page-header)

## Hook: create\_request [¶](#create_request "Permanent link")

Called when a new `request_rec` is created (for main
requests, subrequests, and internal redirects). Modules use this hook
to initialize per-request module state and set up private data
structures attached to the request pool or request notes.

```
AP_DECLARE_HOOK(int, create_request, (request_rec *r))
```

This is a `RUN_ALL` hook — all registered modules get
a chance to run. Return `OK` or `DECLINED`.

Used by: `mod_http` (http\_core.c),
`mod_firehose`

[![top](../images/up.gif)](#page-header)

## The Translation Phase [¶](#translation "Permanent link")

### Hook: pre\_translate\_name

Runs before URL decoding happens. Modules can manipulate the
raw URI before it is translated to a filesystem path. This is
useful for modules that need to operate on the URI before
percent-decoding or normalization.

```
AP_DECLARE_HOOK(int, pre_translate_name, (request_rec *r))
```

Return `DECLINED` to let other modules handle the
pre-translation, `OK` if it was handled, `DONE`
if no further transformation should happen on the URI, or an
HTTP error status code.

Used by: `mod_proxy`

### Hook: translate\_name

Modules can determine the file name, or alter the given URI
in this step. For example, `mod_vhost_alias` will
translate the URI's path into the configured virtual host,
`mod_alias` will translate the path to an alias path,
and if the request falls back on the core, the `DocumentRoot` is prepended to the request resource.

```
AP_DECLARE_HOOK(int, translate_name, (request_rec *r))
```

If all modules `DECLINE` this phase, an error 500 is
returned to the browser, and a "couldn't translate name" error is logged
automatically.

[![top](../images/up.gif)](#page-header)

## Hook: map\_to\_storage [¶](#map_to_storage "Permanent link")

After the file or correct URI was determined, the
appropriate per-dir configurations are merged together. For
example, `mod_proxy` compares and merges the appropriate
`<Proxy>` sections.
If the URI is nothing more than a local (non-proxy) `TRACE`
request, the core handles the request and returns `DONE`.

```
AP_DECLARE_HOOK(int, map_to_storage, (request_rec *r))
```

If no module answers this hook with `OK` or `DONE`,
the core will run the request filename against the `<Directory>` and `<Files>` sections. If the request
'filename' isn't an absolute, legal filename, a note is set for
later termination.

After `map_to_storage`, a second
`ap_location_walk()` call hardens the request by re-applying
`<Location>` sections
to the translated URI.

[![top](../images/up.gif)](#page-header)

## Hook: post\_perdir\_config [¶](#post_perdir_config "Permanent link")

This hook fires immediately after per-directory configuration has been
merged (after both `map_to_storage` and the second location
walk). Modules can use it to act on the fully-merged per-directory
configuration before access control runs.

```
AP_DECLARE_HOOK(int, post_perdir_config, (request_rec *r))
```

Return `OK` to allow processing to continue,
`DECLINED` to let later modules decide, or an HTTP
error status code to abort.

[![top](../images/up.gif)](#page-header)

## Hook: header\_parser [¶](#header_parser "Permanent link")

The main request then parses the client's headers. This
prepares the remaining request processing steps to better serve
the client's request. This hook only runs for the initial
request (not subrequests).

[![top](../images/up.gif)](#page-header)

## The Security Phase [¶](#security "Permanent link")

The security phase in 2.4 uses the provider-based
authentication/authorization architecture managed by
`mod_auth_basic`, `mod_authz_core`,
and related modules. The hook execution order depends on the
`Satisfy` setting
and whether access control is required (`Require` directives).

The hooks execute in this order:

### Hook: access\_checker

Applies additional access control to the resource. This hook runs
*before* a user is authenticated, so it is for restrictions
independent of user identity (e.g. IP-based access, time-of-day
restrictions). It runs independent of `Require` directive usage.

```
AP_DECLARE_HOOK(int, access_checker, (request_rec *r))
```

This is a `RUN_ALL` hook — all registered modules run.
Return `OK` to allow, or an HTTP error status to deny.

Modules should register using `ap_hook_check_access()`
rather than hooking `access_checker` directly.

### Hook: access\_checker\_ex

Extended access control that runs after `access_checker`
but before user authentication. This hook can also *bypass*
authentication entirely by returning `OK` — used by
`mod_authz_core` to implement the authorization
model where `Require` directives can grant access
without credentials (e.g. `Require ip`).

```
AP_DECLARE_HOOK(int, access_checker_ex, (request_rec *r))
```

Return `OK` to grant access (skipping authn unless
`force_authn` overrides), `DECLINED` to
require authentication, or an HTTP error status to deny.

Modules should register using `ap_hook_check_access_ex()`
rather than hooking `access_checker_ex` directly.

### Hook: force\_authn

Allows a module to force authentication to be required even when
`access_checker_ex` has already granted access. This is
useful when a module needs the authenticated user identity for
purposes beyond authorization (e.g. logging, personalization).

```
AP_DECLARE_HOOK(int, force_authn, (request_rec *r))
```

Return `OK` to force authentication, or
`DECLINED` to let later modules decide.

### Hook: check\_user\_id (authn)

Authenticates the user — analyzes the request headers, validates
credentials, and sets `r->user` and
`r->ap_auth_type`. This hook only runs when Apache
determines that authentication is required for this resource.

```
AP_DECLARE_HOOK(int, check_user_id, (request_rec *r))
```

Modules should register using `ap_hook_check_authn()`
rather than hooking `check_user_id` directly.

### Hook: auth\_checker (authz)

Checks whether the authenticated user (`r->user`)
is authorized to access this resource. Runs after
`check_user_id`, and only when a `Require` directive is
in effect.

```
AP_DECLARE_HOOK(int, auth_checker, (request_rec *r))
```

Modules should register using `ap_hook_check_authz()`
rather than hooking `auth_checker` directly.

[![top](../images/up.gif)](#page-header)

## The Preparation Phase [¶](#preparation "Permanent link")

### Hook: type\_checker

The modules have an opportunity to test the URI or filename
against the target resource, and set mime information for the
request. Both `mod_mime` and
`mod_mime_magic` use this phase to compare the file
name or contents against the administrator's configuration and set the
content type, language, character set and request handler. Some modules
may set up their filters or other request handling parameters at this
time.

```
AP_DECLARE_HOOK(int, type_checker, (request_rec *r))
```

If all modules `DECLINE` this phase, an error 500 is
returned to the browser, and a "couldn't find types" error is logged
automatically.

### Hook: fixups

Many modules are "trounced" by some phase above. The fixups
phase is used by modules to reassert their ownership or force
the request's fields to their appropriate values. It is the last
hook to run before content generation.

```
AP_DECLARE_HOOK(int, fixups, (request_rec *r))
```

This is a `RUN_ALL` hook — all registered modules
get a chance to run. Used by `mod_env`,
`mod_headers`, and others.

[![top](../images/up.gif)](#page-header)

## The Handler Phase [¶](#handler "Permanent link")

This phase is **not** part of the processing in
`ap_process_request_internal()`. After the core or a module
calls `ap_process_request_internal()`, it then calls
`ap_invoke_handler()` to generate the request.

### Hook: insert\_filter

Modules that transform the content in some way can insert
their values and override existing filters, such that if the
user configured a more advanced filter out-of-order, then the
module can move its order as needed. There is no result code,
so actions in this hook must always succeed.

```
AP_DECLARE_HOOK(void, insert_filter, (request_rec *r))
```

This is a VOID hook — no return value. Used by
`mod_deflate`, `mod_filter`,
`mod_ssl`, and other filter modules to insert
themselves into the output filter chain.

### Hook: handler

The module finally has a chance to serve the request in its
handler hook. Note that not every prepared request is sent to
the handler hook. Many modules, such as `mod_autoindex`,
will create subrequests for a given URI, and then never serve the
subrequest, but simply list it for the user. Remember not to
put required teardown from the hooks above into this module,
but register pool cleanups against the request pool to free
resources as required.

```
AP_DECLARE_HOOK(int, handler, (request_rec *r))
```

[![top](../images/up.gif)](#page-header)

## The Logging Phase [¶](#logging "Permanent link")

### Hook: log\_transaction

After the response has been sent to the client, modules can
perform logging activities. This hook is declared in
`http_protocol.h` and runs outside of
`ap_process_request_internal()`.

```
AP_DECLARE_HOOK(int, log_transaction, (request_rec *r))
```

Used by: `mod_log_config`,
`mod_log_forensic`, `mod_logio`

Return `OK` or `DECLINED`. Errors at
this stage do not affect the client response (it has already
been sent).

[![top](../images/up.gif)](#page-header)

## Hook: dirwalk\_stat [¶](#dirwalk_stat "Permanent link")

This hook is called during directory walks to allow modules to
handle or emulate the `apr_stat()` calls needed to
traverse the filesystem. This enables modules to serve content
from non-filesystem backends (databases, remote storage, etc.)
while still participating in the directory walk mechanism.

```
AP_DECLARE_HOOK(apr_status_t, dirwalk_stat,
                (apr_finfo_t *finfo, request_rec *r, apr_int32_t wanted))
```

Return an `apr_status_t` value, or
`AP_DECLINED` to let later modules (or the default
`apr_stat()` call) decide.

[![top](../images/up.gif)](#page-header)

## Hook Types and Ordering [¶](#hookorder "Permanent link")

Each hook uses one of the following execution strategies:

`RUN_FIRST`
:   Hooks stop at the first module that does *not* return
    `DECLINED`. Used by: `pre_translate_name`,
    `translate_name`, `map_to_storage`,
    `check_user_id`, `type_checker`,
    `access_checker_ex`, `auth_checker`,
    `force_authn`, `dirwalk_stat`.

`RUN_ALL`
:   Every registered module runs unless one returns an error.
    Used by: `fixups`, `access_checker`,
    `create_request`, `post_perdir_config`.

`VOID`
:   Every registered module runs with no return value.
    Used by: `insert_filter`.

Modules control their position in the hook chain using the
`order`, `predecessors`, and
`successors` arguments to the `ap_hook_*`
registration functions. See [the
module guide](developer__modguide.md#hooking) for details.

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/developer/request.html "English")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
