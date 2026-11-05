# Testing — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/testing/overview.html

---

# Testing[](#testing "Link to this heading")

CodeIgniter has been built to make testing both the framework and your application as simple as possible.
Support for [PHPUnit](https://phpunit.de/) is built in, and the framework provides a number of convenient
helper methods to make testing every aspect of your application as painless as possible.

## [System Set Up](#id1)[](#system-set-up "Link to this heading")

### [Installing PHPUnit](#id2)[](#installing-phpunit "Link to this heading")

CodeIgniter uses [PHPUnit](https://phpunit.de/) as the basis for all of its testing. There are two ways to install
PHPUnit to use within your system.

#### [Composer](#id3)[](#composer "Link to this heading")

The recommended method is to install it in your project using [Composer](https://getcomposer.org/). While it’s possible
to install it globally we do not recommend it, since it can cause compatibility issues with other projects on your
system as time goes on.

Ensure that you have Composer installed on your system. From the project root (the directory that contains the
application and system directories) type the following from the command line:

```
composer require --dev phpunit/phpunit
```

This will install the correct version for your current PHP version. Once that is done, you can run all of the
tests for this project by typing:

```
vendor/bin/phpunit
```

If you are using Windows, use the following command:

```
vendor\bin\phpunit
```

#### [Phar](#id4)[](#phar "Link to this heading")

The other option is to download the .phar file from the [PHPUnit](https://phpunit.de/getting-started/phpunit-9.html) site.
This is a standalone file that should be placed within your project root.

## [Testing Your Application](#id5)[](#testing-your-application "Link to this heading")

### [PHPUnit Configuration](#id6)[](#phpunit-configuration "Link to this heading")

In your CodeIgniter project root, there is the `phpunit.dist.xml` file. This
controls unit testing of your application. If you provide your own `phpunit.xml`,
it will over-ride this.

By default, test files are placed under the **tests** directory in the project root.

### [The Test Class](#id7)[](#the-test-class "Link to this heading")

In order to take advantage of the additional tools provided, your tests must extend
`CodeIgniter\Test\CIUnitTestCase`.

There are no rules for how test files must be placed. However, we recommend that
you establish placement rules in advance so that you can quickly understand where
the test files are located.

In this document, the test files corresponding to the classes in the **app** directory
will be placed in the **tests/app** directory. To test a new library,
**app/Libraries/Foo.php**, you would create a new file at
**tests/app/Libraries/FooTest.php**:

```
<?php

namespace App\Libraries;

use CodeIgniter\Test\CIUnitTestCase;

class FooTest extends CIUnitTestCase
{
    public function testFooNotBar()
    {
        // ...
    }
}
```

To test one of your models, **app/Models/UserModel.php**, you might end up with
something like this in **tests/app/Models/UserModelTest.php**:

```
<?php

namespace App\Models;

use CodeIgniter\Test\CIUnitTestCase;

class UserModelTest extends CIUnitTestCase
{
    public function testFooNotBar()
    {
        // ...
    }
}
```

You can create any directory structure that fits your testing style/needs. When namespacing the test classes,
remember that the **app** directory is the root of the `App` namespace, so any classes you use must
have the correct namespace relative to `App`.

Note

Namespaces are not strictly required for test classes, but they are helpful to ensure no class names collide.

When testing database results, you must use the [DatabaseTestTrait](testing__database.md) in your class.

#### [Staging](#id8)[](#staging "Link to this heading")

Most tests require some preparation in order to run correctly. PHPUnit’s `TestCase` provides four methods
to help with staging and clean up:

```
public static function setUpBeforeClass(): void
public static function tearDownAfterClass(): void

protected function setUp(): void
protected function tearDown(): void
```

The static methods `setUpBeforeClass()` and `tearDownAfterClass()` run before and after the entire test case, whereas the protected methods `setUp()` and `tearDown()` run
between each test.

If you implement any of these special functions, make sure you run their
parent as well so extended test cases do not interfere with staging:

```
<?php

namespace App\Models;

use CodeIgniter\Test\CIUnitTestCase;

final class UserModelTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // Do not forget

        helper('text');
    }

    // ...
}
```

#### [Traits](#id9)[](#traits "Link to this heading")

A common way to enhance your tests is using traits to consolidate staging across different
test cases. `CIUnitTestCase` will detect any class traits and look for staging methods
to run named for the trait itself (i.e. setUp{NameOfTrait}() and tearDown{NameOfTrait}()).

For example, if you needed to add authentication to some
of your test cases you could create an authentication trait with a set up method to fake a
logged in user:

```
<?php

namespace App\Traits;

trait AuthTrait
{
    protected function setUpAuthTrait()
    {
        $user = $this->createFakeUser();
        $this->logInUser($user);
    }

    // ...
}
```

```
<?php

namespace Tests;

use App\Traits\AuthTrait;
use CodeIgniter\Test\CIUnitTestCase;

final class AuthenticationFeatureTest extends CIUnitTestCase
{
    use AuthTrait;

    // ...
}
```

#### [Additional Assertions](#id10)[](#additional-assertions "Link to this heading")

`CIUnitTestCase` provides additional unit testing assertions that you might find useful.

##### assertLogged($level, $expectedMessage)[](#assertlogged-level-expectedmessage "Link to this heading")

Ensure that something you expected to be logged was actually logged:

##### assertLogContains($level, $logMessage)[](#assertlogcontains-level-logmessage "Link to this heading")

Ensure that there’s a record in the logs which contains a message part.

```
<?php

$config = new \Config\Logger();
$logger = new \CodeIgniter\Log\Logger($config);

// check verbatim the log message
$logger->log('error', "That's no moon");
$this->assertLogged('error', "That's no moon");

// check that a portion of the message is found in the logs
$exception = new \RuntimeException('Hello world.');
$logger->log('error', $exception->getTraceAsString());
$this->assertLogContains('error', '{main}');
```

##### assertEventTriggered($eventName)[](#asserteventtriggered-eventname "Link to this heading")

Ensure that an event you expected to be triggered actually was:

```
<?php

use CodeIgniter\Events\Events;

Events::on('foo', static function ($arg) use (&$result) {
    $result = $arg;
});

Events::trigger('foo', 'bar');

$this->assertEventTriggered('foo');
```

##### assertHeaderEmitted($header, $ignoreCase = false)[](#assertheaderemitted-header-ignorecase-false "Link to this heading")

Ensure that a header or cookie was actually emitted:

```
<?php

$response->setCookie('foo', 'bar');

ob_start();
$this->response->send();
$output = ob_get_clean(); // in case you want to check the actual body

$this->assertHeaderEmitted('Set-Cookie: foo=bar');
```

Note

The test case with this should be run as a separate process
(with [@runInSeparateProcess annotation](https://docs.phpunit.de/en/10.5/annotations.html#runinseparateprocess) or [RunInSeparateProcess attribute](https://docs.phpunit.de/en/10.5/attributes.html#runinseparateprocess))
in PHPUnit.

##### assertHeaderNotEmitted($header, $ignoreCase = false)[](#assertheadernotemitted-header-ignorecase-false "Link to this heading")

Ensure that a header or cookie was not emitted:

```
<?php

$response->setCookie('foo', 'bar');

ob_start();
$this->response->send();
$output = ob_get_clean(); // in case you want to check the actual body

$this->assertHeaderNotEmitted('Set-Cookie: banana');
```

Note

The test case with this should be run as a separate process
(with [@runInSeparateProcess annotation](https://docs.phpunit.de/en/10.5/annotations.html#runinseparateprocess) or [RunInSeparateProcess attribute](https://docs.phpunit.de/en/10.5/attributes.html#runinseparateprocess))
in PHPUnit.

##### assertCloseEnough($expected, $actual, $message = ‘’, $tolerance = 1)[](#assertcloseenough-expected-actual-message-tolerance-1 "Link to this heading")

For extended execution time testing, tests that the absolute difference
between expected and actual time is within the prescribed tolerance:

```
<?php

use CodeIgniter\Debug\Timer;

$timer = new Timer();
$timer->start('longjohn', strtotime('-11 minutes'));
$this->assertCloseEnough(11 * 60, $timer->getElapsedTime('longjohn'));
```

The above test will allow the actual time to be either 660 or 661 seconds.

##### assertCloseEnoughString($expected, $actual, $message = ‘’, $tolerance = 1)[](#assertcloseenoughstring-expected-actual-message-tolerance-1 "Link to this heading")

For extended execution time testing, tests that the absolute difference
between expected and actual time, formatted as strings, is within the prescribed tolerance:

```
<?php

use CodeIgniter\Debug\Timer;

$timer = new Timer();
$timer->start('longjohn', strtotime('-11 minutes'));
$this->assertCloseEnoughString(11 * 60, $timer->getElapsedTime('longjohn'));
```

The above test will allow the actual time to be either 660 or 661 seconds.

#### [Accessing Protected/Private Properties](#id11)[](#accessing-protected-private-properties "Link to this heading")

When testing, you can use the following setter and getter methods to access protected and private methods and
properties in the classes that you are testing.

##### getPrivateMethodInvoker($instance, $method)[](#getprivatemethodinvoker-instance-method "Link to this heading")

Enables you to call private methods from outside the class. This returns a function that can be called. The first
parameter is an instance of the class to test. The second parameter is the name of the method you want to call.

```
<?php

use App\Libraries\Foo;

// Create an instance of the class to test
$obj = new Foo();

// Get the invoker for the 'privateMethod' method.
$method = self::getPrivateMethodInvoker($obj, 'privateMethod');

// Test the results
$this->assertEquals('bar', $method('param1', 'param2'));
```

##### getPrivateProperty($instance, $property)[](#getprivateproperty-instance-property "Link to this heading")

Retrieves the value of a private/protected class property from an instance of a class. The first parameter is an
instance of the class to test. The second parameter is the name of the property.

```
<?php

use App\Libraries\Foo;

// Create an instance of the class to test
$obj = new Foo();

// Test the value
$this->assertEquals('bar', $this->getPrivateProperty($obj, 'baz'));
```

##### setPrivateProperty($instance, $property, $value)[](#setprivateproperty-instance-property-value "Link to this heading")

Set a protected value within a class instance. The first parameter is an instance of the class to test. The second
parameter is the name of the property to set the value of. The third parameter is the value to set it to:

```
<?php

use App\Libraries\Foo;

// Create an instance of the class to test
$obj = new Foo();

// Set the value
$this->setPrivateProperty($obj, 'baz', 'oops!');

// Do normal testing...
```

### [Mocking Services](#id12)[](#mocking-services "Link to this heading")

You will often find that you need to mock one of the services defined in **app/Config/Services.php** to limit
your tests to only the code in question, while simulating various responses from the services. This is especially
true when testing controllers and other integration testing. The **Services** class provides the following methods
to simplify this.

#### [Services::injectMock()](#id13)[](#services-injectmock "Link to this heading")

This method allows you to define the exact instance that will be returned by the Services class. You can use this to
set properties of a service so that it behaves in a certain way, or replace a service with a mocked class.

```
<?php

namespace Tests;

use CodeIgniter\HTTP\CURLRequest;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Services;

final class SomeTest extends CIUnitTestCase
{
    public function testSomething()
    {
        $curlrequest = $this->getMockBuilder(CURLRequest::class)
            ->onlyMethods(['request'])
            ->getMock();
        Services::injectMock('curlrequest', $curlrequest);

        // Do normal testing here....
    }
}
```

The first parameter is the service that you are replacing. The name must match the function name in the Services
class exactly. The second parameter is the instance to replace it with.

#### [Services::reset()](#id14)[](#services-reset "Link to this heading")

Removes all mocked classes from the Services class, bringing it back to its original state.

You can also use the `$this->resetServices()` method that `CIUnitTestCase` provides.

Note

This method resets the all states of Services, and the `RouteCollection`
will have no routes. If you want to use your routes to be loaded, you need to
call the `loadRoutes()` method like `Services::routes()->loadRoutes()`.

#### [Services::resetSingle(string $name)](#id15)[](#services-resetsingle-string-name "Link to this heading")

Removes any mock and shared instances for a single service, by its name.

Note

The `Cache`, `Email` and `Session` services are mocked by default to prevent intrusive testing behavior. To prevent these from mocking remove their method callback from the class property: `$setUpMethods = ['mockEmail', 'mockSession'];`

### [Mocking Factory Instances](#id16)[](#mocking-factory-instances "Link to this heading")

Similar to Services, you may find yourself needing to supply a pre-configured class instance
during testing that will be used with `Factories`. Use the same `Factories::injectMock()` and `Factories::reset()`
static methods like **Services**, but they take an additional preceding parameter for the
component name:

```
<?php

namespace Tests;

use App\Models\UserModel;
use CodeIgniter\Config\Factories;
use CodeIgniter\Test\CIUnitTestCase;
use Tests\Support\Mock\MockUserModel;

final class SomeTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $model = new MockUserModel();
        Factories::injectMock('models', UserModel::class, $model);
    }
}
```

Note

All component Factories are reset by default between each test. Modify your test case’s `$setUpMethods` if you need instances to persist.

### [Testing and Time](#id17)[](#testing-and-time "Link to this heading")

Testing time-dependent code can be challenging. However, when using the
[Time](libraries__time.md) class, the current time can be fixed or changed
at will during testing.

Below is a sample test code that fixes the current time:

```
<?php

namespace Tests;

use CodeIgniter\I18n\Time;
use CodeIgniter\Test\CIUnitTestCase;

final class TimeDependentCodeTest extends CIUnitTestCase
{
    protected function tearDown(): void
    {
        parent::tearDown();

        // Reset the current time.
        Time::setTestNow();
    }

    public function testFixTime(): void
    {
        // Fix the current time to "2023-11-25 12:00:00".
        Time::setTestNow('2023-11-25 12:00:00');

        // This assertion always passes.
        $this->assertSame('2023-11-25 12:00:00', (string) Time::now());
    }
}
```

You can fix the current time with the `Time::setTestNow()` method.
Optionally, you can specify a locale as the second parameter.

Don’t forget to reset the current time after the test with calling it without
parameters.
