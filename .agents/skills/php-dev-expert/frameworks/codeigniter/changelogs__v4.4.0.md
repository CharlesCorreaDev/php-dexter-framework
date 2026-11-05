# Version 4.4.0 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.4.0.html

---

# Version 4.4.0[](#version-4-4-0 "Link to this heading")

Release Date: August 25, 2023

**4.4.0 release of CodeIgniter4**

## [Highlights](#id1)[](#highlights "Link to this heading")

- The Debug Toolbar now has a new “Hot Reload” feature
  (*contributed by* [lonnieezell](https://github.com/lonnieezell)).
  See [Testing](#testing).

## [BREAKING](#id2)[](#breaking "Link to this heading")

### [Behavior Changes](#id3)[](#behavior-changes "Link to this heading")

#### [URI::setSegment() and Non-Existent Segment](#id4)[](#uri-setsegment-and-non-existent-segment "Link to this heading")

An exception is now thrown when you set the last `+2` segment.
In previous versions, an exception was thrown only if the last segment `+3`
or more was specified. See [URI::setSegment() Change](installation__upgrade_440.md#upgrade-440-uri-setsegment).

The next segment (`+1`) of the current last segment can be set as before.

#### [Factories](#id5)[](#factories "Link to this heading")

##### Passing Classname with Namespace[](#passing-classname-with-namespace "Link to this heading")

Now `preferApp` works only when you request
[a classname without a namespace](concepts__factories.md#factories-passing-classname-without-namespace).

For example, when you call `model(\Myth\Auth\Models\UserModel::class)` or
`model('Myth\Auth\Models\UserModel')`:

> - before:
>
>   > - returns `App\Models\UserModel` if exists and `preferApp` is true (default)
>   > - returns `Myth\Auth\Models\UserModel` if exists and `preferApp` is false
> - after:
>
>   > - returns `Myth\Auth\Models\UserModel` even if `preferApp` is true (default)
>   > - returns `App\Models\UserModel` if you define `Factories::define('models', 'Myth\Auth\Models\UserModel', 'App\Models\UserModel')` before calling the `model()`

If you had passed a non-existent classname by mistake, the previous version
would have returned a class instance in the `App` or `Config` namespace
because of the `preferApp` feature.

For example, in a controller (`namespace App\Controllers`), if you called
`config(Config\App::class)` by mistake (note the class is missing the leading `\`),
meaning you actually passed `App\Controllers\Config\App`.
But that class does not exist, so now Factories will return `null`.

##### Property Name[](#property-name "Link to this heading")

The property `Factories::$basenames` has been renamed to `$aliases`.

#### [Autoloader](#id6)[](#autoloader "Link to this heading")

Previously, CodeIgniter’s autoloader allowed loading class names ending with the .php extension. This means instantiating objects like new Foo.php() was possible
and would instantiate as new Foo(). Since Foo.php is an invalid class name, this behavior of the autoloader is changed. Now, instantiating such classes would fail.

#### [CodeIgniter and exit()](#id7)[](#codeigniter-and-exit "Link to this heading")

The `CodeIgniter::run()` method no longer calls `exit(EXIT_SUCCESS)`. The
exit call is moved to **public/index.php**.

#### [Site URI Changes](#id8)[](#site-uri-changes "Link to this heading")

A new `SiteURI` class that extends the `URI` class and represents the site
URI has been added, and now it is used in many places that need the current URI.

`$this->request->getUri()` in controllers returns the `SiteURI` instance.
Also, [`site_url()`](helpers__url_helper.md#site_url "site_url"), [`base_url()`](helpers__url_helper.md#base_url "base_url"), and [`current_url()`](helpers__url_helper.md#current_url "current_url")
use the SiteURI internally.

##### getPath()[](#getpath "Link to this heading")

The `getPath()` method now always returns the full URI path with leading `/`.
Therefore, when your baseURL has sub-directories and you want to get the relative
path to baseURL, you must use the new `getRoutePath()` method instead.

For example:

```
        baseURL: http://localhost:8888/CodeIgniter4/
The current URI: http://localhost:8888/CodeIgniter4/foo/bar
      getPath(): /CodeIgniter4/foo/bar
 getRoutePath(): foo/bar
```

##### Site URI Values[](#site-uri-values "Link to this heading")

The SiteURI class normalizes site URIs more strictly than before, and some bugs
have been fixed.

As a result, the framework may return site URIs or the URI paths slightly differently
than in previous versions.
For example, `/` will be added after `index.php`:

```
http://example.com/test/index.php?page=1
↓
http://example.com/test/index.php/?page=1
```

### [Interface Changes](#id9)[](#interface-changes "Link to this heading")

Note

As long as you have not extended the relevant CodeIgniter core classes
or implemented these interfaces, all these changes are backward compatible
and require no intervention.

- **Validation:** Added the `getValidated()` method in `ValidationInterface`.

### [Method Signature Changes](#id10)[](#method-signature-changes "Link to this heading")

#### [Parameter Type Changes](#id11)[](#parameter-type-changes "Link to this heading")

- **Services:**
  :   - The first parameter of `Services::security()` has been changed from
        `Config\App` to `Config\Security`.
      - The first parameter of `Services::session()` has been changed from
        `Config\App` to `Config\Session`.
- **Session:**
  :   - The second parameter of `Session::__construct()` has been changed from
        `Config\App` to `Config\Session`.
      - The first parameter of `__construct()` in the database’s `BaseHandler`,
        `DatabaseHandler`, `FileHandler`, `MemcachedHandler`, and `RedisHandler`
        has been changed from `Config\App` to `Config\Session`.
- **Security:** The first parameter of `Security::__construct()` has been
  changed from `Config\App` to `Config\Security`.
- **Validation:** The method signature of `Validation::check()` has been changed.
  The `string` typehint on the `$rule` parameter was removed.
- **CodeIgniter:** The method signature of `CodeIgniter::setRequest()` has been
  changed. The `Request` typehint on the `$request` parameter was removed.
- **FeatureTestCase:**
  :   - The method signature of `FeatureTestCase::populateGlobals()` has been
        changed. The `Request` typehint on the `$request` parameter was removed.
      - The method signature of `FeatureTestCase::setRequestBody()` has been
        changed. The `Request` typehint on the `$request` parameter and the
        return type `Request` were removed.

#### [Added Parameters](#id12)[](#added-parameters "Link to this heading")

- **Routing:** The third parameter `Routing $routing` has been added to
  `RouteCollection::__construct()`.

#### [Removed Parameters](#id13)[](#removed-parameters "Link to this heading")

- **Services:** The second parameter `$request` and the third parameter
  `$response` in `Services::exceptions()` have been removed.
- **Error Handling:** The second parameter `$request` and the third parameter
  `$response` in `CodeIgniter\Debug\Exceptions::__construct()` have been removed.

#### [Return Type Changes](#id14)[](#return-type-changes "Link to this heading")

- **Autoloader:** The return signatures of the loadClass and loadClassmap methods are made void
  to be compatible as callbacks in spl\_autoload\_register and spl\_autoload\_unregister functions.

## [Enhancements](#id15)[](#enhancements "Link to this heading")

### [Commands](#id16)[](#commands "Link to this heading")

- **spark routes:**
  :   - Now you can specify the host in the request URL.
        See [Specify Host](incoming__routing.md#routing-spark-routes-specify-host).
      - It shows view files of [View Routes](incoming__routing.md#view-routes) in *Handler* like the following:

        > |  |  |  |  |  |  |
        > | --- | --- | --- | --- | --- | --- |
        > | Method | Route | Name | Handler | Before Filters | After Filters |
        > | GET | about | » | (View) pages/about |  | toolbar |

### [Testing](#id17)[](#testing "Link to this heading")

- **DebugBar:**
  :   - The Debug Toolbar now has a new “Hot Reload” feature that can be used to
        automatically reload the page when a file is changed.
        See [Hot Reloading](testing__debugging.md#debug-toolbar-hot-reload).
      - Now [View Routes](incoming__routing.md#view-routes) are displayed in *DEFINED ROUTES* on the *Routes* tab.

### [Database](#id18)[](#database "Link to this heading")

- **MySQLi:** Added the `numberNative` attribute to the Database Config to keep the variable type obtained after SQL Query consistent with the type set in the database.
  See [Database Configuration](database__configuration.md#database-config-explanation-of-values).
- **SQLSRV:** Field Metadata now includes `nullable`. See [$db->getFieldData()](database__metadata.md#db-metadata-getfielddata).

### [Model](#id19)[](#model "Link to this heading")

- Added special getter/setter to Entity to avoid method name conflicts.
  See [Special Getter/Setter](models__entities.md#entities-special-getter-setter).

### [Libraries](#id20)[](#libraries "Link to this heading")

- **Validation:** Added `Validation::getValidated()` method that gets
  the actual validated data. See [Getting Validated Data](libraries__validation.md#validation-getting-validated-data) for details.
- **Images:** The option `$quality` can now be used to compress WebP images.
- **Uploaded Files:** Added `UploadedFiles::getClientPath()` method that returns
  the value of the full\_path index of the file if it was uploaded via directory upload.
- **CURLRequest:** Added a request option `proxy`. See
  [CURLRequest Class](libraries__curlrequest.md#curlrequest-request-options-proxy).
- **URI:** A new `SiteURI` class that extends `URI` and represents the site
  URI has been added.

### [Helpers and Functions](#id21)[](#helpers-and-functions "Link to this heading")

- **Array:** Added [`array_group_by()`](helpers__array_helper.md#array_group_by "array_group_by") helper function to group data
  values together. Supports dot-notation syntax.
- **Common:** [`force_https()`](general__common_functions.md#force_https "force_https") no longer terminates the application, but throws a `RedirectException`.

### [Others](#id22)[](#others "Link to this heading")

- **DownloadResponse:** Added `DownloadResponse::inline()` method that sets
  the `Content-Disposition: inline` header to display the file in the browser.
  See [Open File in Browser](outgoing__response.md#open-file-in-browser) for details.
- **View:** Added optional 2nd parameter `$saveData` on `renderSection()` to prevent from auto cleans the data after displaying. See [View Layouts](outgoing__view_layouts.md#creating-a-layout) for details.
- **Auto Routing (Improved)**:
  :   - Now you can route to Modules. See [Module Routing](incoming__auto_routing_improved.md#auto-routing-improved-module-routing)
        for details.
      - If a controller is found that corresponds to a URI segment and that controller
        does not have a method defined for the URI segment, the default method will
        now be executed. This addition allows for more flexible handling of URIs in
        auto routing. See [Default Method Fallback](incoming__auto_routing_improved.md#auto-routing-improved-default-method-fallback) for details.
- **Filters:** Now you can use Filter Arguments with [$filters property](incoming__filters.md#filters-filters-filter-arguments).
- **Request:** Added `IncomingRequest::setValidLocales()` method to set valid locales.
- **Table:** Added `Table::setSyncRowsWithHeading()` method to synchronize row columns with headings. See [Synchronizing Rows with Headings](outgoing__table.md#table-sync-rows-with-headings) for details.
- **Error Handling:** Now you can use [Custom Exception Handlers](general__errors.md#custom-exception-handlers).
- **RedirectException:**
  :   - It can also take an object that implements `ResponseInterface` as its first argument.
      - It implements `ResponsableInterface`.
- **Factories:**
  :   - You can now define the classname that will actually be loaded.
        See [Defining Classname to be Loaded](concepts__factories.md#factories-defining-classname-to-be-loaded).
      - Config Caching implemented. See [Config Caching](concepts__factories.md#factories-config-caching) for details.

## [Message Changes](#id23)[](#message-changes "Link to this heading")

- Added `Core.invalidDirectory` error message.
- Improved `HTTP.invalidHTTPProtocol` error message.

## [Changes](#id24)[](#changes "Link to this heading")

- **Images:** The default quality for WebP in `GDHandler` has been changed from 80 to 90.
- **Config:**
  :   - The deprecated Cookie items in **app/Config/App.php** has been removed.
      - The deprecated Session items in **app/Config/App.php** has been removed.
      - The deprecated CSRF items in **app/Config/App.php** has been removed.
      - Routing settings have been moved to **app/Config/Routing.php** config file.
        See [Upgrading Guide](installation__upgrade_440.md#upgrade-440-config-routing).
- **DownloadResponse:** When generating response headers, does not replace the `Content-Disposition` header if it was previously specified.
- **Autoloader:**
  :   - Before v4.4.0, CodeIgniter autoloader did not allow special
        characters that are illegal in filenames on certain operating systems.
        The symbols that can be used are `/`, `_`, `.`, `:`, `\` and space.
        So if you installed CodeIgniter under the folder that contains the special
        characters like `(`, `)`, etc., CodeIgniter didn’t work. Since v4.4.0,
        this restriction has been removed.
      - The methods `Autoloader::loadClass()` and `Autoloader::loadClassmap()` are now both
        marked `@internal`.
- **RouteCollection:** The array structure of the protected property `$routes`
  has been modified for performance.
- **HSTS:** Now [`force_https()`](general__common_functions.md#force_https "force_https") or
  `Config\App::$forceGlobalSecureRequests = true` sets the HTTP status code 307,
  which allows the HTTP request method to be preserved after the redirect.
  In previous versions, it was 302.

## [Deprecations](#id25)[](#deprecations "Link to this heading")

- **Entity:** `Entity::setAttributes()` is deprecated. Use `Entity::injectRawData()` instead.
- **Error Handling:** Many methods and properties in `CodeIgniter\Debug\Exceptions`
  are deprecated. Because these methods have been moved to `BaseExceptionHandler` or
  `ExceptionHandler`.
- **Autoloader:** `Autoloader::sanitizeFilename()` is deprecated.
- **CodeIgniter:**
  :   - `CodeIgniter::$returnResponse` property is deprecated. No longer used.
      - `CodeIgniter::$cacheTTL` property is deprecated. No longer used. Use `ResponseCache` instead.
      - `CodeIgniter::cache()` method is deprecated. No longer used. Use `ResponseCache` instead.
      - `CodeIgniter::cachePage()` method is deprecated. No longer used. Use `ResponseCache` instead.
      - `CodeIgniter::generateCacheName()` method is deprecated. No longer used. Use `ResponseCache` instead.
      - `CodeIgniter::callExit()` method is deprecated. No longer used.
- **RedirectException:** `\CodeIgniter\Router\Exceptions\RedirectException` is deprecated. Use `\CodeIgniter\HTTP\Exceptions\RedirectException` instead.
- **Session:** The property `$sessionDriverName`, `$sessionCookieName`,
  `$sessionExpiration`, `$sessionSavePath`, `$sessionMatchIP`,
  `$sessionTimeToUpdate`, and `$sessionRegenerateDestroy` in `Session` are
  deprecated, and no longer used. Use `$config` instead.
- **Security:** The property `$csrfProtection`, `$tokenRandomize`,
  `$tokenName`, `$headerName`, `$expires`, `$regenerate`, and
  `$redirect` in `Security` are deprecated, and no longer used. Use
  `$config` instead.
- **URI:**
  :   - `URI::$uriString` is deprecated.
      - `URI::$baseURL` is deprecated. Use `SiteURI` instead.
      - `URI::setSilent()` is deprecated.
      - `URI::setScheme()` is deprecated. Use `withScheme()` instead.
      - `URI::setURI()` is deprecated.
- **IncomingRequest:**
  :   - `IncomingRequest::detectURI()` is deprecated and no longer used.
      - `IncomingRequest::detectPath()` is deprecated, and no longer used. It
        moved to `SiteURIFactory`.
      - `IncomingRequest::parseRequestURI()` is deprecated, and no longer used. It
        moved to `SiteURIFactory`.
      - `IncomingRequest::parseQueryString()` is deprecated, and no longer used. It
        moved to `SiteURIFactory`.
      - `IncomingRequest::setPath()` is deprecated.

## [Bugs Fixed](#id26)[](#bugs-fixed "Link to this heading")

- **Auto Routing (Improved)**: In previous versions, when `$translateURIDashes`
  is true, two URIs correspond to a single controller method, one URI for dashes
  (e.g., **foo-bar**) and one URI for underscores (e.g., **foo\_bar**). This bug
  has been fixed. Now the URI for underscores (**foo\_bar**) is not accessible.
- **Output Buffering:** Bug fix with output buffering.
- **ControllerTestTrait:** `ControllerTestTrait::withUri()` creates a new Request
  instance with the URI. Because the Request instance should have the URI instance.
  Also if the hostname in the URI string is invalid with `Config\App`, the valid
  hostname will be set.

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
