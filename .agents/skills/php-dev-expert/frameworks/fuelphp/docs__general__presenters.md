# Presenters - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/presenters.html

---

## Presenters

### What is a Presenter?

A Presenter is a class that contains the logic that is needed to generate your view (or views). When the controller
is done with your user input and is done with whatever actions it needed to take, it turns execution over to
the Presenter to retrieve and process whatever data is needed for the view. A Presenter shouldn't do any data manipulation
but can contain database calls and any other retrieval or preparation operations needed to generate the View's
data.

Presenters are optional. If you don't need them, you can use [Views](docs__general__views.md) directly, and keep the pre-processing logic in your controller.

### Creating a Presenter

First we'll create an empty Presenter class in `APPPATH/classes/presenter/index.php`:

```
class Presenter_Index extends Presenter
{
}
```

Then you create the view that is associated with the presenter in `app/views/index.php`:

```
<h1><?php echo $title; ?></h1>

<ul>
<?php
	foreach ($articles as $a)
	{
		echo '<li>'.$a->title.'</li>';
	}
?>
</ul>
```

**On view names**  
A Presenter and its view are by default expected to share the same name. Thus a
Presenter `Presenter_Index` expects the view to be in `app/views/index.php`. And underscores
work here the same as with classes, which means that the view for `Presenter_Some_Thing` is expected
to be in `app/views/some/thing.php`.  
This default can be overwritten by setting a non-static `$_view` property in your Presenter with the
View name (without its suffix), or passing a custom View name when forging the Presenter.

And last we'll create the Presenter from the controller:

```
$presenter = Presenter::forge('index');
```

Now we have everything setup; however, there is still no data passed to the view. It still needs to get a
`$title` string and `$articles` array passed to it. We do this by adding a `view()` method
to the Presenter which will assign this data:

```
class Presenter_Index extends Presenter
{

	public function view()
	{
		$this->title = 'Testing this Presenter thing';

		$this->articles = Model_Articles::find('all');
	}
}
```

And you're done.

In your code, Views and Presenters are interchangeable. You can return Presenters from your controller actions,
you can set a Presenter as a Theme partial, or assign it to a section of your page template. The basic API of the
Presenter is compatible with the View. This makes it easy to swap a View for a Presenter in your code without having
to do a major code overhaul.

### Passing functions to views

To pass a View specific function from your Presenter to your View, you use an anonymous function or [Closures](http://www.php.net/manual/functions.anonymous.php):

```
// In the Presenter
class Presenter_Index extends Presenter
{

	public function view()
	{
		// set a closure that returns a value
		$this->somevar = function() { return "somevalue"; };

		// this works the same
		$this->set('othervar', function() { return "othervalue"; });

		// for closures with arguments, use set_safe to prevent encoding
		$this->set_safe('echo_upper', function($string) { echo strtoupper($string); });
	}
}

// Which you can then use in your presenter view:
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
