# phpDocumentor » \Fuel\Core\Cookie

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Cookie.html

---

PublicProtectedPrivateInherited

- Methods
- [\_init()

  ```
  _init()
  ```](#_init "_init :: ")
- [Deletes a cookie by making the value null and expiring it.

  ```
  delete()
  ```](#delete "delete :: Deletes a cookie by making the value null and expiring it.")
- [Gets the value of a signed cookie.

  ```
  get()
  ```](#get "get :: Gets the value of a signed cookie.")
- [Sets a signed cookie.

  ```
  set()
  ```](#set "set :: Sets a signed cookie.")
- Properties
- » Protected
- [<p>Cookie class configuration defaults</p>

  ```
  $config
  ```](#%24config "$config :: ")

Cookie class

|  |  |
| --- | --- |
| package | [Fuel](api__packages__Fuel.md) |
| category | Helpers |
| author | Kohana Team |
| modified | Fuel Development Team |
| copyright | (c) 2008-2010 Kohana Team |
| license | <http://kohanaframework.org/license> |
| link | <http://docs.fuelphp.com/classes/cookie.html> |

### Methods

## \_init()

```
_init() 
```

## Deletes a cookie by making the value null and expiring it.

```
delete(string $name, string $path, string $domain, boolean $secure, boolean $http_only) : boolean
```

Cookie::delete('theme');

|  |  |
| --- | --- |
| uses | \Fuel\Core\static::set |

### Parameters

#### $name

`string`

cookie name

#### $path

`string`

path of the cookie

#### $domain

`string`

domain of the cookie

#### $secure

`boolean`

if true, the cookie should only be transmitted over a secure HTTPS connection

#### $http\_only

`boolean`

if true, the cookie will be made accessible only through the HTTP protocol

### Returns

`boolean`

## Gets the value of a signed cookie.

```
get(string $name, mixed $default) : string
```

Cookies without signatures will not
be returned. If the cookie signature is present, but invalid, the cookie
will be deleted.

```
// Get the "theme" cookie, or use "blue" if the cookie does not exist
$theme = Cookie::get('theme', 'blue');
```

### Parameters

#### $name

`string`

cookie name

#### $default

`mixed`

default value to return

### Returns

`string`

## Sets a signed cookie.

```
set(string $name, string $value, integer $expiration, string $path, string $domain, boolean $secure, boolean $http_only) : boolean
```

Note that all cookie values must be strings and no
automatic serialization will be performed!

```
// Set the "theme" cookie
Cookie::set('theme', 'red');
```

### Parameters

#### $name

`string`

name of cookie

#### $value

`string`

value of cookie

#### $expiration

`integer`

lifetime in seconds

#### $path

`string`

path of the cookie

#### $domain

`string`

domain of the cookie

#### $secure

`boolean`

if true, the cookie should only be transmitted over a secure HTTPS connection

#### $http\_only

`boolean`

if true, the cookie will be made accessible only through the HTTP protocol

### Returns

`boolean`

### Properties

## <p>Cookie class configuration defaults</p>

```
$config : array
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
