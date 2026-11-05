# Money Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/money

---

# Money Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__money.md#settings)
  - [Development](docs_5x__reference__field-types__money.md#development)

Money fields give you a text input tailored for storing currency amounts.

## [#](#settings)Settings

Money fields have the following settings:

- **Currency** – The currency in which values should be stored.
- **Default Value** – The default value that should be applied for new elements.
- **Min Value** – The lowest amount that may be entered in the field.
- **Max Value** – The highest amount that may be entered in the field.
- **Show Currency** – Whether to display the currency label with the field’s text input.
- **Size** – The input’s `size` attribute.

Values are always stored in the database as an integer, in the currency’s base or “minor” unit. For example, the Chilean Peso has no minor unit and is always expressed as a whole number; on the other hand, the Swiss Franc can be split into 100 *Rappen*. Even if you enter a value like `123.45 Fr.` in the control panel, it will be stored in the minor unit as `12345`.

## [#](#development)Development

### [#](#querying-elements-with-money-fields)Querying Elements with Money Fields

When [querying for elements](docs_5x__development__element-queries.md) that have a Money field, you can filter the results based on the Money field data using a query param named after your field’s handle.

When querying with a money field, provide amounts as you would naturally write them (`123.45`), *not* in the currency’s minor unit (`12345`). Craft will automatically normalize the values when executing the query.

Any value compatible with [craft\helpers\Db::parseMoneyParam()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-db.html#method-parsemoneyparam) can be passed as a query param:

| Value | Fetches elements… |
| --- | --- |
| `':empty:'` | …that have no amount saved. |
| `':notempty:'` | …that have an amount saved. |
| `'>= 123.45'` | …that have a normalized amount greater than or equal to `123.45`. |
| `'< 123.45'` | …that have a normalized amount less than `123.45`. |
| `['and', '>= 50.00', '< 75.00']` | …that have a normalized amount between `50.00` (inclusive) and `75.00`. |
| `['or', '< -100.00', '> 100.00']` | …that have a normalized amount less than `-100.00` or greater than `100.00`. |

All values are assumed to be in the field’s currency.

### [#](#working-with-money-field-data)Working with Money Field Data

If you have an element with a Money field in your template, you can output its value using the [money](docs_5x__reference__twig__filters.md#money) filter, or [craft\helpers\MoneyHelper::toString()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-moneyhelper.html#method-tostring).

TwigPHP

```
{% set value = entry.myFieldHandle|money %}
```

```
$value = \craft\helpers\MoneyHelper::toString($entry->myFieldHandle);
```

A formatted representation of the amount is returned, if the field had a value.

The `currency` filter does *not* work with money field values, due to the way the underlying value is represented.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/money.md)
