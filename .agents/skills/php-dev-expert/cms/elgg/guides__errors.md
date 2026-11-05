# Error Handling — Elgg master documentation

> **Fonte / Source:** https://learn.elgg.org/en/stable/guides/errors.html

---

# Error Handling[](#error-handling "Permalink to this heading")

Under the hood, Elgg uses [Monolog](https://github.com/Seldaek/monolog) for logging errors to the server’s error log (and stdout for CLI commands).

[Monolog](https://github.com/Seldaek/monolog) comes with a number of tools that can help administrators keep track of errors and debugging information.

You can add custom handlers (see [Monolog](https://github.com/Seldaek/monolog) documentation for a full list of handlers):

```
// Add a new handler to notify a given email about a critical error
elgg()->logger->pushHandler(
        new \Monolog\Handler\NativeMailerHandler(
                'admin@example.com',
                'Critical error',
                'no-reply@mysite.com',
                \Monolog\Level::Critical
        )
);
```
