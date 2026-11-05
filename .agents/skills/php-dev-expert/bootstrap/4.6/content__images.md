# Images · Bootstrap v4.6

> **Fonte / Source:** https://getbootstrap.com/docs/4.6/content/images/

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v4.6.2/site/content/docs/4.6/content/images.md "View and edit this file on GitHub")

# Images

Documentation and examples for opting images into responsive behavior (so they never become larger than their parent elements) and add lightweight styles to them—all via classes.

## Responsive images

Images in Bootstrap are made responsive with `.img-fluid`. `max-width: 100%;` and `height: auto;` are applied to the image so that it scales with the parent element.

PlaceholderResponsive image

```
<img src="..." class="img-fluid" alt="...">
```

##### SVG images and Internet Explorer

In Internet Explorer 10 and 11, SVG images with `.img-fluid` are disproportionately sized. To fix this, add `width: 100%;` or `.w-100` where necessary. This fix improperly sizes other image formats, so Bootstrap doesn’t apply it automatically.

## Image thumbnails

In addition to our [border-radius utilities](utilities__borders.md), you can use `.img-thumbnail` to give an image a rounded 1px border appearance.

A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera200x200

```
<img src="..." class="img-thumbnail" alt="...">
```

## Aligning images

Align images with the [helper float classes](utilities__float.md) or [text alignment classes](utilities__text.md#text-alignment). `block`-level images can be centered using [the `.mx-auto` margin utility class](utilities__spacing.md#horizontal-centering).

Placeholder200x200
Placeholder200x200

```
<img src="..." class="rounded float-left" alt="...">
<img src="..." class="rounded float-right" alt="...">
```

Placeholder200x200

```
<img src="..." class="rounded mx-auto d-block" alt="...">
```

Placeholder200x200

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
