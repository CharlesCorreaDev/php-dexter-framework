# Justify items · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/justify-items

---

# Justify items

Use justify-items utilities to control the alignment of grid items along the inline axis (horizontally, in most writing modes).

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/justify-items)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/justify-items)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .justify-items-start | justify-items: start; |
| .justify-items-end | justify-items: end; |
| .justify-items-center | justify-items: center; |
| .justify-items-stretch | justify-items: stretch; |

## Overview

Use `justify-items` utilities on CSS Grid containers to change the alignment of grid items along the inline (row) axis. This property controls how grid items are positioned horizontally within their grid areas.

## Basic usage

Use `justify-items` utilities to control the horizontal alignment of grid items. Choose from `start`, `end`, `center`, or `stretch` (browser default).

Justify

Items

Start

Justify

Items

End

Justify

Items

Center

Justify

Items

Stretch

HTML

```
          <div class="d-grid justify-items-start">...</div>
<div class="d-grid justify-items-end">...</div>
<div class="d-grid justify-items-center">...</div>
<div class="d-grid justify-items-stretch">...</div>
```

## Responsive

Responsive variations also exist for `justify-items`.

- `.justify-items-start`
- `.justify-items-end`
- `.justify-items-center`
- `.justify-items-stretch`
- `.sm:justify-items-start`
- `.sm:justify-items-end`
- `.sm:justify-items-center`
- `.sm:justify-items-stretch`
- `.md:justify-items-start`
- `.md:justify-items-end`
- `.md:justify-items-center`
- `.md:justify-items-stretch`
- `.lg:justify-items-start`
- `.lg:justify-items-end`
- `.lg:justify-items-center`
- `.lg:justify-items-stretch`
- `.xl:justify-items-start`
- `.xl:justify-items-end`
- `.xl:justify-items-center`
- `.xl:justify-items-stretch`
- `.2xl:justify-items-start`
- `.2xl:justify-items-end`
- `.2xl:justify-items-center`
- `.2xl:justify-items-stretch`

## CSS

### Sass utilities API

Justify items utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"justify-items": (
  responsive: true,
  property: justify-items,
  values: (
    start: start,
    end: end,
    center: center,
    stretch: stretch,
  )
),
```
