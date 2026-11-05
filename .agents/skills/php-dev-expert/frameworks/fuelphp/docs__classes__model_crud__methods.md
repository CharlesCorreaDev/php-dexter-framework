# Model_Crud - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/model_crud/methods.html

---

#### forge($data = array())

The **forge** method returns a new Model\_Crud class instance.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$data` | *array* | ``` array() ``` | Values for the new instance. | |
| Returns | A new instance of the extended class (Model\_Crud child). |
| Example | ``` // Get a new instance $user = Model_User::forge();  // A new instance with values $user = Model_User::forge(array( 	'name' => 'John', 	'surname' => 'Doe', 	'email' => 'john@doe.org', )); ``` |
