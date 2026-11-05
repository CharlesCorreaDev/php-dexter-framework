# Log - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/log.html

---

#### info($msg, $method = null)

The **info** method allows you to write a log entry with the **$level** "Info".

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$msg` | *required* | The message for the info log entry. | | `$method` | ``` null ``` | Information about the method which created the log entry. | |
| Returns | boolean |
| Example | ``` $var = 1; Log::info('Application started (with $var = '.$var.')', 'my_init_function()'); ``` |
