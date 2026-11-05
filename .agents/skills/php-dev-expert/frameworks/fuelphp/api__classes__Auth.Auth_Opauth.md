# phpDocumentor » \Auth\Auth_Opauth

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Auth.Auth_Opauth.html

---

PublicProtectedPrivateInherited

- Methods
- [Construct the Auth\_Opauth object

  ```
  __construct()
  ```](#__construct "__construct :: Construct the Auth_Opauth object")
- [Class initialisation

  ```
  _init()
  ```](#_init "_init :: Class initialisation")
- [Create an OpAuth instance

  ```
  forge()
  ```](#forge "forge :: Create an OpAuth instance")
- [Get a response value

  ```
  get()
  ```](#get "get :: Get a response value")
- [Returns the Opauth instance for interaction with the core library.

  ```
  get_instance()
  ```](#get_instance "get_instance :: Returns the Opauth instance for interaction with the core library.")
- [create a remote entry for this login

  ```
  link_provider()
  ```](#link_provider "link_provider :: create a remote entry for this login")
- [New Opauth login.

  ```
  login_or_register()
  ```](#login_or_register "login_or_register :: New Opauth login.")
- » Protected
- [fetch the callback response

  ```
  callback()
  ```](#callback "callback :: fetch the callback response")
- [use Auth to create a new user, in case we've received enough information to do so

  ```
  create_user()
  ```](#create_user "create_user :: use Auth to create a new user, in case we've received enough information to do so")
- Properties
- » Protected
- [Opauth configuration

  ```
  $config
  ```](#%24config "$config :: Opauth configuration")
- [<p>name of the database connection to use</p>

  ```
  $db_connection
  ```](#%24db_connection "$db_connection :: ")
- [Opauth instance

  ```
  $opauth
  ```](#%24opauth "$opauth :: Opauth instance")
- [<p>name of the providers table</p>

  ```
  $provider_table
  ```](#%24provider_table "$provider_table :: ")
- [Opauth response

  ```
  $response
  ```](#%24response "$response :: Opauth response")

### Methods

## Construct the Auth\_Opauth object

```
__construct(array $config, $autorun) 
```

### Parameters

#### $config

#### $autorun

## Class initialisation

```
_init() 
```

## Create an OpAuth instance

```
forge(array $config, bool $autorun) 
```

### Parameters

#### $config

`array`

any call-time configuration to be used

#### $autorun

`bool`

whether or not Opauth should run automatically

## Get a response value

```
get($key, $default) 
```

### Parameters

#### $key

#### $default

## Returns the Opauth instance for interaction with the core library.

```
get_instance() : \Opauth
```

### Returns

`\Opauth`

## create a remote entry for this login

```
link_provider(array $data) 
```

### Parameters

#### $data

## New Opauth login.

```
login_or_register() 
```

If we know this user, we can perform a login, if
not, we need to register the user first

## fetch the callback response

```
callback() 
```

## use Auth to create a new user, in case we've received enough information to do so

```
create_user(array $user) : mixed
```

### Parameters

#### $user

`array`

array with the raw Opauth response user fields

### Returns

`mixed`id of the user record created, or false if the create failed

### Properties

## Opauth configuration

```
$config 
```

## <p>name of the database connection to use</p>

```
$db_connection : string
```

## Opauth instance

```
$opauth 
```

## <p>name of the providers table</p>

```
$provider_table : string
```

## Opauth response

```
$response 
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
