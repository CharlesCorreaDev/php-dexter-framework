# Fieldset_Field - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/fieldset/field.html

---

#### set\_fieldset(Fieldset $fieldset)

If you have created a standalone Fieldset\_Field object (i.e. not via the Fieldset class), you can use the
**set\_fieldset** method to assign the field object to a fieldset object.

|  |  |
| --- | --- |
| Static | No |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$fieldset` | ``` required ``` | Instance of Fieldset you want to assign this Field object to. | |
| Returns | Fieldset\_Field Object, for chaining |
| Example | ``` $fieldset = \Fieldset::forge('myfieldset'); $field = new \Fieldset_Field('client', 'Name of the client'); $field->set_fieldset($fieldset); ``` |
