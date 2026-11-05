# Module ngx_http_oidc_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_oidc_module.html

---

## Module ngx\_http\_oidc\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [oidc\_provider](#oidc_provider)      [auth\_oidc](#auth_oidc)      [issuer](#issuer)      [client\_id](#client_id)      [client\_secret](#client_secret)      [config\_url](#config_url)      [cookie\_name](#cookie_name)      [extra\_auth\_args](#extra_auth_args)      [frontchannel\_logout\_uri](#frontchannel_logout_uri)      [pkce](#pkce)      [redirect\_uri](#redirect_uri)      [logout\_uri](#logout_uri)      [post\_logout\_uri](#post_logout_uri)      [logout\_token\_hint](#logout_token_hint)      [scope](#scope)      [session\_store](#session_store)      [session\_sync\_leeway](#session_sync_leeway)      [session\_timeout](#session_timeout)      [ssl\_crl](#ssl_crl)      [ssl\_trusted\_certificate](#ssl_trusted_certificate)      [userinfo](#userinfo) [Embedded Variables](#variables) |

The `ngx_http_oidc_module` module (1.27.4)
implements authentication as a Relying Party in OpenID Connect using the
[Authorization Code Flow](https://openid.net/specs/openid-connect-core-1_0.html#CodeFlowAuth).

The module expects the OpenID Provider's configuration to be available via
[metadata](https://openid.net/specs/openid-connect-discovery-1_0.html#ProviderConfig) and requires dynamic
[resolver](http__ngx_http_core_module.md#resolver).

The module can be combined with other access modules
via the [satisfy](http__ngx_http_core_module.md#satisfy) directive.
Note that the module may still block requests even with
`satisfy any;`
as an OpenID Provider might not redirect the user back to nginx.

> This module is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

#### Example Configuration

> ```
> http {
>     resolver 10.0.0.1;
>
>     oidc_provider my_idp {
>         issuer        "https://provider.domain";
>         client_id     "unique_id";
>         client_secret "unique_secret";
>     }
>
>     server {
>         location / {
>             auth_oidc my_idp;
>
>             proxy_set_header username $oidc_claim_sub;
>             proxy_pass       http://backend;
>         }
>     }
> }
> ```

The example assumes that the
“`https://<nginx-host>/oidc_callback`”
Redirection URI is configured on the OpenID Provider's side.
The path can be customized with the [redirect\_uri](#redirect_uri) directive.

#### Directives

|  |  |
| --- | --- |
| Syntax: | `oidc_provider name { ... }` |
| Default: | — |
| Context: | `http` |

Defines an OpenID Provider for use with the [auth\_oidc](#auth_oidc) directive.

|  |  |
| --- | --- |
| Syntax: | `auth_oidc name | off;` |
| Default: | ``` auth_oidc off; ``` |
| Context: | `http`, `server`, `location` |

Enables end user authentication with the
[specified](#oidc_provider) OpenID Provider.

Parameter value can contain variables (1.29.0).

The special value `off` cancels the effect
of the `auth_oidc` directive
inherited from the previous configuration level.

|  |  |
| --- | --- |
| Syntax: | `issuer URL;` |
| Default: | — |
| Context: | `oidc_provider` |

Sets the Issuer Identifier URL of the OpenID Provider;
required directive.
The URL must exactly match the value of “`issuer`”
in the OpenID Provider metadata
and requires the “`https`” scheme.

|  |  |
| --- | --- |
| Syntax: | `client_id string;` |
| Default: | — |
| Context: | `oidc_provider` |

Specifies the client ID of the Relying Party;
required directive.

|  |  |
| --- | --- |
| Syntax: | `client_secret string;` |
| Default: | — |
| Context: | `oidc_provider` |

Specifies a secret value
used to authenticate the Relying Party with the OpenID Provider.
The supported
[authentication
methods](https://openid.net/specs/openid-connect-core-1_0.html#ClientAuthentication) are
`client_secret_basic` and
`client_secret_post` (1.29.3).
The method is selected based on the OpenID Provider metadata
with a preference to `client_secret_basic`.

|  |  |
| --- | --- |
| Syntax: | `config_url URL;` |
| Default: | ``` config_url <issuer>/.well-known/openid-configuration; ``` |
| Context: | `oidc_provider` |

Sets a custom URL to retrieve the OpenID Provider metadata.

|  |  |
| --- | --- |
| Syntax: | `cookie_name name;` |
| Default: | ``` cookie_name NGX_OIDC_SESSION; ``` |
| Context: | `oidc_provider` |

Sets the name of a session cookie.

|  |  |
| --- | --- |
| Syntax: | `extra_auth_args string;` |
| Default: | — |
| Context: | `oidc_provider` |

Sets additional query arguments for the
[authentication
request](https://openid.net/specs/openid-connect-core-1_0.html#AuthRequest) URL.

> ```
> extra_auth_args "display=page&prompt=login";
> ```

|  |  |
| --- | --- |
| Syntax: | `frontchannel_logout_uri uri;` |
| Default: | — |
| Context: | `oidc_provider` |

This directive appeared in version 1.29.3.

Defines the URI path for triggering
[front-channel
logout](https://openid.net/specs/openid-connect-frontchannel-1_0.html).
For the logout request to be associated with a user session,
it must either include the module session cookie or provide
both the “`iss`” and “`sid`” arguments.
It is recommended to configure the OpenID Provider to set the
“`iss`” and “`sid`” arguments
when invoking this endpoint.

|  |  |
| --- | --- |
| Syntax: | `pkce on | off;` |
| Default: | — |
| Context: | `oidc_provider` |

This directive appeared in version 1.29.3.

Explicitly enables or disables PKCE.
By default, PKCE is automatically enabled
based on OpenID Provider metadata.

|  |  |
| --- | --- |
| Syntax: | `redirect_uri uri;` |
| Default: | ``` redirect_uri /oidc_callback; ``` |
| Context: | `oidc_provider` |

Defines the Redirection URI path for post-authentication redirects
expected by the module from the OpenID Provider.
The `uri` must match the configuration on the Provider's side.

Absolute “`https`” URIs are supported since 1.29.0.

|  |  |
| --- | --- |
| Syntax: | `logout_uri uri;` |
| Default: | — |
| Context: | `oidc_provider` |

This directive appeared in version 1.29.0.

Defines the URI path for initiating session logout.
Upon session termination, the user is redirected to
[Provider's
Logout Endpoint](https://openid.net/specs/openid-connect-rpinitiated-1_0.html#OPMetadata)
or to the [post logout page](#post_logout_uri).
If neither is configured, the built-in post logout page is displayed.

|  |  |
| --- | --- |
| Syntax: | `post_logout_uri uri;` |
| Default: | — |
| Context: | `oidc_provider` |

This directive appeared in version 1.29.0.

Defines the path or absolute URI
to redirect the user to after the logout.
The `uri` must match the configuration on the Provider's side.
If the post logout page is served by NGINX,
the OIDC module shouldn't be enabled for this location:

> ```
> http {
>     oidc_provider my_idp {
>         ...
>
>         logout_uri      /logout;
>         post_logout_uri /logged_out_page.html;
>     }
>
>     server {
>         auth_oidc my_idp;
>
>         location /logged_out_page.html {
>             auth_oidc off;
>         }
>     }
> }
> ```

|  |  |
| --- | --- |
| Syntax: | `logout_token_hint on | off;` |
| Default: | ``` logout_token_hint off; ``` |
| Context: | `oidc_provider` |

This directive appeared in version 1.29.0.

Adds the
[`id_token_hint`](https://openid.net/specs/openid-connect-rpinitiated-1_0.html#RPLogout)
argument to the
[Provider's
Logout Endpoint](https://openid.net/specs/openid-connect-rpinitiated-1_0.html#OPMetadata)
when redirecting user during logout.
This argument can be required by some OpenID Providers.

|  |  |
| --- | --- |
| Syntax: | `scope scope ...;` |
| Default: | ``` scope openid; ``` |
| Context: | `oidc_provider` |

Sets requested scopes.
The `openid` scope is always required by OIDC.

|  |  |
| --- | --- |
| Syntax: | `session_store name;` |
| Default: | — |
| Context: | `oidc_provider` |

Specifies a custom
[key-value database](http__ngx_http_keyval_module.md#keyval_zone)
that stores session data.
By default, an 8-megabyte key-value database named
`oidc_default_store_<provider name>`
is created automatically.

> A separate key-value database should be configured for each Provider
> to prevent session reuse across providers.

|  |  |
| --- | --- |
| Syntax: | `session_sync_leeway time;` |
| Default: | ``` session_sync_leeway 0; ``` |
| Context: | `oidc_provider` |

This directive appeared in version 1.31.6.

Sets the maximum wait time for a session to appear in the
[key-value zone](#session_store)
if a request contains a session cookie
but the corresponding session is not found.
This allows for session
[synchronization](stream__ngx_stream_zone_sync_module.md)
delays between cluster nodes.

The value must be in the range from `0` to
`5s`.
The default value of `0` disables waiting.
It is recommended to set the smallest possible value.

|  |  |
| --- | --- |
| Syntax: | `session_timeout time;` |
| Default: | ``` session_timeout 8h; ``` |
| Context: | `oidc_provider` |

Sets a timeout after which the session is deleted, unless it was
[refreshed](https://openid.net/specs/openid-connect-core-1_0.html#RefreshTokens).

|  |  |
| --- | --- |
| Syntax: | `ssl_crl file;` |
| Default: | — |
| Context: | `oidc_provider` |

Specifies a `file` with revoked certificates (CRL)
in the PEM format used to verify
the certificates of the OpenID Provider endpoints.
When using intermediate certificates, their CRLs should be
specified in the same file.

|  |  |
| --- | --- |
| Syntax: | `ssl_trusted_certificate file;` |
| Default: | ``` ssl_trusted_certificate system CA bundle; ``` |
| Context: | `oidc_provider` |

Specifies a `file` with trusted CA certificates in the PEM format
used to verify
the certificates of the OpenID Provider endpoints.

|  |  |
| --- | --- |
| Syntax: | `userinfo on | off;` |
| Default: | ``` userinfo off; ``` |
| Context: | `oidc_provider` |

This directive appeared in version 1.29.0.

Enables downloading of the
[UserInfo](https://openid.net/specs/openid-connect-core-1_0.html#UserInfo)
data and makes UserInfo claims available via the
[$oidc\_claim\_`name`](#var_oidc_claim_) variables.

#### Embedded Variables

The `ngx_http_oidc_module` module supports embedded variables:

`$oidc_id_token`
:   ID token

`$oidc_access_token`
:   access token

`$oidc_claim_``name`
:   top-level ID token or UserInfo claim

    Nested claims can be fetched with the
    [auth\_jwt](http__ngx_http_auth_jwt_module.md) module:

    > ```
    > http {
    >     auth_jwt_claim_set $postal_code address postal_code;
    >
    >     server {
    >         location / {
    >             auth_oidc my_idp;
    >             auth_jwt  off token=$oidc_id_token;
    >
    >             proxy_set_header x-postal_code $postal_code;
    >             proxy_pass       http://backend;
    >         }
    >     }
    > }
    > ```

`$oidc_userinfo`
:   UserInfo data in the JSON format (1.29.0)
