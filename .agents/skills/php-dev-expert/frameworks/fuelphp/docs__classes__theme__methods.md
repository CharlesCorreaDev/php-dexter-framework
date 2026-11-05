# Theme Methods - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/theme/methods.html

---

#### instance($name = '\_default\_', array $config = array())

The **instance** method acts as a multiton. It will return the instance identified by $name. If this
instance does not exist, it will create a new Theme instance, using the configuration array passed. If no
parameters are passed, instance will create the default Theme instance, using the default configuration
specified in the theme config file.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$name` | *string* | ``` '_default_' ``` | The Theme class instance name. | | `$config` | *array* | ``` array() ``` | The theme instance configuration. Will be ignored if the instance already exists. | |
| Returns | A Theme instance |
| Example | ``` // Get the default instance $theme = \Theme::instance();  // Get a custom instance $theme = \Theme::instance( 	'custom', 	array( 		'active' => 'custom', 		'view_ext' => '.twig' 	) ); ``` |
