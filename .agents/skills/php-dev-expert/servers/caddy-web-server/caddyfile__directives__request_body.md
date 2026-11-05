# request_body (Caddyfile directive) — Caddy Documentation

> **Fonte / Source:** https://caddyserver.com/docs/caddyfile/directives/request_body

---

# request\_body

Manipulates or sets restrictions on the bodies of incoming requests.

## Syntax

```
request_body [<matcher>] {
	max_size <value>
	set <body_content>
}
```

- **max\_size** is the maximum size in bytes allowed for the request body. It accepts all size values supported by [go-humanize](https://pkg.go.dev/github.com/dustin/go-humanize#pkg-constants). Reads of more bytes will return an error with HTTP status `413`.

⚠️ *Experimental*  |  v2.10.0+

- **set** allows setting the request body to specific content. The content can include placeholders to dynamically insert data. Only known placeholders are replaced; other text in braces, such as JSON, is kept as-is.

The `read_timeout` and `write_timeout` subdirectives have been removed from `request_body`. To set timeouts for matching requests, use the [`timeouts`](caddyfile__directives__timeouts.md) directive instead.

## Examples

Limit request body sizes to 10 megabytes:

```
example.com {
	request_body {
		max_size 10MB
	}
	reverse_proxy localhost:8080
}
```

Set the request body with a JSON structure containing a SQL query:

```
example.com {
	handle /jazz {
		request_body {
			set `\{"statementText":"SELECT name, genre, debut_year FROM artists WHERE genre = 'Jazz'"}`
		}

		reverse_proxy localhost:8080 {
			header_up Content-Type application/json
			method POST
			rewrite /execute-sql
		}
	}
}
```
