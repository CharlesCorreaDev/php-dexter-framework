# Caddyfile Directives — Caddy Documentation

> **Fonte / Source:** https://caddyserver.com/docs/caddyfile/directives

---

# Caddyfile Directives

Directives are functional keywords that appear within site [blocks](caddyfile__concepts.md#blocks). Sometimes, they may open blocks of their own which can contain *subdirectives*, but directives **cannot** be used within other directives unless noted. For example, you can't use `basic_auth` inside a `file_server` block, because `file_server` does not know how to do authentication. However, you *may* use some directives within special directive blocks like `handle` and `route` because they are specifically designed to group HTTP handler directives.

- [Syntax](#syntax)
- [Directive Order](#directive-order)
- [Sorting Algorithm](#sorting-algorithm)

The following directives come standard with Caddy, and can be used in the HTTP Caddyfile:

| Directive | Description |
| --- | --- |
| **[abort](caddyfile__directives__abort.md)** | Aborts the HTTP request |
| **[acme\_server](caddyfile__directives__acme_server.md)** | An embedded ACME server |
| **[basic\_auth](caddyfile__directives__basic_auth.md)** | Enforces HTTP Basic Authentication |
| **[bind](caddyfile__directives__bind.md)** | Customize the server's socket address |
| **[encode](caddyfile__directives__encode.md)** | Encodes (usually compresses) responses |
| **[error](caddyfile__directives__error.md)** | Trigger an error |
| **[file\_server](caddyfile__directives__file_server.md)** | Serve files from disk |
| **[forward\_auth](caddyfile__directives__forward_auth.md)** | Delegate authentication to an external service |
| **[fs](caddyfile__directives__fs.md)** | Set the file system to use for file I/O |
| **[handle](caddyfile__directives__handle.md)** | A mutually-exclusive group of directives |
| **[handle\_errors](caddyfile__directives__handle_errors.md)** | Defines routes for handling errors |
| **[handle\_path](caddyfile__directives__handle_path.md)** | Like handle, but strips path prefix |
| **[header](caddyfile__directives__header.md)** | Sets or removes response headers |
| **[import](caddyfile__directives__import.md)** | Include snippets or files |
| **[intercept](caddyfile__directives__intercept.md)** | Intercept responses written by other handlers |
| **[invoke](caddyfile__directives__invoke.md)** | Invoke a named route |
| **[log](caddyfile__directives__log.md)** | Enables access/request logging |
| **[log\_append](caddyfile__directives__log_append.md)** | Append a field to the access log |
| **[log\_skip](caddyfile__directives__log_skip.md)** | Skip access logging for matched requests |
| **[log\_name](caddyfile__directives__log_name.md)** | Override the logger name(s) to write to |
| **[map](caddyfile__directives__map.md)** | Maps an input value to one or more outputs |
| **[method](caddyfile__directives__method.md)** | Change the HTTP method internally |
| **[metrics](caddyfile__directives__metrics.md)** | Configures the Prometheus metrics exposition endpoint |
| **[php\_fastcgi](caddyfile__directives__php_fastcgi.md)** | Serve PHP sites over FastCGI |
| **[push](caddyfile__directives__push.md)** | Push content to the client using HTTP/2 server push |
| **[redir](caddyfile__directives__redir.md)** | Issues an HTTP redirect to the client |
| **[request\_body](caddyfile__directives__request_body.md)** | Manipulates request body |
| **[request\_header](caddyfile__directives__request_header.md)** | Manipulates request headers |
| **[respond](caddyfile__directives__respond.md)** | Writes a hard-coded response to the client |
| **[reverse\_proxy](caddyfile__directives__reverse_proxy.md)** | A powerful and extensible reverse proxy |
| **[rewrite](caddyfile__directives__rewrite.md)** | Rewrites the request internally |
| **[root](caddyfile__directives__root.md)** | Set the path to the site root |
| **[route](caddyfile__directives__route.md)** | A group of directives treated literally as single unit |
| **[templates](caddyfile__directives__templates.md)** | Execute templates on the response |
| **[timeouts](caddyfile__directives__timeouts.md)** | Set idle read and write timeouts |
| **[tls](caddyfile__directives__tls.md)** | Customize TLS settings |
| **[tracing](caddyfile__directives__tracing.md)** | Integration with OpenTelemetry tracing |
| **[try\_files](caddyfile__directives__try_files.md)** | Rewrite that depends on file existence |
| **[uri](caddyfile__directives__uri.md)** | Manipulate the URI |
| **[vars](caddyfile__directives__vars.md)** | Set arbitrary variables |

## Syntax

The syntax of each directive will look something like this:

```
directive [<matcher>] <args...> {
	subdirective [<args...>]
}
```

The `<carets>` indicate tokens to be substituted by actual values.

The`[brackets]` indicate optional parameters.

The ellipses `...` indicates a continuation, i.e. one or more parameters or lines.

Subdirectives are typically optional unless documented otherwise, even though they don't appear in `[brackets]`.

### Matchers

Most—but not all—directives accept [matcher tokens](caddyfile__matchers.md#syntax), which let you filter requests. Matcher tokens are usually optional. Directives support matchers if you see this in a directive's syntax:

```
[<matcher>]
```

Because matcher tokens all work the same, the various possibilities for the matcher token will not be described on every page, to reduce duplication. Instead, refer to the [matcher documentation](caddyfile__matchers.md) for a detailed explanation of the syntax.

## Directive order

Many directives manipulate the HTTP handler chain. The order in which those directives are evaluated matters, so a default ordering is hard-coded into Caddy.

You can override/customize this ordering by using the [`order` global option](caddyfile__options.md#order) or the [`route` directive](caddyfile__directives__route.md).

```
tracing

map
vars
fs
root
log_append
log_skip
log_name

header
copy_response_headers # only in reverse_proxy's handle_response block
request_body
timeouts

redir

# incoming request manipulation
method
rewrite
uri
try_files

# middleware handlers; some wrap responses
basic_auth
forward_auth
request_header
encode
push
intercept
templates

# special routing & dispatching directives
invoke
handle
handle_path
route

# handlers that typically respond to requests
abort
error
copy_response # only in reverse_proxy's handle_response block
respond
metrics
reverse_proxy
php_fastcgi
file_server
acme_server
```

## Sorting algorithm

For ease of use, the Caddyfile adapter sorts directives according to the following rules:

- Differently named directives are sorted by their position in the [default order](#directive-order). The default order can be overridden with the [`order` global option](caddyfile__options.md). Directives from plugins *do not* have an order, so the [`order`](caddyfile__options.md) global option or the [`route`](caddyfile__directives__route.md) directive should be used to set one.
- Same-named directives are sorted according to their [matchers](caddyfile__matchers.md#syntax).

  - A directive with a single [path matcher](caddyfile__matchers.md#path-matchers) value, such as `/foo*`, is sorted by specificity relative to other directives with a single path, from most specific to least specific. This also applies to a [named matcher](caddyfile__matchers.md#named-matchers) with a `path` matcher that has only one path.

    In general, this is performed by sorting by the length of the path, ignoring a trailing `*`. If the paths of the two matchers are otherwise the same, the matcher with no `*` is considered more specific and sorted higher. Paths of the same length are sorted alphabetically.

    For example:

    - `/foobar` is more specific than `/foo`
    - `/foo` is more specific than `/foo*`
    - `/foo/*` is more specific than `/foo*`
  - A directive with any other matcher, such as a named matcher or a path matcher with multiple values, keeps the order it appears in the Caddyfile. Directives with a single path are *not* sorted past it, so they are only sorted among the other single-path directives next to them.

    For example, these directives are not reordered at all, because the `@api` named matcher separates them:

    ```
    respond /a*  "1"
    respond @api "2"
    respond /a/b "3"
    respond /a   "4"
    ```
  - A directive with no matcher (i.e. matching all requests) is sorted last.

  If the sorted order is not what you need, use the [`route`](caddyfile__directives__route.md) directive to set the order explicitly, or mutually exclusive [`handle`](caddyfile__directives__handle.md) blocks.
- The [`vars`](caddyfile__directives__vars.md) directive has its ordering by matcher reversed, because it involves setting values which can overwrite each other, so the most specific matcher should be evaluated last.
- The contents of the [`route`](caddyfile__directives__route.md) directive ignores all the above rules, and preserves the order the directives appear within.
