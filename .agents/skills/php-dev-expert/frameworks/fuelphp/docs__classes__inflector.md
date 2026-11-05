# Inflector - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/inflector.html

---

#### ascii($str, $allow\_non\_ascii = false)

The **ascii** method allows you to translate a string to a 7-bit ASCII string. This method only works with UTF-8.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$str` | *Required* | The string to translate. | | `$allow_non_ascii` | ``` false ``` | Whether to allow non ASCII chars. | |
| Returns | string |
| Example | ``` echo Inflector::ascii('Inglés'); // returns Ingles ``` |
