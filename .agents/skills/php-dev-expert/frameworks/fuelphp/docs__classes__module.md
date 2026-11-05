# Module - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/module.html

---

#### load($module, $path = null)

The **load** method allows you to load one or more modules at runtime. If the module cannot be found a `ModuleNotFoundException` will be thrown.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$module` | *required* | Name of the module to be loaded, or an array of modules. | | `$path` | `null` | Path to the given module. You can use this to load modules from outside the defined module paths. | |
| Returns | *void* |
| Example | ``` // load a users module Module::load('users');  // load the users module from a specific directory Module::load('users', '/path/to/modules/users/');  // load multiple modules from a single module installation Module::load( array('Users' => '/path/to/modules/users/', 'Groups' => '/path/to/modules/groups/') );  // load the non-existent module Module::load('awesome'); // Throws a ModuleNotFoundException ``` |

You can configure whether or not the modules routes should be loaded as well, through the config key "routing.module\_routes".
