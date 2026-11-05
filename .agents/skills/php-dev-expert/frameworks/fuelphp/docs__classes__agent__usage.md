# Agent Usage - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/agent/usage.html

---

#### accepts\_charset($charset = 'utf-8')

Check if the current browser accepts a specific character set.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$charset` | *string* | Name of the characterset | |
| Returns | boolean |
| Example | ``` // Check if the users browser accepts iso-8859-1 if (Agent::accepts_charset('iso-8859-1')) { 	echo "Yes, the browser accepts this characterset!"; } 	 ``` |
