# Form controls · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/forms/form-control

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/forms/form-control.mdx "View and edit this file on GitHub")

# Form controls

Give textual form controls like `<input>`s and `<textarea>`s an upgrade with custom styles, sizing, focus states, and more.

On this page
   
**On this page**

---

## Example

Form controls are styled with a mix of Sass and CSS variables, allowing them to adapt to color modes and support any customization method.

Email address

Example textarea

html

```
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
```

## Sizing

Set heights using classes like `.form-control-lg` and `.form-control-sm`.

html

```
<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
<input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
```

## Form text

Block-level or inline-level form text can be created using `.form-text`.

Form text should be explicitly associated with the form control it relates to using the `aria-describedby` attribute. This will ensure that assistive technologies—such as screen readers—will announce this form text when the user focuses or enters the control.

Form text below inputs can be styled with `.form-text`. If a block-level element will be used, a top margin is added for easy spacing from the inputs above.

Password

Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.

html

```
<label for="inputPassword5" class="form-label">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</div>
```

Inline text can use any typical inline HTML element (be it a `<span>`, `<small>`, or something else) with nothing more than the `.form-text` class.

Password

Must be 8-20 characters long.

html

```
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span>
  </div>
</div>
```

## Disabled

Add the `disabled` boolean attribute on an input to give it a grayed out appearance, remove pointer events, and prevent focusing.

html

```
<input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
<input class="form-control" type="text" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
```

## Readonly

Add the `readonly` boolean attribute on an input to prevent modification of the input’s value. `readonly` inputs can still be focused and selected, while `disabled` inputs cannot.

html

```
<input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
```

## Readonly plain text

If you want to have `<input readonly>` elements in your form styled as plain text, replace `.form-control` with `.form-control-plaintext` to remove the default form field styling and preserve the correct `margin` and `padding`.

Email

Password

html

```
<div class="mb-3 row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
  </div>
</div>
<div class="mb-3 row">
  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
  <div class="col-sm-10">
    <input type="password" class="form-control" id="inputPassword">
  </div>
</div>
```

Email

Password

Confirm identity

html

```
<form class="row g-3">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
</form>
```

## File input

Default file input example

Multiple files input example

Disabled file input example

Small file input example

Large file input example

html

```
<div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Multiple files input example</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>
<div class="mb-3">
  <label for="formFileDisabled" class="form-label">Disabled file input example</label>
  <input class="form-control" type="file" id="formFileDisabled" disabled>
</div>
<div class="mb-3">
  <label for="formFileSm" class="form-label">Small file input example</label>
  <input class="form-control form-control-sm" id="formFileSm" type="file">
</div>
<div>
  <label for="formFileLg" class="form-label">Large file input example</label>
  <input class="form-control form-control-lg" id="formFileLg" type="file">
</div>
```

## Color

Set the `type="color"` and add `.form-control-color` to the `<input>`. We use the modifier class to set fixed `height`s and override some inconsistencies between browsers.

Color picker

html

```
<label for="exampleColorInput" class="form-label">Color picker</label>
<input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
```

## Datalists

Datalists allow you to create a group of `<option>`s that can be accessed (and autocompleted) from within an `<input>`. These are similar to `<select>` elements, but come with more menu styling limitations and differences. While most browsers and operating systems include some support for `<datalist>` elements, their styling is inconsistent at best.

Learn more about [support for datalist elements](https://caniuse.com/datalist).

Datalist example

html

```
<label for="exampleDataList" class="form-label">Datalist example</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
  <option value="San Francisco">
  <option value="New York">
  <option value="Seattle">
  <option value="Los Angeles">
  <option value="Chicago">
</datalist>
```

## CSS

### Sass variables

`$input-*` are shared across most of our form controls (and not buttons).

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$input-padding-y:                       $input-btn-padding-y;
$input-padding-x:                       $input-btn-padding-x;
$input-font-family:                     $input-btn-font-family;
$input-font-size:                       $input-btn-font-size;
$input-font-weight:                     $font-weight-base;
$input-line-height:                     $input-btn-line-height;

$input-padding-y-sm:                    $input-btn-padding-y-sm;
$input-padding-x-sm:                    $input-btn-padding-x-sm;
$input-font-size-sm:                    $input-btn-font-size-sm;

$input-padding-y-lg:                    $input-btn-padding-y-lg;
$input-padding-x-lg:                    $input-btn-padding-x-lg;
$input-font-size-lg:                    $input-btn-font-size-lg;

$input-bg:                              var(--#{$prefix}body-bg);
$input-disabled-color:                  null;
$input-disabled-bg:                     var(--#{$prefix}secondary-bg);
$input-disabled-border-color:           null;

$input-color:                           var(--#{$prefix}body-color);
$input-border-color:                    var(--#{$prefix}border-color);
$input-border-width:                    $input-btn-border-width;
$input-box-shadow:                      var(--#{$prefix}box-shadow-inset);

$input-border-radius:                   var(--#{$prefix}border-radius);
$input-border-radius-sm:                var(--#{$prefix}border-radius-sm);
$input-border-radius-lg:                var(--#{$prefix}border-radius-lg);

$input-focus-bg:                        $input-bg;
$input-focus-border-color:              tint-color($component-active-bg, 50%);
$input-focus-color:                     $input-color;
$input-focus-width:                     $input-btn-focus-width;
$input-focus-box-shadow:                $input-btn-focus-box-shadow;

$input-placeholder-color:               var(--#{$prefix}secondary-color);
$input-plaintext-color:                 var(--#{$prefix}body-color);

$input-height-border:                   calc(#{$input-border-width} * 2); // stylelint-disable-line function-disallowed-list

$input-height-inner:                    add($input-line-height * 1em, $input-padding-y * 2);
$input-height-inner-half:               add($input-line-height * .5em, $input-padding-y);
$input-height-inner-quarter:            add($input-line-height * .25em, $input-padding-y * .5);

$input-height:                          add($input-line-height * 1em, add($input-padding-y * 2, $input-height-border, false));
$input-height-sm:                       add($input-line-height * 1em, add($input-padding-y-sm * 2, $input-height-border, false));
$input-height-lg:                       add($input-line-height * 1em, add($input-padding-y-lg * 2, $input-height-border, false));

$input-transition:                      border-color .15s ease-in-out, box-shadow .15s ease-in-out;

$form-color-width:                      3rem;
```

`$form-label-*` and `$form-text-*` are for our `<label>`s and `.form-text` component.

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$form-label-margin-bottom:              .5rem;
$form-label-font-size:                  null;
$form-label-font-style:                 null;
$form-label-font-weight:                null;
$form-label-color:                      null;
```

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$form-text-margin-top:                  .25rem;
$form-text-font-size:                   $small-font-size;
$form-text-font-style:                  null;
$form-text-font-weight:                 null;
$form-text-color:                       var(--#{$prefix}secondary-color);
```

`$form-file-*` are for file input.

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$form-file-button-color:          $input-color;
$form-file-button-bg:             var(--#{$prefix}tertiary-bg);
$form-file-button-hover-bg:       var(--#{$prefix}secondary-bg);
```
