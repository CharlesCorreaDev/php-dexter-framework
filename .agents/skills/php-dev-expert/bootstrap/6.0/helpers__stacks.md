# Stacks · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/helpers/stacks

---

# Stacks

Shorthand helpers that build on top of our flexbox utilities to make component layout faster and easier than ever.

Container queries

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/helpers/stacks)

On this page…

##### On this page

Stacks offer a shortcut for applying a number of flexbox properties to quickly and easily create layouts in Bootstrap. All credit for the concept and implementation goes to the open source [Pylon project](https://almonk.github.io/pylon/).

## Vertical

Use `.vstack` to create vertical layouts. Stacked items are full-width by default. Use `.gap-*` utilities to add space between items.

First item

Second item

Third item

HTML

```
<div class="vstack gap-3">
  <div class="p-2">First item</div>
  <div class="p-2">Second item</div>
  <div class="p-2">Third item</div>
</div>
```

## Horizontal

Use `.hstack` for horizontal layouts. Stacked items are vertically centered by default and only take up their necessary width. Use `.gap-*` utilities to add space between items.

First item

Second item

Third item

HTML

```
<div class="hstack gap-3">
  <div class="p-2">First item</div>
  <div class="p-2">Second item</div>
  <div class="p-2">Third item</div>
</div>
```

Using horizontal margin utilities like `.ms-auto` as spacers:

First item

Second item

Third item

HTML

```
<div class="hstack gap-3">
  <div class="p-2">First item</div>
  <div class="p-2 ms-auto">Second item</div>
  <div class="p-2">Third item</div>
</div>
```

And with [vertical rules](helpers__vertical-rule.md):

First item

Second item

Third item

HTML

```
<div class="hstack gap-3">
  <div class="p-2">First item</div>
  <div class="p-2 ms-auto">Second item</div>
  <div class="vr"></div>
  <div class="p-2">Third item</div>
</div>
```

## Responsive

Consider this example of stacking buttons on narrow mobile devices, and making them horizontal on larger devices.

Save changes
Cancel

HTML

```
<div class="vstack gap-2 md:col-5 mx-auto">
  <button type="button" class="btn-solid theme-primary">Save changes</button>
  <button type="button" class="btn-outline theme-secondary">Cancel</button>
</div>
```

Here’s how you’d do it with responsive stacks, which are based on a container media queries. Wrap the stack in an extra element or add `.stack-container` to an existing parent to give the stack a "container" to adapt its layout from.

Save changes
Cancel

HTML

```
<div class="stack-container">
  <div class="vstack gap-2 sm:hstack">
    <button type="button" class="btn-solid theme-primary">Save changes</button>
    <button type="button" class="btn-outline theme-secondary">Cancel</button>
  </div>
</div>
```

## CSS

[scss/helpers/\_stacks.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/helpers/_stacks.scss)

```
.stack-container {
  @include set-container();
}

[class*="hstack"],
[class*="vstack"] {
  display: flex;
  flex: var(--stack-flex, 1 1 auto);
  flex-direction: var(--stack-direction, row);
  align-items: var(--stack-align-items, center);
  align-self: var(--stack-align-self, stretch);
}

@include loop-breakpoints-up() using ($breakpoint, $prefix) {
  .#{$prefix}vstack {
    @include container-breakpoint-up($breakpoint) {
      --stack-direction: column;
      --stack-align-items: stretch;
    }
  }
  .#{$prefix}hstack {
    @include container-breakpoint-up($breakpoint) {
      --stack-direction: row;
      --stack-align-items: flex-start;
    }
  }
}
```
