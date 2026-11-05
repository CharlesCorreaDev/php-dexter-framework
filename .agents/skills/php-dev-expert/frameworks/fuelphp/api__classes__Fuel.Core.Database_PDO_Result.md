# phpDocumentor » \Fuel\Core\Database_PDO_Result

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_PDO_Result.html

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
- [Get a cached database result from the current result iterator.

  ```
  cached()
  ```](#cached "cached :: Get a cached database result from the current result iterator.")
- [Implements [Iterator::next], returns the next row.

  ```
  next()
  ```](#next "next :: Implements [Iterator::next], returns the next row.")

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

## Get a cached database result from the current result iterator.

```
cached() : \Fuel\Core\Database_PDO_Cached
```

$cachable = serialize($result->cached());

### Returns

`\Fuel\Core\Database_PDO_Cached`

## Implements [Iterator::next], returns the next row.

```
next() : mixed
```

### Returns

`mixed`

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
