# Version 4.5.0 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.5.0.html

---

# Version 4.5.0[](#version-4-5-0 "Link to this heading")

Release Date: April 7, 2024

**4.5.0 release of CodeIgniter4**

## [Highlights](#id8)[](#highlights "Link to this heading")

- Update minimal PHP requirement to 8.1.
- Update minimal PHPUnit requirement to 10.5.
- **CORS filter** (*contributed by* [kenjis](https://github.com/kenjis))
  See [Cross-Origin Resource Sharing (CORS)](libraries__cors.md).
- The **spark optimize** command for performance improvement on production
  environment (*contributed by* [kenjis](https://github.com/kenjis)).
  See [spark optimize](installation__deployment.md#spark-optimize).

## [Enhancements](#id9)[](#enhancements "Link to this heading")

### [Required Filters](#id10)[](#required-filters "Link to this heading")

New [Required Filters](incoming__filters.md#filters-required) have been introduced. They are
special filters that are applied before and after other kinds of filters, and
always applied even if a route does not exist.

The following existing functionalities have been reimplemented as Required Filters.

- [Force Global Secure Requests](incoming__filters.md#forcehttps)
- [Web Page Caching](general__caching.md)
- [PerformanceMetrics](incoming__filters.md#performancemetrics)
- [The Debug Toolbar](testing__debugging.md#the-debug-toolbar)

The Benchmark **Timers** used by Debug Toolbar now collect *Required Before Filters*
and *Required After Filters* data.

The benchmark points have been changed:

- Before

  > - `bootstrap`: Creating Request and Response objects, Event `pre_system`, Instantiating RouteCollection object, Loading Routes files, Instantiating Router object,
  > - `routing`: Routing,
- After

  > - `bootstrap`: Creating Request and Response objects, Event `pre_system`.
  > - `required_before_filters`: Instantiating Filters object, Running *Required Before Filters*.
  > - `routing`: Instantiating RouteCollection object, Loading Routes files, Instantiating Router object, Routing,

### [Routing](#id11)[](#routing "Link to this heading")

- **AutoRouting Improved:** The `$translateUriToCamelCase` option has been added
  that allows using CamelCase controller and method names. See
  [Translate URI To CamelCase](incoming__auto_routing_improved.md#translate-uri-to-camelcase).
- **Others:**
  :   - Added option `$multipleSegmentsOneParam`. When this option is
        enabled, a placeholder that matches multiple segments, such as `(:any)`, will
        be passed directly as it is to one parameter, even if it contains multiple segments.
        See [Multiple URI Segments as One Parameter](incoming__routing.md#multiple-uri-segments-as-one-parameter) for details.
      - Now the 404 controller’s method that you set in `$override404` also receive
        a `PageNotFoundException` message as the first parameter.
      - Now you can use the `__invoke()` method as the default method. See
        [Default Method](incoming__routing.md#routing-default-method).

### [Commands](#id12)[](#commands "Link to this heading")

- Added `spark optimize` command to optimize configuration for production environment.
  See [spark optimize](installation__deployment.md#spark-optimize) for the details.
- Added `spark make:test` command to generate a skeleton test file. See
  [make:test](cli__cli_generators.md#cli-generators-make-test) for the details.
- Added `spark config:check` command to check Config values. See
  [Confirming Config Values](general__configuration.md#confirming-config-values) for the details.
- Added `spark phpini:check` command to check important PHP ini settings. See
  [Checking PHP ini Settings](installation__running.md#spark-phpini-check) for the details.
- Added `spark lang:find` command to update translations keys. See [Generating Translation Files via Command](outgoing__localization.md#generating-translation-files-via-command) for the details.
- The `--dbgroup` option has been added to the `spark db:table` command.
  See [Database Commands](dbmgmt__db_commands.md#db-command-specify-the-dbgroup).

### [Testing](#id13)[](#testing "Link to this heading")

- **DomParser:** The new methods were added `seeXPath()` and `dontSeeXPath()`
  which allows users to work directly with DOMXPath object, using complex expressions.
- **CLI:** The new `InputOutput` class was added and now you can write tests
  for commands more easily if you use `MockInputOutput`.
  See [Using MockInputOutput](testing__cli.md#using-mock-input-output).
- **Fabricator:** The Fabricator class now has the `setUnique()`, `setOptional()` and `setValid()`
  methods to allow calling of Faker’s modifiers on each field before faking their values.
- **TestResponse:** TestResponse no longer extends `PHPUnit\Framework\TestCase` as it
  is not a test. Assertions’ return types are now natively typed `void`.

### [Database](#id14)[](#database "Link to this heading")

#### [Query Builder](#id15)[](#query-builder "Link to this heading")

##### limit(0) Behavior[](#limit-0-behavior "Link to this heading")

- Added a feature flag `Feature::$limitZeroAsAll` to fix the incorrect behavior
  of `limit(0)`.
- If `LIMIT 0` is specified in a SQL statement, 0 records are returned. However,
  there is a bug in the Query Builder, and if `limit(0)` is specified, the
  generated SQL statement will have no `LIMIT` clause and all records will be
  returned.
- It is recommended that `$limitZeroAsAll` in **app/Config/Feature.php** be set
  to `false` as this incorrect behavior will be fixed in a future version. See
  also [findAll(0) Behavior](#v450-model-findall-limit-0-behavior).

#### [Others](#id16)[](#others "Link to this heading")

- Added support for database names containing dots (`.`).

### [Model](#id17)[](#model "Link to this heading")

#### [Model Field Casting](#id18)[](#model-field-casting "Link to this heading")

Added a feature to convert data retrieved from a database into the appropriate
PHP type. See [Model Field Casting](models__model.md#model-field-casting) for details.

#### [findAll(0) Behavior](#id19)[](#findall-0-behavior "Link to this heading")

- Added a feature flag `Feature::$limitZeroAsAll` to fix the incorrect behavior
  of `limit(0)` for Query Builder. See [limit(0) Behavior](#v450-query-builder-limit-0-behavior)
  for details.
- If you disable this flag, you need to change code like `findAll(0, $offset)`
  to `findAll(null, $offset)`.

#### [$updateOnlyChanged](#id20)[](#updateonlychanged "Link to this heading")

Added a property `$updateOnlyChanged` whether to update
[Entity](models__entities.md)’s only changed fields. If you set this property
to `false`, when you are updating an Entity, `DataException`
“There is no data to update” will not raise even if the values in the Entity have
not changed.

See [Using CodeIgniter’s Model](models__model.md#model-update-only-changed) for details.

#### [Saving Dates](#id21)[](#saving-dates "Link to this heading")

Now you can configure the date/time format when you save [Time](libraries__time.md)
instances. See [Saving Dates](models__model.md#model-saving-dates) for details.

### [Libraries](#id22)[](#libraries "Link to this heading")

- **CORS:** Added [Cross-Origin Resource Sharing (CORS)](libraries__cors.md) filter and class.
- **Validation:**
  :   - Added the new rule `field_exists` that checks the filed exists in the
        data to be validated.
      - The `$dbGroup` parameter of `Validation::run()` now accepts not only
        a database group name, but also a database connection instance or an array
        of database settings.
- **Session:**
  :   - `RedisHandler` now can configure the interval time for acquiring locks
        (`$lockRetryInterval`) and the number of retries (`$lockMaxRetries`).
      - Now you can use Redis ACL (username and password) with `RedisHandler`.
        See [RedisHandler Driver](libraries__sessions.md#sessions-redishandler-driver) for details.
- **Security:** `Config\Security::$redirect` is now, by default, environment-specific.
  For production environment, changed to `true` but is still `false` for other
  environments.

### [Others](#id23)[](#id2 "Link to this heading")

- **Bootstrap:** The `CodeIgniter\Boot` class has been introduced, replacing
  **system/bootstrap.php**.
- **Autoloader:**
  :   - Autoloading performance when using Composer has been improved.
        Adding the `App` namespace in the `autoload.psr4` setting in **composer.json**
        may also improve the performance of your app. See [Application Namespace](concepts__autoloader.md#autoloader-application-namespace).
      - FileLocator Caching implemented. See [FileLocator Caching](concepts__autoloader.md#file-locator-caching) for details.
      - `FileLocatorInterface` has been added.
- **CodeIgniter:** Added a pseudo-variable `{memory_usage}` to show your memory
  usage in your view files, which was supported by CodeIgniter 3.
- **Events:** Added event points `pre_command` and `post_command` for Spark
  commands. See [Event Points](extending__events.md#event-points-for-cli-apps).
- **HTTP:** Added `Message::addHeader()` method to add another header with
  the same name. See [`CodeIgniter\HTTP\Message::addHeader()`](incoming__message.md#CodeIgniter\HTTP\Message::addHeader "CodeIgniter\HTTP\Message::addHeader").
- **Web Page Caching:** `ResponseCache` has been improved to include the request
  HTTP method in the cache key. This means that the same URI will be cached separately
  if the HTTP method is different.
- **CSP:** Added `ContentSecurityPolicy::clearDirective()` method to clear
  existing CSP directives. See [Clear Directives](outgoing__csp.md#csp-clear-directives).

## [BREAKING](#id24)[](#breaking "Link to this heading")

### [Behavior Changes](#id25)[](#behavior-changes "Link to this heading")

#### [Lowercase HTTP Method Name](#id26)[](#lowercase-http-method-name "Link to this heading")

For historical reasons, the framework used HTTP method names in lower case like
“get”, “post”.
But the method token is case-sensitive because it might be used as a gateway
to object-based systems with case-sensitive method names. By convention,
standardized methods are defined in all-uppercase US-ASCII letters.
See <https://www.rfc-editor.org/rfc/rfc9110#name-overview>.

Now the framework uses the correct HTTP method names like “GET”, “POST”.

- `Request::getMethod()` returns uppercase HTTP methods.
- `CURLRequest::request()` does not change the accepted HTTP methods to uppercase.

See [Lowercase HTTP Method Name](installation__upgrade_450.md#upgrade-450-lowercase-http-method-name) for details.

#### [Filter Execution Order](#id27)[](#filter-execution-order "Link to this heading")

The order in which Controller Filters are executed has changed. See
[Upgrading Guide](installation__upgrade_450.md#upgrade-450-filter-execution-order) for details.

#### [Nested Route Groups and Options](#id28)[](#nested-route-groups-and-options "Link to this heading")

Due to a bug fix, the behavior has changed so that options passed to the outer
`group()` are merged with the options of the inner `group()`.
See [Upgrading Guide](installation__upgrade_450.md#upgrade-450-nested-route-groups-and-options) for details.

#### [API\ResponseTrait](#id29)[](#api-responsetrait "Link to this heading")

Now when a response format is JSON, if you pass string data, the framework returns
a JSON response. In previous versions, it returned a HTML response.
See [Upgrading Guide](installation__upgrade_450.md#upgrade-450-api-response-trait) for details.

#### [Factories class](#id30)[](#factories-class "Link to this heading")

[Factories](concepts__factories.md) has been changed to a final class. It is a static
class, and even if it were extended, there is no way to replace it.

#### [Others](#id31)[](#id3 "Link to this heading")

- **AutoRouting Legacy:** Changed so that a `PageNotFoundException` is thrown
  if the controller corresponding to the request URI does not exist.
- **Logger:** The [`log_message()`](general__common_functions.md#log_message "log_message") function and the logger methods in
  `CodeIgniter\Log\Logger` now do not return `bool` values. The return types
  have been fixed to `void` to follow the PSR-3 interface.
- **Autoloader:** The prefix `\` in the fully qualified classname returned by
  `FileLocator::findQualifiedNameFromPath()` has been removed.
- **BaseModel:** The `getIdValue()` method has been changed to `abstract`.
- **Routing:** The [404 Override](incoming__routing.md#override) feature does change the Response status
  code to 404 by default. See [Upgrading Guide](installation__upgrade_450.md#upgrade-450-404-override).
- **system/bootstrap.php:** This file cannot be used. The code has been moved to
  the new `CodeIgniter\Boot` class.

### [Interface Changes](#id32)[](#interface-changes "Link to this heading")

Note

As long as you have not extended the relevant CodeIgniter core classes
or implemented these interfaces, all these changes are backward compatible
and require no intervention.

- **ResponseInterface:** The default value of the third parameter `$expire` of
  the `ResponseInterface::setCookie()` has been fixed from `''` to `0`.
- **Logger:** The [psr/log](https://packagist.org/packages/psr/log) package has
  been upgraded to v3.0.0.
- **Validation:** The method signature of `ValidationInterface::run()` has been
  changed. The `?string` typehint on the `$dbGroup` parameter was removed.

### [Method Signature Changes](#id33)[](#method-signature-changes "Link to this heading")

#### [Setting Cookies](#id34)[](#setting-cookies "Link to this heading")

The third parameter `$expire` in [`set_cookie()`](helpers__cookie_helper.md#set_cookie "set_cookie") and
[`CodeIgniter\HTTP\Response::setCookie()`](outgoing__response.md#CodeIgniter\HTTP\Response::setCookie "CodeIgniter\HTTP\Response::setCookie") has been fixed.

The type has been changed from `string` to `int`, and the default value has
been changed from `''` to `0`.

#### [FileLocatorInterface](#id35)[](#filelocatorinterface "Link to this heading")

- **Router:** The first parameter of the `RouteCollection` constructor has been changed
  from `FileLocator` to `FileLocatorInterface`.
- **View:** The third parameter of the `View` constructor has been changed
  from `FileLocator` to `FileLocatorInterface`.

#### [Return Type Changes](#id36)[](#return-type-changes "Link to this heading")

- **Model:** The return type of the `objectToRawArray()` method in the `Model`
  and `BaseModel` classes has been changed from `?array` to `array`.

#### [Traditional Validation Rules](#id37)[](#traditional-validation-rules "Link to this heading")

To add `declare(strict_types=1)` to the framework codebase, the method parameter
type `?string` for a value to validate in the all Traditional Validation rule
classes `CodeIgniter\Validation\FormatRules` and `CodeIgniter\Validation\Rules`
are removed.

For example, the method signature changed as follows:

```
Before: public function integer(?string $str = null): bool
After:  public function integer($str = null): bool
```

#### [Others](#id38)[](#id4 "Link to this heading")

- **Logger:** The method signatures of the methods in `CodeIgniter\Log\Logger`
  that implements the PSR-3 interface have been fixed. The `bool` return
  types are changed to `void`. The `$message` parameters now have
  `string|Stringable` types.
- **Validation:** The method signature of `Validation::run()` has been
  changed. The `?string` typehint on the `$dbGroup` parameter was removed.

### [Removed Deprecated Items](#id39)[](#removed-deprecated-items "Link to this heading")

#### [Request](#id40)[](#request "Link to this heading")

- The `$upper` parameter in `getMethod()` in `RequestInterface` and `Request`
  has been removed. See [Lowercase HTTP Method Name](installation__upgrade_450.md#upgrade-450-lowercase-http-method-name).
- The deprecated `isValidIP()` method in `RequestInterface` and `Request`
  has been removed.
- The visibility of the deprecated properties `$uri` and `$config` in
  `IncomingRequest` has been changed to protected.
- The `$enableCSRF` property in `IncomingRequest` has been removed.
- The `removeRelativeDirectory()` method in `IncomingRequest` has been removed.
- The `$proxyIPs` property in `Request` has been removed.

#### [Filters](#id41)[](#filters "Link to this heading")

- The following deprecated items have been removed, because now [Multiple Filters](incoming__routing.md#multiple-filters) are always enabled.

  > - `Filters::enableFilter()`
  > - `RouteCollection::getFilterForRoute()`
  > - `Router::$filterInfo`
  > - `Router::getFilter()`

#### [Database](#id42)[](#id5 "Link to this heading")

- `ModelFactory`

#### [Model](#id43)[](#id6 "Link to this heading")

- `BaseModel::idValue()`
- `BaseModel::fillPlaceholders()`
- `Model::idValue()`
- `Model::classToArray()`

#### [Response](#id44)[](#response "Link to this heading")

- The visibility of the deprecated property `ResponseTrait::$CSP` has been
  changed to protected.
- The following deprecated properties have been removed.

  > - `ResponseTrait::$CSPEnabled`
  > - `ResponseTrait::$cookiePrefix`
  > - `ResponseTrait::$cookieDomain`
  > - `ResponseTrait::$cookiePath`
  > - `ResponseTrait::$cookieSecure`
  > - `ResponseTrait::$cookieHTTPOnly`
  > - `ResponseTrait::$cookieSameSite`
  > - `ResponseTrait::$cookies`

#### [Security](#id45)[](#security "Link to this heading")

- `SecurityInterface::isExpired()`
- `Security::isExpired()`
- `Security::CSRFVerify()`
- `Security::getCSRFHash()`
- `Security::getCSRFTokenName()`
- `Security::sendCookie()`
- `Security::doSendCookie()`

#### [CodeIgniter](#id46)[](#codeigniter "Link to this heading")

- `$path`
- `$useSafeOutput`
- `useSafeOutput()`
- `setPath()`

#### [Test](#id47)[](#test "Link to this heading")

- `CIDatabaseTestCase`
- `ControllerResponse`
- `ControllerTester`
- `FeatureResponse`
- `FeatureTestCase`
- `Mock\MockSecurityConfig`

#### [Spark Commands](#id48)[](#spark-commands "Link to this heading")

- `migrate:create`
- `session:migration`

#### [Others](#id49)[](#id7 "Link to this heading")

- **Cache:** The deprecated `CodeIgniter\Cache\Exceptions\ExceptionInterface` has been removed.
- **Config:**
  :   - The deprecated `CodeIgniter\Config\Config` class has been removed.
      - The deprecated `CodeIgniter\Config\BaseService::discoverServices()` method
        has been removed.
- **Controller:** The deprecated `Controller::loadHelpers()` method has been removed.
- **Exceptions:** The deprecated `CodeIgniter\Exceptions\CastException` class has been removed.
- **Entity:** The deprecated `CodeIgniter\Entity` class has been removed. Use
  `CodeIgniter\Entity\Entity` instead.
- **spark:** The deprecated constant `SPARKED` has been removed.

## [Message Changes](#id50)[](#message-changes "Link to this heading")

- Added `CLI.generator.className.test` message.
- Added `Validation.field_exists` error message.

## [Changes](#id51)[](#changes "Link to this heading")

- **Bootstrap:** The loading of **.env** and defining `ENVIRONMENT` have been
  moved before loading of **bootstrap.php**.
- **Config:**
  :   - `Config\Feature::$multipleFilters` has been removed, because now
        [Multiple Filters](incoming__routing.md#multiple-filters) are always enabled.
      - The default error level in the production environment
        (**app/Config/Boot/production.php**) has been changed to `E_ALL & ~E_DEPRECATED`
        to match the default **php.ini** for production.
- **RouteCollection:** The HTTP method keys in the protected property `$routes`
  has been fixed from lowercase to uppercase.
- **Exceptions:** Unused `CodeIgniter\Exceptions\AlertError` and
  `CodeIgniter\Exceptions\EmergencyError` were removed.
- **Forge:** `SQLSRV` Forge now converts `ENUM` data types to `VARCHAR(n)`
  when you add table columns. In previous version, it converted to `TEXT` that
  is deprecated in SQL Server.
- `declare(strict_types=1)` has been added to most framework codebase.

## [Deprecations](#id52)[](#deprecations "Link to this heading")

- **Services:** The `BaseService::$services` property has been deprecated. No
  longer used.
- **CodeIgniter:**
  :   - The `determinePath()` method has been deprecated. No longer used.
      - The `resolvePlatformExtensions()` method has been deprecated. No longer
        used. It has been moved to the `CodeIgniter\Boot::checkMissingExtensions()`
        method.
      - The `bootstrapEnvironment()` method has been deprecated. No longer used.
        It has been moved to the `CodeIgniter\Boot::loadEnvironmentBootstrap()`
        method.
      - The `initializeKint()` method has been deprecated. No longer used. It has
        been moved to the `Autoloader`.
      - The `autoloadKint()` method has been deprecated. No longer used. It has
        been moved to the `Autoloader`.
      - The `configureKint()` method has been deprecated. No longer used. It has
        been moved to the `Autoloader`.
- **Response:** The constructor parameter `$config` has been deprecated. No
  longer used.
- **Filters:**
  :   - The feature that `Filters` accept the lowercase HTTP method keys
        of `Config\Filters::$methods` has been deprecated. Use correct uppercase
        HTTP method keys instead.
      - The feature that the `spark filter:check` command accepts the lowercase
        HTTP method has been deprecated. Use correct uppercase HTTP method instead.
- **RouteCollection:** The feature that the `match()` and `setHTTPVerb()`
  methods accept the lowercase HTTP methods has been deprecated. Use correct
  uppercase HTTP methods instead.
- **FeatureTestTrait:** The feature that the `call()` and `withRoutes()`
  methods accept the lowercase HTTP methods has been deprecated. Use correct
  uppercase HTTP methods instead.
- **Database:** The `BaseConnection::$strictOn` has been deprecated. It will be
  moved to `MySQLi\Connection` in the future.

## [Bugs Fixed](#id53)[](#bugs-fixed "Link to this heading")

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
