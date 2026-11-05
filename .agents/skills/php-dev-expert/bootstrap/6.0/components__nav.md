# Nav · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/nav

---

# Nav

Add lists of links to your pages with various navigation components—tabs, pills, underline—and plenty of options to customize.

JS Optional

Layer: `components`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/nav)

On this page…

##### On this page

## Base nav

Navigation available in Bootstrap share general markup and styles, from the base `.nav` class to the active and disabled states. Swap modifier classes to switch between each style.

The base `.nav` component is built with flexbox and provides a strong foundation for building all types of navigation components. It includes some style overrides (for working with lists), some link padding for larger hit areas, and basic disabled styling.

To convey the active state to assistive technologies, use the `aria-current` attribute — using the `page` value for current page, or `true` for the current item in a set.

- [Active](#)
- [Link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

Classes are used throughout, so your markup can be super flexible. Use `<ul>`s like above, `<ol>` if the order of your items is important, or roll your own with a `<nav>` element. Because the `.nav` uses `display: flex`, the nav links behave the same as nav items would, but without the extra markup.

HTML

```
<nav class="nav">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
```

Where appropriate, you can also use `<button>` elements instead of `<a>` elements for the nav links. You can even mix and match—for example, by using buttons for menus.

HTML

```
<nav class="nav">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <button class="nav-link" data-bs-toggle="menu" href="#" role="button" aria-expanded="false">Menu</button>
  <div class="menu">
    <a class="menu-item" href="#">Action</a>
    <a class="menu-item" href="#">Another action</a>
    <hr class="menu-divider">
    <a class="menu-item" href="#">Something else here</a>
  </div>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
```

## Tab JavaScript plugin

Use the [tab JavaScript plugin](components__tab.md#javascript-behavior) to create tabbable regions.

## Available styles

Change the style of `.nav`s component with modifiers and utilities. Mix and match as needed, or build your own.

### Tabs

Takes the basic nav from above and adds the `.nav-tabs` class to generate a tabbed interface.

- [Active](#)
- [Link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

### Pills

Take that same HTML, but use `.nav-pills` instead for a more themed appearance.

- [Active](#)
- [Link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

Pill navigation can also go vertical with an additional modifier class, `.nav-pills-vertical`.

- [Active](#)
- [Link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav nav-pills nav-pills-vertical">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

### Underline

Take that same HTML, but use `.nav-underline` instead:

- [Active](#)
- [Link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav nav-underline">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

## Alignment

Change the alignment of your nav with [flexbox utilities](utilities__flex.md). By default, navs are horizontal and left-aligned, but you can easily modify them to center or right-aligned, and even stacked vertically.

### Horizontal

Centered with `.justify-content-center`:

- [Active](#)
- [Link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

Right-aligned with `.justify-content-end`:

- [Active](#)
- [Link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

### Vertical

Stack your navigation by changing the flex item direction with the `.flex-column` utility. Need to stack them on some viewports but not others? Use the responsive versions (e.g., `.sm:flex-column`).

- [Active](#)
- [Link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

As always, vertical navigation is possible without `<ul>`s, too.

HTML

```
<nav class="nav flex-column">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
```

### Fill and justify

Force your `.nav`’s contents to extend the full available width with one of two modifier classes. To proportionately fill all available space with your `.nav-item`s, use `.nav-fill`. Notice that all horizontal space is occupied, but not every nav item has the same width.

- [Active](#)
- [Much longer nav link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Much longer nav link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

When using a `<nav>`-based navigation, you can safely omit `.nav-item` as only `.nav-link` is required for styling `<a>` elements.

HTML

```
<nav class="nav nav-pills nav-fill">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Much longer nav link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
```

For equal-width elements, use `.nav-justified`. All horizontal space will be occupied by nav links, but unlike the `.nav-fill` above, every nav item will be the same width.

- [Active](#)
- [Much longer nav link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav nav-pills nav-justified">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Much longer nav link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

Similar to the `.nav-fill` example using a `<nav>`-based navigation.

HTML

```
<nav class="nav nav-pills nav-justified">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Much longer nav link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
```

## Working with flex utilities

If you need responsive nav variations, consider using a series of [flexbox utilities](utilities__flex.md). While more verbose, these utilities offer greater customization across responsive breakpoints. In the example below, our nav will be stacked on the lowest breakpoint, then adapt to a horizontal layout that fills the available width starting from the small breakpoint.

HTML

```
<nav class="nav nav-pills flex-column sm:flex-row">
  <a class="sm:flex-fill sm:text-center nav-link active" aria-current="page" href="#">Active</a>
  <a class="sm:flex-fill sm:text-center nav-link" href="#">Longer nav link</a>
  <a class="sm:flex-fill sm:text-center nav-link" href="#">Link</a>
  <a class="sm:flex-fill sm:text-center nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
```

## Regarding accessibility

If you’re using navs to provide a navigation bar, be sure to add a `role="navigation"` to the most logical parent container of the `<ul>`, or wrap a `<nav>` element around the whole navigation. Do not add the role to the `<ul>` itself, as this would prevent it from being announced as an actual list by assistive technologies.

Note that navigation bars, even if visually styled as tabs with the `.nav-tabs` class, should **not** be given `role="tablist"`, `role="tab"` or `role="tabpanel"` attributes. These are only appropriate for dynamic tabbed interfaces, as described in the [ARIA Authoring Practices Guide tabs pattern](https://www.w3.org/WAI/ARIA/apg/patterns/tabpanel/). See the [Tab plugin](components__tab.md) for dynamic tabbed interfaces. The `aria-current` attribute is not necessary on dynamic tabbed interfaces since our JavaScript handles the selected state by adding `aria-selected="true"` on the active tab.

## Using menus

Add menus with a little extra HTML and the [menus JavaScript plugin](components__menus.md#usage).

### Tabs with menus

- [Active](#)
- [Menu](#)

  [Action](#)
  [Another action](#)
  [Something else here](#)

  ---

  [Separated link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" role="button" data-bs-toggle="menu" aria-expanded="false">Menu</a>
    <div class="menu">
      <a class="menu-item" href="#">Action</a>
      <a class="menu-item" href="#">Another action</a>
      <a class="menu-item" href="#">Something else here</a>
      <hr class="menu-divider">
      <a class="menu-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

### Pills with menus

- [Active](#)
- [Menu](#)

  [Action](#)
  [Another action](#)
  [Something else here](#)

  ---

  [Separated link](#)
- [Link](#)
- Disabled

HTML

```
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" role="button" data-bs-toggle="menu" aria-expanded="false">Menu</a>
    <div class="menu">
      <a class="menu-item" href="#">Action</a>
      <a class="menu-item" href="#">Another action</a>
      <a class="menu-item" href="#">Something else here</a>
      <hr class="menu-divider">
      <a class="menu-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
```

## CSS

### Variables

Navs use local CSS variables on `.nav` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

On the `.nav` base class:

[scss/\_nav.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_nav.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$nav-tokens: defaults(
  (
    --nav-gap: .125rem,
    --nav-link-gap: .5rem,
    --nav-link-align: center,
    --nav-link-justify: center,
    --nav-link-padding-x: .75rem,
    --nav-link-padding-y: .375rem,
    --nav-link-color: var(--fg-2),
    --nav-link-hover-color: var(--fg-1),
    --nav-link-hover-bg: var(--bg-1),
    --nav-link-active-color: var(--fg-body),
    --nav-link-active-bg: var(--bg-2),
    --nav-link-disabled-color: var(--fg-4),
    --nav-link-border-width: var(--border-width),
    --nav-link-transition-property: "color, background-color, border-color",
    --nav-link-transition-duration: .15s,
    --nav-link-transition-timing: ease-in-out,
  ),
  $nav-tokens
);
```

On the `.nav-tabs` modifier class:

[scss/\_nav.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_nav.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$nav-tabs-tokens: defaults(
  (
    --nav-tabs-border-width: var(--border-width),
    --nav-tabs-border-color: var(--border-color),
    --nav-tabs-border-radius: var(--radius-5),
    --nav-tabs-link-hover-border-color: var(--border-subtle),
    --nav-tabs-link-active-color: var(--fg-body),
    --nav-tabs-link-active-bg: var(--bg-body),
    --nav-tabs-link-active-border-color: var(--border-color) var(--border-color) var(--bg-body),
  ),
  $nav-tabs-tokens
);
```

On the `.nav-pills` modifier class:

[scss/\_nav.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_nav.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$nav-pills-tokens: defaults(
  (
    --nav-pills-bg: var(--bg-1),
    --nav-pills-padding: .25rem,
    --nav-pills-border-radius: 3rem,
    --nav-pills-link-active-color: var(--primary-contrast),
    --nav-pills-link-active-bg: var(--primary-bg),
    --nav-pills-link-border-radius: 3rem,
  ),
  $nav-pills-tokens
);
```

On the `.nav-underline` modifier class:

[scss/\_nav.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_nav.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$nav-underline-tokens: defaults(
  (
    --nav-gap: 1rem,
    --nav-link-active-bg: transparent,
    --nav-underline-border-width: .125rem,
    --nav-underline-link-active-color: var(--fg-body),
  ),
  $nav-underline-tokens
);
```
