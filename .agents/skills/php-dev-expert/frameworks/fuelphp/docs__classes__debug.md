# Debug - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/debug.html

---

#### dump(\*$args)

The **dump** method outputs multiple mixed values to the browser in a formatted structured way and includes backtrace information so you know where it is coming from.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | Unlimited mixed arguments |
| Returns | void |
| Example | ``` Debug::dump($stuff, 'junk', array('whatever')); ``` |

By default nested structures will be displayed collapsed to minimize the impact of the output on the page layout. You can
alter this behaviour and have it expand by default by setting **Debug::$js\_toggle\_open** to **true**.
