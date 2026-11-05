# Align items · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/align-items

---

# Align items

Use align-items utilities to change the alignment of flex items on the cross axis.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/align-items)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/align-items)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .align-items-start | align-items: flex-start; |
| .align-items-end | align-items: flex-end; |
| .align-items-center | align-items: center; |
| .align-items-baseline | align-items: baseline; |
| .align-items-stretch | align-items: stretch; |

## Overview

Use `align-items` utilities on flexbox containers to change the alignment of flex items on the cross axis (the y-axis to start, x-axis if `flex-direction: column`). Choose from `start`, `end`, `center`, `baseline`, or `stretch` (browser default).

## Basic usage

Align

Items

Start

Align

Items

End

Align

Items

Center

Align

Items

Baseline

Align

Items

Stretch

HTML

```
          <div class="d-flex align-items-start">...</div>
<div class="d-flex align-items-end">...</div>
<div class="d-flex align-items-center">...</div>
<div class="d-flex align-items-baseline">...</div>
<div class="d-flex align-items-stretch">...</div>
```

## Responsive

Responsive variations also exist for `align-items`.

- `.align-items-start`
- `.align-items-end`
- `.align-items-center`
- `.align-items-baseline`
- `.align-items-stretch`
- `.sm:align-items-start`
- `.sm:align-items-end`
- `.sm:align-items-center`
- `.sm:align-items-baseline`
- `.sm:align-items-stretch`
- `.md:align-items-start`
- `.md:align-items-end`
- `.md:align-items-center`
- `.md:align-items-baseline`
- `.md:align-items-stretch`
- `.lg:align-items-start`
- `.lg:align-items-end`
- `.lg:align-items-center`
- `.lg:align-items-baseline`
- `.lg:align-items-stretch`
- `.xl:align-items-start`
- `.xl:align-items-end`
- `.xl:align-items-center`
- `.xl:align-items-baseline`
- `.xl:align-items-stretch`
- `.2xl:align-items-start`
- `.2xl:align-items-end`
- `.2xl:align-items-center`
- `.2xl:align-items-baseline`
- `.2xl:align-items-stretch`

## CSS

### Sass utilities API

Align items utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"align-items": (
  responsive: true,
  property: align-items,
  values: (
    start: flex-start,
    end: flex-end,
    center: center,
    baseline: baseline,
    stretch: stretch,
  )
),
```
