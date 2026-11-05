# Module ngx_http_empty_gif_module

> **Fonte / Source:** https://nginx.org/en/docs/http/ngx_http_empty_gif_module.html

---

## Module ngx\_http\_empty\_gif\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [empty\_gif](#empty_gif) |

The `ngx_http_empty_gif_module` module emits
single-pixel transparent GIF.

#### Example Configuration

> ```
> location = /_.gif {
>     empty_gif;
> }
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `empty_gif;` |
| Default: | — |
| Context: | `location` |

Turns on module processing in a surrounding location.
