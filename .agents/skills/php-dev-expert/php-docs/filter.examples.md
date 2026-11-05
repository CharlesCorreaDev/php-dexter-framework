# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filter.examples.php

---

# Examples

## Índice

- [Validação](filter.examples.validation.md)
- [Sanitização](filter.examples.sanitization.md)

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
