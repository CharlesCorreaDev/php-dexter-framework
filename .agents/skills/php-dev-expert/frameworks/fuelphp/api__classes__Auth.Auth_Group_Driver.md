# phpDocumentor » \Auth\Auth_Group_Driver

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Auth.Auth_Group_Driver.html

---

PublicProtectedPrivateInherited

- Methods
- [forge()

  ```
  forge()
  ```](#forge "forge :: ")
- [Fetch the display name of the given group

  ```
  get_name()
  ```](#get_name "get_name :: Fetch the display name of the given group")
- [Verify Acl access

  ```
  has_access()
  ```](#has_access "has_access :: Verify Acl access")
- [Check membership of given users

  ```
  member()
  ```](#member "member :: Check membership of given users")
- Properties
- » Protected
- [$\_instance

  ```
  $_instance
  ```](#%24_instance "$_instance :: ")
- [<p>contains references if multiple were loaded</p>

  ```
  $_instances
  ```](#%24_instances "$_instances :: ")

### Methods

## forge()

```
forge(array $config) 
```

### Parameters

#### $config

## Fetch the display name of the given group

```
get_name(mixed $group) : string
```

### Parameters

#### $group

`mixed`

group condition to check

### Returns

`string`

## Verify Acl access

```
has_access(mixed $condition, string $driver, array $group) : bool
```

### Parameters

#### $condition

`mixed`

condition to validate

#### $driver

`string`

acl driver id or null to check all

#### $group

`array`

user identifier to check in form array(driver\_id, user\_id)

### Returns

`bool`

## Check membership of given users

```
member(mixed $group, array $user) : bool
```

### Parameters

#### $group

`mixed`

condition to check for access

#### $user

`array`

user identifier in the form of array(driver\_id, user\_id), or null for logged in

### Returns

`bool`

### Properties

## $\_instance

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
