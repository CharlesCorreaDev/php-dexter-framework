# Request - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/request/request.html

---

#### forge($uri = null, $route = true)

The **forge** method returns a new request object.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$uri` | ``` null ``` | The URI being requested. If this parameter is not present, the URI class will be used to detect the URI. | | `$route` | ``` true ``` | If true, the URI passed or detected will be processed by the routing class. If no route is present, a 404 will be generated. If you request a non-public URI, set this to **false**. | |
| Returns | Fuel\Core\Request Object |
| Example | ``` // create the request object for the admin controller, login method $request = Request::forge('admin/login');  // note that this only creates the object, it does not execute the request! ``` |

You can also use Request::forge() to forge a [cURL](docs__classes__request__curl.md) or a [SOAP](docs__classes__request__soap.md) request object.
