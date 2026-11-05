# Vertical rule · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/helpers/vertical-rule

---

# Vertical rule

Use the custom vertical rule helper to create vertical dividers like the `<hr>` element.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/helpers/vertical-rule)

On this page…

##### On this page

## How it works

Vertical rules are inspired by the `<hr>` element, allowing you to create vertical dividers in common layouts. They’re styled just like `<hr>` elements:

- They’re `1px` wide
- They have `min-height` of `1em`
- Their color is set via `currentColor` and `opacity`

Customize them with additional styles as needed.

## Example

HTML

```
<div class="vr"></div>
```

Vertical rules scale their height in flex layouts:

HTML

```
<div class="d-flex" style="height: 200px;">
  <div class="vr"></div>
</div>
```

## With stacks

They can also be used in [stacks](helpers__stacks.md):

First item

Second item

Third item

HTML

```
<div class="hstack gap-3">
  <div class="p-2">First item</div>
  <div class="p-2 ms-auto">Second item</div>
  <div class="vr"></div>
  <div class="p-2">Third item</div>
</div>
```

## CSS

Vertical rules use a CSS variable with fallback for their default border width. Out of the box, `--vr-border-width` is unassigned, meaning it defaults to the value of `--border-width`.
