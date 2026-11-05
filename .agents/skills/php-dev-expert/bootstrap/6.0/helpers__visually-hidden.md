# Visually hidden · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/helpers/visually-hidden

---

# Visually hidden

Use these helpers to visually hide elements but keep them accessible to assistive technologies.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/helpers/visually-hidden)

On this page…

##### On this page

Visually hide an element while still allowing it to be exposed to assistive technologies (such as screen readers) with `.visually-hidden`. Use `.visually-hidden-focusable` to visually hide an element by default, but to display it when it’s focused (e.g. by a keyboard-only user). `.visually-hidden-focusable` can also be applied to a container–thanks to `:focus-within`, the container will be displayed when any child element of the container receives focus.

## Title for screen readers

[Skip to main content](#content)

A container with a [focusable element](#).

HTML

```
<h2 class="visually-hidden">Title for screen readers</h2>
<a class="visually-hidden-focusable" href="#content">Skip to main content</a>
<div class="visually-hidden-focusable">A container with a <a href="#">focusable element</a>.</div>
```

Both `visually-hidden` and `visually-hidden-focusable` can also be used as mixins.

SCSS

```
          // Usage as a mixin

.visually-hidden-title {
  @include visually-hidden;
}

.skip-navigation {
  @include visually-hidden-focusable;
}
```
