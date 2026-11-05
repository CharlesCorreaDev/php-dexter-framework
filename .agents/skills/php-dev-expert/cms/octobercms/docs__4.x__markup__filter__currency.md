# |currency - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/filter/currency.html

---

# |currency

Twig Filter

- [currency() Function](docs__4.x__markup__filter__currency.md#currency-function)
- [PHP Interface](docs__4.x__markup__filter__currency.md#php-interface)

The `|currency` filter is used to display a currency value.

```
___TWIG0___
```

This Twig filter is introduced after installing the [Currency plugin  (opens new window)](https://octobercms.com/plugin/responsiv-currency) available on the October CMS marketplace. You may install it with the following command.

```
php artisan plugin:install Responsiv.Currency
```

The filter takes an options argument, as an array that supports various values.

| Option | Description |
| --- | --- |
| **to** | To a given currency code |
| **from** | From a currency code |
| **format** | Display format. Options: long, short, null. |
| **site** | Set to `true` to use currency codes from the site definition. Default: `false`. |

For example, to convert an amount from USD to AUD.

```
{{ 1000|currency({ from: 'USD', to: 'AUD' }) }}
```

If you want to use the base and display currency from the site definition, set the **site** option to `true`.

```
{{ 1000|currency({ site: true }) }}
```

To display a currency in `long` or `short` format.

```
// $10.00
{{ 1000|currency({ format: '' }) }}

// $10.00 USD
{{ 1000|currency({ format: 'long' }) }}

// $10
{{ 1000|currency({ format: 'short' }) }}
```

## [#](#currency-function) currency() Function

The `currency()` Twig function returns the default currency model, giving you access to the currency's formatting properties. This is useful when you need to pass currency settings to JavaScript controls or perform custom formatting.

```
___TWIG0___
```

The returned model provides these properties:

| Property | Type | Example | Description |
| --- | --- | --- | --- |
| **currency\_symbol** | string | `$` | The currency symbol |
| **decimal\_scale** | int | `2` | Number of decimal places (used to convert base values) |
| **decimal\_point** | string | `.` | Decimal separator character |
| **thousand\_separator** | string | `,` | Thousands separator character |
| **place\_symbol\_before** | bool | `true` | Whether the symbol appears before the number |

For example, passing currency settings to a JavaScript control via data attributes:

```
___TWIG0___
<div
    data-control="price-slider"
    data-decimal-scale="___TWIG1___"
    data-currency-symbol="___TWIG2___"
    data-symbol-before="___TWIG3___"
    data-thousand-separator="___TWIG4___"
>
    ...
</div>
```

## [#](#php-interface) PHP Interface

You may interact with the currency functions via the global `Currency` facade.

For example, to convert an amount from USD to AUD:

```
Currency::format(1000, ['from' => 'USD', 'to' => 'AUD']);
```

To display a currency in long or short format

```
// $10.00 USD
Currency::format(1000, ['format' => 'long']);

// $10
Currency::format(1000, ['format' => 'short']);
```

#### [#](#see-also) See Also

- [Currency Form Widget](docs__4.x__element__form__widget-currency.md)
- [Currency List Column](docs__4.x__element__lists__column-currency.md)
- [Currency Plugin Page  (opens new window)](https://octobercms.com/plugin/responsiv-currency)

← [|md](docs__4.x__markup__filter__md.md)[ajaxHandler()](docs__4.x__markup__function__ajax-handler.md) →
