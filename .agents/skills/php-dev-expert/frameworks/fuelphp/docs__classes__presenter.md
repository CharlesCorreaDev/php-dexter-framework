# Presenter - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/presenter.html

---

#### forge($presenter, $method = 'view', $auto\_filter = null, $view = null)

The **forge** method returns a new Presenter object.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$presenter` | *required* | Name of the presenter, and by default of its associated view, using [View](docs__classes__view.md#method_forge) notation. | | `$method` | ``` 'view' ``` | Name of the presenter method that will prep the View for rendering. You can have multiple prep methods defined in the Presenter, for example to generate different layouts of the same view. | | `$auto_filter` | ``` null ``` | set to *true* or *false* to set auto encoding, defaults to main config setting (app/config/config.php) | | `$view` | ``` null ``` | Custom view name, used if the view to be loaded can not be determined from the presenter name | |
| Returns | a new *Presenter* object |
| Example | ``` // Will create a Presenter object // for the APPPATH/views/admin/index.php view file // using the Presenter_Admin_Index class in APPPATH/classes/presenter/admin/index.php  $presenter = Presenter::Forge('admin/index');  // use the custom() method in the presenter to render the view differently $presenter = Presenter::Forge('admin/index', 'custom');  // use a custom view $presenter = Presenter::Forge('admin/index', 'custom', null, 'admin/different/view');  // or even a custom view object $view = View::forge('admin/different/view', array( 	'menu' => $menu, 	'articles' => $articles, 	'footer_links' => $footer_links, ));  $presenter = Presenter::Forge('admin/index', 'custom', null, $view); ``` |
