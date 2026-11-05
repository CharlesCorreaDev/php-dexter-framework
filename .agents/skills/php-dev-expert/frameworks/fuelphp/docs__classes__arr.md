# Arr - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/arr.html

---

#### is\_multi($arr, $all\_keys = false)

The **is\_multi** method checks if the array passed is multi-dimensional array or not.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$arr` | *required* | The array to check. | | `$all_keys` | ``` false ``` | Check that all elements are arrays. | |
| Returns | bool |
| Example | ``` // Single array $arr = array('one' => 1, 'two' => 2); echo Arr::is_multi($arr); // Result: false  // Multi-dimensional array $arr = array('one' => array('test' => 1), 'two' => array('test' => 2), 'three' => array('test' => 3)); echo Arr::is_multi($arr); // Result: true  // Multi-dimensional array with elements check $arr = array('one' => array('test' => 1), 'two' => array('test' => 2), 'three' => 3);  echo Arr::is_multi($arr, false); // Result: true echo Arr::is_multi($arr, true);  // Result: false ``` |
