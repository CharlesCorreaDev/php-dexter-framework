# RTL · Bootstrap v6.0

> **Fonte / Source:** https://getbootstrap.com/docs/6.0/customize/rtl

---

# RTL

Learn how to enable support for right-to-left text in Bootstrap across our layout, components, and utilities.

[View & Edit](https://github.com/twbs/bootstrap/blob/v6.0.0-alpha.1/site/src/content/docs/customize/rtl)

On this page…

##### On this page

**ProTip:** Get familiar with Bootstrap first with our [getting started guide](getting-started.md) before working with RTL.

## How it works

Bootstrap uses **CSS logical properties** throughout the framework to make RTL support native and automatic. Set `dir="rtl"` and add a `lang` attribute, like `lang="ar"`, on your HTML element and the browser will handle the directional layout changes for you. No separate stylesheets are needed.

Logical properties are CSS properties that adapt to the writing mode and direction of content. Instead of using physical directions like `left` and `right`, they use logical concepts like `start` and `end`:

- `margin-left` → `margin-inline-start`
- `margin-right` → `margin-inline-end`
- `padding-left` → `padding-inline-start`
- `border-right` → `border-inline-end`

When you set `dir="rtl"`, these logical properties automatically flip to match the right-to-left layout without requiring any additional CSS transformations. Only HTML changes are required.

### Required HTML

One line of changes to your HTML is all it takes to enable RTL. Bootstrap will then automatically adapt to the RTL direction using logical properties.

HTML

```
          <html lang="en">
<html lang="ar" dir="rtl">
```

### Live demo

Toggle between LTR and RTL on this page to see Bootstrap’s logical properties in action:

Enable RTL mode

## Switching directions

**Need both LTR and RTL on the same page?** Wrap your content in containers with different `dir` attributes:

HTML

```
          <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <title>LTR and RTL</title>
  </head>
  <body>
    <!-- LTR content -->
    <div dir="ltr" lang="en">
      <!-- … -->
    </div>

    <!-- RTL content -->
    <div dir="rtl" lang="ar">
      <!-- … -->
    </div>
  </body>
</html>
```

## Additional resources

- [MDN: CSS Logical Properties and Values](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Logical_Properties)
- [CSS Logical Properties - web.dev](https://web.dev/learn/css/logical-properties/)
- [RTL Styling 101](https://rtlstyling.com/posts/rtl-styling)
