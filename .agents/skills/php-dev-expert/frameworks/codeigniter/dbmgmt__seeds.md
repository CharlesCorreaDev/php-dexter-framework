# Database Seeding — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/dbmgmt/seeds.html

---

# Database Seeding[](#database-seeding "Link to this heading")

Database seeding is a simple way to add data into your database. It is especially useful during development where
you need to populate the database with sample data that you can develop against, but it is not limited to that.
Seeders can contain static data that you don’t want to include in a migration, like countries, or geo-coding tables,
event or setting information, and more.

## [Database Seeders](#id1)[](#database-seeders "Link to this heading")

Database seeders are simple classes that must have a `run()` method, and extend `CodeIgniter\Database\Seeder`.
Within the `run()` the class can create any form of data that it needs to. It has access to the database
connection and the forge through `$this->db` and `$this->forge`, respectively. Seed files must be
stored within the **app/Database/Seeds** directory. The name of the file must match the name of the class.

```
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SimpleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'darth',
            'email'    => '[email protected]',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
```

## [Nesting Seeders](#id2)[](#nesting-seeders "Link to this heading")

Seeders can call other seeders, with the `call()` method. This allows you to easily organize a central seeder,
but organize the tasks into separate seeder files:

```
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('CountrySeeder');
        $this->call('JobSeeder');
    }
}
```

You can also use a fully-qualified class name in the `call()` method, allowing you to keep your seeders
anywhere the autoloader can find them. This is great for more modular code bases:

```
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SimpleSeeder extends Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('My\Database\Seeds\CountrySeeder');
    }
}
```

## [Using Seeders](#id3)[](#using-seeders "Link to this heading")

You can grab a copy of the main seeder through the database config class:

```
<?php

$seeder = \Config\Database::seeder();
$seeder->call('TestSeeder');
```

### [Using a Different Database Group](#id4)[](#using-a-different-database-group "Link to this heading")

You can specify a different database group when obtaining a seeder instance by passing the group name
as the first parameter:

```
<?php

$seeder = \Config\Database::seeder('group_name');
$seeder->call('TestSeeder');
```

When using `call()` to run child seeders, the database connection is automatically passed to them.
This means child seeders will use the same connection as the parent seeder, unless they explicitly
specify their own `$DBGroup` property.

If a seeder needs to always use a specific database group regardless of the parent seeder’s connection,
you can set the `$DBGroup` property in the seeder class:

```
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    protected $DBGroup = 'group_name';

    public function run()
    {
        // ...
    }
}
```

The connection priority is:

1. If `$DBGroup` is set in the seeder class, that connection group is always used
2. Otherwise, if a connection was passed (from parent seeder via `call()` or from `Database::seeder()`), it is used
3. Otherwise, the default connection group is used

### [Command Line Seeding](#id5)[](#command-line-seeding "Link to this heading")

You can also seed data from the command line, as part of the Migrations CLI tools, if you don’t want to create
a dedicated controller:

```
php spark db:seed TestSeeder
```

## [Creating Seeder Files](#id6)[](#creating-seeder-files "Link to this heading")

Using the command line, you can easily generate seed files:

```
php spark make:seeder user --suffix
```

The above command outputs **UserSeeder.php** file located at **app/Database/Seeds** directory.

You can supply the `root` namespace where the seed file will be stored by supplying the `--namespace` option:

For Unix:

```
php spark make:seeder MySeeder --namespace Acme\\Blog
```

For Windows:

```
php spark make:seeder MySeeder --namespace Acme\Blog
```

If `Acme\Blog` is mapped to **app/Blog** directory, then this command will generate **MySeeder.php** at **app/Blog/Database/Seeds** directory.

Supplying the `--force` option will overwrite existing files in destination.
