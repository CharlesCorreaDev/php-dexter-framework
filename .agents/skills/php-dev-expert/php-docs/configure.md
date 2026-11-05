# Opções do script Configure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/configure.php

---

# Opções do script Configure

## Índice

- [Lista de opções do script configure](configure.about.md)

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
