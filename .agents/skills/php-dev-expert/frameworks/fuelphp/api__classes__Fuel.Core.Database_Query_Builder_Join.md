# phpDocumentor » \Fuel\Core\Database_Query_Builder_Join

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_Query_Builder_Join.html

---

PublicProtectedPrivateInherited

- Methods
- [Creates a new JOIN statement for a table.

  ```
  __construct()
  ```](#__construct "__construct :: Creates a new JOIN statement for a table.")
- [Adds a new AND condition for joining.

  ```
  and_on()
  ```](#and_on "and_on :: Adds a new AND condition for joining.")
- [Compile the SQL partial for a JOIN statement and return it.

  ```
  compile()
  ```](#compile "compile :: Compile the SQL partial for a JOIN statement and return it.")
- [Adds a new AND condition for joining.

  ```
  on()
  ```](#on "on :: Adds a new AND condition for joining.")
- [Adds a closing bracket.

  ```
  on_close()
  ```](#on_close "on_close :: Adds a closing bracket.")
- [Adds a opening bracket.

  ```
  on_open()
  ```](#on_open "on_open :: Adds a opening bracket.")
- [Adds a new OR condition for joining.

  ```
  or_on()
  ```](#or_on "or_on :: Adds a new OR condition for joining.")
- [Resets the join values.

  ```
  reset()
  ```](#reset "reset :: Resets the join values.")
- Properties
- » Protected
- [<p>join table alias</p>

  ```
  $_alias
  ```](#%24_alias "$_alias :: ")
- [<p>ON clauses</p>

  ```
  $_on
  ```](#%24_on "$_on :: ")
- [<p>join table</p>

  ```
  $_table
  ```](#%24_table "$_table :: ")
- [<p>join type</p>

  ```
  $_type
  ```](#%24_type "$_type :: ")

### Methods

## Creates a new JOIN statement for a table.

```
__construct(mixed $table, string $type) 
```

Optionally, the type of JOIN
can be specified as the second parameter.

### Parameters

#### $table

`mixed`

column name or array($column, $alias) or object

#### $type

`string`

type of JOIN: INNER, RIGHT, LEFT, etc

## Adds a new AND condition for joining.

```
and_on(mixed $c1, string $op, mixed $c2) : \Fuel\Core\Database_Query_Builder_Join
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $c1

`mixed`

column name or array($column, $alias) or object

#### $op

`string`

logic operator

#### $c2

`mixed`

column name or array($column, $alias) or object

### Returns

`\Fuel\Core\Database_Query_Builder_Join`

## Compile the SQL partial for a JOIN statement and return it.

```
compile(mixed $db) : string
```

### Parameters

#### $db

`mixed`

Database\_Connection instance or instance name

### Returns

`string`

## Adds a new AND condition for joining.

```
on(mixed $c1, string $op, mixed $c2) : \Fuel\Core\Database_Query_Builder_Join
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $c1

`mixed`

column name or array($column, $alias) or object

#### $op

`string`

logic operator

#### $c2

`mixed`

column name or array($column, $alias) or object

### Returns

`\Fuel\Core\Database_Query_Builder_Join`

## Adds a closing bracket.

```
on_close() : \Fuel\Core\Database_Query_Builder_Join
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Fuel\Core\Database_Query_Builder_Join`

## Adds a opening bracket.

```
on_open() : \Fuel\Core\Database_Query_Builder_Join
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Fuel\Core\Database_Query_Builder_Join`

## Adds a new OR condition for joining.

```
or_on(mixed $c1, string $op, mixed $c2) : \Fuel\Core\Database_Query_Builder_Join
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $c1

`mixed`

column name or array($column, $alias) or object

#### $op

`string`

logic operator

#### $c2

`mixed`

column name or array($column, $alias) or object

### Returns

`\Fuel\Core\Database_Query_Builder_Join`

## Resets the join values.

```
reset() : \Fuel\Core\Database_Query_Builder_Join
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Fuel\Core\Database_Query_Builder_Join`

### Properties

## <p>join table alias</p>

```
$_alias : string
```

## <p>ON clauses</p>

```
$_on : array
```

## <p>join table</p>

```
$_table : string
```

## <p>join type</p>

```
$_type : string
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
