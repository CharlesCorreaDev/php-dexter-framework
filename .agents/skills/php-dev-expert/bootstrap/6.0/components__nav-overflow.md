# Nav overflow · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/nav-overflow

---

# Nav overflow

Automatically collapse navigation items into a "More" menu when space is limited using the Priority+ pattern.

Requires JS

Layer: `components`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/nav-overflow)

On this page…

##### On this page

## How it works

The nav overflow component (also known as the "Priority+" pattern) automatically detects when navigation items don’t fit within their container and moves them into a menu. This provides a responsive navigation experience without requiring different markup for different screen sizes.

Here’s what you need to know before getting started:

- Wrap your `.nav` in a `.nav-overflow` element and add `data-bs-toggle="nav-overflow"` to that wrapper.
- **Responds to container size**, not viewport size. The component watches the wrapper with a ResizeObserver, so it works in embedded contexts, documentation examples, and responsive containers.
- The wrapper is what makes this reliable. Collapsing items changes the width of the nav, so the component measures the wrapper instead. Measuring the nav would feed the result back in as the input.
- Overflow items are cloned into a "More" menu while the originals are hidden. A nav item that hosts a menu is the exception: its `.menu` moves into a submenu of the overflow menu.
- Works with all nav styles: default, pills, tabs, and underline.
- Active and disabled states are preserved in the overflow menu.

The animation effect of this component is dependent on the `prefers-reduced-motion` media query. See the [reduced motion section of our accessibility documentation](getting-started__accessibility.md#reduced-motion).

## Examples

Wrap the nav in `<div class="nav-overflow" data-bs-toggle="nav-overflow">`. When items don’t fit, they’ll automatically move to a "More" menu. Drag the right edge of the container below to see how nav items automatically move to the "More" menu as space becomes limited.

- [Home](#)
- [Dashboard](#)
- [Products](#)
- [Services](#)
- [Analytics](#)
- [Reports](#)
- [Settings](#)
- [Help](#)

HTML

```
<div class="nav-overflow" data-bs-toggle="nav-overflow">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Analytics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Settings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Help</a>
    </li>
  </ul>
</div>
```

### With tabs

The overflow pattern works seamlessly with tabbed navigation:

- [Overview](#)
- [Details](#)
- [History](#)
- [Activity](#)
- [Comments](#)
- [Attachments](#)
- [Related](#)

HTML

```
<div class="nav-overflow" data-bs-toggle="nav-overflow">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Overview</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">History</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Activity</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Comments</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Attachments</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Related</a>
    </li>
  </ul>
</div>
```

### With underline

- [Home](#)
- [Features](#)
- [Pricing](#)
- [FAQs](#)
- [About](#)
- [Contact](#)

HTML

```
<div class="nav-overflow" data-bs-toggle="nav-overflow">
  <ul class="nav nav-underline">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Features</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pricing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">FAQs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>
  </ul>
</div>
```

### Keep items visible

Use the `.nav-overflow-keep` class on items that should never be moved to the overflow menu. These items will remain visible regardless of available space—useful for high-priority items like "Home" or action buttons.

- [Home](#)
- [Products](#)
- [Services](#)
- [About](#)
- [Blog](#)
- [Careers](#)
- [Contact](#)

HTML

```
<div class="nav-overflow" data-bs-toggle="nav-overflow">
  <ul class="nav nav-pills">
    <li class="nav-item nav-overflow-keep">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Careers</a>
    </li>
    <li class="nav-item nav-overflow-keep">
      <a class="nav-link" href="#">Contact</a>
    </li>
  </ul>
</div>
```

### With disabled items

Disabled states are preserved when items move to the overflow menu:

- [Active](#)
- [Link](#)
- [Another link](#)
- Disabled
- [More content](#)
- [Even more](#)

HTML

```
<div class="nav-overflow" data-bs-toggle="nav-overflow">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Another link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">More content</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Even more</a>
    </li>
  </ul>
</div>
```

### In a navbar

The nav overflow pattern can also be used within a [navbar](components__navbar.md) for horizontal navigation that adapts to available space:

HTML

```
<nav class="navbar navbar-expand bg-1">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Brand</a>
    <div class="nav-overflow" data-bs-toggle="nav-overflow">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
```

### With menus

A nav item that already hosts a [menu](components__menu.md) becomes a submenu of the overflow menu. The plugin moves the original `.menu` rather than cloning it, so nested submenus stay intact.

- [Home](#)
- [Dashboard](#)
- Products

  [Laptops](#)

  Phones

  [iPhone](#)
  [Android](#)

  [Tablets](#)
- [Services](#)
- Company

  [About](#)
  [Careers](#)
  [Press](#)
- [Analytics](#)
- [Reports](#)
- [Help](#)

HTML

```
<div class="nav-overflow" data-bs-toggle="nav-overflow">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item">
      <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
        Products
      </button>
      <div class="menu">
        <a class="menu-item" href="#">Laptops</a>
        <div class="submenu">
          <button class="menu-item" type="button">Phones</button>
          <div class="menu">
            <a class="menu-item" href="#">iPhone</a>
            <a class="menu-item" href="#">Android</a>
          </div>
        </div>
        <a class="menu-item" href="#">Tablets</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Services</a>
    </li>
    <li class="nav-item">
      <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
        Company
      </button>
      <div class="menu">
        <a class="menu-item" href="#">About</a>
        <a class="menu-item" href="#">Careers</a>
        <a class="menu-item" href="#">Press</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Analytics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Reports</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Help</a>
    </li>
  </ul>
</div>
```

## Customizing the toggle

### Custom text

Use the `moreText` option to customize the text shown in the overflow toggle button:

JavaScript

```
          const wrapper = document.querySelector('.nav-overflow')
new bootstrap.NavOverflow(wrapper, {
  moreText: 'See all'
})
```

### Custom icon

Provide a custom icon via the `moreIcon` option. Any HTML string works, including inline SVGs:

JavaScript

```
          const wrapper = document.querySelector('.nav-overflow')
new bootstrap.NavOverflow(wrapper, {
  moreIcon: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/></svg>',
  moreText: false // Icon only
})
```

Set `moreText` to `false` for an icon-only toggle. The component then writes no `.nav-overflow-text` element, and labels the button `aria-label="More"` so it still has a name. An empty string does the same. To name the button something else, write your own toggle:

HTML

```
          <div class="nav-overflow" data-bs-toggle="nav-overflow">
  <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
    <li class="nav-item nav-overflow-item">
      <button class="nav-link nav-overflow-toggle" type="button" data-bs-toggle="menu" aria-label="Show more links">
        <span class="nav-overflow-icon">…</span>
      </button>
      <div class="nav-overflow-menu menu"></div>
    </li>
  </ul>
</div>
```

Alternatively, place an element with `data-bs-overflow-icon` inside the wrapper, next to the nav. The component will pick it up, use it as the toggle icon, and remove the original element from the DOM. This takes priority over the `moreIcon` option.

HTML

```
          <div class="nav-overflow" data-bs-toggle="nav-overflow">
  <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
  </ul>
  <svg data-bs-overflow-icon xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492"/>
  </svg>
</div>
```

### Icon placement

Use the `iconPlacement` option to position the icon before (`'start'`, the default) or after (`'end'`) the text:

JavaScript

```
          const wrapper = document.querySelector('.nav-overflow')
new bootstrap.NavOverflow(wrapper, {
  moreText: 'Menu',
  iconPlacement: 'end'
})
```

### Minimum visible items

Use the `threshold` option to ensure a minimum number of items remain visible before the overflow kicks in:

JavaScript

```
          const wrapper = document.querySelector('.nav-overflow')
new bootstrap.NavOverflow(wrapper, {
  threshold: 3 // Always keep at least 3 items visible
})
```

### Collapse all

Use the `collapseBelow` option to force all items into the overflow dropdown when the wrapper’s width is below a threshold. Pass a breakpoint name to resolve the value from `--bs-breakpoint-{name}`, or a number for a direct pixel value.

HTML

```
          <div class="nav-overflow" data-bs-toggle="nav-overflow" data-bs-collapse-below="md">
  <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
  </ul>
</div>
```

Or via JavaScript with a raw pixel value:

JavaScript

```
          const wrapper = document.querySelector('.nav-overflow')
new bootstrap.NavOverflow(wrapper, {
  collapseBelow: 768
})
```

Above the threshold, normal progressive collapse resumes. Items with `.nav-overflow-keep` are never collapsed.

## Usage

### Via data attributes

Add `data-bs-toggle="nav-overflow"` to the `.nav-overflow` wrapper to automatically enable the overflow behavior.

| Attribute | Description |
| --- | --- |
| `data-bs-toggle="nav-overflow"` | Enables responsive overflow handling for the `.nav` inside the wrapper. |

HTML

```
          <div class="nav-overflow" data-bs-toggle="nav-overflow">
  <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link" href="#">Link 1</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
    <!-- More items... -->
  </ul>
</div>
```

### Via JavaScript

Initialize the nav overflow component manually. Pass the wrapper, not the nav:

JavaScript

```
          const wrapperElement = document.querySelector('.nav-overflow')
const navOverflow = new bootstrap.NavOverflow(wrapperElement, {
  moreText: 'More',
  threshold: 2
})
```

### Dependencies

The nav-overflow plugin requires the following JavaScript files if you’re building Bootstrap’s JS from source:

| File | Description |
| --- | --- |
| `js/src/nav-overflow.ts` | Main nav-overflow component |
| `js/src/base-component.ts` | Base component class |
| `js/src/menu.ts` | Menu component |
| `js/src/dom/data.ts` | Element data store |
| `js/src/dom/event-handler.ts` | Event handling utilities |
| `js/src/dom/manipulator.ts` | Data attribute manipulation |
| `js/src/dom/selector-engine.ts` | DOM selector utilities |
| `js/src/util/config.ts` | Configuration base class |
| `js/src/util/floating-ui.ts` | Responsive placement utilities |
| `js/src/util/index.ts` | Core utility functions |
| `js/src/util/sanitizer.ts` | HTML content sanitizer |
| `@floating-ui/dom` | Third-party positioning library |

### Options

As options can be passed via data attributes or JavaScript, you can append an option name to `data-bs-`, as in `data-bs-animation="{value}"`. Make sure to change the case type of the option name from “*camelCase*” to “*kebab-case*” when passing the options via data attributes. For example, use `data-bs-custom-class="beautifier"` instead of `data-bs-customClass="beautifier"`.

All components support a reserved data attribute `data-bs-config` that can house simple component configuration as a JSON string. When an element has `data-bs-config='{"delay":0, "title":123}'` and `data-bs-title="456"` attributes, the final `title` value will be `456` and the separate data attributes will override values given on `data-bs-config`. In addition, existing data attributes are able to house JSON values like `data-bs-delay='{"show":0,"hide":150}'`.

The final configuration object is the merged result of `data-bs-config`, `data-bs-`, and `js object` where the latest given key-value overrides the others.

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| `collapseBelow` | number|string | `0` | Wrapper width below which all items collapse into the overflow dropdown. Pass a breakpoint name (e.g., `'md'`) to resolve from `--bs-breakpoint-{name}`, or a number for a direct pixel value. `0` disables. |
| `iconPlacement` | string | `'start'` | Position of the icon relative to the text in the toggle button. Use `'start'` for before the text or `'end'` for after. |
| `menuPlacement` | string | `'bottom-end'` | Placement of the overflow dropdown menu, passed as `data-bs-placement` to the menu toggle. |
| `menuStrategy` | string | `'absolute'` | Positioning strategy for the overflow menu, passed as `data-bs-strategy` to the menu toggle. Use `'fixed'` when an overflow ancestor would clip the menu. |
| `moreText` | string|boolean | `'More'` | Text label for the overflow toggle button. Inserted as plain text. Use `false` (or an empty string) for an icon-only toggle, which is labeled `aria-label="More"` instead. |
| `moreIcon` | string | `'<svg>...</svg>'` | SVG or HTML icon for the overflow toggle button. Passed through the [icon content sanitizer](getting-started__javascript.md#sanitizer) before insertion. Overridden by a child element with `data-bs-overflow-icon` if present (also sanitized). |
| `threshold` | number | `0` | Minimum number of items to keep visible before showing overflow. |

### Methods

**All API methods are asynchronous and start a transition.** They return to the caller as soon as the transition is started, but before it ends. In addition, a method call on a transitioning component will be ignored. [Learn more in our JavaScript docs.](getting-started__javascript.md#promises-and-transitions)

You can create a nav overflow instance with the constructor:

JavaScript

```
          const navOverflow = new bootstrap.NavOverflow('#myNav', {
  threshold: 2
})
```

| Method | Description |
| --- | --- |
| `dispose` | Destroys the nav overflow instance and restores items to their original positions. |
| `getInstance` | *Static* method to get the nav overflow instance associated with a DOM element. |
| `getOrCreateInstance` | *Static* method to get the nav overflow instance or create a new one if not initialized. |
| `update` | Manually recalculates which items should overflow. Called automatically on resize. |

### Events

Bootstrap’s nav overflow component exposes events for hooking into overflow functionality. Both events fire on the `.nav-overflow` wrapper.

| Event type | Description |
| --- | --- |
| `update.bs.navoverflow` | Fired when the overflow calculation is updated (on resize or manual update). |
| `overflow.bs.navoverflow` | Fired when items are moved to the overflow menu. Event includes `overflowCount` and `visibleCount` properties. |

JavaScript

```
          const myNav = document.getElementById('myNav') // the .nav-overflow wrapper

myNav.addEventListener('overflow.bs.navoverflow', event => {
  console.log(`${event.overflowCount} items moved to overflow`)
  console.log(`${event.visibleCount} items still visible`)
})
```
