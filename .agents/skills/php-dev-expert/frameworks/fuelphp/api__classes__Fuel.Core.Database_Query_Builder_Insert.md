# phpDocumentor » \Fuel\Core\Database_Query_Builder_Insert

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_Query_Builder_Insert.html

---

PublicProtectedPrivateInherited

- Methods
- [Set the table and columns for an insert.

  ```
  __construct()
  ```](#__construct "__construct :: Set the table and columns for an insert.")
- [Set the columns that will be inserted.

  ```
  columns()
  ```](#columns "columns :: Set the columns that will be inserted.")
- [Compile the SQL query and return it.

  ```
  compile()
  ```](#compile "compile :: Compile the SQL query and return it.")
- [Reset the query parameters

  ```
  reset()
  ```](#reset "reset :: Reset the query parameters")
- [Use a sub-query to for the inserted values.

  ```
  select()
  ```](#select "select :: Use a sub-query to for the inserted values.")
- [This is a wrapper function for calling columns() and values().

  ```
  set()
  ```](#set "set :: This is a wrapper function for calling columns() and values().")
- [Sets the table to insert into.

  ```
  table()
  ```](#table "table :: Sets the table to insert into.")
- [Adds values.

  ```
  values()
  ```](#values "values :: Adds values.")
- Properties
- » Protected
- [<p>columns</p>

  ```
  $_columns
  ```](#%24_columns "$_columns :: ")
- [<p>table</p>

  ```
  $_table
  ```](#%24_table "$_table :: ")
- [<p>values</p>

  ```
  $_values
  ```](#%24_values "$_values :: ")

### Methods

## Set the table and columns for an insert.

```
__construct(mixed $table, array $columns) 
```

### Parameters

#### $table

`mixed`

table name or array($table, $alias) or object

#### $columns

`array`

column names

## Set the columns that will be inserted.

```
columns(array $columns) : \Fuel\Core\Database_Query_Builder_Insert
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $columns

`array`

column names

### Returns

`\Fuel\Core\Database_Query_Builder_Insert`

## Compile the SQL query and return it.

```
compile(mixed $db) : string
```

### Parameters

#### $db

`mixed`

Database instance or instance name

### Returns

`string`

## Reset the query parameters

```
reset() : \Fuel\Core\Database_Query_Builder_Insert
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Fuel\Core\Database_Query_Builder_Insert`

## Use a sub-query to for the inserted values.

```
select(\Fuel\Core\Database_Query $query) : \Fuel\Core\Database_Query_Builder_Insert
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $query

`\Fuel\Core\Database_Query`

Database\_Query of SELECT type

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

### Returns

`\Fuel\Core\Database_Query_Builder_Insert`

## This is a wrapper function for calling columns() and values().

```
set(array $pairs) : \Fuel\Core\Database_Query_Builder_Insert
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $pairs

`array`

column value pairs

### Returns

`\Fuel\Core\Database_Query_Builder_Insert`

## Sets the table to insert into.

```
table(mixed $table) : \Fuel\Core\Database_Query_Builder_Insert
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $table

`mixed`

table name or array($table, $alias) or object

### Returns

`\Fuel\Core\Database_Query_Builder_Insert`

## Adds values.

```
values(array $values) : \Fuel\Core\Database_Query_Builder_Insert
```

Multiple value sets can be added.

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $values

`array`

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

### Returns

`\Fuel\Core\Database_Query_Builder_Insert`

### Properties

## <p>columns</p>

```
$_columns : array
```

## <p>table</p>

```
$_table : string
```

## <p>values</p>

```
$_values : array
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
