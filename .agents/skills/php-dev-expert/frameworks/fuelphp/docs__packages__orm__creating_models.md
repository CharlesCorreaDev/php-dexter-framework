# Creating models - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/creating_models.html

---

## Orm

Orm is short for [Object
Relational Mapper](http://en.wikipedia.org/wiki/Object_relational_mapper) which does 2 things: it maps your database table rows to objects and it allows you
to establish relations between those objects.  
It follows closely the [Active Record Pattern](http://en.wikipedia.org/wiki/Active_record_pattern), but was also influenced by other systems.

## Creating Models

Creating a model takes little time, the convention is to use the `Model_`
prefix for the class (eg Model\_Article using the filename article.php) and thus
place them in `app/classes/model/` but you are free to use
whatever name you choose.

```
class Model_Article extends Orm\Model {}
```

The above only works with the MySQL and MySQLi drivers because it needs to fetch the model
properties from the database. It is however not very efficient and thus **discouraged** to use it this way
because you'll always need that one extra query per model just to fetch the column names.

```
class Model_Article extends Orm\Model
{
	protected static $_properties = array('id', 'title', 'contents', 'publish');
}
```

## Configuration

You can add static properties to the Model to configure it. As we've seen there are none required but
setting `$_properties` is encouraged. All these can be both `public` and
`protected` but may NOT be `private`.  
Note that all configuration properties are prefixed with a single underscore to prevent collisions with
your column names.

### protected static $\_table\_name

When this isn't set the `Model_` prefix is removed from the class name and the class name is
pluralized. Thus "Model\_Article" expects table "articles". If you don't follow this convention you can
change it by setting the `$_table_name` property.

```
class Model_Article extends Orm\Model
{
	protected static $_table_name = 'myarticles';
}
```

### protected static $\_primary\_key

By default this is set to `array('id')`, if you use another column name or multiple primary
keys you need to set this property.

```
class Model_Article extends Orm\Model
{
	protected static $_primary_key = array('aid');
}
```

The primary key must be a real primary key: unique and unchanging. Don't use it for other
purposes (like a foreign key in a one-one relation) as well, that won't work as the PK can't be
changed. The Orm won't check this, and while it might seem to work at first glance: you'll get
into trouble.  
It is not required for the PK to be auto\_increment (though preferred) and you can specify the PK
yourself, but only the first time. Once it's set, it's set.

### protected static $\_properties

There's already a simple example above of adding all model properties, they can also be configured by
using the column name as the key and setting options like type, label and validation.

```
class Model_Article extends Orm\Model
{
	protected static $_properties = array(
		'id', // both validation & typing observers will ignore the PK
		'name' => array(
			'data_type' => 'varchar',
			'label' => 'Article Name',
			'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
			'form' => array('type' => 'text'),
			'default' => 'New article',
		),
		'gender' => array(
			'data_type' => 'varchar',
			'label' => 'Gender',
			'form' => array('type' => 'select', 'options' => array('m' => 'Male', 'f' => 'Female')),
			'validation' => array('required'),
		),
		'created_at' => array(
			'data_type' => 'int',
			'label' => 'Created At',
			'form' => array(
				'type' => false, // this prevents this field from being rendered on a form
			),
		),
		'updated_at' => array('data_type' => 'int', 'label' => 'Updated At')
	);
}
```

Form attributes can be passed in the form of an array as shown in the example.

Validation rules can be passed as either just the rule: `array('required')` or as the rule
with an array of params: `array('min_length' => array(3))` both are shown in the example
above. A full explanation of the Validation class and its rules can be found under
[Core](docs__classes__validation__validation.md). You need to set
[Observer\_Validation](docs__packages__orm__observers__included.md#os_validation) to run validations.

### protected static $\_conditions

By default this property does not exist and Model::condition() returns `array()`, but you can set
on the model if you want any conditions defined on every query run. Currently 'order\_by' and 'where' conditions
are supported.

```
class Model_Article extends Orm\Model
{
	protected static $_conditions = array(
		'order_by' => array('id' => 'desc'),
		'where' => array(
			array('publish_date', '>', 1370721177),
			array('published', '=', 1),
		),
	);
}
```

The `order_by` condition is only applied if no other order by clause is defined.
The `where` conditions are added using `and` to any other defined where clauses.

### protected static $\_has\_one, $\_belongs\_to, $\_has\_many, $\_many\_many

Relating models to each other is explained in [Relating Models](docs__packages__orm__relations__intro.md)

### protected static $\_connection

By default this property does not exist and Model::connection() returns `null`, but you can set
it to any other database name configured in `app/config/db.php`.

### protected static $\_write\_connection

If you have a master/slave setup for your database environment, you can use this property to define the
connection to use for the write master. If configured, the `$_connection` property will be used
to connect to the read slaves.

By default this property does not exist and Model::connection(true) returns either the configured `$_connection`,
or `null`, but you can set it to any other database name configured in `app/config/db.php`.

```
// configuration for single database usage
class Model_Article extends Orm\Model
{
	// 'articles_db' has to be configured in your db.php configuration file
	protected static $_connection = 'articles_db';
}

// configuration for master/slave database usage
class Model_Article extends Orm\Model
{
	// 'articles_master_db' and 'articles_slave_db' have to be configured in your db.php configuration file
	protected static $_write_connection = 'articles_master_db';
	protected static $_connection = 'articles_slave_db';
}
```

Note that relations do not work across connections, so when you define your connections in the model,
make sure your related models have exactly the same configuration, both for reads and writes!

### protected static $\_to\_array\_exclude

If you are writing an API driven application, often you want to limit the columns that are exposed to the
API interface. For example, when exposing a user record, you would not want to expose the user's password,
login hash or salt.

In your model definition, you can add a list of columns to the **to\_array\_exclude** array to exclude
them from being exported using to\_array().

```
class Model_User extends Orm\Model
{
	protected static $_to_array_exclude = array(
		'password', 'login_hash', 'salt'	// exclude these columns from being exported
	);
}
```

By default the to\_array() method exports both column and relation data loaded in the current model object.
Optionally, it allows you to export the custom properties too. Array exclusion works on column names,
custom properties and relations, allowing you to exclude properties from all of them.

### protected static $\_observers

Adding observers is explained in [Observers](docs__packages__orm__observers__intro.md)
