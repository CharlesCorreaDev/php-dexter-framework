# Error Handling

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.error-handling.php

---

# Error Handling

## Índice

- [Throwable errors](language.error-handling.throwable.md)
- [Diagnostic errors](language.error-handling.diagnostic.md)

Errors are a normal part of the development and life cycle of an application.
As such, PHP provides multiple ways to report and deal with errors.

PHP has two main mechanisms for reporting errors:

- [Throwable](class.throwable.md) errors, which are further split into
  *programming* errors via the [Error](class.error.md)
  class hierarchy and *recoverable* errors via the
  [Exception](class.exception.md) class hierarchy. These errors
  can be thrown with the `throw` keyword and caught with the `catch` keyword.
- Diagnostic errors, which are classified into different
  [severities](errorfunc.constants.md).

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
