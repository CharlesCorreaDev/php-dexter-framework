# Grid Template · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/examples/grid/

---

# Bootstrap grid examples

Basic grid layouts to get you familiar with building within the Bootstrap grid system.

In these examples the `.themed-grid-col` class is added to the columns to add some theming. This is not a class that is available in Bootstrap by default.

## Five grid tiers

There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.

.col-4

.col-4

.col-4

.sm:col-4

.sm:col-4

.sm:col-4

.md:col-4

.md:col-4

.md:col-4

.lg:col-4

.lg:col-4

.lg:col-4

.xl:col-4

.xl:col-4

.xl:col-4

.2xl:col-4

.2xl:col-4

.2xl:col-4

## Three equal columns

Get three equal-width columns **starting at desktops and scaling to large desktops**. On mobile devices, tablets and below, the columns will automatically stack.

.md:col-4

.md:col-4

.md:col-4

## Three equal columns alternative

By using the `.row-cols-*` classes, you can easily create a grid with equal columns.

`.col` child of `.md:row-cols-3`

`.col` child of `.md:row-cols-3`

`.col` child of `.md:row-cols-3`

## Three unequal columns

Get three columns **starting at desktops and scaling to large desktops** of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.

.md:col-3

.md:col-6

.md:col-3

## Two columns

Get two columns **starting at desktops and scaling to large desktops**.

.md:col-8

.md:col-4

## Full width, single column

No grid classes are necessary for full-width elements.

---

## Two columns with two nested columns

Per the documentation, nesting is easy—just put a row of columns within an existing column. This gives you two columns **starting at desktops and scaling to large desktops**, with another two (equal widths) within the larger column.

At mobile device sizes, tablets and down, these columns and their nested columns will stack.

.md:col-8

.md:col-6

.md:col-6

.md:col-4

---

## Mixed: mobile and desktop

The Bootstrap v5 grid system has six tiers of classes: xs (extra small, this class infix is not used), sm (small), md (medium), lg (large), xl (x-large), and 2xl (xx-large). You can use nearly any combination of these classes to create more dynamic and flexible layouts.

Each tier of classes scales up, meaning if you plan on setting the same widths for md, lg, xl and 2xl, you only need to specify md.

.md:col-8

.col-6 .md:col-4

.col-6 .md:col-4

.col-6 .md:col-4

.col-6 .md:col-4

.col-6

.col-6

---

## Mixed: mobile, tablet, and desktop

.sm:col-6 .lg:col-8

.col-6 .lg:col-4

.col-6 .sm:col-4

.col-6 .sm:col-4

.col-6 .sm:col-4

---

## Gutters

With `.gx-*` classes, the horizontal gutters can be adjusted.

`.col` with `.gx-4` gutters

`.col` with `.gx-4` gutters

`.col` with `.gx-4` gutters

`.col` with `.gx-4` gutters

`.col` with `.gx-4` gutters

`.col` with `.gx-4` gutters

Use the `.gy-*` classes to control the vertical gutters.

`.col` with `.gy-4` gutters

`.col` with `.gy-4` gutters

`.col` with `.gy-4` gutters

`.col` with `.gy-4` gutters

`.col` with `.gy-4` gutters

`.col` with `.gy-4` gutters

With `.g-*` classes, the gutters in both directions can be adjusted.

`.col` with `.g-3` gutters

`.col` with `.g-3` gutters

`.col` with `.g-3` gutters

`.col` with `.g-3` gutters

`.col` with `.g-3` gutters

`.col` with `.g-3` gutters

---

## Containers

.container

.sm:container

.md:container

.lg:container

.xl:container

.2xl:container

.container-fluid
