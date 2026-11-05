# Align self · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/align-self

---

# Align self

Use align-self utilities to individually change the alignment of flex items on the cross axis.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/align-self)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/align-self)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .align-self-auto | align-self: auto; |
| .align-self-start | align-self: flex-start; |
| .align-self-end | align-self: flex-end; |
| .align-self-center | align-self: center; |
| .align-self-baseline | align-self: baseline; |
| .align-self-stretch | align-self: stretch; |

## Overview

Use `align-self` utilities on flexbox items to individually change their alignment on the cross axis (the y-axis to start, x-axis if `flex-direction: column`). Choose from the same options as `align-items`: `start`, `end`, `center`, `baseline`, or `stretch` (browser default).

## Basic usage

Flex item

Aligned flex item

Flex item

Flex item

Aligned flex item

Flex item

Flex item

Aligned flex item

Flex item

Flex item

Aligned flex item

Flex item

Flex item

Aligned flex item

Flex item

HTML

```
          <div class="align-self-start">Aligned flex item</div>
<div class="align-self-end">Aligned flex item</div>
<div class="align-self-center">Aligned flex item</div>
<div class="align-self-baseline">Aligned flex item</div>
<div class="align-self-stretch">Aligned flex item</div>
```

## Responsive

Responsive variations also exist for `align-self`.

- `.align-self-start`
- `.align-self-end`
- `.align-self-center`
- `.align-self-baseline`
- `.align-self-stretch`
- `.sm:align-self-start`
- `.sm:align-self-end`
- `.sm:align-self-center`
- `.sm:align-self-baseline`
- `.sm:align-self-stretch`
- `.md:align-self-start`
- `.md:align-self-end`
- `.md:align-self-center`
- `.md:align-self-baseline`
- `.md:align-self-stretch`
- `.lg:align-self-start`
- `.lg:align-self-end`
- `.lg:align-self-center`
- `.lg:align-self-baseline`
- `.lg:align-self-stretch`
- `.xl:align-self-start`
- `.xl:align-self-end`
- `.xl:align-self-center`
- `.xl:align-self-baseline`
- `.xl:align-self-stretch`
- `.2xl:align-self-start`
- `.2xl:align-self-end`
- `.2xl:align-self-center`
- `.2xl:align-self-baseline`
- `.2xl:align-self-stretch`

## CSS

### Sass utilities API

Align self utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"align-self": (
  responsive: true,
  property: align-self,
  values: (
    auto: auto,
    start: flex-start,
    end: flex-end,
    center: center,
    baseline: baseline,
    stretch: stretch,
  )
),
```
