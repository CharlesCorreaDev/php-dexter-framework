# Gap · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/gap

---

# Gap

Use gap utilities to control the space between elements in flexbox or grid layouts. Includes support for individual row and column gaps.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/gap)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/gap)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .gap-0 | gap: 0; |
| .gap-1 | gap: 0.25rem; |
| .gap-2 | gap: 0.375rem; |
| .gap-3 | gap: 0.5rem; |
| .gap-4 | gap: 0.75rem; |
| .gap-5 | gap: 1rem; |
| .gap-6 | gap: 1.25rem; |
| .gap-7 | gap: 1.5rem; |
| .gap-8 | gap: 1.75rem; |
| .gap-9 | gap: 2rem; |
| .gap-10 | gap: 2.25rem; |
| .gap-11 | gap: 2.5rem; |
| .gap-12 | gap: 3rem; |
| .row-gap-0 | row-gap: 0; |
| .row-gap-1 | row-gap: 0.25rem; |
| .row-gap-2 | row-gap: 0.375rem; |
| .row-gap-3 | row-gap: 0.5rem; |
| .row-gap-4 | row-gap: 0.75rem; |
| .row-gap-5 | row-gap: 1rem; |
| .row-gap-6 | row-gap: 1.25rem; |
| .row-gap-7 | row-gap: 1.5rem; |
| .row-gap-8 | row-gap: 1.75rem; |
| .row-gap-9 | row-gap: 2rem; |
| .row-gap-10 | row-gap: 2.25rem; |
| .row-gap-11 | row-gap: 2.5rem; |
| .row-gap-12 | row-gap: 3rem; |
| .column-gap-0 | column-gap: 0; |
| .column-gap-1 | column-gap: 0.25rem; |
| .column-gap-2 | column-gap: 0.375rem; |
| .column-gap-3 | column-gap: 0.5rem; |
| .column-gap-4 | column-gap: 0.75rem; |
| .column-gap-5 | column-gap: 1rem; |
| .column-gap-6 | column-gap: 1.25rem; |
| .column-gap-7 | column-gap: 1.5rem; |
| .column-gap-8 | column-gap: 1.75rem; |
| .column-gap-9 | column-gap: 2rem; |
| .column-gap-10 | column-gap: 2.25rem; |
| .column-gap-11 | column-gap: 2.5rem; |
| .column-gap-12 | column-gap: 3rem; |

## Overview

Use gap utilities to control the space between children in flexbox and grid layouts. Gap utilities are built from a default Sass map ranging from `0` to `3rem` (`.gap-0` through `.gap-12`). Use utilities like `.gap-3` and `.gap-5` to control the gap between all children:

Item 1

Item 2

Item 1

Item 2

HTML

```
          <div class="d-flex gap-3">...</div>
<div class="d-flex gap-5">...</div>
```

**Support note:** Gap utilities work with CSS Grid and Flexbox layouts. They are a modern alternative to margin utilities for spacing children within a container.

## Notation

Gap utilities that apply to all breakpoints, from `xs` to `2xl`, have no breakpoint prefix in them. This is because those classes are applied from `min-width: 0` and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint prefix.

The classes are named using the format `{property}-{size}` for `xs` and `{breakpoint}:{property}-{size}` for `sm`, `md`, `lg`, `xl`, and `2xl`.

Where *property* is one of:

- `gap` - for classes that set `gap`
- `row-gap` - for classes that set `row-gap`
- `column-gap` - for classes that set `column-gap`

Where *size* is one of:

- `0` - for classes that eliminate the `gap` by setting it to `0`
- `1` - (by default) for classes that set the `gap` to `$spacer * .25`
- `2` - (by default) for classes that set the `gap` to `$spacer * .375`
- `3` - (by default) for classes that set the `gap` to `$spacer * .5`
- `4` - (by default) for classes that set the `gap` to `$spacer * .75`
- `5` - (by default) for classes that set the `gap` to `$spacer * 1`
- `6` - (by default) for classes that set the `gap` to `$spacer * 1.25`
- `7` - (by default) for classes that set the `gap` to `$spacer * 1.5`
- `8` - (by default) for classes that set the `gap` to `$spacer * 1.75`
- `9` - (by default) for classes that set the `gap` to `$spacer * 2`
- `10` - (by default) for classes that set the `gap` to `$spacer * 2.25`
- `11` - (by default) for classes that set the `gap` to `$spacer * 2.5`
- `12` - (by default) for classes that set the `gap` to `$spacer * 3`

(You can add more sizes by adding entries to the `$spacers` Sass map variable.)

## Examples

### Flexbox gap

Use `gap` utilities to control the space between children in a flexbox container:

Item 1

Item 2

Item 3

HTML

```
          <div class="d-flex gap-4">
  <div>Item 1</div>
  <div>Item 2</div>
  <div>Item 3</div>
</div>
```

### Grid gap

Gap utilities also work with CSS Grid layouts:

Item 1

Item 2

Item 3

Item 4

HTML

```
          <div class="d-grid gap-3" style="grid-template-columns: 1fr 1fr;">
  <div>Item 1</div>
  <div>Item 2</div>
  <div>Item 3</div>
  <div>Item 4</div>
</div>
```

### Row and column gaps

Use `row-gap` and `column-gap` utilities to control the space between rows and columns independently:

Item 1

Item 2

Item 3

Item 4

Item 5

Item 6

HTML

```
          <div class="d-grid row-gap-4 column-gap-2" style="grid-template-columns: 1fr 1fr 1fr;">
  <div>Item 1</div>
  <div>Item 2</div>
  <div>Item 3</div>
  <div>Item 4</div>
  <div>Item 5</div>
  <div>Item 6</div>
</div>
```

### Flexbox with wrapping

You can also use `row-gap` and `column-gap` utilities with flexbox layouts that wrap:

Item 1

Item 2

Item 3

Item 4

Item 5

HTML

```
          <div class="d-flex flex-wrap row-gap-3 column-gap-2">
  <div>Item 1</div>
  <div>Item 2</div>
  <div>Item 3</div>
  <div>Item 4</div>
  <div>Item 5</div>
</div>
```

## Responsive

All gap utilities are responsive and include all breakpoints.

- `.gap-0` through `.gap-12`
- `.sm:gap-0` through `.sm:gap-12`
- `.md:gap-0` through `.md:gap-12`
- `.lg:gap-0` through `.lg:gap-12`
- `.xl:gap-0` through `.xl:gap-12`
- `.2xl:gap-0` through `.2xl:gap-12`

- `.row-gap-0` through `.row-gap-12`
- `.sm:row-gap-0` through `.sm:row-gap-12`
- `.md:row-gap-0` through `.md:row-gap-12`
- `.lg:row-gap-0` through `.lg:row-gap-12`
- `.xl:row-gap-0` through `.xl:row-gap-12`
- `.2xl:row-gap-0` through `.2xl:row-gap-12`

- `.column-gap-0` through `.column-gap-12`
- `.sm:column-gap-0` through `.sm:column-gap-12`
- `.md:column-gap-0` through `.md:column-gap-12`
- `.lg:column-gap-0` through `.lg:column-gap-12`
- `.xl:column-gap-0` through `.xl:column-gap-12`
- `.2xl:column-gap-0` through `.2xl:column-gap-12`

## CSS

### Sass utilities API

Gap utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"gap": (
  responsive: true,
  property: gap,
  class: gap,
  values: $spacers
),
"row-gap": (
  responsive: true,
  property: row-gap,
  class: row-gap,
  values: $spacers
),
"column-gap": (
  responsive: true,
  property: column-gap,
  class: column-gap,
  values: $spacers
),
```
