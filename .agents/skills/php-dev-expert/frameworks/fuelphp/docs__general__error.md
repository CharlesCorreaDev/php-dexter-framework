# Error Handling - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/error.html

---

## Error Handling

### Introduction

As you all (should) know [error handling](http://en.wikipedia.org/wiki/Exception_handling)
is a very important part in the development process. Not only does it show the user that the page he/she/it
requested is not available, it's also a way to inform machines (browsers and such) about what’s going
on by providing a HTTP error status.

### Code errors

FuelPHP's internal error handling is based on Exceptions. This allows you to catch them in your code, so your
application can handle the exception that occured gracefully and the user can continue using the application.

FuelPHP also alters the default PHP behaviour when it comes to PHP errors (which are not exceptions) from the
old procedural functions. Instead of continuing on all non-fatal errors, **FuelPHP will throw a PhpErrorException
on all of these errors**. This will force you to solve all errors, even an E\_NOTICE which in the old days you
might have ignored. It will also allow you to catch PHP errors. For example to catch syntax errors in view files
when you have non-programmers creating views.

You can alter this behaviour by adding PHP error types (like E\_NOTICE or E\_STRICT) to the [errors.continue\_on](docs__general__configuration.md#config) key
in your applications config/config.php file. Errors defined here will allow your script to continue. No exception
is being thrown for these errors, so you can no longer catch these.

It is strongly adviced not to continue on errors, as it might lead to bugs in your code that are
very difficult to find once your application moves into production!

### Application logic errors

#### Error 404

The 404 route is set in *app/config/routes.php* and must point to the controller/method
that handles the 404 pages. [Read more about it in the routing section.](docs__general__routing.md)

#### Throwing a 404

There may be times when one needs to throw a 404 error, such as when handling the routing yourself.
This is simply done by throwing a `HttpNotFoundException`. Fuel will `exit` for
you once it has run the 404 page.

```
throw new HttpNotFoundException;
```

This exception is caught and processed in your applications index.php file. When caught, it will do
a lookup for the defined 404 route, and if found, it will forge a new request using the route found
as the URI for the request. As this is a normal request, the URI will be **routed like any
other request!**

If you don't want this behaviour, change your index.php file to read

```
// Generate the request, execute it and send the output.
try
{
	$response = Request::forge()->execute()->response();
}
catch (HttpNotFoundException $e)
{
	$route = array_key_exists('_404_', Router::$routes) ? Router::$routes['_404_']->translation : Config::get('routes._404_');
	if ($route)
	{
		// add 'false' to the forge request do disable the routing engine
		$response = Request::forge($route, false)->execute()->response();
	}
	else
	{
		throw $e;
	}
}
```

#### 404 handling

When a request is made and after the router looked for possible matches and there is no match, the 404
handling comes into play. By default the **\_404\_** route points to *welcome/404*,
let's take a look at that method:

```
// Inside Controller_Welcome

/**
 * The 404 action for the application.
 *
 * @access  public
 * @return  void
 */
public function action_404()
{
	$messages = array('Aw, crap!', 'Bloody Hell!', 'Uh Oh!', 'Nope, not here.', 'Huh?');
	$data['title'] = $messages[array_rand($messages)];

	// Set a HTTP 404 output header
	return Response::forge(Presenter::forge('welcome/404', $data), 404);
}
```

Here you can see what's going on inside the 404 handler. As you can see it's a normal controller action.
What's nice about this is that it allows you to show whatever content you like on the page. You can
load your own views with data fetched from a database.

Note that Fuel doesn't set the 404 status, your response must set this. Return *Response::forge(Presenter::forge('welcome/404'), 404);*
in order to send the correct status header.

#### Catch all

Because Fuel doesn't set the 404 response status, you can use it as a catch all function.
You might have have a page model that can fetch the page from a database by uri.
Here is an example to illustrate the possibilities:

```
// Inside your 404 controller

public function action_my404()
{
	$original_uri = \Input::uri();
	$result = \DB::select()->from('pages')->where('uri', $original_uri)->execute();
	if(count($result) === 1)
	{
		// display that page in whatever way you like
	}
	else
	{
		// display your general 404 page
		$messages = array('Aw, crap!', 'Bloody Hell!', 'Uh Oh!', 'Nope, not here.', 'Huh?');
		$data['title'] = $messages[array_rand($messages)];
		return Response::forge(View::forge('welcome/404', $data), 404);
	}
}
```

#### Throwing a 500

There may be moments where your applications simply need to stop and show an error to
indicate that something has gone wrong on the server. Normally this is a
[500 Internal
Server Error](http://en.wikipedia.org/wiki/List_of_HTTP_status_codes#5xx_Server_Error). This exception can be caught in the front controller by defining a
`_500_` route. It allows you to show a proper error message, do additional
error logging, or send a notification to an administrator to get the issue fixed.

Similar to throwing a 404, one can throw a 500 error.

```
throw new HttpServerErrorException;
```

#### Throwing a 403

If you want centralized handling of access violations, you can choose to signal an
access violation by throwing an HttpNoAccessException. This exception can be caught
in the front controller by defining a `_403_` route. The handler could for
example store the current URI, ask for a login, and if a success, return to the stored
URI so the user can return to where the violation occured.

Similar to throwing a 404, one can throw a 403 error.

```
throw new HttpNoAccessException;
```

### Errors in CLI mode

When an error happens in CLI mode, either interactively through the oil console, or when running a task,
the error is simply displayed, and depending on the type of error, the current action may be aborted.

You can enable dumping a backtrace when a fatal error occurs by setting the `cli_backtrace` configuration
key in the `config.php` config file to `true`.
