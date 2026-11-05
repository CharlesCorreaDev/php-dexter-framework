# invoke (Caddyfile directive) — Caddy Documentation

> **Fonte / Source:** https://caddyserver.com/docs/caddyfile/directives/invoke

---

# invoke

*⚠️ Experimental*

Invokes a [named route](caddyfile__concepts.md#named-routes).

This is useful when paired with HTTP handler directives that have their own in-memory state, or if they are expensive to provision on load. If you have hundreds of sites or more, invoking a named route can help reduce memory usage.

## Syntax

```
invoke [<matcher>] <route-name>
```

- **<route-name>** is the name of the route that should be invoked. If the route is not found, then an error will be triggered.

`invoke` may also be used within a named route, to invoke another named route.

## Examples

Defines a [named route](caddyfile__concepts.md#named-routes) with a [`reverse_proxy`](caddyfile__directives__reverse_proxy.md) which can be reused in multiple sites, with the same in-memory load balancing state reused for every site.

```
&(app-proxy) {
	reverse_proxy app-01:8080 app-02:8080 app-03:8080 {
		lb_policy least_conn
		health_uri /healthz
		health_interval 5s
	}
}

# Apex domain allows accessing the app via an /app subpath
# and the main site otherwise.
example.com {
	handle_path /app* {
		invoke app-proxy
	}

	handle {
		root /srv
		file_server
	}
}

# The app is also accessible via a subdomain.
app.example.com {
	invoke app-proxy
}
```
