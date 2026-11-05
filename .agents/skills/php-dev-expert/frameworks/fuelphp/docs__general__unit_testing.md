# Unit Testing - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/unit_testing.html

---

## [Unit Testing](#unit_testing)

FuelPHP is built with automated unit testing in mind, and it includes tests and test classes based on the [PHPUnit](http://www.phpunit.de/manual/current/en/index.html "The PHPUnit Testing Framework") testing framework.

### [What is a Unit Test?](#what_is_a_unit_test)

Unit Tests are automated tests written to make sure a unit of code (typically a function or method) is doing what it was designed to do.
These tests also help developers to be sure any changes they make to a system do not break anything that is already working.
Unit tests are also the key driving force behind the discipline of Test Driven Development (TDD).

### [PHPUnit](#prerequisite)

You'll need to have [PHPUnit](http://www.phpunit.de/manual/current/en/index.html "The PHPUnit Testing Framework") installed locally if you want to run the tests that ship with FuelPHP, and if you want to use Oil to run your tests.
If you don't already have PHPUnit installed, please refer to the PHPUnit installation documentation at: [https://phpunit.de/manual/current/en/installation.html](https://phpunit.de/manual/current/en/installation.html "PHPUnit Installation").

If you aren't interested in running unit tests with FuelPHP, then there is no need for you to install PHPUnit.

### [Running Unit Tests](#running_unit_tests)

FuelPHP's included command-line utility Oil is already configured to run your unit tests.
You can run all the tests in your FuelPHP project from the command line using the Oil command line utility:

```
$ php oil test

Tests Running...This may take a few moments.
PHPUnit 3.6.10 by Sebastian Bergmann.

Configuration read from /home/user/sites/example/fuel/core/phpunit.xml

...............................................................  63 / 251 ( 25%)
............................................................... 126 / 251 ( 50%)
............................................................... 189 / 251 ( 75%)
..............................................................

Time: 6 seconds, Memory: 22.25Mb

OK (251 tests, 206 assertions)
```

### [Creating Unit Tests](#creating_unit_tests)

In FuelPHP, tests are located in the fuel/app/tests directory and its subdirectories.
If this directory does not exist, go ahead and create it.
By convention, test files are placed in the same subpath of fuel/app/tests as the tested class is of fuel/app/classes, so a test for the class at fuel/app/classes/model/login.php would be in the file fuel/app/tests/model/login.php.

Tests are classes that extend the TestCase class.
TestCase is FuelPHP's extension of PHPUnit's PHPUnit\_Framework\_TestCase class, so you'll be able to use all the usual PHPUnit assertions and methods in your test.
By convention, test classes are named after the class they test, prefixed with Test\_, so a test for the Model\_Login class would be named Test\_Model\_Login.

```
class Test_Model_Login extends TestCase
{
	public function test_foo()
	{
	}
}
```

You can find further information about writing tests in the PHPUnit documentation at: <http://www.phpunit.de/manual/current/en/writing-tests-for-phpunit.html>.

### [Test Groups](#test_groups)

If you want to run only a subset of tests during development, you can use test groups.
Run `php oil test` with the `--group=` command switch.

```
$ php oil test --group=App
```

This command will run only the tests in the group 'App'.
You can assign a test class to one or more test groups with the docblock attribute @group.

```
/**
 * @group App
 * @group Login
 */
class Test_Model_Login extends TestCase
{
	public function test_foo()
	{
	}
}
```

## [Advanced Configuration](#advanced_configuration)

If you need to customize the contents of the phpunit.xml file, copy fuel/core/phpunit.xml into the fuel/app directory.
FuelPHP will recognize your new configuration file in place of the old one in fuel/core.

### [Unit Tests for Modules](#unit_tests_for_modules)

If you're developing a large system in FuelPHP, the recommended practice is to develop in modules.
But since module paths are configurable, the module paths must be configured in phpunit.xml in order for the tests to be recognized and run.
For example, if you are developing modules in fuel/app/modules, you'll want to add this test suite to your phpunit configuration:

```
<testsuite name="modules">
    <directory suffix=".php">../app/modules/*/tests</directory>
</testsuite>
```

### [Testing In A Renamed fuel/ Directory](#testing_in_a_renamed_directory)

If you've renamed your fuel directory to something else, the system variables (document root, core path, etc.) set in the phpunit.xml file have become bad references.
While changes to the paths in the Oil script in your root will help with the other Oil commands, PHPUnit loads its own environment, so a renamed fuel directory will break testing.
To fix this, edit the copy of phpunit.xml in your app/ directory and update the server variable paths to reflect your new file structure.
