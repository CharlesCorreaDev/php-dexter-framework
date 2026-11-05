# Execution model and integration points

> **Fonte / Source:** https://nginx.org/en/docs/njs/integration.html

---

## Execution model and integration points

|  |
| --- |
| [Execution model](#model) [HTTP integration points](#http) [Stream integration points](#stream) [Choosing an integration point](#choosing) [State and lifetime](#state) [Using njs outside of nginx](#outside) |

JavaScript code in [njs](njs__index.md) never runs on its own.
nginx calls it at a fixed set of integration points,
each bound to a handler by a configuration directive.
There is no start-up script, no background thread,
and no event loop of its own:
nginx invokes a handler, the handler runs, and control returns to nginx.

This article describes when handlers are called
and how to choose the right one.
The exact contract of each directive is documented in
[ngx\_http\_js\_module](http__ngx_http_js_module.md)
and
[ngx\_stream\_js\_module](stream__ngx_stream_js_module.md).

#### Execution model

1. When the configuration is loaded, the
   [js\_import](http__ngx_http_js_module.md#js_import)
   directive compiles the JavaScript modules.
   Syntax errors are reported at this point,
   before nginx starts serving traffic.
2. When a request or a stream session reaches one of the integration
   points, a JavaScript context is created,
   the imported modules are evaluated in it,
   and the configured handlers are called.
3. When the request or session is finished, the context is destroyed or,
   with the [QuickJS](njs__engine.md#quickjs_engine) engine,
   returned to a pool of reusable contexts.
   Nothing survives it except the data explicitly stored
   in a [shared dictionary](njs__reference.md#ngx_shared)
   or sent elsewhere.

The only integration point not driven by a client request is
`js_periodic`, which is driven by an nginx timer.
JavaScript code cannot create an integration point of its own:
it cannot open a listening socket, spawn a thread,
or arrange to be called back outside of the handlers
enabled by the configuration.

#### HTTP integration points

Handlers receive the
[HTTP Request](njs__reference.md#http) object
as the first argument, except for
`js_periodic`, which receives a
[Periodic Session](njs__reference.md#periodic_session)
object.

|  |  |  |
| --- | --- | --- |
| **Directive** | **When it runs** | **Asynchronous operations** |
| [`js_access`](http__ngx_http_js_module.md#js_access) | access phase, before the request is passed further | supported |
| [`js_content`](http__ngx_http_js_module.md#js_content) | content phase, instead of an upstream or a static file | supported |
| [`js_header_filter`](http__ngx_http_js_module.md#js_header_filter) | once, when the response header is ready to be sent | not supported |
| [`js_body_filter`](http__ngx_http_js_module.md#js_body_filter) | for every chunk of the response body | not supported |
| [`js_set`](http__ngx_http_js_module.md#js_set) | when the variable is referenced for the first time, at whatever phase that happens, or on every reference with `nocache` | not supported |
| [`js_periodic`](http__ngx_http_js_module.md#js_periodic) | at a regular interval, without a client request | supported |

Handlers marked as not supporting asynchronous operations
must produce their result before returning:
they cannot wait for a subrequest, a fetch, or a timer.
Such a handler may still be declared `async`
as long as everything it awaits settles immediately.

There is no handler for the rewrite or log phases.
A `js_set` variable referenced from a directive
of the corresponding phase is evaluated at that phase,
which is the usual way to run code at the end of a request.

#### Stream integration points

Handlers receive the
[Stream Session](njs__reference.md#stream) object
as the first argument, except for
`js_periodic`, which receives a
[Periodic Session](njs__reference.md#periodic_session)
object.

|  |  |  |
| --- | --- | --- |
| **Directive** | **When it runs** | **Asynchronous operations** |
| [`js_access`](stream__ngx_stream_js_module.md#js_access) | access phase | in [`s.on()`](njs__reference.md#s_on) callbacks |
| [`js_preread`](stream__ngx_stream_js_module.md#js_preread) | preread phase, before the connection to the upstream is made | in [`s.on()`](njs__reference.md#s_on) callbacks |
| [`js_filter`](stream__ngx_stream_js_module.md#js_filter) | content phase, to register data filters for both directions | not supported |
| [`js_set`](stream__ngx_stream_js_module.md#js_set) | when the variable is referenced for the first time, at whatever phase that happens, or on every reference with `nocache` | not supported |
| [`js_periodic`](stream__ngx_stream_js_module.md#js_periodic) | at a regular interval, without a client session | supported |

The `js_access`, `js_preread`,
and `js_filter` handlers are called once,
and are expected to register
[`s.on()`](njs__reference.md#s_on)
callbacks for the data that arrives later.
The handler itself must return immediately.

#### Choosing an integration point

generate a response instead of proxying it
:   [`js_content`](http__ngx_http_js_module.md#js_content)

allow or deny a request or a connection, possibly after asking an external service
:   [`js_access`](http__ngx_http_js_module.md#js_access)
    for requests,
    [`js_access`](stream__ngx_stream_js_module.md#js_access)
    for connections, or
    [`js_preread`](stream__ngx_stream_js_module.md#js_preread)
    when the decision depends on the data sent by the client

compute a value for another nginx directive
:   [`js_set`](http__ngx_http_js_module.md#js_set)
    binds a handler to a variable,
    which is how a computed value reaches
    `proxy_pass`, `log_format`,
    and other directives that accept variables.
    A handler called earlier can also assign a variable declared with
    [`js_var`](http__ngx_http_js_module.md#js_var)
    through
    [`r.variables`](njs__reference.md#r_variables)

change the response of an upstream server
:   [`js_header_filter`](http__ngx_http_js_module.md#js_header_filter)
    for the header,
    [`js_body_filter`](http__ngx_http_js_module.md#js_body_filter)
    for the body

rewrite the byte stream of a proxied connection
:   [`js_filter`](stream__ngx_stream_js_module.md#js_filter)

refresh a cache, poll an API, or report metrics without a client request
:   [`js_periodic`](http__ngx_http_js_module.md#js_periodic)

Several handlers may be combined for the same request,
for example an access check followed by a body filter.
Each of them is a separate call with its own constraints.

#### State and lifetime

Module top-level code is evaluated for each new JavaScript context,
that is, for each request or stream session that invokes JavaScript.
With the
[QuickJS](njs__engine.md#quickjs_engine) engine,
a context may instead be taken from a pool of reusable contexts,
see
[js\_context\_reuse](http__ngx_http_js_module.md#js_context_reuse),
in which case the modules are not evaluated again
and the changes previously made to the module scope are inherited.

> Module-level variables therefore cannot be used to pass data
> between requests or to cache results:
> depending on the engine and on context reuse,
> such data is either lost or inherited from an unrelated request.
> Expensive initialization in the module scope
> is also paid for on every new context.

nginx runs several worker processes
that do not share memory by default.
The njs mechanism for sharing state across workers is a
[shared dictionary](njs__reference.md#ngx_shared)
specified with the
[js\_shared\_dict\_zone](http__ngx_http_js_module.md#js_shared_dict_zone)
directive.

Asynchronous operations such as
[`ngx.fetch()`](njs__reference.md#ngx_fetch),
[`r.subrequest()`](njs__reference.md#r_subrequest),
and
[`setTimeout()`](njs__reference.md#settimeout)
are driven by the nginx event loop.
There are no threads: a handler that computes for a long time
blocks the whole worker process, and with it every other connection
this worker serves.

#### Using njs outside of nginx

- The [command-line utility](njs__cli.md)
  runs njs without nginx, which is convenient
  for developing and debugging the parts of a script
  that do not depend on the request.
- njs is not Node.js.
  It implements the ECMAScript language,
  a set of [built-in modules](njs__reference.md),
  and the nginx objects,
  but not the Node.js API and not package resolution.
  Libraries can still be used if they are bundled beforehand, see
  [Using node modules with njs](njs__node_modules.md).
- [Native modules](njs__native_modules.md)
  extend njs with code written in C.
  The shared library is loaded when the configuration is parsed,
  and the module it registers is then imported
  like any other module.
