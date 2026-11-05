# Processes | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/processes

---

[Skip to content](#main-content)

# Processes

- [Introduction](#introduction)
- [Invoking Processes](#invoking-processes)
  - [Process Options](#process-options)
  - [Process Output](#process-output)
  - [Pipelines](#process-pipelines)
- [Asynchronous Processes](#asynchronous-processes)
  - [Process IDs and Signals](#process-ids-and-signals)
  - [Asynchronous Process Output](#asynchronous-process-output)
  - [Asynchronous Process Timeouts](#asynchronous-process-timeouts)
- [Concurrent Processes](#concurrent-processes)
  - [Naming Pool Processes](#naming-pool-processes)
  - [Pool Process IDs and Signals](#pool-process-ids-and-signals)
- [Testing](#testing)
  - [Faking Processes](#faking-processes)
  - [Faking Specific Processes](#faking-specific-processes)
  - [Faking Process Sequences](#faking-process-sequences)
  - [Faking Asynchronous Process Lifecycles](#faking-asynchronous-process-lifecycles)
  - [Available Assertions](#available-assertions)
  - [Preventing Stray Processes](#preventing-stray-processes)

## [Introduction](#introduction)

Laravel provides an expressive, minimal API around the [Symfony Process component](https://symfony.com/doc/current/components/process.html), allowing you to conveniently invoke external processes from your Laravel application. Laravel's process features are focused on the most common use cases and a wonderful developer experience.

## [Invoking Processes](#invoking-processes)

To invoke a process, you may use the `run` and `start` methods offered by the `Process` facade. The `run` method will invoke a process and wait for the process to finish executing, while the `start` method is used for asynchronous process execution. We'll examine both approaches within this documentation. First, let's examine how to invoke a basic, synchronous process and inspect its result:

```
1use Illuminate\Support\Facades\Process;

2

3$result = Process::run('ls -la');

4

5return $result->output();

use Illuminate\Support\Facades\Process;

$result = Process::run('ls -la');

return $result->output();
```

Of course, the `Illuminate\Contracts\Process\ProcessResult` instance returned by the `run` method offers a variety of helpful methods that may be used to inspect the process result:

```
1$result = Process::run('ls -la');

2

3$result->command();

4$result->successful();

5$result->failed();

6$result->output();

7$result->errorOutput();

8$result->exitCode();

$result = Process::run('ls -la');

$result->command();
$result->successful();
$result->failed();
$result->output();
$result->errorOutput();
$result->exitCode();
```

#### [Throwing Exceptions](#throwing-exceptions)

If you have a process result and would like to throw an instance of `Illuminate\Process\Exceptions\ProcessFailedException` if the exit code is greater than zero (thus indicating failure), you may use the `throw` and `throwIf` methods. If the process did not fail, the `ProcessResult` instance will be returned:

```
1$result = Process::run('ls -la')->throw();

2

3$result = Process::run('ls -la')->throwIf($condition);

$result = Process::run('ls -la')->throw();

$result = Process::run('ls -la')->throwIf($condition);
```

### [Process Options](#process-options)

Of course, you may need to customize the behavior of a process before invoking it. Thankfully, Laravel allows you to tweak a variety of process features, such as the working directory, timeout, and environment variables.

#### [Working Directory Path](#working-directory-path)

You may use the `path` method to specify the working directory of the process. If this method is not invoked, the process will inherit the working directory of the currently executing PHP script:

```
1$result = Process::path(__DIR__)->run('ls -la');

$result = Process::path(__DIR__)->run('ls -la');
```

#### [Input](#input)

You may provide input via the "standard input" of the process using the `input` method:

```
1$result = Process::input('Hello World')->run('cat');

$result = Process::input('Hello World')->run('cat');
```

#### [Timeouts](#timeouts)

By default, processes will throw an instance of `Illuminate\Process\Exceptions\ProcessTimedOutException` after executing for more than 60 seconds. However, you can customize this behavior via the `timeout` method:

```
1$result = Process::timeout(120)->run('bash import.sh');

$result = Process::timeout(120)->run('bash import.sh');
```

The `timeout` and `idleTimeout` methods also accept `CarbonInterval` instances:

```
1use function Illuminate\Support\minutes;

2

3$result = Process::timeout(minutes(2))->run('bash import.sh');

use function Illuminate\Support\minutes;

$result = Process::timeout(minutes(2))->run('bash import.sh');
```

Or, if you would like to disable the process timeout entirely, you may invoke the `forever` method:

```
1$result = Process::forever()->run('bash import.sh');

$result = Process::forever()->run('bash import.sh');
```

The `idleTimeout` method may be used to specify the maximum number of seconds the process may run without returning any output:

```
1$result = Process::timeout(60)->idleTimeout(30)->run('bash import.sh');

$result = Process::timeout(60)->idleTimeout(30)->run('bash import.sh');
```

#### [Environment Variables](#environment-variables)

Environment variables may be provided to the process via the `env` method. The invoked process will also inherit all of the environment variables defined by your system:

```
1$result = Process::forever()

2    ->env(['IMPORT_PATH' => __DIR__])

3    ->run('bash import.sh');

$result = Process::forever()
    ->env(['IMPORT_PATH' => __DIR__])
    ->run('bash import.sh');
```

If you wish to remove an inherited environment variable from the invoked process, you may provide that environment variable with a value of `false`:

```
1$result = Process::forever()

2    ->env(['LOAD_PATH' => false])

3    ->run('bash import.sh');

$result = Process::forever()
    ->env(['LOAD_PATH' => false])
    ->run('bash import.sh');
```

#### [TTY Mode](#tty-mode)

The `tty` method may be used to enable TTY mode for your process. TTY mode connects the input and output of the process to the input and output of your program, allowing your process to open an editor like Vim or Nano as a process:

```
1Process::forever()->tty()->run('vim');

Process::forever()->tty()->run('vim');
```

TTY mode is not supported on Windows.

### [Process Output](#process-output)

As previously discussed, process output may be accessed using the `output` (stdout) and `errorOutput` (stderr) methods on a process result:

```
1use Illuminate\Support\Facades\Process;

2

3$result = Process::run('ls -la');

4

5echo $result->output();

6echo $result->errorOutput();

use Illuminate\Support\Facades\Process;

$result = Process::run('ls -la');

echo $result->output();
echo $result->errorOutput();
```

However, output may also be gathered in real-time by passing a closure as the second argument to the `run` method. The closure will receive two arguments: the "type" of output (`stdout` or `stderr`) and the output string itself:

```
1$result = Process::run('ls -la', function (string $type, string $output) {

2    echo $output;

3});

$result = Process::run('ls -la', function (string $type, string $output) {
    echo $output;
});
```

Laravel also offers the `seeInOutput` and `seeInErrorOutput` methods, which provide a convenient way to determine if a given string was contained in the process' output:

```
1if (Process::run('ls -la')->seeInOutput('laravel')) {

2    // ...

3}

if (Process::run('ls -la')->seeInOutput('laravel')) {
    // ...
}
```

#### [Disabling Process Output](#disabling-process-output)

If your process is writing a significant amount of output that you are not interested in, you can conserve memory by disabling output retrieval entirely. To accomplish this, invoke the `quietly` method while building the process:

```
1use Illuminate\Support\Facades\Process;

2

3$result = Process::quietly()->run('bash import.sh');

use Illuminate\Support\Facades\Process;

$result = Process::quietly()->run('bash import.sh');
```

### [Pipelines](#process-pipelines)

Sometimes you may want to make the output of one process the input of another process. This is often referred to as "piping" the output of a process into another. The `pipe` method provided by the `Process` facades makes this easy to accomplish. The `pipe` method will execute the piped processes synchronously and return the process result for the last process in the pipeline:

```
1use Illuminate\Process\Pipe;

2use Illuminate\Support\Facades\Process;

3

4$result = Process::pipe(function (Pipe $pipe) {

5    $pipe->command('cat example.txt');

6    $pipe->command('grep -i "laravel"');

7});

8

9if ($result->successful()) {

10    // ...

11}

use Illuminate\Process\Pipe;
use Illuminate\Support\Facades\Process;

$result = Process::pipe(function (Pipe $pipe) {
    $pipe->command('cat example.txt');
    $pipe->command('grep -i "laravel"');
});

if ($result->successful()) {
    // ...
}
```

If you do not need to customize the individual processes that make up the pipeline, you may simply pass an array of command strings to the `pipe` method:

```
1$result = Process::pipe([

2    'cat example.txt',

3    'grep -i "laravel"',

4]);

$result = Process::pipe([
    'cat example.txt',
    'grep -i "laravel"',
]);
```

The process output may be gathered in real-time by passing a closure as the second argument to the `pipe` method. The closure will receive two arguments: the "type" of output (`stdout` or `stderr`) and the output string itself:

```
1$result = Process::pipe(function (Pipe $pipe) {

2    $pipe->command('cat example.txt');

3    $pipe->command('grep -i "laravel"');

4}, function (string $type, string $output) {

5    echo $output;

6});

$result = Process::pipe(function (Pipe $pipe) {
    $pipe->command('cat example.txt');
    $pipe->command('grep -i "laravel"');
}, function (string $type, string $output) {
    echo $output;
});
```

Laravel also allows you to assign string keys to each process within a pipeline via the `as` method. This key will also be passed to the output closure provided to the `pipe` method, allowing you to determine which process the output belongs to:

```
1$result = Process::pipe(function (Pipe $pipe) {

2    $pipe->as('first')->command('cat example.txt');

3    $pipe->as('second')->command('grep -i "laravel"');

4}, function (string $type, string $output, string $key) {

5    // ...

6});

$result = Process::pipe(function (Pipe $pipe) {
    $pipe->as('first')->command('cat example.txt');
    $pipe->as('second')->command('grep -i "laravel"');
}, function (string $type, string $output, string $key) {
    // ...
});
```

## [Asynchronous Processes](#asynchronous-processes)

While the `run` method invokes processes synchronously, the `start` method may be used to invoke a process asynchronously. This allows your application to continue performing other tasks while the process runs in the background. Once the process has been invoked, you may utilize the `running` method to determine if the process is still running:

```
1$process = Process::timeout(120)->start('bash import.sh');

2

3while ($process->running()) {

4    // ...

5}

6

7$result = $process->wait();

$process = Process::timeout(120)->start('bash import.sh');

while ($process->running()) {
    // ...
}

$result = $process->wait();
```

As you may have noticed, you may invoke the `wait` method to wait until the process is finished executing and retrieve the `ProcessResult` instance:

```
1$process = Process::timeout(120)->start('bash import.sh');

2

3// ...

4

5$result = $process->wait();

$process = Process::timeout(120)->start('bash import.sh');

// ...

$result = $process->wait();
```

### [Process IDs and Signals](#process-ids-and-signals)

The `id` method may be used to retrieve the operating system assigned process ID of the running process:

```
1$process = Process::start('bash import.sh');

2

3return $process->id();

$process = Process::start('bash import.sh');

return $process->id();
```

You may use the `signal` method to send a "signal" to the running process. A list of predefined signal constants can be found within the [PHP documentation](https://www.php.net/manual/en/pcntl.constants.php):

```
1$process->signal(SIGUSR2);

$process->signal(SIGUSR2);
```

### [Asynchronous Process Output](#asynchronous-process-output)

While an asynchronous process is running, you may access its entire current output using the `output` and `errorOutput` methods; however, you may utilize the `latestOutput` and `latestErrorOutput` to access the output from the process that has occurred since the output was last retrieved:

```
1$process = Process::timeout(120)->start('bash import.sh');

2

3while ($process->running()) {

4    echo $process->latestOutput();

5    echo $process->latestErrorOutput();

6

7    sleep(1);

8}

$process = Process::timeout(120)->start('bash import.sh');

while ($process->running()) {
    echo $process->latestOutput();
    echo $process->latestErrorOutput();

    sleep(1);
}
```

Like the `run` method, output may also be gathered in real-time from asynchronous processes by passing a closure as the second argument to the `start` method. The closure will receive two arguments: the "type" of output (`stdout` or `stderr`) and the output string itself:

```
1$process = Process::start('bash import.sh', function (string $type, string $output) {

2    echo $output;

3});

4

5$result = $process->wait();

$process = Process::start('bash import.sh', function (string $type, string $output) {
    echo $output;
});

$result = $process->wait();
```

Instead of waiting until the process has finished, you may use the `waitUntil` method to stop waiting based on the output of the process. Laravel will stop waiting for the process to finish when the closure given to the `waitUntil` method returns `true`:

```
1$process = Process::start('bash import.sh');

2

3$process->waitUntil(function (string $type, string $output) {

4    return $output === 'Ready...';

5});

$process = Process::start('bash import.sh');

$process->waitUntil(function (string $type, string $output) {
    return $output === 'Ready...';
});
```

### [Asynchronous Process Timeouts](#asynchronous-process-timeouts)

While an asynchronous process is running, you may verify that the process has not timed out using the `ensureNotTimedOut` method. This method will throw a [timeout exception](#timeouts) if the process has timed out:

```
1$process = Process::timeout(120)->start('bash import.sh');

2

3while ($process->running()) {

4    $process->ensureNotTimedOut();

5

6    // ...

7

8    sleep(1);

9}

$process = Process::timeout(120)->start('bash import.sh');

while ($process->running()) {
    $process->ensureNotTimedOut();

    // ...

    sleep(1);
}
```

## [Concurrent Processes](#concurrent-processes)

Laravel also makes it a breeze to manage a pool of concurrent, asynchronous processes, allowing you to easily execute many tasks simultaneously. To get started, invoke the `pool` method, which accepts a closure that receives an instance of `Illuminate\Process\Pool`.

Within this closure, you may define the processes that belong to the pool. Once a process pool is started via the `start` method, you may access the [collection](collections.md) of running processes via the `running` method:

```
1use Illuminate\Process\Pool;

2use Illuminate\Support\Facades\Process;

3

4$pool = Process::pool(function (Pool $pool) {

5    $pool->path(__DIR__)->command('bash import-1.sh');

6    $pool->path(__DIR__)->command('bash import-2.sh');

7    $pool->path(__DIR__)->command('bash import-3.sh');

8})->start(function (string $type, string $output, int $key) {

9    // ...

10});

11

12while ($pool->running()->isNotEmpty()) {

13    // ...

14}

15

16$results = $pool->wait();

use Illuminate\Process\Pool;
use Illuminate\Support\Facades\Process;

$pool = Process::pool(function (Pool $pool) {
    $pool->path(__DIR__)->command('bash import-1.sh');
    $pool->path(__DIR__)->command('bash import-2.sh');
    $pool->path(__DIR__)->command('bash import-3.sh');
})->start(function (string $type, string $output, int $key) {
    // ...
});

while ($pool->running()->isNotEmpty()) {
    // ...
}

$results = $pool->wait();
```

As you can see, you may wait for all of the pool processes to finish executing and resolve their results via the `wait` method. The `wait` method returns an array accessible object that allows you to access the `ProcessResult` instance of each process in the pool by its key:

```
1$results = $pool->wait();

2

3echo $results[0]->output();

$results = $pool->wait();

echo $results[0]->output();
```

Or, for convenience, the `concurrently` method may be used to start an asynchronous process pool and immediately wait on its results. This can provide particularly expressive syntax when combined with PHP's array destructuring capabilities:

```
1[$first, $second, $third] = Process::concurrently(function (Pool $pool) {

2    $pool->path(__DIR__)->command('ls -la');

3    $pool->path(app_path())->command('ls -la');

4    $pool->path(storage_path())->command('ls -la');

5});

6

7echo $first->output();

[$first, $second, $third] = Process::concurrently(function (Pool $pool) {
    $pool->path(__DIR__)->command('ls -la');
    $pool->path(app_path())->command('ls -la');
    $pool->path(storage_path())->command('ls -la');
});

echo $first->output();
```

### [Naming Pool Processes](#naming-pool-processes)

Accessing process pool results via a numeric key is not very expressive; therefore, Laravel allows you to assign string keys to each process within a pool via the `as` method. This key will also be passed to the closure provided to the `start` method, allowing you to determine which process the output belongs to:

```
1$pool = Process::pool(function (Pool $pool) {

2    $pool->as('first')->command('bash import-1.sh');

3    $pool->as('second')->command('bash import-2.sh');

4    $pool->as('third')->command('bash import-3.sh');

5})->start(function (string $type, string $output, string $key) {

6    // ...

7});

8

9$results = $pool->wait();

10

11return $results['first']->output();

$pool = Process::pool(function (Pool $pool) {
    $pool->as('first')->command('bash import-1.sh');
    $pool->as('second')->command('bash import-2.sh');
    $pool->as('third')->command('bash import-3.sh');
})->start(function (string $type, string $output, string $key) {
    // ...
});

$results = $pool->wait();

return $results['first']->output();
```

### [Pool Process IDs and Signals](#pool-process-ids-and-signals)

Since the process pool's `running` method provides a collection of all invoked processes within the pool, you may easily access the underlying pool process IDs:

```
1$processIds = $pool->running()->map->id();

$processIds = $pool->running()->map->id();
```

And, for convenience, you may invoke the `signal` method on a process pool to send a signal to every process within the pool:

```
1$pool->signal(SIGUSR2);

$pool->signal(SIGUSR2);
```

## [Testing](#testing)

Many Laravel services provide functionality to help you easily and expressively write tests, and Laravel's process service is no exception. The `Process` facade's `fake` method allows you to instruct Laravel to return stubbed / dummy results when processes are invoked.

### [Faking Processes](#faking-processes)

To explore Laravel's ability to fake processes, let's imagine a route that invokes a process:

```
1use Illuminate\Support\Facades\Process;

2use Illuminate\Support\Facades\Route;

3

4Route::get('/import', function () {

5    Process::run('bash import.sh');

6

7    return 'Import complete!';

8});

use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Route;

Route::get('/import', function () {
    Process::run('bash import.sh');

    return 'Import complete!';
});
```

When testing this route, we can instruct Laravel to return a fake, successful process result for every invoked process by calling the `fake` method on the `Process` facade with no arguments. In addition, we can even [assert](#available-assertions) that a given process was "run":

Pest
PHPUnit

```
1<?php

2

3use Illuminate\Contracts\Process\ProcessResult;

4use Illuminate\Process\PendingProcess;

5use Illuminate\Support\Facades\Process;

6

7test('process is invoked', function () {

8    Process::fake();

9

10    $response = $this->get('/import');

11

12    // Simple process assertion...

13    Process::assertRan('bash import.sh');

14

15    // Or, inspecting the process configuration...

16    Process::assertRan(function (PendingProcess $process, ProcessResult $result) {

17        return $process->command === 'bash import.sh' &&

18               $process->timeout === 60;

19    });

20});

<?php

use Illuminate\Contracts\Process\ProcessResult;
use Illuminate\Process\PendingProcess;
use Illuminate\Support\Facades\Process;

test('process is invoked', function () {
    Process::fake();

    $response = $this->get('/import');

    // Simple process assertion...
    Process::assertRan('bash import.sh');

    // Or, inspecting the process configuration...
    Process::assertRan(function (PendingProcess $process, ProcessResult $result) {
        return $process->command === 'bash import.sh' &&
               $process->timeout === 60;
    });
});
```

```
1<?php

2

3namespace Tests\Feature;

4

5use Illuminate\Contracts\Process\ProcessResult;

6use Illuminate\Process\PendingProcess;

7use Illuminate\Support\Facades\Process;

8use Tests\TestCase;

9

10class ExampleTest extends TestCase

11{

12    public function test_process_is_invoked(): void

13    {

14        Process::fake();

15

16        $response = $this->get('/import');

17

18        // Simple process assertion...

19        Process::assertRan('bash import.sh');

20

21        // Or, inspecting the process configuration...

22        Process::assertRan(function (PendingProcess $process, ProcessResult $result) {

23            return $process->command === 'bash import.sh' &&

24                   $process->timeout === 60;

25        });

26    }

27}

<?php

namespace Tests\Feature;

use Illuminate\Contracts\Process\ProcessResult;
use Illuminate\Process\PendingProcess;
use Illuminate\Support\Facades\Process;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_process_is_invoked(): void
    {
        Process::fake();

        $response = $this->get('/import');

        // Simple process assertion...
        Process::assertRan('bash import.sh');

        // Or, inspecting the process configuration...
        Process::assertRan(function (PendingProcess $process, ProcessResult $result) {
            return $process->command === 'bash import.sh' &&
                   $process->timeout === 60;
        });
    }
}
```

As discussed, invoking the `fake` method on the `Process` facade will instruct Laravel to always return a successful process result with no output. However, you may easily specify the output and exit code for faked processes using the `Process` facade's `result` method:

```
1Process::fake([

2    '*' => Process::result(

3        output: 'Test output',

4        errorOutput: 'Test error output',

5        exitCode: 1,

6    ),

7]);

Process::fake([
    '*' => Process::result(
        output: 'Test output',
        errorOutput: 'Test error output',
        exitCode: 1,
    ),
]);
```

### [Faking Specific Processes](#faking-specific-processes)

As you may have noticed in a previous example, the `Process` facade allows you to specify different fake results per process by passing an array to the `fake` method.

The array's keys should represent command patterns that you wish to fake and their associated results. The `*` character may be used as a wildcard character. Any process commands that have not been faked will actually be invoked. You may use the `Process` facade's `result` method to construct stub / fake results for these commands:

```
1Process::fake([

2    'cat *' => Process::result(

3        output: 'Test "cat" output',

4    ),

5    'ls *' => Process::result(

6        output: 'Test "ls" output',

7    ),

8]);

Process::fake([
    'cat *' => Process::result(
        output: 'Test "cat" output',
    ),
    'ls *' => Process::result(
        output: 'Test "ls" output',
    ),
]);
```

If you do not need to customize the exit code or error output of a faked process, you may find it more convenient to specify the fake process results as simple strings:

```
1Process::fake([

2    'cat *' => 'Test "cat" output',

3    'ls *' => 'Test "ls" output',

4]);

Process::fake([
    'cat *' => 'Test "cat" output',
    'ls *' => 'Test "ls" output',
]);
```

### [Faking Process Sequences](#faking-process-sequences)

If the code you are testing invokes multiple processes with the same command, you may wish to assign a different fake process result to each process invocation. You may accomplish this via the `Process` facade's `sequence` method:

```
1Process::fake([

2    'ls *' => Process::sequence()

3        ->push(Process::result('First invocation'))

4        ->push(Process::result('Second invocation')),

5]);

Process::fake([
    'ls *' => Process::sequence()
        ->push(Process::result('First invocation'))
        ->push(Process::result('Second invocation')),
]);
```

### [Faking Asynchronous Process Lifecycles](#faking-asynchronous-process-lifecycles)

Thus far, we have primarily discussed faking processes which are invoked synchronously using the `run` method. However, if you are attempting to test code that interacts with asynchronous processes invoked via `start`, you may need a more sophisticated approach to describing your fake processes.

For example, let's imagine the following route which interacts with an asynchronous process:

```
1use Illuminate\Support\Facades\Log;

2use Illuminate\Support\Facades\Route;

3

4Route::get('/import', function () {

5    $process = Process::start('bash import.sh');

6

7    while ($process->running()) {

8        Log::info($process->latestOutput());

9        Log::info($process->latestErrorOutput());

10    }

11

12    return 'Done';

13});

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/import', function () {
    $process = Process::start('bash import.sh');

    while ($process->running()) {
        Log::info($process->latestOutput());
        Log::info($process->latestErrorOutput());
    }

    return 'Done';
});
```

To properly fake this process, we need to be able to describe how many times the `running` method should return `true`. In addition, we may want to specify multiple lines of output that should be returned in sequence. To accomplish this, we can use the `Process` facade's `describe` method:

```
1Process::fake([

2    'bash import.sh' => Process::describe()

3        ->output('First line of standard output')

4        ->errorOutput('First line of error output')

5        ->output('Second line of standard output')

6        ->exitCode(0)

7        ->iterations(3),

8]);

Process::fake([
    'bash import.sh' => Process::describe()
        ->output('First line of standard output')
        ->errorOutput('First line of error output')
        ->output('Second line of standard output')
        ->exitCode(0)
        ->iterations(3),
]);
```

Let's dig into the example above. Using the `output` and `errorOutput` methods, we may specify multiple lines of output that will be returned in sequence. The `exitCode` method may be used to specify the final exit code of the fake process. Finally, the `iterations` method may be used to specify how many times the `running` method should return `true`.

### [Available Assertions](#available-assertions)

As [previously discussed](#faking-processes), Laravel provides several process assertions for your feature tests. We'll discuss each of these assertions below.

#### [assertRan](#assert-process-ran)

Assert that a given process was invoked:

```
1use Illuminate\Support\Facades\Process;

2

3Process::assertRan('ls -la');

use Illuminate\Support\Facades\Process;

Process::assertRan('ls -la');
```

When the process was invoked with an array of arguments, you may pass the same array to the assertion:

```
1Process::assertRan(['php', 'artisan', 'migrate']);

Process::assertRan(['php', 'artisan', 'migrate']);
```

The `assertRanTimes` and `assertDidntRun` methods also accept array commands.

The `assertRan` method also accepts a closure, which will receive an instance of a process and a process result, allowing you to inspect the process' configured options. If this closure returns `true`, the assertion will "pass":

```
1Process::assertRan(fn ($process, $result) =>

2    $process->command === 'ls -la' &&

3    $process->path === __DIR__ &&

4    $process->timeout === 60

5);

Process::assertRan(fn ($process, $result) =>
    $process->command === 'ls -la' &&
    $process->path === __DIR__ &&
    $process->timeout === 60
);
```

The `$process` passed to the `assertRan` closure is an instance of `Illuminate\Process\PendingProcess`, while the `$result` is an instance of `Illuminate\Contracts\Process\ProcessResult`.

#### [assertDidntRun](#assert-process-didnt-run)

Assert that a given process was not invoked:

```
1use Illuminate\Support\Facades\Process;

2

3Process::assertDidntRun('ls -la');

use Illuminate\Support\Facades\Process;

Process::assertDidntRun('ls -la');
```

Like the `assertRan` method, the `assertDidntRun` method also accepts a closure, which will receive an instance of a process and a process result, allowing you to inspect the process' configured options. If this closure returns `true`, the assertion will "fail":

```
1Process::assertDidntRun(fn (PendingProcess $process, ProcessResult $result) =>

2    $process->command === 'ls -la'

3);

Process::assertDidntRun(fn (PendingProcess $process, ProcessResult $result) =>
    $process->command === 'ls -la'
);
```

#### [assertRanTimes](#assert-process-ran-times)

Assert that a given process was invoked a given number of times:

```
1use Illuminate\Support\Facades\Process;

2

3Process::assertRanTimes('ls -la', times: 3);

use Illuminate\Support\Facades\Process;

Process::assertRanTimes('ls -la', times: 3);
```

The `assertRanTimes` method also accepts a closure, which will receive an instance of `PendingProcess` and `ProcessResult`, allowing you to inspect the process' configured options. If this closure returns `true` and the process was invoked the specified number of times, the assertion will "pass":

```
1Process::assertRanTimes(function (PendingProcess $process, ProcessResult $result) {

2    return $process->command === 'ls -la';

3}, times: 3);

Process::assertRanTimes(function (PendingProcess $process, ProcessResult $result) {
    return $process->command === 'ls -la';
}, times: 3);
```

#### [assertRanInOrder](#assert-processes-ran-in-order)

Assert that processes were invoked in a given order:

```
1Process::assertRanInOrder([

2    'git fetch',

3    'composer install',

4]);

Process::assertRanInOrder([
    'git fetch',
    'composer install',
]);
```

The `assertRanInOrder` method accepts command strings, arrays of command arguments, or closures like the other process assertions.

### [Preventing Stray Processes](#preventing-stray-processes)

If you would like to ensure that all invoked processes have been faked throughout your individual test or complete test suite, you can call the `preventStrayProcesses` method. After calling this method, any processes that do not have a corresponding fake result will throw an exception rather than starting an actual process:

```
1use Illuminate\Support\Facades\Process;

2

3Process::preventStrayProcesses();

4

5Process::fake([

6    'ls *' => 'Test output...',

7]);

8

9// Fake response is returned...

10Process::run('ls -la');

11

12// An exception is thrown...

13Process::run('bash import.sh');

use Illuminate\Support\Facades\Process;

Process::preventStrayProcesses();

Process::fake([
    'ls *' => 'Test output...',
]);

// Fake response is returned...
Process::run('ls -la');

// An exception is thrown...
Process::run('bash import.sh');
```

Copy as markdown

### On this page

- [Introduction](#introduction)
- [Invoking Processes](#invoking-processes)
  - [Process Options](#process-options)
  - [Process Output](#process-output)
  - [Pipelines](#process-pipelines)
- [Asynchronous Processes](#asynchronous-processes)
  - [Process IDs and Signals](#process-ids-and-signals)
  - [Asynchronous Process Output](#asynchronous-process-output)
  - [Asynchronous Process Timeouts](#asynchronous-process-timeouts)
- [Concurrent Processes](#concurrent-processes)
  - [Naming Pool Processes](#naming-pool-processes)
  - [Pool Process IDs and Signals](#pool-process-ids-and-signals)
- [Testing](#testing)
  - [Faking Processes](#faking-processes)
  - [Faking Specific Processes](#faking-specific-processes)
  - [Faking Process Sequences](#faking-process-sequences)
  - [Faking Asynchronous Process Lifecycles](#faking-asynchronous-process-lifecycles)
  - [Available Assertions](#available-assertions)
  - [Preventing Stray Processes](#preventing-stray-processes)

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

- [CACI Limited](https://laravel.com/partners/caci-limited)
- [Jump24](https://laravel.com/partners/jump24)
- [UCodeSoft](https://laravel.com/partners/ucodesoft)
- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Redberry](https://laravel.com/partners/redberry)
- [Vehikl](https://laravel.com/partners/vehikl)
- [Kirschbaum](https://laravel.com/partners/kirschbaum)
- [Pixel](https://laravel.com/partners/pixel)
- [Curotec](https://laravel.com/partners/curotec)
- [Tighten](https://laravel.com/partners/tighten)
- [See All](https://laravel.com/partners)
