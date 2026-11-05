# Popover · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/popover

---

# Popover

Small, contextual overlays for displaying custom content and information via JavaScript.

Requires JS

Layer: `components`

2 dependencies

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/popover)

On this page…

##### On this page

## Overview

Click the button below to show and close a popover.

Toggle popover

HTML

```
<button type="button" class="btn-solid theme-primary"
        data-bs-toggle="popover"
        data-bs-title="Popover title"
        data-bs-content="This is the popover content—make it as long as you want.">
  Toggle popover
</button>
```

Things to know when using the popover plugin:

- Popovers rely on the third party library [Floating UI](https://floating-ui.com/) for positioning. Use `bootstrap.bundle.min.js` which includes Floating UI, or include Floating UI separately via an [import map](getting-started__javascript.md#using-bootstrap-as-a-module).
- Popovers require the [popover plugin](components__popover.md) as a dependency.
- Popovers are automatically initialized when using `data-bs-toggle="popover"`.
- Zero-length `title` and `content` values will never show a popover.
- Specify `container: 'body'` to avoid rendering problems in more complex components (like our input groups, button groups, etc).
- Triggering popovers on hidden elements will not work.
- Popovers for `.disabled` or `disabled` elements must be triggered on a wrapper element.
- When triggered from anchors that wrap across multiple lines, popovers will be centered between the anchors’ overall width. Use `.text-nowrap` on your `<a>`s to avoid this behavior.
- Popovers must be hidden before their corresponding elements have been removed from the DOM.
- Popovers can be triggered thanks to an element inside a shadow DOM.

By default, this component uses the built-in content sanitizer, which strips out any HTML elements that are not explicitly allowed. See the [sanitizer section in our JavaScript documentation](getting-started__javascript.md#sanitizer) for more details.

The animation effect of this component is dependent on the `prefers-reduced-motion` media query. See the [reduced motion section of our accessibility documentation](getting-started__accessibility.md#reduced-motion).

Keep reading to see how popovers work with some examples.

## Examples

### Live demo

Titles are set via `data-bs-title` and body content is set via `data-bs-content`.

Feel free to use either `title` or `data-bs-title` in your HTML. When `title` is used, Floating UI will replace it automatically with `data-bs-title` when the element is rendered.

Toggle popover

HTML

```
<button type="button" class="btn-solid theme-primary"
        data-bs-toggle="popover"
        data-bs-title="Popover title"
        data-bs-content="And here’s some amazing content. It’s very engaging. Right?">
  Toggle popover
</button>
```

### Placement

Set `data-bs-placement` to change the direction. Four options are available: top, right, bottom, and left. Directions are mirrored when using Bootstrap in RTL.

Popover on left

Popover on top

Popover on bottom

Popover on right

HTML

```
<button type="button" class="btn-solid theme-secondary"
        data-bs-container="body"
        data-bs-toggle="popover"
        data-bs-placement="left"
        data-bs-content="Left popover">
  Popover on left
</button>
<button type="button" class="btn-solid theme-secondary"
        data-bs-container="body"
        data-bs-toggle="popover"
        data-bs-placement="top"
        data-bs-content="Top popover">
  Popover on top
</button>
<button type="button" class="btn-solid theme-secondary"
        data-bs-container="body"
        data-bs-toggle="popover"
        data-bs-placement="bottom"
        data-bs-content="Bottom popover">
  Popover on bottom
</button>

<button type="button" class="btn-solid theme-secondary"
        data-bs-container="body"
        data-bs-toggle="popover"
        data-bs-placement="right"
        data-bs-content="Right popover">
  Popover on right
</button>
```

### Responsive placement

Change placement at different breakpoints using responsive prefixes. The syntax is `breakpoint:placement`, where breakpoint is one of `sm`, `md`, `lg`, `xl`, or `2xl`.

Top → md:right → lg:bottom

Left → lg:top

HTML

```
<button type="button" class="btn-solid theme-secondary"
        data-bs-container="body"
        data-bs-toggle="popover"
        data-bs-placement="top md:right lg:bottom"
        data-bs-content="This popover changes placement at different breakpoints.">
  Top → md:right → lg:bottom
</button>
<button type="button" class="btn-solid theme-secondary"
        data-bs-container="body"
        data-bs-toggle="popover"
        data-bs-placement="left lg:top"
        data-bs-content="Responsive popover placement.">
  Left → lg:top
</button>
```

Resize your browser to see the popover placement change at different breakpoints.

### Custom `container`

When you have some styles on a parent element that interfere with a popover, you’ll want to specify a custom `container` so that the popover’s HTML appears within that element instead. This is common in responsive tables, input groups, and the like.

JavaScript

```
          const popover = new bootstrap.Popover('.example-popover', {
  container: 'body'
})
```

Another situation where you’ll want to set an explicit custom `container` are popovers inside a [dialog](components__dialog.md), to make sure that the popover itself is appended to the dialog. This is particularly important for popovers that contain interactive elements – dialogs will trap focus, so unless the popover is a child element of the dialog, users won’t be able to focus or activate these interactive elements.

JavaScript

```
          const popover = new bootstrap.Popover('.example-popover', {
  container: '.dialog-body'
})
```

### Custom popovers

You can customize the appearance of popovers using [CSS variables](#variables). We set a custom class with `data-bs-custom-class="custom-popover"` to scope our custom appearance and use it to override some of the local CSS variables.

[node\_modules/@twbs/bui/src/scss/\_component-examples.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/node_modules/@twbs/bui/src/scss/_component-examples.scss)

```
.custom-popover {
  --bs-popover-max-width: 200px;
  --bs-popover-border-color: var(--bd-violet-bg);
  --bs-popover-header-bg: var(--bd-violet-bg);
  --bs-popover-header-color: var(--bs-white);
  --bs-popover-body-padding-x: 1rem;
  --bs-popover-body-padding-y: 0.5rem;
}
```

Custom popover

HTML

```
<button type="button" class="btn-solid theme-secondary"
        data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover"
        data-bs-title="Custom popover"
        data-bs-content="This popover is themed via CSS variables.">
  Custom popover
</button>
```

### Dismiss on next click

Use the `focus` trigger to dismiss popovers on the user’s next click of an element other than the toggle element.
**Clicks and focus inside the popover itself do not dismiss it**, so users can select text or use controls in the content.

**Dismissing on next click requires specific HTML for proper cross-browser and cross-platform behavior.** You can only use `<a>` elements, not `<button>`s, and you must include a [`tabindex`](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex).

Dismissible popover

HTML

```
<a tabindex="0" class="btn-solid theme-secondary" role="button"
        data-bs-toggle="popover"
        data-bs-trigger="focus"
        data-bs-title="Dismissible popover"
        data-bs-content="And here’s some amazing content. It’s very engaging. Right?">
  Dismissible popover
</a>
```

JavaScript

```
          const popover = new bootstrap.Popover('.popover-dismiss', {
  trigger: 'focus'
})
```

A shown popover can also be dismissed by pressing the `Escape` key. As with dropdown menus, a popover shown inside a dialog is dismissed on its own: the first `Escape` closes the popover and a subsequent one closes the dialog.

### Disabled elements

Elements with the `disabled` attribute aren’t interactive, meaning users cannot hover or click them to trigger a popover (or tooltip). As a workaround, you’ll want to trigger the popover from a wrapper `<div>` or `<span>`, ideally made keyboard-focusable using `tabindex="0"`.

For disabled popover triggers, you may also prefer `data-bs-trigger="hover focus"` so that the popover appears as immediate visual feedback to your users as they may not expect to *click* on a disabled element.

Disabled button

HTML

```
<span class="d-inline-block rounded-3" tabindex="0"
        data-bs-toggle="popover"
        data-bs-trigger="hover focus"
        data-bs-content="Disabled popover">
  <button class="btn-solid theme-primary" type="button" disabled>Disabled button</button>
</span>
```

## CSS

### Variables

Popovers use local CSS variables on `.popover` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/\_popover.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_popover.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$popover-tokens: defaults(
  (
    --popover-zindex: var(--z-popover),
    --popover-max-width: 280px,
    --popover-font-size: var(--font-size-sm),
    --popover-bg: var(--bg-body),
    --popover-border-width: var(--border-width),
    --popover-border-color: var(--border-color-translucent),
    --popover-border-radius: var(--radius-7),
    --popover-inner-border-radius: calc(var(--radius-7) - var(--border-width)),
    --popover-box-shadow: var(--box-shadow),
    --popover-header-padding-x: var(--spacer),
    --popover-header-padding-y: var(--spacer-3),
    --popover-header-font-size: var(--font-size-sm),
    --popover-header-color: inherit,
    --popover-header-bg: var(--bg-1),
    --popover-body-padding-x: var(--spacer),
    --popover-body-padding-y: var(--spacer-3),
    --popover-body-color: var(--fg-body),
    --popover-arrow-width: 1rem,
    --popover-arrow-height: .5rem,
    --popover-arrow-border: var(--popover-border-color),
    --popover-transition-property: "opacity",
    --popover-transition-duration: .15s,
    --popover-transition-timing: linear,
  ),
  $popover-tokens
);
```

## Usage

Enable popovers via JavaScript:

JavaScript

```
          const exampleEl = document.getElementById('example')
const popover = new bootstrap.Popover(exampleEl, options)
```

**Keep popovers accessible to keyboard and assistive technology users** by only adding them to HTML elements that are traditionally keyboard-focusable and interactive (such as links or form controls). While other HTML elements can be made focusable by adding `tabindex="0"`, this can create annoying and confusing tab stops on non-interactive elements for keyboard users, and most assistive technologies currently do not announce popovers in this situation. Additionally, do not rely solely on `hover` as the trigger for your popovers as this will make them impossible to trigger for keyboard users.

Avoid adding an excessive amount of content in popovers with the `html` option. Once popovers are displayed, their content is tied to the trigger element with the `aria-describedby` attribute, causing all of the popover’s content to be announced to assistive technology users as one long, uninterrupted stream.

Popovers do not manage keyboard focus order, and their placement can be random in the DOM, so be careful when adding interactive elements (like forms or links), as it may lead to an illogical focus order or make the popover content itself completely unreachable for keyboard users. In cases where you must use these elements, consider using a dialog instead.

### Via data attributes

| Attribute | Description |
| --- | --- |
| `data-bs-toggle="popover"` | Initializes the popover on the trigger element. |
| `data-bs-title` | Title content shown in the popover header. |
| `data-bs-content` | Body content of the popover. |
| `data-bs-placement` | Where to place the popover relative to the trigger. |
| `data-bs-trigger` | How the popover opens (`click`, `hover`, `focus`, `manual`, or a combination). |
| `data-bs-custom-class` | Extra class names added to the popover for theming. |
| `data-bs-html` | When `true`, allows HTML in the title and content (use with care for untrusted input). |

### Dependencies

The popover plugin requires the following JavaScript files if you’re building Bootstrap’s JS from source:

| File | Description |
| --- | --- |
| `js/src/popover.ts` | Main popover component |
| `js/src/base-component.ts` | Base component class |
| `js/src/tooltip.ts` | Tooltip component |
| `js/src/dom/data.ts` | Element data store |
| `js/src/dom/event-handler.ts` | Event handling utilities |
| `js/src/dom/manipulator.ts` | Data attribute manipulation |
| `js/src/dom/selector-engine.ts` | DOM selector utilities |
| `js/src/util/config.ts` | Configuration base class |
| `js/src/util/floating-ui.ts` | Responsive placement utilities |
| `js/src/util/index.ts` | Core utility functions |
| `js/src/util/sanitizer.ts` | HTML content sanitizer |
| `js/src/util/template-factory.ts` | Template rendering utilities |
| `@floating-ui/dom` | Third-party positioning library |

### Options

As options can be passed via data attributes or JavaScript, you can append an option name to `data-bs-`, as in `data-bs-animation="{value}"`. Make sure to change the case type of the option name from “*camelCase*” to “*kebab-case*” when passing the options via data attributes. For example, use `data-bs-custom-class="beautifier"` instead of `data-bs-customClass="beautifier"`.

All components support a reserved data attribute `data-bs-config` that can house simple component configuration as a JSON string. When an element has `data-bs-config='{"delay":0, "title":123}'` and `data-bs-title="456"` attributes, the final `title` value will be `456` and the separate data attributes will override values given on `data-bs-config`. In addition, existing data attributes are able to house JSON values like `data-bs-delay='{"show":0,"hide":150}'`.

The final configuration object is the merged result of `data-bs-config`, `data-bs-`, and `js object` where the latest given key-value overrides the others.

Note that for security reasons the `sanitize`, `sanitizeFn`, and `allowList` options cannot be supplied using data attributes.

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| `allowList` | object | [Default value](getting-started__javascript.md#sanitizer) | An object containing allowed tags and attributes. Those not explicitly allowed will be removed by [the content sanitizer](getting-started__javascript.md#sanitizer). **Exercise caution when adding to this list.** Refer to [OWASP’s Cross Site Scripting Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html) for more information. |
| `animation` | boolean | `true` | Apply a CSS fade transition to the popover. Set it to `false` to add `.popover-instant` to the popover, which switches the fade off. |
| `boundary` | string, element | `'clippingParents'` | Overflow constraint boundary of the popover (applies only to Floating UI’s shift middleware). By default, it’s `'clippingParents'` and can accept an HTMLElement reference (via JavaScript only). For more information refer to Floating UI’s [shift docs](https://floating-ui.com/docs/shift#boundary). |
| `container` | string, element, false | `false` | Appends the popover to a specific element. Example: `container: 'body'`. This option is particularly useful in that it allows you to position the popover in the flow of the document near the triggering element - which will prevent the popover from floating away from the triggering element during a window resize. |
| `content` | string, element, function | `''` | The popover’s text content. If a function is given, it will be called with the element it is attached to as its first argument, and with its `this` reference set to that same element. |
| `customClass` | string, function | `''` | Add classes to the popover when it is shown. Note that these classes will be added in addition to any classes specified in the template. To add multiple classes, separate them with spaces: `'class-1 class-2'`. You can also pass a function that should return a single string containing additional class names. |
| `delay` | number, object | `0` | Delay showing and hiding the popover (ms)—doesn’t apply to manual trigger type. If a number is supplied, delay is applied to both hide/show. Object structure is: `delay: { "show": 500, "hide": 100 }`. |
| `fallbackPlacements` | array | `['top', 'right', 'bottom', 'left']` | Define fallback placements by providing a list of placements in array (in order of preference). For more information refer to Floating UI’s [flip docs](https://floating-ui.com/docs/flip#fallbackplacements). |
| `html` | boolean | `false` | Allow HTML in the popover. If true, HTML tags in the popover’s `title` will be rendered in the popover. If false, `innerText` property will be used to insert content into the DOM. Prefer text when dealing with user-generated input to [prevent XSS attacks](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html). |
| `offset` | array, string, function | `[0, 8]` | Offset of the popover relative to its target. You can pass a string in data attributes with comma separated values like: `data-bs-offset="10,20"`. When a function is used to determine the offset, it is called with an object containing the floating placement, the reference, and floating rects as its first argument. The triggering element DOM node is passed as the second argument. The function must return an array with two numbers: [crossAxis](https://floating-ui.com/docs/offset#crossaxis), [mainAxis](https://floating-ui.com/docs/offset#mainaxis). For more information refer to Floating UI’s [offset docs](https://floating-ui.com/docs/offset). |
| `placement` | string, function | `'right'` | How to position the popover: top, bottom, left, right. Supports responsive prefixes like `'top md:right lg:bottom'` to change placement at different breakpoints. When a function is used to determine the placement, it is called with the popover DOM node as its first argument and the triggering element DOM node as its second. |
| `floatingConfig` | null, object, function | `null` | To change Bootstrap’s default Floating UI config, see [Floating UI’s configuration](https://floating-ui.com/docs/computePosition). When a function is used to create the Floating UI configuration, it’s called with an object that contains the Bootstrap’s default Floating UI configuration. It helps you use and merge the default with your own configuration. The function must return a configuration object for Floating UI. |
| `sanitize` | boolean | `true` | Enable [content sanitization](getting-started__javascript.md#sanitizer). If true, the `template`, `content` and `title` options will be sanitized. **Exercise caution when disabling content sanitization.** Refer to [OWASP’s Cross Site Scripting Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html) for more information. Vulnerabilities caused solely by disabling content sanitization are not considered within scope for Bootstrap’s security model. |
| `sanitizeFn` | null, function | `null` | Provide an alternative [content sanitization](getting-started__javascript.md#sanitizer) function. This can be useful if you prefer to use a dedicated library to perform sanitization. |
| `selector` | string, false | `false` | If a selector is provided, popover objects will be delegated to the specified targets. In practice, this is used to also apply popovers to dynamically added DOM elements (`jQuery.on` support). See [this issue](https://github.com/twbs/bootstrap/issues/4215) and [an informative example](https://codepen.io/Johann-S/pen/djJYPb). **Note**: `title` attribute must not be used as a selector. |
| `template` | string | `'<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'` | Base HTML to use when creating the popover. The popover’s `title` will be injected into the `.popover-header`. The popover’s `content` will be injected into the `.popover-body`. `.popover-arrow` will become the popover’s arrow. The outermost wrapper element should have the `.popover` class and `role="tooltip"`. |
| `title` | string, element, function | `''` | The popover title. If a function is given, it will be called with the element it is attached to as its first argument, and with its `this` reference set to that same element. |
| `trigger` | string | `'click'` | How popover is triggered: click, hover, focus, manual. You may pass multiple triggers; separate them with a space. `'manual'` indicates that the popover will be triggered programmatically via the `.popover('show')`, `.popover('hide')` and `.popover('toggle')` methods; this value cannot be combined with any other trigger. `'hover'` on its own will result in popovers that cannot be triggered via the keyboard, and should only be used if alternative methods for conveying the same information for keyboard users is present. |

#### Data attributes for individual popovers

Options for individual popovers can alternatively be specified through the use of data attributes, as explained above.

#### Using function with `floatingConfig`

JavaScript

```
          const popover = new bootstrap.Popover(element, {
  floatingConfig(defaultBsFloatingConfig) {
    // const newFloatingConfig = {...}
    // use defaultBsFloatingConfig if needed...
    // return newFloatingConfig
  }
})
```

### Methods

**Methods that show or hide a component return a promise.** The promise resolves when the transition ends, so `await` continues at the same moment a `shown.bs.*` or `hidden.bs.*` listener runs. The methods still return immediately and never block the caller. A call on a component that is already transitioning does nothing and resolves right away. [Learn more in our JavaScript docs.](getting-started__javascript.md#promises-and-transitions)

| Method | Description |
| --- | --- |
| `disable` | Removes the ability for an element’s popover to be shown. The popover will only be able to be shown if it is re-enabled. |
| `dispose` | Hides and destroys an element’s popover (Removes stored data on the DOM element). Popovers that use delegation (which are created using [the `selector` option](#options)) cannot be individually destroyed on descendant trigger elements. |
| `enable` | Gives an element’s popover the ability to be shown. **Popovers are enabled by default.** |
| `getInstance` | *Static* method which allows you to get the popover instance associated with a DOM element. |
| `getOrCreateInstance` | *Static* method which allows you to get the popover instance associated with a DOM element, or create a new one in case it wasn’t initialized. |
| `hide` | Hides an element’s popover. **Returns a promise that resolves once the popover is hidden** (i.e. after the `hidden.bs.popover` event fires). This is considered a “manual” triggering of the popover. |
| `setContent` | Gives a way to change the popover’s content after its initialization. |
| `show` | Reveals an element’s popover. **Returns a promise that resolves once the popover is shown** (i.e. after the `shown.bs.popover` event fires). This is considered a “manual” triggering of the popover. Popovers whose title and content are both zero-length are never displayed. |
| `toggle` | Toggles an element’s popover. **Returns a promise that resolves once the popover is shown or hidden** (i.e. after the `shown.bs.popover` or `hidden.bs.popover` event fires). This is considered a “manual” triggering of the popover. |
| `toggleEnabled` | Toggles the ability for an element’s popover to be shown or hidden. |
| `update` | Updates the position of an element’s popover. |

JavaScript

```
          // getOrCreateInstance example
const popover = bootstrap.Popover.getOrCreateInstance('#example') // Returns a Bootstrap popover instance

// setContent example
popover.setContent({
  '.popover-header': 'another title',
  '.popover-body': 'another content'
})
```

The `setContent` method accepts an `object` argument, where each property-key is a valid `string` selector within the popover template, and each related property-value can be `string` | `element` | `function` | `null`

### Events

| Event | Description |
| --- | --- |
| `hide.bs.popover` | This event is fired immediately when the `hide` instance method has been called. |
| `hidden.bs.popover` | This event is fired when the popover has finished being hidden from the user (will wait for CSS transitions to complete). |
| `inserted.bs.popover` | This event is fired after the `show.bs.popover` event when the popover template has been added to the DOM. |
| `show.bs.popover` | This event fires immediately when the `show` instance method is called. |
| `shown.bs.popover` | This event is fired when the popover has been made visible to the user (will wait for CSS transitions to complete). |

JavaScript

```
          const myPopoverTrigger = document.getElementById('myPopover')
myPopoverTrigger.addEventListener('hidden.bs.popover', () => {
  // do something...
})
```
