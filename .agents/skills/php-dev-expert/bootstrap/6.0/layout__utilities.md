# Utilities for layout · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/layout/utilities

---

# Utilities for layout

For faster mobile-friendly and responsive development, Bootstrap includes dozens of utility classes for showing, hiding, aligning, and spacing content.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/layout/utilities)

On this page…

##### On this page

## Changing `display`

Use our [display utilities](utilities__display.md) for responsively toggling common values of the `display` property. Mix it with our grid system, content, or components to show or hide them across specific viewports.

## Flexbox options

Bootstrap is built with flexbox, but not every element’s `display` has been changed to `display: flex` as this would add many unnecessary overrides and unexpectedly change key browser behaviors. Most of [our components](components__alerts.md) are built with flexbox enabled.

Should you need to add `display: flex` to an element, do so with `.d-flex` or one of the responsive variants (e.g., `.sm:d-flex`). You’ll need this class or `display` value to allow the use of our extra [flexbox utilities](utilities__flex.md) for sizing, alignment, spacing, and more.

## Margin and padding

Use the [margin](utilities__margin.md) and [padding](utilities__padding.md) utilities to control how elements and components are spaced and sized. Bootstrap includes a 13-step scale for spacing utilities, based on a default `$spacer` value of `1rem`. Choose values for all viewports (e.g., `.me-5` for `margin-inline-end: 1rem`), or use responsive variants to target specific viewports (e.g., `.md:me-5` starting at the `md` breakpoint).

## Toggle `visibility`

When toggling `display` isn’t needed, you can toggle the `visibility` of an element with our [visibility utilities](utilities__visibility.md). Invisible elements will still affect the layout of the page, but are visually hidden from visitors.
