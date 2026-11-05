# Alert · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/alert

---

# Alert

Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.

JS Optional

Layer: `components`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/alert)

On this page…

##### On this page

## Default alert

Alerts are available for any length of text, as well as an optional close button. Alerts are designed to be used with theme colors, but have neutral fallback colors for when no theme color is applied. For inline dismissal, use the [alerts JavaScript plugin](#dismiss).

A simple alert—check it out!

HTML

```
<div class="alert" role="alert">
  <p>A simple alert—check it out!</p>
</div>
```

## Variants

Use any of our variant theme classes for color mode adaptive, contextual styling.

A simple primary alert—check it out!

A simple accent alert—check it out!

A simple success alert—check it out!

A simple danger alert—check it out!

A simple warning alert—check it out!

A simple info alert—check it out!

A simple inverse alert—check it out!

A simple secondary alert—check it out!

HTML

```
<div class="alert theme-primary" role="alert">
  <p>A simple primary alert—check it out!</p>
</div>
<div class="alert theme-accent" role="alert">
  <p>A simple accent alert—check it out!</p>
</div>
<div class="alert theme-success" role="alert">
  <p>A simple success alert—check it out!</p>
</div>
<div class="alert theme-danger" role="alert">
  <p>A simple danger alert—check it out!</p>
</div>
<div class="alert theme-warning" role="alert">
  <p>A simple warning alert—check it out!</p>
</div>
<div class="alert theme-info" role="alert">
  <p>A simple info alert—check it out!</p>
</div>
<div class="alert theme-inverse" role="alert">
  <p>A simple inverse alert—check it out!</p>
</div>
<div class="alert theme-secondary" role="alert">
  <p>A simple secondary alert—check it out!</p>
</div>
```

Accessibility Tip: Using color to convey meaning

Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies like screen readers. Please ensure the meaning is obvious from the content itself (e.g., the visible text with a [*sufficient* color contrast](getting-started__accessibility.md#color-contrast)) or is included through alternative means, such as additional text hidden with the `.visually-hidden` class.

## Live example

Click the button below to show an alert (hidden with inline styles to start), then dismiss (and destroy) it with the built-in close button.

Show live alert

HTML

```
<div id="liveAlertPlaceholder"></div>
<button type="button" class="btn-solid theme-primary flex-grow-0" id="liveAlertBtn">Show live alert</button>
```

We use the following JavaScript to trigger our live alert demo:

[site/src/assets/partials/snippets.js](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/assets/partials/snippets.js)

```
const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert theme-${type}" role="alert">`,
    `   <p>${message}</p>`,
    '   <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    appendAlert('Nice, you triggered this alert message!', 'success')
  })
}
```

## Link color

Use the `.alert-link` utility class to quickly provide matching colored links within any alert.

A simple primary alert with [an example link](#). Give it a click if you like.

A simple accent alert with [an example link](#). Give it a click if you like.

A simple success alert with [an example link](#). Give it a click if you like.

A simple danger alert with [an example link](#). Give it a click if you like.

A simple warning alert with [an example link](#). Give it a click if you like.

A simple info alert with [an example link](#). Give it a click if you like.

A simple inverse alert with [an example link](#). Give it a click if you like.

A simple secondary alert with [an example link](#). Give it a click if you like.

HTML

```
<div class="alert theme-primary" role="alert">
  <p>A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
</div>
<div class="alert theme-accent" role="alert">
  <p>A simple accent alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
</div>
<div class="alert theme-success" role="alert">
  <p>A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
</div>
<div class="alert theme-danger" role="alert">
  <p>A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
</div>
<div class="alert theme-warning" role="alert">
  <p>A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
</div>
<div class="alert theme-info" role="alert">
  <p>A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
</div>
<div class="alert theme-inverse" role="alert">
  <p>A simple inverse alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
</div>
<div class="alert theme-secondary" role="alert">
  <p>A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.</p>
</div>
```

## Additional content

Alerts can also contain additional HTML elements like headings, paragraphs and dividers.

#### Well done!

Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.

---

Whenever you need to, be sure to use margin utilities to keep things nice and tidy.

HTML

```
<div class="alert theme-success" role="alert">
  <vstack>
    <h4 class="alert-heading mb-2">Well done!</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <hr class="my-3">
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  </vstack>
</div>
```

## With icons

Similarly, you can use [flexbox utilities](utilities__flex.md) and [Bootstrap Icons](https://icons.getbootstrap.com/) to create alerts with icons. Depending on your icons and content, you may want to add more utilities or custom styles.

An example alert with an icon

HTML

```
<div class="alert theme-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <p>An example alert with an icon</p>
</div>
```

## Dismiss

Using the alert JavaScript plugin, it’s possible to dismiss any alert inline. Here’s how:

- Be sure you’ve loaded the alert plugin, or the compiled Bootstrap JavaScript.
- Add a [close button](components__close-button.md) and use flexbox utilities (e.g. `ms-auto`) to position it within the alert.
- On the close button, add the `data-bs-dismiss="alert"` attribute, which triggers the JavaScript functionality. Be sure to use the `<button>` element with it for proper behavior across all devices.

An alert fades out before it is removed. The plugin adds `.hiding` for the length of the transition, so no extra classes are needed in your markup. Add `.alert-instant` to remove the alert at once instead. See [Transitions](customize__transitions.md) for the tokens that tune the fade.

You can see this in action with a live demo:

Something’s wrong, check the fields below and try again.

HTML

```
<div class="alert theme-warning" role="alert">
  <p>Something’s wrong, check the fields below and try again.</p>
  <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
```

When an alert is dismissed, the element is completely removed from the page structure. If a keyboard user dismisses the alert using the close button, their focus will suddenly be lost and, depending on the browser, reset to the start of the page/document. For this reason, we recommend including additional JavaScript that listens for the `closed.bs.alert` event and programmatically sets `focus()` to the most appropriate location in the page. If you’re planning to move focus to a non-interactive element that normally does not receive focus, make sure to add `tabindex="-1"` to the element.

## CSS

### Variables

Alerts use local CSS variables on `.alert` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/\_alert.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_alert.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$alert-tokens: defaults(
  (
    --alert-gap: var(--spacer-3),
    --alert-bg: var(--bg-1),
    --alert-padding-x: var(--spacer),
    --alert-padding-y: var(--spacer),
    --alert-color: inherit,
    --alert-border-color: var(--border-color),
    --alert-border-radius: var(--radius-7),
    --alert-link-color: inherit,
    --alert-transition-property: "opacity",
    --alert-transition-duration: .15s,
    --alert-transition-timing: linear,
    --hr-border-color: var(--theme-border, var(--alert-border-color)),
  ),
  $alert-tokens
);
```

### Sass loops

Loop that generates the modifier classes with an overriding of CSS variables.

## JavaScript behavior

### Initialize

Initialize elements as alerts

JavaScript

```
          const alertList = document.querySelectorAll('.alert')
const alerts = [...alertList].map(element => new bootstrap.Alert(element))
```

For the sole purpose of dismissing an alert, it isn’t necessary to initialize the component manually via the JS API. By making use of `data-bs-dismiss="alert"`, the component will be initialized automatically and properly dismissed.

See the [triggers](#triggers) section for more details.

### Via data attributes

| Attribute | Description |
| --- | --- |
| `data-bs-dismiss="alert"` | On a close control, dismisses (and removes) the alert when activated. |

### Triggers

Dismissal can be achieved with the `data-bs-dismiss` attribute on a button **within the alert** as demonstrated below:

HTML

```
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
```

or on a button **outside the alert** using the additional `data-bs-target` as demonstrated below:

HTML

```
<button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
```

**Note that closing an alert will remove it from the DOM.**

### Dependencies

The alert plugin requires the following JavaScript files if you’re building Bootstrap’s JS from source:

| File | Description |
| --- | --- |
| `js/src/alert.ts` | Main alert component |
| `js/src/base-component.ts` | Base component class |
| `js/src/dom/data.ts` | Element data store |
| `js/src/dom/event-handler.ts` | Event handling utilities |
| `js/src/dom/manipulator.ts` | Data attribute manipulation |
| `js/src/dom/selector-engine.ts` | DOM selector utilities |
| `js/src/util/component-functions.ts` | Shared component helpers |
| `js/src/util/config.ts` | Configuration base class |
| `js/src/util/index.ts` | Core utility functions |

### Methods

**Methods that show or hide a component return a promise.** The promise resolves when the transition ends, so `await` continues at the same moment a `shown.bs.*` or `hidden.bs.*` listener runs. The methods still return immediately and never block the caller. A call on a component that is already transitioning does nothing and resolves right away. [Learn more in our JavaScript docs.](getting-started__javascript.md#promises-and-transitions)

You can create an alert instance with the alert constructor, for example:

JavaScript

```
          const bsAlert = new bootstrap.Alert('#myAlert')
```

This makes an alert listen for click events on descendant elements which have the `data-bs-dismiss="alert"` attribute. (Not necessary when using the data-api’s auto-initialization.)

| Method | Description |
| --- | --- |
| `close` | Closes an alert by removing it from the DOM. The alert fades out first, unless it has `.alert-instant`. **Returns a promise that resolves once the alert is removed** (i.e. after the `closed.bs.alert` event fires). |
| `dispose` | Destroys an element’s alert. (Removes stored data on the DOM element) |
| `getInstance` | Static method which allows you to get the alert instance associated to a DOM element. For example: `bootstrap.Alert.getInstance(alert)`. |
| `getOrCreateInstance` | Static method which returns an alert instance associated to a DOM element or create a new one in case it wasn’t initialized. You can use it like this: `bootstrap.Alert.getOrCreateInstance(element)`. |

Basic usage:

JavaScript

```
          const alert = bootstrap.Alert.getOrCreateInstance('#myAlert')
alert.close()
```

### Events

Bootstrap’s alert plugin exposes a few events for hooking into alert functionality.

| Event | Description |
| --- | --- |
| `close.bs.alert` | Fires immediately when the `close` instance method is called. |
| `closed.bs.alert` | Fired when the alert has been closed and CSS transitions have completed. |

JavaScript

```
          const myAlert = document.getElementById('myAlert')
myAlert.addEventListener('closed.bs.alert', event => {
  // do something, for instance, explicitly move focus to the most appropriate element,
  // so it doesn’t get lost/reset to the start of the page
  // document.getElementById('...').focus()
})
```
