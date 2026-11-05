# Module ngx_stream_pass_module

> **Fonte / Source:** https://nginx.org/en/docs/stream/ngx_stream_pass_module.html

---

## Module ngx\_stream\_pass\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [pass](#pass) |

The `ngx_stream_pass_module` module (1.25.5) allows
passing the accepted connection directly to any configured listening socket
in `http`, `stream`, `mail`,
and other similar modules.

#### Example Configuration

> ```
> http {
>     server {
>         listen 8000;
>
>         location / {
>             root html;
>         }
>     }
> }
>
> stream {
>     server {
>         listen 12345 ssl;
>
>         ssl_certificate     domain.crt;
>         ssl_certificate_key domain.key;
>
>         pass 127.0.0.1:8000;
>     }
> }
> ```

In the example,
after terminating SSL/TLS in the `stream` module
the connection is passed to the `http` module.

#### Directives

|  |  |
| --- | --- |
| Syntax: | `pass address;` |
| Default: | — |
| Context: | `server` |

Sets server address to pass client connection to.
The address can be specified as an IP address
and a port:

> ```
> pass 127.0.0.1:12345;
> ```

or as a UNIX-domain socket path:

> ```
> pass unix:/tmp/stream.socket;
> ```

The address can also be specified using variables:

> ```
> pass $upstream;
> ```

> If the [PROXY
> protocol](stream__ngx_stream_core_module.md#proxy_protocol) is used,
> the header is read before the connection is passed,
> so the `proxy_protocol` parameter
> should be specified on the listening socket
> of the original server:
> > ```
> > server {
> >     listen 12345 proxy_protocol;
> >
> >     set_real_ip_from 192.168.1.0/24;
> >
> >     pass 127.0.0.1:8000;
> > }
> > ```
