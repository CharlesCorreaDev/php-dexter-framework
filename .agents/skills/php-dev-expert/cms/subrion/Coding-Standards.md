# Coding Standards · intelliants/subrion Wiki · GitHub

> **Fonte / Source:** https://github.com/intelliants/subrion/wiki/Coding-Standards

---

> Please review the coding standards we use while developing Subrion CMS. If you decide to release custom addons for the software we ask you to follow our coding conventions. Thanks.

All the new code must be **E\_STRICT-compatible**. This means that it must not produce any warnings or errors when PHP error reporting level is set to **E\_STRICT**.

## CodeSniffer Standards

Please use the recommended CodeSniffer standards while developing Subrion software and addons. Here is the ruleset.xml file:

```
<?xml version="1.0"?>
<ruleset name="Intelliants">
	<description>The Intelliants coding standards.</description>

	<rule ref="Generic.CodeAnalysis.EmptyStatement"/>
	<rule ref="Generic.CodeAnalysis.ForLoopShouldBeWhileLoop"/>
	<rule ref="Generic.CodeAnalysis.ForLoopWithTestFunctionCall"/>
	<rule ref="Generic.CodeAnalysis.JumbledIncrementer"/>
	<rule ref="Generic.CodeAnalysis.UnconditionalIfStatement"/>
	<rule ref="Generic.CodeAnalysis.UnnecessaryFinalModifier"/>
	<rule ref="Generic.CodeAnalysis.UnusedFunctionParameter"/>
	<rule ref="Generic.CodeAnalysis.UselessOverridingMethod"/>

	<rule ref="Generic.Commenting.Fixme"/>
	<rule ref="Generic.Commenting.Todo"/>
	<rule ref="Generic.Commenting.Todo.CommentFound">
		<message>Please review this TODO comment: %s</message>
		<severity>3</severity>
	</rule>

	<!-- Verifies that inline control statements are not present. -->
	<rule ref="Generic.ControlStructures.InlineControlStructure"/>
	<!-- Verifies that there are no else if statements. Elseif should be used instead. -->
	<rule ref="PSR2.ControlStructures.ElseIfDeclaration"/>

	<!-- The closing ?> tag MUST be omitted from files containing only PHP. -->
	<rule ref="Zend.Files.ClosingTag"/>
	<!-- Ensures the file does not end with a newline character. -->
	<rule ref="Intelliants.Files.EndFileNoNewline"/>
	<!-- All PHP files MUST use the Unix LF (linefeed) line ending. -->
	<rule ref="Generic.Files.LineEndings">
		<properties>
			<property name="eolChar" value="\n"/>
		</properties>
	</rule>
	<!-- Checks that only one class is declared per file. -->
	<rule ref="Generic.Files.EndFileNoNewline"/>

	<!-- There MUST NOT be more than one statement per line. -->
	<rule ref="Generic.Formatting.DisallowMultipleStatements"/>
	<!-- There MUST NOT be a space after function/method cast. -->
	<rule ref="Generic.Formatting.NoSpaceAfterCast"/>

	<!-- Checks that calls to methods and functions are spaced correctly. -->
	<rule ref="Generic.Functions.FunctionCallArgumentSpacing"/>
	<!-- Checks that the opening brace of a function is on the line after the function declaration. -->
	<rule ref="Generic.Functions.OpeningFunctionBraceBsdAllman"/>

	<rule ref="Generic.NamingConventions.ConstructorName"/>
	<!-- Constants must be uppercase. -->
	<rule ref="Generic.NamingConventions.UpperCaseConstantName"/>
	<!-- Subrion classes must begin with 'ia' or 'abstract' prefix. -->
	<rule ref="Intelliants.NamingConventions.ValidClassName"/>

	<rule ref="Squiz.Operators.ValidLogicalOperators"/>

	<rule ref="Generic.PHP.CharacterBeforePHPOpeningTag"/>
	<rule ref="Generic.PHP.DeprecatedFunctions"/>
	<rule ref="Generic.PHP.ForbiddenFunctions"/>
	<rule ref="Generic.PHP.DisallowShortOpenTag"/>
	<rule ref="Generic.PHP.LowerCaseConstant"/>
	<rule ref="Generic.PHP.NoSilencedErrors"/>

	<!-- Visibility MUST be declared on all methods. -->
	<rule ref="Squiz.Scope.MethodScope"/>

	<!-- Concatenation operator should be wrapped with one space. -->
	<rule ref="Intelliants.Strings.ConcatenationSpacing"/>

	<rule ref="Generic.WhiteSpace.DisallowSpaceIndent"/>
	<rule ref="Squiz.WhiteSpace.LanguageConstructSpacing"/>
	<rule ref="Squiz.WhiteSpace.LogicalOperatorSpacing"/>
	<rule ref="Squiz.WhiteSpace.MemberVarSpacing"/>
	<rule ref="Squiz.WhiteSpace.OperatorSpacing"/>
	<rule ref="Squiz.WhiteSpace.ScopeClosingBrace"/>
	<rule ref="Squiz.WhiteSpace.ScopeKeywordSpacing"/>
	<rule ref="Squiz.WhiteSpace.SemicolonSpacing"/>
	<!-- There MUST NOT be trailing whitespace at the end of non-blank lines. -->
	<rule ref="Squiz.WhiteSpace.SuperfluousWhitespace"/>
</ruleset>
```

## CodeSniffer fixer

We highly recommend to fix your files before contributing to the Subrion CMS. Here is the nice tool for you to check your php code before its release:

<http://cs.sensiolabs.org/>

We encourage you to use the following fixers for the processing:

```
--fixers=linefeed,trailing_spaces,php_closing_tag,return,extra_empty_lines,include,elseif
```

## Carriage Return and Tab

Your PHP file lines should be separated by Unix carriage return and therefore should be kept in Unix format. If you have them in Windows format we ask you to convert them in Unix format to avoid `*^M*` at the end of line.

Tab is always a tab, not spaces. 1 tab shift = 4 spaces.

## Comments

Your PHP/JavaScript file comments should be commented as follows. If you comment a couple of lines you are allowed to use `*//*` (single line commenting), if you comment a block of code including control structures please use multi-line commenting approach - `*/* */*`

## PHP Code Demarcation

PHP code must always be delimited by the full-form, standard PHP tags:

```
<?php

// your php code here

?>
```

For files that contain only PHP code, the closing tag `?>` is never permitted. It is not required by PHP, and omitting it prevents the accidental injection of trailing white space into the response.

*Note:* Inclusion of arbitrary binary data as permitted by \_\_HALT\_COMPILER() is prohibited from PHP files in the Subrion CMS project or files derived from them. Use of this feature is only permitted for some installation scripts.

## Strings

### String Literals

When a string is literal (contains no variable substitutions), the apostrophe or "single quote" should always be used to demarcate the string:

```
<?php

$a = 'Example String';

?>
```

### String Literals Containing Apostrophes

When a literal string itself contains apostrophes, it is permitted to demarcate the string with quotation marks or "double quotes". This is especially useful for SQL statements:

```
<?php

$sql = "SELECT `id`, `name` from `people` "
     . "WHERE `name`='Fred' OR `name`='Susan'";

?>
```

This syntax is preferred over escaping apostrophes as it is much easier to read.

### Variable Substitution

Variable substitution is permitted using either of these forms:

```
<?php

$greeting = "Hello $name, welcome back!";

$greeting = "Hello {$name}, welcome back!";

?>
```

For consistency, this form is not permitted:

```
<?php

$greeting = "Hello ${name}, welcome back!";

?>
```

### String Concatenation

Strings must be concatenated using the `.` operator. A space must always be added before and after the `.` operator to improve readability:

```
<?php

$company = 'Zend' . ' ' . 'Technologies';

?>
```

When concatenating strings with the `.` operator, it is encouraged to break the statement into multiple lines to improve readability. In these cases, each successive line should be padded with white space such that the `.`; operator is aligned under the `=` operator:

```
<?php

$sql = "SELECT `id`, `name` FROM `people` "
     . "WHERE `name` = 'Susan' "
     . "ORDER BY `name` ASC ";

?>
```

## Arrays

PSR-2 (by PHP Framework Interoperability Group) does not mention short array syntax. So for PHP >= 5.4 the short array syntax seems to be the de-facto standard. Only use array(), if you want your script to run on PHP <5.4.

Subrion 4.1+ supports PHP 5.4+

### Numerically Indexed Arrays

- Negative numbers are not permitted as indices.
- An indexed array may start with any non-negative number, however all base indices besides 0 are discouraged.

When declaring indexed arrays with the Array function, a trailing space must be added after each comma delimiter to improve readability:

```
<?php

$sampleArray = [1, 2, 3, 'Zend', 'Studio'];

?>
```

It is permitted to declare multi-line indexed arrays using the "array" construct. In this case, each successive line must be padded with spaces such that beginning of each line is aligned:

```
<?php

$sampleArray = array(1, 2, 3, 'Zend', 'Studio',
                     $a, $b, $c,
                     56.44, $d, 500);

?>
```

Alternately, the initial array item may begin on the following line. If so, it should be padded at one indentation level greater than the line containing the array declaration, and all successive lines should have the same indentation; the closing paren should be on a line by itself at the same indentation level as the line containing the array declaration:

```
<?php

$sampleArray = array(
    1, 2, 3, 'Zend', 'Studio',
    $a, $b, $c,
    56.44, $d, 500,
);

?>
```

When using this latter declaration, we encourage using a trailing comma for the last item in the array; this minimizes the impact of adding new items on successive lines, and helps to ensure no parse errors occur due to a missing comma.

### Associative Arrays

When declaring associative arrays with the Array construct, breaking the statement into multiple lines is encouraged. In this case, each successive line must be padded with white space such that both the keys and the values are aligned:

```
<?php

$sampleArray = array('firstKey'  => 'firstValue',
                     'secondKey' => 'secondValue');

?>
```

Alternately, the initial array item may begin on the following line. If so, it should be padded at one indentation level greater than the line containing the array declaration, and all successive lines should have the same indentation; the closing paren should be on a line by itself at the same indentation level as the line containing the array declaration. For readability, the various `=>` assignment operators should be padded such that they align.

```
<?php

$sampleArray = array(
    'firstKey'  => 'firstValue',
    'secondKey' => 'secondValue',
);

?>
```

When using this latter declaration, we encourage using a trailing comma for the last item in the array; this minimizes the impact of adding new items on successive lines, and helps to ensure no parse errors occur due to a missing comma.

## Classes

### Class Declaration

- Classes must be named according to *Subrion's Naming Conventions* naming conventions.
- The brace should always be written on the line underneath the class name.
- Every class must have a documentation block that conforms to the PHPDocumentor standard.
- All code in a class must be indented with one tab.
- Only one class is permitted in each PHP file.
- Placing additional code in class files is permitted but discouraged. In such files, two blank lines must separate the class from any additional PHP code in the class file.

The following is an example of an acceptable class declaration:

```
<?php

/**
* Documentation Block Here
*/
class SampleClass
{
    // all contents of class
    // must be indented four spaces
}

?>
```

### Functions and Methods

*Function and Method Declaration*

- Functions must be named according to *Subrion's Naming Conventions* function naming conventions.
- Methods inside classes must always declare their visibility by using one of the private, protected, or public modifiers.
- As with classes, the brace should always be written on the line underneath the function name. Space between the function name and the opening parenthesis for the arguments is not permitted.
- Functions in the global scope are strongly discouraged.

The following is an example of an acceptable function declaration in a class:

```
<?php

/**
* Documentation Block Here
*/
class Foo
{
    /**
    * Documentation Block Here
    */
    public function bar()
    {
        // all contents of function
        // must be indented four spaces
    }
}

?>
```

In cases where the argument list exceeds the maximum line length, you may introduce line breaks. Additional arguments to the function or method must be indented one additional level beyond the function or method declaration. A line break should then occur before the closing argument paren, which should then be placed on the same line as the opening brace of the function or method with one space separating the two, and at the same indentation level as the function or method declaration. The following is an example of one such situation:

```
<?php

/**
* Documentation Block Here
*/
class Foo
{
    /**
    * Documentation Block Here
    */
    public function bar($arg1, $arg2, $arg3,
        $arg4, $arg5, $arg6)
    {
        // all contents of function
        // must be indented four spaces
    }
}

?>
```

*Note:* Pass-by-reference is the only parameter passing mechanism permitted in a method declaration.

```
<?php

/**
* Documentation Block Here
*/
class Foo
{
    /**
    * Documentation Block Here
    */
    public function bar(&$baz)
    {}
}
?>
```

Call-time pass-by-reference is strictly prohibited.

The return value must not be enclosed in parentheses. This can hinder readability, in additional to breaking code if a method is later changed to return by reference.

```
<?php

/**
* Documentation Block Here
*/
class Foo
{
    /**
    * WRONG
    */
    public function bar()
    {
        return($this->bar);
    }
  
    /**
    * RIGHT
    */
    public function bar()
    {
        return $this->bar;
    }
}

?>
```

*Function and Method Usage*

Function arguments should be separated by a single trailing space after the comma delimiter. The following is an example of an acceptable invocation of a function that takes three arguments:

```
<?php

threeArguments(1, 2, 3);

?>
```

Call-time pass-by-reference is strictly prohibited. See the function declarations section for the proper way to pass function arguments by-reference.

In passing arrays as arguments to a function, the function call may include the "array" hint and may be split into multiple lines to improve readability. In such cases, the normal guidelines for writing arrays still apply:

```
<?php

threeArguments(array(1, 2, 3), 2, 3);

threeArguments(array(1, 2, 3, 'Zend', 'Studio',
                     $a, $b, $c,
                     56.44, $d, 500), 2, 3);

threeArguments(array(
    1, 2, 3, 'Zend', 'Studio',
    $a, $b, $c,
    56.44, $d, 500
), 2, 3);

?>
```

## Control Statements

### If/Else/Elseif

Control statements based on the `if` and `elseif` constructs must have a single space before the opening parenthesis of the conditional and a single space after the closing parenthesis.

Within the conditional statements between the parentheses, operators must be separated by spaces for readability. Inner parentheses are encouraged to improve logical grouping for larger conditional expressions.

The opening brace is written on the new line as the conditional statement. The closing brace is always written on its own line. Any content within the braces must be indented using four spaces.

```
<?php

if ($a != 2)
{
    $a = 2;
}

?>
```

If the conditional statement causes the line length to exceed the maximum line length and has several clauses, you may break the conditional into multiple lines. In such a case, break the line prior to a logic operator, and pad the line such that it aligns under the first character of the conditional clause. The closing parent in the conditional will then be placed on a line with the opening brace, with one space separating the two, at an indentation level equivalent to the opening control statement.

```
<?php

if (($a == $b)
    && ($b == $c)
    || (Foo::CONST == $d))
{
    $a = $d;
}

?>
```

For `if` statements that include `elseif` or `else`, the formatting conventions are similar to the `if` construct. The following examples demonstrate proper formatting for `if` statements with `else` and/or `elseif` constructs:

```
<?php

if ($a != 2)
{
    $a = 2;
}
else
{
    $a = 7;
}

if ($a != 2)
{
    $a = 2;
}
elseif ($a == 3)
{
    $a = 4;
}
else
{
    $a = 7;
}

if (($a == $b)
    && ($b == $c)
    || (Foo::CONST == $d))
{
    $a = $d;
}
elseif (($a != $b)
        || ($b != $c))
{
    $a = $c;
}
else
{
    $a = $b;
}

?>
```

PHP allows statements to be written without braces in some circumstances. This coding standard makes no differentiation- all `if`, `elseif` or `else` statements must use braces.

### Switch

Control statements written with the `switch` statement must have a single space before the opening parenthesis of the conditional statement and after the closing parenthesis.

All content within the `switch` statement must be indented using one tab. Content under each `case` statement must be indented using an additional tab.

```
<?php

switch ($numPeople)
{
    case 1:
        break;
      
    case 2:
        break;

    default:
        break;
}

?>
```

The construct default should never be omitted from a switch statement. It's mandatory to put `break` in `default` case.

*Note:* It is sometimes useful to write a case statement which falls through to the next case by not including a break or return within that case. To distinguish these cases from bugs, any case statement where break or return are omitted should contain a comment indicating that the break was intentionally omitted.
