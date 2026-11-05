# Diagnostic errors

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.error-handling.diagnostic.php

---

## Diagnostic errors

Diagnostic errors, also known as traditional errors, are used to signal a
number of different conditions, and can be displayed and/or logged as required.
By default, PHP will report all diagnostic errors. (Prior to PHP 8.0.0,
**`E_NOTICE`** and **`E_DEPRECATED`**
diagnostics were not reported by default.)

In contrast to [Throwable](class.throwable.md) errors, most diagnostic
errors do *not* disrupt the normal flow of execution.
Fatal diagnostics, such as **`E_ERROR`**, terminate the script.

Which diagnostics are reported and which are ignored is controlled by the
[`error_reporting`](errorfunc.configuration.md#ini.error-reporting)
php.ini directive, or at runtime by calling [error\_reporting()](function.error-reporting.md).
It is strongly recommended that the configuration directive be set,
as some errors can occur before execution of your script begins.

> **Nota**:
>
> In a development environment,
> [`error_reporting`](errorfunc.configuration.md#ini.error-reporting)
> should always be set to **`E_ALL`** so that issues raised
> by PHP are noticed and fixed.
> In production, the level of verbosity can be reduced to
> `E_ALL & ~E_NOTICE & ~E_DEPRECATED`, although in many cases
> **`E_ALL`** is still appropriate, as it may provide early
> warning of potential issues.

What happens to the diagnostics depends on two further php.ini directives.
[`display_errors`](errorfunc.configuration.md#ini.display-errors)
controls whether the diagnostic is shown as part of the script's output.
This should always be disabled in a production environment, as the output can include
confidential information such as database passwords, but is often useful to
enable in development, as it ensures immediate reporting of issues.

In addition to displaying errors, PHP can log diagnostics when the
[`log_errors`](errorfunc.configuration.md#ini.log-errors)
directive is enabled. This will log any diagnostic to the file or syslog
defined by
[`error_log`](errorfunc.configuration.md#ini.error-log).
This can be extremely useful in a production environment, as diagnostics are
logged when they occur, and reports can then be generated from those logs.

Individual diagnostics can be suppressed using the
`@` operator.

**Aviso**

Prior to PHP 8.0.0, it was possible to suppress critical diagnostics that
would terminate the execution of the PHP script.

> **Nota**:
>
> Between PHP versions, diagnostics may be added or removed, have their
> severity changed, or be elevated to [Throwable](class.throwable.md) errors.

### User-defined diagnostic handler

If PHP's default diagnostic handling is inadequate,
it is possible to override the default diagnostic handler with a custom one
which is set using [set\_error\_handler()](function.set-error-handler.md).
Some diagnostics, such as **`E_ERROR`** and
**`E_PARSE`**, cannot be handled this way (see
[set\_error\_handler()](function.set-error-handler.md) for the full list).
The others can be handled in various ways. For example, a custom handler can
show an error page to the user and report the error more directly than a log
would, such as by sending an email.

Another typical usage is to elevate diagnostic errors to exceptions with
[ErrorException](class.errorexception.md).

**Exemplo #1 Elevating diagnostic errors to exceptions**

```
<?php
function exceptions_error_handler($severity, $message, $filename, $lineno) {
    if (error_reporting() & $severity) {
        throw new ErrorException($message, 0, $severity, $filename, $lineno);
    }
}

set_error_handler('exceptions_error_handler');
```

> **Nota**:
>
> It is important to verify that the severity is included in the current
> list of reportable diagnostics; otherwise, the
> `@` operator
> will be broken, as an exception will be thrown for a suppressed diagnostic.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Fatal errors (such as an exceeded maximum execution time) now include a stack trace in their error message. |

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
