# phpDocumentor » \Fuel\Core\Database_PDO_Connection

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_PDO_Connection.html

---

PublicProtectedPrivateInherited

- Methods
- [Returns a database cache object

  ```
  cache()
  ```](#cache "cache :: Returns a database cache object")
- [Connects to the database

  ```
  connect()
  ```](#connect "connect :: Connects to the database")
- [Resolve a datatype

  ```
  datatype()
  ```](#datatype "datatype :: Resolve a datatype")
- [disconnect()

  ```
  disconnect()
  ```](#disconnect "disconnect :: ")
- [Get the current PDO Driver name

  ```
  driver_name()
  ```](#driver_name "driver_name :: Get the current PDO Driver name")
- [Retrieve error info

  ```
  error_info()
  ```](#error_info "error_info :: Retrieve error info")
- [Escape a value

  ```
  escape()
  ```](#escape "escape :: Escape a value")
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
- [Query the database

  ```
  query()
  ```](#query "query :: Query the database")
- [Set the charset

  ```
  set_charset()
  ```](#set_charset "set_charset :: Set the charset")
- » Protected
- [\_\_construct()

  ```
  __construct()
  ```](#__construct "__construct :: ")
- [Create a new PDO instance

  ```
  _connect()
  ```](#_connect "_connect :: Create a new PDO instance")
- [Commit a transaction

  ```
  driver_commit()
  ```](#driver_commit "driver_commit :: Commit a transaction")
- [Rollback a transaction

  ```
  driver_rollback()
  ```](#driver_rollback "driver_rollback :: Rollback a transaction")
- [Start a transaction

  ```
  driver_start_transaction()
  ```](#driver_start_transaction "driver_start_transaction :: Start a transaction")
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
- » Protected
- [<p>raw server connection</p>

  ```
  $_connection
  ```](#%24_connection "$_connection :: ")
- [<p>PDO uses no quoting by default for identifiers</p>

  ```
  $_identifier
  ```](#%24_identifier "$_identifier :: ")

### Methods

## Returns a database cache object

```
cache(array $result, string $sql, mixed $as_object) : \Fuel\Core\Database_Cached
```

### Parameters

#### $result

`array`

#### $sql

`string`

#### $as\_object

`mixed`

### Returns

`\Fuel\Core\Database_Cached`

## Connects to the database

```
connect() 
```

### Exceptions

|  |  |
| --- | --- |
| `\Database_Exception` |  |

## Resolve a datatype

```
datatype(integer $type) : array
```

### Parameters

#### $type

`integer`

### Returns

`array`

## disconnect()

```
disconnect() : bool
```

### Returns

`bool`

## Get the current PDO Driver name

```
driver_name() : string
```

### Returns

`string`

## Retrieve error info

```
error_info() : array
```

### Returns

`array`

## Escape a value

```
escape(mixed $value) : string
```

### Parameters

#### $value

`mixed`

### Returns

`string`

## List table columns

```
list_columns(string $table, string $like) : array
```

### Parameters

#### $table

`string`

#### $like

`string`

### Returns

`array`

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
list_tables(string $like) 
```

### Parameters

#### $like

`string`

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

## Query the database

```
query(integer $type, string $sql, mixed $as_object) : mixed
```

### Parameters

#### $type

`integer`

#### $sql

`string`

#### $as\_object

`mixed`

### Exceptions

|  |  |
| --- | --- |
| `\Database_Exception` |  |

### Returns

`mixed`

## Set the charset

```
set_charset(string $charset) 
```

### Parameters

#### $charset

`string`

## \_\_construct()

```
__construct(string $name, array $config) 
```

### Parameters

#### $name

`string`

#### $config

`array`

## Create a new PDO instance

```
_connect() : \Fuel\Core\PDO
```

### Returns

`\Fuel\Core\PDO`

## Commit a transaction

```
driver_commit() : bool
```

### Returns

`bool`

## Rollback a transaction

```
driver_rollback() : bool
```

### Returns

`bool`

## Start a transaction

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

## <p>raw server connection</p>

```
$_connection : \PDO
```

## <p>PDO uses no quoting by default for identifiers</p>

```
$_identifier : string
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
