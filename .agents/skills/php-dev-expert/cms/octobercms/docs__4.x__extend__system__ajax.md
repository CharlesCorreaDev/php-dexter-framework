# AJAX - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/extend/system/ajax.html

---

# AJAX

Discover how to use AJAX in the backend panel.

- [Backend AJAX Handlers](docs__4.x__extend__system__ajax.md#backend-ajax-handlers)
- [Triggering AJAX Requests](#triggering-ajax-requests)
- [Behavior AJAX Handlers](docs__4.x__extend__system__ajax.md#behavior-ajax-handlers)
- [Widget AJAX Handlers](docs__4.x__extend__system__ajax.md#widget-ajax-handlers)

The backend panel uses the same [AJAX library as the CMS](docs__4.x__cms__ajax__introduction.md) pages. The library is included and loaded automatically on the backend pages.

## [#](#backend-ajax-handlers) Backend AJAX Handlers

The backend AJAX handlers can be defined in the controller class or widgets. In the controller class the AJAX handlers are defined as public methods with the name starting with "on" string: **onCreateTemplate**, **onGetTemplateList**, etc.

Backend AJAX handlers can return an array of data, throw an exception or redirect to another page. You can use `$this->vars` to set variables and the controller's `makePartial` method to render a partial and return its contents as a part of the response data.

```
public function onOpenTemplate()
{
    if (post('someVar') !== 'someValue') {
        throw new ApplicationException('Invalid value');
    }

    $this->vars['foo'] = 'bar';

    return [
        'partialContents' => $this->makePartial('some-partial')
    ];
}
```

### [#](#triggering-ajax-requests) Triggering AJAX Requests

The AJAX request can be triggered with the data attributes API or the JavaScript API. Please see the [frontend AJAX library](docs__4.x__ajax__introduction.md) for details. The following example shows how to trigger a request with a backend button.

```
<button
    type="button"
    data-request="onDoSomething"
    class="btn btn-default">
    Do Something
</button>
```

## [#](#behavior-ajax-handlers) Behavior AJAX Handlers

Since behaviors will combine their methods to the parent controller, all AJAX handlers that are defined in a behavior are available to the controller. In some cases you may want to override an AJAX handler in the controller, you may do this by calling the `asExtension` method.

The controller AJAX handler takes priority, then requests the `Backend\Behaviors\FormController` behavior and calls its handler.

```
function onDoSomething()
{
    // Custom logic here
    // ...

    // Call the extension handler
    return $this->asExtension('FormController')->doSomething();
}
```

## [#](#widget-ajax-handlers) Widget AJAX Handlers

Widgets implement the same AJAX approach as the backend controllers. The AJAX handlers are public methods of the widget class with names starting with the **on** prefix. The only difference between the widget AJAX handlers and backend controller's AJAX handlers is that you should use the widget's `getEventHandler` method to return the widget's handler name when you refer to it in the widget partials.

```
<a
    href="javascript:;"
    data-request="<?= $this->getEventHandler('onPaginate') ?>"
    title="Next page">Next</a>
```

When called from a widget class or partial the AJAX handler will target itself. For example, if the widget uses the alias of **mywidget** the handler will be targeted with `mywidget::onName`. The above would output the following attribute value:

```
data-request="mywidget::onPaginate"
```

#### [#](#see-also) See Also

- [AJAX Framework Guide](docs__4.x__ajax__introduction.md)

← [Vue Components](docs__4.x__extend__system__vue-components.md)[Available Exceptions](docs__4.x__extend__system__exceptions.md) →
