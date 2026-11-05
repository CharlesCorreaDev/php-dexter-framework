# Event - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/event.html

---

#### register($event, $callback)

The **register** method allows files to register an object that will be run when the `trigger` method is called.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$event` | *required* | The event you are registering your code to. | | `$callback` | *required* | The callback method. | |
| Returns | boolean |
| Example | ``` Event::register('user_login', 'Class::method'); ``` |
