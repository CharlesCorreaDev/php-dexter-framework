# Fieldset - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/fieldset/fieldset.html

---

#### forge($name = 'default', $config = array())

The **forge** method returns a new Fieldset instance. Note: there can only be one instance per `$name`.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$name` | ``` 'default' ``` | Identifier for this fieldset | | `$config` | `array()` | Configuration array | |
| Returns | \Fieldset Object |
| Example | ``` $article_form = Fieldset::forge('article'); ``` |

When constructing a Fieldset object, you can pass a configuration array which allows you to setup
the object with a custom configuration. The following items are supported:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| validation\_instance | Validation object | ``` null ``` | An existing Validation class object you want to use to validate the fieldset. If not given, a new Validation object will be constructed for this fieldset. |
| form\_instance | Form object | ``` null ``` | An existing Form class object you want to use to construct the fieldset form. If not given, a new Form object will be constructed for this fieldset. |

In addition to these fields, you can pass custom form configuration to modify the way the fieldset generates the form.
For valid configuration values, have a look at the `form.php` configuration file.
