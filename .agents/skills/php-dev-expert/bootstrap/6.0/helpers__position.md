# Position · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/helpers/position

---

# Position

Use these helpers for quickly configuring the position of an element.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/helpers/position)

On this page…

##### On this page

| Class | Description |
| --- | --- |
| .fixed-top | Fix an element to the top of the viewport. |
| .fixed-bottom | Fix an element to the bottom of the viewport. |
| .sticky{-$infix}-top | Responsively sticky an element to the top of the viewport. |
| .sticky{-$infix}-bottom | Responsively sticky an element to the bottom of the viewport. |

## Fixed top

Position an element at the top of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add additional CSS.

HTML

```
          <div class="fixed-top">...</div>
```

## Fixed bottom

Position an element at the bottom of the viewport, from edge to edge. Be sure you understand the ramifications of fixed position in your project; you may need to add additional CSS.

HTML

```
          <div class="fixed-bottom">...</div>
```

## Sticky top

Position an element at the top of the viewport, from edge to edge, but only after you scroll past it.

HTML

```
          <div class="sticky-top">...</div>
```

## Responsive sticky top

Responsive variations also exist for `.sticky-top` utility.

HTML

```
          <div class="sm:sticky-top">Stick to the top on viewports sized SM (small) or wider</div>
<div class="md:sticky-top">Stick to the top on viewports sized MD (medium) or wider</div>
<div class="lg:sticky-top">Stick to the top on viewports sized LG (large) or wider</div>
<div class="xl:sticky-top">Stick to the top on viewports sized XL (extra-large) or wider</div>
<div class="2xl:sticky-top">Stick to the top on viewports sized 2XL (extra-extra-large) or wider</div>
```

## Sticky bottom

Position an element at the bottom of the viewport, from edge to edge, but only after you scroll past it.

HTML

```
          <div class="sticky-bottom">...</div>
```

## Responsive sticky bottom

Responsive variations also exist for `.sticky-bottom` utility.

HTML

```
          <div class="sm:sticky-bottom">Stick to the bottom on viewports sized SM (small) or wider</div>
<div class="md:sticky-bottom">Stick to the bottom on viewports sized MD (medium) or wider</div>
<div class="lg:sticky-bottom">Stick to the bottom on viewports sized LG (large) or wider</div>
<div class="xl:sticky-bottom">Stick to the bottom on viewports sized XL (extra-large) or wider</div>
<div class="2xl:sticky-bottom">Stick to the bottom on viewports sized 2XL (extra-extra-large) or wider</div>
```
