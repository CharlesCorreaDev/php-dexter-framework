# Link · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/link

---

# Link

Link utilities are used to stylize your anchors to adjust their color and opacity.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/link)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .link-10 | color: color-mix(in oklch, var(--bs-link-color) 10%, transparent); |
| .link-20 | color: color-mix(in oklch, var(--bs-link-color) 20%, transparent); |
| .link-30 | color: color-mix(in oklch, var(--bs-link-color) 30%, transparent); |
| .link-40 | color: color-mix(in oklch, var(--bs-link-color) 40%, transparent); |
| .link-50 | color: color-mix(in oklch, var(--bs-link-color) 50%, transparent); |
| .link-60 | color: color-mix(in oklch, var(--bs-link-color) 60%, transparent); |
| .link-70 | color: color-mix(in oklch, var(--bs-link-color) 70%, transparent); |
| .link-80 | color: color-mix(in oklch, var(--bs-link-color) 80%, transparent); |
| .link-90 | color: color-mix(in oklch, var(--bs-link-color) 90%, transparent); |
| .link-100 | color: var(--bs-link-color); |

## Link opacity

Change the alpha opacity of the link `rgba()` color value with utilities. Please be aware that changes to a color’s opacity can lead to links with [*insufficient* contrast](getting-started__accessibility.md#color-contrast).

[Link opacity 10](#)

[Link opacity 20](#)

[Link opacity 30](#)

[Link opacity 40](#)

[Link opacity 50](#)

[Link opacity 60](#)

[Link opacity 70](#)

[Link opacity 80](#)

[Link opacity 90](#)

[Link opacity 100](#)

HTML

```
<p><a class="link-10" href="#">Link opacity 10</a></p>
<p><a class="link-20" href="#">Link opacity 20</a></p>
<p><a class="link-30" href="#">Link opacity 30</a></p>
<p><a class="link-40" href="#">Link opacity 40</a></p>
<p><a class="link-50" href="#">Link opacity 50</a></p>
<p><a class="link-60" href="#">Link opacity 60</a></p>
<p><a class="link-70" href="#">Link opacity 70</a></p>
<p><a class="link-80" href="#">Link opacity 80</a></p>
<p><a class="link-90" href="#">Link opacity 90</a></p>
<p><a class="link-100" href="#">Link opacity 100</a></p>
```

You can even change the opacity level on hover.

[Link hover opacity 10](#)

[Link hover opacity 20](#)

[Link hover opacity 30](#)

[Link hover opacity 40](#)

[Link hover opacity 50](#)

[Link hover opacity 60](#)

[Link hover opacity 70](#)

[Link hover opacity 80](#)

[Link hover opacity 90](#)

[Link hover opacity 100](#)

HTML

```
<p><a class="hover:link-10" href="#">Link hover opacity 10</a></p>
<p><a class="hover:link-20" href="#">Link hover opacity 20</a></p>
<p><a class="hover:link-30" href="#">Link hover opacity 30</a></p>
<p><a class="hover:link-40" href="#">Link hover opacity 40</a></p>
<p><a class="hover:link-50" href="#">Link hover opacity 50</a></p>
<p><a class="hover:link-60" href="#">Link hover opacity 60</a></p>
<p><a class="hover:link-70" href="#">Link hover opacity 70</a></p>
<p><a class="hover:link-80" href="#">Link hover opacity 80</a></p>
<p><a class="hover:link-90" href="#">Link hover opacity 90</a></p>
<p><a class="hover:link-100" href="#">Link hover opacity 100</a></p>
```

## Colored links

Links can be colored using the theme color utilities.

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
<p><a href="#" class="theme-primary underline-offset-2 underline-20 hover:underline-100">Primary link</a></p>
<p><a href="#" class="theme-accent underline-offset-2 underline-20 hover:underline-100">Accent link</a></p>
<p><a href="#" class="theme-success underline-offset-2 underline-20 hover:underline-100">Success link</a></p>
<p><a href="#" class="theme-danger underline-offset-2 underline-20 hover:underline-100">Danger link</a></p>
<p><a href="#" class="theme-warning underline-offset-2 underline-20 hover:underline-100">Warning link</a></p>
<p><a href="#" class="theme-info underline-offset-2 underline-20 hover:underline-100">Info link</a></p>
<p><a href="#" class="theme-inverse underline-offset-2 underline-20 hover:underline-100">Inverse link</a></p>
<p><a href="#" class="theme-secondary underline-offset-2 underline-20 hover:underline-100">Secondary link</a></p>
```

Accessibility Tip: Using color to convey meaning

Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies like screen readers. Please ensure the meaning is obvious from the content itself (e.g., the visible text with a [*sufficient* color contrast](getting-started__accessibility.md#color-contrast)) or is included through alternative means, such as additional text hidden with the `.visually-hidden` class.

## CSS

In addition to the following Sass functionality, consider reading about our included [CSS custom properties](getting-started__css-variables.md) (aka CSS variables) for colors and more.

### Sass utilities API

Link utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"link-opacity": (
  property: color,
  // css-var: true,
  class: link,
  state: hover,
  values: theme-opacity-values(--link-color)
),
```
