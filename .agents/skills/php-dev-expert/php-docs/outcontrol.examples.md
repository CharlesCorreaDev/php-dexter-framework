# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/outcontrol.examples.php

---

# Examples

## Índice

- [Uso básico](outcontrol.examples.basic.md)
- [Uso de re-escrita na saída](outcontrol.examples.rewrite.md)

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
