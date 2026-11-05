# Validation - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/validation/validation.html

---

### Configuration

Optionally, the validation class can be configured through the global application configuration file, **app/config/config.php**. Define a section called '**validation**', in which the following settings can be defined:

| Variable | Type | Default | Description |
| --- | --- | --- | --- |
| `no_errors` | string | ``` '' ``` | String to return if no validation errors were discovered. |
| `open_list` | string | ``` '<ul>' ``` | String to be prepended to the list of errors. Usually this is some form of HTML to format the list. By default, it's formatted as an unordered list. |
| `close_list` | string | ``` '</ul>' ``` | String to be appended to the list of errors. |
| `open_error` | string | ``` '<li>' ``` | String to be prepended to each individual error message. |
| `close_error` | string | ``` '</li>' ``` | String to be appended to each individual error message. |
| `quote_label` | boolean | ``` false ``` | If true, and the label of the validated field contains spaces, the label will be enclosed in double quotes for enhanced readability. |
| `global_input_fallback` | boolean | ``` true ``` | If true, and value is not found in input array, the value will fall back to Input::param. |

If one or more of these values are missing from the global configuration, the class will use the defaults as defined in this table.
