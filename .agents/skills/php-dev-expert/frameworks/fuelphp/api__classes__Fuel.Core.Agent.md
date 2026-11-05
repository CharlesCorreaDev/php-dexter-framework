# phpDocumentor » \Fuel\Core\Agent

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Agent.html

---

PublicProtectedPrivateInherited

- Methods
- [map the user agent string to browser specifications

  ```
  _init()
  ```](#_init "_init :: map the user agent string to browser specifications")
- [check if the current browser accepts a specific character set

  ```
  accepts_charset()
  ```](#accepts_charset "accepts_charset :: check if the current browser accepts a specific character set")
- [check if the current browser accepts a specific language

  ```
  accepts_language()
  ```](#accepts_language "accepts_language :: check if the current browser accepts a specific language")
- [get the normalized browser name

  ```
  browser()
  ```](#browser "browser :: get the normalized browser name")
- [get the list of browser accepted charactersets

  ```
  charsets()
  ```](#charsets "charsets :: get the list of browser accepted charactersets")
- [check if the current browser is mobile device

  ```
  is_mobiledevice()
  ```](#is_mobiledevice "is_mobiledevice :: check if the current browser is mobile device")
- [check if the current browser is a robot or crawler

  ```
  is_robot()
  ```](#is_robot "is_robot :: check if the current browser is a robot or crawler")
- [get the list of browser accepted languages

  ```
  languages()
  ```](#languages "languages :: get the list of browser accepted languages")
- [Get the browser platform

  ```
  platform()
  ```](#platform "platform :: Get the browser platform")
- [Get all browser properties

  ```
  properties()
  ```](#properties "properties :: Get all browser properties")
- [Get any browser property

  ```
  property()
  ```](#property "property :: Get any browser property")
- [Get the Browser Version

  ```
  version()
  ```](#version "version :: Get the Browser Version")
- » Protected
- [use the parsed php\_browscap.ini file to find a user agent match

  ```
  get_from_browscap()
  ```](#get_from_browscap "get_from_browscap :: use the parsed php_browscap.ini file to find a user agent match")
- [download and parse the browscap file

  ```
  parse_browscap()
  ```](#parse_browscap "parse_browscap :: download and parse the browscap file")
- Properties
- » Protected
- [<p>global config items</p>

  ```
  $config
  ```](#%24config "$config :: ")
- [<p>global config defaults</p>

  ```
  $defaults
  ```](#%24defaults "$defaults :: ")
- [<p>property to cache key mapping</p>

  ```
  $keys
  ```](#%24keys "$keys :: ")
- [<p>information about the current browser</p>

  ```
  $properties
  ```](#%24properties "$properties :: ")
- [<p>detected user agent string</p>

  ```
  $user_agent
  ```](#%24user_agent "$user_agent :: ")

Identifies the platform, browser, robot, or mobile device from the user agent string

This class uses PHP's get\_browser() to get details from the browsers user agent
string. If not available, it can use a coded alternative using the php\_browscap.ini
file from http://browsers.garykeith.com.

|  |  |
| --- | --- |
| package | [Fuel](api__packages__Fuel.Core.md) |
| subpackage | Core |
| category | Core |
| author | Harro Verton |

### Methods

## map the user agent string to browser specifications

```
_init() : void
```

## check if the current browser accepts a specific character set

```
accepts_charset(string $charset) : bool
```

### Parameters

#### $charset

`string`

optional character set, defaults to 'utf-8'

### Returns

`bool`

## check if the current browser accepts a specific language

```
accepts_language(string $language) : bool
```

### Parameters

#### $language

`string`

optional ISO language code, defaults to 'en'

### Returns

`bool`

## get the normalized browser name

```
browser() : string
```

### Returns

`string`

## get the list of browser accepted charactersets

```
charsets() : array
```

### Returns

`array`

## check if the current browser is mobile device

```
is_mobiledevice() : bool
```

### Returns

`bool`

## check if the current browser is a robot or crawler

```
is_robot() : bool
```

### Returns

`bool`

## get the list of browser accepted languages

```
languages() : array
```

### Returns

`array`

## Get the browser platform

```
platform() : string
```

### Returns

`string`

## Get all browser properties

```
properties() : array
```

### Returns

`array`

## Get any browser property

```
property(string $property) : string | null
```

### Parameters

#### $property

`string`

### Returns

`string``null`

## Get the Browser Version

```
version() : string
```

### Returns

`string`

## use the parsed php\_browscap.ini file to find a user agent match

```
get_from_browscap() : mixed
```

### Returns

`mixed`array if a match is found, of false if not cached yet

## download and parse the browscap file

```
parse_browscap() : array
```

### Exceptions

|  |  |
| --- | --- |
| `\Exception` |  |
| `\FuelException` |  |

### Returns

`array`array with parsed download info, or empty if the download is disabled of failed

### Properties

## <p>global config items</p>

```
$config : array
```

## <p>global config defaults</p>

```
$defaults : array
```

## <p>property to cache key mapping</p>

```
$keys : array
```

## <p>information about the current browser</p>

```
$properties : array
```

## <p>detected user agent string</p>

```
$user_agent : string
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
