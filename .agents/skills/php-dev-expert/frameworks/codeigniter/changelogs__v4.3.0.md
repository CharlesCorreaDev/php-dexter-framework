# Version 4.3.0 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.3.0.html

---

# Version 4.3.0[](#version-4-3-0 "Link to this heading")

Release Date: January 10, 2023

**4.3.0 release of CodeIgniter4**

## [Highlights](#id8)[](#highlights "Link to this heading")

- Query Builder supports **upsert()**, **upsertBatch()**, **deleteBatch()** and
  now **\*batch()** methods can set data from a query
  (*contributed by* [sclubricants](https://github.com/sclubricants)).
  See [Query Builder](#query-builder).
- Database Forge supports to **add indexes in the existing tables** and
  **name indexes** (*contributed by* [sclubricants](https://github.com/sclubricants)).
  See [Forge](#forge).
- To make the default configuration more secure, the default Validation Rules
  have been changed to **Strict Rules**.
- When a database error occurs, the conditions that an exception is thrown and
  the exception classes that can be thrown have been changed.
  See [Exceptions when Database Errors Occur](#exceptions-when-database-errors-occur).

## [BREAKING](#id9)[](#breaking "Link to this heading")

### [Behavior Changes](#id10)[](#behavior-changes "Link to this heading")

#### [Exceptions when Database Errors Occur](#id11)[](#exceptions-when-database-errors-occur "Link to this heading")

- The exceptions thrown by the database connection classes have been changed to `CodeIgniter\Database\Exceptions\DatabaseException`. Previously, different database drivers threw different exception classes, but these have been unified into `DatabaseException`.
- The exceptions thrown by the `execute()` method of Prepared Queries have been changed to `DatabaseException`. Previously, different database drivers might throw different exception classes or did not throw exceptions, but these have been unified into `DatabaseException`.
- During transactions, exceptions are not thrown by default even if `DBDebug` is true.
- `DBDebug` and `CI_DEBUG` Changes

  > - To be consistent in behavior regardless of environments, `Config\Database::$default['DBDebug']`
  >   and `Config\Database::$tests['DBDebug']` has been changed to `true` by default. With these
  >   settings, an exception is always thrown when a database error occurs. Previously, it is `false`
  >   **only in the production environment**.
  > - Now `DatabaseException` thrown in `BaseBuilder` is thrown if `$DBDebug` is true.
  >   Previously, it is thrown if `CI_DEBUG` is true.
  > - The default value of `BaseConnection::$DBDebug` has been changed to `true`.
  > - With these changes, `DBDebug` **now means whether or not to throw an exception when an error occurs**.
  >   Although unrelated to debugging, the name has not been changed.
  > - When running transactions with `DBDebug` is `true`, even if a query error occurs, exceptions
  >   are not thrown by default. Previously, if a query error occurs, all the queries
  >   will be rolled backed, and an exception will be thrown, so [Managing Errors](database__transactions.md#transactions-managing-errors) or
  >   [Running Transactions Manually](database__transactions.md#transactions-manual-transactions) won’t work.
  > - Now when you delete without WHERE clause in `Model`, `DatabaseException` is thrown even if
  >   `CI_DEBUG` is false. Previously, it is thrown if `CI_DEBUG` is true.

#### [HTTP Status Code and Exit Code when Exception Occurs](#id12)[](#http-status-code-and-exit-code-when-exception-occurs "Link to this heading")

Previously, CodeIgniter’s Exception Handler used the *Exception code* as the *HTTP status code* in some cases, and calculated the *Exit code* based on the Exception code. However there should be no logical connection with Exception code and HTTP Status Code or Exit code.

- Now the Exception Handler sets HTTP status code to `500` and set Exit code to the constant `EXIT_ERROR` (= `1`) by default.
- You can change HTTP status code or Exit code to implement `HTTPExceptionInterface` or `HasExitCodeInterface` in your Exception class. See [Specify HTTP Status Code in Your Exception](general__errors.md#error-specify-http-status-code) and [Specify Exit Code in Your Exception](general__errors.md#error-specify-exit-code).

For example, the Exit code has been changed like the following:

- If an uncaught `ConfigException` occurs, the Exit code is `EXIT_CONFIG` (= `3`) instead of `12`.
- If an uncaught `CastException` occurs, the Exit code is `EXIT_CONFIG` (= `3`) instead of `9`.
- If an uncaught `DatabaseException` occurs, the Exit code is `EXIT_DATABASE` (= `8`) instead of `17`.

#### [Time](#id13)[](#time "Link to this heading")

The following methods of the [Time](libraries__time.md) class had bugs that changed the state of the current object. To fix these bugs, the Time class has been fixed:

> - `add()`
> - `modify()`
> - `setDate()`
> - `setISODate()`
> - `setTime()`
> - `sub()`

- Now the `Time` class extends `DateTimeImmutable` and is completely immutable.
- `TimeLegacy` class has been added for backward compatibility, which behaves the same as the unmodified `Time` class.

#### [Others](#id14)[](#others "Link to this heading")

- **Helper:** [`script_tag()`](helpers__html_helper.md#script_tag "script_tag") and [`safe_mailto()`](helpers__url_helper.md#safe_mailto "safe_mailto") no longer output `type="text/javascript"` in `<script>` tag.
- **CLI:** The `spark` file has been changed due to a change in the processing of Spark commands.
- **CLI:** `CITestStreamFilter::$buffer = ''` no longer causes the filter to be registered to listen for streams. Now there
  is a `CITestStreamFilter::registration()` method for this. See [Capturing STDERR and STDOUT streams in Tests](installation__upgrade_430.md#upgrade-430-stream-filter) for details.
- **Database:** `InvalidArgumentException` that is a kind of `LogicException` in `BaseBuilder::_whereIn()` is not suppressed by the configuration. Previously if `CI_DEBUG` was false, the exception was suppressed.
- **Database:** The data structure returned by [BaseConnection::getForeignKeyData()](database__metadata.md#metadata-getforeignkeydata) has been changed.
- **Database:** `CodeIgniter\Database\BasePreparedQuery` class returns now a bool value for write-type queries instead of the `Result` class object.
- **Model:** `Model::update()` method now raises a `DatabaseException` if it generates an SQL
  statement without a WHERE clause; Model does not support operations that update all records.
- **Routing:** `RouteCollection::resetRoutes()` resets Auto-Discovery of Routes. Previously once discovered, RouteCollection never discover Routes files again even if `RouteCollection::resetRoutes()` is called.

### [Interface Changes](#id15)[](#interface-changes "Link to this heading")

Note

As long as you have not extended the relevant CodeIgniter core classes
or implemented these interfaces, all these changes are backward compatible
and require no intervention.

#### [OutgoingRequestInterface](#id16)[](#outgoingrequestinterface "Link to this heading")

- Added new `OutgoingRequestInterface` that represents an outgoing request.
- Added new `OutgoingRequest` class that implements `OutgoingRequestInterface`.
- Now `RequestInterface` extends `OutgoingRequestInterface`.
- Now `CURLRequest` extends `OutgoingRequest`.
- Now `Request` extends `OutgoingRequest`.

#### [Others](#id17)[](#id3 "Link to this heading")

- **HTTP:** Added missing `getProtocolVersion()`, `getBody()`, `hasHeader()` and `getHeaderLine()` method in `MessageInterface`.
- **HTTP:** Now `ResponseInterface` extends `MessageInterface`.
- **HTTP:** Added missing `ResponseInterface::getCSP()` (and `Response::getCSP()`), `ResponseInterface::getReasonPhrase()` and `ResponseInterface::getCookieStore()` methods.
- **Database:** Added missing `CodeIgniter\Database\ResultInterface::getNumRows()` method.
- See also [Validation Changes](#validation-changes).

### [Method Signature Changes](#id18)[](#method-signature-changes "Link to this heading")

#### [Validation Changes](#id19)[](#validation-changes "Link to this heading")

##### ValidationInterface[](#validationinterface "Link to this heading")

`ValidationInterface` has been changed to eliminate the mismatch between `ValidationInterface` and the `Validation` class.

- The third parameter `$dbGroup` for `ValidationInterface::run()` has been added.
- The following methods are added to the interface:

  > - `ValidationInterface::setRule()`
  > - `ValidationInterface::getRules()`
  > - `ValidationInterface::getRuleGroup()`
  > - `ValidationInterface::setRuleGroup()`
  > - `ValidationInterface::loadRuleGroup()`
  > - `ValidationInterface::hasError()`
  > - `ValidationInterface::listErrors()`
  > - `ValidationInterface::showError()`

##### Validation[](#validation "Link to this heading")

The return value of `Validation::loadRuleGroup()` has been changed from `null` to `[]` when the `$group` is empty.

#### [Database](#id20)[](#database "Link to this heading")

- The return types of `CodeIgniter\Database\BasePreparedQuery::close()` and `CodeIgniter\Database\PreparedQueryInterface` have been changed to `bool` (previously untyped).
- The return type of `CodeIgniter\Database\Database::loadForge()` has been changed to `Forge`.
- The return type of `CodeIgniter\Database\Database::loadUtils()` has been changed to `BaseUtils`.
- Parameter name `$column` has changed in `Table::dropForeignKey()` to `$foreignName`.
- The second parameter `$index` of `BaseBuilder::updateBatch()` has changed to `$constraints`. It now accepts types array, string, or `RawSql`. Extending classes should likewise change types.
- The `$set` parameter of `BaseBuilder::insertBatch()` and `BaseBuilder::updateBatch()` now accepts an object of a single row of data.
- `BaseBuilder::_updateBatch()`
  :   - The second parameter `$values` has changed to `$keys`.
      - The third parameter `$index` has changed to `$values`. The parameter type also has changed to `array`.

#### [Database Forge](#id21)[](#database-forge "Link to this heading")

- The method signature of `Forge::dropKey()` has changed. An additional optional parameter `$prefixKeyName` has been added.
- The method signature of `Forge::addKey()` has changed. An additional optional parameter `$keyName` has been added.
- The method signature of `Forge::addPrimaryKey()` has changed. An additional optional parameter `$keyName` has been added.
- The method signature of `Forge::addUniqueKey()` has changed. An additional optional parameter `$keyName` has been added.
- The following method has an additional `$asQuery` parameter. When set to `true` the method returns a stand alone SQL query.

  > - `CodeIgniter\Database\Forge::_processPrimaryKeys()`
- In addition to the added `$asQuery` parameter above the following methods also now return an array.

  > - `CodeIgniter\Database\Forge::_processIndexes()`
  > - `CodeIgniter\Database\Forge::_processForeignKeys()`

#### [Others](#id22)[](#id4 "Link to this heading")

- **API:** The return type of `API\ResponseTrait::failServerError()` has been changed to `ResponseInterface`.
- The following methods have been changed to accept `ResponseInterface` as a parameter instead of `Response`.

  > - `Debug\Exceptions::__construct()`
  > - `Services::exceptions()`
- **Request:** The `$index` parameter of `IncomingRequest::getJsonVar()` now accepts an `array`, `string` or `null` value.

## [Enhancements](#id23)[](#enhancements "Link to this heading")

### [Commands](#id24)[](#commands "Link to this heading")

- The call handler for Spark commands from the `CodeIgniter\CodeIgniter` class has been extracted. This will reduce the cost of console calls.
- Added `spark filter:check` command to check the filters for a route. See [Controller Filters](incoming__filters.md#spark-filter-check) for the details.
- Added `spark make:cell` command to create a new Cell file and its view. See [Generating Cell via Command](outgoing__view_cells.md#generating-cell-via-command) for the details.
- Now `spark routes` command shows route names. See [URI Routing](incoming__routing.md#routing-spark-routes).
- Now `spark routes` command can sort the output by Handler.
  See [Sort by Handler](incoming__routing.md#routing-spark-routes-sort-by-handler).
- Help information for a spark command can now be accessed using the `--help` option (e.g. `php spark serve --help`)
- Added methods `CLI::promptByMultipleKeys()` to support multiple value in input, unlike `promptByKey()`. See [promptByMultipleKeys()](cli__cli_library.md#prompt-by-multiple-keys) for details.
- HTTP/3 is now considered a valid protocol.

### [Testing](#id25)[](#testing "Link to this heading")

- Added the `StreamFilterTrait` to make it easier to work with capturing data from STDOUT and STDERR streams. See [Testing CLI Output](testing__cli.md#testing-cli-output).
- The CITestStreamFilter filter class now implements methods for adding a filter to streams. See [Testing CLI Output](testing__cli.md#testing-cli-output).
- Added the `PhpStreamWrapper` to make it easier to work with setting data to `php://stdin`. See [Testing CLI Input](testing__cli.md#testing-cli-input).
- Added method [Timer::record()](testing__benchmark.md#benchmark-timer-record) to measure performance in a callable. Also enhanced common function `timer()` to accept optional callable.
- A boolean third parameter `$useExactComparison` is added to `TestLogger::didLog()` which sets whether log messages are checked verbatim. This defaults to `true`.
- Added method `CIUnitTestCase::assertLogContains()` which compares log messages by parts instead of the whole of the message.

### [Database](#id26)[](#id5 "Link to this heading")

#### [Query Builder](#id27)[](#query-builder "Link to this heading")

- Added `upsert()` and `upsertBatch()` methods to QueryBuilder. See [Upserting Data](database__query_builder.md#upsert-data).
- Added `deleteBatch()` method to QueryBuilder. See [DeleteBatch](database__query_builder.md#delete-batch).
- Added `when()` and `whenNot()` methods to conditionally add clauses to the query. See [BaseBuilder::when()](database__query_builder.md#db-builder-when) for details.
- Improved the SQL structure for `Builder::updateBatch()`. See [UpdateBatch](database__query_builder.md#update-batch) for the details.
- Added `BaseBuilder::setQueryAsData()` which allows `insertBatch()`, `updateBatch()`, `upsertBatch()`, `deleteBatch()` from a query. See [insertBatch](database__query_builder.md#insert-batch-data).

#### [Forge](#id28)[](#forge "Link to this heading")

- Added `Forge::processIndexes()` allowing the creation of indexes on an existing table. See [Adding Keys to a Table](dbmgmt__forge.md#db-forge-adding-keys-to-a-table) for the details.
- Added the ability to manually set index names. These methods include: `Forge::addKey()`, `Forge::addPrimaryKey()`, and `Forge::addUniqueKey()`
- The new method `Forge::dropPrimaryKey()` allows dropping the primary key on a table. See [Dropping a Primary Key](dbmgmt__forge.md#dropping-a-primary-key).
- Fixed `Forge::dropKey()` to allow dropping unique indexes. This required the `DROP CONSTRAINT` SQL command.
- [`CodeIgniter\Database\Forge::addForeignKey()`](dbmgmt__forge.md#CodeIgniter\Database\Forge::addForeignKey "CodeIgniter\Database\Forge::addForeignKey") now includes a name parameter to set foreign key names manually. This is not supported in SQLite3.
- SQLSRV now automatically drops `DEFAULT` constraint when using [Forge::dropColumn()](dbmgmt__forge.md#db-forge-dropcolumn).

#### [Others](#id29)[](#id6 "Link to this heading")

- SQLite3 has a new Config item `busyTimeout` to set timeout when a table is locked.
- `BaseConnection::escape()` now excludes the `RawSql` data type. This allows passing SQL strings into data.
- Improved data returned by [BaseConnection::getForeignKeyData()](database__metadata.md#metadata-getforeignkeydata). All DBMS returns the same structure.
- SQLite [BaseConnection::getIndexData()](database__metadata.md#db-metadata-getindexdata) now can return pseudo index named `PRIMARY` for AUTOINCREMENT column, and each returned index data has `type` property.
- `BasePreparedQuery::close()` now deallocates the prepared statement in all DBMS. Previously, they were not deallocated in Postgre, SQLSRV and OCI8. See [close()](database__queries.md#database-queries-stmt-close).
- Added `BaseConnection::transException()` to throw exceptinons during transactions.
  See [Throwing Exceptions](database__transactions.md#transactions-throwing-exceptions)

### [Model](#id30)[](#model "Link to this heading")

- Added before and after events to `BaseModel::insertBatch()` and `BaseModel::updateBatch()` methods. See [Working with Query Builder](models__model.md#model-events-callbacks).
- Added `Model::allowEmptyInserts()` method to insert empty data. See [Using CodeIgniter’s Model](models__model.md#model-allow-empty-inserts)
- Added new [Property Casting](models__entities.md#entities-property-casting) class `IntBoolCast` for Entity.

### [Libraries](#id31)[](#libraries "Link to this heading")

- **Publisher:** Added methods `replace()`, `addLineAfter()` and `addLineBefore()` to modify files in Publisher. See [Publisher](libraries__publisher.md#publisher-modifying-files) for details.
- **Encryption:** Now Encryption can decrypt data encrypted with CI3’s Encryption. See [Configuration to Maintain Compatibility with CI3](libraries__encryption.md#encryption-compatible-with-ci3).
- **CURLRequest:** Added option version HTTP2 in [CURLRequest](libraries__curlrequest.md#curlrequest-version).

### [Helpers and Functions](#id32)[](#helpers-and-functions "Link to this heading")

- Now you can autoload helpers by **app/Config/Autoload.php**.
- Added new Form helper function [`validation_errors()`](helpers__form_helper.md#validation_errors "validation_errors"), [`validation_list_errors()`](helpers__form_helper.md#validation_list_errors "validation_list_errors") and [`validation_show_error()`](helpers__form_helper.md#validation_show_error "validation_show_error") to display Validation Errors.
- You can set the locale to [`route_to()`](general__common_functions.md#route_to "route_to") if you pass a locale value as the last parameter.
- Added [`request()`](general__common_functions.md#request "request") and [`response()`](general__common_functions.md#response "response") functions.
- Added [`decamelize()`](helpers__inflector_helper.md#decamelize "decamelize") function to convert camelCase to snake\_case.
- Added [`is_windows()`](general__common_functions.md#is_windows "is_windows") global function to detect Windows platforms.

### [HTML5 Compatibility](#id33)[](#html5-compatibility "Link to this heading")

Creation of void HTML elements like `<input>` can be configured to exclude or not the solidus character
(`/`) before the right angle bracket (`>`) by setting the `$html5` property in
**app/Config/DocTypes.php**. If you set it to `true`, HTML5 compatible tags without `/` like `<br>`
will be output.

The following items are affected:

- Typography class: Creation of `br` tag
- View Parser: The `nl2br` filter
- Honeypot: `input` tag
- Form helper
- HTML helper
- Common Functions

### [Error Handling](#id34)[](#error-handling "Link to this heading")

- You can now log deprecation warnings instead of throwing exceptions. See [Logging Deprecation Warnings](general__errors.md#logging-deprecation-warnings) for details.
- Logging of deprecations is turned on by default.
- To *temporarily* enable throwing of deprecations, set the environment variable `CODEIGNITER_SCREAM_DEPRECATIONS` to a truthy value.
- `Config\Logger::$threshold` is now, by default, environment-specific. For production environment, default threshold is still `4` but changed to `9` for other environments.

### [Multiple Domain Support](#id35)[](#multiple-domain-support "Link to this heading")

- Added `Config\App::$allowedHostnames` to set hostnames other than the hostname in the baseURL.
- If you set `Config\App::$allowedHostnames`, URL-related functions such as [`base_url()`](helpers__url_helper.md#base_url "base_url"), [`current_url()`](helpers__url_helper.md#current_url "current_url"), [`site_url()`](helpers__url_helper.md#site_url "site_url") will return the URL with the hostname set in `Config\App::$allowedHostnames` if the current URL matches.

### [Others](#id36)[](#id7 "Link to this heading")

- **Routing:** Added `$routes->useSupportedLocalesOnly(true)` so that the Router returns 404 Not Found if the locale in the URL is not supported in `Config\App::$supportedLocales`. See [Localization](outgoing__localization.md#localization-in-routes)
- **Routing:** Added new `$routes->view()` method to return the view directly. See [View Routes](incoming__routing.md#view-routes).
- **View:** View Cells are now first-class citizens and can be located in the **app/Cells** directory. See [View Cells](outgoing__view_cells.md#app-cells).
- **View:** Added `Controlled Cells` that provide more structure and flexibility to your View Cells. See [View Cells](outgoing__view_cells.md#controlled-cells) for details.
- **Validation:** Added Closure validation rule. See [Using Closure Rule](libraries__validation.md#validation-using-closure-rule) for details.
- **Config:** Now you can specify Composer packages to auto-discover manually. See [Code Modules](general__modules.md#modules-specify-composer-packages).
- **Config:** Added `Config\Session` class to handle session configuration.
- **Debug:** Kint has been updated to 5.0.2.
- **Request:** Added new `$request->getRawInputVar()` method to return a specified variable from raw stream. See [Retrieving Raw data](incoming__incomingrequest.md#incomingrequest-retrieving-raw-data).
- **Request:** Added new `$request->is()` method to query the request type.
  See [Determining Request Type](incoming__incomingrequest.md#incomingrequest-is).

## [Message Changes](#id37)[](#message-changes "Link to this heading")

- Updated English language strings to be more consistent.
- Added `CLI.generator.className.cell` and `CLI.generator.viewName.cell`.
- Added **en/Errors.php** file.

## [Changes](#id38)[](#changes "Link to this heading")

- Config
  :   - All atomic type properties in `Config` classes have been typed.
      - See [Upgrading](installation__upgrade_430.md#upgrade-430-config) for information on changing the default values.
- Changed the processing of Spark commands:
  :   - The `CodeIgniter\CodeIgniter` no longer handles Spark commands.
      - The `CodeIgniter::isSparked()` method has been removed.
      - The `CodeIgniter\CLI\CommandRunner` class has been removed due to a change in Spark commands processing.
      - The system route configuration file `system/Config/Routes.php` has been removed.
      - The route configuration file `app/Config/Routes.php` has been changed. Removed include of system routes configuration file.

## [Deprecations](#id39)[](#deprecations "Link to this heading")

- `RouteCollection::localizeRoute()` is deprecated.
- `RouteCollection::fillRouteParams()` is deprecated. Use `RouteCollection::buildReverseRoute()` instead.
- `BaseBuilder::setUpdateBatch()` and `BaseBuilder::setInsertBatch()` are deprecated. Use `BaseBuilder::setData()` instead.
- The public property `Response::$CSP` is deprecated. It will be protected. Use `Response::getCSP()` instead.
- `CodeIgniter::$path` and `CodeIgniter::setPath()` are deprecated. No longer used.
- The public property `IncomingRequest::$uri` is deprecated. It will be protected. Use `IncomingRequest::getUri()` instead.
- The public property `IncomingRequest::$config` is deprecated. It will be protected.
- The method `CLI::isWindows()` is deprecated. Use `is_windows()` instead.
- The `Config\App` session properties in favor of the new session config class `Config\Session`.

## [Bugs Fixed](#id40)[](#bugs-fixed "Link to this heading")

- Fixed a bug when all types of `Prepared Queries` were returning a `Result` object instead of a bool value for write-type queries.
- Fixed a bug with variable filtering in JSON requests using with `IncomingRequest::getVar()` or `IncomingRequest::getJsonVar()` methods.
- Fixed a bug when variable type may be changed when using a specified index with `IncomingRequest::getVar()` or `IncomingRequest::getJsonVar()` methods.
- Fixed a bug that Honeypot field appears when CSP is enabled. See also [Honeypot and CSP](installation__upgrade_430.md#upgrade-430-honeypot-and-csp).

See the repo’s
[CHANGELOG.md](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CHANGELOG.md)
for a complete list of bugs fixed.
