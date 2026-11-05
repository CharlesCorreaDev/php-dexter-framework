# form() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/form.html

---

# form()

Twig Function

- [form\_open()](docs__4.x__markup__function__form.md#form-open)
- [form\_ajax()](docs__4.x__markup__function__form.md#form-ajax)
- [form\_close()](docs__4.x__markup__function__form.md#form-close)
- [Passing Attributes to the Generated Element](docs__4.x__markup__function__form.md#passing-attributes-to-the-generated-element)

Functions prefixed with `form_` perform tasks that are useful when dealing with forms. The helper maps directly to the `Form` PHP class and its methods. For example:

```
___TWIG0___
```

The above is the PHP equivalent of the following:

```
<?= Form::close() ?>
```

> **Note**: Methods in *camelCase* should be converted to *snake\_case*.

## [#](#form-open) form\_open()

Outputs a standard `<form>` opening tag along with the `_session_key` and `_token` hidden fields for CSRF protection. If you are using the [AJAX Framework](docs__4.x__ajax__introduction.md), it is recommended that you use `form_ajax()` instead.

```
___TWIG0___
```

Attributes can be passed in the first argument.

```
___TWIG0___
```

The above example would output as the following:

```
<form class="form-horizontal">
```

There are some special options that can also be used alongside the attributes.

```
___TWIG0___
```

The function support the following options:

| Option | Description |
| --- | --- |
| **method** | Request method. Corresponds to the **method** FORM tag attribute. Eg: POST, GET, PUT, DELETE |
| **request** | A handler name to execute on the server when the form is posted. See the [AJAX handlers](docs__4.x__ajax__handlers.md) article for details about event handlers. |
| **url** | Specifies URL to post the form to. Corresponds to the **action** FORM tag attribute. |
| **files** | Determines whether the form will submit files. Accepted values: **true** and **false**. |
| **model** | A model object for the form model binding. |

## [#](#form-ajax) form\_ajax()

Outputs an AJAX enabled FORM opening tag. The first parameter of the `form_ajax()` function is the AJAX handler name. The handler can be defined in the layout or page PHP section code, it can also be defined in a component. You may find more information about AJAX in the [AJAX Framework](docs__4.x__ajax__introduction.md) article.

```
___TWIG0___
```

Attributes can be passed in the second argument.

```
___TWIG0___
```

The above example would output as the following:

```
<form data-request="onSave" class="form-horizontal">
```

There are some special options that can also be used alongside the attributes.

```
___TWIG0___

___TWIG1___
```

> **Note**: When attempting to reference a component's alias with `__SELF__` as an argument to `form_ajax()` you must first build the string you wish to use outside of the call itself. Example:

```
___TWIG0___
___TWIG1___
```

The function support the following options:

| Option | Description |
| --- | --- |
| **success** | JavaScript string to execute on successful result. |
| **error** | JavaScript string to execute on failed result. |
| **confirm** | A confirmation message to display before sending the request. |
| **redirect** | On successful result, redirect to a URL. |
| **update** | An array of partials to update on success in the following format: { 'partial': '#element' }. |
| **data** | Extra data to include with the request in the following format: { 'myvar': 'myvalue' }. |

## [#](#form-close) form\_close()

Outputs a standard FORM closing tag. This tag is generally available to provide consistency in usage.

```
___TWIG0___
```

The above example would output as the following:

```
</form>
```

## [#](#passing-attributes-to-the-generated-element) Passing Attributes to the Generated Element

You can pass additional attributes to the `Form::open()` method by passing an array of attribute names and values to be rendered on the final generated `<form>` element.

```
<?= Form::open(array('id' => 'example', 'class' => 'something')) ?>
    // ..
<?= Form::close() ?>
```

The above example would output the following:

```
<form method="POST" action="" accept-charset="UTF-8" id="example" class="something">

</form>
```

← [str()](docs__4.x__markup__function__str.md)[html()](docs__4.x__markup__function__html.md) →
