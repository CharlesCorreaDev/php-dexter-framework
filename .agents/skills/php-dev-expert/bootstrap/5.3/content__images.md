# Images · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/content/images

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/content/images.mdx "View and edit this file on GitHub")

# Images

Documentation and examples for opting images into responsive behavior (so they never become wider than their parent) and add lightweight styles to them—all via classes.

On this page
   
**On this page**

---

## Responsive images

Images in Bootstrap are made responsive with `.img-fluid`. This applies `max-width: 100%;` and `height: auto;` to the image so that it scales with the parent width.

PlaceholderResponsive image

html

```
<img src="..." class="img-fluid" alt="...">
```

## Image thumbnails

In addition to our [border-radius utilities](utilities__borders.md), you can use `.img-thumbnail` to give an image a rounded 1px border appearance.

A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera200x200

html

```
<img src="..." class="img-thumbnail" alt="...">
```

## Aligning images

Align images with the [helper float classes](utilities__float.md) or [text alignment classes](utilities__text.md#text-alignment). `block`-level images can be centered using [the `.mx-auto` margin utility class](utilities__spacing.md#horizontal-centering).

Placeholder200x200
Placeholder200x200

html

```
<img src="..." class="rounded float-start" alt="...">
<img src="..." class="rounded float-end" alt="...">
```

Placeholder200x200

html

```
<img src="..." class="rounded mx-auto d-block" alt="...">
```

Placeholder200x200

html

```
<div class="text-center">
  <img src="..." class="rounded" alt="...">
</div>
```

## Picture

If you are using the `<picture>` element to specify multiple `<source>` elements for a specific `<img>`, make sure to add the `.img-*` classes to the `<img>` and not to the `<picture>` tag.

```
<picture>
  <source srcset="..." type="image/svg+xml">
  <img src="..." class="img-fluid img-thumbnail" alt="...">
</picture>
```

## CSS

### Sass variables

Variables are available for image thumbnails.

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$thumbnail-padding:                 .25rem;
$thumbnail-bg:                      var(--#{$prefix}body-bg);
$thumbnail-border-width:            var(--#{$prefix}border-width);
$thumbnail-border-color:            var(--#{$prefix}border-color);
$thumbnail-border-radius:           var(--#{$prefix}border-radius);
$thumbnail-box-shadow:              var(--#{$prefix}box-shadow-sm);
```
