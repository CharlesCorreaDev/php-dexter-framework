# Align content · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/align-content

---

# Align content

Use align-content utilities to align flex items together on the cross axis.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/align-content)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/align-content)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .align-content-start | align-content: flex-start; |
| .align-content-end | align-content: flex-end; |
| .align-content-center | align-content: center; |
| .align-content-between | align-content: space-between; |
| .align-content-around | align-content: space-around; |
| .align-content-stretch | align-content: stretch; |

## Overview

Use `align-content` utilities on flexbox containers to align flex items *together* on the cross axis. Choose from `start` (browser default), `end`, `center`, `between`, `around`, or `stretch`. To demonstrate these utilities, we’ve enforced `flex-wrap: wrap` and increased the number of flex items.

**Heads up!** This property has no effect on single rows of flex items.

## Basic usage

### Start

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

HTML

```
          <div class="d-flex align-content-start flex-wrap">...</div>
```

### End

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

HTML

```
          <div class="d-flex align-content-end flex-wrap">...</div>
```

### Center

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

HTML

```
          <div class="d-flex align-content-center flex-wrap">...</div>
```

### Between

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

HTML

```
          <div class="d-flex align-content-between flex-wrap">...</div>
```

### Around

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

HTML

```
          <div class="d-flex align-content-around flex-wrap">...</div>
```

### Stretch

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

Flex item

HTML

```
          <div class="d-flex align-content-stretch flex-wrap">...</div>
```

## Responsive

Responsive variations also exist for `align-content`.

- `.align-content-start`
- `.align-content-end`
- `.align-content-center`
- `.align-content-between`
- `.align-content-around`
- `.align-content-stretch`
- `.sm:align-content-start`
- `.sm:align-content-end`
- `.sm:align-content-center`
- `.sm:align-content-between`
- `.sm:align-content-around`
- `.sm:align-content-stretch`
- `.md:align-content-start`
- `.md:align-content-end`
- `.md:align-content-center`
- `.md:align-content-between`
- `.md:align-content-around`
- `.md:align-content-stretch`
- `.lg:align-content-start`
- `.lg:align-content-end`
- `.lg:align-content-center`
- `.lg:align-content-between`
- `.lg:align-content-around`
- `.lg:align-content-stretch`
- `.xl:align-content-start`
- `.xl:align-content-end`
- `.xl:align-content-center`
- `.xl:align-content-between`
- `.xl:align-content-around`
- `.xl:align-content-stretch`
- `.2xl:align-content-start`
- `.2xl:align-content-end`
- `.2xl:align-content-center`
- `.2xl:align-content-between`
- `.2xl:align-content-around`
- `.2xl:align-content-stretch`

## CSS

### Sass utilities API

Align content utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"align-content": (
  responsive: true,
  property: align-content,
  values: (
    start: flex-start,
    end: flex-end,
    center: center,
    between: space-between,
    around: space-around,
    stretch: stretch,
  )
),
```
