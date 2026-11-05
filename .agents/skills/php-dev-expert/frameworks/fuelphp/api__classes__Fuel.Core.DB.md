# phpDocumentor » \Fuel\Core\DB

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.DB.html

---

PublicProtectedPrivateInherited

- Methods
- [Commits all pending transactional queries

  ```
  commit_transaction()
  ```](#commit_transaction "commit_transaction :: Commits all pending transactional queries")
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
- [error\_info()

  ```
  error_info()
  ```](#error_info "error_info :: ")
- [Escapes a string to be ready for use in a sql query

  ```
  escape()
  ```](#escape "escape :: Escapes a string to be ready for use in a sql query")
- [Create a new [Database\_Expression] which is not escaped.

  ```
  expr()
  ```](#expr "expr :: Create a new [Database_Expression] which is not escaped.")
- [Create a new [Database\_Expression] containing a quoted identifier.

  ```
  identifier()
  ```](#identifier "identifier :: Create a new [Database_Expression] containing a quoted identifier.")
- [Checks whether a connection is in transaction.

  ```
  in_transaction()
  ```](#in_transaction "in_transaction :: Checks whether a connection is in transaction.")
- [Create a new [Database\_Query\_Builder\_Insert].

  ```
  insert()
  ```](#insert "insert :: Create a new [Database_Query_Builder_Insert].")
- [instance()

  ```
  instance()
  ```](#instance "instance :: ")
- [last\_query()

  ```
  last_query()
  ```](#last_query "last_query :: ")
- [Lists all of the columns in a table.

  ```
  list_columns()
  ```](#list_columns "list_columns :: Lists all of the columns in a table.")
- [Lists all of the indexes in a table.

  ```
  list_indexes()
  ```](#list_indexes "list_indexes :: Lists all of the indexes in a table.")
- [If a table name is given it will return the table name with the configured
  prefix.

  ```
  list_tables()
  ```](#list_tables "list_tables :: If a table name is given it will return the table name with the configured
  prefix.")
- [Create a new [Database\_Query] of the given type.

  ```
  query()
  ```](#query "query :: Create a new [Database_Query] of the given type.")
- [Quote a value for an SQL query.

  ```
  quote()
  ```](#quote "quote :: Quote a value for an SQL query.")
- [Quotes an identifier so it is ready to use in a query.

  ```
  quote_identifier()
  ```](#quote_identifier "quote_identifier :: Quotes an identifier so it is ready to use in a query.")
- [Quote a database table name and adds the table prefix if needed.

  ```
  quote_table()
  ```](#quote_table "quote_table :: Quote a database table name and adds the table prefix if needed.")
- [Rollsback pending transactional queries
  Rollback to the current level uses SAVEPOINT,
  it does not work if current RDBMS does not support them.

  ```
  rollback_transaction()
  ```](#rollback_transaction "rollback_transaction :: Rollsback pending transactional queries
  Rollback to the current level uses SAVEPOINT,
  it does not work if current RDBMS does not support them.")
- [Create a new [Database\_Query\_Builder\_Select].

  ```
  select()
  ```](#select "select :: Create a new [Database_Query_Builder_Select].")
- [Create a new [Database\_Query\_Builder\_Select] from an array of columns.

  ```
  select_array()
  ```](#select_array "select_array :: Create a new [Database_Query_Builder_Select] from an array of columns.")
- [Set the connection character set.

  ```
  set_charset()
  ```](#set_charset "set_charset :: Set the connection character set.")
- [Begins a transaction on instance

  ```
  start_transaction()
  ```](#start_transaction "start_transaction :: Begins a transaction on instance")
- [If a table name is given it will return the table name with the configured
  prefix.

  ```
  table_prefix()
  ```](#table_prefix "table_prefix :: If a table name is given it will return the table name with the configured
  prefix.")
- [Create a new [Database\_Query\_Builder\_Update].

  ```
  update()
  ```](#update "update :: Create a new [Database_Query_Builder_Update].")
- Properties
- [$query\_count

  ```
  $query_count
  ```](#%24query_count "$query_count :: ")
- Constants
- [DELETE

  ```
  DELETE
  ```](#DELETE "DELETE :: ")
- [INSERT

  ```
  INSERT
  ```](#INSERT "INSERT :: ")
- [SELECT

  ```
  SELECT
  ```](#SELECT "SELECT :: ")
- [UPDATE

  ```
  UPDATE
  ```](#UPDATE "UPDATE :: ")

### Methods

## Commits all pending transactional queries

```
commit_transaction(string $db) : bool
```

DB::commit\_transaction();

### Parameters

#### $db

`string`

db connection

### Returns

`bool`

## Count the number of records in the last query, without LIMIT or OFFSET applied.

```
count_last_query(string $db) : integer
```

// Get the total number of records that match the last query
$count = $db->count\_last\_query();

### Parameters

#### $db

`string`

db connection

### Returns

`integer`

## Count the number of records in a table.

```
count_records(mixed $table, string $db) : integer
```

// Get the total number of records in the "users" table
$count = DB::count\_records('users');

### Parameters

#### $table

`mixed`

table name string or array(query, alias)

#### $db

`string`

db connection

### Returns

`integer`

## Returns a normalized array describing the SQL data type

```
datatype(string $type, string $db) : array
```

DB::datatype('char');

### Parameters

#### $type

`string`

SQL data type

#### $db

`string`

db connection

### Returns

`array`

## Create a new [Database\_Query\_Builder\_Delete].

```
delete(string $table) : \Fuel\Core\Database_Query_Builder_Delete
```

// DELETE FROM users
$query = DB::delete('users');

### Parameters

#### $table

`string`

table to delete from

### Returns

`\Fuel\Core\Database_Query_Builder_Delete`

## error\_info()

```
error_info($db) 
```

### Parameters

#### $db

## Escapes a string to be ready for use in a sql query

```
escape(string $string, string $db) : string
```

### Parameters

#### $string

`string`

the string to escape

#### $db

`string`

the database connection to use

### Returns

`string`the escaped string

## Create a new [Database\_Expression] which is not escaped.

```
expr(string $string) : \Fuel\Core\Database_Expression
```

An expression
is the only way to use SQL functions within query builders.

```
$expression = DB::expr('COUNT(users.id)');
```

### Parameters

#### $string

`string`

expression

### Returns

`\Fuel\Core\Database_Expression`

## Create a new [Database\_Expression] containing a quoted identifier.

```
identifier(string $string, string $db) : \Fuel\Core\Database_Expression
```

An expression
is the only way to use SQL functions within query builders.

```
$expression = DB::identifier('users.id');   // returns `users`.`id` for MySQL
```

### Parameters

#### $string

`string`

the string to quote

#### $db

`string`

the database connection to use

### Returns

`\Fuel\Core\Database_Expression`

## Checks whether a connection is in transaction.

```
in_transaction(string $db) : bool
```

DB::in\_transaction();

### Parameters

#### $db

`string`

db connection

### Returns

`bool`

## Create a new [Database\_Query\_Builder\_Insert].

```
insert(string $table, array $columns) : \Fuel\Core\Database_Query_Builder_Insert
```

// INSERT INTO users (id, username)
$query = DB::insert('users', array('id', 'username'));

### Parameters

#### $table

`string`

table to insert into

#### $columns

`array`

list of column names or array($column, $alias) or object

### Returns

`\Fuel\Core\Database_Query_Builder_Insert`

## instance()

```
instance($db) 
```

### Parameters

#### $db

## last\_query()

```
last_query($db) 
```

### Parameters

#### $db

## Lists all of the columns in a table.

```
list_columns(string $table, string $like, string $db) : array
```

Optionally, a LIKE string can be
used to search for specific fields.

```
// Get all columns from the "users" table
$columns = DB::list_columns('users');

// Get all name-related columns
$columns = DB::list_columns('users', '%name%');
```

### Parameters

#### $table

`string`

table to get columns from

#### $like

`string`

column to search for

#### $db

`string`

the database connection to use

### Returns

`array`

## Lists all of the indexes in a table.

```
list_indexes(string $table, string $like, string $db) : array
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

#### $db

`string`

the database connection to use

### Returns

`array`

## If a table name is given it will return the table name with the configured prefix.

```
list_tables($like, string $db) : string
```

If not, then just the prefix is returned

### Parameters

#### $like

#### $db

`string`

the database connection to use

### Returns

`string`the prefixed table name or the prefix

## Create a new [Database\_Query] of the given type.

```
query(string $sql, integer $type) : \Fuel\Core\Database_Query
```

// Create a new SELECT query
$query = DB::query('SELECT \* FROM users');

```
// Create a new DELETE query
$query = DB::query('DELETE FROM users WHERE id = 5');
```

Specifying the type changes the returned result. When using
`DB::SELECT`, a [Database\_Query\_Result] will be returned.
`DB::INSERT` queries will return the insert id and number of rows.
For all other queries, the number of affected rows is returned.

### Parameters

#### $sql

`string`

SQL statement

#### $type

`integer`

type: DB::SELECT, DB::UPDATE, etc

### Returns

`\Fuel\Core\Database_Query`

## Quote a value for an SQL query.

```
quote(string $string, string $db) : string
```

### Parameters

#### $string

`string`

the string to quote

#### $db

`string`

the database connection to use

### Returns

`string`the quoted value

## Quotes an identifier so it is ready to use in a query.

```
quote_identifier(string $string, string $db) : string
```

### Parameters

#### $string

`string`

the string to quote

#### $db

`string`

the database connection to use

### Returns

`string`the quoted identifier

## Quote a database table name and adds the table prefix if needed.

```
quote_table(string $string, string $db) : string
```

### Parameters

#### $string

`string`

the string to quote

#### $db

`string`

the database connection to use

### Returns

`string`the quoted identifier

## Rollsback pending transactional queries Rollback to the current level uses SAVEPOINT, it does not work if current RDBMS does not support them.

```
rollback_transaction(string $db, $rollback_all) : bool
```

In this case system rollsback all queries and closes the transaction

```
DB::rollback_transaction();
```

### Parameters

#### $db

`string`

connection

#### $rollback\_all

### Returns

`bool`

## Create a new [Database\_Query\_Builder\_Select].

```
select(mixed $args) : \Fuel\Core\Database_Query_Builder_Select
```

Each argument will be
treated as a column. To generate a `foo AS bar` alias, use an array.

```
// SELECT id, username
$query = DB::select('id', 'username');

// SELECT id AS user_id
$query = DB::select(array('id', 'user_id'));
```

### Parameters

#### $args

`mixed`

column name or array($column, $alias) or object

### Returns

`\Fuel\Core\Database_Query_Builder_Select`

## Create a new [Database\_Query\_Builder\_Select] from an array of columns.

```
select_array(array $columns) : \Fuel\Core\Database_Query_Builder_Select
```

// SELECT id, username
$query = DB::select\_array(array('id', 'username'));

### Parameters

#### $columns

`array`

columns to select

### Returns

`\Fuel\Core\Database_Query_Builder_Select`

## Set the connection character set.

```
set_charset(string $charset, string $db) : void
```

This is called automatically by [static::connect].

```
DB::set_charset('utf8');
```

### Parameters

#### $charset

`string`

character set name

#### $db

`string`

db connection

### Exceptions

|  |  |
| --- | --- |
| `\Fuel\Core\Database_Exception` |  |

## Begins a transaction on instance

```
start_transaction(string $db) : bool
```

DB::start\_transaction();

### Parameters

#### $db

`string`

db connection

### Returns

`bool`

## If a table name is given it will return the table name with the configured prefix.

```
table_prefix(string $table, string $db) : string
```

If not, then just the prefix is returned

### Parameters

#### $table

`string`

the table name to prefix

#### $db

`string`

the database connection to use

### Returns

`string`the prefixed table name or the prefix

## Create a new [Database\_Query\_Builder\_Update].

```
update(string $table) : \Fuel\Core\Database_Query_Builder_Update
```

// UPDATE users
$query = DB::update('users');

### Parameters

#### $table

`string`

table to update

### Returns

`\Fuel\Core\Database_Query_Builder_Update`

### Properties

## $query\_count

```
$query_count 
```

### Constants

## DELETE

```
DELETE 
```

## INSERT

```
INSERT 
```

## SELECT

```
SELECT 
```

## UPDATE

```
UPDATE 
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
