# Module ngx_http_gunzip_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_gunzip_module.html

---

## Module ngx\_http\_gunzip\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [gunzip](#gunzip)      [gunzip\_buffers](#gunzip_buffers) |

The `ngx_http_gunzip_module` module is a filter that
decompresses responses with “`Content-Encoding: gzip`”
for clients that do not support “gzip” encoding method.
The module will be useful when it is desirable to store
data compressed to save space and reduce I/O costs.

This module is not built by default, it should be enabled with the
`--with-http_gunzip_module`
configuration parameter.

#### Example Configuration

> ```
> location /storage/ {
>     gunzip on;
>     ...
> }
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `gunzip on | off;` |
| Default: | ``` gunzip off; ``` |
| Context: | `http`, `server`, `location` |

Enables or disables decompression of gzipped responses
for clients that lack gzip support.
If enabled, the following directives are also taken into account
when determining if clients support gzip:
[gzip\_http\_version](http__ngx_http_gzip_module.md#gzip_http_version),
[gzip\_proxied](http__ngx_http_gzip_module.md#gzip_proxied), and
[gzip\_disable](http__ngx_http_gzip_module.md#gzip_disable).
See also the [gzip\_vary](http__ngx_http_gzip_module.md#gzip_vary) directive.

|  |  |
| --- | --- |
| Syntax: | `gunzip_buffers number size;` |
| Default: | ``` gunzip_buffers 32 4k|16 8k; ``` |
| Context: | `http`, `server`, `location` |

Sets the `number` and `size` of buffers
used to decompress a response.
By default, the buffer size is equal to one memory page.
This is either 4K or 8K, depending on a platform.
