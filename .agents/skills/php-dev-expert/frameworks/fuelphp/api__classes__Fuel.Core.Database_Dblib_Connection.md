# phpDocumentor » \Fuel\Core\Database_Dblib_Connection

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_Dblib_Connection.html

---

PublicProtectedPrivateInherited

- Methods
- [List table columns

  ```
  list_columns()
  ```](#list_columns "list_columns :: List table columns")
- [List tables

  ```
  list_tables()
  ```](#list_tables "list_tables :: List tables")
- [Set the charset

  ```
  set_charset()
  ```](#set_charset "set_charset :: Set the charset")
- » Protected
- [Stores the database configuration locally and name the instance.

  ```
  __construct()
  ```](#__construct "__construct :: Stores the database configuration locally and name the instance.")

### Methods

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

## Set the charset

```
set_charset(string $charset) 
```

### Parameters

#### $charset

`string`

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

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
