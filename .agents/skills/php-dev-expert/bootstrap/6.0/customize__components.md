# Components · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/customize/components

---

# Components

Learn how and why we build nearly all our components responsively and with base and modifier classes.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/customize/components)

On this page…

##### On this page

## Base classes

Bootstrap components are typically built with composable classes: a shared base class, variant classes, and optional theme classes. For example, buttons can start from `.btn` and combine variant classes like `.btn-solid` or `.btn-outline` with theme classes like `.theme-primary` or `.theme-success`.

Many of these classes are generated with Sass `@each` loops over component maps (for things like variants and sizes) and theme maps. This keeps class APIs consistent across components and lets one map change update all related selectors at once, including responsive variants where applicable.

Check out [our Sass maps and loops docs](customize__sass.md#maps-and-loops) for how to customize these loops and extend Bootstrap’s base-modifier approach to your own code.

## Theme variants

Themeable components support **theme variants**—a single family of composable `.theme-*` classes that recolor a component without hard-coded, per-component color classes. This replaces the previous pattern of baking color into each component (`.btn-primary`, `.alert-success`, `.bg-warning`, and so on) with one consistent API.

Themeable components read a shared set of generic `--bs-theme-*` tokens for their background, foreground, border, and focus styles—each with a fallback to the component’s own default token. When no theme class is present, the fallback applies. Add a `.theme-*` class to the component (or to an ancestor) and it picks up that theme’s colors instead. Add `.theme-reset` to a nested subtree to return to those component defaults.

| Token | Description |
| --- | --- |
| `--bs-theme-base` | The raw base color the theme is derived from |
| `--bs-theme-bg` | Solid background color, e.g., a solid button or badge |
| `--bs-theme-bg-subtle` | Subtle background tint for low-emphasis surfaces |
| `--bs-theme-bg-muted` | Muted background, between subtle and solid |
| `--bs-theme-fg` | Foreground/text color on default surfaces |
| `--bs-theme-fg-emphasis` | Higher-contrast foreground color |
| `--bs-theme-border` | Border color |
| `--bs-theme-contrast` | Contrasting color for text/icons sitting on a solid `--bs-theme-bg` |
| `--bs-theme-focus-ring` | Focus ring color |

The [`.theme-{name}` classes](customize__theme.md#theme-utility-classes) mirror our semantic [theme colors](customize__theme.md#theme-colors)—`.theme-primary`, `.theme-secondary`, `.theme-success`, `.theme-danger`, etc. They’re generated from the `$theme-colors` Sass map, so adding or renaming a theme color automatically produces a matching `.theme-*` class. Each entry defines the tokens above for both light and dark mode via `light-dark()`:

SCSS

```
          // …
// One entry from $theme-colors in scss/_theme.scss
"primary": (
  "base": var(--blue-500),
  "fg": light-dark(var(--blue-600), var(--blue-400)),
  "fg-emphasis": light-dark(var(--blue-800), var(--blue-200)),
  "bg": var(--blue-500),
  "bg-subtle": light-dark(var(--blue-100), var(--blue-900)),
  "bg-muted": light-dark(var(--blue-200), var(--blue-800)),
  "border": light-dark(var(--blue-300), var(--blue-600)),
  "focus-ring": light-dark(color-mix(in oklch, var(--blue-500) 50%, var(--bg-body)), color-mix(in oklch, var(--blue-500) 75%, var(--bg-body))),
  "contrast": var(--white)
),
// …
```

To see how a component consumes these tokens, here’s the badge in `scss/_badge.scss`. Its `color` and `background-color` each read a theme token first, falling back to the badge’s own default (CSS variables are written without the `--bs-` prefix in Sass source; PostCSS adds it at build):

SCSS

```
          .badge {
  // …
  color: var(--theme-contrast, var(--badge-color));
  background-color: var(--theme-bg, var(--badge-bg));
}
```

With no theme class, the badge uses its own defaults (`--badge-bg`, `--badge-color`). Add `.theme-success` and the very same element resolves `--theme-bg` and `--theme-contrast` to the success role tokens—no badge-specific `.badge-success` selector required:

Default badge
Success badge

HTML

```
<span class="badge">Default badge</span>
<span class="badge theme-success">Success badge</span>
```

For components with variants, combine a variant class with a theme class to color it. For buttons, that means pairing a variant like `.btn-solid` or `.btn-outline` with a theme:

Primary
Success
Danger

HTML

```
<button type="button" class="btn-solid theme-primary">Primary</button>
<button type="button" class="btn-outline theme-success">Success</button>
<button type="button" class="btn-subtle theme-danger">Danger</button>
```

Because the theme tokens are plain CSS variables, you can also scope a theme to a container and let everything inside inherit it, or override individual tokens for one-off styling—no Sass compilation required:

CSS

```
          .my-brand {
  --bs-theme-bg: #6f42c1;
  --bs-theme-contrast: #fff;
}
```

To make one of your own components themeable, follow the same pattern: read `var(--theme-{role}, var(--my-component-{role}))` for each color property, and it will respond to any `.theme-*` class set on it or an ancestor. See the [Theme page](customize__theme.md) for the full list of role tokens and recommended pairings.

## Responsive

These Sass loops aren’t limited to color maps, either. You can also generate responsive variations of your components. Take for example our responsive navbar expand classes where we mix an `@each` loop for the `$breakpoints` Sass map with a media query include.

[scss/\_navbar.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_navbar.scss)

```
// Generate series of responsive `.navbar-expand` classes for configuring
// where your navbar collapses and expands. Uses container queries so the
// navbar responds to its own width, not the viewport width.

// Mixin for expanded state styles (applied to descendants)
@mixin navbar-expanded {
  // Style the inner container since we can't style .navbar itself with container queries
  > .container,
  > .container-fluid,
  %navbar-expand-container {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }

  .navbar-nav {
    --nav-link-padding-x: var(--navbar-nav-link-padding-x);
    flex-direction: row;
  }

  .navbar-toggler {
    display: none !important; // stylelint-disable-line declaration-no-important
  }

  [class*="drawer"] {
    // stylelint-disable declaration-no-important
    // Reset native <dialog> UA styles and below-breakpoint drawer styles.
    // Must use !important to override both UA <dialog> defaults and the
    // responsive drawer styles from media-breakpoint-down().
    position: static !important;
    inset: auto !important;
    z-index: auto;
    display: flex !important;
    flex-grow: 1;
    width: auto !important;
    max-width: none !important;
    height: auto !important;
    max-height: none !important;
    padding: 0;
    margin: 0;
    overflow: visible !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    @include box-shadow(none);
    @include transition(none);
    // stylelint-enable declaration-no-important

    .drawer-header {
      display: none !important; // stylelint-disable-line declaration-no-important
    }

    .drawer-body {
      display: flex;
      flex-grow: 1;
      flex-direction: row;
      align-items: center;
      padding: 0;
      overflow-y: visible;
    }
  }
}

// Always expanded (no responsive behavior)
.navbar-expand {
  @include navbar-expanded();

  // Also set on navbar itself for non-responsive case
  flex-wrap: nowrap;
  justify-content: flex-start;
}

// Responsive navbar expand classes using container queries
@include loop-breakpoints-down($navbar-breakpoints) using ($breakpoint, $next, $prefix) {
  @if $next {
    .#{$prefix}navbar-expand {
      @include container-breakpoint-up($next) {
        @include navbar-expanded();
      }
    }
  }
}
```

Should you modify your `$breakpoints`, your changes will apply to all the loops iterating over that map.

[scss/\_config.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_config.scss)

```
$breakpoints: (
  xs: 0,
  sm: 576px,
  md: 768px,
  lg: 1024px,
  xl: 1280px,
  2xl: 1536px
);
```

For more information and examples on how to modify our Sass maps and variables, please refer to [the CSS section of the Grid documentation](layout__grid.md#css).

## Creating your own

We encourage you to adopt these guidelines when building with Bootstrap to create your own components. We’ve extended this approach ourselves to the custom components in our documentation and examples. Components like our callouts are built just like our provided components with base and modifier classes.

**This is a callout.** We built it custom for our docs so our messages to you stand out. It has three variants via modifier classes.

HTML

```
          <div class="callout">...</div>
```

In your CSS, you’d have something like the following where the bulk of the styling is done via `.callout`. Then, the unique styles between each variant is controlled via modifier class.

SCSS

```
          // Base class
.callout {}

// Modifier classes
.callout-info {}
.callout-warning {}
.callout-danger {}
```

For the callouts, that unique styling is just a `border-left-color`. When you combine that base class with one of those modifier classes, you get your complete component family:

**This is an info callout.** Example text to show it in action.

**This is a warning callout.** Example text to show it in action.

**This is a danger callout.** Example text to show it in action.
