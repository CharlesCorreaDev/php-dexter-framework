# Font style · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/font-style

---

# Font style

Utilities for controlling font style including italic and normal styles.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/font-style)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .fst-italic | font-style: italic; |
| .fst-normal | font-style: normal; |

## Font style

Quickly change the `font-style` of text with these utilities. `font-style` utilities are abbreviated as `.fst-*`.

Italic text.

Text with normal font style

HTML

```
<p class="fst-italic">Italic text.</p>
<p class="fst-normal">Text with normal font style</p>
```

## CSS

### Sass utilities API

Font style utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"font-style": (
  property: font-style,
  class: fst,
  values: italic normal
),
```
