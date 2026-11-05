# Tables · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/content/tables

---

# Tables

Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.

Layer: `content`

Container queries

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/content/tables)

On this page…

##### On this page

## Overview

Due to the widespread use of `<table>` elements across third-party widgets like calendars and date pickers, Bootstrap’s tables are **opt-in**. Add the base class `.table` to any `<table>`, then extend with our optional modifier classes or custom styles. All table styles are not inherited in Bootstrap, meaning any nested tables can be styled independent from the parent.

Using the most basic table markup, here’s how `.table`-based tables look in Bootstrap.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
</table>
```

## Variants

Use theme-specific color classes to style tables, table rows, or individual cells. These adapt to color modes as well.

| Class | Heading | Heading |
| --- | --- | --- |
| Default | Cell | Cell |
| Primary | Cell | Cell |
| Accent | Cell | Cell |
| Success | Cell | Cell |
| Danger | Cell | Cell |
| Warning | Cell | Cell |
| Info | Cell | Cell |
| Inverse | Cell | Cell |
| Secondary | Cell | Cell |

HTML

```
<!-- On tables -->
<table class="table theme-primary">...</table>
<table class="table theme-accent">...</table>
<table class="table theme-success">...</table>
<table class="table theme-danger">...</table>
<table class="table theme-warning">...</table>
<table class="table theme-info">...</table>
<table class="table theme-inverse">...</table>
<table class="table theme-secondary">...</table>

<!-- On rows -->
<tr class="theme-primary">...</tr>
<tr class="theme-accent">...</tr>
<tr class="theme-success">...</tr>
<tr class="theme-danger">...</tr>
<tr class="theme-warning">...</tr>
<tr class="theme-info">...</tr>
<tr class="theme-inverse">...</tr>
<tr class="theme-secondary">...</tr>

<!-- On cells (`td` or `th`) -->
<tr>
  <td class="theme-primary">...</td>
  <td class="theme-accent">...</td>
  <td class="theme-success">...</td>
  <td class="theme-danger">...</td>
  <td class="theme-warning">...</td>
  <td class="theme-info">...</td>
  <td class="theme-inverse">...</td>
  <td class="theme-secondary">...</td>
</tr>
```

Accessibility Tip: Using color to convey meaning

Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies like screen readers. Please ensure the meaning is obvious from the content itself (e.g., the visible text with a [*sufficient* color contrast](getting-started__accessibility.md#color-contrast)) or is included through alternative means, such as additional text hidden with the `.visually-hidden` class.

## Accented tables

### Striped rows

Use `.table-striped` to add zebra-striping to any table row within the `<tbody>`.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-striped">
  ...
</table>
```

### Striped columns

Use `.table-striped-columns` to add zebra-striping to any table column.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-striped-columns">
  ...
</table>
```

These classes can also be added to table variants:

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-striped" data-bs-theme="dark">
  ...
</table>
```

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-striped-columns" data-bs-theme="dark">
  ...
</table>
```

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table theme-success table-striped">
  ...
</table>
```

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table theme-success table-striped-columns">
  ...
</table>
```

### Hoverable rows

Add `.table-hover` to enable a hover state on table rows within a `<tbody>`.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-hover">
  ...
</table>
```

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-hover" data-bs-theme="dark">
  ...
</table>
```

These hoverable rows can also be combined with the striped rows variant:

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-striped table-hover">
  ...
</table>
```

### Active tables

Highlight a table row or cell by adding a `.table-active` class.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table">
<thead>
  ...
</thead>
<tbody>
  <tr class="table-active">
    ...
  </tr>
  <tr>
    ...
  </tr>
  <tr>
    <th scope="row">3</th>
    <td>John</td>
    <td>Doe</td>
    <td class="table-active">@social</td>
  </tr>
</tbody>
</table>
```

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table" data-bs-theme="dark">
<thead>
  ...
</thead>
<tbody>
  <tr class="table-active">
    ...
  </tr>
  <tr>
    ...
  </tr>
  <tr>
    <th scope="row">3</th>
    <td>John</td>
    <td>Doe</td>
    <td class="table-active">@social</td>
  </tr>
</tbody>
</table>
```

## How do the variants and accented tables work?

For the accented tables ([striped rows](#striped-rows), [striped columns](#striped-columns), [hoverable rows](#hoverable-rows), and [active tables](#active-tables)), we used some techniques to make these effects work for all our [table variants](#variants):

- We start by setting the background of a table cell with the `--bs-table-bg` custom property. All table variants then set that custom property to colorize the table cells. This way, we don’t get into trouble if semi-transparent colors are used as table backgrounds.
- Then we add an inset box shadow on the table cells with `box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));` to layer on top of any specified `background-color`. It uses custom cascade to override the `box-shadow`, regardless the CSS specificity. Because we use a huge spread and no blur, the color will be monotone. Since `--bs-table-accent-bg` is set to `transparent` by default, we don’t have a default box shadow.
- When either `.table-striped`, `.table-striped-columns`, `.table-hover` or `.table-active` classes are added, either `--bs-table-bg-type` or `--bs-table-bg-state` (by default set to `initial`) are set to a semitransparent color (`--bs-table-striped-bg`, `--bs-table-active-bg` or `--bs-table-hover-bg`) to colorize the background and override default `--bs-table-accent-bg`.
- For each table variant, we set `--bs-table-bg-type` or `--bs-table-bg-state` to a semi-transparent color derived from the current theme color. Those values are layered in the inset box shadow, while `--bs-table-accent-bg` remains a transparent fallback.
- Text and border colors are generated the same way, and their colors are inherited by default.

Behind the scenes it looks like this:

## Table borders

### Bordered tables

Add `.table-bordered` for borders on all sides of the table and cells.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-bordered">
  ...
</table>
```

[Border color utilities](utilities__border.md#border-color) can be added to change colors:

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-bordered border-primary">
  ...
</table>
```

### Tables without borders

Add `.table-borderless` for a table without borders.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-borderless">
  ...
</table>
```

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-borderless" data-bs-theme="dark">
  ...
</table>
```

## Card-like tables

Need a bordered, rounded table without nesting it in a [card](components__card.md)? Wrap the table and clip the corners.

### With utilities

Compose [border](utilities__border.md), [border radius](utilities__border-radius.md), and [overflow](utilities__overflow.md) utilities. Drop the table’s bottom margin with `.mb-0`.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<div class="border rounded overflow-hidden">
  <table class="table table-striped mb-0">
    ...
  </table>
</div>
```

### With `.table-card`

Use `.table-card` for the same look. It rounds corners like a card, clips cell backgrounds, and removes the last row’s bottom border so it does not stack on the wrapper.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<div class="table-card">
  <table class="table table-hover">
    ...
  </table>
</div>
```

Combine it with a responsive wrapper when the table can overflow:

| # | Heading | Heading | Heading | Heading | Heading | Heading | Heading | Heading |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| 1 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 2 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 3 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |

HTML

```
<div class="table-responsive table-card">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>
</div>
```

## Small tables

Add `.table-sm` to make any `.table` more compact by cutting all cell `padding` in half.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-sm">
  ...
</table>
```

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-sm" data-bs-theme="dark">
  ...
</table>
```

## Table group dividers

Add a thicker border, darker between table groups—`<thead>`, `<tbody>`, and `<tfoot>`—with `.table-group-divider`. Customize the color by changing the `border-top-color` (which we don’t currently provide a utility class for at this time).

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
</table>
```

## Vertical alignment

Table cells of `<thead>` are always vertical aligned to the bottom. Table cells in `<tbody>` inherit their alignment from `<table>` and are aligned to the top by default. Use the [vertical align](utilities__vertical-align.md) classes to re-align where needed.

| Heading 1 | Heading 2 | Heading 3 | Heading 4 |
| --- | --- | --- | --- |
| This cell inherits `vertical-align: middle;` from the table | This cell inherits `vertical-align: middle;` from the table | This cell inherits `vertical-align: middle;` from the table | This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells. |
| This cell inherits `vertical-align: bottom;` from the table row | This cell inherits `vertical-align: bottom;` from the table row | This cell inherits `vertical-align: bottom;` from the table row | This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells. |
| This cell inherits `vertical-align: middle;` from the table | This cell inherits `vertical-align: middle;` from the table | This cell is aligned to the top. | This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells. |

HTML

```
<div class="table-responsive">
<table class="table align-middle">
  <thead>
    <tr>
      ...
    </tr>
  </thead>
  <tbody>
    <tr>
      ...
    </tr>
    <tr class="align-bottom">
      ...
    </tr>
    <tr>
      <td>...</td>
      <td>...</td>
      <td class="align-top">This cell is aligned to the top.</td>
      <td>...</td>
    </tr>
  </tbody>
</table>
</div>
```

## Nesting

Border styles, active styles, and table variants are not inherited by nested tables.

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| | Header | Header | Header | | --- | --- | --- | | A | First | Last | | B | First | Last | | C | First | Last | | | | |
| 3 | John | Doe | @social |

HTML

```
<table class="table table-striped table-bordered">
<thead>
  ...
</thead>
<tbody>
  ...
  <tr>
    <td colspan="4">
      <table class="table mb-0">
        ...
      </table>
    </td>
  </tr>
  ...
</tbody>
</table>
```

## How nesting works

To prevent *any* styles from leaking to nested tables, we use the child combinator (`>`) selector in our CSS. Since we need to target all the `td`s and `th`s in the `thead`, `tbody`, and `tfoot`, our selector would look pretty long without it. As such, we use the rather odd looking `.table > :not(caption) > * > *` selector to target all `td`s and `th`s of the `.table`, but none of any potential nested tables.

Note that if you add `<tr>`s as direct children of a table, those `<tr>` will be wrapped in a `<tbody>` by default, thus making our selectors work as intended.

## Footer

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |
|  |  |  |  |
| --- | --- | --- | --- |
| Footer | Footer | Footer | Footer |

HTML

```
          <table class="table">
  <thead>
    ...
  </thead>
  <tbody>
    ...
  </tbody>
  <tfoot>
    ...
  </tfoot>
</table>
```

## Caption

A `<caption>` functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.

List of users

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
          <table class="table table-sm">
  <caption>List of users</caption>
  <thead>
    ...
  </thead>
  <tbody>
    ...
  </tbody>
</table>
```

You can also put the `<caption>` on the top of the table with `.caption-top`.

List of users

| # | First | Last | Handle |
| --- | --- | --- | --- |
| 1 | Mark | Otto | @mdo |
| 2 | Jacob | Thornton | @fat |
| 3 | John | Doe | @social |

HTML

```
<table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
</table>
```

## Stacked tables

Add `.table-stacked` to convert a table’s rows into stacked blocks when space is limited. Each row becomes a vertical block with the first cell acting as a bold title and the remaining cells displayed as label–value pairs. Labels are generated from `data-cell` attributes on each `<td>`.

Both `.table-stacked` and `.table-responsive` use container queries, so the `.table-responsive` wrapper is required as the query container. Use `.md:table-stacked`, `.lg:table-stacked`, etc. to only stack below a specific container width. The default `.table-stacked` always stacks.

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| backdrop | boolean or 'static' | true | Includes a backdrop element. Specify static for a backdrop which doesn’t close on click. |
| keyboard | boolean | true | Closes the component when escape key is pressed. |
| focus | boolean | true | Puts the focus on the component when initialized. |

HTML

```
<div class="table-responsive">
<table class="table md:table-stacked">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Default</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-cell="Name">backdrop</td>
      <td data-cell="Type">boolean or 'static'</td>
      <td data-cell="Default">true</td>
      <td data-cell="Description">Includes a backdrop element. Specify static for a backdrop which doesn’t close on click.</td>
    </tr>
    <tr>
      <td data-cell="Name">keyboard</td>
      <td data-cell="Type">boolean</td>
      <td data-cell="Default">true</td>
      <td data-cell="Description">Closes the component when escape key is pressed.</td>
    </tr>
    <tr>
      <td data-cell="Name">focus</td>
      <td data-cell="Type">boolean</td>
      <td data-cell="Default">true</td>
      <td data-cell="Description">Puts the focus on the component when initialized.</td>
    </tr>
  </tbody>
</table>
</div>
```

HTML

```
          <!-- Always stacked -->
<div class="table-responsive">
  <table class="table table-stacked">...</table>
</div>

<!-- Stacked below md container width -->
<div class="table-responsive">
  <table class="table md:table-stacked">...</table>
</div>
```

## Responsive tables

Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a `.table` with `.table-responsive`. Or, pick a maximum breakpoint with which to have a responsive table up to by using `.{sm|md|lg|xl|2xl}:table-responsive`.

The `.table-responsive` wrapper also acts as the container query context for [stacked tables](#stacked-tables).

Responsive tables make use of `overflow-y: hidden`, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off menus and other third-party widgets.

### Always responsive

Across every breakpoint, use `.table-responsive` for horizontally scrolling tables.

| # | Heading | Heading | Heading | Heading | Heading | Heading | Heading | Heading | Heading |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| 1 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 2 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 3 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |

HTML

```
<div class="table-responsive">
<table class="table">
  ...
</table>
</div>
```

### Breakpoint specific

Use `.{sm|md|lg|xl|2xl}:table-responsive` as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave normally and not scroll horizontally.

**These tables may appear broken until their responsive styles apply at specific viewport widths.**

| # | Heading | Heading | Heading | Heading | Heading | Heading | Heading | Heading |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| 1 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 2 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 3 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |

| # | Heading | Heading | Heading | Heading | Heading | Heading | Heading | Heading |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| 1 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 2 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 3 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |

| # | Heading | Heading | Heading | Heading | Heading | Heading | Heading | Heading |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| 1 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 2 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 3 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |

| # | Heading | Heading | Heading | Heading | Heading | Heading | Heading | Heading |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| 1 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 2 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 3 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |

| # | Heading | Heading | Heading | Heading | Heading | Heading | Heading | Heading |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| 1 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 2 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 3 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |

| # | Heading | Heading | Heading | Heading | Heading | Heading | Heading | Heading |
| --- | --- | --- | --- | --- | --- | --- | --- | --- |
| 1 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 2 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |
| 3 | Cell | Cell | Cell | Cell | Cell | Cell | Cell | Cell |

HTML

```
<div class="table-responsive">
  <table class="table">
    ...
  </table>
</div>

<div class="sm:table-responsive">
  <table class="table">
    ...
  </table>
</div>

<div class="md:table-responsive">
  <table class="table">
    ...
  </table>
</div>

<div class="lg:table-responsive">
  <table class="table">
    ...
  </table>
</div>

<div class="xl:table-responsive">
  <table class="table">
    ...
  </table>
</div>

<div class="2xl:table-responsive">
  <table class="table">
    ...
  </table>
</div>
```

## CSS

### Variables

Tables use local CSS variables on `.table` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/content/\_tables.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/content/_tables.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$table-tokens: defaults(
  (
    --table-cell-padding-y: .5rem,
    --table-cell-padding-x: .5rem,
    --table-cell-vertical-align: top,
    --table-color: var(--fg-body),
    --table-bg: var(--bg-body),
    --table-accent-bg: transparent,
    --table-border-width: var(--border-width),
    --table-border-color: var(--border-color),
    --table-group-separator-color: currentcolor,
    --table-striped-color: var(--table-color),
    --table-striped-bg-factor: 5%,
    --table-striped-bg: color-mix(in srgb, var(--table-color) var(--table-striped-bg-factor), transparent),
    --table-active-color: var(--table-color),
    --table-active-bg-factor: 10%,
    --table-active-bg: color-mix(in srgb, var(--table-color) var(--table-active-bg-factor), transparent),
    --table-hover-color: var(--table-color),
    --table-hover-bg-factor: 7.5%,
    --table-hover-bg: color-mix(in srgb, var(--table-color) var(--table-hover-bg-factor), transparent),
  ),
  $table-tokens
);
```

### Customizing

- The factor variables (`--table-striped-bg-factor`, `--table-active-bg-factor` & `--table-hover-bg-factor`) are used to determine the contrast in table variants.
- Apart from the light & dark table variants, theme colors are lightened by the `--table-bg-scale` variable.
