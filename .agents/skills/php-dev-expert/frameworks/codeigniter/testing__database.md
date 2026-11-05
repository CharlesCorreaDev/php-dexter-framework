# Testing Your Database — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/testing/database.html

---

# Testing Your Database[](#testing-your-database "Link to this heading")

## [The Test Class](#id1)[](#the-test-class "Link to this heading")

In order to take advantage of the built-in database tools that CodeIgniter provides for testing, your
tests must extend `CIUnitTestCase` and use the `DatabaseTestTrait`:

```
<?php

namespace App\Database;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;

class MyTests extends CIUnitTestCase
{
    use DatabaseTestTrait;

    // ...
}
```

Because special functionality executed during the `setUp()` and `tearDown()` phases, you must ensure
that you call the parent’s methods if you need to use those methods, otherwise you will lose much
of the functionality described here:

```
<?php

namespace App\Database;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;

class MyTests extends CIUnitTestCase
{
    use DatabaseTestTrait;

    protected function setUp(): void
    {
        parent::setUp();

        // Do something here....
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // Do something here....
    }
}
```

## [Setting Up a Test Database](#id2)[](#setting-up-a-test-database "Link to this heading")

When running database tests, you need to provide a database that can be used during testing. Instead of
using the PHPUnit built-in database features, the framework provides tools specific to CodeIgniter. The first
step is to ensure that you have set up a `tests` database group in **app/Config/Database.php**.
This specifies a database connection that is only used while running tests, to keep your other data safe.

If you have multiple developers on your team, you will likely want to keep your credentials stored in
the **.env** file. To do so, edit the file to ensure the following lines are present and have the
correct information:

```
database.tests.hostname = localhost
database.tests.database = ci4_test
database.tests.username = root
database.tests.password = root
database.tests.DBDriver = MySQLi
database.tests.DBPrefix =
database.tests.port = 3306
```

### [Migrations and Seeds](#id3)[](#migrations-and-seeds "Link to this heading")

When running tests, you need to ensure that your database has the correct schema set up and that
it is in a known state for every test. You can use migrations and seeds to set up your database,
by adding a couple of class properties to your test.

```
<?php

namespace App\Database;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;

class MyTests extends CIUnitTestCase
{
    use DatabaseTestTrait;

    // For Migrations
    protected $migrate     = true;
    protected $migrateOnce = false;
    protected $refresh     = true;
    protected $namespace   = 'Tests\Support';

    // For Seeds
    protected $seedOnce = false;
    protected $seed     = 'TestSeeder';
    protected $basePath = 'path/to/database/files';

    // ...
}
```

#### Migrations[](#migrations "Link to this heading")

##### $migrate[](#migrate "Link to this heading")

This boolean value determines whether the database migration runs before test.
By default, the database is always migrated to the latest available state as defined by `$namespace`.
If `false`, migration never runs. If you want to disable migration, set `false`.

##### $migrateOnce[](#migrateonce "Link to this heading")

This boolean value determines whether the database migration runs only once. If you want
to run migration once before the first test, set `true`. If not present or `false`, migration
runs before each test.

##### $refresh[](#refresh "Link to this heading")

This boolean value determines whether the database is completely refreshed before test. If `true`,
all migrations are rolled back to version 0.

##### $namespace[](#namespace "Link to this heading")

By default, CodeIgniter will look in **tests/\_support/Database/Migrations** to locate the migrations
that it should run during testing. You can change this location by specifying a new namespace in the `$namespace` properties.
This should not include the **Database\Migrations** sub-namespace but just the base namespace.

Important

If you set this property to `null`, it runs migrations from all available namespaces like `php spark migrate --all`.

#### Seeds[](#seeds "Link to this heading")

##### $seed[](#seed "Link to this heading")

If present and not empty, this specifies the name of a Seed file that is used to populate the database with
test data prior to test running.

##### $seedOnce[](#seedonce "Link to this heading")

This boolean value determines whether the database seeding runs only once. If you want
to run database seeding once before the first test, set `true`. If not present or `false`, database seeding
runs before each test.

##### $basePath[](#basepath "Link to this heading")

By default, CodeIgniter will look in **tests/\_support/Database/Seeds** to locate the seeds that it should run during testing.
You can change this directory by specifying the `$basePath` property. This should not include the **Seeds** directory,
but the path to the single directory that holds the sub-directory.

## [Helper Methods](#id4)[](#helper-methods "Link to this heading")

The **DatabaseTestTrait** class provides several helper methods to aid in testing your database.

### [Changing Database State](#id5)[](#changing-database-state "Link to this heading")

#### regressDatabase()[](#regressdatabase "Link to this heading")

Called during `$refresh` described above, this method is available if you need to reset the database manually.

#### migrateDatabase()[](#migratedatabase "Link to this heading")

Called during `setUp()`, this method is available if you need to run migrations manually.

#### seed($name)[](#seed-name "Link to this heading")

Allows you to manually load a Seed into the database. The only parameter is the name of the seed to run. The seed
must be present within the path specified in `$basePath`.

#### hasInDatabase($table, $data)[](#hasindatabase-table-data "Link to this heading")

Inserts a new row into the database. This row is removed after the current test runs. `$data` is an associative
array with the data to insert into the table.

```
<?php

$data = [
    'email' => '[email protected]',
    'name'  => 'Joe Cool',
];
$this->hasInDatabase('users', $data);
```

### [Getting Data from Database](#id6)[](#getting-data-from-database "Link to this heading")

#### grabFromDatabase($table, $column, $criteria)[](#grabfromdatabase-table-column-criteria "Link to this heading")

Returns the value of `$column` from the specified table where the row matches `$criteria`. If more than one
row is found, it will only return the first one.

```
<?php

$username = $this->grabFromDatabase('users', 'username', ['email' => '[email protected]']);
```

### [Assertions](#id7)[](#assertions "Link to this heading")

#### dontSeeInDatabase($table, $criteria)[](#dontseeindatabase-table-criteria "Link to this heading")

Asserts that a row with criteria matching the key/value pairs in `$criteria` DOES NOT exist in the database.

```
<?php

$criteria = [
    'email'  => '[email protected]',
    'active' => 1,
];
$this->dontSeeInDatabase('users', $criteria);
```

#### seeInDatabase($table, $criteria)[](#seeindatabase-table-criteria "Link to this heading")

Asserts that a row with criteria matching the key/value pairs in `$criteria` DOES exist in the database.

```
<?php

$criteria = [
    'email'  => '[email protected]',
    'active' => 1,
];
$this->seeInDatabase('users', $criteria);
```

#### seeNumRecords($expected, $table, $criteria)[](#seenumrecords-expected-table-criteria "Link to this heading")

Asserts that a number of matching rows are found in the database that match `$criteria`.

```
<?php

$criteria = [
    'active' => 1,
];
$this->seeNumRecords(2, 'users', $criteria);
```
