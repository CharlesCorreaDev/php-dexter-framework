# Close button · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/close-button

---

# Close button

A generic close button for dismissing content like modals and alerts.

Layer: `components`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/close-button)

On this page…

##### On this page

## Example

Provide an option to dismiss or close a component with `.btn-close`. The icon is rendered with a CSS `mask-image`, so it inherits the `color` from the `.btn-close` class—no inline SVG required. **Be sure to include text for screen readers**, as we’ve done with `aria-label`.

HTML

```
<button type="button" class="btn-close" aria-label="Close"></button>
```

## Disabled state

Disabled close buttons change their `opacity`. We’ve also applied `pointer-events: none` and `user-select: none` to preventing hover and active states from triggering.

HTML

```
<button type="button" class="btn-close" disabled aria-label="Close"></button>
```

## Dark variant

Add `data-bs-theme="dark"` to the `.btn-close`, or to its parent element, to invert the close button. This happens automatically when in dark mode.

HTML

```
<div data-bs-theme="dark">
  <button type="button" class="btn-close" aria-label="Close"></button>
  <button type="button" class="btn-close" disabled aria-label="Close"></button>
</div>
```

## CSS

### Variables

Close button use local CSS variables on `.btn-close` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/buttons/\_close.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/buttons/_close.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$btn-close-tokens: defaults(
  (
    --btn-close-size: 1.25rem,
    --btn-close-color: inherit,
    --btn-close-icon: #{escape-svg(url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><path d='M12 0a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4zm-.646 4.646a.5.5 0 0 0-.707 0L8 7.293 5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.647a.5.5 0 1 0 .708.707L8 8.707l2.647 2.646a.5.5 0 1 0 .707-.707L8.707 8l2.646-2.646a.5.5 0 0 0 0-.708z'/></svg>"))},
    --btn-close-opacity: .5,
    --btn-close-hover-opacity: .75,
    --btn-close-focus-opacity: .85,
    --btn-close-disabled-opacity: .25,
  ),
  $btn-close-tokens
);
```
