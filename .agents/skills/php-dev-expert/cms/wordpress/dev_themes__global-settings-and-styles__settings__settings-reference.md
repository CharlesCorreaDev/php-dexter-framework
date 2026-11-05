# Settings Reference – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/global-settings-and-styles/settings/settings-reference/

---

# Settings Reference

## In this article

Table of Contents

- [Appearance Tools](#appearance-tools)
- [Border](#border)
- [Color](#color)
- [Custom](#custom)
- [Dimensions](#dimensions)
- [Layout](#layout)
- [Lightbox](#lightbox)
- [Position](#position)
- [Shadow](#shadow)
- [Spacing](#spacing)
- [Typography](#typography)
- [Use Root Padding Aware Alignments](#use-root-padding-aware-alignments)

Copy page
[View as Markdown](dev_themes__global-settings-and-styles__settings__settings-reference.md)

[Back to top](#wp--skip-link--target)

The document is a reference to the available settings properties that you can configure via the `settings` object in `theme.json`. Each of the settings has an in-depth guide on how to use it within the [Settings documentation](dev_themes__global-settings-and-styles__settings.md).

## [Appearance Tools](#appearance-tools)

`settings.appearanceTools` is a top-level property with no sub-properties nested beneath it. It is documented at [Settings: Appearance Tools](https://developer.wordpress.org/global-settings-and-styles/settings/appearance-tools/).

| Property | Type | Default |
| --- | --- | --- |
| `appearanceTools` | boolean | `false` |

## [Border](#border)

`settings.border` is an object that supports the nested properties listed in the below table. It is documented at [Settings: Border](dev_themes__global-settings-and-styles__settings__border.md).

| Property | Type | Default |
| --- | --- | --- |
| `color` | boolean | `false` |
| `radius` | boolean | `false` |
| `style` | boolean | `false` |
| `width` | boolean | `false` |

Enabling any one of the `color`, `style`, or `width` settings will automatically enable the other two since the properties are linked together.

## [Color](#color)

`settings.color` is an object that supports the nested properties listed in the below table. It is documented at [Settings: Color](dev_themes__global-settings-and-styles__settings__color.md).

| Property | Type | Default | Props |
| --- | --- | --- | --- |
| `background` | boolean | `true` | — |
| `custom` | boolean | `true` | — |
| `customDuotone` | boolean | `true` | — |
| `customGradient` | boolean | `true` | — |
| `defaultDuotone` | boolean | `true` | — |
| `defaultGradients` | boolean | `true` | — |
| `defaultPalette` | boolean | `true` | — |
| `duotone` | array <object> | `array` | `colors`, `name`, `slug` |
| `gradients` | array <object> | `array` | `gradient`, `name`, `slug` |
| `link` | boolean | `false` | — |
| `palette` | array <object> | `array` | `color`, `name`, `slug` |
| `text` | boolean | `true` | — |

## [Custom](#custom)

`settings.custom` is an object that supports any number of nested custom properties, as shown in the below table. It is documented at [Settings: Custom](dev_themes__global-settings-and-styles__settings__custom.md).

| Property | Type | Default |
| --- | --- | --- |
| `custom.<custom>` | any | — |

## [Dimensions](#dimensions)

`settings.dimensions` is an object that supports the nested properties listed in the below table. It is documented at [Settings: Dimensions](dev_themes__global-settings-and-styles__settings__dimensions.md).

| Property | Type | Default |
| --- | --- | --- |
| `minHeight` | boolean | `false` |

## [Layout](#layout)

`settings.layout` is an object that supports the nested properties listed in the below table. It is documented at [Settings: Layout](dev_themes__global-settings-and-styles__settings__layout.md).

| Property | Type | Default |
| --- | --- | --- |
| `contentSize` | string | `""` |
| `wideSize` | string | `""` |

## [Lightbox](#lightbox)

`settings.lightbox` is an object that supports the nested properties listed in the below table. It is documented at [Settings: Lightbox](dev_themes__global-settings-and-styles__settings__lightbox.md).

| Property | Type | Default |
| --- | --- | --- |
| `allowEditing` | boolean | `true` |
| `enabled` | boolean | `false` |

This setting is only available as of WordPress 6.4 and is specific to the core Image block (`core/image`).

## [Position](#position)

`settings.position` is an object that supports the nested properties listed in the below table. It is documented at [Settings: Position](dev_themes__global-settings-and-styles__settings__position.md).

| Property | Type | Default |
| --- | --- | --- |
| `sticky` | boolean | `false` |

## [Shadow](#shadow)

`settings.shadow` is an object that supports the nested properties listed in the below table. It is documented at [Settings: Shadow](dev_themes__global-settings-and-styles__settings__shadow.md).

| Property | Type | Default | Props |
| --- | --- | --- | --- |
| `defaultPresets` | boolean | `true` |  |
| `presets` | array <object> | `array` | `name`, `shadow`, `slug` |

## [Spacing](#spacing)

`settings.spacing` is an object that supports the nested properties listed in the below table. It is documented at [Settings: Spacing](dev_themes__global-settings-and-styles__settings__spacing.md).

| Property | Type | Default | Props |
| --- | --- | --- | --- |
| `blockGap` | boolean|null | `null` | — |
| `customSpacingSize` | boolean | `true` | — |
| `margin` | boolean | `false` | — |
| `padding` | boolean | `false` | — |
| `spacingScale` | object | `object` | `operator`, `increment`, `steps`, `mediumStep`, `unit` |
| `spacingSizes` | array <object> | `array` | `name`, `size`, `slug` |
| `units` | array <string> | `[ "px", "em", "rem", "vh", "vw", "%" ]` | — |

## [Typography](#typography)

`settings.typography` is an object that supports the nested properties listed in the below table. It is documented at [Settings: Typography](dev_themes__global-settings-and-styles__settings__typography.md).

| Property | Type | Default | Props |
| --- | --- | --- | --- |
| `customFontSize` | boolean | `true` | — |
| `dropCap` | boolean | `true` | — |
| `fontFamilies` | array <object> | `array` | `fontFace`, `fontFamily`, `name`, `slug` |
| `fontSizes` | array <object> | `array` | `fluid`, `name`, `size`, `slug` |
| `fontStyle` | boolean | `true` | — |
| `fontWeight` | boolean | `true` | — |
| `fluid` | boolean | `false` | — |
| `letterSpacing` | boolean | `true` | — |
| `lineHeight` | boolean | `false` | — |
| `textColumns` | boolean | `false` | — |
| `textDecoration` | boolean | `true` | — |
| `textTransform` | boolean | `true` | — |
| `writingMode` | boolean | `false` | — |

## [Use Root Padding Aware Alignments](#use-root-padding-aware-alignments)

`settings.useRootPaddingAwareAlignments` is a top-level property with no sub-properties nested beneath it. It is documented at [Settings: Use Root Padding Aware Alignments](dev_themes__global-settings-and-styles__settings__use-root-padding-aware-alignments.md).

| Property | Type | Default |
| --- | --- | --- |
| `useRootPaddingAwareAlignments` | boolean | `false` |

This setting works together with `styles.spacing.padding` in `theme.json`. If enabled, `styles.spacing.padding` must be an object that defines the `top`, `right`,  `bottom`, and `left` styles separately.

First published

October 17, 2023

Last updated

October 14, 2025

[Previous
Use Root Padding Aware Alignments
Previous: Use Root Padding Aware Alignments](dev_themes__global-settings-and-styles__settings__use-root-padding-aware-alignments.md)

[Next
Styles
Next: Styles](dev_themes__global-settings-and-styles__styles.md)
