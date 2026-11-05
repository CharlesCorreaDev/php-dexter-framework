# Dropdowns · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/components/dropdowns

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/components/dropdowns.mdx "View and edit this file on GitHub")

# Dropdowns

Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.

On this page
   
**On this page**

---

## Overview

Dropdowns are toggleable, contextual overlays for displaying lists of links and more. They’re made interactive with the included Bootstrap dropdown JavaScript plugin. They’re toggled by clicking, not by hovering; this is [an intentional design decision](https://markdotto.com/blog/bootstrap-explained-dropdowns/).

Dropdowns are built on a third party library, [Popper](https://github.com/floating-ui/popper-docs/blob/main/docs/v2/index.md), which provides dynamic positioning and viewport detection. Be sure to include [popper.min.js](https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js) before Bootstrap’s JavaScript or use `bootstrap.bundle.min.js` / `bootstrap.bundle.js` which contains Popper. Popper isn’t used to position dropdowns in navbars though as dynamic positioning isn’t required.

## Accessibility

The [WAI ARIA](https://www.w3.org/TR/wai-aria/) standard defines an actual [`role="menu"` widget](https://www.w3.org/TR/wai-aria/#menu), but this is specific to application-like menus which trigger actions or functions. ARIA menus can only contain menu items, checkbox menu items, radio button menu items, radio button groups, and sub-menus.

Bootstrap’s dropdowns, on the other hand, are designed to be generic and applicable to a variety of situations and markup structures. For instance, it is possible to create dropdowns that contain additional inputs and form controls, such as search fields or login forms. For this reason, Bootstrap does not expect (nor automatically add) any of the `role` and `aria-` attributes required for true ARIA menus. Authors will have to include these more specific attributes themselves.

However, Bootstrap does add built-in support for most standard keyboard menu interactions, such as the ability to move through individual `.dropdown-item` elements using the cursor keys and close the menu with the `Esc` key.

## Examples

Wrap the dropdown’s toggle (your button or link) and the dropdown menu within `.dropdown`, or another element that declares `position: relative;`. Ideally, you should use a `<button>` element as the dropdown trigger, but the plugin will work with `<a>` elements as well. The examples shown here use semantic `<ul>` elements where appropriate, but custom markup is supported.

### Single button

Any single `.btn` can be turned into a dropdown toggle with some markup changes. Here’s how you can put them to work with `<button>` elements:

Dropdown button

- [Action](#)
- [Another action](#)
- [Something else here](#)

html

```
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
```

While `<button>` is the recommended control for a dropdown toggle, there might be situations where you have to use an `<a>` element. If you do, we recommend adding a `role="button"` attribute to appropriately convey control’s purpose to assistive technologies such as screen readers.

[Dropdown link](#)

- [Action](#)
- [Another action](#)
- [Something else here](#)

html

```
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown link
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
```

The best part is you can do this with any button variant, too:

Primary

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Secondary

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Success

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Info

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Warning

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Danger

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

```
<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Danger
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
```

### Split button

Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of `.dropdown-toggle-split` for proper spacing around the dropdown caret.

We use this extra class to reduce the horizontal `padding` on either side of the caret by 25% and remove the `margin-left` that’s added for regular button dropdowns. Those extra changes keep the caret centered in the split button and provide a more appropriately sized hit area next to the main button.

Primary

Toggle Dropdown

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Secondary

Toggle Dropdown

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Success

Toggle Dropdown

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Info

Toggle Dropdown

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Warning

Toggle Dropdown

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Danger

Toggle Dropdown

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

```
<!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Danger</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
```

## Sizing

Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.

Large button

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Large split button

Toggle Dropdown

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

```
<!-- Large button groups (default and split) -->
<div class="btn-group">
  <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Large button
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
<div class="btn-group">
  <button class="btn btn-secondary btn-lg" type="button">
    Large split button
  </button>
  <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
```

Small button

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Small split button

Toggle Dropdown

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

```
<div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Small button
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
<div class="btn-group">
  <button class="btn btn-secondary btn-sm" type="button">
    Small split button
  </button>
  <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
```

## Dark dropdowns

Deprecated in v5.3.0 

Opt into darker dropdowns to match a dark navbar or custom style by adding `.dropdown-menu-dark` onto an existing `.dropdown-menu`. No changes are required to the dropdown items.

**Heads up!** Dark variants for components were deprecated in v5.3.0 with the introduction of color modes.
Instead of adding `.dropdown-menu-dark`, set `data-bs-theme="dark"` on the root element, a parent
wrapper, or the component itself.

Dropdown button

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

html

```
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
```

And putting it to use in a navbar:

html

```
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
```

## Directions

**Directions are flipped in RTL mode.** As such, `.dropstart` will appear on the right side.

### Centered

Make the dropdown menu centered below the toggle with `.dropdown-center` on the parent element.

Centered dropdown

- [Action](#)
- [Action two](#)
- [Action three](#)

html

```
<div class="dropdown-center">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Centered dropdown
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Action two</a></li>
    <li><a class="dropdown-item" href="#">Action three</a></li>
  </ul>
</div>
```

### Dropup

Trigger dropdown menus above elements by adding `.dropup` to the parent element.

Dropup

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Split dropup

Toggle Dropdown

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

```
<!-- Default dropup button -->
<div class="btn-group dropup">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropup
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
</div>

<!-- Split dropup button -->
<div class="btn-group dropup">
  <button type="button" class="btn btn-secondary">
    Split dropup
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
</div>
```

### Dropup centered

Make the dropup menu centered above the toggle with `.dropup-center` on the parent element.

Centered dropup

- [Action](#)
- [Action two](#)
- [Action three](#)

html

```
<div class="dropup-center dropup">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Centered dropup
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Action two</a></li>
    <li><a class="dropdown-item" href="#">Action three</a></li>
  </ul>
</div>
```

### Dropend

Trigger dropdown menus at the right of the elements by adding `.dropend` to the parent element.

Dropend

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Split dropend

Toggle Dropend

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

```
<!-- Default dropend button -->
<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropend
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
</div>

<!-- Split dropend button -->
<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary">
    Split dropend
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropend</span>
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
</div>
```

### Dropstart

Trigger dropdown menus at the left of the elements by adding `.dropstart` to the parent element.

Dropstart

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Toggle Dropstart

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

Split dropstart

```
<!-- Default dropstart button -->
<div class="btn-group dropstart">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropstart
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
</div>

<!-- Split dropstart button -->
<div class="btn-group dropstart">
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropstart</span>
  </button>
  <ul class="dropdown-menu">
    <!-- Dropdown menu links -->
  </ul>
  <button type="button" class="btn btn-secondary">
    Split dropstart
  </button>
</div>
```

## Menu items

You can use `<a>` or `<button>` elements as dropdown items.

Dropdown

- Action
- Another action
- Something else here

html

```
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown
  </button>
  <ul class="dropdown-menu">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
</div>
```

You can also create non-interactive dropdown items with `.dropdown-item-text`. Feel free to style further with custom CSS or text utilities.

- Dropdown item text
- [Action](#)
- [Another action](#)
- [Something else here](#)

html

```
<ul class="dropdown-menu">
  <li><span class="dropdown-item-text">Dropdown item text</span></li>
  <li><a class="dropdown-item" href="#">Action</a></li>
  <li><a class="dropdown-item" href="#">Another action</a></li>
  <li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
```

### Active

Add `.active` to items in the dropdown to **style them as active**. To convey the active state to assistive technologies, use the `aria-current` attribute — using the `page` value for the current page, or `true` for the current item in a set.

- [Regular link](#)
- [Active link](#)
- [Another link](#)

html

```
<ul class="dropdown-menu">
  <li><a class="dropdown-item" href="#">Regular link</a></li>
  <li><a class="dropdown-item active" href="#" aria-current="true">Active link</a></li>
  <li><a class="dropdown-item" href="#">Another link</a></li>
</ul>
```

### Disabled

Add `.disabled` to items in the dropdown to **style them as disabled**.

- [Regular link](#)
- Disabled link
- [Another link](#)

html

```
<ul class="dropdown-menu">
  <li><a class="dropdown-item" href="#">Regular link</a></li>
  <li><a class="dropdown-item disabled" aria-disabled="true">Disabled link</a></li>
  <li><a class="dropdown-item" href="#">Another link</a></li>
</ul>
```

## Menu alignment

By default, a dropdown menu is automatically positioned 100% from the top and along the left side of its parent. You can change this with the directional `.drop*` classes, but you can also control them with additional modifier classes.

Add `.dropdown-menu-end` to a `.dropdown-menu` to right align the dropdown menu. Directions are mirrored when using Bootstrap in RTL, meaning `.dropdown-menu-end` will appear on the left side.

**Heads up!** Dropdowns are positioned thanks to Popper except when they are contained in a navbar.

Right-aligned menu example

- Action
- Another action
- Something else here

html

```
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Right-aligned menu example
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
</div>
```

### Responsive alignment

If you want to use responsive alignment, disable dynamic positioning by adding the `data-bs-display="static"` attribute and use the responsive variation classes.

To align **right** the dropdown menu with the given breakpoint or larger, add `.dropdown-menu{-sm|-md|-lg|-xl|-xxl}-end`.

Left-aligned but right aligned when large screen

- Action
- Another action
- Something else here

html

```
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
    Left-aligned but right aligned when large screen
  </button>
  <ul class="dropdown-menu dropdown-menu-lg-end">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
</div>
```

To align **left** the dropdown menu with the given breakpoint or larger, add `.dropdown-menu-end` and `.dropdown-menu{-sm|-md|-lg|-xl|-xxl}-start`.

Right-aligned but left aligned when large screen

- Action
- Another action
- Something else here

html

```
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
    Right-aligned but left aligned when large screen
  </button>
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
</div>
```

Note that you don’t need to add a `data-bs-display="static"` attribute to dropdown buttons in navbars, since Popper isn’t used in navbars.

### Alignment options

Taking most of the options shown above, here’s a small kitchen sink demo of various dropdown alignment options in one place.

Dropdown

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

Right-aligned menu

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

Left-aligned, right-aligned lg

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

Right-aligned, left-aligned lg

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

Dropstart

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

Dropend

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

Dropup

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

html

```
<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Right-aligned menu
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
    Left-aligned, right-aligned lg
  </button>
  <ul class="dropdown-menu dropdown-menu-lg-end">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
    Right-aligned, left-aligned lg
  </button>
  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group dropstart">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropstart
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropend
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group dropup">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Dropup
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>
```

## Menu content

### Headers

Add a header to label sections of actions in any dropdown menu.

- ###### Dropdown header
- [Action](#)
- [Another action](#)

html

```
<ul class="dropdown-menu">
  <li><h6 class="dropdown-header">Dropdown header</h6></li>
  <li><a class="dropdown-item" href="#">Action</a></li>
  <li><a class="dropdown-item" href="#">Another action</a></li>
</ul>
```

### Dividers

Separate groups of related menu items with a divider.

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

html

```
<ul class="dropdown-menu">
  <li><a class="dropdown-item" href="#">Action</a></li>
  <li><a class="dropdown-item" href="#">Another action</a></li>
  <li><a class="dropdown-item" href="#">Something else here</a></li>
  <li><hr class="dropdown-divider"></li>
  <li><a class="dropdown-item" href="#">Separated link</a></li>
</ul>
```

### Text

Place any freeform text within a dropdown menu with text and use [spacing utilities](utilities__spacing.md). Note that you’ll likely need additional sizing styles to constrain the menu width.

Some example text that’s free-flowing within the dropdown menu.

And this is more example text.

html

```
<div class="dropdown-menu p-4 text-body-secondary" style="max-width: 200px;">
  <p>
    Some example text that’s free-flowing within the dropdown menu.
  </p>
  <p class="mb-0">
    And this is more example text.
  </p>
</div>
```

### Forms

Put a form within a dropdown menu, or make it into a dropdown menu, and use [margin or padding utilities](utilities__spacing.md) to give it the negative space you require.

Email address

Password

Remember me

Sign in
[New around here? Sign up](#)
[Forgot password?](#)

html

```
<div class="dropdown-menu">
  <form class="px-4 py-3">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
</div>
```

Dropdown form

Email address

Password

Remember me

Sign in

html

```
<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
    Dropdown form
  </button>
  <form class="dropdown-menu p-4">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
        <label class="form-check-label" for="dropdownCheck2">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
</div>
```

## Dropdown options

Use `data-bs-offset` or `data-bs-reference` to change the location of the dropdown.

Offset

- [Action](#)
- [Another action](#)
- [Something else here](#)

Reference

Toggle Dropdown

- [Action](#)
- [Another action](#)
- [Something else here](#)
- ---
- [Separated link](#)

html

```
<div class="d-flex">
  <div class="dropdown me-1">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
      Offset
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-secondary">Reference</button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </div>
</div>
```

### Auto close behavior

By default, the dropdown menu is closed when clicking inside or outside the dropdown menu. You can use the `autoClose` option to change this behavior of the dropdown.

Default dropdown

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

Clickable inside

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

Clickable outside

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

Manual close

- [Menu item](#)
- [Menu item](#)
- [Menu item](#)

html

```
<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
    Default dropdown
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
    Clickable inside
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
    Clickable outside
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>

<div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
    Manual close
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
    <li><a class="dropdown-item" href="#">Menu item</a></li>
  </ul>
</div>
```

## CSS

### Variables

Added in v5.2.0

As part of Bootstrap’s evolving CSS variables approach, dropdowns now use local CSS variables on `.dropdown-menu` for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.

[scss/\_dropdown.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_dropdown.scss)

```
--#{$prefix}dropdown-zindex: #{$zindex-dropdown};
--#{$prefix}dropdown-min-width: #{$dropdown-min-width};
--#{$prefix}dropdown-padding-x: #{$dropdown-padding-x};
--#{$prefix}dropdown-padding-y: #{$dropdown-padding-y};
--#{$prefix}dropdown-spacer: #{$dropdown-spacer};
@include rfs($dropdown-font-size, --#{$prefix}dropdown-font-size);
--#{$prefix}dropdown-color: #{$dropdown-color};
--#{$prefix}dropdown-bg: #{$dropdown-bg};
--#{$prefix}dropdown-border-color: #{$dropdown-border-color};
--#{$prefix}dropdown-border-radius: #{$dropdown-border-radius};
--#{$prefix}dropdown-border-width: #{$dropdown-border-width};
--#{$prefix}dropdown-inner-border-radius: #{$dropdown-inner-border-radius};
--#{$prefix}dropdown-divider-bg: #{$dropdown-divider-bg};
--#{$prefix}dropdown-divider-margin-y: #{$dropdown-divider-margin-y};
--#{$prefix}dropdown-box-shadow: #{$dropdown-box-shadow};
--#{$prefix}dropdown-link-color: #{$dropdown-link-color};
--#{$prefix}dropdown-link-hover-color: #{$dropdown-link-hover-color};
--#{$prefix}dropdown-link-hover-bg: #{$dropdown-link-hover-bg};
--#{$prefix}dropdown-link-active-color: #{$dropdown-link-active-color};
--#{$prefix}dropdown-link-active-bg: #{$dropdown-link-active-bg};
--#{$prefix}dropdown-link-disabled-color: #{$dropdown-link-disabled-color};
--#{$prefix}dropdown-item-padding-x: #{$dropdown-item-padding-x};
--#{$prefix}dropdown-item-padding-y: #{$dropdown-item-padding-y};
--#{$prefix}dropdown-header-color: #{$dropdown-header-color};
--#{$prefix}dropdown-header-padding-x: #{$dropdown-header-padding-x};
--#{$prefix}dropdown-header-padding-y: #{$dropdown-header-padding-y};
```

Dropdown items include at least one variable that is not set on `.dropdown`. This allows you to provide a new value while Bootstrap defaults to a fallback value.

- `--bs-dropdown-item-border-radius`

Customization through CSS variables can be seen on the `.dropdown-menu-dark` class where we override specific values without adding duplicate CSS selectors.

[scss/\_dropdown.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_dropdown.scss)

```
--#{$prefix}dropdown-color: #{$dropdown-dark-color};
--#{$prefix}dropdown-bg: #{$dropdown-dark-bg};
--#{$prefix}dropdown-border-color: #{$dropdown-dark-border-color};
--#{$prefix}dropdown-box-shadow: #{$dropdown-dark-box-shadow};
--#{$prefix}dropdown-link-color: #{$dropdown-dark-link-color};
--#{$prefix}dropdown-link-hover-color: #{$dropdown-dark-link-hover-color};
--#{$prefix}dropdown-divider-bg: #{$dropdown-dark-divider-bg};
--#{$prefix}dropdown-link-hover-bg: #{$dropdown-dark-link-hover-bg};
--#{$prefix}dropdown-link-active-color: #{$dropdown-dark-link-active-color};
--#{$prefix}dropdown-link-active-bg: #{$dropdown-dark-link-active-bg};
--#{$prefix}dropdown-link-disabled-color: #{$dropdown-dark-link-disabled-color};
--#{$prefix}dropdown-header-color: #{$dropdown-dark-header-color};
```

### Sass variables

Variables for all dropdowns:

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$dropdown-min-width:                10rem;
$dropdown-padding-x:                0;
$dropdown-padding-y:                .5rem;
$dropdown-spacer:                   .125rem;
$dropdown-font-size:                $font-size-base;
$dropdown-color:                    var(--#{$prefix}body-color);
$dropdown-bg:                       var(--#{$prefix}body-bg);
$dropdown-border-color:             var(--#{$prefix}border-color-translucent);
$dropdown-border-radius:            var(--#{$prefix}border-radius);
$dropdown-border-width:             var(--#{$prefix}border-width);
$dropdown-inner-border-radius:      calc(#{$dropdown-border-radius} - #{$dropdown-border-width}); // stylelint-disable-line function-disallowed-list
$dropdown-divider-bg:               $dropdown-border-color;
$dropdown-divider-margin-y:         $spacer * .5;
$dropdown-box-shadow:               var(--#{$prefix}box-shadow);

$dropdown-link-color:               var(--#{$prefix}body-color);
$dropdown-link-hover-color:         $dropdown-link-color;
$dropdown-link-hover-bg:            var(--#{$prefix}tertiary-bg);

$dropdown-link-active-color:        $component-active-color;
$dropdown-link-active-bg:           $component-active-bg;

$dropdown-link-disabled-color:      var(--#{$prefix}tertiary-color);

$dropdown-item-padding-y:           $spacer * .25;
$dropdown-item-padding-x:           $spacer;

$dropdown-header-color:             $gray-600;
$dropdown-header-padding-x:         $dropdown-item-padding-x;
$dropdown-header-padding-y:         $dropdown-padding-y;
// fusv-disable
$dropdown-header-padding:           $dropdown-header-padding-y $dropdown-header-padding-x; // Deprecated in v5.2.0
// fusv-enable
```

Variables for the [dark dropdown](#dark-dropdowns):

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$dropdown-dark-color:               $gray-300;
$dropdown-dark-bg:                  $gray-800;
$dropdown-dark-border-color:        $dropdown-border-color;
$dropdown-dark-divider-bg:          $dropdown-divider-bg;
$dropdown-dark-box-shadow:          null;
$dropdown-dark-link-color:          $dropdown-dark-color;
$dropdown-dark-link-hover-color:    $white;
$dropdown-dark-link-hover-bg:       rgba($white, .15);
$dropdown-dark-link-active-color:   $dropdown-link-active-color;
$dropdown-dark-link-active-bg:      $dropdown-link-active-bg;
$dropdown-dark-link-disabled-color: $gray-500;
$dropdown-dark-header-color:        $gray-500;
```

Variables for the CSS-based carets that indicate a dropdown’s interactivity:

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$caret-width:                 .3em;
$caret-vertical-align:        $caret-width * .85;
$caret-spacing:               $caret-width * .85;
```

### Sass mixins

Mixins are used to generate the CSS-based carets and can be found in `scss/mixins/_caret.scss`.

[scss/mixins/\_caret.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/mixins/_caret.scss)

```
@mixin caret-down($width: $caret-width) {
  border-top: $width solid;
  border-right: $width solid transparent;
  border-bottom: 0;
  border-left: $width solid transparent;
}

@mixin caret-up($width: $caret-width) {
  border-top: 0;
  border-right: $width solid transparent;
  border-bottom: $width solid;
  border-left: $width solid transparent;
}

@mixin caret-end($width: $caret-width) {
  border-top: $width solid transparent;
  border-right: 0;
  border-bottom: $width solid transparent;
  border-left: $width solid;
}

@mixin caret-start($width: $caret-width) {
  border-top: $width solid transparent;
  border-right: $width solid;
  border-bottom: $width solid transparent;
}

@mixin caret(
  $direction: down,
  $width: $caret-width,
  $spacing: $caret-spacing,
  $vertical-align: $caret-vertical-align
) {
  @if $enable-caret {
    &::after {
      display: inline-block;
      margin-left: $spacing;
      vertical-align: $vertical-align;
      content: "";
      @if $direction == down {
        @include caret-down($width);
      } @else if $direction == up {
        @include caret-up($width);
      } @else if $direction == end {
        @include caret-end($width);
      }
    }

    @if $direction == start {
      &::after {
        display: none;
      }

      &::before {
        display: inline-block;
        margin-right: $spacing;
        vertical-align: $vertical-align;
        content: "";
        @include caret-start($width);
      }
    }

    &:empty::after {
      margin-left: 0;
    }
  }
}
```

## Usage

Via data attributes or JavaScript, the dropdown plugin toggles hidden content (dropdown menus) by toggling the `.show` class on the parent `.dropdown-menu`. The `data-bs-toggle="dropdown"` attribute is relied on for closing dropdown menus at an application level, so it’s a good idea to always use it.

On touch-enabled devices, opening a dropdown adds empty `mouseover` handlers to the immediate children of the `<body>` element. This admittedly ugly hack is necessary to work around a [quirk in iOs’ event delegation](https://www.quirksmode.org/blog/archives/2014/02/mouse_event_bub.html), which would otherwise prevent a tap anywhere outside of the dropdown from triggering the code that closes the dropdown. Once the dropdown is closed, these additional empty `mouseover` handlers are removed.

### Via data attributes

Add `data-bs-toggle="dropdown"` to a link or button to toggle a dropdown.

```
<div class="dropdown">
  <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown trigger
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
```

### Via JavaScript

Dropdowns must have `data-bs-toggle="dropdown"` on their trigger element, regardless of whether you call your dropdown via JavaScript or use the data-api.

Call the dropdowns via JavaScript:

```
const dropdownElementList = document.querySelectorAll('.dropdown-toggle')
const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl))
```

### Options

As options can be passed via data attributes or JavaScript, you can append an option name to `data-bs-`, as in `data-bs-animation="{value}"`. Make sure to change the case type of the option name from “*camelCase*” to “*kebab-case*” when passing the options via data attributes. For example, use `data-bs-custom-class="beautifier"` instead of `data-bs-customClass="beautifier"`.

As of Bootstrap 5.2.0, all components support an **experimental** reserved data attribute `data-bs-config` that can house simple component configuration as a JSON string. When an element has `data-bs-config='{"delay":0, "title":123}'` and `data-bs-title="456"` attributes, the final `title` value will be `456` and the separate data attributes will override values given on `data-bs-config`. In addition, existing data attributes are able to house JSON values like `data-bs-delay='{"show":0,"hide":150}'`.

The final configuration object is the merged result of `data-bs-config`, `data-bs-`, and `js object` where the latest given key-value overrides the others.

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| `autoClose` | boolean, string | `true` | Configure the auto close behavior of the dropdown:  - `true` - the dropdown will be closed by clicking outside or inside the dropdown menu. - `false` - the dropdown will be closed by clicking the toggle button and manually calling `hide` or `toggle` method. (Also will not be closed by pressing `Esc` key) - `'inside'` - the dropdown will be closed (only) by clicking inside the dropdown menu. - `'outside'` - the dropdown will be closed (only) by clicking outside the dropdown menu.  Note: the dropdown can always be closed with the `Esc` key. |
| `boundary` | string, element | `'clippingParents'` | Overflow constraint boundary of the dropdown menu (applies only to Popper’s preventOverflow modifier). By default it’s `clippingParents` and can accept an HTMLElement reference (via JavaScript only). For more information refer to Popper’s [detectOverflow docs](https://github.com/floating-ui/popper-docs/blob/main/docs/v2/utils/detect-overflow.md/#boundary). |
| `display` | string | `'dynamic'` | By default, we use Popper for dynamic positioning. Disable this with `static`. |
| `offset` | array, string, function | `[0, 2]` | Offset of the dropdown relative to its target. You can pass a string in data attributes with comma separated values like: `data-bs-offset="10,20"`. When a function is used to determine the offset, it is called with an object containing the popper placement, the reference, and popper rects as its first argument. The triggering element DOM node is passed as the second argument. The function must return an array with two numbers: [skidding](https://github.com/floating-ui/popper-docs/blob/main/docs/v2/modifiers/offset.md/#skidding-1), [distance](https://github.com/floating-ui/popper-docs/blob/main/docs/v2/modifiers/offset.md/#distance-1). For more information refer to Popper’s [offset docs](https://github.com/floating-ui/popper-docs/blob/main/docs/v2/modifiers/offset.md/#options). |
| `popperConfig` | null, object, function | `null` | To change Bootstrap’s default Popper config, see [Popper’s configuration](https://github.com/floating-ui/popper-docs/blob/main/docs/v2/constructors.md/#options). When a function is used to create the Popper configuration, it’s called with an object that contains the Bootstrap’s default Popper configuration. It helps you use and merge the default with your own configuration. The function must return a configuration object for Popper. |
| `reference` | string, element, object | `'toggle'` | Reference element of the dropdown menu. Accepts the values of `'toggle'`, `'parent'`, an HTMLElement reference or an object providing `getBoundingClientRect`. For more information refer to Popper’s [constructor docs](https://github.com/floating-ui/popper-docs/blob/main/docs/v2/constructors.md/#createpopper) and [virtual element docs](https://github.com/floating-ui/popper-docs/blob/main/docs/v2/virtual-elements.md/). |

#### Using function with `popperConfig`

```
const dropdown = new bootstrap.Dropdown(element, {
  popperConfig(defaultBsPopperConfig) {
    // const newPopperConfig = {...}
    // use defaultBsPopperConfig if needed...
    // return newPopperConfig
  }
})
```

### Methods

| Method | Description |
| --- | --- |
| `dispose` | Destroys an element’s dropdown. (Removes stored data on the DOM element) |
| `getInstance` | Static method which allows you to get the dropdown instance associated to a DOM element, you can use it like this: `bootstrap.Dropdown.getInstance(element)`. |
| `getOrCreateInstance` | Static method which returns a dropdown instance associated to a DOM element or create a new one in case it wasn’t initialized. You can use it like this: `bootstrap.Dropdown.getOrCreateInstance(element)`. |
| `hide` | Hides the dropdown menu of a given navbar or tabbed navigation. |
| `show` | Shows the dropdown menu of a given navbar or tabbed navigation. |
| `toggle` | Toggles the dropdown menu of a given navbar or tabbed navigation. |
| `update` | Updates the position of an element’s dropdown. |

### Events

All dropdown events are fired at the toggling element and then bubbled up. So you can also add event listeners on the `.dropdown-menu`’s parent element. `hide.bs.dropdown` and `hidden.bs.dropdown` events have a `clickEvent` property (only when the original Event type is `click`) that contains an Event Object for the click event.

| Event type | Description |
| --- | --- |
| `hide.bs.dropdown` | Fires immediately when the `hide` instance method has been called. |
| `hidden.bs.dropdown` | Fired when the dropdown has finished being hidden from the user and CSS transitions have completed. |
| `show.bs.dropdown` | Fires immediately when the `show` instance method is called. |
| `shown.bs.dropdown` | Fired when the dropdown has been made visible to the user and CSS transitions have completed. |

```
const myDropdown = document.getElementById('myDropdown')
myDropdown.addEventListener('show.bs.dropdown', event => {
  // do something...
})
```
