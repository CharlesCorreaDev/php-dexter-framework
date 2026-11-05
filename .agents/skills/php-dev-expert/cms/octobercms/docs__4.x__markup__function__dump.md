# dump() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/dump.html

---

# dump()

Twig Function

- [d()](docs__4.x__markup__function__dump.md#d)

The `dump()` function dumps information about a template variable. This is useful when debugging a template that does not behave as expected.

```
___TWIG0___
```

You can inspect several variables by passing them as additional arguments:

```
___TWIG0___
```

If you don't pass any value, all variables from the current context are dumped:

```
___TWIG0___
```

## [#](#d) d()

The `d()` function acts as shorter syntax for debugging in Twig. It will show less detail about the object but makes the values easier to see all at once. It will recursively dump provided variables in the same manner as the `dd()` PHP function.

```
___TWIG0___
```

You may also pass multiple variables in the arguments.

```
___TWIG0___
```

The `dd()` function is an alternative that will dump the values and then terminate the process.

```
___TWIG0___
```

The `dump()` and `d()` functions are not available when [safe mode is enabled](docs__4.x__setup__configuration.md).

← [abort()](docs__4.x__markup__function__abort.md)[str()](docs__4.x__markup__function__str.md) →
