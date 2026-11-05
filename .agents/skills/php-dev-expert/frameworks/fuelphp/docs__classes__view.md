# View - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/view.html

---

#### \_\_construct($file = null, $data = null, $filter = null)

|  |  |
| --- | --- |
| Static | No |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$file` | ``` null ``` | the view filename, if not supplied you must supply it later through *set\_filename* or supply it in *render*. View files should be relative to the *app/views* directory. | | `$data` | ``` null ``` | array of values | | `$filter` | ``` null ``` | set to *true* or *false* to set auto encoding, defaults to main config setting (app/config/config.php) | |
| Returns | a new *View* object |
| Example | ``` $view = new View('path/to/view', array( 	'menu' => $menu, 	'articles' => $articles, 	'footer_links' => $footer_links, )); ``` |
