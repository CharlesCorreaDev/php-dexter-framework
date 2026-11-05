# phpDocumentor » \Fuel\Core\Database_Query_Builder_Delete

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_Query_Builder_Delete.html

---

PublicProtectedPrivateInherited

- Methods
- [Set the table for a delete.

  ```
  __construct()
  ```](#__construct "__construct :: Set the table for a delete.")
- [Compile the SQL query and return it.

  ```
  compile()
  ```](#compile "compile :: Compile the SQL query and return it.")
- [Reset the query parameters

  ```
  reset()
  ```](#reset "reset :: Reset the query parameters")
- [Sets the table to delete from.

  ```
  table()
  ```](#table "table :: Sets the table to delete from.")
- Properties
- » Protected
- [$\_table

  ```
  $_table
  ```](#%24_table "$_table :: ")

### Methods

## Set the table for a delete.

```
__construct(mixed $table) 
```

### Parameters

#### $table

`mixed`

table name or array($table, $alias) or object

## Compile the SQL query and return it.

```
compile(mixed $db) : string
```

### Parameters

#### $db

`mixed`

Database\_Connection instance or instance name

### Returns

`string`

## Reset the query parameters

```
reset() : \Fuel\Core\Database_Query_Builder_Delete
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Fuel\Core\Database_Query_Builder_Delete`

## Sets the table to delete from.

```
table(mixed $table) : \Fuel\Core\Database_Query_Builder_Delete
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $table

`mixed`

table name or array($table, $alias) or object

### Returns

`\Fuel\Core\Database_Query_Builder_Delete`

### Properties

## $\_table

```
$_table 
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
