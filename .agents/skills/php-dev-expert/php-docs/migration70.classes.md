# Novas Classes e Interfaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration70.classes.php

---

## Novas Classes e Interfaces

### [Intl](book.intl.md)

- [IntlChar](class.intlchar.md)

### [Reflexão](book.reflection.md)

- [ReflectionGenerator](class.reflectiongenerator.md)

- [ReflectionType](class.reflectiontype.md)

### [Manipulação de Sessão](book.session.md)

- [SessionUpdateTimestampHandlerInterface](class.sessionupdatetimestamphandlerinterface.md)

### Hierarquia de Exceções

- [Throwable](class.throwable.md)
- [Error](class.error.md)
- [TypeError](class.typeerror.md)
- [ParseError](class.parseerror.md)
- [AssertionError](class.assertionerror.md)
- [ArithmeticError](class.arithmeticerror.md)
- [DivisionByZeroError](class.divisionbyzeroerror.md)

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
