# phpDocumentor » \Fuel\Core\Controller_Hybrid

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Controller_Hybrid.html

---

PublicProtectedPrivateInherited

- Methods
- [After controller method has run output the template

  ```
  after()
  ```](#after "after :: After controller method has run output the template")
- [Load the template and create the $this->template object if needed

  ```
  before()
  ```](#before "before :: Load the template and create the $this->template object if needed")
- [Decide whether to return RESTful or templated response
  Override in subclass to introduce custom switching logic.

  ```
  is_restful()
  ```](#is_restful "is_restful :: Decide whether to return RESTful or templated response
  Override in subclass to introduce custom switching logic.")
- [router

  ```
  router()
  ```](#router "router :: router")
- Properties
- [<p>page template</p>

  ```
  $template
  ```](#%24template "$template :: ")

Hybrid Controller class

A base controller that combines both templated and REST output

|  |  |
| --- | --- |
| package | [Fuel](api__packages__Fuel.md) |
| category | Core |
| author | Fuel Development Team |

### Methods

## After controller method has run output the template

```
after(\Fuel\Core\Response $response) 
```

### Parameters

#### $response

`\Fuel\Core\Response`

## Load the template and create the $this->template object if needed

```
before() 
```

## Decide whether to return RESTful or templated response Override in subclass to introduce custom switching logic.

```
is_restful() 
```

## router

```
router(string $resource, array $arguments) : mixed
```

this router will call action methods for normal requests,
and REST methods for RESTful calls

### Parameters

#### $resource

`string`

#### $arguments

`array`

### Exceptions

|  |  |
| --- | --- |
| `\HttpNotFoundException` |  |

### Returns

`mixed`

### Properties

## <p>page template</p>

```
$template : string
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
