# File Usage - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/file/usage.html

---

#### exists($path, $area = null)

Checks if a file exists. If $path points to a symlink, the symlinks are resolved to make sure whatever it points to is a file.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$path` | *required* | Location of the file to check | | `$area` | `null` | Area object to use, null for base\_config in config file (see [advanced usage](docs__classes__file__advanced.md) for more information) | |
| Returns | `boolean` true if the file in $path exists, false if not |
| Throws | `OutsideAreaException` when a path not inside the file area. `FileAccessException` when an area is used and there is an extension violation. |
| Example | ``` $exists = File::exists(DOCROOT.'/test.txt'); ``` |
