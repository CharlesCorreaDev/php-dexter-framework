# Containers · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/layout/containers

---

# Containers

Containers are a fundamental building block of Bootstrap that contain, pad, and align your content within a given device or viewport.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/layout/containers)

On this page…

##### On this page

## How they work

Containers are the most basic layout element in Bootstrap and are **required when using our default grid system**. Containers are used to contain, pad, and (sometimes) center the content within them. While containers *can* be nested, most layouts do not require a nested container.

Bootstrap comes with three different containers:

- `.container`, which sets a `max-width` at each responsive breakpoint
- `.{breakpoint}:container`, which is `width: 100%` until the specified breakpoint
- `.container-fluid`, which is `width: 100%` at all breakpoints

The table below illustrates how each container’s `max-width` compares to the original `.container` and `.container-fluid` across each breakpoint.

See them in action and compare them in our [Grid example](examples__grid.md#containers).

|  | Extra small <576px | Small ≥576px | Medium ≥768px | Large ≥1024px | X-Large ≥1280px | 2X-Large ≥1536px |
| --- | --- | --- | --- | --- | --- | --- |
| `.container` | 100% | 540px | 720px | 960px | 1140px | 1440px |
| `.sm:container` | 100% | 540px | 720px | 960px | 1140px | 1440px |
| `.md:container` | 100% | 100% | 720px | 960px | 1140px | 1440px |
| `.lg:container` | 100% | 100% | 100% | 960px | 1140px | 1440px |
| `.xl:container` | 100% | 100% | 100% | 100% | 1140px | 1440px |
| `.2xl:container` | 100% | 100% | 100% | 100% | 100% | 1440px |
| `.container-fluid` | 100% | 100% | 100% | 100% | 100% | 100% |

## Default container

Our default `.container` class is a responsive, fixed-width container, meaning its `max-width` changes at each breakpoint.

HTML

```
          <div class="container">
  <!-- Content here -->
</div>
```

## Responsive containers

Responsive containers allow you to specify a class that is 100% wide until the specified breakpoint is reached, after which we apply `max-width`s for each of the higher breakpoints. For example, `.sm:container` is 100% wide to start until the `sm` breakpoint is reached, where it will scale up with `md`, `lg`, `xl`, and `2xl`.

HTML

```
          <div class="sm:container">100% wide until small breakpoint</div>
<div class="md:container">100% wide until medium breakpoint</div>
<div class="lg:container">100% wide until large breakpoint</div>
<div class="xl:container">100% wide until extra large breakpoint</div>
<div class="2xl:container">100% wide until extra extra large breakpoint</div>
```

## Fluid containers

Use `.container-fluid` for a full width container, spanning the entire width of the viewport.

HTML

```
          <div class="container-fluid">
  ...
</div>
```

## CSS

### Sass variables

As shown above, Bootstrap generates a series of predefined container classes to help you build the layouts you desire. You may customize these predefined container classes by modifying the Sass map (found in `_config.scss`) that powers them:

[scss/\_config.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_config.scss)

```
$container-max-widths: ();
// stylelint-disable-next-line scss/dollar-variable-default
$container-max-widths: defaults(
  (
    sm: 540px,
    md: 720px,
    lg: 960px,
    xl: 1200px,
    2xl: 1440px
  ),
  $container-max-widths
);
```

For more information and examples on how to modify our Sass maps and variables, please refer to [the Sass section of the Grid documentation](layout__grid.md#css).

### Sass mixins

In addition to customizing the Sass, you can also create your own containers with our Sass mixin.

SCSS

```
          // Source mixin
@mixin make-container($padding-x: $container-padding-x) {
  width: 100%;
  padding-inline: $padding-x;
  margin-inline: auto;
}

// Usage
.custom-container {
  @include make-container();
}
```
