# Packages - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/packages.html

---

## Packages

When it comes to organizing, reuse and share your code, packages are a great way to allow you to do this.
They can contain all sorts of code like models, third-party libraries, configs and so on.
Packages also allow you to extend the core without messing up your app/classes directory.
To clarify what packages are, here are the "is" and "is not" on packages.

#### Packages...

- are a great way to organize your code,
- supply a place to keep third party libraries,
- allow you to extend other packages without messing with someone's code,
- a place to extend fuel without messing with core files.

#### But..

- packages do not map to the URL,
- and are not approachable through HMVC requests

### Installing packages

Installing packages can be done manually and through [oil](docs__packages__oil__package.md). To install manually download the package source and place it into your package directory (default in fuel/packages).

To actually be able to use your it you must either add it to `always_load` in
`app/config/config.php` or use [Package::load()](docs__classes__package.md#method_load).

### Creating packages

To help people understand what you are doing it's best to structure your package like so:

```
/packages
    /package
        /bootstrap.php
        /classes
            /your.php
            /classes.php
            /here.php
        /config
            /packageconfig.php
        /and_so_on
```

Every package is expected to have a *bootstrap.php* located at the base of the package.
Use the bootstrap to add the package namespace (to global if you wish). And add the classes for better perfomance.

```
// Add namespace, necessary if you want the autoloader to be able to find classes
Autoloader::add_namespace('Mypackage', __DIR__.'/classes/');

// Add as core namespace
Autoloader::add_core_namespace('Mypackage');

// Add as core namespace (classes are aliased to global, thus useable without namespace prefix)
// Set the second argument to true to prefix and be able to overwrite core classes
Autoloader::add_core_namespace('Mypackage', true);

// And add the classes, this is useful for:
// - optimization: no path searching is necessary
// - it's required to be able to use as a core namespace
// - if you want to break the autoloader's path search rules
Autoloader::add_classes(array(
	'Mypackage\\Classname' => __DIR__.'/classes/classname.php',
	'Mypackage\\Anotherclass' => __DIR__.'/classes/anotherclass.php',
));
```

Once you have your classes in place you can now start using them.

Note: if package namespaces aren't aliased to global you must supply it:

```
// If aliased to global just use
$instance = new Myclass;

// When not aliased to global
$instance = new Mynamespace\Myclass;
```
