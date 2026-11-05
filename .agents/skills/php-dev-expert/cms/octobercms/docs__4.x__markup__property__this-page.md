# this.page - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/property/this-page.html

---

# this.page

Twig Property

- [Properties](docs__4.x__markup__property__this-page.md#properties)
- [layout](#layout)
- [id](#id)
- [title](#title)
- [description](#description)
- [meta\_title](#meta-title)
- [meta\_description](#meta-description)
- [hidden](#hidden)
- [fileName](#filename)
- [baseFileName](#basefilename)

[More...](#)

You can access the current page object via `this.page` and it returns the object `Cms\Classes\Page`. This object can also be accessed in the [PHP code of a page](docs__4.x__cms__themes__pages.md) as `$this->page`.

## [#](#properties) Properties

`this.page` has the following properties.

### [#](#layout) layout

Reference to the layout name used by this page, if defined. Not to be confused with `this.layout`.

```
___TWIG0___
```

### [#](#id) id

Converts the page file name and folder name to a CSS friendly identifier.

```
<body class="page-___TWIG0___">
```

If the page file was **home/index.htm** this would generate a class name of `page-home-index`.

### [#](#title) title

The page title as defined by the configuration.

```
<h1>___TWIG0___</h1>
```

### [#](#description) description

The page description as defined by the configuration.

```
<p>___TWIG0___</p>
```

### [#](#meta-title) meta\_title

An alternative `title` field, usually more descriptive for SEO purposes.

```
<title>___TWIG0___</title>
```

### [#](#meta-description) meta\_description

An alternative `description` field, usually more descriptive for SEO purposes.

```
<meta name="description" content="___TWIG0___">
```

### [#](#hidden) hidden

Hidden pages are accessible only by logged-in back-end users.

```
___TWIG0___
    <p>Note to other admins: We are currently working on this page.</p>
___TWIG1___
```

### [#](#filename) fileName

Page file name in the theme with extension.

### [#](#basefilename) baseFileName

Page file name in the theme without the extension.

← [Templating](docs__4.x__markup__templating.md)[this.layout](docs__4.x__markup__property__this-layout.md) →
