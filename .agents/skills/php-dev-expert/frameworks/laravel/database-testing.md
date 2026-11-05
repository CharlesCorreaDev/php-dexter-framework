# Database Testing | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/database-testing

---

[Skip to content](#main-content)

# Database Testing

- [Introduction](#introduction)
  - [Resetting the Database After Each Test](#resetting-the-database-after-each-test)
- [Model Factories](#model-factories)
- [Running Seeders](#running-seeders)
- [Available Assertions](#available-assertions)

## [Introduction](#introduction)

Laravel provides a variety of helpful tools and assertions to make it easier to test your database driven applications. In addition, Laravel model factories and seeders make it painless to create test database records using your application's Eloquent models and relationships. We'll discuss all of these powerful features in the following documentation.

### [Resetting the Database After Each Test](#resetting-the-database-after-each-test)

Before proceeding much further, let's discuss how to reset your database after each of your tests so that data from a previous test does not interfere with subsequent tests. Laravel's included `Illuminate\Foundation\Testing\RefreshDatabase` trait will take care of this for you. Simply use the trait on your test class:

Pest
PHPUnit

```
1<?php

2

3use Illuminate\Foundation\Testing\RefreshDatabase;

4

5pest()->use(RefreshDatabase::class);

6

7test('basic example', function () {

8    $response = $this->get('/');

9

10    // ...

11});

<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('basic example', function () {
    $response = $this->get('/');

    // ...
});
```

```
1<?php

2

3namespace Tests\Feature;

4

5use Illuminate\Foundation\Testing\RefreshDatabase;

6use Tests\TestCase;

7

8class ExampleTest extends TestCase

9{

10    use RefreshDatabase;

11

12    /**

13     * A basic functional test example.

14     */

15    public function test_basic_example(): void

16    {

17        $response = $this->get('/');

18

19        // ...

20    }

21}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic functional test example.
     */
    public function test_basic_example(): void
    {
        $response = $this->get('/');

        // ...
    }
}
```

The `Illuminate\Foundation\Testing\RefreshDatabase` trait does not migrate your database if your schema is up to date. Instead, it will only execute the test within a database transaction. Therefore, any records added to the database by test cases that do not use this trait may still exist in the database.

If you would like to totally reset the database, you may use the `Illuminate\Foundation\Testing\DatabaseMigrations` or `Illuminate\Foundation\Testing\DatabaseTruncation` traits instead. However, both of these options are significantly slower than the `RefreshDatabase` trait.

## [Model Factories](#model-factories)

When testing, you may need to insert a few records into your database before executing your test. Instead of manually specifying the value of each column when you create this test data, Laravel allows you to define a set of default attributes for each of your [Eloquent models](eloquent.md) using [model factories](eloquent-factories.md).

To learn more about creating and utilizing model factories to create models, please consult the complete [model factory documentation](eloquent-factories.md). Once you have defined a model factory, you may utilize the factory within your test to create models:

Pest
PHPUnit

```
1use App\Models\User;

2

3test('models can be instantiated', function () {

4    $user = User::factory()->create();

5

6    // ...

7});

use App\Models\User;

test('models can be instantiated', function () {
    $user = User::factory()->create();

    // ...
});
```

```
1use App\Models\User;

2

3public function test_models_can_be_instantiated(): void

4{

5    $user = User::factory()->create();

6

7    // ...

8}

use App\Models\User;

public function test_models_can_be_instantiated(): void
{
    $user = User::factory()->create();

    // ...
}
```

## [Running Seeders](#running-seeders)

If you would like to use [database seeders](seeding.md) to populate your database during a feature test, you may invoke the `seed` method. By default, the `seed` method will execute the `DatabaseSeeder`, which should execute all of your other seeders. Alternatively, you pass a specific seeder class name to the `seed` method:

Pest
PHPUnit

```
1<?php

2

3use Database\Seeders\OrderStatusSeeder;

4use Database\Seeders\TransactionStatusSeeder;

5use Illuminate\Foundation\Testing\RefreshDatabase;

6

7pest()->use(RefreshDatabase::class);

8

9test('orders can be created', function () {

10    // Run the DatabaseSeeder...

11    $this->seed();

12

13    // Run a specific seeder...

14    $this->seed(OrderStatusSeeder::class);

15

16    // ...

17

18    // Run an array of specific seeders...

19    $this->seed([

20        OrderStatusSeeder::class,

21        TransactionStatusSeeder::class,

22        // ...

23    ]);

24});

<?php

use Database\Seeders\OrderStatusSeeder;
use Database\Seeders\TransactionStatusSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('orders can be created', function () {
    // Run the DatabaseSeeder...
    $this->seed();

    // Run a specific seeder...
    $this->seed(OrderStatusSeeder::class);

    // ...

    // Run an array of specific seeders...
    $this->seed([
        OrderStatusSeeder::class,
        TransactionStatusSeeder::class,
        // ...
    ]);
});
```

```
1<?php

2

3namespace Tests\Feature;

4

5use Database\Seeders\OrderStatusSeeder;

6use Database\Seeders\TransactionStatusSeeder;

7use Illuminate\Foundation\Testing\RefreshDatabase;

8use Tests\TestCase;

9

10class ExampleTest extends TestCase

11{

12    use RefreshDatabase;

13

14    /**

15     * Test creating a new order.

16     */

17    public function test_orders_can_be_created(): void

18    {

19        // Run the DatabaseSeeder...

20        $this->seed();

21

22        // Run a specific seeder...

23        $this->seed(OrderStatusSeeder::class);

24

25        // ...

26

27        // Run an array of specific seeders...

28        $this->seed([

29            OrderStatusSeeder::class,

30            TransactionStatusSeeder::class,

31            // ...

32        ]);

33    }

34}

<?php

namespace Tests\Feature;

use Database\Seeders\OrderStatusSeeder;
use Database\Seeders\TransactionStatusSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test creating a new order.
     */
    public function test_orders_can_be_created(): void
    {
        // Run the DatabaseSeeder...
        $this->seed();

        // Run a specific seeder...
        $this->seed(OrderStatusSeeder::class);

        // ...

        // Run an array of specific seeders...
        $this->seed([
            OrderStatusSeeder::class,
            TransactionStatusSeeder::class,
            // ...
        ]);
    }
}
```

Alternatively, you may instruct Laravel to automatically seed the database before each test that uses the `RefreshDatabase` trait. You may accomplish this by adding the `Seed` attribute to your base test class:

```
1<?php

2

3namespace Tests;

4

5use Illuminate\Foundation\Testing\Attributes\Seed;

6use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

7

8#[Seed]

9abstract class TestCase extends BaseTestCase

10{

11}

<?php

namespace Tests;

use Illuminate\Foundation\Testing\Attributes\Seed;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

#[Seed]
abstract class TestCase extends BaseTestCase
{
}
```

When the `Seed` attribute is present, the test will run the `Database\Seeders\DatabaseSeeder` class before each test that uses the `RefreshDatabase` trait. However, you may specify a specific seeder that should be executed by using the `Seeder` attribute on your test class:

```
1<?php

2

3namespace Tests\Feature;

4

5use Database\Seeders\OrderStatusSeeder;

6use Illuminate\Foundation\Testing\Attributes\Seeder;

7use Illuminate\Foundation\Testing\RefreshDatabase;

8use Tests\TestCase;

9

10#[Seeder(OrderStatusSeeder::class)]

11class OrderTest extends TestCase

12{

13    use RefreshDatabase;

14

15    // ...

16}

<?php

namespace Tests\Feature;

use Database\Seeders\OrderStatusSeeder;
use Illuminate\Foundation\Testing\Attributes\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

#[Seeder(OrderStatusSeeder::class)]
class OrderTest extends TestCase
{
    use RefreshDatabase;

    // ...
}
```

## [Available Assertions](#available-assertions)

Laravel provides several database assertions for your [Pest](https://pestphp.com) or [PHPUnit](https://phpunit.de) feature tests. We'll discuss each of these assertions below.

#### [assertDatabaseCount](#assert-database-count)

Assert that a table in the database contains the given number of records:

```
1$this->assertDatabaseCount('users', 5);

$this->assertDatabaseCount('users', 5);
```

#### [assertDatabaseEmpty](#assert-database-empty)

Assert that a table in the database contains no records:

```
1$this->assertDatabaseEmpty('users');

$this->assertDatabaseEmpty('users');
```

#### [assertDatabaseHas](#assert-database-has)

Assert that a table in the database contains records matching the given key / value query constraints:

```
1$this->assertDatabaseHas('users', [

2    'email' => '[email protected]',

3]);

$this->assertDatabaseHas('users', [
    'email' => '[email protected]',
]);
```

#### [assertDatabaseMissing](#assert-database-missing)

Assert that a table in the database does not contain records matching the given key / value query constraints:

```
1$this->assertDatabaseMissing('users', [

2    'email' => '[email protected]',

3]);

$this->assertDatabaseMissing('users', [
    'email' => '[email protected]',
]);
```

#### [assertSoftDeleted](#assert-deleted)

The `assertSoftDeleted` method may be used to assert a given Eloquent model has been "soft deleted":

```
1$this->assertSoftDeleted($user);

$this->assertSoftDeleted($user);
```

#### [assertNotSoftDeleted](#assert-not-deleted)

The `assertNotSoftDeleted` method may be used to assert a given Eloquent model hasn't been "soft deleted":

```
1$this->assertNotSoftDeleted($user);

$this->assertNotSoftDeleted($user);
```

#### [assertModelExists](#assert-model-exists)

Assert that a given model or collection of models exist in the database:

```
1use App\Models\User;

2

3$user = User::factory()->create();

4

5$this->assertModelExists($user);

use App\Models\User;

$user = User::factory()->create();

$this->assertModelExists($user);
```

#### [assertModelMissing](#assert-model-missing)

Assert that a given model or collection of models do not exist in the database:

```
1use App\Models\User;

2

3$user = User::factory()->create();

4

5$user->delete();

6

7$this->assertModelMissing($user);

use App\Models\User;

$user = User::factory()->create();

$user->delete();

$this->assertModelMissing($user);
```

#### [expectsDatabaseQueryCount](#expects-database-query-count)

The `expectsDatabaseQueryCount` method may be invoked at the beginning of your test to specify the total number of database queries that you expect to be run during the test. If the actual number of executed queries does not exactly match this expectation, the test will fail:

```
1$this->expectsDatabaseQueryCount(5);

2

3// Test...

$this->expectsDatabaseQueryCount(5);

// Test...
```

Copy as markdown

### On this page

- [Introduction](#introduction)
  - [Resetting the Database After Each Test](#resetting-the-database-after-each-test)
- [Model Factories](#model-factories)
- [Running Seeders](#running-seeders)
- [Available Assertions](#available-assertions)

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

- [Redberry](https://laravel.com/partners/redberry)
- [64 Robots](https://laravel.com/partners/64-robots)
- [Curotec](https://laravel.com/partners/curotec)
- [byte5](https://laravel.com/partners/byte5)
- [Jump24](https://laravel.com/partners/jump24)
- [Threadable](https://laravel.com/partners/threadable)
- [Vehikl](https://laravel.com/partners/vehikl)
- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Pixel](https://laravel.com/partners/pixel)
- [CACI Limited](https://laravel.com/partners/caci-limited)
- [See All](https://laravel.com/partners)
