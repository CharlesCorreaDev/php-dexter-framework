# root (Caddyfile directive) — Caddy Documentation

> **Fonte / Source:** https://caddyserver.com/docs/caddyfile/directives/root

---

# root

Sets the root path of the site, used by various matchers and directives that access the file system. If unset, the default site root is the current working directory.

Specifically, this directive sets the `{http.vars.root}` placeholder. It is mutually exclusive to other `root` directives in the same block, so it is safe to define multiple roots with matchers that intersect: they will not cascade and overwrite each other.

This directive does not automatically enable serving static files, so it is often used in conjunction with the [`file_server` directive](caddyfile__directives__file_server.md) or the [`php_fastcgi` directive](caddyfile__directives__php_fastcgi.md).

## Syntax

```
root [<matcher>] <path>
```

- **<path>** is the path to use for the site root.

Prior to v2.8.0, the `<path>` argument could be confused by the parser for a [matcher token](caddyfile__matchers.md#syntax) if it began with `/`, so it was necessary to specify a wildcard matcher token (`*`).

## Examples

Set the site root to `/home/bob/public_html` (assumes Caddy is running as the user `bob`):

```
root /home/bob/public_html
```

Set the site root to `public_html` (relative to current working directory) for all requests:

```
root public_html
```

Change the site root only for requests in `/foo/*`:

```
root /foo/* /home/user/public_html/foo
```

The `root` directive is commonly paired with [`file_server`](caddyfile__directives__file_server.md) to serve static files and/or with [`php_fastcgi`](caddyfile__directives__php_fastcgi.md) to serve a PHP site:

```
example.com {
	root /srv
	file_server
}
```
