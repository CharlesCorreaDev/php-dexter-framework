# phpDocumentor » \Auth\Auth_Acl_Driver

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Auth.Auth_Acl_Driver.html

---

PublicProtectedPrivateInherited

- Methods
- [Parses a conditions string into it's array equivalent

  ```
  _parse_conditions()
  ```](#_parse_conditions "_parse_conditions :: Parses a conditions string into it's array equivalent")
- [forge()

  ```
  forge()
  ```](#forge "forge :: ")
- [Check access rights

  ```
  has_access()
  ```](#has_access "has_access :: Check access rights")
- Properties
- » Protected
- [<p>default instance</p>

  ```
  $_instance
  ```](#%24_instance "$_instance :: ")
- [<p>contains references if multiple were loaded</p>

  ```
  $_instances
  ```](#%24_instances "$_instances :: ")

### Methods

## Parses a conditions string into it's array equivalent

```
_parse_conditions($rights) : array
```

|  |  |
| --- | --- |
| rights | mixed conditions array or string |

### Parameters

#### $rights

### Returns

`array`conditions array formatted as array(area, rights)

## forge()

```
forge(array $config) 
```

### Parameters

#### $config

## Check access rights

```
has_access(mixed $condition, array $entity) : bool
```

### Parameters

#### $condition

`mixed`

condition to check for access

#### $entity

`mixed`

user or group identifier in the form of array(driver\_id, id)

### Returns

`bool`

### Properties

## <p>default instance</p>

```
$_instance : \Auth\Auth_Driver
```

## <p>contains references if multiple were loaded</p>

```
$_instances : array
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
