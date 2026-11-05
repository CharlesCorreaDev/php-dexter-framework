# Module ngx_http_access_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_access_module.html

---

## Module ngx\_http\_access\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [allow](#allow)      [deny](#deny) |

The `ngx_http_access_module` module allows
limiting access to certain client addresses.

Access can also be limited by
[password](http__ngx_http_auth_basic_module.md), by the
[result of subrequest](http__ngx_http_auth_request_module.md),
or by [JWT](http__ngx_http_auth_jwt_module.md).
Simultaneous limitation of access by address and by password is controlled
by the [satisfy](http__ngx_http_core_module.md#satisfy) directive.

#### Example Configuration

> ```
> location / {
>     deny  192.168.1.1;
>     allow 192.168.1.0/24;
>     allow 10.1.1.0/16;
>     allow 2001:0db8::/32;
>     deny  all;
> }
> ```

The rules are checked in sequence until the first match is found.
In this example, access is allowed only for IPv4 networks
`10.1.1.0/16` and `192.168.1.0/24`
excluding the address `192.168.1.1`,
and for IPv6 network `2001:0db8::/32`.
In case of a lot of rules, the use of the
[ngx\_http\_geo\_module](http__ngx_http_geo_module.md)
module variables is preferable.

#### Directives

|  |  |
| --- | --- |
| Syntax: | `allow address | CIDR | unix: | all;` |
| Default: | — |
| Context: | `http`, `server`, `location`, `limit_except` |

Allows access for the specified network or address.
If the special value `unix:` is specified (1.5.1),
allows access for all UNIX-domain sockets.

Several `allow` directives can be specified on the same level.
These directives are inherited from the previous configuration level
if and only if there are no `allow` and
`deny` directives defined on the current level.

|  |  |
| --- | --- |
| Syntax: | `deny address | CIDR | unix: | all;` |
| Default: | — |
| Context: | `http`, `server`, `location`, `limit_except` |

Denies access for the specified network or address.
If the special value `unix:` is specified (1.5.1),
denies access for all UNIX-domain sockets.

Several `deny` directives can be specified on the same level.
These directives are inherited from the previous configuration level
if and only if there are no `allow` and
`deny` directives defined on the current level.
