# Belongs To - Relations - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/relations/belongs_to.html

---

## Orm

Orm is short for [Object
Relational Mapper](http://en.wikipedia.org/wiki/Object_relational_mapper) which does 2 things: it maps your database table rows to objects and it allows you
to establish relations between those objects.  
It follows closely the [Active Record Pattern](http://en.wikipedia.org/wiki/Active_record_pattern), but was also influenced by other systems.

## Relations: Belongs To

Has the primary key of the relation kept in its table, belongs to 1 related object. This is the other
side of a [HasOne](docs__packages__orm__relations__has_one.md) or [HasMany](docs__packages__orm__relations__has_many.md) relation.

### Example

Let's say we have a model `Model_Comment` and it *belongs to* a `Model_Post`
(which in turn *has many* comments) the ID of the Model\_Post is saved with the Model\_Comment
instance in its own table. This means the `comments` table will have a column
`post_id` (or something else you configure). If you keep to the defaults all you need to do
is add `'post'` to the `$_belongs_to` static property of the Model\_Comment:

```
protected static $_belongs_to = array('post');
```

Below are examples for establishing and breaking belongs-to relations:

```
// both main and related object are new:
$comment = new Model_Comment();
$comment->post = new Model_Post();
$comment->save();

// both main and related object already exist
$comment = Model_Comment::find(6);
$comment->post = Model_Post::find(1);
$comment->save();

// break the relationship established above
$comment = Model_Comment::find(6);
$comment->post = null;
$comment->save();
```

### Full config example with defaults as values

```
// in a Model_Comment which belong to a post
protected static $_belongs_to = array(
	'post' => array(
		'key_from' => 'post_id',
		'model_to' => 'Model_Post',
		'key_to' => 'id',
		'cascade_save' => true,
		'cascade_delete' => false,
	)
);
```
