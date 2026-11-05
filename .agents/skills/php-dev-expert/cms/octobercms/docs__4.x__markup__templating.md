# Templating - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/templating.html

---

# Templating

Learn about using Twig templating to display dynamic content.

- [Variables](docs__4.x__markup__templating.md#variables)
- [Tags](docs__4.x__markup__templating.md#tags)
- [Filters](docs__4.x__markup__templating.md#filters)
- [Functions](docs__4.x__markup__templating.md#functions)
- [Access logic](docs__4.x__markup__templating.md#access-logic)
- [Unsupported features](docs__4.x__markup__templating.md#unsupported-features)

[More...](#)

October CMS extends the [Twig template language  (opens new window)](https://twig.symfony.com/doc/) with a number of functions, tags, filters and variables. These extensions allow you to use the CMS features and access the page environment information inside your templates.

## [#](#variables) Variables

Template variables are printed on the page using *double curly brackets*.

```
___TWIG0___
```

Variables can also represent *expressions*.

```
___TWIG0___
```

Variables can be concatenated with the `~` character.

```
___TWIG0___
```

October provides global variables under the `this` variable, as listed under the **Variables** section.

## [#](#tags) Tags

Tags are a unique feature to Twig and are wrapped with `{% %}` characters.

```
___TWIG0___
```

Tags provide a more fluent way to describe template logic.

```
___TWIG0___
    Stay inside
___TWIG1___
    Go outside and play
___TWIG2___
```

The `{% set %}` tag can be used to set variables inside the template.

```
___TWIG0___
```

Tags can take on many different syntaxes and are listed under the **Tags** section.

## [#](#filters) Filters

Filters act as modifiers to variables for a single instance and are applied using a *pipe symbol* followed by the filter name.

```
___TWIG0___
```

Filters can take arguments like a function.

```
___TWIG0___
```

Filters can be applied in succession.

```
___TWIG0___
```

Filters are listed under the **Filters** section.

## [#](#functions) Functions

Functions allow logic to be executed and the return result acts as a variable.

```
___TWIG0___
```

Functions can take arguments.

```
___TWIG0___
```

Functions are listed under the **Functions** section.

## [#](#access-logic) Access logic

The most important thing to learn about Twig is how it accesses the PHP layer. For convenience sake `{{ foo.bar }}` does the following checks on a PHP object:

1. Check if `foo` is an array and `bar` a valid element.
2. If not, and if `foo` is an object, check that `bar` is a valid property.
3. If not, and if `foo` is an object, check that `bar` is a valid method (even if bar is the constructor - use `__construct()` instead).
4. If not, and if `foo` is an object, check that `getBar` is a valid method.
5. If not, and if `foo` is an object, check that `isBar` is a valid method.
6. If not, return a `null` value.

## [#](#unsupported-features) Unsupported features

There are some features offered by Twig that are not supported by October CMS. They are listed below next to the equivalent feature.

| Tag | Equivalent |
| --- | --- |
| `{% extend %}` | Use [Layouts](docs__4.x__cms__themes__layouts.md) or `{% placeholder %}` |
| `{% include %}` | Use `{% partial %}` or `{% content %}` |

[this.page](docs__4.x__markup__property__this-page.md) →
