# Borders · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/utilities/borders

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/utilities/borders.mdx "View and edit this file on GitHub")

# Borders

Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons, or any other element.

On this page
   
**On this page**

---

## Border

Use border utilities to add or remove an element’s borders. Choose from all borders or one at a time.

### Additive

Add borders to custom elements:

html

```
<span class="border"></span>
<span class="border-top"></span>
<span class="border-end"></span>
<span class="border-bottom"></span>
<span class="border-start"></span>
```

### Subtractive

Or remove borders:

html

```
<span class="border border-0"></span>
<span class="border border-top-0"></span>
<span class="border border-end-0"></span>
<span class="border border-bottom-0"></span>
<span class="border border-start-0"></span>
```

## Color

Border utilities like `.border-*` that generated from our original `$theme-colors` Sass map don’t yet respond to color modes, however, any `.border-*-subtle` utility will. This will be resolved in v6.

Change the border color using utilities built on our theme colors.

html

```
<span class="border border-primary"></span>
<span class="border border-primary-subtle"></span>
<span class="border border-secondary"></span>
<span class="border border-secondary-subtle"></span>
<span class="border border-success"></span>
<span class="border border-success-subtle"></span>
<span class="border border-danger"></span>
<span class="border border-danger-subtle"></span>
<span class="border border-warning"></span>
<span class="border border-warning-subtle"></span>
<span class="border border-info"></span>
<span class="border border-info-subtle"></span>
<span class="border border-light"></span>
<span class="border border-light-subtle"></span>
<span class="border border-dark"></span>
<span class="border border-dark-subtle"></span>
<span class="border border-black"></span>
<span class="border border-white"></span>
```

Or modify the default `border-color` of a component:

Email address

Dangerous heading

Changing border color and width

html

```
<div class="mb-4">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control border-success" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
  Dangerous heading
</div>

<div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
  Changing border color and width
</div>
```

## Opacity

Added in v5.2.0

Bootstrap `border-{color}` utilities are generated with Sass using CSS variables. This allows for real-time color changes without compilation and dynamic alpha transparency changes.

### How it works

Consider our default `.border-success` utility.

```
.border-success {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;
}
```

We use an RGB version of our `--bs-success` (with the value of `25, 135, 84`) CSS variable and attached a second CSS variable, `--bs-border-opacity`, for the alpha transparency (with a default value `1` thanks to a local CSS variable). That means anytime you use `.border-success` now, your computed `color` value is `rgba(25, 135, 84, 1)`. The local CSS variable inside each `.border-*` class avoids inheritance issues so nested instances of the utilities don’t automatically have a modified alpha transparency.

### Example

To change that opacity, override `--bs-border-opacity` via custom styles or inline styles.

This is default success border

This is 50% opacity success border

html

```
<div class="border border-success p-2 mb-2">This is default success border</div>
<div class="border border-success p-2" style="--bs-border-opacity: .5;">This is 50% opacity success border</div>
```

Or, choose from any of the `.border-opacity` utilities:

This is default success border

This is 75% opacity success border

This is 50% opacity success border

This is 25% opacity success border

This is 10% opacity success border

html

```
<div class="border border-success p-2 mb-2">This is default success border</div>
<div class="border border-success p-2 mb-2 border-opacity-75">This is 75% opacity success border</div>
<div class="border border-success p-2 mb-2 border-opacity-50">This is 50% opacity success border</div>
<div class="border border-success p-2 mb-2 border-opacity-25">This is 25% opacity success border</div>
<div class="border border-success p-2 border-opacity-10">This is 10% opacity success border</div>
```

## Width

html

```
<span class="border border-1"></span>
<span class="border border-2"></span>
<span class="border border-3"></span>
<span class="border border-4"></span>
<span class="border border-5"></span>
```

## Radius

Add classes to an element to easily round its corners.

Example rounded image75x75
Example top rounded image75x75
Example right rounded image75x75
Example bottom rounded image75x75
Example left rounded image75x75

html

```
<img src="..." class="rounded" alt="...">
<img src="..." class="rounded-top" alt="...">
<img src="..." class="rounded-end" alt="...">
<img src="..." class="rounded-bottom" alt="...">
<img src="..." class="rounded-start" alt="...">
```

### Sizes

Use the scaling classes for larger or smaller rounded corners. Sizes range from `0` to `5` including `circle` and `pill`, and can be configured by modifying the utilities API.

Example non-rounded image75x75
Example small rounded image75x75
Example default rounded image75x75
Example large rounded image75x75
Example larger rounded image75x75
Example extra large rounded image75x75
Completely round image75x75
Rounded pill image150x75

html

```
<img src="..." class="rounded-0" alt="...">
<img src="..." class="rounded-1" alt="...">
<img src="..." class="rounded-2" alt="...">
<img src="..." class="rounded-3" alt="...">
<img src="..." class="rounded-4" alt="...">
<img src="..." class="rounded-5" alt="...">
<img src="..." class="rounded-circle" alt="...">
<img src="..." class="rounded-pill" alt="...">
```

Example small rounded image75x75
Example default left rounded image75x75
Example right completely round image75x75
Example left rounded pill image75x75
Example extra large bottom rounded image75x75

html

```
<img src="..." class="rounded-bottom-1" alt="...">
<img src="..." class="rounded-start-2" alt="...">
<img src="..." class="rounded-end-circle" alt="...">
<img src="..." class="rounded-start-pill" alt="...">
<img src="..." class="rounded-5 rounded-top-0" alt="...">
```

## CSS

### Variables

Added in v5.2.0

[scss/\_root.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_root.scss)

```
--#{$prefix}border-width: #{$border-width};
--#{$prefix}border-style: #{$border-style};
--#{$prefix}border-color: #{$border-color};
--#{$prefix}border-color-translucent: #{$border-color-translucent};

--#{$prefix}border-radius: #{$border-radius};
--#{$prefix}border-radius-sm: #{$border-radius-sm};
--#{$prefix}border-radius-lg: #{$border-radius-lg};
--#{$prefix}border-radius-xl: #{$border-radius-xl};
--#{$prefix}border-radius-xxl: #{$border-radius-xxl};
--#{$prefix}border-radius-2xl: var(--#{$prefix}border-radius-xxl); // Deprecated in v5.3.0 for consistency
--#{$prefix}border-radius-pill: #{$border-radius-pill};
```

### Sass variables

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$border-width:                1px;
$border-widths: (
  1: 1px,
  2: 2px,
  3: 3px,
  4: 4px,
  5: 5px
);
$border-style:                solid;
$border-color:                $gray-300;
$border-color-translucent:    rgba($black, .175);
```

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$border-radius:               .375rem;
$border-radius-sm:            .25rem;
$border-radius-lg:            .5rem;
$border-radius-xl:            1rem;
$border-radius-xxl:           2rem;
$border-radius-pill:          50rem;
```

Variables for setting `border-color` in `.border-*-subtle` utilities in light and dark mode:

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$primary-border-subtle:   tint-color($primary, 60%);
$secondary-border-subtle: tint-color($secondary, 60%);
$success-border-subtle:   tint-color($success, 60%);
$info-border-subtle:      tint-color($info, 60%);
$warning-border-subtle:   tint-color($warning, 60%);
$danger-border-subtle:    tint-color($danger, 60%);
$light-border-subtle:     $gray-200;
$dark-border-subtle:      $gray-500;
```

[scss/\_variables-dark.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables-dark.scss)

```
$primary-border-subtle-dark:        shade-color($primary, 40%);
$secondary-border-subtle-dark:      shade-color($secondary, 40%);
$success-border-subtle-dark:        shade-color($success, 40%);
$info-border-subtle-dark:           shade-color($info, 40%);
$warning-border-subtle-dark:        shade-color($warning, 40%);
$danger-border-subtle-dark:         shade-color($danger, 40%);
$light-border-subtle-dark:          $gray-700;
$dark-border-subtle-dark:           $gray-800;
```

### Sass maps

Color mode adaptive border colors are also available as a Sass map:

[scss/\_maps.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_maps.scss)

```
$theme-colors-border-subtle: (
  "primary": $primary-border-subtle,
  "secondary": $secondary-border-subtle,
  "success": $success-border-subtle,
  "info": $info-border-subtle,
  "warning": $warning-border-subtle,
  "danger": $danger-border-subtle,
  "light": $light-border-subtle,
  "dark": $dark-border-subtle,
);
```

[scss/\_maps.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_maps.scss)

```
$theme-colors-border-subtle-dark: (
  "primary": $primary-border-subtle-dark,
  "secondary": $secondary-border-subtle-dark,
  "success": $success-border-subtle-dark,
  "info": $info-border-subtle-dark,
  "warning": $warning-border-subtle-dark,
  "danger": $danger-border-subtle-dark,
  "light": $light-border-subtle-dark,
  "dark": $dark-border-subtle-dark,
);
```

### Sass mixins

[scss/mixins/\_border-radius.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/mixins/_border-radius.scss)

```
@mixin border-radius($radius: $border-radius, $fallback-border-radius: false) {
  @if $enable-rounded {
    border-radius: valid-radius($radius);
  }
  @else if $fallback-border-radius != false {
    border-radius: $fallback-border-radius;
  }
}

@mixin border-top-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-top-left-radius: valid-radius($radius);
    border-top-right-radius: valid-radius($radius);
  }
}

@mixin border-end-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-top-right-radius: valid-radius($radius);
    border-bottom-right-radius: valid-radius($radius);
  }
}

@mixin border-bottom-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-bottom-right-radius: valid-radius($radius);
    border-bottom-left-radius: valid-radius($radius);
  }
}

@mixin border-start-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-top-left-radius: valid-radius($radius);
    border-bottom-left-radius: valid-radius($radius);
  }
}

@mixin border-top-start-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-top-left-radius: valid-radius($radius);
  }
}

@mixin border-top-end-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-top-right-radius: valid-radius($radius);
  }
}

@mixin border-bottom-end-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-bottom-right-radius: valid-radius($radius);
  }
}

@mixin border-bottom-start-radius($radius: $border-radius) {
  @if $enable-rounded {
    border-bottom-left-radius: valid-radius($radius);
  }
}
```

### Sass utilities API

Border utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_utilities.scss)

```
"border": (
  property: border,
  values: (
    null: var(--#{$prefix}border-width) var(--#{$prefix}border-style) var(--#{$prefix}border-color),
    0: 0,
  )
),
"border-top": (
  property: border-top,
  values: (
    null: var(--#{$prefix}border-width) var(--#{$prefix}border-style) var(--#{$prefix}border-color),
    0: 0,
  )
),
"border-end": (
  property: border-right,
  class: border-end,
  values: (
    null: var(--#{$prefix}border-width) var(--#{$prefix}border-style) var(--#{$prefix}border-color),
    0: 0,
  )
),
"border-bottom": (
  property: border-bottom,
  values: (
    null: var(--#{$prefix}border-width) var(--#{$prefix}border-style) var(--#{$prefix}border-color),
    0: 0,
  )
),
"border-start": (
  property: border-left,
  class: border-start,
  values: (
    null: var(--#{$prefix}border-width) var(--#{$prefix}border-style) var(--#{$prefix}border-color),
    0: 0,
  )
),
"border-color": (
  property: border-color,
  class: border,
  local-vars: (
    "border-opacity": 1
  ),
  values: $utilities-border-colors
),
"subtle-border-color": (
  property: border-color,
  class: border,
  values: $utilities-border-subtle
),
"border-width": (
  property: border-width,
  class: border,
  values: $border-widths
),
"border-opacity": (
  css-var: true,
  class: border-opacity,
  values: (
    10: .1,
    25: .25,
    50: .5,
    75: .75,
    100: 1
  )
),
```

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_utilities.scss)

```
"rounded": (
  property: border-radius,
  class: rounded,
  values: (
    null: var(--#{$prefix}border-radius),
    0: 0,
    1: var(--#{$prefix}border-radius-sm),
    2: var(--#{$prefix}border-radius),
    3: var(--#{$prefix}border-radius-lg),
    4: var(--#{$prefix}border-radius-xl),
    5: var(--#{$prefix}border-radius-xxl),
    circle: 50%,
    pill: var(--#{$prefix}border-radius-pill)
  )
),
"rounded-top": (
  property: border-top-left-radius border-top-right-radius,
  class: rounded-top,
  values: (
    null: var(--#{$prefix}border-radius),
    0: 0,
    1: var(--#{$prefix}border-radius-sm),
    2: var(--#{$prefix}border-radius),
    3: var(--#{$prefix}border-radius-lg),
    4: var(--#{$prefix}border-radius-xl),
    5: var(--#{$prefix}border-radius-xxl),
    circle: 50%,
    pill: var(--#{$prefix}border-radius-pill)
  )
),
"rounded-end": (
  property: border-top-right-radius border-bottom-right-radius,
  class: rounded-end,
  values: (
    null: var(--#{$prefix}border-radius),
    0: 0,
    1: var(--#{$prefix}border-radius-sm),
    2: var(--#{$prefix}border-radius),
    3: var(--#{$prefix}border-radius-lg),
    4: var(--#{$prefix}border-radius-xl),
    5: var(--#{$prefix}border-radius-xxl),
    circle: 50%,
    pill: var(--#{$prefix}border-radius-pill)
  )
),
"rounded-bottom": (
  property: border-bottom-right-radius border-bottom-left-radius,
  class: rounded-bottom,
  values: (
    null: var(--#{$prefix}border-radius),
    0: 0,
    1: var(--#{$prefix}border-radius-sm),
    2: var(--#{$prefix}border-radius),
    3: var(--#{$prefix}border-radius-lg),
    4: var(--#{$prefix}border-radius-xl),
    5: var(--#{$prefix}border-radius-xxl),
    circle: 50%,
    pill: var(--#{$prefix}border-radius-pill)
  )
),
"rounded-start": (
  property: border-bottom-left-radius border-top-left-radius,
  class: rounded-start,
  values: (
    null: var(--#{$prefix}border-radius),
    0: 0,
    1: var(--#{$prefix}border-radius-sm),
    2: var(--#{$prefix}border-radius),
    3: var(--#{$prefix}border-radius-lg),
    4: var(--#{$prefix}border-radius-xl),
    5: var(--#{$prefix}border-radius-xxl),
    circle: 50%,
    pill: var(--#{$prefix}border-radius-pill)
  )
),
```
