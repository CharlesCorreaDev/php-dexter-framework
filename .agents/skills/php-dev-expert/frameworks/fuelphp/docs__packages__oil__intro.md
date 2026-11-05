# Introduction - Oil Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/oil/intro.html

---

## Oil utility

The Oil utility is a special package command can be used in several ways to facilitate quick development, help with
testing your application and for running [Tasks](docs__general__tasks.md).

Oil is an optional command line utility designed to help speed up development by providing several functions:

- [Generate](docs__packages__oil__generate.md) - Build MVC components, migrations and entire scaffolding.
- [Refine](docs__packages__oil__refine.md) - Run tasks such as migrate and your own custom ones.
- [Package](docs__packages__oil__package.md) - Install, update and remove packages.
- [Console](docs__packages__oil__console.md) - Test your code in real time using an interactive shell.
- [Test](docs__packages__oil__test.md) - Run PHPUnit tests.
- [Server](docs__packages__oil__server.md) - Run FuelPHP using the PHP 5.4+ built-in webserver.

Each of these commands works in a different way to achieve different things, but before getting into them it's best to make sure
you are in the correct folder and oil is available and running.

```
$ cd Sites/fuel
$ php oil -v
Fuel: 1.2
```

### Environments

Oil won’t use any instructions you’ve made for HTTP requests, such as defining the server environment using .htaccess. Oil will use whichever environment is the default unless you instruct it.

```
$ FUEL_ENV=production php oil refine migrate
```

In place of `production` you can use any of the defined environments.

### In-line help

Oil contains its own basic documentation which can be found by typing the command:

```
$ php oil help

Usage:
  php oil [cell|console|generate|package|refine|help|server|test]

Runtime options:
  -f, [--force]    # Overwrite files that already exist
  -s, [--skip]     # Skip files that already exist
  -q, [--quiet]    # Supress status output
  -t, [--speak]    # Speak errors in a robot voice

Description:
  The 'oil' command can be used in several ways to facilitate quick development, help with
  testing your application and for running Tasks.

Environment:
  If you want to specify a specific environment oil has to run in, overload the environment
  variable on the commandline: FUEL_ENV=staging php oil <commands>

More information:
  You can pass the parameter "help" to each of the defined command to get information
  about that specific command: php oil package help

Documentation:
  http://docs.fuelphp.com/packages/oil/intro.html
```

Each of these commands has its own help section which can be found by typing:

```
$ php oil generate help
```
