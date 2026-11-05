# Num - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/num.html

---

#### bytes($size = 0)

The **bytes** method converts a (file size) number to a byte value. File sizes are
defined in the format: SB, where S is the size (1, 8.5, 300, etc.) and B is the byte unit
(K, MiB, GB, etc.). All valid byte units are defined in *core/lang/en/byte\_units.php*

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$size` | *string|int|float* | ``` 0 ``` | The string to convert. | |
| Returns | float |
| Example | ``` echo Num::bytes('200K');  // 204800 echo Num::bytes('5MiB');  // 5242880 echo Num::bytes('1000');  // 1000 echo Num::bytes('2.5GB'); // 2684354560 ``` |
