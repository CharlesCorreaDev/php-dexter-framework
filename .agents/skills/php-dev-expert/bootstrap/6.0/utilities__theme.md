# Theme · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/theme

---

# Theme

Combine one of three theme utilities with our theme color classes to set `color` and `background-color` pairings on any element, just like component variants.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/theme)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .theme-contrast | --bs-theme-fg: var(--bs-theme-contrast); --bs-theme-fg-emphasis: var(--bs-theme-contrast); |
| .theme-subtle | background-color: var(--bs-theme-bg-subtle); color: var(--bs-theme-fg); |
| .theme-muted | --bs-theme-fg: var(--bs-theme-fg-emphasis); |
| .theme-border | border: var(--bs-border-width) solid var(--bs-theme-border); |

## Overview

Take any of our theme color classes and add `.theme-contrast`, `.theme-subtle`, or `.theme-muted` to set a predefined `color and` background-color`pairing. Then optionally add`.theme-border` to set a predefined border color. For more information on how theme colors work, see the [Theme documentation](customize__theme.md) in our Customize section.

### Contrast

Contrast pairs the `bg` theme token with the `contrast` text color for maximum readability with `.theme-contrast`. This is ideal for high-emphasis elements with solid backgrounds.

.theme-primary .theme-contrast

.theme-accent .theme-contrast

.theme-success .theme-contrast

.theme-danger .theme-contrast

.theme-warning .theme-contrast

.theme-info .theme-contrast

.theme-inverse .theme-contrast

.theme-secondary .theme-contrast

HTML

```
<div class="p-2 theme-primary theme-contrast">.theme-primary .theme-contrast</div>
<div class="p-2 theme-accent theme-contrast">.theme-accent .theme-contrast</div>
<div class="p-2 theme-success theme-contrast">.theme-success .theme-contrast</div>
<div class="p-2 theme-danger theme-contrast">.theme-danger .theme-contrast</div>
<div class="p-2 theme-warning theme-contrast">.theme-warning .theme-contrast</div>
<div class="p-2 theme-info theme-contrast">.theme-info .theme-contrast</div>
<div class="p-2 theme-inverse theme-contrast">.theme-inverse .theme-contrast</div>
<div class="p-2 theme-secondary theme-contrast">.theme-secondary .theme-contrast</div>
```

Nested links inherit the contrast foreground so they stay legible on the solid background:

Theme Primary with a [nested link](#) inside.

Theme Accent with a [nested link](#) inside.

Theme Success with a [nested link](#) inside.

Theme Danger with a [nested link](#) inside.

Theme Warning with a [nested link](#) inside.

Theme Info with a [nested link](#) inside.

Theme Inverse with a [nested link](#) inside.

Theme Secondary with a [nested link](#) inside.

HTML

```
<div class="p-3 theme-primary theme-contrast">Theme Primary with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-accent theme-contrast">Theme Accent with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-success theme-contrast">Theme Success with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-danger theme-contrast">Theme Danger with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-warning theme-contrast">Theme Warning with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-info theme-contrast">Theme Info with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-inverse theme-contrast">Theme Inverse with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-secondary theme-contrast">Theme Secondary with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
```

### Subtle

Subtle pairs the `bg-subtle` theme token with the `text` text color for a lower-contrast, more subtle appearance. This combination will automatically adjust to the current color mode.

.theme-primary .theme-subtle

.theme-accent .theme-subtle

.theme-success .theme-subtle

.theme-danger .theme-subtle

.theme-warning .theme-subtle

.theme-info .theme-subtle

.theme-inverse .theme-subtle

.theme-secondary .theme-subtle

HTML

```
<div class="p-2 theme-primary theme-subtle">.theme-primary .theme-subtle</div>
<div class="p-2 theme-accent theme-subtle">.theme-accent .theme-subtle</div>
<div class="p-2 theme-success theme-subtle">.theme-success .theme-subtle</div>
<div class="p-2 theme-danger theme-subtle">.theme-danger .theme-subtle</div>
<div class="p-2 theme-warning theme-subtle">.theme-warning .theme-subtle</div>
<div class="p-2 theme-info theme-subtle">.theme-info .theme-subtle</div>
<div class="p-2 theme-inverse theme-subtle">.theme-inverse .theme-subtle</div>
<div class="p-2 theme-secondary theme-subtle">.theme-secondary .theme-subtle</div>
```

And with borders:

.theme-primary .theme-subtle .theme-border

.theme-accent .theme-subtle .theme-border

.theme-success .theme-subtle .theme-border

.theme-danger .theme-subtle .theme-border

.theme-warning .theme-subtle .theme-border

.theme-info .theme-subtle .theme-border

.theme-inverse .theme-subtle .theme-border

.theme-secondary .theme-subtle .theme-border

HTML

```
<div class="p-2 theme-primary theme-subtle theme-border">.theme-primary .theme-subtle .theme-border</div>
<div class="p-2 theme-accent theme-subtle theme-border">.theme-accent .theme-subtle .theme-border</div>
<div class="p-2 theme-success theme-subtle theme-border">.theme-success .theme-subtle .theme-border</div>
<div class="p-2 theme-danger theme-subtle theme-border">.theme-danger .theme-subtle .theme-border</div>
<div class="p-2 theme-warning theme-subtle theme-border">.theme-warning .theme-subtle .theme-border</div>
<div class="p-2 theme-info theme-subtle theme-border">.theme-info .theme-subtle .theme-border</div>
<div class="p-2 theme-inverse theme-subtle theme-border">.theme-inverse .theme-subtle .theme-border</div>
<div class="p-2 theme-secondary theme-subtle theme-border">.theme-secondary .theme-subtle .theme-border</div>
```

Nested links inherit the subtle foreground so they stay legible on the subtle background:

Theme Primary with a [nested link](#) inside.

Theme Accent with a [nested link](#) inside.

Theme Success with a [nested link](#) inside.

Theme Danger with a [nested link](#) inside.

Theme Warning with a [nested link](#) inside.

Theme Info with a [nested link](#) inside.

Theme Inverse with a [nested link](#) inside.

Theme Secondary with a [nested link](#) inside.

HTML

```
<div class="p-3 theme-primary theme-subtle">Theme Primary with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-accent theme-subtle">Theme Accent with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-success theme-subtle">Theme Success with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-danger theme-subtle">Theme Danger with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-warning theme-subtle">Theme Warning with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-info theme-subtle">Theme Info with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-inverse theme-subtle">Theme Inverse with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-secondary theme-subtle">Theme Secondary with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
```

### Muted

Muted pairs the `bg-muted` theme token with the `text-emphasis` text color for a lower-contrast, more muted appearance. Like subtle, this combination will automatically adjust to the current color mode.

.theme-primary .theme-muted

.theme-accent .theme-muted

.theme-success .theme-muted

.theme-danger .theme-muted

.theme-warning .theme-muted

.theme-info .theme-muted

.theme-inverse .theme-muted

.theme-secondary .theme-muted

HTML

```
<div class="p-2 theme-primary theme-muted">.theme-primary .theme-muted</div>
<div class="p-2 theme-accent theme-muted">.theme-accent .theme-muted</div>
<div class="p-2 theme-success theme-muted">.theme-success .theme-muted</div>
<div class="p-2 theme-danger theme-muted">.theme-danger .theme-muted</div>
<div class="p-2 theme-warning theme-muted">.theme-warning .theme-muted</div>
<div class="p-2 theme-info theme-muted">.theme-info .theme-muted</div>
<div class="p-2 theme-inverse theme-muted">.theme-inverse .theme-muted</div>
<div class="p-2 theme-secondary theme-muted">.theme-secondary .theme-muted</div>
```

And with borders:

.theme-primary .theme-muted .theme-border

.theme-accent .theme-muted .theme-border

.theme-success .theme-muted .theme-border

.theme-danger .theme-muted .theme-border

.theme-warning .theme-muted .theme-border

.theme-info .theme-muted .theme-border

.theme-inverse .theme-muted .theme-border

.theme-secondary .theme-muted .theme-border

HTML

```
<div class="p-2 theme-primary theme-muted theme-border">.theme-primary .theme-muted .theme-border</div>
<div class="p-2 theme-accent theme-muted theme-border">.theme-accent .theme-muted .theme-border</div>
<div class="p-2 theme-success theme-muted theme-border">.theme-success .theme-muted .theme-border</div>
<div class="p-2 theme-danger theme-muted theme-border">.theme-danger .theme-muted .theme-border</div>
<div class="p-2 theme-warning theme-muted theme-border">.theme-warning .theme-muted .theme-border</div>
<div class="p-2 theme-info theme-muted theme-border">.theme-info .theme-muted .theme-border</div>
<div class="p-2 theme-inverse theme-muted theme-border">.theme-inverse .theme-muted .theme-border</div>
<div class="p-2 theme-secondary theme-muted theme-border">.theme-secondary .theme-muted .theme-border</div>
```

Nested links inherit the muted foreground so they stay legible on the muted background:

Theme Primary with a [nested link](#) inside.

Theme Accent with a [nested link](#) inside.

Theme Success with a [nested link](#) inside.

Theme Danger with a [nested link](#) inside.

Theme Warning with a [nested link](#) inside.

Theme Info with a [nested link](#) inside.

Theme Inverse with a [nested link](#) inside.

Theme Secondary with a [nested link](#) inside.

HTML

```
<div class="p-3 theme-primary theme-muted">Theme Primary with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-accent theme-muted">Theme Accent with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-success theme-muted">Theme Success with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-danger theme-muted">Theme Danger with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-warning theme-muted">Theme Warning with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-info theme-muted">Theme Info with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-inverse theme-muted">Theme Inverse with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
<div class="p-3 theme-secondary theme-muted">Theme Secondary with a <a class="underline-50 hover:underline-100" href="#">nested link</a> inside.</div>
```

## Comparison

Here’s a side-by-side comparison of all three styles for each theme color, including nested links:

Primary with a [link](#)

Primary with a [link](#)

Primary with a [link](#)

Accent with a [link](#)

Accent with a [link](#)

Accent with a [link](#)

Success with a [link](#)

Success with a [link](#)

Success with a [link](#)

Danger with a [link](#)

Danger with a [link](#)

Danger with a [link](#)

Warning with a [link](#)

Warning with a [link](#)

Warning with a [link](#)

Info with a [link](#)

Info with a [link](#)

Info with a [link](#)

Inverse with a [link](#)

Inverse with a [link](#)

Inverse with a [link](#)

Secondary with a [link](#)

Secondary with a [link](#)

Secondary with a [link](#)

HTML

```
<div class="d-flex gap-2 mb-2">
  <div class="theme-primary theme-contrast p-3 flex-fill text-center rounded">Primary with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-primary theme-subtle p-3 flex-fill text-center rounded">Primary with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-primary theme-muted p-3 flex-fill text-center rounded">Primary with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
</div>
<div class="d-flex gap-2 mb-2">
  <div class="theme-accent theme-contrast p-3 flex-fill text-center rounded">Accent with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-accent theme-subtle p-3 flex-fill text-center rounded">Accent with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-accent theme-muted p-3 flex-fill text-center rounded">Accent with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
</div>
<div class="d-flex gap-2 mb-2">
  <div class="theme-success theme-contrast p-3 flex-fill text-center rounded">Success with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-success theme-subtle p-3 flex-fill text-center rounded">Success with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-success theme-muted p-3 flex-fill text-center rounded">Success with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
</div>
<div class="d-flex gap-2 mb-2">
  <div class="theme-danger theme-contrast p-3 flex-fill text-center rounded">Danger with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-danger theme-subtle p-3 flex-fill text-center rounded">Danger with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-danger theme-muted p-3 flex-fill text-center rounded">Danger with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
</div>
<div class="d-flex gap-2 mb-2">
  <div class="theme-warning theme-contrast p-3 flex-fill text-center rounded">Warning with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-warning theme-subtle p-3 flex-fill text-center rounded">Warning with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-warning theme-muted p-3 flex-fill text-center rounded">Warning with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
</div>
<div class="d-flex gap-2 mb-2">
  <div class="theme-info theme-contrast p-3 flex-fill text-center rounded">Info with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-info theme-subtle p-3 flex-fill text-center rounded">Info with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-info theme-muted p-3 flex-fill text-center rounded">Info with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
</div>
<div class="d-flex gap-2 mb-2">
  <div class="theme-inverse theme-contrast p-3 flex-fill text-center rounded">Inverse with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-inverse theme-subtle p-3 flex-fill text-center rounded">Inverse with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-inverse theme-muted p-3 flex-fill text-center rounded">Inverse with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
</div>
<div class="d-flex gap-2 mb-2">
  <div class="theme-secondary theme-contrast p-3 flex-fill text-center rounded">Secondary with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-secondary theme-subtle p-3 flex-fill text-center rounded">Secondary with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
  <div class="theme-secondary theme-muted p-3 flex-fill text-center rounded">Secondary with a <a class="underline-50 hover:underline-100" href="#">link</a></div>
</div>
```

## With components

Theme utilities work great with components that support theming. Apply the theme color to a container and use theme style classes on individual elements.

Contrast badge
Subtle badge
Muted badge

Contrast badge
Subtle badge
Muted badge

HTML

```
<div class="theme-primary">
  <div class="d-flex gap-2 mb-3">
    <span class="badge theme-contrast">Contrast badge</span>
    <span class="badge theme-subtle">Subtle badge</span>
    <span class="badge theme-muted">Muted badge</span>
  </div>
</div>
<div class="theme-danger">
  <div class="d-flex gap-2 mb-3">
    <span class="badge theme-contrast">Contrast badge</span>
    <span class="badge theme-subtle">Subtle badge</span>
    <span class="badge theme-muted">Muted badge</span>
  </div>
</div>
```

You can also mix theme colors within the same container by applying different `.theme-{color}` classes to child elements:

Success

Warning

Danger

HTML

```
<div class="d-flex gap-2">
  <div class="theme-success theme-contrast p-3 rounded">Success</div>
  <div class="theme-warning theme-contrast p-3 rounded">Warning</div>
  <div class="theme-danger theme-contrast p-3 rounded">Danger</div>
</div>
```

## Reset

Use `.theme-reset` when a nested subtree should drop the inherited theme and return to component defaults. See [Theme utility classes](customize__theme.md#reset) for details.

Primary badge
Default badge

HTML

```
<div class="theme-primary p-3 rounded">
  <span class="badge theme-contrast">Primary badge</span>
  <span class="badge theme-reset">Default badge</span>
</div>
```

## CSS

### Generated CSS

The theme style classes generate the following CSS:

CSS

```
          .theme-contrast {
  --theme-fg: var(--theme-contrast);
  --theme-fg-emphasis: var(--theme-contrast);
  background-color: var(--theme-bg);
  color: var(--theme-contrast);
}

.theme-subtle {
  background-color: var(--theme-bg-subtle);
  color: var(--theme-fg);
}

.theme-muted {
  --theme-fg: var(--theme-fg-emphasis);
  background-color: var(--theme-bg-muted);
  color: var(--theme-fg-emphasis);
}
```

### Sass utilities API

Theme utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
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
```
