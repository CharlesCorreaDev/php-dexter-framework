# Module ngx_http_gzip_static_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_gzip_static_module.html

---

## Module ngx\_http\_gzip\_static\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [gzip\_static](#gzip_static) |

The `ngx_http_gzip_static_module` module allows
sending precompressed files with the “`.gz`”
filename extension instead of regular files.

This module is not built by default, it should be enabled with the
`--with-http_gzip_static_module`
configuration parameter.

#### Example Configuration

> ```
> gzip_static  on;
> gzip_proxied expired no-cache no-store private auth;
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `gzip_static on | off | always;` |
| Default: | ``` gzip_static off; ``` |
| Context: | `http`, `server`, `location` |

Enables (“`on`”) or disables (“`off`”)
checking the existence of precompressed files.
The following directives are also taken into account:
[gzip\_http\_version](http__ngx_http_gzip_module.md#gzip_http_version),
[gzip\_proxied](http__ngx_http_gzip_module.md#gzip_proxied),
[gzip\_disable](http__ngx_http_gzip_module.md#gzip_disable),
and [gzip\_vary](http__ngx_http_gzip_module.md#gzip_vary).

With the “`always`” value (1.3.6), gzipped file is used
in all cases, without checking if the client supports it.
It is useful if there are no uncompressed files on the disk anyway
or the [ngx\_http\_gunzip\_module](http__ngx_http_gunzip_module.md)
is used.

The files can be compressed using the `gzip` command,
or any other compatible one.
It is recommended that the modification date and time of original and
compressed files be the same.
