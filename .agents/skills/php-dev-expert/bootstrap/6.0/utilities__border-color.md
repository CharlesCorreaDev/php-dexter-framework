# Border color · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/border-color

---

# Border color

Utilities for controlling border color and opacity.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/border-color)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/border-color)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .border-primary | --bs-bc: var(--bs-primary-bg); border-color: var(--bs-bc); |
| .border-accent | --bs-bc: var(--bs-accent-bg); border-color: var(--bs-bc); |
| .border-success | --bs-bc: var(--bs-success-bg); border-color: var(--bs-bc); |
| .border-danger | --bs-bc: var(--bs-danger-bg); border-color: var(--bs-bc); |
| .border-warning | --bs-bc: var(--bs-warning-bg); border-color: var(--bs-bc); |
| .border-info | --bs-bc: var(--bs-info-bg); border-color: var(--bs-bc); |
| .border-inverse | --bs-bc: var(--bs-inverse-bg); border-color: var(--bs-bc); |
| .border-secondary | --bs-bc: var(--bs-secondary-bg); border-color: var(--bs-bc); |
| .border-bg | --bs-bc: var(--bs-border-bg); border-color: var(--bs-bc); |
| .border-body | --bs-bc: var(--bs-border-body); border-color: var(--bs-bc); |
| .border-muted | --bs-bc: var(--bs-border-muted); border-color: var(--bs-bc); |
| .border-subtle | --bs-bc: var(--bs-border-subtle); border-color: var(--bs-bc); |
| .border-emphasized | --bs-bc: var(--bs-border-emphasized); border-color: var(--bs-bc); |
| .border-white | --bs-bc: var(--bs-border-white); border-color: var(--bs-bc); |
| .border-black | --bs-bc: var(--bs-border-black); border-color: var(--bs-bc); |
| .border-subtle-primary | --bs-bc: var(--bs-primary-border); border-color: var(--bs-bc); |
| .border-subtle-accent | --bs-bc: var(--bs-accent-border); border-color: var(--bs-bc); |
| .border-subtle-success | --bs-bc: var(--bs-success-border); border-color: var(--bs-bc); |
| .border-subtle-danger | --bs-bc: var(--bs-danger-border); border-color: var(--bs-bc); |
| .border-subtle-warning | --bs-bc: var(--bs-warning-border); border-color: var(--bs-bc); |
| .border-subtle-info | --bs-bc: var(--bs-info-border); border-color: var(--bs-bc); |
| .border-subtle-inverse | --bs-bc: var(--bs-inverse-border); border-color: var(--bs-bc); |
| .border-subtle-secondary | --bs-bc: var(--bs-secondary-border); border-color: var(--bs-bc); |
| .border-10 | border-color: color-mix(in oklch, var(--bs-bc) 10%, transparent); |
| .border-20 | border-color: color-mix(in oklch, var(--bs-bc) 20%, transparent); |
| .border-30 | border-color: color-mix(in oklch, var(--bs-bc) 30%, transparent); |
| .border-40 | border-color: color-mix(in oklch, var(--bs-bc) 40%, transparent); |
| .border-50 | border-color: color-mix(in oklch, var(--bs-bc) 50%, transparent); |
| .border-60 | border-color: color-mix(in oklch, var(--bs-bc) 60%, transparent); |
| .border-70 | border-color: color-mix(in oklch, var(--bs-bc) 70%, transparent); |
| .border-80 | border-color: color-mix(in oklch, var(--bs-bc) 80%, transparent); |
| .border-90 | border-color: color-mix(in oklch, var(--bs-bc) 90%, transparent); |
| .border-100 | border-color: var(--bs-bc); |

## Colors

Change the `border-color` using utilities built on our theme colors using `.border-{color}` and `.border-subtle-{color}`. All these border color utilities set the `border-color` property to a local CSS variable, `--bs-bc`, which has the value of the theme color. The root color tokens color values also use `light-dark()` to ensure sufficient contrast in both light and dark color modes.

For example, `.border-primary` sets the `--bs-bc` variable to `var(--bs-primary-border)`:

CSS

```
          .border-primary {
  --bs-bc: var(--bs-primary-border);
  border-color: var(--bs-bc);
}
```

This approach allows us to also easily support translucency with our `.border-{opacity}` utilities as we can use `color-mix()` with the CSS variable to generate the appropriate color. See the [opacity section](#opacity) for more details.

The `--bs-bc` variable is registered with `@property` as non-inheriting (`inherits: false`), so border color utilities are scoped to the element they’re applied to and never cascade into nested elements or components. This is why `--bs-bc` is deliberately separate from the inheriting `--bs-border-color` design token that components resolve their default borders from.

primary

primary subtle

accent

accent subtle

success

success subtle

danger

danger subtle

warning

warning subtle

info

info subtle

inverse

inverse subtle

secondary

secondary subtle

bg

body

muted

subtle

emphasized

black

white

HTML

```
<div class="border border-5 border-primary">primary</div>
<div class="border border-5 border-subtle-primary">primary subtle</div>
<div class="border border-5 border-accent">accent</div>
<div class="border border-5 border-subtle-accent">accent subtle</div>
<div class="border border-5 border-success">success</div>
<div class="border border-5 border-subtle-success">success subtle</div>
<div class="border border-5 border-danger">danger</div>
<div class="border border-5 border-subtle-danger">danger subtle</div>
<div class="border border-5 border-warning">warning</div>
<div class="border border-5 border-subtle-warning">warning subtle</div>
<div class="border border-5 border-info">info</div>
<div class="border border-5 border-subtle-info">info subtle</div>
<div class="border border-5 border-inverse">inverse</div>
<div class="border border-5 border-subtle-inverse">inverse subtle</div>
<div class="border border-5 border-secondary">secondary</div>
<div class="border border-5 border-subtle-secondary">secondary subtle</div>
<div class="border border-5 border-bg">bg</div>
<div class="border border-5 border-body">body</div>
<div class="border border-5 border-muted">muted</div>
<div class="border border-5 border-subtle">subtle</div>
<div class="border border-5 border-emphasized">emphasized</div>
<div class="border border-5 border-black">black</div>
<div class="border border-5 border-white">white</div>
```

Or modify the default `border-color` of a component:

Email address

Dangerous heading

Changing border color and width

HTML

```
<div class="mb-4">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control border-success" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="h4 pb-2 mb-4 fg-danger border-bottom border-danger">
  Dangerous heading
</div>

<div class="p-3 bg-info bg-10 border border-info border-start-0 rounded-end">
  Changing border color and width
</div>
```

## Nested elements

Because border color utilities set the non-inheriting `--bs-bc` variable, parent border colors don’t affect the borders of nested elements. Below, the parent uses `.border-danger` while the nested `.border` keeps the default border color.

Parent with .border-danger

Nested .border keeps the default color

HTML

```
<div class="p-3 border border-danger rounded-5">
  Parent with .border-danger
  <div class="border p-3 mt-3">
    Nested .border keeps the default color
  </div>
</div>
```

## Opacity

Change the opacity of a border color by using any of the `.border-<percentage>` utilities which use `color-mix()` to mix the border color with `transparent` thanks to the CSS variable approach mentioned above. Because `--bs-bc` is scoped to the element, pair these opacity utilities with a `.border-{color}` utility on the same element—they no longer inherit a border color from an ancestor.

Default border

90% opacity

80% opacity

70% opacity

60% opacity

50% opacity

40% opacity

30% opacity

20% opacity

10% opacity

HTML

```
<div class="border border-5 border-primary p-2 mb-2">Default border</div>
<div class="border border-5 border-primary border-90 p-2 mb-2">90% opacity</div>
<div class="border border-5 border-primary border-80 p-2 mb-2">80% opacity</div>
<div class="border border-5 border-primary border-70 p-2 mb-2">70% opacity</div>
<div class="border border-5 border-primary border-60 p-2 mb-2">60% opacity</div>
<div class="border border-5 border-primary border-50 p-2 mb-2">50% opacity</div>
<div class="border border-5 border-primary border-40 p-2 mb-2">40% opacity</div>
<div class="border border-5 border-primary border-30 p-2 mb-2">30% opacity</div>
<div class="border border-5 border-primary border-20 p-2 mb-2">20% opacity</div>
<div class="border border-5 border-primary border-10 p-2">10% opacity</div>
```

## CSS

### Variables

[scss/\_root.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_root.scss)

```
--border-width: #{$border-width},
--border-width-keyline: .5px,
--border-style: #{$border-style},
--border-color: light-dark(var(--gray-200), var(--gray-700)),
--border-color-translucent: color-mix(in oklch, var(--fg-body) 15%, transparent),
```

### Sass variables

Variables for setting `border-color` in `.border-*-subtle` utilities in light and dark mode:

### Sass utilities API

Border color utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"border-color": (
  property: (
    "--bc": null,
    "border-color": var(--bc)
  ),
  class: border,
  values: map.merge(theme-color-refs("bg"), theme-token-refs($theme-borders, "border")),
),
"border-color-subtle": (
  property: (
    "--bc": null,
    "border-color": var(--bc)
  ),
  class: border-subtle,
  values: theme-color-refs("border"),
),
"border-width": (
  property: border-width,
  class: border,
  values: map.merge($border-widths, (keyline: var(--border-width-keyline)))
),
"border-opacity": (
  class: border,
  property: border-color,
  values: theme-opacity-values(--bc)
),
```
