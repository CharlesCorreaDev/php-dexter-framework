# Changelog | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/changelog

---

# Changelog

New updates and improvements to Laravel's open source products.

## September 2026

## [Laravel Framework 13.x](#september-2026-laravel-framework-13x)

### [Semantic and Hybrid Search for Typesense](#september-2026-semantic-and-hybrid-search-for-typesense)

Pull request by [@tharropoulos](https://github.com/laravel/scout/pull/1009)

Scout's Typesense engine now supports `semantic()` and `hybrid()` searches. Model embedding settings can use Laravel AI to generate vectors from `toSearchableEmbedding()` or use Typesense's native auto-embedding; precomputed vectors are also supported. Applications can search by meaning alone or combine semantic matches with text results through the Scout builder.

### [Reliable MariaDB Vector Queries and an Eloquent Vector Cast](#september-2026-reliable-mariadb-vector-queries-and-an-eloquent-vector-cast)

Pull request by [@eas4ai](https://github.com/laravel/framework/pull/61337)

MariaDB vector distance queries now convert bound vectors with `vec_fromtext()`, fixing SQL errors when using methods such as `whereVectorSimilarTo()` and `orderByVectorDistance()`. The new `AsVector` Eloquent cast reads MariaDB's binary vectors or PostgreSQL-compatible text vectors as arrays of floats and accepts arrays or `Arrayable` values when writing them.

```
1use Illuminate\Database\Eloquent\Casts\AsVector;

2use Illuminate\Database\Eloquent\Model;

3

4class Document extends Model

5{

6    protected $casts = [

7        'embedding' => AsVector::class,

8    ];

9}

use Illuminate\Database\Eloquent\Casts\AsVector;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $casts = [
        'embedding' => AsVector::class,
    ];
}
```

### [Copy or Move Files Between Disks](#september-2026-copy-or-move-files-between-disks)

Pull request by [@jackbayliss](https://github.com/laravel/framework/pull/61511)

Filesystem disks now expose `copyToDisk()` and `moveToDisk()` for transferring files to another configured disk, optionally under a new path. Both methods stream the file and close the stream; `moveToDisk()` deletes the source only after the copy succeeds.

```
1use Illuminate\Support\Facades\Storage;

2

3Storage::disk('local')->copyToDisk('s3', 'reports/report.csv', 'archive/report.csv');

4Storage::disk('local')->moveToDisk('backup', 'reports/report.csv');

use Illuminate\Support\Facades\Storage;

Storage::disk('local')->copyToDisk('s3', 'reports/report.csv', 'archive/report.csv');
Storage::disk('local')->moveToDisk('backup', 'reports/report.csv');
```

### [Choose Which Commands Run During Development](#september-2026-choose-which-commands-run-during-development)

Pull request by [@jackbayliss](https://github.com/laravel/framework/pull/61344)

Applications can now exclude vendor-provided or framework-default development commands from `php artisan dev` with `DevCommands::withoutVendorCommands()` and `DevCommands::withoutDefaultCommands()`. This lets projects keep their own development commands without maintaining a list of every vendor and default command name.

### [Mercure Broadcasting in Laravel Echo](#september-2026-mercure-broadcasting-in-laravel-echo)

Pull request by [@dunglas](https://github.com/laravel/echo/pull/549)

Laravel Echo now includes a Mercure connector built on the browser's native `EventSource` API, without a separate client library. It supports private, presence, and encrypted channels, along with whispers. The hub URL defaults to `/.well-known/mercure` on the current origin, and the React, Vue, and Svelte integrations can configure it with `VITE_MERCURE_HUB_URL`.

### [Chunk Collections by Adjacent Values](#september-2026-chunk-collections-by-adjacent-values)

Pull request by [@JosephSilber](https://github.com/laravel/framework/pull/61357)

The new `chunkBy()` method splits collections and lazy collections whenever a chosen value changes. Unlike `groupBy()`, it groups only consecutive matches: values with the same key that appear later form a separate chunk. Pass a property name or callback to choose the value to compare.

```
1collect([1, 1, 2, 2, 1])->chunkBy(fn ($value) => $value);

2// [[1, 1], [2, 2], [1]]

collect([1, 1, 2, 2, 1])->chunkBy(fn ($value) => $value);
// [[1, 1], [2, 2], [1]]
```

### [One-Time Mail and Notification Assertions](#september-2026-one-time-mail-and-notification-assertions)

Pull request by [@talaridisTh](https://github.com/laravel/framework/pull/61415)

The mail and notification fakes now offer assertions for events that should happen exactly once: `Mail::assertSentOnce()`, `Mail::assertQueuedOnce()`, `Notification::assertSentToOnce()`, and `Notification::assertSentOnDemandOnce()`. These are shorter alternatives to the corresponding `...Times(..., 1)` assertions.

### [Store SQL NULL with Collection and Array Object Casts](#september-2026-store-sql-null-with-collection-and-array-object-casts)

Pull request by [@zeinrahmad76](https://github.com/laravel/framework/pull/61596)

`AsCollection::nullable()` and `AsArrayObject::nullable()` now opt in to storing a native SQL `NULL` when an attribute is set to `null`, so queries such as `whereNull()` can match it. Existing casts keep their previous behavior of storing the JSON `"null"` value unless the nullable variant is selected.

```
1use Illuminate\Database\Eloquent\Casts\AsCollection;

2use Illuminate\Database\Eloquent\Model;

3

4class Order extends Model

5{

6    protected $casts = [

7        'items' => AsCollection::nullable(),

8    ];

9}

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $casts = [
        'items' => AsCollection::nullable(),
    ];
}
```

### [Request In-Place MySQL Index Changes](#september-2026-request-in-place-mysql-index-changes)

Pull request by [@SanderMuller](https://github.com/laravel/framework/pull/61602)

MySQL schema migrations can now chain `inplace()` onto index and foreign key definitions to request `ALGORITHM=INPLACE`. Combined with the existing `lock('none')` option, this lets a migration explicitly request a less disruptive DDL operation instead of silently accepting a different algorithm; MySQL can reject operations it cannot perform under those constraints.

```
1use Illuminate\Database\Schema\Blueprint;

2use Illuminate\Support\Facades\Schema;

3

4Schema::table('video_sessions', function (Blueprint $table) {

5    $table->index('video_id')->inplace()->lock('none');

6});

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::table('video_sessions', function (Blueprint $table) {
    $table->index('video_id')->inplace()->lock('none');
});
```

### [Count Worker Crashes Toward a Job's Exception Limit](#september-2026-count-worker-crashes-toward-a-jobs-exception-limit)

Pull request by [@williamjulianvicary](https://github.com/laravel/framework/pull/61737)

Jobs can opt in to counting an unexpectedly terminated worker attempt toward `maxExceptions` using the `#[CountCrashesAsExceptions]` attribute or `$countCrashesAsExceptions` property. This helps prevent jobs from retrying indefinitely after crashes or external worker kills; normal completions and worker-managed timeouts do not count as crashes. The feature uses a cache marker for opted-in jobs.

## [AI](#september-2026-ai)

### [Build AI Providers from Runtime Configuration](#september-2026-build-ai-providers-from-runtime-configuration)

Pull request by [@pushpak1300](https://github.com/laravel/ai/pull/1071)

`Ai::build()` creates a provider from a configuration array without changing the application's configured providers. This supports credentials loaded at runtime, such as tenant-specific keys, and allows built providers in failover lists. For queued agents, build the provider in the agent's `provider()` method so it can be recreated by the worker rather than building it only at the call site.

```
1use Laravel\Ai\Ai;

2

3$agent->prompt($text, provider: [

4    Ai::build(['driver' => 'anthropic', 'key' => $tenant->ai_key]),

5]);

use Laravel\Ai\Ai;

$agent->prompt($text, provider: [
    Ai::build(['driver' => 'anthropic', 'key' => $tenant->ai_key]),
]);
```

## [Horizon](#september-2026-horizon)

### [Logarithmic Queue Auto-Scaling in Horizon](#september-2026-logarithmic-queue-auto-scaling-in-horizon)

Pull request by [@Gummibeer](https://github.com/laravel/horizon/pull/1818)

Horizon supervisors can now use the `log` auto-scaling strategy alongside `time` and `size`. It weights queue backlogs logarithmically, reducing the chance that one much larger queue takes nearly all available workers. This is useful when keeping smaller queues moving matters more than maximizing throughput on the largest backlog.

## [Scout](#september-2026-scout)

### [Use Meilisearch's Native Embedders with Scout](#september-2026-use-meilisearchs-native-embedders-with-scout)

Pull request by [@Strift](https://github.com/laravel/scout/pull/1012)

Scout's Meilisearch engine can now use Meilisearch's own embedders for `semantic()` and `hybrid()` queries by setting the model's embedding `driver` to `meilisearch` and supplying an `embedder`. Meilisearch then generates document and query embeddings, while a vector passed through `options(['vector' => ...])` can override query embedding. The default `laravel-ai` driver remains unchanged.

[RSS](https://laravel.com/rss/oss-changelog)

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

- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Jump24](https://laravel.com/partners/jump24)
- [Vehikl](https://laravel.com/partners/vehikl)
- [CACI Limited](https://laravel.com/partners/caci-limited)
- [Redberry](https://laravel.com/partners/redberry)
- [64 Robots](https://laravel.com/partners/64-robots)
- [Tighten](https://laravel.com/partners/tighten)
- [byte5](https://laravel.com/partners/byte5)
- [Pixel](https://laravel.com/partners/pixel)
- [Threadable](https://laravel.com/partners/threadable)
- [See All](https://laravel.com/partners)
