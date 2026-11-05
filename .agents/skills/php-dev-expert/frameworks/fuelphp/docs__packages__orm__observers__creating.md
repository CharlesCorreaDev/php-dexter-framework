# Creating - Observers - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/observers/creating.html

---

### Observers: Creating your own

You can add any class as an observer by adding the full classname (namespace included) to the Observers
property of your model. There's 2 ways of creating classes that can be used as observers:

### Extend the Orm\Observer class

Create a new class that extends `Orm\Observer` and create methods for the events upon which you
want your Observer to act. In the example below you want it to act upon `after_insert`. The
method will be passed the Model instance it is acting upon.

```
class Observer_Something extends Orm\Observer
{

	public function after_insert(Orm\Model $model)
	{
		\Log::info('Succesfully created new object of class '.get_class($model));
	}
}
```

Extensions of the type Orm\Observer are singletons by default, as such you can't use a
method `instance()` or property `$_instance` or it won't work anymore. Because of this
methods may be both static or non-static.

### Have an orm\_notify() method

When you extend the `Orm\Observer` class it inherits an `orm_notify()` method that
will check if there's a method that matches the event and call it when possible. But you can use any
class as an observer as long as it has an `orm_notify()` method. That will be called on events
and be passed the event name and a Model instance.

```
class Some_Other_Class
{

	// it may have many methods and properties before or after the orm_notify method

	public static function orm_notify(Orm\Model $model, $event)
	{
		\Log::info('I was notified of the event '.$event.' on a Model of class '.get_class($model));
	}
}
```

### Event names

- `after_create`, called by the \_\_construct() method once the object was created
- `after_load`, called by the \_\_construct() method once an object was loaded from the database
- `before_save`, called by the save() method before anything is done
- `after_save`, called by the save() method after it has completed
- `before_insert`, called when an object is first saved to the database
- `after_insert`, called after an object is first saved to the database
- `before_update`, called when an object is saved to the database (except for the first time)
- `after_update`, called after an object is saved to the database (except for the first time)
- `before_delete`, called when you delete an object from the database
- `after_delete`, called after you delete an object from the database
- `after_clone`, called after an object was successfully cloned

`before_insert` and `before_update` are triggered *only* if the object has been changed. If you need to trigger an event even if the object has not been changed (ex.: to handle $\_FILES datas), you should use `before_save`.
