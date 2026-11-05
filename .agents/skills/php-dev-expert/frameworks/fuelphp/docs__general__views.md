# Views - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/views.html

---

## Views

### What is a view?

Views are files that present data to the browser. These files enable the separation of logic and presentation for your application. Views are typically html, javascript, or css but can contain variables passed into them from the controller.

### Creating a view

In FuelPHP, Views are located in the `APPPATH/views` directory. Views can be located in subdirectories. Views are named by their directory path from the fuel/app/views and the file name, so a view file located *fuel/app/views/user/join.php* would be named `user/join`.

Example:

```
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		Welcome, <?php echo $username; ?>.
	</body>
</html>
```

### Using views

Views in the Fuel framework are very flexible. You can create a single view and nest views within other views. This can be done multiple ways.

**Example View (fuel/app/views/home/index.php):**

```
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		Welcome, <?php echo $username; ?>.
	</body>
</html>
```

**Method 1 (using example view above):**

```
class Controller_Home extends Controller
{
	public function action_index()
	{
		$data = array(); //stores variables going to views

		$data['username'] = 'Joe14';
		$data['title'] = 'Home';

		//assign the view to browser output
		return View::forge('home/index', $data);
	}
}
```

**Method 2 (using example view above):**

```
class Controller_Home extends Controller
{
	public function action_index()
	{
		//create the view
		$view = View::forge('home/index');

		//assign variables for the view
		$view->username = 'Joe14';
		$view->title = 'Home';

		//another way to assign variables for the view
		$view->set('username', 'Joe14');
		$view->set('title', 'Home');

		//assign the view to browser output
		return $view;
	}
}
```

### Security

Views use output encoding to sanitize anything you pass to them. In a default installation, the security method
Security::htmlentities() is defined as output filter. You can modify the filters in your applications config.php file.
If you want to pass something unfiltered, you can use the method `set($name, $value, false)`.

```
class Controller_Example extends Controller
{
	public function action_index()
	{
		$view = \View::forge('example');

		// add it filtered, outputs: &lt;strong&gt;not bold because filtered&lt;/strong&gt;
		$view->title = '<strong>not bold because filtered</strong>';

		// add it unfiltered, outputs: <strong> bold because unfiltered</strong>
		$view->set('title', '<strong> bold because unfiltered</strong>', false);

		// or use the set_safe() method, which is identical to set() but defaults to 'false'
		$view->set_safe('title', '<strong> bold because unfiltered</strong>');

		return $view;
	}
}
```

If you don't want your View to work like this, you can pass `false` as third argument `View::forge()`
Now anything added to this View object will be unfiltered. If you then do want some values filtered, you can use
`set($name, $value, true)`.  
You can also globally disable the output filter by setting the application
configuration value `security.auto_filter_output` to `false`. For security reasons it is highly recommended
that you don't do this!

**Note on objects:** Unless the passed object is of the type View, Presenter or Closure, it is
expected to have a `__toString()` method and forced to be a string when output filtering is enabled. If you want
to pass it anyway, you need to use `set($name, $value, false)`, but don't forget to filter what you
use!  
View & Presenters are expected to contain HTML and take care of their own filtering which is why they're
not sanitized. Closures cannot be sanitized, and you should take care to ensure this is done within them if
necessary.

### Lazy rendering

When instantiating a view object, only the environment needed to generate output is setup. The view file is not
being read, no variables will be interpreted, and no output will be rendered.

This only happens when you explicitly call the `render()` method on the view object or when you
cast the view object to a string (which happens automatically when you echo it). This means no views are processed
until it's absolutely needed. It also means that Fuel doesn't keep rendered views in memory until it is time to
send them to the browser.

### Nesting Views

Views can also be nested to contain other views. This can be done multiple ways.

### Example Views

fuel/app/views/layout.php

```
<html>
	<head>
		<?php echo $head; ?>
	</head>
	<body>
		<?php echo $header; ?>
		<?php echo $content; ?>
		<?php echo $footer; ?>
	</body>
</html>
```

fuel/app/views/head.php

```
<title><?php echo $title; ?></title>
```

fuel/app/views/header.php

```
<div class="logo"></div>
<div class="logo_text"><?php echo $site_title; ?></div>
```

fuel/app/views/content.php

```
<h1><?php echo $title; ?></h1>
<div class="welcome_user">Welcome <?php echo $username; ?></div>
```

fuel/app/views/footer.php

```
<div class="footer">
	&copy; Copyright <?php echo date('Y');?> <?php echo $site_title; ?>
</div>
```

### Method 1 (using example views above and lazy rendering):

```
class Controller_Home extends Controller
{
	public function action_index()
	{
		// create the layout view
		$view = View::forge('layout');

		// assign global variables so all views have access to them
		$view->set_global('username', 'Joe14');
		$view->set_global('title', 'Home');
		$view->set_global('site_title', 'My Website');

		//assign views as variables, lazy rendering
		$view->head = View::forge('head');
		$view->header = View::forge('header');
		$view->content = View::forge('content');
		$view->footer = View::forge('footer');

		// return the view object to the Request
		return $view;
	}
}
```

### Method 2 (using example views above and forced rendering):

```
class Controller_Home extends Controller
{
	public function action_index()
	{
		//assign variables
		$data = array();
		$data['title'] = 'Home';
		$data['site_title'] = 'My Website';
		$data['username'] = 'Joe14';

		//assign views as variables, forced rendering
		$views = array();
		$views['head'] = View::forge('head', $data)->render();
		$views['header'] = View::forge('header', $data)->render();
		$views['content'] = View::forge('content', $data)->render();
		$views['footer'] = View::forge('footer', $data)->render();

		// return the rendered HTML to the Request
		return View::forge('layout', $views)->render();
	}
}
```

### Method 3 (using example views above, no global data, lazy rendering):

```
class Controller_Home extends Controller
{
	public function action_index()
	{
		// create the layout view
		$view = View::forge('layout');

		//local view variables, lazy rendering
		$view->head = View::forge('head', array('title' => 'Home'));
		$view->header = View::forge('header', array('site_title' => 'My Website'));
		$view->content = View::forge('content', array('username' => 'Joe14', 'title' => 'Home'));
		$view->footer = View::forge('footer', array('site_title' => 'My Website'));

		// return the view object to the Request
		return $view;
	}
}
```

See the [View Class in the classes section](docs__classes__view.md) for View's function descriptions.

### Passing functions to views

To pass a View specific function from your code to your View, you use an anonymous function or [Closures](http://www.php.net/manual/functions.anonymous.php):

```
// Controller action
public function action_index()
{
	// construct a view object
	$view = \View::forge('page/index');

	// set a closure that returns a value
	$view->somevar = function() { return "somevalue"; };

	// this works the same
	$view->set('othervar', function() { return "othervalue"; });

	// for closures with arguments, use set_safe to prevent encoding
	$view->set_safe('echo_upper', function($string) { echo strtoupper($string); });
}

// Which you can then use in your view:
echo $somevar, $othervar;   // Outputs: "somevalue" "othervalue"
$echo_upper('this string'); // Outputs: "THIS STRING"
```

Closures are also treated like variables when it comes to filtering.
If you have a closure that returns a value, use the `set()` method, so the
value will be encoded according to your filtering setting. If you have a closure that
will be used as a modifier, like in the example above, or you have a closure that returns
a value that should not be encoded, use the `set_safe()` method, or pass `false`
as the third parameter of `set()`.

For legacy applications that expect a closure to never be filtered, edit your applications
**config.php** configuration file, add the following key:

```
/**
 * Whether to filter closures as well
 */
'filter_closures'  => false,
```

### Wrap your view in a layout

To wrap your view in a layout easily, we provide a [Template Controller](docs__general__controllers__template.md).
