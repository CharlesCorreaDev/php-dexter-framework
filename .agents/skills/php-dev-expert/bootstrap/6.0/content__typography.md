# Typography · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/content/typography

---

# Typography

Documentation and examples for Bootstrap typography, including global settings, headings, body text, lists, and more.

Layer: `content`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/content/typography)

On this page…

##### On this page

## Global settings

Bootstrap sets basic global display, typography, and link styles. When more control is needed, check out our text utilities.

- Use a [native font stack](content__reboot.md#native-font-stack) that selects the best `font-family` for each OS and device.
- For a more inclusive and accessible type scale, we use the browser’s default root `font-size` (typically 16px) so visitors can customize their browser defaults as needed.
- Use the `--body-font-family`, `--body-font-size`, and `--body-line-height` attributes as our typographic base applied to the `<body>`.
- Set the global link color via `--bs-link-color`.
- Use `--bs-body-bg` to set a `background-color` on the `<body>` (`#fff` by default).

These styles can be found within `_reboot.scss`, and the global variables are defined in `_config.scss`. Make sure to set `--body-font-size` in `rem`.

## Headings

As mentioned in [Reboot](content__reboot.md#headings), all HTML headings, `<h1>` through `<h6>`, are available, as element or class selectors.

| Heading | Example |
| --- | --- |
| `<h1></h1>` | h1. Bootstrap heading |
| `<h2></h2>` | h2. Bootstrap heading |
| `<h3></h3>` | h3. Bootstrap heading |
| `<h4></h4>` | h4. Bootstrap heading |
| `<h5></h5>` | h5. Bootstrap heading |
| `<h6></h6>` | h6. Bootstrap heading |

HTML

```
          <h1>h1. Bootstrap heading</h1>
<h2>h2. Bootstrap heading</h2>
<h3>h3. Bootstrap heading</h3>
<h4>h4. Bootstrap heading</h4>
<h5>h5. Bootstrap heading</h5>
<h6>h6. Bootstrap heading</h6>

<p class="h1">h1. Bootstrap heading</p>
<p class="h2">h2. Bootstrap heading</p>
<p class="h3">h3. Bootstrap heading</p>
<p class="h4">h4. Bootstrap heading</p>
<p class="h5">h5. Bootstrap heading</p>
<p class="h6">h6. Bootstrap heading</p>
```

Head to our [font size utilities](utilities__font-size.md) for more control over the `font-size` and `line-height`.

## Global font sizes

Headings are sized with our responsive font-size root CSS variables. You can use these yourself, or with our heading classes, [font size utilities](utilities__font-size.md), and [text size utilities](utilities__font-size.md#with-line-height) (where you’ll get a `line-height` as well).

Learn more about how these work down below in the [CSS](#css) section.

.fs-xs

.fs-sm

.fs-md

.fs-lg

.fs-xl

.fs-2xl

.fs-3xl

.fs-4xl

.fs-5xl

.fs-6xl

HTML

```
<div class="fs-xs">.fs-xs</div>
<div class="fs-sm">.fs-sm</div>
<div class="fs-md">.fs-md</div>
<div class="fs-lg">.fs-lg</div>
<div class="fs-xl">.fs-xl</div>
<div class="fs-2xl">.fs-2xl</div>
<div class="fs-3xl">.fs-3xl</div>
<div class="fs-4xl">.fs-4xl</div>
<div class="fs-5xl">.fs-5xl</div>
<div class="fs-6xl">.fs-6xl</div>
```

## Inline text elements

Styling for common inline HTML5 elements.

You can use the mark tag to highlight text.

~~This line of text is meant to be treated as deleted text.~~

~~This line of text is meant to be treated as no longer accurate.~~

This line of text is meant to be treated as an addition to the document.

This line of text will render as underlined.

This line of text is meant to be treated as fine print.

**This line rendered as bold text.**

*This line rendered as italicized text.*

HTML

```
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined.</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>
```

Beware that those tags should be used for semantic purpose:

- `<mark>` represents text which is marked or highlighted for reference or notation purposes.
- `<small>` represents side-comments and small print, like copyright and legal text.
- `<s>` represents element that are no longer relevant or no longer accurate.
- `<u>` represents a span of inline text which should be rendered in a way that indicates that it has a non-textual annotation.

If you want to style your text, you should use the following classes instead:

- `.mark` will apply the same styles as `<mark>`.
- `.small` will apply the same styles as `<small>`.
- `.text-decoration-underline` will apply the same styles as `<u>`.
- `.text-decoration-line-through` will apply the same styles as `<s>`.

While not shown above, feel free to use `<b>` and `<i>` in HTML5. `<b>` is meant to highlight words or phrases without conveying additional importance, while `<i>` is mostly for voice, technical terms, etc.

## Text utilities

Utility classes are available for most common text-related CSS properties.

- [Font family](utilities__font-family.md)
- [Font size](utilities__font-size.md)
- [Font style](utilities__font-style.md)
- [Font weight](utilities__font-weight.md)
- [Line height](utilities__line-height.md)
- [Text alignment](utilities__text-alignment.md)
- [Text transform](utilities__text-transform.md)
- [Text decoration](utilities__text-decoration.md)
- [Text wrapping](utilities__text-wrapping.md)
- [Vertical alignment](utilities__vertical-align.md)

Change text alignment, transform, style, weight, line-height, decoration and color with our text and [color utilities](utilities__colors.md).

## Abbreviations

Stylized implementation of HTML’s `<abbr>` element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline and gain a help cursor to provide additional context on hover and to users of assistive technologies.

Add `.initialism` to an abbreviation for a slightly smaller font-size.

attr

HTML

HTML

```
<p><abbr title="attribute">attr</abbr></p>
<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
```

## Blockquotes

Wrap `<blockquote class="blockquote">` around any HTML to quote blocks of content from another source within your document. We make `.blockquote` a flex container for easier spacing, which means you can use [flex utilities](utilities__flex.md) for alignment, spacing, and more.

> A well-known quote, contained in a blockquote element.

HTML

```
<blockquote class="blockquote">
  <p>A well-known quote, contained in a blockquote element.</p>
</blockquote>
```

> A well-known quote, contained in a blockquote element.
>
> And the second part of the original quote—like another paragraph—would be placed here as well. This paragraph is a little longer to show how text would wrap within the blockquote styling.

HTML

```
<blockquote class="blockquote">
  <p>A well-known quote, contained in a blockquote element.</p>
  <p>And the second part of the original quote—like another paragraph—would be placed here as well. This paragraph is a little longer to show how text would wrap within the blockquote styling.</p>
</blockquote>
```

### Sources

The HTML spec requires that blockquote attribution be placed **outside** the `<blockquote>`. In this case, use a `<figure>` element and place the `.blockquote` class on it instead of the `<blockquote>` element. This ensures access to CSS variables across blockquote and attribution element.

For source attribution, use a `<figcaption>` or a block level element (e.g., `<p>`) with the `.blockquote-footer` class. Wrap the name of any source work in `<cite>` as well.

> A well-known quote, contained in a blockquote element.

Someone famous in Source Title

HTML

```
<figure class="blockquote">
  <blockquote>
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
```

### Nested

> A well-known quote, contained in a blockquote element.
>
> > A well-known quote, contained in a blockquote element.

HTML

```
<blockquote class="blockquote">
  <p>A well-known quote, contained in a blockquote element.</p>
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
</blockquote>
```

### Alignment

Use text or flex utilities as needed to change the alignment of your blockquote.

> A well-known quote, contained in a blockquote element.

Someone famous in Source Title

HTML

```
<figure class="blockquote text-center">
  <blockquote>
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
```

> A well-known quote, contained in a blockquote element.

Someone famous in Source Title

HTML

```
<figure class="blockquote align-items-end">
  <blockquote>
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
```

## Lists

### Unstyled

Remove the default `list-style` and left margin on list items (immediate children only). **This only applies to immediate children list items**, meaning you will need to add the class for any nested lists as well.

- This is a list.
- It appears completely unstyled.
- Structurally, it’s still a list.
- However, this style only applies to immediate child elements.
- Nested lists:
  - are unaffected by this style
  - will still show a bullet
  - and have appropriate left margin
- This may still come in handy in some situations.

HTML

```
<ul class="list-unstyled">
  <li>This is a list.</li>
  <li>It appears completely unstyled.</li>
  <li>Structurally, it’s still a list.</li>
  <li>However, this style only applies to immediate child elements.</li>
  <li>Nested lists:
    <ul>
      <li>are unaffected by this style</li>
      <li>will still show a bullet</li>
      <li>and have appropriate left margin</li>
    </ul>
  </li>
  <li>This may still come in handy in some situations.</li>
</ul>
```

### Inline

Remove a list’s bullets and apply some light `margin` with a combination of two classes, `.list-inline` and `.list-inline-item`.

- This is a list item.
- And another one.
- But they’re displayed inline.

HTML

```
<ul class="list-inline">
  <li class="list-inline-item">This is a list item.</li>
  <li class="list-inline-item">And another one.</li>
  <li class="list-inline-item">But they’re displayed inline.</li>
</ul>
```

### Description list alignment

Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a `.text-truncate` class to truncate the text with an ellipsis.

Description lists
:   A description list is perfect for defining terms.

Term
:   Definition for the term.

    And some more placeholder definition text.

Another term
:   This definition is short, so no extra paragraphs or anything.

Truncated term is truncated
:   This can be useful when space is tight. Adds an ellipsis at the end.

Nesting
:   Nested definition list
    :   I heard you like definition lists. Let me put a definition list inside your definition list.

HTML

```
<dl class="row">
  <dt class="sm:col-3">Description lists</dt>
  <dd class="sm:col-9">A description list is perfect for defining terms.</dd>

  <dt class="sm:col-3">Term</dt>
  <dd class="sm:col-9">
    <p>Definition for the term.</p>
    <p>And some more placeholder definition text.</p>
  </dd>

  <dt class="sm:col-3">Another term</dt>
  <dd class="sm:col-9">This definition is short, so no extra paragraphs or anything.</dd>

  <dt class="sm:col-3 text-truncate">Truncated term is truncated</dt>
  <dd class="sm:col-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>

  <dt class="sm:col-3">Nesting</dt>
  <dd class="sm:col-9">
    <dl class="row">
      <dt class="sm:col-4">Nested definition list</dt>
      <dd class="sm:col-8">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
    </dl>
  </dd>
</dl>
```

## Responsive font sizes

Bootstrap uses CSS’s `clamp()` function to enable responsive font sizes, allowing text to scale more naturally across device and viewport sizes.

## CSS

### Variables

All `--font-size-*` and `--line-height-*` CSS custom properties are defined in `_root.scss`, generated from the `$font-sizes` Sass map in `_config.scss`.

CSS

```
          :root {
  /* Abbreviated list for example purposes… */
  --font-size-xs: 0.75rem;
  --font-size-sm: 0.875rem;
  --font-size-md: 1rem;
  --font-size-lg: 1.25rem;
  --font-size-xl: 1.5rem;
  /* Plus the rest… */
}
```

Headings, paragraphs, description lists, and `<legend>` elements—covered here and in [Reboot](content__reboot.md)—use dedicated CSS variables for real-time customization, defined in `_reboot.scss`.

[scss/content/\_reboot.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/content/_reboot.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$type-tokens: defaults(
  (
    --heading-margin-bottom: var(--spacer-2),
    --heading-font-family: null,
    --heading-font-style: null,
    --heading-line-height: 1.2,
    --paragraph-margin-bottom: var(--spacer),
    --legend-margin-bottom: var(--spacer-2),
    --legend-font-size: 1.5rem,
    --legend-font-weight: null,
    --list-padding-x: var(--spacer-7),
  ),
  $type-tokens
);
```

### Sass maps

The `$font-sizes` map in `_config.scss` defines Bootstrap’s type scale. Each key (e.g., `xs`, `md`, `3xl`) holds a nested map with `font-size` and `line-height` values. Larger sizes use `clamp()` for responsive scaling.

[scss/\_config.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_config.scss)

```
$font-sizes: ();
// stylelint-disable-next-line scss/dollar-variable-default
$font-sizes: defaults(
  (
    "xs": (
      "font-size": .75rem,
      "line-height": 1.25
    ),
    "sm": (
      "font-size": .875rem,
      "line-height": 1.5
    ),
    "md": (
      "font-size": 1rem,
      "line-height": 1.5
    ),
    "lg": (
      "font-size": clamp(1.125rem, 1rem + .625vw, 1.25rem),
      "line-height": 1.5
    ),
    "xl": (
      "font-size": clamp(1.5rem, 1.1rem + .75vw, 1.75rem),
      "line-height": calc(2.5 / 1.75)
    ),
    "2xl": (
      "font-size": clamp(1.75rem, 1.3rem + 1vw, 2rem),
      "line-height": calc(3 / 2.25)
    ),
    "3xl": (
      "font-size": clamp(2rem, 1.5rem + 1.875vw, 2.5rem),
      "line-height": 1.2
    ),
    "4xl": (
      "font-size": clamp(2.25rem, 1.75rem + 2.5vw, 3rem),
      "line-height": 1.1
    ),
    "5xl": (
      "font-size": clamp(3rem, 2rem + 5vw, 4rem),
      "line-height": 1.1
    ),
    "6xl": (
      "font-size": clamp(3.75rem, 2.5rem + 6.25vw, 5rem),
      "line-height": 1
    ),
  ),
  $font-sizes
);
```

You can override individual keys, replace the entire map, or remove keys by setting them to `null`:

SCSS

```
          // Per-key override
@use "bootstrap/scss/config" with (
  $font-sizes: ("xs": ("font-size": .625rem, "line-height": 1.25))
);

// Remove a key
@use "bootstrap/scss/config" with (
  $font-sizes: ("6xl": null)
);
```

### Sass loops

The font-size map is used to generate `--font-size-*` and `--line-height-*` CSS custom properties in `_root.scss`, as well as `.fs-*` and `.text-*` utility classes in `_utilities.scss`.

[scss/\_root.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_root.scss)

```
// Generate font-size and line-height tokens
@each $name, $props in $font-sizes {
  $root-tokens: map.set($root-tokens, --font-size-#{$name}, map.get($props, "font-size"));
  $root-tokens: map.set($root-tokens, --line-height-#{$name}, map.get($props, "line-height"));
}
```

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"font-size": (
  property: font-size,
  class: fs,
  values: map-get-nested($font-sizes, "font-size")
),
"text-size": (
  property: (
    "font-size": 1rem,
    "line-height": 1.5
  ),
  class: text,
  values: $font-sizes
),
```
