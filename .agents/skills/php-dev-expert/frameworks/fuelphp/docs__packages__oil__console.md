# Console - Oil Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/oil/console.html

---

## Console

The console is the quickest way to test out new classes, models and quick code without even having to open up an IDE.
The shell is interactive but due to limitations in PHP it's not quite as interactive as the bash shell unless you
enable the readline extension. Either way it works, readline just makes it better.

```
$ php oil console
Fuel 1.0.0-dev - PHP 5.3.3 (cli) (Aug 22 2010 19:27:08) [Darwin]
>>> "Hello World!"
Hello World!
>>> 1+5
6
>>> $i = 1
>>> ++$i
2
>>> json_encode(array('foo', 'bar'));
["foo","bar"]
>>> $monkey = Model_Monkey::find('first');
>>> $monkey->title
Bobby the Gibbon
```
