# Spiral Framework: Cookbook - Migration from v2.x

> **Fonte / Source:** https://spiral.dev/docs/cookbook-migration-from-v2/current/en

---

Overview 

- [Table of Contents](readme__current__en.md)
- [About Framework](overview-spiral__current__en.md)
- [Design Approach](framework-design__current__en.md)
- [Application Lifecycle](framework-lifecycle__current__en.md)
- [Contributing](overview-contributing__current__en.md)
- [Versioning](overview-versioning__current__en.md)
- [License](license__current__en.md)

Getting started 

- [Installation](start-installation__current__en.md)
- [Long running](start-server__current__en.md)
- [Directory Structure](start-structure__current__en.md)
- [Configuration](start-configuration__current__en.md)
- [First HTTP controller](start-http-basics__current__en.md)
- [First CLI command](start-cli-basics__current__en.md)
- [First background job](start-queue-basics__current__en.md)
- [Deployment](start-deployment__current__en.md)

Framework 

- [Kernel and Environment](framework-kernel__current__en.md)
- [Bootloaders](framework-bootloaders__current__en.md)
- [Config Objects](framework-config__current__en.md)
- [Dispatchers](framework-dispatcher__current__en.md)
- [Interceptors](framework-interceptors__current__en.md)
- [Finalizers](framework-finalizers__current__en.md)

The Basics 

- [Database and ORM](basics-orm__current__en.md)
- [Sessions](basics-session__current__en.md)
- [Files and Directories](basics-files__current__en.md)
- [Cache](basics-cache__current__en.md)
- [Logging](basics-logging__current__en.md)
- [Errors handling](basics-errors__current__en.md)
- [Debugging](basics-debug__current__en.md)
- [Scaffolding](basics-scaffolding__current__en.md)
- [Prototyping](basics-prototype__current__en.md)

Container and DI 

- [Overview](container-overview__current__en.md)
- [Configuration](container-configuration__current__en.md)
- [Attributes](container-attributes__current__en.md)
- [Auto Wiring](container-auto-wiring__current__en.md)
- [IOC Scopes](container-scopes__current__en.md)
- [Injectors](container-injectors__current__en.md)

Advanced 

- [Static Memory](advanced-memory__current__en.md)
- [Attributes](advanced-attributes__current__en.md)
- [Application Metrics](advanced-prometheus-metrics__current__en.md)
- [Application Telemetry](advanced-telemetry__current__en.md)
- [Task Scheduling](advanced-scheduler__current__en.md)
- [Atomic Locks](advanced-locks__current__en.md)
- [Mailer](advanced-sendit__current__en.md)
- [Notifications](advanced-notifications__current__en.md)

HTTP 

- [Getting started](http-configuration__current__en.md)
- [Request Lifecycle](http-lifecycle__current__en.md)
- [Request and Response](http-request-response__current__en.md)
- [Routing](http-routing__current__en.md)
- [Middleware](http-middleware__current__en.md)
- [Cookies](http-cookies__current__en.md)
- [CSRF protection](http-csrf__current__en.md)
- [OpenAPI Documentation](http-openapi__current__en.md)
- [Error Pages](http-errors__current__en.md)
- [Interceptors](http-interceptors__current__en.md)

Request Validation 

- [Getting started](filters-configuration__current__en.md)
- [Filter Object](filters-filter__current__en.md)
- [Composite Filters](filters-composite__current__en.md)
- [Interceptors](filters-interceptors__current__en.md)
- [Migration from 2.x](filters-bridge__current__en.md)

Data grid 

- [Getting Started](data-grid-getting-started__current__en.md)
- [Installation](data-grid-installation__current__en.md)
- [Grid Schema](data-grid-grid-schema__current__en.md)
- [Input Sources](data-grid-input__current__en.md)
- [Filters](data-grid-filters__current__en.md)
- [Value Types](data-grid-values__current__en.md)
- [Value Accessors](data-grid-accessors__current__en.md)
- [Sorters](data-grid-sorters__current__en.md)
- [Pagination](data-grid-pagination__current__en.md)
- [Writers](data-grid-writers__current__en.md)

Security 

- [Data Encryption](security-encrypter__current__en.md)
- [Role Based Access Control](security-rbac__current__en.md)
- [User Authentication](security-authentication__current__en.md)

Validation 

- [Getting started](validation-factory__current__en.md)
- [Spiral Validator](validation-spiral__current__en.md)
- [Symfony Validator](validation-symfony__current__en.md)
- [Laravel Validator](validation-laravel__current__en.md)

Testing 

- [Getting Started](testing-start__current__en.md)
- [HTTP Tests](testing-http__current__en.md)
- [Storage Tests](testing-storage__current__en.md)
- [Queue Tests](testing-queue__current__en.md)
- [Mail Tests](testing-mail__current__en.md)
- [Events Tests](testing-event__current__en.md)
- [Database](testing-database__current__en.md)

Console Application 

- [Getting started](console-configuration__current__en.md)
- [User Commands](console-commands__current__en.md)
- [Command Sequences](console-sequences__current__en.md)
- [Interceptors](console-interceptors__current__en.md)

WebSockets 

- [Getting started](websockets-configuration__current__en.md)
- [Event handlers](websockets-services__current__en.md)
- [Broadcasting](websockets-broadcasting__current__en.md)
- [Centrifugo API](websockets-api__current__en.md)
- [Interceptors](websockets-interceptors__current__en.md)

Queue and Jobs 

- [Getting started](queue-configuration__current__en.md)
- [Job Handlers](queue-jobs__current__en.md)
- [RoadRunner integration](queue-roadrunner__current__en.md)
- [Interceptors](queue-interceptors__current__en.md)

Temporal 

- [Getting started](temporal-configuration__current__en.md)
- [Usage](temporal-usage__current__en.md)
- [Interceptors](temporal-interceptors__current__en.md)

GRPC 

- [Getting started](grpc-configuration__current__en.md)
- [Service Code](grpc-service__current__en.md)
- [Client SDK](grpc-client__current__en.md)
- [Interceptors](grpc-interceptors__current__en.md)

Components 

- [Discoverer](component-discoverer__current__en.md)
- [Code Generation](component-reactor__current__en.md)
- [Storage and Cloud Distribution](advanced-storage__current__en.md)
- [Static analysis](advanced-tokenizer__current__en.md)
- [Serializer](advanced-serializer__current__en.md)
- [Internalization](advanced-i18n__current__en.md)
- [Events](advanced-events__current__en.md)

Views and templating 

- [Getting started](views-configuration__current__en.md)
- [Basics](views-basics__current__en.md)
- [Plain PHP](views-plain__current__en.md)
- [Twig templating](views-twig__current__en.md)
- [Stempler templating](views-stempler__current__en.md)

Cookbook 

- [Quick start](cookbook-quick-start__current__en.md)
- [Custom Dispatcher](cookbook-custom-dispatcher__current__en.md)
- [Authentication based on JWT](cookbook-user-authentication__current__en.md)
- [Console command validation](cookbook-console-validation__current__en.md)
- [Custom HTTP request handler](cookbook-psr-15__current__en.md)
- [Realtime chat application](cookbook-simple-chat__current__en.md)
- [Queue system](cookbook-simple-queue-system__current__en.md)
- [Migration from v2.x](cookbook-migration-from-v2__current__en.md)

Keeper 

- [Getting started](keeper-intro__current__en.md)
- [Bootloaders](keeper-bootloaders__current__en.md)
- [Routing](keeper-routing__current__en.md)
- [Sitemap and breadcrumbs](keeper-sitemap__current__en.md)
- [Views](keeper-views__current__en.md)
- [Components](keeper-components__current__en.md)

Revision: Wed, 28 Oct 2026 12:14:55 GMT

[Edit this page](https://github.com/spiral/docs/edit/3.16/docs/en/cookbook/migration-from-v2.md)

# Cookbook — Spiral Framework Upgrade Guide: 2.14 to 3.0

- [Key Changes](#key-changes)
  - [Impact: High](#impact-high)
- [Updating Dependencies](#updating-dependencies)
  - [Impact: High](#impact-high)
  - [Updates Required](#updates-required)
- [Environment](#environment)
  - [Impact: Low](#impact-low)
- [Http](#http)
  - [Impact: High](#impact-high)
  - [Impact: Low](#impact-low)
  - [Impact: Medium](#impact-medium)
  - [Impact: Medium](#impact-medium)
  - [Impact: Low](#impact-low)
  - [Impact: Low](#impact-low)
  - [Impact: Low](#impact-low)
  - [Other improvements](#other-improvements)
- [Bootloaders](#bootloaders)
  - [Impact: Medium](#impact-medium)
  - [Impact: High](#impact-high)
  - [Impact: Low](#impact-low)
- [Kernel](#kernel)
  - [Impact: Medium](#impact-medium)
  - [Impact: Medium](#impact-medium)
  - [Impact: Low](#impact-low)
  - [Other improvements](#other-improvements)
- [Injectable config](#injectable-config)
  - [Impact: Medium](#impact-medium)
- [Data grid](#data-grid)
  - [Impact: Low](#impact-low)
- [Queue](#queue)
  - [Impact: High](#impact-high)
  - [Other improvements](#other-improvements)
- [Validation](#validation)
  - [Impact: High](#impact-high)
- [spiral/monolog-bridge](#spiralmonolog-bridge)
  - [Impact: High](#impact-high)
  - [Impact: Low](#impact-low)
- [Deprecations and Removals](#deprecations-and-removals)
- [New Exception Handler](#new-exception-handler)
- [Filters](#filters)
  - [Impact: Low](#impact-low)
  - [Impact: High](#impact-high)
  - [Redesigned filters](#redesigned-filters)
- [Injectable enums](#injectable-enums)
- [New serializer component](#new-serializer-component)
  - [Configuration](#configuration)
- [Console improvements](#console-improvements)
- [Container refactoring](#container-refactoring)
  - [Modular Container Design](#modular-container-design)
  - [PHP 8.0 Union Types Support](#php-8.0-union-types-support)
  - [Variadic Arguments Support](#variadic-arguments-support)
  - [Other improvements](#other-improvements)
- [Tokenizer](#tokenizer)
- [Mailer](#mailer)
- [Packages for Spiral framework 3.x](#packages-for-spiral-framework-3.x)

The release of Spiral Framework 3.0 brings significant enhancements and changes over the 2.x series, including support
for both Symfony 6.x and 7.x components, various bug fixes, and usability improvements.

## [#](#key-changes "Permalink")Key Changes

### [#](#impact-high "Permalink")Impact: High

#### [#](#php-81 "Permalink")PHP 8.1

Spiral Framework 3.x requires a minimum PHP version of 8.1.

All classes and interfaces within the Spiral now include typed arguments, properties, and return types. If your
application or package extends any of Spiral's core classes and overrides these methods or properties, it is necessary
to introduce type declarations in your code as well.

> Initially, focus on the `InjectableConfig::$config` property, which must now be typed as array.

#### [#](#readonly-properties "Permalink")Readonly properties

Be aware that many class properties have been marked as `readonly` in the latest version. If your code involves directly
setting values in Spiral's core objects, you will need to verify whether these properties can still be overwritten. This
change requires you to adjust how you interact with Spiral's core objects, possibly necessitating the use of constructor
parameters or dedicated methods for setting these values.

## [#](#updating-dependencies "Permalink")Updating Dependencies

### [#](#impact-high-1 "Permalink")Impact: High

It's essential to update the dependencies in your application's `composer.json` file to ensure compatibility with Spiral
Framework 3.x. Follow the instructions below to update and add the necessary packages.

### [#](#updates-required "Permalink")Updates Required

Modify your `composer.json` to update the following packages:

- `symfony/console` to `^6.0`
- `spiral/framework` to `^3.0`
- `spiral/cycle-bridge` to `^2.0`
- `spiral/roadrunner-bridge` to `^3.0`
- `spiral/nyholm-bridge` to `^1.3`
- `spiral/testing` to `^2.0`

After updating and adding these dependencies, run `composer update` to install the new versions and ensure your project
is ready for Spiral 3.x.

## [#](#environment "Permalink")Environment

### [#](#impact-low "Permalink")Impact: Low

The `Environment` class no longer overwrites existing environment (ENV) variables.

Variables defined in your `.env` file can now be overridden by external environment variables. This means that variables
set at the server level or as system-level environment variables will take precedence. This change also allows you to
set environment variables specifically for PHPUnit.

To revert to the previous behavior where `.env` file variables could overwrite external environment variables, you need
to instantiate the `\Spiral\Boot\Environment` object with the overwrite argument set to `true`.

#### [#](#example "Permalink")Example

php

```
App::create(
    directories: ['root' => __DIR__]
)->run(new \Spiral\Boot\Environment(overwrite: true));
```

> **See more**  
>  about how to deal with environment variables in the [documentation](framework-kernel__current__en.md#environment)

## [#](#http "Permalink")Http

### [#](#impact-high-2 "Permalink")Impact: High

Bootloaders no longer automatically register middleware within the application.

#### [#](#middleware-previously-registered-through-bootloaders "Permalink")Middleware Previously Registered Through Bootloaders

The following list includes middleware that was previously registered through specific bootloaders. With the update,
these middleware need to be manually registered according to your application's requirements and the desired order of
execution:

- `Spiral\Broadcasting\Bootloader\WebsocketsBootloader` -> `Spiral\Broadcasting\Middleware\AuthorizationMiddleware`
- `Spiral\Bootloader\Auth\HttpAuthBootloader` -> `Spiral\Auth\Middleware\AuthMiddleware`
- `Spiral\Bootloader\Debug\HttpCollectorBootloader` -> `Spiral\Debug\StateCollector\HttpCollector`
- `Spiral\Bootloader\Http\CookiesBootloader` -> `Spiral\Cookies\Middleware\CookiesMiddleware`
- `Spiral\Bootloader\Http\CsrfBootloader` -> `Spiral\Csrf\Middleware\CsrfMiddleware`
- `Spiral\Bootloader\Http\ErrorHandlerBootloader` -> `Spiral\Http\Middleware\ErrorHandlerMiddleware`
- `Spiral\Bootloader\Http\JsonPayloadsBootloader` -> `Spiral\Http\Middleware\JsonPayloadMiddleware`
- `Spiral\Bootloader\Http\SessionBootloader` -> `Spiral\Session\Middleware\SessionMiddleware`

This change grants you the flexibility to select which middleware are essential for your application and the sequence in
which they should be integrated.

> **See more**  
>  about HTTP middleware in the [documentation](http-middleware__current__en.md)

#### [#](#example-1 "Permalink")Example

php

```
<?php

declare(strict_types=1);

namespace App\Bootloader;

use App\Controller\AuthController;
use App\Controller\HomeController;
use App\Controller\PageController;
use Spiral\Auth\Middleware\AuthMiddleware;
use Spiral\Bootloader\Http\RoutesBootloader as BaseRoutesBootloader;
use Spiral\Cookies\Middleware\CookiesMiddleware;
use Spiral\Csrf\Middleware\CsrfMiddleware;
use Spiral\Debug\StateCollector\HttpCollector;
use Spiral\Http\Middleware\ErrorHandlerMiddleware;
use Spiral\Http\Middleware\JsonPayloadMiddleware;
use Spiral\Router\Loader\Configurator\RoutingConfigurator;
use Spiral\Session\Middleware\SessionMiddleware;

final class RoutesBootloader extends BaseRoutesBootloader
{
    protected function globalMiddleware(): array
    {
        return [
            ErrorHandlerMiddleware::class,
            JsonPayloadMiddleware::class,
            HttpCollector::class
        ];
    }

    protected function middlewareGroups(): array
    {
        return [
            'web' => [
                CookiesMiddleware::class,
                SessionMiddleware::class,
                CsrfMiddleware::class,
                AuthMiddleware::class,
            ],
            'api' => [
                //
            ]
        ];
    }
}
```

### [#](#impact-low-1 "Permalink")Impact: Low

The Spiral's HTTP component no longer includes a default implementation for `Spiral\Http\EmitterInterface` straight out
of the box.

To incorporate an emitter implementation when utilizing HTTP within your application.
For example, if you want to use Spiral with `nginx`, you can add a specific package by running the following command:

```
composer require spiral/sapi-bridge
```

Afterwards, ensure to register the necessary bootloader in your application's bootstrap process. This can be done by
including the `Spiral\Sapi\Bootloader\SapiBootloader` class in the LOAD array within your application's bootloader
configuration:

php

app/Application/Bootloader/AppBootloader.php

```
protected const LOAD = [
    // ...
    \Spiral\Sapi\Bootloader\SapiBootloader::class,
];
```

> **See more**  
>  about how to install and configure RoadRunner bridge in
> the [documentation](start-server__current__en.md#roadrunner-bridge).

### [#](#impact-medium "Permalink")Impact: Medium

The Spiral has discontinued its own implementation of the PSR-7 interfaces, opting instead to integrate
the `nyholm/psr7`package.

As a result of this change, the following classes have been removed from the framework:

- `Spiral\Bootloader\Http\DiactorosBootloader`
- `Spiral\Http\Diactoros\ResponseFactory`
- `Spiral\Http\Diactoros\ServerRequestFactory`
- `Spiral\Http\Diactoros\StreamFactory`
- `Spiral\Http\Diactoros\UploadedFileFactory`
- `Spiral\Http\Diactoros\UriFactory`

To adapt to this change, you should switch to using `nyholm/psr7` for PSR-7 HTTP message interfaces. This involves
updating your application's dependencies and potentially adjusting any custom implementations that previously relied on
the now-removed Spiral classes. This shift aligns the Spiral with a widely adopted and community-supported PSR-7
implementation, facilitating interoperability and standardization.

### [#](#impact-medium-1 "Permalink")Impact: Medium

The Spiral has made a significant change to the `RendererInterface` for error handling. Specifically, the third argument
of the `renderException` method within `Spiral\Http\ErrorHandler\RendererInterface` has been modified. Previously
accepting a string for the error message, it now requires a `\Throwable` for the exception itself.

The updated method signature is as follows:

php

```
interface RendererInterface
{
    public function renderException(Request $request, int $code, \Throwable $exception): Response;
}
```

This change means that when implementing the `RendererInterface`, your method must now handle a `\Throwable` object
instead of a simple string message. This adjustment allows for more detailed error handling and reporting, as the entire
exception object, with its stack trace and other details, can be used within the renderException method.

### [#](#impact-low-2 "Permalink")Impact: Low

We don't use `laminas/diactoros` package anymore. Replace it with `nyholm/psr7`

### [#](#impact-low-3 "Permalink")Impact: Low

The Spiral now supports the definition of custom input bags, offering greater flexibility in handling different types of
input data.

#### [#](#example-2 "Permalink")Example

The following example illustrates how to define a custom input bag for handling file uploads using Symfony's FilesBag.

php

```
<?php

declare(strict_types=1);

namespace App\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Bootloader\Http\HttpBootloader;
use Spiral\Validation\Symfony\Http\Request\FilesBag;

class SampleBootloader extends Bootloader
{
    public function init(HttpBootloader $http): void
    {
        $http->addInputBag('symfonyFiles', [
            'class'  => FilesBag::class,
            'source' => 'getUploadedFiles',
            'alias' => 'symfony-file'
        ]);
    }
}
```

To access the files through the custom input bag, you can use the following method:

php

```
$container->get(\Spiral\Http\Request\InputManager::class)->symfonyFiles('avatar');
```

This feature enhances the modularity and extensibility of input handling within the Spiral, enabling developers to
tailor the framework's request handling capabilities to the specific needs of their application.

> **See more**  
>  about HTTP input manager in the [documentation](http-request-response__current__en.md#inputmanager)

### [#](#impact-low-4 "Permalink")Impact: Low

There has been a change in the default behavior of the `InputBag` class regarding how it handles keys with `null`
values. This adjustment affects the way you check for the existence of keys and their values within an `InputBag`
instance.

Previously, the behavior of `has` and `isset` might have been implicitly expected to be consistent. However, with the
updated behavior, there is a distinction:

php

```
use Spiral\Http\Request\InputBag;

$bag = new InputBag([4 => null]);

$bag->has(4); // true
isset($bag[4]); // false
```

This change underscores the difference between checking for the presence of a key in the bag (`has` method) versus
checking if a key is both present and has a non-null value (`isset`). The `has` method simply verifies the existence of
a key, regardless of its value, while `isset` checks for the key and also ensures that the value is not null.

### [#](#other-improvements "Permalink")Other improvements

- Added AuthTransportMiddleware. See [PR](https://github.com/spiral/framework/pull/717)
- Added the ability to use middlewares via Autowire. See [PR](https://github.com/spiral/framework/pull/726)
- Improved route group middleware. See [PR](https://github.com/spiral/framework/pull/730)

## [#](#bootloaders "Permalink")Bootloaders

### [#](#impact-medium-2 "Permalink")Impact: Medium

As part of the Spiral's ongoing evolution, several bootloaders have been relocated into their respective component
namespaces. This reorganization is aimed at improving modularity and making it easier to manage specific functionalities
within the framework. Below is a list of the moved bootloaders and their new locations:

- `Spiral\Bootloader\TokenizerBootloader` -> `Spiral\Tokenizer\Bootloader\TokenizerBootloader`
- `Spiral\Bootloader\AttributesBootloader` -> `Spiral\Attributes\Bootloader\AttributesBootloader`
- `Spiral\Bootloader\Distribution\DistributionBootloader` -> `Spiral\Distribution\Bootloader\DistributionBootloader`
- `Spiral\Bootloader\Distribution\DistributionConfig` -> `Spiral\Distribution\Config\DistributionConfig`
- `Spiral\Bootloader\Storage\StorageBootloader` -> `Spiral\Storage\Bootloader\StorageBootloader`
- `Spiral\Bootloader\Storage\StorageConfig` -> `Spiral\Storage\Config\StorageConfig`
- `Spiral\Bootloader\Security\ValidationBootloader` -> `Spiral\Validation\Bootloader\ValidationBootloader`
- `Spiral\Bootloader\Views\ViewsBootloader` -> `Spiral\Views\Bootloader\ViewsBootloader`
- `Spiral\Bootloader\Http\DiactorosBootloade` -> `Spiral\Http\Bootloader\DiactorosBootloader`

### [#](#impact-high-3 "Permalink")Impact: High

There have been significant method renaming in the Spiral's bootloading process to better reflect their purpose and
functionality:

- The `boot` method has been renamed to `init`.
- The `start` method has been renamed to `boot`.

This change is aimed at clarifying the lifecycle stages of bootloaders. The `init` method is now used for initial setup
and configuration, while the `boot` method is meant for starting or enabling the functionalities provided by the
bootloader.

### [#](#impact-low-5 "Permalink")Impact: Low

The Spiral now automatically bootloads all dependencies declared in the `init` and `boot` methods of bootloaders. This
means you no longer need to explicitly list bootloaders in the `DEPENDENCIES` constant for them to be recognized and
loaded by the framework.

For example, directly injecting a bootloader into the boot or init method:

php

```
public function boot(AttributesBootloader $bootloader)
// or
public function init(AttributesBootloader $bootloader)
```

Is functionally equivalent to the previous approach of declaring dependencies:

php

```
protected const DEPENDENCIES = [
    AttributesBootloader::class,
];
```

This enhancement simplifies the configuration of bootloaders by reducing redundancy and making the process more
intuitive.

> **See more**  
>  about bootloaders in the [documentation](framework-bootloaders__current__en.md)

## [#](#kernel "Permalink")Kernel

### [#](#impact-medium-3 "Permalink")Impact: Medium

The `Spiral\Boot\AbstractKernel::init` method has been removed. For initializing the application, the `create` method
should be used as a replacement. This change streamlines the process of setting up and running the Spiral application.

#### [#](#example-3 "Permalink")Example

To initialize and run your application, you should now use the following approach:

php

```
App::create(
    directories: ['root' => __DIR__]
)->run();
```

### [#](#impact-medium-4 "Permalink")Impact: Medium

The `create` method of `Spiral\Boot\AbstractKernel` has been marked as final. This modification indicates that the
method cannot be overridden.

### [#](#impact-low-6 "Permalink")Impact: Low

The naming of methods within `Spiral\Boot\AbstractKernel` has been updated to better reflect their functionality:

- The `starting` method has been renamed to `booting`.
- The `started` method has been renamed to `booted`.

### [#](#other-improvements-1 "Permalink")Other improvements

- Added a new callback for Kernel class. See [PR](https://github.com/spiral/framework/pull/720)

## [#](#injectable-config "Permalink")Injectable config

### [#](#impact-medium-5 "Permalink")Impact: Medium

The Spiral has enhanced the `InjectableConfig` class to automatically merge predefined configurations specified in
the `$config` property of an `InjectableConfig` subclass with the configurations loaded from an external configuration
file. This improvement facilitates more flexible and dynamic configuration management by allowing predefined defaults to
be easily overridden or extended through external configuration files.

#### [#](#example-4 "Permalink")Example

Consider the following example where a custom configuration class extends the `InjectableConfig` class. The predefined
configuration within the class will be merged with the contents of an external configuration file:

php

```
class SomeConfig extends \Spiral\Core\InjectableConfig
{
    // Predefined default configurations
    protected array $config = [   // <=== Will be merged with data from some-config.php
        'default' => 'sync',
        'aliases' => []
    ];
}
```

Suppose you have an external configuration file `app/config/some-config.php` with additional or overriding settings:

php

```
// app/config/some-config.php

return [
    'aliases' => [...]
];
```

When the `SomeConfig` class is instantiated and fetched from the container, the resulting configuration will be a merged
version of the predefined `$config` array and the contents of the `some-config.php` file.

php

```
var_dump($container->get(SomeConfig::class)->default); // sync
```

This mechanism ensures that default settings can be specified directly in the code while allowing for flexible overrides
or additions through external configuration files, thereby combining the benefits of both approaches for managing
application configurations.

> **See more**  
>  about injectable configuration in the [documentation](framework-config__current__en.md)

## [#](#data-grid "Permalink")Data grid

### [#](#impact-low-7 "Permalink")Impact: Low

The [spiral/data-grid](https://github.com/spiral/data-grid) package is no longer bundled with the Spiral Framework by
default. If your application relies on the Data Grid component, you will now need to include it explicitly as a
dependency.

To add the Data Grid component to your project, execute the following command:

```
composer require spiral/data-grid
```

For detailed instructions on how to install and use the Data Grid component as a standalone package, including its setup
and configuration, refer to the [documentation](component-data-grid__current__en.md).

## [#](#queue "Permalink")Queue

### [#](#impact-high-4 "Permalink")Impact: High

The Spiral has made a significant change to its queue system by removing the `pushCallable` method from
the `Spiral\Queue\QueueTrait`. This means that directly pushing objects and callables into a queue is no longer
supported by default, as the framework has ceased the out-of-the-box use of `opis/closure`.

### [#](#other-improvements-2 "Permalink")Other improvements

- Added the ability to configure serializers for different types of jobs.
  See [PR](https://github.com/spiral/framework/pull/749)
- Added the ability to set defaultSerializer for jobs. See [PR](https://github.com/spiral/framework/pull/768)

## [#](#validation "Permalink")Validation

The Spiral Framework has evolved its approach to validation by no longer providing a default validator as part of its
core package. This decision empowers developers to select the validation tool that best fits their project's needs,
ensuring greater flexibility and adaptability in application development.

Developers now have the opportunity to choose among several validation options, including:

- [spiral/validatior](validation-spiral__current__en.md)
- [spiral-packages/symfony-validator](validation-symfony__current__en.md)
- and [spiral-packages/laravel-validator](validation-laravel__current__en.md)

or create their [own validator](validation-factory__current__en.md)

### [#](#impact-high-5 "Permalink")Impact: High

Currently, there is no default implementation for the `Spiral\Validation\ValidationInterface` within the framework. To
integrate validation into your Spiral project, you should select a validator from the options provided above or another
preferred validator, then install it via Composer. For example, to use Spiral's own validation package:

```
composer require spiral/validatior
```

After choosing and installing a validator, you must bind the `ValidationInterface` with your chosen implementation
within your application's bootloader.

php

```
use Spiral\Validation\ValidationInterface;
use Spiral\Validation\ValidationProviderInterface;
use Spiral\Validator\FilterDefinition;

class AppBootloader extends Bootloader
{
    protected const SINGLETONS = [
        ValidationInterface::class => [self::class, 'initValidation'],
    ];

    // ...

    public function initValidation(ValidationProviderInterface $provider): ValidationInterface
    {
        return $provider->getValidation(FilterDefinition::class);
    }
}
```

## [#](#spiralmonolog-bridge "Permalink")spiral/monolog-bridge

### [#](#impact-high-6 "Permalink")Impact: High

The constant `Spiral\Monolog\LogFactory::DEFAULT` has been deprecated in version 2.x of the Spiral Framework and
subsequently removed in version 3.x. As a replacement, use `Spiral\Monolog\Config\MonologConfig::DEFAULT_CHANNEL` for
referencing the default logging channel.

This change necessitates updates to your application's logging configuration or any code references that previously
relied on `LogFactory::DEFAULT`. Adjustments should be made to use `MonologConfig::DEFAULT_CHANNEL` to ensure
compatibility with Spiral Framework 3.x.

### [#](#impact-low-8 "Permalink")Impact: Low

To configure the default Monolog channel, you can set an environment variable as follows:

dotenv

```
# ...
MONOLOG_DEFAULT_CHANNEL=stderr
```

Additionally, you can specify this default channel and configure handlers and processors directly in the Monolog
configuration array within your application's config file:

php

```
[
    'default' => env('MONOLOG_DEFAULT_CHANNEL', 'stderr'),
    'handlers' => [
        'default' => [
            // ...
        ],
        'stderr' => [
            // ...
        ],
        'stdout' => [
            // ...
        ],
    ],

    'processors' => [
        'default' => [
            // ...
        ],
        'stdout' => [
            // ...
        ],
    ],
]
```

> See [pull request](https://github.com/spiral/framework/pull/675)

## [#](#deprecations-and-removals "Permalink")Deprecations and Removals

#### [#](#roadrunner "Permalink")RoadRunner

In Spiral Framework 3.x, built-in integration with RoadRunner has been removed to streamline the core framework and
offer more flexibility in choosing server solutions. For projects requiring RoadRunner integration:

- Use the [spiral/roadrunner-bridge](https://github.com/spiral/roadrunner-bridge) package to seamlessly integrate
  RoadRunner with the Spiral Framework.

The following components have also been removed and replaced with their respective alternatives:

- `spiral/jobs` is no longer part of the Spiral Framework. Instead, use
  the [spiral/queue](https://spiral.dev/docs/queue-configuration/3.0/en) component for job queue management.
- `spiral/broadcast` has been replaced with
  the [spiral/broadcasting](https://spiral.dev/docs/component-broadcasting/3.0/en) component, offering enhanced
  functionality for broadcasting events.

#### [#](#cycleorm-database-migrations "Permalink")CycleORM, Database, Migrations

Spiral Framework 3.x has decoupled its direct integration with `cycle/orm`, `cycle/database`, and `cycle/migrations`,
allowing for a more modular architecture. To integrate CycleORM into your Spiral project:

- Employ the [spiral/cycle-bridge](https://github.com/spiral/cycle-bridge) package, which facilitates the integration of
  CycleORM and related components.

## [#](#new-exception-handler "Permalink")New Exception Handler

The Spiral Framework now centralizes all exception handling through `Spiral\Exceptions\ExceptionHandler`, eliminating
the need for additional snapshotter and logger components for exception management within the codebase.

The updated `ExceptionHandler` supports the registration of custom exception renderers and reporters for specific
environments, enhancing flexibility and control over exception handling and reporting.

> **See more**  
>  about exception handling in the [documentation](basics-errors__current__en.md)

## [#](#filters "Permalink")Filters

### [#](#impact-low-9 "Permalink")Impact: Low

Added a new method `Spiral\Filters\InputInterface::hasValue`

### [#](#impact-high-7 "Permalink")Impact: High

The Filters component has undergone a complete redesign. To utilize filters from Spiral version 2.x within the 3.0
environment, please incorporate the [spiral/filters-bridge](https://github.com/spiral/filters-bridge) package.

### [#](#redesigned-filters "Permalink")Redesigned filters

1. The dependency on the `spiral/validation` component for validators is no longer necessary.
2. Filters now leverage PHP attributes for mapping input data.
3. Enables automatic validation during container resolution, as required.
4. Compatibility with third-party validators is now supported, including:
   - [spiral/validator](https://spiral.dev/docs/security-validator/3.0/en) (corrected from `validatior`)
   - [spiral-packages/symfony-validator](https://github.com/spiral-packages/symfony-validator)
   - [spiral-packages/laravel-validator](https://github.com/spiral-packages/laravel-validator)

#### [#](#filter-example "Permalink")Filter Example

The following example demonstrates the use of the redesigned filters:

php

```
use Spiral\Filters\Attribute\Input;
use Spiral\Filters\Attribute\NestedArray;
use Spiral\Filters\Attribute\NestedFilter;
use Spiral\Filters\Attribute\Setter;

class CreateUserFilter extends SymfonyFilter 
{
    #[Asset\NotBlank]
    #[Asset\Length(['min' => 30])]
    #[Input\Post]
    public string $username;

    #[Asset\NotBlank]
    #[Asset\Length(['min' => 30])]
    #[Input\Post(key: 'first_name')]
    public string $name;

    #[Asset\NotBlank]
    #[Asset\Length(['min' => 30])]
    #[Input\Query(key: 'last_name')]
    public string $lastName;

    #[Input\Query(key: 'page_num')]
    public int $page;

    #[Asset\NotBlank]
    #[Input\Attribute]
    private string $wsPath;

    #[Asset\NotBlank]
    #[Input\BearerToken]
    public string $token;

    #[Input\Cookie(key: 'utm_source')]
    public string $utmSource;

    #[Input\Cookie]
    public string $utmId;

    #[NestedArray(
        class: UserTagsFilter::class,
        input: new Inout\Post('tags')
    )]
    public array $tags = [];

    #[NestedFilter(class: UtmFilter::class)]
    public UtmFilter $utm;

    #[Input\Post]
    #[Setter(filter: 'md5')]
    public string $password;
}
```

php

```
class UserController
{
    public function createUser(CreateUserFilter $filter): array
    {
        $user = new User(
            $filter->username,
            $filter->firstName,
            $filter->lastName
        );

        $user->setUtmData(
            $filter->utm->id,
            $filter->utm->source,
            ...
        );

        foreach($filter->tags as $tag) {
            $user->addTag($tag->role);
        }

        $this->em->persist($user);
    }
}
```

> **See more**  
>  about filters in the [documentation](filters-configuration__current__en.md)

## [#](#injectable-enums "Permalink")Injectable enums

Imagine you need to determine if your application is running in production mode. A simple approach is to check
if `$env->get('APP_ENV') === 'production'`. However, enums offer a more convenient and type-safe alternative.

php

```
enum AppEnvironment: string
{
    case Production = 'prod';
    case Stage = 'stage';
    case Testing = 'testing';
    case Local = 'local';

    public function isProduction(): bool
    {
        return $this === self::Production;
    }
}
```

When the container resolves the enum class, it will provide an enum object with the value defined in the environment.

php

```
class MigrateCommand extends Command 
{
    const NAME = '...';

    // Resolve and detect current environment
    public function perform(AppEnvironment $appEnv): int
    {
        if ($appEnv->isProduction()) {
            // Deny
            return 0;
        }

        // ...
        return 1;
    }
}
```

To utilize this feature, implement `Spiral\Boot\Injector\InjectableEnumInterface` and use
the `Spiral\Boot\Injector\ProvideFrom` attribute to specify a method that returns the specific enum object.

php

```
<?php

declare(strict_types=1);

namespace Spiral\Boot\Environment;

use Spiral\Boot\EnvironmentInterface;
use Spiral\Boot\Injector\ProvideFrom;
use Spiral\Boot\Injector\InjectableEnumInterface;

#[ProvideFrom(method: 'detect')]
enum DebugMode implements InjectableEnumInterface
{
    case Enabled;
    case Disabled;

    public function isEnabled(): bool
    {
        return $this === self::Enabled;
    }

    public static function detect(EnvironmentInterface $environment): self
    {
        return \filter_var($environment->get('DEBUG'), \FILTER_VALIDATE_BOOL) ? self::Enabled : self::Disabled;
    }
}
}
```

This approach enhances type safety and code clarity by leveraging enums for environment-specific logic.

> **See more**  
>  about injectable enums in the [documentation](container-injectors__current__en.md#enum-injectors)

## [#](#new-serializer-component "Permalink")New serializer component

The Spiral Framework has introduced a new component, `spiral/serializer`, designed for serialization and deserialization
of payloads. This component is flexible, supporting custom drivers for various serialization formats.

### [#](#configuration "Permalink")Configuration

To configure the serializer component, you need to define your preferred serializers in the `app/config/serializer.php`
file:

php

```
// app/config/serializer.php
use Spiral\Core\Container\Autowire;

return [
    'default' => env('DEFAULT_SERIALIZER_FORMAT', 'json'),
    'serializers' => [
        'json' => JsonSerializer::class,
        'yaml' => new YamlSerializer(),
        'custom' => new Autowire(CustomSerializer::class),
    ],
];
```

Below is an example of a `Queue` class utilizing the serializer component to serialize payloads before pushing them to a
pipeline:

php

```
class Queue 
{
    public function __construct(
        private readonly PipelineInterface $pipeline,
        private readonly \Spiral\Serializer\SerializerInterface $serializer,
    ) {}

    public function push(array $payload): void
    {
        $this->pipeline->push(
            $this-serializer->serialize($payload),
        );
    }
}
```

In scenarios where you need to dynamically select the serialization format, you can use the `SerializerManager` to
retrieve the appropriate serializer based on options provided at runtime:

php

```
class Queue 
{
    public function __construct(
        private readonly PipelineInterface $pipeline,
        private readonly \Spiral\Serializer\SerializerManager $manager
    ) {}

    public function push(array $payload, Options $options): void
    {
        // $options->format = 'json'
        // $options->format = 'xml'
        // ...

        $this->pipeline->push(
            $this-manager
                ->getSerializer($options->format)
                ->serialize($payload)
        );
    }
}
```

> **See more**  
>  about the serializer component in the [documentation](advanced-serializer__current__en.md)

## [#](#console-improvements "Permalink")Console improvements

#### [#](#command-signature "Permalink")Command signature

Since 3.6 release Spiral offers the ability to define console commands using PHP attributes. This allows for a more
intuitive and streamlined approach to defining commands with clear separation of concerns.

Here's an example of defining a console command using attributes:

php

```
namespace App\Api\Cli\Command;

use Spiral\Console\Attribute\Argument;
use Spiral\Console\Attribute\AsCommand;
use Spiral\Console\Attribute\Option;
use Spiral\Console\Attribute\Question;
use Spiral\Console\Command;
use Symfony\Component\Console\Input\InputOption;

#[AsCommand(
    name: 'app:create:user', 
    description: 'Creates a user with the given data')
]
final class CreateUser extends Command
{
    #[Argument]
    private string $email;

    #[Argument(description: 'User password')]
    private string $password;

    #[Argument(name: 'username', description: 'The user name')]
    private string $userName;

    #[Option(shortcut: 'a', name: 'admin', description: 'Set the user as admin')]
    private bool $isAdmin = false;

    public function __invoke(): int
    {
        $user = new User(
            email: $this->email,
            password: $this->password,
        );
        
        $user->setIsAdmin($this->isAdmin);
        
        // Save user to database...

        return self::SUCCESS;
    }
}
```

#### [#](#named-sequences "Permalink")Named sequences

The Spiral now supports the creation of named sequences, allowing for the organization and reuse of command sequences.

php

```
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Console\Bootloader\ConsoleBootloader;

class MyPackageAssetsBootloader extends Bootloader
{
    public function init(ConsoleBootloader $console): void
    {
        $console->addSequence('publish:assets', PublishCssFilesCommand::class);
        $console->addSequence('publish:assets', PublishJsFilesCommand::class);
    }
}
```

Using the named sequences:

php

```
use Spiral\Console\Command\SequenceCommand;
use Psr\Container\ContainerInterface;
use Spiral\Console\Config\ConsoleConfig;

class PublishAssetsCommand extends SequenceCommand
{
    public function perform(ConsoleConfig $config, ContainerInterface $container): int
    {
        $this->info("Publishing assets:");
        $this->newLine();

        return $this->runSequence(
            $config->getSequence('publish:assets'), 
            $container
        );
    }
}
```

#### [#](#invoke-method "Permalink")`__invoke` method

Commands can now utilize the `__invoke` method as an alternative to the `perform` method, simplifying the command
definition.

php

```
class CheckHttpCommand extends Command 
{
    // ...

    public function __invoke(): int
    {
        // ...
    }
}
```

#### [#](#application-in-production-confirmation "Permalink")Application in production confirmation

A new feature ensures confirmation prompts are shown when attempting to perform sensitive operations in a production
environment.

php

```
use Spiral\Console\Confirmation\ApplicationInProduction;

final class MigrateCommand extends Command
{
    protected const NAME = 'db:migrate';
    protected const DESCRIPTION = '...';

    public function perform(ApplicationInProduction $confirmation): int
    {
        if (!$confirmation->confirmToProceed()) {
            return self::FAILURE;
        }
        
        // run migrations...
    }
}
```

#### [#](#new-helper-methods "Permalink")New helper methods

A suite of helper methods has been introduced to facilitate various command line interactions:

php

```
class SomeCommand extends Command 
{
    // ...

    public function perform(): int
    {
        // Determine if the input option is present.
        $this->hasOption(...);

        // Determine if the input argument is present.
        $this->hasArgument(...);

        // Ask for confirmation.
        $status = $this->confirm('Are you sure?', default: false): bool;

        // Ask a question.
        $status = $this->ask('Are you sure?', default: 'no'): mixed;

        // Prompt the user for input but hide the answer from the console.
        $status = $this->secret('User password'): string;

        // Write a message as information output.
        $this->info(...);

        // Write a message as comment output.
        $this->comment(...);

        // Write a message as question output.
        $this->question(...);

        // Write a message as error output.
        $this->error(...);

        // Write a message as warning output.
        $this->warning(...);

        // Write a message as alert output.
        $this->alert(...);

        // Write a message as standard output.
        $this->line(..., 'error');

        // Write a blank line.
        $this->newLine();

        $this->newLine(count: 5);
    }
}
```

#### [#](#console-command-interceptors "Permalink")Console command interceptors

Developers can now register custom interceptors for console commands, enhancing the control over command execution and
lifecycle.

> **See more**  
>  about console interceptors in the [documentation](console-interceptors__current__en.md)

#### [#](#output-object-replacing "Permalink")Output object replacing

It is now possible to replace the output object in console commands, allowing for customized output handling.

php

```
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class MyCommand extends \Spiral\Console\Command 
{
    protected function prepareOutput(InputInterface $input, OutputInterface $output): OutputInterface
    {
        return new \App\Console\MyOutput($input, $output);
    }
}
```

## [#](#container-refactoring "Permalink")Container refactoring

The Spiral Framework's container system has undergone significant refactoring, enhancing its flexibility and
capabilities. Below is a comprehensive guide detailing these improvements.

> **See more**  
>  about the container in the [documentation](container-overview__current__en.md)

### [#](#modular-container-design "Permalink")Modular Container Design

The container now operates on a modular basis, allowing for the replacement of individual modules with custom
implementations before the container's initialization. This change introduces greater flexibility in adapting the
container to specific project needs.

php

```
// Initialize shared container, bindings, directories and etc.
$app = App::create(
    directories: ['root' => __DIR__],
    container: new Spiral\Core\Container(
        config: new Spiral\Core\Config(
            resolver: App\CustomResolver::class
        )
    )
)->run();
```

### [#](#php-80-union-types-support "Permalink")PHP 8.0 Union Types Support

Support for PHP 8.0 Union types has been added, allowing for more expressive type declarations in your application's
codebase.

### [#](#variadic-arguments-support "Permalink")Variadic Arguments Support

The container now supports variadic arguments, providing more flexibility in how arguments are passed to methods and
functions:

- Arguments can be passed by parameter name, including both named and positional arguments within an array.
- Values can also be passed directly by parameter name.
- Positional trailing values are supported, enhancing how methods receive variable numbers of arguments.

### [#](#other-improvements-3 "Permalink")Other improvements

1. Added support for referenced parameters in the Resolver;
2. Support for a default object value;
3. The Factory is now more strict: no more arguments type conversion;
4. Added public method for arguments validation;
5. Support for `WeakReference` bindings;

## [#](#tokenizer "Permalink")Tokenizer

Since version 3.x the Spiral Framework has introduced tokenizer listeners to improve overall performance.

> **See more**  
>  about the tokenizer listeners in
> the [documentation](advanced-tokenizer__current__en.md#efficient-scanning-with-class-listeners)

## [#](#mailer "Permalink")Mailer

Since version 3.x the Spiral Framework has introduced ability to use custom transports for Symfony Mailer.

> **See more**  
>  about the transport in the [documentation](advanced-sendit__current__en.md#custom-mailer-transport)

## [#](#packages-for-spiral-framework-3x "Permalink")Packages for Spiral framework 3.x

The Spiral 3.x ecosystem is enriched with a variety of packages designed to extend its functionality and facilitate
development. Below is an overview of key packages available for Spiral Framework 3.0:

#### [#](#spiralroadrunner-bridge20 "Permalink")[`spiral/roadrunner-bridge:2.0`](https://github.com/spiral/roadrunner-bridge)

This package integrates Spiral with RoadRunner, supporting various plugins to enhance your application's capabilities,
including:

- HTTP
- Jobs
- KV (Key-Value storage)
- GRPC
- TCP
- Websockets

> **See more**  
>  about RoadRunner bridge in the [documentation](start-server__current__en.md#roadrunner-bridge)

#### [#](#spiralcycle-bridge20 "Permalink")[`spiral/cycle-bridge:2.0`](https://github.com/spiral/cycle-bridge)

Provides a bridge to Cycle ORM v2, enabling powerful object-relational mapping within Spiral. Supported packages
include:

- CycleOrm
- Database
- Migrations

> **See more**  
>  about Cycle ORM in the [documentation](basics-orm__current__en.md)

#### [#](#spiraltemporal-bridge20 "Permalink")[`spiral/temporal-bridge:2.0`](https://github.com/spiral/temporal-bridge)

Offers integration with Temporal for writing and running reliable cloud applications. Temporal provides a robust
platform for building scalable applications.

> **See more**  
>  about Temporal in the [documentation](temporal-configuration__current__en.md)

#### [#](#spiraltesting20 "Permalink")[`spiral/testing:2.0`](https://github.com/spiral/testing)

A testing SDK designed specifically for the Spiral, facilitating easy and efficient testing of your applications.

> **See more**  
>  about testing in the [documentation](testing-start__current__en.md)

#### [#](#spiral-packagesdatabase-seeder "Permalink")[`spiral-packages/database-seeder`](https://github.com/spiral-packages/database-seeder)

This package provides the capability to seed your database with data using seed classes, enhancing the data setup
process for development and testing.

> **See more**  
>  about database seeding in the [documentation](testing-database__current__en.md)

#### [#](#spiral-packagesnotifications20 "Permalink")[`spiral-packages/notifications:2.0`](https://github.com/spiral-packages/notifications)

Enables sending notifications across various channels from the Spiral, simplifying the process of keeping users
informed.

> **See more**  
>  about notifications in the [documentation](advanced-notifications__current__en.md)

#### [#](#spiral-packagesscheduler20 "Permalink")[`spiral-packages/scheduler:2.0`](https://github.com/spiral-packages/scheduler)

Assists in managing scheduled tasks on your server, providing a streamlined way to handle cron jobs and other scheduled
operations.

> **See more**  
>  about the scheduler in the [documentation](advanced-scheduler__current__en.md)

#### [#](#spiral-packagescqrs20 "Permalink")[`spiral-packages/cqrs:2.0`](https://github.com/spiral-packages/cqrs)

Implements the Command/Query Responsibility Segregation (CQRS) pattern within the Spiral, facilitating clear separation
of command and query operations.

#### [#](#spiral-packagessigned-urls10 "Permalink")[`spiral-packages/signed-urls:1.0`](https://github.com/spiral-packages/signed-urls)

Facilitates the creation and validation of signed URLs in Spiral, offering a secure way to generate and verify access
links.

← PREVIOUS
[Queue system](cookbook-simple-queue-system__current__en.md)
