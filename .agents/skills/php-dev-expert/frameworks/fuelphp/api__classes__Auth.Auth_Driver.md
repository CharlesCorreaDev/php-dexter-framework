# phpDocumentor » \Auth\Auth_Driver

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Auth.Auth_Driver.html

---

PublicProtectedPrivateInherited

- Methods
- [forge()

  ```
  forge()
  ```](#forge "forge :: ")
- [Retrieve config value

  ```
  get_config()
  ```](#get_config "get_config :: Retrieve config value")
- [Get driver instance ID

  ```
  get_id()
  ```](#get_id "get_id :: Get driver instance ID")
- [Whether this driver supports guest login

  ```
  guest_login()
  ```](#guest_login "guest_login :: Whether this driver supports guest login")
- [Return a specific driver, or the default instance

  ```
  instance()
  ```](#instance "instance :: Return a specific driver, or the default instance")
- [Create or change config value

  ```
  set_config()
  ```](#set_config "set_config :: Create or change config value")
- » Protected
- [\_\_construct()

  ```
  __construct()
  ```](#__construct "__construct :: ")
- Properties
- » Protected
- [<p>given configuration array</p>

  ```
  $config
  ```](#%24config "$config :: ")
- [<p>instance identifier</p>

  ```
  $id
  ```](#%24id "$id :: ")

### Methods

## forge()

```
forge(array $config) 
```

### Parameters

#### $config

## Retrieve config value

```
get_config($key, mixed $default) : mixed
```

### Parameters

#### $key

string

#### $default

`mixed`

return when key doesn't exist

### Returns

`mixed`

## Get driver instance ID

```
get_id() : string
```

### Returns

`string`

## Whether this driver supports guest login

```
guest_login() : bool
```

### Returns

`bool`

## Return a specific driver, or the default instance

```
instance(string $instance) : \Auth\Auth_Driver
```

### Parameters

#### $instance

`string`

driver id

### Returns

`\Auth\Auth_Driver`

## Create or change config value

```
set_config($key, $value) 
```

### Parameters

#### $key

string

#### $value

mixed

## \_\_construct()

```
__construct(array $config) 
```

### Parameters

#### $config

### Properties

## <p>given configuration array</p>

```
$config : array
```

## <p>instance identifier</p>

```
$id : string
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
