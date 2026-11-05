# phpDocumentor » \Fuel\Core\Database_PDO_Cached

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_PDO_Cached.html

---

PublicProtectedPrivateInherited

- Methods
- [\_\_construct()

  ```
  __construct()
  ```](#__construct "__construct :: ")
- [Result destruction cleans up all open result sets.

  ```
  __destruct()
  ```](#__destruct "__destruct :: Result destruction cleans up all open result sets.")
- [cached()

  ```
  cached()
  ```](#cached "cached :: ")
- [Implements [Iterator::current], returns the current row.

  ```
  current()
  ```](#current "current :: Implements [Iterator::current], returns the current row.")
- [Implements [Iterator::next], returns the next row.

  ```
  next()
  ```](#next "next :: Implements [Iterator::next], returns the next row.")
- [Implements [ArrayAccess::offsetExists], determines if row exists.

  ```
  offsetExists()
  ```](#offsetExists "offsetExists :: Implements [ArrayAccess::offsetExists], determines if row exists.")
- [Implements [ArrayAccess::offsetGet], gets a given row.

  ```
  offsetGet()
  ```](#offsetGet "offsetGet :: Implements [ArrayAccess::offsetGet], gets a given row.")
- [Implements [ArrayAccess::offsetSet], throws an error.

  ```
  offsetSet()
  ```](#offsetSet "offsetSet :: Implements [ArrayAccess::offsetSet], throws an error.")
- [Implements [ArrayAccess::offsetUnset], throws an error.

  ```
  offsetUnset()
  ```](#offsetUnset "offsetUnset :: Implements [ArrayAccess::offsetUnset], throws an error.")
- [seek()

  ```
  seek()
  ```](#seek "seek :: ")

### Methods

## \_\_construct()

```
__construct(array $result, string $sql, mixed $as_object) 
```

### Parameters

#### $result

`array`

#### $sql

`string`

#### $as\_object

`mixed`

## Result destruction cleans up all open result sets.

```
__destruct() : void
```

## cached()

```
cached() : \Fuel\Core\Database_PDO_Cached
```

|  |  |
| --- | --- |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Fuel\Core\Database_PDO_Cached`

## Implements [Iterator::current], returns the current row.

```
current() : mixed
```

### Returns

`mixed`

## Implements [Iterator::next], returns the next row.

```
next() : mixed
```

### Returns

`mixed`

## Implements [ArrayAccess::offsetExists], determines if row exists.

```
offsetExists(integer $offset) : boolean
```

if (isset($result[10]))
{
// Row 10 exists
}

### Parameters

#### $offset

`integer`

### Returns

`boolean`

## Implements [ArrayAccess::offsetGet], gets a given row.

```
offsetGet(integer $offset) : mixed
```

$row = $result[10];

### Parameters

#### $offset

`integer`

### Returns

`mixed`

## Implements [ArrayAccess::offsetSet], throws an error.

```
offsetSet(integer $offset, mixed $value) 
```

[!!] You cannot modify a database result.

### Parameters

#### $offset

`integer`

#### $value

`mixed`

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

## Implements [ArrayAccess::offsetUnset], throws an error.

```
offsetUnset(integer $offset) 
```

[!!] You cannot modify a database result.

### Parameters

#### $offset

`integer`

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

## seek()

```
seek(integer $offset) : bool
```

### Parameters

#### $offset

`integer`

### Returns

`bool`

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
