# Z-index · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/z-index

---

# Z-index

Use our low-level `z-index` utilities to quickly change the stack level of an element or component.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/z-index)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .z-n1 | z-index: -1; |
| .z-0 | z-index: 0; |
| .z-1 | z-index: 1; |
| .z-2 | z-index: 2; |
| .z-3 | z-index: 3; |
| .z-menu | z-index: 1000; |
| .z-sticky | z-index: 1010; |
| .z-fixed | z-index: 1020; |
| .z-drawer | z-index: 1030; |
| .z-dialog | z-index: 1040; |
| .z-popover | z-index: 1050; |
| .z-tooltip | z-index: 1060; |
| .z-toast | z-index: 1070; |

## Example

Use `z-index` utilities to stack elements on top of one another. Requires a `position` value other than `static`, which can be set with custom styles or using our [position utilities](utilities__position.md).

### Low-level stack

We call these “low-level” `z-index` utilities because of their default values of `-1` through `3`, which we use for the layout of overlapping components. High-level `z-index` values are used for overlay components like modals and tooltips.

z-3

z-2

z-1

z-0

z-n1

HTML

```
<div class="z-3 position-absolute p-9 rounded-3"><span>z-3</span></div>
<div class="z-2 position-absolute p-9 rounded-3"><span>z-2</span></div>
<div class="z-1 position-absolute p-9 rounded-3"><span>z-1</span></div>
<div class="z-0 position-absolute p-9 rounded-3"><span>z-0</span></div>
<div class="z-n1 position-absolute p-9 rounded-3"><span>z-n1</span></div>
```

### Component stack

The component `z-index` utilities are used for overlay components like dialogs, popovers, and more. Classes are available for all of them, and their CSS variables are used in their respective components out of the box.

| Class | Value | CSS variable |
| --- | --- | --- |
| `z-menu` | `1000` | `var(--z-menu)` |
| `z-sticky` | `1010` | `var(--z-sticky)` |
| `z-fixed` | `1020` | `var(--z-fixed)` |
| `z-drawer` | `1030` | `var(--z-drawer)` |
| `z-dialog` | `1040` | `var(--z-dialog)` |
| `z-popover` | `1050` | `var(--z-popover)` |
| `z-tooltip` | `1060` | `var(--z-tooltip)` |
| `z-toast` | `1070` | `var(--z-toast)` |

Read more about the component `z-index` values in the [`z-index` layout page](layout__z-index.md).

## Overlays

Bootstrap overlay components—menu, dialog, drawer, popover, toast, and tooltip—all have their own `z-index` values to ensure a usable experience with competing “layers” of an interface.

Read about them in the [`z-index` layout page](layout__z-index.md).

## Component approach

On some components, we use our low-level `z-index` values to manage repeating elements that overlap one another (like buttons in a button group or items in a list group).

Learn about our [`z-index` approach](getting-started__approach.md#z-index-scales).

## CSS

### Sass maps

Customize this Sass map to change the available values and generated utilities.

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

### Sass utilities API

Position utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"z-index": (
  property: z-index,
  class: z,
  values: $zindex-levels,
),
```
