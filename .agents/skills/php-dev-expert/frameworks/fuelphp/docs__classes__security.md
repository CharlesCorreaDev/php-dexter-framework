# Security - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/security.html

---

#### check\_token($value = null)

The **check\_token** method allows you to check the CSRF token.  
Check token also ensures a token is present and will reset the token for the next session when it receives
a value to check (no matter the result of the check).

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$value` | ``` null ``` | CSRF token to be checked, checks value from POST or JSON input when not given. | |
| Returns | boolean |
| Example | ``` Security::check_token(); ``` |
