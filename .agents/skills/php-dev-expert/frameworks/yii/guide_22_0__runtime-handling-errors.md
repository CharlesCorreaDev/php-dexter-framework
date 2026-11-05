# Handling Requests: Handling Errors | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/runtime-handling-errors

---

0

# Handling Errors [¶](#handling-errors)

Yii includes a built-in [error handler](https://www.yiiframework.com/doc/api/22.0/yii-web-errorhandler) which makes error handling a much more pleasant
experience than before. In particular, the Yii error handler does the following to improve error handling:

- All non-fatal PHP errors (e.g. warnings, notices) are converted into catchable exceptions.
- Exceptions and fatal PHP errors are displayed with detailed call stack information and source code lines
  in debug mode.
- Supports using a dedicated [controller action](guide_22_0__structure-controllers.md#actions) to display errors.
- Supports different error response formats.

The [error handler](https://www.yiiframework.com/doc/api/22.0/yii-web-errorhandler) is enabled by default. You may disable it by defining the constant
`YII_ENABLE_ERROR_HANDLER` to be `false` in the [entry script](guide_22_0__structure-entry-scripts.md) of your application.

## Using Error Handler [¶](#using-error-handler)

The [error handler](https://www.yiiframework.com/doc/api/22.0/yii-web-errorhandler) is registered as an [application component](guide_22_0__structure-application-components.md) named `errorHandler`.
You may configure it in the application configuration like the following:

```
return [
    'components' => [
        'errorHandler' => [
            'maxSourceLines' => 20,
        ],
    ],
];
```

With the above configuration, the number of source code lines to be displayed in exception pages will be up to 20.

As aforementioned, the error handler turns all non-fatal PHP errors into catchable exceptions. This means you can
use the following code to deal with PHP errors:

```
use Yii;
use yii\base\ErrorException;

try {
    10/0;
} catch (ErrorException $e) {
    Yii::warning("Division by zero.");
}

// execution continues...
```

If you want to show an error page telling the user that his request is invalid or unexpected, you may simply
throw an [HTTP exception](https://www.yiiframework.com/doc/api/22.0/yii-web-httpexception), such as [yii\web\NotFoundHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-notfoundhttpexception). The error handler
will correctly set the HTTP status code of the response and use an appropriate error view to display the error
message.

```
use yii\web\NotFoundHttpException;

throw new NotFoundHttpException();
```

## Customizing Error Display [¶](#customizing-error-display)

The [error handler](https://www.yiiframework.com/doc/api/22.0/yii-web-errorhandler) adjusts the error display according to the value of the constant `YII_DEBUG`.
When `YII_DEBUG` is `true` (meaning in debug mode), the error handler will display exceptions with detailed call
stack information and source code lines to help easier debugging. And when `YII_DEBUG` is `false`, only the error
message will be displayed to prevent revealing sensitive information about the application.

> **Info:** If an exception is a descendant of [yii\base\UserException](https://www.yiiframework.com/doc/api/22.0/yii-base-userexception), no call stack will be displayed regardless
> the value of `YII_DEBUG`. This is because such exceptions are considered to be caused by user mistakes and the
> developers do not need to fix anything.

By default, the [error handler](https://www.yiiframework.com/doc/api/22.0/yii-web-errorhandler) displays errors using two [views](guide_22_0__structure-views.md):

- `@yii/views/errorHandler/error.php`: used when errors should be displayed WITHOUT call stack information.
  When `YII_DEBUG` is `false`, this is the only error view to be displayed.
- `@yii/views/errorHandler/exception.php`: used when errors should be displayed WITH call stack information.

You can configure the [errorView](https://www.yiiframework.com/doc/api/22.0/yii-web-errorhandler#$errorView-detail) and [exceptionView](https://www.yiiframework.com/doc/api/22.0/yii-web-errorhandler#$exceptionView-detail)
properties of the error handler to use your own views to customize the error display.

### Using Error Actions [¶](#using-error-actions)

A better way of customizing the error display is to use dedicated error [actions](guide_22_0__structure-controllers.md).
To do so, first configure the [errorAction](https://www.yiiframework.com/doc/api/22.0/yii-web-errorhandler#$errorAction-detail) property of the `errorHandler`
component like the following:

```
return [
    'components' => [
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ]
];
```

The [errorAction](https://www.yiiframework.com/doc/api/22.0/yii-web-errorhandler#$errorAction-detail) property takes a [route](guide_22_0__structure-controllers.md#routes)
to an action. The above configuration states that when an error needs to be displayed without call stack information,
the `site/error` action should be executed.

You can create the `site/error` action as follows,

```
namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
```

The above code defines the `error` action using the [yii\web\ErrorAction](https://www.yiiframework.com/doc/api/22.0/yii-web-erroraction) class which renders an error
using a view named `error`.

Besides using [yii\web\ErrorAction](https://www.yiiframework.com/doc/api/22.0/yii-web-erroraction), you may also define the `error` action using an action method like the following,

```
public function actionError()
{
    $exception = Yii::$app->errorHandler->exception;
    if ($exception !== null) {
        return $this->render('error', ['exception' => $exception]);
    }
}
```

You should now create a view file located at `views/site/error.php`. In this view file, you can access
the following variables if the error action is defined as [yii\web\ErrorAction](https://www.yiiframework.com/doc/api/22.0/yii-web-erroraction):

- `name`: the name of the error;
- `message`: the error message;
- `exception`: the exception object through which you can retrieve more useful information, such as HTTP status code,
  error code, error call stack, etc.

> **Info:** If you are using the [basic project template](guide_22_0__start-installation.md) or the [advanced project template](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/README.md),
> the error action and the error view are already defined for you.

> **Note:** If you need to redirect in an error handler, do it the following way:
>
> ```
> Yii::$app->getResponse()->redirect($url)->send();
> return;
> ```

### Customizing Error Response Format [¶](#error-format)

The error handler displays errors according to the format setting of the [response](guide_22_0__runtime-responses.md).
If the [response format](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$format-detail) is `html`, it will use the error or exception view
to display errors, as described in the last subsection. For other response formats, the error handler will
assign the array representation of the exception to the [yii\web\Response::$data](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$data-detail) property which will then
be converted to different formats accordingly. For example, if the response format is `json`, you may see
the following response:

```
HTTP/1.1 404 Not Found
Date: Sun, 02 Mar 2014 05:31:43 GMT
Server: Apache/2.2.26 (Unix) DAV/2 PHP/5.4.20 mod_ssl/2.2.26 OpenSSL/0.9.8y
Transfer-Encoding: chunked
Content-Type: application/json; charset=UTF-8

{
    "name": "Not Found Exception",
    "message": "The requested resource was not found.",
    "code": 0,
    "status": 404
}
```

You may customize the error response format by responding to the `beforeSend` event of the `response` component
in the application configuration:

```
return [
    // ...
    'components' => [
        'response' => [
            'class' => 'yii\web\Response',
            'on beforeSend' => function ($event) {
                $response = $event->sender;
                if ($response->data !== null) {
                    $response->data = [
                        'success' => $response->isSuccessful,
                        'data' => $response->data,
                    ];
                    $response->statusCode = 200;
                }
            },
        ],
    ],
];
```

The above code will reformat the error response like the following:

```
HTTP/1.1 200 OK
Date: Sun, 02 Mar 2014 05:31:43 GMT
Server: Apache/2.2.26 (Unix) DAV/2 PHP/5.4.20 mod_ssl/2.2.26 OpenSSL/0.9.8y
Transfer-Encoding: chunked
Content-Type: application/json; charset=UTF-8

{
    "success": false,
    "data": {
        "name": "Not Found Exception",
        "message": "The requested resource was not found.",
        "code": 0,
        "status": 404
    }
}
```

[Sessions and Cookies](guide_22_0__runtime-sessions-cookies.md)

[Go to Top](#top)

[Logging](guide_22_0__runtime-logging.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/runtime-handling-errors.md) !
