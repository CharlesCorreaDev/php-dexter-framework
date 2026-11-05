# Usage - OrmAuth - Auth Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/auth/ormauth/usage.html

---

#### validate\_user($username\_or\_email = '', $password = '')

The **validate\_user** method validates user credentials. This method supports both email address and username as valid credential.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$username_or_email` | ``` '' ``` | Either the users username or email address | | `$password` | ``` '' ``` | The users password | |
| Returns | mixed. **false** if the user didn't pass validation, or an instance of **\Model\Auth\_User** with the users information if the credentials were valid. |
| Example | ``` // validate the passed username and password if ($user = Auth::validate_user($name, $pass)) { 	// $name and $pass validated, print the username 	echo $user->username; } ``` |

This method only validates if a given combination of username and password is correct. It does NOT log the user in!
