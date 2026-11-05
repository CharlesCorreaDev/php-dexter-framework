# Spiral Framework: GRPC - Interceptors

> **Fonte / Source:** https://spiral.dev/docs/grpc-interceptors/current/en

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

[Edit this page](https://github.com/spiral/docs/edit/3.16/docs/en/grpc/interceptors.md)

# GRPC — Interceptors

- [Server Interceptors](#server-interceptors)
  - [Logging Interceptor](#logging-interceptor)
  - [Exception Handler Interceptor](#exception-handler-interceptor)
  - [Receiving trace context from request](#receiving-trace-context-from-request)
  - [Guard Interceptor](#guard-interceptor)
  - [Registering Server Interceptors](#registering-server-interceptors)
- [Client Interceptors](#client-interceptors)
  - [Built-in Client Interceptors](#built-in-client-interceptors)
  - [Working with gRPC Context Fields](#working-with-grpc-context-fields)
  - [Custom Client Interceptor Example: Telemetry](#custom-client-interceptor-example-telemetry)
  - [Order of Interceptors](#order-of-interceptors)
  - [Configuring Client Interceptors](#configuring-client-interceptors)

Spiral provides interceptors for gRPC services that allow you to intercept and modify requests and responses at various
points in the request lifecycle.

> **See more**  
> Read more about interceptors in the [Framework — Interceptors](framework-interceptors__current__en.md) section.

There are two types of interceptors:

1. Server interceptors
2. Client interceptors

## [#](#server-interceptors "Permalink")Server Interceptors

Server interceptors are used to intercept and modify requests and responses received by a server. They are typically
used to add cross-cutting functionality such as logging, authentication, or monitoring to the server.

### [#](#logging-interceptor "Permalink")Logging Interceptor

Here is an example of a simple interceptor that logs a request before and after processing:

php

```
namespace App\Endpoint\GRPC\Interceptor;

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

        $this->logger->info('Request received...', [
            'target' => (string) $target,
            'path' => $target->getPath(),
        ]);

        $response = $handler->handle($context);

        $this->logger->info('Request processed', [
            'target' => (string)$target,
            'path' => $target->getPath(),
        ]);

        return $response;
    }
}
```

### [#](#exception-handler-interceptor "Permalink")Exception Handler Interceptor

Here is an example of a simple interceptor that handles exceptions thrown by the server. It will catch all exceptions
and convert them to a gRPC exception.

php

```
namespace App\Endpoint\GRPC\Interceptor;

use Spiral\Exceptions\ExceptionReporterInterface;
use Spiral\Interceptors\Context\CallContextInterface;
use Spiral\Interceptors\HandlerInterface;
use Spiral\Interceptors\InterceptorInterface;
use Spiral\RoadRunner\GRPC\Exception\GRPCException;
use Spiral\RoadRunner\GRPC\Exception\GRPCExceptionInterface;

final class ExceptionHandlerInterceptor implements InterceptorInterface
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

            if ($e instanceof GRPCExceptionInterface) {
                throw $e;
            }

            throw new GRPCException(
                message: $e->getMessage(),
                previous: $e,
            );
        }
    }
}
```

### [#](#receiving-trace-context-from-request "Permalink")Receiving trace context from request

Here is an example of a simple interceptor that receives trace context from the request.

php

```
namespace App\Endpoint\GRPC\Interceptor;

use Spiral\Interceptors\Context\CallContextInterface;
use Spiral\Interceptors\HandlerInterface;
use Spiral\Interceptors\InterceptorInterface;
use Spiral\Telemetry\TraceKind;
use Spiral\Telemetry\TracerFactoryInterface;

class InjectTelemetryFromContextInterceptor implements InterceptorInterface
{
    public function __construct(
        private readonly TracerFactoryInterface $tracerFactory,
    ) {}

    public function intercept(CallContextInterface $context, HandlerInterface $handler): mixed
    {
        $ctx = $context->getArguments()[0] ?? null;

        $traceContext = $ctx instanceof \Spiral\RoadRunner\GRPC\ContextInterface
            ? (array) $ctx->getValue('telemetry-trace-id')
            : [];

        $target = $context->getTarget();

        return $this->tracerFactory->make($traceContext)->trace(
            name: \sprintf('Interceptor [%s]', __CLASS__),
            callback: static fn(): mixed => $handler->handle($context),
            attributes: [
                'target' => (string) $target,
                'path' => $target->getPath(),
            ],
            scoped: true,
            traceKind: TraceKind::SERVER,
        );
    }
}
```

### [#](#guard-interceptor "Permalink")Guard Interceptor

Here is an example of a simple interceptor that checks if the user is authenticated. It will use PHP attributes to
determine which methods require authentication. An authentication token is passed in the request metadata.

php

```
namespace App\Endpoint\GRPC\Interceptor;

use App\Attribute\Guarded;
use Spiral\Attributes\ReaderInterface;
use Spiral\Interceptors\Context\CallContextInterface;
use Spiral\Interceptors\HandlerInterface;
use Spiral\Interceptors\InterceptorInterface;
use Spiral\RoadRunner\GRPC\ContextInterface;

final class GuardedInterceptor implements InterceptorInterface
{
    public function __construct(
        private readonly ReaderInterface $reader
    ) {
    }

    public function intercept(CallContextInterface $context, HandlerInterface $handler): mixed
    {
        $reflection = $context->getTarget()->getReflection();
        
        if ($reflection !== null) {
            $attribute = $this->reader->firstFunctionMetadata($reflection, Guarded::class);
            
            if ($attribute !== null) {
                $ctx = $context->getArguments()[0] ?? null;
                if ($ctx instanceof ContextInterface) {
                    $this->checkAuth($attribute, $ctx);
                }
            }
        }

        return $handler->handle($context);
    }

    private function checkAuth(Guarded $attribute, ContextInterface $ctx): void
    {
        // Metadata always stores values as array. 
        $token = $ctx->getValue($attribute->tokenField)[0] ?? null;

        // Here you can implement your own authentication logic
        if ($token !== 'secret') {
            throw new \Exception('Unauthorized.');
        }
    }
}
```

And example of a method that requires authentication:

php

```
use App\Attribute\Guarded;

#[Guarded]
public function ping(GRPC\ContextInterface $ctx, PingRequest $in): PingResponse
{
    // ...
}
```

And example of Guarded attribute:

php

```
namespace App\Attribute;

use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;

#[\Attribute(\Attribute::TARGET_METHOD), NamedArgumentConstructor]
class Guarded
{
    public function __construct(
        public readonly string $tokenField = 'token'
    ) {
    }
}
```

### [#](#registering-server-interceptors "Permalink")Registering Server Interceptors

To use server interceptors, register them in the configuration file `app/config/grpc.php`:

php

app/config/grpc.php

```
return [    
    'interceptors' => [
        \App\Endpoint\GRPC\Interceptor\LogInterceptor::class,
        \App\Endpoint\GRPC\Interceptor\ExceptionHandlerInterceptor::class,
        \App\Endpoint\GRPC\Interceptor\GuardedInterceptor::class,
    ]
];
```

## [#](#client-interceptors "Permalink")Client Interceptors

Client interceptors allow you to modify or extend the behavior of gRPC client requests.
They can add functionality such as logging, timeout configuration, retries, and authentication.

> **See more**  
> See the [Client](grpc-client__current__en.md) documentation for basic gRPC client configuration and usage.

### [#](#built-in-client-interceptors "Permalink")Built-in Client Interceptors

Spiral provides several built-in client interceptors through the `spiral/grpc-client` package:

#### [#](#settimeoutinterceptor "Permalink")SetTimeoutInterceptor

Sets a timeout for each gRPC request in milliseconds:

php

```
use Spiral\Grpc\Client\Interceptor\SetTimoutInterceptor;

// Adds a 5-second timeout
SetTimoutInterceptor::createConfig(5_000)
```

#### [#](#retryinterceptor "Permalink")RetryInterceptor

Implements retry logic with exponential backoff for failed requests:

php

```
use Spiral\Grpc\Client\Interceptor\RetryInterceptor;

// Configure retries with custom parameters
RetryInterceptor::createConfig(
     // Initial backoff interval in milliseconds (default: 50ms)
    initialInterval: 50,
     // Initial interval for resource exhaustion issues (default: 1000ms)
    congestionInitialInterval: 1000,
     // The coefficient for calculating next retry backoff (default: 2.0)
    backoffCoefficient: 2.0,
     // Maximum backoff interval (default: 100x of initialInterval)
    maximumInterval: null,
     // Maximum number of retry attempts (default: 0 means unlimited)
    maximumAttempts: 3,
     // Maximum jitter to apply to intervals (default: 0.1)
    maximumJitterCoefficient: 0.1,
)
```

The `RetryInterceptor` automatically retries requests that fail with one of these status codes:

- `ResourceExhausted`
- `Unavailable`
- `Unknown`
- `Aborted`

#### [#](#connectionsrotationinterceptor "Permalink")ConnectionsRotationInterceptor

Rotates through multiple connections until the first successful response:

php

```
use Spiral\Grpc\Client\Interceptor\ConnectionsRotationInterceptor;

// Simply add the interceptor class
ConnectionsRotationInterceptor::class
```

#### [#](#executeserviceinterceptors "Permalink")ExecuteServiceInterceptors

This special interceptor calls service-specific interceptors defined in the service configuration.
If the `ExecuteServiceInterceptors` interceptor is not included in the global interceptors list, service-specific interceptors will not be executed.

php

```
use Spiral\Grpc\Client\Interceptor\ExecuteServiceInterceptors;

// Required to execute service-specific interceptors
ExecuteServiceInterceptors::class
```

### [#](#working-with-grpc-context-fields "Permalink")Working with gRPC Context Fields

When writing custom client interceptors, you'll often need to access or modify elements of the gRPC request context.
The `Spiral\Grpc\Client\Interceptor\Helper` class provides methods to safely work with these context fields:

php

```
use Spiral\Grpc\Client\Interceptor\Helper;
use Spiral\Interceptors\Context\CallContextInterface;
use Spiral\Interceptors\HandlerInterface;
use Spiral\Interceptors\InterceptorInterface;

final class AuthInterceptor implements InterceptorInterface
{
    public function __construct(
        private readonly string $authToken,
    ) {}

    public function intercept(CallContextInterface $context, HandlerInterface $handler): mixed
    {
        // Get current metadata
        $metadata = Helper::getMetadata($context);

        // Add authentication token to metadata
        $metadata['auth-token'] = [$this->authToken];

        // Update context with new metadata
        $context = Helper::withMetadata($context, $metadata);

        // Continue the request pipeline
        return $handler->handle($context);
    }
}
```

The `Helper` class provides the following methods:

- `getConnections()`/`withConnections()` - Get/set available connections
- `getCurrentConnection()`/`withCurrentConnection()` - Get/set current connection
- `getMessage()`/`withMessage()` - Get/set request message
- `getMetadata()`/`withMetadata()` - Get/set request metadata
- `getReturnType()`/`withReturnType()` - Get/set expected response type
- `getOptions()`/`withOptions()` - Get/set request options

### [#](#custom-client-interceptor-example-telemetry "Permalink")Custom Client Interceptor Example: Telemetry

Here's an example of a custom client interceptor that injects telemetry data into the request:

php

```
use Spiral\Grpc\Client\Interceptor\Helper;
use Spiral\Interceptors\Context\CallContextInterface;
use Spiral\Interceptors\HandlerInterface;
use Spiral\Interceptors\InterceptorInterface;
use Spiral\Telemetry\TraceKind;
use Spiral\Telemetry\TracerInterface;

final class TelemetryInterceptor implements InterceptorInterface
{
    public function __construct(
        private readonly TracerInterface $tracer,
    ) {}

    public function intercept(CallContextInterface $context, HandlerInterface $handler): mixed
    {
        // Get the current metadata
        $metadata = Helper::getMetadata($context);

        // Add trace context to metadata
        $metadata['telemetry-trace-id'] = $this->tracer->getContext();

        // Update context with new metadata
        $context = Helper::withMetadata($context, $metadata);

        // Trace the gRPC call
        $target = $context->getTarget();

        return $this->tracer->trace(
            name: \sprintf('GRPC client request %s', (string) $target),
            callback: static fn(): mixed => $handler->handle($context),
            attributes: [
                'target' => (string) $target,
                'path' => $target->getPath(),
            ],
            traceKind: TraceKind::PRODUCER,
        );
    }
}
```

### [#](#order-of-interceptors "Permalink")Order of Interceptors

The order of interceptors matters. Interceptors are executed in the order they are defined in the configuration.
For example:

php

```
[
    SetTimoutInterceptor::createConfig(10_000), // 10 second global timeout
    RetryInterceptor::createConfig(maxAttempts: 3), // Up to 3 retries
    SetTimoutInterceptor::createConfig(3_000), // 3 second per-attempt timeout
]
```

In this configuration:

1. A 10-second global timeout is set for the entire request (including all retries)
2. The retry interceptor will make up to 3 retry attempts if needed
3. Each individual attempt has a 3-second timeout

The `ExecuteServiceInterceptors` interceptor should typically be placed last in the global interceptors list to ensure that service-specific interceptors run after global ones.

### [#](#configuring-client-interceptors "Permalink")Configuring Client Interceptors

For detailed information on configuring the gRPC client and its interceptors, see the [Client](grpc-client__current__en.md) documentation. Below is a basic example:

php

app/config/grpc.php

```
use App\GRPC\Interceptor\TelemetryInterceptor;
use Spiral\Grpc\Client\Config\GrpcClientConfig;
use Spiral\Grpc\Client\Config\ServiceConfig;
use Spiral\Grpc\Client\Config\ConnectionConfig;
use Spiral\Grpc\Client\Interceptor\SetTimoutInterceptor;
use Spiral\Grpc\Client\Interceptor\RetryInterceptor;
use Spiral\Grpc\Client\Interceptor\ExecuteServiceInterceptors;

return [
    // ... server configuration ...
    
    'client' => new GrpcClientConfig(
        interceptors: [
            // Global interceptors
            TelemetryInterceptor::class,
            SetTimoutInterceptor::createConfig(5_000),
            RetryInterceptor::createConfig(maximumAttempts: 3),
            // Calls service-specific interceptors
            ExecuteServiceInterceptors::class,
        ],
        services: [
            new ServiceConfig(
                connections: ConnectionConfig::createInsecure('localhost:9001'),
                interfaces: [
                    \GRPC\MyService\ServiceInterface::class,
                ],
                // Service-specific interceptors
                interceptors: [
                    SetTimoutInterceptor::createConfig(2_000), // Override timeout for this service
                ],
            ),
        ],
    )
];
```

← PREVIOUS
[Client SDK](grpc-client__current__en.md)
