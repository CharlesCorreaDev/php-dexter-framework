# Date - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/date.html

---

#### forge($timestamp = null, $timezone = null)

The **forge** method returns a new date object.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$timestamp` | ``` null ``` | The timestamp to set the date object to | | `$timezone` | ``` null ``` | The timezone in which the time is set | |
| Returns | Fuel\Core\Date Object |
| Example | ``` print_r(Date::forge(1294176140));  // Returns Fuel\Core\Date Object (     [timestamp:protected] => 1294176140     [timezone:protected] => UTC ) ``` |
