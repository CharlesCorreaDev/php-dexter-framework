# phpDocumentor » \Fuel\Core\Database_Connection

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_Connection.html

---

PublicProtectedPrivateInherited

- Methods
- [Disconnect from the database when the object is destroyed.

  ```
  __destruct()
  ```](#__destruct "__destruct :: Disconnect from the database when the object is destroyed.")
- [Returns the database instance name.

  ```
  __toString()
  ```](#__toString "__toString :: Returns the database instance name.")
- [Returns a database cache object

  ```
  cache()
  ```](#cache "cache :: Returns a database cache object")
- [Per connection cache controller setter/getter

  ```
  caching()
  ```](#caching "caching :: Per connection cache controller setter/getter")
- [Commits nested transaction

  ```
  commit_transaction()
  ```](#commit_transaction "commit_transaction :: Commits nested transaction")
- [Connect to the database.

  ```
  connect()
  ```](#connect "connect :: Connect to the database.")
- [Returns the raw connection object for custom method access

  ```
  connection()
  ```](#connection "connection :: Returns the raw connection object for custom method access")
- [Count the number of records in the last query, without LIMIT or OFFSET applied.

  ```
  count_last_query()
  ```](#count_last_query "count_last_query :: Count the number of records in the last query, without LIMIT or OFFSET applied.")
- [Count the number of records in a table.

  ```
  count_records()
  ```](#count_records "count_records :: Count the number of records in a table.")
- [Returns a normalized array describing the SQL data type

  ```
  datatype()
  ```](#datatype "datatype :: Returns a normalized array describing the SQL data type")
- [Create a new [Database\_Query\_Builder\_Delete].

  ```
  delete()
  ```](#delete "delete :: Create a new [Database_Query_Builder_Delete].")
- [Disconnect from the database.

  ```
  disconnect()
  ```](#disconnect "disconnect :: Disconnect from the database.")
- [Sanitize a string by escaping characters that could cause an SQL
  injection attack.

  ```
  escape()
  ```](#escape "escape :: Sanitize a string by escaping characters that could cause an SQL
  injection attack.")
- [Returns whether or not we have a valid database connection object

  ```
  has_connection()
  ```](#has_connection "has_connection :: Returns whether or not we have a valid database connection object")
- [Whether or not the connection is in transaction mode

  ```
  in_transaction()
  ```](#in_transaction "in_transaction :: Whether or not the connection is in transaction mode")
- [Create a new [Database\_Query\_Builder\_Insert].

  ```
  insert()
  ```](#insert "insert :: Create a new [Database_Query_Builder_Insert].")
- [Get a singleton Database instance.

  ```
  instance()
  ```](#instance "instance :: Get a singleton Database instance.")
- [Lists all of the columns in a table.

  ```
  list_columns()
  ```](#list_columns "list_columns :: Lists all of the columns in a table.")
- [Lists all of the indexes in a table.

  ```
  list_indexes()
  ```](#list_indexes "list_indexes :: Lists all of the indexes in a table.")
- [List all of the tables in the database.

  ```
  list_tables()
  ```](#list_tables "list_tables :: List all of the tables in the database.")
- [Perform an SQL query of the given type.

  ```
  query()
  ```](#query "query :: Perform an SQL query of the given type.")
- [Quote a value for an SQL query.

  ```
  quote()
  ```](#quote "quote :: Quote a value for an SQL query.")
- [Quote a database identifier, such as a column name.

  ```
  quote_identifier()
  ```](#quote_identifier "quote_identifier :: Quote a database identifier, such as a column name.")
- [Quote a database table name and adds the table prefix if needed.

  ```
  quote_table()
  ```](#quote_table "quote_table :: Quote a database table name and adds the table prefix if needed.")
- [Rollsback nested pending transaction queries.

  ```
  rollback_transaction()
  ```](#rollback_transaction "rollback_transaction :: Rollsback nested pending transaction queries.")
- [Database schema operations

  ```
  schema()
  ```](#schema "schema :: Database schema operations")
- [Create a new [Database\_Query\_Builder\_Select].

  ```
  select()
  ```](#select "select :: Create a new [Database_Query_Builder_Select].")
- [Set the connection character set.

  ```
  set_charset()
  ```](#set_charset "set_charset :: Set the connection character set.")
- [Begins a nested transaction on instance

  ```
  start_transaction()
  ```](#start_transaction "start_transaction :: Begins a nested transaction on instance")
- [Return the table prefix defined in the current configuration.

  ```
  table_prefix()
  ```](#table_prefix "table_prefix :: Return the table prefix defined in the current configuration.")
- [Create a new [Database\_Query\_Builder\_Update].

  ```
  update()
  ```](#update "update :: Create a new [Database_Query_Builder_Update].")
- » Protected
- [Stores the database configuration locally and name the instance.

  ```
  __construct()
  ```](#__construct "__construct :: Stores the database configuration locally and name the instance.")
- [Extracts the text between parentheses, if any.

  ```
  _parse_type()
  ```](#_parse_type "_parse_type :: Extracts the text between parentheses, if any.")
- [Commits all pending transactional queries on the driver level

  ```
  driver_commit()
  ```](#driver_commit "driver_commit :: Commits all pending transactional queries on the driver level")
- [Rollback all pending transactional queries on the driver level

  ```
  driver_rollback()
  ```](#driver_rollback "driver_rollback :: Rollback all pending transactional queries on the driver level")
- [Begins a transaction on the driver level

  ```
  driver_start_transaction()
  ```](#driver_start_transaction "driver_start_transaction :: Begins a transaction on the driver level")
- [Release savepoint of the transaction

  ```
  release_savepoint()
  ```](#release_savepoint "release_savepoint :: Release savepoint of the transaction")
- [Rollback savepoint of the transaction

  ```
  rollback_savepoint()
  ```](#rollback_savepoint "rollback_savepoint :: Rollback savepoint of the transaction")
- [Sets savepoint of the transaction

  ```
  set_savepoint()
  ```](#set_savepoint "set_savepoint :: Sets savepoint of the transaction")
- Properties
- [<p>Database instances</p>

  ```
  $instances
  ```](#%24instances "$instances :: ")
- [<p>the last query executed</p>

  ```
  $last_query
  ```](#%24last_query "$last_query :: ")
- » Protected
- [<p>Configuration array</p>

  ```
  $_config
  ```](#%24_config "$_config :: ")
- [<p>Raw server connection</p>

  ```
  $_connection
  ```](#%24_connection "$_connection :: ")
- [<p>Character that is used to quote identifiers</p>

  ```
  $_identifier
  ```](#%24_identifier "$_identifier :: ")
- [<p>allows transactions</p>

  ```
  $_in_transaction
  ```](#%24_in_transaction "$_in_transaction :: ")
- [<p>Instance name</p>

  ```
  $_instance
  ```](#%24_instance "$_instance :: ")
- [<p>Cache of the name of the readonly connection</p>

  ```
  $_readonly
  ```](#%24_readonly "$_readonly :: ")
- [<p>Instance of the database schema class</p>

  ```
  $_schema
  ```](#%24_schema "$_schema :: ")
- [<p>Transaction nesting depth counter. Should be modified AFTER a driver has changed the level successfully</p>

  ```
  $_transaction_depth
  ```](#%24_transaction_depth "$_transaction_depth :: ")

### Methods

## Disconnect from the database when the object is destroyed.

```
__destruct() : void
```

// Destroy the database instance
unset(static::instances[(string) $db], $db);

[!!] Calling `unset($db)` is not enough to destroy the database, as it
will still be stored in `static::$instances`.

## Returns the database instance name.

```
__toString() : string
```

echo (string) $db;

### Returns

`string`

## Returns a database cache object

```
cache(array $result, string $sql, mixed $as_object) : \Fuel\Core\Database_Cached
```

$db->cache($result, $sql);

### Parameters

#### $result

`array`

#### $sql

`string`

#### $as\_object

`mixed`

### Returns

`\Fuel\Core\Database_Cached`

## Per connection cache controller setter/getter

```
caching(bool $bool) : mixed
```

### Parameters

#### $bool

`bool`

whether to enable it [optional]

### Returns

`mixed`cache boolean when getting, current instance when setting.

## Commits nested transaction

```
commit_transaction() : bool
```

$db->commit\_transaction();

### Returns

`bool`

## Connect to the database.

```
connect() : void
```

This is called automatically when the first
query is executed.

```
$db->connect();
```

### Exceptions

|  |  |
| --- | --- |
| `\Fuel\Core\Database_Exception` |  |

## Returns the raw connection object for custom method access

```
connection() : resource
```

$db->connection()->lastInsertId('id');

### Returns

`resource`

## Count the number of records in the last query, without LIMIT or OFFSET applied.

```
count_last_query() : integer
```

// Get the total number of records that match the last query
$count = $db->count\_last\_query();

### Returns

`integer`

## Count the number of records in a table.

```
count_records(mixed $table) : integer
```

// Get the total number of records in the "users" table
$count = $db->count\_records('users');

### Parameters

#### $table

`mixed`

table name string or array(query, alias)

### Returns

`integer`

## Returns a normalized array describing the SQL data type

```
datatype(string $type) : array
```

$db->datatype('char');

### Parameters

#### $type

`string`

SQL data type

### Returns

`array`

## Create a new [Database\_Query\_Builder\_Delete].

```
delete(string $table) : \Fuel\Core\Database_Query_Builder_Delete
```

// DELETE FROM users
$query = $db->delete('users');

### Parameters

#### $table

`string`

table to delete from

### Returns

`\Fuel\Core\Database_Query_Builder_Delete`

## Disconnect from the database.

```
disconnect() : boolean
```

This is called automatically by [static::\_\_destruct].

```
$db->disconnect();
```

### Returns

`boolean`

## Sanitize a string by escaping characters that could cause an SQL injection attack.

```
escape(string $value) : string
```

$value = $db->escape('any string');

### Parameters

#### $value

`string`

value to quote

### Returns

`string`

## Returns whether or not we have a valid database connection object

```
has_connection() : bool
```

$db->has\_connection()

### Returns

`bool`

## Whether or not the connection is in transaction mode

```
in_transaction() : bool
```

$db->in\_transaction();

### Returns

`bool`

## Create a new [Database\_Query\_Builder\_Insert].

```
insert(string $table, array $columns) : \Fuel\Core\Database_Query_Builder_Insert
```

// INSERT INTO users (id, username)
$query = $db->insert('users', array('id', 'username'));

### Parameters

#### $table

`string`

table to insert into

#### $columns

`array`

list of column names or array($column, $alias) or object

### Returns

`\Fuel\Core\Database_Query_Builder_Insert`

## Get a singleton Database instance.

```
instance(string $name, array $config, bool $writable) : \Fuel\Core\Database_Connection
```

If configuration is not specified,
it will be loaded from the database configuration file using the same
group as the name.

```
// Load the default database
$db = static::instance();

// Create a custom configured instance
$db = static::instance('custom', $config);
```

### Parameters

#### $name

`string`

instance name

#### $config

`array`

configuration parameters

#### $writable

`bool`

when replication is enabled, whether to return the master connection

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

### Returns

`\Fuel\Core\Database_Connection`

## Lists all of the columns in a table.

```
list_columns(string $table, string $like) : array
```

Optionally, a LIKE string can be
used to search for specific fields.

```
// Get all columns from the "users" table
$columns = $db->list_columns('users');

// Get all name-related columns
$columns = $db->list_columns('users', '%name%');
```

### Parameters

#### $table

`string`

table to get columns from

#### $like

`string`

column to search for

### Returns

`array`

## Lists all of the indexes in a table.

```
list_indexes(string $table, string $like) : array
```

Optionally, a LIKE string can be
used to search for specific indexes by name.

```
// Get all indexes from the "users" table
$indexes = $db->list_indexes('users');

// Get all name-related columns
$indexes = $db->list_indexes('users', '%name%');
```

### Parameters

#### $table

`string`

table to get indexes from

#### $like

`string`

index names to search for

### Returns

`array`

## List all of the tables in the database.

```
list_tables(string $like) : array
```

Optionally, a LIKE string can
be used to search for specific tables.

```
// Get all tables in the current database
$tables = $db->list_tables();

// Get all user-related tables
$tables = $db->list_tables('user%');
```

### Parameters

#### $like

`string`

table to search for

### Returns

`array`

## Perform an SQL query of the given type.

```
query(integer $type, string $sql, mixed $as_object) : object: array: integer
```

// Make a SELECT query and use objects for results
$db->query(static::SELECT, 'SELECT \* FROM groups', true);

```
// Make a SELECT query and use "Model_User" for the results
$db->query(static::SELECT, 'SELECT * FROM users LIMIT 1', 'Model_User');
```

### Parameters

#### $type

`integer`

static::SELECT, static::INSERT, etc

#### $sql

`string`

SQL query

#### $as\_object

`mixed`

result object class, true for stdClass, false for assoc array

### Returns

`object`Database\_Result for SELECT queries

`array`list (insert id, row count) for INSERT queries

`integer`number of affected rows for all other queries

## Quote a value for an SQL query.

```
quote(mixed $value) : string
```

$db->quote(null); // 'null'
$db->quote(10); // 10
$db->quote('fred'); // 'fred'

Objects passed to this function will be converted to strings.
[Database\_Expression] objects will use the value of the expression.
[Database\_Query] objects will be compiled and converted to a sub-query.
All other objects will be converted using the `__toString` method.

|  |  |
| --- | --- |
| uses | \Fuel\Core\static::escape |

### Parameters

#### $value

`mixed`

any value to quote

### Returns

`string`

## Quote a database identifier, such as a column name.

```
quote_identifier(mixed $value) : string
```

Adds the
table prefix to the identifier if a table name is present.

```
$column = $db->quote_identifier($column);
```

You can also use SQL methods within identifiers.

```
// The value of "column" will be quoted
$column = $db->quote_identifier('COUNT("column")');
```

Objects passed to this function will be converted to strings.
[Database\_Expression] objects will use the value of the expression.
[Database\_Query] objects will be compiled and converted to a sub-query.
All other objects will be converted using the `__toString` method.

|  |  |
| --- | --- |
| uses | \Fuel\Core\static::table\_prefix |

### Parameters

#### $value

`mixed`

any identifier

### Returns

`string`

## Quote a database table name and adds the table prefix if needed.

```
quote_table(mixed $value) : string
```

$table = $db->quote\_table($table);

|  |  |
| --- | --- |
| uses | \Fuel\Core\static::quote\_identifier |
| uses | \Fuel\Core\static::table\_prefix |

### Parameters

#### $value

`mixed`

table name or array(table, alias)

### Returns

`string`

## Rollsback nested pending transaction queries.

```
rollback_transaction($rollback_all) : bool
```

Rollback to the current level uses SAVEPOINT,
it does not work if current RDBMS does not support them.
In this case system rollbacks all queries and closes the transaction

```
$db->rollback_transaction();
```

### Parameters

#### $rollback\_all

### Returns

`bool`

## Database schema operations

```
schema(string $operation, array $params) : \Fuel\Core\Database_Query_Builder_Delete
```

// CREATE DATABASE database CHARACTER SET utf-8 DEFAULT utf-8
$query = $db->schema('create\_database', array('database', 'utf-8'));

### Parameters

#### $operation

`string`

table to delete from

#### $params

### Returns

`\Fuel\Core\Database_Query_Builder_Delete`

## Create a new [Database\_Query\_Builder\_Select].

```
select(array $args) : \Fuel\Core\Database_Query_Builder_Select
```

Each argument will be
treated as a column. To generate a `foo AS bar` alias, use an array.

```
// SELECT id, username
$query = $db->select('id', 'username');

// SELECT id AS user_id
$query = $db->select(array('id', 'user_id'));
```

### Parameters

#### $args

`mixed`

column name or array($column, $alias) or object

### Returns

`\Fuel\Core\Database_Query_Builder_Select`

## Set the connection character set.

```
set_charset(string $charset) : void
```

This is called automatically by [static::connect].

```
$db->set_charset('utf8');
```

### Parameters

#### $charset

`string`

character set name

### Exceptions

|  |  |
| --- | --- |
| `\Fuel\Core\Database_Exception` |  |

## Begins a nested transaction on instance

```
start_transaction() : bool
```

$db->start\_transaction();

### Returns

`bool`

## Return the table prefix defined in the current configuration.

```
table_prefix(string $table) : string
```

$prefix = $db->table\_prefix();

### Parameters

#### $table

`string`

### Returns

`string`

## Create a new [Database\_Query\_Builder\_Update].

```
update(string $table) : \Fuel\Core\Database_Query_Builder_Update
```

// UPDATE users
$query = $db->update('users');

### Parameters

#### $table

`string`

table to update

### Returns

`\Fuel\Core\Database_Query_Builder_Update`

## Stores the database configuration locally and name the instance.

```
__construct(string $name, array $config) 
```

[!!] This method cannot be accessed directly, you must use [static::instance].

### Parameters

#### $name

`string`

#### $config

`array`

## Extracts the text between parentheses, if any.

```
_parse_type(string $type) : array
```

// Returns: array('CHAR', '6')
list($type, $length) = $db->\_parse\_type('CHAR(6)');

### Parameters

#### $type

`string`

### Returns

`array`list containing the type and length, if any

## Commits all pending transactional queries on the driver level

```
driver_commit() : bool
```

### Returns

`bool`

## Rollback all pending transactional queries on the driver level

```
driver_rollback() : bool
```

### Returns

`bool`

## Begins a transaction on the driver level

```
driver_start_transaction() : bool
```

### Returns

`bool`

## Release savepoint of the transaction

```
release_savepoint(string $name) : boolean
```

### Parameters

#### $name

`string`

name of the savepoint

### Returns

`boolean`true - savepoint was set successfully;
false - failed to set savepoint;
null - RDBMS does not support savepoints

## Rollback savepoint of the transaction

```
rollback_savepoint(string $name) : boolean
```

### Parameters

#### $name

`string`

name of the savepoint

### Returns

`boolean`true - savepoint was set successfully;
false - failed to set savepoint;
null - RDBMS does not support savepoints

## Sets savepoint of the transaction

```
set_savepoint(string $name) : boolean
```

### Parameters

#### $name

`string`

name of the savepoint

### Returns

`boolean`true - savepoint was set successfully;
false - failed to set savepoint;
null - RDBMS does not support savepoints

### Properties

## <p>Database instances</p>

```
$instances : array
```

## <p>the last query executed</p>

```
$last_query : string
```

## <p>Configuration array</p>

```
$_config : array
```

## <p>Raw server connection</p>

```
$_connection : resource
```

## <p>Character that is used to quote identifiers</p>

```
$_identifier : string
```

## <p>allows transactions</p>

```
$_in_transaction : bool
```

## <p>Instance name</p>

```
$_instance : string
```

## <p>Cache of the name of the readonly connection</p>

```
$_readonly : string
```

## <p>Instance of the database schema class</p>

```
$_schema : \Fuel\Core\Database_Schema
```

## <p>Transaction nesting depth counter. Should be modified AFTER a driver has changed the level successfully</p>

```
$_transaction_depth : int
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
