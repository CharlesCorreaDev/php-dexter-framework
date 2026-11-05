# Text decoration · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/text-decoration

---

# Text decoration

Utilities for controlling text decoration, text transform, and text color reset.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/text-decoration)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/text-decoration)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .underline-offset-1 | text-underline-offset: 0.125em; |
| .underline-offset-2 | text-underline-offset: 0.25em; |
| .underline-offset-3 | text-underline-offset: 0.375em; |
| .underline-primary | --bs-underline-color: light-dark(var(--bs-blue-600), var(--bs-blue-400)); text-decoration-color: var(--bs-underline-color); |
| .underline-accent | --bs-underline-color: light-dark(var(--bs-indigo-600), color-mix(in oklch, var(--bs-indigo-400), var(--bs-indigo-300))); text-decoration-color: var(--bs-underline-color); |
| .underline-success | --bs-underline-color: light-dark(var(--bs-green-600), var(--bs-green-400)); text-decoration-color: var(--bs-underline-color); |
| .underline-danger | --bs-underline-color: light-dark(var(--bs-red-600), var(--bs-red-400)); text-decoration-color: var(--bs-underline-color); |
| .underline-warning | --bs-underline-color: light-dark(var(--bs-yellow-700), var(--bs-yellow-400)); text-decoration-color: var(--bs-underline-color); |
| .underline-info | --bs-underline-color: light-dark(var(--bs-cyan-600), var(--bs-cyan-400)); text-decoration-color: var(--bs-underline-color); |
| .underline-inverse | --bs-underline-color: light-dark(var(--bs-gray-900), var(--bs-gray-200)); text-decoration-color: var(--bs-underline-color); |
| .underline-secondary | --bs-underline-color: light-dark(var(--bs-gray-600), var(--bs-gray-400)); text-decoration-color: var(--bs-underline-color); |
| .underline-10 | text-decoration-color: color-mix(in oklch, var(--bs-underline-color, currentcolor) 10%, transparent); |
| .underline-20 | text-decoration-color: color-mix(in oklch, var(--bs-underline-color, currentcolor) 20%, transparent); |
| .underline-30 | text-decoration-color: color-mix(in oklch, var(--bs-underline-color, currentcolor) 30%, transparent); |
| .underline-40 | text-decoration-color: color-mix(in oklch, var(--bs-underline-color, currentcolor) 40%, transparent); |
| .underline-50 | text-decoration-color: color-mix(in oklch, var(--bs-underline-color, currentcolor) 50%, transparent); |
| .underline-60 | text-decoration-color: color-mix(in oklch, var(--bs-underline-color, currentcolor) 60%, transparent); |
| .underline-70 | text-decoration-color: color-mix(in oklch, var(--bs-underline-color, currentcolor) 70%, transparent); |
| .underline-80 | text-decoration-color: color-mix(in oklch, var(--bs-underline-color, currentcolor) 80%, transparent); |
| .underline-90 | text-decoration-color: color-mix(in oklch, var(--bs-underline-color, currentcolor) 90%, transparent); |
| .underline-100 | text-decoration-color: var(--bs-underline-color, currentcolor); |
| .underline-thickness-1 | text-decoration-thickness: 1px; |
| .underline-thickness-2 | text-decoration-thickness: 2px; |
| .underline-thickness-3 | text-decoration-thickness: 3px; |
| .underline-thickness-4 | text-decoration-thickness: 4px; |
| .underline-thickness-5 | text-decoration-thickness: 5px; |
| .text-decoration-none | text-decoration: none; |
| .text-decoration-underline | text-decoration: underline; |
| .text-decoration-line-through | text-decoration: line-through; |

## Text decoration

Decorate text in components with text decoration classes.

This text has a line underneath it.

This text has a line going through it.

[This link has its text decoration removed](#)

HTML

```
<p class="text-decoration-underline">This text has a line underneath it.</p>
<p class="text-decoration-line-through">This text has a line going through it.</p>
<a href="#" class="text-decoration-none">This link has its text decoration removed</a>
```

## Underline

### Offset

Change the underline’s distance from your text. Offset is set in `em` units to automatically scale with the element’s current `font-size`.

[Default link](#)

[Offset 1 link](#)

[Offset 2 link](#)

[Offset 3 link](#)

HTML

```
<p><a href="#">Default link</a></p>
<p><a class="underline-offset-1" href="#">Offset 1 link</a></p>
<p><a class="underline-offset-2" href="#">Offset 2 link</a></p>
<p><a class="underline-offset-3" href="#">Offset 3 link</a></p>
```

### Color

Change the underline’s color independent of the text color.

[Primary underline](#)

[Accent underline](#)

[Success underline](#)

[Danger underline](#)

[Warning underline](#)

[Info underline](#)

[Inverse underline](#)

[Secondary underline](#)

HTML

```
<p><a href="#" class="underline-primary">Primary underline</a></p>
<p><a href="#" class="underline-accent">Accent underline</a></p>
<p><a href="#" class="underline-success">Success underline</a></p>
<p><a href="#" class="underline-danger">Danger underline</a></p>
<p><a href="#" class="underline-warning">Warning underline</a></p>
<p><a href="#" class="underline-info">Info underline</a></p>
<p><a href="#" class="underline-inverse">Inverse underline</a></p>
<p><a href="#" class="underline-secondary">Secondary underline</a></p>
```

### Opacity

Change the underline’s opacity. Fades the current text color by default, or pair with `.underline-{color}` to first set a color that the opacity is then mixed against.

[Underline opacity 10](#)

[Underline opacity 20](#)

[Underline opacity 30](#)

[Underline opacity 40](#)

[Underline opacity 50](#)

[Underline opacity 60](#)

[Underline opacity 70](#)

[Underline opacity 80](#)

[Underline opacity 90](#)

[Underline opacity 100](#)

HTML

```
<p><a class="underline-10" href="#">Underline opacity 10</a></p>
<p><a class="underline-20" href="#">Underline opacity 20</a></p>
<p><a class="underline-30" href="#">Underline opacity 30</a></p>
<p><a class="underline-40" href="#">Underline opacity 40</a></p>
<p><a class="underline-50" href="#">Underline opacity 50</a></p>
<p><a class="underline-60" href="#">Underline opacity 60</a></p>
<p><a class="underline-70" href="#">Underline opacity 70</a></p>
<p><a class="underline-80" href="#">Underline opacity 80</a></p>
<p><a class="underline-90" href="#">Underline opacity 90</a></p>
<p><a class="underline-100" href="#">Underline opacity 100</a></p>
```

Pair an opacity class with a color class to fade that specific color instead of the default text color:

[Faded success underline](#)

HTML

```
<a class="theme-success underline-success underline-30 hover:underline-80" href="#">Faded success underline</a>
```

### Thickness

Change the thickness of the underline.

[Default link](#)

[Thickness 1 link](#)

[Thickness 2 link](#)

[Thickness 3 link](#)

[Thickness 4 link](#)

[Thickness 5 link](#)

HTML

```
<p><a href="#">Default link</a></p>
<p><a class="underline-thickness-1" href="#">Thickness 1 link</a></p>
<p><a class="underline-thickness-2" href="#">Thickness 2 link</a></p>
<p><a class="underline-thickness-3" href="#">Thickness 3 link</a></p>
<p><a class="underline-thickness-4" href="#">Thickness 4 link</a></p>
<p><a class="underline-thickness-5" href="#">Thickness 5 link</a></p>
```

### Hover variants

The `.underline-offset`, `.underline-{N}`, and `.underline-thickness` utilities include `:hover` variants by default. Mix and match to create unique link styles.

[Underline with offset and opacity changes on hover](#)

HTML

```
<a class="underline-offset-2 hover:underline-offset-3 underline-10 hover:underline-50 hover:underline-thickness-2" href="#">
  Underline with offset and opacity changes on hover
</a>
```

## CSS

### Sass utilities API

Text decoration utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"underline-offset": (
  property: text-underline-offset,
  class: underline-offset,
  state: hover,
  values: (
    1: .125em,
    2: .25em,
    3: .375em,
  )
),
"underline-color": (
  property: (
    "--underline-color": null,
    "text-decoration-color": var(--underline-color)
  ),
  class: underline,
  values: theme-color-values("fg"),
),
"underline-opacity": (
  property: text-decoration-color,
  class: underline,
  state: hover,
  values: theme-opacity-values(--underline-color, currentcolor)
),
"underline-thickness": (
  property: text-decoration-thickness,
  class: underline-thickness,
  state: hover,
  values: (
    1: 1px,
    2: 2px,
    3: 3px,
    4: 4px,
    5: 5px,
  )
),
```
