# Image replacement · Bootstrap v4.6

> **Fonte / Source:** https://getbootstrap.com/docs/4.6/utilities/image-replacement/

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v4.6.2/site/content/docs/4.6/utilities/image-replacement.md "View and edit this file on GitHub")

# Image replacement

Swap text for background images with the image replacement class.

##### Warning

The `text-hide()` class and mixin has been deprecated as of v4.1. It will be removed entirely in v5.

Utilize the `.text-hide` class or mixin to help replace an element’s text content with a background image.

```
<h1 class="text-hide">Custom heading</h1>
```

```
// Usage as a mixin
.heading {
  @include text-hide;
}
```

Use the `.text-hide` class to maintain the accessibility and SEO benefits of heading tags, but want to utilize a `background-image` instead of text.

# Bootstrap

```
<h1 class="text-hide" style="background-image: url('...');">Bootstrap</h1>
```
