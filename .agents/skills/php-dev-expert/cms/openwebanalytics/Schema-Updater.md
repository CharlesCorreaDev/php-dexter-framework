# Schema Updater · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Schema-Updater

---

## What is a Schema Updater?

A schema updater is a way for module developers to deploy updates to the data tables that their modules create. This is particularly important when you need to update tables due to a new version of the module being released.

## How Schema Updaters Work

A schema updater is specific to a particular module and lives under that module's directory, in a subdirectory called `Update/`.

When OWA is invoked, the framework checks the required schema version of each active module against the current schema version number for each module.

When a new version of a module is created that requires an update to the module's schema, the module developer must author a schema updater class to bring the schema up to date.

### The Update Class

An update is a class in a module's **`Update/`** directory, named
**`UpdateNNN.php`** and holding **`class UpdateNNN`**, where `NNN` is the schema
version that will be in place once it has been applied. It extends
`\OWA\Core\Update` and implements `up()` and `down()`.

The file name, the class name and the namespace must all agree — classes are
loaded by Composer's PSR-4 autoloader, so an update in the wrong place or under
the wrong name is silently never found.

OWA applies the updates above an installation's recorded schema version, in
sequence, per module. Raise your module's `required_schema_version` to `NNN` when
you add `UpdateNNN`, or it will never run.

```
<?php
namespace OWA\Module\Hello\Update;

class Update002 extends \OWA\Core\Update {

	function up() {

		// ...logic for update to version 2 of schema...

		// ensure that this method returns true if successful and false if not.
		return true;
	}

	function down() {

		// ...logic for reverting schema to version 1...
		// A real down(), not a stub -- see "Writing an update" below.

		// ensure that this method returns true if successful and false if not.
		return true;
	}
}
```

### Telling Your Module to Apply an Update(s)

Every time you author a schema update you must tell your module that it now requires a new schema version in order for the update to be applied. To do so, change the `required_schema_version` property in the constructor of your module's `Module.php` file.

```
$this->required_schema_version = 4; // all updates less than this number will be applied if they have not already.
```

OWA will check this number against the version of the currently installed schema and apply all of the necessary updates required to bring the schema up to date.

## Writing an update

Two rules that are easy to get wrong, both of which have broken a live upgrade.

### It needs a working `down()`, not just an `up()`

Every update declares how to undo itself. An update with a stub `down()` looks
fine until something needs to roll back, at which point the rollback silently
does nothing and leaves the schema half-migrated.

### `addColumn()` returns false for "already exists" too

This is the one that stopped a real upgrade dead.

`addColumn()` answers `false` both for *could not add* and for *is already
there*. An update that treats `false` as failure never writes its schema
version, so every request afterwards refuses with "OWA Updates required" — on a
database that is already correct.

That is not a rare re-run case. It is the **ordinary** case for an installation
jumping several versions at once: a table created by an earlier update is built
from the *current* entity definition, so it already carries every column that
later updates add. An install at schema 20 ran an update that created a table
complete with a column a later update then tried to add, and the upgrade stopped
mid-way on a live site.

So treat "already exists" as success. A guard test enforces this for the updates
that ship.

Note also that `addColumn()` has never worked for an **indexed** column. If the
column you are adding needs an index, add the index separately.
