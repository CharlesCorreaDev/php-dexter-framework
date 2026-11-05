# phpDocumentor » \Fuel\Core\Database_Query

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_Query.html

---

PublicProtectedPrivateInherited

- Methods
- [Creates a new SQL query of the specified type.

  ```
  __construct()
  ```](#__construct "__construct :: Creates a new SQL query of the specified type.")
- [Return the SQL query string.

  ```
  __toString()
  ```](#__toString "__toString :: Return the SQL query string.")
- [Returns results as associative arrays

  ```
  as_assoc()
  ```](#as_assoc "as_assoc :: Returns results as associative arrays")
- [Returns results as objects

  ```
  as_object()
  ```](#as_object "as_object :: Returns results as objects")
- [Bind a variable to a parameter in the query.

  ```
  bind()
  ```](#bind "bind :: Bind a variable to a parameter in the query.")
- [Enables the query to be cached for a specified amount of time.

  ```
  cached()
  ```](#cached "cached :: Enables the query to be cached for a specified amount of time.")
- [Compile the SQL query and return it.

  ```
  compile()
  ```](#compile "compile :: Compile the SQL query and return it.")
- [Execute the current query on the given database.

  ```
  execute()
  ```](#execute "execute :: Execute the current query on the given database.")
- [Set the value of a parameter in the query.

  ```
  param()
  ```](#param "param :: Set the value of a parameter in the query.")
- [Add multiple parameters to the query.

  ```
  parameters()
  ```](#parameters "parameters :: Add multiple parameters to the query.")
- [Set a DB connection to use when compiling the SQL

  ```
  set_connection()
  ```](#set_connection "set_connection :: Set a DB connection to use when compiling the SQL")
- [Get the type of the query.

  ```
  type()
  ```](#type "type :: Get the type of the query.")
- Properties
- » Protected
- [<p>Return results as associative arrays or objects</p>

  ```
  $_as_object
  ```](#%24_as_object "$_as_object :: ")
- [<p>Cache all results</p>

  ```
  $_cache_all
  ```](#%24_cache_all "$_cache_all :: ")
- [<p>Cache key</p>

  ```
  $_cache_key
  ```](#%24_cache_key "$_cache_key :: ")
- [<p>Connection to use when compiling the SQL</p>

  ```
  $_connection
  ```](#%24_connection "$_connection :: ")
- [<p>Cache lifetime</p>

  ```
  $_lifetime
  ```](#%24_lifetime "$_lifetime :: ")
- [<p>Quoted query parameters</p>

  ```
  $_parameters
  ```](#%24_parameters "$_parameters :: ")
- [<p>SQL statement</p>

  ```
  $_sql
  ```](#%24_sql "$_sql :: ")
- [<p>Query type</p>

  ```
  $_type
  ```](#%24_type "$_type :: ")

### Methods

## Creates a new SQL query of the specified type.

```
__construct(string $sql, integer $type) 
```

### Parameters

#### $sql

`string`

query string

#### $type

`integer`

query type: DB::SELECT, DB::INSERT, etc

## Return the SQL query string.

```
__toString() : string
```

### Returns

`string`

## Returns results as associative arrays

```
as_assoc() : \Fuel\Core\Database_Query
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Fuel\Core\Database_Query`

## Returns results as objects

```
as_object(mixed $class) : \Fuel\Core\Database_Query
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $class

`mixed`

classname or true for stdClass

### Returns

`\Fuel\Core\Database_Query`

## Bind a variable to a parameter in the query.

```
bind(string $param, mixed $var) : \Fuel\Core\Database_Query
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $param

`string`

parameter key to replace

#### $var

`mixed`

variable to use

### Returns

`\Fuel\Core\Database_Query`

## Enables the query to be cached for a specified amount of time.

```
cached(integer $lifetime, string $cache_key, boolean $cache_all) : \Fuel\Core\Database_Query
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $lifetime

`integer`

number of seconds to cache or null for default

#### $cache\_key

`string`

name of the cache key to be used or null for default

#### $cache\_all

`boolean`

if true, cache all results, even empty ones

### Returns

`\Fuel\Core\Database_Query`

## Compile the SQL query and return it.

```
compile(mixed $db) : string
```

Replaces any parameters with their
given values.

### Parameters

#### $db

`mixed`

Database instance or instance name

### Returns

`string`

## Execute the current query on the given database.

```
execute(mixed $db) : object: mixed: integer
```

### Parameters

#### $db

`mixed`

Database instance or name of instance

### Returns

`object`Database\_Result for SELECT queries

`mixed`the insert id for INSERT queries

`integer`number of affected rows for all other queries

## Set the value of a parameter in the query.

```
param(string $param, mixed $value) : \Fuel\Core\Database_Query
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $param

`string`

parameter key to replace

#### $value

`mixed`

value to use

### Returns

`\Fuel\Core\Database_Query`

## Add multiple parameters to the query.

```
parameters(array $params) : \Fuel\Core\Database_Query
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $params

`array`

list of parameters

### Returns

`\Fuel\Core\Database_Query`

## Set a DB connection to use when compiling the SQL

```
set_connection(mixed $db) : \Fuel\Core\Database_Query
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Parameters

#### $db

`mixed`

### Returns

`\Fuel\Core\Database_Query`

## Get the type of the query.

```
type() : integer
```

### Returns

`integer`

### Properties

## <p>Return results as associative arrays or objects</p>

```
$_as_object : bool
```

## <p>Cache all results</p>

```
$_cache_all : boolean
```

## <p>Cache key</p>

```
$_cache_key : string
```

## <p>Connection to use when compiling the SQL</p>

```
$_connection : \Fuel\Core\Database_Connection
```

## <p>Cache lifetime</p>

```
$_lifetime : int
```

## <p>Quoted query parameters</p>

```
$_parameters : array
```

## <p>SQL statement</p>

```
$_sql : string
```

## <p>Query type</p>

```
$_type : int
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
