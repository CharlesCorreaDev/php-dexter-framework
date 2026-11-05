# phpDocumentor » \Fuel\Core\DBUtil

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.DBUtil.html

---

PublicProtectedPrivateInherited

- Methods
- [\_init()

  ```
  _init()
  ```](#_init "_init :: ")
- [Adds fields to a table a table.

  ```
  add_fields()
  ```](#add_fields "add_fields :: Adds fields to a table a table.")
- [Adds a single foreign key to a table

  ```
  add_foreign_key()
  ```](#add_foreign_key "add_foreign_key :: Adds a single foreign key to a table")
- [Analyzes a table.

  ```
  analyze_table()
  ```](#analyze_table "analyze_table :: Analyzes a table.")
- [Checks a table.

  ```
  check_table()
  ```](#check_table "check_table :: Checks a table.")
- [Creates a database.

  ```
  create_database()
  ```](#create_database "create_database :: Creates a database.")
- [Creates an index on that table.

  ```
  create_index()
  ```](#create_index "create_index :: Creates an index on that table.")
- [Creates a table.

  ```
  create_table()
  ```](#create_table "create_table :: Creates a table.")
- [Drops a database.

  ```
  drop_database()
  ```](#drop_database "drop_database :: Drops a database.")
- [Drops fields from a table a table.

  ```
  drop_fields()
  ```](#drop_fields "drop_fields :: Drops fields from a table a table.")
- [Drops a foreign key from a table

  ```
  drop_foreign_key()
  ```](#drop_foreign_key "drop_foreign_key :: Drops a foreign key from a table")
- [Drop an index from a table.

  ```
  drop_index()
  ```](#drop_index "drop_index :: Drop an index from a table.")
- [Drops a table.

  ```
  drop_table()
  ```](#drop_table "drop_table :: Drops a table.")
- [Checks if given field(s) in a given table exists.

  ```
  field_exists()
  ```](#field_exists "field_exists :: Checks if given field(s) in a given table exists.")
- [Modifies fields in a table.

  ```
  modify_fields()
  ```](#modify_fields "modify_fields :: Modifies fields in a table.")
- [Optimizes a table.

  ```
  optimize_table()
  ```](#optimize_table "optimize_table :: Optimizes a table.")
- [Returns string of foreign keys

  ```
  process_foreign_keys()
  ```](#process_foreign_keys "process_foreign_keys :: Returns string of foreign keys")
- [Renames a table.

  ```
  rename_table()
  ```](#rename_table "rename_table :: Renames a table.")
- [Repairs a table.

  ```
  repair_table()
  ```](#repair_table "repair_table :: Repairs a table.")
- [Sets the database connection to use for following DBUtil calls.

  ```
  set_connection()
  ```](#set_connection "set_connection :: Sets the database connection to use for following DBUtil calls.")
- [Checks if a given table exists.

  ```
  table_exists()
  ```](#table_exists "table_exists :: Checks if a given table exists.")
- [Truncates a table.

  ```
  truncate_table()
  ```](#truncate_table "truncate_table :: Truncates a table.")
- » Protected
- [alter\_fields()

  ```
  alter_fields()
  ```](#alter_fields "alter_fields :: ")
- [table\_maintenance()

  ```
  table_maintenance()
  ```](#table_maintenance "table_maintenance :: ")
- Properties
- » Protected
- [<p>the database connection (identifier)</p>

  ```
  $connection
  ```](#%24connection "$connection :: ")

DBUtil Class

|  |  |
| --- | --- |
| package | [Fuel](api__packages__Fuel.md) |
| category | Core |
| author | Dan Horrigan |

### Methods

## \_init()

```
_init() 
```

## Adds fields to a table a table.

```
add_fields(string $table, array $fields, string $db) : int
```

Will throw a Database\_Exception if it cannot.

### Parameters

#### $table

`string`

the table name

#### $fields

`array`

the new fields

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Fuel\Core\Fuel\Database_Exception` |  |

### Returns

`int`the number of affected

## Adds a single foreign key to a table

```
add_foreign_key(string $table, array $foreign_key, string $db) : int
```

### Parameters

#### $table

`string`

the table name

#### $foreign\_key

`array`

a single foreign key

#### $db

`string`

the database connection to use

### Returns

`int`number of affected rows

## Analyzes a table.

```
analyze_table(string $table, string $db) : bool
```

### Parameters

#### $table

`string`

the table name

#### $db

`string`

the database connection to use

### Returns

`bool`whether the table is OK

## Checks a table.

```
check_table(string $table, string $db) : bool
```

### Parameters

#### $table

`string`

the table name

#### $db

`string`

the database connection to use

### Returns

`bool`whether the table is OK

## Creates a database.

```
create_database(string $database, string $charset, boolean $if_not_exists, string $db) : int
```

Will throw a Database\_Exception if it cannot.

### Parameters

#### $database

`string`

the database name

#### $charset

`string`

the character set

#### $if\_not\_exists

`boolean`

whether to add an IF NOT EXISTS statement.

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Fuel\Core\Fuel\Database_Exception` |  |

### Returns

`int`the number of affected rows

## Creates an index on that table.

```
create_index(string $table, string $index_columns, string $index_name, string $index, string $db) : bool
```

|  |  |
| --- | --- |
| access | public |
| static |  |
| author | Thomas Edwards |

### Parameters

#### $table

`string`

#### $index\_columns

`string`

#### $index\_name

`string`

#### $index

`string`

(should be 'unique', 'fulltext', 'spatial' or 'nonclustered')

#### $db

`string`

the database connection to use

### Returns

`bool`

## Creates a table.

```
create_table(string $table, array $fields, array $primary_keys, boolean $if_not_exists, string | boolean $engine, string $charset, array $foreign_keys, string $db) : int
```

### Parameters

#### $table

`string`

the table name

#### $fields

`array`

the fields array

#### $primary\_keys

`array`

an array of primary keys

#### $if\_not\_exists

`boolean`

whether to add an IF NOT EXISTS statement.

#### $engine

`string``boolean`

storage engine overwrite

#### $charset

`string`

default charset overwrite

#### $foreign\_keys

`array`

an array of foreign keys

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Database_Exception` |  |

### Returns

`int`number of affected rows.

## Drops a database.

```
drop_database(string $database, string $db) : int
```

Will throw a Database\_Exception if it cannot.

### Parameters

#### $database

`string`

the database name

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Fuel\Core\Fuel\Database_Exception` |  |

### Returns

`int`the number of affected rows

## Drops fields from a table a table.

```
drop_fields(string $table, string | array $fields, string $db) : int
```

Will throw a Database\_Exception if it cannot.

### Parameters

#### $table

`string`

the table name

#### $fields

`string``array`

the fields

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Fuel\Core\Fuel\Database_Exception` |  |

### Returns

`int`the number of affected

## Drops a foreign key from a table

```
drop_foreign_key(string $table, string $fk_name, string $db) : int
```

### Parameters

#### $table

`string`

the table name

#### $fk\_name

`string`

the foreign key name

#### $db

`string`

the database connection to use

### Returns

`int`number of affected rows

## Drop an index from a table.

```
drop_index(string $table, string $index_name, string $db) : bool
```

|  |  |
| --- | --- |
| access | public |
| static |  |
| author | Thomas Edwards |

### Parameters

#### $table

`string`

#### $index\_name

`string`

#### $db

`string`

the database connection to use

### Returns

`bool`

## Drops a table.

```
drop_table(string $table, string $db) : int
```

Will throw a Database\_Exception if it cannot.

### Parameters

#### $table

`string`

the table name

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Fuel\Core\Fuel\Database_Exception` |  |

### Returns

`int`the number of affected rows

## Checks if given field(s) in a given table exists.

```
field_exists(string $table, string | array $columns, string $db) : bool
```

### Parameters

#### $table

`string`

Table name

#### $columns

`string``array`

columns to check

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Database_Exception` |  |

### Returns

`bool`

## Modifies fields in a table.

```
modify_fields(string $table, array $fields, string $db) : int
```

Will throw a Database\_Exception if it cannot.

### Parameters

#### $table

`string`

the table name

#### $fields

`array`

the modified fields

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Fuel\Core\Fuel\Database_Exception` |  |

### Returns

`int`the number of affected

## Optimizes a table.

```
optimize_table(string $table, string $db) : bool
```

### Parameters

#### $table

`string`

the table name

#### $db

`string`

the database connection to use

### Returns

`bool`whether the table has been optimized

## Returns string of foreign keys

```
process_foreign_keys(array $foreign_keys, string $db) : string
```

### Parameters

#### $foreign\_keys

`array`

Array of foreign key rules

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Database_Exception` |  |

### Returns

`string`the formatted foreign key string

## Renames a table.

```
rename_table(string $table, string $new_table_name, string $db) : int
```

Will throw a Database\_Exception if it cannot.

### Parameters

#### $table

`string`

the old table name

#### $new\_table\_name

`string`

the new table name

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Database_Exception` |  |

### Returns

`int`the number of affected

## Repairs a table.

```
repair_table(string $table, string $db) : bool
```

### Parameters

#### $table

`string`

the table name

#### $db

`string`

the database connection to use

### Returns

`bool`whether the table has been repaired

## Sets the database connection to use for following DBUtil calls.

```
set_connection(string $connection) 
```

### Parameters

#### $connection

`string`

connection name, null for default

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

## Checks if a given table exists.

```
table_exists(string $table, string $db) : bool
```

### Parameters

#### $table

`string`

Table name

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Database_Exception` |  |

### Returns

`bool`

## Truncates a table.

```
truncate_table(string $table, string $db) : int
```

### Parameters

#### $table

`string`

the table name

#### $db

`string`

the database connection to use

### Exceptions

|  |  |
| --- | --- |
| `\Fuel\Core\Fuel\Database_Exception` |  |

### Returns

`int`the number of affected rows

## alter\_fields()

```
alter_fields($type, $table, $fields, $db) 
```

### Parameters

#### $type

#### $table

#### $fields

#### $db

## table\_maintenance()

```
table_maintenance($operation, $table, $db) 
```

### Parameters

#### $operation

#### $table

#### $db

### Properties

## <p>the database connection (identifier)</p>

```
$connection : string
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
