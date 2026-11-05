# Position · Bootstrap v4.6

> **Fonte / Source:** https://getbootstrap.com/docs/4.6/utilities/position/

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v4.6.2/site/content/docs/4.6/utilities/position.md "View and edit this file on GitHub")

# Position

Use these shorthand utilities for quickly configuring the position of an element.

## Common values

Quick positioning classes are available, though they are not responsive.

```
<div class="position-static">...</div>
<div class="position-relative">...</div>
<div class="position-absolute">...</div>
<div class="position-fixed">...</div>
<div class="position-sticky">...</div>
```

## Fixed top

Position an element at the top of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add additional CSS.

```
<div class="fixed-top">...</div>
```

## Fixed bottom

Position an element at the bottom of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add additional CSS.

```
<div class="fixed-bottom">...</div>
```

## Sticky top

Position an element at the top of the viewport, from edge to edge, but only after you scroll past it. The `.sticky-top` utility uses CSS’s `position: sticky`, which isn’t fully supported in all browsers.

**IE11 and IE10 will render `position: sticky` as `position: relative`.** As such, we wrap the styles in a `@supports` query, limiting the stickiness to only browsers that can render it properly.

```
<div class="sticky-top">...</div>
```
