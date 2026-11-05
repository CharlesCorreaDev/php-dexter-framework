# Image - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/image.html

---

#### forge($config = array())

The **forge** method creates a new Image\_Driver instance.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$config` | ``` array() ``` | An array of configuration options for the Image\_Driver instance | |
| Returns | Image\_Driver |
| Example | ``` $image = Image::forge();  // Or with optional config $image = Image::forge(array( 	'quality' => 80 )); $image 	->load('image.png') 	->output('image.jpeg'); ``` |
