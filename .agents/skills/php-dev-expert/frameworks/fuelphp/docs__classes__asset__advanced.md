# Asset Advanced - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/asset/advanced.html

---

#### forge($config = array())

The **forge** method allows you to manually instantiate an asset instance.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$name` | ``` null ``` | Name of the instance requested. If it doesn't exist, it will be forged. If no name is given, the default instance is returned. | | `$config` | ``` array() ``` | You can pass a custom configuration when forging a new asset instance. The configuration array has the same structure as the asset configuration file. The custom config will be merged with a default configuration as documented [here](docs__classes__asset__config.md) and with the configuration in your asset config file, so you only have to pass values you want changed. | |
| Returns | object - The instantiated asset object. |
| Example | ``` // instantiate a asset object with a custom search path $asset = Asset::forge('custom', array('paths' => array('custom/assets/'));  // define some css files $asset->css(array('header.css', 'footer.css'), array(), 'layout', false); ``` |
