# Grid Template for Bootstrap

> **Fonte / Source:** https://getbootstrap.com/docs/3.4/examples/grid/

---

# Bootstrap grid examples

Basic grid layouts to get you familiar with building within the Bootstrap grid system.

### Three equal columns

Get three equal-width columns **starting at desktops and scaling to large desktops**. On mobile devices, tablets and below, the columns will automatically stack.

.col-md-4

.col-md-4

.col-md-4

### Three unequal columns

Get three columns **starting at desktops and scaling to large desktops** of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.

.col-md-3

.col-md-6

.col-md-3

### Two columns

Get two columns **starting at desktops and scaling to large desktops**.

.col-md-8

.col-md-4

### Full width, single column

No grid classes are necessary for full-width elements.

---

### Two columns with two nested columns

Per the documentation, nesting is easy—just put a row of columns within an existing column. This gives you two columns **starting at desktops and scaling to large desktops**, with another two (equal widths) within the larger column.

At mobile device sizes, tablets and down, these columns and their nested columns will stack.

.col-md-8

.col-md-6

.col-md-6

.col-md-4

---

### Mixed: mobile and desktop

The Bootstrap 3 grid system has four tiers of classes: xs (phones), sm (tablets), md (desktops), and lg (larger desktops). You can use nearly any combination of these classes to create more dynamic and flexible layouts.

Each tier of classes scales up, meaning if you plan on setting the same widths for xs and sm, you only need to specify xs.

.col-xs-12 .col-md-8

.col-xs-6 .col-md-4

.col-xs-6 .col-md-4

.col-xs-6 .col-md-4

.col-xs-6 .col-md-4

.col-xs-6

.col-xs-6

---

### Mixed: mobile, tablet, and desktop

.col-xs-12 .col-sm-6 .col-lg-8

.col-sm-6 .col-lg-4

.col-xs-6 .col-sm-4

.col-xs-6 .col-sm-4

.col-xs-6 .col-sm-4

---

### Column clearing

[Clear floats](css.md#grid-responsive-resets) at specific breakpoints to prevent awkward wrapping with uneven content.

.col-xs-6 .col-sm-3
  
Resize your viewport or check it out on your phone for an example.

.col-xs-6 .col-sm-3

.col-xs-6 .col-sm-3

.col-xs-6 .col-sm-3

---

### Offset, push, and pull resets

Reset offsets, pushes, and pulls at specific breakpoints.

.col-sm-5 .col-md-6

.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0

.col-sm-6 .col-md-5 .col-lg-6

.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0
