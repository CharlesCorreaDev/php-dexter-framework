# Cross-Origin Resource Sharing (CORS) — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/cors.html

---

# Cross-Origin Resource Sharing (CORS)[](#cross-origin-resource-sharing-cors "Link to this heading")

Added in version 4.5.0.

Cross-Origin Resource Sharing (CORS) is an HTTP-header based security mechanism
that allows a server to indicate any origins (domain, scheme, or port) other than
its own from which a browser should permit loading resources.

CORS works by adding headers to HTTP requests and responses to indicate whether
the requested resource can be shared across different origins, helping to prevent
malicious attacks like cross-site request forgery (CSRF) and data theft.

If you are not familiar with CORS and CORS headers, please read the
[MDN documentation on CORS](https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS#the_http_response_headers).

CodeIgniter provides the CORS filter and helper class.

## [Configuring CORS](#id1)[](#configuring-cors "Link to this heading")

### [Setting Default Config](#id2)[](#setting-default-config "Link to this heading")

CORS can be configured by **app/Config/Cors.php**.

At a minimum, the following items in the `$default` property must be set:

- `allowedOrigins`: List explicitly the Origin(s) you want to allow.
- `allowedHeaders`: List explicitly the HTTP headers you want to allow.
- `allowedMethods`: List explicitly the HTTP methods you want to allow.

Warning

Based on the principle of least privilege, only the minimum necessary
Origin, Methods, and Headers should be allowed.

If you send credentials (e.g., cookies) with a cross-origin request, set
`supportsCredentials` to `true`.

### [Enabling CORS](#id3)[](#enabling-cors "Link to this heading")

To enable CORS, you need to do two things:

1. Specify the `cors` filter to routes that you permit CORS.
2. Add **OPTIONS** routes for CORS Preflight Requests.

#### Set against Routes[](#set-against-routes "Link to this heading")

You can set the `cors` filter to routes with **app/Config/Routes.php**.

E.g.,

```
<?php

use CodeIgniter\Router\RouteCollection;

$routes->group('', ['filter' => 'cors'], static function (RouteCollection $routes): void {
    $routes->resource('product');

    $routes->options('product', static function () {
        // Implement processing for normal non-preflight OPTIONS requests,
        // if necessary.
        $response = response();
        $response->setStatusCode(204);
        $response->setHeader('Allow:', 'OPTIONS, GET, POST, PUT, PATCH, DELETE');

        return $response;
    });
    $routes->options('product/(:any)', static function () {});
});
```

Don’t forget to add OPTIONS routes for Preflight Requests. Because Controller
Filters (except for Required Filters) do not work if the route does not exist.

The CORS filter handles all Preflight Requests, so the closure controllers
for the OPTIONS routes are not normally called.

#### Set in Config\Filters[](#set-in-config-filters "Link to this heading")

Alternatively, you can set the `cors` filter to URI paths in **app/Config/Filters.php**.

E.g.,

```
<?php

namespace Config;

use CodeIgniter\Config\Filters as BaseFilters;

// ...

class Filters extends BaseFilters
{
    // ...
    public array $filters = [
        // ...
        'cors' => [
            'before' => ['api/*'],
            'after'  => ['api/*'],
        ],
    ];
}
```

Don’t forget to add OPTIONS routes for Preflight Requests. Because Controller
Filters (except for Required Filters) do not work if the route does not exist.

E.g.,

```
<?php

use CodeIgniter\Router\RouteCollection;

$routes->group('', ['filter' => 'cors'], static function (RouteCollection $routes): void {
    $routes->options('api/(:any)', static function () {});
});
```

The CORS filter handles all Preflight Requests, so the closure controller
for the OPTIONS routes is not normally called.

### [Checking Routes and Filters](#id4)[](#checking-routes-and-filters "Link to this heading")

After configuration, you can check the routes and filters with the [spark routes](incoming__routing.md#routing-spark-routes)
command.

### [Setting Another Config](#id5)[](#setting-another-config "Link to this heading")

If you want to use a different configuration than the default configuration, add
a property to **app/Config/Cors.php**.

For example, add the `$api` property.

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Cross-Origin Resource Sharing (CORS) Configuration
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
 */
class Cors extends BaseConfig
{
    // ...

    public array $api = [
        'allowedOrigins'         => ['https://app.example.com'],
        'allowedOriginsPatterns' => [],
        'supportsCredentials'    => true,
        'allowedHeaders'         => ['Authorization', 'Content-Type'],
        'exposedHeaders'         => [],
        'allowedMethods'         => ['GET', 'POST', 'PUT', 'DELETE'],
        'maxAge'                 => 7200,
    ];
}
```

The property name (`api` in the above example) will become the configuration name.

Then, specify the property name as the filter argument like `cors:api`:

```
<?php

use CodeIgniter\Router\RouteCollection;

$routes->group('api', ['filter' => 'cors:api'], static function (RouteCollection $routes): void {
    $routes->resource('user');

    $routes->options('user', static function () {});
    $routes->options('user/(:any)', static function () {});
});
```

You can also use [Filter Arguments](incoming__filters.md#filters-filters-filter-arguments).

## [Class Reference](#id6)[](#class-reference "Link to this heading")

*class* CodeIgniter\HTTP\Cors[](#CodeIgniter\HTTP\Cors "Link to this definition")

CodeIgniter\HTTP\Cors::addResponseHeaders(*RequestInterface $request*, *ResponseInterface $response*) → ResponseInterface[](#CodeIgniter\HTTP\Cors::addResponseHeaders "Link to this definition")
:   Parameters:
    :   - **$request** (`RequestInterface`) – Request instance
        - **$response** (`ResponseInterface`) – Response instance

    Returns:
    :   Response instance

    Return type:
    :   `ResponseInterface`

    Adds response headers for CORS.

CodeIgniter\HTTP\Cors::handlePreflightRequest(*RequestInterface $request*, *ResponseInterface $response*) → ResponseInterface[](#CodeIgniter\HTTP\Cors::handlePreflightRequest "Link to this definition")
:   Parameters:
    :   - **$request** (`RequestInterface`) – Request instance
        - **$response** (`ResponseInterface`) – Response instance

    Returns:
    :   Response instance

    Return type:
    :   `ResponseInterface`

    Handles Preflight Requests.

CodeIgniter\HTTP\Cors::isPreflightRequest(*IncomingRequest $request*) → bool[](#CodeIgniter\HTTP\Cors::isPreflightRequest "Link to this definition")
:   Parameters:
    :   - **$request** ([`IncomingRequest`](incoming__incomingrequest.md#CodeIgniter\HTTP\IncomingRequest "CodeIgniter\HTTP\IncomingRequest")) – Request instance

    Returns:
    :   True if it is a Preflight Request.

    Return type:
    :   `bool`

    Checks if the request is a Preflight Request.
