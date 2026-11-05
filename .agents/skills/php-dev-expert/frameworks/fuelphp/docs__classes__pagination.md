# Pagination - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/pagination.html

---

#### forge($name = 'default', $config = array())

The **forge** method allows you to create a new pagination instance, and configure it by passing an array.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$name` | *Required* | The name of the instance to be created. If no name is given, the 'default' instance is created. | | `$config` | ``` array() ``` | The configuration array. | |
| Returns | Pagination |
| Example | ``` // create a new pagination instance $pagination = Pagination::forge('mypagination', array( 	'pagination_url' => 'http://docs.fuelphp.com/', 	'uri_segment' => 2, 	'total_items' => 10, 	'per_page' => 20, )); ``` |
