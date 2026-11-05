# Twig Filters | Craft Commerce Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/commerce/5.x/reference/twig

---

# Twig Filters

- ### On this Page

  - [commerceCurrency](commerce_5x__reference__twig.md#commercecurrency)

## [#](#commercecurrency)`commerceCurrency`

This can be used as a drop-in replacement for [Craft’s `|currency` filter](https://craftcms.com/docs/5.x/reference/twig/filters#currency), but it offers additional parameters for control over formatting and conversion:

| Parameter | Type | Default | Required | Description |
| --- | --- | --- | --- | --- |
| `currency` | string |  | yes | Valid, three-character ISO payment currency set up in **Commerce** → **Store Management** → **Payment Currencies**. |
| `convert` | bool | `false` | no | Should the amount passed to this filter be converted to `currency`’s exchange rate? |
| `format` | bool | `true` | no | Should the amount passed to this filter be formatted according to `currency`? (Typically adds currency symbol and thousands+decimal separators.) |
| `stripZeros` | bool | `false` | no | Should trailing zeros (`.00`) be stripped from a formatted number? |

[Payment Currencies
→

Learn more about currencies and conversion.](commerce_5x__system__currencies.md)

### [#](#examples)Examples:

```
{# `USD` #}
{% set baseCurrency = cart.currency %}

{# `AUD`, exchange rate 1.3 #}
{% set paymentCurrency = cart.paymentCurrency %}

{{ order.outstandingBalance|commerceCurrency(baseCurrency) }} {# Output: $10.00 #}

{{ order.outstandingBalance|commerceCurrency(
  paymentCurrency,
  convert=true
) }} {# Output: A$13.00 #}

{{ order.outstandingBalance|commerceCurrency(
  paymentCurrency,
  convert=true,
  format=false
) }} {# Output: 13 #}

{{ order.outstandingBalance|commerceCurrency(
  paymentCurrency,
  convert=true,
  format=true
) }} {# Output: A$13.00 #}

{{ order.outstandingBalance|commerceCurrency(
  paymentCurrency,
  convert=true,
  format=true,
  stripZeros=true
) }} {# Output: A$13 #}
```

You might want to show the order’s price in all available payment currencies:

```
{% for currency in currentStore.paymentCurrencies %}
  Total in {{ currency.iso|upper }}: {{ cart.outstandingBalance|commerceCurrency(
    currency,
    convert=true
  ) }}<br>
{% endfor %}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/commerce/5.x/reference/twig.md)
