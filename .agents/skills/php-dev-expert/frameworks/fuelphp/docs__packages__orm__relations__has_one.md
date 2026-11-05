# Has One - Relations - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/relations/has_one.html

---

## Orm

Orm is short for [Object
Relational Mapper](http://en.wikipedia.org/wiki/Object_relational_mapper) which does 2 things: it maps your database table rows to objects and it allows you
to establish relations between those objects.  
It follows closely the [Active Record Pattern](http://en.wikipedia.org/wiki/Active_record_pattern), but was also influenced by other systems.

## Relations: Has One

Specifies a one-to-one relationship to another model. The target model must include a
"[Belongs To](docs__packages__orm__relations__belongs_to.md)" reference to the current model to allow the inverse
relationship.

### Example

Let's say we have a model `Model_User` and it *has one* a `Model_Profile`
(which in turn *belongs to* the user). The ID of the Model\_User is saved with the Model\_Profile
instance in its own table. This means the `profiles` table will have a column
`user_id` (or something else you configure), while the user table won't mention the profile.
If you keep to the defaults all you need to do is add `'profile'` to the
`$_has_one` static property of the Model\_User:

```
protected static $_has_one = array('profile');
```

Below are examples for establishing and breaking has-one relations:

```
// both main and related object are new:
$user = new Model_User();
$user->profile = new Model_Profile();
$user->save();

// both main and related object already exist
$user = Model_User::find(6);
$user->profile = Model_Profile::find(1);
$user->save();

// break the relationship established above
$user = Model_User::find(6);
$user->profile = null;
$user->save();
```

### Full config example with defaults as values

```
// in a Model_User which has one profile
protected static $_has_one = array(
	'profile' => array(
		'key_from' => 'id',
		'model_to' => 'Model_Profile',
		'key_to' => 'user_id',
		'cascade_save' => true,
		'cascade_delete' => false,
	)
);
```
