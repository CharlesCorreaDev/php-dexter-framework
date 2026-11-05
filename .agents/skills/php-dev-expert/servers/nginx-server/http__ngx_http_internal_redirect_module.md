# Module ngx_http_internal_redirect_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_internal_redirect_module.html

---

## Module ngx\_http\_internal\_redirect\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [internal\_redirect](#internal_redirect) |

The `ngx_http_internal_redirect_module` module (1.23.4) allows
making an internal redirect.
In contrast to
[rewriting URIs](http__ngx_http_rewrite_module.md),
the redirection is made after checking
[request](http__ngx_http_limit_req_module.md) and
[connection](http__ngx_http_limit_conn_module.md) processing limits,
and [access](http__ngx_http_access_module.md) limits.

> This module is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

#### Example Configuration

> ```
> limit_req_zone $jwt_claim_sub zone=jwt_sub:10m rate=1r/s;
>
> server {
>     location / {
>         auth_jwt          "realm";
>         auth_jwt_key_file key.jwk;
>
>         internal_redirect @rate_limited;
>     }
>
>     location @rate_limited {
>         internal;
>
>         limit_req  zone=jwt_sub burst=10;
>         proxy_pass http://backend;
>     }
> }
> ```

The example implements
[per-user](https://datatracker.ietf.org/doc/html/rfc7519#section-4.1.2)
[rate limiting](http__ngx_http_limit_req_module.md).
Implementation without [internal\_redirect](#internal_redirect)
is vulnerable to DoS attacks by unsigned JWTs, as normally the
[limit\_req](http__ngx_http_limit_req_module.md#limit_req)
check is performed
[before](dev__development_guide.md#http_phases)
[auth\_jwt](http__ngx_http_auth_jwt_module.md#auth_jwt) check.
Using [internal\_redirect](#internal_redirect)
allows reordering these checks.

#### Directives

|  |  |
| --- | --- |
| Syntax: | `internal_redirect uri;` |
| Default: | — |
| Context: | `server`, `location` |

Sets the URI for internal redirection of the request.
It is also possible to use a
[named location](http__ngx_http_core_module.md#location_named)
instead of the URI.
The `uri` value can contain variables.
If the `uri` value is empty,
then the redirect will not be made.
