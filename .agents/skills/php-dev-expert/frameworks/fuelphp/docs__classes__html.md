# Html - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/html.html

---

#### anchor($href, $text, $attributes = array(), $secure = null)

The **anchor** method returns an HTML anchor tag.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$href` | *required* | Target url | | `$text` | *required* | Anchor value | | `$attributes` | **false** | Array of attributes to be applied to the anchor tag. | | `$secure` | *null* | Set to false to force http, or to true to force https on the created URL | |
| Returns | String containing the correctly formatted anchor tag (and attributes if supplied). |
| Example | ``` //returns <a href="http://www.domain.com/example">Example</a> echo Html::anchor('example', 'Example');  //returns <a href="http://www.otherdomain.com/example">Example</a> echo Html::anchor('http://www.otherdomain.com/example', 'Example');  //returns <a href="http://www.domain.com/example" id="a1" class="sample" style="color:red;">Example</a> echo Html::anchor('example', 'Example', array('id' => 'a1', 'class' => 'sample', 'style' => 'color:red'));  //returns <a href="https://www.domain.com/example" id="a1" class="sample" style="color:red;">Example</a> echo Html::anchor('example', 'Example', array('id' => 'a1', 'class' => 'sample', 'style' => 'color:red'), true); ``` |
