# Toasts · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/toasts

---

# Toasts

Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.

Requires JS

Layer: `components`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/toasts)

On this page…

##### On this page

Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They’re built with flexbox, so they’re easy to align and position.

## Overview

Things to know when using the toast plugin:

- Toasts are opt-in for performance reasons, so **you must initialize them yourself**.
- Toasts will automatically hide if you do not specify `autohide: false`.

The animation effect of this component is dependent on the `prefers-reduced-motion` media query. See the [reduced motion section of our accessibility documentation](getting-started__accessibility.md#reduced-motion).

## Examples

### Basic

To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use `display: flex`, allowing easy alignment of content thanks to our margin and flexbox utilities.

Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.

**Bootstrap**
11 mins ago

Hello, world! This is a toast message.

HTML

```
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
```

### Live example

Click the button below to show a toast (positioned with our utilities in the lower right corner) that has been hidden by default.

**Bootstrap**11 mins ago

Hello, world! This is a toast message.

Show live toast

HTML

```
          <button type="button" class="btn-solid theme-primary" id="liveToastBtn">Show live toast</button>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <CloseButton dismiss="toast" />
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
```

We use the following JavaScript to trigger our live toast demo:

[site/src/assets/partials/snippets.js](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/assets/partials/snippets.js)

```
const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
  const toastBootstrap = Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}
```

### Translucent

Toasts are slightly translucent to blend in with what’s below them.

**Bootstrap**
11 mins ago

Hello, world! This is a toast message.

HTML

```
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small class="fg-2">11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
```

Add `.toast-translucent` to enhance the translucency with a backdrop blur and saturation filter.

**Bootstrap**
11 mins ago

Hello, world! This is a translucent toast message.

HTML

```
<div class="toast toast-translucent" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small class="fg-2">11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a translucent toast message.
  </div>
</div>
```

### Stacking

You can stack toasts by wrapping them in a toast container, which will vertically add some spacing.

**Bootstrap**
just now

See? Just like this.

**Bootstrap**
2 seconds ago

Heads up, toasts will stack automatically

HTML

```
<div class="toast-container position-static">
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small class="fg-2">just now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      See? Just like this.
    </div>
  </div>

  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small class="fg-2">2 seconds ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Heads up, toasts will stack automatically
    </div>
  </div>
</div>
```

### Dark toasts

Set a toast to dark mode by adding the `data-bs-theme="dark"` attribute to the `.toast` element.

**Bootstrap**
2 seconds ago

This toast is in dark mode by default.

Take action
Close

HTML

```
<div class="toast" data-bs-theme="dark" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small class="opacity-60">2 seconds ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    This toast is in dark mode by default.
    <div class="hstack gap-2 mt-2">
      <button type="button" class="btn-solid theme-primary btn-sm">Take action</button>
      <button type="button" class="btn-solid theme-secondary btn-sm" data-bs-dismiss="toast">Close</button>
    </div>
  </div>
</div>
```

### Variants

Toasts can be themed with our [theme color utilities](customize__theme.md). Apply to the entire toast or individual elements within the toast.

**Bootstrap**
2 seconds ago

This toast is a primary themed toast.

Take action
Close

**Bootstrap**
2 seconds ago

This toast is an accent-themed toast.

Take action
Close

HTML

```
<div class="toast theme-primary" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small class="opacity-60">2 seconds ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    This toast is a primary themed toast.
    <div class="hstack gap-2 mt-2">
      <button type="button" class="btn-solid btn-sm">Take action</button>
      <button type="button" class="btn-solid theme-secondary btn-sm" data-bs-dismiss="toast">Close</button>
    </div>
  </div>
</div>

<div class="toast theme-accent" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small class="opacity-60">2 seconds ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    This toast is an accent-themed toast.
    <div class="hstack gap-2 mt-2">
      <button type="button" class="btn-solid btn-sm">Take action</button>
      <button type="button" class="btn-solid theme-secondary btn-sm" data-bs-dismiss="toast">Close</button>
    </div>
  </div>
</div>
```

### Custom content

Customize your toasts by removing sub-components, tweaking them with [utilities](utilities__api.md), or by adding your own markup. Here we’ve created a simpler toast by removing the default `.toast-header`, adding a custom hide icon from [Bootstrap Icons](https://icons.getbootstrap.com/), and using some [flexbox utilities](utilities__flex.md) to adjust the layout.

Hello, world! This is a toast message.

HTML

```
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex justify-content-between">
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
    <button type="button" class="btn-close me-3 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
```

Alternatively, you can also add additional controls and components to toasts.

This is a custom toast message with additional content like a horizontal rule and buttons.

---

Take action
Close

HTML

```
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-body">
    This is a custom toast message with additional content like a horizontal rule and buttons.
    <hr class="my-3" />
    <div class="hstack gap-2">
      <button type="button" class="btn-solid theme-primary btn-sm">Take action</button>
      <button type="button" class="btn-solid theme-secondary btn-sm" data-bs-dismiss="toast">Close</button>
    </div>
  </div>
</div>
```

### Instant

By default, toasts fade in and out. To disable the animation, add `.toast-instant` to the toast. The `show` and `hide` methods then finish immediately, so `shown.bs.toast` and `hidden.bs.toast` fire right away.

**Bootstrap**
11 mins ago

This toast appears and disappears instantly.

HTML

```
<div class="toast toast-instant" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    This toast appears and disappears instantly.
  </div>
</div>
```

## Placement

Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle. If you’re only ever going to show one toast at a time, put the positioning styles right on the `.toast`.

Toast placement

Select a position...
Top left
Top center
Top right
Middle left
Middle center
Middle right
Bottom left
Bottom center
Bottom right

**Bootstrap**
11 mins ago

Hello, world! This is a toast message.

HTML

```
<form>
  <div class="mb-3">
    <label for="selectToastPlacement">Toast placement</label>
    <select class="form-control mt-2" id="selectToastPlacement">
      <option value="" selected disabled>Select a position...</option>
      <option value="top-0 start-0">Top left</option>
      <option value="top-0 start-50 translate-middle-x">Top center</option>
      <option value="top-0 end-0">Top right</option>
      <option value="top-50 start-0 translate-middle-y">Middle left</option>
      <option value="top-50 start-50 translate-middle">Middle center</option>
      <option value="top-50 end-0 translate-middle-y">Middle right</option>
      <option value="bottom-0 start-0">Bottom left</option>
      <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
      <option value="bottom-0 end-0">Bottom right</option>
    </select>
  </div>
</form>
<div aria-live="polite" aria-atomic="true" class="bg-1 position-relative bd-example-toasts rounded-3">
  <div class="toast-container p-3" id="toastPlacement">
    <div class="toast">
      <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small>11 mins ago</small>
      </div>
      <div class="toast-body">
        Hello, world! This is a toast message.
      </div>
    </div>
  </div>
</div>
```

For systems that generate more notifications, consider using a wrapping element so they can easily stack.

**Bootstrap**
just now

See? Just like this.

**Bootstrap**
2 seconds ago

Heads up, toasts will stack automatically

HTML

```
<div aria-live="polite" aria-atomic="true" class="position-relative">
  <!-- Position it: -->
  <!-- - `.toast-container` for spacing between toasts -->
  <!-- - `top-0` & `end-0` to position the toasts in the upper right corner -->
  <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
  <div class="toast-container top-0 end-0 p-3">

    <!-- Then put toasts within -->
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small class="fg-2">just now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        See? Just like this.
      </div>
    </div>

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small class="fg-2">2 seconds ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Heads up, toasts will stack automatically
      </div>
    </div>
  </div>
</div>
```

You can also get fancy with flexbox utilities to align toasts horizontally and/or vertically.

**Bootstrap**
11 mins ago

Hello, world! This is a toast message.

HTML

```
<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

  <!-- Then put toasts within -->
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
```

## Accessibility

Toasts are intended to be small interruptions to your visitors or users, so to help those with screen readers and similar assistive technologies, you should wrap your toasts in an [`aria-live` region](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/ARIA_Live_Regions). Changes to live regions (such as injecting/updating a toast component) are automatically announced by screen readers without needing to move the user’s focus or otherwise interrupt the user. Additionally, include `aria-atomic="true"` to ensure that the entire toast is always announced as a single (atomic) unit, rather than just announcing what was changed (which could lead to problems if you only update part of the toast’s content, or if displaying the same toast content at a later point in time). If the information needed is important for the process, e.g. for a list of errors in a form, then use the [alert component](components__alerts.md) instead of toast.

Note that the live region needs to be present in the markup *before* the toast is generated or updated. If you dynamically generate both at the same time and inject them into the page, they will generally not be announced by assistive technologies.

You also need to adapt the `role` and `aria-live` level depending on the content. If it’s an important message like an error, use `role="alert" aria-live="assertive"`, otherwise use `role="status" aria-live="polite"` attributes.

As the content you’re displaying changes, be sure to update the [`delay` timeout](#options) so that users have enough time to read the toast.

HTML

```
          <div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-bs-delay="10000">
  <div role="alert" aria-live="assertive" aria-atomic="true">...</div>
</div>
```

When using `autohide: false`, you must add a close button to allow users to dismiss the toast.

**Bootstrap**
11 mins ago

Hello, world! This is a toast message.

HTML

```
<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-bs-autohide="false">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
```

While technically it’s possible to add focusable/actionable controls (such as additional buttons or links) in your toast, you should avoid doing this for autohiding toasts. Even if you give the toast a long [`delay` timeout](#options), keyboard and assistive technology users may find it difficult to reach the toast in time to take action (since toasts don’t receive focus when they are displayed). If you absolutely must have further controls, we recommend using a toast with `autohide: false`.

## CSS

### Variables

Toasts use local CSS variables on `.toast` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/\_toasts.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_toasts.scss)

```
// stylelint-disable custom-property-no-missing-var-function
// stylelint-disable-next-line scss/dollar-variable-default
$toast-tokens: defaults(
  (
    --toast-zindex: var(--z-toast),
    --toast-padding-x: 1rem,
    --toast-padding-y: .75rem,
    --toast-spacing: #{$container-padding-x},
    --toast-max-width: 350px,
    --toast-font-size: var(--font-size-sm),
    --toast-color: null,
    --toast-bg: var(--bg-body),
    --toast-border-width: var(--border-width),
    --toast-border-color: var(--border-color-translucent),
    --toast-border-radius: null,
    --toast-box-shadow: var(--box-shadow),
    --toast-header-color: var(--fg-3),
    --toast-header-bg: var(--bg-1),
    --toast-header-border-color: var(--border-color-translucent),
    --toast-transition-property: "opacity, display",
    --toast-transition-duration: .15s,
    --toast-transition-timing: linear,
  ),
  $toast-tokens
);
// stylelint-enable custom-property-no-missing-var-function
```

## Usage

Initialize toasts via JavaScript:

JavaScript

```
          const toastElList = document.querySelectorAll('.toast')
const toastList = [...toastElList].map(toastEl => new bootstrap.Toast(toastEl, option))
```

### Via data attributes

| Attribute | Description |
| --- | --- |
| `data-bs-dismiss="toast"` | On a close control, dismisses the toast when activated. |
| `data-bs-autohide` | Whether the toast hides automatically after the delay. |
| `data-bs-delay` | Time in milliseconds before hiding (when autohide is enabled). |

### Triggers

Dismissal can be achieved with the `data-bs-dismiss` attribute on a button **within the toast** as demonstrated below:

HTML

```
<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
```

or on a button **outside the toast** using the additional `data-bs-target` as demonstrated below:

HTML

```
<button type="button" class="btn-close" data-bs-dismiss="toast" data-bs-target="#my-toast" aria-label="Close"></button>
```

### Dependencies

The toast plugin requires the following JavaScript files if you’re building Bootstrap’s JS from source:

| File | Description |
| --- | --- |
| `js/src/toast.ts` | Main toast component |
| `js/src/base-component.ts` | Base component class |
| `js/src/dom/data.ts` | Element data store |
| `js/src/dom/event-handler.ts` | Event handling utilities |
| `js/src/dom/manipulator.ts` | Data attribute manipulation |
| `js/src/dom/selector-engine.ts` | DOM selector utilities |
| `js/src/util/component-functions.ts` | Shared component helpers |
| `js/src/util/config.ts` | Configuration base class |
| `js/src/util/index.ts` | Core utility functions |

### Options

As options can be passed via data attributes or JavaScript, you can append an option name to `data-bs-`, as in `data-bs-animation="{value}"`. Make sure to change the case type of the option name from “*camelCase*” to “*kebab-case*” when passing the options via data attributes. For example, use `data-bs-custom-class="beautifier"` instead of `data-bs-customClass="beautifier"`.

All components support a reserved data attribute `data-bs-config` that can house simple component configuration as a JSON string. When an element has `data-bs-config='{"delay":0, "title":123}'` and `data-bs-title="456"` attributes, the final `title` value will be `456` and the separate data attributes will override values given on `data-bs-config`. In addition, existing data attributes are able to house JSON values like `data-bs-delay='{"show":0,"hide":150}'`.

The final configuration object is the merged result of `data-bs-config`, `data-bs-`, and `js object` where the latest given key-value overrides the others.

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| `autohide` | boolean | `true` | Automatically hide the toast after the delay. |
| `delay` | number | `5000` | Delay in milliseconds before hiding the toast. |

### Methods

**Methods that show or hide a component return a promise.** The promise resolves when the transition ends, so `await` continues at the same moment a `shown.bs.*` or `hidden.bs.*` listener runs. The methods still return immediately and never block the caller. A call on a component that is already transitioning does nothing and resolves right away. [Learn more in our JavaScript docs.](getting-started__javascript.md#promises-and-transitions)

| Method | Description |
| --- | --- |
| `dispose` | Hides an element’s toast. Your toast will remain on the DOM but won’t show anymore. |
| `getInstance` | *Static* method which allows you to get the toast instance associated with a DOM element.   For example: `const myToastEl = document.getElementById('myToastEl')` `const myToast = bootstrap.Toast.getInstance(myToastEl)` Returns a Bootstrap toast instance. |
| `getOrCreateInstance` | *Static* method which allows you to get the toast instance associated with a DOM element, or create a new one, in case it wasn’t initialized.  `const myToastEl = document.getElementById('myToastEl')` `const myToast = bootstrap.Toast.getOrCreateInstance(myToastEl)` Returns a Bootstrap toast instance. |
| `hide` | Hides an element’s toast. **Returns a promise that resolves once the toast is hidden** (i.e. after the `hidden.bs.toast` event fires). You have to manually call this method if you made `autohide` to `false`. |
| `isShown` | Returns a boolean according to toast’s visibility state. |
| `show` | Reveals an element’s toast. **Returns a promise that resolves once the toast is shown** (i.e. after the `shown.bs.toast` event fires). You have to manually call this method, instead your toast won’t show. |

### Events

| Event | Description |
| --- | --- |
| `hide.bs.toast` | This event is fired immediately when the `hide` instance method has been called. |
| `hidden.bs.toast` | This event is fired when the toast has finished being hidden from the user. |
| `show.bs.toast` | This event fires immediately when the `show` instance method is called. |
| `shown.bs.toast` | This event is fired when the toast has been made visible to the user. |

JavaScript

```
          const myToastEl = document.getElementById('myToast')
myToastEl.addEventListener('hidden.bs.toast', () => {
  // do something...
})
```
