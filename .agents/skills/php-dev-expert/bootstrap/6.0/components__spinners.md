# Spinners · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/spinners

---

# Spinners

Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.

Layer: `components`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/spinner)

On this page…

##### On this page

Bootstrap “spinners” can be used to show the loading state in your projects. They’re built only with HTML and CSS, meaning you don’t need any JavaScript to create them. You may, however, need some custom JavaScript to toggle their visibility. Their appearance, alignment, and sizing can be easily customized with our utility classes.

For accessibility purposes, each loader here includes `role="status"` and a nested `<span class="visually-hidden">Loading…</span>`.

The animation effect of this component is dependent on the `prefers-reduced-motion` media query. See the [reduced motion section of our accessibility documentation](getting-started__accessibility.md#reduced-motion).

## Border spinner

Use the border spinners for a lightweight loading indicator.

Loading…

Loading

Loading…

HTML

```
<div class="spinner-border" role="status">
  <span class="visually-hidden">Loading…</span>
</div>

<span class="badge theme-primary">
  <span class="spinner-border" aria-hidden="true"></span>
  <span role="status">Loading</span>
</span>

<button class="btn-subtle theme-primary" type="button" disabled>
  <span class="spinner-border" aria-hidden="true"></span>
  <span role="status">Loading…</span>
</button>
```

## Growing spinner

If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!

Loading…

HTML

```
<div class="spinner-grow" role="status">
  <span class="visually-hidden">Loading…</span>
</div>
```

## Variants

Spinners use `currentColor` for their appearance, meaning you can customize the color with [text color utilities](utilities__colors.md). You can use any of our text color utilities on the standard spinner.

Loading…

Loading…

HTML

```
<div class="spinner-border fg-primary" role="status">
  <span class="visually-hidden">Loading…</span>
</div>

<div class="spinner-grow fg-accent" role="status">
  <span class="visually-hidden">Loading…</span>
</div>
```

## Size

Spinner are `1em` by `1em` by default, all Add `.spinner-sm` to make a smaller spinner that can quickly be used within other components.

Loading…

Loading…

HTML

```
<div class="spinner-border spinner-sm" role="status">
  <span class="visually-hidden">Loading…</span>
</div>
<div class="spinner-grow spinner-sm" role="status">
  <span class="visually-hidden">Loading…</span>
</div>
```

Or, use custom CSS or inline styles to change the dimensions as needed.

Loading…

Loading…

HTML

```
<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
  <span class="visually-hidden">Loading…</span>
</div>
<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
  <span class="visually-hidden">Loading…</span>
</div>
```

## Custom spinners

You can use the `.spinner-rotate` class to rotate a custom SVG spinner.

HTML

```
<svg class="bi spinner-rotate" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentcolor" stroke-width="2" stroke-linecap="round">
  <path d="M8 1V4"/>
  <path opacity="0.8" d="M3.05 3.05L5.17 5.17"/>
  <path opacity="0.6" d="M4 8L1 8"/>
  <path opacity="0.5" d="M5.17 10.83L3.05 12.95"/>
  <path opacity="0.4" d="M8 12V15"/>
  <path opacity="0.3" d="M10.83 10.83L12.95 12.95"/>
  <path opacity="0.2" d="M15 8L12 8"/>
  <path opacity="0.1" d="M12.95 3.05L10.83 5.17"/>
</svg>
```

## CSS

### Variables

Spinners use local CSS variables on `.spinner-{border|grow}` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

Border spinner tokens:

[scss/\_spinner.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_spinner.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$spinner-border-tokens: defaults(
  (
    --spinner-width: 1em,
    --spinner-height: 1em,
    --spinner-border-width: .125em,
    --spinner-animation-speed: 1s,
    --spinner-animation-timing-function: linear,
    --spinner-animation-name: spinner-border,
  ),
  $spinner-border-tokens
);
```

Growing spinner tokens:

[scss/\_spinner.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_spinner.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$spinner-grow-tokens: defaults(
  (
    --spinner-width: 1em,
    --spinner-height: 1em,
    --spinner-animation-speed: 1s,
    --spinner-animation-timing-function: ease-in-out,
    --spinner-animation-name: spinner-grow,
  ),
  $spinner-grow-tokens
);
```

### Keyframes

Used for creating the CSS animations for our spinners. Included in `scss/_spinner.scss`.

[scss/\_spinner.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_spinner.scss)

```
@keyframes spinner-border {
  to { transform: rotate(360deg); }
}
```

[scss/\_spinner.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_spinner.scss)

```
@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
```
