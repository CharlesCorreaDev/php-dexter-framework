# Chips · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/forms/chips

---

# Chips

Small interactive elements representing entities like people, places, tags, or values. Combine with inputs for multi-value fields like skills, categories, or email recipients using themed chips.

Requires JS

Layer: `forms`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/forms/chips)

On this page…

##### On this page

## Overview

Chips are small interactive elements representing entities. They can be used to group and select values in forms or other interactive contexts. They're similar to the older [Badges](components__badge.md) component, but have some meaningful differences.

- Chips are interactive elements, not static like Badges.
- Chips have one size—they don't scale with the parent `font-size` like Badges.
- Chips can have icons, avatars, and dismiss buttons.
- Chips can be themed, individually or as a group on the parent container. By default, chips use the `subtle` and `text` theme tokens, while active state uses the `bg` and `contrast` tokens.
- Chips can be active or disabled.
- Chips automatically gain focus when clicked into their active state.
- Chips support keyboard navigation and selection in their custom `.chip-input` container.

See examples of all of this in action below.

## Chips

Use `.chip` for standalone chips. Add `.chip-icon` for a leading icon, `.chip-img` for an image like an avatar, and `.chip-dismiss` for a remove button. Note that we use an inline SVG for the dismiss button icon—you can modify this as needed. JavaScript users can use the `dismissIcon` option for passing a custom SVG.

Basic chip

![](https://github.com/mdo.png)
With avatar

With icon

Dismissible

HTML

```
<span class="chip">Basic chip</span>

<span class="chip">
  <img src="https://github.com/mdo.png" class="chip-img" width="16" height="16" alt="">
  With avatar
</span>

<span class="chip">
  <span class="chip-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
    </svg>
  </span>
  With icon
</span>

<span class="chip">
  Dismissible
  <button type="button" class="chip-dismiss" aria-label="Remove">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="4" y1="4" x2="12" y2="12"/><line x1="12" y1="4" x2="4" y2="12"/></svg>
  </button>
</span>
```

### Themed chips

Apply `.theme-*` classes to color your chips. Chips are subtle by default as this allows for a clear, themed active state.

Default
Primary
Accent
Success
Danger
Warning
Info
Inverse
Secondary

HTML

```
<span class="chip">Default</span>
<span class="chip theme-primary">Primary</span>
<span class="chip theme-accent">Accent</span>
<span class="chip theme-success">Success</span>
<span class="chip theme-danger">Danger</span>
<span class="chip theme-warning">Warning</span>
<span class="chip theme-info">Info</span>
<span class="chip theme-inverse">Inverse</span>
<span class="chip theme-secondary">Secondary</span>
```

### Active state

Add `.active` to make chips use the solid appearance (bg/contrast). This is useful for toggle-style chip selections.

Default
Active
Default
Active

HTML

```
<span class="chip theme-primary">Default</span>
<span class="chip theme-primary active">Active</span>
<span class="chip theme-success">Default</span>
<span class="chip theme-success active">Active</span>
```

## Chip input

Wrap chips and a ghost input in `.chip-input` to create a tag input field. Add `data-bs-chips` to enable JavaScript behavior. Chips are grayscale by default, with primary blue for active states, but you can apply any theme color to the container so that chips within inherit the color of your choosing.

Type into the input below and press `Enter` or `,` to add new chips. Use the `Backspace` or `Delete` keys to remove chips. See the [Keyboard behavior](#keyboard-behavior) section for more details.

Skills:

JavaScript

TypeScript

HTML

```
<div class="chip-input" data-bs-chips>
  <label class="chip-input-label" for="skillsInput">Skills:</label>
  <span class="chip">
    JavaScript
  </span>
  <span class="chip">
    TypeScript
  </span>
  <input type="text" class="form-ghost" id="skillsInput" placeholder="Add more…" />
</div>
```

### Theme variants

Add a `.theme-*` class to the `.chip-input` container to apply a theme color to all chips within.

Approved
Verified

Bug
Critical

HTML

```
<div class="chip-input theme-primary" data-bs-chips>
  <span class="chip">Approved</span>
  <span class="chip">Verified</span>
  <input type="text" class="form-ghost" placeholder="Add status...">
</div>

<div class="chip-input theme-danger" data-bs-chips>
  <span class="chip">Bug</span>
  <span class="chip">Critical</span>
  <input type="text" class="form-ghost" placeholder="Add issue">
</div>
```

You can also individually apply a theme color to a chip by adding a `.theme-*` class to the chip element.

Bug
Critical

HTML

```
<div class="chip-input theme-primary" data-bs-chips>
  <span class="chip theme-warning">Bug</span>
  <span class="chip theme-danger">Critical</span>
  <input type="text" class="form-ghost" placeholder="Add issue">
</div>
```

### Empty state

Start with just the ghost input—chips are created as users type.

HTML

```
<div class="chip-input theme-primary" data-bs-chips>
  <input type="text" class="form-ghost" placeholder="Type and press Enter">
</div>
```

### With label

Use a form label for better accessibility.

Skills

React

Press Enter or comma to add a skill.

HTML

```
<div class="form-field">
  <label class="form-label" for="skillsInputLabel">Skills</label>
  <div class="chip-input theme-primary" data-bs-chips>
    <span class="chip">
      React
      <button type="button" class="chip-dismiss" aria-label="Remove">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="4" y1="4" x2="12" y2="12"/><line x1="12" y1="4" x2="4" y2="12"/></svg>
      </button>
    </span>
    <input type="text" class="form-ghost" id="skillsInputLabel" placeholder="Add skill...">
  </div>
  <div class="form-text">Press Enter or comma to add a skill.</div>
</div>
```

### Disabled

Disable the ghost input to prevent adding new chips, and disable the dismiss buttons on existing chips. Existing chips become non-interactive.

Read only

HTML

```
<div class="chip-input theme-primary" data-bs-chips>
  <span class="chip">
    Read only
    <button type="button" class="chip-dismiss" aria-label="Remove" disabled>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="4" y1="4" x2="12" y2="12"/><line x1="12" y1="4" x2="4" y2="12"/></svg>
    </button>
  </span>
  <input type="text" class="form-ghost" placeholder="Disabled..." disabled>
</div>
```

## Usage

### Via data attributes

Add `data-bs-chips` to your container element to automatically initialize the chip input behavior. Options can be passed as data attributes.

| Attribute | Description |
| --- | --- |
| `data-bs-chips` | Initializes the chip input on the container element. |
| `data-bs-separator` | Character that creates a new chip when typed (or `null` to disable). |
| `data-bs-allow-duplicates` | Whether duplicate chip values are allowed. |
| `data-bs-max-chips` | Maximum number of chips (`null` for no limit). |
| `data-bs-create-on-blur` | Create a chip from the input value when focus leaves the field. |

HTML

```
          <div class="chip-input theme-primary" data-bs-chips data-bs-separator="," data-bs-allow-duplicates="false">
  <input type="text" class="form-ghost" placeholder="Add tags...">
</div>
```

### Via JavaScript

Initialize manually with JavaScript:

JavaScript

```
          const chipInputElement = document.querySelector('.chip-input')
const chips = new bootstrap.Chips(chipInputElement, {
  separator: ',',
  maxChips: 5
})
```

### Dependencies

The chips plugin requires the following JavaScript files if you’re building Bootstrap’s JS from source:

| File | Description |
| --- | --- |
| `js/src/chips.ts` | Main chips component |
| `js/src/base-component.ts` | Base component class |
| `js/src/dom/data.ts` | Element data store |
| `js/src/dom/event-handler.ts` | Event handling utilities |
| `js/src/dom/manipulator.ts` | Data attribute manipulation |
| `js/src/dom/selector-engine.ts` | DOM selector utilities |
| `js/src/util/config.ts` | Configuration base class |
| `js/src/util/index.ts` | Core utility functions |
| `js/src/util/sanitizer.ts` | HTML content sanitizer |

### Options

Options can be passed via data attributes or JavaScript:

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| `separator` | string | null | `','` | Character that triggers chip creation when typed. Set to `null` to disable. |
| `allowDuplicates` | boolean | `false` | Allow duplicate chip values. |
| `maxChips` | number | null | `null` | Maximum number of chips allowed. `null` for unlimited. |
| `placeholder` | string | `''` | Placeholder text for dynamically created inputs. |
| `dismissible` | boolean | `true` | Add dismiss buttons to created chips. |
| `dismissIcon` | string | `'<svg>...</svg>'` | HTML string for the dismiss button icon. Passed through the [icon content sanitizer](getting-started__javascript.md#sanitizer) before insertion. |
| `createOnBlur` | boolean | `true` | Create chip from input value when the input loses focus. |

### Methods

| Method | Description |
| --- | --- |
| `add(value)` | Adds a chip with the given value. Returns the chip element or `null` if rejected. |
| `remove(chipOrValue)` | Removes a chip by element reference or value string. Returns `true` if removed. |
| `removeSelected()` | Removes all currently selected chips. |
| `getValues()` | Returns an array of all chip values. |
| `getSelectedValues()` | Returns an array of selected chip values. |
| `clear()` | Removes all chips. |
| `clearSelection()` | Deselects all chips without removing them. |
| `selectChip(chip, options)` | Selects a chip. Options: `addToSelection`, `rangeSelect`. |
| `focus()` | Focuses the ghost input. |
| `dispose()` | Destroys the component instance. |

JavaScript

```
          const chipInputElement = document.querySelector('.chip-input')
const chips = bootstrap.Chips.getOrCreateInstance(chipInputElement)

// Add chips programmatically
chips.add('JavaScript')
chips.add('TypeScript')

// Get all values
console.log(chips.getValues()) // ['JavaScript', 'TypeScript']

// Remove a specific chip
chips.remove('JavaScript')

// Clear all chips
chips.clear()
```

### Events

| Event | Description |
| --- | --- |
| `add.bs.chips` | Fired before a chip is added. Call `event.preventDefault()` to cancel. |
| `remove.bs.chips` | Fired before a chip is removed. Call `event.preventDefault()` to cancel. |
| `change.bs.chips` | Fired after any chip is added or removed. Contains `values` array. |
| `select.bs.chips` | Fired when chip selection changes. Contains `selected` array of values. |

JavaScript

```
          const chipInputElement = document.querySelector('.chip-input')

chipInputElement.addEventListener('add.bs.chips', event => {
  console.log('Adding chip:', event.value)

  // Validate and optionally prevent
  if (event.value.length < 2) {
    event.preventDefault()
  }
})

chipInputElement.addEventListener('remove.bs.chips', event => {
  console.log('Removing chip:', event.value)
})

chipInputElement.addEventListener('change.bs.chips', event => {
  console.log('Current values:', event.values)
  // Sync with hidden input or state
})

chipInputElement.addEventListener('select.bs.chips', event => {
  console.log('Selected:', event.selected)
})
```

## Keyboard behavior

Chip inputs support Mail.app-style keyboard navigation with chip selection.

### When input is focused

| Key | Action |
| --- | --- |
| `Enter` | Create chip from current input value |
| `,` (or separator) | Create chip from current input value |
| `Backspace` / `Delete` | When input is empty, select and focus last chip (first press); pressing again deletes it |
| `←` | When cursor is at start, move focus to last chip |
| `Shift+←` | Select last chip and extend selection |
| `Escape` | Clear selection, clear input, and blur |

### When a chip is focused

| Key | Action |
| --- | --- |
| `Backspace` / `Delete` | Remove selected chips, then select and focus the next closest chip |
| `←` | Move to previous chip |
| `→` | Move to next chip (or input if at end) |
| `Shift+←` / `Shift+→` | Extend selection in that direction |
| `Home` | Move to first chip |
| `End` | Move to input |
| `Cmd/Ctrl+A` | Select all chips |
| `Escape` | Clear selection and focus input |

### Mouse selection

| Action | Effect |
| --- | --- |
| Click chip | Select chip (deselects others) |
| `Cmd/Ctrl+Click` | Toggle chip in selection |
| `Shift+Click` | Range select from anchor to clicked chip |

## Accessibility

- Use a `<label>` element associated with the chip input for screen readers
- Chips are focusable and support full keyboard navigation
- Each `.chip-dismiss` button has `aria-label="Remove"`
- Selected chips have the `.active` class for visual indication
- Chips are announced as they are added or removed

## CSS

### Chip variables

Chip use local CSS variables on `.chip` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/\_chip.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_chip.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$chip-tokens: defaults(
  (
    --chip-height: 1.75rem,
    --chip-padding-x: .625rem,
    --chip-gap: .3125rem,
    --chip-border-radius: var(--radius-pill),
    --chip-img-size: 1.25rem,
    --chip-icon-size: 1rem,
    --chip-dismiss-size: 1rem,
    --chip-dismiss-opacity: .65,
    --chip-dismiss-hover-opacity: 1,
    --chip-color: var(--theme-fg, var(--fg-body)),
    --chip-bg: var(--theme-bg-subtle, var(--bg-2)),
    --chip-border-color: transparent,
    --chip-selected-color: var(--theme-contrast, var(--primary-contrast)),
    --chip-selected-bg: var(--theme-bg, var(--primary-bg)),
    --chip-selected-border-color: var(--theme-bg, var(--primary-bg)),
  ),
  $chip-tokens
);
```

### Chip input variables

These variables are scoped to the `.chip-input` container.

[scss/forms/\_chip-input.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/forms/_chip-input.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$chip-input-tokens: defaults(
  (
    --chip-input-padding-y: .75rem,
    --chip-input-padding-x: .75rem,
    --chip-input-gap: .375rem,
    --chip-input-ghost-min-width: 5rem,
    --control-fg: var(--btn-input-fg),
    --control-bg: var(--btn-input-bg),
    --control-border-width: var(--border-width),
    --control-border-color: var(--border-color),
    --control-border-radius: var(--radius-5),
  ),
  $chip-input-tokens
);
```
