# Crypt Usage - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/crypt/usage.html

---

#### encode($value, $key = false)

The **encode** method encrypts a string value, optionally with a custom encryption key.

|  |  |
| --- | --- |
| Static | No |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$value` | *Required* | String value to encode. | | `$key` | ``` false ``` | Optional custom key value to be used to encode the value passed. If false, the config value '**crypto\_key**' is used. | |
| Returns | string |
| Example | ``` // encode a variable with a custom key $value = Crypt::encode($value, 'R@nd0mK~Y'); ``` |
