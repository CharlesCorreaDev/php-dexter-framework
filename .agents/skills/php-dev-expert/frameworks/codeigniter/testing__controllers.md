# Testing Controllers — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/testing/controllers.html

---

# Testing Controllers[](#testing-controllers "Link to this heading")

Testing your controllers is made convenient with a couple of new helper classes and traits. When testing controllers,
you can execute the code within a controller, without first running through the entire application bootstrap process.
Often times, using the [Feature Testing tools](testing__feature.md) will be simpler, but this functionality is here in
case you need it.

Note

Because the entire framework has not been bootstrapped, there will be times when you cannot test a controller
this way.

## [The Helper Trait](#id2)[](#the-helper-trait "Link to this heading")

To enable Controller Testing you need to use the `ControllerTestTrait` trait within your tests:

```
<?php

namespace App\Controllers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

class FooControllerTest extends CIUnitTestCase
{
    use ControllerTestTrait;
    use DatabaseTestTrait;
}
```

Once the trait has been included, you can start setting up the environment, including the request and response classes,
the request body, URI, and more. You specify the controller to use with the `controller()` method, passing in the
fully qualified class name of your controller. Finally, call the `execute()` method with the name of the method
to run as the parameter:

```
<?php

namespace App\Controllers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

class ForumControllerTest extends CIUnitTestCase
{
    use ControllerTestTrait;
    use DatabaseTestTrait;

    public function testShowCategories()
    {
        $result = $this->withUri('http://example.com/categories')
            ->controller(ForumController::class)
            ->execute('showCategories');

        $this->assertTrue($result->isOK());
    }
}
```

## [Helper Methods](#id3)[](#helper-methods "Link to this heading")

### [controller($class)](#id4)[](#controller-class "Link to this heading")

Specifies the class name of the controller to test. The first parameter must be a fully qualified class name
(i.e., include the namespace):

```
<?php

$this->controller(\App\Controllers\ForumController::class);
```

### [execute(string $method, …$params)](#id5)[](#execute-string-method-params "Link to this heading")

Executes the specified method within the controller. The first parameter is the name of the method to run:

```
<?php

$results = $this->controller(\App\Controllers\ForumController::class)
    ->execute('showCategories');
```

By specifying the second and subsequent parameters, you can pass them to the controller method.

This returns a new helper class that provides a number of routines for checking the response itself. See below
for details.

### [withConfig($config)](#id6)[](#withconfig-config "Link to this heading")

Allows you to pass in a modified version of **app/Config/App.php** to test with different settings:

```
<?php

$config              = new \Config\App();
$config->appTimezone = 'America/Chicago';

$results = $this->withConfig($config)
    ->controller(\App\Controllers\ForumController::class)
    ->execute('showCategories');
```

If you do not provide one, the application’s App config file will be used.

### [withRequest($request)](#id7)[](#withrequest-request "Link to this heading")

Allows you to provide an **IncomingRequest** instance tailored to your testing needs:

```
<?php

$request = new \CodeIgniter\HTTP\IncomingRequest(
    new \Config\App(),
    new \CodeIgniter\HTTP\URI('http://example.com'),
    null,
    new \CodeIgniter\HTTP\UserAgent(),
);

$request->setLocale($locale);

$results = $this->withRequest($request)
    ->controller(\App\Controllers\ForumController::class)
    ->execute('showCategories');
```

If you do not provide one, a new IncomingRequest instance with the default application values will be passed
into your controller.

### [withResponse($response)](#id8)[](#withresponse-response "Link to this heading")

Allows you to provide a **Response** instance:

```
<?php

$response = new \CodeIgniter\HTTP\Response(new \Config\App());

$results = $this->withResponse($response)
    ->controller(\App\Controllers\ForumController::class)
    ->execute('showCategories');
```

If you do not provide one, a new Response instance with the default application values will be passed
into your controller.

### [withLogger($logger)](#id9)[](#withlogger-logger "Link to this heading")

Allows you to provide a **Logger** instance:

```
<?php

$logger = new \CodeIgniter\Log\Handlers\FileHandler();

$results = $this->withResponse($response)
    ->withLogger($logger)
    ->controller(\App\Controllers\ForumController::class)
    ->execute('showCategories');
```

If you do not provide one, a new Logger instance with the default configuration values will be passed
into your controller.

### [withUri(string $uri)](#id10)[](#withuri-string-uri "Link to this heading")

Allows you to provide a new URI that simulates the URL the client was visiting when this controller was run.
This is helpful if you need to check URI segments within your controller. The only parameter is a string
representing a valid URI:

```
<?php

$results = $this->withUri('http://example.com/forums/categories')
    ->controller(\App\Controllers\ForumController::class)
    ->execute('showCategories');
```

It is a good practice to always provide the URI during testing to avoid surprises.

Note

Since v4.4.0, this method creates a new Request instance with the URI.
Because the Request instance should have the URI instance. Also if the hostname
in the URI string is invalid with `Config\App`, the valid hostname will be
set.

### [withBody($body)](#id11)[](#withbody-body "Link to this heading")

Allows you to provide a custom body for the request. This can be helpful when testing API controllers where
you need to set a JSON value as the body. The only parameter is a string that represents the body of the request:

```
<?php

$body = json_encode(['foo' => 'bar']);

$results = $this->withBody($body)
    ->controller(\App\Controllers\ForumController::class)
    ->execute('showCategories');
```

## [Checking the Response](#id12)[](#checking-the-response "Link to this heading")

`ControllerTestTrait::execute()` returns an instance of a `TestResponse`. See [Testing Responses](testing__response.md) on
how to use this class to perform additional assertions and verification in your test cases.

## [Filter Testing](#id13)[](#filter-testing "Link to this heading")

Similar to Controller Testing, the framework provides tools to help with creating tests for
custom [Filters](incoming__filters.md) and your projects use of them in routing.

### [The Helper Trait](#id14)[](#id1 "Link to this heading")

Just like with the Controller Tester you need to include the `FilterTestTrait` in your test
cases to enable these features:

```
<?php

namespace App\Filters;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FilterTestTrait;

class FooFilterTest extends CIUnitTestCase
{
    use FilterTestTrait;
}
```

### [Configuration](#id15)[](#configuration "Link to this heading")

Because of the logical overlap with Controller Testing `FilterTestTrait` is designed to
work together with `ControllerTestTrait` should you need both on the same class.
Once the trait has been included `CIUnitTestCase` will detect its `setUp` method and
prepare all the components needed for your tests. Should you need a special configuration
you can alter any of the properties before calling the support methods:

- `$request` A prepared version of the default `IncomingRequest` service
- `$response` A prepared version of the default `ResponseInterface` service
- `$filtersConfig` The default `Config\Filters` configuration (note: discovery is handle by `Filters` so this will not include module aliases)
- `$filters` An instance of `CodeIgniter\Filters\Filters` using the three components above
- `$collection` A prepared version of `RouteCollection` which includes the discovery of `Config\Routes`

The default configuration will usually be best for your testing since it most closely emulates
a “live” project, but (for example) if you wanted to simulate a filter triggering accidentally
on an unfiltered route you could add it to the Config:

```
<?php

namespace App\Filters;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FilterTestTrait;

final class FooFilterTest extends CIUnitTestCase
{
    use FilterTestTrait;

    protected function testFilterFailsOnAdminRoute()
    {
        $this->filtersConfig->globals['before'] = ['admin-only-filter'];

        $this->assertHasFilters('unfiltered/route', 'before');
    }

    // ...
}
```

### [Checking Routes](#id16)[](#checking-routes "Link to this heading")

The first helper method is `getFiltersForRoute()` which will simulate the provided route
and return a list of all Filters (by their alias) that would have run for the given position
(“before” or “after”), without actually executing any controller or routing code. This has
a large performance advantage over Controller and HTTP Testing.

getFiltersForRoute(*$route*, *$position*)[](#getFiltersForRoute "Link to this definition")
:   Parameters:
    :   - **$route** (`string`) – The URI to check
        - **$position** (`string`) – The filter method to check, “before” or “after”

    Returns:
    :   Aliases for each filter that would have run

    Return type:
    :   `string[]`

    Usage example:

    ```
    <?php

    $result = $this->getFiltersForRoute('/', 'after'); // ['toolbar']
    ```

### [Calling Filter Methods](#id17)[](#calling-filter-methods "Link to this heading")

The properties describe in Configuration are all set up to ensure maximum performance without
interfering or interference from other tests. The next helper method will return a callable
method using these properties to test your Filter code safely and check the results.

getFilterCaller(*$filter*, *$position*)[](#getFilterCaller "Link to this definition")
:   Parameters:
    :   - **$filter** (`FilterInterface|string`) – The filter instance, class, or alias
        - **$position** (`string`) – The filter method to run, “before” or “after”

    Returns:
    :   A callable method to run the simulated Filter event

    Return type:
    :   `Closure`

    Usage example:

    ```
    <?php

    namespace App\Filters;

    use CodeIgniter\Test\CIUnitTestCase;
    use CodeIgniter\Test\FilterTestTrait;

    final class FooFilterTest extends CIUnitTestCase
    {
        use FilterTestTrait;

        protected function testUnauthorizedAccessRedirects()
        {
            $caller = $this->getFilterCaller('permission', 'before');
            $result = $caller('MayEditWidgets');

            $this->assertInstanceOf('CodeIgniter\HTTP\RedirectResponse', $result);
        }
    }
    ```

    Notice how the `Closure` can take input parameters which are passed to your filter method.

### [Assertions](#id18)[](#assertions "Link to this heading")

In addition to the helper methods above `FilterTestTrait` also comes with some assertions
to streamline your test methods.

#### assertFilter()[](#assertfilter "Link to this heading")

The `assertFilter()` method checks that the given route at position uses the filter (by its alias):

```
<?php

// Make sure users are logged in before checking their account
$this->assertFilter('users/account', 'before', 'login');
```

#### assertNotFilter()[](#assertnotfilter "Link to this heading")

The `assertNotFilter()` method checks that the given route at position does not use the filter (by its alias):

```
<?php

// Make sure API calls do not try to use the Debug Toolbar
$this->assertNotFilter('api/v1/widgets', 'after', 'toolbar');
```

#### assertHasFilters()[](#asserthasfilters "Link to this heading")

The `assertHasFilters()` method checks that the given route at position has at least one filter set:

```
<?php

// Make sure that filters are enabled
$this->assertHasFilters('filtered/route', 'after');
```

#### assertNotHasFilters()[](#assertnothasfilters "Link to this heading")

The `assertNotHasFilters()` method checks that the given route at position has no filters set:

```
<?php

// Make sure no filters run for our static pages
$this->assertNotHasFilters('about/contact', 'before');
```
