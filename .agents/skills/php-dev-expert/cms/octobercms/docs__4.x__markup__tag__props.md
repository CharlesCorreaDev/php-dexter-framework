# {% props %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/props.html

---

# {% props %}

Twig Tag

- [Basic Usage](docs__4.x__markup__tag__props.md#basic-usage)
- [Hyphenated Attributes](#hyphenated-attributes)
- [The Attributes Variable](docs__4.x__markup__tag__props.md#the-attributes-variable)
- [Smart Class Merging](#smart-class-merging)
- [Empty Props](docs__4.x__markup__tag__props.md#empty-props)
- [Default Values](docs__4.x__markup__tag__props.md#default-values)
- [Working with Body Content](docs__4.x__markup__tag__props.md#working-with-body-content)

[More...](#)

The `{% props %}` tag is used inside [CMS partials](docs__4.x__cms__themes__partials.md) to declare which parameters are **props** (template data) and which are **attributes** (HTML pass-through). When this tag is present, an `attributes` variable becomes available for rendering HTML attributes on elements.

```
___TWIG0___
```

The tag uses Twig hash syntax. Keys become template variables with their specified defaults, and any parameters passed by the caller that are **not** listed become part of the `attributes` bag.

## [#](#basic-usage) Basic Usage

A card partial that declares `title` as a prop and forwards everything else as HTML attributes:

```
___TWIG0___
___TWIG1___

<div ___TWIG2___>
    <h2>___TWIG3___</h2>
</div>
```

When rendered with extra attributes:

```
___TWIG0___
```

The output will be:

```
<div class="card mt-4" id="featured">
    <h2>Hello</h2>
</div>
```

The `title` parameter was declared as a prop, so it becomes a template variable. The `class` and `id` parameters were not listed, so they flow into the `attributes` bag.

### [#](#hyphenated-attributes) Hyphenated Attributes

Hyphenated attribute names such as `data-*` and `aria-*` can be passed directly to the partial tag and flow into the `attributes` bag like any other attribute:

```
___TWIG0___
```

The output preserves the original attribute names:

```
<div class="card" data-testid="featured-card" aria-label="Featured">
    <h2>Hello</h2>
</div>
```

## [#](#the-attributes-variable) The Attributes Variable

The `attributes` variable is an instance of Laravel's `ComponentAttributeBag`. It supports the following methods:

| Method | Description |
| --- | --- |
| `attributes.merge({class: 'btn'})` | Merge defaults with smart-appending for `class` and `style` |
| `attributes.only('class', 'id')` | Keep only specific attributes |
| `attributes.except('class')` | Exclude specific attributes |
| `attributes.has('id')` | Check if an attribute exists |
| `attributes.get('id')` | Get a single attribute value |

When rendered (cast to string), the bag produces HTML attribute pairs: `class="card mt-4" id="featured"`.

### [#](#smart-class-merging) Smart Class Merging

The `merge` method handles `class` and `style` attributes intelligently — the caller's values are appended to the defaults rather than replacing them.

```
___TWIG0___
<button ___TWIG1___>
    ___TWIG2___
</button>
```

```
___TWIG0___
    Click Me
___TWIG1___
```

Output: `<button class="btn btn-primary mt-4 w-full">Click Me</button>`

## [#](#empty-props) Empty Props

Using `{% props {} %}` with an empty hash means all parameters go to attributes. This is useful for wrapper elements that only need HTML pass-through:

```
___TWIG0___
<div ___TWIG1___>___TWIG2___</div>
```

## [#](#default-values) Default Values

Props support default values that are used when the caller does not pass the parameter:

```
___TWIG0___
```

If the caller passes `type="warning"`, the `type` variable will be `"warning"`. If not passed, it defaults to `"info"`.

## [#](#working-with-body-content) Working with Body Content

The `{% props %}` tag works naturally with the existing `body` keyword on partials. The `body` parameter is automatically excluded from the attribute bag.

```
___TWIG0___
___TWIG1___

<div ___TWIG2___>
    <div class="alert-content">___TWIG3___</div>

    ___TWIG4___
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    ___TWIG5___
</div>
```

```
___TWIG0___
    <strong>Warning!</strong> Something needs your attention.
___TWIG1___
```

#### [#](#see-also) See Also

- [Partial Twig Tag](docs__4.x__markup__tag__partial.md)
- [CMS Partials](docs__4.x__cms__themes__partials.md)

← [{% macro %}](docs__4.x__markup__tag__macro.md)[{% for %}](docs__4.x__markup__tag__for.md) →
