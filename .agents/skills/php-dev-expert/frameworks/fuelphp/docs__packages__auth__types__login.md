# Login - Driver types - Auth Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/auth/types/login.html

---

#### get\_id()

Returns the drivers unique id. This can be used to identify the driver, or to select a specific driver instance.

|  |  |
| --- | --- |
| Static | No |
| Parameters | None |
| Returns | The drivers id string. |
| Example | ``` // returns 'simpleauth' $id = Auth::instance('simpleauth')->get_id(); ``` |
