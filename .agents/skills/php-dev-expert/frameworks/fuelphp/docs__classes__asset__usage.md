# Asset Usage - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/asset/usage.html

---

#### add\_path($path, $type = null)

The **add\_path** method adds the given path to the front of the global assets search path array.
If a $type is specified, it will add the path to the front of the search folder array for the given type.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$path` | *required* | The path to add to the front of the assets path array (RELATIVE to the asset url and WITH trailing slash). | | `$type` | ``` null ``` | If adding a folder, the type to add it to. The asset class has the types 'img', 'css' and 'js' predefined. If you pass an undefined type, a new paths structure will be created for this type. To add the same path to multiple types, pass them as an array of types. | |
| Returns | current instance |
| Example | ``` /*  * These paths would need to have subfolders as defined in the config  * file, depending on the type of content you were trying to use.  */ Asset::add_path('resources/template_1/'); Asset::add_path('resources/template_2/');  /*  * Add a global path for all asset types, then add individual paths  * for images and css files.  */ Asset::add_path('assets/global/', array('css', 'js', 'img')); Asset::add_path('assets/icons/', 'img'); Asset::add_path('assets/images/', 'img'); Asset::add_path('assets/css/', 'css');  /*  * Create a new asset type  */ Asset::add_path('assets/docs/', 'pdf');  /*  * You can chain the calls as well.  */ Asset::add_path('resources/templates/dark/') 	->add_path('resources/templates/light') 	->add_path('resources/templates/brown'); ``` |
