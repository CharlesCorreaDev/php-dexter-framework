# Aspect ratio · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/aspect-ratio

---

# Aspect ratio

Make elements maintain specific aspect ratios. Perfect for handling videos, slideshow embeds, and more based on the width of the parent.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/aspect-ratio)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/aspect-ratio)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .ratio-auto | --bs-ratio: auto; |
| .ratio-1x1 | --bs-ratio: 1 / 1; |
| .ratio-4x3 | --bs-ratio: 4 / 3; |
| .ratio-16x9 | --bs-ratio: 16 / 9; |
| .ratio-21x9 | --bs-ratio: 21 / 9; |

Use the ratio utility to manage the aspect ratios of content like `<iframe>`s, `<embed>`s, `<video>`s, and `<object>`s. These helpers also can be used on any standard HTML child element (e.g., a `<div>` or `<img>`). Customize the available aspect ratios with the Sass variable or the utility API.

**Pro-Tip!** You don’t need `frameborder="0"` on your `<iframe>`s as we override that for you in [Reboot](content__reboot.md).

## Example

Add your ratio utility to the element you want to modify, like an `<iframe>`, `<video>`, or less semantic elements like `<div>`. Ratio utilities also pair well with any width utilities, as shown below. Customize the available aspect ratios with the Sass variable or the utility API.

HTML

```
<iframe class="w-100 ratio-16x9" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
```

Swap the `.ratio-*` class for a different aspect ratio.

Auto

1×1

4×3

16×9

21×9

HTML

```
<div class="ratio-auto">
  <div>Auto</div>
</div>
<div class="w-25 ratio-1x1">
  <div>1×1</div>
</div>
<div class="w-50 ratio-4x3">
  <div>4×3</div>
</div>
<div class="w-75 ratio-16x9">
  <div>16×9</div>
</div>
<div class="w-100 ratio-21x9">
  <div>21×9</div>
</div>
```

## Custom ratios

To set a custom ratio, override `--bs-ratio` on any `.ratio-*` element.

2×1

HTML

```
<div class="w-25 ratio-auto" style="--bs-ratio: 2 / 1;">
  <div>2×1</div>
</div>
```

You can also change the ratio at breakpoints by overriding the same custom property in your own CSS.

SCSS

```
          .custom-ratio {
  --bs-ratio: 4 / 3;

  @include media-breakpoint-up(md) {
    --bs-ratio: 2 / 1;
  }
}
```

Then apply that class to your markup:

HTML

```
          <div class="ratio-auto custom-ratio">
  <div>4×3, then 2×1</div>
</div>
```

## CSS

### Sass map

Within `_config.scss`, you can change the aspect ratios you want to use. Here’s our default `$aspect-ratios` map. Modify the map as you like and recompile your Sass to put them to use.

[scss/\_config.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_config.scss)

```
$aspect-ratios: ();
// stylelint-disable-next-line scss/dollar-variable-default
$aspect-ratios: defaults(
  (
    "auto": auto,
    "1x1": #{"1 / 1"},
    "4x3": #{"4 / 3"},
    "16x9": #{"16 / 9"},
    "21x9": #{"21 / 9"}
  ),
  $aspect-ratios
);
```

### Sass utilities API

Aspect ratio utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"aspect-ratio-attr": (
  selector: "attr-includes",
  class: "ratio-",
  property: aspect-ratio,
  values: var(--ratio),
),
"aspect-ratio": (
  property: --ratio,
  class: ratio,
  values: $aspect-ratios
),
```
