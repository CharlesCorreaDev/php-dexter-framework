# Browsers & devices · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/getting-started/browsers-devices

---

# Browsers & devices

Learn about the browsers and devices, from modern to old, that are supported by Bootstrap, and the modern platform features the framework is built on.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/getting-started/browsers-devices)

On this page…

##### On this page

## Supported browsers

Bootstrap supports the **latest, stable releases** of all major browsers and platforms, plus a run of older versions of each engine. The exact policy lives in [our `.browserslistrc` file](https://github.com/twbs/bootstrap/blob/main/.browserslistrc):

PLAINTEXT

```
last 2 major versions
not dead
unreleased versions

Chrome >= 130
Edge >= 130
Firefox >= 132
iOS >= 18.0
Safari >= 18.0

not and_uc > 0
not and_qq > 0
not kaios > 0
not op_mini all
```

Browserslist joins these lines with OR, not AND. The `>=` lines do not narrow `last 2 major versions`. They add every version above each floor, which is what sets our real minimums:

| Browser | Minimum version |
| --- | --- |
| Chrome | 130 |
| Edge | 130 |
| Firefox | 132 |
| Safari (macOS) | 18 |
| Safari (iOS and iPadOS) | 18 |

Alternative browsers built on these engines (Chromium-based browsers like Brave, Opera, or Vivaldi, and browsers using WebKit on iOS) are not explicitly tested, but should be fully supported at equivalent engine versions.

### How to read the query list

Two of those lines do more than they look like they do:

- **`last 2 major versions` carries our mobile coverage.** caniuse tracks Chrome for Android as a single unversioned entry rather than one entry per release, so this line, not the `>=` floors, is what picks it up.
- **`unreleased versions` is worth about eight points of coverage, and it costs nothing.** caniuse gives the newest Safari a null release date, yet that version already holds most of Safari’s usage share. Both range queries and `last N versions` skip unreleased versions, so without this line we would exclude the single most-used Safari. It cannot pull in anything old, because an unreleased version is newer than every floor.

To measure coverage yourself, run `npx browserslist --coverage` in a clone of the repository. Do not read the figure off browserslist.dev: that site pins an older copy of caniuse-db and reports a materially different number.

### Why these versions?

Bootstrap’s CSS is written against the modern platform baseline: [`light-dark()`](https://developer.mozilla.org/en-US/docs/Web/CSS/color_value/light-dark) for [color modes](customize__color-modes.md), `oklch()` and `color-mix()` for the [color system](customize__color.md), native CSS nesting, container queries, and `:has()`.

Our floors also have to last. They apply to the whole v6.x line, and we cannot raise them in a minor release, so they cap what every future 6.x feature may use. We therefore set each floor on the newest feature v6 already depends on, not the oldest version we could tolerate:

| Feature | Sets the floor for |
| --- | --- |
| `:has()` | Firefox 121—used by forms, button groups, and cards |
| `content-visibility` | Firefox 125 and Safari 18—the accordion transitions it with `allow-discrete` |
| `<details name="…">` | Firefox 130—exclusive accordions |
| `text-wrap: balance` | Chrome 130—shipped as a utility |
| Unprefixed `backdrop-filter` | Safari and iOS 18—Dialog and Drawer blur their `::backdrop` |

`light-dark()` sets the hard lower bound: Chrome 123, Firefox 120, and Safari 17.5. Below it, our build pipeline lowers `light-dark()` to a custom-property polyfill, and that polyfill breaks `data-bs-theme` dark mode. We will not go below that bound in any release.

Together these targets cover about 85% of global browser usage.

Unlike previous major versions, Bootstrap 6 does not ship fallbacks, prefixes, or polyfills for browsers below this floor. Pages will not render correctly in unsupported browsers—most visibly, colors depending on `light-dark()` will not resolve.

## Modern platform features

The table below lists the platform features v6 relies on and how each behaves at—and below—the support floor.

| Feature | Used by | Behavior in supported browsers |
| --- | --- | --- |
| `light-dark()` | [Color modes](customize__color-modes.md), all theme tokens | Sets the hard lower bound for the floor; no fallback below it |
| `oklch()`, `color-mix()` | [Color system](customize__color.md), theme variants | Fully supported above the floor |
| Container queries (`@container`) | [Card groups](components__card.md#card-groups), [horizontal list groups](components__list-group.md#horizontal) | Fully supported above the floor; these components also require an ancestor query container (`.contains-inline`)—without one they stay stacked |
| `:has()` | Forms, button groups with menus, and other contextual styling | Fully supported above the floor |
| Native `<dialog>` | [Dialog](components__dialog.md), [Drawer](components__drawer.md) | Fully supported above the floor; focus containment and `inert` behavior come from the browser |
| `<details name="…">` | [Exclusive accordions](components__accordion.md) | Fully supported above the floor; in older, unsupported browsers accordion items degrade gracefully to independently openable `<details>` elements |
| CSS scroll snap | [Carousel](components__carousel.md) | Fully supported above the floor; native touch, wheel, and keyboard scrolling |
| Logical properties | Spacing, borders, and [RTL](customize__rtl.md) support throughout | Fully supported above the floor |

### Also safe to use

The floors clear more of the platform than the components currently use. All of the following need no fallback, no vendor prefix, and no polyfill in any 6.x release, so reach for them first when you build on top of Bootstrap or contribute to it:

- Native CSS nesting, so compiled output can stay nested
- `@layer`, which our [layer order](getting-started__approach.md) depends on
- `:focus-visible` for keyboard-only focus styling
- Container query units and `subgrid`
- `content-visibility`, `transition-behavior: allow-discrete`, and `@starting-style`, which together animate `<details>` and `<dialog>` open and closed
- Unprefixed `backdrop-filter`
- `text-wrap: balance`
- Range syntax in media queries, such as `@media (width >= 1024px)`

### Not available yet

These features sit above our floors, so v6 cannot use them without a fallback. Firefox is the blocker in nearly every case, which means Chrome support alone is never enough to tell you whether we can ship something.

| Feature | First fully supported in |
| --- | --- |
| Relative color syntax, `rgb(from …)` | Chrome 131, Firefox 133 |
| View transitions | Firefox 144 |
| Invoker Commands API (`command` / `commandfor`) | Chrome 135, Firefox 144, Safari 26.2 |
| `@scope` | Firefox 146 |
| Anchor positioning | Firefox 147, Safari 26 |
| Style container queries | Firefox 151 |
| `text-box-trim` | Firefox 154 |
| Scrollbar styling | Safari 26.2 |

Relative color syntax is the closest miss, one version above our Chrome floor. Anchor positioning is the one most worth waiting for: it would let Menu, Tooltip, Popover, and Combobox drop their [Floating UI](https://floating-ui.com/) dependency. Re-check these with `npx browserslist` before you assume one has landed.

## JavaScript

Bootstrap’s JavaScript ships as **native ES modules only**. Load it with `<script type="module">`—a classic `<script src>` without `type="module"` will not execute it, and there is no global `window.bootstrap` object. See the [JavaScript getting-started guide](getting-started__javascript.md) for loading patterns, including import maps for the bundle’s dependencies.

All browsers meeting the CSS support floor above fully support ES modules, `import`/`export` syntax, and the DOM APIs Bootstrap’s plugins use—no transpilation or polyfills are required or provided.

## Mobile devices

Generally speaking, Bootstrap supports the latest versions of each major platform’s default browsers. Note that proxy browsers (such as Opera Mini, Opera Mobile’s Turbo mode, UC Browser Mini, Amazon Silk) are not supported. We also exclude UC Browser, QQ Browser, and KaiOS. Together they hold under 1% of users, and including them only adds vendor prefixes to our CSS: `-webkit-mask-*` for UC and QQ, and `-moz-column-gap` for KaiOS. KaiOS additionally [broke our floating labels](https://github.com/postcss/autoprefixer/issues/1533).

| Platform | Supported browsers |
| --- | --- |
| Android | Chrome (last two major versions) |
| iOS and iPadOS | Safari 18+, Chrome (uses WebKit on iOS) |
| Windows, macOS, Linux | Chrome 130+, Edge 130+, Firefox 132+; Safari 18+ on macOS |

As with v5, make sure you include the responsive viewport meta tag in your `<head>` for proper rendering on mobile devices:

HTML

```
          <meta name="viewport" content="width=device-width, initial-scale=1">
```
