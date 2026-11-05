# Z-index · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/layout/z-index

---

# Z-index

While not a part of Bootstrap’s grid system, z-indexes play an important part in how our components overlay and interact with one another.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/layout/z-index)

On this page…

##### On this page

Several Bootstrap components utilize `z-index`, the CSS property that helps control layout by providing a third axis to arrange content. We utilize a default z-index scale in Bootstrap that’s been designed to properly layer navigation, tooltips and popovers, modals, and more.

These higher values start at an arbitrary number, high and specific enough to ideally avoid conflicts. We need a standard set of these across our layered components—tooltips, popovers, navbars, menus, modals—so we can be reasonably consistent in the behaviors. There’s no reason we couldn’t have used `100`+ or `500`+.

We don’t encourage customization of these individual values; should you change one, you likely need to change them all.

[scss/\_config.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_config.scss)

```
$zindex-levels: (
  n1: -1,
  0: 0,
  1: 1,
  2: 2,
  3: 3,
  menu: 1000,
  sticky: 1010,
  fixed: 1020,
  drawer: 1030,
  dialog: 1040,
  popover: 1050,
  tooltip: 1060,
  toast: 1070,
);
```

To handle overlapping borders within components (e.g., buttons and inputs in input groups), we use low single digit `z-index` values of `1`, `2`, and `3` for default, hover, and active states. On hover/focus/active, we bring a particular element to the forefront with a higher `z-index` value to show their border over the sibling elements.
