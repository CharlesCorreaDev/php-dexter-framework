# Settings – Theme Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/themes/global-settings-and-styles/settings/

---

# Settings

## In this article

Table of Contents

- [The settings property](#the-settings-property)
- [Settings documentation](#settings-documentation)

Copy page
[View as Markdown](dev_themes__global-settings-and-styles__settings.md)

[Back to top](#wp--skip-link--target)

The `settings` property in `theme.json` lets you configure a wide range of settings for a WordPress install. It covers everything from color presets, to enabling typography design tools, to layout, and a little bit of everything in between.

This document contains links for learning about each of these settings, which have their own individual documentation pages.

## [The settings property](#the-settings-property)

`settings` is a top-level property in `theme.json` and has multiple nested properties that you can define. And some of those nested properties have multiple levels of nesting of their own.

The following is an overarching look at these properties in the context of a `theme.json` file:

```
{
	"version": 2,
	"settings": {
		"appearanceTools": false,
		"border": {},
		"color": {},
		"custom": {},
		"dimensions": {},
		"layout": {},
		"position": {},
		"shadow": {},
		"spacing": {},
		"typography": {},
		"useRootPaddingAwareAlignments": false,
		"blocks": {}
	}
}
```

## [Settings documentation](#settings-documentation)

Use the following links to explore specific settings that you can configure in your `theme.json` file:

- **[`appearanceTools`](dev_themes__global-settings-and-styles__settings__appearance-tools.md):** A catchall setting for enabling multiple other settings.
- **`border`:** Used for controlling the border width, style, color, and radius.
- **[`color`](dev_themes__global-settings-and-styles__settings__color.md):** Lets you register a color palette, gradients, duotone and configure color-related settings.
- [`custom`](dev_themes__global-settings-and-styles__settings__custom.md): An object for adding custom settings, which are output as CSS custom properties.
- **[`dimensions`](dev_themes__global-settings-and-styles__settings__dimensions.md):** Lets you configure the minimum height setting.
- **[`layout`](dev_themes__global-settings-and-styles__settings__layout.md):** Used for setting layout properties like the content and wide widths.
- **[`lightbox`](dev_themes__global-settings-and-styles__settings__lightbox.md):** Lets you configure the image lightbox feature.
- **[`position`](dev_themes__global-settings-and-styles__settings__position.md):** Currently lets you define support for sticky positioning.
- **[`shadow`](dev_themes__global-settings-and-styles__settings__shadow.md):** Lets you configure box-shadow support and define custom shadow presets.
- **[`spacing`](dev_themes__global-settings-and-styles__settings__spacing.md):** Used for configuring spacing-related settings, such as margin and padding,
- **[`typography`](dev_themes__global-settings-and-styles__settings__typography.md):** Used for configuring typography-related settings, defining custom font sizes, and registering font families.
- **[`useRootPaddingAwareAlignments`](dev_themes__global-settings-and-styles__settings__use-root-padding-aware-alignments.md):** A boolean setting for how padding on the root element should work.
- **[`blocks`](dev_themes__global-settings-and-styles__settings__blocks.md):** An object for configuring per-block settings.

The Theme Handbook also maintains a [reference for available settings](dev_themes__global-settings-and-styles__settings__settings-reference.md) based on the `theme.json` schema.

First published

October 10, 2023

Last updated

May 20, 2026

[Previous
Introduction to theme.json
Previous: Introduction to theme.json](dev_themes__global-settings-and-styles__introduction-to-theme-json.md)

[Next
Appearance Tools
Next: Appearance Tools](dev_themes__global-settings-and-styles__settings__appearance-tools.md)
