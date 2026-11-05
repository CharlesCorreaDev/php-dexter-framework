# HMVC Requests - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/hmvc.html

---

## HMVC requests

HMVC requests are a great way to separate logic and re-use controller logic in multiple places.
One common use of this is when you use a theme or template engine to generate your pages,
where every page is divided into sections, and sections are populated by widgets.
By using modules to produce the widget output, you can create a highly modular application with easy to re-use components.

You call a module controller method using the [Request](docs__classes__request__request.md) class:

```
// fetch the output of a controller
$widget = Request::forge('mycontroller/mymethod/parms')->execute();
echo $widget;

// or fetch the output of a module
$widget = Request::forge('mymodule/mycontroller/mymethod/parms', false)->execute();
echo $widget;

// and if you need to pass in some data
$widget = Request::forge('mymodule/mycontroller/mymethod/parms', false)->execute(array('tree'=>'apple'));
echo $widget;
```

By default, all requests made are processed by Fuel's routing engine. If you want to request something that isn't routable
(for example because you don't want a browser to request it), you should pass '**false**' as second parameter
to the forge() call. If you don't you will end up with a 404 error when you execute the request!

Loading views in HMVC request is the same as in normal requests and controllers accessed by HMVC request
are also approachable via the browser. However, in some cases you may not want the component (for example, a widget)
to be accessed through the browser. In those cases, you'll want to check if the request is made through HMVC or the browser.
The following example shows you how to check for a HMVC request:

```
<?php

class Controller_Widget extends Controller
{

	public function action_show()
	{
		if( ! Request::is_hmvc())
		{
			// this is the main request
		}
		else
		{
			// this is a HMVC request
		}
	}

}
```

### 404 during HMVC requests

When a 404 occurs during a HMVC request, a `HttpNotFoundException` is thrown. If uncaught, it will trigger
the load of the frameworks default 404 page. However, you can prevent this and handle the 404
yourself:

```
try
{
	\Request::forge('this_will_fail');
}
catch (HttpNotFoundException $e)
{
	// deal with it
}
```

### Traversing Request instances

If you want to access other Requests, you can traverse them using two methods:
`$request->parent()` and `$request->children()`. The parent is the Request during
which the current Request was created (`null` for the main Request). The children are all the Requests
created during the current Request.
