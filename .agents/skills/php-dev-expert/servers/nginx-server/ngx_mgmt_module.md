# Module ngx_mgmt_module

> **Fonte / Source:** https://nginx.org/en/docs/ngx_mgmt_module.html

---

## Module ngx\_mgmt\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [mgmt](#mgmt)      [enforce\_initial\_report](#enforce_initial_report)      [license\_token](#license_token)      [license\_pending\_token](#license_pending_token)      [proxy](#proxy)      [proxy\_username](#proxy_username)      [proxy\_password](#proxy_password)      [resolver](#resolver)      [ssl\_crl](#ssl_crl)      [ssl\_trusted\_certificate](#ssl_trusted_certificate)      [ssl\_verify](#ssl_verify)      [state\_path](#state_path)      [usage\_report](#usage_report) |

The `ngx_mgmt_module` module enables
NGINX Plus license verification and usage reporting.
This is mandatory for each NGINX Plus instance since 1.27.2 (
[NGINX Plus R33](https://docs.nginx.com/nginx/releases/#r33)).

A JWT license file named `license.jwt`
should be located at
`/etc/nginx/` for Linux or
`/usr/local/etc/nginx/` for FreeBSD
or at the path specified by the [license\_token](#license_token) directive.
The license file is available from
[MyF5](https://my.f5.com).

Usage report is sent directly or via [proxy](#proxy)
to F5 licensing endpoint
[every hour](#usage_report) using the
[secure](#ssl_verify) connection.
Optionally, in network-restricted environments
reporting can be [configured](#usage_report) to
[F5 NGINX
Instance Manager](https://docs.nginx.com/nginx-management-suite/about/) from which the report can be sent
to F5 licensing endpoint.

By default, if the [initial usage report](#enforce_initial_report)
is not received by F5 licensing endpoint, nginx will stop processing traffic.

Automatic license renewal is supported since 1.29.0
([NGINX Plus R35](https://docs.nginx.com/nginx/releases/#r35))
for instances that report directly to the F5 licensing endpoint.
On renewal, NGINX downloads the updated JWT from F5 licensing endpoint
and applies it without
configuration [reload](switches.md).
The updated license is stored
in the [state\_path](#state_path) directory.

> This module is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

#### Example Configuration

> ```
> mgmt {
>     # in case if custom path is required
>     license_token custom/file/path/license.jwt;
>
>     # in case of reporting to NGINX Instance Manager
>     usage_report endpoint=NIM_FQDN;
> }
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `mgmt { ... }` |
| Default: | — |
| Context: | `main` |

Provides the configuration file context in which
usage reporting and license management directives
are specified.

|  |  |
| --- | --- |
| Syntax: | `enforce_initial_report on | off;` |
| Default: | ``` enforce_initial_report on; ``` |
| Context: | `mgmt` |

This directive appeared in version 1.27.2.

Enables or disables the 180-day grace period
for sending the initial usage report.

The initial usage report is sent immediately
upon nginx first start after installation.
By default, if the initial report is not received by F5 licensing endpoint,
nginx stops processing traffic until the report is successfully delivered.
Setting the directive value to `off` enables
the 180-day grace period during which
the initial usage report must be received by F5 licensing endpoint.

|  |  |
| --- | --- |
| Syntax: | `license_token file;` |
| Default: | ``` license_token license.jwt; ``` |
| Context: | `mgmt` |

This directive appeared in version 1.27.2.

Specifies a JWT license `file`.
By default, the `license.jwt` file is expected to be at
`/etc/nginx/` for Linux or at
`/usr/local/etc/nginx/` for FreeBSD.

|  |  |
| --- | --- |
| Syntax: | `license_pending_token file | off;` |
| Default: | — |
| Context: | `mgmt` |

This directive appeared in version 1.31.3.

Controls how a renewed JWT license token is handled
after it is received from the F5 licensing endpoint.
By default, the renewed token is saved and applied immediately.

When set to a `file` path,
the renewed token is saved to the specified file but not applied.
The path is relative to
[`state_path`](#state_path).
The token can be copied to the active license token file or applied using the
`PUT` method of the
`/api/10/license` API endpoint.

When set to `off`,
the renewal event is logged but the token is discarded.
In this case, JWT license renewal is managed entirely through the
`PUT` method of the
`/api/10/license` API endpoint.

|  |  |
| --- | --- |
| Syntax: | `proxy host:port;` |
| Default: | — |
| Context: | `mgmt` |

This directive appeared in version 1.27.4.

Sets the HTTP CONNECT proxy
used for sending the usage report.

|  |  |
| --- | --- |
| Syntax: | `proxy_username string;` |
| Default: | — |
| Context: | `mgmt` |

This directive appeared in version 1.27.4.

Sets the user name used for authentication on
the [proxy](#proxy).

|  |  |
| --- | --- |
| Syntax: | `proxy_password string;` |
| Default: | — |
| Context: | `mgmt` |

This directive appeared in version 1.27.4.

Sets the password used for authentication on
the [proxy](#proxy).

The password is sent unencrypted by default.
If the proxy supports TLS, the connection to the proxy can be
protected with the [stream](stream__ngx_stream_proxy_module.md)
module:

> ```
> mgmt {
>     proxy          127.0.0.1:8080;
>     proxy_username <name>;
>     proxy_password <password>;
> }
>
> stream {
>     server {
>         listen 127.0.0.1:8080;
>         
>         proxy_ssl                     on;
>         proxy_ssl_verify              on;
>         proxy_ssl_trusted_certificate <proxy_ca_file>;
>
>         proxy_pass <proxy_host>:<proxy_port>;
>     }
> }
> ```

|  |  |
| --- | --- |
| Syntax: | `resolver address ... [valid=time] [ipv4=on|off] [ipv6=on|off] [status_zone=zone];` |
| Default: | — |
| Context: | `mgmt` |

Configures name servers used to resolve usage reporting endpoint name.
By default, the system resolver is used.

See [resolver](http__ngx_http_core_module.md#resolver) for details.

|  |  |
| --- | --- |
| Syntax: | `ssl_crl file;` |
| Default: | — |
| Context: | `mgmt` |

Specifies a `file` with revoked certificates (CRL)
in the PEM format used to [verify](#ssl_verify)
the certificate of the usage reporting endpoint.
When using intermediate certificates, their CRLs should be
specified in the same file.

|  |  |
| --- | --- |
| Syntax: | `ssl_trusted_certificate file;` |
| Default: | ``` ssl_trusted_certificate system CA bundle; ``` |
| Context: | `mgmt` |

Specifies a `file` with trusted CA certificates in the PEM format
used to [verify](#ssl_verify)
the certificate of the usage reporting endpoint.

|  |  |
| --- | --- |
| Syntax: | `ssl_verify on | off;` |
| Default: | ``` ssl_verify on; ``` |
| Context: | `mgmt` |

Enables or disables verification of the usage reporting endpoint certificate.

> Before 1.27.2, the default value was `off`.

|  |  |
| --- | --- |
| Syntax: | `state_path path;` |
| Default: | — |
| Context: | `mgmt` |

This directive appeared in version 1.27.2.

Defines a directory for storing state files
(`nginx-mgmt-*`)
created by the `ngx_mgmt_module` module.
The default directory
for Linux is `/var/lib/nginx/state`,
for FreeBSD is `/var/db/nginx/state`.

|  |  |
| --- | --- |
| Syntax: | `usage_report [endpoint=address] [interval=time];` |
| Default: | ``` usage_report endpoint=product.connect.nginx.com interval=1h; ``` |
| Context: | `mgmt` |

Sets the `address` and `port`
of the usage reporting endpoint.
The `interval` parameter sets an interval between
two consecutive reports.

> Before 1.27.2, the default values were
> `nginx-mgmt.local` and
> `30m`.
