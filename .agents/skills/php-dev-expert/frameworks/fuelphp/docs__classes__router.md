# Router - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/router.html

---

#### process(\Request $request, $route = true)

The **process** method takes a request object, and will try to find a route match for the URI contained in the request.
If no route can be matched, the router will create a new route based on the information in the URI, and following the controller/method or
module/controller/method URI scheme. It will not check if the determined route is valid!

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$request` | *required* | A valid Request object. | | `$route` | `true` | If 'true', the loaded routes will be used to find a match. If 'false', the loaded routes will be ignored and a new route will be constructed. This is used for HMVC calls to controllers that are not routeable from the URL. | |
| Returns | *Route object, or null if no valid route object could be constructed* |

Under normal circumstances you won't be needing this method, it is used internally in the framework to load
controllers.
