# Pointer events · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/pointer-events

---

# Pointer events

Control how elements respond to mouse and touch interactions with pointer-events utilities.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/pointer-events)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/pointer-events)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .pe-none | pointer-events: none; |
| .pe-auto | pointer-events: auto; |

## Overview

Bootstrap provides `.pe-none` and `.pe-auto` classes to prevent or add element interactions through the `pointer-events` CSS property.

## Basic usage

[This link](#) can not be clicked.

[This link](#) can be clicked (this is default behavior).

[This link](#) can not be clicked because the `pointer-events` property is inherited from its parent. However, [this link](#) has a `pe-auto` class and can be clicked.

HTML

```
<p><a href="#" class="pe-none" tabindex="-1" aria-disabled="true">This link</a> can not be clicked.</p>
<p><a href="#" class="pe-auto">This link</a> can be clicked (this is default behavior).</p>
<p class="pe-none"><a href="#" tabindex="-1" aria-disabled="true">This link</a> can not be clicked because the <code>pointer-events</code> property is inherited from its parent. However, <a href="#" class="pe-auto">this link</a> has a <code>pe-auto</code> class and can be clicked.</p>
```

## Important considerations

The `.pe-none` class (and the `pointer-events` CSS property it sets) only prevents interactions with a pointer (mouse, stylus, touch). Links and controls with `.pe-none` are, by default, still focusable and actionable for keyboard users.

To ensure that they are completely neutralized even for keyboard users, you may need to add further attributes such as:

- `tabindex="-1"` (to prevent them from receiving keyboard focus)
- `aria-disabled="true"` (to convey the fact they are effectively disabled to assistive technologies)
- JavaScript to completely prevent them from being actionable

## Better alternatives

If possible, the simpler solution is:

- **For form controls**: Add the `disabled` HTML attribute
- **For links**: Remove the `href` attribute, making it a non-interactive anchor or placeholder link

**Accessibility warning:** Using `pointer-events: none` can create accessibility barriers. Always ensure that disabled elements are properly marked up with appropriate ARIA attributes and that keyboard users can’t accidentally focus them.

## Use cases

- **`.pe-none`** - Disable interactions on overlays, loading states, or temporarily disabled elements
- **`.pe-auto`** - Re-enable interactions on child elements when parent has `pe-none`

## CSS

### Sass utilities API

Pointer events utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"pointer-events": (
  property: pointer-events,
  class: pe,
  values: none auto,
),
```
