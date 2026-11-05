# Icon Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/icon

---

# Icon Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__icon.md#settings)
  - [Development](docs_5x__reference__field-types__icon.md#development)

Icon fields allow the user to pick icons that fit the control panel’s style from the [FontAwesome  (opens new window)](https://fontawesome.com) library. The field’s value can be used to decorate related or nested element chips and cards by enabling **Use this field’s values for element thumbnails** or **Include this field in element cards** when adding it to a field layout.

Prior to Craft 5.8.0, only a portion of the FontAwesome library was available. We no longer editorialize, and expose the entire 6.x suite.

## [#](#settings)Settings

The icons field has these settings:

- **Include Pro Icons** — Makes FontAwesome Pro icons available for selection. *You may need to purchase a FontAwesome Pro license to use icons in your site’s front-end.*
- **Advanced**
  - **GraphQL Mode**  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Customizing icon field value styles was first available in version 5.8.0 of Craft.") — Choose how this field is represented in the GraphQL API. **Name only** returns only the icon identifier; **Full data** allows selection of the `name` and `styles`.

Icon fields created prior to Craft 5.8.0 retain the **Name only** mode. New fields default to **Full data**.

## [#](#development)Development

The saved value is suitable for use in the front-end with your own FontAwesome library.

### [#](#webfonts)Webfonts

Following the official [web fonts tutorial  (opens new window)](https://fontawesome.com/docs/web/setup/host-yourself/webfonts), you might display an icon like this:

```
<i class="fa-solid fa-{{ entry.myIconField }}"></i>
```

Change `fa-solid` to another style identifier to suit your site’s appearance!

If you added the FontAwesome files in `web/assets/fontawesome/*`, you would link to one or more style sheets like this:

```
{% css '/assets/fontawesome/fontawesome.css' %}
{% css '/assets/fontawesome/solid.css' %}
```

You can add [`css` tags](docs_5x__reference__twig__tags.md#css) like this anywhere in your code and Craft will hoist them into the `<head>` of the document!

### [#](#svg-js)SVG + JS

The same HTML will work with the recommendations in the [SVG + JS tutorial  (opens new window)](https://fontawesome.com/docs/web/setup/host-yourself/svg-js).

### [#](#styles)Styles [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Customizing icon field value styles was first available in version 5.8.0 of Craft.")

Some icons are present in multiple sets or “styles.” You can check support for a given style using the `styles` property of an icon field:

```
{{ tag('i', {
    class: [
        'brands' in entry.myIconField.styles ? 'fa-brands' : 'fa-solid',
        "fa-#{entry.myIconField.name}",
    ],
}) }}
```

### [#](#saving-icon-field-data)Saving Icon Field Data

The process for submitting icon field data to Craft (via an [element or entry form  (opens new window)](https://craftcms.com/knowledge-base/entry-form)) is the same as any other field that contains text, like a [dropdown](docs_5x__reference__field-types__dropdown.md) field:

```
{# Set up a custom map of icon names and labels: #}
{% set iconMap = {
    'github': 'Github',
    'stack-overflow': 'StackOverflow',
    'gitlab': 'Gitlab',
} %}

<select name="fields[myIconFieldHandle]">
  {% for name, label in iconMap %}
    {{ tag('option', {
      text: label,
      value: name,
      selected: entry.myIconFieldHandle.name == name,
    }) }}
  {% endfor %}
</select>
```

The FontAwesome library does not include user-facing labels for icons. We recommend maintaining your own abbreviated list of icons, or populating a [dropdown](docs_5x__reference__field-types__dropdown.md) field with a subset of icon names that you expect users to need.

Note that validation of icon field values is performed against the *entire* library.

### [#](#graphql)GraphQL

Depending on the **GraphQL Mode** setting  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Customizing icon field value styles was first available in version 5.8.0 of Craft."), the icon field will contain different sub-selections:

Name onlyFull data

```
query Contacts {
  entries(
    section: "contacts"
  ) {
    id
    title

    ... on contact_Entry {
      phone
      myIconFieldHandle
    }
  }
}
```

```
query Contacts {
  entries(
    section: "contacts"
  ) {
    id
    title

    ... on contact_Entry {
      phone
      myIconFieldHandle {
        name
        styles
      }
    }
  }
}
```

**Name only** returns a string; **Full data** requires a selection of `name` and/or `styles` fields. The `name` sub-selection is equivalent to the value returned by **Name only**.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/icon.md)
