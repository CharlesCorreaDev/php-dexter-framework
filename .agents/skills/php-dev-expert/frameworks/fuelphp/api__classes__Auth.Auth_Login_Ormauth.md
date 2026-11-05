# phpDocumentor » \Auth\Auth_Login_Ormauth

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Auth.Auth_Login_Ormauth.html

---

PublicProtectedPrivateInherited

- Methods
- [\_init()

  ```
  _init()
  ```](#_init "_init :: ")
- [Change a user's password

  ```
  change_password()
  ```](#change_password "change_password :: Change a user's password")
- [Creates a temporary hash that will validate the current login

  ```
  create_login_hash()
  ```](#create_login_hash "create_login_hash :: Creates a temporary hash that will validate the current login")
- [Create new user

  ```
  create_user()
  ```](#create_user "create_user :: Create new user")
- [Deletes a given user

  ```
  delete_user()
  ```](#delete_user "delete_user :: Deletes a given user")
- [Force login user

  ```
  force_login()
  ```](#force_login "force_login :: Force login user")
- [Getter for user data.

  ```
  get()
  ```](#get "get :: Getter for user data.")
- [Get the user's emailaddress

  ```
  get_email()
  ```](#get_email "get_email :: Get the user's emailaddress")
- [Get the user's groups

  ```
  get_groups()
  ```](#get_groups "get_groups :: Get the user's groups")
- [for compatibility, will map to the user metadata

  ```
  get_profile_fields()
  ```](#get_profile_fields "get_profile_fields :: for compatibility, will map to the user metadata")
- [Get the user's screen name

  ```
  get_screen_name()
  ```](#get_screen_name "get_screen_name :: Get the user's screen name")
- [Get the user object

  ```
  get_user()
  ```](#get_user "get_user :: Get the user object")
- [Get the user's ID

  ```
  get_user_id()
  ```](#get_user_id "get_user_id :: Get the user's ID")
- [Extension of base driver because this supports a guest login when switched on

  ```
  guest_login()
  ```](#guest_login "guest_login :: Extension of base driver because this supports a guest login when switched on")
- [Extension of base driver method to default to user group instead of user id

  ```
  has_access()
  ```](#has_access "has_access :: Extension of base driver method to default to user group instead of user id")
- [Login user

  ```
  login()
  ```](#login "login :: Login user")
- [Logout user

  ```
  logout()
  ```](#logout "logout :: Logout user")
- [Generates new random password, sets it for the given username and returns the new password.

  ```
  reset_password()
  ```](#reset_password "reset_password :: Generates new random password, sets it for the given username and returns the new password.")
- [Update a user's properties
  Note: Username cannot be updated, to update password the old password must be passed as old\_password

  ```
  update_user()
  ```](#update_user "update_user :: Update a user's properties
  Note: Username cannot be updated, to update password the old password must be passed as old_password")
- [Check the user exists

  ```
  validate_user()
  ```](#validate_user "validate_user :: Check the user exists")
- » Protected
- [Check for login

  ```
  perform_check()
  ```](#perform_check "perform_check :: Check for login")
- Properties
- » Protected
- [<p>Ormauth class config</p>

  ```
  $config
  ```](#%24config "$config :: ")
- [<p>Simpleauth compatible permissions array for the current logged-in user</p>

  ```
  $permissions
  ```](#%24permissions "$permissions :: ")
- [<p>user object for the current user</p>

  ```
  $user
  ```](#%24user "$user :: ")

OrmAuth ORM driven login driver

|  |  |
| --- | --- |
| package | [Fuel](api__packages__Fuel.Auth.md) |
| subpackage | Auth |

### Methods

## \_init()

```
_init() 
```

## Change a user's password

```
change_password($old_password, $new_password, string $username) : bool
```

### Parameters

#### $old\_password

string

#### $new\_password

string

#### $username

`string`

username or null for current user

### Returns

`bool`

## Creates a temporary hash that will validate the current login

```
create_login_hash() : string
```

### Returns

`string`

## Create new user

```
create_user($username, $password, string $email, int $group, array $profile_fields) : bool
```

### Parameters

#### $username

string

#### $password

string

#### $email

`string`

must contain valid email address

#### $group

`int`

group id

#### $profile\_fields

Array

### Returns

`bool`

## Deletes a given user

```
delete_user($username) : bool
```

### Parameters

#### $username

string

### Returns

`bool`

## Force login user

```
force_login($user_id) : bool
```

### Parameters

#### $user\_id

string

### Returns

`bool`

## Getter for user data.

```
get(string $field, mixed $default) : mixed
```

### Parameters

#### $field

`string`

name of the user field to return

#### $default

`mixed`

value to return if the field requested does not exist

### Returns

`mixed`

## Get the user's emailaddress

```
get_email() : string
```

### Returns

`string`

## Get the user's groups

```
get_groups() : Array
```

### Returns

`Array`containing the group driver ID & the user's group ID

## for compatibility, will map to the user metadata

```
get_profile_fields($field, $default) : Array
```

### Parameters

#### $field

#### $default

### Returns

`Array`

## Get the user's screen name

```
get_screen_name() : string
```

### Returns

`string`

## Get the user object

```
get_user() : mixed
```

### Returns

`mixed`Model\Auth\_User object, or false if no user is set

## Get the user's ID

```
get_user_id() : Array
```

### Returns

`Array`containing this driver's ID & the user's ID

## Extension of base driver because this supports a guest login when switched on

```
guest_login() 
```

## Extension of base driver method to default to user group instead of user id

```
has_access($condition, $driver, $user) 
```

### Parameters

#### $condition

#### $driver

#### $user

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

## Logout user

```
logout() : bool
```

### Returns

`bool`

## Generates new random password, sets it for the given username and returns the new password.

```
reset_password(string $username) : string
```

To be used for resetting a user's forgotten password, should be emailed afterwards.

### Parameters

#### $username

`string`

### Returns

`string`

## Update a user's properties Note: Username cannot be updated, to update password the old password must be passed as old\_password

```
update_user(Array $values, $username) : bool
```

### Parameters

#### $values

`Array`

properties to be updated including profile fields

#### $username

string

### Returns

`bool`

## Check the user exists

```
validate_user($username_or_email, $password) : bool
```

### Parameters

#### $username\_or\_email

#### $password

### Returns

`bool`

## Check for login

```
perform_check() : bool
```

### Returns

`bool`

### Properties

## <p>Ormauth class config</p>

```
$config : array
```

## <p>Simpleauth compatible permissions array for the current logged-in user</p>

```
$permissions : array
```

## <p>user object for the current user</p>

```
$user : \Model\Auth_User
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
