# Breadcrumb · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/breadcrumb

---

# Breadcrumb

Indicate the current page's location within a navigational hierarchy using explicit divider elements.

Layer: `components`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/breadcrumb)

On this page…

##### On this page

## Example

Use an ordered list with `.breadcrumb-item` for each page and `.breadcrumb-divider` elements between them. Leave a divider empty to use the default chevron icon, or add your own separator content. Add `.active` to the `.breadcrumb-link` of the current page.

HTML

```
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">Home</a>
    </li>
    <li class="breadcrumb-divider"></li>
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">Library</a>
    </li>
    <li class="breadcrumb-divider"></li>
    <li class="breadcrumb-item" aria-current="page">
      <a class="breadcrumb-link active" href="#">Data</a>
    </li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">Home</a>
    </li>
    <li class="breadcrumb-divider"></li>
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" fill="currentcolor"><circle cx="2" cy="8" r="2"/><circle cx="8" cy="8" r="2"/><circle cx="14" cy="8" r="2"/></svg>
      </a>
    </li>
    <li class="breadcrumb-divider"></li>
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">Documents</a>
    </li>
    <li class="breadcrumb-divider"></li>
    <li class="breadcrumb-item" aria-current="page">
      <a class="breadcrumb-link active" href="#">2026</a>
    </li>
  </ol>
</nav>
```

## Dividers

Dividers are added explicitly using `.breadcrumb-divider` elements. An empty divider renders a default chevron, drawn with a CSS [`mask`](customize__sass.md#mask-icons) so it inherits the divider color (including in dark mode). To use a different separator, add your own content—any SVG icon, text character, or custom markup—which overrides the default.

### Default divider

Leave the `.breadcrumb-divider` empty to get the built-in chevron. Customize it globally by overriding the `--bs-breadcrumb-divider-icon`, `--bs-breadcrumb-divider-width`, and `--bs-breadcrumb-divider-height` variables.

HTML

```
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">Home</a>
    </li>
    <li class="breadcrumb-divider"></li>
    <li class="breadcrumb-item" aria-current="page">
      <a class="breadcrumb-link active" href="#">Library</a>
    </li>
  </ol>
</nav>
```

### SVG dividers

Add an inline SVG inside the divider to override the default with your own crisp, scalable icon. Use `currentColor` for the stroke or fill so it inherits the divider color for easy theming.

HTML

```
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">Home</a>
    </li>
    <li class="breadcrumb-divider">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
        <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
      </svg>
    </li>
    <li class="breadcrumb-item" aria-current="page">
      <a class="breadcrumb-link active" href="#">Library</a>
    </li>
  </ol>
</nav>
```

### Text dividers

For simple text-based dividers, just add the character directly.

HTML

```
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">Home</a>
    </li>
    <li class="breadcrumb-divider">/</li>
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">Library</a>
    </li>
    <li class="breadcrumb-divider">/</li>
    <li class="breadcrumb-item" aria-current="page">
      <a class="breadcrumb-link active" href="#">Data</a>
    </li>
  </ol>
</nav>
```

### Custom dividers

Use any content you like—different icons, decorative elements, or themed separators.

HTML

```
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">Home</a>
    </li>
    <li class="breadcrumb-divider">›</li>
    <li class="breadcrumb-item">
      <a class="breadcrumb-link" href="#">Library</a>
    </li>
    <li class="breadcrumb-divider">›</li>
    <li class="breadcrumb-item" aria-current="page">
      <a class="breadcrumb-link active" href="#">Data</a>
    </li>
  </ol>
</nav>
```

## Accessibility

Since breadcrumbs provide navigation, it’s important to follow these practices:

- Add `aria-label="breadcrumb"` to the `<nav>` element to describe the navigation type
- Add `aria-current="page"` to the `.breadcrumb-item` containing the current page
- Divider elements are automatically hidden from assistive technology via CSS

For more information, see the [ARIA Authoring Practices Guide breadcrumb pattern](https://www.w3.org/WAI/ARIA/apg/patterns/breadcrumb/).

## CSS

### Variables

Breadcrumbs use local CSS variables on `.breadcrumb` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/\_breadcrumb.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_breadcrumb.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$breadcrumb-tokens: defaults(
  (
    --breadcrumb-font-size: inherit,
    --breadcrumb-bg: transparent,
    --breadcrumb-border-radius: var(--radius-5),
    --breadcrumb-divider-color: var(--fg-4),
    --breadcrumb-divider-icon: #{escape-svg(url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 16'><path fill='none' stroke='black' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M2 2l4 6-4 6'/></svg>"))},
    --breadcrumb-divider-width: .375rem,
    --breadcrumb-divider-height: .75rem,
    --breadcrumb-link-padding-x: .75rem,
    --breadcrumb-link-padding-y: .25rem,
    --breadcrumb-link-color: var(--fg-3),
    --breadcrumb-link-hover-color: var(--fg-2),
    --breadcrumb-link-hover-bg: var(--bg-1),
    --breadcrumb-link-active-color: var(--fg-1),
    --breadcrumb-link-border-radius: var(--radius-7),
  ),
  $breadcrumb-tokens
);
```
