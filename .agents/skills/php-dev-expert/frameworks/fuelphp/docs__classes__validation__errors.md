# Validation Errors - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/validation/errors.html

---

#### get\_message($msg = false, $open = '', $close = '')

Fetches the error message and allows rewriting it.

|  |  |
| --- | --- |
| Static | No |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$msg` | *false | string* | ``` false ``` | Will attempt to fetch the message from the Validation instance it belongs to or from config when `false` was given. Will return a default placeholde message on empty input or when there was no message to be found.  Or it will use the given input as the message and replace the variables in it. | | `$open` | *string* | ``` '' ``` | Adds HTML before the message. | | `$close` | *string* | ``` '' ``` | Adds HTML after the message. | |
| Returns | string |
| Example | ``` // Fetch the message inside <p> tags 	$message = $error->get_message(false, '<p>', '</p>');  	// Will use a standard message: Validation rule :rule failed for :label 	$message = $error->get_message(null);  	// Overwrite whetever error message might have been given 	$message = $error->get_message('Validation failed for field :label.'); ``` |
