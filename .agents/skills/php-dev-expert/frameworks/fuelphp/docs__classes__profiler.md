# Profiler - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/profiler.html

---

#### mark($label)

The **mark** method will add a speed marker to the profiler.
This marker will show in the "Load Time" section of the profiler.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$label` | *required* | A text label to describe the marker to be set. | |
| Returns | void |
| Example | ``` Profiler::mark('start of this piece of code'); ``` |
