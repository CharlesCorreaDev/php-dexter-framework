# Divide · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/divide

---

# Divide

Divide content with borders between direct children of an element. Supports horizontal and vertical dividers with responsive variants.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/border)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/divide)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .divide-x | border-inline-start: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color); |
| .divide-x-0 | border-inline-start: 0; |
| .divide-y | border-block-start: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color); |
| .divide-y-0 | border-block-start: 0; |

## Example

Rather than adding border classes to individual children, use `.divide-x` or `.divide-y` on the parent.

Item 1

Item 2

Item 3

HTML

```
<div class="d-flex divide-x">
  <div class="px-3 py-2">Item 1</div>
  <div class="px-3 py-2">Item 2</div>
  <div class="px-3 py-2">Item 3</div>
</div>
```

The selectors generated for divider utilities are wrapped in `:where()` for zero specificity, making them easy to override with additional utilities or custom CSS.

## Horizontal

Use `.divide-x` to add vertical border lines between horizontally arranged children:

One

Two

Three

HTML

```
<div class="d-flex divide-x rounded-3 border">
  <div class="px-4 py-3">One</div>
  <div class="px-4 py-3">Two</div>
  <div class="px-4 py-3">Three</div>
</div>
```

## Vertical

Use `.divide-y` to add horizontal border lines between vertically stacked children:

One

Two

Three

HTML

```
<div class="divide-y rounded-3 border d-inline-block">
  <div class="px-4 py-3">One</div>
  <div class="px-4 py-3">Two</div>
  <div class="px-4 py-3">Three</div>
</div>
```

### Removing dividers

Use `.divide-x-0` or `.divide-y-0` to remove dividers, which is particularly useful at specific breakpoints:

HTML

```
          <div class="divide-y divide-y-md-0 divide-x-md">
  ...
</div>
```

### How it works

Divide utilities apply `border-inline-start` or `border-block-start` to every direct child except the first via the selector `:where(.divide-y > :not(:first-child))`. The `:where()` wrapper keeps specificity at zero. Border styling is controlled by the existing `--border-width`, `--border-style`, and `--border-color` CSS variables.

CSS

```
          :where(.divide-y > :not(:first-child)) {
  border-block-start: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color);
}
```

Divider color comes from the inheriting `--bs-border-color` design token, so set it on the parent to recolor dividers. Note this differs from the `.border-{color}` utilities, which are element-scoped (they set the non-inheriting `--bs-bc` variable) and therefore won’t recolor a parent’s dividers.

## CSS

### Sass utilities API

Divide utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"divide-x": (
  responsive: true,
  property: border-inline-start,
  class: divide-x,
  child-selector: "> :not(:first-child)",
  values: (
    null: var(--border-width) var(--border-style) var(--border-color),
    0: 0,
  )
),
"divide-y": (
  responsive: true,
  property: border-block-start,
  class: divide-y,
  child-selector: "> :not(:first-child)",
  values: (
    null: var(--border-width) var(--border-style) var(--border-color),
    0: 0,
  )
),
```
