# IncomingRequest Class — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/incoming/incomingrequest.html

---

# IncomingRequest Class[](#incomingrequest-class "Link to this heading")

The IncomingRequest class provides an object-oriented representation of an HTTP request from a client, like a browser.
It extends from, and has access to all the methods of the [Request](incoming__request.md) and [Message](incoming__message.md)
classes, in addition to the methods listed below.

## [Accessing the Request](#id2)[](#accessing-the-request "Link to this heading")

An instance of the request class already populated for you if the current class is a descendant of
`CodeIgniter\Controller` and can be accessed as a class property:

```
<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        if ($this->request->isAJAX()) {
            // ...
        }
    }
}
```

If you are not within a controller, but still need access to the application’s Request object, you can
get a copy of it through the [Services class](concepts__services.md):

```
<?php

$request = service('request');
```

It’s preferable, though, to pass the request in as a dependency if the class is anything other than
the controller, where you can save it as a class property:

```
<?php

namespace App\Libraries;

use CodeIgniter\HTTP\RequestInterface;

class SomeClass
{
    protected $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }
}

$someClass = new SomeClass(service('request'));
```

## [Determining Request Type](#id3)[](#determining-request-type "Link to this heading")

A request could be of several types, including an AJAX request or a request from the command line. This can
be checked with the `isAJAX()` and `isCLI()` methods:

```
<?php

// Check for AJAX request.
if ($request->isAJAX()) {
    // ...
}

// Check for CLI Request
if ($request->isCLI()) {
    // ...
}
```

Note

The `isAJAX()` method depends on the `X-Requested-With` header,
which in some cases is not sent by default in XHR requests via JavaScript (i.e., fetch).
See the [AJAX Requests](general__ajax.md) section on how to avoid this problem.

### [is()](#id4)[](#is "Link to this heading")

Added in version 4.3.0.

Since v4.3.0, you can use the `is()` method. It accepts an HTTP method, `'ajax'`,
or `'json'`, and returns boolean.

Note

HTTP method should be case-sensitive, but the parameter is case-insensitive.

```
<?php

// Checks HTTP methods. Returns boolean.
$request->is('get');
$request->is('post');
$request->is('put');
$request->is('delete');
$request->is('head');
$request->is('patch');
$request->is('options');

// Checks if it is an AJAX request. The same as `$request->isAJAX()`.
$request->is('ajax');

// Checks if it is a JSON request.
$request->is('json');
```

### [getMethod()](#id5)[](#getmethod "Link to this heading")

You can check the HTTP method that this request represents with the `getMethod()` method:

```
<?php

// Returns 'POST'
$method = $request->getMethod();
```

The HTTP method is case-sensitive, and by convention, standardized methods are
defined in all-uppercase US-ASCII letters.

Note

Prior to v4.5.0, by default, the method was returned as a lowercase
string (i.e., `'get'`, `'post'`, etc). But it was a bug.

You can get a lowercase version by wrapping the call in `strtolower()`:

```
// Returns 'get'
$method = strtolower($request->getMethod());
```

You can also check if the request was made through and HTTPS connection with the `isSecure()` method:

```
<?php

if (! $request->isSecure()) {
    force_https();
}
```

Important

The `X-Forwarded-Proto` and `Front-End-Https` headers are taken
into account only when the request comes from a trusted proxy configured in
`Config\App::$proxyIPs`. Otherwise, they are client-supplied and could be
spoofed.

Note

On dual-stack servers, a proxy’s IPv4 address may be reported as an
IPv4-mapped IPv6 address (e.g., `::ffff:192.168.5.21`), which does not
match an IPv4 entry such as `192.168.5.0/24`. In that case, add the
IPv4-mapped form to `Config\App::$proxyIPs`, e.g.,
`::ffff:192.168.5.21` or `::ffff:192.168.5.0/120`.

## [Retrieving Input](#id6)[](#retrieving-input "Link to this heading")

You can retrieve input from `$_GET`, `$_POST`, `$_COOKIE`, `$_SERVER`
and `$_ENV` through the Request object.
The data is not automatically filtered and returns the raw input data as passed in the request.

Note

It is bad practice to use global variables. Basically, it should be avoided
and it is recommended to use methods of the Request object.

The main
advantages to using these methods instead of accessing them directly (`$_POST['something']`), is that they
will return null if the item doesn’t exist, and you can have the data filtered. This lets you conveniently
use data without having to test whether an item exists first. In other words, normally you might do something
like this:

```
<?php

$something = $_POST['foo'] ?? null;
```

With CodeIgniter’s built-in methods you can simply do this:

```
<?php

$something = $request->getPost('foo');
```

### [Getting Data](#id7)[](#getting-data "Link to this heading")

#### getGet()[](#getget "Link to this heading")

The `getGet()` method will pull from `$_GET`.

- `$request->getGet()`

#### getPost()[](#getpost "Link to this heading")

The `getPost()` method will pull from `$_POST`.

- `$request->getPost()`

#### getCookie()[](#getcookie "Link to this heading")

The `getCookie()` method will pull from `$_COOKIE`.

- `$request->getCookie()`

#### getServer()[](#getserver "Link to this heading")

The `getServer()` method will pull from `$_SERVER`.

- `$request->getServer()`

#### getPostGet()[](#getpostget "Link to this heading")

In addition, there are a few utility methods for retrieving information from either `$_GET` or `$_POST`, while
maintaining the ability to control the order you look for it:

- `$request->getPostGet()` - checks `$_POST` first, then `$_GET`

#### getGetPost()[](#getgetpost "Link to this heading")

- `$request->getGetPost()` - checks `$_GET` first, then `$_POST`

#### getVar()[](#getvar "Link to this heading")

Important

This method exists only for backward compatibility. Do not use it
in new projects. Even if you are already using it, we recommend that you use
another, more appropriate method.

The `getVar()` method will pull from `$_REQUEST`, so will return any data from `$_GET`, `$_POST`, or `$_COOKIE` (depending on php.ini [request-order](https://www.php.net/manual/en/ini.core.php#ini.request-order)).

Warning

If you want to validate POST data only, don’t use `getVar()`.
Newer values override older values. POST values may be overridden by the
cookies if they have the same name, and you set “C” after “P” in
[request-order](https://www.php.net/manual/en/ini.core.php#ini.request-order).

Note

If the incoming request has a `Content-Type` header set to `application/json`,
the `getVar()` method returns the JSON data instead of `$_REQUEST` data.

### [Getting JSON Data](#id8)[](#getting-json-data "Link to this heading")

You can grab the contents of `php://input` as a JSON stream with `getJSON()`.

Note

This has no way of checking if the incoming data is valid JSON or not, you should only use this
method if you know that you’re expecting JSON.

```
<?php

$json = $request->getJSON();
```

By default, this will return any objects in the JSON data as objects. If you want that converted to associative
arrays, pass in `true` as the first parameter.

The second and third parameters match up to the `$depth` and `$flags` arguments of the
[json\_decode()](https://www.php.net/manual/en/function.json-decode.php) PHP function.

### [Getting Specific Data from JSON](#id9)[](#getting-specific-data-from-json "Link to this heading")

You can get a specific piece of data from a JSON stream by passing a variable name into `getJsonVar()` for the
data that you want or you can use “dot” notation to dig into the JSON to get data that is not on the root level.

```
<?php

/*
 * With a request body of:
 * {
 *     "foo": "bar",
 *     "fizz": {
 *         "buzz": "baz"
 *     }
 * }
 */

$data = $request->getJsonVar('foo');
// $data = "bar"

$data = $request->getJsonVar('fizz.buzz');
// $data = "baz"
```

If you want the result to be an associative array instead of an object, you can
pass true in the second parameter:

```
<?php

// With the same request as above
$data = $request->getJsonVar('fizz');
// $data->buzz = "baz"

$data = $request->getJsonVar('fizz', true);
// $data = ["buzz" => "baz"]
```

Note

See the documentation for [`dot_array_search()`](helpers__array_helper.md#dot_array_search "dot_array_search") in the `Array` helper for more information on “dot” notation.

### [Retrieving Raw Data (PUT, PATCH, DELETE)](#id10)[](#retrieving-raw-data-put-patch-delete "Link to this heading")

Finally, you can grab the contents of `php://input` as a raw stream with `getRawInput()`:

```
<?php

$data = $request->getRawInput();
```

This will retrieve data and convert it to an array. Like this:

```
<?php

var_dump($request->getRawInput());

/*
 * Outputs:
 * [
 *     'Param1' => 'Value1',
 *     'Param2' => 'Value2',
 * ]
 */
```

You can also use `getRawInputVar()`, to get the specified variable from raw stream and filter it.

```
<?php

// When the request body is 'foo=one&bar=two&baz[]=10&baz[]=20'
var_dump($request->getRawInputVar('bar'));
// Outputs: two

// foo=one&bar=two&baz[]=10&baz[]=20
var_dump($request->getRawInputVar(['foo', 'bar']));
/*
 * Outputs:
 * [
 *      'foo' => 'one',
 *      'bar' => 'two'
 * ]
 */

// foo=one&bar=two&baz[]=10&baz[]=20
var_dump($request->getRawInputVar('baz'));
/*
 * Outputs:
 * [
 *      '10',
 *      '20'
 * ]
 */

// foo=one&bar=two&baz[]=10&baz[]=20
var_dump($request->getRawInputVar('baz.0'));
// Outputs: 10
```

### [Filtering Input Data](#id11)[](#filtering-input-data "Link to this heading")

To maintain security of your application, you will want to filter all input as you access it. You can
pass the type of filter to use as the second parameter of any of these methods. The native `filter_var()`
function is used for the filtering. Head over to the PHP manual for a list of [valid
filter types](https://www.php.net/manual/en/filters.php).

Filtering a POST variable would look like this:

```
<?php

$email = $request->getPost('email', FILTER_SANITIZE_EMAIL);
```

All of the methods mentioned above support the filter type passed in as the second parameter, with the
exception of `getJSON()` and `getRawInput()`.

## [Retrieving Headers](#id12)[](#retrieving-headers "Link to this heading")

You can get access to any header that was sent with the request with the `headers()` method, which returns
an array of all headers, with the key as the name of the header, and the value is an instance of
`CodeIgniter\HTTP\Header`:

```
<?php

var_dump($request->headers());

/*
 * Outputs:
 * [
 *     'Host'          => CodeIgniter\HTTP\Header,
 *     'Cache-Control' => CodeIgniter\HTTP\Header,
 *     'Accept'        => CodeIgniter\HTTP\Header,
 * ]
 */
```

If you only need a single header, you can pass the name into the `header()` method. This will grab the
specified header object in a case-insensitive manner if it exists. If not, then it will return `null`:

```
<?php

// these are all equivalent
$host = $request->header('host');
$host = $request->header('Host');
$host = $request->header('HOST');
```

You can always use `hasHeader()` to see if the header existed in this request:

```
<?php

if ($request->hasHeader('DNT')) {
    // Don't track something...
}
```

If you need the value of header as a string with all values on one line, you can use the `getHeaderLine()` method:

```
<?php

// Accept-Encoding: gzip, deflate, sdch
echo 'Accept-Encoding: ' . $request->getHeaderLine('accept-encoding');
```

If you need the entire header, with the name and values in a single string, simply cast the header as a string:

```
<?php

echo (string) $header;
```

## [The Request URL](#id13)[](#the-request-url "Link to this heading")

You can retrieve a [URI](libraries__uri.md) object that represents the current URI for this request through the
`$request->getUri()` method. You can cast this object as a string to get a full URL for the current request:

```
<?php

$uri = (string) $request->getUri();
```

The object gives you full abilities to grab any part of the request on it’s own:

```
<?php

$uri = $request->getUri();

echo $uri->getScheme();         // http
echo $uri->getAuthority();      // snoopy:[email protected]:88
echo $uri->getUserInfo();       // snoopy:password
echo $uri->getHost();           // example.com
echo $uri->getPort();           // 88
echo $uri->getPath();           // /path/to/page
echo $uri->getRoutePath();      // path/to/page
echo $uri->getQuery();          // foo=bar&bar=baz
print_r($uri->getSegments());   // Array ( [0] => path [1] => to [2] => page )
echo $uri->getSegment(1);       // path
echo $uri->getTotalSegments();  // 3
```

You can work with the current URI string (the path relative to your baseURL) using the `getRoutePath()`.

Note

The `getRoutePath()` method can be used since v4.4.0. Prior to v4.4.0,
the `getPath()` method returned the path relative to your baseURL.

## [Uploaded Files](#id14)[](#uploaded-files "Link to this heading")

Information about all uploaded files can be retrieved through `$request->getFiles()`, which returns an array of
`CodeIgniter\HTTP\Files\UploadedFile` instance. This helps to ease the pain of working with uploaded files,
and uses best practices to minimize any security risks.

```
<?php

$files = $request->getFiles();
```

See [Working with Uploaded Files](libraries__uploaded_files.md#uploaded-files-accessing-files) for the details.

You can retrieve a single file uploaded on its own, based on the filename given in the HTML file input:

```
<?php

$file = $request->getFile('userfile');
```

You can retrieve an array of same-named files uploaded as part of a
multi-file upload, based on the filename given in the HTML file input:

```
<?php

$files = $request->getFileMultiple('userfile');
```

Note

The files here correspond to `$_FILES`. Even if a user just clicks submit button of a form and does not upload any file, the file will still exist. You can check that the file was actually uploaded by the `isValid()` method in UploadedFile. See [Verify a File](libraries__uploaded_files.md#verify-a-file) for more details.

## [Content Negotiation](#id15)[](#content-negotiation "Link to this heading")

You can easily negotiate content types with the request through the `negotiate()` method:

```
<?php

$language    = $request->negotiate('language', ['en-US', 'en-GB', 'fr', 'es-mx']);
$imageType   = $request->negotiate('media', ['image/png', 'image/jpg']);
$charset     = $request->negotiate('charset', ['UTF-8', 'UTF-16']);
$contentType = $request->negotiate('media', ['text/html', 'text/xml']);
$encoding    = $request->negotiate('encoding', ['gzip', 'compress']);
```

See the [Content Negotiation](incoming__content_negotiation.md) page for more details.

## [Class Reference](#id16)[](#class-reference "Link to this heading")

Note

In addition to the methods listed here, this class inherits the methods from the
[Request Class](incoming__request.md) and the [Message Class](incoming__message.md).

The methods provided by the parent classes that are available are:

- `CodeIgniter\HTTP\Request::getIPAddress()`
- `CodeIgniter\HTTP\Request::isValidIP()`
- `CodeIgniter\HTTP\Request::getMethod()`
- `CodeIgniter\HTTP\Request::setMethod()`
- `CodeIgniter\HTTP\Request::getServer()`
- `CodeIgniter\HTTP\Request::setGlobal()`
- `CodeIgniter\HTTP\Request::fetchGlobal()`
- `CodeIgniter\HTTP\Message::getBody()`
- `CodeIgniter\HTTP\Message::setBody()`
- `CodeIgniter\HTTP\Message::appendBody()`
- `CodeIgniter\HTTP\Message::populateHeaders()`
- `CodeIgniter\HTTP\Message::headers()`
- `CodeIgniter\HTTP\Message::header()`
- `CodeIgniter\HTTP\Message::hasHeader()`
- `CodeIgniter\HTTP\Message::getHeaderLine()`
- `CodeIgniter\HTTP\Message::setHeader()`
- `CodeIgniter\HTTP\Message::removeHeader()`
- `CodeIgniter\HTTP\Message::appendHeader()`
- `CodeIgniter\HTTP\Message::prependHeader()`
- `CodeIgniter\HTTP\Message::getProtocolVersion()`
- `CodeIgniter\HTTP\Message::setProtocolVersion()`

*class* CodeIgniter\HTTP\IncomingRequest[](#CodeIgniter\HTTP\IncomingRequest "Link to this definition")
:   isCLI()[](#CodeIgniter\HTTP\IncomingRequest::isCLI "Link to this definition")
    :   Returns:
        :   True if the request was initiated from the command line, otherwise false.

        Return type:
        :   `bool`

    isAJAX()[](#CodeIgniter\HTTP\IncomingRequest::isAJAX "Link to this definition")
    :   Returns:
        :   True if the request is an AJAX request, otherwise false.

        Return type:
        :   `bool`

    isSecure()[](#CodeIgniter\HTTP\IncomingRequest::isSecure "Link to this definition")
    :   Returns:
        :   True if the request is an HTTPS request, otherwise false.

        Return type:
        :   `bool`

        Important

        The `X-Forwarded-Proto` and `Front-End-Https` headers
        are taken into account only when the request comes from a trusted
        proxy configured in `Config\App::$proxyIPs`.

    getVar([*$index = null*[, *$filter = null*[, *$flags = null*]]])[](#CodeIgniter\HTTP\IncomingRequest::getVar "Link to this definition")
    :   Parameters:
        :   - **$index** (`string`) – The name of the variable/key to look for.
            - **$filter** (`int`) – The type of filter to apply. A list of filters can be found in
              [Types of filters](https://www.php.net/manual/en/filters.php).
            - **$flags** (`int`) – Flags to apply. A list of flags can be found in
              [Filter flags](https://www.php.net/manual/en/filter.constants.php#filter.constants.flags.generic).

        Returns:
        :   `$_REQUEST` if no parameters supplied, otherwise the REQUEST value if found, or null if not

        Return type:
        :   `array|bool|float|int|object|string|null`

        Important

        This method exists only for backward compatibility. Do not use it
        in new projects. Even if you are already using it, we recommend that you use
        another, more appropriate method.

        This method is identical to `getGet()`, only it fetches REQUEST data.

    getGet([*$index = null*[, *$filter = null*[, *$flags = null*]]])[](#CodeIgniter\HTTP\IncomingRequest::getGet "Link to this definition")
    :   Parameters:
        :   - **$index** (`array|string`) – The name of the variable/key to look for, or an array of names.
            - **$filter** (`int`) – The type of filter to apply. A list of filters can be found in
              [Types of filters](https://www.php.net/manual/en/filters.php).
            - **$flags** (`int`) – Flags to apply. A list of flags can be found in
              [Filter flags](https://www.php.net/manual/en/filter.constants.php#filter.constants.flags.generic).

        Returns:
        :   `$_GET` if no parameters supplied, otherwise the GET value if found, or null if not

        Return type:
        :   `array|bool|float|int|object|string|null`

        The first parameter will contain the name of the GET item you are looking for:

        ```
        <?php

        $request->getGet('some_data');
        ```

        The method returns null if the item you are attempting to retrieve
        does not exist.

        The second optional parameter lets you run the data through the PHP’s
        filters. Pass in the desired filter type as the second parameter:

        ```
        <?php

        $request->getGet('some_data', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        ```

        To return an array of all GET items call without any parameters.

        To return all GET items and pass them through the filter, set the
        first parameter to null while setting the second parameter to the filter
        you want to use:

        ```
        <?php

        $request->getGet(null, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // returns all GET items with string sanitation
        ```

        To return an array of multiple GET parameters, pass all the required keys as an array:

        ```
        <?php

        $request->getGet(['field1', 'field2']);
        ```

        Same rule applied here, to retrieve the parameters with filtering, set the second parameter to
        the filter type to apply:

        ```
        <?php

        $request->getGet(['field1', 'field2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        ```

    getPost([*$index = null*[, *$filter = null*[, *$flags = null*]]])[](#CodeIgniter\HTTP\IncomingRequest::getPost "Link to this definition")
    :   Parameters:
        :   - **$index** (`array|string`) – The name of the variable/key to look for, or an array of names.
            - **$filter** (`int`) – The type of filter to apply. A list of filters can be
              found [here](https://www.php.net/manual/en/filters.php).
            - **$flags** (`int`) – Flags to apply. A list of flags can be found
              [here](https://www.php.net/manual/en/filter.constants.php#filter.constants.flags.generic).

        Returns:
        :   `$_POST` if no parameters supplied, otherwise the POST value if found, or null if not

        Return type:
        :   `array|bool|float|int|object|string|null`

        This method is identical to `getGet()`, only it fetches POST data.

    getPostGet([*$index = null*[, *$filter = null*[, *$flags = null*]]])[](#CodeIgniter\HTTP\IncomingRequest::getPostGet "Link to this definition")
    :   Parameters:
        :   - **$index** (`array|string`) – The name of the variable/key to look for, or an array of names.
            - **$filter** (`int`) – The type of filter to apply. A list of filters can be found in
              [Types of filters](https://www.php.net/manual/en/filters.php).
            - **$flags** (`int`) – Flags to apply. A list of flags can be found in
              [Filter flags](https://www.php.net/manual/en/filter.constants.php#filter.constants.flags.generic).

        Returns:
        :   `$_POST` and `$_GET` combined if no parameters specified (prefer POST value on conflict),
            otherwise looks for POST value, if nothing found looks for GET value, if no value found returns null

        Return type:
        :   `array|bool|float|int|object|string|null`

        This method works pretty much the same way as `getPost()` and `getGet()`, only combined.
        It will search through both POST and GET streams for data, looking first in POST, and
        then in GET:

        ```
        <?php

        $request->getPostGet('field1');
        ```

        If an array of indexes is specified, the method returns an associative array and applies
        the POST-then-GET lookup order to each index.

        If no index is specified, it will return both POST and GET streams combined.
        Although POST data will be preferred in case of name conflict.

    getGetPost([*$index = null*[, *$filter = null*[, *$flags = null*]]])[](#CodeIgniter\HTTP\IncomingRequest::getGetPost "Link to this definition")
    :   Parameters:
        :   - **$index** (`array|string`) – The name of the variable/key to look for, or an array of names.
            - **$filter** (`int`) – The type of filter to apply. A list of filters can be found in
              [Types of filters](https://www.php.net/manual/en/filters.php).
            - **$flags** (`int`) – Flags to apply. A list of flags can be found in
              [Filter flags](https://www.php.net/manual/en/filter.constants.php#filter.constants.flags.generic).

        Returns:
        :   `$_GET` and `$_POST` combined if no parameters specified (prefer GET value on conflict),
            otherwise looks for GET value, if nothing found looks for POST value, if no value found returns null

        Return type:
        :   `array|bool|float|int|object|string|null`

        This method works pretty much the same way as `getPost()` and `getGet()`, only combined.
        It will search through both GET and POST streams for data, looking first in GET, and
        then in POST:

        ```
        <?php

        $request->getGetPost('field1');
        ```

        If an array of indexes is specified, the method returns an associative array and applies
        the GET-then-POST lookup order to each index.

        If no index is specified, it will return both GET and POST streams combined.
        Although GET data will be preferred in case of name conflict.

    getCookie([*$index = null*[, *$filter = null*[, *$flags = null*]]])[](#CodeIgniter\HTTP\IncomingRequest::getCookie "Link to this definition")
    :   Parameters:
        :   - **$index** (`array|string|null`) – COOKIE name
            - **$filter** (`int`) – The type of filter to apply. A list of filters can be found in
              [Types of filters](https://www.php.net/manual/en/filters.php).
            - **$flags** (`int`) – Flags to apply. A list of flags can be found in
              [Filter flags](https://www.php.net/manual/en/filter.constants.php#filter.constants.flags.generic).

        Returns:
        :   `$_COOKIE` if no parameters supplied, otherwise the COOKIE value if found or null if not

        Return type:
        :   `array|bool|float|int|object|string|null`

        This method is identical to `getPost()` and `getGet()`, only it fetches cookie data:

        ```
        <?php

        $request->getCookie('some_cookie');
        $request->getCookie('some_cookie', FILTER_SANITIZE_FULL_SPECIAL_CHARS); // with filter
        ```

        To return an array of multiple cookie values, pass all the required keys as an array:

        ```
        <?php

        $request->getCookie(['some_cookie', 'some_cookie2']);
        ```

        Note

        Unlike the [Cookie Helper](helpers__cookie_helper.md)
        function [`get_cookie()`](helpers__cookie_helper.md#get_cookie "get_cookie"), this method does NOT prepend
        your configured `Config\Cookie::$prefix` value.

    getServer([*$index = null*[, *$filter = null*[, *$flags = null*]]])[](#CodeIgniter\HTTP\IncomingRequest::getServer "Link to this definition")
    :   Parameters:
        :   - **$index** (`array|string|null`) – Value name
            - **$filter** (`int`) – The type of filter to apply. A list of filters can be found in
              [Types of filters](https://www.php.net/manual/en/filters.php).
            - **$flags** (`int`) – Flags to apply. A list of flags can be found in
              [Filter flags](https://www.php.net/manual/en/filter.constants.php#filter.constants.flags.generic).

        Returns:
        :   `$_SERVER` item value if found, null if not

        Return type:
        :   `array|bool|float|int|object|string|null`

        This method is identical to the `getPost()`, `getGet()` and `getCookie()`
        methods, only it fetches Server data (`$_SERVER`):

        ```
        <?php

        $request->getServer('some_data');
        ```

        To return an array of multiple `$_SERVER` values, pass all the required keys
        as an array.

        ```
        <?php

        $request->getServer(['SERVER_PROTOCOL', 'REQUEST_URI']);
        ```

    getUserAgent()[](#CodeIgniter\HTTP\IncomingRequest::getUserAgent "Link to this definition")
    :   Returns:
        :   The User Agent string, as found in the SERVER data, or null if not found.

        Return type:
        :   [`CodeIgniter\HTTP\UserAgent`](libraries__user_agent.md#CodeIgniter\HTTP\UserAgent "CodeIgniter\HTTP\UserAgent")

        This method returns the User Agent instance from the SERVER data:

        ```
        <?php

        $request->getUserAgent();
        ```

    getPath()[](#CodeIgniter\HTTP\IncomingRequest::getPath "Link to this definition")
    :   Returns:
        :   The current URI path relative to baseURL

        Return type:
        :   `string`

        This method returns the current URI path relative to baseURL.

        Note

        Prior to v4.4.0, this was the safest method to determine the
        “current URI”, since `IncomingRequest::$uri` might not be aware of
        the complete App configuration for base URLs.
