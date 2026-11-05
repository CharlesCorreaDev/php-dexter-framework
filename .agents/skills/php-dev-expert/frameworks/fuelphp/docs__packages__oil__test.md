# Test - Oil Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/oil/test.html

---

## Test

The `oil test` (or `oil t`) command runs the PHPUnit tests associated with your web app, modules and packages. Full documentation on unit testing with FuelPHP can be found on the [Unit Testing](docs__general__unit_testing.md) documentation page, and full documentation on PHPUnit can be found on the [PHPUnit Website](http://www.phpunit.de/manual/current/en/index.html).

### Configuration

The oil utility itself does not need much configuration, but if your instance of PHPUnit is not installed globally on your machine (for example, if you installed PHPUnit to your project using Composer), you'll want to configure oil to address your PHPUnit installation. Create (or copy from the oil package) a config file at `app/config/oil.php`, and change these settings as needed:

#### PHPUnit Configuration

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| phpunit.autoload\_path | string | ``` 'PHPUnit/Autoload.php' ``` | The path to PHPUnit's Autoload file. |
| phpunit.binary\_path | string | ``` 'phpunit' ``` | This is the command (including full path, if necessary) to run the phpunit executable. |

#### Command Line Options

Test supports several PHPUnit command line options:

`--file=<file>` Run a test on a specific file only.

`--group=<group>` Only runs tests from the specified group(s).

`--testsuite=<testsuite>` Only runs tests from the specified testsuite(s).

`--exclude-group=<group>` Exclude tests from the specified group(s).

`--coverage-clover=<file>` Generate code coverage report in Clover XML format.

`--coverage-html=<dir>` Generate code coverage report in HTML format.

`--coverage-php=<file>` Serialize PHP\_CodeCoverage object to file.

`--coverage-text=<file>` Generate code coverage report in text format.

`--log-junit=<file>` Generate report of test execution in JUnit XML format to file.

`--debug` Display debugging information during test execution.

For more information on these command line options and what they do, please see the [PHPUnit Documentation](http://www.phpunit.de/manual/current/en/textui.html#textui.clioptions).

#### PHPUnit Test Runner Configuration

Oil will by default pass to PHPUnit the `phpunit.xml` test runner configuration file located in the `COREPATH` directory.

Fuel's basic phpunit.xml at `fuel/core/phpunit.xml` contains:

```
<?xml version="1.0" encoding="UTF-8"?>
<phpunit colors="true" stopOnFailure="false" bootstrap="../core/bootstrap_phpunit.php">
	<php>
		<server name="doc_root" value="../../"/>
		<server name="app_path" value="fuel/app"/>
		<server name="core_path" value="fuel/core"/>
		<server name="package_path" value="fuel/packages"/>
	</php>
	<testsuites>
		<testsuite name="core">
			<directory suffix=".php">../core/tests</directory>
		</testsuite>
		<testsuite name="packages">
			<directory suffix=".php">../packages/*/tests</directory>
		</testsuite>
		<testsuite name="app">
			<directory suffix=".php">../app/tests</directory>
		</testsuite>
	</testsuites>
</phpunit>
```

If you need to change this configuration file, copy it into your `APPPATH` directory and edit that copy. Oil will recognize the new configuration file in place of the default and will use your custom configuration.

For example, if you develop in Modules, you may want the following additional test suite in your custom test configuration file:

```
		<testsuite name="modules">
			<directory suffix=".php">../modules/*/tests</directory>
		</testsuite>
```
