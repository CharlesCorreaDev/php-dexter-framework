# Module ngx_http_random_index_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_random_index_module.html

---

## Module ngx\_http\_random\_index\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [random\_index](#random_index) |

The `ngx_http_random_index_module` module processes requests
ending with the slash character (‘`/`’) and picks a random
file in a directory to serve as an index file.
The module is processed before the
[ngx\_http\_index\_module](http__ngx_http_index_module.md)
module.

This module is not built by default, it should be enabled with the
`--with-http_random_index_module`
configuration parameter.

#### Example Configuration

> ```
> location / {
>     random_index on;
> }
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `random_index on | off;` |
| Default: | ``` random_index off; ``` |
| Context: | `location` |

Enables or disables module processing in a surrounding location.
