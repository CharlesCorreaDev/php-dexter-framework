# CRUD - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/crud.html

---

## Create

```
// option 1
$new = new Model_Example();
$new->property = 'something';
$new->save();

// option 2, use forge instead of new
$new = Model_Example::forge();
$new->property = 'something';
$new->save();
```

After `save()` the model has been saved to the database and if you're using an
`auto_increment` primary key it will automatically be set on the instance after successful
saving it.

You can also set properties on the model from an array:

```
$props = array('property' => 'something');

// using "new"
$new = new Model_Example($props);
$new->save();

// option 2, use forge instead of new
$new = Model_Example::forge($props);
$new->save();
```
