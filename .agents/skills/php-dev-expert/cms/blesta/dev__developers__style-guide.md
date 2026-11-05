# Style Guide | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/developers/style-guide

---

Version: 6

On this page

This document describes the programming style and best practices used in Blesta. Programmers wishing to certify their plugin, module, or gateway, with the Marketplace must conform to these guidelines regardless of whether or not their source code is made available to end users.

Blesta primarily follows the **PSR-12 coding style guide**, layered with a small set of additional rules from the Slevomat Coding Standard. The repository's `build/phpcs-psr12.xml` ruleset is the source of truth: PSR-12 base, plus rules requiring the null-coalesce (`??`), null-safe (`?->`), and ternary operators where applicable; short array syntax (`[]`); single quotes for strings; short type casts; and references to `\Throwable` rather than `\Exception` in catches. New and modified code is expected to pass `phpcs` against that ruleset.

## PHP File Formatting[â](#php-file-formatting "Direct link to PHP File Formatting")

### Tags[â](#tags "Direct link to Tags")

PHP code must always begin with the long form opening tag. If a file contains only PHP code, the end tag must be omitted from the end of the file.

```
<?php
```

### Indentation[â](#indentation "Direct link to Indentation")

Use **4 spaces** for each level of indentation. Do not use tabs. This matches PSR-12 and the Blesta v6 source tree.

### Line Length[â](#line-length "Direct link to Line Length")

Lines should be designed such that a reader can avoid horizontal scrolling, except in cases where scrolling offers improved readability over word-wrapping. As the resolution and width of monitors has increased the standard width of 80 characters (previously the width of a [punch card](https://en.wikipedia.org/wiki/Computer_programming_in_the_punched_card_era)) no longer holds any relevance. Use your best judgement to determine where lines should wrap. Blesta uses a 120-character limit for \*.php files and best judgement for \*.pdt files.

### EOL[â](#eol "Direct link to EOL")

Every line should terminate with a Unix-style line-feed (LF) character only. That is '\n', also known as hex value 0x0A. Do not use CRLF (Windows systems) or CR (Mac systems). Lines must not have trailing whitespace.

### Character Encoding[â](#character-encoding "Direct link to Character Encoding")

All PHP files should be encoded using UTF-8, with no byte-order-mark (BOM).

## Programming Style[â](#programming-style "Direct link to Programming Style")

### Variables[â](#variables "Direct link to Variables")

Use logical and descriptive names for your variables. Variables used in iterating loops, such as $i, $j, $k, etc., are exceptions to this rule. Variables should contain only lowercase letters, underscores, and numbers, and should start with a letter. Values true, false, and null should always be lowercase.

Incorrect

```
$foo = 365; // not descriptive  
$days_in_non_leap_year = 365; // too long  
$_year_days = 365; // starts with an underscore
```

Correct

```
$year_days = 365;  
$leap_year_days = 366;
```

### Strings[â](#strings "Direct link to Strings")

#### Literals[â](#literals "Direct link to Literals")

Strings should be surrounded with single-quotes ('), except where double-quotes (") are necessary in php.

```
$str = 'This is a long string';  
$chr = 'a';  
$double_str = "Double-quoted string to include a new line\n";
```

#### Concatenation[â](#concatenation "Direct link to Concatenation")

##### Run-on Strings[â](#run-on-strings "Direct link to Run-on Strings")

A string whose length requires it to wrap multiple lines may be concatenated with the concatenation character (.) prepended at the beginning of the next line to be concatenated, indented accordingly. A single string with new lines within the string is also acceptable.

```
$str = 'This is a string that needs to'  
    . ' wrap onto another line.';  
  
$str2 = 'This is a string that  
    spans multiple lines, but  
    the new-line white-space  
    is not relevant';
```

##### Variable Substitution[â](#variable-substitution "Direct link to Variable Substitution")

When a variable needs to be added to a string the string should be broken open and concatenated together to improve readability.

```
$name = 'Hefo Quent Esbit';  
$str = 'Hello ' . $name . '! How are you?';
```

### Arrays[â](#arrays "Direct link to Arrays")

#### Numerically Index Arrays[â](#numerically-index-arrays "Direct link to Numerically Index Arrays")

Each array element should be separated by a comma and a space character. If wrapping an array across multiple lines, subsequent lines should be indented.

Correct

```
$shapes = ['circle', 'square', 'triangle', 'hexagon'];  
$colors = [  
    'red',  
    'pink',  
    'green',  
    'purple'  
];
```

#### Associative Arrays[â](#associative-arrays "Direct link to Associative Arrays")

Associative arrays should have a space before and after the => assignment operator, just like all operators should. Strings should be quoted using single quotes ('). Short arrays can contain all elements on a single line, but it's recommend to set each index on its own line.

Correct

```
$blocks = [  
    'circle' => 'red',  
    'square' => 'pink',  
    'triangle' => 'green',  
    'hexagon' => 'purple'  
];
```

#### Multidimensional Arrays[â](#multidimensional-arrays "Direct link to Multidimensional Arrays")

Each array depth should be indented one level. The closing bracket of the array should be indented such that it aligns with the indent level of its defining index.

Correct

```
$polygons = [  
    'triangles' => [  
        'obtuse',  
        'acute',  
        'right'  
    ],  
    'quadrilaterals' => [  
        'square',  
        'rhombus',  
        'rectangle'  
    ]  
];
```

### Constants[â](#constants "Direct link to Constants")

Constants should always be capitalized.

Incorrect

```
define('myConstant', 'some value');
```

Correct

```
define('MY_CONSTANT', 'some value');
```

### Statements[â](#statements "Direct link to Statements")

Blesta uses PSR-12 control structure styles. The opening brace for a control structure goes on the same line as the keyword, and the closing brace goes on its own line. The `else` and `elseif` keywords go on the same line as the closing brace from the body before. The exception to this rule is do-while.

Incorrect

```
if ($foo > $bar)  
{  
    echo 'foo is greater';  
} else  
{  
    echo 'bar is greater';  
}
```

Correct

```
if ($foo > $bar) {  
    echo 'foo is greater';  
} else {  
    echo 'bar is greater';  
}  
  
$i = 5;  
do {  
    echo $i--;  
} while ($i > 0);
```

### Classes[â](#classes "Direct link to Classes")

#### Declaration[â](#declaration "Direct link to Declaration")

Class names should be CamelCased. Only a single class should appear in a file. Class file names should correlate to the class name, be lowercase, and use underscores to separate words. Class constructors should be named using the \_\_construct() magic method. The opening brace for a class or method goes on its own line.

Incorrect

**my\_class.php**

```
<?php  
// Class name starts with a lower case letter  
class myClass  
{  
    // Constructor should be named __construct()  
    public function myClass()  
    {  
        // Do stuff  
    }  
}
```

Correct

**my\_class.php**

```
<?php  
class MyClass  
{  
    public function __construct()  
    {  
        // Do stuff  
    }  
}
```

#### Member Variables[â](#member-variables "Direct link to Member Variables")

All member variables should be declared at the top of the class, before any methods are declared. Variables must always declare their visibility using public, private, or protected.

Incorrect

```
<?php  
class MyClass  
{  
    // Cannot use var, must use public, private, or protected  
    var $foo;  
  
    public function __construct()  
    {  
        // Do stuff  
    }  
  
    // Must be declared at the top of the class  
    private $bar = 'baz';  
}
```

Correct

```
<?php  
class MyClass  
{  
    public $foo;  
    private $bar = 'baz';  
  
    public function __construct()  
    {  
        // Do stuff  
    }  
}
```

### Methods[â](#methods "Direct link to Methods")

Method names should begin with a lowercase letter and be camelCased. [Type declarations](https://www.php.net/manual/en/language.types.declarations.php) â including scalar parameter types, return types, nullable types, and union types â should be used wherever they meaningfully document intent. Blesta 6.0 requires PHP 8.2+, so the full modern type system is available.

Incorrect

```
public function CalcDistance($time, $velocity)  
{  
    return $time * $velocity;  
}
```

Correct

```
public function calcDistance(float $time, float $velocity): float  
{  
    return $time * $velocity;  
}
```

### Comments[â](#comments "Direct link to Comments")

There are three types of comments that may be used in PHP. They are block comments (/\* \*/), inline comments (//), and shell comments (#).

#### Block Comments[â](#block-comments "Direct link to Block Comments")

Block comments are used for doc commenting and commenting out large sections of code. Blesta uses [PHPDoc](https://www.phpdoc.org/) syntax for all doc comments. Block comments may not be used as a substitute for inline comments.

Incorrect

```
/*  
This is a comment.  
*/  
if ($foo > $bar) {  
    return $bar;  
}
```

Correct

```
/**  
 * This is a doc block comment  
 *  
 * @param string $bar The value  
 */  
function foo($bar)  
{  
  
}
```

#### Inline Comments[â](#inline-comments "Direct link to Inline Comments")

Inline comments should be used to clarify code. You are discouraged from using inline comments at the end of a line as this creates run-on lines and your comment is unlikely to be read.

Incorrect

```
/*  
Calculate the circumference  
*/  
$c = 2 * pi() * $r;
```

Correct, but discouraged

```
$c = 2 * pi() * $r; // Calculate the circumference
```

Correct

```
// Calculate the circumference  
$circumference = 2 * pi() * $r;
```

#### Shell Comments[â](#shell-comments "Direct link to Shell Comments")

These comments should only be used to identify TODO comments.

Incorrect

```
# Calculate the circumference  
$c = 2 * pi() * $r;
```

Correct

```
<?php  
class MyClass  
{  
    #  
    # TODO: Finish this class.  
    #  
}
```
