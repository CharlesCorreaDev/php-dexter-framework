# Autoloader - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/autoloader.html

---

#### add\_namespace($namespace, $path, $psr = false)

The **add\_namespace** method adds a namespace and path.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$namespace` | *required* | the namespace | | `$path` | *required* | path to the namespace | | `$psr` | ``` false ``` | set to **true** to indicate that this is a PSR-0 compliant namespace. | |
| Returns | *Void* |
| Example | ``` Autoloader::add_namespace('Mynamespace', PKGPATH.'mynamespace/');  // With nested namespaces note the double backslash Autoloader::add_namespace('Nested\\Namespace', PKGPATH.'nested/'); ``` |
