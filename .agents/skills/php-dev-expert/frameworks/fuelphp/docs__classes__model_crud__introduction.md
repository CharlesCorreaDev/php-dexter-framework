# Model_Crud - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/model_crud/introduction.html

---

## Model\_Crud Class

### Introduction

A lot of database operations come to basic CRUD (Create Retrieve Update Delete) operations.
The Model\_Crud class supplies there functionalities in a standardized way. The class helps you with:

- Creating database entries
- Retrieving database entries
- Updating database entries
- Deleting database entries
- Entree input validation

### Your first model

To use the Model\_Crud class, create a class that extends \Model\_Crud. Example:

```
<?php

class Model_Users extends \Model_Crud
{
	// Set the table to use
	protected static $_table_name = 'users';
}
```

Now you have a basic model to work with.

### Configuration

Configuring a model is done by setting a few parameters:

| Param | Type | Default | Description | Example |
| --- | --- | --- | --- | --- |
| **$\_table\_name** | string | *required* | The table to use. | ``` protected static $_table_name = 'table'; ``` |
| **$\_primary\_key** | string | ``` 'id' ``` | The table's id field. | ``` protected static $_primary_key = 'custom_id'; ``` |
| **$\_rules** | array | *none* | Input validation rules | ``` protected static $_rules = array( 	'name' => 'required', 	'email' => 'required|valid_email', ); ``` |
| **$\_labels** | array | *none* | The validation labels. | ``` protected static $_labels = array( 	'name' => 'Your Name', 	'email' => 'Email Address', ); ``` |
| **$\_properties** | array | *none* | Columns to use when updating/saving. | ``` protected static $_properties = array( 	'id', 	'name', 	'age', 	'birth_date', 	'gender', ); ``` |
| **$\_mass\_whitelist** | array | *none* | Array of columns which can be set with: \_\_construct, ::forge ->set() | ``` protected static $_mass_whitelist = array( 	'first_name', 	'last_name', 	'age', ); ``` |
| **$\_mass\_blacklist** | array | *none* | Array of columns which could not be set with: \_\_construct, ::forge and ->set() method. | ``` protected static $_mass_blacklist = array( 	'password', 	'is_admin', ); ``` |
| $\_mass\_whitelist is like a allows for extra security when mass-assigning propperties. Do note that this only works with **\_\_construct**, **::forge** and **->set**. | | | | |
| **$\_connection** | string | *none* | The database connection to use, or the connection used for reads in a master/slave setup. If not configured, the DB config default will be used. | ``` protected static $_connection = null; ``` |
| **$\_write\_connection** | string | *none* | The database connection to use for writes in a master/slave setup. | ``` protected static $_write_connection = 'master'; ``` |
| **$\_defaults** | array | *none* | An array of default values | ``` protected static $_defaults = array( 	'field' => 'value', 	'other_field' => 'other value', ); ``` |
| **$\_created\_at** | string | *none* | Field name for a 'created at' field. Set **$\_mysql\_timestamp** to true to use a MySQL timestamp instead of a UNIX timestamp | ``` protected static $_created_at = 'created_at'; ``` |
| **$\_updated\_at** | string | *none* | Field name for a 'updated at' field. Set **$\_mysql\_timestamp** to true to use a MySQL timestamp instead of a UNIX timestamp | ``` protected static $_updated_at = 'modified_at'; ``` |
| **$\_mysql\_timestamp** | boolean | *none* | Set to true to use a MySQL timestamp instead of a UNIX timestamp for **$\_created\_at** and **$\_updated\_at** fields. | ``` protected static $_mysql_timestamp = true; ``` |
