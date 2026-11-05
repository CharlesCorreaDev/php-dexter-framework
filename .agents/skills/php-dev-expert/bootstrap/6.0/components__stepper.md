# Stepper · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/stepper

---

# Stepper

Create timelines, wizards, or step-by-step progress bars. Ideal for shopping carts, sign-up forms, and more.

Layer: `components`

Container queries

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/stepper)

On this page…

##### On this page

## Examples

Stepper is built with CSS Grid and `<ol>` elements. By default, steps are displayed vertically. You can transform them into horizontal lists with responsive modifier classes.

### Basic

Here’s a simple example of a vertical stepper.

1. Create account
2. Confirm email
3. Update profile
4. Finish

HTML

```
<ol class="stepper">
  <li class="stepper-item active">Create account</li>
  <li class="stepper-item active">Confirm email</li>
  <li class="stepper-item">Update profile</li>
  <li class="stepper-item">Finish</li>
</ol>
```

### Responsive

Steppers can be made horizontal at specific breakpoints using the `contains-inline` utility on a parent element and by adding the responsive `.stepper-horizontal-{breakpoint}` modifier classes on the stepper. The extra parent element is required when using container queries.

1. Create account
2. Confirm email
3. Update profile
4. Finish

HTML

```
<div class="contains-inline">
  <ol class="stepper sm:stepper-horizontal">
    <li class="stepper-item active">Create account</li>
    <li class="stepper-item active">Confirm email</li>
    <li class="stepper-item">Update profile</li>
    <li class="stepper-item">Finish</li>
  </ol>
</div>
```

### Gap

Customize the gap with styles that override the `--bs-stepper-gap` CSS variable.

1. Create account
2. Confirm email
3. Update profile
4. Finish

HTML

```
<ol class="stepper" style="--bs-stepper-gap: 3rem">
  <li class="stepper-item active">Create account</li>
  <li class="stepper-item active">Confirm email</li>
  <li class="stepper-item">Update profile</li>
  <li class="stepper-item">Finish</li>
</ol>
```

## Variants

1. Create account
2. Confirm email
3. Update profile
4. Finish

HTML

```
<ol class="stepper stepper-horizontal">
  <li class="stepper-item active theme-accent">Create account</li>
  <li class="stepper-item">Confirm email</li>
  <li class="stepper-item active theme-success">Update profile</li>
  <li class="stepper-item active theme-danger">Finish</li>
</ol>
```

## Overflow

Wrap your horizontal stepper in a `.stepper-overflow` container to enable horizontal scrolling when the stepper overflows its parent. Uses `container-type: inline-size` for container query support as opposed to a viewport-based media query.

1. Create account
2. Verify email address
3. Complete profile setup
4. Add payment method
5. Review and confirm
6. Finish onboarding

HTML

```
<div class="stepper-overflow">
  <ol class="stepper stepper-horizontal">
    <li class="stepper-item active">Create account</li>
    <li class="stepper-item active">Verify email address</li>
    <li class="stepper-item">Complete profile setup</li>
    <li class="stepper-item">Add payment method</li>
    <li class="stepper-item">Review and confirm</li>
    <li class="stepper-item">Finish onboarding</li>
  </ol>
</div>
```

## Complex

Add additional content beyond labels to provide more context within each step, such as descriptions, helper messages, status indicators, or other decorative elements.

1. Create

   Create an account.
2. Confirm

   Confirm your email.
3. Set-up

   Configure your profile.
4. Finish

   Welcome aboard!

HTML

```
<ol class="stepper stepper-vertical">
  <li class="stepper-item align-items-start active">
    <div class="pt-1">
      <div class="fw-semibold">Create</div>
      <small class="fg-3">Create an account.</small>
    </div>
  </li>
  <li class="stepper-item align-items-start active">
    <div class="pt-1">
      <div class="fw-semibold">Confirm</div>
      <small class="fg-3">Confirm your email.</small>
    </div>
  </li>
  <li class="stepper-item align-items-start">
    <div class="pt-1">
      <div class="fw-semibold">Set-up</div>
      <small class="fg-3">Configure your profile.</small>
    </div>
  </li>
  <li class="stepper-item align-items-start">
    <div class="pt-1">
      <div class="fw-semibold">Finish</div>
      <small class="fg-3">Welcome aboard!</small>
    </div>
  </li>
</ol>
```

Mix with other components, like badges, and our theme helpers to create a more unique steppers.

1. Create account

   Complete
2. Confirm email

   Complete
3. Update profile

   In-progress
4. Finish

   Pending

HTML

```
<ol class="stepper stepper-horizontal w-100">
  <li class="stepper-item theme-success active">
    <div>
      <div>Create account</div>
      <div class="badge badge-subtle">Complete</div>
    </div>
  </li>
  <li class="stepper-item theme-success active">
    <div>
      <div>Confirm email</div>
      <div class="badge badge-subtle">Complete</div>
    </div>
  </li>
  <li class="stepper-item theme-primary active">
    <div>
      <div>Update profile</div>
      <div class="badge badge-subtle">In-progress</div>
    </div>
  </li>
  <li class="stepper-item theme-secondary">
    <div>
      <div>Finish</div>
      <div class="badge badge-subtle">Pending</div>
    </div>
  </li>
</ol>
```

## Alignment

Use [text alignment utilities](utilities__text-alignment.md) (because we use `display: inline-grid`) to align the steps. The inline grid arrangement allows us to keep the steps equal width and ensures the connecting lines are rendered correctly.

1. Default stepper
2. Confirm email
3. Update profile
4. Finish

HTML

```
<ol class="stepper stepper-horizontal">
  <li class="stepper-item active">Default stepper</li>
  <li class="stepper-item active">Confirm email</li>
  <li class="stepper-item">Update profile</li>
  <li class="stepper-item">Finish</li>
</ol>
```

1. Center stepper
2. Confirm email
3. Update profile
4. Finish

HTML

```
<ol class="stepper stepper-horizontal">
  <li class="stepper-item active">Center stepper</li>
  <li class="stepper-item active">Confirm email</li>
  <li class="stepper-item">Update profile</li>
  <li class="stepper-item">Finish</li>
</ol>
```

1. End stepper
2. Confirm email
3. Update profile
4. Finish

HTML

```
<ol class="stepper stepper-horizontal">
  <li class="stepper-item active">End stepper</li>
  <li class="stepper-item active">Confirm email</li>
  <li class="stepper-item">Update profile</li>
  <li class="stepper-item">Finish</li>
</ol>
```

Apply `.w-100` to the stepper to make it full width. Stepper items will be stretched to fill the available space. Alignment doesn’t affect full-width steppers.

1. Create account
2. Confirm email
3. Update profile
4. Finish

HTML

```
<ol class="stepper stepper-horizontal w-100">
  <li class="stepper-item active">Create account</li>
  <li class="stepper-item active">Confirm email</li>
  <li class="stepper-item">Update profile</li>
  <li class="stepper-item">Finish</li>
</ol>
```

## With anchors

Use anchor elements to build your stepper if it links across multiple pages. Add `role="button"` or use `<button>` elements if you’re linking across sections in the same document.

Consider using our [link utilities](utilities__link.md) for quick color control.

[Create account](#)
[Confirm email](#)
[Update profile](#)
[Finish](#)

HTML

```
<div class="stepper">
  <a href="#" role="button" class="stepper-item active">Create account</a>
  <a href="#" role="button" class="stepper-item active">Confirm email</a>
  <a href="#" role="button" class="stepper-item theme-secondary">Update profile</a>
  <a href="#" role="button" class="stepper-item theme-secondary">Finish</a>
</div>
```

## CSS

### Variables

Steppers use local CSS variables on `.stepper` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/\_stepper.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_stepper.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$stepper-tokens: defaults(
  (
    --stepper-size: 2rem,
    --stepper-gap: 1rem,
    --stepper-font-size: var(--font-size-sm),
    --stepper-text-gap: .5rem,
    --stepper-track-size: .125rem,
    --stepper-bg: var(--bg-2),
    --stepper-active-color: var(--primary-contrast),
    --stepper-active-bg: var(--primary-bg),
  ),
  $stepper-tokens
);
```

### Sass mixin

[scss/\_stepper.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_stepper.scss)

```
@mixin stepper-horizontal() {
  display: inline-grid;
  grid-auto-columns: 1fr;
  grid-auto-flow: column;

  .stepper-item {
    grid-template-rows: var(--stepper-size) auto;
    grid-template-columns: auto;
    align-items: start;
    justify-items: center;
    text-align: center;

    &::after {
      inset-block-start: calc((var(--stepper-size) * .5) - (var(--stepper-track-size) * .5));
      inset-block-end: auto;
      inset-inline-start: 50%;
      inset-inline-end: 100%;
      width: calc(100% + var(--stepper-gap));
      height: var(--stepper-track-size);
    }

    &:last-child::after {
      right: 100%;
    }
  }
}
```

### Overflow wrapper

[scss/\_stepper.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_stepper.scss)

```
.stepper-overflow {
  container-type: inline-size;
  overflow-x: auto;
  overscroll-behavior-x: contain;
  -webkit-overflow-scrolling: touch;

  > .stepper {
    width: max-content;
    min-width: 100%;
  }
}
```
