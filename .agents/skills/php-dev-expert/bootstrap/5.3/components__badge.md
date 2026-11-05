# Badges · Bootstrap v5.3

> **Fonte / Source:** https://getbootstrap.com/docs/5.3/components/badge

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v5.3.8/site/src/content/docs/components/badge.mdx "View and edit this file on GitHub")

# Badges

Documentation and examples for badges, our small count and labeling component.

On this page
   
**On this page**

---

## Examples

Badges scale to match the size of the immediate parent element by using relative font sizing and `em` units. As of v5, badges no longer have focus or hover styles for links.

### Headings

# Example heading New

## Example heading New

### Example heading New

#### Example heading New

##### Example heading New

###### Example heading New

html

```
<h1>Example heading <span class="badge text-bg-secondary">New</span></h1>
<h2>Example heading <span class="badge text-bg-secondary">New</span></h2>
<h3>Example heading <span class="badge text-bg-secondary">New</span></h3>
<h4>Example heading <span class="badge text-bg-secondary">New</span></h4>
<h5>Example heading <span class="badge text-bg-secondary">New</span></h5>
<h6>Example heading <span class="badge text-bg-secondary">New</span></h6>
```

### Buttons

Badges can be used as part of links or buttons to provide a counter.

Notifications 4

html

```
<button type="button" class="btn btn-primary">
  Notifications <span class="badge text-bg-secondary">4</span>
</button>
```

Note that depending on how they are used, badges may be confusing for users of screen readers and similar assistive technologies. While the styling of badges provides a visual cue as to their purpose, these users will simply be presented with the content of the badge. Depending on the specific situation, these badges may seem like random additional words or numbers at the end of a sentence, link, or button.

Unless the context is clear (as with the “Notifications” example, where it is understood that the “4” is the number of notifications), consider including additional context with a visually hidden piece of additional text.

### Positioned

Use utilities to modify a `.badge` and position it in the corner of a link or button.

Inbox
99+
unread messages

html

```
<button type="button" class="btn btn-primary position-relative">
  Inbox
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
</button>
```

You can also replace the `.badge` class with a few more utilities without a count for a more generic indicator.

Profile
New alerts

html

```
<button type="button" class="btn btn-primary position-relative">
  Profile
  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">New alerts</span>
  </span>
</button>
```

## Background colors

Added in v5.2.0

Set a `background-color` with contrasting foreground `color` with [our `.text-bg-{color}` helpers](helpers__color-background.md). Previously it was required to manually pair your choice of [`.text-{color}`](utilities__colors.md) and [`.bg-{color}`](utilities__background.md) utilities for styling, which you still may use if you prefer.

Primary
Secondary
Success
Danger
Warning
Info
Light
Dark

html

```
<span class="badge text-bg-primary">Primary</span>
<span class="badge text-bg-secondary">Secondary</span>
<span class="badge text-bg-success">Success</span>
<span class="badge text-bg-danger">Danger</span>
<span class="badge text-bg-warning">Warning</span>
<span class="badge text-bg-info">Info</span>
<span class="badge text-bg-light">Light</span>
<span class="badge text-bg-dark">Dark</span>
```

**Accessibility tip:** Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies like screen readers. Please ensure the meaning is obvious from the content itself (e.g., the visible text with a [*sufficient* color contrast](getting-started__accessibility.md#color-contrast)) or is included through alternative means, such as additional text hidden with the `.visually-hidden` class.

## Pill badges

Use the `.rounded-pill` utility class to make badges more rounded with a larger `border-radius`.

Primary
Secondary
Success
Danger
Warning
Info
Light
Dark

html

```
<span class="badge rounded-pill text-bg-primary">Primary</span>
<span class="badge rounded-pill text-bg-secondary">Secondary</span>
<span class="badge rounded-pill text-bg-success">Success</span>
<span class="badge rounded-pill text-bg-danger">Danger</span>
<span class="badge rounded-pill text-bg-warning">Warning</span>
<span class="badge rounded-pill text-bg-info">Info</span>
<span class="badge rounded-pill text-bg-light">Light</span>
<span class="badge rounded-pill text-bg-dark">Dark</span>
```

## CSS

### Variables

Added in v5.2.0

As part of Bootstrap’s evolving CSS variables approach, badges now use local CSS variables on `.badge` for enhanced real-time customization. Values for the CSS variables are set via Sass, so Sass customization is still supported, too.

[scss/\_badge.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_badge.scss)

```
--#{$prefix}badge-padding-x: #{$badge-padding-x};
--#{$prefix}badge-padding-y: #{$badge-padding-y};
@include rfs($badge-font-size, --#{$prefix}badge-font-size);
--#{$prefix}badge-font-weight: #{$badge-font-weight};
--#{$prefix}badge-color: #{$badge-color};
--#{$prefix}badge-border-radius: #{$badge-border-radius};
```

### Sass variables

[scss/\_variables.scss](https://github.com/twbs/bootstrap/blob/v5.3.8/scss/_variables.scss)

```
$badge-font-size:                   .75em;
$badge-font-weight:                 $font-weight-bold;
$badge-color:                       $white;
$badge-padding-y:                   .35em;
$badge-padding-x:                   .65em;
$badge-border-radius:               var(--#{$prefix}border-radius);
```
