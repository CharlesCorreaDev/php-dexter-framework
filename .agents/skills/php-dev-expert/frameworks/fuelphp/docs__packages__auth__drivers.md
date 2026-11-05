# Writing your own drivers - Auth Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/auth/drivers.html

---

## Auth package

The Auth package provides a standardized interface for authentication in Fuel. This allows our users to
write their own drivers and easily integrate a new driver to work with old code by keeping the basic methods
consistent.

## Writing your own drivers

Writing drivers can be done in two ways. Either by extending the Auth driver classes
to create a new driver from scratch or extending a existing driver class and changing them where needed.

An Auth driver consists of three types of classes working together. These are:

- [Login](docs__packages__auth__types__login.md) (Auth\_Login\_Driver).
- [Group](docs__packages__auth__types__group.md) (Auth\_Group\_Driver).
- [Acl](docs__packages__auth__types__acl.md) (Auth\_Acl\_Driver).

### Extending auth classes

Extend these classes like so:

```
<?php

class Auth_Login_Mydriver extends \Auth\Auth_Login_Driver
{

	// Implement all the needed functions and variables defined in the driver class.

}

/* End of file app/classes/auth/login/mydriver.php */
```

### Implementing functions

When extending the Auth driver classes take note on the expected return values of each function that needs to be implemented.
Every method supplies an example so you know what needs to be returned. Here is an example:

```
/**
 * Get User Identifier of the current logged in user
 * in the form: array(driver_id, user_id)
 *
 * @return  array
 */
abstract public function get_user_id();
```

The code above show you the *get\_user\_id* function that every driver should have.
Like in all classes you extend that have abstract functions, these functions must be defined in the extended class.
The return type of this function is provided in the comment, in this case *array(driver\_id, user\_id)*.
In order to get your driver to work alongside other drivers make sure you return the right values or your driver
breaks protocol.

Here is that same function but then the implementation from the Simpleauth driver.

```
/**
 * Get the user's ID
 *
 * @return  Array  containing this driver's ID & the user's ID
 */
public function get_user_id()
{
	if (empty($this->user))
	{
		return false;
	}

	return array($this->id, (int) $this->user['id']);
}
```

Once you have everything in place for the new driver, replace or add it to the auth [config](docs__packages__auth__intro.md#configuration).

```
// Inside config/auth.php array

// Add it as a second driver
'driver' => array('Simpleauth', 'Mydriver'),

// or replace the existing driver
'driver' => array('Mydriver'),
```
