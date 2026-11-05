# Spiral Framework: Cookbook - Custom Dispatcher

> **Fonte / Source:** https://spiral.dev/docs/cookbook-custom-dispatcher/current/en

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

[Edit this page](https://github.com/spiral/docs/edit/3.16/docs/en/cookbook/custom-dispatcher.md)

# Cookbook — Custom Dispatcher

- [RoadRunner Service plugin](#roadrunner-service-plugin)
  - [Prerequisites](#prerequisites)
  - [Plugin Configuration](#plugin-configuration)
  - [Plugin Service](#plugin-service)
  - [Build the RoadRunner Binary with Velox](#build-the-roadrunner-binary-with-velox)
- [Application Dispatcher](#application-dispatcher)

It is possible to invoke application kernel using a custom data source, for example, **Kafka**, **state-machine**
events, or attach to user-defined interrupt. In this section, we will try to demonstrate how to write a RoadRunner
service plugin and a kernel dispatcher to consume data from this service. It is a good starting point for anyone who is
interested in building custom plugins for RoadRunner or using Spiral to build scalable and extensible web applications.

In this example, we will be sending "ticks" to the kernel every second.

> **Attention**
> Make sure to read about an [application server](start-server__current__en.md) first. This article expects that
> you are proficient in writing Golang code.

## [#](#roadrunner-service-plugin "Permalink")RoadRunner Service plugin

One way to take advantage of RoadRunner's performance is to use its plugin system, which allows you to extend the
functionality of the server and customize it to fit your needs.

In this tutorial, we'll show you how to create a simple RoadRunner plugin called "ticker", which will periodically send
ticks to the PHP workers with defined interval. This can be useful for tasks such as sending periodic updates to clients
or running scheduled tasks.

### [#](#prerequisites "Permalink")Prerequisites

Before we begin, you'll need to have the following installed on your machine:

- [Go](https://golang.org/doc/install)
- [Velox](https://github.com/roadrunner-server/velox/releases)- the official RoadRunner builder tool. It allows you
  to build custom RoadRunner binaries from github and gitlab repositories.

> **See more**  
> Read more how to create a RoadRunner plugin [here](https://roadrunner.dev/docs/plugins-intro/) and how to build a
> binary with custom plugins [here](https://roadrunner.dev/docs/app-server-build).

### [#](#plugin-configuration "Permalink")Plugin Configuration

Here is an example of how to configure the ticker plugin in `.rr.yaml`:

yaml

.rr.yaml

```
server:
  command: php app.php

ticker:
  interval: 1s
  pool:
    num_workers: 2
```

As you can see, our configuration allows us to define the interval between ticks in the format `1s, 1m, 10s, ...` and
configure the worker pool. The `interval` field specifies the amount of time to wait between ticks.

Let's create a configuration file `config.go` for our service:

go

config.go

```
package ticker

import (
	"time"
	"github.com/roadrunner-server/sdk/v3/pool"
)

type Config struct {
	Interval time.Duration `mapstructure:"interval"`
	Pool     *pool.Config  `mapstructure:"pool"`
}

func (c *Config) InitDefaults() {
	if c.Pool == nil {
		c.Pool = &pool.Config{}
	}

    // Init default pool settings
	c.Pool.InitDefaults()

	// use default interval 1s when inteval is not defined or defined with wrong value 
	if c.Interval == 0 {
		c.Interval = time.Second
	}
}
```

In the `config.go` file, we defined a struct called `Config` to store the plugin configuration. It has an
`Interval` field for storing the tick interval and a `Pool` field for storing the worker pool configuration.
The `InitDefaults` function sets default values for these fields if they are not specified in the `.rr.yaml` file.
The default interval is set to 1 second, and the default worker pool configuration is set to the default values provided
by the RoadRunner SDK.

### [#](#plugin-service "Permalink")Plugin Service

We have defined the configuration for our ticker plugin, let's move on to creating the plugin service.

The plugin service is responsible for managing the workers and sending the ticks to them. To create the service, create
a new file called `plugin.go` and add the following code to it:

go

plugin.go

```
package ticker

import (
	"context"
	"fmt"
	"sync"
	"time"

	"github.com/roadrunner-server/errors"
	"github.com/roadrunner-server/sdk/v3/payload"
	"github.com/roadrunner-server/sdk/v3/pool"
	"github.com/roadrunner-server/sdk/v3/pool/static_pool"
	"github.com/roadrunner-server/sdk/v3/worker"
	"go.uber.org/zap"
)

type Configurer interface {
	// UnmarshalKey takes a single key and unmarshal it into a Struct.
	UnmarshalKey(name string, out any) error

	// Has checks if config section exists.
	Has(name string) bool
}

// Server creates workers for the application.
type Server interface {
	NewPool(ctx context.Context, cfg *pool.Config, env map[string]string, _ *zap.Logger) (*static_pool.Pool, error)
}

type Pool interface {
	// Workers returns worker list associated with the pool.
	Workers() (workers []*worker.Process)

	// Exec payload
	Exec(ctx context.Context, p *payload.Payload) (*payload.Payload, error)

	// Reset kill all workers inside the watcher and replaces with new
	Reset(ctx context.Context) error

	// Destroy all underlying stack (but let them to complete the task).
	Destroy(ctx context.Context)
}

const (
	rrMode     string = "RR_MODE"
	pluginName string = "ticker"
)

type Plugin struct {
	mu     sync.RWMutex
	cfg    *Config
	server Server
	stopCh chan struct{}
	pool   Pool
}

func (p *Plugin) Init(cfg Configurer, server Server) error {
	// If config file doesn't contain plugin section, ignore it
    if !cfg.Has(pluginName) {
		return errors.E(errors.Disabled)
	}

	// read plugin config
	err := cfg.UnmarshalKey(pluginName, &p.cfg)
	if err != nil {
		return err
	}

	p.cfg.InitDefaults()

	p.stopCh = make(chan struct{}, 1)
	p.server = server

	return nil
}

func (p *Plugin) Serve() chan error {
	errCh := make(chan error, 1)

	var err error
	p.mu.Lock()
    // Create workers pool
	p.pool, err = p.server.NewPool(context.Background(), p.cfg.Pool, map[string]string{rrMode: pluginName}, nil)
	p.mu.Unlock()

	if err != nil {
		errCh <- err
		return errCh
	}

	go func() {
		var numTicks = 0
		var lastTick time.Time
        // Be careful with ticker! You should always stop it
		ticker := time.NewTicker(p.cfg.Interval)
		defer ticker.Stop()

		for {
			select {
			case <-p.stopCh:
				return
			case <-ticker.C:
				p.mu.RLock()
				_, err2 := p.pool.Exec(context.Background(), &payload.Payload{
					Context: []byte(fmt.Sprintf(`{"lastTick": %v}`, lastTick.Unix())),
					Body:    []byte(fmt.Sprintf(`{"tick": %v}`, numTicks)),
				})
				p.mu.RUnlock()
				if err != nil {
					errCh <- err2
					return
				}

				numTicks++
				lastTick = time.Now()
			}
		}
	}()

	return errCh
}

func (p *Plugin) Reset() error {
	p.mu.RLock()
	defer p.mu.RUnlock()

	if p.pool == nil {
		return nil
	}

	ctx, cancel := context.WithTimeout(context.Background(), time.Second*10)
	defer cancel()
	err := p.pool.Reset(ctx)
	if err != nil {
		return err
	}

	return nil
}

func (p *Plugin) Stop() error {
	p.stopCh <- struct{}{}
	return nil
}

func (p *Plugin) Name() string {
	return pluginName
}

func (p *Plugin) Weight() uint {
	return 10
}
```

When RoadRunner starts PHP workers, it can pass a value for the `RR_MODE` variable to indicate which plugin should be
used. Spiral can then use the value of this variable to choose the appropriate dispatcher for the current environment.

### [#](#build-the-roadrunner-binary-with-velox "Permalink")Build the RoadRunner Binary with Velox

Next, we will use [Velox](https://roadrunner.dev/docs/app-server-build) to build a custom RoadRunner binary with our
plugin.

Create a new file called `plugins.toml` and add the following configuration:

toml

plugins.toml

```
[velox]
build_args = ['-trimpath', '-ldflags', '-s -X github.com/roadrunner-server/roadrunner/v2/internal/meta.version=v2.12.1.custom -X github.com/roadrunner-server/roadrunner/v2/internal/meta.buildTime=00:00:00']

[roadrunner]
ref = "v2.12.1"

[github]
[github.token]
token = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"

# ref -> master, commit or tag
[github.plugins]
logger = { ref = "master", owner = "roadrunner-server", repository = "logger" }
server = { ref = "master", owner = "roadrunner-server", repository = "server" }
ticker = { ref = "main", owner = "roadrunner-php", repository = "rr-examples", folder = "ticker" }

[log]
level = "debug"
mode = "development"
```

Then, run the following command to build the RoadRunner binary:

```
vx build -c plugins.toml -o .
```

## [#](#application-dispatcher "Permalink")Application Dispatcher

At first, we need to install `spiral/roadrunner-worker` package:

```
composer require spiral/roadrunner-worker
```

Now we can create our dispatcher:

php

```
namespace App\Dispatcher;

use Psr\Container\ContainerInterface;
use Spiral\Boot\DispatcherInterface;
use Spiral\Boot\EnvironmentInterface;
use Spiral\Boot\FinalizerInterface;
use Spiral\RoadRunner\Worker;

final class TickerDispatcher implements DispatcherInterface
{
    public function __construct(
        private readonly EnvironmentInterface $env,
        private readonly FinalizerInterface $finalizer,
        private readonly ContainerInterface $container
    ) {
    }

    public function canServe(): bool
    {
        return $this->env->get('RR_MODE') === 'ticker';
    }

    public function serve(): void
    {
        /** @var Worker $worker */
        $worker = $this->container->get(Worker::class);

        while ($payload = $worker->waitPayload()) {
            $data = \json_decode($payload->body, true);
            
            // Handle tick ... 
        
            // Respond Answer
            $worker->respond(new \Spiral\RoadRunner\Payload('OK'));

            // reset some stateful services
            $this->finalizer->finalize();
        }
    }
}
```

> **See more**  
> Read more about the dispatchers in the [Framework — Dispatchers](framework-dispatcher__current__en.md) section.

Create a Bootloader to register our dispatcher in the kernel:

php

app/src/Application/Bootloader/TickerBootloader.php

```
namespace App\Application\Bootloader;

use App\Dispatcher\TickerDispatcher;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Boot\KernelInterface;

final class TickerBootloader extends Bootloader
{
    public function boot(KernelInterface $kernel, TickerDispatcher $ticker): void
    {
        $kernel->addDispatcher($ticker);
    }
}
```

Now we can run our application:

```
./rr serve
```

> **Note:**  
> You can find code of ticker plugin [here](https://github.com/roadrunner-php/rr-examples)

← PREVIOUS
[Quick start](cookbook-quick-start__current__en.md)

NEXT →
[Authentication based on JWT](cookbook-user-authentication__current__en.md)
