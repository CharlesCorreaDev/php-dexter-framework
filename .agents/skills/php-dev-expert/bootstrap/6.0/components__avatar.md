# Avatar · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/avatar

---

# Avatar

Documentation and examples for avatars, including image avatars, initials, status indicators, and avatar stacks.

Layer: `components`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/avatar)

On this page…

##### On this page

## Examples

Avatars are used to represent users or entities. They can display an image or initials as a fallback.

### Image

Use `.avatar` with an `.avatar-img` for image-based avatars. The parent `.avatar` element provides an easy wrapper for additional avatar features like status indicators and stacks. You’re welcome to use the `.avatar-img` class on its own if you only need a single HTML element.

![mdo](https://github.com/mdo.png)

HTML

```
<span class="avatar">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
</span>
```

When used inside the `.avatar` wrapper, the image fills the wrapper and its size is set with `--avatar-size`. Used on its own, `.avatar-img` honors its own `width` and `height` instead, so set them to your desired size.

![mdo](https://github.com/mdo.png)

HTML

```
<img class="avatar-img" src="https://github.com/mdo.png" alt="mdo" width="50" height="50">
```

### Initials

Use text content inside `.avatar` for initials-based avatars.

AB
CD
EF
GG
GH
IJ
KL
MN
OP

HTML

```
<span class="avatar">AB</span>
<span class="avatar theme-primary">CD</span>
<span class="avatar theme-accent">EF</span>
<span class="avatar theme-success">GG</span>
<span class="avatar theme-danger">GH</span>
<span class="avatar theme-warning">IJ</span>
<span class="avatar theme-info">KL</span>
<span class="avatar theme-inverse">MN</span>
<span class="avatar theme-secondary">OP</span>
```

Use `.avatar-subtle` to create a subtle avatar.

AB
CD
EF
GG
GH
IJ
KL
MN
OP

HTML

```
<span class="avatar">AB</span>
<span class="avatar avatar-subtle theme-primary">CD</span>
<span class="avatar avatar-subtle theme-accent">EF</span>
<span class="avatar avatar-subtle theme-success">GG</span>
<span class="avatar avatar-subtle theme-danger">GH</span>
<span class="avatar avatar-subtle theme-warning">IJ</span>
<span class="avatar avatar-subtle theme-info">KL</span>
<span class="avatar avatar-subtle theme-inverse">MN</span>
<span class="avatar avatar-subtle theme-secondary">OP</span>
```

## Sizes

Avatars come in multiple sizes: extra small, small, default, large, and extra large.

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

HTML

```
<span class="avatar avatar-xs">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
</span>
<span class="avatar avatar-sm">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
</span>
<span class="avatar">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
</span>
<span class="avatar avatar-lg">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
</span>
<span class="avatar avatar-xl">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
</span>
```

Use a custom size by modifying the `--bs-avatar-size` variable.

![mdo](https://github.com/mdo.png)

HTML

```
<span class="avatar" style="--bs-avatar-size: 8rem;">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
</span>
```

## Status indicator

Add a `.avatar-status` element inside the avatar to show a status indicator. Each status has a distinct shape and color:

- `.status-online` — green circle
- `.status-offline` — gray rounded square
- `.status-busy` — red rounded square
- `.status-away` — yellow circle

Because the status is conveyed purely through color and shape, give each `.avatar-status` a `role="img"` and an `aria-label` (e.g. `Online`) so assistive technologies can announce it.

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

HTML

```
<span class="avatar">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  <span class="avatar-status status-online" role="img" aria-label="Online"></span>
</span>
<span class="avatar">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  <span class="avatar-status status-offline" role="img" aria-label="Offline"></span>
</span>
<span class="avatar">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  <span class="avatar-status status-busy" role="img" aria-label="Busy"></span>
</span>
<span class="avatar">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  <span class="avatar-status status-away" role="img" aria-label="Away"></span>
</span>
```

### Status with sizes

The status indicator scales with the avatar size.

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

HTML

```
<span class="avatar avatar-xs">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  <span class="avatar-status status-online" role="img" aria-label="Online"></span>
</span>
<span class="avatar avatar-sm">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  <span class="avatar-status status-online" role="img" aria-label="Online"></span>
</span>
<span class="avatar">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  <span class="avatar-status status-online" role="img" aria-label="Online"></span>
</span>
<span class="avatar avatar-lg">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  <span class="avatar-status status-online" role="img" aria-label="Online"></span>
</span>
<span class="avatar avatar-xl">
  <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  <span class="avatar-status status-online" role="img" aria-label="Online"></span>
</span>
```

## Avatar stack

Use `.avatar-stack` to group multiple avatars together with overlapping effect. Avatars are rendered in reverse order so the first avatar appears on top. Stacks use a percentage of the avatar size to determine how much to overlap stacked avatars.

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

HTML

```
<div class="avatar-stack">
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
</div>
```

### Stack with sizes

As a shorthand, size classes are available for `.avatar-stack` and `.avatar`.

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

HTML

```
<div class="avatar-stack avatar-stack-xs">
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
</div>

<div class="avatar-stack avatar-stack-sm">
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
</div>

<div class="avatar-stack">
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
</div>

<div class="avatar-stack avatar-stack-lg">
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
</div>

<div class="avatar-stack avatar-stack-xl">
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
</div>
```

### Stack with count

Combine with initials to show a count of additional users.

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)
+5

HTML

```
<div class="avatar-stack">
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar theme-secondary">+5</span>
</div>
```

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)

![mdo](https://github.com/mdo.png)
+5

HTML

```
<div class="avatar-stack avatar-stack-xl">
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar">
    <img class="avatar-img" src="https://github.com/mdo.png" alt="mdo">
  </span>
  <span class="avatar theme-secondary">+5</span>
</div>
```

## CSS

### Variables

Avatar use local CSS variables on `.avatar` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/\_avatar.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_avatar.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$avatar-tokens: defaults(
  (
    --avatar-size: 2.5rem,
    --avatar-border-radius: 50%,
    --avatar-border-width: 2px,
    --avatar-border-color: var(--bg-body),
    --avatar-bg: var(--bg-2),
    --avatar-color: var(--fg-body),
    // --avatar-font-weight: var(--font-weight-medium), // Defaults to fallback
    --avatar-status-size: .75rem,
    --avatar-status-border-width: 2px,
    --avatar-status-border-color: var(--bg-body),
    --avatar-stack-spacing: -.3,
    --avatar-stack-transition: "transform .2s ease-in-out",
  ),
  $avatar-tokens
);
```

### Sass maps

Avatar sizes are defined in the `$avatar-sizes` Sass map. Each size specifies the avatar size and status size.

[scss/\_avatar.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_avatar.scss)

```
$avatar-sizes: ();
// stylelint-disable-next-line scss/dollar-variable-default
$avatar-sizes: defaults(
  (
    "xs": (
      size: 1.5rem,
      status-size: .625rem,
    ),
    "sm": (
      size: 2rem,
    ),
    "lg": (
      size: 3rem,
      status-size: 1rem,
      border-width: 3px,
    ),
    "xl": (
      size: 4rem,
      status-size: 1.25rem,
      border-width: 4px,
    ),
  ),
  $avatar-sizes
);
```
