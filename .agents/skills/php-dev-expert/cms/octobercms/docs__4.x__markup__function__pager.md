# pager() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/pager.html

---

# pager()

Twig Function

- [Modifying the URL](docs__4.x__markup__function__pager.md#modifying-the-url)
- [Accessing Pager Variables](docs__4.x__markup__function__pager.md#accessing-pager-variables)
- [Rendering the Pager](docs__4.x__markup__function__pager.md#rendering-the-pager)
- [Default Template](#default-template)
- [Simple Template](#simple-template)
- [AJAX Template](#ajax-template)
- [Using Custom Markup](docs__4.x__markup__function__pager.md#using-custom-markup)

[More...](#)

The `pager()` function is used to handle [paginated records](docs__4.x__extend__database__pagination.md) (first argument). It returns an object containing details about the records, including the page numbers and next / previous links. When treated as a string, it will render default HTML markup.

Once you have retrieved the results, you may display the results and render the page links using the `pager()` Twig function.

```
<div class="container">
    ___TWIG0___
        ___TWIG1___
    ___TWIG2___
</div>

___TWIG3___
```

The following configurable options are supported (second argument).

| Option | Description |
| --- | --- |
| **template** | specify a default template or [view name](docs__4.x__extend__services__response-view.md). Example: `app::my-custom-view` |
| **partial** | specify a [partial name](docs__4.x__cms__themes__partials.md) in the theme (CMS only). Example: `my-partial` |
| **withQuery** | include any existing query parameters with the generated links. Default: `false` |
| **appends** | an optional array of values to include in the query parameters. |
| **fragment** | an optional fragment string to include in the URLs. |

## [#](#modifying-the-url) Modifying the URL

Use the `withQuery` to preserve the existing query string in the URL.

```
___TWIG0___
```

You may add to the query string of pagination links using the `appends` method. For example, to append `&sort=votes` to each pagination link, you should make the following call to `appends`.

```
___TWIG0___
```

If you wish to append a "hash fragment" to the pagination URLs, you may use the `fragment` method. For example, to append `#foo` to the end of each pagination link, make the following call to the `fragment` method.

```
___TWIG0___
```

## [#](#accessing-pager-variables) Accessing Pager Variables

Setting the `pager()` function to a variable extracts the paginated links and meta data from a paginated query. This is particularly useful when [building API endpoints](docs__4.x__cms__resources__building-apis.md) (JSON) but it can also be used to access the variables within Twig.

Starting with a paginated collection.

```
___TWIG0___
```

The `pager()` function will return an extracted object.

```
___TWIG0___
```

Where each variable can be accessed.

```
<a href="___TWIG0___"></a>
```

The returned object is divided in to **links** and **meta** with the following attributes.

| Attribute | Description |
| --- | --- |
| **links.first** | URL to the first page |
| **links.last** | URL to the last page |
| **links.prev** | URL to the previous page |
| **links.next** | URL to the next page |
| **meta.path** | URL to the current page |
| **meta.per\_page** | Number of records per page |
| **meta.total** | Total records found |
| **meta.current\_page** | The current page number |
| **meta.last\_page** | The last page number |
| **meta.from** | Starting record number |
| **meta.to** | Ending record number |

An example in JSON format.

```
{
    "links": {
        "first": "https://yoursite.tld/api/blog/posts?page=1",
        "last": "https://yoursite.tld/api/blog/posts?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "path": "https://yoursite.tld/api/blog/posts",
        "per_page": 3,
        "total": 2,
        "current_page": 1,
        "last_page": 1,
        "from": 1,
        "to": 2
    }
}
```

## [#](#rendering-the-pager) Rendering the Pager

When rendering the `pager()` function directly, accessing it as a string, it will render a default system template for displaying paginated links.

```
___TWIG0___
```

The companion `ajaxPager()` function will render a AJAX-enabled pagination template (see AJAX template below). Ideally, this should be used inside an [AJAX partial](docs__4.x__markup__tag__ajax-partial.md).

```
___TWIG0___
```

### [#](#default-template) Default Template

The `default` template renders the default pagination template. It is used by default with the `paginate()` method on a database query.

```
<ul class="pagination">
    <li class="page-item first">
        <span class="page-link">&larr;</span>
    </li>
    <li class="page-item">
        <a class="page-link" href="?page=1">1</a>
    </li>
    <li class="page-item last">
        <a class="page-link" href="?page=2">&rarr;</a>
    </li>
</ul>
```

File Location: `~/modules/system/views/pagination/default.htm`

### [#](#simple-template) Simple Template

The `simple` template renders pagination with only next and previous buttons. It is used by default with the `simplePaginate()` method on a database query.

```
<ul class="pagination">
    <li class="page-item first">
        <span class="page-link">&larr;</span>
    </li>
    <li class="page-item last">
        <a class="page-link" href="?page=2">&rarr;</a>
    </li>
</ul>
```

File Location: `~/modules/system/views/pagination/simple.htm`

### [#](#ajax-template) AJAX Template

The `ajax` template renders AJAX paginated records. It is used by default with the `paginate()` method on a database query and the `ajaxPager()` function.

```
<ul class="pagination">
    <li class="page-item first">
        <span class="page-link">&larr;</span>
    </li>
    <li class="page-item">
        <a
            class="page-link"
            data-request="onAjax"
            data-request-data="{ page: 1 }"
            data-request-update="{ _self: true }">1</a>
    </li>
    <li class="page-item last">
        <a
            class="page-link"
            data-request="onAjax"
            data-request-data="{ page: 2 }"
            data-request-update="{ _self: true }">&rarr;</a>
    </li>
</ul>
```

File Location: `~/modules/system/views/pagination/ajax.htm`

## [#](#using-custom-markup) Using Custom Markup

Visit the [Pagination feature article](docs__4.x__ajax__features__pagination.md) for instructions on how to use custom pagination markup.

#### [#](#see-also) See Also

- [Building API Resources](docs__4.x__cms__resources__building-apis.md)
- [CMS Pagination](docs__4.x__ajax__features__pagination.md)
- [Model Pagination](docs__4.x__extend__database__pagination.md)

← [carbon()](docs__4.x__markup__function__carbon.md)[abort()](docs__4.x__markup__function__abort.md) →
