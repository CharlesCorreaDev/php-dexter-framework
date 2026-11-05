# |link - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/filter/link.html

---

# |link

Twig Filter

- [Supplying URL Parameters](docs__4.x__markup__filter__link.md#supplying-url-parameters)
- [link()](docs__4.x__markup__filter__link.md#link)
- [Nested Items](#nested-items)
- [URL Parameters](#url-parameters)
- [PHP Interface](docs__4.x__markup__filter__link.md#php-interface)

The `|link` filter returns a link generated using the `october://` output schema of a [page finder form widget](docs__4.x__element__form__widget-pagefinder.md). The result is a public URL to the page specified by the form widget.

```
<a href="___TWIG0___" />
```

If you are looking to parse HTML for multiple links and resolve them as HTTP links in the output, see the [`|content` Twig filter](docs__4.x__markup__tag__content.md).

The `|link` filter only returns the URL string. If you need to access nested child items from dynamic page types (like "All Blog Posts" or "All Categories"), use the `link()` function with the `nesting` option instead.

## [#](#supplying-url-parameters) Supplying URL Parameters

You may pass URL parameters to the `|link` filter to supply values for the target page's URL pattern. This is useful when the stored link reference doesn't contain the parameter values needed to build the URL.

```
___TWIG0___
```

For example, if the selected CMS page has the URL pattern `/shop/product/:slug/:id`, the above will produce a URL like `/shop/product/my-product/42`.

## [#](#link) link()

The `link()` function is used to extract more detailed information about a link, including dynamically generated child items.

```
___TWIG0___

___TWIG1___
```

The following properties can be expected in the resulting object.

| Property | Data |
| --- | --- |
| **url** | the public URL to the page. |
| **mtime** | the modification time of the page link. |
| **title** | a human readable title for the link, optional. |
| **items** | an array containing generated child items, optional. |
| **isActive** | set to true if the link is currently active. |

### [#](#nested-items) Nested Items

You may request nested child items by passing the `nesting` option to `true` (second argument), which populates the `items` property on the result. This is essential when working with dynamic page types that generate multiple items, such as "All Blog Posts" or "All Categories".

```
___TWIG0___

___TWIG1___
    <a href="___TWIG2___">___TWIG3___</a>
___TWIG4___
```

Each child item in the `items` array contains the same properties: `url`, `title`, `mtime`, `isActive`, and potentially nested `items` of its own for hierarchical structures.

#### [#](#replacing-parent-with-children) Replacing Parent with Children

When building menus with dynamic page types, you may want to replace a menu item with its generated children. This can be achieved by checking a stored flag and iterating the resolved items.

```
___TWIG0___
    ___TWIG1___

    ___TWIG2___
        ___TWIG3___
        ___TWIG4___
            <a href="___TWIG5___">___TWIG6___</a>
        ___TWIG7___
    ___TWIG8___
        <a href="___TWIG9___">___TWIG10___</a>
        ___TWIG11___
            <ul>
                ___TWIG12___
                    <li><a href="___TWIG13___">___TWIG14___</a></li>
                ___TWIG15___
            </ul>
        ___TWIG16___
    ___TWIG17___
___TWIG18___
```

You may request other site URLs by passing the `sites` option to `true`, which populates the `sites` property on the result.

```
___TWIG0___

___TWIG1___
    ___TWIG2___
___TWIG3___
```

### [#](#url-parameters) URL Parameters

You may supply URL parameters using the `params` option. This is useful when combining parameter resolution with other options like `nesting` or `sites`.

```
___TWIG0___
```

When you only need the URL string and don't need options like `nesting` or `sites`, the `|link` filter provides a simpler syntax for passing URL parameters. See [Supplying URL Parameters](#supplying-url-parameters) above.

## [#](#php-interface) PHP Interface

You may resolve links in PHP using the `Cms\Classes\PageManager` class. The `url` method returns a string to the public URL.

```
Cms\Classes\PageManager::url('october://cms-page@link/about');
```

You may pass URL parameters as the second argument to supply values for the target page's URL pattern.

```
Cms\Classes\PageManager::url($model->custom_page, [
    'slug' => $model->slug,
    'id' => $model->id
]);
```

The `resolve` method returns a detailed `Cms\Models\PageLookupItem` object.

```
$page = Cms\Classes\PageManager::resolve('october://cms-page@link/about');

echo $page->url;
```

#### [#](#see-also) See Also

- [Page Finder Form Widget](docs__4.x__element__form__widget-pagefinder.md)

← [|page](docs__4.x__markup__filter__page.md)[|theme](docs__4.x__markup__filter__theme.md) →
