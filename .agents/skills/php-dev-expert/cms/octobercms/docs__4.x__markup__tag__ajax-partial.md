# {% ajaxPartial %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/ajax-partial.html

---

# {% ajaxPartial %}

Twig Tag

- [Short Update Syntax](docs__4.x__markup__tag__ajax-partial.md#short-update-syntax)
- [Lazy Loading Partials](docs__4.x__markup__tag__ajax-partial.md#lazy-loading-partials)
- [Calling AJAX Handlers](docs__4.x__markup__tag__ajax-partial.md#calling-ajax-handlers)
- [Capture Lifecycle](#capture-lifecycle)

This tag extends the [`{% partial %}` Twig tag](docs__4.x__markup__tag__partial.md).

The `{% ajaxPartial %}` tag renders partial contents on the page and includes support for [AJAX handlers](docs__4.x__ajax__introduction.md), self-updating and short update syntax. This is commonly referred to as a self-updating partial.

```
___TWIG0___
```

The partial contents are wrapped with a specific HTML tag on the first load only. Subsequent updates of the partial via AJAX do not include the wrapper tag.

```
<div data-ajax-partial="contact-form">
    ... Contents go here ...
</div>
```

## [#](#short-update-syntax) Short Update Syntax

When an AJAX partial is used, you no longer need to specify a selector to update it. Just pass `true` to the [data attributes API](docs__4.x__ajax__attributes-api.md) when using the `data-request-update` attribute.

```
<button
    data-request="onRefresh"
    data-request-update="{ contact-form: true }">
    Refresh
</button>
```

You may also update the partial from inside itself using `_self` as the partial name.

```
<button
    data-request="onRefresh"
    data-request-update="{ _self: true }">
    Refresh
</button>
```

You may also pass the `^` symbol to prepend and the `@` symbol to append content to the container instead of replacing it.

```
<button
    data-request="onRefresh"
    data-request-update="{ _self: '@' }">
    Append
</button>
```

## [#](#lazy-loading-partials) Lazy Loading Partials

The `{% ajaxPartial %}` accepts a `lazy` attribute that will defer rendering the content until the page loads. In the following example, the **posts** partial will be updated after the page has finished loading.

```
___TWIG0___
```

The `lazy body` attributes allow specifying the initial content before loading, followed by the `{% endpartial %}` tag.

```
___TWIG0___
    <p>Loading posts...</p>
___TWIG1___
```

It is important to note, the `{% ajaxPartial lazy %}` tag does not immediately render the partial. Instead, it outputs some initial content that includes a `data-auto-submit` data attribute used by [polling requests](docs__4.x__ajax__features__polling.md). This attribute performs an AJAX request to load the partial contents after the page has loaded. The attribute is not included in subsequent partial updates to prevent an infinite loop.

Here is how it will appear in the browser on the first page load:

```
<div
    data-request="onAjax"
    data-request-update="{ _self: true }"
    data-auto-submit>
    <p>Loading posts...</p>
</div>
```

Do not include the above markup in your partial. The `{% ajaxPartial lazy %}` tag will include it automatically for you.

## [#](#calling-ajax-handlers) Calling AJAX Handlers

When calling an AJAX handler from inside an AJAX partial, a capturing page life cycle (see below) is triggered that enables the use of AJAX handlers within the requested partials.

The following example shows how to submit a simple contact form using a self-updating partial.

```
description = "Self Updating Partial"
```

```
<?
function onSubmitContactForm()
{
    $this['submitted'] = true;
}
?>
```

```
___TWIG0___
    <p>Thank you for contacting us!</p>
___TWIG1___

<button
    data-request="onSubmitContactForm"
    data-request-update="{ _self: true }">
    Submit
</button>
```

Partials that use [CMS components](docs__4.x__cms__themes__components.md) will also have their AJAX handlers made available.

```
[contactForm]
```

```
<button
    data-request="contactForm::onSubmit"
    data-request-update="{ _self: true }">
    Submit
</button>
```

### [#](#capture-lifecycle) Capture Lifecycle

When calling a handler from an AJAX partial, it will trigger a different lifecycle, called the capture lifecycle. ​The capture lifecycle renders the entire page, however it renders the contents into the void. This way, the page is initialized completely, including all the used partials and AJAX handlers.

Since it counts as a complete page render, this may mean the `onRun` [component method](docs__4.x__extend__cms-components.md) is called when an AJAX partial handler is used. ​You can use `Request::ajax()` [helper method](docs__4.x__extend__services__request-input.md) to determine if the request is occurring as the result of an AJAX request.

← [{% partial %}](docs__4.x__markup__tag__partial.md)[{% content %}](docs__4.x__markup__tag__content.md) →
