# Routing - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/routing.html

---

## Routing

Fuel's routing can range from simple static routes to advanced routes using HTTP verb based routing.

Routes are set in `fuel/app/config/routes.php`.

### Reserved Routes

In Fuel there are 4 reserved routes. They are `_root_`, `_403_`, `_404_` and `_500_`.

- `_root_` - The default route when no URI is specified.
- `_403_` - The route used when the application throws an HttpNoAccessException that isn't caught.
- `_404_` - The route used when the application throws an HttpNotFoundException that isn't caught.
- `_500_` - The route used when the application throws an HttpServerErrorException that isn't caught.

The request class throws an HttpNotFoundException when you request a URI (a route) that your application
can't resolve.

If no `_404_` route is defined, the framework uses it's own error handler to display
a "page not found" message. If no `_403_` or `_500_` route is defined, these
exceptions remain uncaught, and are handled like any other exception your application might throw.

```
return array(
    '_root_'  => 'welcome/index',
    '_404_'   => 'welcome/404',
);
```

### Basic Routing

The route on the left is compared to the request URI. If a match is found, the request is routed to the URI on the right.

This allows you to do things like the following:

```
return array(
    'about'   => 'site/about',
    'contact' => 'contact/form',
    'admin'   => 'admin/login',
);
```

### Slightly Advanced Routing

You can include any regex into your routes. The left side is matched against the
requests URI, and the right side is the replacement for the left, so you can use
backreferences in the right side from the regex on the left. There are also a few
special statements that allow you match anything or just a segment:

- `:any` - This matches anything from that point on in the URI, does not match "nothing"
- `:everything` - Like `:any`, but also matches "nothing"
- `:segment` - This matches only 1 segment in the URI, but that segment can be anything
- `:num` - This matches any numbers
- `:alpha` - This matches any alpha characters, including UTF-8
- `:alnum` - This matches any alphanumeric characters, including UTF-8

Here are some examples. Notice the subtle differences between `:any` and `:everything`:

```
return array(
    'blog/(:any)'       => 'blog/entry/$1', // Routes /blog/entry_name to /blog/entry/entry_name
                                            //   matches /blog/, does not match /blogging and /blog
    'blog(:any)'        => 'blog/entry$1',  // Routes /blog/entry_name to /blog/entry/entry_name
                                            //   matches /blog/ and /blogging, does not match /blog
    'blog(:everything)' => 'blog/entry$1',  // Routes /blog/entry_name to /blog/entry/entry_name
                                            //   matches /blog/, /blogging and /blog
    '(:segment)/about'  => 'site/about/$1', // Routes /en/about to /site/about/en
    '(\d{2})/about'     => 'site/about/$1', // Routes /12/about to /site/about/12
);
```

### Advanced Routing

You can also have named parameters in your routes. This allows you to give your URI segments
names which can then be accessed from within your actions.

Example:

```
return array(
    'blog/:year/:month/:id' => 'blog/entry', // Routes /blog/2010/11/entry_name to /blog/entry
);
```

In the above example it would catch the following `/blog/2010/11/entry_name`. It would then
route that request to your 'entry' action in your 'blog' controller. There, the named params
will be available like this:

```
$this->param('year');
$this->param('month');
$this->param('id');
```

Note that as a named parameter is a regex, every named parameter counts as a backreference.
So in a route like ':name/(\d{2})', the backreference for your two-digit segment is $2, not $1!

### HTTP verb based routing

You can route your URLs to controllers and actions based on the HTTP verb used to call them.
This makes it quick and easy to make RESTful controllers.

Example:

```
return array(
    // Routes GET /blog to /blog/all and POST /blog to /blog/create
    'blog' => array(array('GET', new Route('blog/all')), array('POST', new Route('blog/create'))),
);
```

You can use named parameters and regexes within your URL just like normal:

```
return array(
    'blog/(:any)' => array(array('GET', new Route('blog/show/$1'))),
);
```

You can also specify if this route is supported for only http, or only https, by passing `false` or `true` as third parameter:

```
// route only valid if this is an https request
return array(
    'blog/(:any)' => array(array('GET', new Route('blog/show/$1'), true)),
);
```

### Named routes and reverse routing

The idea of reversed routing is like this: say you got an admin area and you have a route setup for it.
In your views, you would like to that admin area using an HTML anchor that links to for example 'admin/start/overview'.
Now you decide to move stuff around and end up moving that specific page to 'admin/overview'.
As a result of this now you need to update the links in all your views...

When using reverse routing with these name routes you can link an anchor to a named route, so that when the route changes,
the links in your views will automatically follow the change

Example route:

```
return array(
    'admin/start/overview' => array('admin/overview', 'name' => 'admin_overview'), // add a named route for the admin/overview page
);
```

Example anchor:

```
// produces <a href="http://your_base_url/admin/start/overview">Overview</a>
echo Html::anchor(Router::get('admin_overview'), 'Overview');
```

Note that this currently only works for routes that are defined in `app/config/routes.php`, not for module routes.

### Inline routes

A route does not have to resolve to a controller method. FuelPHP also supports inline routes, which are defined as a Closure
that replaces the controller method. Like controller methods, inline routes MUST return a Response object, either by forging
one manually, or as the result of executing a forged Request.

Example route:

```
return array(
    'secret/mystuff' => function () {
		// this route only works in development
		if (\Fuel::$env == \Fuel::DEVELOPMENT)
		{
			return \Request::forge('secret/mystuff/keepout', false)->execute();
		}
		else
		{
			throw new HttpNotFoundException('This page is only accessable in development.');
		}
};
```

### Modules & Routing

[Read about how modules handle routing](docs__general__modules.md#module_routing).
