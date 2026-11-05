# Checkboxes Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/checkboxes

---

# Checkboxes Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__checkboxes.md#settings)
  - [Development](docs_5x__reference__field-types__checkboxes.md#development)

Checkboxes fields give you a group of [checkbox  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/checkbox) inputs, and allow the author to select multiple values (or provide any number of custom values, when allowed).

![Screenshot of a checkboxes field interface in the Craft control panel](/docs/assets/img/fields-checkboxes-ui.8c165c4f.png)

## [#](#settings)Settings

my-craft-project.ddev.site/admin/settings/fields/new

![Checkboxes field settings screen in the Craft control panel](/docs/assets/img/fields-checkboxes-settings.f60c743c.png)

Adding a new checkboxes field via the control panel.

In addition to the standard field options, checkboxes fields have the following settings:

- **Checkbox Options** – Define the options that will be available to authors. Each option contains…
  - **Label** — A text description of the option, displayed to the author.
  - **Value** — The value stored when a given option is checked.
  - **Icon** (Optional) — Choose from the standard system icon palette.
  - **Color** (Optional) — A color for the icon, or, when no icon is selected, a color pip.
  - **Default?** — Whether the option should be checked by default.
- **Allow custom options**  [5.5.0+](https://github.com/craftcms/cms/blob/5.5.0/CHANGELOG.md "Custom options was first available in version 5.5.0 of Craft.") — Whether authors can provide “other” options, on-the-fly.

## [#](#development)Development

### [#](#querying-elements-with-checkboxes-fields)Querying Elements with Checkboxes Fields

When [querying for elements](docs_5x__development__element-queries.md) that have a checkboxes field, you can filter the results using a query param named after your field’s handle. Possible values include:

| Value | Fetches elements… |
| --- | --- |
| `'foo'` | with a `foo` option checked (or `foo` provided as a custom value). |
| `'not foo'` | without a `foo` option checked (and without `foo` among custom values). |
| `['foo', 'bar']` | with `foo` *or* `bar` options selected (or `foo` provided as a custom value). |
| `['and', 'foo', 'bar']` | with `foo` *and* `bar` options selected (or among provided custom values). |

TwigPHP

```
{# Fetch entries with the 'foo' option checked #}
{% set entries = craft.entries()
  .myFieldHandle('foo')
  .all() %}
```

```
// Fetch entries with the 'foo' option checked
$entries = \craft\elements\Entry::find()
    ->myFieldHandle('foo')
    ->all();
```

### [#](#working-with-checkboxes-field-data)Working with Checkboxes Field Data

If you have an element with a checkboxes field in your template, you can access its data using the field’s handle:

TwigPHP

```
{% set value = entry.myFieldHandle %}
```

```
$value = $entry->myFieldHandle %}
```

That will give you a [craft\fields\data\MultiOptionsFieldData  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-multioptionsfielddata.html) object that contains information about the selected values and the available options. This object can be used as an array; looping over it provides each selected option, in sequence:

TwigPHP

```
{% for option in entry.myFieldHandle %}
  Label: {{ option.label }}
  Value: {{ option }} or {{ option.value }}
{% endfor %}
```

```
foreach ($entry->myFieldHandle as $option) {
    // label: $option->label
    // value: $option or $option->value
}
```

To loop through all available options, iterate over the [options  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-multioptionsfielddata.html#method-getoptions) property:

TwigPHP

```
{% for option in entry.myFieldHandle.options %}
  Label:   {{ option.label }}
  Value:   {{ option }} or {{ option.value }}
  Checked: {{ option.selected ? 'Yes' : 'No' }}
{% endfor %}
```

```
foreach ($entry->myFieldHandle->options as $option) {
    // label:   $option->label
    // value:   $option or $option->value
    // checked: $option->selected ? 'Yes' : 'No'
}
```

To see if any options are checked, use the [length  (opens new window)](https://twig.symfony.com/doc/3.x/filters/length.html) filter or [empty  (opens new window)](https://twig.symfony.com/doc/3.x/tests/empty.html) test (or the [count  (opens new window)](https://www.php.net/manual/en/function.count.php) method in PHP):

TwigPHP

```
{% if entry.myCheckboxesFieldHandle | length %}
  {# At least one option was selected! #}
{% endif %}

{% if entry.myCheckboxesFieldHandle is not empty %}
  {# Equivalent, but note that we’ve inverted the condition! #}
{% endif %}
```

```
if (count($entry->myCheckboxesFieldHandle)) {
    // At least one option was selected!
}
// PHP’s `empty()` function is more strict than the
// Twig test, and may produce different results!
```

To see if a specific option is checked, call [contains()  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-multioptionsfielddata.html#method-contains) using the **Value** in question:

TwigPHP

```
{% if entry.myCheckboxesFieldHandle.contains('foo') %}
  {# `foo` was selected! #}
{% endif %}
```

```
if ($entry->myCheckboxesFieldHandle->contains('foo')) {
    // `foo` was selected!
}
```

The `in` Twig test is equivalent:

```
{% if 'foo' in entry.myCheckboxesFieldHandle %}
  {# `foo` was selected! #}
{% endif %}
```

Custom values are also honored by both methods.

### [#](#saving-checkboxes-fields)Saving Checkboxes Fields

In an element or [entry form  (opens new window)](https://craftcms.com/knowledge-base/entry-form) that needs to save a value to a checkboxes field, you can use this template as a starting point:

```
{% set field = craft.app.fields.getFieldByHandle('myCheckboxesFieldHandle') %}

{# Include a hidden input first so Craft knows to clear the
   existing value, if no checkboxes are checked. #}
{{ hiddenInput('fields[myCheckboxesFieldHandle]', '') }}

<ul>
  {# Display native options as checkboxes: #}
  {% for option in field.options %}
    {% set checked = entry is defined
      ? entry.myCheckboxesFieldHandle.contains(option.value)
      : option.default %}

    <li>
      <label>
        <input
          type="checkbox"
          name="fields[myCheckboxesFieldHandle][]"
          value="{{ option.value }}"
          {% if checked %}checked{% endif %}>
        {{ option.label }}
      </label>
    </li>
  {% endfor %}

  {# Does this field allow custom options? #}
  {% if field.customOptions %}
    {# Loop over the *stored* values and output all the "invalid" ones as text fields: #}
    {% for option in entry.myCheckboxesFieldHandle | filter(o => not o.valid) %}
      <li>
        <label>
          <input
            type="text"
            name="fields[myCheckboxesFieldHandle][]"
            value="{{ option.value }}">
          {{ option.label }}
        </label>
      </li>
    {% endfor %}

    {# Provide one more input for new values: #}
    <li>
      <label>
        Other:
        <input
          type="text"
          name="fields[myCheckboxesFieldHandle][]">
      </label>
    </li>
  {% endif %}
</ul>
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/checkboxes.md)
