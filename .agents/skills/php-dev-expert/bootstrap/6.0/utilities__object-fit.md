# Object fit · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/object-fit

---

# Object fit

Use the object fit utilities to modify how the content of a replaced element, such as an `<img>` or `<video>`, should be resized to fit its container.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/object-fit)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .object-fit-contain | object-fit: contain; |
| .object-fit-cover | object-fit: cover; |
| .object-fit-fill | object-fit: fill; |
| .object-fit-scale | object-fit: scale-down; |
| .object-fit-none | object-fit: none; |

## How it works

Change the value of the [`object-fit` property](https://developer.mozilla.org/en-US/docs/Web/CSS/object-fit) with our responsive `object-fit` utility classes. This property tells the content to fill the parent container in a variety of ways, such as preserving the aspect ratio or stretching to take up as much space as possible.

Classes for the value of `object-fit` are named using the format `.object-fit-{value}`. Choose from the following values:

- `contain`
- `cover`
- `fill`
- `scale` (for scale-down)
- `none`

## Examples

Add the `object-fit-{value}` class to the [replaced element](https://developer.mozilla.org/en-US/docs/Web/CSS/Replaced_element):

![Placeholder: Object fit contain](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23var(--bs-bg-2)'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23var(--bs-fg-4)'%20dy%3D'.3em'%3EObject%20fit%20contain%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Object fit cover](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23var(--bs-bg-2)'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23var(--bs-fg-4)'%20dy%3D'.3em'%3EObject%20fit%20cover%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Object fit fill](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23var(--bs-bg-2)'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23var(--bs-fg-4)'%20dy%3D'.3em'%3EObject%20fit%20fill%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Object fit scale down](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23var(--bs-bg-2)'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23var(--bs-fg-4)'%20dy%3D'.3em'%3EObject%20fit%20scale%20down%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Object fit none](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23var(--bs-bg-2)'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23var(--bs-fg-4)'%20dy%3D'.3em'%3EObject%20fit%20none%3C%2Ftext%3E%3C%2Fsvg%3E)

HTML

```
<img src="..." class="object-fit-contain border rounded" alt="...">
<img src="..." class="object-fit-cover border rounded" alt="...">
<img src="..." class="object-fit-fill border rounded" alt="...">
<img src="..." class="object-fit-scale border rounded" alt="...">
<img src="..." class="object-fit-none border rounded" alt="...">
```

## Responsive

Responsive variations also exist for each `object-fit` value using the format `.{breakpoint}:object-fit-{value}`, for the following breakpoint abbreviations: `sm`, `md`, `lg`, `xl`, and `2xl`. Classes can be combined for various effects as you need.

![Placeholder: Contain on sm](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23var(--bs-bg-2)'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23var(--bs-fg-4)'%20dy%3D'.3em'%3EContain%20on%20sm%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Contain on md](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23var(--bs-bg-2)'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23var(--bs-fg-4)'%20dy%3D'.3em'%3EContain%20on%20md%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Contain on lg](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23var(--bs-bg-2)'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23var(--bs-fg-4)'%20dy%3D'.3em'%3EContain%20on%20lg%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Contain on xl](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23var(--bs-bg-2)'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23var(--bs-fg-4)'%20dy%3D'.3em'%3EContain%20on%20xl%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Contain on 2xl](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23var(--bs-bg-2)'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23var(--bs-fg-4)'%20dy%3D'.3em'%3EContain%20on%202xl%3C%2Ftext%3E%3C%2Fsvg%3E)

HTML

```
<img src="..." class="sm:object-fit-contain border rounded" alt="...">
<img src="..." class="md:object-fit-contain border rounded" alt="...">
<img src="..." class="lg:object-fit-contain border rounded" alt="...">
<img src="..." class="xl:object-fit-contain border rounded" alt="...">
<img src="..." class="2xl:object-fit-contain border rounded" alt="...">
```

## Video

The `.object-fit-{value}` and responsive `.{breakpoint}:object-fit-{value}` utilities also work on `<video>` elements.

HTML

```
          <video src="..." class="object-fit-contain" autoplay></video>
<video src="..." class="object-fit-cover" autoplay></video>
<video src="..." class="object-fit-fill" autoplay></video>
<video src="..." class="object-fit-scale" autoplay></video>
<video src="..." class="object-fit-none" autoplay></video>
```

## CSS

### Sass utilities API

Object fit utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"object-fit": (
  responsive: true,
  property: object-fit,
  values: (
    contain: contain,
    cover: cover,
    fill: fill,
    scale: scale-down,
    none: none,
  )
),
```
