# Justify content · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/justify-content

---

# Justify content

Use justify-content utilities to change the alignment of flex items on the main axis.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/justify-content)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/justify-content)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .justify-content-start | justify-content: flex-start; |
| .justify-content-end | justify-content: flex-end; |
| .justify-content-center | justify-content: center; |
| .justify-content-between | justify-content: space-between; |
| .justify-content-around | justify-content: space-around; |
| .justify-content-evenly | justify-content: space-evenly; |

## Overview

Use `justify-content` utilities on flexbox containers to change the alignment of flex items on the main axis (the x-axis to start, y-axis if `flex-direction: column`). Choose from `start` (browser default), `end`, `center`, `between`, `around`, or `evenly`.

## Basic usage

Justify

Content

Start

Justify

Content

End

Justify

Content

Center

Justify

Content

Between

Justify

Content

Around

Justify

Content

Evenly

HTML

```
          <div class="d-flex justify-content-start">...</div>
<div class="d-flex justify-content-end">...</div>
<div class="d-flex justify-content-center">...</div>
<div class="d-flex justify-content-between">...</div>
<div class="d-flex justify-content-around">...</div>
<div class="d-flex justify-content-evenly">...</div>
```

## Responsive

Responsive variations also exist for `justify-content`.

- `.justify-content-start`
- `.justify-content-end`
- `.justify-content-center`
- `.justify-content-between`
- `.justify-content-around`
- `.justify-content-evenly`
- `.sm:justify-content-start`
- `.sm:justify-content-end`
- `.sm:justify-content-center`
- `.sm:justify-content-between`
- `.sm:justify-content-around`
- `.sm:justify-content-evenly`
- `.md:justify-content-start`
- `.md:justify-content-end`
- `.md:justify-content-center`
- `.md:justify-content-between`
- `.md:justify-content-around`
- `.md:justify-content-evenly`
- `.lg:justify-content-start`
- `.lg:justify-content-end`
- `.lg:justify-content-center`
- `.lg:justify-content-between`
- `.lg:justify-content-around`
- `.lg:justify-content-evenly`
- `.xl:justify-content-start`
- `.xl:justify-content-end`
- `.xl:justify-content-center`
- `.xl:justify-content-between`
- `.xl:justify-content-around`
- `.xl:justify-content-evenly`
- `.2xl:justify-content-start`
- `.2xl:justify-content-end`
- `.2xl:justify-content-center`
- `.2xl:justify-content-between`
- `.2xl:justify-content-around`
- `.2xl:justify-content-evenly`

## CSS

### Sass utilities API

Justify content utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"justify-content": (
  responsive: true,
  property: justify-content,
  values: (
    start: flex-start,
    end: flex-end,
    center: center,
    between: space-between,
    around: space-around,
    evenly: space-evenly,
  )
),
```
