# Cookie - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/cookie.html

---

#### get($name = null, $default = null)

The **get** method allows you to read a $\_COOKIE variable. If no name given, all cookies are returned.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$name` | *Optional* | The key in the $\_COOKIE array. | | `$default` | ``` null ``` | What value should be returned if the array item is not found? | |
| Returns | mixed |
| Example | ``` $theme = Cookie::get('theme', 'blue'); ``` |
