# Included - Observers - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/observers/included.html

---

### Observers: Included observers

Included observers are listed below:

- [Observer\_Self](#os_self)
- [Observer\_CreatedAt](#os_created)
- [Observer\_UpdatedAt](#os_updated)
- [Observer\_Validation](#os_validation)
- [Observer\_Typing](#os_typing)
- [Observer\_Slug](#os_slug)

#### Observer\_Self

While not exactly good practice, in some cases it's probably cleanest to just have the event method with
your model. That's where the Observer\_Self comes in, it checks if you model has a method named after
the event and prefixed with `_event_`. For example for the `after_save` event you need
to add a public method `_event_after_save()` to your model so it can have the observer call on
the model itself.

```
// Just add the Observer
protected static $_observers = array('Orm\\Observer_Self');

// But if you only observe some events you can optimize by only adding those
protected static $_observers = array('Orm\\Observer_Self' => array(
	'events' => array('after_save', 'before_insert')
));
```

#### Observer\_CreatedAt

This observer acts only upon `before_insert` and expects your model to have a
`created_at` property which will be set to the Unix timestamp when saving for the first time.

```
// Just add the Observer
protected static $_observers = array('Orm\\Observer_CreatedAt');

// Adding it with config:
// - only needs to run on before_insert
// - use mysql timestamp (uses UNIX timestamp by default)
// - use just "created" instead of "created_at"
protected static $_observers = array(
	'Orm\\Observer_CreatedAt' => array(
		'events' => array('before_insert'),
		'mysql_timestamp' => true,
		'property' => 'created',
		'overwrite' => true,
	),
);
```

If you want to be able to set the created\_at timestamp in your code, set the 'overwrite' property to false.
This will cause the observer to keep the value you have set manually.

#### Observer\_UpdatedAt

This observer acts only upon `before_save` or `before_update` and expects your model to have a
`updated_at` property which will be set to the Unix timestamp when saving (also during the
first time).

When you use `before_save`, the updatedAt column will be updated on both an insert and an update.
When you use `before_update`, the updatedAt column will be updated only on updates.

```
// Don't use this, it will make it run twice!
protected static $_observers = array('Orm\\Observer_UpdatedAt');

// Adding it with config:
// - only needs to run on before_save
// - use mysql timestamp (uses UNIX timestamp by default)
// - use just "updated" instead of "updated_at"
protected static $_observers = array(
    'Orm\\Observer_UpdatedAt' => array(
        'events' => array('before_save'),
        'mysql_timestamp' => true,
        'property' => 'updated',
        'relations' => array(
            'my_relation',
        ),
    ),
);
```

By default the timestamp will not be updated if a child object has changed. This behaviour can be changed
by adding the names of the relations to the optional `relations` property.

For example, if you have a `Model_Blog` that has many `Model_Post`s, with the slug observer applied to the blog,
then update a post through the blog's relations the blog's updated\_at will not be triggered.

```
$blog->post[0]->title = 'foobar';
$blog->save();
```

With the post relation specified in the `relations` property
the updated at observer will update the timestamp in the blog if the post is edited.

If a relation is not loaded then it will be ignored by the updated at observer.

#### Observer\_Validation

This observer can act on `before_insert` and/or `before_update`, or on `before_save`.
Do not use both `before_save` and one of the others, that would cause your rules to be called twice.
It is used to prevent the model from saving if validation rules fail. It uses the [Fieldset](docs__classes__fieldset__fieldset.md) class
and can also generate the form for you.

The primary key(s) are not added to Validation nor to the Form as they're not editable
and will be auto-increment most of the time. In cases where you set it upon creation and need
validation you'll need to add the field manually.

The observer can be loaded as follows:

```
// Just add the Observer, and define the required event
protected static $_observers = array('Orm\\Observer_Validation' => array(
	'events' => array('before_save')
));
```

Do not define this observer without event types, as that will cause it to be called twice!

Validation rules should be defined in your model in `$_properties`. This is demonstrated
in [Creating Models](docs__packages__orm__creating_models.md#propperties). After you have added the
Validation Observer, the Orm\ValidationFailed exception will be thrown when the model's data fails
to validate before save. As such, you must try/catch your calls to the `save` function of
a model.

More extensive example functionality/scaffolding is shown below:

```
class Controller_Articles extends Controller
{
	public function action_create()
	{
		$view = View::forge('articles/create');
		if (Input::param() != array())
		{
			try
			{
				$article = Model_Article::forge();
				$article->name = Input::param('name');
				$article->url = Input::param('url');
				$article->save();
				Response::redirect('articles');
			}
			catch (Orm\ValidationFailed $e)
			{
				$view->set('errors', $e->getMessage(), false);
			}
		}
		return Response::forge($view);
	}

	public function action_edit($id = false)
	{
		if ( ! ($article = Model_Article::find($id))
		{
			throw new HttpNotFoundException();
		}

		$view = View::forge('articles/edit');
		if (Input::param() != array())
		{
			try
			{
				$article->name = Input::param('name');
				$article->url = Input::param('url');
				$article->save();
				Response::redirect('articles');
			}
			catch (Orm\ValidationFailed $e)
			{
				$view->set('errors', $e->getMessage(), false);
			}
		}
		return Response::forge($view);
	}

	public function action_delete($id = null)
	{
		if ( ! ($article = Model_Article::find($id))
		{
			throw new HttpNotFoundException();
		}
		else
		{
			$article->delete();
		}
		Response::redirect('articles');
	}

}
```

By default, the HTML representation is passed as message to the ValidationFailed exception object, ready for
display in your view. There are however cases where you would like to have access to the individual error
messages, for example because you're in a RESTful API call, and you want to return the messages as JSON:

```
class Controller_Articles extends Controller_Rest
{
	public function action_create()
	{
		$view = View::forge('articles/create');
		if (Input::param() != array())
		{
			try
			{
				$article = Model_Article::forge();
				$article->name = Input::param('name');
				$article->url = Input::param('url');
				$article->save();
				Response::redirect('articles');
			}
			catch (Orm\ValidationFailed $e)
			{
				$errors = array();
				foreach ($e->get_fieldset()->validation()->error() as $error)
				{
					$errors[] = array(
						'field' => $error->field,					// the field that caused the error
						'value' => $error->value,					// the value that is in error
						'message' => trim($error->get_message(false, '\t', '\t')),	// the error message
						'rule' => $error->rule,						// the rule that failed
						'params' => $error->params,					// any parameters passed to the rule
					);
				}
				return $errors;
			}
		}

		return Response::forge($view);
	}
}
```

As this uses the [Fieldset](docs__classes__fieldset__fieldset.md) class to perform validation,
it can also create forms for a model. In the following example, the create and edit forms are
defined in a common view however you can just as easily define it in the model and obtain an
instance of it in the view using `Fieldset::instance()`.

```
// use an instance of Model_Article to create the form, you can also pass the classname
$fieldset = Fieldset::forge()->add_model($article);

// Populate the form with values from the model instance
// passing true will also make it use POST/PUT to repopulate after failed save
$fieldset->populate($article, true);

// The fieldset will be build as HTML when cast to string
echo $fieldset;
```

#### Observer\_Typing

This is for 2 things: type enforcement for input and type casting for output from the DB. That means
that when you're saving the Typing observer will try to cast the input value to the expected type and
throw an exception when it can't. And when you're retrieving DB data, normally it would all be strings
(even integers and floats) but with the typing observer those will be cast to their scalar type.

In addition to the above the Typing observer also adds support for serialized & json fields. Both should
be string type fields ("text" preferably) but will have their value encoded for saving (using
`serialize()` or `json_encode()`) and decoded when retrieving from the DB (using
`unserialize()` or `json_decode()`).

The Observer\_Typing isn't meant as an alternative to validation, don't try to use it as
such. Neither are the exceptions thrown by this observer meant to be read by the visitor of your site,
they're meant to help you debug your code.

```
// Just add the Observer
protected static $_observers = array('Orm\\Observer_Typing');

// But adding it just for these specific events is enough
protected static $_observers = array('Orm\\Observer_Typing' => array(
	'events' => array('before_save', 'after_save', 'after_load')
));
```

For this observer to work you must have your the `$_properties` static variable set in your
model, or not set at all using detection with `DB::list_columns()` (MySQL only!). When
configuring it yourself the following settings are available:

| Param | Valid input | Description |
| --- | --- | --- |
| data\_type | varchar, int, integer, tinyint, smallint, mediumint, bigint, float, double, decimal[:d], text, tinytext, mediumtext, longtext, enum, set, bool, boolean, serialize, encrypt, json, time\_unix, time\_mysql | The SQL data type, **Required** to have the typing observer used on a field. |
| db\_decimals | int | Number of decimals the value in the database has, if different from the specification in "data\_type". |
| null | bool | Whether `null` is allowed as a value, default `true` |
| character\_maximum\_length | int | The maximum number of characters allowed for a string data type (varchar, text, serialized or encrypted result) |
| encryption\_key | string | A custom encryption key to encrypt and decrypt this value. If given, it will replace the "crypto\_key" set in the Crypt config file. |
| min | int | The minimal value for an integer |
| max | int | The maximum value for an integer |
| options | array | Array of valid string values for set or enum data type  **Note:** currently the options themselves cannot contain comma's. |

In case of data\_type "decimal", you can suffix the type with the number of decimals required. If defined,
the value returned is a string, formatted with the defined number of decimal digits, and taking the
current defined locale into account.

By default the Typing observer is locale aware, meaning that it can deal with incoming string values
that use a decimal comma for fields defined as decimal or float, if the current locale defines the
decimal separator as a comma. It will also format outgoing decimal values according to the current
locale settings. You can disable this by defining the "orm.use\_locale" config key, either in your
main config.php file or in a separate orm.php config file, and set it to `false`.

### Observer\_Slug

This observer creates a url safe slug (unique by default) for your model. It works only upon `before_insert`
and expects your model to have a `title` (to create the slug) and a `slug` (to save it) property.

```
// Just add the Observer
protected static $_observers = array('Orm\\Observer_Slug');

// With settings
protected static $_observers = array(
	'Orm\\Observer_Slug' => array(
		'events' => array('before_insert'),
		'source' => 'title',  // property used to base the slug on, may also be array of properties
		'property' => 'slug', // property to set the slug on when empty
		'separator' => '-',   // property to set the separator
		'unique' => true,     // property to require uniqueness or not
	),
);
protected static $_observers = array('Orm\\Observer_Slug' => array('before_insert'));
```

The Observer creates the `slug` from the `title` using [Inflector::friendly\_title()](docs__classes__inflector.md#method_friendly_title) and adds an index, if the slug already exists.

In case of the overwrite property is false, you can assign a slug manually, which won't be overwritten by the Observer. Upon `before_update` the slug gets overwritten with the generated one from the `title` field (no matter overwrite property is false or not), but only in case the slug itself is not changed.
