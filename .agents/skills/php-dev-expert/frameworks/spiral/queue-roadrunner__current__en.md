# Spiral Framework: Queue and Jobs - RoadRunner integration

> **Fonte / Source:** https://spiral.dev/docs/queue-roadrunner/current/en

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

[Edit this page](https://github.com/spiral/docs/edit/3.16/docs/en/queue/roadrunner.md)

# Queue — RoadRunner integration

- [Installation](#installation)
- [Configuration](#configuration)
  - [Declaring pipelines in .rr.yaml](#declaring-pipelines-in-.rr.yaml)
  - [Declaring pipelines in configuration file](#declaring-pipelines-in-configuration-file)
- [Usage](#usage)
  - [Options](#options)
- [Custom driver](#custom-driver)

Spiral has full integration with [RoadRunner jobs](https://roadrunner.dev/docs/queues-overview) plugin, which provides
a unified queueing API for a variety of queue brokers such as:

- [Kafka](https://roadrunner.dev/docs/queues-kafka),
- [AMQP (RabbitMQ)](https://roadrunner.dev/docs/queues-amqp),
- [Amazon SQS](https://roadrunner.dev/docs/queues-sqs),
- [Beanstalk](https://roadrunner.dev/docs/queues-beanstalk),
- and [memory](https://roadrunner.dev/docs/queues-memory) driver.

> **Note**  
> For more information on supported brokers, please visit the [official site](https://roadrunner.dev/docs/plugins-jobs).

To enable the integration with RoadRunner, Spiral provides built-in support through
the [spiral/roadrunner-bridge](start-server__current__en.md#roadrunner-bridge) package.

> **Warning**  
> Actual version of the `spiral/roadrunner-bridge` package is `3.0`. If you are using older version of the package,
> some of the features described in this document may not be available.

## [#](#installation "Permalink")Installation

To get started, you need to install [Roadrunner bridge](start-server__current__en.md#roadrunner-bridge) package. Once installed,
add the `Spiral\RoadRunnerBridge\Bootloader\QueueBootloader` to the list of bootloaders in your Kernel class:

php

app/src/Application/Kernel.php

```
public function defineBootloaders(): array
{
    return [
        // ...
        \Spiral\RoadRunnerBridge\Bootloader\QueueBootloader::class,
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
    \Spiral\RoadRunnerBridge\Bootloader\QueueBootloader::class,
    // ...
];
```

Read more about bootloaders in the [Framework — Bootloaders](framework-bootloaders__current__en.md) section.

By doing this, an additional queue driver named `roadrunner` will be registered automatically. You can then add a new
queue connection for RoadRunner in your `app/config/queue.php` configuration file.

## [#](#configuration "Permalink")Configuration

RoadRunner provides two ways to declare pipelines:

- Using a `.rr.yaml` configuration file to declare pipelines and brokers.
- Declaring pipelines on the fly in your application's `app/config/queue.php`.

### [#](#declaring-pipelines-in-rryaml "Permalink")Declaring pipelines in `.rr.yaml`

This is the most common way to declare pipelines. But in this way, you can only declare static pipelines.

> **Note**  
> If you need to declare dynamic pipelines, you should consider using the second way.

**Here's a simple example:**

yaml

.rr.yaml

```
amqp:
  addr: amqp://guest:guest@localhost:5672

jobs:
  consume: [ "in-memory", "high-priority" ]
  pipelines:
    in-memory:
      driver: memory
      config:
        priority: 10
    high-priority:
      driver: amqp
      config:
        priority: 1
```

In this case your `app/config/queue.php` configuration file should look like this:

php

app/config/queue.php

```
return [
    'default' => env('QUEUE_CONNECTION', 'roadrunner'),

    'connections' => [
        'roadrunner' => [
            'driver' => 'roadrunner',
            'pipeline' => 'in-memory', // Pipeline name from .rr.yaml
        ],
    ],
];
```

### [#](#declaring-pipelines-in-configuration-file "Permalink")Declaring pipelines in configuration file

This method is useful when you need to declare dynamic pipelines or if you just want to keep all your configuration
in one place.

**There are some benefits to this approach:**

- **Flexibility**: With dynamic pipeline declaration, you can create pipelines on-the-fly based on the current state of
  your application.
- **Control**: You have more control over the creation and management of pipelines within your application. You can
  create pipelines only when they are needed and remove them when they are no longer required, reducing unnecessary
  overhead.

You can create dynamic pipelines to distribute workload across multiple queue brokers or to balance the load across
multiple workers. This can be useful in large-scale applications where job processing needs to be distributed across
multiple servers or instances.

**Here's a simple example:**

php

app/config/queue.php

```
use Spiral\RoadRunner\Jobs\Queue\MemoryCreateInfo;
use Spiral\RoadRunner\Jobs\Queue\AMQPCreateInfo;

return [
    'default' => env('QUEUE_CONNECTION', 'rr-amqp'),

    'pipelines' => [
         'high-priority' => [
             'connector' => new AMQPCreateInfo(
                  name: 'high-priority',
                  priority: 1,
                  queue: 'default',
             ),
             'consume' => true, // Consume jobs for this pipeline on startup
         ],
         'low-priority' => [
             'connector' => new AMQPCreateInfo(
                  name: 'low-priority',
                  priority: 100,
                  queue: 'default',
             ),
             'consume' => false, // Do not consume jobs for this pipeline on startup
         ],
         'in-memory' => [
            'connector' => new MemoryCreateInfo(name: 'local'),
            'consume' => true, 
         ]
    ],
            
    'connections' => [
        // ...
        'rr-amqp' => [
            'driver' => 'roadrunner',
            'pipeline' => 'low-priority',
        ],
        'rr-memory' => [
            'driver' => 'roadrunner',
            'pipeline' => 'in-memory',
        ],
    ],
];
```

> **Warning**  
> All the pipelines defined with `'consume' => true` will be initialized during application bootstrapping. This means
> that all the jobs pushed to these pipelines will be consumed immediately. All the pipelines with `'consume' => false`
> will be initialized only when you push a job to them.

In some cases, you may need to create a pipeline with custom default options or in cases where the options are
mandatory. For example, you may want to create a pipeline for Kafka broker, which requires additional options to be set.

php

app/config/queue.php

```
use Spiral\RoadRunner\Jobs\Queue\KafkaCreateInfo;
use Spiral\RoadRunner\Jobs\KafkaOptions;

'pipelines' => [
    'event-bus' => [
        'connector' => new KafkaCreateInfo(name: 'kafka', topic: 'events', ...),
        'options' => new KafkaOptions(topic: 'events', ...),
        'consume' => true, 
    ]
],
```

## [#](#usage "Permalink")Usage

By default, when you push a job to the queue using the `roadrunner` driver, the job will be pushed to the default
pipeline defined in your `app/config/queue.php` configuration file.

php

```
'rr-amqp' => [
    'driver' => 'roadrunner',
    'pipeline' => 'low-priority',
],
```

If you want to push a job to a specific pipeline, you can specify the pipeline name
using `Spiral\Queue\Options::onQueue` method.

php

```
use App\Endpoint\Job\SampleJob;
use Spiral\Queue\QueueInterface;
use Spiral\Queue\Options;

public function createJob(QueueInterface $queue): void
{
    $queue->push(
        SampleJob::class, 
        ['value' => 123],
        Options::onQueue('high-priority')
    );
}
```

### [#](#options "Permalink")Options

Spiral queue component provides `Spiral\Queue\Options` class, but in some cases you may need to use options specific
to the roadrunner driver. In this case you can use options that implement `Spiral\RoadRunner\Jobs\OptionsInterface`.

For example, if you want to pass additional options to Kafka broker, you can use `Spiral\RoadRunner\Jobs\KafkaOptions`
class.

php

```
use App\Endpoint\Job\SampleJob;
use Spiral\Queue\QueueInterface;
use Spiral\RoadRunner\Jobs\KafkaOptions;

public function createJob(QueueInterface $queue): void
{
    $queue->push(
        SampleJob::class, 
        ['value' => 123],
        new KafkaOptions(topic: 'events')
    );
}
```

## [#](#custom-driver "Permalink")Custom driver

In some cases, you may need to create a custom driver for a specific queue broker.

For example, you may want to create a driver for specific queue broker.

php

app/src/Infrastructure/Queue/KafkaQueue.php

```
namespace App\Infrastructure\Queue;

use Spiral\Queue\OptionsInterface;
use Spiral\Queue\QueueInterface;
use Spiral\RoadRunner\Jobs\JobsInterface;
use Spiral\RoadRunner\Jobs\Queue\KafkaCreateInfo;
use Spiral\RoadRunner\Jobs\KafkaOptions;

final class KafkaQueue imlements QueueInterface
{
    private readonly QueueInterface $queue;
    
    public function __construct(JobsInterface $jobs, string $name, string $topic) 
    {
        $this->queue = $jobs->create(
            new KafkaCreateInfo(
                name: $name, 
                topic: $topic
            ), 
            new KafkaOptions($topic)
        );
    }

    public function push(string $name, array $payload = [], OptionsInterface|KafkaOptions $options = null): string
    {
        return $this->queue->push($name, $payload, $options)->getId();
    }
}
```

That's all. Now you can use your driver:

php

app/config/queue.php

```
'connections' => [
    'mail' => [
        'driver' => \App\Infrastructure\Queue\KafkaQueue::class,
        'name' => 'mail',
        'topic' => 'mail',
    ],
],
```

> **See more**  
> Read more about creating custom drivers in the [Queue — Getting started](queue-configuration__current__en.md) section.

← PREVIOUS
[Job Handlers](queue-jobs__current__en.md)

NEXT →
[Interceptors](queue-interceptors__current__en.md)
