# Upload Usage - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/upload/usage.html

---

#### is\_valid()

The **is\_valid** method can be used to check if there are any uploaded files present that have passed the upload validation.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | None |
| Returns | boolean - true if validated files exist, false if not. |
| Example | ``` // do we have any uploaded files to save? if (Upload::is_valid()) { 	Upload::save(); } ``` |
