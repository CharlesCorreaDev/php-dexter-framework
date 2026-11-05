# Depurando em PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/debugger.php

---

# Depurando em PHP

## Índice

- [Sobre o depurador em PHP](debugger-about.md)

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
