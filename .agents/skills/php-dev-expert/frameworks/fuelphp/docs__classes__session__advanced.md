# Session Advanced - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/session/advanced.html

---

#### forge($config = array())

The **forge** method allows you to manually instantiate a session driver.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$config` | *optional* | You can select the driver of your choice by simply passing the name of the driver to the forge method. If you require more custom configuration, define a $config array, using the parameters documented on the [configuration](docs__classes__session__config.md) page. Configuration settings you pass here will override the ones defined in the configuration file. | |
| Returns | object - The instantiated session object. |
| Example | ``` // instantiate a database session $session = Session::forge('db');  // get the counter from the session $counter = $session->get('counter');  // if not present, set a default if ($counter === false) { 	$counter = 0; }  // write the counter back $session->set('counter', $counter);  // no need to explicitly write, Fuel will take care of that...  // you can also load a driver with settings that will override the defaults in the config file $session = Session::forge( array('driver' => 'memcached', 'expiration_time' => 3600, 'memcached' = array('cookie_name' => 'appcookie')) ); ``` |

`Please note:` when you want to use multiple session drivers at the same time, the `cookie_name` for each of these driver instances must be unique.
If you attempt to load a driver using a `cookie_name` that is already in use, and the instance using it uses the same driver as you are trying to load, that instance is reused.
If the instance is using a different driver, an exception is thrown.
