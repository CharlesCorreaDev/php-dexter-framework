# phpDocumentor » \Fuel\Core\Controller

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Controller.html

---

PublicProtectedPrivateInherited

- Methods
- [Sets the controller request object.

  ```
  __construct()
  ```](#__construct "__construct :: Sets the controller request object.")
- [This method gets called after the action is called

  ```
  after()
  ```](#after "after :: This method gets called after the action is called")
- [This method gets called before the action is called

  ```
  before()
  ```](#before "before :: This method gets called before the action is called")
- [This method returns the named parameter requested, or all of them
  if no parameter is given.

  ```
  param()
  ```](#param "param :: This method returns the named parameter requested, or all of them
  if no parameter is given.")
- [This method returns all of the named parameters.

  ```
  params()
  ```](#params "params :: This method returns all of the named parameters.")
- Properties
- [<p>The current Request object</p>

  ```
  $request
  ```](#%24request "$request :: ")
- [<p>The default response status</p>

  ```
  $response_status
  ```](#%24response_status "$response_status :: ")

### Methods

## Sets the controller request object.

```
__construct(\Request $request) 
```

### Parameters

#### $request

`\Request`

The current request object

## This method gets called after the action is called

```
after(\Response | string $response) : \Response
```

### Parameters

#### $response

`\Response``string`

### Returns

`\Response`

## This method gets called before the action is called

```
before() 
```

## This method returns the named parameter requested, or all of them if no parameter is given.

```
param(string $param, mixed $default) : mixed
```

### Parameters

#### $param

`string`

The name of the parameter

#### $default

`mixed`

Default value

### Returns

`mixed`

## This method returns all of the named parameters.

```
params() : array
```

### Returns

`array`

### Properties

## <p>The current Request object</p>

```
$request : \Fuel\Core\Request
```

## <p>The default response status</p>

```
$response_status : Integer
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
