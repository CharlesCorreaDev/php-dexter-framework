# Console Tests | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/console-tests

---

[Skip to content](#main-content)

# Console Tests

- [Introduction](#introduction)
- [Success / Failure Expectations](#success-failure-expectations)
- [Input / Output Expectations](#input-output-expectations)
- [Console Events](#console-events)

## [Introduction](#introduction)

In addition to simplifying HTTP testing, Laravel provides a simple API for testing your application's [custom console commands](artisan.md).

## [Success / Failure Expectations](#success-failure-expectations)

To get started, let's explore how to make assertions regarding an Artisan command's exit code. To accomplish this, we will use the `artisan` method to invoke an Artisan command from our test. Then, we will use the `assertExitCode` method to assert that the command completed with a given exit code:

Pest
PHPUnit

```
1test('console command', function () {

2    $this->artisan('inspire')->assertExitCode(0);

3});

test('console command', function () {
    $this->artisan('inspire')->assertExitCode(0);
});
```

```
1/**

2 * Test a console command.

3 */

4public function test_console_command(): void

5{

6    $this->artisan('inspire')->assertExitCode(0);

7}

/**
 * Test a console command.
 */
public function test_console_command(): void
{
    $this->artisan('inspire')->assertExitCode(0);
}
```

You may use the `assertNotExitCode` method to assert that the command did not exit with a given exit code:

```
1$this->artisan('inspire')->assertNotExitCode(1);

$this->artisan('inspire')->assertNotExitCode(1);
```

Of course, all terminal commands typically exit with a status code of `0` when they are successful and a non-zero exit code when they are not successful. Therefore, for convenience, you may utilize the `assertSuccessful` and `assertFailed` assertions to assert that a given command exited with a successful exit code or not:

```
1$this->artisan('inspire')->assertSuccessful();

2

3$this->artisan('inspire')->assertFailed();

$this->artisan('inspire')->assertSuccessful();

$this->artisan('inspire')->assertFailed();
```

## [Input / Output Expectations](#input-output-expectations)

Laravel allows you to easily "mock" user input for your console commands using the `expectsQuestion` method. In addition, you may specify the exit code and text that you expect to be output by the console command using the `assertExitCode` and `expectsOutput` methods. For example, consider the following console command:

```
1Artisan::command('question', function () {

2    $name = $this->ask('What is your name?');

3

4    $language = $this->choice('Which language do you prefer?', [

5        'PHP',

6        'Ruby',

7        'Python',

8    ]);

9

10    $this->line('Your name is '.$name.' and you prefer '.$language.'.');

11});

Artisan::command('question', function () {
    $name = $this->ask('What is your name?');

    $language = $this->choice('Which language do you prefer?', [
        'PHP',
        'Ruby',
        'Python',
    ]);

    $this->line('Your name is '.$name.' and you prefer '.$language.'.');
});
```

You may test this command with the following test:

Pest
PHPUnit

```
1test('console command', function () {

2    $this->artisan('question')

3        ->expectsQuestion('What is your name?', 'Taylor Otwell')

4        ->expectsQuestion('Which language do you prefer?', 'PHP')

5        ->expectsOutput('Your name is Taylor Otwell and you prefer PHP.')

6        ->doesntExpectOutput('Your name is Taylor Otwell and you prefer Ruby.')

7        ->assertExitCode(0);

8});

test('console command', function () {
    $this->artisan('question')
        ->expectsQuestion('What is your name?', 'Taylor Otwell')
        ->expectsQuestion('Which language do you prefer?', 'PHP')
        ->expectsOutput('Your name is Taylor Otwell and you prefer PHP.')
        ->doesntExpectOutput('Your name is Taylor Otwell and you prefer Ruby.')
        ->assertExitCode(0);
});
```

```
1/**

2 * Test a console command.

3 */

4public function test_console_command(): void

5{

6    $this->artisan('question')

7        ->expectsQuestion('What is your name?', 'Taylor Otwell')

8        ->expectsQuestion('Which language do you prefer?', 'PHP')

9        ->expectsOutput('Your name is Taylor Otwell and you prefer PHP.')

10        ->doesntExpectOutput('Your name is Taylor Otwell and you prefer Ruby.')

11        ->assertExitCode(0);

12}

/**
 * Test a console command.
 */
public function test_console_command(): void
{
    $this->artisan('question')
        ->expectsQuestion('What is your name?', 'Taylor Otwell')
        ->expectsQuestion('Which language do you prefer?', 'PHP')
        ->expectsOutput('Your name is Taylor Otwell and you prefer PHP.')
        ->doesntExpectOutput('Your name is Taylor Otwell and you prefer Ruby.')
        ->assertExitCode(0);
}
```

If you are utilizing the `search` or `multisearch` functions provided by [Laravel Prompts](prompts.md), you may use the `expectsSearch` assertion to mock the user's input, search results, and selection:

Pest
PHPUnit

```
1test('console command', function () {

2    $this->artisan('example')

3        ->expectsSearch('What is your name?', search: 'Tay', answers: [

4            'Taylor Otwell',

5            'Taylor Swift',

6            'Darian Taylor'

7        ], answer: 'Taylor Otwell')

8        ->assertExitCode(0);

9});

test('console command', function () {
    $this->artisan('example')
        ->expectsSearch('What is your name?', search: 'Tay', answers: [
            'Taylor Otwell',
            'Taylor Swift',
            'Darian Taylor'
        ], answer: 'Taylor Otwell')
        ->assertExitCode(0);
});
```

```
1/**

2 * Test a console command.

3 */

4public function test_console_command(): void

5{

6    $this->artisan('example')

7        ->expectsSearch('What is your name?', search: 'Tay', answers: [

8            'Taylor Otwell',

9            'Taylor Swift',

10            'Darian Taylor'

11        ], answer: 'Taylor Otwell')

12        ->assertExitCode(0);

13}

/**
 * Test a console command.
 */
public function test_console_command(): void
{
    $this->artisan('example')
        ->expectsSearch('What is your name?', search: 'Tay', answers: [
            'Taylor Otwell',
            'Taylor Swift',
            'Darian Taylor'
        ], answer: 'Taylor Otwell')
        ->assertExitCode(0);
}
```

You may also assert that a console command does not generate any output using the `doesntExpectOutput` method:

Pest
PHPUnit

```
1test('console command', function () {

2    $this->artisan('example')

3        ->doesntExpectOutput()

4        ->assertExitCode(0);

5});

test('console command', function () {
    $this->artisan('example')
        ->doesntExpectOutput()
        ->assertExitCode(0);
});
```

```
1/**

2 * Test a console command.

3 */

4public function test_console_command(): void

5{

6    $this->artisan('example')

7        ->doesntExpectOutput()

8        ->assertExitCode(0);

9}

/**
 * Test a console command.
 */
public function test_console_command(): void
{
    $this->artisan('example')
        ->doesntExpectOutput()
        ->assertExitCode(0);
}
```

The `expectsOutputToContain` and `doesntExpectOutputToContain` methods may be used to make assertions against a portion of the output:

Pest
PHPUnit

```
1test('console command', function () {

2    $this->artisan('example')

3        ->expectsOutputToContain('Taylor')

4        ->assertExitCode(0);

5});

test('console command', function () {
    $this->artisan('example')
        ->expectsOutputToContain('Taylor')
        ->assertExitCode(0);
});
```

```
1/**

2 * Test a console command.

3 */

4public function test_console_command(): void

5{

6    $this->artisan('example')

7        ->expectsOutputToContain('Taylor')

8        ->assertExitCode(0);

9}

/**
 * Test a console command.
 */
public function test_console_command(): void
{
    $this->artisan('example')
        ->expectsOutputToContain('Taylor')
        ->assertExitCode(0);
}
```

#### [Confirmation Expectations](#confirmation-expectations)

When writing a command which expects confirmation in the form of a "yes" or "no" answer, you may utilize the `expectsConfirmation` method:

```
1$this->artisan('module:import')

2    ->expectsConfirmation('Do you really wish to run this command?', 'no')

3    ->assertExitCode(1);

$this->artisan('module:import')
    ->expectsConfirmation('Do you really wish to run this command?', 'no')
    ->assertExitCode(1);
```

#### [Table Expectations](#table-expectations)

If your command displays a table of information using Artisan's `table` method, it can be cumbersome to write output expectations for the entire table. Instead, you may use the `expectsTable` method. This method accepts the table's headers as its first argument and the table's data as its second argument:

```
1$this->artisan('users:all')

2    ->expectsTable([

3        'ID',

4        'Email',

5    ], [

6        [1, '[email protected]'],

7        [2, '[email protected]'],

8    ]);

$this->artisan('users:all')
    ->expectsTable([
        'ID',
        'Email',
    ], [
        [1, '[email protected]'],
        [2, '[email protected]'],
    ]);
```

## [Console Events](#console-events)

By default, the `Illuminate\Console\Events\CommandStarting` and `Illuminate\Console\Events\CommandFinished` events are not dispatched while running your application's tests. However, you can enable these events for a given test class by adding the `Illuminate\Foundation\Testing\WithConsoleEvents` trait to the class:

Pest
PHPUnit

```
1<?php

2

3use Illuminate\Foundation\Testing\WithConsoleEvents;

4

5pest()->use(WithConsoleEvents::class);

6

7// ...

<?php

use Illuminate\Foundation\Testing\WithConsoleEvents;

pest()->use(WithConsoleEvents::class);

// ...
```

```
1<?php

2

3namespace Tests\Feature;

4

5use Illuminate\Foundation\Testing\WithConsoleEvents;

6use Tests\TestCase;

7

8class ConsoleEventTest extends TestCase

9{

10    use WithConsoleEvents;

11

12    // ...

13}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithConsoleEvents;
use Tests\TestCase;

class ConsoleEventTest extends TestCase
{
    use WithConsoleEvents;

    // ...
}
```

Copy as markdown

### On this page

- [Introduction](#introduction)
- [Success / Failure Expectations](#success-failure-expectations)
- [Input / Output Expectations](#input-output-expectations)
- [Console Events](#console-events)

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

- [64 Robots](https://laravel.com/partners/64-robots)
- [Vehikl](https://laravel.com/partners/vehikl)
- [Jump24](https://laravel.com/partners/jump24)
- [Curotec](https://laravel.com/partners/curotec)
- [byte5](https://laravel.com/partners/byte5)
- [Threadable](https://laravel.com/partners/threadable)
- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Redberry](https://laravel.com/partners/redberry)
- [UCodeSoft](https://laravel.com/partners/ucodesoft)
- [Kirschbaum](https://laravel.com/partners/kirschbaum)
- [See All](https://laravel.com/partners)
