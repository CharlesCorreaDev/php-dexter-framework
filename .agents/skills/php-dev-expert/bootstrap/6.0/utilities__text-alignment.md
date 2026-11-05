# Text alignment · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/text-alignment

---

# Text alignment

Easily realign text with text alignment utilities for start, end, and center alignment.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/text-align)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/text-alignment)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .text-start | text-align: start; |
| .text-end | text-align: end; |
| .text-center | text-align: center; |

## Alignment

Easily realign text to components with text alignment classes. For start, end, and center alignment, responsive classes are available that use the same viewport width breakpoints as the grid system.

Start aligned text on all viewport sizes.

Center aligned text on all viewport sizes.

End aligned text on all viewport sizes.

End aligned text on viewports sized SM (small) or wider.

End aligned text on viewports sized MD (medium) or wider.

End aligned text on viewports sized LG (large) or wider.

End aligned text on viewports sized XL (extra large) or wider.

End aligned text on viewports sized 2xl (extra extra large) or wider.

HTML

```
<p class="text-start">Start aligned text on all viewport sizes.</p>
<p class="text-center">Center aligned text on all viewport sizes.</p>
<p class="text-end">End aligned text on all viewport sizes.</p>

<p class="sm:text-end">End aligned text on viewports sized SM (small) or wider.</p>
<p class="md:text-end">End aligned text on viewports sized MD (medium) or wider.</p>
<p class="lg:text-end">End aligned text on viewports sized LG (large) or wider.</p>
<p class="xl:text-end">End aligned text on viewports sized XL (extra large) or wider.</p>
<p class="2xl:text-end">End aligned text on viewports sized 2xl (extra extra large) or wider.</p>
```

Note that we don’t provide utility classes for justified text. While, aesthetically, justified text might look more appealing, it does make word-spacing more random and therefore harder to read.

## Responsive

Responsive variations also exist for `text-align`.

- `.text-start`
- `.text-center`
- `.text-end`
- `.sm:text-start`
- `.sm:text-center`
- `.sm:text-end`
- `.md:text-start`
- `.md:text-center`
- `.md:text-end`
- `.lg:text-start`
- `.lg:text-center`
- `.lg:text-end`
- `.xl:text-start`
- `.xl:text-center`
- `.xl:text-end`
- `.2xl:text-start`
- `.2xl:text-center`
- `.2xl:text-end`

## CSS

### Sass utilities API

Text alignment utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"text-align": (
  responsive: true,
  property: text-align,
  class: text,
  values: (
    start: start,
    end: end,
    center: center,
  )
),
```
