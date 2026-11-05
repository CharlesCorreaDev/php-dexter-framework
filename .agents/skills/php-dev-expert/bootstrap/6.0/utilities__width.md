# Width · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/width

---

# Width

Use width utilities to control the width of elements with responsive width classes.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/width)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/width)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .w-1 | width: 1rem; |
| .w-2 | width: 2rem; |
| .w-3 | width: 3rem; |
| .w-4 | width: 4rem; |
| .w-5 | width: 5rem; |
| .w-6 | width: 6rem; |
| .w-7 | width: 7rem; |
| .w-8 | width: 8rem; |
| .w-9 | width: 9rem; |
| .w-10 | width: 10rem; |
| .w-11 | width: 11rem; |
| .w-12 | width: 12rem; |
| .w-25 | width: 25%; |
| .w-50 | width: 50%; |
| .w-75 | width: 75%; |
| .w-100 | width: 100%; |
| .w-auto | width: auto; |
| .w-min | width: min-content; |
| .w-max | width: max-content; |
| .w-fit | width: fit-content; |
| .max-w-100 | max-width: 100%; |
| .min-w-0 | min-width: 0; |
| .min-w-100 | min-width: 100%; |
| .vw-100 | width: 100vw; |
| .min-vw-100 | min-width: 100vw; |
| .dvw-100 | width: 100dvw; |
| .min-dvw-100 | min-width: 100dvw; |

Use width utilities to set the width of elements. Width utilities are generated from the utility API and include support for a preset scale, percentage values, intrinsic sizing keywords, and viewport units.

## Width

Set width using `.w-{size}` utilities for any size from `1` to `12`. These classes are generated from the utility API based on the `$sizes` map in `_config.scss`. Each number is a multiple of the `$spacer` variable, which defaults to `1rem`.

Width 12

HTML

```
<div class="d-flex flex-column gap-3">
  <div class="w-1">…</div>
  <div class="w-2">…</div>
  <div class="w-3">…</div>
  <div class="w-4">…</div>
  <div class="w-5">…</div>
  <div class="w-6">…</div>
  <div class="w-7">…</div>
  <div class="w-8">…</div>
  <div class="w-9">…</div>
  <div class="w-10">…</div>
  <div class="w-11">…</div>
  <div class="w-12">…</div>
</div>
```

## Relative width

Set width relative to the parent element using percentage-based utilities. Includes support for `25%`, `50%`, `75%`, `100%`, and `auto` by default.

Width 25%

Width 50%

Width 75%

Width 100%

Width auto

HTML

```
<div class="w-25 p-3">Width 25%</div>
<div class="w-50 p-3">Width 50%</div>
<div class="w-75 p-3">Width 75%</div>
<div class="w-100 p-3">Width 100%</div>
<div class="w-auto p-3">Width auto</div>
```

## Intrinsic sizing

Use intrinsic sizing keywords to set width based on content.

Width min-content

Width max-content

Width fit-content

HTML

```
<div class="w-min p-3">Width min-content</div>
<div class="w-max p-3">Width max-content</div>
<div class="w-fit p-3">Width fit-content</div>
```

## Max width

Set maximum width using `max-width` utilities.

Max-width 100%

HTML

```
<div style="width: 50%;">
  <div class="max-w-100" style="width: 200%;">Max-width 100%</div>
</div>
```

## Min width

Set minimum width using `min-width` utilities.

This content is wider than the min-width: 0 container

Min-width 100%

HTML

```
<div class="min-w-0 p-3" style="overflow: hidden;">
  <div style="width: 200px;">This content is wider than the min-width: 0 container</div>
</div>
<div class="min-w-100 p-3">Min-width 100%</div>
```

## Viewport width

Set width relative to the viewport using viewport units.

HTML

```
          <div class="vw-100">Width 100vw</div>
<div class="min-vw-100">Min-width 100vw</div>
```

**Beware of the viewport width!** CSS sizes `vw` as if the scrollbar does not exist. On a desktop browser that shows a classic scrollbar, `vw-100` is wider than the content area. The page then scrolls sideways. Use `w-100` to fill the parent element instead. See [dynamic viewport width](#dynamic-viewport-width).

## Dynamic viewport width

The `vw` unit measures the large viewport width. The browser calculates that width as if every retractable browser interface is retracted. The value stays the same while the user scrolls.

The `dvw` unit measures the viewport width that the user sees now. The browser updates the value when it expands or retracts a browser interface. Use `dvw-100` and `min-dvw-100` when a browser interface changes the viewport width.

HTML

```
          <div class="dvw-100">Width 100dvw</div>
<div class="min-dvw-100">Min-width 100dvw</div>
```

Most browsers put the retractable interface at the top and the bottom of the screen. That interface changes the viewport height, not the viewport width. On these browsers, `dvw` and `vw` give you the same value. The `dvw` unit is therefore less useful than [`dvh`](utilities__height.md#dynamic-viewport-height). We ship it so that the width utilities match the height utilities.

**`dvw` does not fix the scrollbar problem.** CSS sizes every viewport width unit as if the scrollbar does not exist. The `dvw` unit gets the same treatment as the `vw` unit. To make the units respect the scrollbar, set `overflow: scroll` or `scrollbar-gutter: stable` on the root element.

**Which unit do I use?** Use `w-100` for a full-width layout. It fills the parent element, so the page does not scroll sideways. Use `dvw` when a browser interface changes the viewport width. Use `vw` when you need a width that does not change while the user scrolls.

### Small and large viewport units

CSS gives you two more viewport width units:

- `svw` is the small viewport width. The browser calculates it as if every retractable browser interface is expanded.
- `lvw` is the large viewport width. The browser calculates it as if every retractable browser interface is retracted. Current browsers give `vw` the same value.

We do not ship utilities for `svw` and `lvw`, because most layouts need `w-100` or `dvw`. Add them with the [utilities API](utilities__api.md#add-utilities):

SCSS

```
          // my-bootstrap.scss
@use "bootstrap/scss/bootstrap" with (
  $utilities: (
    "small-viewport-width": (
      property: width,
      class: svw,
      values: (100: 100svw)
    ),
    "min-small-viewport-width": (
      property: min-width,
      class: min-svw,
      values: (100: 100svw)
    ),
    "large-viewport-width": (
      property: width,
      class: lvw,
      values: (100: 100lvw)
    ),
    "min-large-viewport-width": (
      property: min-width,
      class: min-lvw,
      values: (100: 100lvw)
    )
  )
);
```

This adds `.svw-100`, `.min-svw-100`, `.lvw-100`, and `.min-lvw-100`.

Every browser that Bootstrap 6 supports has `dvw`, `svw`, and `lvw`. Read [Browsers & devices](getting-started__browsers-devices.md) for the full support policy.

## CSS

### Sass utilities API

Width utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"width": (
  property: width,
  class: w,
  values: map.merge(
    $sizes,
    (
      25: 25%,
      50: 50%,
      75: 75%,
      100: 100%,
      auto: auto,
      min: min-content,
      max: max-content,
      fit: fit-content,
    )
  )
),
"max-width": (
  property: max-width,
  class: max-w,
  values: (100: 100%)
),
"min-width": (
  property: min-width,
  class: min-w,
  values: (
    0: 0,
    100: 100%
  )
),
"viewport-width": (
  property: width,
  class: vw,
  values: (100: 100vw)
),
"min-viewport-width": (
  property: min-width,
  class: min-vw,
  values: (100: 100vw)
),
"dynamic-viewport-width": (
  property: width,
  class: dvw,
  values: (100: 100dvw)
),
"min-dynamic-viewport-width": (
  property: min-width,
  class: min-dvw,
  values: (100: 100dvw)
),
```
