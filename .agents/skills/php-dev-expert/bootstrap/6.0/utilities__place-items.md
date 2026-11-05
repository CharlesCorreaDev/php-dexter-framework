# Place items · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/place-items

---

# Place items

Use place-items utilities to control the alignment of grid items within their grid areas on both the block and inline axes simultaneously.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/place-items)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/place-items)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .place-items-start | place-items: start; |
| .place-items-end | place-items: end; |
| .place-items-center | place-items: center; |
| .place-items-stretch | place-items: stretch; |

## Overview

Use `place-items` utilities on CSS Grid containers as a shorthand to set both `align-items` and `justify-items` at once. This property controls how grid items are positioned within their grid areas on both axes.

## Basic usage

Use `place-items` utilities to control the alignment of grid items. Choose from `start`, `end`, `center`, or `stretch` (browser default).

Place

Items

Start

Place

Items

End

Place

Items

Center

Place

Items

Stretch

HTML

```
          <div class="d-grid place-items-start">...</div>
<div class="d-grid place-items-end">...</div>
<div class="d-grid place-items-center">...</div>
<div class="d-grid place-items-stretch">...</div>
```

## Responsive

Responsive variations also exist for `place-items`.

- `.place-items-start`
- `.place-items-end`
- `.place-items-center`
- `.place-items-stretch`
- `.sm:place-items-start`
- `.sm:place-items-end`
- `.sm:place-items-center`
- `.sm:place-items-stretch`
- `.md:place-items-start`
- `.md:place-items-end`
- `.md:place-items-center`
- `.md:place-items-stretch`
- `.lg:place-items-start`
- `.lg:place-items-end`
- `.lg:place-items-center`
- `.lg:place-items-stretch`
- `.xl:place-items-start`
- `.xl:place-items-end`
- `.xl:place-items-center`
- `.xl:place-items-stretch`
- `.2xl:place-items-start`
- `.2xl:place-items-end`
- `.2xl:place-items-center`
- `.2xl:place-items-stretch`

## CSS

### Sass utilities API

Place items utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"place-items": (
  responsive: true,
  property: place-items,
  values: (
    start: start,
    end: end,
    center: center,
    stretch: stretch,
  )
),
```
