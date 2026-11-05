# Visibility · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/visibility

---

# Visibility

Control the visibility of elements, without modifying their display, with visibility utilities.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/visibility)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .-visible | *Not found* |
| .-invisible | *Not found* |

Set the `visibility` of elements with our visibility utilities. These utility classes do not modify the `display` value at all and do not affect layout – `.invisible` elements still take up space in the page.

Elements with the `.invisible` class will be hidden *both* visually and for assistive technology/screen reader users.

Apply `.visible` or `.invisible` as needed.

HTML

```
          <div class="visible">...</div>
<div class="invisible">...</div>
```

SCSS

```
          // Class
.visible {
  visibility: visible;
}
.invisible {
  visibility: hidden;
}
```

## CSS

### Sass utilities API

Visibility utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"visibility": (
  property: visibility,
  class: null,
  values: (
    visible: visible,
    invisible: hidden,
  )
),
```
