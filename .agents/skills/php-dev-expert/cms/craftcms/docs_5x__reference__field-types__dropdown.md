# Dropdown Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/dropdown

---

# Dropdown Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__dropdown.md#settings)
  - [Development](docs_5x__reference__field-types__dropdown.md#development)

Dropdown fields provide an enhanced version of the familiar `<select>` input. Optional colors and icons help authors quickly identify choices.  [5.7.0+](https://github.com/craftcms/cms/blob/5.7.0/CHANGELOG.md "Color and icon support in dropdown fields. was first available in version 5.7.0 of Craft.")

![Screenshot of the dropdown field interface in the Craft control panel](/docs/assets/img/fields-dropdown-ui.9737e4ac.png)

## [#](#settings)Settings

my-craft-project.ddev.site/admin/settings/fields/new

![Dropdown field settings screen in the Craft control panel](/docs/assets/img/fields-dropdown-settings.2dd339ef.png)

Adding a new dropdown field via the control panel.

Dropdown fields have the following settings:

- **Dropdown Options** — Define any number of options to populate the menu.
  - **Label** — A text description of the option, displayed to the author.
  - **Value** — The value stored when a given option is selected.
  - **Icon** (Optional) — Choose from the standard system icon palette.
  - **Color** (Optional) — A color for the icon, or, when no icon is selected, a color pip.
  - **Default?** — One option can be marked as the default.

Unlike the [radio buttons](docs_5x__reference__field-types__radio-buttons.md) field, dropdown fields do not accept custom values from authors. If you need to select multiple values, consider the [checkboxes](docs_5x__reference__field-types__checkboxes.md) field.

If you change the underlying value of an option that is used by existing entries, Craft will select the designated default option the next time one of those elements is edited.

Consider using the appropriate [`resave/*` console commands](docs_5x__reference__cli.md#resave) to migrate existing data to your new value:

```
php craft resave/entries --section mySection --set myDropdownField --to "={{ object.myDropdownField.value == 'oldValue' ? 'newValue' : object.myDropdownField.value }}"
```

## [#](#development)Development

### [#](#querying-elements-with-dropdown-fields)Querying Elements with Dropdown Fields

When [querying for elements](docs_5x__development__element-queries.md) that have a Dropdown field, you can filter the results based on the Dropdown field data using a query param named after your field’s handle.

Possible values include:

| Value | Fetches elements… |
| --- | --- |
| `'foo'` | with a `foo` option selected. |
| `'not foo'` | without a `foo` option selected. |
| `['foo', 'bar']` | with either a `foo` or `bar` option selected. |
| `['not', 'foo', 'bar']` | without either a `foo` or `bar` option selected. |

TwigPHP

```
{# Fetch entries with the 'foo' option selected #}
{% set entries = craft.entries()
  .myFieldHandle('foo')
  .all() %}
```

```
// Fetch entries with the 'foo' option selected
$entries = \craft\elements\Entry::find()
    ->myFieldHandle('foo')
    ->all();
```

### [#](#working-with-dropdown-field-data)Working with Dropdown Field Data

If you have an element with a Dropdown field in your template, you can access its data using your Dropdown field’s handle:

TwigPHP

```
{% set value = entry.myFieldHandle %}
```

```
$value = $entry->myFieldHandle;
```

That will give you a [craft\fields\data\SingleOptionFieldData  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-singleoptionfielddata.html) object that contains the field data.

To show the selected option, output it as a string, or output the [value  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-singleoptionfielddata.html#property-value) property:

```
{{ entry.myFieldHandle }} or {{ entry.myFieldHandle.value }}
```

To see if an option is selected, use the [value  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-singleoptionfielddata.html#property-value) property:

```
{% if entry.myFieldHandle.value %}
```

To show the selected option’s label, output the [label  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-singleoptionfielddata.html#property-label) property:

```
{{ entry.myFieldHandle.label }}
```

To loop through all of the available options, iterate over the [options  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-singleoptionfielddata.html#method-getoptions) property:

```
{% for option in entry.myFieldHandle.options %}
  Label:    {{ option.label }}
  Value:    {{ option }} or {{ option.value }}
  Selected: {{ option.selected ? 'Yes' : 'No' }}
{% endfor %}
```

### [#](#saving-dropdown-fields)Saving Dropdown Fields

If you have an element form, such as an [entry form  (opens new window)](https://craftcms.com/knowledge-base/entry-form), that needs to contain a Dropdown field, you can use this template as a starting point:

```
{% set field = craft.app.fields.getFieldByHandle('myFieldHandle') %}

<select name="fields[myFieldHandle]">
  {% for option in field.options %}
    {% set selected = entry is defined
      ? entry.myFieldHandle.value == option.value
      : option.default %}

    <option value="{{ option.value }}"
      {% if selected %}selected{% endif %}
    >
      {{ option.label }}
    </option>
  {% endfor %}
</select>
```

### [#](#graphql)GraphQL

Dropdown fields (and the similar [button group](docs_5x__reference__field-types__button-group.md) and [radio buttons](docs_5x__reference__field-types__radio-buttons.md) fields) return a single string (or `null`) when selected in a GraphQL query:

QueryResponse

```
query Reviews {
  entries(section: "reviews") {
    title
    postDate

    ... on review_Entry {
    	sentiment
    }
  }
}
```

```
{
  "data": {
    "entries": [
      {
        "title": "Meh…",
        "postDate": "2025-05-07T10:30:00-07:00",
        "sentiment": "neutral"
      },
      {
        "title": "Undecided",
        "postDate": "2025-05-07T10:20:00-07:00",
        "sentiment": null
      },
      {
        "title": "Disappointed!",
        "postDate": "2025-05-07T10:10:00-07:00",
        "sentiment": "miserable"
      },
      {
        "title": "Out-of-this-world!",
        "postDate": "2025-05-07T10:00:00-07:00",
        "sentiment": "awesome"
      }
    ]
  }
}
```

Fields can also be used as query arguments:

QueryResponse

```
query ReviewTally {
  positive: entryCount(section: "reviews", sentiment: "awesome")
  negative: entryCount(section: "reviews", sentiment: "miserable")
  impartial: entryCount(section: "reviews", sentiment: ["neutral", null])
}
```

```
{
  "data": {
    "positive": 1,
    "negative": 1,
    "impartial": 2
  }
}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/dropdown.md)
