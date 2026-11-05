# Accordion · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/accordion

---

# Accordion

Build vertically collapsing accordions with native HTML `<details>` and `<summary>` elements.

Layer: `components`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/accordion)

On this page…

##### On this page

The accordion uses native HTML `<details>` and `<summary>` elements, leveraging the `name` attribute to create exclusive accordions where only one item can be open at a time. This approach requires no JavaScript for core functionality and is fully accessible by default.

## Example

Click the accordions below to expand/collapse the accordion content. Each `<details>` element shares the same `name` attribute value, creating an exclusive accordion where opening one item automatically closes the others.

To render an accordion that’s expanded by default, add the `open` attribute to the `<details>` element.

Accordion Item #1

**This is the first item’s accordion body.** It is shown by default because the `open` attribute is present. The native `<details>` element handles all the show/hide logic without any JavaScript. You can put any HTML content within the `.accordion-body`.

Accordion Item #2

**This is the second item’s accordion body.** The `name` attribute groups this with other accordion items. When you open this item, any other open item in the same group will close automatically.

Accordion Item #3

**This is the third item’s accordion body.** This exclusive accordion behavior is built into the browser—no Bootstrap JavaScript required. Just use matching `name` attributes on your `<details>` elements.

HTML

```
<div class="accordion">
  <details class="accordion-item" name="accordionExample" open>
    <summary class="accordion-header">
      Accordion Item #1
      <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
    </summary>
    <div class="accordion-body">
      <strong>This is the first item’s accordion body.</strong> It is shown by default because the <code>open</code> attribute is present. The native <code>&lt;details&gt;</code> element handles all the show/hide logic without any JavaScript. You can put any HTML content within the <code>.accordion-body</code>.
    </div>
  </details>
  <details class="accordion-item" name="accordionExample">
    <summary class="accordion-header">
      Accordion Item #2
      <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
    </summary>
    <div class="accordion-body">
      <strong>This is the second item’s accordion body.</strong> The <code>name</code> attribute groups this with other accordion items. When you open this item, any other open item in the same group will close automatically.
    </div>
  </details>
  <details class="accordion-item" name="accordionExample">
    <summary class="accordion-header">
      Accordion Item #3
      <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
    </summary>
    <div class="accordion-body">
      <strong>This is the third item’s accordion body.</strong> This exclusive accordion behavior is built into the browser—no Bootstrap JavaScript required. Just use matching <code>name</code> attributes on your <code>&lt;details&gt;</code> elements.
    </div>
  </details>
</div>
```

The panel height animation needs [`interpolate-size`](https://developer.mozilla.org/en-US/docs/Web/CSS/interpolate-size). Browsers without it open and close the panel at once. See [Transitions](customize__transitions.md) to change the timing or to remove it.

The animation effect of this component is dependent on the `prefers-reduced-motion` media query. See the [reduced motion section of our accessibility documentation](getting-started__accessibility.md#reduced-motion).

## Variants

Use the contextual `.theme-{color}` classes to apply a semantic theme color to open accordion items.

Accordion Item #1

**This is the first item’s accordion body.** It is shown by default because the `open` attribute is present. The native `<details>` element handles all the show/hide logic without any JavaScript. You can put any HTML content within the `.accordion-body`.

Accordion Item #2

**This is the second item’s accordion body.** The `name` attribute groups this with other accordion items. When you open this item, any other open item in the same group will close automatically.

Accordion Item #3

**This is the third item’s accordion body.** This exclusive accordion behavior is built into the browser—no Bootstrap JavaScript required. Just use matching `name` attributes on your `<details>` elements.

HTML

```
<div class="accordion theme-primary">
  <!-- Accordion items here -->
</div>
```

## Small

Add `.accordion-sm` to the `.accordion` for a more compact accordion with tighter padding, a smaller border radius, and a smaller font size.

Accordion Item #1

**This is the first item’s accordion body.** The `.accordion-sm` class tightens up the padding, border radius, and font size for a more compact presentation.

Accordion Item #2

**This is the second item’s accordion body.** Everything is driven by CSS custom properties, so you can fine-tune the compact sizing to taste.

Accordion Item #3

**This is the third item’s accordion body.** Combine `.accordion-sm` with other variants like `.accordion-flush` as needed.

HTML

```
<div class="accordion accordion-sm">
  <!-- Accordion items here -->
</div>
```

## Flush

Add `.accordion-flush` to remove some borders and rounded corners to render accordions edge-to-edge with their parent container.

Accordion Item #1

Placeholder content for this accordion, which is intended to demonstrate the `.accordion-flush` class. This is the first item’s accordion body.

Accordion Item #2

Placeholder content for this accordion, which is intended to demonstrate the `.accordion-flush` class. This is the second item’s accordion body. Let’s imagine this being filled with some actual content.

Accordion Item #3

Placeholder content for this accordion, which is intended to demonstrate the `.accordion-flush` class. This is the third item’s accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.

HTML

```
<div class="accordion accordion-flush">
  <!-- Accordion items here -->
</div>
```

## Gap

Add `.accordion-gap` to put space between accordion items. Each item is a separate rounded card.

The gap lives on the accordion, not the panel. The panel still animates only its `block-size`, so the open and close transition stays smooth.

Accordion Item #1

**This is the first item’s accordion body.** The `.accordion-gap` class spaces items apart. Each item keeps a full border radius while the panel opens and closes.

Accordion Item #2

**This is the second item’s accordion body.** The gap does not change during the transition, so adjacent items do not jump.

Accordion Item #3

**This is the third item’s accordion body.** Override `--accordion-gap` to change the space between items.

HTML

```
<div class="accordion accordion-gap">
  <!-- Accordion items here -->
</div>
```

[scss/\_accordion.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_accordion.scss)

```
--accordion-gap: var(--spacer-2);
```

## Always open

Omit the `name` attribute on each `<details>` element to allow multiple accordion items to be open simultaneously.

Accordion Item #1

**This is the first item’s accordion body.** Without the `name` attribute, each accordion item operates independently. You can open multiple items at the same time.

Accordion Item #2

**This is the second item’s accordion body.** Opening this won’t close the first item because there’s no `name` attribute linking them together.

Accordion Item #3

**This is the third item’s accordion body.** Each item is completely independent—open or close them in any combination you like.

HTML

```
<div class="accordion">
  <details class="accordion-item" open>
    <!-- No name attribute, so items open independently -->
  </details>
  <!-- More accordion items here -->
</div>
```

## Expand & Collapse all

To enable expanding and collapsing of all accordion items at once, remove the `name` attribute from each `<details>` element using JavaScript. This allows multiple accordion items to be open simultaneously. Restore the `name` attribute when you collapse the items again if you want exclusive behavior back.

Expand all

Accordion Item #1

**This is the first item’s accordion body.** Use Expand all to open every item, even when they share a `name`.

Accordion Item #2

**This is the second item’s accordion body.** Collapse all closes every item and restores exclusive `name` grouping.

Accordion Item #3

**This is the third item’s accordion body.** If your accordion has no `name`, you only need to set `open` on each item.

HTML

```
<button type="button" class="btn-subtle btn-sm theme-secondary mb-3" id="btnAccordionToggleAll" aria-expanded="false">Expand all</button>

<div class="accordion accordion-sm" id="accordionExpandCollapse">
  <details class="accordion-item" name="accordionExpandCollapse" open>
    <summary class="accordion-header">
      Accordion Item #1
      <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
    </summary>
    <div class="accordion-body">
      <strong>This is the first item’s accordion body.</strong> Use Expand all to open every item, even when they share a <code>name</code>.
    </div>
  </details>
  <details class="accordion-item" name="accordionExpandCollapse">
    <summary class="accordion-header">
      Accordion Item #2
      <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
    </summary>
    <div class="accordion-body">
      <strong>This is the second item’s accordion body.</strong> Collapse all closes every item and restores exclusive <code>name</code> grouping.
    </div>
  </details>
  <details class="accordion-item" name="accordionExpandCollapse">
    <summary class="accordion-header">
      Accordion Item #3
      <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
    </summary>
    <div class="accordion-body">
      <strong>This is the third item’s accordion body.</strong> If your accordion has no <code>name</code>, you only need to set <code>open</code> on each item.
    </div>
  </details>
</div>
```

We use the following JavaScript for this demo:

[site/src/assets/partials/snippets.js](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/assets/partials/snippets.js)

```
const accordion = document.getElementById('accordionExpandCollapse')
const toggleBtn = document.getElementById('btnAccordionToggleAll')

if (accordion && toggleBtn) {
  const items = accordion.querySelectorAll('.accordion-item')
  const groupName = 'accordionExpandCollapse'

  toggleBtn.addEventListener('click', () => {
    const expand = toggleBtn.getAttribute('aria-expanded') !== 'true'

    for (const item of items) {
      if (expand) {
        item.removeAttribute('name')
        item.open = true
      } else {
        item.open = false
        item.setAttribute('name', groupName)
      }
    }

    toggleBtn.setAttribute('aria-expanded', String(expand))
    toggleBtn.textContent = expand ? 'Collapse all' : 'Expand all'
  })
}
```

## Nested

Accordions can be nested inside each other by placing a full `.accordion` within an `.accordion-body`. Use unique `name` attribute values for each level so the parent and child accordions operate independently.

Accordion Item #1

**This is the first item’s accordion body.** It contains a nested accordion below.

Nested Item #1

This is the body of the first nested accordion item.

Nested Item #2

This is the body of the second nested accordion item.

Nested Item #3

This is the body of the third nested accordion item.

Accordion Item #2

**This is the second item’s accordion body.** It does not contain a nested accordion.

Accordion Item #3

**This is the third item’s accordion body.** It does not contain a nested accordion.

HTML

```
<div class="accordion">
  <details class="accordion-item" name="accordionNested" open>
    <summary class="accordion-header">
      Accordion Item #1
      <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
    </summary>
    <div class="accordion-body">
      <strong>This is the first item’s accordion body.</strong> It contains a nested accordion below.
      <div class="accordion mt-3">
        <details class="accordion-item" name="accordionNestedInner" open>
          <summary class="accordion-header">
            Nested Item #1
            <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
          </summary>
          <div class="accordion-body">
            This is the body of the first nested accordion item.
          </div>
        </details>
        <details class="accordion-item" name="accordionNestedInner">
          <summary class="accordion-header">
            Nested Item #2
            <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
          </summary>
          <div class="accordion-body">
            This is the body of the second nested accordion item.
          </div>
        </details>
        <details class="accordion-item" name="accordionNestedInner">
          <summary class="accordion-header">
            Nested Item #3
            <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
          </summary>
          <div class="accordion-body">
            This is the body of the third nested accordion item.
          </div>
        </details>
      </div>
    </div>
  </details>
  <details class="accordion-item" name="accordionNested">
    <summary class="accordion-header">
      Accordion Item #2
      <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
    </summary>
    <div class="accordion-body">
      <strong>This is the second item’s accordion body.</strong> It does not contain a nested accordion.
    </div>
  </details>
  <details class="accordion-item" name="accordionNested">
    <summary class="accordion-header">
      Accordion Item #3
      <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="m2 5 6 6 6-6"/></svg>
    </summary>
    <div class="accordion-body">
      <strong>This is the third item’s accordion body.</strong> It does not contain a nested accordion.
    </div>
  </details>
</div>
```

## Accessibility

The native `<details>` and `<summary>` elements provide built-in accessibility:

- Screen readers announce the expanded/collapsed state automatically
- Keyboard navigation works out of the box (Enter/Space to toggle)
- The `<summary>` element is focusable by default
- No ARIA attributes are required as the semantics are built into the elements

## CSS

### Variables

Accordions use local CSS variables on `.accordion` for real-time customization. Values for the CSS variables are generated from Sass maps unique to each component and applied to the aforementioned class.

[scss/\_accordion.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_accordion.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$accordion-tokens: defaults(
  (
    --accordion-padding-x: 1.25rem,
    --accordion-padding-y: 1rem,
    --accordion-color: var(--fg-body),
    --accordion-bg: var(--bg-body),
    --accordion-transition-property: "color, background-color, border-radius",
    --accordion-transition-duration: .15s,
    --accordion-transition-timing: ease-in-out,
    --accordion-panel-transition-property: "content-visibility, block-size",
    --accordion-panel-transition-duration: .2s,
    --accordion-panel-transition-timing: ease,
    --accordion-border-color: var(--border-color),
    --accordion-border-width: var(--border-width),
    --accordion-border-radius: var(--accordion-radius, var(--radius-7)),
    --accordion-gap: 0,
    --accordion-btn-color: var(--fg-2),
    --accordion-btn-bg: var(--bg-body),
    --accordion-btn-icon-width: 1rem,
    --accordion-btn-icon-transform: rotate(-180deg),
    --accordion-btn-icon-transition: transform .2s ease-in-out,
    --accordion-active-color: var(--fg-body),
    --accordion-active-bg: var(--bg-2),
  ),
  $accordion-tokens
);
```

## Customize

### Custom icons

The accordion uses an inline SVG for the chevron icon. You can customize this by replacing the SVG within the `.accordion-header`:

HTML

```
          <summary class="accordion-header">
  Accordion Title
  <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
    <path d="m2 5 6 6 6-6"/>
  </svg>
</summary>
```

The `.accordion-icon` class handles positioning and the rotation animation when the accordion opens.

### Events

You can listen for the native `toggle` event on `<details>` elements:

JavaScript

```
          const accordionItem = document.querySelector('.accordion-item')
accordionItem.addEventListener('toggle', event => {
  if (event.target.open) {
    console.log('Accordion opened')
  } else {
    console.log('Accordion closed')
  }
})
```

### Programmatic control

Toggle accordion items programmatically using the `open` property:

JavaScript

```
          const accordionItem = document.querySelector('.accordion-item')

// Open the accordion
accordionItem.open = true

// Close the accordion
accordionItem.open = false

// Toggle the accordion
accordionItem.open = !accordionItem.open
```
