# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexml.examples.php

---

# Examples

## Índice

- [Uso Básico de SimpleXML](simplexml.examples-basic.md)
- [Lidando com erros XML](simplexml.examples-errors.md)

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
