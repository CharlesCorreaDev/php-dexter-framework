# Template Controller - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/controllers/template.html

---

## Template Controller

### What is a template controller?

A Template Controller is an extension of the Base Controller which has template support built in using some pre-defined before() and after() methods. Basically it can be used to wrap
your view in a layout with a header, footer, sidebar, etc.

### Using the template controller

Like all Controllers you create a class in the `fuel/app/classes/controller` directory. They need to extend the `Controller_Template` class and are prefixed by default by "Controller\_". Below is an example of the controller "example":

**Please note:** by default, all methods of a class that extends Controller\_Template will use the template.
  
However, it is possible to [omit methods](#omit_methods) from the template.

```
class Controller_Example extends Controller_Template
{
	public function action_index()
	{
		$data = array();
		$this->template->title = 'Example Page';
		$this->template->content = View::forge('test/index', $data);
	}
}
```

### Using the template controller with before() and/or after()

**Please note:** if you have a before() method in your template controller extension you
**must** add `parent::before();` to that method or the `$this->template` will
not be available. **Make after() compatible** with that of the Controller\_Template:
use `after($response)` instead of just after().

```
class Controller_Example extends Controller_Template
{
	/**
	 * Your before method
	 */
	public function before()
	{
		parent::before(); // Without this line, templating won't work!

		// do stuff
	}

	/**
	 * Make after() compatible with Controller_Template by adding $response as a parameter
	 */
	public function after($response)
	{
		$response = parent::after($response); // not needed if you create your own response object

		// do stuff

		return $response; // make sure after() returns the response object
	}

	public function action_index()
	{
		$data = array();
		$this->template->title = 'Example Page';
		$this->template->content = View::forge('test/index', $data);
	}
}
```

### Example template

The template file is a great place to call up your JS, CSS, etc, structure your HTML and call view partials. It allows you to give your output
structure. It is just a view file, by default the Template Controller will look here: `fuel/app/views/template.php`.

```
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

	<?php echo Asset::css('main.css'); ?>
</head>
<body>
	<div id="wrapper">
		<h1><?php echo $title; ?></h1>

		<div id="content">
			<?php echo $content; ?>
		</div>
	</div>
</body>
</html>
```

### Changing the default template file

You can easily change the default `APPPATH/views/template.php` file to something different.  
You must set the public variable `$template` (note: you don't need .php extension here) to something different, example:

```
class Controller_Example extends Controller_Template
{

	public $template = 'template_admin';

	public function action_index()
	{
		$this->template->title = 'Example Page';
		$this->template->content = View::forge('test/index', $data);
	}
}
```

### Omit methods from the Template Controller

By default, all methods of a class that extends `Controller_Template` will use the template.  
If you want to omit methods from the template, you can do this by returning something else in a
`Response` object. That will overwrite the default template output.

```
class Controller_Example extends Controller_Template
{
	public $template = 'template_admin';

	public function action_index()
	{
		$this->template->title   = 'Example Page';
		$this->template->content = View::forge('test/index', $data);

		// this will show content in template
	}

	public function action_example()
	{
		$data['title']   = "Example Page";
		$data['content'] = "Don't show me in the template";

		// returned Response object takes precedence and will show content without template
		return new Response(View::forge('index/test', $data));
	}
}
```
