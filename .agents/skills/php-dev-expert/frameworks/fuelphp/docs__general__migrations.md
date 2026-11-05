# Migrations - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/migrations.html

---

## Migrations

Migrations are a convenient way for you to alter your database in a structured and organized manner. You could edit fragments of SQL by hand but you would then be responsible for telling other developers that they need to go and run them. You’d also have to keep track of which changes need to be run against the production machines next time you deploy.

The database table `migration` tracks which migrations have already been run so all you have to do is update your application files and call `Migrate::current()` to work out which migrations should be run. The current version is found in core/config/migration.php so like any other config file you should copy this to app/config to make changes.

### [Configuration](#/config)

| Key | Type | Default | Description |
| --- | --- | --- | --- |
| folder | string | ``` 'migrations/' ``` | The folder in which migration files will be found. |
| connection | string | ``` null ``` | Configuration name of a database connection to use to write migrations. |
| table | string | ``` 'migration' ``` | The database table used to store migration data. |
| flush\_cache | boolean | ``` false ``` | If true, all cached data will be erased after all migrations have run, via a call to **Cache::delete\_all()**. |

**Note:** 
After migrations have been run, the configuration file will be rewritten with version information included. These version numbers are used internally and should not be changed.

### Creating a Migration

Create a file in the app/migrations folder. The prefix should be an incremental count starting at 001, do not skip numbers and do not have two numbers that match. The first would be something like `app/migrations/001_example.php`.

```
namespace Fuel\Migrations;

class Example
{

    function up()
    {
        \DBUtil::create_table('posts', array(
			'id' => array('type' => 'int', 'constraint' => 5),
			'title' => array('type' => 'varchar', 'constraint' => 100),
			'body' => array('type' => 'text'),
		), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('posts');
    }
}
```

### Run a Migration

A migration can be run in two ways:

1. [Migrate class](docs__classes__migrate.md)
2. [Oil Refine Command](docs__packages__oil__refine.md)

The oil command there uses the Refine command to call the migrate [task](docs__general__tasks.md).

```
$ php oil refine migrate
$ php oil refine migrate:current
$ php oil refine migrate:up
$ php oil refine migrate:down
$ php oil refine migrate --version=10
```

Migrations are supported for modules and packages too. You can specify on the oil commandline if you want to
migrate all, or only specific modules and/or packages. If you do, you can use '--default' to indicate you want
to include app migrations.

```
$ php oil refine migrate -all
$ php oil refine migrate --modules=module1,module2 --packages=package1
$ php oil refine migrate:up --packages=package1
$ php oil refine migrate:down --modules=module1,module2 --default
$ php oil refine migrate --version=10
```

**Note:** 
The migrate:current task is to match your schema to the version listed in `fuel/[app|core]/config/migrate.php` as if you have just got
a copy of the application, the very latest migration not be the one considered stable. Using oil for migrations will modify this migration
config number so the current command will not be relevant in many situations.

### Skipping migrations

You can abort the migration process by having your `up()` or `down()` method return
`false`. This can be useful if your migration has external dependencies, for example the existence of a table created in a different
migration.

This will only abort the migration stack currently being processed, either the application migrations, or the migrations in a single module or package.
All migrations in other stacks will be processed as normal.

### Prepping a migration

Optionally, a migration class can contain `before()` and/or `after()` methods, that can be used for prepping, validation
or cleanup functionality. If you have generic functionality, you could create a migration base class for your migrations containing these
methods, so you don't have to duplicate code in every migration.

Like with the `up()` method, the `before()` and `after()` methods can return `false` to signal a failure.
This can be useful if your migration has generic external dependencies, or perhaps additional validation steps. When it does, the migration will
be skipped, and ultimately aborted if a retry fails too. In the case of the `after()` method returning `false`, the migration
will be reverted by calling the reverse migration method (i.e. calling down() when on an up() migration, and vice-versa).

The `after()` method will only be called if the migration itself was succesful. If the migration method returns `false`, it
will not be called.
