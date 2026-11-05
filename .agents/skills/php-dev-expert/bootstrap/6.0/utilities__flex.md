# Flex · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/flex

---

# Flex

Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_flexible_box_layout/Basic_concepts_of_flexbox)

CSS-Tricks[Flexbox Guide](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/flex)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .flex-fill | flex: 1 1 auto; |
| .flex-row | flex-direction: row; |
| .flex-column | flex-direction: column; |
| .flex-row-reverse | flex-direction: row-reverse; |
| .flex-column-reverse | flex-direction: column-reverse; |
| .flex-grow-0 | flex-grow: 0; |
| .flex-grow-1 | flex-grow: 1; |
| .flex-shrink-0 | flex-shrink: 0; |
| .flex-shrink-1 | flex-shrink: 1; |
| .flex-wrap | flex-wrap: wrap; |
| .flex-nowrap | flex-wrap: nowrap; |
| .flex-wrap-reverse | flex-wrap: wrap-reverse; |

## Enable flex behaviors

Apply `display` utilities to create a flexbox container and transform **direct children elements** into flex items. Flex containers and items are able to be modified further with additional flex properties.

I'm a flexbox container!

HTML

```
<div class="d-flex p-2">I'm a flexbox container!</div>
```

I'm an inline flexbox container!

HTML

```
<div class="d-inline-flex p-2">I'm an inline flexbox container!</div>
```

Responsive variations also exist for `.d-flex` and `.d-inline-flex`.

- `.d-flex`
- `.d-inline-flex`
- `.sm:d-flex`
- `.sm:d-inline-flex`
- `.md:d-flex`
- `.md:d-inline-flex`
- `.lg:d-flex`
- `.lg:d-inline-flex`
- `.xl:d-flex`
- `.xl:d-inline-flex`
- `.2xl:d-flex`
- `.2xl:d-inline-flex`

## Direction

Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is `row`. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts).

Use `.flex-row` to set a horizontal direction (the browser default), or `.flex-row-reverse` to start the horizontal direction from the opposite side.

Flex item 1

Flex item 2

Flex item 3

Flex item 1

Flex item 2

Flex item 3

HTML

```
<div class="d-flex flex-row mb-3">
  <div class="p-2">Flex item 1</div>
  <div class="p-2">Flex item 2</div>
  <div class="p-2">Flex item 3</div>
</div>
<div class="d-flex flex-row-reverse">
  <div class="p-2">Flex item 1</div>
  <div class="p-2">Flex item 2</div>
  <div class="p-2">Flex item 3</div>
</div>
```

Use `.flex-column` to set a vertical direction, or `.flex-column-reverse` to start the vertical direction from the opposite side.

Flex item 1

Flex item 2

Flex item 3

Flex item 1

Flex item 2

Flex item 3

HTML

```
<div class="d-flex flex-column mb-3">
  <div class="p-2">Flex item 1</div>
  <div class="p-2">Flex item 2</div>
  <div class="p-2">Flex item 3</div>
</div>
<div class="d-flex flex-column-reverse">
  <div class="p-2">Flex item 1</div>
  <div class="p-2">Flex item 2</div>
  <div class="p-2">Flex item 3</div>
</div>
```

Responsive variations also exist for `flex-direction`.

- `.flex-row`
- `.flex-row-reverse`
- `.flex-column`
- `.flex-column-reverse`
- `.sm:flex-row`
- `.sm:flex-row-reverse`
- `.sm:flex-column`
- `.sm:flex-column-reverse`
- `.md:flex-row`
- `.md:flex-row-reverse`
- `.md:flex-column`
- `.md:flex-column-reverse`
- `.lg:flex-row`
- `.lg:flex-row-reverse`
- `.lg:flex-column`
- `.lg:flex-column-reverse`
- `.xl:flex-row`
- `.xl:flex-row-reverse`
- `.xl:flex-column`
- `.xl:flex-column-reverse`
- `.2xl:flex-row`
- `.2xl:flex-row-reverse`
- `.2xl:flex-column`
- `.2xl:flex-column-reverse`

## Fill

Use the `.flex-fill` class on a series of sibling elements to force them into widths equal to their content (or equal widths if their content does not surpass their border-boxes) while taking up all available horizontal space.

Flex item with a lot of content

Flex item

Flex item

HTML

```
<div class="d-flex">
  <div class="p-2 flex-fill">Flex item with a lot of content</div>
  <div class="p-2 flex-fill">Flex item</div>
  <div class="p-2 flex-fill">Flex item</div>
</div>
```

Responsive variations also exist for `flex-fill`.

- `.flex-fill`
- `.sm:flex-fill`
- `.md:flex-fill`
- `.lg:flex-fill`
- `.xl:flex-fill`
- `.2xl:flex-fill`

## Grow and shrink

Use `.flex-grow-*` utilities to toggle a flex item’s ability to grow to fill available space. In the example below, the `.flex-grow-1` elements uses all available space it can, while allowing the remaining two flex items their necessary space.

Flex item

Flex item

Third flex item

HTML

```
<div class="d-flex">
  <div class="p-2 flex-grow-1">Flex item</div>
  <div class="p-2">Flex item</div>
  <div class="p-2">Third flex item</div>
</div>
```

Use `.flex-shrink-*` utilities to toggle a flex item’s ability to shrink if necessary. In the example below, the second flex item with `.flex-shrink-1` is forced to wrap its contents to a new line, "shrinking" to allow more space for the previous flex item with `.w-100`.

Flex item

Flex item

HTML

```
<div class="d-flex">
  <div class="p-2 w-100">Flex item</div>
  <div class="p-2 flex-shrink-1">Flex item</div>
</div>
```

Responsive variations also exist for `flex-grow` and `flex-shrink`.

- `.flex-grow-0`
- `.flex-grow-1`
- `.flex-shrink-0`
- `.flex-shrink-1`
- `.sm:flex-grow-0`
- `.sm:flex-grow-1`
- `.sm:flex-shrink-0`
- `.sm:flex-shrink-1`
- `.md:flex-grow-0`
- `.md:flex-grow-1`
- `.md:flex-shrink-0`
- `.md:flex-shrink-1`
- `.lg:flex-grow-0`
- `.lg:flex-grow-1`
- `.lg:flex-shrink-0`
- `.lg:flex-shrink-1`
- `.xl:flex-grow-0`
- `.xl:flex-grow-1`
- `.xl:flex-shrink-0`
- `.xl:flex-shrink-1`
- `.2xl:flex-grow-0`
- `.2xl:flex-grow-1`
- `.2xl:flex-shrink-0`
- `.2xl:flex-shrink-1`

## Wrap

Change how flex items wrap in a flex container. Choose from no wrapping at all (the browser default) with `.flex-nowrap`, wrapping with `.flex-wrap`, or reverse wrapping with `.flex-wrap-reverse`.

Flex item

Flex item

Flex item

Flex item

Flex item

HTML

```
          <div class="d-flex flex-nowrap">
  ...
</div>
```

Flex item 1

Flex item 2

Flex item 3

Flex item 4

Flex item 5

Flex item 6

Flex item 7

Flex item 8

Flex item 9

Flex item 10

Flex item 11

Flex item 12

Flex item 13

Flex item 14

HTML

```
          <div class="d-flex flex-wrap">
  ...
</div>
```

Flex item 1

Flex item 2

Flex item 3

Flex item 4

Flex item 5

Flex item 6

Flex item 7

Flex item 8

Flex item 9

Flex item 10

Flex item 11

Flex item 12

Flex item 13

Flex item 14

HTML

```
          <div class="d-flex flex-wrap-reverse">
  ...
</div>
```

Responsive variations also exist for `flex-wrap`.

- `.flex-nowrap`
- `.flex-wrap`
- `.flex-wrap-reverse`
- `.sm:flex-nowrap`
- `.sm:flex-wrap`
- `.sm:flex-wrap-reverse`
- `.md:flex-nowrap`
- `.md:flex-wrap`
- `.md:flex-wrap-reverse`
- `.lg:flex-nowrap`
- `.lg:flex-wrap`
- `.lg:flex-wrap-reverse`
- `.xl:flex-nowrap`
- `.xl:flex-wrap`
- `.xl:flex-wrap-reverse`
- `.2xl:flex-nowrap`
- `.2xl:flex-wrap`
- `.2xl:flex-wrap-reverse`

## CSS

### Sass utilities API

Flexbox utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"flex": (
  responsive: true,
  property: flex,
  values: (fill: 1 1 auto)
),
"flex-direction": (
  responsive: true,
  property: flex-direction,
  class: flex,
  values: row column row-reverse column-reverse
),
"flex-grow": (
  responsive: true,
  property: flex-grow,
  class: flex,
  values: (
    grow-0: 0,
    grow-1: 1,
  )
),
"flex-shrink": (
  responsive: true,
  property: flex-shrink,
  class: flex,
  values: (
    shrink-0: 0,
    shrink-1: 1,
  )
),
"flex-wrap": (
  responsive: true,
  property: flex-wrap,
  class: flex,
  values: wrap nowrap wrap-reverse
),
```
