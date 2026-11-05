# Colors · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/colors

---

# Colors

Convey meaning through `color` with a handful of color utility classes, including built-in color mode adaptivity and support for translucency.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/colors)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .fg-primary | --bs-fg: var(--bs-primary-fg); color: var(--bs-fg); |
| .fg-accent | --bs-fg: var(--bs-accent-fg); color: var(--bs-fg); |
| .fg-success | --bs-fg: var(--bs-success-fg); color: var(--bs-fg); |
| .fg-danger | --bs-fg: var(--bs-danger-fg); color: var(--bs-fg); |
| .fg-warning | --bs-fg: var(--bs-warning-fg); color: var(--bs-fg); |
| .fg-info | --bs-fg: var(--bs-info-fg); color: var(--bs-fg); |
| .fg-inverse | --bs-fg: var(--bs-inverse-fg); color: var(--bs-fg); |
| .fg-secondary | --bs-fg: var(--bs-secondary-fg); color: var(--bs-fg); |
| .fg-body | --bs-fg: var(--bs-fg-body); color: var(--bs-fg); |
| .fg-1 | --bs-fg: var(--bs-fg-1); color: var(--bs-fg); |
| .fg-2 | --bs-fg: var(--bs-fg-2); color: var(--bs-fg); |
| .fg-3 | --bs-fg: var(--bs-fg-3); color: var(--bs-fg); |
| .fg-4 | --bs-fg: var(--bs-fg-4); color: var(--bs-fg); |
| .fg-bg | --bs-fg: var(--bs-fg-bg); color: var(--bs-fg); |
| .fg-white | --bs-fg: var(--bs-fg-white); color: var(--bs-fg); |
| .fg-black | --bs-fg: var(--bs-fg-black); color: var(--bs-fg); |
| .fg-reset | --bs-fg: inherit; color: var(--bs-fg); |
| .fg-emphasis-primary | --bs-fg: var(--bs-primary-fg-emphasis); color: var(--bs-fg); |
| .fg-emphasis-accent | --bs-fg: var(--bs-accent-fg-emphasis); color: var(--bs-fg); |
| .fg-emphasis-success | --bs-fg: var(--bs-success-fg-emphasis); color: var(--bs-fg); |
| .fg-emphasis-danger | --bs-fg: var(--bs-danger-fg-emphasis); color: var(--bs-fg); |
| .fg-emphasis-warning | --bs-fg: var(--bs-warning-fg-emphasis); color: var(--bs-fg); |
| .fg-emphasis-info | --bs-fg: var(--bs-info-fg-emphasis); color: var(--bs-fg); |
| .fg-emphasis-inverse | --bs-fg: var(--bs-inverse-fg-emphasis); color: var(--bs-fg); |
| .fg-emphasis-secondary | --bs-fg: var(--bs-secondary-fg-emphasis); color: var(--bs-fg); |
| .fg-10 | color: color-mix(in oklch, var(--bs-fg) 10%, transparent); |
| .fg-20 | color: color-mix(in oklch, var(--bs-fg) 20%, transparent); |
| .fg-30 | color: color-mix(in oklch, var(--bs-fg) 30%, transparent); |
| .fg-40 | color: color-mix(in oklch, var(--bs-fg) 40%, transparent); |
| .fg-50 | color: color-mix(in oklch, var(--bs-fg) 50%, transparent); |
| .fg-60 | color: color-mix(in oklch, var(--bs-fg) 60%, transparent); |
| .fg-70 | color: color-mix(in oklch, var(--bs-fg) 70%, transparent); |
| .fg-80 | color: color-mix(in oklch, var(--bs-fg) 80%, transparent); |
| .fg-90 | color: color-mix(in oklch, var(--bs-fg) 90%, transparent); |
| .fg-100 | color: var(--bs-fg); |
| .fg-contrast-primary | --bs-fg: var(--bs-primary-contrast); color: var(--bs-fg); |
| .fg-contrast-accent | --bs-fg: var(--bs-accent-contrast); color: var(--bs-fg); |
| .fg-contrast-success | --bs-fg: var(--bs-success-contrast); color: var(--bs-fg); |
| .fg-contrast-danger | --bs-fg: var(--bs-danger-contrast); color: var(--bs-fg); |
| .fg-contrast-warning | --bs-fg: var(--bs-warning-contrast); color: var(--bs-fg); |
| .fg-contrast-info | --bs-fg: var(--bs-info-contrast); color: var(--bs-fg); |
| .fg-contrast-inverse | --bs-fg: var(--bs-inverse-contrast); color: var(--bs-fg); |
| .fg-contrast-secondary | --bs-fg: var(--bs-secondary-contrast); color: var(--bs-fg); |

Accessibility Tip: Using color to convey meaning

Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies like screen readers. Please ensure the meaning is obvious from the content itself (e.g., the visible text with a [*sufficient* color contrast](getting-started__accessibility.md#color-contrast)) or is included through alternative means, such as additional text hidden with the `.visually-hidden` class.

## Colors

Change the `color` using utilities built on our theme colors using `.fg-{color}` and `.fg-emphasis-{color}`. All these color utilities set the `color` property to a local CSS variable, `--bs-fg`, which has the value of the theme color. The root color tokens color values also use `light-dark()` to ensure sufficient contrast in both light and dark color modes.

For example, `.fg-primary` sets the `--bs-fg` variable to `var(--bs-primary-fg)`:

CSS

```
          .fg-primary {
  --bs-fg: var(--bs-primary-fg);
  color: var(--bs-fg);
}
```

This approach allows us to also easily support translucency with our `.fg-{opacity}` utilities as we can use `color-mix()` with the CSS variable to generate the appropriate color. See the [opacity section](#opacity) for more details.

If you want to colorize links, you can use the [`.link-{color}` utilities](utilities__link.md) which have `:hover` and `:focus` states.

.fg-primary

.fg-emphasis-primary

.fg-accent

.fg-emphasis-accent

.fg-success

.fg-emphasis-success

.fg-danger

.fg-emphasis-danger

.fg-warning

.fg-emphasis-warning

.fg-info

.fg-emphasis-info

.fg-inverse

.fg-emphasis-inverse

.fg-secondary

.fg-emphasis-secondary

.fg-body

.fg-1

.fg-2

.fg-3

.fg-4

.fg-black

.fg-white

HTML

```
<p class="fg-primary">.fg-primary</p>
<p class="fg-emphasis-primary">.fg-emphasis-primary</p>
<p class="fg-accent">.fg-accent</p>
<p class="fg-emphasis-accent">.fg-emphasis-accent</p>
<p class="fg-success">.fg-success</p>
<p class="fg-emphasis-success">.fg-emphasis-success</p>
<p class="fg-danger">.fg-danger</p>
<p class="fg-emphasis-danger">.fg-emphasis-danger</p>
<p class="fg-warning">.fg-warning</p>
<p class="fg-emphasis-warning">.fg-emphasis-warning</p>
<p class="fg-info">.fg-info</p>
<p class="fg-emphasis-info">.fg-emphasis-info</p>
<p class="fg-inverse">.fg-inverse</p>
<p class="fg-emphasis-inverse">.fg-emphasis-inverse</p>
<p class="fg-secondary">.fg-secondary</p>
<p class="fg-emphasis-secondary">.fg-emphasis-secondary</p>

<p class="fg-body">.fg-body</p>
<p class="fg-1">.fg-1</p>
<p class="fg-2">.fg-2</p>
<p class="fg-3">.fg-3</p>
<p class="fg-4">.fg-4</p>

<p class="fg-black bg-white">.fg-black</p>
<p class="fg-white bg-black">.fg-white</p>
```

## Opacity

Change the opacity of a text color by using any of the `.fg-<percentage>` utilities which use `color-mix()` to mix the text color with `transparent` thanks to the CSS variable approach mentioned above.

This is default primary text

This is 90% opacity primary text

This is 80% opacity primary text

This is 70% opacity primary text

This is 60% opacity primary text

This is 50% opacity primary text

This is 40% opacity primary text

This is 30% opacity primary text

This is 20% opacity primary text

This is 10% opacity primary text

HTML

```
<div class="fg-primary">This is default primary text</div>
<div class="fg-primary fg-90">This is 90% opacity primary text</div>
<div class="fg-primary fg-80">This is 80% opacity primary text</div>
<div class="fg-primary fg-70">This is 70% opacity primary text</div>
<div class="fg-primary fg-60">This is 60% opacity primary text</div>
<div class="fg-primary fg-50">This is 50% opacity primary text</div>
<div class="fg-primary fg-40">This is 40% opacity primary text</div>
<div class="fg-primary fg-30">This is 30% opacity primary text</div>
<div class="fg-primary fg-20">This is 20% opacity primary text</div>
<div class="fg-primary fg-10">This is 10% opacity primary text</div>
```

## Contrast colors

Change the contrast color of a text or link with `.fg-contrast-{color}`. This will set the `--bs-fg` variable to the theme’s `contrast` key color.

CSS

```
          .fg-contrast-primary {
  --bs-fg: var(--bs-white);
  color: var(--bs-fg);
}
```

.fg-contrast-primary

.fg-contrast-accent

.fg-contrast-success

.fg-contrast-danger

.fg-contrast-warning

.fg-contrast-info

.fg-contrast-inverse

.fg-contrast-secondary

HTML

```
<p class="bg-primary fg-contrast-primary">.fg-contrast-primary</p>
<p class="bg-accent fg-contrast-accent">.fg-contrast-accent</p>
<p class="bg-success fg-contrast-success">.fg-contrast-success</p>
<p class="bg-danger fg-contrast-danger">.fg-contrast-danger</p>
<p class="bg-warning fg-contrast-warning">.fg-contrast-warning</p>
<p class="bg-info fg-contrast-info">.fg-contrast-info</p>
<p class="bg-inverse fg-contrast-inverse">.fg-contrast-inverse</p>
<p class="bg-secondary fg-contrast-secondary">.fg-contrast-secondary</p>
```

These even mix with the opacity utilities.

.fg-contrast-primary fg-100

.fg-contrast-primary fg-90

.fg-contrast-primary fg-80

.fg-contrast-primary fg-70

.fg-contrast-primary fg-60

.fg-contrast-primary fg-50

.fg-contrast-primary fg-40

.fg-contrast-primary fg-30

.fg-contrast-primary fg-20

.fg-contrast-primary fg-10

HTML

```
<p class="bg-primary fg-contrast-primary fg-100">.fg-contrast-primary fg-100</p>
<p class="bg-primary fg-contrast-primary fg-90">.fg-contrast-primary fg-90</p>
<p class="bg-primary fg-contrast-primary fg-80">.fg-contrast-primary fg-80</p>
<p class="bg-primary fg-contrast-primary fg-70">.fg-contrast-primary fg-70</p>
<p class="bg-primary fg-contrast-primary fg-60">.fg-contrast-primary fg-60</p>
<p class="bg-primary fg-contrast-primary fg-50">.fg-contrast-primary fg-50</p>
<p class="bg-primary fg-contrast-primary fg-40">.fg-contrast-primary fg-40</p>
<p class="bg-primary fg-contrast-primary fg-30">.fg-contrast-primary fg-30</p>
<p class="bg-primary fg-contrast-primary fg-20">.fg-contrast-primary fg-20</p>
<p class="bg-primary fg-contrast-primary fg-10">.fg-contrast-primary fg-10</p>
```

## Reset color

Reset a text or link’s color with `.fg-reset`, so that it inherits the color from its parent.

Danger text with a [normal link](#) and a [reset link](#).

HTML

```
<p class="fg-danger">
  Danger text with a <a href="#">normal link</a> and a <a href="#" class="fg-reset">reset link</a>.
</p>
```

## Specificity

Sometimes contextual classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element’s content in a `<div>` or more semantic element with the desired class.

## CSS

In addition to the following Sass functionality, consider reading about our included [CSS custom properties](getting-started__css-variables.md) (aka CSS variables) for colors and more.

### Sass variables

Most `color` utilities are generated by our theme colors, reassigned from our generic color palette variables. Grayscale colors are also available, but only a subset are used to generate any utilities. See the [Color](customize__color.md) documentation for our base color variables and map.

### Sass maps

Theme colors are then put into a Sass map so we can loop over them to generate our utilities, component modifiers, and more. See the [Theme](customize__theme.md) documentation for the full `$theme-colors` Sass map.

### Sass utilities API

Color utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"fg": (
  property: (
    "--fg": null,
    "color": var(--fg)
  ),
  class: fg,
  values: map.merge(
    map.merge(theme-color-refs("fg"), theme-token-refs($theme-fgs, "fg")),
    (reset: inherit)
  ),
),
"fg-emphasis": (
  property: (
    "--fg": null,
    "color": var(--fg)
  ),
  class: fg-emphasis,
  values: theme-color-refs("fg-emphasis"),
),
"fg-contrast": (
  property: (
    "--fg": null,
    "color": var(--fg)
  ),
  class: fg-contrast,
  values: theme-color-refs("contrast"),
),
"fg-opacity": (
  class: fg,
  property: color,
  values: theme-opacity-values(--fg)
),
// scss-docs-end utils-color
// scss-docs-start utils-links
"link-opacity": (
  property: color,
  // css-var: true,
  class: link,
  state: hover,
  values: theme-opacity-values(--link-color)
),
// scss-docs-end utils-links
// scss-docs-start utils-underline
"underline-offset": (
  property: text-underline-offset,
  class: underline-offset,
  state: hover,
  values: (
    1: .125em,
    2: .25em,
    3: .375em,
  )
),
"underline-color": (
  property: (
    "--underline-color": null,
    "text-decoration-color": var(--underline-color)
  ),
  class: underline,
  values: theme-color-values("fg"),
),
"underline-opacity": (
  property: text-decoration-color,
  class: underline,
  state: hover,
  values: theme-opacity-values(--underline-color, currentcolor)
),
"underline-thickness": (
  property: text-decoration-thickness,
  class: underline-thickness,
  state: hover,
  values: (
    1: 1px,
    2: 2px,
    3: 3px,
    4: 4px,
    5: 5px,
  )
),
// scss-docs-end utils-underline
// scss-docs-start utils-bg-color
"bg-color": (
  property: (
    "--bg": null,
    "background-color": var(--bg)
  ),
  class: bg,
  values: map.merge(theme-color-refs("bg"), theme-token-refs($theme-bgs, "bg")),
),
"bg-color-subtle": (
  property: (
    "--bg": null,
    "background-color": var(--bg)
  ),
  class: bg-subtle,
  values: theme-color-refs("bg-subtle"),
),
"bg-color-muted": (
  property: (
    "--bg": null,
    "background-color": var(--bg)
  ),
  class: bg-muted,
  values: theme-color-refs("bg-muted"),
),
"bg-opacity": (
  class: bg,
  property: background-color,
  values: theme-opacity-values(--bg)
),
// scss-docs-end utils-bg-color
// scss-docs-start utils-theme
// Theme style utilities - pair with .theme-{color} to apply coordinated bg + text colors
"theme-contrast": (
  property: (
    "background-color": var(--theme-bg),
    "color": var(--theme-contrast)
  ),
  class: theme-contrast,
  values: (null: null)
),
"theme-subtle": (
  property: (
    "background-color": var(--theme-bg-subtle),
    "color": var(--theme-fg)
  ),
  class: theme-subtle,
  values: (null: null)
),
"theme-muted": (
  property: (
    "background-color": var(--theme-bg-muted),
    "color": var(--theme-fg-emphasis)
  ),
  class: theme-muted,
  values: (null: null)
),
"theme-border": (
  property: border,
  class: theme-border,
  values: (null: var(--border-width) solid var(--theme-border))
),
// scss-docs-end utils-theme
"gradient": (
  property: background-image,
  class: bg,
  values: (gradient: var(--gradient))
),
// scss-docs-start utils-color-scheme
"color-scheme": (
  property: color-scheme,
  class: color-scheme,
  values: (
    light: light,
    dark: dark,
    auto: light dark,
  )
),
```
