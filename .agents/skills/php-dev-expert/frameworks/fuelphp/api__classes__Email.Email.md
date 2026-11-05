# phpDocumentor » \Email\Email

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Email.Email.html

---

PublicProtectedPrivateInherited

- Methods
- [Call rerouting for static usage.

  ```
  __callStatic()
  ```](#__callStatic "__callStatic :: Call rerouting for static usage.")
- [Init, config loading.

  ```
  _init()
  ```](#_init "_init :: Init, config loading.")
- [Email driver forge.

  ```
  forge()
  ```](#forge "forge :: Email driver forge.")
- Properties
- [Instance for singleton usage.

  ```
  $_instance
  ```](#%24_instance "$_instance :: Instance for singleton usage.")
- » Protected
- [Driver config defaults.

  ```
  $_defaults
  ```](#%24_defaults "$_defaults :: Driver config defaults.")
- Constants
- [P\_HIGH

  ```
  P_HIGH
  ```](#P_HIGH "P_HIGH :: ")
- [P\_HIGHEST

  ```
  P_HIGHEST
  ```](#P_HIGHEST "P_HIGHEST :: ")
- [P\_LOW

  ```
  P_LOW
  ```](#P_LOW "P_LOW :: ")
- [Email priorities

  ```
  P_LOWEST
  ```](#P_LOWEST "P_LOWEST :: Email priorities")
- [P\_NORMAL

  ```
  P_NORMAL
  ```](#P_NORMAL "P_NORMAL :: ")

### Methods

## Call rerouting for static usage.

```
__callStatic(string $method, array $args) : mixed
```

### Parameters

#### $method

`string`

method name called

#### $args

`array`

supplied arguments

### Exceptions

|  |  |
| --- | --- |
| `\BadMethodCallException` | Invalid method |

### Returns

`mixed`

## Init, config loading.

```
_init() 
```

## Email driver forge.

```
forge(string | array $setup, array $config) : \Email\Email_Driver
```

### Parameters

#### $setup

`string``array`

setup key for array defined in email.setups config or config array

#### $config

`array`

extra config array

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` | Could not find Email driver |

### Returns

`\Email\Email_Driver`one of the email drivers

### Properties

## Instance for singleton usage.

```
$_instance 
```

## Driver config defaults.

```
$_defaults 
```

### Constants

## P\_HIGH

```
P_HIGH 
```

## P\_HIGHEST

```
P_HIGHEST 
```

## P\_LOW

```
P_LOW 
```

## Email priorities

```
P_LOWEST 
```

## P\_NORMAL

```
P_NORMAL 
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
