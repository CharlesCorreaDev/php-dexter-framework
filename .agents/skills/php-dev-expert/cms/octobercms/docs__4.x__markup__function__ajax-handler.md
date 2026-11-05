# ajaxHandler() - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/function/ajax-handler.html

---

# ajaxHandler()

Twig Function

- [Accessing Data](docs__4.x__markup__function__ajax-handler.md#accessing-data)
- [Using Responses](docs__4.x__markup__function__ajax-handler.md#using-responses)
- [Handling Errors](docs__4.x__markup__function__ajax-handler.md#handling-errors)
- [Handling Redirects](docs__4.x__markup__function__ajax-handler.md#handling-redirects)
- [Handling Flash Messages](docs__4.x__markup__function__ajax-handler.md#handling-flash-messages)

The `ajaxHandler()` function runs an AJAX handler inside Twig and prepares a `Cms\Classes\AjaxResponse` response object. An example of calling an **onResetPassword** handler.

```
___TWIG0___
```

The following properties can be expected in the resulting object.

| Property | Data |
| --- | --- |
| **data** | data set or returned by the handler, also available by directly calling the object. |
| **error** | an error was thrown during the handler execution. |
| **flash** | flash messages set by the handler. |
| **redirect** | the handler returned a redirect. |

## [#](#accessing-data) Accessing Data

Variables assigned to the page are available to the resulting object. Take the following AJAX handler definition.

```
function onResetPassword()
{
    $this['someVariable'] = 'someValue';
}
```

Next is an, an example of calling the **onResetPassword** handler.

```
___TWIG0___
```

The **data** variables returned from the handler or set on the page during the handler call will be available via resulting variable.

```
___TWIG0___
```

## [#](#using-responses) Using Responses

When [building APIs in your theme](docs__4.x__cms__resources__building-apis.md), the response can be passed directly to the `response()` [Twig function](docs__4.x__markup__function__response.md).

```
___TWIG0___
```

When returning as a response, the data will be available in JSON as the **data** property.

```
{
    "data": {}
}
```

The page variables are not included with the response for security reasons. Call the `withPageVars` method to include them with the response.

```
___TWIG0___
```

The `withVars` method can be used to include additional data with the response.

```
___TWIG0___
```

## [#](#handling-errors) Handling Errors

If an exception occurs during the handler, the error message will be available in the **error.message** property. If the error is a `ValidationException` then the invalid fields can be found in the **error.fields** property.

```
___TWIG0___
    An error occurred: ___TWIG1___
___TWIG2___
```

If an exception occurs, the error information will be available as the **error** property.

```
{
    "error": {
        "message": "An error occurred"
    }
}
```

When returning a response from an AJAX handler, the following status codes are used for the exception type.

| Exception | Status Code |
| --- | --- |
| `ValidationException` | 422 Unprocessable Entity |
| `ApplicationException` | 400 Bad Request |
| `Exception` | 500 Internal Server Error |

## [#](#handling-redirects) Handling Redirects

If the AJAX handler caused a redirect, this will be available on the **redirect** property and can be returned directly. For example

```
function onRedirect()
{
    return Redirect::to('https://octobercms.com');
}
```

The following will redirect to the browser as a response.

```
___TWIG0___
```

The object contains the **redirect** messages alongside the data.

```
{
    "data": {},
    "redirect": "https://octobercms.com"
}
```

## [#](#handling-flash-messages) Handling Flash Messages

If flash messages were used, these will be available in the **flash** property. Take the following handler as an example.

```
function onTest()
{
    Flash::success('Test successful');
}
```

Calling the handler and sending as a response.

```
___TWIG0___
```

The output contains the **flash** messages alongside the data.

```
{
    "data": {},
    "flash": {
        "success": "Test successful"
    }
}
```

#### [#](#see-also) See Also

- [Building API Resources](docs__4.x__cms__resources__building-apis.md)

← [|currency](docs__4.x__markup__filter__currency.md)[response()](docs__4.x__markup__function__response.md) →
