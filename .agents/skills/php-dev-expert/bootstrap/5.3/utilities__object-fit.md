# Object fit · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/utilities/object-fit

---

Added in v5.3  [View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/utilities/object-fit.mdx "View and edit this file on GitHub")

# Object fit

Use the object fit utilities to modify how the content of a replaced element, such as an `<img>` or `<video>`, should be resized to fit its container.

On this page
   
**On this page**

---

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

![Placeholder: Object fit contain](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%2C-apple-system%2C%22Segoe%20UI%22%2CRoboto%2C%22Helvetica%20Neue%22%2C%22Noto%20Sans%22%2C%22Liberation%20Sans%22%2CArial%2Csans-serif%2C%22Apple%20Color%20Emoji%22%2C%22Segoe%20UI%20Emoji%22%2C%22Segoe%20UI%20Symbol%22%2C%22Noto%20Color%20Emoji%22%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23868e96'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23dee2e6'%20dy%3D'.3em'%3EObject%20fit%20contain%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Object fit cover](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%2C-apple-system%2C%22Segoe%20UI%22%2CRoboto%2C%22Helvetica%20Neue%22%2C%22Noto%20Sans%22%2C%22Liberation%20Sans%22%2CArial%2Csans-serif%2C%22Apple%20Color%20Emoji%22%2C%22Segoe%20UI%20Emoji%22%2C%22Segoe%20UI%20Symbol%22%2C%22Noto%20Color%20Emoji%22%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23868e96'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23dee2e6'%20dy%3D'.3em'%3EObject%20fit%20cover%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Object fit fill](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%2C-apple-system%2C%22Segoe%20UI%22%2CRoboto%2C%22Helvetica%20Neue%22%2C%22Noto%20Sans%22%2C%22Liberation%20Sans%22%2CArial%2Csans-serif%2C%22Apple%20Color%20Emoji%22%2C%22Segoe%20UI%20Emoji%22%2C%22Segoe%20UI%20Symbol%22%2C%22Noto%20Color%20Emoji%22%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23868e96'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23dee2e6'%20dy%3D'.3em'%3EObject%20fit%20fill%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Object fit scale down](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%2C-apple-system%2C%22Segoe%20UI%22%2CRoboto%2C%22Helvetica%20Neue%22%2C%22Noto%20Sans%22%2C%22Liberation%20Sans%22%2CArial%2Csans-serif%2C%22Apple%20Color%20Emoji%22%2C%22Segoe%20UI%20Emoji%22%2C%22Segoe%20UI%20Symbol%22%2C%22Noto%20Color%20Emoji%22%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23868e96'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23dee2e6'%20dy%3D'.3em'%3EObject%20fit%20scale%20down%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Object fit none](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%2C-apple-system%2C%22Segoe%20UI%22%2CRoboto%2C%22Helvetica%20Neue%22%2C%22Noto%20Sans%22%2C%22Liberation%20Sans%22%2CArial%2Csans-serif%2C%22Apple%20Color%20Emoji%22%2C%22Segoe%20UI%20Emoji%22%2C%22Segoe%20UI%20Symbol%22%2C%22Noto%20Color%20Emoji%22%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23868e96'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23dee2e6'%20dy%3D'.3em'%3EObject%20fit%20none%3C%2Ftext%3E%3C%2Fsvg%3E)

html

```
<img src="..." class="object-fit-contain border rounded" alt="...">
<img src="..." class="object-fit-cover border rounded" alt="...">
<img src="..." class="object-fit-fill border rounded" alt="...">
<img src="..." class="object-fit-scale border rounded" alt="...">
<img src="..." class="object-fit-none border rounded" alt="...">
```

## Responsive

Responsive variations also exist for each `object-fit` value using the format `.object-fit-{breakpoint}-{value}`, for the following breakpoint abbreviations: `sm`, `md`, `lg`, `xl`, and `xxl`. Classes can be combined for various effects as you need.

![Placeholder: Contain on sm](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%2C-apple-system%2C%22Segoe%20UI%22%2CRoboto%2C%22Helvetica%20Neue%22%2C%22Noto%20Sans%22%2C%22Liberation%20Sans%22%2CArial%2Csans-serif%2C%22Apple%20Color%20Emoji%22%2C%22Segoe%20UI%20Emoji%22%2C%22Segoe%20UI%20Symbol%22%2C%22Noto%20Color%20Emoji%22%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23868e96'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23dee2e6'%20dy%3D'.3em'%3EContain%20on%20sm%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Contain on md](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%2C-apple-system%2C%22Segoe%20UI%22%2CRoboto%2C%22Helvetica%20Neue%22%2C%22Noto%20Sans%22%2C%22Liberation%20Sans%22%2CArial%2Csans-serif%2C%22Apple%20Color%20Emoji%22%2C%22Segoe%20UI%20Emoji%22%2C%22Segoe%20UI%20Symbol%22%2C%22Noto%20Color%20Emoji%22%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23868e96'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23dee2e6'%20dy%3D'.3em'%3EContain%20on%20md%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Contain on lg](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%2C-apple-system%2C%22Segoe%20UI%22%2CRoboto%2C%22Helvetica%20Neue%22%2C%22Noto%20Sans%22%2C%22Liberation%20Sans%22%2CArial%2Csans-serif%2C%22Apple%20Color%20Emoji%22%2C%22Segoe%20UI%20Emoji%22%2C%22Segoe%20UI%20Symbol%22%2C%22Noto%20Color%20Emoji%22%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23868e96'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23dee2e6'%20dy%3D'.3em'%3EContain%20on%20lg%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Contain on xl](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%2C-apple-system%2C%22Segoe%20UI%22%2CRoboto%2C%22Helvetica%20Neue%22%2C%22Noto%20Sans%22%2C%22Liberation%20Sans%22%2CArial%2Csans-serif%2C%22Apple%20Color%20Emoji%22%2C%22Segoe%20UI%20Emoji%22%2C%22Segoe%20UI%20Symbol%22%2C%22Noto%20Color%20Emoji%22%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23868e96'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23dee2e6'%20dy%3D'.3em'%3EContain%20on%20xl%3C%2Ftext%3E%3C%2Fsvg%3E)
![Placeholder: Contain on xxl](data:image/svg+xml,%3Csvg%20style%3D'font-size%3A%201.125rem%3B%20font-family%3Asystem-ui%2C-apple-system%2C%22Segoe%20UI%22%2CRoboto%2C%22Helvetica%20Neue%22%2C%22Noto%20Sans%22%2C%22Liberation%20Sans%22%2CArial%2Csans-serif%2C%22Apple%20Color%20Emoji%22%2C%22Segoe%20UI%20Emoji%22%2C%22Segoe%20UI%20Symbol%22%2C%22Noto%20Color%20Emoji%22%3B%20-webkit-user-select%3A%20none%3B%20-moz-user-select%3A%20none%3B%20user-select%3A%20none%3B%20text-anchor%3A%20middle%3B'%20width%3D'200'%20height%3D'200'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Ctitle%3EPlaceholder%3C%2Ftitle%3E%3Crect%20width%3D'100%25'%20height%3D'100%25'%20fill%3D'%23868e96'%3E%3C%2Frect%3E%3Ctext%20x%3D'50%25'%20y%3D'50%25'%20fill%3D'%23dee2e6'%20dy%3D'.3em'%3EContain%20on%20xxl%3C%2Ftext%3E%3C%2Fsvg%3E)

html

```
<img src="..." class="object-fit-sm-contain border rounded" alt="...">
<img src="..." class="object-fit-md-contain border rounded" alt="...">
<img src="..." class="object-fit-lg-contain border rounded" alt="...">
<img src="..." class="object-fit-xl-contain border rounded" alt="...">
<img src="..." class="object-fit-xxl-contain border rounded" alt="...">
```

## Video

The `.object-fit-{value}` and responsive `.object-fit-{breakpoint}-{value}` utilities also work on `<video>` elements.

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

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_utilities.scss)

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
