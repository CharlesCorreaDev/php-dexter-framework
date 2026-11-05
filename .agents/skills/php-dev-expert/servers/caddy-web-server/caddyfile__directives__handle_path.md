# handle_path (Caddyfile directive) — Caddy Documentation

> **Fonte / Source:** https://caddyserver.com/docs/caddyfile/directives/handle_path

---

# handle\_path

Works the same as the [`handle` directive](caddyfile__directives__handle.md), but implicitly uses [`uri strip_prefix`](caddyfile__directives__uri.md) to strip the matched path prefix.

Handling a request matching a certain path (while stripping that path from the request URI) is a common enough use case that it has its own directive for convenience.

## Syntax

```
handle_path <path_matcher> {
	<directives...>
}
```

- **<directives...>** is a list of HTTP handler directives or directive blocks, one per line, just like would be used outside of a `handle_path` block.

Only a single [path matcher](caddyfile__matchers.md#path-matchers) is accepted, and is required; you cannot use named matchers with `handle_path`.

The path left after stripping always starts with `/`. For example, with `handle_path /prefix*`, a request for `/prefix` is handled with the path `/`.

## Examples

This configuration:

```
handle_path /prefix/* {
	...
}
```

👆 is effectively the same as this 👇, but the `handle_path` form 👆 is slightly more succinct

```
handle /prefix/* {
	uri strip_prefix /prefix
	...
}
```

A full Caddyfile example, where `handle_path` and `handle` are mutually exclusive; but, be aware of the [subfolder problem ![](/old/resources/images/external-link.svg)](https://caddy.community/t/the-subfolder-problem-or-why-cant-i-reverse-proxy-my-app-into-a-subfolder/8575)

```
example.com {
	# Serve your API, stripping the /api prefix
	handle_path /api/* {
		reverse_proxy localhost:9000
	}

	# Serve your static site
	handle {
		root /srv
		file_server
	}
}
```
