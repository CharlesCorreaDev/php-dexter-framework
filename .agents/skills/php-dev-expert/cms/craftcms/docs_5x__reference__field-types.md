# Custom Field Types | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/

---

# Custom Field Types

- ### On this Page

  - [All Fields](docs_5x__reference__field-types.md#all-fields)
  - [Data Types](docs_5x__reference__field-types.md#data-types)

Craft has over 20 built-in field types that help create tightly-tailored authoring and developer experiences. The table below lists fields in the same order you’ll encounter them in the [control panel](docs_5x__system__control-panel.md); you can also browse them by the [type of data](#data-types) they store.

[Fields + Content
→

Get started with fields in Craft.](docs_5x__reference__field-types.md)

## [#](#all-fields)All Fields

| Field Type | Description |
| --- | --- |
| [Addresses](docs_5x__reference__field-types__addresses.md) | Manage nested [address](docs_5x__reference__element-types__addresses.md) elements. |
| [Assets](docs_5x__reference__field-types__assets.md) | Relate [asset](docs_5x__reference__element-types__assets.md) elements. |
| [Button Group](docs_5x__reference__field-types__button-group.md) | Choose a single item from a graphical, icon-based toolbar. |
| [Categories](docs_5x__reference__field-types__categories.md) | Relate [category](docs_5x__reference__element-types__categories.md) elements. |
| [Checkboxes](docs_5x__reference__field-types__checkboxes.md) | Choose one or more predefined options using `checkbox` inputs. |
| [Color](docs_5x__reference__field-types__color.md) | Pick a color with your platform’s native color picker—or provide a hexadecimal value. |
| [Content Block](docs_5x__reference__field-types__content-block.md) | Group other fields in a [nested entry](docs_5x__reference__element-types__entries.md#nested-entries). |
| [Country](docs_5x__reference__field-types__country.md) | Choose from a list of countries in a `select` menu. |
| [Date/Time](docs_5x__reference__field-types__date-time.md) | Set a date, time, and timezone (optional). |
| [Dropdown](docs_5x__reference__field-types__dropdown.md) | Choose a single item from a predefined list using a `select` menu. |
| [Email](docs_5x__reference__field-types__email.md) | Validate input as an email address. |
| [Entries](docs_5x__reference__field-types__entries.md) | Relate [entry](docs_5x__reference__element-types__entries.md) elements. |
| [Icon](docs_5x__reference__field-types__icon.md) | Pick from a palette of icons from [FontAwesome  (opens new window)](https://fontawesome.com). |
| [Lightswitch](docs_5x__reference__field-types__lightswitch.md) | Choose an *on* or *off* value using a switch. |
| [Link](docs_5x__reference__field-types__link.md) | Define a link to an internal or external resource. |
| [Matrix](docs_5x__reference__field-types__matrix.md) | Create [nested entries](docs_5x__reference__element-types__entries.md#nested-entries) from a list of allowed [entry types](docs_5x__reference__element-types__entries.md#entry-types). |
| [Money](docs_5x__reference__field-types__money.md) | Store a value in a specific currency. |
| [Multi-Select](docs_5x__reference__field-types__multi-select.md) | Choose one or more options via a tag-like [Selectize  (opens new window)](https://selectize.dev/) input. |
| [Number](docs_5x__reference__field-types__number.md) | Store a numeric value. |
| [Plain Text](docs_5x__reference__field-types__plain-text.md) | Basic input for any kind of textual value. |
| [Radio Buttons](docs_5x__reference__field-types__radio-buttons.md) | Choose one option from a predefined list. Equivalent to the *Dropdown* field. |
| [Range](docs_5x__reference__field-types__range.md) | Pick a number with a visual slider. |
| [Table](docs_5x__reference__field-types__table.md) | Store repeating rows of simple values. |
| [Tags](docs_5x__reference__field-types__tags.md) | Relate [tag](docs_5x__reference__element-types__tags.md) elements. |
| [Time](docs_5x__reference__field-types__time.md) | Choose a time *without* a date. |
| [Users](docs_5x__reference__field-types__users.md) | Relate [user](docs_5x__reference__element-types__users.md) elements. |

## [#](#data-types)Data Types

Not sure which field type to use? This list is organized by the types of values that each field stores. Each field may appear in multiple groups!

### [#](#text)Text

Arbitrary and predefined strings.

- [Plain Text](docs_5x__reference__field-types__plain-text.md) — Single- or multi-line text of any length.
- [Dropdown](docs_5x__reference__field-types__dropdown.md) — A fixed set of options to choose from.
- [Radio Buttons](docs_5x__reference__field-types__radio-buttons.md) — Same as a dropdown, but allows “custom” values.
- [Country](docs_5x__reference__field-types__country.md) — A specific set of values used to populate addresses.
- [Email](docs_5x__reference__field-types__email.md) — Validate an email address. (See: [Link](docs_5x__reference__field-types__link.md))

Our first-party [CKEditor  (opens new window)](https://plugins.craftcms.com/ckeditor) plugin provides a powerful rich text composer that also supports [nested entries](docs_5x__reference__element-types__entries.md#nested-entries).

### [#](#booleans)Booleans

On or off; yes or no; 1 or 0; true or false!

- [Lightswitch](docs_5x__reference__field-types__lightswitch.md) — A single on/off switch.
- [Checkboxes](docs_5x__reference__field-types__checkboxes.md) — Capture multiple binary settings at once.

### [#](#numbers)Numbers

- [Money](docs_5x__reference__field-types__money.md) — A safer way to store currency values.
- [Number](docs_5x__reference__field-types__number.md) — Single numeric value with controls for min/max values and precision.
- [Range](docs_5x__reference__field-types__range.md) — A number field with an additional slider UI for tactile selection.

### [#](#date-time)Date + Time

These fields yield `DateTime` objects that can be conveniently compared, queried, and formatted in templates.

- [Date](docs_5x__reference__field-types__date-time.md) — Capture a date *and* time.
- [Time](docs_5x__reference__field-types__time.md) — Store only the time of day.

### [#](#lists)Lists

Sometimes, you need more than a single value!

- [Checkboxes](docs_5x__reference__field-types__checkboxes.md) — Select any number of predefined options, or let authors set one manually.
- [Matrix](docs_5x__reference__field-types__matrix.md) — Manage nested entries as an embedded element index or inline blocks.
- [Multi-Select](docs_5x__reference__field-types__multi-select.md) — A rudimentary multi-select input, without manual options.
- [Table](docs_5x__reference__field-types__table.md) — Repeatable rows of simple data.

Most of the fields in the [references](#references) section allow you to attach multiple relationships, as well.

### [#](#references)References

Create [relationships](docs_5x__system__relations.md) to content, on- or off-site.

- [Link](docs_5x__reference__field-types__link.md) — Flexible input for multiple kinds of locators, like URLs, element relationships, phone numbers, and email addresses.
- [Assets](docs_5x__reference__field-types__categories.md) — Connect uploaded [media](#media) to any element.
- [Categories](docs_5x__reference__field-types__categories.md) — Organize elements into hierarchical [taxonomies](#taxonomies).
- [Entries](docs_5x__reference__field-types__entries.md) — Relate content to or from anywhere!
- [Tags](docs_5x__reference__field-types__tags.md) — Organize elements into a flat “[folksonomy](#taxonomies).”
- [Users](docs_5x__reference__field-types__users.md) — Associate users with any type of content.

### [#](#taxonomies)Taxonomies

Help users and authors understand content by establishing explicit connections.

- [Categories](docs_5x__reference__field-types__categories.md) — Connect content to hierarchical structures.
- [Tags](docs_5x__reference__field-types__tags.md) — Expressive, ad-hoc organization.
- [Entries](docs_5x__reference__field-types__entries.md) — Anything can be a taxonomy!

You can even attach fields to the elements you relate via these fields—metadata for your metadata!

### [#](#media)Media

- [Assets](docs_5x__reference__field-types__assets.md) — Upload and attach files to anything.

### [#](#structured)Structured

Manage nested data.

- [Addresses](docs_5x__reference__field-types__addresses.md)
- [Content Block](docs_5x__reference__field-types__content-block.md)  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "The Content Block field was first available in version 5.8.0 of Craft.")
- [Matrix](docs_5x__reference__field-types__matrix.md)
- [Table](docs_5x__reference__field-types__table.md)

Have a complex content model? You can nest entries as deeply as you want!

### [#](#fun-cosmetic)Fun + Cosmetic

Spruce up the authoring experience with these dedicated UIs.

- [Color](docs_5x__reference__field-types__color.md) — Select from a palette of colors, or choose a new one.
- [Button Group](docs_5x__reference__field-types__button-group.md) — Choose from options identified by an icon—great for layout, positioning, and scale controls
- [Icon](docs_5x__reference__field-types__icon.md) — Pick from a library of icons.
- [Money](docs_5x__reference__field-types__money.md) — Input values in a specific currency.
- [Range](docs_5x__reference__field-types__range.md) — Contextualize numeric values.

The [Content Block](docs_5x__reference__field-types__content-block.md) field can be also be used to semantically and structurally group (and reuse!) a set of fields.  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "The Content Block field was first available in version 5.8.0 of Craft.")

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/README.md)
