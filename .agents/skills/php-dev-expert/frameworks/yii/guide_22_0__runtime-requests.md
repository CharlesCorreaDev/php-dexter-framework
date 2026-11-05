# Handling Requests: Requests | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/runtime-requests

---

0

# Requests [¶](#requests)

Requests made to an application are represented in terms of [yii\web\Request](https://www.yiiframework.com/doc/api/22.0/yii-web-request) objects which provide information
such as request parameters, HTTP headers, cookies, etc. For a given request, you can get access to the corresponding
request object via the `request` [application component](guide_22_0__structure-application-components.md) which is an instance
of [yii\web\Request](https://www.yiiframework.com/doc/api/22.0/yii-web-request), by default. In this section, we will describe how you can make use of this component in your applications.

## Request Parameters [¶](#request-parameters)

To get request parameters, you can call [get()](https://www.yiiframework.com/doc/api/22.0/yii-web-request#get()-detail) and [post()](https://www.yiiframework.com/doc/api/22.0/yii-web-request#post()-detail) methods
of the `request` component. They return the values of `$_GET` and `$_POST`, respectively. For example,

```
$request = Yii::$app->request;

$get = $request->get();
// equivalent to: $get = $_GET;

$id = $request->get('id');
// equivalent to: $id = isset($_GET['id']) ? $_GET['id'] : null;

$id = $request->get('id', 1);
// equivalent to: $id = isset($_GET['id']) ? $_GET['id'] : 1;

$post = $request->post();
// equivalent to: $post = $_POST;

$name = $request->post('name');
// equivalent to: $name = isset($_POST['name']) ? $_POST['name'] : null;

$name = $request->post('name', '');
// equivalent to: $name = isset($_POST['name']) ? $_POST['name'] : '';
```

> **Info:** Instead of directly accessing `$_GET` and `$_POST` to retrieve the request parameters, it is recommended
> that you get them via the `request` component as shown above. This will make writing tests easier because
> you can create a mock request component with faked request data.

When implementing [RESTful APIs](guide_22_0__rest-quick-start.md), you often need to retrieve parameters that are submitted
via PUT, PATCH or other [request methods](#request-methods). You can get these parameters by calling
the [yii\web\Request::getBodyParam()](https://www.yiiframework.com/doc/api/22.0/yii-web-request#getBodyParam()-detail) methods. For example,

```
$request = Yii::$app->request;

// returns all parameters
$params = $request->bodyParams;

// returns the parameter "id"
$param = $request->getBodyParam('id');
```

> **Info:** Unlike `GET` parameters, parameters submitted via `POST`, `PUT`, `PATCH` etc. are sent in the request body.
> The `request` component will parse these parameters when you access them through the methods described above.
> You can customize the way how these parameters are parsed by configuring the [yii\web\Request::$parsers](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$parsers-detail) property.

## Request Methods [¶](#request-methods)

You can get the HTTP method used by the current request via the expression `Yii::$app->request->method`.
A whole set of boolean properties is also provided for you to check if the current method is of certain type.
For example,

```
$request = Yii::$app->request;

if ($request->isAjax) { /* the request is an AJAX request */ }
if ($request->isGet)  { /* the request method is GET */ }
if ($request->isPost) { /* the request method is POST */ }
if ($request->isPut)  { /* the request method is PUT */ }
```

## Request URLs [¶](#request-urls)

The `request` component provides many ways of inspecting the currently requested URL.

Assuming the URL being requested is `https://example.com/admin/index.php/product?id=100`, you can get various
parts of this URL as summarized in the following:

- [url](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$url-detail): returns `/admin/index.php/product?id=100`, which is the URL without the host info part.
- [absoluteUrl](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$absoluteUrl-detail): returns `https://example.com/admin/index.php/product?id=100`,
  which is the whole URL including the host info part.
- [hostInfo](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$hostInfo-detail): returns `https://example.com`, which is the host info part of the URL.
- [pathInfo](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$pathInfo-detail): returns `/product`, which is the part after the entry script and
  before the question mark (query string).
- [queryString](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$queryString-detail): returns `id=100`, which is the part after the question mark.
- [baseUrl](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$baseUrl-detail): returns `/admin`, which is the part after the host info and before
  the entry script name.
- [scriptUrl](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$scriptUrl-detail): returns `/admin/index.php`, which is the URL without path info and query string.
- [serverName](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$serverName-detail): returns `example.com`, which is the host name in the URL.
- [serverPort](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$serverPort-detail): returns 80, which is the port used by the Web server.

## HTTP Headers [¶](#http-headers)

You can get the HTTP header information through the [header collection](https://www.yiiframework.com/doc/api/22.0/yii-web-headercollection) returned
by the [yii\web\Request::$headers](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$headers-detail) property. For example,

```
// $headers is an object of yii\web\HeaderCollection 
$headers = Yii::$app->request->headers;

// returns the Accept header value
$accept = $headers->get('Accept');

if ($headers->has('User-Agent')) { /* there is User-Agent header */ }
```

The `request` component also provides support for quickly accessing some commonly used headers, including:

- [userAgent](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$userAgent-detail): returns the value of the `User-Agent` header.
- [contentType](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$contentType-detail): returns the value of the `Content-Type` header which indicates
  the MIME type of the data in the request body.
- [acceptableContentTypes](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$acceptableContentTypes-detail): returns the content MIME types acceptable by users.
  The returned types are ordered by their quality score. Types with the highest scores will be returned first.
- [acceptableLanguages](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$acceptableLanguages-detail): returns the languages acceptable by users.
  The returned languages are ordered by their preference level. The first element represents the most preferred language.

If your application supports multiple languages and you want to display pages in the language that is the most preferred
by the end user, you may use the language negotiation method [yii\web\Request::getPreferredLanguage()](https://www.yiiframework.com/doc/api/22.0/yii-web-request#getPreferredLanguage()-detail).
This method takes a list of languages supported by your application, compares them with [acceptableLanguages](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$acceptableLanguages-detail),
and returns the most appropriate language.

> **Tip:** You may also use the [ContentNegotiator](https://www.yiiframework.com/doc/api/22.0/yii-filters-contentnegotiator) filter to dynamically determine
> what content type and language should be used in the response. The filter implements the content negotiation
> on top of the properties and methods described above.

## Client Information [¶](#client-information)

You can get the host name and IP address
of the client machine through [userHost](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$userHost-detail)
and [userIP](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$userIP-detail), respectively. For example,

```
$userHost = Yii::$app->request->userHost;
$userIP = Yii::$app->request->userIP;
```

## Trusted proxies and headers [¶](#trusted-proxies)

In the previous section you have seen how to get user information like host and IP address.
This will work out of the box in a normal setup where a single webserver is used to serve the website.
If your Yii application however runs behind a reverse proxy, you need to add additional configuration
to retrieve this information as the direct client is now the proxy and the user IP address is passed to
the Yii application by a header set by the proxy.

You should not blindly trust headers provided by proxies unless you explicitly trust the proxy.
Since 2.0.13 Yii supports configuring trusted proxies via the
[trustedHosts](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$trustedHosts-detail),
[secureHeaders](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$secureHeaders-detail),
[ipHeaders](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$ipHeaders-detail),
[secureProtocolHeaders](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$secureProtocolHeaders-detail) and
[portHeaders](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$portHeaders-detail) (since 2.0.46)
properties of the `request` component.

The following is a request config for an application that runs behind an array of reverse proxies,
which are located in the `10.0.2.0/24` IP network:

```
'request' => [
    // ...
    'trustedHosts' => [
        '10.0.2.0/24',
    ],
],
```

The IP is sent by the proxy in the `X-Forwarded-For` header by default, and the protocol (`http` or `https`) is sent in `X-Forwarded-Proto`.

In case your proxies are using different headers you can use the request configuration to adjust these, e.g.:

```
'request' => [
    // ...
    'trustedHosts' => [
        '10.0.2.0/24' => [
            'X-ProxyUser-Ip',
            'Front-End-Https',
        ],
    ],
    'secureHeaders' => [
        'X-Forwarded-For',
        'X-Forwarded-Host',
        'X-Forwarded-Proto',
        'X-Forwarded-Port',
        'X-Proxy-User-Ip',
        'Front-End-Https',
    ],
    'ipHeaders' => [
        'X-Proxy-User-Ip',
    ],
    'secureProtocolHeaders' => [
        'Front-End-Https' => ['on']
    ],
],
```

With the above configuration, all headers listed in `secureHeaders` are filtered from the request,
except the `X-ProxyUser-Ip` and `Front-End-Https` headers in case the request is made by the proxy.
In that case the former is used to retrieve the user IP as configured in `ipHeaders` and the latter
will be used to determine the result of [yii\web\Request::getIsSecureConnection()](https://www.yiiframework.com/doc/api/22.0/yii-web-request#getIsSecureConnection()-detail).

Since 2.0.31 [RFC 7239](https://datatracker.ietf.org/doc/html/rfc7239) `Forwarded` header is supported. In order to enable
it you need to add header name to `secureHeaders`. Make sure your proxy is setting it, otherwise end user would be
able to spoof IP and protocol.

### Already resolved user IP [¶](#already-respolved-user-ip)

If the user's IP address is resolved before the Yii application (e.g. `ngx_http_realip_module` or similar),
the `request` component will work correctly with the following configuration:

```
'request' => [
    // ...
    'trustedHosts' => [
        '0.0.0.0/0',
    ],
    'ipHeaders' => [], 
],
```

In this case, the value of [userIP](https://www.yiiframework.com/doc/api/22.0/yii-web-request#$userIP-detail) will be equal to `$_SERVER['REMOTE_ADDR']`.
Also, properties that are resolved from HTTP headers will work correctly (e.g. [yii\web\Request::getIsSecureConnection()](https://www.yiiframework.com/doc/api/22.0/yii-web-request#getIsSecureConnection()-detail)).

> **Warning:** The `trustedHosts=['0.0.0.0/0']` setting assumes that all IPs are trusted.

[Routing and URL Creation](guide_22_0__runtime-routing.md)

[Go to Top](#top)

[Responses](guide_22_0__runtime-responses.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/runtime-requests.md) !
