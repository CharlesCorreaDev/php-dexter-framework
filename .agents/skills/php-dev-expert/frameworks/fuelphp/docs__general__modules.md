# Modules - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/modules.html

---

## Modules

### What is a module?

A module is a group of independent MVC elements. The use of modules allows for re-usability and encapsulation of your code.
A module typically resides within an application sub-directory named **modules**.
It is suggested to take advantage of modules whenever you're working on a large project,
of which you believe the code-base will be more than just a few lines of code.
It will help you to keep things neatly in order.

A module can operate independently, like for example a blog module or an album module. You can route directly to the module controllers, without having to access any global code.
Modules can also be used in a true HMVC context, where controllers call other controllers, which will produce (a part of) the result needed to generate the result of the page request.

### Module configuration

To be able to use modules, you will have to tell Fuel where your modules are stored.
By default, this is in the modules folder of your application. You use the 'modules\_path' setting in your applications config.php file to define your module path.
You can also define multiple paths. If you do, they will be searched in the sequence you have defined them.

```
/**
 * To enable you to split up your application into modules which can be
 * routed by the first uri segment you have to define their basepaths
 * here.
 */
'module_paths' => array(
	APPPATH.'modules'.DS,		// path to application modules
	APPPATH.'..'.DS.'globalmods'.DS	// path to our global modules
),
```

When you define your paths, make sure they end with DS, the Fuel platform independent directory separator.

### Module namespace

One of the problems often encountered when working with independently developed code are class name collisions. For example, a lot of modules come with an admin controller. To avoid collisions, in Fuel every module lives in its own PHP namespace, which **must** be named identical to the folder name of the module.

```
<?php
/**
 * Module controller in the Mymodule module
 */

namespace Mymodule;

class Controller_Widget
{

	// put your controller code here, just like for an application controller
}
```

If you have moved your controllers into a namespace like it is explained [here](docs__general__namespacing.md#controllers), you have to use
the same setup for your module controllers. In this example the namespace will be Mymodule\Controller, the classname Widget.

### Module folder structure

You start creating a module by creating a folder for your new module in the modules folder you have defined in the configuration.
The folders name determines the name of the module, and the name of the namespace for the classes in the module.
This name is also used in the URI if you want to route to the modules controllers, or as part of the [Request](docs__classes__request__request.md) in case of an HMVC call.

As a module can be viewed as a self contained part of the application, you'll notice that the module folder structure is very familiar.
It is the same as the structure of the application folder. The following folder structure is supported for a module:

- classes
  - controller
  - model
  - view
- config
- lang
- tasks
- views

### Cross modules file loading

Whether it's a config file or a view file cross module file loading must have the
module prefixed to the filename:

```
// Cross load a config
\Config::load('othermodule::myconfig');

// Cross load a view
\View::forge('othermodule::subdir/view');
```

Run a task from module:

```
$ php oil refine <modulename>::<taskname>:<methodname>
```

### Module routing

When you use modules in routed mode, you can add custom routes to your module by including a **routes.php** in your modules config folder.
These routes will be loaded when Fuel detects that the first URI segment refers to a module, and only the routes of that module will be loaded.
Those routes will be prepended to the routes array so a possible (:any) route in the main routes config will not match before the module routing is processed.

This implies that module routes can not be used to define routes for global routing or routes for other modules.
In other words, the left side should always include the current module as first URI segment.
For the right side you can use anything described in the sections above, it's perfectly fine to have a module
route to an app controller or another module.

### Modules and HMVC requests

Besides using modules as a way of separating logically independent parts of your application,
you can also use module controllers in an HMVC context, where one of your application's controllers calls one of more module controllers
to create the final result of the URI requested.

Read the [HMVC requests docs](docs__general__hmvc.md) to find out more.

### Using module classes outside the module

It is also possible to use a module's classes outside of it of course.
For this to work, Fuel needs to be able to autoload the class when you reference it in your code.
Which means you will have to tell Fuel where to find the module. There are two ways to do this.

You can preload the module by specifying the module to load in the `'always_load'`,
`'modules'` setting of your applications `config.php` file:

```
'always_load' => array(

	/**
	 * These modules are always loaded on Fuel's startup. You can specify them
	 * in the following manner:
	 *
	 * array('module_name');
	 *
	 * A path must be set in module_paths for this to work.
	 */
	'modules'	=> array('mymodule'),
```

You can also add the module manually at runtime, before you use any of the static methods:

```
// make the Mymodule module accessable
Module::load('mymodule');
```

You then call the module class like this:

```
\Mymodule\Myclass::mymethod('params');
```
