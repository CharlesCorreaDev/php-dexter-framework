# {% partial %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/partial.html

---

# {% partial %}

Twig Tag

- [Variables](docs__4.x__markup__tag__partial.md#variables)
- [Passing Markup as a Variable](docs__4.x__markup__tag__partial.md#passing-markup-as-a-variable)
- [Composable Partials](#composable-partials)
- [Props and Attributes](docs__4.x__markup__tag__partial.md#props-and-attributes)
- [Setting Partial Contents to a Twig Variable](docs__4.x__markup__tag__partial.md#setting-partial-contents-to-a-twig-variable)
- [Checking a Partial Exists](docs__4.x__markup__tag__partial.md#checking-a-partial-exists)

[More...](#)

The `{% partial %}` tag will parse a [CMS partial](docs__4.x__cms__themes__partials.md) and render the partial contents on the page. To display a partial called **footer.htm**, simply pass the name after the `partial` tag quoted as a string.

```
___TWIG0___
```

A partial inside a subdirectory can be rendered in the same way.

```
___TWIG0___
```

The [Themes documentation](docs__4.x__cms__themes__themes.md) has more details on subdirectory usage.

The partial name can also be a variable:

```
___TWIG0___
___TWIG1___
```

## [#](#variables) Variables

You can pass variables to partials by specifying them after the partial name:

```
___TWIG0___
```

You can also assign new variables for use in the partial:

```
___TWIG0___
```

Inside the partial, variables can be accessed like any other markup variable:

```
<p>Country: ___TWIG0___, city: ___TWIG1___.</p>
```

## [#](#passing-markup-as-a-variable) Passing Markup as a Variable

It is possible to pass markup to a partial using the `body` attribute.

```
___TWIG0___
    This is the card contents
___TWIG1___
```

The contents are then available as the `body` variable.

```
___TWIG0___
```

### [#](#composable-partials) Composable Partials

Composable partials are possible when combined with the `{% placeholder %}` [Twig tag](docs__4.x__markup__tag__placeholder.md). The following partial defines a `header` and a `body` section where HTML content can be added.

```
<div class="header">
    ___TWIG0___
</div>
<div class="body">
    ___TWIG1___
</div>
```

Next, you can include the `{% put %}` tag inside the `body` to compose the partial result with two HTML content sections.

```
___TWIG0___
    ___TWIG1___
        <h2>This is the card header</h2>
    ___TWIG2___
    <p>This is the card contents</p>
___TWIG3___
```

## [#](#props-and-attributes) Props and Attributes

Partials can use the `{% props %}` tag to separate parameters into **props** (template variables) and **attributes** (HTML pass-through). This lets you build reusable partials with smart class merging and attribute forwarding.

```
___TWIG0___
___TWIG1___

<div ___TWIG2___>
    <h2>___TWIG3___</h2>
    ___TWIG4___
</div>
```

```
___TWIG0___
    <p>Card content goes here</p>
___TWIG1___
```

The `title` parameter is a declared prop and becomes a template variable. The `class` and `id` parameters flow into the `attributes` bag. The `merge` method smart-appends the caller's class to the default.

See the [Props Twig Tag](docs__4.x__markup__tag__props.md) for the full `attributes` API and detailed usage examples.

## [#](#setting-partial-contents-to-a-twig-variable) Setting Partial Contents to a Twig Variable

In any template you can set the partial contents to a variable with the `partial()` function. This lets you manipulate the output before display. Remember to use the `|raw` filter to prevent output escaping.

```
___TWIG0___

___TWIG1___
```

You may also pass variables to the partial as the second argument.

```
___TWIG0___
```

## [#](#checking-a-partial-exists) Checking a Partial Exists

The `hasPartial()` function can be used to check if a partial exists without rendering the contents, it will return true or false if the partial is found.

```
___TWIG0___
    ___TWIG1___
___TWIG2___
    <p>Card not found!</p>
___TWIG3___
```

← [{% page %}](docs__4.x__markup__tag__page.md)[{% ajaxPartial %}](docs__4.x__markup__tag__ajax-partial.md) →
