# Space · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/space

---

# Space

Control the margin between direct children of an element in non-flex and non-grid layouts.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/margin)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/space)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .space-x-0 | margin-inline-end: 0; |
| .space-x-1 | margin-inline-end: 0.25rem; |
| .space-x-2 | margin-inline-end: 0.375rem; |
| .space-x-3 | margin-inline-end: 0.5rem; |
| .space-x-4 | margin-inline-end: 0.75rem; |
| .space-x-5 | margin-inline-end: 1rem; |
| .space-x-6 | margin-inline-end: 1.25rem; |
| .space-x-7 | margin-inline-end: 1.5rem; |
| .space-x-8 | margin-inline-end: 1.75rem; |
| .space-x-9 | margin-inline-end: 2rem; |
| .space-x-10 | margin-inline-end: 2.25rem; |
| .space-x-11 | margin-inline-end: 2.5rem; |
| .space-x-12 | margin-inline-end: 3rem; |
| .space-y-0 | margin-block-end: 0; |
| .space-y-1 | margin-block-end: 0.25rem; |
| .space-y-2 | margin-block-end: 0.375rem; |
| .space-y-3 | margin-block-end: 0.5rem; |
| .space-y-4 | margin-block-end: 0.75rem; |
| .space-y-5 | margin-block-end: 1rem; |
| .space-y-6 | margin-block-end: 1.25rem; |
| .space-y-7 | margin-block-end: 1.5rem; |
| .space-y-8 | margin-block-end: 1.75rem; |
| .space-y-9 | margin-block-end: 2rem; |
| .space-y-10 | margin-block-end: 2.25rem; |
| .space-y-11 | margin-block-end: 2.5rem; |
| .space-y-12 | margin-block-end: 3rem; |

## Example

Unlike [gap utilities](utilities__gap.md) which require flexbox or grid, space utilities work on any parent element by applying margins to children.

Item 1

Item 2

Item 3

HTML

```
<div class="d-flex space-x-3 p-3 bd-pattern-diagonal rounded-3">
  <div class="p-3 bg-subtle-accent fg-accent rounded-3">Item 1</div>
  <div class="p-3 bg-subtle-accent fg-accent rounded-3">Item 2</div>
  <div class="p-3 bg-subtle-accent fg-accent rounded-3">Item 3</div>
</div>
```

The selectors generated for space utilities are wrapped in `:where()` for zero specificity, making them easy to override with additional utilities or custom CSS.

## Notation

Space utilities that apply to all breakpoints, from `xs` to `2xl`, have no breakpoint abbreviation in them. This is because those classes are applied from `min-width: 0` and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.

The classes are named using the format `{property}-{size}` for `xs` and `{breakpoint}:{property}-{size}` for `sm`, `md`, `lg`, `xl`, and `2xl`.

Where *property* is one of:

- `space-x` - for classes that set horizontal spacing via `margin-inline-end`
- `space-y` - for classes that set vertical spacing via `margin-block-end`

Where *size* is one of:

- `0` - for classes that eliminate the spacing by setting it to `0`
- `1` - (by default) for classes that set the spacing to `$spacer * .25`
- `2` - (by default) for classes that set the spacing to `$spacer * .375`
- `3` - (by default) for classes that set the spacing to `$spacer * .5`
- `4` - (by default) for classes that set the spacing to `$spacer * .75`
- `5` - (by default) for classes that set the spacing to `$spacer * 1`
- `6` - (by default) for classes that set the spacing to `$spacer * 1.25`
- `7` - (by default) for classes that set the spacing to `$spacer * 1.5`
- `8` - (by default) for classes that set the spacing to `$spacer * 1.75`
- `9` - (by default) for classes that set the spacing to `$spacer * 2`
- `10` - (by default) for classes that set the spacing to `$spacer * 2.25`
- `11` - (by default) for classes that set the spacing to `$spacer * 2.5`
- `12` - (by default) for classes that set the spacing to `$spacer * 3`

(You can add more sizes by adding entries to the `$spacers` Sass map variable.)

## Horizontal

Use `space-x-*` utilities to control the horizontal space between children:

Item 1

Item 2

Item 3

HTML

```
          <div class="d-flex space-x-3">
  <div>Item 1</div>
  <div>Item 2</div>
  <div>Item 3</div>
</div>
```

## Vertical

Use `space-y-*` utilities to control the vertical space between children:

Item 1

Item 2

Item 3

HTML

```
          <div class="space-y-3">
  <div>Item 1</div>
  <div>Item 2</div>
  <div>Item 3</div>
</div>
```

## How it works

Space utilities apply `margin-inline-end` or `margin-block-end` to every direct child except the last one via the selector `:where(.space-x-3 > :not(:last-child))`. The `:where()` wrapper keeps specificity at zero, so you can easily override individual children with standard margin utilities.

CSS

```
          :where(.space-x-3 > :not(:last-child)) {
  margin-inline-end: .5rem;
}
```

## CSS

### Sass utilities API

Space utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"space-x": (
  responsive: true,
  property: margin-inline-end,
  class: space-x,
  child-selector: "> :not(:last-child)",
  values: $spacers
),
"space-y": (
  responsive: true,
  property: margin-block-end,
  class: space-y,
  child-selector: "> :not(:last-child)",
  values: $spacers
),
```
