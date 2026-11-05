# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/v8js.requirements.php

---

## Dependências

Biblioteca e cabeçalhos PHP e V8 instalados nos caminhos corretos.

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
