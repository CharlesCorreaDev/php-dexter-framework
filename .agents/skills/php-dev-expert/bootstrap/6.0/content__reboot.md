# Reboot · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/content/reboot

---

# Reboot

Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.

Layer: `reboot`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/content/reboot)

On this page…

##### On this page

## Approach

Reboot builds upon Normalize, providing many HTML elements with somewhat opinionated styles using only element selectors. Additional styling is done only with classes. For example, we reboot some `<table>` styles for a simpler baseline and later provide `.table`, `.table-bordered`, and more.

Here are our guidelines and reasons for choosing what to override in Reboot:

- Update some browser default values to use `rem`s instead of `em`s for scalable component spacing.
- Avoid `margin-top`. Vertical margins can collapse, yielding unexpected results. More importantly though, a single direction of `margin` is a simpler mental model.
- For easier scaling across device sizes, block elements should use `rem`s for `margin`s.
- Keep declarations of `font`-related properties to a minimum, using `inherit` whenever possible.

## Root CSS variables

We add `:root` level CSS variables to all CSS bundles to provide real-time customization without the need to always recompile Sass. For example, consider these `:root` CSS variables for common `<body>` styles:

[scss/\_root.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_root.scss)

```
--border-width: #{$border-width},
--border-width-keyline: .5px,
--border-style: #{$border-style},
--border-color: light-dark(var(--gray-200), var(--gray-700)),
--border-color-translucent: color-mix(in oklch, var(--fg-body) 15%, transparent),
```

In practice, those variables are then applied in Reboot like so:

[scss/content/\_reboot.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/content/_reboot.scss)

```
body {
  margin: 0; // 1
  font-family: var(--body-font-family);
  font-size: var(--body-font-size);
  font-weight: var(--body-font-weight);
  line-height: var(--body-line-height);
  color: var(--fg-body);
  text-align: var(--body-text-align);
  background-color: var(--bg-body); // 2
  -webkit-text-size-adjust: 100%; // 3
  -webkit-tap-highlight-color: transparent; // 4
}
```

Which allows you to make real-time customizations however you like:

HTML

```
          <body style="--bs-body-color: #333;">
  <!-- ... -->
</body>
```

## Page defaults

The `<html>` and `<body>` elements are updated to provide better page-wide defaults. More specifically:

- The `box-sizing` is globally set on every element—including `*::before` and `*::after`, to `border-box`. This ensures that the declared width of element is never exceeded due to padding or border.
  - No base `font-size` is declared on the `<html>`, but `16px` is assumed (the browser default). `font-size: 1rem` is applied on the `<body>` for easy responsive type-scaling via media queries while respecting user preferences and ensuring a more accessible approach. This browser default can be overridden by modifying the `$font-size-root` variable.
- The `<body>` also sets a global `font-family`, `font-weight`, `line-height`, and `color`. This is inherited later by some form elements to prevent font inconsistencies.
- For safety, the `<body>` has a declared `background-color`, defaulting to `#fff`.

## Native font stack

Bootstrap utilizes a “native font stack” or “system font stack” for optimum text rendering on every device and OS. These system fonts have been designed specifically with today’s devices in mind, with improved rendering on screens, variable font support, and more. Read more about [native font stacks in this *Smashing Magazine* article](https://www.smashingmagazine.com/2015/11/using-system-ui-fonts-practical-guide/).

The stack starts with `-apple-system` and `BlinkMacSystemFont` for Apple devices, then `Segoe UI` for Windows, `Roboto` for Android, and `Noto Sans` or `Liberation Sans` for Linux. `Arial` and `sans-serif` are the web fallbacks, and four emoji fonts close the list.

The stack omits the `system-ui` keyword. On some systems, `system-ui` resolves to the user interface font of the locale. That font can show non-Latin text with the wrong glyphs—see [issue #42703](https://github.com/twbs/bootstrap/issues/42703).

[scss/\_root.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_root.scss)

```
// The stack omits system-ui. It resolves to the user interface font of the
// locale, which shows non-Latin text incorrectly. See twbs/bootstrap#42703.
--body-font-family: "-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', 'Noto Sans', 'Liberation Sans', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'",
--body-font-size: 1rem,
--body-font-weight: var(--font-weight-normal),
--body-line-height: 1.5,
```

Note that because the font stack includes emoji fonts, many common symbol/dingbat Unicode characters will be rendered as multicolored pictographs. Their appearance will vary, depending on the style used in the browser/platform’s native emoji font, and they won’t be affected by any CSS `color` styles.

This `font-family` is applied to the `<body>` and automatically inherited globally throughout Bootstrap. To switch the global `font-family`, update `--body-font-family`.

## Headings

All heading elements—`<h1>`—`<h6>` have their `margin-top` removed, `margin-bottom: .5rem` set, and `line-height` tightened. While headings inherit their `color` by default, you can also override it via optional CSS variable, `--bs-heading-color`.

You can also use the `.h1`–`.h6` classes to style headings without using the HTML elements.

| Heading | Example |
| --- | --- |
| `<h1></h1>` | h1. Bootstrap heading |
| `<h2></h2>` | h2. Bootstrap heading |
| `<h3></h3>` | h3. Bootstrap heading |
| `<h4></h4>` | h4. Bootstrap heading |
| `<h5></h5>` | h5. Bootstrap heading |
| `<h6></h6>` | h6. Bootstrap heading |

## Paragraphs

All `<p>` elements have their `margin-top` removed and `margin-bottom: 1rem` set for easy spacing.

This is an example paragraph.

HTML

```
<p>This is an example paragraph.</p>
```

## Links

Links have a default `color` and underline applied. While links change on `:hover`, they don’t change based on whether someone `:visited` the link. They also receive no special `:focus` styles.

[This is an example link](#)

HTML

```
<a href="#">This is an example link</a>
```

Use [`.link-{%}`](utilities__link.md#link-opacity) utilities to change the link color opacity.

[This is an example link](#)

HTML

```
<a href="#" class="link-50">This is an example link</a>
```

Use the theme utility classes to change the link color.

[Primary link](#)
[Accent link](#)
[Success link](#)
[Danger link](#)
[Warning link](#)
[Info link](#)
[Inverse link](#)
[Secondary link](#)

HTML

```
<a href="#" class="theme-primary">Primary link</a>
<a href="#" class="theme-accent">Accent link</a>
<a href="#" class="theme-success">Success link</a>
<a href="#" class="theme-danger">Danger link</a>
<a href="#" class="theme-warning">Warning link</a>
<a href="#" class="theme-info">Info link</a>
<a href="#" class="theme-inverse">Inverse link</a>
<a href="#" class="theme-secondary">Secondary link</a>
```

Placeholder links—those without an `href`—are targeted with a more specific selector and have their `color` and `text-decoration` reset to their default values.

This is a placeholder link

HTML

```
<a>This is a placeholder link</a>
```

## Horizontal rules

The `<hr>` element has been simplified. Similar to browser defaults, `<hr>`s are styled via `border-top`, have a default `opacity: .25`, and automatically inherit their `border-color` via `color`, including when `color` is set via the parent. They can be modified with text, border, and opacity utilities.

---

---

---

---

HTML

```
<hr>

<div class="fg-success">
  <hr>
</div>

<hr class="border border-danger border-2 opacity-50">
<hr class="border border-primary border-3 opacity-75">
```

## Lists

All lists—`<ul>`, `<ol>`, and `<dl>`—have their `margin-top` removed and a `margin-bottom: 1rem`. Nested lists have no `margin-bottom`. We’ve also reset the `padding-left` on `<ul>` and `<ol>` elements.

- All lists have their top margin removed
- And their bottom margin normalized
- Nested lists have no bottom margin
  - This way they have a more even appearance
  - Particularly when followed by more list items
- The left padding has also been reset

1. Here’s an ordered list
2. With a few list items
3. It has the same overall look
4. As the previous unordered list

For simpler styling, clear hierarchy, and better spacing, description lists have updated `margin`s. `<dd>`s reset `margin-left` to `0` and add `margin-bottom: .5rem`. `<dt>`s are **bolded**.

Description lists
:   A description list is perfect for defining terms.

Term
:   Definition for the term.
:   A second definition for the same term.

Another term
:   Definition for this other term.

## Inline code

Wrap inline snippets of code with `<code>`. Be sure to escape HTML angle brackets.

For example, `<section>` should be wrapped as inline.

HTML

```
For example, <code>&lt;section&gt;</code> should be wrapped as inline.
```

## Code blocks

Use `<pre>`s for multiple lines of code. Once again, be sure to escape any angle brackets in the code for proper rendering. The `<pre>` element is reset to remove its `margin-top` and use `rem` units for its `margin-bottom`.

```
<p>Sample text here...</p>
<p>And another line of sample text here...</p>
```

HTML

```
<pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;
&lt;p&gt;And another line of sample text here...&lt;/p&gt;
</code></pre>
```

## Variables

For indicating variables use the `<var>` tag.

y = mx + b

HTML

```
<var>y</var> = <var>m</var><var>x</var> + <var>b</var>
```

## User input

Use the `<kbd>` to indicate input that is typically entered via keyboard.

To switch directories, type `cd` followed by the name of the directory.  
To edit settings, press `Ctrl` + `,`

HTML

```
To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
To edit settings, press <kbd>Ctrl</kbd> + <kbd>,</kbd>
```

## Sample output

For indicating sample output from a program use the `<samp>` tag.

`This text is meant to be treated as sample output from a computer program.`

HTML

```
<samp>This text is meant to be treated as sample output from a computer program.</samp>
```

## Tables

Tables are slightly adjusted to style `<caption>`s, collapse borders, and ensure consistent `text-align` throughout. Additional changes for borders, padding, and more come with [the `.table` class](content__tables.md).

This is an example table, and this is its caption to describe the contents.

| Table heading | Table heading | Table heading | Table heading |
| --- | --- | --- | --- |
| Table cell | Table cell | Table cell | Table cell |
| Table cell | Table cell | Table cell | Table cell |
| Table cell | Table cell | Table cell | Table cell |

HTML

```
<table>
  <caption>
    This is an example table, and this is its caption to describe the contents.
  </caption>
  <thead>
    <tr>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
  </tbody>
</table>
```

## Forms

Various form elements have been rebooted for simpler base styles. Here are some of the most notable changes:

- `<fieldset>`s have no borders, padding, or margin so they can be easily used as wrappers for individual inputs or groups of inputs.
- `<legend>`s, like fieldsets, have also been restyled to be displayed as a heading of sorts.
- `<label>`s are set to `display: inline-block` to allow `margin` to be applied.
- `<input>`s, `<select>`s, `<textarea>`s, and `<button>`s are mostly addressed by Normalize, but Reboot removes their `margin` and sets `line-height: inherit`, too.
- `<textarea>`s are modified to only be resizable vertically as horizontal resizing often “breaks” page layout.
- `<button>`s and `<input>` button elements have `cursor: pointer` when `:not(:disabled)`.

These changes, and more, are demonstrated below.

Some date inputs types are [not fully supported](https://caniuse.com/input-datetime) by the latest versions of Safari and Firefox.

Example legend

Example input

Example email

Example telephone

Example url

Example number

Example search

Example range

Example file input

Example select

Choose...

Option 1
Option 2
Option 3

Option 4
Option 5
Option 6

Check this checkbox

Option one is this and that

Option two is something else that’s also super long to demonstrate the wrapping of these fancy form controls.

Option three is disabled

Example textarea

Example date

Example time

Example password

Example datetime-local

Example week

Example month

Example color

Example output
100

Button submit

Button submit

### Pointers on buttons

Reboot includes an enhancement for `role="button"` to change the default cursor to `pointer`. Add this attribute to elements to help indicate elements are interactive. This role isn’t necessary for `<button>` elements, which get their own `cursor` change.

Non-button element button

HTML

```
<span role="button" tabindex="0">Non-button element button</span>
```

## Misc elements

### Address

The `<address>` element is updated to reset the browser default `font-style` from `italic` to `normal`. `line-height` is also now inherited, and `margin-bottom: 1rem` has been added. `<address>`s are for presenting contact information for the nearest ancestor (or an entire body of work). Preserve formatting by ending lines with `<br>`.

**ACME Corporation**  
1123 Fictional St,  
San Francisco, CA 94103  
P: (123) 456-7890

**Full Name**  
[first.last@example.com](mailto:first.last@example.com)

### Blockquote

The default `margin` on blockquotes is `1em 40px`, so we reset that to `0 0 1rem` for something more consistent with other elements.

> A well-known quote, contained in a blockquote element.

Someone famous in Source Title

### Inline elements

The `<abbr>` element receives basic styling to make it stand out amongst paragraph text.

The HTML abbreviation element.

### Summary

The default `cursor` on summary is `text`, so we reset that to `pointer` to convey that the element can be interacted with by clicking on it.

Some details

More info about the details.

Even more details

Here are even more details about the details.

## HTML5 `[hidden]` attribute

HTML5 adds [a new global attribute named `[hidden]`](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/hidden), which is styled as `display: none` by default. Borrowing an idea from [PureCSS](https://purecss.io/), we improve upon this default by making `[hidden] { display: none !important; }` to help prevent its `display` from getting accidentally overridden.

HTML

```
          <input type="text" hidden>
```

Since `[hidden]` is not compatible with jQuery’s `$(...).hide()` and `$(...).show()` methods, we don’t specifically endorse `[hidden]` over other techniques for managing the `display` of elements.

To merely toggle the visibility of an element, meaning its `display` is not modified and the element can still affect the flow of the document, use [the `.invisible` class](utilities__visibility.md) instead.

## iframe color-scheme

The `<iframe>` element is updated to set `color-scheme: light dark`. A browser paints an opaque `background: canvas` behind an iframe when the embedded document uses a different color scheme than the iframe element. On a dark page that shows as a white box.

An embedded document follows the system preference. It cannot see your `data-bs-theme` attribute. We therefore pin every iframe to the system preference too. This keeps an embed transparent, also when you force a theme with `data-bs-theme`.

HTML

```
<div class="bg-body fg-body p-3" data-bs-theme="dark">
  <iframe class="w-100" style="color-scheme: unset" src="data:text/html,<!DOCTYPE html><html><meta name='color-scheme' content='light dark'><body style='background-color:transparent;color:gray;'><h4>Default iframe</h4></body></html>"></iframe>
  <iframe class="w-100" src="data:text/html,<!DOCTYPE html><html><meta name='color-scheme' content='light dark'><body style='background-color:transparent;color:gray;'><h4>iframe with color-scheme: light-dark</h4></body></html>"></iframe>
  <iframe class="w-100" src="data:text/html,<!DOCTYPE html><html><body style='background-color:transparent;color:gray;'><h4>Embed that declares no color scheme</h4></body></html>"></iframe>
</div>
```

The first two embeds declare `<meta name="color-scheme" content="light dark">`, so they follow the system preference and stay transparent. The third declares nothing, like most third-party embeds. Set your system to dark mode to see the browser paint a white box behind it. Our rule cannot prevent that — read the next section.

### Third-party embeds with no dark mode

Some third-party embeds have no dark mode. Payment buttons, comment widgets, and review widgets are common examples. The browser paints a white background behind such an embed when the system is in dark mode. This is a browser safeguard. It keeps the light content of the embed readable. Bootstrap cannot remove it for you.

Add the `.color-scheme-light` [color scheme utility](utilities__color-scheme.md) to that one iframe. The background becomes transparent again.

HTML

```
          <iframe class="color-scheme-light" src="..."></iframe>
```

Use this only for an embed that has no dark mode. Safari and Firefox apply the value to the embedded document. An embed that has a dark mode then shows in light mode.
