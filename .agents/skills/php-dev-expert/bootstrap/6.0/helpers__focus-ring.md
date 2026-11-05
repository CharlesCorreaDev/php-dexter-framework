# Focus ring · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/helpers/focus-ring

---

# Focus ring

Utility classes that allows you to add and modify custom focus ring styles to elements and components.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/helpers/focus-ring)

On this page…

##### On this page

The `.focus-ring` helper modifies the default `outline` for focus states with one that can be more easily customized. Focus ring is made up of a series of CSS variables, inherited from the `:root` level, that can be modified for any element or component.

## Example

Tab into the example below to see the focus ring in action, or into the example below and then press `Tab`.

[Custom focus ring](#)

HTML

```
<a href="#" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2">
  Custom focus ring
</a>
```

## Variants

Change the color of the focus ring with the [theme color](customize__theme.md#theme-colors) utility classes. The helper class pulls in the `--bs-theme-focus-ring` CSS variable for the given theme color.

[Primary focus](#)
[Accent focus](#)
[Success focus](#)
[Danger focus](#)
[Warning focus](#)
[Info focus](#)
[Inverse focus](#)
[Secondary focus](#)

HTML

```
<a href="#" class="d-inline-flex focus-ring theme-primary py-1 px-2 text-decoration-none border rounded-2">Primary focus</a>
<a href="#" class="d-inline-flex focus-ring theme-accent py-1 px-2 text-decoration-none border rounded-2">Accent focus</a>
<a href="#" class="d-inline-flex focus-ring theme-success py-1 px-2 text-decoration-none border rounded-2">Success focus</a>
<a href="#" class="d-inline-flex focus-ring theme-danger py-1 px-2 text-decoration-none border rounded-2">Danger focus</a>
<a href="#" class="d-inline-flex focus-ring theme-warning py-1 px-2 text-decoration-none border rounded-2">Warning focus</a>
<a href="#" class="d-inline-flex focus-ring theme-info py-1 px-2 text-decoration-none border rounded-2">Info focus</a>
<a href="#" class="d-inline-flex focus-ring theme-inverse py-1 px-2 text-decoration-none border rounded-2">Inverse focus</a>
<a href="#" class="d-inline-flex focus-ring theme-secondary py-1 px-2 text-decoration-none border rounded-2">Secondary focus</a>
```

## Custom colors

Modify the `--bs-focus-ring-color` CSS variable as needed to change the default appearance. Use existing theme variables or your own colors. When using your own colors, we recommend using `light-dark()` for color mode support and `color-mix()` to ensure colors deviate slightly for more contrast on different backgrounds.

[Green focus ring](#)

HTML

```
<a href="#" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" style="--bs-focus-ring-color: var(--bs-success-focus-ring)">
  Green focus ring
</a>
```
