# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.examples.php

---

# Examples

## Índice

- [Uso básico para LuaSandbox](luasandbox.examples-basic.md)

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
