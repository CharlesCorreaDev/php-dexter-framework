# {% placeholder %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/placeholder.html

---

# {% placeholder %}

Twig Tag

- [Replacing Content](docs__4.x__markup__tag__placeholder.md#replacing-content)
- [Handling Multiple Calls](docs__4.x__markup__tag__placeholder.md#handling-multiple-calls)
- [Default Placeholder Content](docs__4.x__markup__tag__placeholder.md#default-placeholder-content)
- [Checking a Placeholder Exists](docs__4.x__markup__tag__placeholder.md#checking-a-placeholder-exists)
- [Using Placeholders as Variables](docs__4.x__markup__tag__placeholder.md#using-placeholders-as-variables)
- [System Placeholders](docs__4.x__markup__tag__placeholder.md#system-placeholders)
- [{% scripts %}](#scripts)
- [{% styles %}](#styles)
- [{% meta %}](#meta)
- [Custom Attributes](docs__4.x__markup__tag__placeholder.md#custom-attributes)

[More...](#)

The `{% placeholder %}` tag will render a placeholder section which is generally [used inside Layouts](docs__4.x__cms__themes__layouts.md). This tag will return any placeholder contents that have been added using the `{% put %}` tag, or any default content that is defined (optional).

```
___TWIG0___
```

Content can then be injected into the placeholder in any subsequent page or partial.

```
___TWIG0___
    <p>Place this text in the name placeholder</p>
___TWIG1___
```

## [#](#replacing-content) Replacing Content

By default, the `{% put %}` will append the content to the placeholder. Use the `replace` attribute to replace the contents instead.

```
___TWIG0___
    <p>Replace all the content inside with this</p>
___TWIG1___
```

## [#](#handling-multiple-calls) Handling Multiple Calls

In some cases you may call the `{% put %}` tag inside a partial to include some assets on the pages. Then, when including that partial multiple times on the same page, it can cause the script to be inserted twice. Including the `once` attribute will ensure the content is only set once per template. The cache key uses the CMS template filename to determine if it has already been inserted.

```
___TWIG0___
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
___TWIG1___
```

## [#](#default-placeholder-content) Default Placeholder Content

Placeholders can have default content that can be either replaced or complemented by a page. If the `{% put %}` tag for a placeholder with default content is not defined on a page, the default placeholder content is displayed. Example placeholder definition in the layout template:

```
___TWIG0___
    <p><a href="/contacts">Contact us</a></p>
___TWIG1___
```

The page can inject more content to the placeholder. The `{% default %}` tag specifies a place where the default placeholder content should be displayed. If the tag is not used the placeholder content is completely replaced.

```
___TWIG0___
    <p><a href="/services">Services</a></p>
    ___TWIG1___
___TWIG2___
```

## [#](#checking-a-placeholder-exists) Checking a Placeholder Exists

In a layout template you can check if a placeholder content exists by using the `hasPlaceholder()` function. This lets you to generate different markup depending on whether the page provides a placeholder content. Example:

```
___TWIG0___
    <!-- Markup for a page with a sidebar -->
    <div class="row">
        <div class="col-md-3">
            ___TWIG1___
        </div>
        <div class="col-md-9">
            ___TWIG2___
        </div>
    </div>
___TWIG3___
    <!-- Markup for a page without a sidebar -->
    ___TWIG4___
___TWIG5___
```

## [#](#using-placeholders-as-variables) Using Placeholders as Variables

Placeholders can be useful for setting inherited variables, such as the active link in page navigation. The `{% put %}` tag allows you to set values directly. For example, setting the `activeNav` value to **home** inside a page template.

```
___TWIG0___
```

The variable can be accessed inside the layout template using the `placeholder()` function. From this, we can determine the active link based on the value set by the page.

```
___TWIG0___

<ul>
    <li class="___TWIG1___">Home</li>
    <li class="___TWIG2___">Blog</li>
    <li class="___TWIG3___">Contact</li>
</ul>
```

A default value (second argument) can be supplied as a fallback.

```
___TWIG0___
```

## [#](#system-placeholders) System Placeholders

October CMS defines static placeholders that are used by the system. Packages will use these placeholders to inject their dependencies to the page, either using the PHP or Twig interface.

### [#](#scripts) {% scripts %}

The `{% scripts %}` tag inserts JavaScript file references to scripts injected by the application. The tag is commonly defined before the closing BODY tag.

```
<body>
    ...
    ___TWIG0___
</body>
```

> **Note**: This tag should appear once only in a given page cycle to prevent duplicated references.

#### [#](#injecting-scripts) Injecting Scripts

Links to JavaScript files can be programmatically injected in PHP either by [components](docs__4.x__extend__cms-components.md) or [pages](docs__4.x__cms__themes__pages.md).

```
function onStart()
{
    $this->addJs('assets/js/app.js');
}
```

You can also inject raw markup to the `{% scripts %}` tag by using the **scripts** anonymous placeholder [in the layout](docs__4.x__cms__themes__layouts.md). Use the `{% put %}` tag in pages or layouts to add content to the placeholder.

```
___TWIG0___
    <script type="text/javascript" src="/themes/demo/assets/js/menu.js"></script>
___TWIG1___
```

### [#](#styles) {% styles %}

The `{% styles %}` tag renders CSS links to stylesheet files injected by the application. The tag is commonly defined in the HEAD section of a page or layout.

```
<head>
    ...
    ___TWIG0___
</head>
```

> **Note**: This tag should appear once only in a given page cycle to prevent duplicated references.

#### [#](#injecting-styles) Injecting Styles

Links to StyleSheet files can be programmatically injected in PHP either by [components](docs__4.x__extend__cms-components.md) or [pages](docs__4.x__cms__themes__pages.md).

```
function onStart()
{
    $this->addCss('assets/css/hello.css');
}
```

You can also inject raw markup to the `{% styles %}` tag by using the **styles** anonymous placeholder [in the layout](docs__4.x__cms__themes__layouts.md). Use the `{% put %}` tag in pages or layouts to add content to the placeholder.

```
___TWIG0___
    <link href="/themes/demo/assets/css/page.css" rel="stylesheet" />
___TWIG1___
```

### [#](#meta) {% meta %}

The `{% meta %}` tag renders meta content, such as open graph information. The tag is commonly defined in the HEAD section of a page or layout, placed before the styles and scripts.

```
<head>
    ___TWIG0___
    ...
</head>
```

> **Note**: This tag should appear once only in a given page cycle to prevent duplicated references.

#### [#](#injecting-meta-data) Injecting Meta Data

You can inject raw markup to the `{% meta %}` tag by using the **meta** anonymous placeholder [in the layout](docs__4.x__cms__themes__layouts.md). Use the `{% put %}` tag in pages or layouts to add content to the placeholder.

```
___TWIG0___
    <meta name="turbo-visit-control" content="error">
___TWIG1___
```

## [#](#custom-attributes) Custom Attributes

The `placeholder` tag accepts two optional attributes &mdash; `title` and `type`. The `title` attribute is not used by the CMS itself, but could be used by other plugins. The type attribute manages the placeholder type. There are two types supported at the moment &mdash; **text** and **html**. The content of text placeholders is escaped before it's displayed. The title and type attributes should be defined after the placeholder name and the `default` attribute, if it's presented. Example:

```
___TWIG0___
```

Example of a placeholder with a default content, title and type attributes.

```
___TWIG0___
    There is no ordering information for this product.
___TWIG1___
```

← [{% component %}](docs__4.x__markup__tag__component.md)[{% flash %}](docs__4.x__markup__tag__flash.md) →
