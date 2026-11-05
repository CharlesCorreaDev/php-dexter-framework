# Caddyfile Quick-start — Caddy Documentation

> **Fonte / Source:** https://caddyserver.com/docs/quick-starts/caddyfile

---

# Caddyfile Quick-start

Create a new text file named `Caddyfile` (no extension).

The first thing to type in a Caddyfile is your site's address:

```
localhost
```

Then hit enter and type what you want it to do, so it looks like this:

```
localhost

respond "Hello, world!"
```

Save this and run Caddy from the same folder that contains your Caddyfile:

```
caddy start
```

You will probably be asked for your password, because Caddy serves all sites -- even local ones -- over HTTPS by default. (The password prompt should only happen the first time!)

(If you get permission errors, you may need to run with elevated privileges or choose a port higher than 1023.)

Either open your browser to [localhost](http://localhost) or `curl` it:

```
curl https://localhost
Hello, world!
```

You can define multiple sites in a Caddyfile by wrapping them in curly braces `{ }`. Change your Caddyfile to be:

```
localhost {
	respond "Hello, world!"
}

localhost:2016 {
	respond "Goodbye, world!"
}
```

You can give Caddy the updated configuration two ways, either with the API directly:

```
curl localhost:2019/load \
	-H "Content-Type: text/caddyfile" \
	--data-binary @Caddyfile
```

or with the reload command, which does the same API request for you:

```
caddy reload
```

Try out your new "goodbye" endpoint [in your browser](https://localhost:2016) or with `curl` to make sure it works:

```
curl https://localhost:2016
Goodbye, world!
```

When you are done with Caddy, make sure to stop it:

```
caddy stop
```

## Further reading

- [Caddyfile concepts](caddyfile__concepts.md)
- [Directives](caddyfile__directives.md)
- [Common patterns](caddyfile__patterns.md)
