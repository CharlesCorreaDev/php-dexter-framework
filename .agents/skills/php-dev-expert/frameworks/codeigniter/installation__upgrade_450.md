# Upgrading from 4.4.8 to 4.5.0 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_450.html

---

# Upgrading from 4.4.8 to 4.5.0[](#upgrading-from-4-4-8-to-4-5-0 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [Mandatory File Changes](#id2)[](#mandatory-file-changes "Link to this heading")

### [index.php and spark](#id3)[](#index-php-and-spark "Link to this heading")

The following files received significant changes and
**you must merge the updated versions** with your application:

- `public/index.php`
- `spark`

Important

If you don’t update the above files, CodeIgniter will not work
properly after running `composer update`.

The upgrade procedure, for example, is as follows:

```
composer update
cp vendor/codeigniter4/framework/public/index.php public/index.php
cp vendor/codeigniter4/framework/spark spark
```

## [Breaking Changes](#id4)[](#breaking-changes "Link to this heading")

### [Lowercase HTTP Method Name](#id5)[](#lowercase-http-method-name "Link to this heading")

#### Request::getMethod()[](#request-getmethod "Link to this heading")

For historical reasons, `Request::getMethod()` returned HTTP method names in
lower case by default.

But the method token is case-sensitive because it might be used as a gateway
to object-based systems with case-sensitive method names. By convention,
standardized methods are defined in all-uppercase US-ASCII letters.
See <https://www.rfc-editor.org/rfc/rfc9110#name-overview>.

Now the deprecated `$upper` parameter in `Request::getMethod()` has been
removed, and the `getMethod()` returns the as-is HTTP method name. That is,
uppercase like “GET”, “POST”, and so on.

If you want lowercase HTTP method names, use PHP’s `strtolower()` function:

```
strtolower($request->getMethod())
```

And you should use uppercase HTTP method names in your app code.

#### app/Config/Filters.php[](#app-config-filters-php "Link to this heading")

You should update the keys to uppercase in `$methods` in **app/Config/Filters.php**:

```
public array $methods = [
    'POST' => ['invalidchars', 'csrf'],
    'GET'  => ['csrf'],
];
```

#### CURLRequest::request()[](#curlrequest-request "Link to this heading")

In previous versions, you could pass lowercase HTTP methods to the `request()`
method. But this bug has been fixed.

Now you must pass the correct HTTP method names like `GET`, `POST`. Otherwise
you would get the error response:

```
$client   = \Config\Services::curlrequest();
$response = $client->request('get', 'https://www.google.com/', [
    'http_errors' => false,
]);
$response->getStatusCode(); // In previous versions: 200
                            //      In this version: 405
```

### [Nested Route Groups and Options](#id6)[](#nested-route-groups-and-options "Link to this heading")

A bug that prevented options passed to outer `group()` from being merged with
options in inner `group()` has been fixed.

Check and correct your route configuration as it could change the values of the
options applied.

For example,

```
$routes->group('admin', ['filter' => 'csrf'], static function ($routes) {
    $routes->get('/', static function () {
        // ...
    });

    $routes->group('users', ['namespace' => 'Users'], static function ($routes) {
        $routes->get('/', static function () {
            // ...
        });
    });
});
```

Now the `csrf` filter is executed for both the route `admin` and `admin/users`.
In previous versions, it is executed only for the route `admin`.
See also [Nesting Groups](incoming__routing.md#routing-nesting-groups).

### [Filter Execution Order](#id7)[](#filter-execution-order "Link to this heading")

The order in which Controller Filters are executed has changed.
If you wish to maintain the same execution order as in previous versions, set
`true` to `Config\Feature::$oldFilterOrder`. See also [Filter Execution Order](incoming__filters.md#filter-execution-order).

1. The order of execution of filter groups has been changed.

   > Before Filters:
   >
   > ```
   > Previous: route → globals → methods → filters
   >      Now: globals → methods → filters → route
   > ```
   >
   > After Filters:
   >
   > ```
   > Previous: route → globals → filters
   >      Now: route → filters → globals
   > ```

2. The After Filters in *Route* filters and *Filters* filters execution order is now
reversed.

> When you have the following configuration:
>
> ```
> // In app/Config/Routes.php
> $routes->get('/', 'Home::index', ['filter' => ['route1', 'route2']]);
>
> // In app/Config/Filters.php
> public array $filters = [
>     'filter1' => ['before' => '*', 'after' => '*'],
>     'filter2' => ['before' => '*', 'after' => '*'],
> ];
> ```
>
> Before Filters:
>
> ```
> Previous: route1 → route2 → filter1 → filter2
>      Now: filter1 → filter2 → route1 → route2
> ```
>
> After Filters:
>
> ```
> Previous: route1 → route2 → filter1 → filter2
>      Now: route2 → route1 → filter2 → filter1
> ```

### [API\ResponseTrait and String Data](#id8)[](#api-responsetrait-and-string-data "Link to this heading")

In previous versions, if you pass string data to a trait method, the framework
returned an HTML response, even if the response format was determined to be JSON.

Now if you pass string data, it returns a JSON response correctly. See also
[Handling Response Types](outgoing__api_responses.md#api-response-trait-handling-response-types).

You can keep the behavior in previous versions if you set the `$stringAsHtml`
property to `true` in your controller.

### [FileLocator::findQualifiedNameFromPath()](#id9)[](#filelocator-findqualifiednamefrompath "Link to this heading")

In previous versions, `FileLocator::findQualifiedNameFromPath()` returns Fully
Qualified Classnames with a leading `\`. Now the leading `\` has been removed.

If you have code that expects a leading `\`, fix it.

### [BaseModel::getIdValue()](#id10)[](#basemodel-getidvalue "Link to this heading")

The `BaseModel::getIdValue()` has been changed to `abstract`, and the implementation
has been removed.

If you extneds `BaseModel`, implement the `getIdValue()` method in the child class.

### [Factories](#id11)[](#factories "Link to this heading")

[Factories](concepts__factories.md) has been changed to a final class.
In the unlikely event, you have inherited the Factories, stop inheriting and
copy the code into your Factories class.

### [Auto Routing (Legacy)](#id12)[](#auto-routing-legacy "Link to this heading")

In previous versions, the controller filters might be executed even when the
corresponding controller was not found.

This bug has been fixed and now a `PageNotFoundException` will be thrown and
the filters will not be executed if the controller is not found.

If you have code that depends on this bug, for example if you expect global filters
to be executed even for non-existent pages, use the new [Required Filters](changelogs__v4.5.0.md#v450-required-filters).

### [Method Signature Changes](#id13)[](#method-signature-changes "Link to this heading")

Some method signature changes have been made. Classes that extend them should
update their APIs to reflect the changes. See [ChangeLog](changelogs__v4.5.0.md#v450-method-signature-changes)
for details.

### [Removed Deprecated Items](#id14)[](#removed-deprecated-items "Link to this heading")

Some deprecated items have been removed. If you are still using these items, or
extending these classes, upgrade your code. See [ChangeLog](changelogs__v4.5.0.md#v450-removed-deprecated-items)
for details.

## [Breaking Enhancements](#id15)[](#breaking-enhancements "Link to this heading")

### [404 Override Status Code](#id16)[](#override-status-code "Link to this heading")

In previous versions, [404 Override](incoming__routing.md#override) returned responses with the status code
`200` by default. Now it returns `404` by default.

If you want `200`, you need to set it in the controller:

```
$routes->set404Override(static function () {
    response()->setStatusCode(200);

    echo view('my_errors/not_found.html');
});
```

### [Validation::run() Signature](#id17)[](#validation-run-signature "Link to this heading")

The method signatures of `Validation::run()` and `ValidationInterface::run()`
have been changed. The `?string` typehint on the `$dbGroup` parameter was
removed. Extending classes should likewise remove the parameter so as not to
break LSP.

## [Project Files](#id18)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Content Changes](#id19)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

#### Config[](#config "Link to this heading")

##### app/Config/Filters.php[](#id1 "Link to this heading")

Required Filters have been added, so the following changes were made. See also
[ChangeLog](changelogs__v4.5.0.md#v450-required-filters).

The base class has been changed:

```
class Filters extends \CodeIgniter\Config\Filters
```

The following items are added in the `$aliases` property:

```
public array $aliases = [
    // ...
    'forcehttps'    => \CodeIgniter\Filters\ForceHTTPS::class,
    'pagecache'     => \CodeIgniter\Filters\PageCache::class,
    'performance'   => \CodeIgniter\Filters\PerformanceMetrics::class,
];
```

A new property `$required` is added, and set as the following:

```
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
```

The `'toolbar'` in the `$global['after']` was removed.

##### Others[](#others "Link to this heading")

- app/Config/Boot/production.php
  :   - The default error level to `error_reporting()` has been changed to `E_ALL & ~E_DEPRECATED`.
- app/Config/Cors.php
  :   - Added to handle CORS configuration.
- app/Config/Database.php
  :   - The default value of `charset` in `$default` has been change to `utf8mb4`.
      - The default value of `DBCollat` in `$default` has been change to `utf8mb4_general_ci`.
      - The default value of `DBCollat` in `$tests` has been change to `''`.
- app/Config/Feature.php
  :   - `Config\Feature::$oldFilterOrder` has been added. See
        [Filter Execution Order](incoming__filters.md#filter-execution-order).
      - `Config\Feature::$limitZeroAsAll` has been added. See
        [limit(0) Behavior](changelogs__v4.5.0.md#v450-query-builder-limit-0-behavior).
      - `Config\Feature::$multipleFilters` has been removed, because now
        [Multiple Filters](incoming__routing.md#multiple-filters) are always enabled.
- app/Config/Kint.php
  :   - It no longer extends `BaseConfig` because enabling
        [Config Caching](concepts__factories.md#factories-config-caching) could cause errors.
- app/Config/Optimize.php
  :   - Added to handle optimization configuration.
- app/Config/Security.php
  :   - The property `$redirect` has been changed to `true` in `production`
        environment.

### [All Changes](#id20)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/Autoload.php
- app/Config/Boot/production.php
- app/Config/Cache.php
- app/Config/Cors.php
- app/Config/Database.php
- app/Config/Feature.php
- app/Config/Filters.php
- app/Config/Generators.php
- app/Config/Kint.php
- app/Config/Optimize.php
- app/Config/Routing.php
- app/Config/Security.php
- app/Config/Session.php
- app/Views/errors/cli/error\_exception.php
- app/Views/errors/html/error\_exception.php
- app/Views/welcome\_message.php
- composer.json
- env
- phpunit.xml.dist
- preload.php
- public/index.php
- spark
