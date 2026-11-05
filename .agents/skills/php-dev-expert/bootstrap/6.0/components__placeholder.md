# Placeholder · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/components/placeholder

---

# Placeholder

Use loading placeholders (skeleton loaders) for your components or pages to indicate something may still be loading.

Layer: `components`

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/components/placeholder)

On this page…

##### On this page

## About

Placeholders can be used to enhance the experience of your application. They’re built only with HTML and CSS, meaning you don’t need any JavaScript to create them. You will, however, need some custom JavaScript to toggle their visibility. Their appearance, color, and sizing can be easily customized with our utility classes.

## Example

In the example below, we take a typical card component and recreate it with placeholders applied to create a “loading card”. Size and proportions are the same between the two.

Placeholder

##### Card title

Some quick example text to build on the card title and make up the bulk of the card’s content.

[Go somewhere](#)

Placeholder

HTML

```
          <div class="card">
  <img src="..." class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn-solid theme-primary">Go somewhere</a>
  </div>
</div>

<div class="card" aria-hidden="true">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title placeholder-wave">
      <span class="placeholder col-6"></span>
    </h5>
    <p class="card-text placeholder-wave">
      <span class="placeholder col-7"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-6"></span>
      <span class="placeholder col-8"></span>
    </p>
    <a class="btn-solid theme-primary disabled placeholder col-6" aria-disabled="true"></a>
  </div>
</div>
```

## How it works

Create placeholders with the `.placeholder` class and a grid column class (e.g., `.col-6`) to set the `width`. They can replace the text inside an element or be added as a modifier class to an existing component.

We apply additional styling to `.btn`s via `::before` to ensure the `height` is respected. You may extend this pattern for other situations as needed, or add a `&nbsp;` within the element to reflect the height when actual text is rendered in its place.

HTML

```
<p aria-hidden="true">
  <span class="placeholder col-6"></span>
</p>

<a class="btn-solid theme-primary disabled col-4" aria-disabled="true"></a>
```

The use of `aria-hidden="true"` only indicates that the element should be hidden to screen readers. The *loading* behavior of the placeholder depends on how authors will actually use the placeholder styles, how they plan to update things, etc. Some JavaScript code may be needed to *swap* the state of the placeholder and inform AT users of the update.

## Width

You can change the `width` through grid column classes, width utilities, or inline styles.

HTML

```
<span class="placeholder col-6"></span>
<span class="placeholder w-75"></span>
<span class="placeholder" style="width: 25%;"></span>
```

## Color

By default, the `placeholder` uses `currentColor`. This can be overridden with a custom color or utility class.

HTML

```
<span class="placeholder col-9"></span>

<span class="placeholder col-6 bg-primary"></span>
<span class="placeholder col-6 bg-accent"></span>
<span class="placeholder col-6 bg-success"></span>
<span class="placeholder col-6 bg-danger"></span>
<span class="placeholder col-6 bg-warning"></span>
<span class="placeholder col-6 bg-info"></span>
<span class="placeholder col-6 bg-inverse"></span>
<span class="placeholder col-6 bg-secondary"></span>
```

## Sizing

The size of `.placeholder`s are based on the typographic style of the parent element. Customize them with sizing modifiers: `.placeholder-lg`, `.placeholder-sm`, or `.placeholder-xs`.

HTML

```
<span class="placeholder col-12 placeholder-lg"></span>
<span class="placeholder col-12"></span>
<span class="placeholder col-12 placeholder-sm"></span>
<span class="placeholder col-12 placeholder-xs"></span>
```

## Animation

Use `.placeholder-wave` for the default loading animation. Use `.placeholder-pulse` for an opacity pulse. The old `.placeholder-glow` class remains as a compatibility alias for `.placeholder-pulse`.

HTML

```
<p class="placeholder-wave">
  <span class="placeholder col-12"></span>
</p>

<p class="placeholder-pulse">
  <span class="placeholder col-12"></span>
</p>
```

### Text

Add `.placeholder-wave` to an inline element to apply the loading animation to text.

Working on it…

HTML

```
<span class="placeholder-wave fg-3">Working on it…</span>
```

## CSS

### Variables

[scss/\_placeholder.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_placeholder.scss)

```
// stylelint-disable-next-line scss/dollar-variable-default
$placeholder-tokens: defaults(
  (
    --placeholder-opacity-max: .18,
    --placeholder-opacity-min: .1,
  ),
  $placeholder-tokens
);

// stylelint-disable-next-line scss/dollar-variable-default
$placeholder-wave-tokens: defaults(
  (
    --placeholder-wave-opacity-max: 1,
    --placeholder-wave-opacity-min: .4,
  ),
  $placeholder-wave-tokens
);
```
