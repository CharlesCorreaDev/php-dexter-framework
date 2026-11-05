# Overflow · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/overflow

---

# Overflow

Use these shorthand utilities for quickly configuring how content overflows an element.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/overflow)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .overflow-auto | overflow: auto; |
| .overflow-hidden | overflow: hidden; |
| .overflow-visible | overflow: visible; |
| .overflow-scroll | overflow: scroll; |
| .overflow-x-auto | overflow-x: auto; |
| .overflow-x-hidden | overflow-x: hidden; |
| .overflow-x-visible | overflow-x: visible; |
| .overflow-x-scroll | overflow-x: scroll; |
| .overflow-y-auto | overflow-y: auto; |
| .overflow-y-hidden | overflow-y: hidden; |
| .overflow-y-visible | overflow-y: visible; |
| .overflow-y-scroll | overflow-y: scroll; |

## Overflow

Adjust the `overflow` property on the fly with four default values and classes. These classes are not responsive by default.

This is an example of using `.overflow-auto` on an element with set width and height dimensions. By design, this content will vertically scroll.

This is an example of using `.overflow-hidden` on an element with set width and height dimensions.

This is an example of using `.overflow-visible` on an element with set width and height dimensions.

This is an example of using `.overflow-scroll` on an element with set width and height dimensions.

HTML

```
          <div class="overflow-auto">...</div>
<div class="overflow-hidden">...</div>
<div class="overflow-visible">...</div>
<div class="overflow-scroll">...</div>
```

### `overflow-x`

Adjust the `overflow-x` property to affect the overflow of content horizontally.

`.overflow-x-auto` example on an element

with set width and height dimensions.

`.overflow-x-hidden` example

on an element with set width and height dimensions.

`.overflow-x-visible` example

on an element with set width and height dimensions.

`.overflow-x-scroll` example on an element

with set width and height dimensions.

HTML

```
          <div class="overflow-x-auto">...</div>
<div class="overflow-x-hidden">...</div>
<div class="overflow-x-visible">...</div>
<div class="overflow-x-scroll">...</div>
```

### `overflow-y`

Adjust the `overflow-y` property to affect the overflow of content vertically.

`.overflow-y-auto` example on an element with set width and height dimensions.

`.overflow-y-hidden` example on an element with set width and height dimensions.

`.overflow-y-visible` example on an element with set width and height dimensions.

`.overflow-y-scroll` example on an element with set width and height dimensions.

HTML

```
          <div class="overflow-y-auto">...</div>
<div class="overflow-y-hidden">...</div>
<div class="overflow-y-visible">...</div>
<div class="overflow-y-scroll">...</div>
```

Using Sass variables, you may customize the overflow utilities by changing the `$overflows` variable in `_config.scss`.

## CSS

### Sass utilities API

Overflow utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"overflow": (
  property: overflow,
  values: auto hidden visible scroll,
),
"overflow-x": (
  property: overflow-x,
  values: auto hidden visible scroll,
),
"overflow-y": (
  property: overflow-y,
  values: auto hidden visible scroll,
),
```
