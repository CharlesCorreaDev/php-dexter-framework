# User select · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/user-select

---

# User select

Control how users can select text content with user-select utilities.

MDN[MDN Reference](https://developer.mozilla.org/en-US/docs/Web/CSS/user-select)

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/user-select)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .user-select-all | -webkit-user-select: all; user-select: all; |
| .user-select-auto | -webkit-user-select: auto; user-select: auto; |
| .user-select-text | -webkit-user-select: text; user-select: text; |
| .user-select-none | -webkit-user-select: none; user-select: none; |

## Overview

Change the way in which the content is selected when the user interacts with it using user-select utilities.

## Basic usage

This paragraph will be entirely selected when clicked by the user.

This paragraph has default select behavior.

This paragraph will only allow the text to be selected when clicked by the user, even if the CSS `user-select` property is set to something else.

This paragraph will not be selectable when clicked by the user.

HTML

```
<p class="user-select-all">This paragraph will be entirely selected when clicked by the user.</p>
<p class="user-select-auto">This paragraph has default select behavior.</p>
<p class="user-select-text">This paragraph will only allow the text to be selected when clicked by the user, even if the CSS <code>user-select</code> property is set to something else.</p>
<p class="user-select-none">This paragraph will not be selectable when clicked by the user.</p>
```

## Use cases

- **`.user-select-all`** - Useful for code snippets, IDs, or other content users might want to copy entirely
- **`.user-select-auto`** - Default browser behavior, allows normal text selection
- **`.user-select-text`** - Forces text to remain selectable, useful for overriding a `user-select: none` set by an ancestor
- **`.user-select-none`** - Prevents text selection, useful for UI elements, buttons, or decorative text

**Accessibility note:** Be careful when using `user-select: none` as it can interfere with assistive technologies and keyboard navigation. Ensure that important content remains accessible through other means.

## CSS

### Sass utilities API

User select utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"user-select": (
  property: user-select,
  values: all auto text none
),
```
