# Erros e Exceções de Data/Horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.error.tree.php

---

# Erros e Exceções de Data/Horário

- [DateError](class.dateerror.md) (herda de [Error](class.error.md))

  - [DateObjectError](class.dateobjecterror.md)

    [DateRangeError](class.daterangeerror.md)
- [DateException](class.dateexception.md) (herda de [Exception](class.exception.md))

  - - [DateInvalidOperationException](class.dateinvalidoperationexception.md)
    - [DateInvalidTimezoneException](class.dateinvalidtimezoneexception.md)
    - [DateMalformedIntervalStringException](class.datemalformedintervalstringexception.md)
    - [DateMalformedPeriodStringException](class.datemalformedperiodstringexception.md)
    - [DateMalformedStringException](class.datemalformedstringexception.md)

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
