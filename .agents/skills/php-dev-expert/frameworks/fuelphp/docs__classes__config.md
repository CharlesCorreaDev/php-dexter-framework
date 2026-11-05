# Config - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/config.html

---

#### get($item, $default = null)

The **get** method returns the desired config item. If the item does not exist then `$default` is returned. If the item you are retrieving is a group, then the entire group is returned.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$item` | *required* | The name of the item to retrieve. Groups and multi-dimensional arrays can be accessed by separating the levels by a dot (`.`) | | `$default` | `null` | (Optional) The default value to return if `$item` is not found. | |
| Returns | Either `$item`, or `$default` if `$item` does not exist. If `$item` is a group than an `array` containing the entire group. |
| Example | ``` // Outputs the current language set in config.php echo Config::get('language');  // By default a non-existent item will return null if (Config::get('items_to_display') === null) { 	throw new Exception('You must set the number of items to display in config.php'); }  // You can set a default for non-existent items as well $items_to_display = Config::get('items_to_display', 10);  // This will load in the entire db group, which is the contents of config/db.php $db_configs = Config::get('db');  // This will get which db connection is set to 'active' in the db config $active_db = Config::get('db.active');  // You can go multiple levels deep as well. // This will fetch the hostname of the 'dev' db group $dev_host = Config::get('db.dev.connection.hostname'); ``` |
