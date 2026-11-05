# Module ngx_http_addition_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_addition_module.html

---

## Module ngx\_http\_addition\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [add\_before\_body](#add_before_body)      [add\_after\_body](#add_after_body)      [addition\_types](#addition_types) |

The `ngx_http_addition_module` module is a filter
that adds text before and after a response.
This module is not built by default, it should be enabled with the
`--with-http_addition_module`
configuration parameter.

#### Example Configuration

> ```
> location / {
>     add_before_body /before_action;
>     add_after_body  /after_action;
> }
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `add_before_body uri;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Adds the text returned as a result of processing a given subrequest
before the response body.
An empty string (`""`) as a parameter cancels addition
inherited from the previous configuration level.

|  |  |
| --- | --- |
| Syntax: | `add_after_body uri;` |
| Default: | — |
| Context: | `http`, `server`, `location` |

Adds the text returned as a result of processing a given subrequest
after the response body.
An empty string (`""`) as a parameter cancels addition
inherited from the previous configuration level.

|  |  |
| --- | --- |
| Syntax: | `addition_types mime-type ...;` |
| Default: | ``` addition_types text/html; ``` |
| Context: | `http`, `server`, `location` |

This directive appeared in version 0.7.9.

Allows adding text in responses with the specified MIME types,
in addition to “`text/html`”.
The special value “`*`” matches any MIME type (0.8.29).
