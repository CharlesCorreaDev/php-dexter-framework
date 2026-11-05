# timeouts (Caddyfile directive) — Caddy Documentation

> **Fonte / Source:** https://caddyserver.com/docs/caddyfile/directives/timeouts

---

# timeouts

Sets idle read and write timeouts, minimum transfer rates, and a maximum write chunk size for matching requests, separately from the server-wide [`timeouts` global option](caddyfile__options.md#timeouts).

Like the server-wide `read_body_idle` and `write_idle` timeouts, these are reset after every successful read or write, so they only abort connections that stall; slow clients that keep making progress are not affected.

⚠️ This is an experimental feature. Subject to change or removal.

## Syntax

```
timeouts [<matcher>] {
	read_timeout    <duration> [<min_rate>]
	write_timeout   <duration> [<min_rate>]
	max_write_chunk <size>
}
```

- **read\_timeout** is a [duration value](conventions.md#durations) that sets how long a read from the request body may stall before the connection is aborted. The deadline is reset after every successful read. By default, no idle read timeout is applied by this directive.

  The optional **<min\_rate>** is a number of bytes per second that the client must sustain, averaged from the start of reading the request body. With it, the client is allowed the `read_timeout` duration plus the time it would take to send the bytes received so far at `min_rate`, which also stops clients that send just enough data to never stall.
- **write\_timeout** is a [duration value](conventions.md#durations) that sets how long a write to the client may stall before the connection is aborted. The deadline is reset before every write. By default, no idle write timeout is applied by this directive.

  The optional **<min\_rate>** works like the one for `read_timeout`, but for writes to the client. Because the rate is averaged from the start of the response, pauses between writes count against it, so avoid it for long-lived streaming responses such as server-sent events.
- **max\_write\_chunk** is the maximum number of bytes that a single underlying write to the client may cover, so that `write_timeout` applies between chunks of a large response rather than to one large write as a whole. It accepts all formats supported by [go-humanize](https://github.com/dustin/go-humanize/blob/master/bytes.go). Only has an effect when `write_timeout` is set. Default: `64KiB`.

## Examples

Abort uploads to `/upload` if they stall for more than 10 seconds, or if the client sends less than 1 KiB per second on average:

```
example.com {
	timeouts /upload* {
		read_timeout 10s 1024
	}
	reverse_proxy localhost:8080
}
```

Abort downloads from `/files` if a write to the client stalls for more than 30 seconds, checking between chunks of at most 16 KiB:

```
example.com {
	timeouts /files/* {
		write_timeout   30s
		max_write_chunk 16KiB
	}
	root * /srv
	file_server
}
```
