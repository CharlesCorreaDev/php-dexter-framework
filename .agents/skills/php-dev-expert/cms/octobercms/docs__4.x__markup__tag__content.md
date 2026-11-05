# {% content %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/content.html

---

# {% content %}

Twig Tag

- [Variables](docs__4.x__markup__tag__content.md#variables)
- [Setting Contents to a Twig Variable](docs__4.x__markup__tag__content.md#setting-contents-to-a-twig-variable)
- [Checking a Content File Exists](docs__4.x__markup__tag__content.md#checking-a-content-file-exists)
- [Parsing Content as a String](docs__4.x__markup__tag__content.md#parsing-content-as-a-string)

The `{% content %}` tag will display a [CMS content block](docs__4.x__cms__themes__content.md) on the page. To display content block called **contacts.htm** you pass the file name after the `content` tag quoted as a string.

```
___TWIG0___
```

A content block inside a subdirectory can be rendered in the same way.

```
___TWIG0___
```

The [Themes documentation](docs__4.x__cms__themes__themes.md) has more details on subdirectory usage.

Content blocks can be rendered as plain text:

```
___TWIG0___
```

You can also use Markdown syntax:

```
___TWIG0___
```

Content blocks can also be used in combination with [layout placeholders](docs__4.x__cms__themes__layouts.md).

```
___TWIG0___
    ___TWIG1___
___TWIG2___
```

## [#](#variables) Variables

You can pass variables to content blocks by specifying them after the file name:

```
___TWIG0___
```

You can also assign new variables for use in the content:

```
___TWIG0___
```

Inside the content, variables can be accessed using a basic syntax using singular *curly brackets*:

```
<p>Country: {country}, city: {city}.</p>
```

You can also pass a collection of variables as a simple array:

```
___TWIG0___
```

The collection of variables is accessed by using an opening and closing set of brackets:

```
<ul>
    {likes}
        <li>{name}</li>
    {/likes}
</ul>
```

> **Note**: Twig syntax is not supported in Content blocks, consider using a [CMS partial](docs__4.x__markup__cms__partials.md) instead.

## [#](#setting-contents-to-a-twig-variable) Setting Contents to a Twig Variable

In any template you can set the contents to a variable with the `content()` function. This lets you manipulate the output before display. Remember to use the `|raw` filter to prevent output escaping.

```
___TWIG0___

___TWIG1___
```

You may also pass variables to the content as the second argument.

```
___TWIG0___
```

## [#](#checking-a-content-file-exists) Checking a Content File Exists

The `hasContent()` function can be used to check if a content exists without rendering the contents. To prevent the rendering of the content, pass the second argument as false and it will return true or false if the content file is found.

```
___TWIG0___
    ___TWIG1___
___TWIG2___
    <p>Welcome content not found!</p>
___TWIG3___
```

## [#](#parsing-content-as-a-string) Parsing Content as a String

When using the `{% content %}` tag, it will resolve [CMS snippets](docs__4.x__cms__themes__snippets.md) and links created by the [page finder form widget](docs__4.x__element__form__widget-pagefinder.md) automatically.

Similarly, the `|content` filter can be used to parse a HTML string for multiple content objects and resolve them in the output.

```
___TWIG0___
```

The `|md` filter can also be used to parse Markdown content found in a string.

```
___TWIG0___
```

#### [#](#see-also) See Also

- [CMS Snippets](docs__4.x__cms__themes__snippets.md)
- [Link Twig Filter](docs__4.x__markup__filter__link.md)
- [Markdown Twig Filter](docs__4.x__markup__filter__md.md)

← [{% ajaxPartial %}](docs__4.x__markup__tag__ajax-partial.md)[{% component %}](docs__4.x__markup__tag__component.md) →
