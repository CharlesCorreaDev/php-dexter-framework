# phpDocumentor » \Fuel\Core\Controller_Rest

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Controller_Rest.html

---

PublicProtectedPrivateInherited

- Methods
- [after()

  ```
  after()
  ```](#after "after :: ")
- [before()

  ```
  before()
  ```](#before "before :: ")
- [Router

  ```
  router()
  ```](#router "router :: Router")
- » Protected
- [\_check\_login()

  ```
  _check_login()
  ```](#_check_login "_check_login :: ")
- [Detect format

  ```
  _detect_format()
  ```](#_detect_format "_detect_format :: Detect format")
- [Detect language(s)

  ```
  _detect_lang()
  ```](#_detect_lang "_detect_lang :: Detect language(s)")
- [\_force\_login()

  ```
  _force_login()
  ```](#_force_login "_force_login :: ")
- [\_prepare\_basic\_auth()

  ```
  _prepare_basic_auth()
  ```](#_prepare_basic_auth "_prepare_basic_auth :: ")
- [\_prepare\_digest\_auth()

  ```
  _prepare_digest_auth()
  ```](#_prepare_digest_auth "_prepare_digest_auth :: ")
- [Set the Response http status.

  ```
  http_status()
  ```](#http_status "http_status :: Set the Response http status.")
- [Response

  ```
  response()
  ```](#response "response :: Response")
- Properties
- » Protected
- [<p>List all supported methods</p>

  ```
  $_supported_formats
  ```](#%24_supported_formats "$_supported_formats :: ")
- [<p>authentication to be used for this controller</p>

  ```
  $auth
  ```](#%24auth "$auth :: ")
- [<p>the detected response format</p>

  ```
  $format
  ```](#%24format "$format :: ")
- [<p>default response http status</p>

  ```
  $http_status
  ```](#%24http_status "$http_status :: ")
- [<p>contains a list of method properties such as limit, log and level</p>

  ```
  $methods
  ```](#%24methods "$methods :: ")
- [<p>status code to return in case the called action doesn't return data</p>

  ```
  $no_data_status
  ```](#%24no_data_status "$no_data_status :: ")
- [<p>status code to return in case a not defined action is called</p>

  ```
  $no_method_status
  ```](#%24no_method_status "$no_method_status :: ")
- [<p>Set this in a controller to use a default format</p>

  ```
  $rest_format
  ```](#%24rest_format "$rest_format :: ")
- [<p>xml basenode name</p>

  ```
  $xml_basenode
  ```](#%24xml_basenode "$xml_basenode :: ")

### Methods

## after()

```
after($response) 
```

### Parameters

#### $response

## before()

```
before() 
```

## Router

```
router(string $resource, array $arguments) : bool | mixed
```

Requests are not made to methods directly The request will be for an "object".
this simply maps the object and method to the correct Controller method.

### Parameters

#### $resource

`string`

#### $arguments

`array`

### Returns

`bool``mixed`

## \_check\_login()

```
_check_login($username, $password) 
```

### Parameters

#### $username

#### $password

## Detect format

```
_detect_format() : string
```

Detect which format should be used to output the data

### Returns

`string`

## Detect language(s)

```
_detect_lang() : null | array | string
```

What language do they want it in?

### Returns

`null``array``string`

## \_force\_login()

```
_force_login($nonce) 
```

### Parameters

#### $nonce

## \_prepare\_basic\_auth()

```
_prepare_basic_auth() 
```

## \_prepare\_digest\_auth()

```
_prepare_digest_auth() 
```

## Set the Response http status.

```
http_status(integer $status) : void
```

### Parameters

#### $status

`integer`

response http status code

## Response

```
response($data, $http_status) : object
```

Takes pure data and optionally a status code, then creates the response

### Parameters

#### $data

mixed

#### $http\_status

int

### Returns

`object`Response instance

### Properties

## <p>List all supported methods</p>

```
$_supported_formats : array
```

## <p>authentication to be used for this controller</p>

```
$auth : string
```

## <p>the detected response format</p>

```
$format : string
```

## <p>default response http status</p>

```
$http_status : integer
```

## <p>contains a list of method properties such as limit, log and level</p>

```
$methods : array
```

## <p>status code to return in case the called action doesn't return data</p>

```
$no_data_status : integer
```

## <p>status code to return in case a not defined action is called</p>

```
$no_method_status : integer
```

## <p>Set this in a controller to use a default format</p>

```
$rest_format : null | string
```

## <p>xml basenode name</p>

```
$xml_basenode : string
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
