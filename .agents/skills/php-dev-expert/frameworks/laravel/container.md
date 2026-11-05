# Service Container | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/container

---

[Skip to content](#main-content)

# Service Container

- [Introduction](#introduction)
  - [Zero Configuration Resolution](#zero-configuration-resolution)
  - [When to Utilize the Container](#when-to-use-the-container)
- [Binding](#binding)
  - [Binding Basics](#binding-basics)
  - [Binding Interfaces to Implementations](#binding-interfaces-to-implementations)
  - [Contextual Binding](#contextual-binding)
  - [Contextual Attributes](#contextual-attributes)
  - [Binding Primitives](#binding-primitives)
  - [Binding Typed Variadics](#binding-typed-variadics)
  - [Tagging](#tagging)
  - [Extending Bindings](#extending-bindings)
- [Resolving](#resolving)
  - [The Make Method](#the-make-method)
  - [Automatic Injection](#automatic-injection)
- [Method Invocation and Injection](#method-invocation-and-injection)
- [Container Events](#container-events)
  - [Rebinding](#rebinding)
- [PSR-11](#psr-11)

## [Introduction](#introduction)

The Laravel service container is a powerful tool for managing class dependencies and performing dependency injection. Dependency injection is a fancy phrase that essentially means this: class dependencies are "injected" into the class via the constructor or, in some cases, "setter" methods.

Let's look at a simple example:

```
1<?php

2

3namespace App\Http\Controllers;

4

5use App\Services\AppleMusic;

6use Illuminate\View\View;

7

8class PodcastController extends Controller

9{

10    /**

11     * Create a new controller instance.

12     */

13    public function __construct(

14        protected AppleMusic $apple,

15    ) {}

16

17    /**

18     * Show information about the given podcast.

19     */

20    public function show(string $id): View

21    {

22        return view('podcasts.show', [

23            'podcast' => $this->apple->findPodcast($id)

24        ]);

25    }

26}

<?php

namespace App\Http\Controllers;

use App\Services\AppleMusic;
use Illuminate\View\View;

class PodcastController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected AppleMusic $apple,
    ) {}

    /**
     * Show information about the given podcast.
     */
    public function show(string $id): View
    {
        return view('podcasts.show', [
            'podcast' => $this->apple->findPodcast($id)
        ]);
    }
}
```

In this example, the `PodcastController` needs to retrieve podcasts from a data source such as Apple Music. So, we will **inject** a service that is able to retrieve podcasts. Since the service is injected, we are able to easily "mock", or create a dummy implementation of the `AppleMusic` service when testing our application.

A deep understanding of the Laravel service container is essential to building a powerful, large application, as well as for contributing to the Laravel core itself.

### [Zero Configuration Resolution](#zero-configuration-resolution)

If a class has no dependencies or only depends on other concrete classes (not interfaces), the container does not need to be instructed on how to resolve that class. For example, you may place the following code in your `routes/web.php` file:

```
1<?php

2

3class Service

4{

5    // ...

6}

7

8Route::get('/', function (Service $service) {

9    dd($service::class);

10});

<?php

class Service
{
    // ...
}

Route::get('/', function (Service $service) {
    dd($service::class);
});
```

In this example, hitting your application's `/` route will automatically resolve the `Service` class and inject it into your route's handler. This is game changing. It means you can develop your application and take advantage of dependency injection without worrying about bloated configuration files.

Thankfully, many of the classes you will be writing when building a Laravel application automatically receive their dependencies via the container, including [controllers](controllers.md), [event listeners](events.md), [middleware](middleware.md), and more. Additionally, you may type-hint dependencies in the `handle` method of [queued jobs](queues.md). Once you taste the power of automatic and zero configuration dependency injection it feels impossible to develop without it.

### [When to Utilize the Container](#when-to-use-the-container)

Thanks to zero configuration resolution, you will often type-hint dependencies on routes, controllers, event listeners, and elsewhere without ever manually interacting with the container. For example, you might type-hint the `Illuminate\Http\Request` object on your route definition so that you can easily access the current request. Even though we never have to interact with the container to write this code, it is managing the injection of these dependencies behind the scenes:

```
1use Illuminate\Http\Request;

2

3Route::get('/', function (Request $request) {

4    // ...

5});

use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    // ...
});
```

In many cases, thanks to automatic dependency injection and [facades](facades.md), you can build Laravel applications without **ever** manually binding or resolving anything from the container. **So, when would you ever manually interact with the container?** Let's examine two situations.

First, if you write a class that implements an interface and you wish to type-hint that interface on a route or class constructor, you must [tell the container how to resolve that interface](#binding-interfaces-to-implementations). Secondly, if you are [writing a Laravel package](packages.md) that you plan to share with other Laravel developers, you may need to bind your package's services into the container.

## [Binding](#binding)

### [Binding Basics](#binding-basics)

#### [Simple Bindings](#simple-bindings)

Almost all of your service container bindings will be registered within [service providers](providers.md), so most of these examples will demonstrate using the container in that context.

Within a service provider, you always have access to the container via the `$this->app` property. We can register a binding using the `bind` method, passing the class or interface name that we wish to register along with a closure that returns an instance of the class:

```
1use App\Services\Transistor;

2use App\Services\PodcastParser;

3use Illuminate\Contracts\Foundation\Application;

4

5$this->app->bind(Transistor::class, function (Application $app) {

6    return new Transistor($app->make(PodcastParser::class));

7});

use App\Services\Transistor;
use App\Services\PodcastParser;
use Illuminate\Contracts\Foundation\Application;

$this->app->bind(Transistor::class, function (Application $app) {
    return new Transistor($app->make(PodcastParser::class));
});
```

Note that we receive the container itself as an argument to the resolver. We can then use the container to resolve sub-dependencies of the object we are building.

As mentioned, you will typically be interacting with the container within service providers; however, if you would like to interact with the container outside of a service provider, you may do so via the `App` [facade](facades.md):

```
1use App\Services\Transistor;

2use Illuminate\Contracts\Foundation\Application;

3use Illuminate\Support\Facades\App;

4

5App::bind(Transistor::class, function (Application $app) {

6    // ...

7});

use App\Services\Transistor;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\App;

App::bind(Transistor::class, function (Application $app) {
    // ...
});
```

You may use the `bindIf` method to register a container binding only if a binding has not already been registered for the given type:

```
1$this->app->bindIf(Transistor::class, function (Application $app) {

2    return new Transistor($app->make(PodcastParser::class));

3});

$this->app->bindIf(Transistor::class, function (Application $app) {
    return new Transistor($app->make(PodcastParser::class));
});
```

For convenience, you may omit providing the class or interface name that you wish to register as a separate argument and instead allow Laravel to infer the type from the return type of the closure you provide to the `bind` method:

```
1App::bind(function (Application $app): Transistor {

2    return new Transistor($app->make(PodcastParser::class));

3});

App::bind(function (Application $app): Transistor {
    return new Transistor($app->make(PodcastParser::class));
});
```

There is no need to bind classes into the container if they do not depend on any interfaces. The container does not need to be instructed on how to build these objects, since it can automatically resolve these objects using reflection.

#### [Binding A Singleton](#binding-a-singleton)

The `singleton` method binds a class or interface into the container that should only be resolved one time. Once a singleton binding is resolved, the same object instance will be returned on subsequent calls into the container:

```
1use App\Services\Transistor;

2use App\Services\PodcastParser;

3use Illuminate\Contracts\Foundation\Application;

4

5$this->app->singleton(Transistor::class, function (Application $app) {

6    return new Transistor($app->make(PodcastParser::class));

7});

use App\Services\Transistor;
use App\Services\PodcastParser;
use Illuminate\Contracts\Foundation\Application;

$this->app->singleton(Transistor::class, function (Application $app) {
    return new Transistor($app->make(PodcastParser::class));
});
```

You may use the `singletonIf` method to register a singleton container binding only if a binding has not already been registered for the given type:

```
1$this->app->singletonIf(Transistor::class, function (Application $app) {

2    return new Transistor($app->make(PodcastParser::class));

3});

$this->app->singletonIf(Transistor::class, function (Application $app) {
    return new Transistor($app->make(PodcastParser::class));
});
```

#### [Singleton Attribute](#singleton-attribute)

Alternatively, you may mark an interface or class with the `#[Singleton]` attribute to indicate to the container that it should be resolved one time:

```
1<?php

2

3namespace App\Services;

4

5use Illuminate\Container\Attributes\Singleton;

6

7#[Singleton]

8class Transistor

9{

10    // ...

11}

<?php

namespace App\Services;

use Illuminate\Container\Attributes\Singleton;

#[Singleton]
class Transistor
{
    // ...
}
```

#### [Binding Scoped Singletons](#binding-scoped)

The `scoped` method binds a class or interface into the container that should only be resolved one time within a given Laravel request / job lifecycle. While this method is similar to the `singleton` method, instances registered using the `scoped` method will be flushed whenever the Laravel application starts a new "lifecycle", such as when a [Laravel Octane](octane.md) worker processes a new request or when a Laravel [queue worker](queues.md) processes a new job:

```
1use App\Services\Transistor;

2use App\Services\PodcastParser;

3use Illuminate\Contracts\Foundation\Application;

4

5$this->app->scoped(Transistor::class, function (Application $app) {

6    return new Transistor($app->make(PodcastParser::class));

7});

use App\Services\Transistor;
use App\Services\PodcastParser;
use Illuminate\Contracts\Foundation\Application;

$this->app->scoped(Transistor::class, function (Application $app) {
    return new Transistor($app->make(PodcastParser::class));
});
```

You may use the `scopedIf` method to register a scoped container binding only if a binding has not already been registered for the given type:

```
1$this->app->scopedIf(Transistor::class, function (Application $app) {

2    return new Transistor($app->make(PodcastParser::class));

3});

$this->app->scopedIf(Transistor::class, function (Application $app) {
    return new Transistor($app->make(PodcastParser::class));
});
```

#### [Scoped Attribute](#scoped-attribute)

Alternatively, you may mark an interface or class with the `#[Scoped]` attribute to indicate to the container that it should be resolved one time within a given Laravel request / job lifecycle:

```
1<?php

2

3namespace App\Services;

4

5use Illuminate\Container\Attributes\Scoped;

6

7#[Scoped]

8class Transistor

9{

10    // ...

11}

<?php

namespace App\Services;

use Illuminate\Container\Attributes\Scoped;

#[Scoped]
class Transistor
{
    // ...
}
```

#### [Binding Instances](#binding-instances)

You may also bind an existing object instance into the container using the `instance` method. The given instance will always be returned on subsequent calls into the container:

```
1use App\Services\Transistor;

2use App\Services\PodcastParser;

3

4$service = new Transistor(new PodcastParser);

5

6$this->app->instance(Transistor::class, $service);

use App\Services\Transistor;
use App\Services\PodcastParser;

$service = new Transistor(new PodcastParser);

$this->app->instance(Transistor::class, $service);
```

### [Binding Interfaces to Implementations](#binding-interfaces-to-implementations)

A very powerful feature of the service container is its ability to bind an interface to a given implementation. For example, let's assume we have an `EventPusher` interface and a `RedisEventPusher` implementation. Once we have coded our `RedisEventPusher` implementation of this interface, we can register it with the service container like so:

```
1use App\Contracts\EventPusher;

2use App\Services\RedisEventPusher;

3

4$this->app->bind(EventPusher::class, RedisEventPusher::class);

use App\Contracts\EventPusher;
use App\Services\RedisEventPusher;

$this->app->bind(EventPusher::class, RedisEventPusher::class);
```

This statement tells the container that it should inject the `RedisEventPusher` when a class needs an implementation of `EventPusher`. Now we can type-hint the `EventPusher` interface in the constructor of a class that is resolved by the container. Remember, controllers, event listeners, middleware, and various other types of classes within Laravel applications are always resolved using the container:

```
1use App\Contracts\EventPusher;

2

3/**

4 * Create a new class instance.

5 */

6public function __construct(

7    protected EventPusher $pusher,

8) {}

use App\Contracts\EventPusher;

/**
 * Create a new class instance.
 */
public function __construct(
    protected EventPusher $pusher,
) {}
```

#### [Bind Attribute](#bind-attribute)

Laravel also provides a `Bind` attribute for added convenience. You can apply this attribute to any interface to tell Laravel which implementation should be automatically injected whenever that interface is requested. When using the `Bind` attribute, there is no need to perform any additional service registration in your application's service providers.

In addition, multiple `Bind` attributes may be placed on an interface in order to configure a different implementation that should be injected for a given set of environments:

```
1<?php

2

3namespace App\Contracts;

4

5use App\Services\FakeEventPusher;

6use App\Services\RedisEventPusher;

7use Illuminate\Container\Attributes\Bind;

8

9#[Bind(RedisEventPusher::class)]

10#[Bind(FakeEventPusher::class, environments: ['local', 'testing'])]

11interface EventPusher

12{

13    // ...

14}

<?php

namespace App\Contracts;

use App\Services\FakeEventPusher;
use App\Services\RedisEventPusher;
use Illuminate\Container\Attributes\Bind;

#[Bind(RedisEventPusher::class)]
#[Bind(FakeEventPusher::class, environments: ['local', 'testing'])]
interface EventPusher
{
    // ...
}
```

Furthermore, [Singleton](#singleton-attribute) and [Scoped](#scoped-attribute) attributes may be applied to indicate if the container bindings should be resolved once or once per request / job lifecycle:

```
1use App\Services\RedisEventPusher;

2use Illuminate\Container\Attributes\Bind;

3use Illuminate\Container\Attributes\Singleton;

4

5#[Bind(RedisEventPusher::class)]

6#[Singleton]

7interface EventPusher

8{

9    // ...

10}

use App\Services\RedisEventPusher;
use Illuminate\Container\Attributes\Bind;
use Illuminate\Container\Attributes\Singleton;

#[Bind(RedisEventPusher::class)]
#[Singleton]
interface EventPusher
{
    // ...
}
```

For bindings that depend on an arbitrary condition, you may use the `BindWhen` attribute. The closure may receive the container and should return `true` when the binding should be applied. `Bind` and `BindWhen` attributes are evaluated in the order they are declared:

```
1use App\Services\BetaEventPusher;

2use Illuminate\Container\Attributes\BindWhen;

3use Laravel\Pennant\Feature;

4

5#[BindWhen(BetaEventPusher::class, static fn () => Feature::active('beta-events'))]

6interface EventPusher

7{

8    // ...

9}

use App\Services\BetaEventPusher;
use Illuminate\Container\Attributes\BindWhen;
use Laravel\Pennant\Feature;

#[BindWhen(BetaEventPusher::class, static fn () => Feature::active('beta-events'))]
interface EventPusher
{
    // ...
}
```

The `BindWhen` attribute requires PHP 8.5 or greater.

### [Contextual Binding](#contextual-binding)

Sometimes you may have two classes that utilize the same interface, but you wish to inject different implementations into each class. For example, two controllers may depend on different implementations of the `Illuminate\Contracts\Filesystem\Filesystem` [contract](contracts.md). Laravel provides a simple, fluent interface for defining this behavior:

```
1use App\Http\Controllers\PhotoController;

2use App\Http\Controllers\UploadController;

3use App\Http\Controllers\VideoController;

4use Illuminate\Contracts\Filesystem\Filesystem;

5use Illuminate\Support\Facades\Storage;

6

7$this->app->when(PhotoController::class)

8    ->needs(Filesystem::class)

9    ->give(function () {

10        return Storage::disk('local');

11    });

12

13$this->app->when([VideoController::class, UploadController::class])

14    ->needs(Filesystem::class)

15    ->give(function () {

16        return Storage::disk('s3');

17    });

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\VideoController;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;

$this->app->when(PhotoController::class)
    ->needs(Filesystem::class)
    ->give(function () {
        return Storage::disk('local');
    });

$this->app->when([VideoController::class, UploadController::class])
    ->needs(Filesystem::class)
    ->give(function () {
        return Storage::disk('s3');
    });
```

### [Contextual Attributes](#contextual-attributes)

Since contextual binding is often used to inject implementations of drivers or configuration values, Laravel offers a variety of contextual binding attributes that allow to inject these types of values without manually defining the contextual bindings in your service providers.

For example, the `Storage` attribute may be used to inject a specific [storage disk](filesystem.md):

```
1<?php

2

3namespace App\Http\Controllers;

4

5use Illuminate\Container\Attributes\Storage;

6use Illuminate\Contracts\Filesystem\Filesystem;

7

8class PhotoController extends Controller

9{

10    public function __construct(

11        #[Storage('local')] protected Filesystem $filesystem

12    ) {

13        // ...

14    }

15}

<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Storage;
use Illuminate\Contracts\Filesystem\Filesystem;

class PhotoController extends Controller
{
    public function __construct(
        #[Storage('local')] protected Filesystem $filesystem
    ) {
        // ...
    }
}
```

In addition to the `Storage` attribute, Laravel offers `Auth`, `Cache`, `Config`, `Context`, `DB`, `Give`, `Log`, `RequestAttribute`, `RouteParameter`, and [Tag](#tagging) attributes:

```
1<?php

2

3namespace App\Http\Controllers;

4

5use App\Contracts\UserRepository;

6use App\Models\Organization;

7use App\Models\Photo;

8use App\Repositories\DatabaseRepository;

9use Illuminate\Container\Attributes\Auth;

10use Illuminate\Container\Attributes\Cache;

11use Illuminate\Container\Attributes\Config;

12use Illuminate\Container\Attributes\Context;

13use Illuminate\Container\Attributes\DB;

14use Illuminate\Container\Attributes\Give;

15use Illuminate\Container\Attributes\Log;

16use Illuminate\Container\Attributes\RequestAttribute;

17use Illuminate\Container\Attributes\RouteParameter;

18use Illuminate\Container\Attributes\Tag;

19use Illuminate\Contracts\Auth\Guard;

20use Illuminate\Contracts\Cache\Repository;

21use Illuminate\Database\Connection;

22use Psr\Log\LoggerInterface;

23

24class PhotoController extends Controller

25{

26    public function __construct(

27        #[Auth('web')] protected Guard $auth,

28        #[Cache('redis')] protected Repository $cache,

29        #[Config('app.timezone')] protected string $timezone,

30        #[Context('uuid')] protected string $uuid,

31        #[Context('ulid', hidden: true)] protected string $ulid,

32        #[DB('mysql')] protected Connection $connection,

33        #[Give(DatabaseRepository::class)] protected UserRepository $users,

34        #[Log('daily')] protected LoggerInterface $log,

35        #[RequestAttribute('organization')] protected Organization $organization,

36        #[RouteParameter] protected Photo $photo,

37        #[Tag('reports')] protected iterable $reports,

38    ) {

39        // ...

40    }

41}

<?php

namespace App\Http\Controllers;

use App\Contracts\UserRepository;
use App\Models\Organization;
use App\Models\Photo;
use App\Repositories\DatabaseRepository;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Container\Attributes\Cache;
use Illuminate\Container\Attributes\Config;
use Illuminate\Container\Attributes\Context;
use Illuminate\Container\Attributes\DB;
use Illuminate\Container\Attributes\Give;
use Illuminate\Container\Attributes\Log;
use Illuminate\Container\Attributes\RequestAttribute;
use Illuminate\Container\Attributes\RouteParameter;
use Illuminate\Container\Attributes\Tag;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Database\Connection;
use Psr\Log\LoggerInterface;

class PhotoController extends Controller
{
    public function __construct(
        #[Auth('web')] protected Guard $auth,
        #[Cache('redis')] protected Repository $cache,
        #[Config('app.timezone')] protected string $timezone,
        #[Context('uuid')] protected string $uuid,
        #[Context('ulid', hidden: true)] protected string $ulid,
        #[DB('mysql')] protected Connection $connection,
        #[Give(DatabaseRepository::class)] protected UserRepository $users,
        #[Log('daily')] protected LoggerInterface $log,
        #[RequestAttribute('organization')] protected Organization $organization,
        #[RouteParameter] protected Photo $photo,
        #[Tag('reports')] protected iterable $reports,
    ) {
        // ...
    }
}
```

The `RouteParameter` attribute will resolve the route parameter matching the variable name. If needed, you may specify the route parameter name explicitly: `#[RouteParameter('photo')]`.

The `RequestAttribute` attribute will resolve the value stored under the given key in the current request's [attribute bag](https://symfony.com/doc/current/components/http_foundation.html#accessing-request-data): `#[RequestAttribute('organization')]`.

In addition, Laravel provides a `CurrentUser` attribute for injecting the currently authenticated user into a given route or class:

```
1use App\Models\User;

2use Illuminate\Container\Attributes\CurrentUser;

3

4Route::get('/user', function (#[CurrentUser] User $user) {

5    return $user;

6})->middleware('auth');

use App\Models\User;
use Illuminate\Container\Attributes\CurrentUser;

Route::get('/user', function (#[CurrentUser] User $user) {
    return $user;
})->middleware('auth');
```

#### [Defining Custom Attributes](#defining-custom-attributes)

You can create your own contextual attributes by implementing the `Illuminate\Contracts\Container\ContextualAttribute` contract. The container will call your attribute's `resolve` method, which should resolve the value that should be injected into the class utilizing the attribute. In the example below, we will re-implement Laravel's built-in `Config` attribute:

```
1<?php

2

3namespace App\Attributes;

4

5use Attribute;

6use Illuminate\Contracts\Container\Container;

7use Illuminate\Contracts\Container\ContextualAttribute;

8use ReflectionParameter;

9

10#[Attribute(Attribute::TARGET_PARAMETER)]

11class Config implements ContextualAttribute

12{

13    /**

14     * Create a new attribute instance.

15     */

16    public function __construct(public string $key, public mixed $default = null)

17    {

18    }

19

20    /**

21     * Resolve the configuration value.

22     *

23     * @param  self  $attribute

24     * @param  \Illuminate\Contracts\Container\Container  $container

25     * @param  \ReflectionParameter  $parameter

26     * @return mixed

27     */

28    public static function resolve(self $attribute, Container $container, ReflectionParameter $parameter)

29    {

30        return $container->make('config')->get($attribute->key, $attribute->default);

31    }

32}

<?php

namespace App\Attributes;

use Attribute;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Container\ContextualAttribute;
use ReflectionParameter;

#[Attribute(Attribute::TARGET_PARAMETER)]
class Config implements ContextualAttribute
{
    /**
     * Create a new attribute instance.
     */
    public function __construct(public string $key, public mixed $default = null)
    {
    }

    /**
     * Resolve the configuration value.
     *
     * @param  self  $attribute
     * @param  \Illuminate\Contracts\Container\Container  $container
     * @param  \ReflectionParameter  $parameter
     * @return mixed
     */
    public static function resolve(self $attribute, Container $container, ReflectionParameter $parameter)
    {
        return $container->make('config')->get($attribute->key, $attribute->default);
    }
}
```

### [Binding Primitives](#binding-primitives)

Sometimes you may have a class that receives some injected classes, but also needs an injected primitive value such as an integer. You may easily use contextual binding to inject any value your class may need:

```
1use App\Http\Controllers\UserController;

2

3$this->app->when(UserController::class)

4    ->needs('$variableName')

5    ->give($value);

use App\Http\Controllers\UserController;

$this->app->when(UserController::class)
    ->needs('$variableName')
    ->give($value);
```

Sometimes a class may depend on an array of [tagged](#tagging) instances. Using the `giveTagged` method, you may easily inject all of the container bindings with that tag:

```
1$this->app->when(ReportAggregator::class)

2    ->needs('$reports')

3    ->giveTagged('reports');

$this->app->when(ReportAggregator::class)
    ->needs('$reports')
    ->giveTagged('reports');
```

If you need to inject a value from one of your application's configuration files, you may use the `giveConfig` method:

```
1$this->app->when(ReportAggregator::class)

2    ->needs('$timezone')

3    ->giveConfig('app.timezone');

$this->app->when(ReportAggregator::class)
    ->needs('$timezone')
    ->giveConfig('app.timezone');
```

### [Binding Typed Variadics](#binding-typed-variadics)

Occasionally, you may have a class that receives an array of typed objects using a variadic constructor argument:

```
1<?php

2

3use App\Models\Filter;

4use App\Services\Logger;

5

6class Firewall

7{

8    /**

9     * The filter instances.

10     *

11     * @var array

12     */

13    protected $filters;

14

15    /**

16     * Create a new class instance.

17     */

18    public function __construct(

19        protected Logger $logger,

20        Filter ...$filters,

21    ) {

22        $this->filters = $filters;

23    }

24}

<?php

use App\Models\Filter;
use App\Services\Logger;

class Firewall
{
    /**
     * The filter instances.
     *
     * @var array
     */
    protected $filters;

    /**
     * Create a new class instance.
     */
    public function __construct(
        protected Logger $logger,
        Filter ...$filters,
    ) {
        $this->filters = $filters;
    }
}
```

Using contextual binding, you may resolve this dependency by providing the `give` method with a closure that returns an array of resolved `Filter` instances:

```
1$this->app->when(Firewall::class)

2    ->needs(Filter::class)

3    ->give(function (Application $app) {

4          return [

5              $app->make(NullFilter::class),

6              $app->make(ProfanityFilter::class),

7              $app->make(TooLongFilter::class),

8          ];

9    });

$this->app->when(Firewall::class)
    ->needs(Filter::class)
    ->give(function (Application $app) {
          return [
              $app->make(NullFilter::class),
              $app->make(ProfanityFilter::class),
              $app->make(TooLongFilter::class),
          ];
    });
```

For convenience, you may also just provide an array of class names to be resolved by the container whenever `Firewall` needs `Filter` instances:

```
1$this->app->when(Firewall::class)

2    ->needs(Filter::class)

3    ->give([

4        NullFilter::class,

5        ProfanityFilter::class,

6        TooLongFilter::class,

7    ]);

$this->app->when(Firewall::class)
    ->needs(Filter::class)
    ->give([
        NullFilter::class,
        ProfanityFilter::class,
        TooLongFilter::class,
    ]);
```

#### [Variadic Tag Dependencies](#variadic-tag-dependencies)

Sometimes a class may have a variadic dependency that is type-hinted as a given class (`Report ...$reports`). Using the `needs` and `giveTagged` methods, you may easily inject all of the container bindings with that [tag](#tagging) for the given dependency:

```
1$this->app->when(ReportAggregator::class)

2    ->needs(Report::class)

3    ->giveTagged('reports');

$this->app->when(ReportAggregator::class)
    ->needs(Report::class)
    ->giveTagged('reports');
```

### [Tagging](#tagging)

Occasionally, you may need to resolve all of a certain "category" of binding. For example, perhaps you are building a report analyzer that receives an array of many different `Report` interface implementations. After registering the `Report` implementations, you can assign them a tag using the `tag` method:

```
1$this->app->bind(CpuReport::class, function () {

2    // ...

3});

4

5$this->app->bind(MemoryReport::class, function () {

6    // ...

7});

8

9$this->app->tag([CpuReport::class, MemoryReport::class], 'reports');

$this->app->bind(CpuReport::class, function () {
    // ...
});

$this->app->bind(MemoryReport::class, function () {
    // ...
});

$this->app->tag([CpuReport::class, MemoryReport::class], 'reports');
```

Once the services have been tagged, you may easily resolve them all via the container's `tagged` method:

```
1$this->app->bind(ReportAnalyzer::class, function (Application $app) {

2    return new ReportAnalyzer($app->tagged('reports'));

3});

$this->app->bind(ReportAnalyzer::class, function (Application $app) {
    return new ReportAnalyzer($app->tagged('reports'));
});
```

### [Extending Bindings](#extending-bindings)

The `extend` method allows the modification of resolved services. For example, when a service is resolved, you may run additional code to decorate or configure the service. The `extend` method accepts two arguments, the service class you're extending and a closure that should return the modified service. The closure receives the service being resolved and the container instance:

```
1$this->app->extend(Service::class, function (Service $service, Application $app) {

2    return new DecoratedService($service);

3});

$this->app->extend(Service::class, function (Service $service, Application $app) {
    return new DecoratedService($service);
});
```

## [Resolving](#resolving)

### [The `make` Method](#the-make-method)

You may use the `make` method to resolve a class instance from the container. The `make` method accepts the name of the class or interface you wish to resolve:

```
1use App\Services\Transistor;

2

3$transistor = $this->app->make(Transistor::class);

use App\Services\Transistor;

$transistor = $this->app->make(Transistor::class);
```

If some of your class's dependencies are not resolvable via the container, you may inject them by passing them as an associative array into the `makeWith` method. For example, we may manually pass the `$id` constructor argument required by the `Transistor` service:

```
1use App\Services\Transistor;

2

3$transistor = $this->app->makeWith(Transistor::class, ['id' => 1]);

use App\Services\Transistor;

$transistor = $this->app->makeWith(Transistor::class, ['id' => 1]);
```

The `bound` method may be used to determine if a class or interface has been explicitly bound in the container:

```
1if ($this->app->bound(Transistor::class)) {

2    // ...

3}

if ($this->app->bound(Transistor::class)) {
    // ...
}
```

If you are outside of a service provider in a location of your code that does not have access to the `$app` variable, you may use the `App` [facade](facades.md) or the `app` [helper](helpers.md#method-app) to resolve a class instance from the container:

```
1use App\Services\Transistor;

2use Illuminate\Support\Facades\App;

3

4$transistor = App::make(Transistor::class);

5

6$transistor = app(Transistor::class);

use App\Services\Transistor;
use Illuminate\Support\Facades\App;

$transistor = App::make(Transistor::class);

$transistor = app(Transistor::class);
```

If you would like to have the Laravel container instance itself injected into a class that is being resolved by the container, you may type-hint the `Illuminate\Container\Container` class on your class's constructor:

```
1use Illuminate\Container\Container;

2

3/**

4 * Create a new class instance.

5 */

6public function __construct(

7    protected Container $container,

8) {}

use Illuminate\Container\Container;

/**
 * Create a new class instance.
 */
public function __construct(
    protected Container $container,
) {}
```

### [Automatic Injection](#automatic-injection)

Alternatively, and importantly, you may type-hint the dependency in the constructor of a class that is resolved by the container, including [controllers](controllers.md), [event listeners](events.md), [middleware](middleware.md), and more. Additionally, you may type-hint dependencies in the `handle` method of [queued jobs](queues.md). In practice, this is how most of your objects should be resolved by the container.

For example, you may type-hint a service defined by your application in a controller's constructor. The service will automatically be resolved and injected into the class:

```
1<?php

2

3namespace App\Http\Controllers;

4

5use App\Services\AppleMusic;

6

7class PodcastController extends Controller

8{

9    /**

10     * Create a new controller instance.

11     */

12    public function __construct(

13        protected AppleMusic $apple,

14    ) {}

15

16    /**

17     * Show information about the given podcast.

18     */

19    public function show(string $id): Podcast

20    {

21        return $this->apple->findPodcast($id);

22    }

23}

<?php

namespace App\Http\Controllers;

use App\Services\AppleMusic;

class PodcastController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected AppleMusic $apple,
    ) {}

    /**
     * Show information about the given podcast.
     */
    public function show(string $id): Podcast
    {
        return $this->apple->findPodcast($id);
    }
}
```

## [Method Invocation and Injection](#method-invocation-and-injection)

Sometimes you may wish to invoke a method on an object instance while allowing the container to automatically inject that method's dependencies. For example, given the following class:

```
1<?php

2

3namespace App;

4

5use App\Services\AppleMusic;

6

7class PodcastStats

8{

9    /**

10     * Generate a new podcast stats report.

11     */

12    public function generate(AppleMusic $apple): array

13    {

14        return [

15            // ...

16        ];

17    }

18}

<?php

namespace App;

use App\Services\AppleMusic;

class PodcastStats
{
    /**
     * Generate a new podcast stats report.
     */
    public function generate(AppleMusic $apple): array
    {
        return [
            // ...
        ];
    }
}
```

You may invoke the `generate` method via the container like so:

```
1use App\PodcastStats;

2use Illuminate\Support\Facades\App;

3

4$stats = App::call([new PodcastStats, 'generate']);

use App\PodcastStats;
use Illuminate\Support\Facades\App;

$stats = App::call([new PodcastStats, 'generate']);
```

The `call` method accepts any PHP callable. The container's `call` method may even be used to invoke a closure while automatically injecting its dependencies:

```
1use App\Services\AppleMusic;

2use Illuminate\Support\Facades\App;

3

4$result = App::call(function (AppleMusic $apple) {

5    // ...

6});

use App\Services\AppleMusic;
use Illuminate\Support\Facades\App;

$result = App::call(function (AppleMusic $apple) {
    // ...
});
```

## [Container Events](#container-events)

The service container fires an event each time it resolves an object. You may listen to this event using the `resolving` method:

```
1use App\Services\Transistor;

2use Illuminate\Contracts\Foundation\Application;

3

4$this->app->resolving(Transistor::class, function (Transistor $transistor, Application $app) {

5    // Called when container resolves objects of type "Transistor"...

6});

7

8$this->app->resolving(function (mixed $object, Application $app) {

9    // Called when container resolves object of any type...

10});

use App\Services\Transistor;
use Illuminate\Contracts\Foundation\Application;

$this->app->resolving(Transistor::class, function (Transistor $transistor, Application $app) {
    // Called when container resolves objects of type "Transistor"...
});

$this->app->resolving(function (mixed $object, Application $app) {
    // Called when container resolves object of any type...
});
```

As you can see, the object being resolved will be passed to the callback, allowing you to set any additional properties on the object before it is given to its consumer.

### [Rebinding](#rebinding)

The `rebinding` method allows you to listen for when a service is re-bound to the container, meaning it is registered again or overridden after its initial binding. This can be useful when you need to update dependencies or modify behavior each time a specific binding is updated:

```
1use App\Contracts\PodcastPublisher;

2use App\Services\SpotifyPublisher;

3use App\Services\TransistorPublisher;

4use Illuminate\Contracts\Foundation\Application;

5

6$this->app->bind(PodcastPublisher::class, SpotifyPublisher::class);

7

8$this->app->rebinding(

9    PodcastPublisher::class,

10    function (Application $app, PodcastPublisher $newInstance) {

11        //

12    },

13);

14

15// New binding will trigger rebinding closure...

16$this->app->bind(PodcastPublisher::class, TransistorPublisher::class);

use App\Contracts\PodcastPublisher;
use App\Services\SpotifyPublisher;
use App\Services\TransistorPublisher;
use Illuminate\Contracts\Foundation\Application;

$this->app->bind(PodcastPublisher::class, SpotifyPublisher::class);

$this->app->rebinding(
    PodcastPublisher::class,
    function (Application $app, PodcastPublisher $newInstance) {
        //
    },
);

// New binding will trigger rebinding closure...
$this->app->bind(PodcastPublisher::class, TransistorPublisher::class);
```

## [PSR-11](#psr-11)

Laravel's service container implements the [PSR-11](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md) interface. Therefore, you may type-hint the PSR-11 container interface to obtain an instance of the Laravel container:

```
1use App\Services\Transistor;

2use Psr\Container\ContainerInterface;

3

4Route::get('/', function (ContainerInterface $container) {

5    $service = $container->get(Transistor::class);

6

7    // ...

8});

use App\Services\Transistor;
use Psr\Container\ContainerInterface;

Route::get('/', function (ContainerInterface $container) {
    $service = $container->get(Transistor::class);

    // ...
});
```

An exception is thrown if the given identifier can't be resolved. The exception will be an instance of `Psr\Container\NotFoundExceptionInterface` if the identifier was never bound. If the identifier was bound but was unable to be resolved, an instance of `Psr\Container\ContainerExceptionInterface` will be thrown.

Copy as markdown

### On this page

- [Introduction](#introduction)
  - [Zero Configuration Resolution](#zero-configuration-resolution)
  - [When to Utilize the Container](#when-to-use-the-container)
- [Binding](#binding)
  - [Binding Basics](#binding-basics)
  - [Binding Interfaces to Implementations](#binding-interfaces-to-implementations)
  - [Contextual Binding](#contextual-binding)
  - [Contextual Attributes](#contextual-attributes)
  - [Binding Primitives](#binding-primitives)
  - [Binding Typed Variadics](#binding-typed-variadics)
  - [Tagging](#tagging)
  - [Extending Bindings](#extending-bindings)
- [Resolving](#resolving)
  - [The Make Method](#the-make-method)
  - [Automatic Injection](#automatic-injection)
- [Method Invocation and Injection](#method-invocation-and-injection)
- [Container Events](#container-events)
  - [Rebinding](#rebinding)
- [PSR-11](#psr-11)

Laravel is the most productive way to  
 build, deploy, and monitor software.

First name

Last name

Email address

Stay updated

By submitting this form, you agree to our [terms](https://laravel.com/legal). You can opt-out anytime.

- © 2026 Laravel
- [Legal](https://laravel.com/legal)
- [Status](https://status.laravel.com/)

Products

- [Cloud](https://laravel.com/cloud)
- [Forge](https://forge.laravel.com)
- [Nightwatch](https://nightwatch.laravel.com)
- [Vapor](https://vapor.laravel.com)
- [Nova](https://nova.laravel.com)

Packages

- [Cashier](billing.md)
- [Dusk](dusk.md)
- [Horizon](horizon.md)
- [Octane](octane.md)
- [Scout](scout.md)
- [Pennant](pennant.md)
- [Pint](pint.md)
- [Sail](sail.md)
- [Sanctum](sanctum.md)
- [Socialite](socialite.md)
- [Telescope](telescope.md)
- [Pulse](pulse.md)
- [Reverb](reverb.md)
- [Echo](broadcasting.md)

Resources

- [Documentation](index.md)
- [Starter Kits](https://laravel.com/starter-kits)
- [Release Notes](releases.md)
- [Blog](https://laravel.com/blog)
- [News](https://laravel-news.com)
- [Community](https://laravel.com/community)
- [Larabelles](https://larabelles.com/)
- [Learn](https://laravel.com/learn)
- [Jobs](https://larajobs.com/?partner=5)
- [Careers](https://laravel.com/careers)
- [Trust](https://trust.laravel.com)

Partners

- [UCodeSoft](https://laravel.com/partners/ucodesoft)
- [Threadable](https://laravel.com/partners/threadable)
- [64 Robots](https://laravel.com/partners/64-robots)
- [byte5](https://laravel.com/partners/byte5)
- [Jump24](https://laravel.com/partners/jump24)
- [Kirschbaum](https://laravel.com/partners/kirschbaum)
- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Curotec](https://laravel.com/partners/curotec)
- [Vehikl](https://laravel.com/partners/vehikl)
- [Tighten](https://laravel.com/partners/tighten)
- [See All](https://laravel.com/partners)
