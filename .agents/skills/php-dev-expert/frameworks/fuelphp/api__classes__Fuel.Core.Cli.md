# phpDocumentor » \Fuel\Core\Cli

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Cli.html

---

PublicProtectedPrivateInherited

- Methods
- [Static constructor.

  ```
  _init()
  ```](#_init "_init :: Static constructor.")
- [Beeps a certain number of times.

  ```
  beep()
  ```](#beep "beep :: Beeps a certain number of times.")
- [Clears the screen of output

  ```
  clear_screen()
  ```](#clear_screen "clear_screen :: Clears the screen of output")
- [Returns the given text with the correct color codes for a foreground and
  optionally a background color.

  ```
  color()
  ```](#color "color :: Returns the given text with the correct color codes for a foreground and
  optionally a background color.")
- [Outputs an error to the CLI using STDERR instead of STDOUT

  ```
  error()
  ```](#error "error :: Outputs an error to the CLI using STDERR instead of STDOUT")
- [Get input from the shell, using readline or the standard STDIN

  ```
  input()
  ```](#input "input :: Get input from the shell, using readline or the standard STDIN")
- [if operating system === windows

  ```
  is_windows()
  ```](#is_windows "is_windows :: if operating system === windows")
- [Enter a number of empty lines

  ```
  new_line()
  ```](#new_line "new_line :: Enter a number of empty lines")
- [Returns the option with the given name.

  ```
  option()
  ```](#option "option :: Returns the option with the given name.")
- [Asks the user for input.

  ```
  prompt()
  ```](#prompt "prompt :: Asks the user for input.")
- [Allows you to set a commandline option from code

  ```
  set_option()
  ```](#set_option "set_option :: Allows you to set a commandline option from code")
- [Spawn Background Process

  ```
  spawn()
  ```](#spawn "spawn :: Spawn Background Process")
- [Redirect STDERR writes to this file or fh

  ```
  stderr()
  ```](#stderr "stderr :: Redirect STDERR writes to this file or fh")
- [Redirect STDOUT writes to this file or fh

  ```
  stdout()
  ```](#stdout "stdout :: Redirect STDOUT writes to this file or fh")
- [Waits a certain number of seconds, optionally showing a wait message and
  waiting for a key press.

  ```
  wait()
  ```](#wait "wait :: Waits a certain number of seconds, optionally showing a wait message and
  waiting for a key press.")
- [Outputs a string to the cli.

  ```
  write()
  ```](#write "write :: Outputs a string to the cli.")
- Properties
- [$nocolor

  ```
  $nocolor
  ```](#%24nocolor "$nocolor :: ")
- [$readline\_support

  ```
  $readline_support
  ```](#%24readline_support "$readline_support :: ")
- [$wait\_msg

  ```
  $wait_msg
  ```](#%24wait_msg "$wait_msg :: ")
- » Protected
- [$STDERR

  ```
  $STDERR
  ```](#%24STDERR "$STDERR :: ")
- [$STDOUT

  ```
  $STDOUT
  ```](#%24STDOUT "$STDOUT :: ")
- [$args

  ```
  $args
  ```](#%24args "$args :: ")
- [$background\_colors

  ```
  $background_colors
  ```](#%24background_colors "$background_colors :: ")
- [$foreground\_colors

  ```
  $foreground_colors
  ```](#%24foreground_colors "$foreground_colors :: ")

Cli class

Interact with the command line by accepting input options, parameters and output text

|  |  |
| --- | --- |
| package | [Fuel](api__packages__Fuel.md) |
| category | Core |
| author | Phil Sturgeon |
| link | <http://docs.fuelphp.com/classes/cli.html> |

### Methods

## Static constructor.

```
_init() 
```

Parses all the CLI params.

## Beeps a certain number of times.

```
beep(int $num) 
```

### Parameters

#### $num

`int`

the number of times to beep

## Clears the screen of output

```
clear_screen() : void
```

## Returns the given text with the correct color codes for a foreground and optionally a background color.

```
color(string $text, string $foreground, string $background, string $format) : string
```

### Parameters

#### $text

`string`

the text to color

#### $foreground

`string`

the foreground color

#### $background

`string`

the background color

#### $format

`string`

other formatting to apply. Currently only 'underline' is understood

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

### Returns

`string`the color coded string

## Outputs an error to the CLI using STDERR instead of STDOUT

```
error(string | array $text, string $foreground, string $background) 
```

### Parameters

#### $text

`string``array`

the text to output, or array of errors

#### $foreground

`string`

the foreground color

#### $background

`string`

the foreground color

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

## Get input from the shell, using readline or the standard STDIN

```
input(string | int $prefix) : string
```

Named options must be in the following formats:
php index.php user -v --v -name=John --name=John

### Parameters

#### $prefix

`string``int`

the name of the option (int if unnamed)

### Returns

`string`

## if operating system === windows

```
is_windows() 
```

## Enter a number of empty lines

```
new_line(integer $num) : void
```

### Parameters

#### $num

`integer`

Number of lines to output

## Returns the option with the given name.

```
option(string | int $name, mixed $default) : mixed
```

You can also give the option
number.

Named options must be in the following formats:
php index.php user -v --v -name=John --name=John

### Parameters

#### $name

`string``int`

the name of the option (int if unnamed)

#### $default

`mixed`

value to return if the option is not defined

### Returns

`mixed`

## Asks the user for input.

```
prompt() : string
```

This can have either 1 or 2 arguments.

Usage:

// Waits for any key press
CLI::prompt();

// Takes any input
$color = CLI::prompt('What is your favorite color?');

// Takes any input, but offers default
$color = CLI::prompt('What is your favourite color?', 'white');

// Will only accept the options in the array
$ready = CLI::prompt('Are you ready?', array('y','n'));

### Returns

`string`the user input

## Allows you to set a commandline option from code

```
set_option(string | int $name, mixed | null $value) : mixed
```

### Parameters

#### $name

`string``int`

the name of the option (int if unnamed)

#### $value

`mixed``null`

value to set, or null to delete the option

### Returns

`mixed`

## Spawn Background Process

```
spawn(string $call, string $output) : void
```

Launches a background process (note, provides no security itself, $call must be sanitised prior to use)

|  |  |
| --- | --- |
| author | raccettura |
| link | <http://robert.accettura.com/blog/2006/09/14/asynchronous-processing-with-php/> |

### Parameters

#### $call

`string`

the system call to make

#### $output

`string`

## Redirect STDERR writes to this file or fh

```
stderr(resource | string $fh) : resource
```

Call with no argument to retrieve the current filehandle.

Is not smart about opening the file if it's a string. Existing files will be truncated.

### Parameters

#### $fh

`resource``string`

Opened filehandle or string filename.

### Returns

`resource`

## Redirect STDOUT writes to this file or fh

```
stdout(resource | string | null $fh) : resource
```

Call with no argument to retrieve the current filehandle.

Is not smart about opening the file if it's a string. Existing files will be truncated.

### Parameters

#### $fh

`resource``string``null`

Opened filehandle or string filename.

### Returns

`resource`

## Waits a certain number of seconds, optionally showing a wait message and waiting for a key press.

```
wait(int $seconds, bool $countdown) 
```

### Parameters

#### $seconds

`int`

number of seconds

#### $countdown

`bool`

show a countdown or not

## Outputs a string to the cli.

```
write(string | array $text, string $foreground, string $background) 
```

If you send an array it will implode them
with a line break.

### Parameters

#### $text

`string``array`

the text to output, or array of lines

#### $foreground

`string`

the foreground color

#### $background

`string`

the foreground color

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

### Properties

## $nocolor

```
$nocolor 
```

## $readline\_support

```
$readline_support 
```

## $wait\_msg

```
$wait_msg 
```

## $STDERR

```
$STDERR 
```

## $STDOUT

```
$STDOUT 
```

## $args

```
$args 
```

## $background\_colors

```
$background_colors 
```

## $foreground\_colors

```
$foreground_colors 
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
