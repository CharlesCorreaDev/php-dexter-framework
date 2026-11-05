# Module ngx_http_status_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_status_module.html

---

## Module ngx\_http\_status\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [status](#status)      [status\_format](#status_format)      [status\_zone](#status_zone) [Data](#data) [Compatibility](#compatibility) |

The `ngx_http_status_module` module provides
access to various status information.

> This module was available as part of our
> [commercial subscription](https://www.f5.com/products/nginx)
> until 1.13.10.
> It was superseded by the
> [ngx\_http\_api\_module](http__ngx_http_api_module.md) module
> in 1.13.3.

#### Example Configuration

> ```
> http {
>     upstream backend {
>         zone http_backend 64k;
>
>         server backend1.example.com weight=5;
>         server backend2.example.com;
>     }
>
>     proxy_cache_path /data/nginx/cache_backend keys_zone=cache_backend:10m;
>
>     server {
>         server_name backend.example.com;
>
>         location / {
>             proxy_pass  http://backend;
>             proxy_cache cache_backend;
>
>             health_check;
>         }
>
>         status_zone server_backend;
>     }
>
>     server {
>         listen 127.0.0.1;
>
>         location /upstream_conf {
>             upstream_conf;
>         }
>
>         location /status {
>             status;
>         }
>
>         location = /status.html {
>         }
>     }
> }
>
> stream {
>     upstream backend {
>         zone stream_backend 64k;
>
>         server backend1.example.com:12345 weight=5;
>         server backend2.example.com:12345;
>     }
>
>     server {
>         listen      127.0.0.1:12345;
>         proxy_pass  backend;
>         status_zone server_backend;
>         health_check;
>     }
> }
> ```

Examples of status requests with this configuration:

> ```
> http://127.0.0.1/status
> http://127.0.0.1/status/nginx_version
> http://127.0.0.1/status/caches/cache_backend
> http://127.0.0.1/status/upstreams
> http://127.0.0.1/status/upstreams/backend
> http://127.0.0.1/status/upstreams/backend/peers/1
> http://127.0.0.1/status/upstreams/backend/peers/1/weight
> http://127.0.0.1/status/stream
> http://127.0.0.1/status/stream/upstreams
> http://127.0.0.1/status/stream/upstreams/backend
> http://127.0.0.1/status/stream/upstreams/backend/peers/1
> http://127.0.0.1/status/stream/upstreams/backend/peers/1/weight
> ```

The simple monitoring page is shipped with this distribution,
accessible as “`/status.html`” in the default configuration.
It requires the locations “`/status`” and
“`/status.html`” to be configured as shown above.

#### Directives

|  |  |
| --- | --- |
| Syntax: | `status;` |
| Default: | — |
| Context: | `location` |

The status information will be accessible from the surrounding location.
Access to this location should be
[limited](http__ngx_http_core_module.md#satisfy).

|  |  |
| --- | --- |
| Syntax: | `status_format json;` `status_format jsonp [callback];` |
| Default: | ``` status_format json; ``` |
| Context: | `http`, `server`, `location` |

By default, status information is output in the JSON format.

Alternatively, data may be output as JSONP.
The `callback` parameter specifies the name of a callback function.
Parameter value can contain variables.
If parameter is omitted, or the computed value is an empty string,
then “`ngx_status_jsonp_callback`” is used.

|  |  |
| --- | --- |
| Syntax: | `status_zone zone;` |
| Default: | — |
| Context: | `server` |

Enables collection of virtual
[http](http__ngx_http_core_module.md#server)
or
[stream](stream__ngx_stream_core_module.md#server)
(1.7.11) server status information in the specified `zone`.
Several servers may share the same zone.

#### Data

The following status information is provided:

`version`
:   Version of the provided data set.
    The current version is 8.

`nginx_version`
:   Version of nginx.

`nginx_build`
:   Name of nginx build.

`address`
:   The address of the server that accepted status request.

`generation`
:   The total number of configuration
    [reloads](control.md#reconfiguration).

`load_timestamp`
:   Time of the last reload of configuration, in milliseconds since Epoch.

`timestamp`
:   Current time in milliseconds since Epoch.

`pid`
:   The ID of the worker process that handled status request.

`ppid`
:   The ID of the master process that started
    the [worker process](#pid).

`processes`
:   `respawned`
    :   The total number of abnormally terminated and respawned
        child processes.

`connections`
:   `accepted`
    :   The total number of accepted client connections.

    `dropped`
    :   The total number of dropped client connections.

    `active`
    :   The current number of active client connections.

    `idle`
    :   The current number of idle client connections.

`ssl`
:   `handshakes`
    :   The total number of successful SSL handshakes.

    `handshakes_failed`
    :   The total number of failed SSL handshakes.

    `session_reuses`
    :   The total number of session reuses during SSL handshake.

`requests`
:   `total`
    :   The total number of client requests.

    `current`
    :   The current number of client requests.

`server_zones`
:   For each [status\_zone](#status_zone):

    `processing`
    :   The number of
        client requests that are currently being processed.

    `requests`
    :   The total number of
        client requests received from clients.

    `responses`
    :   `total`
        :   The total number of
            responses sent to clients.

        `1xx`, `2xx`, `3xx`, `4xx`, `5xx`
        :   The number of responses with status codes 1xx, 2xx, 3xx, 4xx, and 5xx.

    `discarded`
    :   The total number of requests completed without sending a response.

    `received`
    :   The total number of bytes received from clients.

    `sent`
    :   The total number of bytes sent to clients.

`slabs`
:   For each shared memory zone that uses slab allocator:

    `pages`
    :   `used`
        :   The current number of used memory pages.

        `free`
        :   The current number of free memory pages.

    `slots`
    :   For each memory slot size (8, 16, 32, 64, 128, etc.)
        the following data are provided:

        `used`
        :   The current number of used memory slots.

        `free`
        :   The current number of free memory slots.

        `reqs`
        :   The total number of attempts to allocate memory of specified size.

        `fails`
        :   The number of unsuccessful attempts to allocate memory of specified size.

`upstreams`
:   For each
    [dynamically
    configurable](http__ngx_http_upstream_module.md#zone)
    [group](http__ngx_http_upstream_module.md#upstream),
    the following data are provided:

    `peers`
    :   For each
        [server](http__ngx_http_upstream_module.md#server),
        the following data are provided:

        `id`
        :   The ID of the server.

        `server`
        :   An
            [address](http__ngx_http_upstream_module.md#server)
            of the server.

        `name`
        :   The name of the server specified in the
            [server](http__ngx_http_upstream_module.md#server)
            directive.

        `service`
        :   The [service](http__ngx_http_upstream_module.md#service)
            parameter value of the
            [server](http__ngx_http_upstream_module.md#server) directive.

        `backup`
        :   A boolean value indicating whether the server is a
            [backup](http__ngx_http_upstream_module.md#backup)
            server.

        `weight`
        :   [Weight](http__ngx_http_upstream_module.md#weight)
            of the server.

        `state`
        :   Current state, which may be one of
            “`up`”,
            “`draining`”,
            “`down`”,
            “`unavail`”,
            “`checking`”,
            or
            “`unhealthy`”.

        `active`
        :   The current number of active connections.

        `max_conns`
        :   The [max\_conns](http__ngx_http_upstream_module.md#max_conns) limit
            for the server.

        `requests`
        :   The total number of
            client requests forwarded to this server.

        `responses`
        :   `total`
            :   The total number of
                responses obtained from this server.

            `1xx`, `2xx`, `3xx`, `4xx`, `5xx`
            :   The number of responses with status codes 1xx, 2xx, 3xx, 4xx, and 5xx.

        `sent`
        :   The total number of bytes sent to this server.

        `received`
        :   The total number of bytes received from this server.

        `fails`
        :   The total number of
            unsuccessful attempts to communicate with the server.

        `unavail`
        :   How many times
            the server became unavailable for client requests
            (state “`unavail`”)
            due to the number of unsuccessful attempts reaching the
            [max\_fails](http__ngx_http_upstream_module.md#max_fails)
            threshold.

        `health_checks`
        :   `checks`
            :   The total number of
                [health check](http__ngx_http_upstream_hc_module.md#health_check)
                requests made.

            `fails`
            :   The number of failed health checks.

            `unhealthy`
            :   How many times
                the server became unhealthy (state “`unhealthy`”).

            `last_passed`
            :   Boolean indicating
                if the last health check request was successful and passed
                [tests](http__ngx_http_upstream_hc_module.md#match).

        `downtime`
        :   Total time
            the server was in the “`unavail`”,
            “`checking`”, and “`unhealthy`” states.

        `downstart`
        :   The time (in milliseconds since Epoch)
            when the server became
            “`unavail`”,
            “`checking`”, or “`unhealthy`”.

        `selected`
        :   The time (in milliseconds since Epoch)
            when the server was last selected to process a request (1.7.5).

        `header_time`
        :   The average time to get the
            [response
            header](http__ngx_http_upstream_module.md#var_upstream_header_time) from the server (1.7.10).
            Prior to version 1.11.6,
            the field was available only when using the
            [least\_time](http__ngx_http_upstream_module.md#least_time)
            load balancing method.

        `response_time`
        :   The average time to get the
            [full
            response](http__ngx_http_upstream_module.md#var_upstream_response_time) from the server (1.7.10).
            Prior to version 1.11.6,
            the field was available only when using the
            [least\_time](http__ngx_http_upstream_module.md#least_time)
            load balancing method.

    `keepalive`
    :   The current number of
        idle [keepalive](http__ngx_http_upstream_module.md#keepalive) connections.

    `zombies`
    :   The current number of servers removed
        from the group but still processing active client requests.

    `zone`
    :   The name of the shared memory
        [zone](http__ngx_http_upstream_module.md#zone)
        that keeps the group’s configuration and run-time state.

    `queue`
    :   For the requests [queue](http__ngx_http_upstream_module.md#queue),
        the following data are provided:

        `size`
        :   The current number of requests in the queue.

        `max_size`
        :   The maximum number of requests that can be in the queue at the same time.

        `overflows`
        :   The total number of requests rejected due to the queue overflow.

`caches`
:   For each cache (configured by
    [proxy\_cache\_path](http__ngx_http_proxy_module.md#proxy_cache_path) and the likes):

    `size`
    :   The current size of the cache.

    `max_size`
    :   The limit on the maximum size of the cache specified in the configuration.

    `cold`
    :   A boolean value indicating whether the “cache loader” process is still loading
        data from disk into the cache.

    `hit`, `stale`, `updating`, `revalidated`
    :   `responses`
        :   The total number of responses read from the cache (hits, or stale responses
            due to [proxy\_cache\_use\_stale](http__ngx_http_proxy_module.md#proxy_cache_use_stale)
            and the likes).

        `bytes`
        :   The total number of bytes read from the cache.

    `miss`, `expired`, `bypass`
    :   `responses`
        :   The total number of responses not taken from the cache (misses, expires, or
            bypasses due to
            [proxy\_cache\_bypass](http__ngx_http_proxy_module.md#proxy_cache_bypass)
            and the likes).

        `bytes`
        :   The total number of bytes read from the proxied server.

        `responses_written`
        :   The total number of responses written to the cache.

        `bytes_written`
        :   The total number of bytes written to the cache.

`stream`
:   `server_zones`
    :   For each [status\_zone](#status_zone):

        `processing`
        :   The number of
            client connections that are currently being processed.

        `connections`
        :   The total number of
            connections accepted from clients.

        `sessions`
        :   `total`
            :   The total number of completed client sessions.

            `2xx`, `4xx`, `5xx`
            :   The number of sessions completed with
                [status codes](stream__ngx_stream_core_module.md#var_status)
                2xx, 4xx, or 5xx.

        `discarded`
        :   The total number of connections completed without creating a session.

        `received`
        :   The total number of bytes received from clients.

        `sent`
        :   The total number of bytes sent to clients.

    `upstreams`
    :   For each
        [dynamically
        configurable](stream__ngx_stream_upstream_module.md#zone)
        [group](stream__ngx_stream_upstream_module.md#upstream),
        the following data are provided:

        `peers`
        :   For each
            [server](stream__ngx_stream_upstream_module.md#server)
            the following data are provided:

            `id`
            :   The ID of the server.

            `server`
            :   An
                [address](stream__ngx_stream_upstream_module.md#server)
                of the server.

            `name`
            :   The name of the server specified in the
                [server](stream__ngx_stream_upstream_module.md#server) directive.

            `service`
            :   The [service](stream__ngx_stream_upstream_module.md#service)
                parameter value of the
                [server](stream__ngx_stream_upstream_module.md#server) directive.

            `backup`
            :   A boolean value indicating whether the server is a
                [backup](stream__ngx_stream_upstream_module.md#backup)
                server.

            `weight`
            :   [Weight](stream__ngx_stream_upstream_module.md#weight)
                of the server.

            `state`
            :   Current state, which may be one of
                “`up`”,
                “`down`”,
                “`unavail`”,
                “`checking`”,
                or
                “`unhealthy`”.

            `active`
            :   The current number of connections.

            `max_conns`
            :   The [max\_conns](stream__ngx_stream_upstream_module.md#max_conns) limit
                for the server.

            `connections`
            :   The total number of
                client connections forwarded to this server.

            `connect_time`
            :   The average time to connect to the upstream server.
                Prior to version 1.11.6,
                the field was available only when using the
                [least\_time](stream__ngx_stream_upstream_module.md#least_time)
                load balancing method.

            `first_byte_time`
            :   The average time to receive the first byte of data.
                Prior to version 1.11.6,
                the field was available only when using the
                [least\_time](stream__ngx_stream_upstream_module.md#least_time)
                load balancing method.

            `response_time`
            :   The average time to receive the last byte of data.
                Prior to version 1.11.6,
                the field was available only when using the
                [least\_time](stream__ngx_stream_upstream_module.md#least_time)
                load balancing method.

            `sent`
            :   The total number of bytes sent to this server.

            `received`
            :   The total number of bytes received from this server.

            `fails`
            :   The total number of
                unsuccessful attempts to communicate with the server.

            `unavail`
            :   How many times
                the server became unavailable for client connections
                (state “`unavail`”)
                due to the number of unsuccessful attempts reaching the
                [max\_fails](stream__ngx_stream_upstream_module.md#max_fails)
                threshold.

            `health_checks`
            :   `checks`
                :   The total number of
                    [health check](stream__ngx_stream_upstream_hc_module.md#health_check)
                    requests made.

                `fails`
                :   The number of failed health checks.

                `unhealthy`
                :   How many times
                    the server became unhealthy (state “`unhealthy`”).

                `last_passed`
                :   Boolean indicating
                    if the last health check request was successful and passed
                    [tests](stream__ngx_stream_upstream_hc_module.md#match).

            `downtime`
            :   Total time
                the server was in the “`unavail`”,
                “`checking`”, and “`unhealthy`” states.

            `downstart`
            :   The time (in milliseconds since Epoch)
                when the server became
                “`unavail`”,
                “`checking`”, or “`unhealthy`”.

            `selected`
            :   The time (in milliseconds since Epoch)
                when the server was last selected to process a connection.

        `zombies`
        :   The current number of servers removed
            from the group but still processing active client connections.

        `zone`
        :   The name of the shared memory
            [zone](stream__ngx_stream_upstream_module.md#zone)
            that keeps the group’s configuration and run-time state.

#### Compatibility

- The
  [zone](#zone) field in
  [http](#upstreams) and [stream](#stream_upstreams)
  upstreams
  was added in [version](#version) 8.
- The [slabs](#slabs) status data
  were added in [version](#version) 8.
- The
  [checking](#state) state
  was added in [version](#version) 8.
- The
  [name](#name) and [service](#service) fields in
  [http](#upstreams) and [stream](#stream_upstreams)
  upstreams
  were added in [version](#version) 8.
- The
  [nginx\_build](#nginx_build) and [ppid](#ppid) fields
  were added in [version](#version) 8.
- The
  [sessions](#sessions) status data
  and the [discarded](#stream_discarded) field in
  stream [server\_zones](#stream_server_zones)
  were added in [version](#version) 7.
- The [zombies](#zombies) field
  was moved from nginx [debug](debugging_log.md) version
  in [version](#version) 6.
- The [ssl](#ssl) status data
  were added in [version](#version) 6.
- The
  [discarded](#discarded) field in
  [server\_zones](#server_zones)
  was added in [version](#version) 6.
- The [queue](#queue) status data
  were added in [version](#version) 6.
- The
  [pid](#pid) field
  was added in [version](#version) 6.
- The list of servers in [upstreams](#upstreams)
  was moved into [peers](#peers) in
  [version](#version) 6.
- The `keepalive` field of an upstream server
  was removed in [version](#version) 5.
- The [stream](#stream) status data
  were added in [version](#version) 5.
- The
  [generation](#generation) field
  was added in [version](#version) 5.
- The
  [respawned](#respawned) field in
  [processes](#processes)
  was added in [version](#version) 5.
- The
  [header\_time](#header_time) and [response\_time](#response_time) fields in
  [upstreams](#upstreams)
  were added in [version](#version) 5.
- The
  [selected](#selected) field in
  [upstreams](#upstreams)
  was added in [version](#version) 4.
- The [draining](#state) state in
  [upstreams](#upstreams)
  was added in [version](#version) 4.
- The
  [id](#id) and [max\_conns](#max_conns) fields in
  [upstreams](#upstreams)
  were added in [version](#version) 3.
- The `revalidated` field in
  [caches](#caches)
  was added in [version](#version) 3.
- The [server\_zones](#server_zones), [caches](#caches),
  and [load\_timestamp](#load_timestamp) status data
  were added in [version](#version) 2.
