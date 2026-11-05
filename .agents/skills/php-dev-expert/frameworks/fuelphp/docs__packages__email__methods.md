# Methods - Email Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/email/methods.html

---

#### forge($setup = null, array $config = array())

The **forge** returns a new Email\_Driver instance based on the config or input it receives.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$setup` | *mixed* | ``` null ``` | Supply *null* for default config, a setup group name, or a config array. | | `$config` | *mixed* | ``` null ``` | An additional config array to modify default configs on the fly. | |
| Returns | a new Email\_Driver instance |
| Example | ``` // Plain an simple: $email = \Email::forge();  // Config loaded from a group $email = \Email::forge('my_defaults');  // Config supplied $email = \Email::forge(array( 	'driver' => 'smtp', ));  // Loaded config from group with an dynamic overwrite $email = \Email::forge('my_defaults', array( 	'driver' => 'smtp', )); ``` |
