# Has Many - Relations - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/relations/has_many.html

---

## Orm

Orm is short for [Object
Relational Mapper](http://en.wikipedia.org/wiki/Object_relational_mapper) which does 2 things: it maps your database table rows to objects and it allows you
to establish relations between those objects.  
It follows closely the [Active Record Pattern](http://en.wikipedia.org/wiki/Active_record_pattern), but was also influenced by other systems.

## Relations: Has Many

Specifies a one-to-many relationship to another model. The target model must include a
"[Belongs To](docs__packages__orm__relations__belongs_to.md)" reference to the current model to allow the inverse
relationship.

### Example

Let's say we have a model `Model_Post` and it *has many* `Model_Comment`s
(which in turn *belong to* the post). The ID of the Model\_Post is saved with the Model\_Comment
instance in its own table. This means the `comments` table will have a column
`post_id` (or something else you configure), while the posts table won't mention the comments.
If you keep to the defaults all you need to do is add `'comments'` to the
`$_has_many` static property of the Model\_User:

```
protected static $_has_many = array('comments');
```

Below are examples for establishing and breaking has-many relations:

```
// both main and related object are new:
$post = new Model_Post();
$post->comments[] = new Model_Comment();
$post->save();

// both main and related object already exist
$post = Model_Post::find(1);
$post->comments[6] = Model_Comment::find(6); // assigning it to comments[6] is not required but recommended
$post->save();

// break the relationship established above
$post = Model_Post::find(1);
unset($post->comments[6]);
$post->save();
```

### Full config example with defaults as values

```
// in a Model_Post which has many comments
protected static $_has_many = array(
	'comments' => array(
		'key_from' => 'id',
		'model_to' => 'Model_Comment',
		'key_to' => 'post_id',
		'cascade_save' => true,
		'cascade_delete' => false,
	)
);
```
