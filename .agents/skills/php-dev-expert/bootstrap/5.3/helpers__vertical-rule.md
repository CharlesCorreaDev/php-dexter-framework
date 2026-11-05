# Vertical rule · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/helpers/vertical-rule

---

Added in v5.1  [View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/helpers/vertical-rule.mdx "View and edit this file on GitHub")

# Vertical rule

Use the custom vertical rule helper to create vertical dividers like the `<hr>` element.

On this page
   
**On this page**

---

## How it works

Vertical rules are inspired by the `<hr>` element, allowing you to create vertical dividers in common layouts. They’re styled just like `<hr>` elements:

- They’re `1px` wide
- They have `min-height` of `1em`
- Their color is set via `currentColor` and `opacity`

Customize them with additional styles as needed.

## Example

html

```
<div class="vr"></div>
```

Vertical rules scale their height in flex layouts:

html

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

html

```
<div class="hstack gap-3">
  <div class="p-2">First item</div>
  <div class="p-2 ms-auto">Second item</div>
  <div class="vr"></div>
  <div class="p-2">Third item</div>
</div>
```

## CSS

### Sass variables

Customize the vertical rule Sass variable to change its width.

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$vr-border-width:             var(--#{$prefix}border-width);
```
