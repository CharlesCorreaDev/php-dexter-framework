# Lang - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/lang.html

---

#### load($file, $group = null, $language = null, $overwrite = false, $reload = false)

The **load** method allows you to load a language file.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$file` | *required* | The path of the desired file. You can prefix this with a namespace to load a config file from a loaded package or module. | | `$group` | ``` null ``` | Sets a language group to be used. | | `$language` | ``` null ``` | Sets a specific language to load. | | `$overwrite` | `false` | (Optional) If set to `true` the loaded language items will be merged with the items already loaded in a non-recursive manner, with will overwrite array values in a multidimensional array, rather then merging them. | | `$reload` | `false` | (Optional) If set to `true` a reload of the requested language file is forced, erasing cached language items related to the lang file to be loaded. | |
| Returns | void |
| Example | ``` // Example of a language file: return array( 	'hello' => 'Hello :name', 	'something'=> 'something :name!', 	'test'=> array('hello' => 'Hello', 'something' => 'Plop') // Group );  // Loads example.php. // Note: If no language is set in the config, it will fallback to English. Lang::load('example');  // Will load the given file into the 'test' group. Lang::load('example', 'test');  // Outputs Plop $this->output = Lang::get('test.test.something');  // Will load the example language file from the module 'foo' into the 'bar' group. Lang::load('foo::example', 'bar');  // Will load the example language file in italian. // If that doesn't exist, it will load the configured language Lang::load('foo::example', 'bar', 'it'); ``` |
