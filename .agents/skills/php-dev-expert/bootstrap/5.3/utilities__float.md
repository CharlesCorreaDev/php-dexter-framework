# Float · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/utilities/float

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/utilities/float.mdx "View and edit this file on GitHub")

# Float

Toggle floats on any element, across any breakpoint, using our responsive float utilities.

On this page
   
**On this page**

---

## Overview

These utility classes float an element to the left or right, or disable floating, based on the current viewport size using the [CSS `float` property](https://developer.mozilla.org/en-US/docs/Web/CSS/float). `!important` is included to avoid specificity issues. These use the same viewport breakpoints as our grid system. Please be aware float utilities have no effect on flex items.

Float start on all viewport sizes

  

Float end on all viewport sizes

  

Don’t float on all viewport sizes

html

```
<div class="float-start">Float start on all viewport sizes</div><br>
<div class="float-end">Float end on all viewport sizes</div><br>
<div class="float-none">Don’t float on all viewport sizes</div>
```

Use the [clearfix helper](helpers__clearfix.md) on a parent element to clear floats.

## Responsive

Responsive variations also exist for each `float` value.

Float end on viewports sized SM (small) or wider

  

Float end on viewports sized MD (medium) or wider

  

Float end on viewports sized LG (large) or wider

  

Float end on viewports sized XL (extra large) or wider

  

Float end on viewports sized XXL (extra extra large) or wider

html

```
<div class="float-sm-end">Float end on viewports sized SM (small) or wider</div><br>
<div class="float-md-end">Float end on viewports sized MD (medium) or wider</div><br>
<div class="float-lg-end">Float end on viewports sized LG (large) or wider</div><br>
<div class="float-xl-end">Float end on viewports sized XL (extra large) or wider</div><br>
<div class="float-xxl-end">Float end on viewports sized XXL (extra extra large) or wider</div><br>
```

Here are all the support classes:

- `.float-start`
- `.float-end`
- `.float-none`
- `.float-sm-start`
- `.float-sm-end`
- `.float-sm-none`
- `.float-md-start`
- `.float-md-end`
- `.float-md-none`
- `.float-lg-start`
- `.float-lg-end`
- `.float-lg-none`
- `.float-xl-start`
- `.float-xl-end`
- `.float-xl-none`
- `.float-xxl-start`
- `.float-xxl-end`
- `.float-xxl-none`

## CSS

### Sass utilities API

Float utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_utilities.scss)

```
"float": (
  responsive: true,
  property: float,
  values: (
    start: left,
    end: right,
    none: none,
  )
),
```
