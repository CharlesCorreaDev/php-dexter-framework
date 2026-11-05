# Visibility · Bootstrap v4.6

> **Fonte / Source:** https://getbootstrap.com/docs/4.6/utilities/visibility/

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v4.6.2/site/content/docs/4.6/utilities/visibility.md "View and edit this file on GitHub")

# Visibility

Control the visibility, without modifying the display, of elements with visibility utilities.

Set the `visibility` of elements with our visibility utilities. These utility classes do not modify the `display` value at all and do not affect layout – `.invisible` elements still take up space in the page. Content will be hidden both visually and for assistive technology/screen reader users.

Apply `.visible` or `.invisible` as needed.

```
<div class="visible">...</div>
<div class="invisible">...</div>
```

```
// Class
.visible {
  visibility: visible !important;
}
.invisible {
  visibility: hidden !important;
}

// Usage as a mixin
// Warning: The `invisible()` mixin has been deprecated as of v4.3.0. It will be removed entirely in v5.
.element {
  @include invisible(visible);
}
.element {
  @include invisible(hidden);
}
```
