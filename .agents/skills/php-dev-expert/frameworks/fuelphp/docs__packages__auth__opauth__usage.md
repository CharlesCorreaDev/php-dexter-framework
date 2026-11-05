# Usage - Opauth - Auth Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/auth/opauth/usage.html

---

#### forge($config = array(), $autorun = true)

The **forge** method creates an instance of the Auth\_Opauth class, which provides OAuth integration to your application.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$config` | ``` array() ``` | Any runtime configuration values you want to pass to the instance | | `$autorun` | ``` true ``` | If true, it will automatically initiate a connection to the OAuth provider. If false, it will just instantiate the object. | |
| Returns | Auth\_Opauth |
| Example | ``` /**  * load the wrapper, and have it process the provider defined in the URI  *  * this redirects to the providers authentication page, so it should be the  * last line in your method  */ \Auth_Opauth::forge();  // forge an object with a runtime config \Auth_Opauth::forge(array(     'default_group' => $custom_group_id, ));  // forge an object with a runtime config, to process a callback $opauth = \Auth_Opauth::forge(array(     'default_group' => $custom_group_id, ), false); ``` |

If you want to process a callback without passing a custom config, you don't have to pass an empty array, you
can use **\Auth\_Opauth::forge(false);** as a shortcut.
