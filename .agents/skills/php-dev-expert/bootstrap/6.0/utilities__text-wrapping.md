# Text wrapping · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/text-wrapping

---

# Text wrapping

Utilities for controlling text wrapping, overflow, and word breaking behavior.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/white-space)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/text-wrapping)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .text-wrap | text-wrap: wrap; |
| .text-nowrap | text-wrap: nowrap; |
| .text-balance | text-wrap: balance; |
| .text-pretty | text-wrap: pretty; |
| .text-break | word-wrap: break-word; word-break: break-word; |

## Wrapping

Control how text wraps inside an element with `text-wrap` utilities. This is a newer CSS property that replaces the older `white-space` property and adds new functionality.

This text should wrap across multiple lines within the parent element.

This text should not wrap across multiple lines within the parent element.

This text should wrap in a balanced way across multiple lines within the parent element.

This text should wrap in a pretty way across multiple lines within the parent element.

HTML

```
<div class="text-wrap">…</div>
<div class="text-nowrap">…</div>
<div class="text-balance">…</div>
<div class="text-pretty">…</div>
```

## Word break

Prevent long strings of text from breaking your components' layout by using `.text-break` to set `word-wrap: break-word` and `word-break: break-word`. We use `word-wrap` instead of the more common `overflow-wrap` for wider browser support, and add the deprecated `word-break: break-word` to avoid issues with flex containers.

mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm

HTML

```
<p class="text-break">mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>
```

## CSS

### Sass utilities API

Text wrapping utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"text-wrap": (
  property: text-wrap,
  class: text,
  values: wrap nowrap balance pretty,
),
```

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"word-wrap": (
  property: word-wrap word-break,
  class: text,
  values: (break: break-word),
),
```
