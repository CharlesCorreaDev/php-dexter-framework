# Many to Many - Relations - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/relations/many_many.html

---

## Orm

Orm is short for [Object
Relational Mapper](http://en.wikipedia.org/wiki/Object_relational_mapper) which does 2 things: it maps your database table rows to objects and it allows you
to establish relations between those objects.  
It follows closely the [Active Record Pattern](http://en.wikipedia.org/wiki/Active_record_pattern), but was also influenced by other systems.

## Relations: Many to Many

Specifies a many-to-many relationship to another model. The target model will have the same type of
relationship in the other direction. To allow for these relations you need a table in between with just
the 2 IDs from both sides of the relation as dual-primary key.

#### Keeping values with the relationship

If you need to save values with the relationship table you don't want to use ManyMany but create a model
in between instead which belongs to both sides of what you would otherwise call the ManyMany
relationship. It is described under "[Usage with nested
relationships](docs__packages__orm__relations__intro.md#usage_nested_rels) how you can fetch all this.

### Configuration Options

ManyMany relations have three additional configuration options compared to the others. All of these
are still optional when using the most common naming conventions.

| Option | Default | Notes |
| --- | --- | --- |
| table\_through | Calculated from model\_to and model\_from alphabetically ordered | This is the table that connects the 2 models and has both their IDs in it. For 2 models like Model\_User and Model\_Post it will be named posts\_users by default (both plural). |
| key\_through\_from | Calculated from the current model name | The key that matches the current model's primary key. If your current model is Model\_Post this will be post\_id by default |
| key\_through\_to | Calculated from the related model name | The key that matches the related model's primary key. If your related model is Model\_User this will be user\_id by default |

#### Ordering on a column in the through table

In addition to the normal default order you can define in a relationship definition, you can also
define now the records from `table_through` need to be ordered:

```
protected static $_many_many = array(
	'users' => array(
		'table_through' => 'posts_users', 	// both models plural without prefix in alphabetical order
		'conditions' => array(
		   'order_by' => array(
				'posts_users.status' => 'ASC'	// define custom through table ordering
			),
		),
	)
);
// other fields that may be required have been ommitted for this example
```

The conditions array can also contain where clauses, which will act as a permanent filter on the related table results.

### Example

Let's say we have a model `Model_Post` and it *has many and belongs to many*
`Model_User`s. The ID of the Model\_Post is along with the ID of the Model\_User in a table
called `posts_users` (default order is alphabetical). That table has just 2 columns:
`post_id` and `user_id` which are together the primary key of that table.  
If you keep to the defaults all you need to do is add `'users'` to the
`$_many_many` static property of the Model\_Post:

```
protected static $_many_many = array('users');
```

And you need to add a table like this one to your SQL:

```
CREATE TABLE IF NOT EXISTS `posts_users` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`,`user_id`)
);
```

Below are examples for establishing and breaking has-many relations:

```
// both main and related object are new:
$post = new Model_Post();
$post->users[] = new Model_User();
$post->save();

// both main and related object already exist
$user = Model_User::find(8);
$user->posts[1] = Model_Post::find(1);
$user->save();

// break the relationship established above
$post = Model_Post::find(1);
unset($post->users[8]);
$post->save();
```

### Full config example with defaults as values

```
// in a Model_Post which has and belongs to many Users
// = multiple posts per user and multiple users (authors) per post
protected static $_many_many = array(
	'users' => array(
		'key_from' => 'id',
		'key_through_from' => 'post_id', // column 1 from the table in between, should match a posts.id
		'table_through' => 'posts_users', // both models plural without prefix in alphabetical order
		'key_through_to' => 'user_id', // column 2 from the table in between, should match a users.id
		'model_to' => 'Model_User',
		'key_to' => 'id',
		'cascade_save' => true,
		'cascade_delete' => false,
	)
);
```
