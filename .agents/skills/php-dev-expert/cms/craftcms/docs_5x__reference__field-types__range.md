# Range Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/range

---

# Range Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__range.md#settings)
  - [Development](docs_5x__reference__field-types__range.md#development)

Range fields give you a [range input  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/range) that allows authors to set a number using a visual slider or a number input.

![Screenshot of a range field interface in the Craft control panel](/docs/assets/img/fields-range-ui.f1e93f08.png)

## [#](#settings)Settings

my-craft-project.ddev.site/admin/settings/fields/new

![Range field settings screen in the Craft control panel](/docs/assets/img/fields-range-settings.53817b91.png)

Adding a new range field via the control panel.

Range fields have the following settings:

- **Min Value** — The *lowest* number that may be accessed using the slider or entered manually.
- **Max Value** — The *highest* number that may be accessed using the slider or entered manually.
- **Step Size** — The permitted granularity, mapped to the [`step`  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/number#step) attribute of the resulting `range` and `number` inputs.
- **Default Value** — An initial value for the input, on new elements.
- **Suffix Text** — A string to include after the number input.

## [#](#development)Development

Working with range field values is identical to [number fields](docs_5x__reference__field-types__number.md).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/range.md)
