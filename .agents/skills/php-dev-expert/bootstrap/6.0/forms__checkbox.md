# Checkbox · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/forms/checkbox

---

# Checkbox

Highly customizable, native checkbox `<input>` elements for presenting toggleable options.

Layer: `forms`

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/input/checkbox)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/forms/checkbox)

On this page…

##### On this page

## Basic checkbox

All checkbox styling is applied with the `.check` class directly on the `<input>`. This does the following:

- Overrides the default `<input>` appearance with themed colors.
- Renders the `:checked` and indeterminate icons via a CSS `mask` on the input’s `::before` pseudo-element, so the mark inherits the contrast color and no inline SVG is needed. The appropriate icon is shown based on the input’s state.

For folks looking to replace our provided icons, override the `--bs-check-icon-checked` and `--bs-check-icon-indeterminate` CSS variables (or the `--check-icon-*` Sass tokens) with your own `mask-image` URLs.

Labels and layout are handled with additional HTML and CSS.

HTML

```
<input type="checkbox" id="check" class="check" checked />
```

## Indeterminate

Checkboxes can utilize the indeterminate pseudo class when manually set via JavaScript. There is no available HTML attribute for specifying it.

HTML

```
<input type="checkbox" id="checkIndeterminate" class="check" />
```

## With form field

Wrap the `.check` in a `.form-field` layout wrapper and add your label. The grid layout places the checkbox and label side by side.

Example new checkbox

HTML

```
<div class="form-field">
  <input type="checkbox" id="checkLabel" class="check" />
  <label for="checkLabel">Example new checkbox</label>
</div>
```

## Description

Add a description or other content after the label. We recommend wrapping the label and description in a `.form-field-content` to ensure appropriate spacing and alignment.

Example new checkbox
Supporting description for the above label.

HTML

```
<div class="form-field">
  <input type="checkbox" id="checkDescription" class="check" />
  <div class="form-field-content">
    <label for="checkDescription">Example new checkbox</label>
    <small class="form-text">Supporting description for the above label.</small>
  </div>
</div>
```

## Theme colors

Modify the appearance of checked checkboxes by adding the `.theme-{color}` class to the `.check` element. This will set the checked background and border color to the theme color.

Example primary checkbox

Example accent checkbox

Example success checkbox

Example danger checkbox

Example warning checkbox

Example info checkbox

Example inverse checkbox

Example secondary checkbox

HTML

```
<div class="form-field">
  <input type="checkbox" id="checkprimary" class="check theme-primary" checked />
  <label for="checkprimary">Example primary checkbox</label>
</div>
<div class="form-field">
  <input type="checkbox" id="checkaccent" class="check theme-accent" checked />
  <label for="checkaccent">Example accent checkbox</label>
</div>
<div class="form-field">
  <input type="checkbox" id="checksuccess" class="check theme-success" checked />
  <label for="checksuccess">Example success checkbox</label>
</div>
<div class="form-field">
  <input type="checkbox" id="checkdanger" class="check theme-danger" checked />
  <label for="checkdanger">Example danger checkbox</label>
</div>
<div class="form-field">
  <input type="checkbox" id="checkwarning" class="check theme-warning" checked />
  <label for="checkwarning">Example warning checkbox</label>
</div>
<div class="form-field">
  <input type="checkbox" id="checkinfo" class="check theme-info" checked />
  <label for="checkinfo">Example info checkbox</label>
</div>
<div class="form-field">
  <input type="checkbox" id="checkinverse" class="check theme-inverse" checked />
  <label for="checkinverse">Example inverse checkbox</label>
</div>
<div class="form-field">
  <input type="checkbox" id="checksecondary" class="check theme-secondary" checked />
  <label for="checksecondary">Example secondary checkbox</label>
</div>
```

## Disabled

Add the `disabled` attribute and the associated `<label>`s are automatically styled to match with a lighter color to help indicate the input’s state.

Example new checkbox

Example new checkbox

HTML

```
<div class="form-field">
  <input type="checkbox" id="checkDisabled" class="check" disabled />
  <label for="checkDisabled">Example new checkbox</label>
</div>

<div class="form-field">
  <input type="checkbox" id="checkDisabledChecked" class="check" checked disabled />
  <label for="checkDisabledChecked">Example new checkbox</label>
</div>
```

## Sizes

Add `.check-sm` or `.check-lg` to make your checkbox appear smaller or larger.

Small checkbox

Default checkbox

Large checkbox

HTML

```
<div class="form-field">
  <input type="checkbox" id="checkSizeSm" class="check check-sm" checked />
  <label for="checkSizeSm">Small checkbox</label>
</div>
<div class="form-field">
  <input type="checkbox" id="checkSizeMd" class="check" checked />
  <label for="checkSizeMd">Default checkbox</label>
</div>
<div class="form-field">
  <input type="checkbox" id="checkSizeLg" class="check check-lg" checked />
  <label for="checkSizeLg">Large checkbox</label>
</div>
```

## CSS

### Variables

CSS variables for the checkbox component are built on the Sass variables.

[scss/forms/\_check.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/forms/_check.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$check-tokens: defaults(
  (
    --check-size: 1.25rem,
    --check-margin-block: .125rem,
    --check-bg: var(--bg-body),
    --check-border-color: var(--border-color),
    --check-border-radius: var(--radius-5),
    --check-icon-checked: #{escape-svg(url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path fill='none' stroke='black' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m5.5 10 3 3 6-6'/></svg>"))},
    --check-icon-indeterminate: #{escape-svg(url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path fill='none' stroke='black' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 10h8'/></svg>"))},
    --check-checked-bg: var(--control-checked-bg),
    --check-checked-border-color: var(--control-checked-border-color),
    --check-indeterminate-bg: var(--control-checked-bg),
    --check-indeterminate-border-color: var(--control-checked-border-color),
    --check-active-bg: var(--control-active-bg),
    --check-active-border-color: var(--control-active-border-color),
    --check-disabled-bg: var(--control-disabled-bg),
    --check-disabled-opacity: var(--control-disabled-opacity),
  ),
  $check-tokens
);
```
