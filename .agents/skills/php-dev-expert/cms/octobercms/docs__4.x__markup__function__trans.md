# trans() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/trans.html

---

# trans()

Twig Function

- [Pluralization](docs__4.x__markup__function__trans.md#pluralization)
- [Filter Syntax](docs__4.x__markup__function__trans.md#filter-syntax)

The `trans()` or `__()` function is the preferred way to translate strings in your theme, using the applications localization configuration. The localization strings can be loaded by passing the default translation of your string.

```
___TWIG0___
```

The `trans()` function is interchangable with the `__()` function.

```
___TWIG0___
```

Replacing parameters in translation strings is possible by passing an array as the second argument. Every parameter is prefixed with a `:` character.

```
___TWIG0___
```

## [#](#pluralization) Pluralization

The `trans_choice()` function is used to process pluralized values, where the second argument determines the count.

```
___TWIG0___
```

The third argument can contain the parameters.

```
___TWIG0___
```

## [#](#filter-syntax) Filter Syntax

The `|trans`, `|_` and `|__` filters are also available as an alternative to the function syntax, where `|trans` and `|_` translate a string and `|__` processes pluralized values.

```
___TWIG0___

___TWIG1___

___TWIG2___
```

#### [#](#see-also) See Also

- [CMS Theme Localization](docs__4.x__cms__multisite__localization.md)
- [Laravel Localization  (opens new window)](https://laravel.com/docs/12.x/localization)

← [config()](docs__4.x__markup__function__config.md)[carbon()](docs__4.x__markup__function__carbon.md) →
