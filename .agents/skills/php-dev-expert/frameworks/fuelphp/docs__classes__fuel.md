# Fuel - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/fuel.html

---

#### load($file)

The **load** method loads (includes) a given file, and returns the results. This method is used for example to load configuration files, which return an array of configuration settings.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$file` | *required* | Filename of the file to be loaded | |
| Returns | Mixed |
| Example | ``` // load a PHP file if (Fuel::load('myfile.php')) { 	echo "MyFile was loaded successfully"; } ``` |

Note that if the included file does NOT contain a **return** statement, load() will return **1** if the load was successful, or **0** if the file could not be loaded!
