# Spiral Framework: Cookbook - Queue system

> **Fonte / Source:** https://spiral.dev/docs/cookbook-simple-queue-system/current/en

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

[Edit this page](https://github.com/spiral/docs/edit/3.16/docs/en/cookbook/simple-queue-system.md)

# Configuring RoadRunner Queue Pipelines

- [Producer](#producer)
  - [Configuration](#configuration)
  - [Pushing jobs](#pushing-jobs)
- [Consumer](#consumer)
  - [Configuration](#configuration)
  - [Job](#job)
  - [Retry policy](#retry-policy)
- [Want more? Unlock the Power of Advanced Workflow Orchestration](#want-more-unlock-the-power-of-advanced-workflow-orchestration)
  - [Let’s dive into an example that showcases the beauty of Temporal](#let-s-dive-into-an-example-that-showcases-the-beauty-of-temporal)

Job queues have become an indispensable component in modern PHP applications, handling complex, resource-intensive tasks
and delivering substantial enhancements to application performance.

One solution that harnesses the power of Go for PHP applications is RoadRunner, in conjunction with the Spiral
Framework. This tutorial, will guide you through configuring queue pipelines for RoadRunner in Spiral applications,
offering a high-performing, robust queue service solution.

> **Note**  
> This tutorial covers the basics of the components and approaches. For more detailed information, we suggest referring
> to the relevant sections.

Our application will consist of two types of applications:

1. **Producer** - will push jobs into a queue
2. **Consumer** - will receive queued tasks and handle them

## [#](#producer "Permalink")Producer

To get started with building **producer** application, you can easily install the default `spiral/app` bundle with most
of the required components by running the following command:

```
composer create-project spiral/app my-app
```

During the installation process, you will be prompted to select various options with the Spiral installer, such as the
application preset, whether to use Cycle ORM, which collections to use, which validator component to use, and so on.
In our example we will use CLi application that will push a task into a queue from console command.

For this tutorial, we recommend choosing the options shown above:

```
✔ Which application preset do you want to install? > Cli

✔ Create a default application structure and demo data? > No

✔ Do you need Cycle ORM? > No

✔ Do you want to use Queue component? > Yes

✔ Do you want to use Cache component? > No

✔ Do you want to use Mailer Component? > No

✔ Do you want to use Storage component? > No

✔ Do you need RoadRunner? > Yes

✔ Do you need the RoadRunner Metrics? > No

✔ Do you need the Temporal? > No
```

Once the installation is complete, you need to configure RoadRunner queue pipelines, where you will push your jobs.

First of all you need to configure RoadRunner server to use `jobs` plugin:

yaml

.rr.yaml

```
amqp:
  addr: amqp://guest:guest@127.0.0.1:5672

jobs:
  consume: [ ]
  pipelines: { }
```

> **Note**  
> You can read more about RoadRunner Jobs plugin configuration
> in the [official documentation](https://roadrunner.dev/docs/queues-overview)

As you can see we didn't specify any pipelines in our configuration. RoadRunner provides the ability to create pipelines
dynamically, so we will create them later in our application.

Once the configuration is complete, you can start the server. RoadRunner
uses [RPC](https://roadrunner.dev/docs/php-rpc/2023.x/en) to communicate between PHP application and RoadRunner, so we
need to start it before pushing jobs into a queue.

Let's check if everything work fine using the following command:

```
./rr serve
```

### [#](#configuration "Permalink")Configuration

The configuration of Spiral applications is accomplished through configuration files located in the `app/config`
directory.

Let's define our first pipeline in the `app/config/queue.php` file:

php

app/config/queue.php

```
use Spiral\RoadRunner\Jobs\Queue\AMQPCreateInfo;

return [
    'default' => env('QUEUE_CONNECTION', 'roadrunner'),

    'pipelines' => [
         'default' => [
             'connector' => new AMQPCreateInfo(
                  name: 'default',
                  priority: 100,
                  queue: 'default',
             ),
             // Do not consume jobs for this pipeline on startup
             'consume' => false,
         ],
    ],
    
    'connections' => [
        'roadrunner' => [
            'driver' => 'roadrunner',
            'pipeline' => 'default',
        ],
    ],
];
```

> **Note**  
> You can read more about roadrunner queue configuration in the [Queue — RoadRunner integration](queue-roadrunner__current__en.md)
> section.

Let's define our first pipeline in the `.rr.yaml` file:

yaml

```
amqp:
  addr: amqp://guest:guest@127.0.0.1:5672

jobs:
  consume: [ ]
  pipelines:
    default:
      driver: amqp
      priority: 100
      queue: default
```

And select defined pipeline in the `app/config/queue.php` file:

php

app/config/queue.php

```
use Spiral\RoadRunner\Jobs\Queue\AMQPCreateInfo;

return [
    'default' => env('QUEUE_CONNECTION', 'roadrunner'),

    'pipelines' => [],
    
    'connections' => [
        'roadrunner' => [
            'driver' => 'roadrunner',
            'pipeline' => 'default',
        ],
    ],
];
```

> **Note**  
> You can read more about roadrunner queue configuration in the [Queue — RoadRunner integration](queue-roadrunner__current__en.md)
> section.

When you run the `./rr serve` command, RoadRunner will create a pipeline with the name `default` and will use the
`roadrunner` connection to push jobs into the queue by default.

### [#](#pushing-jobs "Permalink")Pushing jobs

Let's add some logic to it:

php

app/src/Endpoint/Console/PingCommand.php

```
namespace App\Endpoint\Console;

use Spiral\Console\Attribute\AsCommand;
use Spiral\Console\Command;
use Spiral\Queue\QueueInterface;

#[AsCommand(name: 'ping')]
final class PingCommand extends Command
{
    public function __invoke(QueueInterface $queue): int
    {
        $queue->push('ping', [
            'url' => 'https://spiral.dev',
        ]);

        return self::SUCCESS;
    }
}
```

In case if we use an `array` payload we can use simple serializer, like `json`.

> **Note**  
> Read more about available serializers in the [Component — Serializer](advanced-serializer__current__en.md) section.

Let's define a default serializer in the `app/config/queue.php` file:

php

app/config/queue.php

```
return [
    // ...
    'defaultSerializer' => 'json',
];
```

> **Note**  
> Read more about job payload serialization in the [Queue — Running Jobs](queue-jobs__current__en.md#job-payload-serialization)
> section.

php

app/src/Application/Kernel.php

```
public function defineBootloaders(): array
{
    return [
        // ...
        \Spiral\Serializer\Symfony\Bootloader\SerializerBootloader::class,
        // ...
    ];
}
```

Read more about bootloaders in the [Framework — Bootloaders](framework-bootloaders__current__en.md) section.

php

app/src/Application/Kernel.php

```
protected const LOAD = [
    // ...
    \Spiral\Serializer\Symfony\Bootloader\SerializerBootloader::class,
    // ...
];
```

Read more about bootloaders in the [Framework — Bootloaders](framework-bootloaders__current__en.md) section.

And define default serializer in the `app/config/queue.php` file:

php

app/config/queue.php

```
return [
    // ...
    'defaultSerializer' => 'symfony-json',
];
```

> **Note**  
> Read more about job payload serialization in the [Queue — Running Jobs](queue-jobs__current__en.md#job-payload-serialization)
> section.

That's it! Now you can push jobs into a queue using object payload and it will be automatically serialized and
sent to a queue as a JSON string.

Let's create first a DTO class that will carry all the data we need:

php

app/src/DTO/Ping.php

```
namespace App\DTO;

final class Ping 
{
    public function __construct(
        public readonly string $url,
    ) {}
}
```

Now we can use it as a payload to push a job into a queue:

php

app/src/Endpoint/Console/PingCommand.php

```
namespace App\Endpoint\Console;

use Spiral\Console\Attribute\AsCommand;
use Spiral\Console\Command;
use Spiral\Queue\QueueInterface;
use App\DTO\PingDTO;

#[AsCommand(name: 'ping')]
final class PingCommand extends Command
{
    public function __invoke(QueueInterface $queue): int
    {
        $queue->push('ping', new Ping(url: 'https://spiral.dev'));

        return self::SUCCESS;
    }
}
```

:::

::::

Once we created a console command `ping`, we can push a job into a queue.

First, we need to start the RoadRunner server:

```
./rr serve
```

and then run our command:

```
php app.php ping
```

## [#](#consumer "Permalink")Consumer

To get started with building **consumer** application, you can easily install the default `spiral/app` bundle with most
of the required components by running the following command:

```
composer create-project spiral/app my-consumer-app
```

For consumer, we need also `Queue component` and `RoadRunner`. Other components are optional and you can choose which
one you need during the installation process.

```
✔ Which application preset do you want to install? > Cli

✔ Create a default application structure and demo data? > No

✔ Do you want to use Queue component? > Yes

✔ Do you need RoadRunner? > Yes
```

Once the installation is complete, you need to configure RoadRunner queue pipelines, where you will push your jobs.

First of all you need to configure RoadRunner server to use `jobs` plugin:

yaml

.rr.yaml

```
amqp:
  addr: amqp://guest:guest@127.0.0.1:5672

jobs:
  consume: [ ]
  pipelines: { }
```

> **Note**  
> `amqp` section should be the same as in the producer application. **Consumer and Producer should use the same AMQP
> server.**

### [#](#configuration-1 "Permalink")Configuration

Let's define our pipeline in the `app/config/queue.php` file:

php

app/config/queue.php

```
use Spiral\RoadRunner\Jobs\Queue\AMQPCreateInfo;

return [
    'default' => env('QUEUE_CONNECTION', 'roadrunner'),

    'pipelines' => [
         'default' => [
             'connector' => new AMQPCreateInfo(
                  name: 'default',
                  priority: 100,
                  queue: 'default',
             ),
             'consume' => true, // <===== Enables consuming
         ],
    ],
    
    'connections' => [
        'roadrunner' => [
            'driver' => 'roadrunner',
            'pipeline' => 'default',
        ],
    ],
];
```

> **Note**  
> The only difference between consumer and producer configuration is that consumer should have `consume` option set to
> `true`. In this case, RoadRunner will automatically consume jobs from the AMQP server.

Let's define our pipeline in the `.rr.yaml` file:

yaml

```
amqp:
  addr: amqp://guest:guest@127.0.0.1:5672

jobs:
  consume: [ default ]  # <===== Enables consuming
  pipelines:
    default:
      driver: amqp
      priority: 100
      queue: default
```

> **Note**  
> The only difference between consumer and producer configuration is that consumer should have `jobs.consume` option
> contains `default` pipeline name. In this case, RoadRunner will automatically consume jobs from the AMQP server.

### [#](#job "Permalink")Job

When a job is going to be consumed, it will be passed to the job handler class that has all the logic to handle it.

> **Note**  
> Read more about job handlers in the [Queue — Job Handlers](queue-jobs__current__en.md) section.

Let's create our first job using scaffolder:

```
php app.php create:jobHandler Ping
```

> **Note**  
> You can read more about scaffolding in the [Basics — Scaffolding](basics-scaffolding__current__en.md) section.

After running this command, you will see the following output:

```
Declaration of 'PingJob' has been successfully written into '~/my-app/app/src/Endpoint/Job/PingJob.php'.
```

We've just created a job handler that will be used to handle our jobs.

Let's add some logic to it:

If you are using a JSON payload, you can use simple serializer like `json` to deserialize a payload received from a
queue.

Let's define a default serializer in the `app/config/queue.php` file:

php

app/config/queue.php

```
return [
    // ...
    'defaultSerializer' => 'json',
];
```

Now let's add some logic to our job handler:

php

app/src/Endpoint/Job/PingJob.php

```
namespace App\Endpoint\Job;

use Psr\Log\LoggerInterface;
use Spiral\Queue\JobHandler;
use App\DTO\Ping;

final class PingJob extends JobHandler
{
    public function invoke(
        LoggerInterface $logger, 
        string $id, 
        Ping $payload, 
        array $headers,
    ): void {
        $logger->info('Ping job received', [
            'id' => $id,
            'url' => $payload->url,
            'headers' => $headers,
        ]);
    }
}
```

Our job handler will just log all the data received from the queue.

Spiral Queue component provides several way to understand what class should be used to deserialize a payload.

1. If you push an object into a queue, a component will also send a class name as a header `x-job-class`. In this case,
   you can use `spiral-packages/symfony-serializer` package we mentioned above to deserialize a payload.
2. It there is no `x-job-class` header, but you specified class type for `payload` argument in the `invoke` method, a
   component will try to deserialize a payload using the specified type.

> **Warning**  
> Please pay attention that if you use header `x-job-class` to specify a class name, you should have this class with
> the same namespace in both producer and consumer applications. Probably you need to consider using Shared Repository
> to share your DTO between applications.

Let's define a default serializer in the `app/config/queue.php` file:

php

app/config/queue.php

```
return [
    // ...
    'defaultSerializer' => 'symfony-json',
];
```

And create a class in which we will deserialize our payload:

php

app/src/DTO/Ping.php

```
namespace App\DTO;

final class Ping 
{
    public function __construct(
        public readonly string $url,
    ) {}
}
```

Now let's add some logic to our job handler:

php

app/src/Endpoint/Job/PingJob.php

```
namespace App\Endpoint\Job;

use Psr\Log\LoggerInterface;
use Spiral\Queue\JobHandler;

final class PingJob extends JobHandler
{
    public function invoke(
        LoggerInterface $logger, 
        string $id, 
        array $payload,
        array $headers,
    ): void {
        $logger->info('Ping job received', [
            'id' => $id,
            'payload' => $payload,
            'headers' => $headers,
        ]);
    }
}
```

When we push a job into a queue using `push` method, we specified a task name `ping` in first argument. Now we need to
tell consumer that if it receives a job with this task name, it should be handled by `PingJob` handler.

Let's connect our job handler with the task name in the `app/config/queue.php` file:

php

app/config/queue.php

```
return [
    // ...
    'registry' => [
        'handlers' => [
            'ping' => App\Endpoint\Job\PingJob::class
        ],
    ],
];
```

> **Note**  
> You can read more about job handlers registry in the [Queue — Job Handlers](queue-jobs__current__en.md#job-handler-registry)
> section.

After all these steps, we are ready to consume jobs from the queue.

Let's run RoadRunner server:

```
./rr serve
```

And push a job into a queue from producer application:

```
php app.php ping
```

### [#](#retry-policy "Permalink")Retry policy

Let's imagine that we have a job that should be retried if it fails. For example, we have a job that sends a request to
a remote server. If the server is not available, we should retry this job after some time.

In this case we can use job headers and queue interceptors to implement retry policy.

> **Note**  
> Read more about queue interceptors in the [Queue — Interceptors](queue-interceptors__current__en.md) section.

Let's create an interceptor that will catch all the exceptions in a job handler and try to retry it after some time:

php

app/src/Endpoint/Job/Interceptor/RetryPolicyInterceptor.php

```
namespace App\Endpoint\Job\Interceptor;

use Carbon\Carbon;
use Psr\Log\LoggerInterface;
use Spiral\Core\CoreInterceptorInterface;
use Spiral\Core\CoreInterface;
use Spiral\Exceptions\ExceptionReporterInterface;
use Spiral\Queue\Exception\FailException;
use Spiral\Queue\Exception\RetryException;
use Spiral\Queue\Options;

final class RetryPolicyInterceptor implements CoreInterceptorInterface
{
    public function __construct(
        private readonly LoggerInterface $logger,
        private readonly ExceptionReporterInterface $reporter,
        private readonly int $maxAttempts = 3,
        private readonly int $delayInSeconds = 5,
    ) {
    }

    public function process(string $controller, string $action, array $parameters, CoreInterface $core): mixed
    {
        try {
        
            // Try to execute a job handler
            return $core->callAction($controller, $action, $parameters);
            
        } catch (\Throwable $e) {
        
            // Report an exception
            $this->reporter->report($e);
            
            $headers = $parameters['headers'] ?? [];
            
            // Get attempts count from headers or if it the first attempt, use max attempts count
            $attempts = (int)($headers['attempts'] ?? $this->maxAttempts);
            
            // If attempts are over, throw a FailException
            if ($attempts === 0) {
                $this->logger->warning('Job handling failed: ['.$e->getMessage().']');
                
                throw new FailException($e->getMessage(), $e->getCode(), $e);
            }

            throw new RetryException(
                reason: $e->getMessage(),
                options: (new Options())->withDelay($this->delay)->withHeader('attempts', (string)($attempts - 1))
            );
        }
    }
}
```

Now we need to register our interceptor in the `app/config/queue.php` file:

php

app/config/queue.php

```
use App\Endpoint\Job\Interceptor\RetryPolicyInterceptor;

return [    
    // ...
    'interceptors' => [
        'consume' => [
            RetryPolicyInterceptor::class,
        ],
    ],
];
```

Now if our job handler fails, it will be retried after 5 seconds. After 3 attempts, the job will be marked as failed.

## [#](#want-more-unlock-the-power-of-advanced-workflow-orchestration "Permalink")Want more? Unlock the Power of Advanced Workflow Orchestration

Spiral Framework provides an integration with [Temporal](https://temporal.io/), a powerful workflow orchestration tool
that allows you to build complex workflows. Now, if you’re familiar with queue services like RoadRunner, you’re in for a
treat because Temporal IO takes workflow management to a whole new level. It’s like having superpowers for handling
complex workflows in a simple and elegant manner.

In the world of PHP development, we often find ourselves juggling various tasks and processes that need to be executed
in a specific order. That’s where Temporal shines. It allows us to write expressive and powerful workflows in a way
that’s easy to understand and maintain.

### [#](#lets-dive-into-an-example-that-showcases-the-beauty-of-temporal "Permalink")Let’s dive into an example that showcases the beauty of Temporal

Imagine you have a task of handling user subscriptions on a monthly basis. With Temporal, it becomes a straightforward
process. Here’s a simple example to illustrate it:

php

```
<?php
/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Temporal\Samples\Subscription;

use Carbon\CarbonInterval;
use Temporal\Activity\ActivityOptions;
use Temporal\Exception\Failure\CanceledFailure;
use Temporal\Workflow;

/**
 * Demonstrates a long-running process to represent a user subscription workflow.
 */
class SubscriptionWorkflow implements SubscriptionWorkflowInterface
{
    private $account;

    // Workflow logic goes here...

    public function subscribe(string $userID)
    {
        yield $this->account->sendWelcomeEmail($userID);

        try {
            $trialPeriod = true;
            while (true) {
                // Lower the period duration to observe workflow behavior
                yield Workflow::timer(CarbonInterval::days(30));

                if ($trialPeriod) {
                    yield $this->account->sendEndOfTrialEmail($userID);
                    $trialPeriod = false;
                    continue;
                }

                yield $this->account->chargeMonthlyFee($userID);
                yield $this->account->sendMonthlyChargeEmail($userID);
            }
        } catch (CanceledFailure $e) {
            yield Workflow::asyncDetached(
                function () use ($userID) {
                    yield $this->account->processSubscriptionCancellation($userID);
                    yield $this->account->sendSorryToSeeYouGoEmail($userID);
                }
            );
        }
    }
}
```

In this example, the `subscribe` method represents the workflow logic for managing monthly subscriptions. The magic lies
in the `Workflow::timer` function, which allows you to schedule a specific duration for each iteration of the loop.

By setting the timer to `CarbonInterval::months(1)`, you can ensure that the subscription tasks are executed every
month. Temporal takes care of the scheduling and coordination, freeing you from the hassle of managing it manually.

Moreover, Temporal provides built-in fault tolerance and scalability. If an exception occurs, such as
a `CanceledFailure` indicating a subscription cancellation, you can handle it gracefully within the workflow.

With Temporal, managing complex periodic workflows like monthly subscriptions becomes a breeze.

← PREVIOUS
[Realtime chat application](cookbook-simple-chat__current__en.md)

NEXT →
[Migration from v2.x](cookbook-migration-from-v2__current__en.md)
