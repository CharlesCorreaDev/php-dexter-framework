# HTTP Feature Testing — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/testing/feature.html

---

# HTTP Feature Testing[](#http-feature-testing "Link to this heading")

Feature testing allows you to view the results of a single call to your application. This might be returning the
results of a single web form, hitting an API endpoint, and more. This is handy because it allows you to test the entire
life-cycle of a single request, ensuring that the routing works, the response is the correct format, analyze the results,
and more.

## [The Test Class](#id1)[](#the-test-class "Link to this heading")

Feature testing requires that all of your test classes use the `CodeIgniter\Test\DatabaseTestTrait`
and `CodeIgniter\Test\FeatureTestTrait` traits. Since these testing tools rely on proper database
staging you must always ensure that `parent::setUp()` and `parent::tearDown()`
are called if you implement your own methods.

```
<?php

namespace Tests\Feature;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;

class FooTest extends CIUnitTestCase
{
    use DatabaseTestTrait;
    use FeatureTestTrait;

    protected function setUp(): void
    {
        parent::setUp();

        $this->myClassMethod();
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $this->anotherClassMethod();
    }
}
```

## [Requesting a Page](#id2)[](#requesting-a-page "Link to this heading")

Essentially, feature tests simply allows you to call an endpoint on your application and get the results back.
To do this, you use the `call()` method.

1. The first parameter is the HTTP method to use (most frequently either `GET` or `POST`).
2. The second parameter is the URI path on your site to test.
3. The third parameter `$params` accepts an array that is used to populate the
   superglobal variables for the HTTP verb you are using. So, a method of **GET**
   would have the `$_GET` variable populated, while a **POST** request would
   have the `$_POST` array populated. The `$params` is also used in
   [Formatting the Request](#feature-formatting-the-request).

   Note

   The `$params` array does not make sense for every HTTP verb, but is
   included for consistency.

```
// Get a simple page
$result = $this->call('GET', '/');

// Submit a form
$result = $this->call('post', 'contact', [
    'name'  => 'Fred Flintstone',
    'email' => '[email protected]',
]);
```

### [Shorthand Methods](#id3)[](#shorthand-methods "Link to this heading")

Shorthand methods for each of the HTTP verbs exist to ease typing and make things clearer:

```
$this->get($path, $params);
$this->post($path, $params);
$this->put($path, $params);
$this->patch($path, $params);
$this->delete($path, $params);
$this->options($path, $params);
```

### [Setting Different Routes](#id4)[](#setting-different-routes "Link to this heading")

You can use a custom collection of routes by passing an array of “routes” into the `withRoutes()` method. This will
override any existing routes in the system:

```
$routes = [
    ['GET', 'users', 'UserController::list'],
];

$result = $this->withRoutes($routes)->get('users');
```

Each of the “routes” is a 3 element array containing the HTTP verb (or “add” for all),
the URI to match, and the routing destination.

### [Setting Session Values](#id5)[](#setting-session-values "Link to this heading")

You can set custom session values to use during a single test with the `withSession()` method. This takes an array
of key/value pairs that should exist within the `$_SESSION` variable when this request is made, or `null` to indicate
that the current values of `$_SESSION` should be used. This is handy for testing authentication and more.

```
$values = [
    'logged_in' => 123,
];

$result = $this->withSession($values)->get('admin');

// Or...

$_SESSION['logged_in'] = 123;

$result = $this->withSession()->get('admin');
```

### [Setting Headers](#id6)[](#setting-headers "Link to this heading")

You can set header values with the `withHeaders()` method. This takes an array of key/value pairs that would be
passed as a header into the call:

```
$headers = [
    'CONTENT_TYPE' => 'application/json',
];

$result = $this->withHeaders($headers)->post('users');
```

### [Bypassing Events](#id7)[](#bypassing-events "Link to this heading")

Events are handy to use in your application, but can be problematic during testing. Especially events that are used
to send out emails. You can tell the system to skip any event handling with the `skipEvents()` method:

```
$result = $this->skipEvents()->post('users', $userInfo);
```

### [Formatting the Request](#id8)[](#formatting-the-request "Link to this heading")

You can set the format of your request’s body using the `withBodyFormat()` method. Currently this supports either
`json` or `xml`.
This is useful when testing JSON or XML APIs so that you can set the request in the form that the controller will expect.

This will take the parameters passed into `call()`, `post()`, `get()`… and assign them to the
body of the request in the given format.

This will also set the Content-Type header for your request accordingly.

```
// If your feature test contains this:
$result = $this->withBodyFormat('json')->post('users', $userInfo);

// Your controller can then get the parameters passed in with:
$userInfo = $this->request->getJson();
```

### [Setting the Body](#id9)[](#setting-the-body "Link to this heading")

You can set the body of your request with the `withBody()` method. This allows you to format the body how you want
to format it. It is recommended that you use this if you have more complicated XMLs to test.

This will not set
the Content-Type header for you. If you need that, you can set it with the `withHeaders()` method.

## [Checking the Response](#id10)[](#checking-the-response "Link to this heading")

`FeatureTestTrait::call()` returns an instance of a `TestResponse`. See [Testing Responses](testing__response.md) on
how to use this class to perform additional assertions and verification in your test cases.
