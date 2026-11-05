# Coding Standard | OpenCart

> **Fonte / Source:** https://docs.opencart.com/developer-guide/coding-standard

---

For the complete documentation index, see [llms.txt](docs__llms.txt.md). This page is also available as [Markdown](docs__developer-guide__coding-standard.md).

### File types & encoding

All PHP files with the exception of view/template files have the extension .php

All view/template files have the extension .twig

Line feeds are handled automatically by Git, the repo is managed using LF. When cloning all line feeds will be converted automatically to your native environment (CRLF for Windows, LF for Mac/Linux).

### PHP Tags

Short PHP opening tags and ASP tags are not supported. The characters should be lowercase.

`<?php`

All PHP files must include a closing tag for versions before 2.0. PHP files in and after 2.0 will no longer have a closing tag.

Copy

```
?>
```

### Indentation

PHP files must be indented using the TAB character. 4 space tabs are not supported.

HTML in template files (.twig) must be indented using 2 spaces, not 4 spaces or TABS. JavaScript must be indented using the TAB character.

### Spacing

IF, WHILE, FOR etc should have a space before and after the brackets.

**Correct**

**Incorrect**

ELSE etc should have a space after and before the curly braces

**Correct**

**Incorrect**

Type casting does NOT have a space before the variable

**Correct**

**Incorrect**

Setting a variable should always have a space before and after the equals sign

**Correct**

**Incorrect**

### Whitespace

After any code, but before a new line - there should be no white space. The same is true for an empty line.

After the closing PHP tag it is extremely important to remove any white space.

### New Lines

Opening curly braces do not go onto a new line, they will always have a space before and be on the same line.

1 True Brace Style (1TBS) ([WIKI](http://en.wikipedia.org/wiki/Indent_style#Variant:_1TBS))

**Correct**

**Incorrect**

### File naming

All files should be in lower case and words separated by an underscore.

### Class & method naming

Class names and method names should be camel case.

**Correct**

**Incorrect**

A method scope should always be cast.

**Correct**

**Incorrect**

### PHP Function (helpers) naming

Helper function names should be lower case and an underscore used to separate words.

### PHP variable naming

PHP variables should be lower case and an underscore used to separate words.

**Correct**

**Incorrect**

### User defined constants

User defined constants are set as upper case.

**Correct**

**Incorrect**

### PHP constants

These types of constant (true,false,null) are set as lower case

**Correct**

**Incorrect**

### HTML / CSS rules

Class names and id's should be hyphenated and not use an underscore

**Correct**

**Incorrect**

### PHP Coding Standards Fixer

Ensure your code adheres to the project's standards effortlessly by utilizing [PHP Coding Standards Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer). The provided configuration allows for automatic code formatting.

If your IDE doesn't already integrate with php-cs-fixer, run it as a standalone tool:

Use the following command to apply code adjustments and align it with the project's Code Standard:

Integrating php-cs-fixer into your workflow ensures consistent code formatting, streamlining collaboration and maintaining a clean, standardized codebase.

### Static Code Analysis

To preempt common coding mistakes, the code undergoes thorough analysis with the [PHPStan](https://phpstan.org/) code analyzer. If your IDE does not have native integration with PHPStan, you can use it as a standalone tool:

Initiate the following command to analyze your code changes and identify any potential issues:

Leveraging PHPStan enhances code quality by detecting errors and inconsistencies early in the development process. This proactive approach aids in maintaining a robust and error-free codebase.

[PreviousLanguage Editor](docs__design__language-editor.md)[NextDatabase Schema](docs__developer-guide__database-schema.md)

Last updated 7 months ago
