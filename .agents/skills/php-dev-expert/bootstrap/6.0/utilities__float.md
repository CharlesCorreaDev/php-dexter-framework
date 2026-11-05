# Float · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/float

---

# Float

Toggle floats on any element, across any breakpoint, using our responsive float utilities.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/float)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .float-start | float: inline-start; |
| .float-end | float: inline-end; |
| .float-none | float: none; |

## Overview

These utility classes float an element to the left or right, or disable floating, based on the current viewport size using the [CSS `float` property](https://developer.mozilla.org/en-US/docs/Web/CSS/float). `!important` is included to avoid specificity issues. These use the same viewport breakpoints as our grid system. Please be aware float utilities have no effect on flex items.

Float start on all viewport sizes

  

Float end on all viewport sizes

  

Don’t float on all viewport sizes

HTML

```
<div class="float-start">Float start on all viewport sizes</div><br>
<div class="float-end">Float end on all viewport sizes</div><br>
<div class="float-none">Don’t float on all viewport sizes</div>
```

Use the [`.d-flow-root` utility](utilities__display.md#clearfix) on a parent element to clear floats.

## Responsive

Responsive variations also exist for each `float` value.

Float end on viewports sized SM (small) or wider

  

Float end on viewports sized MD (medium) or wider

  

Float end on viewports sized LG (large) or wider

  

Float end on viewports sized XL (extra large) or wider

  

Float end on viewports sized 2XL (extra extra large) or wider

HTML

```
<div class="sm:float-end">Float end on viewports sized SM (small) or wider</div><br>
<div class="md:float-end">Float end on viewports sized MD (medium) or wider</div><br>
<div class="lg:float-end">Float end on viewports sized LG (large) or wider</div><br>
<div class="xl:float-end">Float end on viewports sized XL (extra large) or wider</div><br>
<div class="2xl:float-end">Float end on viewports sized 2XL (extra extra large) or wider</div><br>
```

Here are all the support classes:

- `.float-start`
- `.float-end`
- `.float-none`
- `.sm:float-start`
- `.sm:float-end`
- `.sm:float-none`
- `.md:float-start`
- `.md:float-end`
- `.md:float-none`
- `.lg:float-start`
- `.lg:float-end`
- `.lg:float-none`
- `.xl:float-start`
- `.xl:float-end`
- `.xl:float-none`
- `.2xl:float-start`
- `.2xl:float-end`
- `.2xl:float-none`

## CSS

### Sass utilities API

Float utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"float": (
  property: float,
  responsive: true,
  values: (
    start: inline-start,
    end: inline-end,
    none: none,
  )
),
```
