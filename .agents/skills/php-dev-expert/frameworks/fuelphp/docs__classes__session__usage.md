# Session Usage - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/session/usage.html

---

#### instance($instance = null)

The **instance** method returns the default session instance, or a specific instance, identified by name.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$instance` | ``` null ``` | Cookiename (as defined in config/session.php) that identifies the required session instance. | |
| Returns | mixed - session object, or `false` in case the requested instance does not exist. |
| Example | ``` // get the default session instance (identified by the 'driver' configuration setting). $session = Session::instance();  // get a specific session instance $session = Session::instance('myappcookie'); ``` |
