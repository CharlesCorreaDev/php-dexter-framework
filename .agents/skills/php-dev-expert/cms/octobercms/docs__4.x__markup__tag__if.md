# {% if %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/if.html

---

# {% if %}

Twig Tag

- [Expression Rules](docs__4.x__markup__tag__if.md#expression-rules)

The `{% if %}` and `{% endif %}` tags will represent an expression and is comparable with the if statements of PHP. In the simplest form you can use it to test if an expression evaluates to `true`:

```
___TWIG0___
    <p>The website is in maintenance mode.</p>
___TWIG1___
```

You can also test if an array is not empty:

```
___TWIG0___
    <ul>
        ___TWIG1___
            <li>___TWIG2___</li>
        ___TWIG3___
    </ul>
___TWIG4___
```

> **Note**: If you want to test if the variable is defined, use `{% if users is defined %}` instead.

You can also use `not` to check for values that evaluate to `false`:

```
___TWIG0___
    <p>You are not subscribed to our mailing list.</p>
___TWIG1___
```

For multiple expressions `{% elseif %}` and `{% else %}` can be used:

```
___TWIG0___
    Kenny is sick.
___TWIG1___
    You killed Kenny! You bastard!!!
___TWIG2___
    Kenny looks okay so far.
___TWIG3___
```

## [#](#expression-rules) Expression Rules

The rules to determine if an expression is true or false are the same as in PHP, here are the edge cases rules:

| Value | Boolean evaluation |
| --- | --- |
| *empty string* | false |
| *numeric zero* | false |
| *whitespace-only string* | true |
| *empty array* | false |
| *null* | false |
| *non-empty array* | true |
| *object* | true |

← [{% for %}](docs__4.x__markup__tag__for.md)[|app](docs__4.x__markup__filter__app.md) →
