# Str - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/str.html

---

#### increment($str, $first = 1)

The **increment** method allows you to append a number to the end of a string or increment that number if it already exists.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$string` | *required* | The string to increment. | | `$first` | ``` 1 ``` | The first number to increment with. | |
| Returns | string |
| Example | ``` $string = "filename"; Str::increment($string); // returns filename_1  $string = "filename_1"; Str::increment($string); // returns filename_2  $string = "filename"; Str::increment($string, 3); // returns filename_3 ``` |
