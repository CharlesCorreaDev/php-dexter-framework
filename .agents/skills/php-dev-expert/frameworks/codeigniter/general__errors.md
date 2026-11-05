# Error Handling — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/general/errors.html

---

# Error Handling[](#error-handling "Link to this heading")

CodeIgniter builds error reporting into your system through Exceptions, both the [SPL collection](https://www.php.net/manual/en/spl.exceptions.php), as
well as a few exceptions that are provided by the framework.

Depending on your environment’s setup,
the default action when an error or exception is thrown is to display a detailed error report unless the application
is running under the `production` environment. In the `production` environment, a more generic message is displayed to
keep the best user experience for your users.

## [Using Exceptions](#id6)[](#using-exceptions "Link to this heading")

This section is a quick overview for newer programmers, or for developers who are not experienced with using exceptions.

### [What are Exceptions](#id7)[](#what-are-exceptions "Link to this heading")

Exceptions are simply events that happen when the exception is “thrown”. This halts the current flow of the script, and
execution is then sent to the error handler which displays the appropriate error page:

```
<?php

throw new \Exception('Some message goes here');
```

### [Catching Exceptions](#id8)[](#catching-exceptions "Link to this heading")

If you are calling a method that might throw an exception, you can catch that exception using a `try/catch` block:

```
<?php

try {
    $user = $userModel->find($id);
} catch (\Exception $e) {
    exit($e->getMessage());
}
```

If the `$userModel` throws an exception, it is caught and the code within the catch block is executed. In this example,
the scripts dies, echoing the error message that the `UserModel` defined.

#### Catching Specific Exceptions[](#catching-specific-exceptions "Link to this heading")

In the example above, we catch any type of Exception. If we only want to watch for specific types of exceptions, like
a `DataException`, we can specify that in the catch parameter. Any other exceptions that are thrown and are
not child classes of the caught exception will be passed on to the error handler:

```
<?php

use CodeIgniter\Database\Exceptions\DataException;

try {
    $user = $userModel->find($id);
} catch (DataException $e) {
    // do something here...
}
```

This can be handy for handling the error yourself, or for performing cleanup before the script ends. If you want
the error handler to function as normal, you can throw a new exception within the catch block:

```
<?php

use CodeIgniter\Database\Exceptions\DataException;

try {
    $user = $userModel->find($id);
} catch (DataException $e) {
    // do something here...

    throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
}
```

## [Configuration](#id9)[](#configuration "Link to this heading")

### [Error Reporting](#id10)[](#error-reporting "Link to this heading")

When `display_errors` in PHP ini setting is enabled, CodeIgniter will display
a detailed error report with all errors

So by default, CodeIgniter will display a detailed error report in the `development`
and `testing` environments, and will not display any errors in the `production`
environment.

![../_images/error.png](../_images/error.png)

You can change your environment by setting the `CI_ENVIRONMENT` variable.
See [Setting Environment](general__environments.md#setting-environment).

Important

Disabling error reporting DOES NOT stop logs from being written if there are errors.

Warning

Note that your settings from the **.env** file are added to `$_SERVER`
and `$_ENV`. As a side effect, this means that if the detailed error report
is displayed, **your secure credentials are publicly exposed**.

### [Logging Exceptions](#id11)[](#logging-exceptions "Link to this heading")

By default, all Exceptions other than “404 - Page Not Found” exceptions are logged. This can be turned on and off
by setting the `$log` value of **app/Config/Exceptions.php**:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Exceptions extends BaseConfig
{
    // ...
    public bool $log = true;
    // ...
}
```

To ignore logging on other status codes, you can set the status code to ignore in the same file:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Exceptions extends BaseConfig
{
    // ...
    public array $ignoreCodes = [404];
    // ...
}
```

Note

It is possible that logging still will not happen for exceptions if your current
[Log settings](general__logging.md#logging-configuration)
are not set up to log `critical` errors, which all exceptions are logged as.

### [Logging Deprecation Warnings](#id12)[](#logging-deprecation-warnings "Link to this heading")

Added in version 4.3.0.

Prior to v4.3.0, all errors reported by `error_reporting()` will be thrown as
an `ErrorException` object.

But with the surge in use of PHP 8.1+, many users may see exceptions thrown for
[passing null to non-nullable arguments of internal functions](https://wiki.php.net/rfc/deprecate_null_to_scalar_internal_arg).

To ease the migration to PHP 8.1, starting with v4.3.0, CodeIgniter has the feature
that only logs the deprecation errors (`E_DEPRECATED` and `E_USER_DEPRECATED`)
without throwing them as exceptions.

By default, CodeIgniter will only log deprecations without throwing exceptions in
development environment. In production environment, no logging is done and no
exceptions are thrown.

#### Configuration[](#id2 "Link to this heading")

The settings for this feature are as follows.
First, make sure your copy of `Config\Exceptions` is updated with the two new
properties and set as follows:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Psr\Log\LogLevel;

class Exceptions extends BaseConfig
{
    // ...
    public bool $logDeprecations = true; // If set to false, an exception will be thrown.
    // ...
    public string $deprecationLogLevel = LogLevel::WARNING; // This should be one of the log levels supported by PSR-3.
    // ...
}
```

Next, depending on the log level you set in `Config\Exceptions::$deprecationLogLevel`, check whether the
logger threshold defined in `Config\Logger::$threshold` covers the deprecation log level. If not, adjust
it accordingly.

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Logger extends BaseConfig
{
    // ...
    // This must contain the log level (5 for LogLevel::WARNING) corresponding to $deprecationLogLevel.
    public $threshold = (ENVIRONMENT === 'production') ? 4 : 9;
    // ...
}
```

After that, subsequent deprecations will be logged as configured without throwing
as exceptions.

This feature also works with user deprecations:

```
<?php

@trigger_error('Do not use this class!', E_USER_DEPRECATED);
// Your logs should contain a record with a message like: "[DEPRECATED] Do not use this class!"
```

For testing your application you may want to always throw on deprecations. You may configure this by
setting the environment variable `CODEIGNITER_SCREAM_DEPRECATIONS` to a truthy value.

## [Framework Exceptions](#id13)[](#framework-exceptions "Link to this heading")

### [Exception Design](#id14)[](#exception-design "Link to this heading")

Staring with v4.6.0, all Exception classes that the framework throws:

- implement `CodeIgniter\Exceptions\ExceptionInterface`
- extend `CodeIgniter\Exceptions\LogicException` or `CodeIgniter\Exceptions\RuntimeException`

Note

The framework only throws the above kind of exception classes, but PHP
or other libraries that are used may throw other exceptions.

There are two base Exception classes that the framework throws:

### [LogicException](#id15)[](#logicexception "Link to this heading")

`CodeIgniter\Exceptions\LogicException` extends `\LogicException`.
This exception represents error in the program logic. This kind of exception
should lead directly to a fix in your code.

### [RuntimeException](#id16)[](#runtimeexception "Link to this heading")

`CodeIgniter\Exceptions\RuntimeException` extends `\RuntimeException`.
This exception is thrown if an error which can only be found on runtime occurs.

The following framework exceptions are also available:

### [PageNotFoundException](#id17)[](#pagenotfoundexception "Link to this heading")

This is used to signal a 404, Page Not Found error:

```
<?php

use CodeIgniter\Exceptions\PageNotFoundException;

$page = $pageModel->find($id);

if ($page === null) {
    throw PageNotFoundException::forPageNotFound();
}
```

You can pass a message into the exception that will be displayed in place of the default message on the 404 page.

For the default 404 view file location, see [HTTP Status Code and Error Views](#http-status-code-and-error-views).

If, in **app/Config/Routing.php** or **app/Config/Routes.php**, you have specified
a [404 Override](incoming__routing.md#override), that will be called instead of the standard 404 page.

### [ConfigException](#id18)[](#configexception "Link to this heading")

This exception should be used when the values from the configuration class are invalid, or when the config class
is not the right type, etc:

```
<?php

throw new \CodeIgniter\Exceptions\ConfigException();
```

This provides an exit code of 3.

### [DatabaseException](#id19)[](#databaseexception "Link to this heading")

This exception is thrown for database errors, such as when the database connection cannot be created,
or when it is temporarily lost:

```
<?php

throw new \CodeIgniter\Database\Exceptions\DatabaseException();
```

This provides an exit code of 8.

### [RedirectException](#id20)[](#redirectexception "Link to this heading")

Note

Since v4.4.0, the namespace of `RedirectException` has been changed.
Previously it was `CodeIgniter\Router\Exceptions\RedirectException`. The
previous class has been removed in v4.6.0.

This exception is a special case allowing for overriding of all other response routing and
forcing a redirect to a specific URI:

```
<?php

throw new \CodeIgniter\HTTP\Exceptions\RedirectException($uri);
```

`$uri` is a URI path relative to baseURL. You can also supply a
redirect code to use instead of the default (`302`, “temporary redirect”):

```
<?php

throw new \CodeIgniter\HTTP\Exceptions\RedirectException($uri, 301);
```

Also, since v4.4.0 an object of a class that implements ResponseInterface can be used as the first argument.
This solution is suitable for cases where you need to add additional headers or cookies in the response.

```
<?php

$response = service('response')
    ->redirect('https://example.com/path')
    ->setHeader('Some', 'header')
    ->setCookie('and', 'cookie');

throw new \CodeIgniter\HTTP\Exceptions\RedirectException($response);
```

## [Specify HTTP Status Code in Your Exception](#id21)[](#specify-http-status-code-in-your-exception "Link to this heading")

Added in version 4.3.0.

Since v4.3.0, you can specify the HTTP status code for your Exception class to implement
`CodeIgniter\Exceptions\HTTPExceptionInterface`.

When an exception implementing `HTTPExceptionInterface` is caught by CodeIgniter’s exception handler, the Exception code will become the HTTP status code.

## [HTTP Status Code and Error Views](#id22)[](#http-status-code-and-error-views "Link to this heading")

The exception handler displays the error view corresponding to the HTTP status
code, if one exists.

For example, `PageNotFoundException` implements the `HTTPExceptionInterface`,
so its exception code `404` will be the HTTP status code. Therefore if it is
thrown, the system will show the **error\_404.php** in the **app/Views/errors/html**
folder when it is a web request. If it is invoked via CLI, the system will show
the **error\_404.php** in the **app/Views/errors/cli** folder.

If there is no view file corresponding to the HTTP status code, **production.php**
or **error\_exception.php** will be displayed.

Note

If `display_errors` is on in the PHP ini setting,
**error\_exception.php** is selected and a detailed error report is displayed.

You should customize all of the error views in the **app/Views/errors/html** folder
for your site.

You can also create error views for specific HTTP status code. For example, if
you want to create an error view for “400 Bad Request”, add **error\_400.php**.

Warning

If an error view file with the corresponding HTTP status code exists,
the exception handler will display that file regardless of the environment.
The view file must be implemented in such a way that it does not display
detailed error messages in production environment by yourself.

## [Specify Exit Code in Your Exception](#id23)[](#specify-exit-code-in-your-exception "Link to this heading")

Added in version 4.3.0.

Since v4.3.0, you can specify the exit code for your Exception class to implement
`CodeIgniter\Exceptions\HasExitCodeInterface`.

When an exception implementing `HasExitCodeInterface` is caught by CodeIgniter’s exception handler, the code returned from the `getExitCode()` method will become the exit code.

## [Custom Exception Handlers](#id24)[](#custom-exception-handlers "Link to this heading")

Added in version 4.4.0.

If you need more control over how exceptions are displayed you can now define your own handlers and
specify when they apply.

### [Defining the New Handler](#id25)[](#defining-the-new-handler "Link to this heading")

The first step is to create a new class which implements `CodeIgniter\Debug\ExceptionHandlerInterface`.
You can also extend `CodeIgniter\Debug\BaseExceptionHandler`.
This class includes a number of utility methods that are used by the default exception handler.
The new handler must implement a single method: `handle()`:

```
<?php

namespace App\Libraries;

use CodeIgniter\Debug\BaseExceptionHandler;
use CodeIgniter\Debug\ExceptionHandlerInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Throwable;

class MyExceptionHandler extends BaseExceptionHandler implements ExceptionHandlerInterface
{
    // You can override the view path.
    protected ?string $viewPath = APPPATH . 'Views/exception/';

    public function handle(
        Throwable $exception,
        RequestInterface $request,
        ResponseInterface $response,
        int $statusCode,
        int $exitCode,
    ): void {
        $this->render($exception, $statusCode, $this->viewPath . "error_{$statusCode}.php");

        exit($exitCode);
    }
}
```

This example defines the minimum amount of code typically needed - display a view and exit with the proper
exit code. However, the `BaseExceptionHandler` provides a number of other helper functions and objects.

### [Configuring the New Handler](#id26)[](#configuring-the-new-handler "Link to this heading")

Telling CodeIgniter to use your new exception handler class is done in the **app/Config/Exceptions.php**
configuration file’s `handler()` method:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Debug\ExceptionHandler;
use CodeIgniter\Debug\ExceptionHandlerInterface;
use Throwable;

class Exceptions extends BaseConfig
{
    // ...

    public function handler(int $statusCode, Throwable $exception): ExceptionHandlerInterface
    {
        return new ExceptionHandler($this);
    }
}
```

You can use any logic your application needs to determine whether it should handle the exception, but the
two most common are checking on the HTTP status code or the type of exception. If your class should handle
it then return a new instance of that class:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Debug\ExceptionHandlerInterface;
use CodeIgniter\Exceptions\PageNotFoundException;
use Throwable;

class Exceptions extends BaseConfig
{
    // ...

    public function handler(int $statusCode, Throwable $exception): ExceptionHandlerInterface
    {
        if (in_array($statusCode, [400, 404, 500], true)) {
            return new \App\Libraries\MyExceptionHandler($this);
        }

        if ($exception instanceof PageNotFoundException) {
            return new \App\Libraries\MyExceptionHandler($this);
        }

        return new \CodeIgniter\Debug\ExceptionHandler($this);
    }
}
```
