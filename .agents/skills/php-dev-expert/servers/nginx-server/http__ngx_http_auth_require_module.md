# Module ngx_http_auth_require_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_auth_require_module.html

---

## Module ngx\_http\_auth\_require\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [auth\_require](#auth_require) |

The `ngx_http_auth_require_module` module (1.29.0)
implements variable-based client authorization.
It can also use variables
provided by other access modules such as
[ngx\_http\_auth\_request\_module](http__ngx_http_auth_request_module.md)
or
[ngx\_http\_auth\_oidc\_module](http__ngx_http_auth_request_module.md).

> This module is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

#### Example Configuration

> ```
> http {
>     oidc_provider my_idp {
>         ...
>     }
>
>     map $oidc_claim_role $admin_role {
>         "admin" 1;
>     }
>
>     server {
>         auth_oidc my_idp;
>
>         location /admin {
>             auth_require $admin_role;
>         }
>     }
> }
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `auth_require $value ... [error=4xx | 5xx] ;` |
| Default: | ``` auth_require off; ``` |
| Context: | `http`, `server`, `location`, `limit_except` |

Enables authorization based on the specified variables.
The access is allowed only if all the variables are not
empty and are not equal to “0”.
Otherwise, the module returns `403` code, which can be
overridden by the `error` parameter.
Several `auth_require` directives can be used to return
different error codes.
