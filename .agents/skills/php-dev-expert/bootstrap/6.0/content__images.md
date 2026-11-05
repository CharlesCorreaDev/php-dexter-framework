# Images · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/content/images

---

# Images

Documentation and examples for opting images into responsive behavior (so they never become wider than their parent) and add lightweight styles to them—all via classes.

Layer: `content`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/content/images)

On this page…

##### On this page

## Responsive images

Images in Bootstrap are made responsive with `.img-fluid`. This applies `max-width: 100%;` and `height: auto;` to the image so that it scales with the parent width.

PlaceholderResponsive image

HTML

```
<img src="..." class="img-fluid" alt="...">
```

## Image thumbnails

In addition to our [border-radius utilities](utilities__border.md), you can use `.img-thumbnail` to give an image a rounded 1px border appearance.

A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera200x200

HTML

```
<img src="..." class="img-thumbnail" alt="...">
```

## Aligning images

Align images with the [helper float classes](utilities__float.md) or [text alignment classes](utilities__text-alignment.md). `block`-level images can be centered using [the `.mx-auto` margin utility class](utilities__margin.md#horizontal-centering).

Placeholder200x200
Placeholder200x200

HTML

```
<img src="..." class="rounded float-start" alt="...">
<img src="..." class="rounded float-end" alt="...">
```

Placeholder200x200

HTML

```
<img src="..." class="rounded mx-auto d-block" alt="...">
```

Placeholder200x200

HTML

```
<div class="text-center">
  <img src="..." class="rounded" alt="...">
</div>
```

## Figures

Anytime you need to display a piece of content—like an image with an optional caption, consider using a `<figure>` element. Figures are flex containers in Bootstrap, so you can easily modify the layout and alignment with our [flex utilities](utilities__flex.md).

Use the included `.figure` and `.figure-caption` classes to provide some baseline styles for the HTML5 `<figure>` and `<figcaption>` elements. Images in figures have no explicit size, so be sure to add the `.img-fluid` class to your `<img>` to make it responsive.

Placeholder400x300

A caption for the above image.

HTML

```
<figure class="figure">
  <img src="..." class="img-fluid rounded-3" alt="...">
  <figcaption class="figure-caption">A caption for the above image.</figcaption>
</figure>
```

And with a reverse alignment:

Placeholder400x300

A caption for the above image.

HTML

```
<figure class="figure align-items-end">
  <img src="..." class="img-fluid rounded-3" alt="...">
  <figcaption class="figure-caption">A caption for the above image.</figcaption>
</figure>
```

## Picture

If you are using the `<picture>` element to specify multiple `<source>` elements for a specific `<img>`, make sure to add the `.img-*` classes to the `<img>` and not to the `<picture>` tag.

HTML

```
          <picture>
  <source srcset="..." type="image/svg+xml">
  <img src="..." class="img-fluid img-thumbnail" alt="...">
</picture>
```

## CSS

### Variables

Images use local CSS variables on `.img-thumbnail` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/content/\_images.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/content/_images.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$thumbnail-tokens: defaults(
  (
    --thumbnail-padding: .25rem,
    --thumbnail-bg: var(--bg-body),
    --thumbnail-border-width: var(--border-width),
    --thumbnail-border-color: var(--border-color),
    --thumbnail-border-radius: var(--radius-5),
    --thumbnail-box-shadow: var(--box-shadow-sm),
  ),
  $thumbnail-tokens
);
```

And for figures as well:

[scss/content/\_images.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/content/_images.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$figure-tokens: defaults(
  (
    --figure-gap: calc(var(--spacer) * .5),
    --figure-caption-font-size: var(--font-size-sm),
    --figure-caption-color: var(--fg-3),
  ),
  $figure-tokens
);
```
