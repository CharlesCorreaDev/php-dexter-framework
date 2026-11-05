# Package - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/package.html

---

#### load($package, $path = null)

The **load** method allows you to load one or more packages at runtime. If the package cannot be found a `PackageNotFoundException` will be thrown.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$package` | *required* | Name of the package to be loaded, or an array of packages and package paths. | | `$path` | `PKGPATH` | Path to the folder in which the package is installed. | |
| Returns | *void* |
| Example | ``` // load the orm package Package::load('orm');  // load the parser package from a specific directory Package::load('parser', '/path/to/packages/dir/');  // load multiple packages from a single package installation Package::load( array('First' => PKGPATH.'my'.DS.'first'.DS, 'Last' => PKGPATH.'my'.DS.'last'.DS) );  // load the non-existent package Package::load('awesome'); // Throws a PackageNotFoundException ``` |
