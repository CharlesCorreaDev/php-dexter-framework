# phpDocumentor » \Auth\Auth_Login_Driver

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Auth.Auth_Login_Driver.html

---

PublicProtectedPrivateInherited

- Methods
- [Check for login
  (final method to (un)register verification, work is done by \_check())

  ```
  check()
  ```](#check "check :: Check for login
  (final method to (un)register verification, work is done by _check())")
- [Remove any remember-me cookie stored

  ```
  dont_remember_me()
  ```](#dont_remember_me "dont_remember_me :: Remove any remember-me cookie stored")
- [forge()

  ```
  forge()
  ```](#forge "forge :: ")
- [Get emailaddress of the current logged in user

  ```
  get_email()
  ```](#get_email "get_email :: Get emailaddress of the current logged in user")
- [Get User Groups of the current logged in user
  in the form: array(array(driver\_id, group\_id), array(driver\_id, group\_id), etc)

  ```
  get_groups()
  ```](#get_groups "get_groups :: Get User Groups of the current logged in user
  in the form: array(array(driver_id, group_id), array(driver_id, group_id), etc)")
- [Get screen name of the current logged in user

  ```
  get_screen_name()
  ```](#get_screen_name "get_screen_name :: Get screen name of the current logged in user")
- [Return user info in an array, always includes email & screen\_name
  Additional fields can be requested in the first param or set in config,
  all additional fields must have their own method "get\_" + fieldname

  ```
  get_user_array()
  ```](#get_user_array "get_user_array :: Return user info in an array, always includes email & screen_name
  Additional fields can be requested in the first param or set in config,
  all additional fields must have their own method \"get_\" + fieldname")
- [Get User Identifier of the current logged in user
  in the form: array(driver\_id, user\_id)

  ```
  get_user_id()
  ```](#get_user_id "get_user_id :: Get User Identifier of the current logged in user
  in the form: array(driver_id, user_id)")
- [Returns the list of defined groups

  ```
  groups()
  ```](#groups "groups :: Returns the list of defined groups")
- [Verify Acl access

  ```
  has_access()
  ```](#has_access "has_access :: Verify Acl access")
- [Default password hash method

  ```
  hash_password()
  ```](#hash_password "hash_password :: Default password hash method")
- [Login method

  ```
  login()
  ```](#login "login :: Login method")
- [Logout method

  ```
  logout()
  ```](#logout "logout :: Logout method")
- [Verify Group membership

  ```
  member()
  ```](#member "member :: Verify Group membership")
- [Set a remember-me cookie for the passed user id, or for the current
  logged-in user if no id was given

  ```
  remember_me()
  ```](#remember_me "remember_me :: Set a remember-me cookie for the passed user id, or for the current
  logged-in user if no id was given")
- [Returns the list of defined roles

  ```
  roles()
  ```](#roles "roles :: Returns the list of defined roles")
- [Perform the actual login check

  ```
  validate_user()
  ```](#validate_user "validate_user :: Perform the actual login check")
- » Protected
- [Perform the actual login check

  ```
  perform_check()
  ```](#perform_check "perform_check :: Perform the actual login check")
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
- [<p>config values</p>

  ```
  $config
  ```](#%24config "$config :: ")
- [<p>session object for the remember-me feature</p>

  ```
  $remember_me
  ```](#%24remember_me "$remember_me :: ")

### Methods

## Check for login (final method to (un)register verification, work is done by \_check())

```
check() : bool
```

### Returns

`bool`

## Remove any remember-me cookie stored

```
dont_remember_me() 
```

## forge()

```
forge(array $config) 
```

### Parameters

#### $config

## Get emailaddress of the current logged in user

```
get_email() : string
```

### Returns

`string`

## Get User Groups of the current logged in user in the form: array(array(driver\_id, group\_id), array(driver\_id, group\_id), etc)

```
get_groups() : array
```

### Returns

`array`

## Get screen name of the current logged in user

```
get_screen_name() : string
```

### Returns

`string`

## Return user info in an array, always includes email & screen\_name Additional fields can be requested in the first param or set in config, all additional fields must have their own method "get\_" + fieldname

```
get_user_array(array $additional_fields) : array
```

### Parameters

#### $additional\_fields

`array`

additional fields

### Returns

`array`

## Get User Identifier of the current logged in user in the form: array(driver\_id, user\_id)

```
get_user_id() : array
```

### Returns

`array`

## Returns the list of defined groups

```
groups($driver) : array
```

### Parameters

#### $driver

### Returns

`array`

## Verify Acl access

```
has_access(mixed $condition, string $driver, array $entity) : bool
```

### Parameters

#### $condition

`mixed`

condition to validate

#### $driver

`string`

acl driver id or null to check all

#### $entity

`array`

user identifier to check in form array(driver\_id, user\_id)

### Returns

`bool`

## Default password hash method

```
hash_password($password) : string
```

### Parameters

#### $password

string

### Returns

`string`

## Login method

```
login() : bool
```

### Returns

`bool`whether login succeeded

## Logout method

```
logout() 
```

## Verify Group membership

```
member(mixed $group, string $driver, array $user) : bool
```

### Parameters

#### $group

`mixed`

group identifier to check for membership

#### $driver

`string`

group driver id or null to check all

#### $user

`array`

user identifier to check in form array(driver\_id, user\_id)

### Returns

`bool`

## Set a remember-me cookie for the passed user id, or for the current logged-in user if no id was given

```
remember_me($user_id) : bool
```

### Parameters

#### $user\_id

### Returns

`bool`whether or not the cookie was set

## Returns the list of defined roles

```
roles($driver) : array
```

### Parameters

#### $driver

### Returns

`array`

## Perform the actual login check

```
validate_user() : bool
```

### Returns

`bool`

## Perform the actual login check

```
perform_check() : bool
```

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

## <p>config values</p>

```
$config : array
```

## <p>session object for the remember-me feature</p>

```
$remember_me : \Auth\Session_Cookie
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
