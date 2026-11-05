# API Changes in Apache HTTP Server 2.4 since 2.2 - Apache HTTP Server Version 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/developer/new_api_2_4.html

---

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Apache HTTP Server Version 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](developer.md)

[Apache](https://www.apache.org/) > [HTTP Server](https://httpd.apache.org/) > [Documentation](https://httpd.apache.org/docs/) > [Version 2.4](index.md)

# API Changes in Apache HTTP Server 2.4 since 2.2

This document describes changes to the Apache HTTPD API from
version 2.2 to 2.4, that may be of interest to module/application
developers and core hacks. As of the first GA release of the
2.4 branch API compatibility is preserved for the life of the
2.4 branch. (The
[VERSIONING](http://svn.apache.org/repos/asf/httpd/httpd/branches/2.4.x/VERSIONING)
description for the 2.4 release provides more information about API
compatibility.)

API changes fall into two categories: APIs that are altogether new,
and existing APIs that are expanded or changed. The latter are
further divided into those where all changes are backwards-compatible
(so existing modules can ignore them), and those that might
require attention by maintainers. As with the transition from
HTTPD 2.0 to 2.2, existing modules and applications will require
recompiling and may call for some attention, but most should not
require any substantial updating (although some may be able to
take advantage of API changes to offer significant improvements).

For the purpose of this document, the API is split according
to the public header files. These headers are themselves the
reference documentation, and can be used to generate a browsable
HTML reference with `make docs`.

- ![](../images/down.gif) [Changed APIs](#api_changes)
- ![](../images/down.gif) [Specific information on upgrading modules from 2.2](#upgrading)

[![top](../images/up.gif)](#page-header)

## Changed APIs [¶](#api_changes "Permanent link")

### ap\_expr (NEW!)

Introduces a new API to parse and evaluate boolean and algebraic
expressions, including provision for a standard syntax and
customized variants.

### ap\_listen (changed; backwards-compatible)

Introduces a new API to enable httpd child processes to serve
different purposes.

### ap\_mpm (changed)

`ap_mpm_run` is replaced by a new `mpm` hook.
Also `ap_graceful_stop_signalled` is lost, and
`ap_mpm_register_timed_callback` is new.

### ap\_regex (changed)

In addition to the existing regexp wrapper, a new higher-level API
`ap_rxplus` is now provided. This provides the capability to
compile Perl-style expressions like `s/regexp/replacement/flags`
and to execute them against arbitrary strings. Support for regexp
backreferences is also added.

### ap\_slotmem (NEW!)

Introduces an API for modules to allocate and manage memory slots,
most commonly for shared memory.

### ap\_socache (NEW!)

API to manage a shared object cache.

### heartbeat (NEW!)

common structures for heartbeat modules

### ap\_parse\_htaccess (changed)

The function signature for `ap_parse_htaccess` has been
changed. A `apr_table_t` of individual directives allowed
for override must now be passed (override remains).

### http\_config (changed)

- Introduces per-module, per-directory loglevels, including macro wrappers.
- New `AP_DECLARE_MODULE` macro to declare all modules.
- New `APLOG_USE_MODULE` macro necessary for per-module loglevels in
  multi-file modules.
- New API to retain data across module unload/load
- New `check_config` hook
- New `ap_process_fnmatch_configs()` function to process wildcards
- Change `ap_configfile_t`, `ap_cfg_getline()`,
  `ap_cfg_getc()` to return error codes, and add
  `ap_pcfg_strerror()` for retrieving an error description.
- Any config directive permitted in ACCESS\_CONF context must now
  correctly handle being called from an .htaccess file via the new
  `AllowOverrideList` directive.
  ap\_check\_cmd\_context() accepts a new flag NOT\_IN\_HTACCESS to detect
  this case.

### http\_core (changed)

- REMOVED `ap_default_type`, `ap_requires`, all
  2.2 authnz API
- Introduces Optional Functions for logio and authnz
- New function `ap_get_server_name_for_url` to support IPv6
  literals.
- New function `ap_register_errorlog_handler` to register error log
  format string handlers.
- Arguments of `error_log` hook have changed. Declaration has moved to
  `http_core.h`.
- New function `ap_state_query` to determine if the server is in the
  initial configuration preflight phase or not. This is both easier to
  use and more correct than the old method of creating a pool userdata
  entry in the process pool.
- New function `ap_get_conn_socket` to get the socket descriptor for a
  connection. This should be used instead of accessing the core
  connection config directly.

### httpd (changed)

- Introduce per-directory, per-module loglevel
- New loglevels `APLOG_TRACEn`
- Introduce errorlog ids for requests and connections
- Support for mod\_request kept\_body
- Support buffering filter data for async requests
- New `CONN_STATE` values
- Function changes: `ap_escape_html` updated;
  `ap_unescape_all`, `ap_escape_path_segment_buffer`
- Modules that load other modules later than the `EXEC_ON_READ` config
  reading stage need to call `ap_reserve_module_slots()` or
  `ap_reserve_module_slots_directive()` in their
  `pre_config hook`.
- The useragent IP address per request can now be tracked
  independently of the client IP address of the connection, for
  support of deployments with load balancers.

### http\_log (changed)

- Introduce per-directory, per-module loglevel
- New loglevels `APLOG_TRACEn`
- `ap_log_*error` become macro wrappers (backwards-compatible if
  `APLOG_MARK` macro is used, except that is no longer possible to
  use `#ifdef` inside the argument list)
- piped logging revamped
- `module_index` added to error\_log hook
- new function: `ap_log_command_line`

### http\_request (changed)

- New auth\_internal API and auth\_provider API
- New `EOR` bucket type
- New function `ap_process_async_request`
- New flags `AP_AUTH_INTERNAL_PER_CONF` and
  `AP_AUTH_INTERNAL_PER_URI`
- New `access_checker_ex` hook to apply additional access control
  and/or bypass authentication.
- New functions `ap_hook_check_access_ex`,
  `ap_hook_check_access`, `ap_hook_check_authn`,
  `ap_hook_check_authz` which accept
  `AP_AUTH_INTERNAL_PER_*` flags
- DEPRECATED direct use of `ap_hook_access_checker`,
  `access_checker_ex`, `ap_hook_check_user_id`,
  `ap_hook_auth_checker`

When possible, registering all access control hooks (including
authentication and authorization hooks) using `AP_AUTH_INTERNAL_PER_CONF`
is recommended. If all modules' access control hooks are registered
with this flag, then whenever the server handles an internal
sub-request that matches the same set of access control configuration
directives as the initial request (which is the common case), it can
avoid invoking the access control hooks another time.

If your module requires the old behavior and must perform access
control checks on every sub-request with a different URI from the
initial request, even if that URI matches the same set of access
control configuration directives, then use
`AP_AUTH_INTERNAL_PER_URI`.

### mod\_auth (NEW!)

Introduces the new provider framework for authn and authz

### mod\_cache (changed)

Introduces a `commit_entity()` function to the cache provider
interface, allowing atomic writes to cache. Add a `cache_status()`
hook to report the cache decision. All private structures and functions were
removed.

### mod\_core (NEW!)

This introduces low-level APIs to send arbitrary headers,
and exposes functions to handle HTTP OPTIONS and TRACE.

### mod\_cache\_disk (changed)

Changes the disk format of the disk cache to support atomic cache
updates without locking. The device/inode pair of the body file is
embedded in the header file, allowing confirmation that the header
and body belong to one another.

### mod\_disk\_cache (renamed)

The mod\_disk\_cache module has been renamed to mod\_cache\_disk in
order to be consistent with the naming of other modules within the
server.

### mod\_request (NEW!)

The API for `mod_request`, to make input data
available to multiple application/handler modules where required,
and to parse HTML form data.

### mpm\_common (changed)

- REMOVES: `accept`, `lockfile`, `lock_mech`,
  `set_scoreboard` (locking uses the new ap\_mutex API)
- NEW API to drop privileges (delegates this platform-dependent
  function to modules)
- NEW Hooks: `mpm_query`, `timed_callback`, and
  `get_name`
- CHANGED interfaces: `monitor` hook,
  `ap_reclaim_child_processes`,
  `ap_relieve_child_processes`

### scoreboard (changed)

`ap_get_scoreboard_worker` is made non-backwards-compatible
as an alternative version is introduced. Additional proxy\_balancer
support. Child status stuff revamped.

### util\_cookies (NEW!)

Introduces a new API for managing HTTP Cookies.

### util\_ldap (changed)

*no description available*

### util\_mutex (NEW!)

A wrapper for APR proc and global mutexes in httpd, providing
common configuration for the underlying mechanism and location
of lock files.

### util\_script (changed)

NEW: `ap_args_to_table`

### util\_time (changed)

NEW: `ap_recent_ctime_ex`

[![top](../images/up.gif)](#page-header)

## Specific information on upgrading modules from 2.2 [¶](#upgrading "Permanent link")

### Logging

In order to take advantage of per-module loglevel configuration, any
source file that calls the `ap_log_*` functions should declare
which module it belongs to. If the module's module\_struct is called
`foo_module`, the following code can be used to remain
backward compatible with HTTPD 2.0 and 2.2:

`#include <http_log.h>  
  
#ifdef APLOG_USE_MODULE  
APLOG_USE_MODULE(foo);  
#endif`

Note: This is absolutely required for C++-language modules. It
can be skipped for C-language modules, though that breaks
module-specific log level support for files without it.

The number of parameters of the `ap_log_*` functions and the
definition of `APLOG_MARK` has changed. Normally, the change
is completely transparent. However, changes are required if a
module uses `APLOG_MARK` as a parameter to its own functions
or if a module calls `ap_log_*` without passing
`APLOG_MARK`. A module which uses wrappers
around `ap_log_*` typically uses both of these constructs.

The easiest way to change code which passes `APLOG_MARK` to
its own functions is to define and use a different macro that expands to
the parameters required by those functions, as `APLOG_MARK`
should only be used when calling `ap_log_*`
directly. In this way, the code will remain compatible with HTTPD 2.0
and 2.2.

Code which calls `ap_log_*` without passing
`APLOG_MARK` will necessarily differ between 2.4 and earlier
releases, as 2.4 requires a new third argument,
`APLOG_MODULE_INDEX`.

`/* code for httpd 2.0/2.2 */  
ap_log_perror(file, line, APLOG_ERR, 0, p, "Failed to allocate dynamic lock structure");  
  
/* code for httpd 2.4 */  
ap_log_perror(file, line, APLOG_MODULE_INDEX, APLOG_ERR, 0, p, "Failed to allocate dynamic lock structure");`

`ap_log_*error` are now implemented as macros. This means
that it is no longer possible to use `#ifdef` inside the
argument list of `ap_log_*error`, as this would cause
undefined behavior according to C99.

A `server_rec` pointer must be passed to
`ap_log_error()` when called after startup. This
was always appropriate, but there are even more limitations with
a `NULL` `server_rec` in 2.4 than in
previous releases. Beginning with 2.3.12, the global variable
`ap_server_conf` can always be used as
the `server_rec` parameter, as it will be
`NULL` only when it is valid to pass `NULL`
to `ap_log_error()`. `ap_server_conf`
should be used only when a more appropriate `server_rec`
is not available.

Consider the following changes to take advantage of the new
`APLOG_TRACE1..8` log levels:

- Check current use of `APLOG_DEBUG` and
  consider if one of the `APLOG_TRACEn` levels is
  more appropriate.
- If your module currently has a mechanism for configuring
  the amount of debug logging which is performed, consider
  eliminating that mechanism and relying on the use of
  different `APLOG_TRACEn` levels. If expensive
  trace processing needs to be bypassed depending on the
  configured log level, use the `APLOGtracen`
  and `APLOGrtracen` macros to first check
  if tracing is enabled.

Modules sometimes add process id and/or thread id to their log
messages. These ids are now logged by default, so it may not
be necessary for the module to log them explicitly. (Users may
remove them from the error log format, but they can be
instructed to add it back if necessary for problem diagnosis.)

### If your module uses these existing APIs...

`ap_default_type()`
:   This is no longer available; Content-Type must be configured
    explicitly or added by the application.

`ap_get_server_name()`
:   If the returned server name is used in a URL,
    use `ap_get_server_name_for_url()` instead. This new
    function handles the odd case where the server name is an IPv6
    literal address.

`ap_get_server_version()`
:   For logging purposes, where detailed information is
    appropriate, use `ap_get_server_description()`.
    When generating output, where the amount of information
    should be configurable by ServerTokens, use
    `ap_get_server_banner()`.

`ap_graceful_stop_signalled()`
:   Replace with a call
    to `ap_mpm_query(AP_MPMQ_MPM_STATE)` and checking for
    state `AP_MPMQ_STOPPING`.

`ap_max_daemons_limit`, `ap_my_generation`, and `ap_threads_per_child`
:   Use `ap_mpm_query()` query codes
    `AP_MPMQ_MAX_DAEMON_USED`, `AP_MPMQ_GENERATION`,
    and `AP_MPMQ_MAX_THREADS`, respectively.

`ap_mpm_query()`
:   Ensure that it is not used until after the register-hooks
    hook has completed. Otherwise, an MPM built as a DSO
    would not have had a chance to enable support for this
    function.

`ap_requires()`
:   The core server now provides better infrastructure for handling
    `Require` configuration.
    Register an auth provider function for each supported entity using
    `ap_register_auth_provider()`. The function will be
    called as necessary during `Require`
    processing. (Consult bundled modules for detailed examples.)

`ap_server_conf->process->pool` userdata
:   Optional:

    - If your module uses this to determine which pass of the
      startup hooks is being run,
      use `ap_state_query(AP_SQ_MAIN_STATE)`.
    - If your module uses this to maintain data across the
      unloading and reloading of your module, use
      `ap_retained_data_create()` and
      `ap_retained_data_get()`.

`apr_global_mutex_create()`, `apr_proc_mutex_create()`
:   Optional: See `ap_mutex_register()`,
    `ap_global_mutex_create()`, and
    `ap_proc_mutex_create()`; these allow your
    mutexes to be configurable with
    the `Mutex` directive;
    you can also remove any configuration mechanisms in your
    module for such mutexes

`CORE_PRIVATE`
:   This is now unnecessary and ignored.

`dav_new_error()` and `dav_new_error_tag()`
:   Previously, these assumed that `errno` contained
    information describing the failure. Now,
    an `apr_status_t` parameter must be provided. Pass
    0/APR\_SUCCESS if there is no such error information, or a valid
    `apr_status_t` value otherwise.

`mpm_default.h`, `DEFAULT_LOCKFILE`, `DEFAULT_THREAD_LIMIT`, `DEFAULT_PIDLOG`, etc.
:   The header file and most of the default configuration
    values set in it are no longer visible to modules. (Most can
    still be overridden at build time.) `DEFAULT_PIDLOG`
    and `DEFAULT_REL_RUNTIMEDIR` are now universally
    available via `ap_config.h`.

`unixd_config`
:   This has been renamed to ap\_unixd\_config.

`unixd_setup_child()`
:   This has been renamed to ap\_unixd\_setup\_child(), but most callers
    should call the added ap\_run\_drop\_privileges() hook.

`conn_rec->remote_ip` and `conn_rec->remote_addr`
:   These fields have been renamed in order to distinguish between
    the client IP address of the connection and the useragent IP address
    of the request (potentially overridden by a load balancer or proxy).
    References to either of these fields must be updated with one of the
    following options, as appropriate for the module:

    - When you require the IP address of the user agent, which
      might be connected directly to the server, or might optionally be
      separated from the server by a transparent load balancer or
      proxy, use `request_rec->useragent_ip` and
      `request_rec->useragent_addr`.
    - When you require the IP address of the client that is
      connected directly to the server, which might be the useragent or
      might be the load balancer or proxy itself, use
      `conn_rec->client_ip` and
      `conn_rec->client_addr`.

### If your module interfaces with this feature...

suEXEC
:   Optional: If your module logs an error
    when `ap_unixd_config.suexec_enabled` is 0,
    also log the value of the new
    field `suexec_disabled_reason`, which contains an
    explanation of why it is not available.

Extended status data in the scoreboard
:   In previous releases, `ExtendedStatus` had to be
    set to `On`, which in turn required that
    mod\_status was loaded. In 2.4, just
    set `ap_extended_status` to `1` in a
    pre-config hook and the extended status data will be
    available.

### Does your module...

Parse query args
:   Consider if `ap_args_to_table()` would be
    helpful.

Parse form data...
:   Use `ap_parse_form_data()`.

Check for request header fields `Content-Length` and `Transfer-Encoding` to see if a body was specified
:   Use `ap_request_has_body()`.

Implement cleanups which clear pointer variables
:   Use `ap_pool_cleanup_set_null()`.

Create run-time files such as shared memory files, pid files, etc.
:   Use `ap_runtime_dir_relative()` so that the global
    configuration for the location of such files, either by the
    `DEFAULT_REL_RUNTIMEDIR` compile setting or the
    `DefaultRuntimeDir` directive,
    will be respected. *Apache httpd 2.4.2 and above.*

Available Languages: [en](https://httpd.apache.org/docs/2.4/pt-br/en/developer/new_api_2_4.html "English")

Copyright 2026 The Apache Software Foundation.  
Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Modules](mod.md) | [Directives](mod__quickreference.md) | [FAQ](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossary](glossary.md) | [Sitemap](sitemap.md) | [Report a bug](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
