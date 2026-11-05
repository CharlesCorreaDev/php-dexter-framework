# How nginx processes a TCP/UDP session

> **Fonte / Source:** https://nginx.org/en/docs/stream/stream_processing.html

---

## How nginx processes a TCP/UDP session

A TCP/UDP session from a client is processed
in successive steps called **phases**:

`Post-accept`
:   The first phase after accepting a client connection.
    The [ngx\_stream\_realip\_module](stream__ngx_stream_realip_module.md)
    module is invoked at this phase.

`Pre-access`
:   Preliminary check for access.
    The
    [ngx\_stream\_limit\_conn\_module](stream__ngx_stream_limit_conn_module.md)
    and
    [ngx\_stream\_set\_module](stream__ngx_stream_set_module.md)
    modules are invoked at this phase.

`Access`
:   Client access limitation before actual data processing.
    At this phase,
    the [ngx\_stream\_access\_module](stream__ngx_stream_access_module.md)
    module is invoked,
    for [njs](njs__index.md),
    the [js\_access](stream__ngx_stream_js_module.md#js_access) directive
    is invoked.

`SSL`
:   TLS/SSL termination.
    The [ngx\_stream\_ssl\_module](stream__ngx_stream_ssl_module.md)
    module is invoked at this phase.

`Preread`
:   Reading initial bytes of data into the
    [preread buffer](stream__ngx_stream_core_module.md#preread_buffer_size)
    to allow modules such as
    [ngx\_stream\_ssl\_preread\_module](stream__ngx_stream_ssl_preread_module.md)
    analyze the data before its processing.
    For [njs](njs__index.md),
    the [js\_preread](stream__ngx_stream_js_module.md#js_preread) directive
    is invoked at this phase.

`Content`
:   Mandatory phase where data is actually processed, usually
    [proxied](stream__ngx_stream_proxy_module.md) to
    [upstream](stream__ngx_stream_upstream_module.md) servers,
    or a specified value
    is [returned](stream__ngx_stream_return_module.md) to a client.
    For [njs](njs__index.md),
    the [js\_filter](stream__ngx_stream_js_module.md#js_filter) directive
    is invoked at this phase.

`Log`
:   The final phase
    where the result of a client session processing is recorded.
    The [ngx\_stream\_log\_module](stream__ngx_stream_log_module.md)
    module is invoked at this phase.
