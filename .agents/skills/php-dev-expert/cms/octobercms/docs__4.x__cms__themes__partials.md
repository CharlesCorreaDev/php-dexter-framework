# Partials - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/cms/themes/partials.html

---

# Partials

Reuse chunks of HTML code anywhere in website.

- [Rendering Partials](docs__4.x__cms__themes__partials.md#rendering-partials)
- [Passing Variables to Partials](docs__4.x__cms__themes__partials.md#passing-variables-to-partials)
- [Variable Scope](#variable-scope)
- [Parsing Markup as a Variable](#parsing-markup-as-a-variable)
- [Props and Attributes](docs__4.x__cms__themes__partials.md#props-and-attributes)
- [Declaring Props](#declaring-props)
- [The Attributes Variable](#the-attributes-variable)
- [Composable Partials with Props](#composable-partials-with-props)
- [Dynamic Partials](docs__4.x__cms__themes__partials.md#dynamic-partials)
- [Partial Execution Life Cycle](#partial-execution-life-cycle)
- [Calling AJAX Handlers in Partials](#calling-ajax-handlers-in-partials)

[More...](#)

Partials are powerful elements that can repeat HTML on different pages or layouts, for example, a page footer used across different [page layouts](docs__4.x__cms__themes__layouts.md). Partials are also a powerful tool for dynamically [updating the page content with AJAX](docs__4.x__ajax__update-partials.md).

Partial templates files reside in the **partials** directory in your theme. Partial files should have the **htm** extension. Next is an example of the simplest possible partial.

```
<p>This is a partial</p>
```

A configuration section is optional for partials and can contain the optional **description** parameter that is displayed in the backend user interface. This example shows a partial with a description defined.

```
description = "Demo partial"
```

```
<p>This is a partial</p>
```

The partial configuration section can also contain component definitions. The [Components article](docs__4.x__cms__themes__components.md) explains components in more detail.

## [#](#rendering-partials) Rendering Partials

Remember that if you refer a partial from a subdirectory you should specify the subdirectory name.

The `{% partial "partial-name" %}` Twig tag renders a partial. The tag has a single required parameter - the partial file name without the extension. The `{% partial %}` tag can be used inside a page, layout or another partial. The following is an example of a page referring to a partial.

```
<div class="sidebar">
    ___TWIG0___
</div>
```

## [#](#passing-variables-to-partials) Passing Variables to Partials

You will find that you often need to pass variables to a partial from the external code. This makes partials even more useful. For example, you can have a partial that renders a list of blog posts. If you can pass the post collection to the partial, the same partial could be used on the blog archive page, on the blog category page and so on. You can pass variables to partials by specifying them after the partial name in the `{% partial %}` tag.

```
<div class="sidebar">
    ___TWIG0___
</div>
```

You can also provide new variables for use in the partial.

```
<div class="sidebar">
    ___TWIG0___
</div>
```

Inside the partial, variables can be accessed like any other markup variable.

```
<p>Country: ___TWIG0___, city: ___TWIG1___.</p>
```

### [#](#variable-scope) Variable Scope

The partial contents will have access to the variables from the current context and the additional ones provided.

```
___TWIG0___
```

In the following example, the `foo` variable will be available inside the `mypartial` partial template.

```
___TWIG0___
___TWIG1___
```

You can disable access to the context by appending the `only` keyword. In this example, only the `foo` variable will be accessible.

```
___TWIG0___
```

In the next example, no variables will be accessible.

```
___TWIG0___
```

### [#](#parsing-markup-as-a-variable) Parsing Markup as a Variable

It is possible to pass markup to a partial by adding the `body` attribute to the partial tag.

```
___TWIG0___
    This is the card contents
___TWIG1___
```

The contents are available inside the partial as the `body` variable.

```
___TWIG0___
```

Combined with the [placeholder markup tag](docs__4.x__markup__tag__placeholder.md), this lets you build composable partials.

```
___TWIG0___
    ___TWIG1___
        <h2>This is the card header</h2>
    ___TWIG2___
    This is the card contents
___TWIG3___
```

The **card** partial is composed of two content areas and an image variable.

```
<div class="header">
    <div class="image">
        <img src="___TWIG0___" />
    </div>
    ___TWIG1___
</div>
<div class="body">
    ___TWIG2___
</div>
```

## [#](#props-and-attributes) Props and Attributes

Partials can declare which parameters are **props** (template data) and which are **attributes** (HTML pass-through) using the `{% props %}` tag. This brings a component-style pattern to partials, allowing you to build reusable UI elements with smart class merging and attribute forwarding.

### [#](#declaring-props) Declaring Props

Place the `{% props %}` tag at the top of a partial `.htm` file. It uses Twig hash syntax where keys are prop names and values are defaults:

```
___TWIG0___
```

- Keys listed in `{% props %}` become Twig variables (props), values are their defaults
- Parameters **not** listed flow into the `attributes` bag
- An empty `{% props {} %}` means all parameters go to attributes

### [#](#the-attributes-variable) The Attributes Variable

When `{% props %}` is present, the template receives an `attributes` variable — an instance of Laravel's `ComponentAttributeBag`. It supports smart class merging where the caller's classes are appended to the partial's defaults.

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

The `title` parameter is a prop and becomes a template variable. The `class` and `id` parameters are not listed in props, so they flow into the attribute bag. The `merge` method appends the caller's `class` to the default, producing `class="card mt-4 shadow"`.

See the [Props Twig Tag](docs__4.x__markup__tag__props.md) for the full attribute bag API including `only()`, `except()`, `has()`, and `get()` methods.

### [#](#composable-partials-with-props) Composable Partials with Props

The existing `{% put %}` / `{% placeholder %}` system works alongside `{% props %}` for partials that need multiple content sections:

```
___TWIG0___
___TWIG1___
    ___TWIG2___
        <h2>Card Title</h2>
    ___TWIG3___
    <p>Body content</p>
___TWIG4___
```

```
___TWIG0___
___TWIG1___
<div ___TWIG2___>
    <div class="card-header">
        ___TWIG3___
    </div>
    <div class="card-body">___TWIG4___</div>
</div>
```

## [#](#dynamic-partials) Dynamic Partials

Partials, like pages, can use any Twig features. Please refer to the [Dynamic Pages section](docs__4.x__cms__themes__pages.md) of the documentation for details.

### [#](#partial-execution-life-cycle) Partial Execution Life Cycle

There are special functions that can be defined in the PHP section of partials: `onStart` and `onEnd`. The `onStart` function is executed before the partial is rendered and before the [partial components](docs__4.x__cms__themes__components.md) are executed. The `onEnd` function is executed before the partial is rendered and after the partial components are executed. In the `onStart` and `onEnd` functions you can inject variables to the Twig environment. Use the `$this` with array notation to pass variables to the page.

```
<?
function onStart()
{
    $this['hello'] = "Hello world!";
}
?>
```

```
<h3>___TWIG0___</h3>
```

Externally assigned variables to the partial can be accessed in PHP using the `$this` object.

```
<?
function onStart()
{
    $this['location'] = $this->city . ', ' . $this->country;
}
?>
```

```
<p>___TWIG0___ is the same as ___TWIG1___, ___TWIG2___.</p>
```

The templating language provided by October CMS is described in the [Markup Guide](docs__4.x__markup__templating.md). The overall sequence the handlers are executed is described in the [Dynamic Layouts section](docs__4.x__cms__themes__layouts.md) of the documentation.

### [#](#calling-ajax-handlers-in-partials) Calling AJAX Handlers in Partials

Since they are instantiated late, during the time the page is rendered, some limitations apply to the life cycle of regular partials. To overcome this, you may use the `{% ajaxPartial %}` to allow AJAX handlers to be called inside your partial.

```
___TWIG0___
```

See the [AJAX Partial Twig Tag article](docs__4.x__markup__tag__ajax-partial.md) to learn more about the `{% ajaxPartial %}` tag.

When calling a handler from within an AJAX partial, the life cycle operates differently compared to a regular AJAX handler.

1. The handler runs after the partial's `onEnd` function.
2. The complete page life cycle runs, including logic in the layout, page and parent partials.
3. All variables are available during the request, including variables set using Twig.
4. The partial life cycle functions do not support returning any values.

#### [#](#see-also) See Also

- [Partial Twig Tag](docs__4.x__markup__tag__partial.md)
- [Props Twig Tag](docs__4.x__markup__tag__props.md)
- [AJAX Partial Twig Tag](docs__4.x__markup__tag__ajax-partial.md)

← [Pages](docs__4.x__cms__themes__pages.md)[Layouts](docs__4.x__cms__themes__layouts.md) →
