# Crypt Advanced - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/crypt/advanced.html

---

#### forge($config = array())

The **forge** method allows you to manually instantiate a crypt instance.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$name` | ``` null ``` | Name of the instance requested. If it doesn't exist, it will be forged. If no name is given, the default instance is returned. | | `$config` | ``` array() ``` | You can pass a custom configuration when forging a new crypt instance. The configuration array has the same structure as the crypt configuration file. The custom config will be merged with a default configuration as documented [here](docs__classes__crypt__config.md) and with the configuration in your crypt config file, so you only have to pass values you want changed. | |
| Returns | object - The instantiated crypt object. |
| Example | ``` // instantiate a crypt object with a custom key value $crypt = \Crypt::forge(array( 	'crypto_key' => 'kj$Huhliuh7p*UHHhdas6%#@', ));  // and encode some data with it $encoded = $crypt->encode('This is a very secure piece of data!'); ``` |
