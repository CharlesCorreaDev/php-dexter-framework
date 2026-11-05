# Validation Methods - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/validation/methods.html

---

#### forge($fieldset = 'default')

The **forge** method returns a new Validation instance,
and links it with a Fieldset with name $fieldset.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$fieldset` | *string | Fieldset* | ``` 'default' ``` | The name or instance of the Fieldset to link to. | |
| Returns | Validation object |
| Throws | \DomainException, when the Fieldset name or instance already has a related Validation instance. |
| Example | ``` // Create a new validation instance $val = Validation::forge();  // Associate the new Validation instance with a Fieldset, using the fieldset name $val = Validation::forge('my_fieldset');  // Associate the new Validation instance with a Fieldset, by passing the fieldset instance $fieldset = Fieldset::instance('my_fieldset'); $val = Validation::forge($fieldset); ``` |
