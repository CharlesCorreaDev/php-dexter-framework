# {% macro %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/macro.html

---

# {% macro %}

Twig Tag

- [Calling Macros](docs__4.x__markup__tag__macro.md#calling-macros)
- [Nested Macros](docs__4.x__markup__tag__macro.md#nested-macros)
- [Context Variable](docs__4.x__markup__tag__macro.md#context-variable)

The `{% macro %}` tag allows you to define custom functions in your templates, similar to regular programming languages.

```
___TWIG0___
    ...
___TWIG1___
```

Alternatively you can include the name of the macro after the end tag for better readability:

```
___TWIG0___
    ...
___TWIG1___
```

The following example defines a function called `input()` that takes 4 arguments, the associated values are accessed as variables within the markup inside.

```
___TWIG0___
    <input
        type="___TWIG1___"
        name="___TWIG2___"
        value="___TWIG3___"
        size="___TWIG4___" />
___TWIG5___
```

> **Note**: Macro arguments don't specify default values and are always considered optional.

## [#](#calling-macros) Calling Macros

Before a macro can be used it needs to be "imported" first using the `{% import %}` tag. If the macro is defined in the same template, the special `_self` variable can be used.

```
___TWIG0___
```

Here the macro functions are assigned to the `form` variable, available to be called like any other function.

```
<p>___TWIG0___</p>
<p>___TWIG1___</p>
```

Macros can be defined in [a theme partial](docs__4.x__cms__themes__partials.md) and imported by name. To import the macros from a partial called **macros/form.htm**, simply pass the name after the `import` tag quoted as a string.

```
___TWIG0___
```

Alternatively you may import macros from a [system view file](docs__4.x__extend__services__response-view.md) and these will be accepted. To import from **plugins/acme/blog/views/macros.htm** simply pass the path hint instead.

```
___TWIG0___
```

## [#](#nested-macros) Nested Macros

When you want to use a macro inside another macro from the same template, you need to import it locally.

```
___TWIG0___
    <input
        type="___TWIG1___"
        name="___TWIG2___"
        value="___TWIG3___"
        size="___TWIG4___" />
___TWIG5___

___TWIG6___
    ___TWIG7___

    <div class="field">
        ___TWIG8___
    </div>
___TWIG9___
```

## [#](#context-variable) Context Variable

Macros don't have access to the current page variables.

```
<!-- October CMS -->
___TWIG0___

___TWIG1___
    <!-- NULL -->
    ___TWIG2___
___TWIG3___
```

You may pass the variables to the function using the special `_context` variable.

```
___TWIG0___
    ___TWIG1___
___TWIG2___

___TWIG3___

<!-- October CMS -->
___TWIG4___
```

← [{% verbatim %}](docs__4.x__markup__tag__verbatim.md)[{% props %}](docs__4.x__markup__tag__props.md) →
