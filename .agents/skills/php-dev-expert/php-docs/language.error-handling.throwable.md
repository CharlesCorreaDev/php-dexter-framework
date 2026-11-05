# Throwable errors

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.error-handling.throwable.php

---

## [Throwable](class.throwable.md) errors

A [Throwable](class.throwable.md) error is an execution event which disrupts
the normal flow of instructions. When a [Throwable](class.throwable.md) error
is `throw`n, it will unwind the call stack
until it is caught by a `catch` block or the global scope is reached.
All `finally` blocks it encounters along the way will be executed.
An uncaught [Throwable](class.throwable.md) error is passed to the
exception handler set with [set\_exception\_handler()](function.set-exception-handler.md),
if one is set; otherwise, the program is terminated with a fatal error.

To throw a [Throwable](class.throwable.md) error from within PHP code,
use the `throw` keyword.

**Dica**

The [Standard PHP Library (SPL)](book.spl.md#intro.spl) provides
various [built-in exceptions](spl.exceptions.md).
It is also possible to create custom exceptions by
[extending the
Exception class](language.error-handling.throwable.md#language.error-handling.throwable.extending).

It is possible to handle a [Throwable](class.throwable.md) error within PHP
by surrounding the code that may throw an error in a `try` block.

**Aviso**

[Throwable](class.throwable.md) objects cannot be cloned.
Attempting to [clone](language.oop5.cloning.md) such an
object throws an [Error](class.error.md) with the following message:
`Trying to clone an uncloneable object of class ClassName`.
This happens even if a subclass declares its own
[\_\_clone()](language.oop5.cloning.md#object.clone) method.
See [Exception::\_\_clone()](exception.clone.md) and
[Error::\_\_clone()](error.clone.md).

### Global exception handler

It's possible to add a handler for any uncaught
[Throwable](class.throwable.md) with
[set\_exception\_handler()](function.set-exception-handler.md).
This is similar to wrapping the entire code in a `try`-`catch` block,
except that execution does not resume afterwards: the script
terminates once the handler returns.

### Extending exceptions

A user-defined exception can be defined by extending the built-in
[Exception](class.exception.md) class.

If a class extends the built-in [Exception](class.exception.md) class and
redefines the [constructor](language.oop5.decon.md),
it is highly recommended that it also call `parent::__construct()`
to ensure all available data has been properly assigned.
The [\_\_toString()](language.oop5.magic.md#object.tostring) method can be overridden
to provide custom output when the object is used as a string.

**Exemplo #1 Extending [Exception](class.exception.md)**

```
<?php
class CustomException extends Exception
{
    // Redefine the constructor so message isn't optional
    public function __construct($message, $code = 0, ?Throwable $previous = null) {
        // some code

        // Ensure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // Custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function customFunction() {
        echo "A custom function for this type of exception\n";
    }
}

try {
    throw new CustomException("Something happened", 5);
} catch (CustomException $e) {
    echo "Caught custom exception\n", $e;
    $e->customFunction();
}
```

O exemplo acima produzirá:

```
Caught custom exception
CustomException: [5]: Something happened
A custom function for this type of exception
```

### [Throwable](class.throwable.md) hierarchy

- [Throwable](class.throwable.md)

  - [Error](class.error.md)

    - [ArithmeticError](class.arithmeticerror.md)

      - [DivisionByZeroError](class.divisionbyzeroerror.md)
    - [AssertionError](class.assertionerror.md)
    - [CompileError](class.compileerror.md)

      - [ParseError](class.parseerror.md)
    - [TypeError](class.typeerror.md)

      - [ArgumentCountError](class.argumentcounterror.md)
    - [ValueError](class.valueerror.md)
    - [UnhandledMatchError](class.unhandledmatcherror.md)
    - [FiberError](class.fibererror.md)
  - [Exception](class.exception.md)

The [Exception](class.exception.md) class has many subclasses,
among them the [SPL exceptions](spl.exceptions.md) and
those defined by extensions.

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
