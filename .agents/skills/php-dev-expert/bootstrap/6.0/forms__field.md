# Field · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/forms/field

---

# Field

A universal layout wrapper for form controls that handles label, description, and validation feedback placement with CSS grid.

Layer: `forms`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/forms/field)

On this page…

##### On this page

The Field component provides essential layout, spacing, and functionality for your form input or component of choice. They even scale to support laying out checkboxes, radios, and switches in a two-column layout.

Email address

We’ll never share your email with anyone else.

HTML

```
<div class="form-field">
  <label for="fieldText" class="form-label">Email address</label>
  <input type="email" class="form-control" id="fieldText" placeholder="name@example.com">
  <div class="form-text">
    We’ll never share your email with anyone else.
  </div>
</div>
```

## How it works

The `.form-field` wrapper uses CSS grid to manage the layout of a form control alongside its label, description, and validation feedback.

- **Default layout** is a single-column grid where everything stacks vertically. Use this for text inputs, selects, textareas, ranges, input groups, and adorned inputs.
- **Two-column layout** activates automatically via `:has()` when a `.check`, `.radio`, or `.switch` is a direct child. The control pins to column 1 while the label, description, and feedback stack in column 2.
- **Overhead label** — when a `.form-label` is present alongside a check, radio, or switch, it spans both columns and sits above the control row.
- **Grouped controls** — nest multiple `.form-field`s inside an outer `.form-field` to group radios, checkboxes, or switches under a shared label with shared description and validation feedback.

## Examples

### Select

Works the same way with `<select>` elements.

Country

Choose one…
United States
Canada
United Kingdom

HTML

```
<div class="form-field">
  <label for="fieldSelect" class="form-label">Country</label>
  <select class="form-control" id="fieldSelect">
    <option selected>Choose one…</option>
    <option value="1">United States</option>
    <option value="2">Canada</option>
    <option value="3">United Kingdom</option>
  </select>
</div>
```

### Textarea

Works the same way with `<textarea>` elements. Descriptions are optional.

Message

Be sure to include relevant details.

HTML

```
<div class="form-field">
  <label for="fieldTextarea" class="form-label">Message</label>
  <textarea class="form-control" id="fieldTextarea" rows="3"></textarea>
  <div class="form-text">
    Be sure to include relevant details.
  </div>
</div>
```

### Checkbox

When a `.check` is a direct child, the grid switches to a two-column layout with the checkbox in column 1 and the label in column 2.

Remember me

HTML

```
<div class="form-field">
  <input type="checkbox" id="fieldCheck" class="check" />
  <label for="fieldCheck">Remember me</label>
</div>
```

### Radio

Radios use the same two-column layout. Wrap each radio + label pair in its own `.form-field`.

Option one

Option two

HTML

```
<div class="form-field">
  <input type="radio" id="fieldRadio1" class="radio" name="fieldRadioGroup" />
  <label for="fieldRadio1">Option one</label>
</div>
<div class="form-field">
  <input type="radio" id="fieldRadio2" class="radio" name="fieldRadioGroup" />
  <label for="fieldRadio2">Option two</label>
</div>
```

### Grouped

Wrap multiple `.form-field`s in a `.form-group` to group related controls under a shared label. The group provides consistent spacing while each inner `.form-field` keeps its own layout.

Shipping method

Standard

Express

Choose your preferred shipping speed.

HTML

```
<div class="form-group">
  <label class="form-label">Shipping method</label>
  <div class="form-field">
    <input type="radio" id="fieldGroupRadio1" class="radio" name="fieldGroupRadio" required />
    <label for="fieldGroupRadio1">Standard</label>
  </div>
  <div class="form-field">
    <input type="radio" id="fieldGroupRadio2" class="radio" name="fieldGroupRadio" required />
    <label for="fieldGroupRadio2">Express</label>
  </div>
  <small class="form-text">Choose your preferred shipping speed.</small>
</div>
```

### Group cards

Add `.form-field-card` to each inner `.form-field` for a card-style treatment that highlights the selected option. Wrap the inner fields in a `.form-group` with tighter spacing for a more compact look.

Select a plan

Basic
$9/month — For individuals.

Pro
$29/month — For teams.

HTML

```
<div class="form-group">
  <label class="form-label">Select a plan</label>
  <div class="vstack gap-1">
    <div class="form-field form-field-card">
      <input type="radio" id="fieldRadioGroup1" class="radio" name="fieldRadioGrouped" checked />
      <div class="form-field-content">
        <label for="fieldRadioGroup1">Basic</label>
        <small class="form-text">$9/month — For individuals.</small>
      </div>
    </div>
    <div class="form-field form-field-card">
      <input type="radio" id="fieldRadioGroup2" class="radio" name="fieldRadioGrouped" />
      <div class="form-field-content">
        <label for="fieldRadioGroup2">Pro</label>
        <small class="form-text">$29/month — For teams.</small>
      </div>
    </div>
  </div>
</div>
```

### Switch

Switches also trigger the two-column grid.

Enable notifications

HTML

```
<div class="form-field">
  <div class="switch">
    <input type="checkbox" id="fieldSwitch" role="switch" switch>
  </div>
  <label for="fieldSwitch">Enable notifications</label>
</div>
```

### Combobox

Comboboxes—as well as datepickers, OTPs, and any other form component—are support as well.

Combobox

Select an item…

Option one
Option two
Option three

Choose an item from the menu above.

HTML

```
<div class="form-field">
  <label>Combobox</label>
  <button class="form-control combobox-toggle" type="button"
      data-bs-toggle="combobox"
      data-bs-name="option"
      data-bs-placeholder="Select an item…">
    <span class="combobox-value">Select an item…</span>
    <svg class="combobox-caret" width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.46967 5.46967C0.762563 5.17678 1.23744 5.17678 1.53033 5.46967L5 8.93934L8.46967 5.46967C8.76256 5.17678 9.23744 5.17678 9.53033 5.46967C9.82322 5.76256 9.82322 6.23744 9.53033 6.53033L5.53033 10.5303C5.23744 10.8232 4.76256 10.8232 4.46967 10.5303L0.46967 6.53033C0.176777 6.23744 0.176777 5.76256 0.46967 5.46967Z" fill="currentcolor"/></svg>
  </button>
  <div class="menu">
    <button class="menu-item" type="button" data-bs-value="1">Option one</button>
    <button class="menu-item" type="button" data-bs-value="2">Option two</button>
    <button class="menu-item" type="button" data-bs-value="3">Option three</button>
  </div>
  <div class="form-text">Choose an item from the menu above.</div>
</div>
```

## Overhead label

When a check, radio, or switch needs a field title above it, add a `.form-label`. It automatically spans both columns and sits on its own row above the control.

Terms and conditions

I agree to the terms
Please read before agreeing.

HTML

```
<div class="form-field">
  <label class="form-label">Terms and conditions</label>
  <input type="checkbox" id="fieldOverheadCheck" class="check" required />
  <div class="form-field-content">
    <label for="fieldOverheadCheck">I agree to the terms</label>
    <small class="form-text">Please read before agreeing.</small>
  </div>
</div>
```

## Descriptions

Add a `<small class="form-text">` after the label and wrap it in a `.form-field-content` to ensure appropriate spacing and alignment.

Subscribe to updates
We’ll send you a weekly digest of what’s new.

Standard shipping
Arrives in 5-7 business days.

Username

Must be 3-20 characters, letters and numbers only.

HTML

```
<div class="form-field">
  <input type="checkbox" id="fieldCheckDesc" class="check" />
  <div class="form-field-content">
    <label for="fieldCheckDesc">Subscribe to updates</label>
    <small class="form-text">We’ll send you a weekly digest of what’s new.</small>
  </div>
</div>
<div class="form-field">
  <input type="radio" id="fieldRadioDesc" class="radio" name="fieldRadioDesc" />
  <div class="form-field-content">
    <label for="fieldRadioDesc">Standard shipping</label>
    <small class="form-text">Arrives in 5-7 business days.</small>
  </div>
</div>
<div class="form-field">
  <label for="fieldTextDesc" class="form-label">Username</label>
  <input type="text" class="form-control" id="fieldTextDesc">
  <small class="form-text">Must be 3-20 characters, letters and numbers only.</small>
</div>
```

## Validation

Validation feedback (`.invalid-feedback`, `.valid-feedback`) stacks correctly inside `.form-field` for all control types.

### Client-side

Add `data-bs-validate` to your `<form>` to opt in to `:user-invalid` styling. These pseudo-classes activate after the user interacts with a control. To also show success styling on valid fields, use `data-bs-validate="valid"`. Add `novalidate` to suppress native browser validation tooltips while keeping the constraint validation API available.

Email address

Please enter a valid email address.

Looks good!

Agree to terms and conditions

You must agree before submitting.

Submit

HTML

```
<form class="vstack gap-3" data-bs-validate novalidate>
  <div class="form-field flex-1">
    <label for="fieldValidateEmail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="fieldValidateEmail" required>
    <div class="invalid-feedback">Please enter a valid email address.</div>
    <div class="valid-feedback">Looks good!</div>
  </div>
  <div class="form-field">
    <input type="checkbox" id="fieldValidateCheck" class="check" required>
    <div class="form-field-content">
      <label for="fieldValidateCheck">Agree to terms and conditions</label>
      <div class="invalid-feedback">You must agree before submitting.</div>
    </div>
  </div>
  <button class="btn-solid theme-primary align-self-start" type="submit">Submit</button>
</form>
```

### Server-side

Apply `.is-invalid` or `.is-valid` directly to the control for server-side validation. Feedback is visible immediately on page load.

Email address

Please enter a valid email address.

Full name

Looks good!

Agree to terms and conditions

You must agree before submitting.

Accept marketing emails

This field is required.

HTML

```
<div class="form-field mb-3">
  <label for="fieldServerEmail" class="form-label">Email address</label>
  <input type="email" class="form-control is-invalid" id="fieldServerEmail" value="not-an-email" required>
  <div class="invalid-feedback">Please enter a valid email address.</div>
</div>
<div class="form-field mb-3">
  <label for="fieldServerName" class="form-label">Full name</label>
  <input type="text" class="form-control is-valid" id="fieldServerName" value="Mark Otto" required>
  <div class="valid-feedback">Looks good!</div>
</div>
<div class="form-field mb-3">
  <input type="checkbox" id="fieldServerCheck" class="check is-invalid" required>
  <label for="fieldServerCheck">Agree to terms and conditions</label>
  <div class="invalid-feedback">You must agree before submitting.</div>
</div>
<div class="form-field mb-3">
  <div class="switch">
    <input type="checkbox" id="fieldServerSwitch" role="switch" switch class="is-invalid">
  </div>
  <label for="fieldServerSwitch">Accept marketing emails</label>
  <div class="invalid-feedback">This field is required.</div>
</div>
```

## CSS

### Sass

[scss/forms/\_form-field.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/forms/_form-field.scss)

```
@layer forms {
  .form-field {
    position: relative;
    display: grid;
    gap: .5rem;
    // width: 100%;

    > label,
    > .form-label {
      justify-self: start;
      margin-bottom: 0;
    }

    &:has(> .check, > .radio, > .switch) {
      grid-template-columns: auto 1fr;
      column-gap: .5rem;
      align-items: start;

      > .check,
      > .radio,
      > .switch {
        grid-column: 1;
      }

      > :not(.check, .radio, .switch) {
        grid-column: 2;
      }

      > .form-label {
        grid-column: 1 / -1;
      }
    }
  }

  .form-field-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .form-field-card {
    position: relative;
    padding: calc(var(--spacer) * .75);
    cursor: pointer;
    border: var(--border-width) solid transparent;
    @include border-radius(var(--radius-7));

    &:hover {
      background-color: var(--bg-1);
    }

    &:has(:checked) {
      background-color: var(--bg-1);
      border-color: var(--border-color);
    }

    label::before {
      position: absolute;
      inset: 0;
      content: "";
    }
  }

  .form-group {
    display: grid;
    gap: .5rem;

    > label,
    > .form-label,
    > legend {
      justify-self: start;
      margin-bottom: 0;
    }
  }
}
```
