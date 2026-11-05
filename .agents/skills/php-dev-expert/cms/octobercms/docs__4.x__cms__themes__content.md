# Content Blocks - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/cms/themes/content.html

---

# Content Blocks

Dedicated files for storing and updating page content.

- [Introduction](docs__4.x__cms__themes__content.md#introduction)
- [Rendering Content Blocks](docs__4.x__cms__themes__content.md#rendering-content-blocks)
- [Translating Content Blocks](docs__4.x__cms__themes__content.md#translating-content-blocks)
- [Passing Variables to Content Blocks](docs__4.x__cms__themes__content.md#passing-variables-to-content-blocks)
- [Global Variables](#global-variables)

Content Blocks can be text, HTML or [Markdown  (opens new window)](http://daringfireball.net/projects/markdown/syntax) blocks that are edited separately from the page or layout. They're designed to hold static content only and support basic templating variables. [Partials](docs__4.x__cms__themes__partials.md) are more flexible and should be used for generating dynamic content.

## [#](#introduction) Introduction

Content blocks files reside in the **/content** subdirectory of a theme directory. The following extensions are supported for content files.

| Extension | Description |
| --- | --- |
| **html** | Used for HTML markup (WYSIWYG editor). |
| **htm** | Used for HTML markup (code editor). |
| **txt** | Used for plain text. |
| **md** | Used for Markdown syntax. |

The extension affects a content block's display mode in the back-end user interface, either with a WYSIWYG editor, code editor or markdown editor. It also determines rendering the blocks on the website; for example, Markdown blocks will convert to HTML before display.

## [#](#rendering-content-blocks) Rendering Content Blocks

Use the `{% content 'file.htm' %}` tag to render a content block in a [page](docs__4.x__cms__themes__pages.md), [partial](docs__4.x__cms__themes__partials.md) or [layout](docs__4.x__cms__themes__layouts.md).

This example shows a complete page rendering a content block.

```
url = "/contacts"
```

```
<div class="contacts">
    ___TWIG0___
</div>
```

Another example rendering some markdown with the `md` extension.

```
___TWIG0___
```

## [#](#translating-content-blocks) Translating Content Blocks

When using [site definitions](docs__4.x__cms__multisite__multisite.md) with different locales, a content block is translated by placing a copy of the file inside a subdirectory named after the locale. The base file acts as the default and the locale directory mirrors the same file path.

```
content/
├── my-content.htm          ← Default locale
├── fr/
│   └── my-content.htm      ← French
└── ru/
    └── my-content.htm      ← Russian
```

Nested paths mirror the same way, so `content/blog/intro.htm` translates as `content/fr/blog/intro.htm`, where the locale directory is created at the content root.

When the block is rendered, the directories are checked against the active site's locale in the following order, where the first matching file wins.

1. The exact site locale, for example `fr-ca`.
2. The base language of the locale, for example `fr`.
3. The base file.

This means a site using the `fr-ca` locale shares the `fr` directory until a dedicated `fr-ca` directory exists, and any site without a matching directory falls back to the base file. The lookup only applies to directories matching the active site's locale, so directories with other names remain addressable directly, for example `{% content 'fr/my-content.htm' %}`.

## [#](#passing-variables-to-content-blocks) Passing Variables to Content Blocks

Sometimes you may need to pass variables to a content block from the external code. While content blocks do not support Twig markup, they do support using variables with basic syntax. You can pass variables to content blocks by specifying them after the content block name in the `{% content %}` tag.

Passing the variable called `name` with a value **John** to the content block.

```
___TWIG0___
```

Inside the content block, variables can be accessed using singular *curly brackets*.

```
<h1>This is a demo for {name}</h1>
```

More information on variable use can be found in the [Markup guide](docs__4.x__markup__tag__content.md).

### [#](#global-variables) Global Variables

You may register variables that are globally available to all content blocks with the `View::share` method.

```
View::share('site_name', 'October CMS');
```

A common area to place this method is inside the register or boot method of a [plugin registration file](docs__4.x__extend__system__plugins.md). Using the above example, the variable `{site_name}` will be available inside all content blocks.

```
<p>Welcome to {site_name}</p>
```

#### [#](#see-also) See Also

- [Content Twig Tag](docs__4.x__markup__tag__content.md)

← [Layouts](docs__4.x__cms__themes__layouts.md)[Components](docs__4.x__cms__themes__components.md) →
