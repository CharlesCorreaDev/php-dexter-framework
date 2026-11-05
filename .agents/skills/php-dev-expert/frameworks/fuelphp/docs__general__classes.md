# Classes - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/classes.html

---

## Initializing your class

It is possible to have Fuel's autoloader perform certain automated tasks once a class is loaded,
sort of like what `__construct()` does for instances of a class. You do this by adding
a public static `_init()` method to the class.

```
class Example {
	public static function _init()
	{
		// this is called upon loading the class
	}
}
```

If a loaded class has its own `_init()` method and a parent must be loaded
alongside it, that parent's init method isn't called unless you call it using
`parent::_init();`
