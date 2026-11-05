# Font family · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/font-family

---

# Font family

Utilities for controlling font family including monospace font stack.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/font-family)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .font-monospace | font-family: var(--bs-font-mono); |
| .font-body | font-family: var(--bs-body-font-family); |

## Monospace

Change a selection to our monospace font stack with `.font-monospace`.

This is in monospace

HTML

```
<p class="font-monospace">This is in monospace</p>
```

## Body

Change a selection to our body font stack with `.font-body`, which defaults to sans-serif.

This is in body

HTML

```
<p class="font-body">This is in body</p>
```

## CSS

### Sass utilities API

Font family utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"font-family": (
  property: font-family,
  class: font,
  values: (
    "monospace": var(--font-mono),
    "body": var(--body-font-family),
  )
),
```
