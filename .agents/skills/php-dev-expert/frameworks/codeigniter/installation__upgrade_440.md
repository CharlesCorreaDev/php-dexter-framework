# Upgrading from 4.3.8 to 4.4.0 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_440.html

---

# Upgrading from 4.3.8 to 4.4.0[](#upgrading-from-4-3-8-to-4-4-0 "Link to this heading")

Please refer to the upgrade instructions corresponding to your installation method.

- [Composer Installation App Starter Upgrading](installation__installing_composer.md#app-starter-upgrading)
- [Composer Installation Adding CodeIgniter4 to an Existing Project Upgrading](installation__installing_composer.md#adding-codeigniter4-upgrading)
- [Manual Installation Upgrading](installation__installing_manual.md#installing-manual-upgrading)

## [SECURITY](#id1)[](#security "Link to this heading")

### [When Using $this->validate()](#id2)[](#when-using-this-validate "Link to this heading")

There was a known potential vulnerability in [$this->validate()](incoming__controllers.md#controller-validate) in the Controller to bypass validation.
The attack could allow developers to misinterpret unvalidated empty data as
validated and proceed with processing.

The [Validation::getValidated()](libraries__validation.md#validation-getting-validated-data)
method has been added to ensure that validated data is obtained.

Therefore, when you use `$this->validate()` in your Controllers, you should
use the new `Validation::getValidated()` method to get the validated data.

```
// In Controller.

if (! $this->validateData($data, [
    'username' => 'required',
    'password' => 'required|min_length[10]',
])) {
    // The validation failed.
    return view('login', [
        'errors' => $this->validator->getErrors(),
    ]);
}

// The validation was successful.

// Get the validated data.
$validData = $this->validator->getValidated();
```

## [Breaking Changes](#id3)[](#breaking-changes "Link to this heading")

### [URI::setSegment() Change](#id4)[](#uri-setsegment-change "Link to this heading")

Dut to a bug, in previous versions an exception was not thrown if the last segment
`+2` was specified. This bug has been fixed.

If your code depends on this bug, fix the segment number.

```
// URI: http://example.com/one/two

// Before:
$uri->setSegment(4, 'three');
// The URI will be http://example.com/one/two/three

// After:
$uri->setSegment(4, 'three'); // Will throw Exception
$uri->setSegment(3, 'three');
// The URI will be http://example.com/one/two/three
```

### [Site URI Changes](#id5)[](#site-uri-changes "Link to this heading")

- Because of the rework for the current URI determination, the framework may return
  site URIs or the URI paths slightly differently than in previous versions. It may
  break your test code. Update assertions if the existing tests fail.
- When your baseURL has sub-directories and you get the relative path to baseURL of
  the current URI by the `URI::getPath()` method, you must use the new
  `SiteURI::getRoutePath()` method instead.

See [Site URI Changes](changelogs__v4.4.0.md#v440-site-uri-changes) for details.

### [When You Extend Exceptions](#id6)[](#when-you-extend-exceptions "Link to this heading")

If you are extending `CodeIgniter\Debug\Exceptions` and have not overridden
the `exceptionHandler()` method, defining the new `Config\Exceptions::handler()`
method in your **app/Config/Exceptions.php** will cause the specified Exception
Handler to be executed.

Your overridden code will no longer be executed, so make any necessary changes
by defining your own exception handler.

See [Custom Exception Handlers](general__errors.md#custom-exception-handlers) for the detail.

### [Auto Routing (Improved) and translateURIDashes](#id7)[](#auto-routing-improved-and-translateuridashes "Link to this heading")

When using Auto Routing (Improved) and `$translateURIDashes` is true
(`$routes->setTranslateURIDashes(true)`), in previous versions due to a bug
two URIs correspond to a single controller method, one URI for dashes
(e.g., **foo-bar**) and one URI for underscores (e.g., **foo\_bar**).

This bug was fixed and now URIs for underscores (**foo\_bar**) is not accessible.

If you have links to URIs for underscores (**foo\_bar**), update them with URIs
for dashes (**foo-bar**).

### [When Passing Classname with Namespace to Factories](#id8)[](#when-passing-classname-with-namespace-to-factories "Link to this heading")

The behavior of passing a classname with a namespace to Factories has been changed.
See [ChangeLog](changelogs__v4.4.0.md#v440-factories) for details.

If you have code like `model(\Myth\Auth\Models\UserModel::class)` or
`model('Myth\Auth\Models\UserModel')` (the code may be in the third-party packages),
and you expect to load your `App\Models\UserModel`, you need to define the
classname to be loaded before the first loading of that class:

```
Factories::define('models', 'Myth\Auth\Models\UserModel', 'App\Models\UserModel');
```

See [Defining Classname to be Loaded](concepts__factories.md#factories-defining-classname-to-be-loaded) for details.

### [Interface Changes](#id9)[](#interface-changes "Link to this heading")

Some interface changes have been made. Classes that implement them should update
their APIs to reflect the changes. See [Interface Changes](changelogs__v4.4.0.md#v440-interface-changes) for details.

### [Method Signature Changes](#id10)[](#method-signature-changes "Link to this heading")

Some method signature changes have been made. Classes that extend them should
update their APIs to reflect the changes. See [Method Signature Changes](changelogs__v4.4.0.md#v440-method-signature-changes)
for details.

Also, the parameter types of some constructors and `Services::security()` have changed.
If you call them with the parameters, change the parameter values.
See [Parameter Type Changes](changelogs__v4.4.0.md#v440-parameter-type-changes) for details.

### [RouteCollection::$routes](#id11)[](#routecollection-routes "Link to this heading")

The array structure of the protected property `$routes` has been modified for
performance.

If you extend `RouteCollection` and use the `$routes`, update your code to
match the new array structure.

## [Mandatory File Changes](#id12)[](#mandatory-file-changes "Link to this heading")

### [index.php and spark](#id13)[](#index-php-and-spark "Link to this heading")

The following files received significant changes and
**you must merge the updated versions** with your application:

- `public/index.php` (see also [CodeIgniter and exit()](changelogs__v4.4.0.md#v440-codeigniter-and-exit))
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

### [Config Files](#id14)[](#config-files "Link to this heading")

#### app/Config/App.php[](#app-config-app-php "Link to this heading")

The property `$proxyIPs` must be an array. If you don’t use proxy servers,
it must be `public array $proxyIPs = [];`.

#### app/Config/Routing.php[](#app-config-routing-php "Link to this heading")

To clean up the routing system, the following changes were made:

- New **app/Config/Routing.php** file that holds the settings that used to be in the Routes file.
- The **app/Config/Routes.php** file was simplified so that it only contains the routes without settings and verbiage to clutter the file.
- The environment-specific routes files are no longer loaded automatically.

So you need to do:

1. Copy **app/Config/Routing.php** from the new framework to your **app/Config**
   directory, and configure it.
2. Remove all settings in **app/Config/Routes.php** that are no longer needed.
3. If you use the environment-specific routes files, add them to the `$routeFiles` property in **app/Config/Routing.php**.

#### app/Config/Toolbar.php[](#app-config-toolbar-php "Link to this heading")

You need to add the new properties `$watchedDirectories` and `$watchedExtensions`
for [Hot Reloading](testing__debugging.md#debug-toolbar-hot-reload):

```
--- a/app/Config/Toolbar.php
+++ b/app/Config/Toolbar.php
@@ -88,4 +88,31 @@ class Toolbar extends BaseConfig
      * `$maxQueries` defines the maximum amount of queries that will be stored.
      */
     public int $maxQueries = 100;
+
+    /**
+     * --------------------------------------------------------------------------
+     * Watched Directories
+     * --------------------------------------------------------------------------
+     *
+     * Contains an array of directories that will be watched for changes and
+     * used to determine if the hot-reload feature should reload the page or not.
+     * We restrict the values to keep performance as high as possible.
+     *
+     * NOTE: The ROOTPATH will be prepended to all values.
+     */
+    public array $watchedDirectories = [
+        'app',
+    ];
+
+    /**
+     * --------------------------------------------------------------------------
+     * Watched File Extensions
+     * --------------------------------------------------------------------------
+     *
+     * Contains an array of file extensions that will be watched for changes and
+     * used to determine if the hot-reload feature should reload the page or not.
+     */
+    public array $watchedExtensions = [
+        'php', 'css', 'js', 'html', 'svg', 'json', 'env',
+    ];
 }
```

#### app/Config/Events.php[](#app-config-events-php "Link to this heading")

You need to add the code to add a route for [Hot Reloading](testing__debugging.md#debug-toolbar-hot-reload):

```
--- a/app/Config/Events.php
+++ b/app/Config/Events.php
@@ -4,6 +4,7 @@ namespace Config;

 use CodeIgniter\Events\Events;
 use CodeIgniter\Exceptions\FrameworkException;
+use CodeIgniter\HotReloader\HotReloader;

 /*
  * --------------------------------------------------------------------
@@ -44,5 +45,11 @@ Events::on('pre_system', static function () {
     if (CI_DEBUG && ! is_cli()) {
         Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');
         Services::toolbar()->respond();
+        // Hot Reload route - for framework use on the hot reloader.
+        if (ENVIRONMENT === 'development') {
+            Services::routes()->get('__hot-reload', static function () {
+                (new HotReloader())->run();
+            });
+        }
     }
 });
```

#### app/Config/Cookie.php[](#app-config-cookie-php "Link to this heading")

The Cookie config items in **app/Config/App.php** are no longer used.

1. Copy **app/Config/Cookie.php** from the new framework to your **app/Config**
   directory, and configure it.
2. Remove the properties (from `$cookiePrefix` to `$cookieSameSite`) in
   **app/Config/App.php**.

#### app/Config/Security.php[](#app-config-security-php "Link to this heading")

The CSRF config items in **app/Config/App.php** are no longer used.

1. Copy **app/Config/Security.php** from the new framework to your **app/Config**
   directory, and configure it.
2. Remove the properties (from `$CSRFTokenName` to `$CSRFSameSite`) in
   **app/Config/App.php**.

#### app/Config/Session.php[](#app-config-session-php "Link to this heading")

The Session config items in **app/Config/App.php** are no longer used.

1. Copy **app/Config/Session.php** from the new framework to your **app/Config**
   directory, and configure it.
2. Remove the properties (from `$sessionDriver` to `$sessionDBGroup`) in
   **app/Config/App.php**.

## [Breaking Enhancements](#id15)[](#breaking-enhancements "Link to this heading")

- **Routing:** The method signature of `RouteCollection::__construct()` has been changed.
  The third parameter `Routing $routing` has been added. Extending classes
  should likewise add the parameter so as not to break LSP.
- **Validation:** The method signature of `Validation::check()` has been changed.
  The `string` typehint on the `$rule` parameter was removed. Extending classes
  should likewise remove the typehint so as not to break LSP.

## [Project Files](#id16)[](#project-files "Link to this heading")

Some files in the **project space** (root, app, public, writable) received updates. Due to
these files being outside of the **system** scope they will not be changed without your intervention.

There are some third-party CodeIgniter modules available to assist with merging changes to
the project space: [Explore on Packagist](https://packagist.org/explore/?query=codeigniter4%20updates).

### [Content Changes](#id17)[](#content-changes "Link to this heading")

The following files received significant changes (including deprecations or visual adjustments)
and it is recommended that you merge the updated versions with your application:

#### Config[](#config "Link to this heading")

- app/Config/CURLRequest.php
  :   - The default value of [$shareOptions](libraries__curlrequest.md#curlrequest-sharing-options) has been change to `false`.
- app/Config/Exceptions.php
  :   - Added the new method `handler()` that define custom Exception Handlers.
        See [Custom Exception Handlers](general__errors.md#custom-exception-handlers).

### [All Changes](#id18)[](#all-changes "Link to this heading")

This is a list of all files in the **project space** that received changes;
many will be simple comments or formatting that have no effect on the runtime:

- app/Config/App.php
- app/Config/CURLRequest.php
- app/Config/Cookie.php
- app/Config/Database.php
- app/Config/Events.php
- app/Config/Exceptions.php
- app/Config/Filters.php
- app/Config/Routes.php
- app/Config/Routing.php
- app/Config/Toolbar.php
- public/index.php
- spark
