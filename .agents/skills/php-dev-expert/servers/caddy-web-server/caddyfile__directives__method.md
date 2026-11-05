# method (Caddyfile directive) — Caddy Documentation

> **Fonte / Source:** https://caddyserver.com/docs/caddyfile/directives/method

---

# method

Changes the HTTP method on the request.

## Syntax

```
method [<matcher>] <method>
```

- **<method>** is the HTTP method to change the request to.

## Examples

Change the method for all requests under `/api` to `POST`:

```
method /api* POST
```
