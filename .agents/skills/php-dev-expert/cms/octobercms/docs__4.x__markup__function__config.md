# config() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/config.html

---

# config()

Twig Function

- [env()](docs__4.x__markup__function__config.md#env)

You may access configuration values using the `config()` helper function. It returns the current value from the configuration store.

The following example will output the value currently stored in `app.locale`.

```
___TWIG0___
```

The above is the PHP equivalent of the following:

```
<?= Config::get('app.locale') ?>
```

## [#](#env) env()

As companion function called `env()` can be used to access environment variables.

The following example would output the value currently stored in `APP_ENV` environment variable. Second argument is default value, when ENV key does not exists.

```
___TWIG0___
```

The above is the PHP equivalent of the following:

```
<?= env('APP_ENV', 'production') ?>
```

The `config()` and `env()` functions are not available when [safe mode is enabled](docs__4.x__setup__configuration.md).

← [collect()](docs__4.x__markup__function__collect.md)[trans()](docs__4.x__markup__function__trans.md) →
