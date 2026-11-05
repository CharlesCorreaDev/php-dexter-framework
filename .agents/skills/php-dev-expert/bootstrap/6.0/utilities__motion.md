# Motion · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/motion

---

# Motion

Disable or apply CSS transitions and animations on individual elements with motion utilities.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/motion)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .transition-none | transition: none; |
| .animation-none | animation: none; |
| .animation-shake | animation: animation-shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both; |
| .animation-pop | animation: animation-pop 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) both; |

## Overview

Bootstrap animates many components with CSS transitions and animations. The motion utilities let you disable that motion on a single element (`.transition-none`, `.animation-none`) or apply a small predefined animation (`.animation-shake`, `.animation-pop`).

To disable motion globally at build time, set the `$enable-transitions` Sass option to `false` instead.

## Transition

Add `.transition-none` to set `transition: none`, so property changes apply instantly rather than animating. Hover both buttons below: the default one eases its hover color change, while the second snaps instantly.

Default
No hover transition

HTML

```
<button type="button" class="btn-solid theme-primary">Default</button>
<button type="button" class="btn-solid theme-primary transition-none">No hover transition</button>
```

## Animation

### Disable an animation

Add `.animation-none` to set `animation: none`, which stops any running keyframe animation (such as a spinner) on that element.

Loading...

Loading...

HTML

```
<div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-border animation-none" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
```

### Shake

Add `.animation-shake` to play a brief horizontal shake once. It pairs well with invalid form feedback—apply it to a field (or toggle it via JavaScript when validation fails) to draw attention to what needs fixing.

HTML

Replay

```
<input type="text" class="form-control is-invalid animation-shake" id="motionShakeDemo" value="Not quite right">
```

### Pop

Add `.animation-pop` to scale an element in with a slight overshoot. It’s a good fit for content that appears dynamically, such as a badge whose count just updated.

New

HTML

Replay

```
<span class="badge theme-primary animation-pop" id="motionPopDemo">New</span>
```

## Reduced motion

`.transition-none` and `.animation-none` are always applied, regardless of a user’s motion preference—reach for them when you want to remove motion in every case. Bootstrap already respects the [`prefers-reduced-motion` media feature](getting-started__accessibility.md#reduced-motion) for its own components, so you don’t need them just to honor that setting.

The motion-adding utilities, `.animation-shake` and `.animation-pop`, are decorative, so they’re automatically disabled when the user prefers reduced motion.

## CSS

### Variables

Components declare their motion as `-duration` and `-timing` token pairs, so you can retune speed and easing independently. For example, the fade and collapse transitions read from `--bs-transition-fade-duration` / `--bs-transition-fade-timing` and `--bs-transition-collapse-duration` / `--bs-transition-collapse-timing`.

[scss/\_transitions.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_transitions.scss)

```
$fade-tokens: defaults(
  (
    --transition-fade-duration: .15s,
    --transition-fade-timing: linear,
  ),
  $fade-tokens
);
```

[scss/\_transitions.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_transitions.scss)

```
// stylelint-disable custom-property-no-missing-var-function
$collapse-tokens: defaults(
  (
    --transition-collapse-property: "block-size, display",
    --transition-collapse-duration: .35s,
    --transition-collapse-timing: ease,
  ),
  $collapse-tokens
);
// stylelint-enable custom-property-no-missing-var-function
```

Our overlay components—dialog, drawer, and menu—share one easing curve at the `:root` level, so a single override restyles all three.

[scss/\_root.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_root.scss)

```
// Shared easing curve for overlay components (dialog, drawer, menu)
--transition-timing-overlay: cubic-bezier(.22, 1, .36, 1),
```

### Sass utilities API

Motion utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"transition": (
  property: transition,
  class: transition,
  values: (
    none: none,
  )
),
```

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"animation": (
  property: animation,
  class: animation,
  values: (
    none: none,
    shake: animation-shake .82s cubic-bezier(.36, .07, .19, .97) both,
    pop: animation-pop .3s cubic-bezier(.34, 1.56, .64, 1) both,
  )
),
```
