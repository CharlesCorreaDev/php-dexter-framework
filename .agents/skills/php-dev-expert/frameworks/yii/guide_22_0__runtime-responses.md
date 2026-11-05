# Handling Requests: Responses | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/runtime-responses

---

0

# Responses [¶](#responses)

When an application finishes handling a [request](guide_22_0__runtime-requests.md), it generates a [response](https://www.yiiframework.com/doc/api/22.0/yii-web-response) object
and sends it to the end user. The response object contains information such as the HTTP status code, HTTP headers and body.
The ultimate goal of Web application development is essentially to build such response objects upon various requests.

In most cases you should mainly deal with the `response` [application component](guide_22_0__structure-application-components.md)
which is an instance of [yii\web\Response](https://www.yiiframework.com/doc/api/22.0/yii-web-response), by default. However, Yii also allows you to create your own response
objects and send them to end users as we will explain in the following.

In this section, we will describe how to compose and send responses to end users.

## Status Code [¶](#status-code)

One of the first things you would do when building a response is to state whether the request is successfully handled.
This is done by setting the [yii\web\Response::$statusCode](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$statusCode-detail) property which can take one of the valid
[HTTP status codes](https://tools.ietf.org/html/rfc2616#section-10). For example, to indicate the request
is successfully handled, you may set the status code to be 200, like the following:

```
Yii::$app->response->statusCode = 200;
```

However, in most cases you do not need to explicitly set the status code. This is because the default value
of [yii\web\Response::$statusCode](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$statusCode-detail) is 200. And if you want to indicate the request is unsuccessful, you may
throw an appropriate HTTP exception like the following:

```
throw new \yii\web\NotFoundHttpException;
```

When the [error handler](guide_22_0__runtime-handling-errors.md) catches an exception, it will extract the status code
from the exception and assign it to the response. For the [yii\web\NotFoundHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-notfoundhttpexception) above, it is
associated with the HTTP status 404. The following HTTP exceptions are predefined in Yii:

- [yii\web\BadRequestHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-badrequesthttpexception): status code 400.
- [yii\web\ConflictHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-conflicthttpexception): status code 409.
- [yii\web\ForbiddenHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-forbiddenhttpexception): status code 403.
- [yii\web\GoneHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-gonehttpexception): status code 410.
- [yii\web\MethodNotAllowedHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-methodnotallowedhttpexception): status code 405.
- [yii\web\NotAcceptableHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-notacceptablehttpexception): status code 406.
- [yii\web\NotFoundHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-notfoundhttpexception): status code 404.
- [yii\web\ServerErrorHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-servererrorhttpexception): status code 500.
- [yii\web\TooManyRequestsHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-toomanyrequestshttpexception): status code 429.
- [yii\web\UnauthorizedHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-unauthorizedhttpexception): status code 401.
- [yii\web\UnsupportedMediaTypeHttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-unsupportedmediatypehttpexception): status code 415.

If the exception that you want to throw is not among the above list, you may create one by extending
from [yii\web\HttpException](https://www.yiiframework.com/doc/api/22.0/yii-web-httpexception), or directly throw it with a status code, for example,

```
throw new \yii\web\HttpException(402);
```

## HTTP Headers [¶](#http-headers)

You can send HTTP headers by manipulating the [header collection](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$headers-detail) in the `response` component.
For example,

```
$headers = Yii::$app->response->headers;

// add a Pragma header. Existing Pragma headers will NOT be overwritten.
$headers->add('Pragma', 'no-cache');

// set a Pragma header. Any existing Pragma headers will be discarded.
$headers->set('Pragma', 'no-cache');

// remove Pragma header(s) and return the removed Pragma header values in an array
$values = $headers->remove('Pragma');
```

> **Info:** Header names are case insensitive. And the newly registered headers are not sent to the user until
> the [yii\web\Response::send()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#send()-detail) method is called.

## Response Body [¶](#response-body)

Most responses should have a body which gives the content that you want to show to end users.

If you already have a formatted body string, you may assign it to the [yii\web\Response::$content](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$content-detail) property
of the response. For example,

```
Yii::$app->response->content = 'hello world!';
```

If your data needs to be formatted before sending it to end users, you should set both of the
[format](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$format-detail) and [data](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$data-detail) properties. The [format](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$format-detail)
property specifies in which format the [data](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$data-detail) should be formatted. For example,

```
$response = Yii::$app->response;
$response->format = \yii\web\Response::FORMAT_JSON;
$response->data = ['message' => 'hello world'];
```

Yii supports the following formats out of the box, each implemented by a [formatter](https://www.yiiframework.com/doc/api/22.0/yii-web-responseformatterinterface) class.
You can customize these formatters or add new ones by configuring the [yii\web\Response::$formatters](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$formatters-detail) property.

- [HTML](https://www.yiiframework.com/doc/api/22.0/yii-web-response#FORMAT_HTML-detail): implemented by [yii\web\HtmlResponseFormatter](https://www.yiiframework.com/doc/api/22.0/yii-web-htmlresponseformatter).
- [XML](https://www.yiiframework.com/doc/api/22.0/yii-web-response#FORMAT_XML-detail): implemented by [yii\web\XmlResponseFormatter](https://www.yiiframework.com/doc/api/22.0/yii-web-xmlresponseformatter).
- [JSON](https://www.yiiframework.com/doc/api/22.0/yii-web-response#FORMAT_JSON-detail): implemented by [yii\web\JsonResponseFormatter](https://www.yiiframework.com/doc/api/22.0/yii-web-jsonresponseformatter).
- [JSONP](https://www.yiiframework.com/doc/api/22.0/yii-web-response#FORMAT_JSONP-detail): implemented by [yii\web\JsonResponseFormatter](https://www.yiiframework.com/doc/api/22.0/yii-web-jsonresponseformatter).
- [RAW](https://www.yiiframework.com/doc/api/22.0/yii-web-response#FORMAT_RAW-detail): use this format if you want to send the response directly without applying any formatting.

While the response body can be set explicitly as shown above, in most cases you may set it implicitly by the return value
of [action](guide_22_0__structure-controllers.md) methods. A common use case is like the following:

```
public function actionIndex()
{
    return $this->render('index');
}
```

The `index` action above returns the rendering result of the `index` view. The return value will be taken
by the `response` component, formatted and then sent to end users.

Because by default the response format is [HTML](https://www.yiiframework.com/doc/api/22.0/yii-web-response#FORMAT_HTML-detail), you should only return a string
in an action method. If you want to use a different response format, you should set it first before returning the data.
For example,

```
public function actionInfo()
{
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    return [
        'message' => 'hello world',
        'code' => 100,
    ];
}
```

As aforementioned, besides using the default `response` application component, you can also create your own
response objects and send them to end users. You can do so by returning such object in an action method, like the following,

```
public function actionInfo()
{
    return \Yii::createObject([
        'class' => 'yii\web\Response',
        'format' => \yii\web\Response::FORMAT_JSON,
        'data' => [
            'message' => 'hello world',
            'code' => 100,
        ],
    ]);
}
```

> **Note:** If you are creating your own response objects, you will not be able to take advantage of the configurations
> that you set for the `response` component in the application configuration. You can, however, use
> [dependency injection](guide_22_0__concept-di-container.md) to apply a common configuration to your new response objects.

## Browser Redirection [¶](#browser-redirection)

Browser redirection relies on sending a `Location` HTTP header. Because this feature is commonly used, Yii provides
some special support for it.

You can redirect the user browser to a URL by calling the [yii\web\Response::redirect()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#redirect()-detail) method. The method
sets the appropriate `Location` header with the given URL and returns the response object itself. In an action method,
you can call its shortcut version [yii\web\Controller::redirect()](https://www.yiiframework.com/doc/api/22.0/yii-web-controller#redirect()-detail). For example,

```
public function actionOld()
{
    return $this->redirect('https://example.com/new', 301);
}
```

In the above code, the action method returns the result of the `redirect()` method. As explained before, the response
object returned by an action method will be used as the response sending to end users.

In places other than an action method, you should call [yii\web\Response::redirect()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#redirect()-detail) directly followed by
a chained call to the [yii\web\Response::send()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#send()-detail) method to ensure no extra content will be appended to the response.

```
\Yii::$app->response->redirect('https://example.com/new', 301)->send();
```

> **Info:** By default, the [yii\web\Response::redirect()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#redirect()-detail) method sets the response status code to be 302 which instructs
> the browser that the resource being requested is *temporarily* located in a different URI. You can pass in a status
> code 301 to tell the browser that the resource has been *permanently* relocated.

When the current request is an AJAX request, sending a `Location` header will not automatically cause the browser
to redirect. To solve this problem, the [yii\web\Response::redirect()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#redirect()-detail) method sets an `X-Redirect` header with
the redirection URL as its value. On the client-side, you may write JavaScript code to read this header value and
redirect the browser accordingly.

> **Info:** Yii comes with a `yii.js` JavaScript file which provides a set of commonly used JavaScript utilities,
> including browser redirection based on the `X-Redirect` header. Therefore, if you are using this JavaScript file
> (by registering the [yii\web\YiiAsset](https://www.yiiframework.com/doc/api/22.0/yii-web-yiiasset) asset bundle), you do not need to write anything to support AJAX redirection.
> More information about `yii.js` can be found in the [Client Scripts Section](guide_22_0__output-client-scripts.md#yii.js).

## Sending Files [¶](#sending-files)

Like browser redirection, file sending is another feature that relies on specific HTTP headers. Yii provides
a set of methods to support various file sending needs. They all have built-in support for the HTTP range header.

- [yii\web\Response::sendFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#sendFile()-detail): sends an existing file to a client.
- [yii\web\Response::sendContentAsFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#sendContentAsFile()-detail): sends a text string as a file to a client.
- [yii\web\Response::sendStreamAsFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#sendStreamAsFile()-detail): sends an existing file stream as a file to a client.

These methods have the same method signature with the response object as the return value. If the file
to be sent is very big, you should consider using [yii\web\Response::sendStreamAsFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#sendStreamAsFile()-detail) because it is more
memory efficient. The following example shows how to send a file in a controller action:

```
public function actionDownload()
{
    return \Yii::$app->response->sendFile('path/to/file.txt');
}
```

If you are calling the file sending method in places other than an action method, you should also call
the [yii\web\Response::send()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#send()-detail) method afterwards to ensure no extra content will be appended to the response.

```
\Yii::$app->response->sendFile('path/to/file.txt')->send();
```

Some Web servers have a special file sending support called *X-Sendfile*. The idea is to redirect the
request for a file to the Web server which will directly serve the file. As a result, the Web application
can terminate earlier while the Web server is sending the file. To use this feature, you may call
the [yii\web\Response::xSendFile()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#xSendFile()-detail). The following list summarizes how to enable the `X-Sendfile` feature
for some popular Web servers:

- Apache: [X-Sendfile](https://tn123.org/mod_xsendfile)
- Lighttpd v1.4: [X-LIGHTTPD-send-file](https://redmine.lighttpd.net/projects/lighttpd/wiki/X-LIGHTTPD-send-file)
- Lighttpd v1.5: [X-Sendfile](https://redmine.lighttpd.net/projects/lighttpd/wiki/X-LIGHTTPD-send-file)
- Nginx: [X-Accel-Redirect](https://www.nginx.com/resources/wiki/start/topics/examples/xsendfile/)
- Cherokee: [X-Sendfile and X-Accel-Redirect](https://www.cherokee-project.com/doc/other_goodies.html#x-sendfile)

## Sending Response [¶](#sending-response)

The content in a response is not sent to the user until the [yii\web\Response::send()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#send()-detail) method is called.
By default, this method will be called automatically at the end of [yii\base\Application::run()](https://www.yiiframework.com/doc/api/22.0/yii-base-application#run()-detail). You can, however,
explicitly call this method to force sending out the response immediately.

The [yii\web\Response::send()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#send()-detail) method takes the following steps to send out a response:

1. Trigger the [yii\web\Response::EVENT\_BEFORE\_SEND](https://www.yiiframework.com/doc/api/22.0/yii-web-response#EVENT_BEFORE_SEND-detail) event.
2. Call [yii\web\Response::prepare()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#prepare()-detail) to format [response data](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$data-detail) into
   [response content](https://www.yiiframework.com/doc/api/22.0/yii-web-response#$content-detail).
3. Trigger the [yii\web\Response::EVENT\_AFTER\_PREPARE](https://www.yiiframework.com/doc/api/22.0/yii-web-response#EVENT_AFTER_PREPARE-detail) event.
4. Call [yii\web\Response::sendHeaders()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#sendHeaders()-detail) to send out the registered HTTP headers.
5. Call [yii\web\Response::sendContent()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#sendContent()-detail) to send out the response body content.
6. Trigger the [yii\web\Response::EVENT\_AFTER\_SEND](https://www.yiiframework.com/doc/api/22.0/yii-web-response#EVENT_AFTER_SEND-detail) event.

After the [yii\web\Response::send()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#send()-detail) method is called once, any further call to this method will be ignored.
This means once the response is sent out, you will not be able to append more content to it.

As you can see, the [yii\web\Response::send()](https://www.yiiframework.com/doc/api/22.0/yii-web-response#send()-detail) method triggers several useful events. By responding to
these events, it is possible to adjust or decorate the response.

[Requests](guide_22_0__runtime-requests.md)

[Go to Top](#top)

[Sessions and Cookies](guide_22_0__runtime-sessions-cookies.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/runtime-responses.md) !
