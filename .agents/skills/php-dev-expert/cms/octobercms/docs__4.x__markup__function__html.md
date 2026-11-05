# html() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/html.html

---

# html()

Twig Function

- [html\_strip()](docs__4.x__markup__function__html.md#html-strip)
- [html\_limit()](docs__4.x__markup__function__html.md#html-limit)
- [html\_clean()](docs__4.x__markup__function__html.md#html-clean)
- [html\_email()](docs__4.x__markup__function__html.md#html-email)
- [html\_mailto()](docs__4.x__markup__function__html.md#html-mailto)

Functions prefixed with `html_` perform tasks that are useful when dealing with HTML markup. The helper maps directly to the `Html` PHP class and its methods. For example:

```
___TWIG0___
```

The above is the PHP equivalent of the following:

```
<?= Html::strip() ?>
```

Methods in *camelCase* should be converted to *snake\_case*.

You may also apply the HTML functions as a Twig filter.

```
___TWIG0___
```

## [#](#html-strip) html\_strip()

Removes HTML from a string.

```
// Outputs: Hello world
___TWIG0___
```

You may pass the first argument as allowable tags.

```
// Outputs: <p>Text</p>
___TWIG0___
```

## [#](#html-limit) html\_limit()

Limits HTML with specific length with a proper tag handling.

```
___TWIG0___
```

To add a suffix when limit is applied, pass it as the second argument. Defaults to `...`.

```
___TWIG0___
```

## [#](#html-clean) html\_clean()

Cleans HTML to prevent most XSS attacks.

```
___TWIG0___
```

## [#](#html-email) html\_email()

Obfuscates an e-mail address to prevent spam-bots from sniffing it.

```
___TWIG0___
```

For example:

```
<a href="mailto: ___TWIG0___">Email me</a>

<!-- The above will output -->
<a href="mailto: &#109;&#97;&#105;&#108;&#x74;o&#x3a;&#97;&#64;b.&#x63;">Email me</a>
```

## [#](#html-mailto) html\_mailto()

Outputs a complete anchor link with obfuscated email.

```
___TWIG0___
```

← [form()](docs__4.x__markup__function__form.md)[vite()](docs__4.x__markup__function__vite.md) →
