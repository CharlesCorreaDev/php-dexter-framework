# Namespacing - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/namespacing.html

---

## Namespacing

FuelPHP, as a PHP 5.3+ framework, relies heavily on namespacing to separate the different components of the framework and
of your application, to make the code as portable as possible, and to prevent any collisons in class names when you're moving
bits of your application around.

By default, the exception to this is your main application code, which resides in `APPPATH/classes`. All main application
classes are defined in the global namespace (they do not have a namespace set), and use the cascading file system to create unique
classnames.

While this makes it easier for the novice to start using the FuelPHP framework, it will create more complex class names, and it will
make those classes less portable or interchangeable.

### Namespacing your controllers

As mentioned in the [introduction](docs__general__controllers__base.md), by default controllers are created in the `APPPATH/classes/controller` folder,
and are prefixed with Controller\_. This prefix is defined in your `APPPATH/config/config.php` configuration file
(and if not this is the default), but can be changed if you want to namespace your controllers, or if you
want to move them to a different folder structure.

Let's move the example given above to the `Controller` namespace. You tell FuelPHP that you've done this by setting the
config setting controller\_prefix from `'Controller_'` to `'Controller\\'` in your app's config.php file.

```
namespace Controller;

class Example extends \Controller
{
	public function action_index()
	{
		// some code here
	}
}
```

Once you have enabled namespacing for your controllers, **ALL** your controller classes need to be namespaced!
This means a controller in a module called `Mymodule` will look like this:

```
namespace Mymodule\Controller;

class Example extends \Controller
{
	public function action_index()
	{
		// some code here
	}
}
```

Namespacing your controllers is completely transparent for your application, you can implement it without altering anything else.
You can even mix-and-match namespacing and the cascading filesystem, and create a controller like `\Controller\Admin\User_Groups`
which is defined in `APPPATH/classes/controller/admin/user/groups.php`.

Note that now that your controller lives in a namespace, you have to prefix all global classes (like "Controller" in the example) with a
backslash, since it needs to be loaded from the global namespace. Alternative, you can use the 'use' keyword to import classes into the
current namespace.

### Namespacing your models

You can start namespacing your models right away, no additional configuration is needed.

```
namespace Model;

class Example extends \Orm\Model
{
	// some code here
}
```

or in a module:

```
namespace Mymodule\Model;

class Example extends \Model_Crud
{
	// some code here
}
```

You can then access the model in your controllers like so:

```
// the ORM model created above
$orm = \Model\Example::forge();

// the module crud model created above
$crud = \Mymodule\Model\Example::forge();
```

### Namespacing your presenters

Since there is no configuration for the Presenter prefix, namespacing your presenters is a bit more complicated.
It requires an extension of the Presenter class in your app. Create the following class:

```
// file located in APPPATH/classes/presenter.php
class Presenter extends \Fuel\Core\Presenter
{
	// namespace prefix
	protected static $ns_prefix = 'Presenter\\';
}
```

And inform the framework you have extended the class by adding this to your `APPPATH/bootstrap.php`:

```
// add our presenter override
Autoloader::add_classes(array(
	'Presenter' => APPPATH.'classes/presenter.php',
));
```

Make sure you add it before the Autoloader is registered!

Once you have made this change, you can define your Presenters like so:

```
// file located in APPPATH/classes/presenter/users/group.php
namespace Presenter\Admin\Users;

class Group
{
	public function view()
	{
		// your presenter code
	}
}
```

### Namespacing other classes

Any other class in the classes folder can be namespaced without problems, as long as the fully namespaced name of class
can be mapped to the file which defines the class:

```
// file located in APPPATH/classes/admin/users/group.php
namespace Admin\Users;

class Group
{
	// some code here
}

// alternative for the same file and class
namespace Admin;

class Users_Group
{
	// some code here
}

// or even old style without namespace
class Admin_Users_Group
{
	// some code here
}
```

### Caveats

#### Do not mix different naming styles for the same class

Although you can mix-and-match namespaces and underscores to construct your class names, you can not mix-and-match its usage.
If you have defined a class `\Admin\Users\Group`, using `\Admin\Users_Group::method();` will load the correct
file (since it maps correctly to the right file), but the autoloader will throw an exception because the expected `\Admin\Users_Group` class is
not defined in that file.

So it is best to decide on a naming convention for your applications, and stick to it!

#### Class name collisions

When executing a Request, modules have precedence over the main app. This has some implications as to the names and namespaces you
can use in your app, in relation to your module.

Say you have a module called `Admin`, then all classes in that module will be defined in a namespace that starts with `\Admin`.
If at the same time you have classes in `APPPATH/classes/admin`, like in the example above, then  
- those app classes will always work as long as the module isn't loaded.  
- if the module is loaded, a module class with the same name has precedence, the app class can never be loaded.

Similarly, if you have a app Controller called `Controller_Admin_Users`, and you have a module called `Admin`, you can never
have a URL Request load that app controller, since the Framework will look for that controller in the module based on the admin prefix.
