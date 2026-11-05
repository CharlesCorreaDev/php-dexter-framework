# Link · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/utilities/link

---

Added in v5.3  [View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/utilities/link.mdx "View and edit this file on GitHub")

# Link

Link utilities are used to stylize your anchors to adjust their color, opacity, underline offset, underline color, and more.

On this page
   
**On this page**

---

## Link opacity

Change the alpha opacity of the link `rgba()` color value with utilities. Please be aware that changes to a color’s opacity can lead to links with [*insufficient* contrast](getting-started__accessibility.md#color-contrast).

[Link opacity 10](#)

[Link opacity 25](#)

[Link opacity 50](#)

[Link opacity 75](#)

[Link opacity 100](#)

html

```
<p><a class="link-opacity-10" href="#">Link opacity 10</a></p>
<p><a class="link-opacity-25" href="#">Link opacity 25</a></p>
<p><a class="link-opacity-50" href="#">Link opacity 50</a></p>
<p><a class="link-opacity-75" href="#">Link opacity 75</a></p>
<p><a class="link-opacity-100" href="#">Link opacity 100</a></p>
```

You can even change the opacity level on hover.

[Link hover opacity 10](#)

[Link hover opacity 25](#)

[Link hover opacity 50](#)

[Link hover opacity 75](#)

[Link hover opacity 100](#)

html

```
<p><a class="link-opacity-10-hover" href="#">Link hover opacity 10</a></p>
<p><a class="link-opacity-25-hover" href="#">Link hover opacity 25</a></p>
<p><a class="link-opacity-50-hover" href="#">Link hover opacity 50</a></p>
<p><a class="link-opacity-75-hover" href="#">Link hover opacity 75</a></p>
<p><a class="link-opacity-100-hover" href="#">Link hover opacity 100</a></p>
```

## Link underlines

### Underline color

Change the underline’s color independent of the link text color.

[Primary underline](#)

[Secondary underline](#)

[Success underline](#)

[Danger underline](#)

[Warning underline](#)

[Info underline](#)

[Light underline](#)

[Dark underline](#)

html

```
<p><a href="#" class="link-underline-primary">Primary underline</a></p>
<p><a href="#" class="link-underline-secondary">Secondary underline</a></p>
<p><a href="#" class="link-underline-success">Success underline</a></p>
<p><a href="#" class="link-underline-danger">Danger underline</a></p>
<p><a href="#" class="link-underline-warning">Warning underline</a></p>
<p><a href="#" class="link-underline-info">Info underline</a></p>
<p><a href="#" class="link-underline-light">Light underline</a></p>
<p><a href="#" class="link-underline-dark">Dark underline</a></p>
```

### Underline offset

Change the underline’s distance from your text. Offset is set in `em` units to automatically scale with the element’s current `font-size`.

[Default link](#)

[Offset 1 link](#)

[Offset 2 link](#)

[Offset 3 link](#)

html

```
<p><a href="#">Default link</a></p>
<p><a class="link-offset-1" href="#">Offset 1 link</a></p>
<p><a class="link-offset-2" href="#">Offset 2 link</a></p>
<p><a class="link-offset-3" href="#">Offset 3 link</a></p>
```

### Underline opacity

Change the underline’s opacity. Requires adding `.link-underline` to first set an `rgba()` color we use to then modify the alpha opacity.

[Underline opacity 0](#)

[Underline opacity 10](#)

[Underline opacity 25](#)

[Underline opacity 50](#)

[Underline opacity 75](#)

[Underline opacity 100](#)

html

```
<p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">Underline opacity 0</a></p>
<p><a class="link-offset-2 link-underline link-underline-opacity-10" href="#">Underline opacity 10</a></p>
<p><a class="link-offset-2 link-underline link-underline-opacity-25" href="#">Underline opacity 25</a></p>
<p><a class="link-offset-2 link-underline link-underline-opacity-50" href="#">Underline opacity 50</a></p>
<p><a class="link-offset-2 link-underline link-underline-opacity-75" href="#">Underline opacity 75</a></p>
<p><a class="link-offset-2 link-underline link-underline-opacity-100" href="#">Underline opacity 100</a></p>
```

### Hover variants

Just like the `.link-opacity-*-hover` utilities, `.link-offset` and `.link-underline-opacity` utilities include `:hover` variants by default. Mix and match to create unique link styles.

[Underline opacity 0](#)

html

```
<a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
  Underline opacity 0
</a>
```

## Colored links

[Colored link helpers](helpers__colored-links.md) have been updated to pair with our link utilities. Use the new utilities to modify the link opacity, underline opacity, and underline offset.

[Primary link](#)

[Secondary link](#)

[Success link](#)

[Danger link](#)

[Warning link](#)

[Info link](#)

[Light link](#)

[Dark link](#)

[Emphasis link](#)

html

```
<p><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Primary link</a></p>
<p><a href="#" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Secondary link</a></p>
<p><a href="#" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Success link</a></p>
<p><a href="#" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Danger link</a></p>
<p><a href="#" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Warning link</a></p>
<p><a href="#" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Info link</a></p>
<p><a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Light link</a></p>
<p><a href="#" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Dark link</a></p>
<p><a href="#" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">Emphasis link</a></p>
```

**Accessibility tip:** Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies like screen readers. Please ensure the meaning is obvious from the content itself (e.g., the visible text with a [*sufficient* color contrast](getting-started__accessibility.md#color-contrast)) or is included through alternative means, such as additional text hidden with the `.visually-hidden` class.

## CSS

In addition to the following Sass functionality, consider reading about our included [CSS custom properties](customize__css-variables.md) (aka CSS variables) for colors and more.

### Sass utilities API

Link utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_utilities.scss)

```
"link-opacity": (
  css-var: true,
  class: link-opacity,
  state: hover,
  values: (
    10: .1,
    25: .25,
    50: .5,
    75: .75,
    100: 1
  )
),
"link-offset": (
  property: text-underline-offset,
  class: link-offset,
  state: hover,
  values: (
    1: .125em,
    2: .25em,
    3: .375em,
  )
),
"link-underline": (
  property: text-decoration-color,
  class: link-underline,
  local-vars: (
    "link-underline-opacity": 1
  ),
  values: map-merge(
    $utilities-links-underline,
    (
      null: rgba(var(--#{$prefix}link-color-rgb), var(--#{$prefix}link-underline-opacity, 1)),
    )
  )
),
"link-underline-opacity": (
  css-var: true,
  class: link-underline-opacity,
  state: hover,
  values: (
    0: 0,
    10: .1,
    25: .25,
    50: .5,
    75: .75,
    100: 1
  ),
),
```
