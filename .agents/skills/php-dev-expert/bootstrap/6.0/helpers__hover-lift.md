# Hover lift · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/helpers/hover-lift

---

# Hover lift

Raise an element with a subtle transform and shadow on hover and keyboard focus.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/helpers/hover-lift)

On this page…

##### On this page

## How it works

Add `.hover-lift` to any element to gently raise it—translating it upward and deepening its shadow—when the user hovers over it or focuses it with the keyboard. It’s a lightweight way to signal that cards, tiles, or other surfaces are interactive.

The effect is driven by CSS custom properties and applied with our `transition()` mixin, so it’s fully customizable and automatically honors the [`prefers-reduced-motion`](getting-started__accessibility.md#reduced-motion) media feature—users who prefer reduced motion get the raised shadow and offset without the animation.

## Example

Hover or tab to the card below to see it lift.

[##### Hover me

This card lifts on hover and keyboard focus.](#)

HTML

```
<a href="#" class="card hover-lift text-decoration-none" style="max-width: 20rem;">
  <div class="card-body">
    <h5 class="card-title">Hover me</h5>
    <p class="card-text mb-0">This card lifts on hover and keyboard focus.</p>
  </div>
</a>
```

Because it only sets `transform` and `box-shadow`, `.hover-lift` composes with any element—buttons, list items, or plain containers.

Lift on hover

HTML

```
<button type="button" class="btn-solid theme-primary hover-lift">Lift on hover</button>
```

## CSS

### Variables

Hover lift helpers use local CSS variables on `.hover-lift` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/helpers/\_hover-lift.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/helpers/_hover-lift.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$hover-lift-tokens: defaults(
  (
    --hover-lift-transition-duration: .2s,
    --hover-lift-transition-timing: ease,
    --hover-lift-transform: translateY(-.25rem),
    --hover-lift-box-shadow: var(--box-shadow-lg),
  ),
  $hover-lift-tokens
);
```

Override the tokens to tune the lift distance, shadow, or timing. For example, a larger rise with a snappier transition:

[##### Bigger lift

Customized transform and duration.](#)

HTML

```
<a href="#" class="card hover-lift text-decoration-none" style="--bs-hover-lift-transform: translateY(-.5rem); --bs-hover-lift-transition-duration: .1s; max-width: 20rem;">
  <div class="card-body">
    <h5 class="card-title">Bigger lift</h5>
    <p class="card-text mb-0">Customized transform and duration.</p>
  </div>
</a>
```
