# Constants - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/constants.html

---

## Constants

Fuel has four constants in the global namespace to direct you to important directories. Fuel uses them internally to locate classes and other files.
These constants are set in *public/index.php*.

**Note:** When you move any of fuel's prime folders (app, core, public, packages) be sure to update your index.php to direct fuel to the right paths.

| Key | Description |
| --- | --- |
| APPPATH | Path to the application directory (*/path/to/fuel/app*). This is where your application directories and code reside. |
| COREPATH | Path to the core directory (*/path/to/fuel/core*). This is where all the Fuel classes live. |
| DOCROOT | Path to the location where the 'startup script' is. For your web application, path to the public directory (*/path/to/public*). This is where index.php resides. Everything accessible to user lives and is accessible via the browser. For oil command, path to where oil command resides. |
| PKGPATH | Path to the packages directory (*/path/to/fuel/packages*). This is where your packages are installed (when installed through oil). |
| VENDORPATH | Path to the composer root directory (*/path/to/fuel/vendor*). This is where your composer installs the libraries downloaded from packagist.org. |

**Note:** When you use the Oil package, you have to make the same changes in the 'oil' file in the docroot of your website.

**Note:** When you want to run unit tests, you have to make the same changes in the 'phpunit.xml' file in the fuelphp core folder.
