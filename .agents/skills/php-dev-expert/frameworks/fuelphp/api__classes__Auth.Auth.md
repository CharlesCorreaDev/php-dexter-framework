# phpDocumentor » \Auth\Auth

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Auth.Auth.html

---

PublicProtectedPrivateInherited

- Methods
- [Magic method used to retrieve driver instances and check them for validity

  ```
  __callStatic()
  ```](#__callStatic "__callStatic :: Magic method used to retrieve driver instances and check them for validity")
- [Check driver

  ```
  _driver_check()
  ```](#_driver_check "_driver_check :: Check driver")
- [\_init()

  ```
  _init()
  ```](#_init "_init :: ")
- [Register verified Login driver

  ```
  _register_verified()
  ```](#_register_verified "_register_verified :: Register verified Login driver")
- [Unregister verified Login driver

  ```
  _unregister_verified()
  ```](#_unregister_verified "_unregister_verified :: Unregister verified Login driver")
- [Check login drivers for validated login

  ```
  check()
  ```](#check "check :: Check login drivers for validated login")
- [Load a login driver to the array of loaded drivers

  ```
  forge()
  ```](#forge "forge :: Load a login driver to the array of loaded drivers")
- [Return a specific driver, or the default instance (is created if necessary)

  ```
  instance()
  ```](#instance "instance :: Return a specific driver, or the default instance (is created if necessary)")
- [Login user

  ```
  login()
  ```](#login "login :: Login user")
- [Logs out all current logged in drivers

  ```
  logout()
  ```](#logout "logout :: Logs out all current logged in drivers")
- [Register a new driver type

  ```
  register_driver_type()
  ```](#register_driver_type "register_driver_type :: Register a new driver type")
- [Remove individual driver, or all drivers of $type

  ```
  unload()
  ```](#unload "unload :: Remove individual driver, or all drivers of $type")
- [Unregister a driver type

  ```
  unregister_driver_type()
  ```](#unregister_driver_type "unregister_driver_type :: Unregister a driver type")
- [Get verified driver or all verified drivers
  returns false when specific driver has not validated
  when all were requested and none validated an empty array is returned

  ```
  verified()
  ```](#verified "verified :: Get verified driver or all verified drivers
  returns false when specific driver has not validated
  when all were requested and none validated an empty array is returned")
- » Protected
- [Retrieve a loaded driver instance
  (loading must be done by other driver class)

  ```
  _driver_instance()
  ```](#_driver_instance "_driver_instance :: Retrieve a loaded driver instance
  (loading must be done by other driver class)")
- » Private
- [Prevent instantiation

  ```
  __construct()
  ```](#__construct "__construct :: Prevent instantiation")
- Properties
- » Protected
- [<p>subdriver registry, takes driver name and method for checking it</p>

  ```
  $_drivers
  ```](#%24_drivers "$_drivers :: ")
- [<p>default instance</p>

  ```
  $_instance
  ```](#%24_instance "$_instance :: ")
- [<p>contains references if multiple were loaded</p>

  ```
  $_instances
  ```](#%24_instances "$_instances :: ")
- [<p>Login drivers that verified a current login</p>

  ```
  $_verified
  ```](#%24_verified "$_verified :: ")
- [<p>Whether to verify multiple</p>

  ```
  $_verify_multiple
  ```](#%24_verify_multiple "$_verify_multiple :: ")

Auth

|  |  |
| --- | --- |
| package | [Fuel](api__packages__Fuel.Auth.md) |
| subpackage | Auth |

### Methods

## Magic method used to retrieve driver instances and check them for validity

```
__callStatic($method, $args) : mixed
```

### Parameters

#### $method

string

#### $args

array

### Exceptions

|  |  |
| --- | --- |
| `\Auth\BadMethodCallException` |  |

### Returns

`mixed`

## Check driver

```
_driver_check(string $type, mixed $condition, string $driver, Array $entity) : bool
```

### Parameters

#### $type

`string`

driver type

#### $condition

`mixed`

condition for which the driver is checked

#### $driver

`string`

driver id or null to check all

#### $entity

`Array`

identifier to check, should default to current user or relation therof and be in the form of array(driver\_id, user\_id)

### Returns

`bool`

## \_init()

```
_init() 
```

## Register verified Login driver

```
_register_verified(\Auth\Auth_Login_Driver $driver) 
```

### Parameters

#### $driver

Auth\_Login\_Driver

## Unregister verified Login driver

```
_unregister_verified(\Auth\Auth_Login_Driver $driver) 
```

### Parameters

#### $driver

Auth\_Login\_Driver

## Check login drivers for validated login

```
check(string | Array $specific) : bool
```

### Parameters

#### $specific

`string``Array`

specific driver or drivers, in this case it will always terminate after first success

### Returns

`bool`

## Load a login driver to the array of loaded drivers

```
forge(Array $custom) 
```

### Parameters

#### $custom

`Array`

settings for the new driver

### Exceptions

|  |  |
| --- | --- |
| `\Auth\AuthException` | on driver load failure |

## Return a specific driver, or the default instance (is created if necessary)

```
instance(string $instance) : \Auth\Auth_Login_Driver
```

### Parameters

#### $instance

`string`

driver id

### Returns

`\Auth\Auth_Login_Driver`

## Login user

```
login($username_or_email, $password) : bool
```

### Parameters

#### $username\_or\_email

string

#### $password

string

### Returns

`bool`

## Logs out all current logged in drivers

```
logout() 
```

## Register a new driver type

```
register_driver_type(string $type, string $check_method) : bool
```

### Parameters

#### $type

`string`

name of the driver type, may not conflict with class method name

#### $check\_method

`string`

name of the method to use for checking this type of driver, also cannot conflict with method

### Returns

`bool`

## Remove individual driver, or all drivers of $type

```
unload(string $driver_id) 
```

### Parameters

#### $driver\_id

`string`

driver id or null for default driver

### Exceptions

|  |  |
| --- | --- |
| `\Auth\AuthException` | when $driver\_id isn't valid or true |

## Unregister a driver type

```
unregister_driver_type(string $type) : bool
```

### Parameters

#### $type

`string`

name of the driver type

### Returns

`bool`

## Get verified driver or all verified drivers returns false when specific driver has not validated when all were requested and none validated an empty array is returned

```
verified(null | string $driver) : Array | \Auth\Auth_Login_Driver | false
```

### Parameters

#### $driver

`null``string`

driver id or null for all verified driver in an array

### Returns

`Array``\Auth\Auth_Login_Driver``false`

## Retrieve a loaded driver instance (loading must be done by other driver class)

```
_driver_instance(string $type, string | true $instance) : \Auth\Auth_Driver | array
```

### Parameters

#### $type

`string`

driver type

#### $instance

`string``true`

driver id or true for an array of all loaded drivers

### Returns

`\Auth\Auth_Driver``array`

## Prevent instantiation

```
__construct() 
```

### Properties

## <p>subdriver registry, takes driver name and method for checking it</p>

```
$_drivers : Array
```

## <p>default instance</p>

```
$_instance : \Auth\Auth_Login_Driver
```

## <p>contains references if multiple were loaded</p>

```
$_instances : Array
```

## <p>Login drivers that verified a current login</p>

```
$_verified : Array
```

## <p>Whether to verify multiple</p>

```
$_verify_multiple : bool
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
