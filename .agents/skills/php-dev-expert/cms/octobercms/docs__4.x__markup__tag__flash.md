# {% flash %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/flash.html

---

# {% flash %}

Twig Tag

- [Setting Flash Messages to a Twig Variable](docs__4.x__markup__tag__flash.md#setting-flash-messages-to-a-twig-variable)

View the [Flash Messages article](docs__4.x__ajax__features__flash-messages.md) to learn more about using flash messages.

The `{% flash %}` and `{% endflash %}` tags will render any flash messages stored in the user session, set by the `Flash` PHP class. The `message` variable inside will contain the flash message text and the markup inside will repeat for multiple flash messages.

```
<ul>
    ___TWIG0___
        <li>___TWIG1___</li>
    ___TWIG2___
</ul>
```

You can use the `type` variable that represents the flash message type &mdash; **success**, **error**, **info** or **warning**.

```
___TWIG0___
    <div class="alert alert-___TWIG1___">
        ___TWIG2___
    </div>
___TWIG3___
```

You can also specify the `type` to filter flash messages of a given type. The next example will show only **success** messages, if there is an **error** message it won't be displayed.

```
___TWIG0___
    <div class="alert alert-success">___TWIG1___</div>
___TWIG2___
```

## [#](#setting-flash-messages-to-a-twig-variable) Setting Flash Messages to a Twig Variable

In any template you can set the flash messages to a variable with the `flash()` function. This lets you manipulate the output before display. The function returns an array with one flash message per type.

```
___TWIG0___
```

The first argument can specify the message type, which returns the message as a string.

```
___TWIG0___
```

If the first argument is set to **all** it will return an array of types, each type is an array of all flash messages.

```
___TWIG0___
```

#### [#](#see-also) See Also

- [Flash Messages](docs__4.x__ajax__features__flash-messages.md)

← [{% placeholder %}](docs__4.x__markup__tag__placeholder.md)[{% cache %}](docs__4.x__markup__tag__cache.md) →
