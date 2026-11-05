# Uri - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/uri.html

---

#### base($include\_index = true)

The **base** method return the base URL, excluding the index\_file when **$include\_index**
is set to *false*.

Please note: **$include\_index** will be ignored if index\_file is not set app/config/config.php

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$include_index` | ``` true ``` | Whether to append the index to the returned url. | |
| Returns | string, the base url with optional index file appended |
| Example | ``` echo Uri::base(); // http://localhost/index.php  echo Uri::base(false); // http://localhost/ ``` |
