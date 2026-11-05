# Range · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/forms/range

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/forms/range.mdx "View and edit this file on GitHub")

# Range

Use our custom range inputs for consistent cross-browser styling and built-in customization.

On this page
   
**On this page**

---

## Overview

Create custom `<input type="range">` controls with `.form-range`. The track (the background) and thumb (the value) are both styled to appear the same across browsers. As only Firefox supports “filling” their track from the left or right of the thumb as a means to visually indicate progress, we do not currently support it.

Example range

html

```
<label for="range1" class="form-label">Example range</label>
<input type="range" class="form-range" id="range1">
```

## Disabled

Add the `disabled` boolean attribute on an input to give it a grayed out appearance, remove pointer events, and prevent focusing.

Disabled range

html

```
<label for="disabledRange" class="form-label">Disabled range</label>
<input type="range" class="form-range" id="disabledRange" disabled>
```

## Min and max

Range inputs have implicit values for `min` and `max`—`0` and `100`, respectively. You may specify new values for those using the `min` and `max` attributes.

Example range

html

```
<label for="range2" class="form-label">Example range</label>
<input type="range" class="form-range" min="0" max="5" id="range2">
```

## Steps

By default, range inputs “snap” to integer values. To change this, you can specify a `step` value. In the example below, we double the number of steps by using `step="0.5"`.

Example range

html

```
<label for="range3" class="form-label">Example range</label>
<input type="range" class="form-range" min="0" max="5" step="0.5" id="range3">
```

## Output value

The value of the range input can be shown using the `output` element and a bit of JavaScript.

Example range

html

```
<label for="range4" class="form-label">Example range</label>
<input type="range" class="form-range" min="0" max="100" value="50" id="range4">
<output for="range4" id="rangeValue" aria-hidden="true"></output>

<script>
  // This is an example script, please modify as needed
  const rangeInput = document.getElementById('range4');
  const rangeOutput = document.getElementById('rangeValue');

  // Set initial value
  rangeOutput.textContent = rangeInput.value;

  rangeInput.addEventListener('input', function() {
    rangeOutput.textContent = this.value;
  });
</script>
```

## CSS

### Sass variables

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$form-range-track-width:          100%;
$form-range-track-height:         .5rem;
$form-range-track-cursor:         pointer;
$form-range-track-bg:             var(--#{$prefix}secondary-bg);
$form-range-track-border-radius:  1rem;
$form-range-track-box-shadow:     var(--#{$prefix}box-shadow-inset);

$form-range-thumb-width:                   1rem;
$form-range-thumb-height:                  $form-range-thumb-width;
$form-range-thumb-bg:                      $component-active-bg;
$form-range-thumb-border:                  0;
$form-range-thumb-border-radius:           1rem;
$form-range-thumb-box-shadow:              0 .1rem .25rem rgba($black, .1);
$form-range-thumb-focus-box-shadow:        0 0 0 1px $body-bg, $input-focus-box-shadow;
$form-range-thumb-focus-box-shadow-width:  $input-focus-width; // For focus box shadow issue in Edge
$form-range-thumb-active-bg:               tint-color($component-active-bg, 70%);
$form-range-thumb-disabled-bg:             var(--#{$prefix}secondary-color);
$form-range-thumb-transition:              background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
```
