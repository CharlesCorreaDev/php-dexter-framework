# phpDocumentor » \Fuel\Core\Database_MySQLi_Connection

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_MySQLi_Connection.html

---

PublicProtectedPrivateInherited

- Methods
- [Returns a database cache object

  ```
  cache()
  ```](#cache "cache :: Returns a database cache object")
- [connect()

  ```
  connect()
  ```](#connect "connect :: ")
- [Resolve a datatype

  ```
  datatype()
  ```](#datatype "datatype :: Resolve a datatype")
- [Disconnect from the database

  ```
  disconnect()
  ```](#disconnect "disconnect :: Disconnect from the database")
- [error\_info()

  ```
  error_info()
  ```](#error_info "error_info :: ")
- [Escape query for sql

  ```
  escape()
  ```](#escape "escape :: Escape query for sql")
- [List table columns

  ```
  list_columns()
  ```](#list_columns "list_columns :: List table columns")
- [List indexes

  ```
  list_indexes()
  ```](#list_indexes "list_indexes :: List indexes")
- [List tables

  ```
  list_tables()
  ```](#list_tables "list_tables :: List tables")
- [Execute query

  ```
  query()
  ```](#query "query :: Execute query")
- [set\_charset()

  ```
  set_charset()
  ```](#set_charset "set_charset :: ")
- » Protected
- [\_\_construct()

  ```
  __construct()
  ```](#__construct "__construct :: ")
- [Select the database

  ```
  _select_db()
  ```](#_select_db "_select_db :: Select the database")
- [driver\_commit()

  ```
  driver_commit()
  ```](#driver_commit "driver_commit :: ")
- [driver\_rollback()

  ```
  driver_rollback()
  ```](#driver_rollback "driver_rollback :: ")
- [driver\_start\_transaction()

  ```
  driver_start_transaction()
  ```](#driver_start_transaction "driver_start_transaction :: ")
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
- [<p>Which kind of DB is used</p>

  ```
  $_db_type
  ```](#%24_db_type "$_db_type :: ")
- » Protected
- [<p>Raw server connection</p>

  ```
  $_connection
  ```](#%24_connection "$_connection :: ")
- [<p>Identifier for this connection within the PHP driver</p>

  ```
  $_connection_id
  ```](#%24_connection_id "$_connection_id :: ")
- [<p>Database in use by each connection</p>

  ```
  $_current_databases
  ```](#%24_current_databases "$_current_databases :: ")
- [<p>MySQL uses a backtick for identifiers</p>

  ```
  $_identifier
  ```](#%24_identifier "$_identifier :: ")
- [<p>Use SET NAMES to set the character set</p>

  ```
  $_set_names
  ```](#%24_set_names "$_set_names :: ")

### Methods

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

## connect()

```
connect() 
```

## Resolve a datatype

```
datatype(integer $type) : array
```

### Parameters

#### $type

`integer`

### Returns

`array`

## Disconnect from the database

```
disconnect() 
```

### Exceptions

|  |  |
| --- | --- |
| `\Exception` | when the mysql database is not disconnected properly |

## error\_info()

```
error_info() 
```

## Escape query for sql

```
escape(mixed $value) : string
```

### Parameters

#### $value

`mixed`

value of string castable

### Returns

`string`escaped sql string

## List table columns

```
list_columns(string $table, string $like) : array
```

### Parameters

#### $table

`string`

table name

#### $like

`string`

column name pattern

### Returns

`array`array of column structure

## List indexes

```
list_indexes($table, string $like) 
```

### Parameters

#### $table

#### $like

`string`

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

## List tables

```
list_tables(string $like) : array
```

### Parameters

#### $like

`string`

pattern of table name

### Returns

`array`array of table names

## Execute query

```
query(integer $type, string $sql, mixed $as_object) : mixed
```

### Parameters

#### $type

`integer`

query type (\DB::SELECT, \DB::INSERT, etc.)

#### $sql

`string`

SQL string

#### $as\_object

`mixed`

used when query type is SELECT

### Exceptions

|  |  |
| --- | --- |
| `\Database_Exception` |  |

### Returns

`mixed`when SELECT then return an iterator of results,  
when INSERT then return a list of insert id and rows created,  
in other case return the number of rows affected

## set\_charset()

```
set_charset($charset) 
```

### Parameters

#### $charset

## \_\_construct()

```
__construct(string $name, array $config) 
```

### Parameters

#### $name

`string`

#### $config

`array`

## Select the database

```
_select_db(string $database) : void
```

### Parameters

#### $database

`string`

Database

## driver\_commit()

```
driver_commit() 
```

## driver\_rollback()

```
driver_rollback() 
```

## driver\_start\_transaction()

```
driver_start_transaction() 
```

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

### Properties

## <p>Which kind of DB is used</p>

```
$_db_type : string
```

## <p>Raw server connection</p>

```
$_connection : \MySQLi
```

## <p>Identifier for this connection within the PHP driver</p>

```
$_connection_id : string
```

## <p>Database in use by each connection</p>

```
$_current_databases : array
```

## <p>MySQL uses a backtick for identifiers</p>

```
$_identifier : string
```

## <p>Use SET NAMES to set the character set</p>

```
$_set_names : bool
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
