# phpDocumentor » \Fuel\Core\Database_Query_Builder

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_Query_Builder.html

---

PublicProtectedPrivateInherited

- Methods
- [Reset the current builder status.

  ```
  reset()
  ```](#reset "reset :: Reset the current builder status.")
- » Protected
- [Compiles an array of conditions into an SQL partial.

  ```
  _compile_conditions()
  ```](#_compile_conditions "_compile_conditions :: Compiles an array of conditions into an SQL partial.")
- [Compiles an array of JOIN statements into an SQL partial.

  ```
  _compile_join()
  ```](#_compile_join "_compile_join :: Compiles an array of JOIN statements into an SQL partial.")
- [Compiles an array of ORDER BY statements into an SQL partial.

  ```
  _compile_order_by()
  ```](#_compile_order_by "_compile_order_by :: Compiles an array of ORDER BY statements into an SQL partial.")
- [Compiles an array of set values into an SQL partial.

  ```
  _compile_set()
  ```](#_compile_set "_compile_set :: Compiles an array of set values into an SQL partial.")

### Methods

## Reset the current builder status.

```
reset() : \Fuel\Core\Database_Query_Builder
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Fuel\Core\Database_Query_Builder`

## Compiles an array of conditions into an SQL partial.

```
_compile_conditions(\Database_Connection $db, array $conditions) : string
```

Used for WHERE
and HAVING.

### Parameters

#### $db

`object`

Database instance

#### $conditions

`array`

condition statements

### Returns

`string`

## Compiles an array of JOIN statements into an SQL partial.

```
_compile_join(\Database_Connection $db, array $joins) : string
```

### Parameters

#### $db

`object`

Database instance

#### $joins

`array`

join statements

### Returns

`string`

## Compiles an array of ORDER BY statements into an SQL partial.

```
_compile_order_by(\Database_Connection $db, array $columns) : string
```

### Parameters

#### $db

`object`

Database instance

#### $columns

`array`

sorting columns

### Returns

`string`

## Compiles an array of set values into an SQL partial.

```
_compile_set(\Database_Connection $db, array $values) : string
```

Used for UPDATE.

### Parameters

#### $db

`object`

Database instance

#### $values

`array`

updated values

### Returns

`string`

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
