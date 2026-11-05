# Concurrency | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/concurrency

---

[Skip to content](#main-content)

# Concurrency

- [Introduction](#introduction)
- [Running Concurrent Tasks](#running-concurrent-tasks)
  - [Named Results](#named-results)
  - [Task Timeouts](#task-timeouts)
- [Deferring Concurrent Tasks](#deferring-concurrent-tasks)

## [Introduction](#introduction)

Sometimes you may need to execute several slow tasks which do not depend on one another. In many cases, significant performance improvements can be realized by executing the tasks concurrently. Laravel's `Concurrency` facade provides a simple, convenient API for executing closures concurrently.

#### [How it Works](#how-it-works)

Laravel achieves concurrency by serializing the given closures and dispatching them to a hidden Artisan CLI command, which unserializes the closures and invokes it within its own PHP process. After the closure has been invoked, the resulting value is serialized back to the parent process.

The `Concurrency` facade supports three drivers: `process` (the default), `fork`, and `sync`.

The `fork` driver offers improved performance compared to the default `process` driver, but it may only be used within PHP's CLI context, as PHP does not support forking during web requests. Before using the `fork` driver, you need to install the `spatie/fork` package:

```
1composer require spatie/fork

composer require spatie/fork
```

The `sync` driver is primarily useful during testing when you want to disable all concurrency and simply execute the given closures in sequence within the parent process.

## [Running Concurrent Tasks](#running-concurrent-tasks)

To run concurrent tasks, you may invoke the `Concurrency` facade's `run` method. The `run` method accepts an array of closures which should be executed simultaneously in child PHP processes:

```
1use Illuminate\Support\Facades\Concurrency;

2use Illuminate\Support\Facades\DB;

3

4[$userCount, $orderCount] = Concurrency::run([

5    fn () => DB::table('users')->count(),

6    fn () => DB::table('orders')->count(),

7]);

use Illuminate\Support\Facades\Concurrency;
use Illuminate\Support\Facades\DB;

[$userCount, $orderCount] = Concurrency::run([
    fn () => DB::table('users')->count(),
    fn () => DB::table('orders')->count(),
]);
```

To use a specific driver, you may use the `driver` method:

```
1$results = Concurrency::driver('fork')->run(...);

$results = Concurrency::driver('fork')->run(...);
```

Or, to change the default concurrency driver, you should publish the `concurrency` configuration file via the `config:publish` Artisan command and update the `default` option within the file:

```
1php artisan config:publish concurrency

php artisan config:publish concurrency
```

### [Named Results](#named-results)

If you would like to access concurrent task results by name rather than by position, you may provide an associative array of closures. Each result will be returned using the same key as its corresponding closure:

```
1use Illuminate\Support\Facades\Concurrency;

2use Illuminate\Support\Facades\DB;

3

4$results = Concurrency::run([

5    'users' => fn () => DB::table('users')->count(),

6    'orders' => fn () => DB::table('orders')->count(),

7]);

8

9$userCount = $results['users'];

10$orderCount = $results['orders'];

use Illuminate\Support\Facades\Concurrency;
use Illuminate\Support\Facades\DB;

$results = Concurrency::run([
    'users' => fn () => DB::table('users')->count(),
    'orders' => fn () => DB::table('orders')->count(),
]);

$userCount = $results['users'];
$orderCount = $results['orders'];
```

### [Task Timeouts](#task-timeouts)

When using the `process` driver (the default), you may specify a maximum number of seconds a concurrent task is allowed to run before it is terminated by providing a timeout to the `run` method:

```
1use Illuminate\Support\Facades\Concurrency;

2use Illuminate\Support\Facades\DB;

3

4[$userCount, $orderCount] = Concurrency::run([

5    fn () => DB::table('users')->count(),

6    fn () => DB::table('orders')->count(),

7], timeout: 30);

use Illuminate\Support\Facades\Concurrency;
use Illuminate\Support\Facades\DB;

[$userCount, $orderCount] = Concurrency::run([
    fn () => DB::table('users')->count(),
    fn () => DB::table('orders')->count(),
], timeout: 30);
```

You may also provide a `CarbonInterval` instance if you prefer a more expressive timeout definition:

```
1use Illuminate\Support\Facades\Concurrency;

2

3use function Illuminate\Support\seconds;

4

5Concurrency::run([...], timeout: seconds(30));

use Illuminate\Support\Facades\Concurrency;

use function Illuminate\Support\seconds;

Concurrency::run([...], timeout: seconds(30));
```

## [Deferring Concurrent Tasks](#deferring-concurrent-tasks)

If you would like to execute an array of closures concurrently, but are not interested in the results returned by those closures, you should consider using the `defer` method. When the `defer` method is invoked, the given closures are not executed immediately. Instead, Laravel will execute the closures concurrently after the HTTP response has been sent to the user:

```
1use App\Services\Metrics;

2use Illuminate\Support\Facades\Concurrency;

3

4Concurrency::defer([

5    fn () => Metrics::report('users'),

6    fn () => Metrics::report('orders'),

7]);

use App\Services\Metrics;
use Illuminate\Support\Facades\Concurrency;

Concurrency::defer([
    fn () => Metrics::report('users'),
    fn () => Metrics::report('orders'),
]);
```

Copy as markdown

### On this page

- [Introduction](#introduction)
- [Running Concurrent Tasks](#running-concurrent-tasks)
  - [Named Results](#named-results)
  - [Task Timeouts](#task-timeouts)
- [Deferring Concurrent Tasks](#deferring-concurrent-tasks)

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
- [CACI Limited](https://laravel.com/partners/caci-limited)
- [64 Robots](https://laravel.com/partners/64-robots)
- [Vehikl](https://laravel.com/partners/vehikl)
- [Curotec](https://laravel.com/partners/curotec)
- [Pixel](https://laravel.com/partners/pixel)
- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Kirschbaum](https://laravel.com/partners/kirschbaum)
- [Tighten](https://laravel.com/partners/tighten)
- [Jump24](https://laravel.com/partners/jump24)
- [See All](https://laravel.com/partners)
