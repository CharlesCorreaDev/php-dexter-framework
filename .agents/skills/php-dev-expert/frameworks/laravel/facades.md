# Facades | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/facades

---

[Skip to content](#main-content)

# Facades

- [Introduction](#introduction)
- [When to Utilize Facades](#when-to-use-facades)
  - [Facades vs. Dependency Injection](#facades-vs-dependency-injection)
  - [Facades vs. Helper Functions](#facades-vs-helper-functions)
- [How Facades Work](#how-facades-work)
- [Real-Time Facades](#real-time-facades)
- [Facade Class Reference](#facade-class-reference)

## [Introduction](#introduction)

Throughout the Laravel documentation, you will see examples of code that interacts with Laravel's features via "facades". Facades provide a "static" interface to classes that are available in the application's [service container](container.md). Laravel ships with many facades which provide access to almost all of Laravel's features.

Laravel facades serve as "static proxies" to underlying classes in the service container, providing the benefit of a terse, expressive syntax while maintaining more testability and flexibility than traditional static methods. It's perfectly fine if you don't totally understand how facades work - just go with the flow and continue learning about Laravel.

All of Laravel's facades are defined in the `Illuminate\Support\Facades` namespace. So, we can easily access a facade like so:

```
1use Illuminate\Support\Facades\Cache;

2use Illuminate\Support\Facades\Route;

3

4Route::get('/cache', function () {

5    return Cache::get('key');

6});

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/cache', function () {
    return Cache::get('key');
});
```

Throughout the Laravel documentation, many of the examples will use facades to demonstrate various features of the framework.

#### [Helper Functions](#helper-functions)

To complement facades, Laravel offers a variety of global "helper functions" that make it even easier to interact with common Laravel features. Some of the common helper functions you may interact with are `view`, `response`, `url`, `config`, and more. Each helper function offered by Laravel is documented with their corresponding feature; however, a complete list is available within the dedicated [helper documentation](helpers.md).

For example, instead of using the `Illuminate\Support\Facades\Response` facade to generate a JSON response, we may simply use the `response` function. Because helper functions are globally available, you do not need to import any classes in order to use them:

```
1use Illuminate\Support\Facades\Response;

2

3Route::get('/users', function () {

4    return Response::json([

5        // ...

6    ]);

7});

8

9Route::get('/users', function () {

10    return response()->json([

11        // ...

12    ]);

13});

use Illuminate\Support\Facades\Response;

Route::get('/users', function () {
    return Response::json([
        // ...
    ]);
});

Route::get('/users', function () {
    return response()->json([
        // ...
    ]);
});
```

## [When to Utilize Facades](#when-to-use-facades)

Facades have many benefits. They provide a terse, memorable syntax that allows you to use Laravel's features without remembering long class names that must be injected or configured manually. Furthermore, because of their unique usage of PHP's dynamic methods, they are easy to test.

However, some care must be taken when using facades. The primary danger of facades is class "scope creep". Since facades are so easy to use and do not require injection, it can be easy to let your classes continue to grow and use many facades in a single class. Using dependency injection, this potential is mitigated by the visual feedback a large constructor gives you that your class is growing too large. So, when using facades, pay special attention to the size of your class so that its scope of responsibility stays narrow. If your class is getting too large, consider splitting it into multiple smaller classes.

### [Facades vs. Dependency Injection](#facades-vs-dependency-injection)

One of the primary benefits of dependency injection is the ability to swap implementations of the injected class. This is useful during testing since you can inject a mock or stub and assert that various methods were called on the stub.

Typically, it would not be possible to mock or stub a truly static class method. However, since facades use dynamic methods to proxy method calls to objects resolved from the service container, we actually can test facades just as we would test an injected class instance. For example, given the following route:

```
1use Illuminate\Support\Facades\Cache;

2

3Route::get('/cache', function () {

4    return Cache::get('key');

5});

use Illuminate\Support\Facades\Cache;

Route::get('/cache', function () {
    return Cache::get('key');
});
```

Using Laravel's facade testing methods, we can write the following test to verify that the `Cache::get` method was called with the argument we expected:

Pest
PHPUnit

```
1use Illuminate\Support\Facades\Cache;

2

3test('basic example', function () {

4    Cache::shouldReceive('get')

5        ->with('key')

6        ->andReturn('value');

7

8    $response = $this->get('/cache');

9

10    $response->assertSee('value');

11});

use Illuminate\Support\Facades\Cache;

test('basic example', function () {
    Cache::shouldReceive('get')
        ->with('key')
        ->andReturn('value');

    $response = $this->get('/cache');

    $response->assertSee('value');
});
```

```
1use Illuminate\Support\Facades\Cache;

2

3/**

4 * A basic functional test example.

5 */

6public function test_basic_example(): void

7{

8    Cache::shouldReceive('get')

9        ->with('key')

10        ->andReturn('value');

11

12    $response = $this->get('/cache');

13

14    $response->assertSee('value');

15}

use Illuminate\Support\Facades\Cache;

/**
 * A basic functional test example.
 */
public function test_basic_example(): void
{
    Cache::shouldReceive('get')
        ->with('key')
        ->andReturn('value');

    $response = $this->get('/cache');

    $response->assertSee('value');
}
```

### [Facades vs. Helper Functions](#facades-vs-helper-functions)

In addition to facades, Laravel includes a variety of "helper" functions which can perform common tasks like generating views, firing events, dispatching jobs, or sending HTTP responses. Many of these helper functions perform the same function as a corresponding facade. For example, this facade call and helper call are equivalent:

```
1return Illuminate\Support\Facades\View::make('profile');

2

3return view('profile');

return Illuminate\Support\Facades\View::make('profile');

return view('profile');
```

There is absolutely no practical difference between facades and helper functions. When using helper functions, you may still test them exactly as you would the corresponding facade. For example, given the following route:

```
1Route::get('/cache', function () {

2    return cache('key');

3});

Route::get('/cache', function () {
    return cache('key');
});
```

The `cache` helper is going to call the `get` method on the class underlying the `Cache` facade. So, even though we are using the helper function, we can write the following test to verify that the method was called with the argument we expected:

```
1use Illuminate\Support\Facades\Cache;

2

3/**

4 * A basic functional test example.

5 */

6public function test_basic_example(): void

7{

8    Cache::shouldReceive('get')

9        ->with('key')

10        ->andReturn('value');

11

12    $response = $this->get('/cache');

13

14    $response->assertSee('value');

15}

use Illuminate\Support\Facades\Cache;

/**
 * A basic functional test example.
 */
public function test_basic_example(): void
{
    Cache::shouldReceive('get')
        ->with('key')
        ->andReturn('value');

    $response = $this->get('/cache');

    $response->assertSee('value');
}
```

## [How Facades Work](#how-facades-work)

In a Laravel application, a facade is a class that provides access to an object from the container. The machinery that makes this work is in the `Facade` class. Laravel's facades, and any custom facades you create, will extend the base `Illuminate\Support\Facades\Facade` class.

The `Facade` base class makes use of the `__callStatic()` magic-method to defer calls from your facade to an object resolved from the container. In the example below, a call is made to the Laravel cache system. By glancing at this code, one might assume that the static `get` method is being called on the `Cache` class:

```
1<?php

2

3namespace App\Http\Controllers;

4

5use Illuminate\Support\Facades\Cache;

6use Illuminate\View\View;

7

8class UserController extends Controller

9{

10    /**

11     * Show the profile for the given user.

12     */

13    public function showProfile(string $id): View

14    {

15        $user = Cache::get('user:'.$id);

16

17        return view('profile', ['user' => $user]);

18    }

19}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     */
    public function showProfile(string $id): View
    {
        $user = Cache::get('user:'.$id);

        return view('profile', ['user' => $user]);
    }
}
```

Notice that near the top of the file we are "importing" the `Cache` facade. This facade serves as a proxy for accessing the underlying implementation of the `Illuminate\Contracts\Cache\Factory` interface. Any calls we make using the facade will be passed to the underlying instance of Laravel's cache service.

If we look at that `Illuminate\Support\Facades\Cache` class, you'll see that there is no static method `get`:

```
1class Cache extends Facade

2{

3    /**

4     * Get the registered name of the component.

5     */

6    protected static function getFacadeAccessor(): string

7    {

8        return 'cache';

9    }

10}

class Cache extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'cache';
    }
}
```

Instead, the `Cache` facade extends the base `Facade` class and defines the method `getFacadeAccessor()`. This method's job is to return the name of a service container binding. When a user references any static method on the `Cache` facade, Laravel resolves the `cache` binding from the [service container](container.md) and runs the requested method (in this case, `get`) against that object.

## [Real-Time Facades](#real-time-facades)

Using real-time facades, you may treat any class in your application as if it was a facade. To illustrate how this can be used, let's first examine some code that does not use real-time facades. For example, let's assume our `Podcast` model has a `publish` method. However, in order to publish the podcast, we need to inject a `Publisher` instance:

```
1<?php

2

3namespace App\Models;

4

5use App\Contracts\Publisher;

6use Illuminate\Database\Eloquent\Model;

7

8class Podcast extends Model

9{

10    /**

11     * Publish the podcast.

12     */

13    public function publish(Publisher $publisher): void

14    {

15        $this->update(['publishing' => now()]);

16

17        $publisher->publish($this);

18    }

19}

<?php

namespace App\Models;

use App\Contracts\Publisher;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    /**
     * Publish the podcast.
     */
    public function publish(Publisher $publisher): void
    {
        $this->update(['publishing' => now()]);

        $publisher->publish($this);
    }
}
```

Injecting a publisher implementation into the method allows us to easily test the method in isolation since we can mock the injected publisher. However, it requires us to always pass a publisher instance each time we call the `publish` method. Using real-time facades, we can maintain the same testability while not being required to explicitly pass a `Publisher` instance. To generate a real-time facade, prefix the namespace of the imported class with `Facades`:

```
1<?php

2

3namespace App\Models;

4

5use App\Contracts\Publisher;

6use Facades\App\Contracts\Publisher;

7use Illuminate\Database\Eloquent\Model;

8

9class Podcast extends Model

10{

11    /**

12     * Publish the podcast.

13     */

14    public function publish(Publisher $publisher): void

15    public function publish(): void

16    {

17        $this->update(['publishing' => now()]);

18

19        $publisher->publish($this);

20        Publisher::publish($this);

21    }

22}

<?php

namespace App\Models;

use App\Contracts\Publisher;
use Facades\App\Contracts\Publisher;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    /**
     * Publish the podcast.
     */
    public function publish(Publisher $publisher): void
    public function publish(): void
    {
        $this->update(['publishing' => now()]);

        $publisher->publish($this);
        Publisher::publish($this);
    }
}
```

When the real-time facade is used, the publisher implementation will be resolved out of the service container using the portion of the interface or class name that appears after the `Facades` prefix. When testing, we can use Laravel's built-in facade testing helpers to mock this method call:

Pest
PHPUnit

```
1<?php

2

3use App\Models\Podcast;

4use Facades\App\Contracts\Publisher;

5use Illuminate\Foundation\Testing\RefreshDatabase;

6

7pest()->use(RefreshDatabase::class);

8

9test('podcast can be published', function () {

10    $podcast = Podcast::factory()->create();

11

12    Publisher::shouldReceive('publish')->once()->with($podcast);

13

14    $podcast->publish();

15});

<?php

use App\Models\Podcast;
use Facades\App\Contracts\Publisher;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('podcast can be published', function () {
    $podcast = Podcast::factory()->create();

    Publisher::shouldReceive('publish')->once()->with($podcast);

    $podcast->publish();
});
```

```
1<?php

2

3namespace Tests\Feature;

4

5use App\Models\Podcast;

6use Facades\App\Contracts\Publisher;

7use Illuminate\Foundation\Testing\RefreshDatabase;

8use Tests\TestCase;

9

10class PodcastTest extends TestCase

11{

12    use RefreshDatabase;

13

14    /**

15     * A test example.

16     */

17    public function test_podcast_can_be_published(): void

18    {

19        $podcast = Podcast::factory()->create();

20

21        Publisher::shouldReceive('publish')->once()->with($podcast);

22

23        $podcast->publish();

24    }

25}

<?php

namespace Tests\Feature;

use App\Models\Podcast;
use Facades\App\Contracts\Publisher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PodcastTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A test example.
     */
    public function test_podcast_can_be_published(): void
    {
        $podcast = Podcast::factory()->create();

        Publisher::shouldReceive('publish')->once()->with($podcast);

        $podcast->publish();
    }
}
```

## [Facade Class Reference](#facade-class-reference)

Below you will find every facade and its underlying class. This is a useful tool for quickly digging into the API documentation for a given facade root. The [service container binding](container.md) key is also included where applicable.

| Facade | Class | Service Container Binding |
| --- | --- | --- |
| App | [Illuminate\Foundation\Application](https://api.laravel.com/framework/docs/Illuminate/Foundation/Application.html) | `app` |
| Artisan | [Illuminate\Contracts\Console\Kernel](https://api.laravel.com/framework/docs/Illuminate/Contracts/Console/Kernel.html) |  |
| Auth (Instance) | [Illuminate\Contracts\Auth\Guard](https://api.laravel.com/framework/docs/Illuminate/Contracts/Auth/Guard.html) | `auth.driver` |
| Auth | [Illuminate\Auth\AuthManager](https://api.laravel.com/framework/docs/Illuminate/Auth/AuthManager.html) | `auth` |
| Blade | [Illuminate\View\Compilers\BladeCompiler](https://api.laravel.com/framework/docs/Illuminate/View/Compilers/BladeCompiler.html) | `blade.compiler` |
| Broadcast (Instance) | [Illuminate\Contracts\Broadcasting\Broadcaster](https://api.laravel.com/framework/docs/Illuminate/Contracts/Broadcasting/Broadcaster.html) |  |
| Broadcast | [Illuminate\Contracts\Broadcasting\Factory](https://api.laravel.com/framework/docs/Illuminate/Contracts/Broadcasting/Factory.html) |  |
| Bus | [Illuminate\Contracts\Bus\Dispatcher](https://api.laravel.com/framework/docs/Illuminate/Contracts/Bus/Dispatcher.html) |  |
| Cache (Instance) | [Illuminate\Cache\Repository](https://api.laravel.com/framework/docs/Illuminate/Cache/Repository.html) | `cache.store` |
| Cache | [Illuminate\Cache\CacheManager](https://api.laravel.com/framework/docs/Illuminate/Cache/CacheManager.html) | `cache` |
| Cloud | [Illuminate\Foundation\Cloud\CloudManager](https://api.laravel.com/framework/docs/Illuminate/Foundation/Cloud/CloudManager.html) |  |
| Config | [Illuminate\Config\Repository](https://api.laravel.com/framework/docs/Illuminate/Config/Repository.html) | `config` |
| Context | [Illuminate\Log\Context\Repository](https://api.laravel.com/framework/docs/Illuminate/Log/Context/Repository.html) |  |
| Cookie | [Illuminate\Cookie\CookieJar](https://api.laravel.com/framework/docs/Illuminate/Cookie/CookieJar.html) | `cookie` |
| Crypt | [Illuminate\Encryption\Encrypter](https://api.laravel.com/framework/docs/Illuminate/Encryption/Encrypter.html) | `encrypter` |
| Date | [Illuminate\Support\DateFactory](https://api.laravel.com/framework/docs/Illuminate/Support/DateFactory.html) | `date` |
| DB (Instance) | [Illuminate\Database\Connection](https://api.laravel.com/framework/docs/Illuminate/Database/Connection.html) | `db.connection` |
| DB | [Illuminate\Database\DatabaseManager](https://api.laravel.com/framework/docs/Illuminate/Database/DatabaseManager.html) | `db` |
| Event | [Illuminate\Events\Dispatcher](https://api.laravel.com/framework/docs/Illuminate/Events/Dispatcher.html) | `events` |
| Exceptions (Instance) | [Illuminate\Contracts\Debug\ExceptionHandler](https://api.laravel.com/framework/docs/Illuminate/Contracts/Debug/ExceptionHandler.html) |  |
| Exceptions | [Illuminate\Foundation\Exceptions\Handler](https://api.laravel.com/framework/docs/Illuminate/Foundation/Exceptions/Handler.html) |  |
| File | [Illuminate\Filesystem\Filesystem](https://api.laravel.com/framework/docs/Illuminate/Filesystem/Filesystem.html) | `files` |
| Gate | [Illuminate\Contracts\Auth\Access\Gate](https://api.laravel.com/framework/docs/Illuminate/Contracts/Auth/Access/Gate.html) |  |
| Hash | [Illuminate\Contracts\Hashing\Hasher](https://api.laravel.com/framework/docs/Illuminate/Contracts/Hashing/Hasher.html) | `hash` |
| Http | [Illuminate\Http\Client\Factory](https://api.laravel.com/framework/docs/Illuminate/Http/Client/Factory.html) |  |
| Lang | [Illuminate\Translation\Translator](https://api.laravel.com/framework/docs/Illuminate/Translation/Translator.html) | `translator` |
| Log | [Illuminate\Log\LogManager](https://api.laravel.com/framework/docs/Illuminate/Log/LogManager.html) | `log` |
| Mail (Instance) | [Illuminate\Mail\Mailer](https://api.laravel.com/framework/docs/Illuminate/Mail/Mailer.html) | `mailer` |
| Mail | [Illuminate\Mail\MailManager](https://api.laravel.com/framework/docs/Illuminate/Mail/MailManager.html) | `mail.manager` |
| Notification | [Illuminate\Notifications\ChannelManager](https://api.laravel.com/framework/docs/Illuminate/Notifications/ChannelManager.html) |  |
| Password (Instance) | [Illuminate\Auth\Passwords\PasswordBroker](https://api.laravel.com/framework/docs/Illuminate/Auth/Passwords/PasswordBroker.html) | `auth.password.broker` |
| Password | [Illuminate\Auth\Passwords\PasswordBrokerManager](https://api.laravel.com/framework/docs/Illuminate/Auth/Passwords/PasswordBrokerManager.html) | `auth.password` |
| Pipeline (Instance) | [Illuminate\Pipeline\Pipeline](https://api.laravel.com/framework/docs/Illuminate/Pipeline/Pipeline.html) |  |
| Process | [Illuminate\Process\Factory](https://api.laravel.com/framework/docs/Illuminate/Process/Factory.html) |  |
| Queue (Base Class) | [Illuminate\Queue\Queue](https://api.laravel.com/framework/docs/Illuminate/Queue/Queue.html) |  |
| Queue (Instance) | [Illuminate\Contracts\Queue\Queue](https://api.laravel.com/framework/docs/Illuminate/Contracts/Queue/Queue.html) | `queue.connection` |
| Queue | [Illuminate\Queue\QueueManager](https://api.laravel.com/framework/docs/Illuminate/Queue/QueueManager.html) | `queue` |
| RateLimiter | [Illuminate\Cache\RateLimiter](https://api.laravel.com/framework/docs/Illuminate/Cache/RateLimiter.html) |  |
| Redirect | [Illuminate\Routing\Redirector](https://api.laravel.com/framework/docs/Illuminate/Routing/Redirector.html) | `redirect` |
| Redis (Instance) | [Illuminate\Redis\Connections\Connection](https://api.laravel.com/framework/docs/Illuminate/Redis/Connections/Connection.html) | `redis.connection` |
| Redis | [Illuminate\Redis\RedisManager](https://api.laravel.com/framework/docs/Illuminate/Redis/RedisManager.html) | `redis` |
| Request | [Illuminate\Http\Request](https://api.laravel.com/framework/docs/Illuminate/Http/Request.html) | `request` |
| Response (Instance) | [Illuminate\Http\Response](https://api.laravel.com/framework/docs/Illuminate/Http/Response.html) |  |
| Response | [Illuminate\Contracts\Routing\ResponseFactory](https://api.laravel.com/framework/docs/Illuminate/Contracts/Routing/ResponseFactory.html) |  |
| Route | [Illuminate\Routing\Router](https://api.laravel.com/framework/docs/Illuminate/Routing/Router.html) | `router` |
| Schedule | [Illuminate\Console\Scheduling\Schedule](https://api.laravel.com/framework/docs/Illuminate/Console/Scheduling/Schedule.html) |  |
| Schema | [Illuminate\Database\Schema\Builder](https://api.laravel.com/framework/docs/Illuminate/Database/Schema/Builder.html) |  |
| Session (Instance) | [Illuminate\Session\Store](https://api.laravel.com/framework/docs/Illuminate/Session/Store.html) | `session.store` |
| Session | [Illuminate\Session\SessionManager](https://api.laravel.com/framework/docs/Illuminate/Session/SessionManager.html) | `session` |
| Storage (Instance) | [Illuminate\Contracts\Filesystem\Filesystem](https://api.laravel.com/framework/docs/Illuminate/Contracts/Filesystem/Filesystem.html) | `filesystem.disk` |
| Storage | [Illuminate\Filesystem\FilesystemManager](https://api.laravel.com/framework/docs/Illuminate/Filesystem/FilesystemManager.html) | `filesystem` |
| URL | [Illuminate\Routing\UrlGenerator](https://api.laravel.com/framework/docs/Illuminate/Routing/UrlGenerator.html) | `url` |
| Validator (Instance) | [Illuminate\Validation\Validator](https://api.laravel.com/framework/docs/Illuminate/Validation/Validator.html) |  |
| Validator | [Illuminate\Validation\Factory](https://api.laravel.com/framework/docs/Illuminate/Validation/Factory.html) | `validator` |
| View (Instance) | [Illuminate\View\View](https://api.laravel.com/framework/docs/Illuminate/View/View.html) |  |
| View | [Illuminate\View\Factory](https://api.laravel.com/framework/docs/Illuminate/View/Factory.html) | `view` |
| Vite | [Illuminate\Foundation\Vite](https://api.laravel.com/framework/docs/Illuminate/Foundation/Vite.html) |  |

Copy as markdown

### On this page

- [Introduction](#introduction)
- [When to Utilize Facades](#when-to-use-facades)
  - [Facades vs. Dependency Injection](#facades-vs-dependency-injection)
  - [Facades vs. Helper Functions](#facades-vs-helper-functions)
- [How Facades Work](#how-facades-work)
- [Real-Time Facades](#real-time-facades)
- [Facade Class Reference](#facade-class-reference)

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

- [byte5](https://laravel.com/partners/byte5)
- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Pixel](https://laravel.com/partners/pixel)
- [Vehikl](https://laravel.com/partners/vehikl)
- [Kirschbaum](https://laravel.com/partners/kirschbaum)
- [64 Robots](https://laravel.com/partners/64-robots)
- [Jump24](https://laravel.com/partners/jump24)
- [Threadable](https://laravel.com/partners/threadable)
- [Curotec](https://laravel.com/partners/curotec)
- [Tighten](https://laravel.com/partners/tighten)
- [See All](https://laravel.com/partners)
