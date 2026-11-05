# Regular expression captures

> **Fonte / Source:** https://nginx.org/en/docs/regex_captures.html

---

## Regular expression captures

|  |
| --- |
| [Positional captures](#positional) [Named captures](#named) [Preserving a positional capture](#preserving) |

Regular expressions used in the
[location](http__ngx_http_core_module.md#location),
[server\_name](http__ngx_http_core_module.md#server_name),
[if](http__ngx_http_rewrite_module.md#if),
[map](http__ngx_http_map_module.md#map),
and several other directives can contain captures.
A captured substring is referred to either positionally, as
“`$1`”...“`$9`”, or by name.
The two forms differ in how long the captured value stays available.

Everything described below also applies to the
[server\_name](stream__ngx_stream_core_module.md#server_name) and
[map](stream__ngx_stream_map_module.md#map)
directives of the stream module.

#### Positional captures

Positional captures are numbered in the order the capturing groups
appear in a regular expression:

> ```
> location ~ ^/images/(.*)\.([a-z]+)$ {
>     # for the "/images/cats/tom.jpg" request
>     # $1 is "cats/tom" and $2 is "jpg"
> }
> ```

Positional captures are not variables.
They form a single set of values shared by all these directives
while a request or a connection is processed.
A successful match replaces the whole set, and an unsuccessful match
may clear it.
The values therefore remain available only until the next match,
which may happen in an unrelated directive.

A match may also happen implicitly.
Since variables are evaluated only when they are used, referring to a
[map](http__ngx_http_map_module.md#map) variable
with regular expressions in source values matches them at that moment,
and a successful match replaces the positional captures:

> ```
> map $uri $mapped {
>     ~^/(?<first>[^/]+)/  $first;
> }
>
> location ~ ^/images/(.*)$ {
>     set $name   $1;   # "cats/tom.jpg"
>     set $m      $mapped;     # "images"
>     set $name2  $1;   # "images", not "cats/tom.jpg"
> }
> ```

#### Named captures

A capture can be given a name:

> ```
> location ~ ^/images/(?<name>.*)\.(?<ext>[a-z]+)$ {
>     ...
> }
> ```

Named captures create ordinary nginx variables, in this case
`$name` and `$ext`.
Their values are not replaced when another regular expression is matched,
unless it uses the same capture name.
This makes named captures the preferred way to pass a captured value
to a directive other than the one that has performed the match.

The PCRE library supports named captures using the following syntax:
> |  |  |
> | --- | --- |
> | `?<name>` | Perl compatible syntax |
> | `?'name'` | Perl compatible syntax |
> | `?P<name>` | Python compatible syntax |

#### Preserving a positional capture

If a positional capture is needed later and cannot be replaced with
a named one, its value should be copied into a variable right after
the match, using the
[set](http__ngx_http_rewrite_module.md#set) directive
([set](stream__ngx_stream_set_module.md#set)
in the stream module):

> ```
> location ~ ^/images/(.*)$ {
>     set $name $1;
> }
> ```
