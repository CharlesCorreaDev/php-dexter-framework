# Color Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/color

---

# Color Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__color.md#settings)
  - [Development](docs_5x__reference__field-types__color.md#development)
  - [Querying by Color](docs_5x__reference__field-types__color.md#querying-by-color)

Color fields provide a flexible way to store hexadecimal color values. You can define a [palette](#palette) to guide authors  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Color field palettes was first available in version 5.6.0 of Craft."), or use an [open-ended input](#custom-colors).

![Screenshot of a color field interface in the Craft control panel](/docs/assets/img/fields-color-ui.d4be3468.png)

## [#](#settings)Settings

my-craft-project.ddev.site/admin/settings/fields/new

![Color field settings screen in the Craft control panel](/docs/assets/img/fields-color-settings.39f151ca.png)

Adding a new color field via the control panel.

### [#](#palette)Palette

Each field contains a **Palette** of colors that authors can select from a dropdown menu.

### [#](#custom-colors)Custom Colors

Turn on **Allow custom colors** to display a compact input and color preview UI. When used in conjunction with a palette, an additional **Custom…** option is listed at the bottom of the dropdown menu.

In [browsers that support `<input type="color">`  (opens new window)](https://caniuse.com/input-color), clicking on the color preview “well” opens a native OS color picker.

## [#](#development)Development

Accessing a color field returns a [craft\fields\data\ColorData  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-colordata.html) object, or `null` if no color was selected.

Casting a `ColorData` object to a string by outputting it directly produces a hexadecimal representation of the color:

TwigPHP

```
{% if entry.myColorField %}
  <style type="text/css">
    .content a {
      {# Directly outputting the value... #}
      color: {{ entry.myColorField }};
    }
    .content b {
      {# ...is equivalent to: #}
      color: {{ entry.myColorField.getHex() }};
    }
  </style>
{% endif %}
```

```
if ($entry->myColorField) {
    echo $entry->myColorField;
    // …is equivalent to…
    echo $entry->myColorField->getHex();
}
```

`ColorData` objects have a number of methods that streamline working with color values:

TwigPHP

```
{% if entry.myColorField %}
  {{ entry.myColorField }}                 {# output: #e5422b #}
  {{ entry.myColorField.getHex() }}        {# output: #e5422b #}
  {{ entry.myColorField.getRgb() }}        {# output: rgb(229,66,43) #}
  {{ entry.myColorField.getHsl() }}        {# output: hsl(7,81%,90%) #}
  {{ entry.myColorField.getLuma() }}       {# output: 0.38820862745098 #}
  {{ entry.myColorField.getHue() }}        {# output: 7 #}
  {{ entry.myColorField.getLightness() }}  {# output: 90 #}
  {{ entry.myColorField.getSaturation() }} {# output: 81 #}
  {{ entry.myColorField.getRed() }}        {# output: 229 #}
  {{ entry.myColorField.getGreen() }}      {# output: 66 #}
  {{ entry.myColorField.getBlue() }}       {# output: 43 #}
{% endif %}
```

```
if ($entry->myColorField) {
    echo $entry->myColorField;                  // output: #e5422b
    echo $entry->myColorField->getHex();        // output: #e5422b
    echo $entry->myColorField->getRgb();        // output: rgb(229,66,43)
    echo $entry->myColorField->getHsl();        // output: hsl(7,81%,90%)
    echo $entry->myColorField->getLuma();       // output: 0.38820862745098
    echo $entry->myColorField->getHue();        // output: 7
    echo $entry->myColorField->getLightness();  // output: 90
    echo $entry->myColorField->getSaturation(); // output: 81
    echo $entry->myColorField->getRed();        // output: 229
    echo $entry->myColorField->getGreen();      // output: 66
    echo $entry->myColorField->getBlue();       // output: 43
}
```

You may also access any of the color components as properties:  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Accessing color data components as properties was first available in version 5.8.0 of Craft.")

```
{{ entry.myColorField.hex }}
{{ entry.myColorField.rgb }}
{# ... #}
```

Refer to the [`ColorData`  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-data-colordata.html) class reference for a complete list of methods!

## [#](#querying-by-color)Querying by Color

There are no special query features for color fields; refer to the [plain text](docs_5x__reference__field-types__plain-text.md) field for a list of standard string comparison syntaxes.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/color.md)
