# Controller Filters — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/incoming/filters.html

---

# Controller Filters[](#controller-filters "Link to this heading")

Controller Filters allow you to perform actions either before or after the controllers execute. Unlike [events](extending__events.md),
you can choose the specific URIs or routes in which the filters will be applied to. Before filters may
modify the Request while after filters can act on and even modify the Response, allowing for a lot of flexibility
and power.

Some common examples of tasks that might be performed with filters are:

- Performing CSRF protection on the incoming requests
- Restricting areas of your site based upon their Role
- Perform rate limiting on certain endpoints
- Display a “Down for Maintenance” page
- Perform automatic content negotiation
- and more…

## [Creating a Filter](#id8)[](#creating-a-filter "Link to this heading")

Filters are simple classes that implement `CodeIgniter\Filters\FilterInterface`.
They contain two methods: `before()` and `after()` which hold the code that
will run before and after the controller respectively. Your class must contain both methods
but may leave the methods empty if they are not needed. A skeleton filter class looks like:

```
<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class MyFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
```

### [Before Filters](#id9)[](#before-filters "Link to this heading")

#### [Replacing Request](#id10)[](#replacing-request "Link to this heading")

From any filter, you can return the `$request` object and it will replace the current Request, allowing you
to make changes that will still be present when the controller executes.

#### [Stopping Later Filters](#id11)[](#stopping-later-filters "Link to this heading")

Also, when you have a series of filters you may also want to
stop the execution of the later filters after a certain filter. You can easily do this by returning
**any non-empty** result. If the before filter returns an empty result, the controller actions or the later
filters will still be executed.

An exception to the non-empty result rule is the `Request` instance.
Returning it in the before filter will not stop the execution but only replace the current `$request` object.

#### [Returning Response](#id12)[](#returning-response "Link to this heading")

Since before filters are executed prior to your controller being executed, you may at times want to stop the
actions in the controller from happening.

This is typically used to perform redirects, like in this example:

```
<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class MyFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $auth = service('auth');

        if (! $auth->isLoggedIn()) {
            return redirect()->to(site_url('login'));
        }
    }
}
```

If a `Response` instance is returned, the Response will be sent back to the client and script execution will stop.
This can be useful for implementing rate limiting for APIs. See [Throttler](libraries__throttler.md) for an
example.

### [After Filters](#id13)[](#after-filters "Link to this heading")

After filters are nearly identical to before filters, except that you can only return the `$response` object,
and you cannot stop script execution. This does allow you to modify the final output, or simply do something with
the final output. This could be used to ensure certain security headers were set the correct way, or to cache
the final output, or even to filter the final output with a bad words filter.

## [Configuring Filters](#id14)[](#configuring-filters "Link to this heading")

There are two ways to configure filters when they get run. One is done in
**app/Config/Filters.php**, the other is done in **app/Config/Routes.php**.

If you want to specify filters to defined routes, use **app/Config/Routes.php**
and see [URI Routing](incoming__routing.md#applying-filters).

Note

The safest way to apply filters is to [disable auto-routing](incoming__routing.md#use-defined-routes-only), and [set filters to routes](incoming__routing.md#applying-filters).

### [app/Config/Filters.php](#id15)[](#app-config-filters-php "Link to this heading")

The **app/Config/Filters.php** file contains four properties that allow you to
configure exactly when the filters run.

Warning

It is recommended that you should always add `*` at the end of a URI in the filter settings.
Because a controller method might be accessible by different URLs than you think.
For example, when [Auto Routing (Legacy)](incoming__routing.md#auto-routing-legacy) is enabled, if you have `Blog::index()`,
it can be accessible with `blog`, `blog/index`, and `blog/index/1`, etc.

#### [$aliases](#id16)[](#aliases "Link to this heading")

The `$aliases` array is used to associate a simple name with one or more fully-qualified class names that are the
filters to run:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public array $aliases = [
        'csrf' => \CodeIgniter\Filters\CSRF::class,
    ];

    // ...
}
```

Aliases are mandatory and if you try to use a full class name later, the system will throw an error.

Defining them
in this way makes it simple to switch out the class used. Great for when you decided you need to change to a
different authentication system since you only change the filter’s class and you’re done.

You can combine multiple filters into one alias, making complex sets of filters simple to apply:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public array $aliases = [
        'api-prep' => [
            \App\Filters\Negotiate::class,
            \App\Filters\ApiAuth::class,
        ],
    ];

    // ...
}
```

You should define as many aliases as you need.

#### [$required](#id17)[](#required "Link to this heading")

Added in version 4.5.0.

The second section allows you to define **Required Filters**.
They are special filters that are applied to every request made by the
framework. They are applied before and after other kinds of filters that are
explained below.

Note

The Required Filters are always executed. However, if the route does not exist, only the Before Filters are executed.

You should take care with how many you use here, since it could have performance
implications to have too many run on every request. But the filters set by default
provide framework functionality. If removed, those functions will no longer work.
See [Provided Filters](#provided-filters) for details.

Filters can be specified by adding their alias to either the `before` or `after` array:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    // ...
    public array $required = [
        'before' => [
            'forcehttps', // Force Global Secure Requests
            'pagecache',  // Web Page Caching
        ],
        'after' => [
            'pagecache',   // Web Page Caching
            'performance', // Performance Metrics
            'toolbar',     // Debug Toolbar
        ],
    ];

    // ...
}
```

#### [$globals](#id18)[](#globals "Link to this heading")

The third section allows you to define any filters that should be applied to every valid request made by the framework.

You should take care with how many you use here, since it could have performance implications to have too many
run on every request.

Filters can be specified by adding their alias to either the `before` or `after` array:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    // ...

    public array $globals = [
        'before' => [
            'csrf',
        ],
        'after' => [],
    ];

    // ...
}
```

##### Except for a Few URIs[](#except-for-a-few-uris "Link to this heading")

There are times where you want to apply a filter to almost every request, but have a few that should be left alone.
One common example is if you need to exclude a few URI’s from the CSRF protection filter to allow requests from
third-party websites to hit one or two specific URI’s, while keeping the rest of them protected.

To do this, add
an array with the `except` key and a URI path (relative to BaseURL) to match as the value alongside the alias:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    // ...

    public array $globals = [
        'before' => [
            'csrf' => ['except' => 'api/*'],
        ],
        'after' => [],
    ];

    // ...
}
```

Warning

Prior to v4.4.7, due to a bug, the URI paths processed by the filter
were not URL-decoded. In other words, the URI paths specified in the routing
and the URI paths specified in the filter could be different.
See [Paths in Controller Filters](installation__upgrade_447.md#upgrade-447-filter-paths) for details.

Any place you can use a URI path (relative to BaseURL) in the filter settings, you can use a regular expression or, like in this example above, use
an asterisk (`*`) for a wildcard that will match all characters after that. In this example, any URI path starting with `api/`
would be exempted from CSRF protection, but the site’s forms would all be protected.

If you need to specify multiple
URI paths, you can use an array of URI path patterns:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    // ...

    public array $globals = [
        'before' => [
            'csrf' => ['except' => ['foo/*', 'bar/*']],
        ],
        'after' => [],
    ];

    // ...
}
```

#### [$methods](#id19)[](#methods "Link to this heading")

Warning

If you use `$methods` filters, you should [disable Auto Routing (Legacy)](incoming__routing.md#use-defined-routes-only)
because [Auto Routing (Legacy)](incoming__routing.md#auto-routing-legacy) permits any HTTP method to access a controller.
Accessing the controller with a method you don’t expect could bypass the filter.

You can apply filters to all requests of a certain HTTP method, like `POST`, `GET`, `PUT`, etc.
It’s value would be an array of filters to run:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    // ...

    public array $methods = [
        'POST' => ['invalidchars', 'csrf'],
        'GET'  => ['csrf'],
    ];

    // ...
}
```

Note

Unlike the `$globals` or the
`$filters` properties, these will only run as before filters.

In addition to the standard HTTP methods, this also supports one special case: `CLI`. The `CLI` method would apply to
all requests that were run from the command line.

Note

Prior to v4.5.0, due to a bug, you needed to specify the HTTP method names in **lowercase**.

#### [$filters](#id20)[](#filters "Link to this heading")

This property is an array of filter aliases. For each alias, you can specify `before` and `after` arrays that contain
a list of URI path (relative to BaseURL) patterns that filter should apply to:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    // ...

    public array $filters = [
        'foo' => ['before' => ['admin/*'], 'after' => ['users/*']],
        'bar' => ['before' => ['api/*', 'admin/*']],
    ];

    // ...
}
```

Warning

Prior to v4.4.7, due to a bug, the URI paths processed by the filter
were not URL-decoded. In other words, the URI paths specified in the routing
and the URI paths specified in the filter could be different.
See [Paths in Controller Filters](installation__upgrade_447.md#upgrade-447-filter-paths) for details.

##### Filter Arguments[](#filter-arguments "Link to this heading")

Added in version 4.4.0.

When configuring `$filters`, additional arguments may be passed to a filter:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    // ...

    public $filters = [
        'group:admin,superadmin'  => ['before' => ['admin/*']],
        'permission:users.manage' => ['before' => ['admin/users/*']],
    ];

    // ...
}
```

In this example, when the URI matches `admin/*'`, the array `['admin', 'superadmin']`
will be passed in `$arguments` to the `group` filter’s `before()` methods.
When the URI matches `admin/users/*'`, the array `['users.manage']`
will be passed in `$arguments` to the `permission` filter’s `before()` methods.

Note

Prior to v4.6.0, the same filter cannot be run multiple times with
different arguments.

### [Filter Execution Order](#id21)[](#filter-execution-order "Link to this heading")

Important

Starting with v4.5.0, the order in which filters are executed has
changed. If you wish to maintain the same execution order as in previous versions,
you must set `true` to `Config\Feature::$oldFilterOrder`.

Filters are executed in the following order:

- **Before Filters**: required → globals → methods → filters → route
- **After Filters**: route → filters → globals → required

Note

The *required* filters can be used since v4.5.0.

Note

Prior to v4.5.0, the filters that are specified to a route
(in **app/Config/Routes.php**) are executed before the filters specified in
**app/Config/Filters.php**. And the After Filters in Route filters and Filters
filters execution order were not reversed.
See [Upgrading Guide](installation__upgrade_450.md#upgrade-450-filter-execution-order) for details.

## [Confirming Filters](#id22)[](#confirming-filters "Link to this heading")

CodeIgniter has the following [command](cli__spark_commands.md) to check the filters for a route.

### [filter:check](#id23)[](#filter-check "Link to this heading")

Added in version 4.3.0.

For example, check the filters for the route `/` with **GET** method:

```
php spark filter:check get /
```

The output is like the following:

```
+--------+-------+----------------------+-------------------------------+
| Method | Route | Before Filters       | After Filters                 |
+--------+-------+----------------------+-------------------------------+
| GET    | /     | forcehttps pagecache | pagecache performance toolbar |
+--------+-------+----------------------+-------------------------------+

Before Filter Classes:
CodeIgniter\Filters\ForceHTTPS → CodeIgniter\Filters\PageCache
After Filter Classes:
CodeIgniter\Filters\PageCache → CodeIgniter\Filters\PerformanceMetrics → CodeIgniter\Filters\DebugToolbar
```

Note

Since v4.6.0, filter arguments have been displayed in the output table.
Also, the actual filter classnames have been displayed in the end.

You can also see the routes and filters by the `spark routes` command,
but it might not show accurate filters when you use regular expressions for routes.
See [URI Routing](incoming__routing.md#routing-spark-routes) for details.

## [Provided Filters](#id24)[](#provided-filters "Link to this heading")

The filters bundled with CodeIgniter4 are:

- `cors` => [Cross-Origin Resource Sharing (CORS)](libraries__cors.md)
- `csrf` => [CSRF](libraries__security.md#cross-site-request-forgery)
- `toolbar` => [DebugToolbar](testing__debugging.md#the-debug-toolbar)
- `honeypot` => [Honeypot](libraries__honeypot.md)
- `invalidchars` => [InvalidChars](#invalidchars)
- `secureheaders` => [SecureHeaders](#secureheaders)
- `forcehttps` => [ForceHTTPS](#forcehttps)
- `pagecache` => [PageCache](general__caching.md)
- `performance` => [PerformanceMetrics](#performancemetrics)

Note

The filters are executed in the order defined in the config file. However, if enabled, `DebugToolbar` is always executed last because it should be able to capture everything that happens in the other filters.

### [ForceHTTPS](#id25)[](#forcehttps "Link to this heading")

Added in version 4.5.0.

This filter provides the “Force Global Secure Requests” feature.

If you set `Config\App:$forceGlobalSecureRequests` to true, this will force
every request made to this application to be made via a secure connection (HTTPS).
If the incoming request is not secure, the user will be redirected to a secure
version of the page and the HTTP Strict Transport Security (HSTS) header will be
set.

### [PerformanceMetrics](#id26)[](#performancemetrics "Link to this heading")

Added in version 4.5.0.

This filter provides the pseudo-variables for performance metrics.

If you would like to display the total elapsed time from the moment CodeIgniter
starts to the moment right before the final output is sent to the browser,
simply place this pseudo-variable in one of your views:

```
{elapsed_time}
```

If you would like to show your memory usage in your view files, use this
pseudo-variable:

```
{memory_usage}
```

If you don’t need this feature, remove `'performance'` from `$required['after']`.

### [InvalidChars](#id27)[](#invalidchars "Link to this heading")

This filter prohibits user input data (`$_GET`, `$_POST`, `$_COOKIE`, `php://input`) from containing the following characters:

- invalid UTF-8 characters
- control characters except line break and tab code

### [SecureHeaders](#id28)[](#secureheaders "Link to this heading")

This filter adds HTTP response headers that your application can use to increase the security of your application.

If you want to customize the headers, extend `CodeIgniter\Filters\SecureHeaders` and override the `$headers` property. And change the `$aliases` property in **app/Config/Filters.php**:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public array $aliases = [
        // ...
        'secureheaders' => \App\Filters\SecureHeaders::class,
    ];

    // ...
}
```

If you want to know about secure headers, see [OWASP Secure Headers Project](https://owasp.org/www-project-secure-headers/).
