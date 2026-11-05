# Testing CLI Commands — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/testing/cli.html

---

# Testing CLI Commands[](#testing-cli-commands "Link to this heading")

## [Using MockInputOutput](#id6)[](#using-mockinputoutput "Link to this heading")

Added in version 4.5.0.

### [MockInputOutput](#id7)[](#mockinputoutput "Link to this heading")

**MockInputOutput** provides an easy way to write tests for commands that require
user input, such as `CLI::prompt()`, `CLI::wait()`, and `CLI::input()`.

You can replace the `InputOutput` class with `MockInputOutput` during test
execution to capture inputs and outputs.

Note

When you use `MockInputOutput`, you don’t need to use
[StreamFilterTrait](#stream-filter-trait), [CITestStreamFilter](#ci-test-stream-filter), and
[PhpStreamWrapper](#php-stream-wrapper).

#### [Helper Methods](#id8)[](#helper-methods "Link to this heading")

##### getOutput(?int $index = null): string[](#getoutput-int-index-null-string "Link to this heading")

Gets the output.

- If you call it like `$io->getOutput()`, it returns the whole output string.
- If you specify `0` or a positive number, it returns the output array item.
  Each item has the output of a `CLI::fwrite()` call.
- If you specify a negative number `-n`, it returns the last `n`-th item of
  the output array.

##### getOutputs(): array[](#getoutputs-array "Link to this heading")

Returns the output array. Each item has the output of a `CLI::fwrite()` call.

### [How to Use](#id9)[](#how-to-use "Link to this heading")

- `CLI::setInputOutput()` can set the `MockInputOutput` instance to the `CLI` class.
- `CLI::resetInputOutput()` resets the `InputOutput` instance in the `CLI` class.
- `MockInputOutput::setInputs()` sets the user input array.
- `MockInputOutput::getOutput()` gets the command output.

The following test code is to test the command `spark db:table`:

```
<?php

use CodeIgniter\CLI\CLI;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\Mock\MockInputOutput;

final class DbTableTest extends CIUnitTestCase
{
    use DatabaseTestTrait;

    protected $migrateOnce = true;

    public function testDbTable(): void
    {
        // Set MockInputOutput to CLI.
        $io = new MockInputOutput();
        CLI::setInputOutput($io);

        // User will input "a" (invalid value) and "0".
        $io->setInputs(['a', '0']);

        command('db:table');

        // Get the whole output string.
        $output = $io->getOutput();

        $expected = 'Which table do you want to see? [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]: a';
        $this->assertStringContainsString($expected, $output);

        $expected = 'Data of Table "db_migrations":';
        $this->assertStringContainsString($expected, $output);

        // Remove MockInputOutput.
        CLI::resetInputOutput();
    }
}
```

## [Without MockInputOutput](#id10)[](#without-mockinputoutput "Link to this heading")

### [Testing CLI Output](#id11)[](#testing-cli-output "Link to this heading")

#### [StreamFilterTrait](#id12)[](#streamfiltertrait "Link to this heading")

Added in version 4.3.0.

**StreamFilterTrait** provides an alternate to these helper methods.

You may need to test things that are difficult to test. Sometimes, capturing a stream, like PHP’s own STDOUT, or STDERR,
might be helpful. The `StreamFilterTrait` helps you capture the output from the stream of your choice.

##### How to Use[](#id2 "Link to this heading")

- `StreamFilterTrait::getStreamFilterBuffer()` gets the captured data from the buffer.
- `StreamFilterTrait::resetStreamFilterBuffer()` resets captured data.

An example demonstrating this inside one of your test cases:

```
<?php

namespace Tests;

use CodeIgniter\CLI\CLI;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\StreamFilterTrait;

final class SomeTest extends CIUnitTestCase
{
    use StreamFilterTrait;

    public function testSomeOutput(): void
    {
        CLI::write('first.');

        $this->assertSame("\nfirst.\n", $this->getStreamFilterBuffer());

        $this->resetStreamFilterBuffer();

        CLI::write('second.');

        $this->assertSame("second.\n", $this->getStreamFilterBuffer());
    }
}
```

The `StreamFilterTrait` has a configurator that is called automatically.
See [Testing Traits](testing__overview.md#testing-overview-traits).

If you override the `setUp()` or `tearDown()` methods in your test, then you must call the `parent::setUp()` and
`parent::tearDown()` methods respectively to configure the `StreamFilterTrait`.

#### [CITestStreamFilter](#id13)[](#citeststreamfilter "Link to this heading")

**CITestStreamFilter** for manual/single use.

If you need to capture streams in only one test, then instead of using the StreamFilterTrait trait, you can manually
add a filter to streams.

##### How to Use[](#id3 "Link to this heading")

- `CITestStreamFilter::registration()` Filter registration.
- `CITestStreamFilter::addOutputFilter()` Adding a filter to the output stream.
- `CITestStreamFilter::addErrorFilter()` Adding a filter to the error stream.
- `CITestStreamFilter::removeOutputFilter()` Removing a filter from the output stream.
- `CITestStreamFilter::removeErrorFilter()` Removing a filter from the error stream.

```
<?php

namespace Tests;

use CodeIgniter\CLI\CLI;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\Filters\CITestStreamFilter;

final class SomeTest extends CIUnitTestCase
{
    public function testSomeOutput(): void
    {
        CITestStreamFilter::registration();
        CITestStreamFilter::addOutputFilter();

        CLI::write('first.');

        CITestStreamFilter::removeOutputFilter();
    }
}
```

### [Testing CLI Input](#id14)[](#testing-cli-input "Link to this heading")

#### [PhpStreamWrapper](#id15)[](#phpstreamwrapper "Link to this heading")

Added in version 4.3.0.

**PhpStreamWrapper** provides a way to write tests for methods that require user input,
such as `CLI::prompt()`, `CLI::wait()`, and `CLI::input()`.

Note

The PhpStreamWrapper is a stream wrapper class.
If you don’t know PHP’s stream wrapper,
see [The streamWrapper class](https://www.php.net/manual/en/class.streamwrapper.php)
in the PHP maual.

##### How to Use[](#id5 "Link to this heading")

- `PhpStreamWrapper::register()` Register the `PhpStreamWrapper` to the `php` protocol.
- `PhpStreamWrapper::restore()` Restore the php protocol wrapper back to the PHP built-in wrapper.
- `PhpStreamWrapper::setContent()` Set the input data.

Important

The PhpStreamWrapper is intended for only testing `php://stdin`.
But when you register it, it handles all the [php protocol](https://www.php.net/manual/en/wrappers.php.php) streams,
such as `php://stdout`, `php://stderr`, `php://memory`.
So it is strongly recommended that `PhpStreamWrapper` be registered/unregistered
only when needed. Otherwise, it will interfere with other built-in php streams
while registered.

An example demonstrating this inside one of your test cases:

```
<?php

namespace Tests;

use CodeIgniter\CLI\CLI;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\PhpStreamWrapper;

final class SomeTest extends CIUnitTestCase
{
    public function testPrompt(): void
    {
        // Register the PhpStreamWrapper.
        PhpStreamWrapper::register();

        // Set the user input to 'red'. It will be provided as `php://stdin` output.
        $expected = 'red';
        PhpStreamWrapper::setContent($expected);

        $output = CLI::prompt('What is your favorite color?');

        $this->assertSame($expected, $output);

        // Restore php protocol wrapper.
        PhpStreamWrapper::restore();
    }
}
```
