# Spiral Framework: Queue and Jobs - Interceptors

> **Fonte / Source:** https://spiral.dev/docs/queue-interceptors/current/en

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

[Edit this page](https://github.com/spiral/docs/edit/3.16/docs/en/queue/interceptors.md)

# Queue — Interceptors

- [Interceptor for Push](#interceptor-for-push)
- [Interceptor for Consume](#interceptor-for-consume)
- [Registering a new Interceptor](#registering-a-new-interceptor)
  - [Via configuration](#via-configuration)
- [Examples](#examples)
  - [Retry policy for failed jobs](#retry-policy-for-failed-jobs)

Spiral provides a way for developers to customize the behavior of their job processing pipeline through the
use of interceptors. An interceptor is a piece of code that is executed before or after a job is pushed or consumed, and
which allows developers to hook into the job processing pipeline to perform some action.

> **See more**  
> Read more about interceptors in the [Framework — Interceptors](framework-interceptors__current__en.md) section.

Interceptors can be useful for a variety of purposes, such as handling errors, adding additional context to the job, or
performing some other action based on the job being processed.

To use interceptors you will need to implement the `Spiral\Interceptors\InterceptorInterface` interface. This interface
requires you to implement the `intercept` method.

## [#](#interceptor-for-push "Permalink")Interceptor for Push

Here is an example of a simple interceptor that logs a message before and after a job is pushed:

php

```
namespace App\Application\Job\Interceptor;

use Psr\Log\LoggerInterface;
use Spiral\Interceptors\Context\CallContextInterface;
use Spiral\Interceptors\HandlerInterface;
use Spiral\Interceptors\InterceptorInterface;

final class LogInterceptor implements InterceptorInterface
{
    public function __construct(
        private readonly LoggerInterface $logger,
    ) {}

    public function intercept(CallContextInterface $context, HandlerInterface $handler): mixed
    {
        $target = $context->getTarget();

        $this->logger->info('Job pushing...', [
            'target' => (string) $target,
        ]);

        $id = $handler->handle($context);

        $this->logger->info('Job pushed', [
            'id' => $id,
            'target' => (string) $target,
        ]);

        return $id;
    }
}
```

To use this interceptor, you will need to register it in the configuration file `app/config/queue.php`.

php

app/config/queue.php

```
use App\Application\Job\Interceptor\LogInterceptor;

return [    
    'interceptors' => [
        'push' => [
            LogInterceptor::class,
        ],
        'consume' => [
            //...
        ],
    ],
    // ...
];
```

> **Note**  
> The handler's `handle` method will push and return the `id` string.

## [#](#interceptor-for-consume "Permalink")Interceptor for Consume

To create an interceptor, you need to create a class and implement the interface `Spiral\Interceptors\InterceptorInterface`.
The handler's `handle` method will execute a consuming job, it doesn't return anything.

Let's create an `JobExceptionsHandlerInterceptor` that reports exceptions when a job fails:

php

```
namespace App\Application\Job\Interceptor;

use Spiral\Exceptions\ExceptionReporterInterface;
use Spiral\Interceptors\Context\CallContextInterface;
use Spiral\Interceptors\HandlerInterface;
use Spiral\Interceptors\InterceptorInterface;

final class JobExceptionsHandlerInterceptor implements InterceptorInterface
{
    public function __construct(
        private readonly ExceptionReporterInterface $reporter,
    ) {}

    public function intercept(CallContextInterface $context, HandlerInterface $handler): mixed
    {
        try {
            return $handler->handle($context);
        } catch (\Throwable $e) {
            $this->reporter->report($e);
            throw $e;
        }
    }
}
```

To use this interceptor, you will need to register it in the configuration file `app/config/queue.php`.

php

app/config/queue.php

```
use App\Application\Job\Interceptor\JobExceptionsHandlerInterceptor;
use Spiral\Core\Container\Autowire;

return [    
    'interceptors' => [
        'consume' => [
            new Autowire(JobExceptionsHandlerInterceptor::class),
        ],
        //...
    ],
    // ...
];
```

## [#](#registering-a-new-interceptor "Permalink")Registering a new Interceptor

There are several ways to add a new interceptor.

### [#](#via-configuration "Permalink")Via configuration

Add it to the configuration file `app/config/queue.php`.

php

app/config/queue.php

```
use App\CustomInterceptor;
use Spiral\Core\Container\Autowire;

return [    
    /**
     * -------------------------------------------------------------------------
     *  List of all interceptors
     * -------------------------------------------------------------------------
     */
     'interceptors' => [
        // interceptors for push
        'push' => [
            // via fully qualified class name
            CustomInterceptor::class,
        
            // via Autowire
            new Autowire(CustomInterceptor::class),     
            
            // via interceptor instance
            new CustomInterceptor(),
        ],
        
        // interceptors for consume
        'consume' => [
            // via fully qualified class name
            CustomInterceptor::class,
        
            // via Autowire
            new Autowire(CustomInterceptor::class),     
            
            // via interceptor instance
            new CustomInterceptor(),
        ],
     ],
];
```

#### [#](#via-queuebootloader "Permalink")Via QueueBootloader

Call the method `addPushInterceptor` to add an interceptor for the `push` action. Or call the
method `addConsumeInterceptor` to add an interceptor for the `consume` action in
the `Spiral\Queue\Bootloader\QueueBootloader` class.

php

app/src/Application/Bootloader/AppBootloader.php

```
namespace App\Application\Bootloader;

use App\Interceptor\CustomInterceptor;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Core\Container\Autowire;
use Spiral\Queue\Bootloader\QueueBootloader;

class AppBootloader extends Bootloader
{
    public function boot(QueueBootloader $queue): void
    {
        // via fully qualified class name
        $queue->addPushInterceptor(CustomInterceptor::class);
        $queue->addConsumeInterceptor(CustomInterceptor::class);

        // via Autowire
        $queue->addPushInterceptor(new Autowire(CustomInterceptor::class));
        $queue->addConsumeInterceptor(new Autowire(CustomInterceptor::class));
        
        // via interceptor instance
        $queue->addPushInterceptor(new CustomInterceptor());
        $queue->addConsumeInterceptor(new CustomInterceptor());
    }
}
```

## [#](#examples "Permalink")Examples

### [#](#retry-policy-for-failed-jobs "Permalink")Retry policy for failed jobs

It provides a robust and flexible retry mechanism for failed jobs. Implementing a retry policy is essential in a
distributed system, as it ensures that transient issues, such as network failures or temporary resource unavailability,
do not cause the system to lose important messages or data.

The interceptor's primary responsibility is to execute the given job and monitor it for any exceptions. If an exception
is thrown, the interceptor logs the error, updates the job's attempt count, and throws a `RetryException` with the
updated attempt count and delay. This allows the job to be re-enqueued with the new information, ensuring that it is
retried as per the specified policy.

When the consumer encounters a RetryException, it understands that the job should be returned to the queue with the
updated options provided within the exception. This enables the job to be retried according to the specified policy,
improving the overall reliability of the system by allowing jobs to recover from transient issues.

php

```
namespace App\Endpoint\Job\Interceptor;

use Psr\Log\LoggerInterface;
use Spiral\Exceptions\ExceptionReporterInterface;
use Spiral\Interceptors\Context\CallContextInterface;
use Spiral\Interceptors\HandlerInterface;
use Spiral\Interceptors\InterceptorInterface;
use Spiral\Queue\Exception\RetryException;
use Spiral\Queue\Options;

final class RetryPolicyInterceptor implements InterceptorInterface
{
    public function __construct(
        private readonly LoggerInterface $logger,
        private readonly ExceptionReporterInterface $reporter,
        private readonly int $maxAttempts = 3,
        private readonly int $delay = 5,
    ) {}

    public function intercept(CallContextInterface $context, HandlerInterface $handler): mixed
    {
        try {
            return $handler->handle($context);
        } catch (\Throwable $e) {
            $this->reporter->report($e);

            $headers = $context->getAttribute('headers', []);
            $attempts = (int) ($headers['attempts'] ?? $this->maxAttempts);

            if ($attempts === 0) {
                $this->logger->warning('Attempt to execute job failed', [
                    'target' => (string) $context->getTarget(),
                ]);
                return null;
            }

            throw new RetryException(
                reason: $e->getMessage(),
                options: (new Options())->withDelay($this->delay)->withHeader('attempts', (string)($attempts - 1)),
            );
        }
    }
}
```

The interceptor will attempt to process the job a specified number of times (`$maxAttempts`) before giving up. It also
includes a configurable delay (`$delay`) between each retry attempt, which can be helpful in avoiding retry storms in
the system.

One of the key advantages of using this interceptor, is that it enables developers to handle exceptions and apply retry
policies in a centralized, consistent manner. This approach leads to cleaner, more maintainable code, as it abstracts
away the error-handling logic from individual job handlers.

← PREVIOUS
[RoadRunner integration](queue-roadrunner__current__en.md)
