# Display property · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/display

---

# Display property

Quickly and responsively toggle the display value of components and more with our display utilities.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/display)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .d-inline | display: inline; |
| .d-inline-block | display: inline-block; |
| .d-block | display: block; |
| .d-grid | display: grid; |
| .d-inline-grid | display: inline-grid; |
| .d-table | display: table; |
| .d-table-row | display: table-row; |
| .d-table-cell | display: table-cell; |
| .d-flex | display: flex; |
| .d-inline-flex | display: inline-flex; |
| .d-contents | display: contents; |
| .d-flow-root | display: flow-root; |
| .d-none | display: none; |

## How it works

Change the value of the [`display` property](https://developer.mozilla.org/en-US/docs/Web/CSS/display) with our responsive display utility classes. We purposely support only a subset of all possible values for `display`. Classes can be combined for various effects as you need.

## Notation

Display utility classes that apply to all [breakpoints](layout__breakpoints.md), from `xs` to `2xl`, have no breakpoint abbreviation in them. This is because those classes are applied from `min-width: 0;` and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.

As such, the classes are named using the format:

- `.d-{value}` for `xs`
- `.{breakpoint}:d-{value}` for `sm`, `md`, `lg`, `xl`, and `2xl` (for example, `.md:d-none`).

Where *value* is one of:

- `none`
- `inline`
- `inline-block`
- `block`
- `grid`
- `inline-grid`
- `table`
- `table-cell`
- `table-row`
- `flex`
- `inline-flex`

The display values can be altered by changing the `display` values defined in `$utilities` and recompiling the SCSS.

The media queries affect screen widths with the given breakpoint *or larger*. For example, `.lg:d-none` sets `display: none;` on `lg`, `xl`, and `2xl` screens.

## Clearfix

There’s no more clearfix helper in Bootstrap 6 as it’s an outdated technique. Instead, use the `display: flow-root` utility, `.d-flow-root`. This forces a container element to create a new block formatting context without the clearfix.

Floated element

HTML

```
<div class="d-flow-root">
  <div class="float-end px-3 py-2 border rounded-3">Floated element</div>
</div>
```

## Examples

d-inline

d-inline

HTML

```
<div class="d-inline p-2 theme-primary theme-contrast">d-inline</div>
<div class="d-inline p-2 theme-secondary theme-contrast">d-inline</div>
```

d-block
d-block

HTML

```
<span class="d-block p-2 theme-primary theme-contrast">d-block</span>
<span class="d-block p-2 theme-secondary theme-contrast">d-block</span>
```

## Hiding elements

For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide elements responsively for each screen size.

To hide elements simply use the `.d-none` class or one of the `.{sm,md,lg,xl,2xl}:d-none` classes for any responsive screen variation.

To show an element only on a given interval of screen sizes you can combine one `.{breakpoint}:d-none` class with a `.{breakpoint}:d-block` class, for example `.d-none .md:d-block .xl:d-none` will hide the element for all screen sizes except on medium and large devices.

| Screen size | Class |
| --- | --- |
| Hidden on all | `.d-none` |
| Hidden only on xs | `.d-none .sm:d-block` |
| Hidden only on sm | `.sm:d-none .md:d-block` |
| Hidden only on md | `.md:d-none .lg:d-block` |
| Hidden only on lg | `.lg:d-none .xl:d-block` |
| Hidden only on xl | `.xl:d-none .2xl:d-block` |
| Hidden only on 2xl | `.2xl:d-none` |
| Visible on all | `.d-block` |
| Visible only on xs | `.d-block .sm:d-none` |
| Visible only on sm | `.d-none .sm:d-block .md:d-none` |
| Visible only on md | `.d-none .md:d-block .lg:d-none` |
| Visible only on lg | `.d-none .lg:d-block .xl:d-none` |
| Visible only on xl | `.d-none .xl:d-block .2xl:d-none` |
| Visible only on 2xl | `.d-none .2xl:d-block` |

hide on lg and wider screens

hide on screens smaller than lg

HTML

```
<div class="lg:d-none">hide on lg and wider screens</div>
<div class="d-none lg:d-block">hide on screens smaller than lg</div>
```

## CSS

### Sass utilities API

Display utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"display": (
  responsive: true,
  property: display,
  class: d,
  values: inline inline-block block grid inline-grid table table-row table-cell flex inline-flex contents flow-root none
),
```
