# Database Access · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Database-Access

---

OWA provides access to the database through `OWA\Core\Db` — a database access layer that implements platform-specific connection handling and SQL query construction. Using it ensures your queries execute properly whatever database platform is in use.

> The old class name `owa_db` still resolves, through the compatibility aliases kept for the 1.x series, and is removed in 2.0. New code should use the namespaced name.

## Adding a Database Driver

OWA can be extended to support additional database platforms without patching core. This is done through a pluggable driver seam:

1. Create a class named `owa_db_<type>` that extends `OWA\Core\Db`, where `<type>` is the identifier you will use for the `db_type` configuration setting (e.g. `owa_db_postgresql` for `db_type` = `postgresql`). This seam matches on the unnamespaced `owa_db_<type>` name, so a third-party driver keeps that form.
2. Place the class in a file at `plugins/db/owa_db_<type>.php` inside your OWA installation directory.
3. Set the `db_type` configuration setting to `<type>`.

```
<?php
// plugins/db/owa_db_postgresql.php
class owa_db_postgresql extends \OWA\Core\Db {
    // implement the platform-specific connection + SQL construction methods
}
```

When OWA initializes its storage engine, `\OWA\Core\CoreAPI::setupStorageEngine()` looks for `owa_db_<type>` and, if it is not already loaded, `require`s it from `plugins/db/`. The driver is loaded by file path, so it does not need to be registered with Composer's autoloader.

**Notes for driver authors:**

- The `plugins/` directory is **not** shipped with OWA. Create it yourself in your installation. Because the directory and your driver file are not tracked by OWA's git repository, they are **not** removed when you upgrade OWA with `git pull`. (A `git clone`, tarball re-deploy, or `git clean` will not preserve them — back up custom drivers before those.)
- OWA's bundled drivers (such as MySQL) live in the `OWA\Core\Db` namespace and are autoloaded; the `plugins/db/` path is the extension point reserved for third-party drivers.

## Database Access Object

All access to the database is done via OWA's data access object (DAO). You can fetch the DAO via coreAPI by calling the `dbSingleton` method.

```
$db = \OWA\Core\CoreAPI::dbSingleton();
```

## Constructing SQL Queries

`OWA\Core\Db` provides a facility to construct platform-independent SQL queries that will execute properly across all database platforms that OWA supports. `owa_db` implements many methods that should be used to construct the various parts of a SQL query.

### SELECT

To construct a select query, begin by specifying the table to select from:

```
$db->selectFrom('name_of_table');
```

Then specify the columns that you wish to select using the `selectColumn` method. For example:

```
$db->selectColumn('col');
$db->selectColumn('col2');
$db->selectColumn('count (col3)');
$db->selectColumn('sum (col4) as column_4');
```

#### WHERE

Then construct your `WHERE` clause by adding constraints using the `where` method. The `where` method takes a column name, a value, and an alternative operator (the default is `=`):

```
$db->where('column_name', 'value');
$db->where('column_name', 'value', '!=');
```

You can also set multiple constraints at once by passing `multiWhere` an array of constraints. For example:

```
$constraints = array();
$constraints['my_constraint'] = array('col2', 'value');
$constraints['my_constraint'] = array('col3', 'value', '!=');
$db->multiWhere($constraints);
```

#### GROUP BY

GROUP BY clauses can be added using the `groupBy` method:

```
$db->groupBy('column_name');
```

#### ORDER BY

ORDER BY clauses can be added using the `orderBy` method:

```
$db->orderBy('column_name');
```

#### ORDER

ORDER clauses can be added using the `order` method. Two constants implement the ascending (`OWA_SQL_ASCENDING`) and descending (`OWA_SQL_DESCENDING`) values.

```
$db->order(OWA_SQL_DESCENDING);
```

#### LIMIT

LIMIT clauses can be added using the `limit` method. The `limit` method takes a numeric value that represents the number of rows you want to limit the query to returning.

```
$db->limit(10);
```

#### OFFSET

OFFSET clauses can be added using the `offset` method. The `offset` method takes a numeric value that represents the offset to limit the query to returning.

```
$db->offset(10);
```

#### Executing the Query

Two execution methods are provided for SELECT queries.

The `getAllRows` method should be used when the query is known to return multiple rows of data:

```
$db->getAllRows();
```

The `getOneRow` method should be used when the query is known to return a single row:

```
$db->getOneRow();
```

### INSERT

To construct an INSERT query, first specify the table into which data will be inserted by using the `insertInto` method:

```
$db->insertInto('table_name');
```

#### Specifying Values

Next, specify the name of the column and the value that you wish to insert using the `set` method:

```
$db->set('name', 'value');
```

#### Executing the Query

Once the query is constructed, use the `executeQuery` method to execute it:

```
$ret = $db->executeQuery();

if ($ret == true) {
     $this->debug('Query executed successfully');
} else {
     $this->debug('Query did not execute successfully');
}
```

### UPDATE

To construct an UPDATE query, first specify the table in which data will be updated by using the `updateTable` method:

```
$db->updateTable('table_name');
```

#### Specifying the Values to Update

Next, specify the name of the column and the value that you wish to update using the `set` method:

```
$db->set('name', 'value');
```

#### Executing the Query

Once the query is constructed, use the `executeQuery` method to execute it:

```
$ret = $db->executeQuery();

if ($ret == true) {
     $this->debug('Query executed successfully');
} else {
     $this->debug('Query did not execute successfully');
}
```

### Table Creation

### Table Modification
