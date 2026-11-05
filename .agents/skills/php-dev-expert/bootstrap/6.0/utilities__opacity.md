# Opacity · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/utilities/opacity

---

# Opacity

Control the opacity of elements.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/utilities/opacity)

On this page…

##### On this page

| Class | Styles |
| --- | --- |
| .opacity-0 | opacity: 0; |
| .opacity-25 | opacity: 0.25; |
| .opacity-50 | opacity: 0.5; |
| .opacity-75 | opacity: 0.75; |
| .opacity-100 | opacity: 1; |

The `opacity` property sets the opacity level for an element. The opacity level describes the transparency level, where `1` is not transparent at all, `.5` is 50% visible, and `0` is completely transparent.

Set the `opacity` of an element using `.opacity-{value}` utilities.

100%

75%

50%

25%

0%

HTML

```
          <div class="opacity-100">...</div>
<div class="opacity-75">...</div>
<div class="opacity-50">...</div>
<div class="opacity-25">...</div>
<div class="opacity-0">...</div>
```

## CSS

### Sass utilities API

Opacity utilities are declared in our utilities API in `scss/_utilities.scss`. [Learn how to use the utilities API.](utilities__api.md#using-the-api)

[scss/\_utilities.scss](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/scss/_utilities.scss)

```
"opacity": (
  property: opacity,
  values: (
    0: 0,
    25: .25,
    50: .5,
    75: .75,
    100: 1,
  )
),
```
