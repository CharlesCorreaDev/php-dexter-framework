# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/expect.examples.php

---

# Examples

## Índice

- [Exemplos de uso de Expect](expect.examples-usage.md)

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
