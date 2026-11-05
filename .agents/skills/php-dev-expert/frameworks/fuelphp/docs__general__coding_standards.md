# Coding Standards - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/coding_standards.html

---

## Coding Standards

These standards for code formatting and documentation must be followed by anyone contributing to Fuel. Any
contributions that do not meet these guidelines will not be accepted.

### File Formatting

##### Closing PHP Tag

Files containing only PHP code should always omit the closing PHP tag (?>). This prevents many of the
elusive white screens of death.

##### Indentation

All indentation should be done using real tabs, NOT spaces.  
But aligning things after the indentation should be done using spaces, NOT tabs.

```
		// indented 2 tabs
		$var       = 'something';  // indented with tabs and aligned value & comments
		$variable  = 'else';       // with those above/below using spaces
```

##### Line Endings

Line endings should be Unix-style LF.

##### File Naming

All file names must be all lower case. No exceptions.

##### Encoding

Files should be saved with UTF-8 encoding and the BOM should not be used.

### Naming Conventions

##### Namespaces

All core classes must be under the Fuel\Core namespace.

```
namespace Fuel\Core;
```

##### Classes

Class names should use underscores to separate words, and each word in the class name should begin with a
capital letter. The use of camelcase is discouraged but cannot be prevented in some cases when putting
the class in a subdirectory makes absolutely no sense. If possible, this should be avoided.

```
namespace Fuel\Core;

class Session
{

}
```

```
namespace Fuel\Core;

class Session_Cookie extends Session_Driver
{

}
```

Every class should be defined into its own file. Any underscores in the class name will be converted to a directory
separator during autoloading, so this must be reflected in the name and location of the class file. For the classes
above, their names wouldresult in the following file path:

```
COREPATH/classes/session.php
COREPATH/classes/session/cookie.php
```

##### Methods

Like class names, method names should use underscores to separate words, not CamelCase. Method names should
also be all lower case. Visibility should always be included (public, protected, private).  
An underscore can be used at the beginning of the name to make it clear the method is protected/private or
to signify it should be considered as such when you need it public.

```
class Session
{

	public static function get_flash($name, $data)
	{
		// Some code here
	}

}
```

```
class View
{

	// Array of global view data
	protected static $_global_data = array();

	protected static function capture($view_filename, array $view_data)
	{
		// Some code here
	}

}
```

##### Variables

Variable names should be concise and contain only lower case letters and underscores. Loop iterators should
be short, preferably a single character.

```
$first_name
$buffer
for ($i = 0; $i < $max; $i++)
```

Except for the PHP global system constant that doesn't have a Fuel wrapper (for example `$_ENV`), global
variables should never been used. If you have a legitemate use for such a constant, please inform the team so a
wrapper can be created to allow consistent and immutable access to that constant.  
Use of the keyword `global` to create or import global variables into a local variable scope is
**explicitly** forbidden!

##### Constants

Constants follow the same guide lines as variables with the exception that constants should be all upper
case.

```
MY_CONSTANT
TEMPLATE_PATH
TEXT_DEFAULT
```

The use of global constants is discouraged and should be kept to an absolute minimum. If you need one, be prepend to
defend your use case before the Fuel team will accept your proposal!. Where possible, use class constants to make
their scope, usage and meaning clear.

### Keywords

Keywords such as `true`, `false`, `null`, `as`, etc should be all lower case, as upper case is reserved for
constants. Same goes for primitive types like `array`, `integer`, `string`.

```
$var = true;
$var = false;
$var = null;
foreach ($array as $key => $value)
public function my_function(array $array)
function my_function($arg = null)
```

### Type casting

The use of type casting is discouraged. PHP is a weakly typed language with at times very vague type conversion rules. They may
cause unintended behaviour, which may introduce very hard to find bugs. Instead, do a content check before you convert to make
sure the variable contains an expected value.

### Control Structures

The structure keywords such as `if`, `for`, `foreach`, `while`, `switch` should be followed by a space as should
parameter/argument lists and values. Braces should be placed on a new line, and `break` should have the same
tab as its case.

```
if ($arg === true)
{
	//do something here
}
elseif ($arg === null)
{
	//do something else here
}
else
{
	//catch all do something here
}

foreach ($array as $key => $value)
{
	//loop here
}

for ($i = 0; $i < $max; $i++)
{
	//loop here
}

while ($i < $max)
{
	//loop here
}

do
{
	//loop here
}
while ($i < $max)

switch ($var)
{
	case 'value1':
		//do something here
	break;
	default :
		//do something here
	break;
}
```

##### Alternative if statements

In some cases, a full `if` statement is a bit too much code for a simple conditional assignment or function
call. In those cases, you can use PHP's execution logic to use a shorter boolean-operator based syntax.
Using `and` means the second part only gets evaluated if the first part were true, using
`or` means the second part only gets executed if the first part were false.  
Don't use this when both `if` and `else` are needed, just in cases like single conditional statements.

```
// instead of if (isset($var)) { Config::set('var', $var); }
isset($var) and Config::set('var', $var);

// instead of if ( ! isset($var)) { $var = Config::get('var'); }
isset($var) or $var = Config::get('var');

// DON'T DO THIS
Uri::segment(3) and $var = Uri::segment(3);
Uri::segment(3) or $var = 'default';

// This is better:
if (Uri::segment(3))
{
	$var = Uri::segment(3);
}
else
{
	$var = 'default';
}

// Or this:
$var = Uri::segment(3) ? Uri::segment(3) : 'default';

// Or even better, this:
$var = Uri::segment(3) ?: 'default';
```

### Comparisons, Logical operators

Comparing function/method returns and variables should be type aware, for example some functions may return
`false`, and when comparing this return the type sensitive operators such as `===` or `!==`. Additionally, use of
`and` or `or` is preferred over `&&` or `||` for readability. In some cases, this cannot be avoided and the use of
`&&` or `||` as it's required may be used. The `!` should have spaces on both sides when used.

```
if ($var == false and $other_var != 'some_value')
if ($var === false or my_function() !== false)
if ( ! $var)
```

##### Class/Interface Declarations

Class/interface declarations have the opening brace on the following line:

```
class Session
{

}
```

In case the class is empty, braces will be on the same line as the definition:

```
class Empty_Class { }
```

##### Function/Method/Closure Declarations

The function/method/closure opening brace must always begin on a new line and have the same indentation as its
structure.

```
class Session
{

	public static function get_flash($name, $data)
	{
		$closure = function($a, $b)
		{
			// Your closure code here
		}
	}

}
```

##### Variables

When initializing variables, one variable should be declared per line. To enhance code readability, these
should each be on a separate line. Align values and comments when appropriate.

```
$var        = ''; // do each on its own line
$other_var  = ''; // do each on its own line
```

##### Brackets and Parenthesis

No space should come before or after the initial bracket/parenthesis. There should not be a space before closing bracket/parenthesis.

```
$array = array(1, 2, 3, 4);
$array['my_index'] = 'something';
for ($i = 0; $i < $max; $i++)
```

##### String quotation

Single quotes are preferred over double quotes. It prevents unwanted or unintended expansion of variables and control characters.

##### Concatenation

String concatenation should not contain spaces around the joined parts.

```
//yes
$string = 'my string '.$var.' the rest of my string';

//no
$string = 'my string ' . $var . ' the rest of my string';
```

##### Operators

```
$var = 'something';
if ($var == 'something') //space before and after logical operator
$var = $some_var + $other_var; //space before and after math operator
$var++; // no space before increment
++$var; //no space after increment
```

##### Array dot-notation

Although strictly speaking it's not a coding standard, it's used a lot within the frameworks classes and this documentation,
and since it's not a common PHP notation, it might confuse people new to the framework.

```
// when you see "always_load.packages = array()", it is shorthand for:
array("always_load" => array("packages" => array(...) ) );
```

This notation is used by the Arr class, but also the Lang, Config and Session classes, to quickly access individual elements from a multi-dimensional array.

```
// when you have an array structure like this
$array = array(
    "always_load" => array(
        "packages" => array(
            "orm",
            "package" => "/my/special/package.php",
        )
     )
);

// then this will return "/my/special/package.php":
$path = Arr::get($array, 'always_load.packages.package');
```
