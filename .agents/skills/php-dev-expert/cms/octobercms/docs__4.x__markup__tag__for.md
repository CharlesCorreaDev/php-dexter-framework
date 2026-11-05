# {% for %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/for.html

---

# {% for %}

Twig Tag

- [Looping a Collection](docs__4.x__markup__tag__for.md#looping-a-collection)
- [Adding a Condition](docs__4.x__markup__tag__for.md#adding-a-condition)
- [The Loop Variable](docs__4.x__markup__tag__for.md#the-loop-variable)

The `{% for %}` and `{% endfor %}` tags will loop over each value in a collection. A collection can be either an array or an object implementing the `Traversable` interface.

```
<ul>
    ___TWIG0___
        <li>___TWIG1___</li>
    ___TWIG2___
</ul>
```

You can also access both keys and values:

```
<ul>
    ___TWIG0___
        <li>___TWIG1___: ___TWIG2___</li>
    ___TWIG3___
</ul>
```

If the collection is empty, you can render a replacement block by using else:

```
<ul>
    ___TWIG0___
        <li>___TWIG1___</li>
    ___TWIG2___
        <li><em>There are no users found</em></li>
    ___TWIG3___
</ul>
```

## [#](#looping-a-collection) Looping a Collection

If you do need to iterate over a collection of numbers, you can use the `..` operator:

```
___TWIG0___
    - ___TWIG1___
___TWIG2___
```

The above snippet of code would print all numbers from 0 to 10.

It can also be useful with letters:

```
___TWIG0___
    - ___TWIG1___
___TWIG2___
```

The `..` operator can take any expression at both sides:

```
___TWIG0___
    - ___TWIG1___
___TWIG2___
```

## [#](#adding-a-condition) Adding a Condition

Unlike in PHP there is no function to `break` or `continue` in a loop, however you can still filter the collection. The following example skips all the `users` that are not active.

```
<ul>
    ___TWIG0___
        ___TWIG1___
            <li>___TWIG2___</li>
        ___TWIG3___
    ___TWIG4___
</ul>
```

## [#](#the-loop-variable) The Loop Variable

Inside of a `for` loop block you can access some special variables:

| Variable | Description |
| --- | --- |
| `loop.index` | The current iteration of the loop. (1 indexed) |
| `loop.index0` | The current iteration of the loop. (0 indexed) |
| `loop.revindex` | The number of iterations from the end of the loop (1 indexed) |
| `loop.revindex0` | The number of iterations from the end of the loop (0 indexed) |
| `loop.first` | True if first iteration |
| `loop.last` | True if last iteration |
| `loop.length` | The number of items in the collection |
| `loop.parent` | The parent context |

```
___TWIG0___
    ___TWIG1___ - ___TWIG2___
___TWIG3___
```

← [{% props %}](docs__4.x__markup__tag__props.md)[{% if %}](docs__4.x__markup__tag__if.md) →
